<?php

include_once '../Controlador/conexion.inc.php';

$consulta = "select * from ".$pagina;
$resultado = mysqli_query($conexion,$consulta);

while ($filas = mysqli_fetch_array($resultado)) {
    ?>
    <tr class="text-center">

        <td><?php echo $filas['codigo'];   ?> </td>
        <td><?php echo $filas['marca'];   ?> </td>
        <td><?php echo $filas['nombre'];   ?> </td>
        <td><?php echo $filas['descripcion'];   ?> </td>
        <td><?php echo $filas['precio'];   ?> </td>
        <td>
            <?php 
                $valor = $filas['precio'];
                $precioVenta = $valor + ($valor * 0.5); // cambiar por valor de precio en dolares ;
                echo $precioVenta;
            ?> 
        </td>
        <td><?php echo $filas['fecha_ingreso'];   ?> </td>
        <td>
            <a href="#" class="btn btn-secondary"> <i class="fas fa-marker"> </i>  </a>
            <a href="#" class="btn btn-danger"> <i class="fas fa-trash-alt"> </i>  </a>
        </td>
    </tr>

<?php } ?>
