<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nacionalidades')->insert([
            'nacionalidad'=>'Nicaragüense',
        ]);
        DB::table('nacionalidades')->insert([
            'nacionalidad'=>'Español',
        ]);
        DB::table('nacionalidades')->insert([
            'nacionalidad'=>'Colombiano',
        ]);
    }
}
