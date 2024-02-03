<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PengirimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pengirims')->delete();

        DB::table('pengirims')->insert([
            'id' => '1',
            'nama_pengirim' => 'Internal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pengirims')->insert([
            'id' => '2',
            'nama_pengirim' => 'Lembaga Pemerintahan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pengirims')->insert([
            'id' => '3',
            'nama_pengirim' => 'Instansi Swasta',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pengirims')->insert([
            'id' => '4',
            'nama_pengirim' => 'Masyarakat Umum',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
