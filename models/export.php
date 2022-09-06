<?php
    require_once 'connection.php';
    require_once "encryption.php";

    header('Content-Type: text/cvs; charset=UTF-8');
    header('Content-Disposition: attachment; filename=customer-data.csv');

    $connection = Connection::connect('form');
    
    $output = fopen("php://output", "w");
    fputcsv($output, array('name', 'lastname', 'id', 'email', 'address', 'phone', 'keyword'));
    $query = mysqli_query($connection, "SELECT * FROM users");

    while($fetch = mysqli_fetch_assoc($query)){
        $iso = $fetch['country'];
        $country_query = mysqli_query($connection, "SELECT name FROM countries WHERE iso = '$iso'");
        $country = mysqli_fetch_array($country_query)[0];
        $address = $fetch['address'] . ', ' . $fetch['city'] . ' - ' . $country;
        $fetch['address'] = $address;
        $decrypted = Encrypt::decryption($fetch['keyword']);
        $fetch['keyword'] = $decrypted;
        unset($fetch['city'], $fetch['country']);
        fputcsv($output, $fetch);
    }

    fclose($output);
?>