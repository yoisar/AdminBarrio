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
                $service = $services->random();
                AbClientInvoiceDetail::create([
                    'item_name' => $service->name, //$faker->word(),
                    'ab_invoice_id' => $incoive->id,
                    'description' => $service->description, //$faker->sentence(),
                    'quantity' => 1, //$faker->randomNumber(2),
                    'price' => $service->subtotal, //->randomFloat(2, 1, 1000),
                    'tax' => 1.105, //$faker->randomFloat(2, 0, 100),
                    'total' => $service->final_price //$faker->randomFloat(2, 1, 10000),
                ]);
            }
        }
    }
}
