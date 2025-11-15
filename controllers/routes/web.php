<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/", [UserController::class, "index"])->name("user_index");

//Crear usuarios, con el controlador
Route::get("/create",[UserController::class, "create"])->name("user_create");