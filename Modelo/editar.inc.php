<?php

    include_once '../Controlador/conexion.inc.php';

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $categoria = (string)$_GET['categoria'];

    $consulta = $conexion->prepare('SELECT * FROM '."$categoria".' WHERE id=:id LIMIT 1');


    $consulta -> execute(array(
        ':id'=>$id
    ));
    $resultado = $consulta ->fetch();
}else{
    header("Location: ../Vistas/index.php");
}

if(isset($_POST['boton_guardar'])){
    $codigo = $_POST['codigo'];
    $marca = $_POST['marca'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];

    if(!empty($codigo) && !empty($marca) && !empty($nombre) && !empty($descripcion) && !empty($precio) && !empty($cantidad)){

            $consulta = $conexion -> prepare('UPDATE aceites SET codigo=:codigo,marca=:marca,nombre=:nombre,descripcion=:descripcion,cantidad=:cantidad,precio=:precio WHERE id=:id');
            $consulta->execute(array(
                    ':codigo'=>$codigo,
                    ':marca'=>$marca,
                    ':nombre'=>$nombre,
                    ':descripcion'=>$descripcion,
                    ':cantidad'=>$cantidad,
                    ':precio'=>$precio,
                    ':id'=> $id
            ));
            header("Location: ../Vistas/$categoria.php");
    }else{
        echo "<script> alert('Los campos estan vacios'); </script>";
    }


}