<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $lengua = DB::table('lenguas')->select('id')->first();
        // $desarrollador = DB::table('desarrolladores')->select('id')->first();

        $lengua1= DB::table('lenguas')->select('id')->take(1)->get();
        $des1= DB::table('desarrolladores')->select('id')->take(1)->get();

        DB::table('cursos')->insert([
            'curso'=> 'Miskito',
            'lengua_id'=> $lengua1[0]->id,
            'desarrollador_id'=> $des1[0]->id
        ]);

        $lengua2= DB::table('lenguas')->select('id')->take(2)->get();
        $des2= DB::table('desarrolladores')->select('id')->take(2)->get();

        DB::table('cursos')->insert([
            'curso'=> 'Mayagna',
            'lengua_id'=> $lengua2[1]->id,
            'desarrollador_id'=> $des2[1]->id
        ]);

        $lengua3= DB::table('lenguas')->select('id')->take(3)->get();
        $des3= DB::table('desarrolladores')->select('id')->take(3)->get();


        DB::table('cursos')->insert([
            'curso'=> 'Rama',
            'lengua_id'=> $lengua3[2]->id,
            'desarrollador_id'=> $des3[2]->id
        ]);


    }
}
