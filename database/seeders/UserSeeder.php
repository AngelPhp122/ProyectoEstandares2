<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\TipoUsuario;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'apellido' => 'Administracion',
            'dui' => '00000000-0',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'tipo_usuario_id' => '1',
            'profile_photo_path' => 'profile.jpg'
        ]);

        User::create([
            'name' => 'Empleado',
            'apellido' => 'Empleado',
            'dui' => '00000000-1',
            'email' => 'empleado@empleado.com',
            'password' => Hash::make('123456'),
            'tipo_usuario_id' => '2',
            'profile_photo_path' => 'profile.jpg'
        ]);

        User::create([
            'name' => 'Cliente',
            'apellido' => 'Cliente',
            'dui' => '00000000-2',
            'email' => 'cliente@cliente.com',
            'password' => Hash::make('123456'),
            'tipo_usuario_id' => '3',
            'profile_photo_path' => 'profile.jpg'
        ]);

        $faker = \Faker\Factory::create('es_ES');
        $cuenta = TipoUsuario::count();

        for ($i=0; $i < 10 ; $i++) {
            User::create([
                'name' => $faker->name(),
                'apellido' => $faker->lastName(),
                'dui' => $faker->unique()->numerify('########-#'),
                'email' => $faker->unique()->email(),
                'password' => Hash::make($faker->word()),
                'tipo_usuario_id' => $faker->numberBetween(1, $cuenta),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime()
            ]);

            $i++;
        }
    }
}
