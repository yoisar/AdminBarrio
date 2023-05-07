<?php

namespace Database\Seeders;

use App\Models\AbRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'System',
                'description' => 'Sistema',
                'slug' => 'system',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Super Admin',
                'description' => 'Tiene acceso a todo el sistema',
                'slug' => 'super-admin',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Admin Barrios',
                'description' => 'Administra barrios',
                'slug' => 'admin-barrios',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Admin Alquileres',
                'description' => 'Administra solo alquileres',
                'slug' => 'admin-alquileres',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Admin Barrios y Alquileres',
                'description' => 'Administra barrios y alquila',
                'slug' => 'admin-dual',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Propietario',
                'description' => 'Propietario de inmueble, unidad funcional o terreno',
                'slug' => 'propietario',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Inquilino de Barrio',
                'description' => 'Residente de barrio que alquila unidad funcional',
                'slug' => 'inquilino-barrio',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Inquilino de Alquiler',
                'description' => 'Resiendete que alquila en inmuebles en alquiler por un administrador de alquileres',
                'slug' => 'inquilino-alquiler',
                'guard_name' => 'web',
            ]

        ];

        foreach ($roles as $role) {
            AbRole::create($role);
        }
    }
}
