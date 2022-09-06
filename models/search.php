<?php
    $number = $_GET['number'];
    $url = "https://pokeapi.co/api/v2/pokemon/" . $number;
    $log = file_get_contents($url, true);
    echo "<script>console.log($log)</script>";
    $data = json_decode(file_get_contents($url, true));
?>