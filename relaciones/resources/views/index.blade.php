<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Dashboard</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link css -->
    <link rel="stylesheet" href=" {{asset("user.css") }} ">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
</head>
<body>

    <!-- Navbar Limpia -->
    <nav class="navbar navbar-custom sticky-top">
        <div class="container py-1">
            <a class="navbar-brand d-flex align-items-center fw-bold text-dark" href="#">
                <div class="bg-primary text-white rounded p-1 me-2 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                    <i class="bi bi-grid-fill small"></i>
                </div>
                AdminPanel
            </a>
            
            <div class="d-flex align-items-center">
                <span class="text-muted small me-3 d-none d-md-block">Bienvenido, Mateo</span>
                <div class="rounded-circle bg-secondary" style="width: 35px; height: 35px; background-image: url('https://ui-avatars.com/api/?name=Admin&background=random'); background-size: cover;"></div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pb-5">
        
        <!-- Header de la sección con BUSCADOR -->
        <div class="row align-items-center mb-4 g-3">
            <!-- Título y descripción -->
            <div class="col-md-5">
                <h2 class="fw-bold mb-1">Usuarios</h2>
                <p class="text-muted mb-0">Gestiona los miembros y sus contactos.</p>
            </div>

            <!-- Acciones: Buscador + Botón -->
            <div class="col-md-7">
                <div class="d-flex justify-content-md-end gap-3 flex-wrap flex-md-nowrap">
                    
                    <!-- Formulario de Búsqueda -->
                    <form action="#" method="GET" class="w-100 position-relative" style="max-width: 300px;">
                        <i class="bi bi-search search-icon"></i>
                        <input type="text" name="search" class="form-control search-input" placeholder="Buscar por nombre o email..." aria-label="Buscar">
                    </form>

                    <!-- Botón Crear -->
                    <a href="#" class="btn btn-create text-decoration-none d-flex align-items-center justify-content-center">
                        <i class="bi bi-plus-lg me-2"></i>Nuevo Usuario
                    </a>
                </div>
            </div>
        </div>

        <!-- Card de la Tabla -->
        <div class="main-card">
            <div class="table-responsive">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th scope="col" class="ps-4">Usuario</th>
                            <th scope="col">Status</th>
                            <th scope="col">Teléfonos Registrados</th>
                            <th scope="col" class="text-end pe-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <!-- Columna Combinada: Avatar + Nombre + Email -->
                                <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar con Inicial -->
                                        <div class="avatar-circle">
                                            {{ substr($user->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <div class="fw-bold text-dark">{{ $user->name }}</div>
                                            <div class="small text-muted">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>

                                <!-- Columna Status (Simulada para estética) -->
                                <td>
                                    <span class="badge bg-success-subtle text-success rounded-pill px-3 fw-normal border border-success-subtle">
                                        Activo
                                    </span>
                                </td>
                                
                                <!-- Columna Teléfonos -->
                                <td style="max-width: 250px;">
                                    @forelse ($user->phones as $phone)
                                        <div class="phone-badge">
                                            <i class="bi bi-telephone-fill me-2 opacity-75" style="font-size: 0.7em;"></i>
                                            {{ $phone->telefono }}
                                        </div>
                                    @empty
                                        <span class="small text-muted fst-italic">
                                            <i class="bi bi-dash-circle me-1"></i>Sin contacto
                                        </span>
                                    @endforelse
                                </td>
                                
                                <!-- Columna Acciones -->
                                <td class="text-end pe-4">
                                    <div class="d-inline-flex gap-1">
                                        <a href="#" class="action-btn" data-bs-toggle="tooltip" title="Ver perfil">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="action-btn edit" data-bs-toggle="tooltip" title="Editar">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        
                                        <form action="#" method="POST" class="d-inline">
                                            <button type="submit" class="action-btn delete" title="Eliminar">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5">
                                    <div class="py-4">
                                        <i class="bi bi-search text-muted display-4 mb-3 d-block opacity-25"></i>
                                        <h5 class="text-muted fw-normal">No se encontraron resultados</h5>
                                        <p class="small text-muted">Intenta con otros términos de búsqueda.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Footer de la tabla (Paginación simulada) -->
            <div class="d-flex justify-content-between align-items-center p-4 border-top bg-light bg-opacity-10">
                <span class="small text-muted">Mostrando registros</span>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link border-0 bg-transparent" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link border-0 rounded-3 bg-primary" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border-0 bg-transparent text-muted" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border-0 bg-transparent text-muted" href="#">3</a></li>
                        <li class="page-item"><a class="page-link border-0 bg-transparent" href="#">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Inicializar tooltips de Bootstrap
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>