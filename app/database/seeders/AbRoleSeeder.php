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
                'name' => 'Super Admin',
                'description' => 'Tiene acceso a todo el sistema',
                'slug' => 'super-admin',
            ],
            [
                'name' => 'Admin Barrios',
                'description' => 'Administra barrios',
                'slug' => 'admin-barrios',
            ],
            [
                'name' => 'Admin Alquileres',
                'description' => 'Administra solo alquileres',
                'slug' => 'admin-alquileres',
            ],
            [
                'name' => 'Admin Dual',
                'description' => 'Administra barrios y alquila',
                'slug' => 'admin-dual',
            ]
        ];

        foreach ($roles as $role) {
            AbRole::create($role);
        }
    }
}
