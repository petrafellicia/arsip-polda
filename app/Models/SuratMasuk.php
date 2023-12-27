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
        'nomor_agenda',
        'nomor_surat',
        'jenis_surat',
        'pengirim_id',
        'perihal',
        'kka',
        'tanggal_surat',
        'jam_terima',
        'disposisi_kepada',
        'penerima_id',
        'isi_disposisi',
        'keterangan',
        'file'
    ];

    // public static function deleteDocument($id){
    //     $file = SuratMasuk::findorFail($id);

    //     dokumennsuratmasuk::delete($file->file_path);

    //     $file->delete();
    // }

}