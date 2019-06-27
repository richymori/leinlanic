<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'area'=> 'Area Administrativa e Informática',
        ]);
        DB::table('areas')->insert([
            'area'=> 'Recursos Naturales',
        ]);
        DB::table('areas')->insert([
            'area'=> 'Ingenierias y Matematicas',
        ]);
        DB::table('areas')->insert([
            'area'=> 'Literatura',
        ]);
        DB::table('areas')->insert([
            'area'=> 'Medicina ',
        ]);
    }
}
