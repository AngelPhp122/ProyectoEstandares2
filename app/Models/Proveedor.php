<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    //relaciones
    public function solicitudes(){
        return $this->hasMany('App\Models\SolicitudProveedorEncabezado','proveedor_id');
    }
}
