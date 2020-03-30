<?php
include_once '../Plantillas/cabecera.inc.php';
$pagina = "aceites";
?>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-md-8">
                <br>
                <input type="search" class="form-control" placeholder="¿Qué deseas buscar?" name="buscar">
            </div>
            <div class="col-md-4">
                <br>
                <input type="submit" class="btn btn-primary" value="Buscar" name="btn_buscar">
                <a href="nuevo.php" class="btn btn-success">Insertar Producto</a>
            </div>
        </div>

    </form>
</div>

<div class="container">
    <br>
    <table class=" table table-light table-sm">
        <thead>
            <tr class="text-center">
                <th>Codigo</th>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio Costo</th>
                <th>Precio Venta</th>
                <th>Fecha de ingreso</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            
            <?php include_once '../Modelo/mostrar.inc.php'; ?>
            
        </tbody>
    </table>
    
</div>



<?php
include_once '../Plantillas/pie.inc.php';
?>
