<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    // Mostrar todas las notas
    public function index()
    {
        $notes = Note::all();
        return view("note.index", compact("notes"));
    }

    // Te lleva al apartado para insertar notas
    public function create()
    {
        return view("note.create");
    }    

    // Insertar nota
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|max:100|min:3",
            "description" => "required|min:10"
        ]);

        Note::create([
            "title" => $validated["title"],
            "description" => $validated["description"],
        ]);
        
        return redirect()->route("note_index");
    }

    //Eliminar Nota
    public function delete($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route("note_index")->with("message", "Se elimino la nota con ID: $id");
    }
}
