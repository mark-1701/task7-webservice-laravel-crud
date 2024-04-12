<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departament;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Ventas',
            'Marketing',
            'Recursos Humanos',
            'Desarrollo',
            'Soporte Tecnico',
            'Finanzas',
        ];
        
        foreach ($departments as $key => $department) {
            $id = strtoupper(($key + 1) . '_' . str_replace(' ', '_', $department));
            Departament::create([
                'id' => $id,
                'name' => $department
            ]);
        }
    }
}
