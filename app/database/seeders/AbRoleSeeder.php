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
                'description' => 'Propietario',
                'slug' => 'propietario',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Inquilino',
                'description' => 'Inquilino de propiedad',
                'slug' => 'inquilino',
                'guard_name' => 'web',
            ]
        ];

        foreach ($roles as $role) {
            AbRole::create($role);
        }
    }
}
