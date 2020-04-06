<?php

    
    include_once '../Controlador/conexion.inc.php';

    //-----------------------GUARDAR UN PRODUCTO-----------------------------//

    if(isset($_POST['guardar'])){
        
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        if(!empty($codigo) && !empty($marca)&& !empty($nombre)&& !empty($descripcion)&& !empty($precio)&& !empty($cantidad)){
 
            $consulta = $conexion -> prepare('INSERT INTO '."$pagina".'(codigo,marca,nombre,descripcion,cantidad,precio) 
            VALUES (:codigo,:marca,:nombre,:descripcion,:cantidad,:precio)');

            $consulta -> execute(array(
                ':codigo' => $codigo,
                ':marca' => $marca,
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':precio' => $precio,
                ':cantidad' =>$cantidad
            ));
            
        header("Location: ../Vistas/$pagina.php");
        }else{
            echo "<script> alert('Los campos estan vacios');  </script>";
        }

    }

    //--------------------------------GUARDAR UN PROVEEDOR--------------------------------//

    if(isset($_POST['guardar_proovedor'])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $numero = $_POST['numero'];
        $correo = $_POST['correo'];
        $ubicacion = $_POST['ubicacion'];

        if(!empty($nombre) && !empty($apellido)&& !empty($numero)&& !empty($correo)&& !empty($ubicacion)){
 
            $consulta = $conexion -> prepare('INSERT INTO '."$pagina".'(nombre,apellido,numero,correo,ubicacion) 
            VALUES (:nombre,:apellido,:numero,:correo,:ubicacion)');

            $consulta -> execute(array(
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':numero' => $numero,
                ':correo' => $correo,
                ':ubicacion' => $ubicacion
            ));
            
        header("Location: ../Vistas/$pagina.php");
        }else{
            echo "<script> alert('Los campos estan vacios');  </script>";
        }

    }

?>