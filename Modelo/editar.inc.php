<?php

    include_once '../Controlador/conexion.inc.php';


    //--------Buscar y ubicar el id del objeto a cambiar------------------//

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

    $consulta = $conexion->prepare('SELECT * FROM '."$pagina".' WHERE id=:id LIMIT 1');


    $consulta -> execute(array(
        ':id'=>$id
    ));
    $resultado = $consulta ->fetch();
}else{
    header("Location: ../Vistas/$pagina.php");
}



if(isset($_POST['boton_guardar'])){
    $codigo = $_POST['codigo'];
    $marca = $_POST['marca'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    if(!empty($codigo) && !empty($marca) && !empty($nombre) && !empty($descripcion) && !empty($precio) && !empty($cantidad)){

            $consulta = $conexion -> prepare('UPDATE '."$pagina".' SET codigo=:codigo,marca=:marca,nombre=:nombre,descripcion=:descripcion,cantidad=:cantidad,precio=:precio WHERE id=:id');
            $consulta->execute(array(
                    ':codigo'=>$codigo,
                    ':marca'=>$marca,
                    ':nombre'=>$nombre,
                    ':descripcion'=>$descripcion,
                    ':cantidad'=>$cantidad,
                    ':precio'=>$precio,
                    ':id'=> $id
            ));
            header("Location: ../Vistas/$pagina.php");
    }else{
        echo "<script> alert('Los campos estan vacios'); </script>";
    }


}

//-----------------------BOTON GUARDAR PROOVEDOR----------------------//

if(isset($_POST['boton_guardar_proveedor'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero = $_POST['numero'];
    $correo = $_POST['correo'];
    $ubicacion = $_POST['ubicacion'];


    if(!empty($nombre) && !empty($apellido) && !empty($numero) && !empty($correo) && !empty($ubicacion)){

            $consulta = $conexion -> prepare('UPDATE '."$pagina".' SET nombre=:nombre,apellido=:apellido,numero=:numero,correo=:correo,ubicacion=:ubicacion WHERE id=:id');
            $consulta->execute(array(
                    ':nombre'=>$nombre,
                    ':apellido'=>$apellido,
                    ':numero'=>$numero,
                    ':correo'=>$correo,
                    ':ubicacion'=>$ubicacion,
                    ':id'=> $id
            ));
            header("Location: ../Vistas/$pagina.php");
    }else{
        echo "<script> alert('Los campos estan vacios'); </script>";
    }


}