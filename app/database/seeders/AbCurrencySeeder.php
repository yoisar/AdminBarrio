<?php

namespace Database\Seeders;

use App\Models\AbCurrency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $currencies = [
            [
                'name' => 'Dólares Estadounidenses',
                'symbol' => 'USD',
            ],
            [
                'name' => 'Pesos Argentinos',
                'symbol' => 'ARS',
            ],
            [
                'name' => 'Guaraníes Paraguayos',
                'symbol' => 'PYG',
            ],
            [
                'name' => 'Real Brasileño',
                'symbol' => 'BRL',
            ],
            [
                'name' => 'Pesos Uruguayos',
                'symbol' => 'UYU',
            ]
        ];

        foreach ($currencies as $currency) {
            AbCurrency::create($currency);
        }
    }
}
