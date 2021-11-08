<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\DetallePedido;
use App\Models\SolicitudProveedorEncabezado;
use Illuminate\Database\Seeder;

class DetallePedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');
        $articulo = Articulo::count();
        $encabezado = SolicitudProveedorEncabezado::count();

        for ($i=0; $i < 500 ; $i++) {
            DetallePedido::create([
                'articulo_id' => $faker->numberBetween(1, $articulo),
                'solicitud_proveedor_encabezados_id' => $faker->numberBetween(1, $encabezado),
                'precio_unitario' => $faker->randomFloat($nbMaxDecimals = null, $min = 300, $max = 1800),
                'cantidad' => $faker->randomNumber($nbDigits = 2),
                'subtotal' => $faker->randomFloat($nbMaxDecimals = null, $min = 20, $max = 60),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }
    }
}
