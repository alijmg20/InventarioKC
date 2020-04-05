<?php
    include_once '../Controlador/conexion.inc.php';

$seleccionar = $conexion->prepare('SELECT * FROM '."$pagina".' ORDER BY id DESC');
$seleccionar->execute();
$resultado = $seleccionar->fetchAll();
