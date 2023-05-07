<?php

namespace Database\Seeders;

use App\Models\AbClient;
use App\Models\AbClientInvoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AbClientInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $clients = AbClient::all();

        foreach ($clients as $client) {
            for ($i = 1; $i <= 1; $i++) {
                AbClientInvoice::create([
                    'ab_client_id' => $client->id,
                    'invoice_number' => $faker->unique()->randomNumber(5),
                    'invoice_date' => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d'),
                    'due_date' => $faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
                    'amount' => $faker->randomFloat(2, 100, 1000),
                    'status' => $faker->randomElement(['draft', 'sent', 'paid', 'pending',  'overdue']),
                    'ab_currency_id' => 1,
                    'exchange_rate' => 1,
                ]);
            }
        }
    }
}
