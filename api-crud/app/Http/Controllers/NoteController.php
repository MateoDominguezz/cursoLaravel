<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Symfony\Component\HttpFoundation\JsonResponse;

class NoteController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Note::all(),200);
    }

    public function store(NoteRequest $request): JsonResponse
    {
        $note= Note::create($request->validated());
        return response()->json([
            "succes"=> "true",
            "data" => $note
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }

    public function update(NoteRequest $request, string $id): JsonResponse
    {
        $note = Note::find($id);
        $note->update($request->validated());

        return response()->json([
            "success" => true,
            "data" => $note
        ], 200);
    }

    public function destroy(string $id): JsonResponse
    {
        $note= Note::find($id);
        $note->delete();

        return response()->json([
            "success" => true,
            "data" => $note
        ], 200);
    }
}
