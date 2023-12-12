<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table = 'surat_masuks';
    protected $table = 'surat_masuks';

    // public function scopeFilter($query, array $filters){
    //     $query->when($filters['search'] ?? false, function($query, $search){
    //         return $query->where('nomor_surat', 'LIKE', '%' .$search.'%')->paginate(5)
    //                     ->orWhere('kka', 'LIKE', '%' .$search.'%')->paginate(5);
    //     });
    // }

    public function surattypes()
    {
        return $this->belongsTo(SuratType::class, 'jenis_surat', 'nama');
    }

    protected $fillable = [
        'nomor_agenda',
        'nomor_surat',
        'jenis_surat',
        'pengirim',
        'perihal',
        'kka',
        'tanggal_surat',
        'jam_terima',
        'penerima',
        'keterangan',
        'file'
    ];

    // public static function deleteDocument($id){
    //     $file = SuratMasuk::findorFail($id);

    //     dokumennsuratmasuk::delete($file->file_path);

    //     $file->delete();
    // }

}