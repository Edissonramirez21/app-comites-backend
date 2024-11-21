<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>App Comeva Registro | SENA</title>
    <link type="text/css" rel="shortcut icon" href="https://res.cloudinary.com/dxo3myijj/image/upload/v1732146347/SENA/logo-sena-naranja-svg-2022_veur23.svg"/>

    <!-- Incluir Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <img src="https://res.cloudinary.com/dxo3myijj/image/upload/v1732146347/SENA/logo-sena-negro-svg-2022_pysnmh.svg" alt="Logo SENA" class="center-image">
    </div>

    <h3 class="text-center">
        Registro de Usuario
    </h3>
    <hr>

    <!-- Mensaje de Advertencia -->
    <div class="alert alert-warning text-center">
        <i class="bi bi-exclamation-triangle-fill"></i>
        <strong> Atención:</strong> 
        Este portal está destinado exclusivamente a funcionarios del SENA y aprendices que están en proceso de comité. 
        Si no formas parte de nuestra comunidad, te pedimos amablemente que te abstengas de registrarte.
        De lo contrario, podrías ser bloqueado del sistema.
    </div>

    <form method="POST" action="{{ route('registro.post') }}">
        @csrf
        <div class="form-group text-center">
            <!-- Campo Nombre -->
            <div class="form-group mb-3">
                <label for="name">Nombre y Apellido:</label>
                <input type="text" name="name" id="name" class="form-control" maxlength="60"  required>
            </div>

            <!-- Campo Email -->
            <div class="form-group mb-3">
                <label for="email">Correo Electrónico:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <!-- Campo Teléfono -->
            <div class="form-group mb-3">
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" class="form-control" maxlength="15" pattern="\d{1,15}" inputmode="numeric" required>
            </div>

            <!-- Campo Identificación -->
            <div class="form-group mb-3">
                <label for="identificacion">Número Identificación:</label>
                <input type="text" name="identificacion" id="identificacion" class="form-control" maxlength="12" pattern="\d{1,12}" inputmode="numeric" required>
            </div>
            <a href="{{ route('login') }}" class="btn btn-success mt-3">Volver</a>
            <button type="submit" class="btn btn-success mt-3">Registrarse</button>
            </div>
    </form>
</div>

        @if ($errors->any())
        <div class="alert alert-danger text-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
        @endif


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
