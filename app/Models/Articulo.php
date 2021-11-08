<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    //relaciones
    public function articulo(){
        return $this->hasMany('App\Models\DetalleEstado');
    }
    public function categoria(){
        return $this->belongsTo('App\Models\DetalleEstado');
    }
}
