<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class SuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('surat_keluars')->delete();

        DB::table('surat_keluars')->insert([
            'no_agenda' => '1',
            'no_surat' => 'B/22/VI/AUM',
            'jenis_surat' => 'Surat Biasa',
            'asal_surat'=> 'Kabid Humas',
            'perihal' => 'News',
            'kka' => 'OPS',
            'tgl_surat' => '2023-06-09',
            'jam_surat' => '10.00 WIB',
            'disposisi' => 'Ksbd Tekkom',
            'distribusi' => 'Kapolda DIY',
            'isi_disposisi' => 'Accepted',
            'keterangan' => 'Sudah terlaksana',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
