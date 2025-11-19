@extends("layouts.app")

@section("title", "Notas | Crear")

@section("content")
<!-- Formulario -->
<form method="POST" action= "{{ route("note_store")}}" class="container mt-5">
    @csrf
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <!-- Header -->
            <h3 class="text-center mb-4">Crear Nueva Nota</h3>
            
            <!-- Titulo -->
            <div class="mb-4">
                <label for="title" class="form-label"><strong>Título</strong></label>
                <input type="text" class="form-control border-2 py-2" name="title" placeholder="¿De qué se trata tu nota?">
                @error("title")
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            
            <!-- Descripcion -->
            <div class="mb-4">
                <label for="description" class="form-label"><strong>Descripcion</strong></label>
                <textarea class="form-control border-2 limitar-area" name="description" rows="7" placeholder="Ingresa la nota aca"></textarea>
                @error("description")
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            
            <!-- Botones-->
            <div class="d-flex gap-3 justify-content-center">
                <!-- Boton Insertar -->
                <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
                    <i class="fas fa-plus-circle me-2"></i>Crear Nota
                </button>
                <!-- Boton Cancelar -->
                <a href="{{ route('note_index') }}" class="btn btn-light btn-lg px-4 py-2 border">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </div>
        </div>
    </div>
</form>
@endsection