<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexos')->insert([
            'sexo'=>'Masculino'
        ]);
        DB::table('sexos')->insert([
            'sexo'=>'Femenino'
        ]);
        DB::table('sexos')->insert([
            'sexo'=>'Otro'
        ]);
    }
}
