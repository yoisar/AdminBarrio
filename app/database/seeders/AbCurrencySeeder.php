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
                'code' => 'USD',
            ],
            [
                'name' => 'Pesos Argentinos',
                'code' => 'ARS',
            ],
            [
                'name' => 'Guaraníes Paraguayos',
                'code' => 'PYG',
            ],
            [
                'name' => 'Real Brasileño',
                'code' => 'BRL',
            ],
            [
                'name' => 'Pesos Uruguayos',
                'code' => 'UYU',
            ]
        ];

        foreach ($currencies as $currency) {
            AbCurrency::create($currency);
        }
    }
}
