<?php

use App\Http\Controllers\app\appController;
use App\Http\Controllers\app\transfer\transferController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web App Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('auth')->group(function () {

    Route::prefix('app')->group(function(){

        Route::controller(appController::class)->group(function(){

            Route::get('/home', 'Home')->name('app.home');
            Route::get('/rewards', 'Rewards')->name('app.rewards');
            Route::get('/cards', 'Cards')->name('app.cards');
            Route::get('/me', 'Me')->name('app.me');
            Route::get('/profile', 'Profile')->name('app.profile');

        });


        Route::controller(transferController::class)->group(function(){

            Route::get('/transfer', 'transferPage')->name('app.transfer.page');
           
           
            //Local Transfer Routes
            Route::get('/transfer/local/account', 'localtransferPage')->name('app.transfer.local.page');
            Route::post('/transfer/local/account/sendMoney', 'localtransferSendMoneyFunc')->name('app.transfer.local.func');
            Route::get('/transfer/local/account/sendMoney/success', 'transferSuccess')->name('app.transfer.local.success');



            //Other Banks Transfer Route
            Route::get('/transfer/other/banks', 'otherBankstransferPage')->name('app.transfer.other.banks.page');


            
        });

    });

});


