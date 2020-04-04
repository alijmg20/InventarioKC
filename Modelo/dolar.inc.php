<?php

    include_once '../Controlador/conexion.inc.php';

    $consulta = $conexion->prepare('SELECT * FROM dolar WHERE id=:id LIMIT 1');
    $consulta -> execute(array(
        ':id'=>1
    ));
    $precio_dolar = $consulta ->fetch();

    if(isset($_POST['btn_dolar'])){
        $dolar = $_POST['valor'];

        if(!empty($dolar)){
            $consulta = $conexion->prepare('UPDATE dolar SET valor=:valor  WHERE id=:id');
            $consulta->execute(array(
                ':valor'=>$dolar,
                ':id'=>1
            ));
            header('Location: ../Vistas/index.php');
        }else{
            echo "<script> alert('El campo esta vacio'); </script>";
        }
        
    }