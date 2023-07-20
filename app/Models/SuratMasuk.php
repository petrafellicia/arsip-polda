<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $table = 'surat_masuks';

    // protected $fillable = [
    //     'nomor_agenda',
    //     'nomor_surat',
    //     'jenis_surat',
    //     'asal_surat',
    //     'perihal',
    //     'kka',
    //     'tanggal_surat',
    //     'jam_surat',
    //     'disposisi_kepada',
    //     'distribusi',
    //     'isi_disposisi',
    //     'keterangan',
    //     'file'
    // ];

}
