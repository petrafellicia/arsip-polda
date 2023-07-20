<?php

use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
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
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/home', function(){
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alfrina - Petra",
    ]);
});

Route::get('/mails', [MailController::class, 'index']);

// halaman surat
Route::get('/mails/{slug}', [MailController::class, 'show']);


Route::get('/daftar-surat-masuk', [SuratMasukController::class, 'index'])->name('daftar-surat-masuk');
Route::get('/masuk', [SuratMasukController::class, 'tambahdata']);
Route::post('/insertsurat', [SuratMasukController::class, 'insertsurat'])->name('insertsurat');


Route::get('/daftar-surat-keluar', [SuratKeluarController::class, 'index'])->name('daftar-surat-keluar');


Route::get('/keluar', [SuratKeluarController::class, 'tambahsuratkeluar'])->name('tambahsuratkeluar');

Route::post('/insertsuratkeluar', [SuratKeluarController::class, 'insertsuratkeluar'])->name('insertsuratkeluar');




