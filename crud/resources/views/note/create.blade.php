@extends("layouts.app")

@section("title", "Notas | Crear")

@section("content")
<form class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h3 class="text-center mb-4">Crear Nueva Nota</h3>
            
            <div class="mb-4">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control border-2 py-2" id="title" placeholder="¿De qué se trata tu nota?">
            </div>
            
            <div class="mb-4">
                <label for="description" class="form-label"></label>
                <textarea class="form-control border-2 limitar-area" id="description" rows="7" placeholder="Ingresa la nota aca"></textarea>
            </div>
            
            <div class="d-flex gap-3 justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg px-4 py-2">
                    <i class="fas fa-plus-circle me-2"></i>Crear Nota
                </button>
                <a href="{{ route('note_index') }}" class="btn btn-light btn-lg px-4 py-2 border">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </div>
        </div>
    </div>
</form>

<style>
.limitar-area{
    max-height: 200px;
    resize: none;
}

</style>
@endsection