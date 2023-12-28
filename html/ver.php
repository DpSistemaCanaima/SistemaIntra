<!-- Modal -->
<div class="modal fade" id="ver<?php echo $mostrar ['NAME'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <link rel="stylesheet" href="cla.css">

                <strong>Descripcion:</strong>  <?php echo $mostrar ['TITLE'] ?><br>
                                      <strong>Nombre y Apellido</strong>:  <?php echo $mostrar ['name_surname'] ?><br>
                                      <strong>Fecha de creacion</strong>:   <?php echo $mostrar ['CREATION_DATE'] ?><br>
                                      <strong>Status</strong>:     <?php echo $mostrar ['STATUS'] ?><br>
                                      <strong>Nivel</strong>:  <?php echo $mostrar ['LEVEL'] ?><br>
                                      <strong>Tecnico</strong>:     <?php echo $mostrar ['NAME'] ?><br>
                                      <strong>Fecha de solucion</strong>:<?php echo $mostrar ['FECHA_SOLUTION'] ?><br>
                     
            </div>




        </div>
    </div>
</div>