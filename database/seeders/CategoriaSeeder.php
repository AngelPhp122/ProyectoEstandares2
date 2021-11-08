<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
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
            Categoria::create([
                'nombre' => $faker->word(),
                'descripcion' => $faker->sentence(),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }
    }
}
