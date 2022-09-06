<?php
    require_once "connection.php";
    
    $connection = Connection::connect('pokemon');
    
    $number = $_GET['number'];
    $url = "https://pokeapi.co/api/v2/pokemon/" . $number;
    $data = json_decode(file_get_contents($url, true));

    if($data->name){
        // RETURN STATE TRUE 
        mysqli_query($connection, "INSERT INTO logs(id, state) VALUES($data->id, 1)");
    }else{
        // RETURN STATE FALSE 
        mysqli_query($connection, "INSERT INTO logs(id, state) VALUES($number, 0)");
    }
?>