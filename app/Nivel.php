<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveles';

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function lecciones()
    {
        return $this->hasMany(Leccion::class);
    }
}
