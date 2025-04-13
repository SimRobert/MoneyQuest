<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // parola: password
            'profile_type' => 'admin',
        ]);

        User::create([
            'name' => 'Student Test',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'profile_type' => 'student',
        ]);

        User::create([
            'name' => 'Angajat Demo',
            'email' => 'angajat@example.com',
            'password' => Hash::make('password'),
            'profile_type' => 'employee',
        ]);
    }
}
