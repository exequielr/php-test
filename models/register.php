<?php
    require_once "connection.php";
    require_once "encryption.php";


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $keyword = Encrypt::encryption($_POST['keyword']);
        
        $email_query = "SELECT * FROM users WHERE email = '$email'";
        $email_response = mysqli_query($connection, $email_query);

        $id_query = "SELECT * FROM users WHERE id = '$id'";
        $id_response= mysqli_query($connection, $id_query);

        $iso_query = "SELECT iso FROM countries WHERE name = '$country'";
        $iso_response = mysqli_query($connection, $iso_query);
        $iso = mysqli_fetch_array($iso_response)[0];


        if(strlen($id) > 12 || mysqli_num_rows($email_response) > 0 || mysqli_num_rows($id_response) > 0){
            header("Location: error.php");
            exit();
        }

        $query = "INSERT INTO users(name, lastname, id, email, country, city, address, phone, keyword) ";
        $query .= "VALUES ('$name', '$lastname', $id, '$email', '$iso', '$city', '$address', $phone, '$keyword')";

        $result = mysqli_query($connection, $query);

        if ($result) {
        	header("Location: succes.php");
            exit();
        }else{
            header("Location: error.php");
            exit();
        }
}
?>