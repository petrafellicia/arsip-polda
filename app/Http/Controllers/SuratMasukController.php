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
        return view('suratmasuk', compact('data'),[
            "title" => "Surat Masuk"
        ]);
    }

    public function tambahdata(){
        return view('masuk', [
            "title" => "Input Surat Masuk"
        ]);
    }

    public function insertsurat(Request $request){
        // dd($request->all());
        SuratMasuk::create($request->all());
        return redirect()->route('surat');
    }

}
