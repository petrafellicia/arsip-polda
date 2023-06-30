<?php

use App\Models\Mail;
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LoginController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Alfrina Gracia",
        "name" => "Petra Fellicia"
    ]);
});

Route::get('/mails', function () {
    return view('mails');
});

Route::get('/surat-masuk', function () {
    return view('surat-masuk');
});

Route::get('/surat-keluar', function () {
    return view('surat-keluar');
});

Route::get('/login', [LoginController::class, 'index']);
