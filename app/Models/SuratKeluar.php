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
        return $this->belongsTo(Pengirim::class, 'id_pengirim', 'id');
    }

    public function penerimas()
    {
        return $this->belongsTo(Penerima::class, 'id_penerima', 'id');
    }


    protected $fillable = [
        'no_agenda',
        'no_surat',
        'jenis_surat',
        'id_pengirim',
        'perihal',
        'kka',
        'dasar_surat',
        'tgl_surat',
        'jam_surat',
        'id_penerima',
        'feedback',
        'file'
    ];
}