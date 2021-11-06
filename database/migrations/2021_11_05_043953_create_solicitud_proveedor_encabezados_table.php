<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudProveedorEncabezadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_proveedor_encabezados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proveedor_id')->constrained('proveedors', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('iva_id')->constrained('ivas', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedDecimal('total',8,2)->comment('total de la factura al proveedor');
            $table->foreignId('usuario_id')->constrained('users', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_proveedor_encabezados');
    }
}
