<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'respuestas';


    //RELACION PREGUNTAS ADMIN
     public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }

}
