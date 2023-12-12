<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SuratTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('surat_types')->delete();

        DB::table('surat_types')->insert([
            'id' => '1',
            'nama' => 'Surat Biasa',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('surat_types')->insert([
            'id' => '2',
            'nama' => 'Nota Dinas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('surat_types')->insert([
            'id' => '3',
            'nama' => 'Telegram',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('surat_types')->insert([
            'id' => '4',
            'nama' => 'Sprin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('surat_types')->insert([
            'id' => '5',
            'nama' => 'Surat Izin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('surat_types')->insert([
            'id' => '6',
            'nama' => 'Surat Rahasia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
