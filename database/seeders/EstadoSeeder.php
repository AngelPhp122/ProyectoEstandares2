<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');

        Estado::create([
            'nombre' => 'Pendiente',
            'descripcion' => $faker->sentence(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime()
        ]);
        Estado::create([
            'nombre' => 'Finalizado',
            'descripcion' => $faker->sentence(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime()
        ]);
        Estado::create([
            'nombre' => 'Problema',
            'descripcion' => $faker->sentence(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime()
        ]);
    }
}
