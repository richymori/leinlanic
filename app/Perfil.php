<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';
    
    public function nacionalidad()
    {
        return $this->belongsTo(Nacionalidad::class);
    }

    public function recinto()
    {
        return $this->belongsTo(Recinto::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

       
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class);
    }

    public function etnia()
    {
        return $this->belongsTo(Etnia::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function modalidad()
     {
         return $this->belongsTo(Modalidad::class);
     }
     public function domicilio()
     {
         return $this->belongsTo(Domicilio::class);
     }
     
      

    
     

     
     
}
