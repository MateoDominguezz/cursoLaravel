<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo de Productos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .product-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .product-image {
            height: 200px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .price-tag {
            font-size: 1.5rem;
            font-weight: bold;
            color: #198754;
        }
        .product-title {
            color: #2c3e50;
            border-bottom: 2px solid #f8f9fa;
            padding-bottom: 10px;
        }
        .short-desc {
            color: #6c757d;
            font-style: italic;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Nuestros Productos</h1>
            <p class="lead text-muted">Descubre nuestra selección de productos de alta calidad</p>
        </div>
        
        @if(count($productos) > 0)
        <div class="row g-4">
            @foreach ($productos as $producto)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card product-card h-100 border-0 shadow-sm">
                    <div class="product-image">
                        <i class="bi bi-box-seam display-4"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title product-title">{{ $producto->nombre }}</h3>
                        <p class="card-text short-desc mb-2">{{ $producto->descripcion_corta }}</p>
                        <p class="card-text">{{ $producto->descripcion }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="price-tag">${{ number_format($producto->precio, 2) }}</span>
                            <button class="btn btn-primary">
                                <i class="bi bi-cart-plus me-1"></i> Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="alert alert-info text-center">
            <h4>No hay productos disponibles</h4>
            <p>Actualmente no tenemos productos en nuestro catálogo.</p>
        </div>
        @endif
        
        <div class="text-center mt-5">
            <p class="text-muted">Mostrando {{ count($productos) }} productos</p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>