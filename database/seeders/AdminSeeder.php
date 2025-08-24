<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin1@yahoo.com',
            'password' => Hash::make('admin123'), // ganti sesuai keinginan
            'role' => 'admin',
        ],[
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // ganti sesuai keinginan
            'role' => 'admin',
        ]);
    }
}
