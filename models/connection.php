<?php
class Connection{
    public static function connect($database){
        $connection =  mysqli_connect('localhost', 'root', '', $database);
        if (!$connection) {
            die('Connection Error');
        };
        return $connection;
    }
};
?>