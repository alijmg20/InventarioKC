<?php
include_once '../Plantillas/cabecera.inc.php';
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
                <a href="#" class="btn btn-success">Insertar Producto</a>
            </div>
        </div>

    </form>
</div>

<div class="container">
    <br>
    <table class=" table table-light table-sm">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Fecha Ingresos</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
    </table>
    
</div>



<?php
include_once '../Plantillas/pie.inc.php';
?>
