<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get("/note", [NoteController::class, "index"])->name("note_index");

Route::get("note/create", [NoteController::class, "create"])->name("note_create");

Route::post("note/store", [NoteController::class, "store"])->name("note_store");

Route::delete("note/delete", [NoteController::class, "delete"])->name("delete_note");
