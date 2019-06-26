<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $niv1= DB::table('niveles')->select('id')->take(1)->get();


        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 1',
            'descripcion'=> 'Leccion 1',
            'nivel_id'=> $niv1[0]->id
        ]);

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 2',
            'descripcion'=> 'Leccion 2',
            'nivel_id'=> $niv1[0]->id
        ]);

        $niv2= DB::table('niveles')->select('id')->take(2)->get();

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 1',
            'descripcion'=> 'Leccion 1',
            'nivel_id'=> $niv2[1]->id
        ]);

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 2',
            'descripcion'=> 'Leccion 2',
            'nivel_id'=> $niv2[1]->id
        ]);


        $niv3= DB::table('niveles')->select('id')->take(3)->get();

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 1',
            'descripcion'=> 'Leccion 1',
            'nivel_id'=> $niv3[2]->id
        ]);

        DB::table('lecciones')->insert([
            'leccion'=> 'Leccion 2',
            'descripcion'=> 'Leccion 2',
            'nivel_id'=> $niv3[2]->id
        ]);

    }
}
