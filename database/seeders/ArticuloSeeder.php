<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');
        $categorias = Categoria::count();
        $proveedores = Proveedor::count();

        for ($i=0; $i < 500 ; $i++) {
            Articulo::create([
                'categoria_id' => $faker->numberBetween(1, $categorias),
                'nombre' => $faker->sentence(),
                'proveedor_id' => $faker->numberBetween(1, $proveedores),
                'precio_venta' => $faker->randomFloat($nbMaxDecimals = null, $min = 5, $max = 300),
                'stock' => $faker->randomNumber($nbDigits = 5),
                'descripcion' => $faker->sentence(),
                'imagen' => $faker->imageUrl($width = 640, $height = 480, $category = null, $randomize = true),
                'estado' => $faker->numberBetween(0, 1),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }
    }
}
