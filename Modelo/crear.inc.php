<?php

    include_once '../Controlador/conexion.inc.php';
    
    if(isset($_POST['guardar'])){
        
        $codigo = $_POST['codigo'];
        $marca = $_POST['marca'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
    }

?>