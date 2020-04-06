<?php

    include_once '../Controlador/conexion.inc.php';

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $pagina = (string)$_GET['categoria'];
        $eliminar = $conexion->prepare('DELETE FROM '."$pagina".' WHERE id=:id');
        $eliminar->execute(array(
            ':id'=>$id
        ));
        header("Location: ../Vistas/$pagina.php");
    }else{
        header("Location: ../Vistas/$pagina.php");
    }