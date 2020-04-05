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

?>