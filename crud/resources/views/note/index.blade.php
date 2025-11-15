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
    @forelse ($notes as $note)
        <div class="card note-card mb-3">
            <div class="card-body">
                <h5 class="card-title text-primary">
                    <i class="fas fa-sticky-note me-2"></i>
                    {{ $note->title }}
                </h5>
                <p class="card-text text-muted">
                    {{ $note->description}}
                </p>
                <div class="note-actions">
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-eye me-1"></i> Ver
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-edit me-1"></i> Editar
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="empty-state text-center py-5">
            <i class="fas fa-clipboard-list fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">No hay notas creadas</h4>
            <p class="text-muted">Comienza creando tu primera nota</p>
        </div>
    @endforelse
</div>

<style>
.notes-container {
    max-width: 800px;
    margin: 0 auto;
}
.note-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.note-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}
.note-actions {
    margin-top: 15px;
}
.empty-state {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 40px;
}
.card-title {
    border-bottom: 2px solid #e9ecef;
    padding-bottom: 10px;
}
</style>
</style>
@endsection
