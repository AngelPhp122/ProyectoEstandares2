<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ivas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10)->comment('codigo del iva');
            $table->decimal('porcentaje',8,2,true)->comment('porcentaje a descontar con el iva');
            $table->string('descripcion', 100)->comment('descripcion de la retencion');
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
        Schema::dropIfExists('ivas');
    }
}
