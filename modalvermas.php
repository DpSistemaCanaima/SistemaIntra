    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informacion de Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <label for="floatingInput">Nombre y Apellido</label>:   
              <?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?><br>
              <label for="floatingInput">Cedula</label>:
              <?php echo $mostrar ['CEDULA'] ?><br>
              <label for="floatingInput">Usuario</label>:
              <?php echo $mostrar ['USER'] ?><br>
              <label for="floatingInput">Area</label>:
               <?php echo $mostrar ['AREA'] ?><br>
               <label for="floatingInput">Sexo</label>:
               <?php if($mostrar ['GENDER']==1){
						echo "H";
					  }elseif($mostrar ['GENDER']==2){
						echo "M";
					  }else{
						echo "N.Binario";
					  } ?> <br>
                      <label for="floatingInput">Correo</label>:
                        <?php echo $mostrar ['EMAIL'] ?>  


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>