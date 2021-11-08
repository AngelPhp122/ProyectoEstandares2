<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');
        for ($i=0; $i < 500 ; $i++) {
            Proveedor::create([
                'nombre' => $faker->company(),
                'telefono' => $faker->numerify('2###-####'),
                'direccion' => $faker->streetAddress(),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }

    }
}
