<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro Exitoso | SENA</title>
    <link type="text/css" rel="shortcut icon" href="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-naranja-png-2022.png"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="container mt-7">
    <div class="center-image-container">
        <img src="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-negro-svg-2022.svg" alt="Logo SENA" class="center-image">
    </div>

    <h3 class="text-center">
        ¡Registro Exitoso!
    </h3>
    <hr>

    <div class="alert alert-success text-center">
        Usted se encuentra registrado y en la lista de espera.
    </div>

    <h5 class="text-center">
        Gracias por registrarse en nuestro sistema. Nos pondremos en contacto con usted pronto.
    </h5>

    <div class="text-center" id="maquinaescribir">
    <a href="{{ route('home') }}" class="btn btn-success ">Volver al Inicio</a>
    </div>
</div>
<hr>
<footer>
    Sistema Interactivo para el Monitoreo y Evaluación de Comités &copy; SENA 2024 Todos los derechos reservados
</footer>
<br>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/cargando.js') }}"></script>
</body>
</html>
