<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->comment('nombre del usuario');
            $table->string('apellido',50)->comment('apellido del usuario');
            $table->string('dui',10)->unique()->comment('numero unico de identidad del usuario');
            $table->string('email',60)->unique()->comment('direccion de correo electronico del usuario');
            $table->timestamp('email_verified_at')->nullable()->comment('fecha cuando se verifico por correo');
            $table->string('password')->comment('contraseña del usuario');
            $table->foreignId('tipo_usuario_id')->constrained('tipo_usuarios', 'id')->onUpdate('cascade')->onDelete('restrict');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
