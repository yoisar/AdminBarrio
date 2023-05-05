<?php

namespace Database\Seeders;

use App\Models\AbCurrency;
use App\Models\AbService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear servicios con moneda USD
        $usd = AbCurrency::where('code', 'USD')->firstOrFail();

        $servicio1 = new AbService();
        $servicio1->name = 'Limpieza de áreas comunes';
        $servicio1->description = 'Servicio de limpieza semanal de áreas comunes del edificio';
        $servicio1->price = 100;
        $servicio1->ab_currency_id = $usd->id;
        $servicio1->save();

        $servicio2 = new AbService();
        $servicio2->name = 'Mantenimiento de jardines';
        $servicio2->description = 'Servicio de mantenimiento semanal de jardines del edificio';
        $servicio2->price = 150;
        $servicio2->ab_currency_id = $usd->id;
        $servicio2->save();

        // Crear servicios con moneda ARS
        $ars = AbCurrency::where('code', 'ARS')->firstOrFail();

        $servicio3 = new AbService();
        $servicio3->name = 'Servicio de portería';
        $servicio3->description = 'Servicio de portería 24hs para el edificio';
        $servicio3->price = 20000;
        $servicio3->ab_currency_id = $ars->id;
        $servicio3->save();

        $servicio4 = new AbService();
        $servicio4->name = 'Mantenimiento de ascensores';
        $servicio4->description = 'Servicio de mantenimiento mensual de ascensores del edificio';
        $servicio4->price = 5000;
        $servicio4->ab_currency_id = $ars->id;
        $servicio4->save();
    }
}
