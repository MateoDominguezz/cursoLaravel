@extends("layouts.app")

@section("title", "Notas | Update")

@section("content")

<!-- Header -->
@extends("layouts.header")

<!-- Formulario -->
<form method="POST" action= "{{ route("note_edit", $note->id)}}" class="container mt-5">
    @method("PUT")
    @csrf

    <!-- Muestra los erorres -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <h4>Errores:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    


    <div class="row justify-content-center">
        <div class="col-lg-6">

            <!-- Header -->
            <h3 class="text-center mb-4">Actualizar la nota de: <strong class="text-info">{{$note->title}}</strong></h3>
            
            <!-- Titulo -->
            <div class="mb-4">
                <label for="title" class="form-label"><strong>Titulo</strong></label>
                <input type="text" class="form-control border-2 py-2" name="title" placeholder="¿De qué se trata tu nota?" value="{{ $note->title }}">
            </div>
            
            <!-- Descripcion -->
            <div class="mb-4">
                <label for="description" class="form-label"><strong>Descripcion</strong></label>
                <textarea class="form-control border-2 limitar-area" name="description" rows="7" placeholder="Ingresa la nota aca">{{$note->description}}</textarea>
            </div>
            
            <!-- Botones-->
            <div class="d-flex gap-3 justify-content-center">
                <!-- Boton Insertar -->
                <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
                    <i class="fas fa-plus-circle me-2"></i>Actualizar Nota
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