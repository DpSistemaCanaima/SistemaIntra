<div class="modal fade" id="exampleModal<?php echo $mostrar['ID_REPORT'];?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Informacion adicional</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <strong> ID:</strong> <?php echo $mostrar ['ID_REPORT'] ?><br>
                                <strong> Falla:</strong> <?php echo $mostrar ['TITLE'] ?><br>
                                <strong> Usuario:</strong> <?php echo $mostrar ['NAME'] ?><br>
                                <strong> Tecnico:</strong> <?php echo $mostrar ['ID_NAME'] ?><br>
                                <strong> Descripcion:</strong> <?php echo $mostrar ['DESCRIPTION'] ?><br>
                                <strong> Fecha de creacion :</strong> <?php echo $mostrar ['CREATION_DATE'] ?><br>
                                <strong> Fecha final:</strong> <?php echo $mostrar ['DATE_FINAL'] ?><br>
                                <strong> Fecha de solucion:</strong> <?php echo $mostrar ['FECHA_SOLUTION'] ?><br>
                                <strong> Status:</strong> <?php echo $mostrar ['STATUS'] ?><br>
                                <strong> Urgencia:</strong> <?php echo $mostrar ['LEVEL'] ?><br>
                                <strong> Solucion:</strong> <?php echo $mostrar ['SOLUTION'] ?>
                            </div>
                        </div>
                    </div>
                </div>
