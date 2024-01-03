<?php

namespace App\Http\Controllers\app\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    public function settingsPage(Request $request)
    {
        return view('app.settings');
    }
}
