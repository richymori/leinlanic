<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecintoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recintos')->insert([
            'recinto'=>'Nueva Guinea'
        ]);

        DB::table('recintos')->insert([
            'recinto'=>'Bluefields'
        ]);
        DB::table('recintos')->insert([
            'recinto'=>'Suina'
        ]);
        DB::table('recintos')->insert([
            'recinto'=>'Bilwi - Puerto Cabezas'
        ]);

    }
}
