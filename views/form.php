<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <title>Registrarse</title>
</head>

<body class="container">
    <?php require_once "../models/register.php"?>
    <form method="POST" class="form">
        <h1>Registrarse</h1>
        <!-- Name -->
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name">

        <!-- Lastname -->
        <label for="lastname">Apellido</label>
        <input type="text" id="lastname" name="lastname">

        <!-- ID -->
        <label for="id">Número de Identificación</label>
        <input type="number" id="id" name="id">

        <!-- Email -->
        <label for="email">Correo Electrónico</label>
        <input type="text" id="email" name="email">

        <!-- Country -->
        <label for="country">País</label>
        <input type="text" id="country" name="country">

        <!-- City -->
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city">

        <!-- Address -->
        <label for="address">Dirección de domicilio</label>
        <input type="text" id="address" name="address">
        
        <!-- Phone number -->
        <label for="phone">Número de teléfono</label>
        <input type="text" id="phone" name="phone">

        <!-- Keyword -->
        <label for="keyword">Palabra clave</label>
        <input type="text" id="keyword" name="keyword">

        <button type="submit" name="submit">Enviar</button>
    </form>    
</body>
</html>