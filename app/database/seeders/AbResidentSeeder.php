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
            'document_type' => 'DNI',
            'document_number' => '12345678',
            'nationality' => 'Argentina',
            'current_address' => 'Av. Siempreviva 123',
            'ab_property_id' => 1,
        ]);

        AbResident::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'janesmith@example.com',
            'phone_number' => '987654321',
            'document_type' => 'Pasaporte',
            'document_number' => 'ABC123',
            'nationality' => 'Estados Unidos',
            'current_address' => 'Calle Falsa 123',
            'ab_property_id' => 2,
        ]);

        // Agregar más residents según necesidad
    }
}
