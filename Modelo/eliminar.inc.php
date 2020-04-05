<?php

    include_once '../Controlador/conexion.inc.php';

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $categoria = (string)$_GET['categoria'];
        $eliminar = $conexion->prepare('DELETE FROM '."$categoria".' WHERE id=:id');
        $eliminar->execute(array(
            ':id'=>$id
        ));
        header("Location: ../Vistas/$categoria.php");
    }else{
        header('Location: ../Vistas/index.php');
    }