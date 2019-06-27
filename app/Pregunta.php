<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';

    public function tipo_pregunta()
    {
        return $this->belongsTo(TipoPregunta::class);
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }


    // RELACION PARA ADMIN
    public function respuestas()
    {
        return $this->hasMany(Respuesta::class);
    }
}
