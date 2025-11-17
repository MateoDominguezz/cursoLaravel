<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Ruta para ver todos las Notas
Route::get("/note", [NoteController::class, "index"])->name("note_index");

// Ruta para llevar al formulario, para crear notas
Route::get("note/create", [NoteController::class, "create"])->name("note_create");

// Ruta para llamar al metodo de crear notas
Route::post("note/store", [NoteController::class, "store"])->name("note_store");

// Route::delete("note/delete", [NoteController::class, "delete"])->name("delete_note");
