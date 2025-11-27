<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "id" => 1,
            "name" => "Tito",
            "email" => "tito@gmail.com",
            "password" => Hash::make("12345")
        ]);

        User::create([
            "id" => 2,
            "name" => "Maria",
            "email" => "Maria@gmail.com",
            "password" => Hash::make("54321")
        ]);
    }
}
