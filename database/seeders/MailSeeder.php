<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mails')->delete();

        DB::table('mails')->insert([
            'nomor_agenda' => '1',
            'nomor_surat' => 'B/22/VI/AUM',
            'jenis_surat' => 'Surat Biasa',
            'asal_surat' => 'Kabid Humas',
            'perihal' => 'Majalah',
            'kka' => 'KEP',
            'tanggal_surat' => '2023-06-09',
            'jam_terima' => '10.00 WIB',
            'disposisi_kepada' => 'other',
            'distribusi' => 'mabes POLRI',
            'isi_disposisi' => 'Tinjau',
            'keterangan' => 'mmmmmm',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
