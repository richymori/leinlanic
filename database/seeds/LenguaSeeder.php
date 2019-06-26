<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LenguaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lenguas')->insert([
            'lengua'=>'Miskito',
        ]);
        DB::table('lenguas')->insert([
            'lengua'=>'Español',
        ]);
        DB::table('lenguas')->insert([
            'lengua'=>'Mayagna',
        ]);
        DB::table('lenguas')->insert([
            'lengua'=>'Rama',
        ]);
        DB::table('lenguas')->insert([
            'lengua'=>'Ingles',
        ]);
    }
}
