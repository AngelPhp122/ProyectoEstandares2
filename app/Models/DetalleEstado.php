<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleEstado extends Model
{
    use HasFactory;

    //relaciones
    public function estadoEncabezado(){
        return $this->belongsTo('App\Models\EstadoEncabezado');
    }
    public function articulo(){
        return $this->belongsTo('App\Models\Articulo');
    }
}
