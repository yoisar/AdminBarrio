<?php

namespace Database\Seeders;

use App\Models\AbNeighborhood;
use App\Models\AbProperty;
use App\Models\AbPropertyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbPropertySeeder extends Seeder
{
    public function run()
    {
        $property_types = AbPropertyType::all();
        $neighborhoods = AbNeighborhood::all();

        // crear 5 propiedades
        for ($i = 1; $i <= 5; $i++) {
            AbProperty::create([
                'name' => 'Propiedad ' . $i,
                'address' => 'Calle Falsa ' . $i,
                'latitude' => 0,
                'user_id' => 1,
                'longitude' => 0,
                'bedrooms' => rand(1, 4),
                'bathrooms' => rand(1, 3),
                'description' => 'Esta es la descripción de la propiedad ' . $i,
                'sale_price' => rand(300000, 2000000),
                'currency' => 'ARS',
                'ab_property_type_id' => $property_types->random()->id,
                'ab_neighborhood_id' => $neighborhoods->random()->id,
            ]);
        }
    }
}
