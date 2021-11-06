<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained('categorias', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nombre')->comment('nombre del articulo');
            $table->foreignId('proveedor_id')->constrained('proveedors', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedDecimal('precio_venta',8,2)->comment('precio en que se vende por unidad el articulo');
            $table->unsignedInteger('stock')->comment('cantidad de articulos actuales en existencia');
            $table->string('descripcion')->comment('descripcion del articulos');
            $table->string('imagen')->comment('url donde se almacena la imagen');
            $table->boolean('estado')->default(true)->comment('Estado si se encuentra disponible a la venta');
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
        Schema::dropIfExists('articulos');
    }
}
