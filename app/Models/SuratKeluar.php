<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model{
    use HasFactory;
    protected $guarded = [];

    public function surattypes()
    {
        return $this->belongsTo(SuratType::class, 'id_type', 'id');
    }
    protected $fillable = [
        'no_agenda',
        'no_surat',
        'id_type',
        'pengirim',
        'perihal',
        'kka',
        'dasar_surat',
        'tgl_surat',
        'jam_surat',
        'penerima',
        'feedback',
        'file'
    ];
}