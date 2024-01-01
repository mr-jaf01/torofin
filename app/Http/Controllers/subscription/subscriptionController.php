<?php

namespace App\Http\Controllers\subscription;

use App\Http\Controllers\Controller;
use App\Services\app\subscription\subscriptionServices;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class subscriptionController extends Controller
{
    public function airtimePurchase(Request $request, subscriptionServices $subscriptionServices)
    {
        try {

            $request->validate([
                'mobileno' => ['required', 'string', 'min:11', 'max:11'],
                'amount' => ['required'],
                'network' => ['required'],
            ]);

            try {
                
                $status = $subscriptionServices
                ->airtimePurchase($request->sender_id, $request->network, $request->mobileno, $request->amount);
                
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

            return redirect('/app/home#airtimeModal')->withErrors($e->validator->errors());
        }

        
    }

    public function dataPurchase(Request $request, subscriptionServices $subscriptionServices)
    {
        try {

            $request->validate([
                'mobileno' => ['required', 'string', 'min:11', 'max:11'],
                'amount' => ['required'],
                'network' => ['required'],
                'plan' => ['required']
            ]);

            try {
                
                $status = $subscriptionServices
                ->dataPurchase($request->sender_id, $request->network, $request->mobileno, $request->amount, $request->plan);
                
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

            return redirect('/app/home#dataModal')->withErrors($e->validator->errors());
        }
    }
}
