<?php

namespace Database\Seeders;

use App\Models\AbCientServiceContract;
use App\Models\AbClient;
use App\Models\AbService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbCientServiceContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Obtenemos todos los clientes y servicios existentes
        $clients = AbClient::all();
        $services = AbService::all();

        // Para cada cliente, generamos contratos con servicios aleatorios
        foreach ($clients as $client) {
            // Obtenemos un número aleatorio de contratos a generar
            $numContracts = 1;//rand(1, 5);

            // Generamos los contratos con servicios aleatorios
            for ($i = 0; $i < $numContracts; $i++) {
                // Obtenemos un servicio aleatorio
                $service = $services->random();

                // Generamos un contrato con el servicio aleatorio
                AbCientServiceContract::create([
                    'ab_client_id' => $client->id,
                    'ab_service_id' => $service->id,
                    'start_date' => now(),
                    'end_date' => now()->addYear(),
                    'payment_day' => rand(1, 28),
                    'ab_currency_id' => rand(1, 4),
                    'contract_number' => rand(1, 20222),
                    'price' => $service->price
                ]);
            }
        }
    }
}
