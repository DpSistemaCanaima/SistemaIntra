<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $mostrar['ID_REPORT'];?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
           <h1 class="modal-title fs-5" id="exampleModalLabel"> <strong>  Editar Reporte </strong></h1> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <form action="editar.php" method="post">
                    
                    <select class="form-select" name="STATUS" aria-label="Default select example">
                       <option value="">casos</option>
                      <option value="1">Activo</option>
                      <option value="3">En espera</option>
                      <option value="2">Cerrados</option>
                        
                    </select><br>
                    <select class="form-select" name="ID_LEVEL" >
                           
                           <option value="1">Urgente</option>
                           <option value="2">Alta</option>
                           <option value="3">Normal</option>
                           <option value="4">Baja</option>
                       
                           </select><br>
  
                    <?php  //consulta relacionada para mandar el Nombre del tecnico

                        $sql = "SELECT  r.PRIVILEGE , u.NAME , u.IDDATOS FROM user_datos AS u
                           INNER JOIN rols AS r ON u.IDROLS = R.IDROLS WHERE u.IDROLS = '3' ";

                            $result = mysqli_query($conn,$sql);
  

                     
                           
                    ?>


                    <select class="form-select" name="ID_NAME" aria-label="Default select example"><br>

                        <option>Tecnicos</option>
                         
                        <?php  while ($mostrar = mysqli_fetch_array($result)){?>

                        <option value="<?php echo $mostrar ['IDDATOS']; ?>"><?php echo $mostrar ['NAME'] ?></option>
                        <?php 
                              
                            } ?>
                    </select>

                    <br>

                   <center> <input type="submit" value="enviar"></center>
                  
                </form>
             
        
         
        </div>
       
    </div>
</div>
</div>