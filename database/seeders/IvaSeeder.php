<?php

namespace Database\Seeders;

use App\Models\Iva;
use Illuminate\Database\Seeder;

class IvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_SV');

        for ($i=0; $i < 10; $i++) {
            Iva::create([
                'codigo' => $faker->numerify('IVA##'),
                'porcentaje' => $faker->randomFloat($nbMaxDecimals = null, $min =0.01, $max = 0.20),
                'descripcion' => $faker->sentence(),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);
            $i++;
        }
    }
}
