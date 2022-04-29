<?php
include_once 'conexion.php';
$conn = conection();
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM test WHERE id = '$id'";
    if($conn->query($sql) === TRUE){
        header("Location: ../crud.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>