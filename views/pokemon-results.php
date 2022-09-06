<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <title>Pokemon results</title>
</head>
<body class="container">
    <?php
        include "../models/search.php"
    ?>
    <h1>Resultados de la busqueda</h1>
    <p>
        Nombre:
        <?php
           echo $data->name;
        ?>
    </p>
    <p>
        Especies:
        <?php
           echo json_encode($data->species);
        ?>
    </p>
    <p>
        sprites:
        <?php
            foreach($data->sprites as $name => $value) {
                if(is_string($value)){
                    echo "$name => <img src='$value'> <br>";
                }
            }
        ?>
    </p>
    <a href="pokemon-search.php">Volver</a>
</body>
</html>