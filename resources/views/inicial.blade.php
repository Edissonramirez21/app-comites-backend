
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="text/css" rel="shortcut icon"  href="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-naranja-png-2022.png"/>
    <title>App Comeva Inicio | SENA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cargando.css">
    <link rel="stylesheet" type="text/css" href="css/inicial.css">
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
    <br>
    <br>
    <div class="center-image-container">
    <img src="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-verde-complementario-svg-2022.svg" alt="Logo SENA" class="center-image">
    </div>
              
                  <h3 class="text-center"> 
                    Bienvenido al Sistema de Comités y Evaluación del SENA 
                  </h3>
                  <hr>
                  <div class="form-group text-center">
                  <p>" Nuestra excelencia e innovación facilitan la gestión eficiente, 
                    impulsando el crecimiento y mejora constante "</p>
                    <hr>
                    <a href="{{ route('welcome') }}" class="btn btn-success mt-3">Ingresar</a>   
                  </div>
        
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