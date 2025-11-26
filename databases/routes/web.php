<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/producto", [ProductController::class, "index"])->name("producto_index");