<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ClientController;

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
    return view('landing');
});

Route::get('/admin', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::resource('/ticket', TicketController::class);
Route::resource('/client', ClientController::class);

Route::get('/clientt', function () {
    return view('client');
});
