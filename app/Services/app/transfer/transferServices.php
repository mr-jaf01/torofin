<?php

namespace App\Services\app\transfer;

use App\Models\app\wallet\walletModel;
use App\Models\User;

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

}