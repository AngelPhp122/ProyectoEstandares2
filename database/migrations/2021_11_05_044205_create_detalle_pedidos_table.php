<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulo_id')->constrained('articulos', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedDecimal('precio_unitario',8,2)->comment('precio unitario del costo del articulo');
            $table->unsignedInteger('cantidad')->comment('cantidad solicitada al proveedor');
            $table->unsignedDecimal('subtotal',8,2)->comment('subtotal por linea en la factura');
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
        Schema::dropIfExists('detalle_pedidos');
    }
}
