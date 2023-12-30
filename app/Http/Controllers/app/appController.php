<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Services\app\userServices;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class appController extends Controller
{
    public function Home(userServices $userServices) : View
    {
        $wallet = $userServices->getUserWallet(Auth::user()->id);
        return view('app.home', compact('wallet'));
    }

    public function Rewards() : View
    {
        return view('app.rewards');
    }

    public function Cards() : View
    {
        return view('app.cards');
    }

    public function Me() : View
    {
        return view('app.me');
    }

    public function Profile(userServices $userServices) : View
    {
        $wallet = $userServices->getUserWallet(Auth::user()->id);
        return view('app.profile', compact('wallet'));
    }
}
