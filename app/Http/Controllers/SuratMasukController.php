<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuratMasukController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
                $data = SuratMasuk::where('nomor_surat', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }
            else{
                $data = SuratMasuk::paginate(5);
            }
            return view('suratmasuk', compact('data'),
        [
            "title" => "Daftar Surat Masuk"
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

    public function deletemasuk($id){
        $data = SuratMasuk::find($id);
        $data->delete();
        return redirect()->route('daftar-surat-masuk')->with('success', 'Data Berhasil di Hapus');
    }
}
