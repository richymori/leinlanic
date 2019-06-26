<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'carrera'=> 'Lic. Informática Administrativa',
        ]);
        DB::table('carreras')->insert([
            'carrera'=> 'Lic. Administracion de Empresas',
        ]);
        DB::table('carreras')->insert([
            'carrera'=> 'Lic. en Ingles',
        ]);
        DB::table('carreras')->insert([
            'carrera'=> 'Agroforestal',
        ]);
        DB::table('carreras')->insert([
            'carrera'=> 'Enfermeria Intercultural',
        ]);
    }
}
