<?php

    
    include_once '../Controlador/conexion.inc.php';

    
    if(isset($_POST['guardar'])){
        
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        if(!empty($codigo) && !empty($marca)&& !empty($nombre)&& !empty($descripcion)&& !empty($precio)&& !empty($cantidad)){
 
            $consulta = $conexion -> prepare('INSERT INTO aceites(codigo,marca,nombre,descripcion,cantidad,precio) 
            VALUES (:codigo,:marca,:nombre,:descripcion,:cantidad,:precio)');

            $consulta -> execute(array(
                ':codigo' => $codigo,
                ':marca' => $marca,
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':cantidad' =>$cantidad
            ));
            
        header("Location: ../Vistas/aceites.php");
        }else{
            echo "<script> alert('Los campos estan vacios');  </script>";
        }

    }

?>