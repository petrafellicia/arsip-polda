<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluars';

    protected $fillable = [
        'no_agenda',
        'no_surat',
        'jenis_surat',
        'asal_surat',
        'perihal',
        'kka',
        'tgl_surat',
        'jam_surat',
        'disposisi',
        'distribusi',
        'isi_disposisi',
        'keterangan',
    ];

}
