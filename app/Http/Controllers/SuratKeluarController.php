<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class SuratKeluarController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = SuratKeluar::query();
        $data = SuratKeluar::paginate(5);
        return view(
            'suratkeluar',
            compact('data'),
            [
                "title" => "Daftar Surat Keluar"
            ]
        );
    }

    public function cari(Request $request)
    {
        $searchTerm = $request->search;
        $data = [];

        if ($searchTerm) {
            $data = DB::table('surat_keluars')
                ->where('no_surat', $searchTerm)
                ->orWhere('tgl_surat', $searchTerm)
                ->orWhere('kka', $searchTerm)
                ->paginate(5);
        } else {
            $data = DB::table('surat_keluars')->paginate(5);
        }
        $message = $data->isEmpty() ? "File tidak ditemukan" : "";

        return view(
            'suratkeluar',
            compact('data', 'message', 'searchTerm'),
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
        // $disposisi = "";
        // for ($i = 0; $i < sizeof($request->get('disposisi')); $i++) {
        //     if ($request->get('disposisi')[$i] != null) {
        //         $disposisi .= $request->get('disposisi')[$i] . ";";
        //     }
        // }

        $data = SuratKeluar::create(
            [
                'no_agenda' => $request->no_agenda,
                'no_surat' => $request->no_surat,
                'jenis_surat' => $request->jenis_surat,
                'pengirim' => $request->pengirim,
                'perihal' => $request->perihal,
                'kka' => $request->kka,
                'dasar_surat' => $request->dasar_surat,
                'tgl_surat' => $request->tgl_surat,
                'jam_surat' => $request->jam_surat,
                'penerima' => $request->penerima,
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

        Alert::success('Data Berhasil Disimpan', 'Data surat keluar telah berhasil disimpan ke database.')->toHtml();
        return redirect()->route('daftar-surat-keluar')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('dokumensuratkeluar/' . $file));
    }

    public function simpan(Request $request)
    {
    }
    public function tampilkandatakeluar($id)
    {
        $data = SuratKeluar::find($id);
        return view('tampildatakeluar', compact('data'));
    }

    public function updatedatakeluar(Request $request, $id)
    {
        $data = SuratKeluar::find($id);
        // $disposisi = "";
        // for ($i = 0; $i < sizeof($request->get('disposisi')); $i++) {
        //     if ($request->get('disposisi')[$i] != null) {
        //         $disposisi .= $request->get('disposisi')[$i] . ";";
        //     }
        // }

        $data->update(
            [
                'no_agenda' => $request->no_agenda,
                'no_surat' => $request->no_surat,
                'jenis_surat' => $request->jenis_surat,
                'pengirim' => $request->pengirim,
                'perihal' => $request->perihal,
                'kka' => $request->kka,
                'dasar_surat' => $request->dasar_surat,
                'tgl_surat' => $request->tgl_surat,
                'jam_surat' => $request->jam_surat,
                'penerima' => $request->penerima,
                'feedback' => $request->feedback,
            ]
        );

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $file->move('dokumensuratkeluar/', $filename);
            $data->file = $filename;
            $data->save();
        }
        Alert::success('Data Berhasil DiUpdate', 'Data surat keluar telah berhasil diupdate ke database.')->toHtml();
        return redirect('/daftar-surat-keluar');
    }

    public function deletekeluar($id)
    {
        $suratKeluar = SuratKeluar::findOrFail($id);
        if (!$suratKeluar) {
            Alert::error('Data tidak ditemukan', 'Data dengan ID yang diberikan tidak ditemukan.');
        } else {
            $file = SuratKeluar::find($id)->file;
            if (file_exists(public_path('dokumensuratkeluar/' . $file))) {
                unlink(public_path('dokumensuratkeluar/' . $file));
            }
            $suratKeluar->delete();
            Alert::success('Data Berhasil Dihapus', 'Data surat keluar telah berhasil dihapus dari database.')->toHtml();
        }
        return redirect()->back()->with('success', 'Data surat keluar berhasil dihapus.');
    }

    public function destroy($id)
    {
        $hapus = SuratKeluar::findorfail($id);

        $file = public_path('/dokumensuratkeluar') . $hapus->gambar;
        if (file_exists($file)) {
            @unlink($file);
        }

        $hapus->delete();
        return back();

    }

    public function showForm()
    {
        return view('pilih-bulan-keluar');
    }

    public function exportpdfkeluar(Request $request)
    {
        $bulan = $request->input('bulan');
        $data = SuratKeluar::whereMonth('tgl_surat', $bulan)->get();

        $pdf = PDF::loadView('cetaksuratkeluar', ['data' => $data, 'bulan' => $bulan]);

        return $pdf->download('suratkeluar' . $bulan . '.pdf');
    }
}