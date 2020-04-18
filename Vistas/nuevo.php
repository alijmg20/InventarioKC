<?php




include_once '../Plantillas/cabecera.inc.php';

$pagina = $_GET['categoria'];

include_once '../Modelo/crear.inc.php';

if($pagina !== 'proveedores' && $pagina!== 'ventas'){



    //--------------------FORMULARIO CREADO PARA LOS PRODUCTOS-------------------------------------//
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
        <div class="row">

        <br>
        <a href="<?php echo $pagina?>.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="guardar" class=" btn btn-success" value="Guardar">

    </form>

</div>





<?php }else if($pagina==='proveedores'){   
    
    
    //--------------------FORMULARIO CREADO PARA LOS PROVEEDORES-------------------------------------//
    ?>

<div class="container">
    <form method="POST" action="">
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="apellido" placeholder="Apellido">
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="numero" placeholder="Numero">
            </div>

            <div class="col-md-6">
                <input type="email" class=" form-control" name="correo" placeholder="Correo">
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="ubicacion" placeholder="ubicacion">
            </div>

        </div>

        <br>


        <br>
        <a href="<?php echo $pagina?>.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="guardar_proovedor" class=" btn btn-success" value="Guardar">

    </form>

</div>


<?php  }else if($pagina==='ventas'){

    //----------------------------------FORMULARIO DE VENTAS------------------------------//

?>

<div class="container">
    <form method="POST" action="">
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="nombre" placeholder="Nombre">
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="precio_venta" placeholder="Monto de venta">
            </div>

        </div>

        <br>
        <a href="<?php echo $pagina?>.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="guardar_venta" class=" btn btn-success" value="Guardar">

    </form>

</div>





<?php
}
include_once '../Plantillas/pie.inc.php';
