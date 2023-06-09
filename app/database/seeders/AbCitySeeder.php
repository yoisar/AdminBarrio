<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $misiones = DB::table('ab_provinces')->where('iso_code', 'MNES')->first();

        DB::table('ab_cities')->insert([
            ['name' => 'Posadas', 'zip_code' => '3300', 'ab_province_id' => $misiones->id],
            //Agregar otras ciudades de Misiones y otras provincias de Argentina
        ]);
    }
}
