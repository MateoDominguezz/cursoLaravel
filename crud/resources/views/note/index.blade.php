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
                <!-- Descripcion de la Nota -->
                <p class="card-text text-muted">
                    {{ $note->description}}
                </p>

                <!-- Acciones de la Nota -->
                <div class="note-actions">
                    <!-- Ver la Nota -->
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-eye me-1"></i> Ver
                    </a>
                    <!-- Editar la Nota -->
                    <a href="#" class="btn btn-outline-warning btn-sm">
                        <i class="fas fa-edit me-1"></i> Editar
                    </a>
                    <!-- Eliminar la Nota -->
                    <button type="button" class="btn btn-outline-danger btn-sm" 
                            data-bs-toggle="modal">
                        <i class="fas fa-trash-alt me-1"></i> Eliminar
                    </button>
                </div>
            </div>
        </div>
    @empty

        <!-- Mostrar cuando no haya contenido en las Notas -->
        <div class="empty-state text-center py-5">
            <i class="fas fa-clipboard-list fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">No hay notas creadas</h4>
            <p class="text-muted">Comienza creando tu primera nota</p>
        </div>
    @endforelse
</div>

@endsection
