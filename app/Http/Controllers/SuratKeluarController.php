<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
// use Yajra\DataTables\DataTables;

use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class SuratKeluarController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = SuratKeluar::query();
        $data = SuratKeluar::paginate(100);
        // dd($data);
        // $data = SuratKeluar::limit(5);
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

        $data = SuratKeluar::where(function ($query) use ($searchTerm) {
            $query->where('no_surat', 'like', "%$searchTerm%")
                ->orWhere('tgl_surat', 'like', "%$searchTerm%")
                ->orWhere('kka', 'like', "%$searchTerm%")
                ->orWhereHas('pengirims', function ($query) use ($searchTerm) {
                    $query->where('nama_pengirim', 'like', '%' . $searchTerm . '%');
                })
                ->orWhereHas('penerimas', function ($query) use ($searchTerm) {
                    $query->where('nama_penerima', 'like', '%' . $searchTerm . '%');
                })
                ->paginate(100);
        })
            ->get();

        // if ($searchTerm) {
        //     $data = DB::table('surat_keluars')
        //         ->where('no_surat', $searchTerm)
        //         ->orWhere('tgl_surat', $searchTerm)
        //         ->orWhere('kka', $searchTerm)
        //         ->orWhere('pengirim', $searchTerm)
        //         ->orWhere('penerima', $searchTerm)
        //         ->orWhere('id_type', $searchTerm)
        //         ->paginate(5);
        // } else {
        //     $data = DB::table('surat_keluars')->paginate(5);
        // }
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
        $datasurat = SuratType::all();
        return view('keluar', compact('datasurat'));
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
                'id_pengirim' => $request->id_pengirim,
                'perihal' => $request->perihal,
                'kka' => $request->kka,
                'dasar_surat' => $request->dasar_surat,
                'tgl_surat' => $request->tgl_surat,
                'jam_surat' => $request->jam_surat,
                'id_penerima' => $request->id_penerima,
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
        $dataBaru1 = DB::table('surat_keluars')
            ->join('pengirims', 'surat_keluars.id_pengirim', '=', 'pengirims.id')
            ->select('surat_keluars.*', 'pengirims.nama_pengirim as sender_name')
            ->where('surat_keluars.id', $id)
            ->get();

        $dataBaru2 = DB::table('surat_keluars')
            ->join('penerimas', 'surat_keluars.id_penerima', '=', 'penerimas.id')
            ->select('surat_keluars.*', 'penerimas.nama_penerima as receiver_name')
            ->where('surat_keluars.id', $id)
            ->get();

        $datapengirim = Pengirim::all();
        $datapenerima = Penerima::all();
        // dd($dataBaru);
        $data = $dataBaru1[0];
        $data = $dataBaru2[0];
        return view('tampildatakeluar', compact('data', 'datapengirim', 'datapenerima'));

        // $data = SuratKeluar::find($id);
        // $datasurat = SuratType::all();
        // // dd($data);
        // dd($datasurat);
        // return view('tampildatakeluar', compact('data', 'datasurat'));

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
                'id_pengirim' => $request->id_pengirim,
                'perihal' => $request->perihal,
                'kka' => $request->kka,
                'dasar_surat' => $request->dasar_surat,
                'tgl_surat' => $request->tgl_surat,
                'jam_surat' => $request->jam_surat,
                'id_penerima' => $request->id_penerima,
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