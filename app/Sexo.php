<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = 'sexos';
    public function perfiles ()
    {
        return $this->hasMany(Perfil::class);
    }
}
