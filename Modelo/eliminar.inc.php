<?php

    include_once '../Controlador/conexion.inc.php';

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $eliminar = $conexion->prepare('DELETE FROM aceites WHERE id=:id');
        $eliminar->execute(array(
            ':id'=>$id
        ));
        header('Location: ../Vistas/aceites.php');
    }else{
        header('Location: ../Vistas/aceites.php');
    }