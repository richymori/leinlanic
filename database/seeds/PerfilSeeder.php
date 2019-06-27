<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $sexos= DB::table('sexos')->select('id')->take(1)->get();
        $sexos= DB::table('sexos')->select('id')->take(1)->get();
        $recintos= DB::table('recintos')->select('id')->take(1)->get();
        $carreras= DB::table('carreras')->select('id')->take(1)->get();
        $areas= DB::table('areas')->select('id')->take(1)->get();
        $modalidades= DB::table('modalidades')->select('id')->take(1)->get();
        $etnias= DB::table('etnias')->select('id')->take(1)->get();
        $domicilios= DB::table('domicilios')->select('id')->take(1)->get();
        $nacionalidades= DB::table('nacionalidades')->select('id')->take(1)->get();



        DB::table('perfiles')->insert([
            'nombres'=>'Jhonatan',
            'apellidos'=>'Martinez',
            'sexo_id'=> $sexos->first()->id,
            'recinto_id'=>$recintos->first()->id,
            'carrera_id'=>$carreras->first()->id,
            'area_id'=>$areas->first()->id,
            'modalidad_id'=>$modalidades->first()->id,
            'etnia_id'=>$etnias->first()->id,
            'domicilio_id'=>$domicilios->first()->id,
            'nacionalidad_id'=>$nacionalidades->first()->id,

        ]);

        DB::table('perfiles')->insert([
            'nombres'=>'Francisco',
            'apellidos'=>'Rojas',
            'sexo_id'=> $sexos->first()->id,
            'recinto_id'=>$recintos->first()->id,
            'carrera_id'=>$carreras->first()->id,
            'area_id'=>$areas->first()->id,
            'modalidad_id'=>$modalidades->first()->id,
            'etnia_id'=>$etnias->first()->id,
            'domicilio_id'=>$domicilios->first()->id,
            'nacionalidad_id'=>$nacionalidades->first()->id,

        ]);
    }
}
