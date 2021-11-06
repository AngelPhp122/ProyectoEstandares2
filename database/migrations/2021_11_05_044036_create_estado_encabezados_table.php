<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoEncabezadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_encabezados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_encabezado_id')->constrained('solicitud_proveedor_encabezados', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('estado_id')->constrained('estados', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('descripcion')->comment('descripcion de como se encuentra la solicitud con el proveedor');
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
        Schema::dropIfExists('estado_encabezados');
    }
}
