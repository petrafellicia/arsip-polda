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


Route::group(['middleware'=>['auth', 'hakakses:admin,operator']], function(){
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

    Route::get('/mails', [MailController::class, 'index']);

    // halaman surat
    Route::get('/mails/{slug}', [MailController::class, 'show']);

    Route::get('/daftar-surat-masuk', [SuratMasukController::class, 'index'])->name('daftar-surat-masuk');
    Route::get('/masuk', [SuratMasukController::class, 'tambahdata']);
    Route::post('/insertsurat', [SuratMasukController::class, 'insertsurat'])->name('insertsurat');
    Route::get('/download{file}', [SuratMasukController::class, 'download']);
    Route::get('/download{file}', [SuratKeluarController::class, 'download']);

    Route::get('/daftar-surat-keluar', [SuratKeluarController::class, 'index'])->name('daftar-surat-keluar');

    Route::get('/keluar', [SuratKeluarController::class, 'tambahsuratkeluar'])->name('tambahsuratkeluar');
 
    Route::post('/insertsuratkeluar', [SuratKeluarController::class, 'insertsuratkeluar'])->name('insertsuratkeluar');
});

Route::group(['middleware'=>['auth', 'hakakses:admin']], function(){    
    Route::get('/tampilkandatamasuk/{id}', [SuratMasukController::class, 'tampilkandatamasuk'])->name('tampilkandatamasuk'); 
    Route::post('/updatedatamasuk/{id}', [SuratMasukController::class, 'updatedatamasuk'])->name('updatedatamasuk'); 

    Route::get('/tampilkandatakeluar/{id}', [SuratKeluarController::class, 'tampilkandatakeluar'])->name('tampilkandatakeluar'); 
    Route::post('/updatedatakeluar/{id}', [SuratKeluarController::class, 'updatedatakeluar'])->name('updatedatakeluar'); 

    Route::get('/deletemasuk/{id}', [SuratMasukController::class, 'deletemasuk'])->name('deletemasuk'); 
    Route::get('/deletekeluar/{id}', [SuratKeluarController::class, 'deletekeluar'])->name('deletekeluar'); 
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alfrina - Petra",
    ]);
});
