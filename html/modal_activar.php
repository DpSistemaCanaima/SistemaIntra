

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $mostrar['ID_REPORT'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Activar y Asignar Tecnico</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                                      <strong>Descripcion:</strong>  <?php echo $mostrar ['TITLE'] ?><br>
                                      <strong>Nombre y Apellido</strong>:  <?php echo $mostrar ['name_surname'] ?><br>
                                      <strong>Fecha de creacion</strong>:   <?php echo $mostrar ['CREATION_DATE'] ?><br>
                                      <strong>Status</strong>:     <?php echo $mostrar ['STATUS'] ?><br>
                                      <strong>Nivel</strong>:  <?php echo $mostrar ['LEVEL'] ?><br>
                                     
                                      <strong>Fecha de solucion</strong>:<?php echo $mostrar ['FECHA_SOLUTION'] ?><br>
                     
       <form action="activar.php" method="post">
         <input type="hidden" name="ID_REPORT" value="<?php echo $mostrar['ID_REPORT'];?>">
       <select class="form-select" name="STATUS" aria-label="Default select example">
                           <option value="">casos</option>
                          <option value="1">Activo</option>
                          <option value="3">En espera</option>
                          <option value="2">Cerrados</option>
                            
                        </select>
       <br>
       <select class="form-select" name="ID_LEVEL" >
                               
                               <option value="1">Urgente</option>
                               <option value="2">Alta</option>
                               <option value="3">Normal</option>
                               <option value="4">Baja</option>
                           
                               </select><br>
        <select name="ID_NAME" class="form-select">
        <?php    while($vio = mysqli_fetch_assoc($ve)){ ?>
                <option  value="<?php echo $vio['IDDATOS']; ?>"><?php echo $vio['NAME']; ?></option>
                <?php   }?>
        </select><br>
        <center>  <input type="submit" class="btn btn-outline-primary "></center>
       </form>
      </div>
     
    </div>
  </div>
</div>