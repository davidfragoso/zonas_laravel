<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonas Arqueológicas de México</title>
    <!-- Enlaces a CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
<!-- Barra de Navegación -->
@include('components.navbar')
<!-- Carrusel de Imágenes -->
@include('components.carrusel')
<!-- filtro por zonas -->
<div class="d-flex justify-content-center align-items-center mt-4">
    @include('components.filtro', ['estados' => $estados])
</div>
<!-- filtro por zonas -->
<div class="container mt-4" id="contenedor-zonas">
    @include('components.cardssection')
</div>

    <div id="loader" style="display: none; text-align: center;">
        <div class="spinner"></div>
        <p>Cargando más zonas...</p>

    </div>
        
    <!-- Pie de Página -->
    @include('components.footer')
    <!-- Scripts -->
    <script>
        @if(isset($zonasArqueologicas) && method_exists($zonasArqueologicas, 'lastPage'))
            var totalPaginas = {{ $zonasArqueologicas->lastPage() }};
        @else
            var totalPaginas = 0; // O manejarlo de alguna otra manera
        @endif
    </script>
    
    
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
