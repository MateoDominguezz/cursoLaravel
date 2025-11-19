@extends("layouts.app")
@section('title', 'Nota | Ver')

@section('content')
<div class="note-view-container mt-4">
    <div class="container">
        <!-- Botón volver -->
        <div class="mb-4">
            <a href="{{ route('note_index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i> Volver a la lista
            </a>
        </div>

        <!-- Nota -->
        <div class="card note-view-card">
            <div class="card-body">
                <!-- Título -->
                <h2 class="card-title text-primary mb-4">
                    <i class="fas fa-sticky-note me-2"></i>
                    {{ $note->title }}
                </h2>
                
                <!-- Descripción -->
                <div class="note-content">
                    <p class="card-text fs-5">{{ $note->description }}</p>
                </div>

                <!-- Acciones de la Nota -->
                <div class="note-actions">
                    <!-- Editar la Nota -->
                    <a href="{{ route("note_update", $note->id) }}" class="btn btn-outline-warning btn-sm">
                        <i class="fas fa-edit me-1"></i> Editar
                    </a>
                    <!-- Eliminar la Nota -->
                    <form method="POST" class="d-inline" action="{{ route("note_delete", $note->id) }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal">
                            <i class="fas fa-trash-alt me-1"></i> Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection