<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


Route::apiResource("/note",NoteController::class);