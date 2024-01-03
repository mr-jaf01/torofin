<?php

namespace App\Services\app\subscription;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class subscriptionServices {

    public function airtimePurchase($sender_id, $network_type, $phone, $amount)
    {
        $check_sender = User::where('id', $sender_id)->first();
        $senderWallet = getwalletByUserId($check_sender->id);

        $now = now()->setTimezone("Africa/Lagos");
        $formattedtime = $now->format('YmdHi').Str::random(5).'torofin';
        
        if ($check_sender) {

              if($senderWallet->available_bal >= $amount)
              {

                if ($amount >= 50) {

                    $response = Http::withHeaders([

                        "api-key" => env('API_KEY'),
                        'secret-key' => env('SECRET_KEY')
    
                    ])->post(env('BASE_URL').'/api/pay', [
    
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
        $check_sender = User::where('id', $sender_id)->first();
        $senderWallet = getwalletByUserId($check_sender->id);
        
        if ($check_sender) {

              if($senderWallet->available_bal >= $amount)
              {

                if ($amount >= 50) {

                    // API REQUEST TO Buy data OR OTHER BUSINESS LOGIC

                    
                    
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