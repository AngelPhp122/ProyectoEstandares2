<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudProveedorEncabezado extends Model
{
    use HasFactory;

    //relaciones
    public function usuario(){
        return $this->belongsTo('App\Models\User');
    }
    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedor');
    }
    public function iva(){
        return $this->belongsTo('App\Models\Iva');
    }
    public function estadoEncabezado(){
        return $this->hasOne('App\Models\EstadoEncabezado');
    }
    public function detalle(){
        return $this->belongsToMany('App\Models\DetallePedido');
    }

}
