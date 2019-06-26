<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTables([
            'carreras',
            'sexos',
            'areas',
            'domicilios',
            'desarrolladores',
            'etnias',
            'lenguas',
            'modalidades',
            'nacionalidades',
            'recintos',
            'tipo_preguntas',
            'perfiles',
            'cursos',
            'niveles',
            'lecciones',
            'actividades'
        ]);


        // $this->call(UsersTableSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(SexoSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(DesarrolladorSeeder::class);
        $this->call(DomicilioSeeder::class);
        $this->call(EtniaSeeder::class);
        $this->call(LenguaSeeder::class);
        $this->call(ModalidadSeeder::class);
        $this->call(NacionalidadSeeder::class);
        $this->call(RecintoSeeder::class);
        $this->call(TipoPreguntaSeeder::class);
        $this->call(PerfilSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(LeccionSeeder::class);
        $this->call(ActividadSeeder::class);
    }


    protected function truncateTables(array $tables){

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
