<?php

namespace Database\Seeders;

use App\Models\Iva;
use App\Models\Proveedor;
use App\Models\SolicitudProveedorEncabezado;
use App\Models\User;
use Illuminate\Database\Seeder;

class SolicitudProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');
        $proveedor = Proveedor::count();
        $iva = Iva::count();
        $usuario = User::count();

        for ($i=0; $i < 500 ; $i++) {
            SolicitudProveedorEncabezado::create([
                'proveedor_id' => $faker->numberBetween(1, $proveedor),
                'iva_id' => $faker->numberBetween(1, $iva),
                'total' => $faker->randomFloat($nbMaxDecimals = null, $min = 5, $max = 2500),
                'usuario_id' => $faker->numberBetween(1, $usuario),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }
    }
}
