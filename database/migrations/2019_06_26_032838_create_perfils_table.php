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

            $table->foreign('sexo_id')->references('id')->on('sexo')->onDelete('cascade');

            $table->foreign('recinto_id')->references('id')->on('recinto')->onDelete('cascade');

            $table->foreign('carrera')->references('id')->on('carrera')->onDelete('cascade');

            $table->foreign('modalidad_id')->references('id')->on('modalidad')->onDelete('cascade');

            $table->foreign('etnia_id')->references('id')->on('etnia')->onDelete('cascade');

            $table->foreign('domicilio_id')->references('id')->on('domicilio')->onDelete('cascade');

            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidad')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

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
