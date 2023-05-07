<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        // system user
        $demoUser = User::create([
            'name'              => 'System User',
            'email'             => 'admin.systema@adminbarrio.com',
            'password'          => Hash::make('@dm1nBarr10.2023'),
            'email_verified_at' => now(),
        ]);
        // super admin user
        $demoUser2 = User::create([
            'name'              => 'Yassel Omar Izquierdo Souchay',
            'email'             => 'sioy23@gmail.com',
            'password'          => Hash::make('y01s'),
            'email_verified_at' => now(),
        ]);
        //  Administrador de barrios
        $demoUser = User::create([
            'name'              => 'Administrador de Barrios',
            'email'             => 'admin.barrios@adminbarrio.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
        ]);

        // Administrador de alquileres
        $demoUser3 = User::create([
            'name'              => 'Administrador de Alquieres',
            'email'             => 'admin.alquileres@adminbarrio.com',
            'password'          => Hash::make('gu1ll3'),
            'email_verified_at' => now(),
        ]);
        // Administrador Barrios y Alquileres
        $demoUser3 = User::create([
            'name'              => 'Administrador Barrios y Alquileres',
            'email'             => 'admin.barrio.alquileres@adminbarrio.com',
            'password'          => Hash::make('gu1ll3'),
            'email_verified_at' => now(),
        ]);
        // Residente propietario de Barrio
        $demoUser3 = User::create([
            'name'              => 'Residente Propierario',
            'email'             => 'residente.propietario.barrio@adminbarrio.com',
            'password'          => Hash::make('gu1ll3'),
            'email_verified_at' => now(),
        ]);
        // Residente de Inquilino de barrio
        $demoUser3 = User::create([
            'name'              => 'Residente de Barrio',
            'email'             => 'residente.inquilino.barrioo@adminbarrio.com',
            'password'          => Hash::make('gu1ll3'),
            'email_verified_at' => now(),
        ]);
        // Residente de inquilino Alquiler
        $demoUser3 = User::create([
            'name'              => 'Residente de Alquier',
            'email'             => 'residente.inquilino.alquiler@adminbarrio.com',
            'password'          => Hash::make('gu1ll3'),
            'email_verified_at' => now(),
        ]);
    }
}
