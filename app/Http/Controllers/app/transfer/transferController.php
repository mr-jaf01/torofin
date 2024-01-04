<?php

namespace App\Http\Controllers\app\transfer;

use App\Http\Controllers\Controller;
use App\Services\app\transfer\transferServices;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



    public function otherBankstransferPage()
    {
        return view('app.transfer.otherbankstransferPage');
    }


}
