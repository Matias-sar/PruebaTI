<?php
include_once 'conexion.php';
$conn = conection();
if(isset($_GET['v1']) && isset($_GET['v2'])){
    $a = $_GET['v1'];
    $b = $_GET['v2'];
    $sql = "INSERT INTO test (a, b) VALUES ('$a', '$b')";
    if($conn->query($sql) === TRUE){
        header("Location: ../crud.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>