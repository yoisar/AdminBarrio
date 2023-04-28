<?php

namespace Database\Seeders;

use App\Models\AbResident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AbResident::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'phone_number' => '123456789',
            'ab_property_id' => 1,
        ]);

        AbResident::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'janesmith@example.com',
            'phone_number' => '987654321',
            'ab_property_id' => 2,
        ]);

        // Agregar más residents según necesidad
    }
}
