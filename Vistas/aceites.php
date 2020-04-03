<?php

include_once '../Modelo/mostrar.inc.php';

include_once '../Modelo/buscar.inc.php';

include_once '../Plantillas/cabecera.inc.php';
$pagina = "aceites";
?>

<div class="container">
    <form method="POST" action="../Modelo/buscar.inc.php">
        <div class="row">
            <div class="col-md-8">
                <br>
                <input type="search" class="form-control" placeholder="¿Qué deseas buscar?" name="buscar">
            </div>
            <div class="col-md-4">
                <br>
                <input type="submit" class="btn btn-primary" value="Buscar" name="btn_buscar">
                <a href="nuevo.php" class="btn btn-success">Insertar Producto</a>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <br>
    <table class=" table table-light table-sm">
        <thead>
            <tr class="text-center">
                <th>Codigo</th>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio Costo</th>
                <th>Precio Venta</th>
                <th>Fecha de ingreso</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($resultado as $fila):
            ?>
            <tr class="text-center">

                <td><?php echo $fila['codigo'];   ?> </td>
                <td><?php echo $fila['marca'];   ?> </td>
                <td><?php echo $fila['nombre'];   ?> </td>
                <td><?php echo $fila['descripcion'];   ?> </td>
                <td><?php echo $fila['precio'];   ?> </td>
                <td>
                    <?php
                    $valor = $fila['precio'];
                    $precioVenta = $valor + ($valor * 0.5); // cambiar por valor de precio en dolares ;
                    echo $precioVenta;
                    ?>
                </td>
                <td><?php echo $fila['fecha_ingreso'];   ?> </td>
                <td>
                    <a href="#" class="btn btn-secondary"> <i class="fas fa-marker"> </i> </a>
                    <a href="#" class="btn btn-danger"> <i class="fas fa-trash-alt"> </i> </a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</div>



<?php
include_once '../Plantillas/pie.inc.php';
?>