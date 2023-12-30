<?php

namespace App\Services\app;

use App\Models\app\wallet\walletModel;

class userServices {

    public function createUserWallet($user_id, $user_acc)
    {
        $checkifexit = walletModel::where('user_id', $user_id)->first();
        if($checkifexit)
        {
            return $checkifexit;
        }
        else
        {
            $new_user_wallet = new walletModel();
            $new_user_wallet->user_id = $user_id;
            $new_user_wallet->account_number = $user_acc;
            $new_user_wallet->save();
            return $new_user_wallet;
        }
    }


    public function getUserWallet($user_id)
    {
        return walletModel::where('user_id', $user_id)->first();
    }
}