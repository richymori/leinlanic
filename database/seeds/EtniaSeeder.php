<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etnias')->insert([
            'etnia'=> 'Miskito',
        ]);
        DB::table('etnias')->insert([
            'etnia'=> 'Mayagna',
        ]);
        DB::table('etnias')->insert([
            'etnia'=> 'Mestizo',
        ]);
        DB::table('etnias')->insert([
            'etnia'=> 'Creolle',
        ]);
        DB::table('etnias')->insert([
            'etnia'=> 'Rama',
        ]);
    }
}
