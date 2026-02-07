<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

// Con Proteccion
// Route::middleware("ExampleMiddleware")->get("/a", [ExampleController::class, "index"]);

// Sin proteccion
Route::get("no",[ExampleController::class, "noAccess"])->name("noAccess");

// Grupo con middleware
//Route::middleware(["example", "auth"])->group([
//    Route::get("/", [ExampleController::class, "test"])->withoutMiddleware("auth")
//]);