<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilios';
    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
