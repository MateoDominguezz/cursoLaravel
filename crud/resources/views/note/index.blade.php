@extends("layouts.app")
@section("title", "Notas | Index")

@section("content")
<div class="notes-container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Mis Notas</h2>
        <a href="{{ route('note_create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Crear Nueva Nota
        </a>
    </div>
</div>

<div class="notes-container">
    <!-- Todas las Notas -->
    @forelse ($notes as $note)
        <div class="card note-card mb-3">

            <!-- Cuerpo de la Nota -->
            <div class="card-body">

                <!-- Titulo de la Nota -->
                <h5 class="card-title text-primary">
                    <i class="fas fa-sticky-note me-2"></i>
                    {{ $note->title }}
                </h5>

                <!-- Acciones de la Nota -->
                <div class="note-actions">
                    <!-- Ver la Nota -->
                    <a href="{{ route("note_view", $note->id) }}" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-eye me-1"></i> Ver
                    </a>
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
    @empty

        <!-- Mostrar cuando no haya contenido en las Notas -->
        <div class="empty-state text-center py-5">
            <i class="fas fa-clipboard-list fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">No hay notas creadas</h4>
            <p class="text-muted">Crea tu primera nota</p>
        </div>
    @endforelse
</div>

@endsection
