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

Route::get('/', function () {
    return view('depan');
    // return view('home', [
    //     "title" => "Home"
    // ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alfrina - Petra",
    ]);
});

Route::get('/mails', function () {
    // $surat_mails = [
    //     [
    //         "title" => "Daftar Surat Masuk",
    //         "slug" => "daftar-surat-masuk",
    //         "author" => "POLDA",
    //         "body" => "lorem"
    //     ],
    //     [
    //     "title" => "Daftar Surat Keluar",
    //         "slug" => "daftar-surat-keluar",
    //         "author" => "POLDA",
    //         "body" => "lorem2"
    //     ]
    //     ];
    return view('mails', [
        "title" => "Mails",
        "mails" => Mail::all()
    ]);
});

Route::get('/mails', [MailController::class, 'index']);

// halaman surat
Route::get('/mails/{slug}', [MailController::class, 'show']);

// Route::get('/daftar-surat', function () {
//     return view('daftar-surat', [
//     "mails" => "$surat_mails"
//     ]);
// });

// Route::get('/depan', function(){
//     return view('depan');
// });

Route::get('/surat-masuk', function () {
    return view('surat-masuk');
});

Route::get('/surat-keluar', function () {
    return view('surat-keluar');
});

Route::get('/login', [LoginController::class, 'index']);
