<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domicilios')->insert([
            'domicilio'=> 'Zona #3'
        ]);
        DB::table('domicilios')->insert([
            'domicilio'=> 'Linda Vista'
        ]);
        DB::table('domicilios')->insert([
            'domicilio'=> 'Zona #1'
        ]);
        DB::table('domicilios')->insert([
            'domicilio'=> 'Zona #8'
        ]);
        DB::table('domicilios')->insert([
            'domicilio'=> 'Zona #3'
        ]);
    }
}
