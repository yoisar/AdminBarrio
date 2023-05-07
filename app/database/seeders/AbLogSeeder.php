<?php

namespace Database\Seeders;

use App\Models\AbLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Registro de notificaciones
        AbLog::create([
            'category' => 'Notificaciones',
            'user_id' => 1,
            'observations' => 'Se envió una notificación por falta de pago al usuario con ID 5',
        ]);

        AbLog::create([
            'category' => 'Notificaciones',
            'user_id' => 1,
            'observations' => 'Se envió una notificación de pago confirmado al usuario con ID 8',
        ]);

        // Registro de actualizaciones de saldos deudores
        AbLog::create([
            'category' => 'Saldo deudor',
            'user_id' => 1,
            'observations' => 'El saldo deudor del usuario con ID 3 se actualizó a $150.00',
        ]);

        AbLog::create([
            'category' => 'Saldo deudor',
            'user_id' => 1,
            'observations' => 'El saldo deudor del usuario con ID 5 se actualizó a $200.00',
        ]);

        // Registro de ingresos al sistema
        AbLog::create([
            'category' => 'Ingresos',
            'user_id' => 1,
            'observations' => 'El usuario con ID 1 ingresó al sistema',
        ]);

        AbLog::create([
            'category' => 'Ingresos',
            'user_id' => 1,
            'observations' => 'El usuario con ID 5 ingresó al sistema',
        ]);

        // Registro de registros de usuarios
        AbLog::create([
            'category' => 'Usuarios',
            'user_id' => 1,
            'observations' => 'Se registró un nuevo usuario con ID 10',
        ]);

        AbLog::create([
            'category' => 'Usuarios',
            'user_id' => 1,
            'observations' => 'Se registró un nuevo usuario con ID 11',
        ]);

        // Registro de activaciones y desactivaciones de usuarios
        AbLog::create([
            'category' => 'Usuarios',
            'user_id' => 1,
            'observations' => 'El usuario con ID 3 ha sido activado',
        ]);

        AbLog::create([
            'category' => 'Usuarios',
            'user_id' => 1,
            'observations' => 'El usuario con ID 4 ha sido desactivado',
        ]);

        // Registro de pagos realizados
        AbLog::create([
            'category' => 'Pagos',
            'user_id' => 1,
            'observations' => 'El usuario con ID 5 realizó un pago de $100.00',
        ]);

        AbLog::create([
            'category' => 'Pagos',
            'user_id' => 1,
            'observations' => 'El usuario con ID 6 realizó un pago de $50.00',
        ]);

        // Registro de otros eventos del sistema
        AbLog::create([
            'category' => 'Sistema',
            'user_id' => 1,
            'observations' => 'Se ha iniciado el sistema',
        ]);

        AbLog::create([
            'category' => 'Sistema',
            'user_id' => 1,
            'observations' => 'Se ha detenido el sistema',
        ]);
    }
}
