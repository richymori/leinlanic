<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $lec1= DB::table('lecciones')->select('id')->take(1)->get();


        DB::table('actividades')->insert([
            'actividad'=> 'Actividad 1',
            'descripcion'=> 'Actividad 1',
            'leccion_id'=> $lec1[0]->id
        ]);

        DB::table('actividades')->insert([
            'actividad'=> 'Actividad 2',
            'descripcion'=> 'Actividad 2',
            'leccion_id'=>$lec1[0]->id
        ]);


        $lec2= DB::table('lecciones')->select('id')->take(2)->get();


        DB::table('actividades')->insert([
            'actividad'=> 'Actividad 1',
            'descripcion'=> 'Actividad 1',
            'leccion_id'=> $lec2[1]->id
        ]);

        DB::table('actividades')->insert([
            'actividad'=> 'Actividad 2',
            'descripcion'=> 'Actividad 2',
            'leccion_id'=>$lec2[1]->id
        ]);

    }
}
