<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_preguntas')->insert([
            'tipo_pregunta'=> 'Seleccion Multiple'
        ]);

        DB::table('tipo_preguntas')->insert([
            'tipo_pregunta'=> 'Eleccion'
        ]);
        DB::table('tipo_preguntas')->insert([
            'tipo_pregunta'=> 'Traduccion'
        ]);

    }
}
