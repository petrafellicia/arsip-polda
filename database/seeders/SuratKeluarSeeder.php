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
            'id' => '1',
            'no_agenda' => 'B/ /VIII/HUM.9.1/2023',
            'no_surat' => 'B/8/VIII/HUM.9.1/2023',
            'jenis_surat' => 'Surat Biasa',
            'asal_surat' => 'Kabid Humas',
            'perihal' => 'News',
            'kka' => 'HUM',
            'dasar_surat' => 'Perintah Kabid',
            'tgl_surat' => '2023-08-10',
            'jam_surat' => '10.00 WIB',
            'disposisi' => 'Ksbd. Tekinfo;',
            'distribusi' => 'Kapolda DIY',
            'isi_disposisi' => 'Sudah Terlaksana',
            'feedback' => 'Oke',
            'file' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}