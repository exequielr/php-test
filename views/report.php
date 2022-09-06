<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <title>Report</title>
</head>
<body class="container">
    <h1>Descargar datos</h1>
    <button onclick="download()">
        Descargar
    </button>
</body>
<script>
    function download(){
        window.location.replace("../models/export.php")
    }
</script>
</html>