<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Crear un usuario administrador o de prueba fijo
        User::create([
            'name' => 'Usuario Admin',
            'email' => 'admin@correo.com',
            'password' => Hash::make('password123'), // Contraseña encriptada
        ]);

        // 2. Crear más usuarios aleatorios usando Factory (Recomendado)
        User::factory()->count(10)->create();
    }
}
