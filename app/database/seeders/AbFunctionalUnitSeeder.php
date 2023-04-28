<?php

namespace Database\Seeders;

use App\Models\AbFunctionalUnit;
use App\Models\AbProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbFunctionalUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $properties = AbProperty::all();

        foreach ($properties as $property) {
            for ($i = 1; $i <= 1; $i++) {
                $functionalUnit = new AbFunctionalUnit();
                $functionalUnit->name = 'Unit ' . $i;
                $functionalUnit->ab_property_id = $property->id;
                $functionalUnit->save();
            }
        }
    }
}
