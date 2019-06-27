<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesarrolladorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desarrolladores')->insert([
            'nombres'=>'Jhosell',
            'apellidos'=>'Garcia',
            'email'=>'jhosell.ggarcia@gmail.com',
            'telefono'=> '123456',
        ]);

        DB::table('desarrolladores')->insert([
            'nombres'=>'Jhonatan ',
            'apellidos'=>'Martinez',
            'email'=>'Jhonmartinezr90@Gmail.com',
            'telefono'=> '123456',
        ]);

        DB::table('desarrolladores')->insert([
            'nombres'=>'Fernando ',
            'apellidos'=>'Malespin',
            'email'=>'javifer88@gmail.com',
            'telefono'=> '123456',
        ]);

        DB::table('desarrolladores')->insert([
            'nombres'=>'Carlos ',
            'apellidos'=>'Rocha',
            'email'=>'rochacarlos12@gmail.com',
            'telefono'=> '123456',
        ]);
    }
}
