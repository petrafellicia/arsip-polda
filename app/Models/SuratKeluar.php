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

    public function pengirims()
    {
        return $this->belongsTo(Pengirim::class, 'pengirim_id', 'id');
    }

    public function penerimas()
    {
        return $this->belongsTo(Penerima::class, 'penerima_id', 'id');
    }


    protected $fillable = [
        'no_agenda',
        'no_surat',
        'jenis_surat',
        'pengirim_id',
        'perihal',
        'kka',
        'dasar_surat',
        'tgl_surat',
        'jam_surat',
        'penerima_id',
        'feedback',
        'file'
    ];
}