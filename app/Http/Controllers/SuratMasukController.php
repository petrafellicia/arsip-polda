<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
                $data = SuratMasuk::where('nomor_surat', 'LIKE', '%' .$request->search.'%')->paginate(5);
                                    // ->orWhere('kka', 'LIKE', '%' .$request->search.'%')->paginate(5);
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
            $request->file('file')->move('dokumensuratmasuk/', $request->file('file')->getClientOriginalName());
            $data-> file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('daftar-surat-masuk')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function download(Request $request, $file){
        return response()->download(public_path('dokumensuratmasuk/'.$file));
    }

    public function tampilkandatamasuk($id){
        $data = SuratMasuk::find($id);
        return view('tampildatamasuk', compact('data'));
    }

    public function updatedatamasuk(Request $request, $id){
        $data = SuratMasuk::find($id);
        if ($request->hasFile('file')){
            $request->file('file')->move('dokumensuratmasuk/', $request->file('file')->getClientOriginalName());
            $data-> file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
       // $data->update($request->all());
        return redirect()->route('daftar-surat-masuk')->with('success', 'Data Berhasil di Update');
    }

    public function deletemasuk($id){
        $data = SuratMasuk::find($id);
        $data->delete();
        return redirect()->route('daftar-surat-masuk')->with('success', 'Data Berhasil di Hapus');
    } 
    
}

