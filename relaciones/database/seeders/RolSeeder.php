<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            "id" => 1,
            "name" => "admin",
        ]);

        Rol::create([
            "id" => 2,
            "name" => "gerente",
        ]);
        
        Rol::create([
            "id" => 3,
            "name" => "cliente",
        ]);        

        //Creacion de la tabla intermedia
        DB::table("rol_user")->insert([
            "role_id" => 1,
            "user_id" => 1,
            "agregado_por" => "Mateo"
        ]);

        DB::table("rol_user")->insert([
            "role_id" => 2,
            "user_id" => 2,
            "agregado_por" => "Jose"
        ]);
        
        DB::table("rol_user")->insert([
            "role_id" => 2,
            "user_id" => 1,
            "agregado_por" => "Mateo"
        ]);
        
        DB::table("rol_user")->insert([
            "role_id" => 3,
            "user_id" => 2,
            "agregado_por" => "Pedro"
        ]);    
    }
}
