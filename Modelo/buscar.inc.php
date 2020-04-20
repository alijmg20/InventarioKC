<?php

include_once "../Controlador/conexion.inc.php";

if(isset($_POST['btn_buscar'])){
    $buscar_texto = $_POST['buscar'];
    $buscar = $conexion->prepare( 'SELECT * FROM '."$pagina".' WHERE codigo LIKE :campo OR nombre LIKE :campo; ' );
    
    $buscar -> execute(array(
        ':campo' => "%".$buscar_texto."%"
    ));
    
    $resultado = $buscar->fetchAll();
    
}

    //-------------------ACCION CREADA PARA BUSCAR EN LA TABLA DE PROVEEDORES---------------------------//

    
if(isset($_POST['btn_buscar_proveedor'])){
    $buscar_texto = $_POST['buscar_Proovedor'];
    $buscar = $conexion->prepare( 'SELECT * FROM '."$pagina".' WHERE nombre LIKE :campo OR numero LIKE :campo; ' );
    
    $buscar -> execute(array(
        ':campo' => "%".$buscar_texto."%"
    ));
    
    $resultado = $buscar->fetchAll();
    
}

    //-----------------------ACCION DE BUSCAR EN LA TABLA DE VENTAS----------------------//

if(isset($_POST['btn_buscar_venta'])){
    $buscar_texto = $_POST['buscar_venta'];
    $buscar = $conexion->prepare( 'SELECT * FROM '."$pagina".' WHERE fecha_venta LIKE :campo OR nombre LIKE :campo; ' );
    
    $buscar -> execute(array(
        ':campo' => "%".$buscar_texto."%"
    ));
    
    $resultado = $buscar->fetchAll();
    
}



?>