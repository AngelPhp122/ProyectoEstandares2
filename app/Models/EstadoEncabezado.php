<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoEncabezado extends Model
{
    use HasFactory;


    //relaciones
    public function estado(){
        return $this->belongsTo('App\Models\Estado');
    }
    public function detalleEstado(){
        return $this->hasMany('App\Models\DetalleEstado');
    }
}
