<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = DB::table('cursos')->select('id')->first();

        DB::table('niveles')->insert([
            'nivel'=> 'Principiante',
            'descripcion'=> 'Principiante',
            'curso_id'=> $curso->id
        ]);

        DB::table('niveles')->insert([
            'nivel'=> 'Basico',
            'descripcion'=> 'Basico',
            'curso_id'=> $curso->id
        ]);
        DB::table('niveles')->insert([
            'nivel'=> 'Basico Avanzado',
            'descripcion'=> 'Basico Avanzado',
            'curso_id'=> $curso->id
        ]);
        DB::table('niveles')->insert([
            'nivel'=> 'Avanzado',
            'descripcion'=> 'Avanzado',
            'curso_id'=> $curso->id
        ]);
        DB::table('niveles')->insert([
            'nivel'=> 'Master',
            'descripcion'=> 'Master',
            'curso_id'=> $curso->id
        ]);


        $curso2= DB::table('cursos')->select('id')->take(2)->get();

        DB::table('niveles')->insert([
            'nivel'=> 'Principiante',
            'descripcion'=> 'Principiante',
            'curso_id'=> $curso2[1]->id
        ]);

        DB::table('niveles')->insert([
            'nivel'=> 'Basico',
            'descripcion'=> 'Basico',
            'curso_id'=> $curso2[1]->id
        ]);
        DB::table('niveles')->insert([
            'nivel'=> 'Basico Avanzado',
            'descripcion'=> 'Basico Avanzado',
            'curso_id'=> $curso2[1]->id
        ]);
        DB::table('niveles')->insert([
            'nivel'=> 'Avanzado',
            'descripcion'=> 'Avanzado',
            'curso_id'=> $curso2[1]->id
        ]);
        DB::table('niveles')->insert([
            'nivel'=> 'Master',
            'descripcion'=> 'Master',
            'curso_id'=> $curso2[1]->id
        ]);

    }
}
