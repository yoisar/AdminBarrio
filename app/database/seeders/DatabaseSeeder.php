<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AbClientInvoice;
use App\Models\AbCurrency;
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
        // Currencies
        $this->call(AbCurrencySeeder::class);
        // Services
        $this->call(AbServiceSeeder::class);
        // Clients
        $this->call(AbClientSeeder::class);
        // Services contracts
        $this->call(AbCientServiceContractSeeder::class);
        // App Clients Invoices
        $this->call(AbClientInvoiceSeeder::class);
        // App Clients Invoices DEtails
        $this->call(AbClientInvoiceDetailSeeder::class);
    }
}
