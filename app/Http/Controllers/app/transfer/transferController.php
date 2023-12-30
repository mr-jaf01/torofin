<?php

namespace App\Http\Controllers\app\transfer;

use App\Http\Controllers\Controller;
use App\Services\app\transfer\transferServices;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class transferController extends Controller
{
    public function transferPage()
    {
        return view('app.transfer.transfer');
    }

    public function localtransferPage()
    {
        return view('app.transfer.localtransferPage');
    }

    public function localtransferSendMoneyFunc(Request $request, transferServices $transferServices)
    {   
        $sender = $request->sender;
        $receiver = $request->receiver;
        $amount = $request->amount;

        $status = $transferServices->sendMoney($sender, $receiver, $amount);
        $status = urlencode($status);
        return redirect('/app/transfer/local/account/sendMoney/success/?status='.$status);
    }


    public function transferSuccess(Request $request)
    {
        $message = urldecode($request->status);

        $message = json_decode($message);
        
        if($message->status === 'success')
        {   
            $status = $message->message;
            return view('app.transfer.success', compact('status'));
        }
        else
        {
            $status = $message->message;
            return view('app.transfer.error', compact('status'));
        }
        
    }

    // public function transferFailed(Request $request)
    // {
    //     $status = $request->status;
    //     return view('app.transfer.error', compact('status'));
    // }


    public function otherBankstransferPage()
    {
        return view('app.transfer.otherbankstransferPage');
    }


}
