    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo $mostrar['IDDATOS'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>Informacion de Usuario</strong></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="floatingInput"><strong> Nombre y Apellido</strong></label>:
                    <?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?><br>
                    <label for="floatingInput"><strong> Nacionalidad</strong> </label>:
                      <?php echo $mostrar['NACINALIDAD']?><br>
                      <label for="floatingInput"><strong>Cedula</strong></label>:
                    <?php echo $mostrar ['CEDULA'] ?><br>
                      <label for="floatingInput"><strong>Oficio</strong></label>:
                      <?php echo $mostrar['OFICIO']?><br>
                      <label for="floatingInput"><strong>Direccion</strong></label>:
                      <?php echo $mostrar['DIRECCION']?><br>
                      <label for="floatingInput"><strong>Ciudad</strong></label>:
                    <?php echo $mostrar ['CIUDAD'] ?><br>
                    <label for="floatingInput"><strong>Municipio</strong></label>:
                    <?php echo $mostrar ['MUNICIPIO'] ?><br>
                    <label for="floatingInput"><strong>Parroquia</strong></label>:
                    <?php echo $mostrar ['PARROQUIA'] ?><br>
                    <label for="floatingInput"><strong>Usuario</strong></label>:
                    <?php echo $mostrar ['USER'] ?><br>
                    <label for="floatingInput"><strong>Area</strong></label>:
                    <?php echo $mostrar ['AREA'] ?><br>
                    <label for="floatingInput"><strong>Sexo</strong></label>:
                    <?php if($mostrar ['GENDER']==1){
						echo "H";
					  }elseif($mostrar ['GENDER']==2){
						echo "M";
					  }else{
						echo "N.Binario";
					  } ?> <br>
                    <label for="floatingInput"><strong>Correo</strong></label>:
                    <?php echo $mostrar ['EMAIL'] ?><br>
                    <label for="floatingInput"><strong>Rol</strong></label>:
                    <?php echo $mostrar ['PRIVILEGE'] ?><br>
                    <label for="floatingInput"><strong>Status</strong></label>:
                    <?php echo $mostrar ['TIPO_USUARIOS'] ?>

                </div>
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>