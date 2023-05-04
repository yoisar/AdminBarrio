<?php

namespace Database\Seeders;

use App\Models\AbNeighborhood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbNeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        AbNeighborhood::create([
            'name' => 'Barrio Norte',
            'description' => 'Barrio residencial en la ciudad de Buenos Aires',
            'ab_city_id' => 1,
            'user_id' => 1
        ]);

        AbNeighborhood::create([
            'name' => 'Palermo',
            'description' => 'Barrio bohemio y cultural en la ciudad de Buenos Aires',
            'ab_city_id' => 1,
            'user_id' => 1
        ]);

        AbNeighborhood::create([
            'name' => 'Belgrano',
            'description' => 'Barrio elegante y tranquilo en la ciudad de Buenos Aires',
            'ab_city_id' => 1,
            'user_id' => 1
        ]);

        AbNeighborhood::create([
            'name' => 'La Boca',
            'description' => 'Barrio turístico y cultural en la ciudad de Buenos Aires',
            'ab_city_id' => 1,
            'user_id' => 1
        ]);
    }
}
