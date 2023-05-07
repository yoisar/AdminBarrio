<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $argentina = DB::table('ab_countries')->where('iso_code', 'AR')->first();

        DB::table('ab_provinces')->insert(
            [
                ['name' => 'Misiones', 'iso_code' => 'MNES', 'ab_country_id' => $argentina->id],
                ['name' => 'Buenos Aires', 'iso_code' => 'BSAS', 'ab_country_id' => $argentina->id],
                ['name' => 'Cordoba', 'iso_code' => 'CBA', 'ab_country_id' => $argentina->id],
                ['name' => 'Rosario', 'iso_code' => 'ROS', 'ab_country_id' => $argentina->id],
                //Agregar otras provincias de Argentina
            ]
        );
    }
}
