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
    <form action="../models/search.php" method="POST">
        <h1>Buscar Pokemon</h1>
        <input type="number" name="number" placeholder="Ingresa un número" class="secondary-input">
        <button type="submit" name="submit" class="btn-large">Buscar</button>
    </form>
</body>
</html>