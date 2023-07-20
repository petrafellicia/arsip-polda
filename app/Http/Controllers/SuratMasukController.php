<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuratMasukController extends Controller
{
    public function index(){
        $data = SuratMasuk::all();
        return view('suratmasuk', compact('data'));
    }

    public function show($slug){
        return view('masuk', [
            "title" => "Surat",
            "mail" => Mail::find($slug)
        ]);
    }
}
