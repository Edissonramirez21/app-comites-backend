<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>App Comeva Login | SENA</title>
    <link type="text/css" rel="shortcut icon"  href="https://res.cloudinary.com/dxo3myijj/image/upload/v1732146347/SENA/logo-sena-naranja-svg-2022_veur23.svg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/cargando.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>



<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5eb319 !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <h1>¿Eres aprendiz o funcionario involucrado en comités y no tienes usuario?</h1>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
    <a href="{{ route('registro') }}" class="btn btn-success ">Registrese</a>
    </div>
    </nav>
 
 <div class="container mt-7">
    <div class="center-image-container">
        <img src="https://res.cloudinary.com/dxo3myijj/image/upload/v1732146347/SENA/logo-sena-negro-svg-2022_pysnmh.svg" alt="Logo SENA" class="center-image">
    </div>

    <h3 class="text-center">
        Inicie Sesión
    </h3>
    <hr>
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div class="form-group text-center">
            <!-- Campo Número Identificación -->
            <div class="form-group mb-3">
                <label for="identificacion">Número Identificación:</label>
                <input type="text" name="identificacion" id="identificacion" class="form-control" maxlength="12" pattern="\d{1,12}" inputmode="numeric" required>
            </div>

            <!-- Campo Código de verificación -->
            <div class="form-group mb-3">
                <label for="codigo_validacion">Código de verificación:</label>
                <input type="text" name="codigo_validacion" id="codigo_validacion" class="form-control" maxlength="6" pattern="\d{6}" inputmode="numeric" required>
            </div>
            <a href="{{ route('welcome') }}" class="btn btn-success mt-3">Generar Código</a>
            <button type="submit" class="btn btn-success mt-3">Acceder</button>
        </div>
    </form>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger text-center mt-3">
            {{ session('error') }}
        </div>
    @endif
</div>
<hr>
<footer>
    Sistema Interactivo para el Monitoreo y Evaluación de Comités &copy; SENA 2024 Todos los derechos reservados
</footer>
<br>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/cargando.js"></script>
</body>
</html>

