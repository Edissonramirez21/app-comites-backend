<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sesión Expirada | SENA</title>
    <link type="text/css" rel="shortcut icon" href="https://res.cloudinary.com/dxo3myijj/image/upload/v1732146347/SENA/logo-sena-naranja-svg-2022_veur23.svg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
    <!-- Incluir Bootstrap Icons (opcional, si deseas usar íconos) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="container mt-7">
    <div class="center-image-container">
        <img src="https://res.cloudinary.com/dxo3myijj/image/upload/v1732146347/SENA/logo-sena-naranja-svg-2022_veur23.svg" alt="Logo SENA" class="center-image">
    </div>

    <h3 class="text-center">
        Sesión Expirada
    </h3>
    <hr>

    <div class="alert alert-warning text-center">
        <i class="bi bi-exclamation-triangle-fill"></i>
        Tu sesión ha expirado por inactividad.
    </div>

    <h5 class="text-center">
        Por tu seguridad, hemos cerrado tu sesión después de un período de inactividad.
    </h5>

    <div class="text-center mt-4" id="maquinaescribir">
        <a href="{{ route('welcome') }}" class="btn btn-success">Iniciar Sesión de Nuevo</a>
    </div>
</div>
<hr>
<footer>
    Sistema Interactivo para el Monitoreo y Evaluación de Comités &copy; SENA 2024 Todos los derechos reservados
</footer>
<br>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('js/cargando.js') }}"></script>
</body>
</html>
