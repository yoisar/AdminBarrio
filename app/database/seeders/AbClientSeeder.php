<?php

namespace Database\Seeders;

use App\Models\AbClient;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AbClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $client = new AbClient();
            $client->full_name = $faker->name;
            $client->document_type = $faker->randomElement(['DNI', 'Passport', 'License']);
            $client->document_number = $faker->numberBetween(10000000, 99999999);
            $client->nationality = $faker->country;
            $client->address = $faker->address;
            $client->phone = $faker->phoneNumber;
            $client->billing_name = $faker->company;
            $client->billing_address = $faker->address;
            $client->tax_id = $faker->numberBetween(10000000, 99999999);
            $client->tax_responsibility = $faker->randomElement(['Responsable Inscripto', 'Monotributista', 'Exento']);
            $client->ab_city_id = 1;//$faker->numberBetween(1, 100);
            $client->user_id = 3;
            $client->save();
        }
    }
}
