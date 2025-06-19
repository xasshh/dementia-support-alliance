<?php

use App\Http\Controllers\PaystackController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/pay', [PaystackController::class, 'redirectToGateway'])->name('paystack.pay');
Route::get('/pay/callback', [PaystackController::class, 'handleGatewayCallback'])->name('paystack.callback');
