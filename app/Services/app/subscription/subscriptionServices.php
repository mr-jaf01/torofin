<?php

namespace App\Services\app\subscription;

use App\Models\User;
use App\Services\app\userServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class subscriptionServices {

    public function airtimePurchase($sender_id, $network_type, $phone, $amount)
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

                    $userServices->debitWallet($senderWallet->id, $amount);
                     
                    $response = Http::withHeaders([

                        "api-key" => env('LIVE_API_KEY'),
                        'secret-key' => env('LIVE_SECRET_KEY')
    
                    ])->post(env('LIVE_BASE_URL').'/api/pay', [
    
                        "request_id" => $formattedtime,
                        "serviceID" => $network_type,
                        "amount" => $amount,
                        "phone" => $phone
                    ]);
    
                    if ($response['response_description'] === "TRANSACTION SUCCESSFUL") 
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

                        $userServices->creditWallet($senderWallet->id, $amount);
                        return json_encode($message);
                        
                    }

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

    public function dataPurchase($sender_id, $network_type, $phone,  $amount, $plan)
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

                    $userServices->debitWallet($senderWallet->id, $amount);
                     
                    $response = Http::withHeaders([

                        "Token" => env('LIVE_AREWA_GLOBAL_API')
    
                    ])->post(env('LIVE_AREWA_GLOBAL_BASE_URL').'/api/data/', [
    
                        "phone" => $phone,
                        "plan" => "113",
                        "network" => $network_type,
                        "ported_number" => "false"
                    ]);
                    


                    if ($response['status'] === "success" && $response['Status'] === 'successful') 
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

                        $userServices->creditWallet($senderWallet->id, $amount);
                        return json_encode($message);
                        
                    }

                    
                    
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