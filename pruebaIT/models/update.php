
<?php
include_once '../views/header.php';
include_once '../models/conexion.php';
$conn = conection();
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM test WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $a = $row['a'];
    $b = $row['b'];
?>
 <div class="container-fluid" style="padding: 12px">
    <form action="update_sql.php" method="GET" id = "form">
            <label for="a">ID</label>
            <input type="text" name="updateid" id = "id" class="form-control" style="margin-top: 12px; width: 500px" value="<?php echo $id; ?>" disabled>
            <label for="a">Numeros</label>
            <input type="text" name="v1" id = "a" class="form-control" style="margin-top: 12px; width: 500px" value="<?php echo $a; ?>">
            <label for="b">Alfanumerico</label>
            <input type="text" name="v2" id = "b" class="form-control" style="margin-top: 12px; width: 500px" value="<?php echo $b;?>">
            <input type="submit" class="btn btn-primary" style="margin-top: 12px" value = "Actualizar">
            <button type="button" class="btn btn-danger" style="margin-top: 12px" onclick="location.href='../crud.php'">Cancelar</button>
        </form>
   </div>
<?php
}
?>
<?php
include_once '../views/footer.php';
?>