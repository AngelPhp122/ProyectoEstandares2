<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    //relaciones
    public function estadoEncabezado(){
        return $this->hasMany('App\Models\EstadoEncabezado');
    }
}
