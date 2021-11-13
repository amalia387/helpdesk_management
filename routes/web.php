<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

Route::get('/tickett', function () {
    return view('ticket');
});

Route::resource('/ticket', TicketController::class);