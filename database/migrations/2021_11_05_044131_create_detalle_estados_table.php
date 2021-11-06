<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_estados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estado_encabezado_id')->constrained('estado_encabezados', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('articulo_id')->constrained('articulos', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedInteger('cantidad_solicitada');
            $table->unsignedInteger('cantidad_entregada');
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
        Schema::dropIfExists('detalle_estados');
    }
}
