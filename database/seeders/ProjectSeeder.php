<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Buscamos si ya existen usuarios
        $users = User::all();

        // Si no hay usuarios, creamos uno para evitar errores
        if ($users->isEmpty()) {
            $users = collect([User::factory()->create()]);
        }

        // Creamos los proyectos asignando el usuario a la columna correcta: 'created_by'
        Project::factory()->count(5)->create([
            'created_by' => $users->random()->id, 
        ]);
    }
}


