<?php
$data = "";
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $url = "https://pokeapi.co/api/v2/pokemon/" . $number . "/";
    $data = json_decode(file_get_contents($url, true));
    if($data){
        header("Location: /php-test/views/pokemon-results.php");
        exit();
    }
}
?>