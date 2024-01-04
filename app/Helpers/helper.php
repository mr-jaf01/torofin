<?php

use App\Models\app\wallet\walletModel;
use App\Models\User;

function getwalletByUserId($user_id)
{
    return walletModel::where('user_id', $user_id)->first();
}


function getwalletById($wallet_id)
{
    return walletModel::where('id', $wallet_id)->first();
}


function getwalletByAccount($account_number)
{
    return walletModel::where('account_number', $account_number)->first();
}

function getuserById($user_id)
{
    return User::where('id', $user_id)->first();
}


function creditWallet($wallet_id, $amount)
{
    $checkifexit = walletModel::where('id', $wallet_id)->first();
    
    if ($checkifexit) {

        $current_balance = $checkifexit->available_bal;
        $walllet = walletModel::where('id', $wallet_id)->update([
                "available_bal" => $current_balance + $amount,
            ]);

        return $walllet;
    }
}

function debitWallet($wallet_id, $amount)
{
    $checkifexit = walletModel::where('id', $wallet_id)->first();
        
        if ($checkifexit) {

            $current_balance = $checkifexit->available_bal;
            $walllet = walletModel::where('id', $wallet_id)->update([
                    "available_bal" => $current_balance - $amount,
                ]);

            return $walllet;
        }
}