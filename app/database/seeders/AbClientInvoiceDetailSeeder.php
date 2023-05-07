<?php

namespace Database\Seeders;

use App\Models\AbClientInvoice;
use App\Models\AbClientInvoiceDetail;
use App\Models\AbService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AbClientInvoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $invoices = AbClientInvoice::all();
        $services = AbService::all();

        foreach ($invoices as $incoive) {
            for ($i = 0; $i < 1; $i++) {
                AbClientInvoiceDetail::create([
                    'item' => $faker->word(),
                    'ab_invoice_id' => $incoive->id,
                    'description' => $faker->sentence(),
                    'quantity' => $faker->randomNumber(2),
                    'price' => $faker->randomFloat(2, 1, 1000),
                    'tax' => $faker->randomFloat(2, 0, 100),
                    'total' => $faker->randomFloat(2, 1, 10000),
                ]);
            }
        }
    }
}
