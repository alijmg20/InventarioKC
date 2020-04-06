<?php


include_once '../Plantillas/cabecera.inc.php';

    $pagina = 'proveedores';
    

include_once '../Modelo/mostrar.inc.php';

include_once '../Modelo/buscar.inc.php';




?>

<div class="container">
    <form method="POST" action="">
        <div class="row">
            <div class="col-md-8">
                <br>
                <input type="search" class="form-control" placeholder="¿Qué deseas buscar?" name="buscar_Proovedor">
            </div>
            <div class="col-md-4">
                <br>
                <input type="submit" class="btn btn-primary" value="Buscar" name="btn_buscar_proveedor">
                <a href="nuevo.php?categoria=<?php echo $pagina ?>" class="btn btn-success">Insertar Proveedor</a>
            </div>
        </div>
    </form>
</div>

<div class=" container-fluid">
    <br>
    <table class=" table table-light table-sm">
        <thead>
            <tr class="text-center">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Numero</th>
                <th>Correo</th>
                <th>Ubicacion</th>
                <th>fecha de Añadido</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($resultado as $fila):
            ?>
            <tr class="text-center">

                <td><?php echo $fila['nombre'];   ?> </td>
                <td><?php echo $fila['apellido'];   ?> </td>
                <td><?php echo $fila['numero'];   ?> </td>
                <td><?php echo $fila['correo'];   ?> </td>
                <td><?php echo $fila['ubicacion'];   ?> </td>
                <td><?php echo $fila['fecha_ingreso'];   ?> </td>
                <td>
                    <a href="actualizar.php?id=<?php echo $fila['id']?>&categoria=<?php echo $pagina  ?>" class="btn btn-secondary"> <i class="fas fa-marker"> </i> </a>
                    <a href="../Modelo/eliminar.inc.php?id=<?php echo $fila['id']?>&categoria=<?php echo $pagina ?>" class="btn btn-danger"> <i class="fas fa-trash-alt"> </i> </a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

</div>



<?php
include_once '../Plantillas/pie.inc.php';
?>