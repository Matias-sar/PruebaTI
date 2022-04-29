<?php
include_once './views/header.php';
?>
    <?php include_once './models/mostrar.php';?>
    <div class="container-fluid" style="padding: 12px; display: none;" id = "formulario_ingreso">
        <form action="./models/inserta.php" method="GET" id = "form">
            <input type="text" name="v1" placeholder="Numeros" id = "a" class="form-control" style="margin-top: 12px; width: 500px">
            <input type="text" name="v2" placeholder="Alfanumerico" id = "b" class="form-control" style="margin-top: 12px; width: 500px">
            <button type="submit" class="btn btn-primary" style="margin-top: 12px">Agregar</button>
            <p id="result"></p>
        </form>
   </div>
<?php
include_once './views/footer.php';
?>