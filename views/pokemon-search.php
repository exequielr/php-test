<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <title>Pokemon search</title>
</head>
<body class="container">
    <?php
        $error = null;
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            if($number){
                header("Location: /php-test/views/pokemon-results.php?number=$number");
                exit();
            }else{
                $error = "Ingrese un numero valido";
            }
        }
    ?>
    <form method="POST">
        <h1>Buscar Pokemon</h1>
        <input type="number" name="number" placeholder="Ingresa un número" class="secondary-input">
        <?php if($error): ?>
        <p class="error">Ingrese un número valido</p>
        <?php endif ?>
        <button name="submit" class="btn-large">Buscar</button>
    </form>
</body>
</html>