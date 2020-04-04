<?php
include_once '../Modelo/dolar.inc.php';

include_once '../Plantillas/cabecera.inc.php';
?>

<div class="container">

    <form action="" method="POST">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cambio del Dolar del dia</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="text-center form-control" name="valor" placeholder="Ingrese el precio del dolar">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-success" name="btn_dolar" value="guardar">
                        </div>
                    </div>
                </div>
            </div>
    </form>

</div>




<?php
include_once '../Plantillas/pie.inc.php';
?>