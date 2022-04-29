<?php
include_once 'conexion.php';
$conn = conection();
$a=$_GET['v1'];
$b=$_GET['v2'];
$id=$_GET['updateid'];
$sql = "UPDATE test SET a='$a', b='$b' WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: ../crud.php");
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>