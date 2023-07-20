<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Http\Controllers\Controller;

class SuratKeluarController extends Controller
{
    //
    public function index(){
        $data = SuratKeluar::all();
        return view('suratkeluar', compact('data'),
    [
        "title" => "Daftar Surat Keluar"
    ]);
    }

    public function tambahsuratkeluar(){
        return view('keluar');
    }

    public function insertsuratkeluar(Request $request){
        SuratKeluar::create($request->all());
        return redirect()->route('daftar-surat-keluar')->with('success', 'Data Berhasil ditambahkan');
    }

    public function simpan(Request $request){
        $this->validate($request, [
         'no_agenda' => 'unique:tb_suratkeluar',
         'no_surat'=> 'required',
         'jenis_surat' => 'required',
         'asal_surat' => 'required',
         'perihal' => 'required',
         'kka' => 'required',
         'tgl_surat' => 'required',
         'jam_surat' => 'required',
         'disposisi' => 'required',
         'distribusi' => 'required',
         'isi_disposisi' => 'required',
         'keterangan' => 'required',
         'dokumen' => 'mimes:pdf'
        ]);
    $dokumen =  $request->file('dokumen');
    $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('dokumen')->getClientOriginalExtension();
    $dokumen->move('dokumen/', $nama_dokumen);

    $data = new SuratKeluar();
    $data->dokumen = $nama_dokumen;
    }

}
