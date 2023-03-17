<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Usuarios creados
        User::Create([
            'name' => 'Din Djarin',
            'email' => 'dindjarin@mandalorian.com',
            'password' => bcrypt('123456789'),
            'phone' => '843701051',
            'email_verified_at' => now(),
            'role' => 1
        ]);

        User::Create([
            'name' => 'Bobba Fett',
            'email' => 'bobba@fett.com',
            'password' => bcrypt('123456789'),
            'phone' => '127110721',
            'email_verified_at' => now(),
            'role' => 2
        ]);
    }
}
