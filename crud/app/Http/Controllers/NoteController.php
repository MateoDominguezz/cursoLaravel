<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest\NoteRequest;
use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class NoteController extends Controller
{
    // Mostrar todas las notas
    public function index(): View
    {
        $notes = Note::all();
        return view("note.index", compact("notes"));
    }

    //Mostrar una nota
    public function view(Note $note): View
    {
        return view("note.view", compact("note"));
    }

    // Te lleva al apartado para insertar notas
    public function create(): View
    {
        return view("note.create");
    }    

    // Insertar nota
    public function store(NoteRequest $request): RedirectResponse
    {
        Note::create($request->validated());
        return redirect()->route("note_index")->with("success", "Nota creada con exito");
    }

    //Formulario de actualizar nota
    public function update(Note $note): View
    {
        return view("note.update", compact("note"));
    }

    //Actualizar nota
    public function edit(NoteRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->validated());
        return redirect()->route("note_index")->with("success", "Se pudo actualizar la nota correctamente");
    } 

    //Eliminar Nota
    public function delete(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route("note_index")->with("success","Se pudo eliminar la nota exitosamente");
    }
}
