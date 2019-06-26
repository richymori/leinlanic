<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    public function niveles()
    {
        return $this->hasMany(Nivel::class);
    }
}
