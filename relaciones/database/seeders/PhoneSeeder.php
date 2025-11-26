<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            "telefono" => 2284372665,
            "user_id" => 1
        ]);

        Phone::create([
            "telefono" => 2290240901,
            "user_id" => 2
        ]);

        Phone::create([
            "telefono" => 2284985601,
            "user_id" => 1
        ]);

        Phone::create([
            "telefono" => 2284099125,
            "user_id" => 1
        ]);
        
        Phone::create([
            "telefono" => 20122026296,
            "user_id" => 2
        ]);        
    }
}
