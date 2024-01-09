<?php

namespace App\Services\app\transfer;

use App\Models\app\wallet\walletModel;
use App\Models\User;
use App\Services\app\userServices;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class transferServices {

    public function sendMoney($sender_id, $reciever_id, $amount)
    {
        $check_sender = User::where('id', $sender_id)->first();
        $check_receiver = User::where('id', $reciever_id)->first();

        $senderWallet = getwalletByUserId($sender_id);
        $recieverWallet = getwalletByUserId($reciever_id);
        
        if ($check_sender) {

            if($check_receiver)
            {

              if($senderWallet->available_bal >= $amount)
              {

                if ($amount >= 50) {

                    walletModel::where('id', $senderWallet->id)->update([
                        "available_bal" => $senderWallet->available_bal - $amount,
                    ]);
    
                    walletModel::where('id', $recieverWallet->id)->update([
                        'available_bal' => $recieverWallet->available_bal + $amount,
                    ]);
                    
                    
                    $message = [
                        "status" => 'success',
                        'message' => 'Transfer Successfully'
                    ];

                    return json_encode($message);

                }
                else
                {   
                    $message = [
                        "status" => 'failed',
                        'message' => 'Your Amount Must be atleats 50'
                    ];

                    return json_encode($message);
                }

               
              }
              else
              {

                $message = [
                    "status" => 'failed',
                    'message' => 'Insufficient Fund'
                ];
                
                return json_encode($message);
              }

            }
            else
            {
                $message = [
                    "status" => 'failed',
                    'message' => 'Account Not Found'
                ];
                
                return json_encode($message);
                
            }
            
        }
        else
        {
            $message = [
                "status" => 'failed',
                'message' => 'Sender Not Found'
            ];
            
            return json_encode($message);
            
        }
    }


    private function QueryTransactionStatus($senderwallet_id, $amount, $transaction_request_id)
    {

        $userServices = new userServices();

        $response = Http::withHeaders([

            "Username" => env('USER_EMAIL'),
            'Password' => env('USER_PASS'),
            "api-key" => env('API_KEY'),
            'secret-key' => env('SECRET_KEY')

        ])->post(env('BASE_URL').'/api/requery', [
            "request_id" => $transaction_request_id,
        ]);

        //return $response;

        if ($response['content']['transactions']['status'] === "pending") 
        {
            $message = [
                "status" => 'success',
                'message' => 'Transaction Successful'
            ];

            return json_encode($message);
        }
        else
        {
            $message = [
                "status" => 'failed',
                'message' => 'Transaction Failed'
            ];

            //$userServices->creditWallet($senderwallet_id, $amount);
            return json_encode($message);    
        }
    }


    public function sendMoneytoBank($sender_id, $bank, $account_number, $amount)
    {
        $userServices = new userServices();
        $check_sender = User::where('id', $sender_id)->first();
        $senderWallet = getwalletByUserId($check_sender->id);

        $now = now()->setTimezone("Africa/Lagos");
        $formattedtime = $now->format('YmdHi').Str::random(5).'torofin';
        
        if ($check_sender) {

              if($senderWallet->available_bal >= $amount)
              {

                if ($amount >= 50) {

                   // $userServices->debitWallet($senderWallet->id, $amount);
                     
                    $response = Http::withHeaders([

                        "Username" => env('USER_EMAIL'),
                        'Password' => env('USER_PASS'),
                        "api-key" => env('API_KEY'),
                        'secret-key' => env('SECRET_KEY')
    
                    ])->post(env('BASE_URL').'/api/pay', [
    
                        "request_id" => $formattedtime,
                        "serviceID" => "bank-deposit",
                        "variation_code" => $bank,
                        "billersCode" => $account_number,
                        "amount" => $amount,
                        "phone" => $account_number
                    ]);

                    //sleep(30);
                    return $this->QueryTransactionStatus($senderWallet->id, $amount, $response['requestId']);
                }
                else
                {   
                    $message = [
                        "status" => 'failed',
                        'message' => 'Your Amount Must be atleats 50'
                    ];

                    return json_encode($message);
                }

               
              }
              else
              {

                $message = [
                    "status" => 'failed',
                    'message' => 'Insufficient Fund'
                ];
                
                return json_encode($message);
              }
            
        }
        else
        {
            $message = [
                "status" => 'failed',
                'message' => 'Sender Not Found'
            ];
            
            return json_encode($message);
            
        }
    }


    
}