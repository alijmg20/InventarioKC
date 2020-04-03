<?php

    include_once '../Controlador/conexion.inc.php';
    
    if(isset($_POST['guardar'])){
        
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        if(!empty($codigo) && !empty($marca)&& !empty($nombre)&& !empty($descripcion)&& !empty($precio)){
 
            $consulta = $conexion -> prepare('INSERT INTO aceites(codigo,marca,nombre,descripcion,precio) 
            VALUES (:codigo,:marca,:nombre,:descripcion,:precio)');

            $consulta -> execute(array(
                ':codigo' => $codigo,
                ':marca' => $marca,
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':precio' => $precio,
            ));
            
        header("Location: ../Vistas/aceites.php");
        }else{
            echo "<script> alert('Los campos estan vacios');  </script>";
        }


    



    }

?>