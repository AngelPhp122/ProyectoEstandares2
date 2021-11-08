<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;


    public function encabezado(){
        return $this->belongsToMany('App\Models\SolicitudProveedorEncabezado');
    }
}
