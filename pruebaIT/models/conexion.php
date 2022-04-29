<?php
function conection(){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prueba";
    $conn = new mysqli($server, $username, $password, $dbname);
    if($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        return $conn;
    }
}
?>