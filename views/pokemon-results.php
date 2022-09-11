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
    <span class="pokemon-name">
        <?php
        echo $data->name;
        ?>
    </span>
    <div>
        <h2>Especies</h2>
        <?php
        foreach ($data->species as $key => $value) {
            if ($key === "url") {
                echo "<p>url: <a href='$value'>$value</a></p>";
            } else {
                echo "<p>$key: <strong>$value</strong></p>";
            }
        }
        ?>
    </div>
    <div>
        <h2>Sprites</h2>
        <div class="sprites-section">
            <?php
            foreach ($data->sprites as $name => $value) {
                if (is_string($value)) {
                    echo "<div><img src='$value'><p>$name</p></div>";
                }
            }
            ?>
        </div>

    </div>
    <a href="pokemon-search.php">Volver</a>
</body>

</html>