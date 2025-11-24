<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    public function index(): JsonResource
    {
       // return response()->json(Note::all(),200);
       return NoteResource::collection(Note::all());
    }

    public function store(NoteRequest $request): JsonResponse
    {
        $note= Note::create($request->validated());
        return response()->json([
            "succes"=> "true",
            "data" => new NoteResource($note)
        ], 201);
    }

    public function show(string $id): JsonResource
    {
        $note = Note::find($id);
        return new NoteResource($note);
        //return response()->json($note, 200);
    }

    public function update(NoteRequest $request, string $id): JsonResponse
    {
        $note = Note::find($id);
        $note->update($request->validated());

        return response()->json([
            "success" => true,
            "data" => new NoteResource($note)
        ], 200);
    }

    public function destroy(string $id): JsonResponse
    {
        $note= Note::find($id);
        $note->delete();

        return response()->json([
            "success" => true,
        ], 200);
    }
}
