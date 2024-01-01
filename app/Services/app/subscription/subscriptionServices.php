<?php

namespace App\Services\app\subscription;

use App\Models\User;

class subscriptionServices {

    public function airtimePurchase($sender_id, $network_type, $phone, $amount)
    {
        $check_sender = User::where('id', $sender_id)->first();
        $senderWallet = getwalletByUserId($check_sender->id);
        
        if ($check_sender) {

              if($senderWallet->available_bal >= $amount)
              {

                if ($amount >= 50) {

                    // API REQUEST TO RECHARGE AIRTIME OR OTHER BUSINESS LOGIC

                    
                    
                    $message = [
                        "status" => 'success',
                        'message' => 'Recharged Successfully'
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
                        'message' => 'Data Subscription Successfully'
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