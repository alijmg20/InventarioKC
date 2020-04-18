<?php

include_once '../Plantillas/cabecera.inc.php';

$pagina= $_GET['categoria'];

include_once '../Modelo/editar.inc.php';

if($pagina!== 'proveedores' && $pagina !=='ventas'){

?>
<div class="container">
    <form method="POST" action="">
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="codigo" placeholder="Codigo" value=<?php if ($resultado) echo $resultado['codigo']; ?>>
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="marca" placeholder="Marca" value=<?php if ($resultado) echo $resultado['marca']; ?>>
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="nombre" placeholder="Nombre" value=<?php if ($resultado) echo $resultado['nombre']; ?>>
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="descripcion" placeholder="Descripcion" value=<?php if ($resultado) echo $resultado['descripcion']; ?>>
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="cantidad" placeholder="Cantidad" value=<?php if ($resultado) echo $resultado['cantidad']; ?>>
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="precio" placeholder="Precio Costo en $" value=<?php if ($resultado) echo $resultado['precio']; ?>>
            </div>

        </div>

        <br>



        <br>
        <a href="<?php echo $pagina ?>.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="boton_guardar" class=" btn btn-success" value="Guardar">

    </form>

</div>





<?php
}else if($pagina==='proveedores'){

    //-----------------------------ACTUALIZAR DE PROOVEDORES-------------------------//
?>

<div class="container">
    <form method="POST" action="">
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="nombre" placeholder="Nombre" value=<?php if ($resultado) echo $resultado['nombre']; ?>>
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="apellido" placeholder="Apellido" value=<?php if ($resultado) echo $resultado['apellido']; ?>>
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="numero" placeholder="Numero" value=<?php if ($resultado) echo $resultado['numero']; ?>>
            </div>

            <div class="col-md-6">
                <input type="email" class=" form-control" name="correo" placeholder="Correo" value=<?php if ($resultado) echo $resultado['correo']; ?>>
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="ubicacion" placeholder="Ubicación" value=<?php if ($resultado) echo $resultado['ubicacion']; ?>>
            </div>

        </div>

        <br>



        <br>
        <a href="<?php echo $pagina ?>.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="boton_guardar_proveedor" class=" btn btn-success" value="Guardar">

    </form>

</div>





<?php

}else if($pagina ==='ventas'){

    //-----------------------------------ACTUALIZAR DE VENTAS------------------------------//

?>

<div class="container">
    <form method="POST" action="">
        <div class="row">

            <div class="col-md-6">
            <input type="text" class=" form-control" name="nombre" placeholder="Nombre del producto" value=<?php if ($resultado) echo $resultado['nombre']; ?>>
            </div>

            <div class="col-md-6">
            <input type="text" class=" form-control" name="precio_venta" placeholder="Monto de la venta" value=<?php if ($resultado) echo $resultado['precio_venta']; ?>>
            </div>

        </div>

        <br>
        <a href="<?php echo $pagina?>.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="boton_guardar_venta" class=" btn btn-success" value="Guardar">

    </form>

</div>






<?php

}

include_once '../Plantillas/pie.inc.php';
