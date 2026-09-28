<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->create([
            'name' => 'Sabrina',
            'email' => 'sabry@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}