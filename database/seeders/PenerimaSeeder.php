<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenerimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('penerimas')->delete();

        DB::table('penerimas')->insert([
            'id' => '1',
            'nama_penerima' => 'Bid TIK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('penerimas')->insert([
            'id' => '2',
            'nama_penerima' => 'Bid Siber',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('penerimas')->insert([
            'id' => '3',
            'nama_penerima' => 'Bid Tekinfo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
