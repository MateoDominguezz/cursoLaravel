<?php

namespace App\Http\Controllers;

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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            "title" => "required|min:3",
            "description" => "required|min:10"
        ],[
            "title.required" => "El campo titulo es obligatorio",
            "title.min" => "El campo titulo debe tener al menos 3 caracteres",
            "description.required" => "El campo descripcion es obligatorio",
            "description.min" => "El campo descripcion debe tener al menos 10 caracteres"
        ]);

        Note::create($validated);
        
        return redirect()->route("note_index");
    }

    //Formulario de actualizar nota
    public function update(Note $note): View
    {
        return view("note.update", compact("note"));
    }

    //Actualizar nota
    public function edit(Request $request, Note $note): RedirectResponse
    {
        $validated = $request->validate([
            "title" => "required|min:3",
            "description" => "required|min:10"
        ],[
            "title.required" => "El campo titulo es obligatorio",
            "title.min" => "El campo titulo debe tener al menos 3 caracteres",
            "description.required" => "El campo descripcion es obligatorio",
            "description.min" => "El campo descripcion debe tener al menos 10 caracteres"            
        ]);
        $note->update($validated);
        return redirect()->route("note_index");
    } 

    //Eliminar Nota
    public function delete(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route("note_index");
    }
}
