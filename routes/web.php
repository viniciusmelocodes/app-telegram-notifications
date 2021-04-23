<?php

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/telegram', function () {
    Notification::route('telegram_user_id', '-1001492387352')
        ->route('message', 'Teste')
        ->notify(new TelegramNotification());
});
