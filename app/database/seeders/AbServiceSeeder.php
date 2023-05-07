<?php

namespace Database\Seeders;

use App\Models\AbService;
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
        $services = [
            [
                'name' => 'Alquileres Promo',
                'description' => '-',
                'functional_units' => 10,
                'unit_price' => 0.50,
                'min_months_contract' => 3,
                'tax' => 1.105,
                'subtotal' => 15.00,
                'final_price' => 17.00,
                'ab_currency_id' => 1
            ],
            [
                'name' => 'Alquileres Standard',
                'description' => '-',
                'functional_units' => 10,
                'unit_price' => 1.50,
                'min_months_contract' => 6,
                'tax' => 1.105,
                'subtotal' => 90.00,
                'final_price' => 100.00,
                'ab_currency_id' => 1
            ],
            [
                'name' => 'Barrios Promo',
                'description' => '-',
                'functional_units' => 30,
                'unit_price' => 1.00,
                'min_months_contract' => 3,
                'tax' => 1.105,
                'subtotal' => 90.00,
                'final_price' => 100.00,
                'ab_currency_id' => 1
            ],
            [
                'name' => 'Barrios Standard',
                'description' => '-',
                'functional_units' => 30,
                'unit_price' => 2.50,
                'min_months_contract' => 6,
                'tax' => 1.105,
                'subtotal' => 450.00,
                'final_price' => 498.00,
                'ab_currency_id' => 1
            ],
            [
                'name' => 'Barrios y Alquileres Promo',
                'description' => '-',
                'functional_units' => 5,
                'unit_price' => 1.50,
                'min_months_contract' => 3,
                'tax' => 1.105,
                'subtotal' => 22.50,
                'final_price' => 25.00,
                'ab_currency_id' => 1
            ],
            [
                'name' => 'Barrios y Alquileres Standard',
                'description' => '-',
                'functional_units' => 5,
                'unit_price' => 3.00,
                'min_months_contract' => 6,
                'tax' => 1.105,
                'subtotal' => 90.00,
                'final_price' => 100.00,
                'ab_currency_id' => 1
            ]
        ];

        foreach ($services as $service) {
            AbService::create($service);
        }
    }
}
