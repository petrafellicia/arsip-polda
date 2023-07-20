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
}
