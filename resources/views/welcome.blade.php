<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="text/css" rel="shortcut icon"  href="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-naranja-png-2022.png"/>
    <title>App Comeva Ingreso | SENA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cargando.css">
    <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>
<body>


<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #5eb319 !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <h1>Sistema de Comités y Evaluación del SENA</h1>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
    <a href="{{ route('login') }}" class="btn btn-success ">Autenticarse</a>
    </div>
</nav>

<div class="container mt-7">
    <br><br>
    <br><br>

    <div class="center-image-container">
        <img src="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-naranja-png-2022.png" alt="Logo SENA" class="center-image">
    </div>

    <h3 class="text-center">
      Validación de Usuario 
    </h3>
    <hr>

    <form method="POST" action="/enviar-codigo">
        @csrf
        <div class="form-group text-center">
            <label for="email">Ingrese el correo electrónico previamente registrado:</label>
            <input type="email" name="email" id="email" class="form-control" required>
            <a href="{{ route('inicial') }}" class="btn btn-success mt-3">Volver al Inicio</a>
            <button type="submit" class="btn btn-success mt-3">Enviar Código</button>
        </div>
    </form>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif
</div>
<hr>
<footer>
Sistema Interactivo para el Monitoreo y Evaluación de Comités &copy;  SENA 2024 Todos los derechos reservados 
</footer>
<br>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cargando.js"></script>
</body>
</html>