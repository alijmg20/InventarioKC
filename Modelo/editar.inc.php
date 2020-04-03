<?php

    include_once '../Controlador/conexion.inc.php';

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

    $consulta = $conexion->prepare('SELECT * FROM aceites WHERE id=:id LIMIT 1');
    $consulta -> execute(array(
        ':id'=>$id
    ));
    $resultado = $consulta ->fetch();
}else{
    header('Location: ../Vistas/aceites.php');
}

if(isset($_POST['boton_guardar'])){
    $codigo = $_POST['codigo'];
    $marca = $_POST['marca'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    if(!empty($codigo) && !empty($marca) && !empty($nombre) && !empty($descripcion) && !empty($precio)){

            $consulta = $conexion -> prepare('UPDATE aceites SET codigo=:codigo,marca=:marca,nombre=:nombre,descripcion=:descripcion,precio=:precio WHERE id=:id');
            $consulta->execute(array(
                    ':codigo'=>$codigo,
                    ':marca'=>$marca,
                    ':nombre'=>$nombre,
                    ':descripcion'=>$descripcion,
                    ':precio'=>$precio,
                    ':id'=> $id
            ));
            header('Location: ../Vistas/aceites.php');
    }else{
        echo "<script> alert('Los campos estan vacios'); </script>";
    }


}