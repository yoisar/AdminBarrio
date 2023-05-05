<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AbPermission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
        ]);
        // seeder toles
        $this->call(AbRoleSeeder::class);
        // permission seeder
        $this->call(AbPermissionSeeder::class);
        // countries
        $this->call(AbCountrySeeder::class);
        // provinces
        $this->call(AbProvinceSeeder::class);
        // cities
        $this->call(AbCitySeeder::class);
        // properties types
        $this->call(AbPropertyTypeSeeder::class);
        // Neighborhood
        $this->call(AbNeighborhoodSeeder::class);
        // Properies
        $this->call(AbPropertySeeder::class);
        // Resident
        $this->call(AbResidentSeeder::class);
        // Seed Funtional units
        $this->call(AbFunctionalUnitSeeder::class);
        // Logs
        $this->call(AbLogSeeder::class);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
