<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get("/note", [NoteController::class, "index"])->name("note_index");

Route::get("note/create", [NoteController::class, "create"])->name("note_create");
