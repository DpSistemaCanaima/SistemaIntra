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

                <form action="procesar.php" method="POST">
                    <input type="hidden" value="<?php echo $mostrar['IDDATOS']; ?>" name="IDDATOS">
                    <label for="floatingInput">Nombre</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['NAME'] ?>" name="NAME">
                    <label for="floatingInput">Apellido</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['SURNAME'] ?>" name="SURNAME">
                   
                    <label for="floatingInput">Cedula</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['CEDULA'] ?>" name="CEDULA">
                    <label for="floatingInput">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="FECHA" class="i-text"
                       value="<?php echo $mostrar['FECHA'] ?>">
                        <label for="floatingInput">Direccion</label>
                    <input type="text" class="form-control" aria-label="Username" name="DIRECCION"
                    value="<?php echo $mostrar['DIRECCION'] ?>">
                    <label for="floatingInput">Ciudad</label>
                    <input type="text" class="form-control" aria-label="Username" name="CIUDAD" value="<?php echo $mostrar['CIUDAD'] ?>">
                    <label for="floatingInput">Municipio</label>
                    <input type="text" class="form-control" aria-label="Username" name="MUNICIPIO"
                    value="<?php echo $mostrar['MUNICIPIO'] ?>">
                    <label for="floatingInput">Parroquia</label>
                    <input type="text" class="form-control" aria-label="Username" name="PARROQUIA"
                      value="<?php echo $mostrar['PARROQUIA'] ?>">
                      <label for="floatingInput">Correo</label>
                    <input type="text" class="form-control" aria-label="Username" name="EMAIL"
                    value="<?php echo $mostrar['EMAIL'] ?>">
        
                    <label for="floatingInput">Contraseña</label>
                    <div id=password2>
                        <input type="password" class="form-control" name="PASSWORD" value="<?php echo $mostrar['PASSWORD'] ?>">
                    </div>
                    <label for="floatingInput">Correo</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['EMAIL'] ?>" name="EMAIL">

                    <label for="floatingInput">Rol</label>
                    <select class="form-select" name="IDROLS">
                        <option value="2">Usuario</option>
                        <option value="3">Tecnico</option>
                         <option value="4">Recursos Humanos</option>
                    </select>

                    <label for="floatingInput">Status</label>
                    <select class="form-select" name="LOGIN">
                        <option value="1">Habilitado</option>
                        <option value="2">Deshabilitado</option>
                    </select>
                    <label for="floatingInput">Sexo</label>
                    <select class="form-select" name="GENDER">
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                        <option value="3">Otro</option>
                    </select>
                    <label for="floatingInput">Cargo</label>
                    <input type="text" class="form-control" value="<?php echo $mostrar['ASSIGNED_AREA'] ?>" name="ASSIGNED_AREA"><br>
                    <!-- <select class="form-select" name="ASSIGNED_AREA" class="selectpicker" data-show-subtext="true"
                        data-live-search="true">
                        <option></option>
                        <option value="1">Presidencia</option>
                        <option value="2">Proyecto</option>
                        <option value="3">Consultoria Juridica</option>
                        <option value="4">Planificación y Presupuesto</option>
                        <option value="5">Gestion Humana</option>
                        <option value="6">Procura</option>
                        <option value="7">Administración y Finanzas</option>
                        <option value="8">Tic</option>
                        <option value="9">Atencion al ciudadano</option>
                        <option value="10">Comercializacion</option>
                        <option value="11">Seguridad</option>
                        <option value="12">Seguridad Integral</option>
                        <option value="13">Producción</option>
                    </select>-->
                    <label for="hijos">Seleccione si tiene hijos.</label> 
        <input type="radio" name="gender" class="i-radio" value="si"> Si
        <input type="radio" name="gender" class="i-radio" value="no"> No <br>
        <input type="number"  name="NUMERO_DE_HIJOS" class="i-text form-control" placeholder="Numero de hijos"><br>
        <input type="text"  name="NOBRE_Y_APELLIDO" class="i-text form-control" placeholder="Nombre y apellido"><br>
        <input type="date"  name="FECHA_DE_NACIMIENTO" class="i-text form-control" placeholder="Fecha de nacimiento">
       


                 <center>   <input type="submit" value="Actualizar" class="btn btn-outline-primary"></center>
                </form>
            </div>
        </div>
        <div class="modal-footer">


        </div>
    </div>
</div>
</div>