<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

//Ruta de inicio
Route::view("/", "index")->name("index");

// Ruta para ver todos las Notas
Route::get("/note", [NoteController::class, "index"])->name("note_index");

//Ruta para ver la nota completa
Route::get("note/ver/{note}", [NoteController::class, "view"])->name("note_view");

// Ruta para llevar al formulario, para crear notas
Route::get("note/create", [NoteController::class, "create"])->name("note_create");

// Ruta para llamar al metodo de crear notas
Route::post("note/store", [NoteController::class, "store"])->name("note_store");

//Ruta para ir a actualizar la nota, con el formulario ya pintado
Route::get("/note/update/{note}",[NoteController::class, "update"])->name("note_update");

//Ruta actualizar nota
Route::put("note/edit/{note}", [NoteController::class, "edit"])->name("note_edit");

Route::delete("note/delete/{note}", [NoteController::class, "delete"])->name("note_delete");
