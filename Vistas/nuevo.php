<?php




include_once '../Plantillas/cabecera.inc.php';


   
include_once '../Modelo/crear.inc.php';

?>

<div class="container">
    <form method="POST" action="">
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="codigo" placeholder="Codigo">
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="marca" placeholder="Marca">
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="descripcion" placeholder="Descripcion">
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="cantidad" placeholder="cantidad">
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="precio" placeholder="Precio Costo en $">
            </div>

        </div>

        <br>
        <a href="aceites.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="guardar" class=" btn btn-success" value="Guardar">

    </form>

</div>





<?php
include_once '../Plantillas/pie.inc.php';
