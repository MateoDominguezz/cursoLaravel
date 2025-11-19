<?php

namespace App\Http\Requests\NoteRequest;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required|min:3",
            "description" => "required|min:10"
        ];
    }

    public function messages(): array
    {
        return [
            "title.required" => "El campo titulo es obligatorio",
            "title.min" => "El campo titulo debe tener al menos 3 caracteres",
            "description.required" => "El campo descripcion es obligatorio",
            "description.min" => "El campo descripcion debe tener al menos 10 caracteres"
        ];
    }
}
