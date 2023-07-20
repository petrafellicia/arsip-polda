<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surat_masuks')->delete();

        DB::table('surat_masuks')->insert([
            'id' => '1',
            'nomor_agenda' => '1',
            'nomor_surat' => 'B/22/VI/AUM',
            'jenis_surat' => 'Surat Biasa',
            'asal_surat' => 'Kabid Humas',
            'perihal' => 'Majalah',
            'kka' => 'KEP',
            'tanggal_surat' => '2023-06-09',
            'jam_terima' => '10.00',
            'disposisi_kepada' => 'other',
            'distribusi' => 'mabes POLRI',
            'isi_disposisi' => 'Tinjau',
            'keterangan' => 'mmmmmm',
            'file' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
