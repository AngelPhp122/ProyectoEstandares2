<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Seeder;
use DB;
class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creado tipo administrador
        TipoUsuario::create([
            'nombre' => 'Administrador',
            'created_at' => '2021-11-05',
            'updated_at' => '2021-11-05'
        ]);

        //Creando tipo empleado
        TipoUsuario::create([
            'nombre' => 'Empleado',
            'created_at' => '2021-11-05',
            'updated_at' => '2021-11-05'
        ]);

        TipoUsuario::create([
            'nombre' => 'Cliente',
            'created_at' => '2021-11-05',
            'updated_at' => '2021-11-05'
        ]);

        TipoUsuario::create([
            'nombre' => 'Cliente Caja',
            'created_at' => '2021-11-05',
            'updated_at' => '2021-11-05'
        ]);
    }
}
