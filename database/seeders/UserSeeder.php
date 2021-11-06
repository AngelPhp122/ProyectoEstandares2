<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
    }
}
