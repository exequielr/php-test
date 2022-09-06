<?php
    require_once "connection.php";
    require_once "encryption.php";

    $connection = Connection::connect('form');

    function getPostFields($fields){
        $data = new stdClass();
        foreach ($fields as $field){
            $data->$field = $_POST[$field];
        }
        return $data;
    }

    function isValueRegistered($field, $value){
        $connection = Connection::connect('form');
        $query = "SELECT * FROM users WHERE '$field' = '$value'";
        $response = mysqli_query($connection, $query);
        return mysqli_num_rows($response) > 0;
    }

    if (isset($_POST['submit'])) {
        // GET POST FIELDS
        $values = getPostFields(['name', 'lastname', 'id', 'email', 'country', 'city', 'address', 'phone', 'keyword']);
        $values->keyword = Encrypt::encryption($values->keyword);

        // SAVE AS ISO FORMAT
        $iso_query = "SELECT iso FROM countries WHERE name = '$values->country'";
        $iso_response = mysqli_query($connection, $iso_query);
        $values->iso = mysqli_fetch_array($iso_response)[0];

        // CHECK IF THE VALUE IS REGISTERED AND ID LENGHT
        if(strlen($values->id) !== 12  || isValueRegistered('email', $values->email) || isValueRegistered('id', $values->id)){
            header("Location: error.php");
            exit();
        }

        // SAVE VALUES IN DATABASE
        $query = "INSERT INTO users(name, lastname, id, email, country, city, address, phone, keyword) ";
        $query .= "VALUES ('$values->name', '$values->lastname', $values->id, '$values->email', '$values->iso', '$values->city', '$values->address', $values->phone, '$values->keyword')";

        $result = mysqli_query($connection, $query);

        // REDIRECTION
        if ($result) {
        	header("Location: succes.php");
            exit();
        }else{
            header("Location: error.php");
            exit();
        }
}
?>