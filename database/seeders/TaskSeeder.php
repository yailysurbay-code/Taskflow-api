<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        // Obtenemos todos los proyectos creados por el ProjectSeeder
        $projects = Project::all();

        // Creamos tareas para cada proyecto existente
        foreach ($projects as $project) {
            // Opción con Factory (Crea 3 tareas por cada proyecto)
            Task::factory()->count(3)->create([
                'project_id' => $project->id,
            ]);

            // Opción manual (Descomenta si no usas factories)
            /*
            Task::create([
                'project_id' => $project->id,
                'title' => 'Primera tarea de ' . $project->name,
                'status' => 'pending',
            ]);
            */
        }
    }
}
