<?php
    include_once './models/conexion.php';
    $conn = conection();
    $sql = "SELECT * FROM test";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo '<button type="button" class="btn btn-success" id = "btn_mostrar">Crear ticket</button>';
        echo "<table class='table'>
                <tr>
                   <th>a</th>
                   <th>b</th>
                   <th>Opciones</th>
                </tr>";
            while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['a'] . "</td>";
            echo "<td>" . $row['b'] . "</td>";
            echo "<td>
                    <a href='models/delete.php?deleteid=".$row['id']."' class='btn btn-danger'>Eliminar</a>
                    <a href='models/update.php?updateid=".$row['id']."' class='btn btn-success'>Editar</a>
                </td>
            </td>
            </tr>";
        }
        echo "</table>";
    }
    else{
        echo "<h4>No hay datos</h4>";
    }
?>
 
 
