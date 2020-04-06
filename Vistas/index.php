<?php


include_once '../Plantillas/cabecera.inc.php';
?>
<!--Contenedor principal donde van ubicadas los botones de enlace-->
<div class="container ">



    <!-- Primera fila de elementos que contiene los elementos mas grandes-->


    <div class="row">

        <!--Boton de Aceites-->
        <div class="col-md-4">
            <a href="aceites.php" class="btn btn-warning fa-6x"> <i class="fas fa-oil-can"></i>Aceites </a>
        </div>

        <!--Boton de Filtros-->
        <div class="col-md-4">
            <a href="filtros.php" class="btn btn-primary fa-6x "> <i class="fas fa-filter"></i> Filtros </a>
        </div>

        <!--Boton de Otros-->
        <div class="col-md-4">
            <a href="otros.php" class="btn btn-danger fa-6x"> <i class="fas fa-archive"></i>Otros </a>
        </div>

    </div>

    <!-- Segunda fila de elementos que contiene los elementos medianos-->
    <br>
    <div class="row">

        <!--Boton de Ventas diarias-->
        <div class="col-md-4">
            <a href="#" class="btn btn-info fa-4x"> <i class="fas fa-cash-register"></i>Ventas diarias </a>
        </div>

        <!--Boton de Proveedores-->
        <div class="col-md-4">
            <a href="proveedores.php" class="btn btn-secondary fa-4x "> <i class="far fa-address-card"></i> Proveedores </a>
        </div>

        <!--Actualizacion del valor del dolar-->
        <div class="col-md-4">
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-success fa-4x"> <i class="fas fa-dollar-sign"></i>Actualizar Valor
            </a>
            <?php include_once "dolar.php" ?>
        </div>





    </div>


</div>










<?php
include_once '../Plantillas/pie.inc.php';
?>