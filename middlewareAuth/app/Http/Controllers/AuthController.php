<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json([
            "message" => "Usuario creado con exito",
            "token" => $user->createToken("UserTokenAccess")->plainTextToken
        ],200);
    }

    public function loginUser(LoginRequest $request)
    {
        if(!Auth::attempt($request->only(["email", "password"]))){
            return response()->json([
                "status" => "error",
                "message" => "No se pudo loguear",
                ""
            ],401);
        }

        $user = User::where("email",$request->email)->first();
        return response()->json([
            "status" => "success",
            "message" => "Se pudo loguear exitosamente",
            "token" => $user->createToken("API TOKEN")->plainTextToken
        ],200);
    }
}
