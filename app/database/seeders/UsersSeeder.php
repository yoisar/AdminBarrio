<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'name'              => 'Adminstrador Barrio',
            'email'             => 'admin.barrioa@gmail.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
        ]);

        $demoUser2 = User::create([
            'name'              => 'Yassel Omar Izquierdo Souchay',
            'email'             => 'sioy23@gmail.com',
            'password'          => Hash::make('y01s'),
            'email_verified_at' => now(),
        ]);
    }
}
