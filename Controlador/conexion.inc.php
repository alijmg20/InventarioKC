<?php
    
    $database = 'inventario';
    $user = 'root';
    $password = '';
    try{
        $conexion = new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
    }catch(PDOException $ex){
        echo "ERROR".$ex->getMessage();
    }
?>