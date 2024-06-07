<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #008000;
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: Black;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Bienvenido</h1>
    <br>
    <br>
   
</body>
</html>
 -->
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link type="text/css" rel="shortcut icon" href="public\images\logo-del-sena-verde.jpg"/>
	<title>  Codigo 6 digitos </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cargando.css">
</head>
  <style>
  	span{
  		width: 100%;
  		padding: 15px 25px;
  		border-radius: 5px;
  		font-weight: 900;
  		font-size: 60px;
  		text-align: center;
  		color: green;
  		background-color: #cecece;
  	}
      h3{
          font-size: 35px;
          font-weight: 900;
          color: #ffa900;
          margin-top: 150px;
      }
  </style>
<body>


<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #008000 !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <h1>SENA C.B.A Mosquera</h1>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Envia al correo </h5>
    </div>
</nav>


<div class="container mt-7">
<br><br>
<br><br>


<h3 class="text-center">
	 Codigo Validación
</h3>
<hr>


<?php
/**Demo 1***/
/* $logitudPass = 5;
$miPassword  = substr( md5(microtime()), 1, $logitudPass);
 */
//con la función md5 calculamos el hash md5 de ese string generado
// con el substr  obtenemos una porción de ese string


/**Demo 2**/
/* function claveOne($length = 4) {
    return substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
$miClaveOne  = claveOne(); */


/**Demo 3 **/
function claveThree($length = 6) { 
    return substr(str_shuffle("0123456789"), 0, $length); 
} 
$miClaveThree  = claveThree();


/**Demo 4**/
/* function claveFour(){  
  $longitud = 8; //longitud del password  
  $pass = substr(md5(rand()),0,$longitud);  
  return($pass); // devuelve el password   
}
$miClaveCuatro  = claveFour(); */


?>


 <div class="row text-center">
    <div class="col-12 col-md-12">
    	<span>
			<?php 
        //echo $miPassword;
        //echo $miClaveOne;
        echo $miClaveThree;
        //echo $miClaveCuatro;
      ?>
		</span>
    </div>
  </div>


</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>

	
</body>
</html>