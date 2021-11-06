<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('encabezado_ventas_id')->constrained('venta_encabezados', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('articulo_id')->constrained('articulos', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedDecimal('precio',8,2)->comment('precio de venta del articulo');
            $table->unsignedInteger('cantidad')->comment('cantidad de articulos que lleva el cliente');
            $table->unsignedDecimal('subtotal')->comment('subtotal por linea del articulo');
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
        Schema::dropIfExists('detalle_ventas');
    }
}
