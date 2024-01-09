<?php

namespace App\Http\Controllers\app\transfer;

use App\Http\Controllers\Controller;
use App\Services\app\transfer\transferServices;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class transferController extends Controller
{
    public function transferPage()
    {
        return view('app.transfer.transfer');
    }

    public function localtransferPage(Request $request)
    {   
        return view('app.transfer.localtransferPage');
    }

    public function localtransferSendMoneyFunc(Request $request, transferServices $transferServices)
    {   
        try {

            $request->validate([
                'sender' => ['required'],
                'receiver' => ['required'],
                'amount' => ['required'],
            ]);

            try {
        
                $sender = $request->sender;
                $receiver = $request->receiver;
                $amount = $request->amount;
    
                $status = $transferServices->sendMoney($sender, $receiver, $amount);
                $status = urlencode($status);
                return redirect('/app/transfer/local/account/sendMoney/success/?status='.$status);
    
            } catch (\Throwable $th) {
        
                    $message = [
                        "status" => 'failed',
                        "message" => "Opss! Can not Complete your Transaction"
                    ];
                    $status = urlencode(json_encode($message));
                    return redirect('/app/transaction/status/?status='.$status);
        
            }
            

        } catch (ValidationException $e) {

            $recipient = getwalletByUserId($request->receiver)->account_number;
            return redirect('/app/transfer/local/account?recipient='.$recipient.'#sendMoneyModal')->withErrors($e->validator->errors());
        }
       
    }


    public function transferSuccess(Request $request)
    {
        $message = urldecode($request->status);

        $message = json_decode($message);
        
        if($message->status === 'success')
        {   
            $status = $message->message;
            return view('app.successanderror.success', compact('status'));
        }
        else
        {
            $status = $message->message;
            return view('app.successanderror.error', compact('status'));
        }
        
    }



    public function otherBankstransferPage(Request $request)
    {

        $cacheKey = 'banks_data';

        $banks = Cache::remember($cacheKey, now()->addMinutes(60), function () {
    
            $response = Http::withHeaders([
                "Username" => env('USER_EMAIL'),
                'Password' => env('USER_PASS')
            ])->get(env('BASE_URL').'/api/service-variations?serviceID=bank-deposit');


            if ($response->successful()) {
                return $response['content']['varations'];
               
            }

           return [];

        });

        return view('app.transfer.otherbankstransferPage', compact('banks'));
        
    }


    private function handleVerificationResult($result, $request)
    {
        if (isset($result['content']['error'])) {
            return redirect('/app/transfer/other/banks?message=Please Check your Account Number or Bank and Try Again#sendMoneyModalBank');
        } else {
            $recipient = [
                "serviceID" => "bank-deposit",
                "bank" => $request->bank,
                "account_number" => $request->recipient,
                "account_name" => $result['content']['account_name'],
            ];
            $recipient = json_encode($recipient);
            $recipient = urlencode($recipient);
            return redirect('/app/transfer/other/banks?recipient='.$recipient.'#sendMoneyModalBank');
        }
    }


    public function verifyBankAccountFunc(Request $request)
    {
        try {
            $request->validate([
                'recipient' => ['required', 'min:10', 'max:10'],
                'bank' => ['required']
            ]);
    
            $cacheKey = 'verify_bank_' . $request->recipient . '_' . $request->bank;
            
            // Attempt to retrieve the cached result
            $cachedResult = Cache::get($cacheKey);
    
            if ($cachedResult) {
                return $this->handleVerificationResult($cachedResult, $request);
            }
    
            try {
                $response = Http::withHeaders([
                    "Username" => env('USER_EMAIL'),
                    'Password' => env('USER_PASS'),
                    "api-key" => env('LIVE_API_KEY'),
                    'secret-key' => env('LIVE_SECRET_KEY')
                ])->post(env('LIVE_BASE_URL').'/api/merchant-verify', [
                    "serviceID" => "bank-deposit",
                    "billersCode" => $request->recipient,
                    "type" => $request->bank,
                ]);
    
                $result = $response->json();
    
                // Cache the result for future use
                Cache::put($cacheKey, $result, now()->addHours(1));
    
                return $this->handleVerificationResult($result, $request);
    
            } catch (\Throwable $th) {
                $message = [
                    "status" => 'failed',
                    "message" => "Oops! System Down!"
                ];
                $status = urlencode(json_encode($message));
                return redirect('/app/transaction/status/?status=' . $status);
            }
    
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors());
        }
    }


    public function sendMoneytoBankFunc(Request $request, transferServices $transferServices)
    {
        try {
            
            $request->validate([
                'sender' => ['required'],
                'bank' => ['required'],
                'account_number' => ['required'],
                'amount' => ['required'],
            ]);

            try {
                
                $status = $transferServices->sendMoneytoBank($request->sender, $request->bank, 
                $request->account_number, $request->amount);

                //return $status;
                $status = urlencode($status);
                return redirect('/app/transaction/status/?status='.$status);

            } catch (\Throwable $th) {

                $message = [
                    "status" => 'failed',
                    "message" => "Opss! System Down!"
                ];
                $status = urlencode(json_encode($message));
                return redirect('/app/transaction/status/?status='.$status);
            }

        } catch (ValidationException $e) {

            return redirect('/app/transfer/other/banks#sendMoneyModalBank')->withErrors($e->validator->errors());
        
        }
    }

}
