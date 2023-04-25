<?php

namespace Database\Seeders;

use App\Models\AbPermission;
use App\Models\AbRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AbPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // // Definir permisos para Administrador Barrios
        // AbPermission::create(['name' => 'administrar barrios', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'ver estadisticas barrios', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'editar barrios', 'guard_name' => 'web']);

        // // Definir permisos para Administrador de Alquileres
        // AbPermission::create(['name' => 'administrar alquileres', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'ver estadisticas alquileres', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'editar alquileres', 'guard_name' => 'web']);

        // // Definir permisos para Administrador Dual
        // AbPermission::create(['name' => 'administrar barrios y alquileres', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'ver estadisticas barrios y alquileres', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'editar barrios y alquileres', 'guard_name' => 'web']);

        // // Definir permisos para Super Administrador
        // AbPermission::create(['name' => 'administrar usuarios', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'ver estadisticas globales', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'editar configuracion', 'guard_name' => 'web']);
        // AbPermission::create(['name' => 'ver logs', 'guard_name' => 'web']);
        // // Crear el rol super_admin si no existe
        $super_admin = AbRole::findOrFail(1);
        //  firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web', 'slug' => 'super-admin']);

        // Crear los permisos si no existen
        $permissions = [
            'ver-dashboard',
            'gestionar-barrios',
            'gestionar-alquileres',
            'gestionar-usuarios',
        ];
        foreach ($permissions as $permission_name) {
            $permission = AbPermission::firstOrCreate(['name' => $permission_name, 'guard_name' => 'web', 'slug' => str_replace('_', '-', $permission_name)]);
            // $super_admin->givePermissionTo($permission);
        }

        // Crear el usuario con el rol super_admin
        // $user = User::find(1);
        // create([
        //     'name' => 'Super Admin',
        //     'email' => 'superadmin@example.com',
        //     'password' => Hash::make('password')
        // ]);
        // $user->assignRole($super_admin);

        $permissions = [
            [
                'name' => 'Ver listado de usuarios',
                'slug' => 'users.index',
                'description' => 'Acceso para ver la lista de usuarios registrados en el sistema',
            ],
            [
                'name' => 'Crear usuario',
                'slug' => 'users.create',
                'description' => 'Acceso para crear un nuevo usuario en el sistema',
            ],
            [
                'name' => 'Editar usuario',
                'slug' => 'users.edit',
                'description' => 'Acceso para editar los datos de un usuario registrado en el sistema',
            ],
            [
                'name' => 'Eliminar usuario',
                'slug' => 'users.destroy',
                'description' => 'Acceso para eliminar un usuario registrado en el sistema',
            ],
        ];

        foreach ($permissions as $permission) {
            AbPermission::create($permission);
        }
    }
}
