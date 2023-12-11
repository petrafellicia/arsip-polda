<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'no_agenda',
        'no_surat',
        'jenis_surat',
        'asal_surat',
        'perihal',
        'kka',
        'dasar_surat',
        'tgl_surat',
        'jam_surat',
        'disposisi',
        'distribusi',
        'isi_disposisi',
        'feedback',
        'file'
    ];
}