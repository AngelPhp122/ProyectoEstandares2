<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\DetallePedido;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            TipoUsuarioSeeder::class,
            UserSeeder::class,
            ProveedorSeeder::class,
            IvaSeeder::class,
            CategoriaSeeder::class,
            EmpleadoSeeder::class,
            EstadoSeeder::class,
            ArticuloSeeder::class,
            SolicitudProveedorSeeder::class,
            EstadoEncabezadoSeeder::class,
            DetallePedidoSeeder::class,
        ]);
    }
}
