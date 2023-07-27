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
        $request->validate([
            'nomor_agenda' => 'required',
            'nomor_surat' => 'required',
            'jenis_surat' => 'required',
            'asal_surat' => 'required',
            'perihal' => 'required',
            'kka' => 'required',
            'tanggal_surat' => 'required',
            'jam_terima' => 'required',
            'disposisi_kepada' => 'required',
            'distribusi' => 'required',
            'isi_disposisi' => 'required',
            'keterangan' => 'required',
            'file' => 'mimes:pdf',
        ]);

        $data = SuratMasuk::create($request->all());
        if ($request->hasFile('file')){
            $request->file('file')->move('dokumensurat/', $request->file('file')->getClientOriginalName());
            $data-> file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('daftar-surat-masuk');
       
    }
}
