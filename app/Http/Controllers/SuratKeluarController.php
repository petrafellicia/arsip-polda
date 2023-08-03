<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Http\Controllers\Controller;

class SuratKeluarController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = SuratKeluar::where('no_surat', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = SuratKeluar::paginate(5);
        }
        return view(
            'suratkeluar',
            compact('data'),
            [
                "title" => "Daftar Surat Keluar"
            ]
        );
    }

    public function tambahsuratkeluar()
    {
        return view('keluar');
    }

    public function insertsuratkeluar(Request $request)
    {
        // dd($request->all());
        // Hapus field "options" dari data request
        // $requestData = $request->except('options');

        // Simpan data tunggal ke model SuratKeluar
        // $data = SuratKeluar::create($requestData);

        // Lakukan operasi untuk file jika ada
        // if ($request->hasFile('file')) {
        //     $request->file('file')->move('dokumensuratkeluar/', $request->file('file')->getClientOriginalName());
        //     $data->file = $request->file('file')->getClientOriginalName();
        //     $data->save();
        // }

        $disposisi = "";
        for ($i = 0; $i < sizeof($request->get('disposisi')); $i++) {
            if ($request->get('disposisi')[$i] != null) {
                $disposisi .= $request->get('disposisi')[$i] . ";";
            }
        }

        $data = SuratKeluar::create(
            [
                'no_agenda' => $request->no_agenda,
                'no_surat' => $request->no_surat,
                'jenis_surat' => $request->jenis_surat,
                'asal_surat' => $request->asal_surat,
                'perihal' => $request->perihal,
                'kka' => $request->kka,
                'dasar_surat' => $request->dasar_surat,
                'tgl_surat' => $request->tgl_surat,
                'jam_surat' => $request->jam_surat,
                'disposisi' => $disposisi,
                'distribusi' => $request->distribusi,
                'isi_disposisi' => $request->isi_disposisi,
                'feedback' => $request->feedback,
            ]
        );

        // $data = SuratKeluar::create($request->all());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('dokumensuratkeluar/', $filename);
            $data->file = $filename;
            $data->save();
        }

        return redirect()->route('daftar-surat-keluar')->with('success', 'Data Berhasil di Tambahkan');

        // return redirect()->route('daftar-surat-keluar')->with('success', 'Data Berhasil di Tambahkan');
    }

    // public function processFormKeluar(Request $request)
    // {
    //     $selectedOptions = $request->input('options', []);

    //     // Cek apakah "other" dicentang, jika ya, maka ambil nilainya dari input teks
    //     if (in_array('other', $selectedOptions) && $request->has('other_text')) {
    //         $otherOptionValue = $request->input('other_text');

    //         // Lakukan operasi atau simpan nilai "other" sesuai kebutuhan Anda
    //     }

    //     // Lakukan operasi atau simpan nilai opsi lain sesuai kebutuhan Anda

    //     // Redirect kembali ke halaman form dengan pesan sukses
    //     return redirect()->route('showFormKeluar')->with('success', 'Form berhasil dikirim');
    // }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('dokumensuratkeluar/' . $file));
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'no_agenda' => 'unique:tb_suratkeluar',
            'no_surat' => 'required',
            'jenis_surat' => 'required',
            'asal_surat' => 'required',
            'perihal' => 'required',
            'kka' => 'required',
            'dasar_surat' => 'required',
            'tgl_surat' => 'required',
            'jam_surat' => 'required',
            'disposisi' => 'required',
            'distribusi' => 'required',
            'isi_disposisi' => 'required',
            'feedback' => 'required',
            'dokumen' => 'mimes:pdf'
        ]);
        // $dokumen =  $request->file('dokumen');
        // $nama_dokumen = 'FT'.date('Ymdhis').'.'.$request->file('dokumen')->getClientOriginalExtension();
        // $dokumen->move('dokumen/', $nama_dokumen);

        // $data = new SuratKeluar();
        // $data->dokumen = $nama_dokumen;
    }
    public function tampilkandatakeluar($id)
    {
        $data = SuratKeluar::find($id);
        return view('tampildatakeluar', compact('data'));
    }

    public function updatedatakeluar(Request $request, $id)
    {
        $data = SuratKeluar::find($id);
        if ($request->hasFile('file')) {
            $request->file('file')->move('dokumensuratkeluar/', $request->file('file')->getClientOriginalName());
            $data->file = $request->file('file')->getClientOriginalName();
            $data->save();
        }
        //$data->update($request->all());
        return redirect()->route('daftar-surat-keluar')->with('success', 'Data Berhasil di Update');
    }

    public function deletekeluar($id)
    {
        $data = SuratKeluar::find($id);
        $data->delete();
        return redirect()->route('daftar-surat-keluar')->with('success', 'Data Berhasil di Hapus');
    }

}