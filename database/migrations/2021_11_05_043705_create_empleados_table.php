<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->unsignedDecimal('sueldo',8,2)->comment('sueldo del empleado');
            $table->unsignedDecimal('precio_xh',8,2)->comment('precio por hora del empleado');
            $table->unsignedDecimal('precio_xhn',8,2)->comment('precio por hora nocturna del empleado');
            $table->unsignedDecimal('isss',8,2)->nullable()->comment('Descuento de seguro social del empleado');
            $table->unsignedDecimal('afp_confia',8,2)->nullable()->comment('descuento si tiene afp confia el empleado');
            $table->unsignedDecimal('afp_crecer',8,2)->nullable()->comment('descuento si tiene afp crecer el empleado');
            $table->unsignedDecimal('renta',8,2)->nullable()->comment('total de descuento de renta del empleado');
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
        Schema::dropIfExists('empleados');
    }
}
