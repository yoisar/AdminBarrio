<?php

namespace Database\Seeders;

use App\Models\AbFunctionalUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbFunctionalUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        AbFunctionalUnit::factory()->count(5)->create();
    }
}
