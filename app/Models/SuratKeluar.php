<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model{
    use HasFactory;
<<<<<<< Updated upstream
=======

   // $->notify(new DataBerhasilDieksekusi());

>>>>>>> Stashed changes
    protected $guarded = [];

    public function surattypes()
    {
        return $this->belongsTo(SuratType::class, 'jenis_surat', 'nama');
    }
    protected $fillable = [
        'no_agenda',
        'no_surat',
        'jenis_surat',
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