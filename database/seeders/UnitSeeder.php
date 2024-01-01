<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('units')->delete();

        DB::table('units')->insert([
            'id' => '1',
            'nama_unit'=> 'BID TIK',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'id' => '2',
            'nama_unit'=> 'KAURREN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'id' => '3',
            'nama_unit'=> 'KAURJAROM',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('units')->insert([
            'id' => '4',
            'nama_unit'=> 'KAURPULATAH',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
