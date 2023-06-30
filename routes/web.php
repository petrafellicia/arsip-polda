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
    return view('welcome', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alfrina Gracia",
        "name" => "Petra Fellicia"
    ]);
});

Route::get('/mails', function () {
    // $surat_mails = [
    //     [
    //         "title" => "Daftar Surat",
    //         "slug" => "daftar-surat",
    //         "author" => "POLDA",
    //         "body" => " "
    //     ]
    //     ];
    return view('mails', [
        "title" => "Mails",
        "mails" => Mail::all()
    ]);
});

//halaman surat
Route::get('mails/{slug}', funtion($slug){
    return view('mail', [
        "title" => "Surat".
        "mail" => Mail::find($slug)
    ]);
});

Route::get('/surat-masuk', function () {
    return view('surat-masuk');
});

Route::get('/surat-keluar', function () {
    return view('surat-keluar');
});

Route::get('/login', [LoginController::class, 'index']);
