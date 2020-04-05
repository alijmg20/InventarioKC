<?php

include_once '../Plantillas/cabecera.inc.php';


include_once '../Modelo/editar.inc.php';




?>
<div class="container">
    <form method="POST" action="">
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="codigo" placeholder="Codigo" value=<?php if ($resultado) echo $resultado['codigo']; ?>>
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="marca" placeholder="Marca" value=<?php if ($resultado) echo $resultado['marca']; ?>>
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="nombre" placeholder="Nombre" value=<?php if ($resultado) echo $resultado['nombre']; ?>>
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="descripcion" placeholder="Descripcion" value=<?php if ($resultado) echo $resultado['descripcion']; ?>>
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-md-6">
                <input type="text" class=" form-control" name="cantidad" placeholder="Cantidad" value=<?php if ($resultado) echo $resultado['cantidad']; ?>>
            </div>

            <div class="col-md-6">
                <input type="text" class=" form-control" name="precio" placeholder="Precio Costo en $" value=<?php if ($resultado) echo $resultado['precio']; ?>>
            </div>

        </div>

        <br>
        <div class="row">

            <div class="col-md-6">

                <select class="form-control" name="categoria">
                    <option value="aceites">aceites</option>
                    <option value="filtros">filtros</option>
                    <option value="otros">otros</option>
                </select>

            </div>

        </div>



        <br>
        <a href="aceites.php" class="btn btn-danger">cancelar </a>
        <input type="submit" name="boton_guardar" class=" btn btn-success" value="Guardar">

    </form>

</div>





<?php
include_once '../Plantillas/pie.inc.php';
