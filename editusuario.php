<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $mostrar['CEDULA'];?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="procesar_editar.php" method="POST">
                    <input type="hidden" value="<?php echo $mostrar['IDDATOS']; ?>" name="IDDATOS">
                    <label for="floatingInput">Nombre</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['NAME'] ?>" name="NAME"><br>
                    <label for="floatingInput">Apellido</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['SURNAME'] ?>" name="SURNAME"><br>
                   
                    <label for="floatingInput">Cedula</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['CEDULA'] ?>" name="CEDULA"><br>
                    <label for="floatingInput">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="FECHA" class="i-text"
                       value="<?php echo $mostrar['FECHA'] ?>"><br>
                       <label for="floatingInput">Grado de Educacion</label>
                    <select class="form-select" aria-label="Default select example" name="GRADO_DE_EDUCACION">
                        <option value="11">Primaria</option>
                        <option value="12">Secundaria</option>
                        <option value="13">Universitario</option>
                        <option value="14">otro</option>
                    </select><br>
                    <label for="floatingInput">Abilidad u oficio</label>
                    <input type="text" class="form-control" aria-label="Username" name="ABILIDAD_U_OFICIO"
                        value="<?php echo $mostrar['ABILIDAD_U_OFICIO'] ?>"><br>
                        <label for="floatingInput">Direccion</label>
                    <input type="text" class="form-control" aria-label="Username" name="DIRECCION"
                    value="<?php echo $mostrar['DIRECCION'] ?>"><br>
                    <label for="floatingInput">Ciudad</label>
                    <input type="text" class="form-control" aria-label="Username" name="CIUDAD" value="<?php echo $mostrar['CIUDAD'] ?>"><br>
                    <label for="floatingInput">Municipio</label>
                    <input type="text" class="form-control" aria-label="Username" name="MUNICIPIO"
                    value="<?php echo $mostrar['MUNICIPIO'] ?>"><br>
                    <label for="floatingInput">Parroquia</label>
                    <input type="text" class="form-control" aria-label="Username" name="PARROQUIA"
                      value="<?php echo $mostrar['PARROQUIA'] ?>"><br>
                      <label for="floatingInput">Correo</label>
                    <input type="text" class="form-control" aria-label="Username" name="EMAIL"
                    value="<?php echo $mostrar['EMAIL'] ?>"><br>
        
                    <label for="floatingInput">Contraseña</label>
                    <div id=password2>
                        <input type="password" class="form-control" name="PASSWORD" value="<?php echo $mostrar['PASSWORD'] ?>"><br>
                    </div>
                    <label for="floatingInput">Correo</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['EMAIL'] ?>" name="EMAIL"><br>

                    <label for="floatingInput">Rol</label>
                    <select class="form-select" name="IDROLS">
                        <option value="2">Usuario</option>
                        <option value="3">Tecnico</option>
                         <option value="4">Recursos Humanos</option>
                    </select><br>

                    <label for="floatingInput">Status</label>
                    <select class="form-select" name="LOGIN">
                        <option value="1">Habilitado</option>
                        <option value="2">Deshabilitado</option>
                    </select><br>
                    <label for="floatingInput">Sexo</label>
                    <select class="form-select" name="GENDER">
                        <option value="<?php echo $mostrar['GENDER'] ?>" ></option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                        <option value="3">Otro</option>
                    </select><br>
                    <label for="floatingInput">Area</label>
                    <select class="form-select" name="ASSIGNED_AREA" class="selectpicker" data-show-subtext="true"
                        data-live-search="true">
                        <option value="1">Recurso Humanos</option>
                        <option value="2">informatica</option>
                        <option value="3">captacion</option>
                    </select><br>
                    <label for="hijos">Seleccione si tiene hijos.</label>
        <input type="radio" name="gender" class="i-radio" value="si"> Si
        <input type="radio" name="gender" class="i-radio" value="no"> No <br>
        <br>
        <input type="number"  name="NUMERO_DE_HIJOS" class="i-text form-control"  placeholder="Numero de hijos"><br>
        <input type="text"  name="NOBRE_Y_APELLIDO" class="i-text form-control" placeholder="Nombre y apellido"><br>
        <input type="date"  name="FECHA_DE_NACIMIENTO" class="i-text form-control" placeholder="Fecha de nacimiento">
       


        <center>   <button type="submit" class="btn btn-outline-info "  name="submit">Registrar</button> </center>  
                </form>
            </div>
        </div>
        <div class="modal-footer">


        </div>
    </div>
</div>
</div>