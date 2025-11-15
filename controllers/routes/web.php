<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Termwind\Components\Raw;

Route::get("/", [UserController::class, "index"])->name("user_index");

//Crear usuarios, con el controlador
Route::get("/create",[UserController::class, "create"])->name("user_create");

Route::get("/id",[UserController::class, "getById"])->name("user_id");