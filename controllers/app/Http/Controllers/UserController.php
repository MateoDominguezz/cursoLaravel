<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Metodo estatico para recuperar todos los Users
        $users = User::where("age",">",17)->orderBy("age","desc")->limit(5)->get();

        //Mostrar un solo usuario por id
        $userById= User::findOrFail(1);
        // Devueleve una vista,
        //pero en esta vista se puede trabajar con los Users 
        return view("user.index", compact("users"));
    }

    public function getById()
    {
        $userById = User::find(1);
        //$users1 = User::where("age",">",18)->orWhere("zip_code", 7400)->limit(5)->orderBy("desc")->get();
        return view("user.id",compact("userById"));
    }

    public function create()
    { 
        User::create([
            "name" => "Jose",
            "email" => "jose@gmail.com",
            "password" => Hash::make("98765"),
            "age" => 30,
            "addres" => "Las palmeritas 123",
            "zip_code" => 4000
        ]);

        User::create([
            "name" => "Pedro",
            "email" => "pedro@gmail.com",
            "password" => Hash::make("68123"),
            "age" => 18,
            "addres" => "Islas 543",
            "zip_code" => 7200
        ]);

        return redirect()->route("user_index");
    }
}
