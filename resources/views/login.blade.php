<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión Usuario Comites</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="identification_number">Número de Identificación:</label><br>
        <input type="text" id="identification_number" name="identification_number" required><br>
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
