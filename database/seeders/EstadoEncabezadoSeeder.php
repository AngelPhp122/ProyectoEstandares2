<?php

namespace Database\Seeders;

use App\Models\Estado;
use App\Models\EstadoEncabezado;
use App\Models\SolicitudProveedorEncabezado;
use Illuminate\Database\Seeder;

class EstadoEncabezadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');
        $solicitud = SolicitudProveedorEncabezado::count();
        $estado = Estado::count();

        for ($i=0; $i < 500 ; $i++) {
            EstadoEncabezado::create([
                'solicitud_proveedor_encabezados_id' => $faker->unique()->numberBetween(1, $solicitud),
                'estado_id' => $faker->numberBetween(1, $estado),
                'descripcion' => $faker->sentence(),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }
    }
}
