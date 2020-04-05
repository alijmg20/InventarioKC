<?php

    
    include_once '../Controlador/conexion.inc.php';



    if(isset($_POST['guardar'])){
        
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $categoria = $_POST['categoria'];

        if(!empty($codigo) && !empty($marca)&& !empty($nombre)&& !empty($descripcion)&& !empty($precio)&& !empty($cantidad)&& !empty($categoria)){
 
            $consulta = $conexion -> prepare('INSERT INTO '."$categoria".'(codigo,marca,nombre,descripcion,cantidad,precio,categoria) 
            VALUES (:codigo,:marca,:nombre,:descripcion,:cantidad,:precio,:categoria)');

            $consulta -> execute(array(
                ':codigo' => $codigo,
                ':marca' => $marca,
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':categoria' =>$categoria,
                ':cantidad' =>$cantidad
            ));
            
        header("Location: ../Vistas/$categoria.php");
        }else{
            echo "<script> alert('Los campos estan vacios');  </script>";
        }

    }

?>