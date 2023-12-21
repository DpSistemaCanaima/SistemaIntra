<div class="modal fade" id="exampleModal<?php echo $mostrar ['ID_REPORT'] ?>"" tabindex=" -1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Mas Detalles</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <strong>Descripcion:</strong> <?php echo $mostrar ['TITLE'] ?><br>
                <strong>Nombre y Apellido</strong>: <?php echo $mostrar ['name_surname'] ?><br>
                <strong>Fecha de creacion</strong>: <?php echo $mostrar ['CREATION_DATE'] ?><br>
                <strong>Nivel</strong>: <?php echo $mostrar ['LEVEL'] ?><br>
                <strong>Tecnico</strong>: <?php echo $mostrar ['NAME'] ?><br>
                <form action="cerrado.php" method="post">

                    <div class="form-floating">

                        <input type="hidden" name="ID_REPORT" value="<?php echo $mostrar['ID_REPORT']  ?>">

                        <textarea class="form-control" name="SOLUTION" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Solucion</label>
                    </div>
                    <center> <input type="submit" class="btn btn-outline-primary" value="Cerrar caso"> </center>
                </form>




            </div>

        </div>
    </div>
</div>

<?php include "modalsoporte.php"; ?>