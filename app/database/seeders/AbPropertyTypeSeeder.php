<?php

namespace Database\Seeders;

use App\Models\AbPropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbPropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $propertyTypes = [
            [
                'name' => 'Casa',
                'slug' => 'casa',
                'description' => 'Una casa completa con jardín y garaje.'
            ],
            [
                'name' => 'Departamento',
                'slug' => 'departamento',
                'description' => 'Un departamento en edificio con ascensor y amenities.'
            ],
            [
                'name' => 'Oficina',
                'slug' => 'oficina',
                'description' => 'Un espacio para trabajo en edificio comercial.'
            ],
            [
                'name' => 'Local Comercial',
                'slug' => 'local-comercial',
                'description' => 'Un espacio para negocios en planta baja de edificio comercial.'
            ],
        ];

        foreach ($propertyTypes as $propertyType) {
            AbPropertyType::create($propertyType);
        }
    }
}
