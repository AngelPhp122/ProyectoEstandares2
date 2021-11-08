<?php

namespace Database\Seeders;

use App\Models\Empleado;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('es_ES');
        $cuenta = User::count();

        for ($i=0; $i < 500 ; $i++) {
            Empleado::create([
                'usuario_id' => $faker->numberBetween(1, $cuenta),
                'sueldo' => $faker->randomFloat($nbMaxDecimals = null, $min = 300, $max = 1800),
                'precio_xh' => $faker->randomNumber($nbDigits = 2),
                'precio_xhn' => $faker->randomNumber($nbDigits = 2),
                'isss' => $faker->optional()->randomFloat($nbMaxDecimals = null, $min = 20, $max = 60),
                'afp_confia' => $faker->optional()->randomFloat($nbMaxDecimals = null, $min = 20, $max = 60),
                'afp_crecer' => $faker->optional()->randomFloat($nbMaxDecimals = null, $min = 20, $max = 60),
                'renta' => $faker->optional()->randomFloat($nbMaxDecimals = null, $min = 20, $max = 60),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }
    }
}
