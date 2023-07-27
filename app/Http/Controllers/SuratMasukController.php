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
        return redirect()->route('daftar-surat-masuk')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function tampilkandatamasuk($id){
        $data = SuratMasuk::find($id);
        return view('tampildatamasuk', compact('data'));
    }

    public function updatedatamasuk(Request $request, $id){
        $data = SuratMasuk::find($id);
        $data->update($request->all());
        return redirect()->route('daftar-surat-masuk')->with('success', 'Data Berhasil di Update');
    }
}
