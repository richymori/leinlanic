<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;


class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidades')->insert([
            'modalidad'=>'Vespertino'
        ]);

        DB::table('modalidades')->insert([
            'modalidad'=>'Nocturno'
        ]);
        DB::table('modalidades')->insert([
            'modalidad'=>'Sabatino'
        ]);
        DB::table('modalidades')->insert([
            'modalidad'=>'Quincenal'
        ]);
        DB::table('modalidades')->insert([
            'modalidad'=>'Bimestral'
        ]);
    }
}
