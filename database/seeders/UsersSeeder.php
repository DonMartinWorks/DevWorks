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
            'name' => 'Alberto Espinoza Hernández',
            'email' => 'deve@deve.com',
            'password' => bcrypt('123456789'),
            'phone' => '987654321',
            'email_verified_at' => now(),
            'role' => 1
        ]);

        User::Create([
            'name' => 'Robert Jackson',
            'email' => 'reclu@reclu.com',
            'password' => bcrypt('123456789'),
            'phone' => '123456789',
            'email_verified_at' => now(),
            'role' => 2
        ]);

        User::Create([
            'name' => 'Guizzepe Ferri',
            'email' => 'deve2@deve2.com',
            'password' => bcrypt('123456789'),
            'phone' => '123789654',
            'email_verified_at' => now(),
            'role' => 1
        ]);

        User::Create([
            'name' => 'Nicoletta Gaines',
            'email' => 'reclu2@reclu2.com',
            'password' => bcrypt('123456789'),
            'phone' => '987456023',
            'email_verified_at' => now(),
            'role' => 2
        ]);
    }
}
