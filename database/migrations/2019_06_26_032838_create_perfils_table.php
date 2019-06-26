<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->unsignedInteger('sexo_id');
            $table->unsignedInteger('recinto_id');
            $table->unsignedInteger('carrera_id');
            $table->unsignedInteger('area_id');
            $table->unsignedInteger('modalidad_id');
            $table->unsignedInteger('etnia_id');
            $table->unsignedInteger('domicilio_id');
            $table->unsignedInteger('nacionalidad_id');
            $table->unsignedInteger('user_id');

            $table->foreign('sexo_id')->references('id')->on('sexos')->onDelete('cascade');

            $table->foreign('recinto_id')->references('id')->on('recintos')->onDelete('cascade');

            $table->foreign('carrera')->references('id')->on('carreras')->onDelete('cascade');

            $table->foreign('modalidad_id')->references('id')->on('modalidades')->onDelete('cascade');

            $table->foreign('etnia_id')->references('id')->on('etnias')->onDelete('cascade');

            $table->foreign('domicilio_id')->references('id')->on('domicilios')->onDelete('cascade');

            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles');
    }
}
