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