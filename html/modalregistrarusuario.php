<!-- Modal -->
<div class="modal fade" id="registrarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <link rel="stylesheet" href="cla.css">


                <form action="registrar.php" method="POST">
                    <input type="text" class="form-control" aria-label="Username" name="NAME" placeholder="Nombre"
                        size="20"><br>

                    <input type="text" class="form-control" aria-label="Username" name="SURNAME" placeholder="Apellido"><br>

                    <input type="radio" name="NACIONALIDAD" class="i-radio" value="1"> Venezolano
                   <input type="radio" name="NACIONALIDAD" class="i-radio" value="2"> extranjero <br>    
 <br>
                    <input type="text" class="form-control" aria-label="Username" id="cedula" name="CEDULA"
                        placeholder="Cedula" size="20"><br>
                        <input type="date" class="form-control" name="FECHA" class="i-text" placeholder="Fecha de nacimiento"><br>
                
                    
                        
                    <input type="text" class="form-control" aria-label="Username" name="DIRECCION"
                        placeholder="Direccion Completa"><br>
                    <input type="text" class="form-control" aria-label="Username" name="CIUDAD" placeholder="Ciudad"><br>
                    <input type="text" class="form-control" aria-label="Username" name="MUNICIPIO"
                        placeholder="Municipio"><br>
                    <input type="text" class="form-control" aria-label="Username" name="PARROQUIA"
                        placeholder="Parroquia"><br>
                    <input type="text" class="form-control" aria-label="Username" name="USER"
                        placeholder="Ingrese usuario"><br>
                    <input type="password" class="form-control" aria-label="Username" name="PASSWORD"
                        placeholder="Ingrese contraseña"><br>
                    <input type="email" class="form-control" aria-label="Username" name="EMAIL"
                        placeholder="Ingrese correo"><br>
                      
                    <select class="form-select" aria-label="Default select example" name="IDROLS">
                        <option>Roles</option>
                        <option value="2">Usuario</option>
                        <option value="3">Tecnico</option>
                        <option value="4">Recursos Humanos</option>
                    </select><br>
                    <select class="form-select" aria-label="Default select example" name="LOGIN">
                        <option>Status</option>
                        <option value="1">Habilitado</option>
                        <option value="2">Deshabilitado</option>
                    </select><br>
                    <select class="form-select" aria-label="Default select example" name="GENDER">
                        <option>Sexo</option>
                        <option value=1>Hombre</option>
                        <option value=2>Mujer</option>
                        <option value=3>Otro</option>
                    </select><br>
                    <input type="text" class="form-control" aria-label="Username" name="ASSIGNED_AREA"
                        placeholder="Cargo"><br>
                    

                    <label for="hijos">Seleccione si tiene hijos.</label>
                    <br>
                    <input type="radio" name="gender" class="i-radio" value="si"> Si
                    <input type="radio" name="gender" class="i-radio" value="no"> No <br>
                    <br>
                    <input type="number"  name="NUMERO_DE_HIJOS" class="i-text form-control" placeholder="Numero de hijos"><br>
                    <input type="text"  name="NOBRE_Y_APELLIDO" class="i-text form-control" placeholder="Nombre y apellido"><br>
                    <input type="date"  name="FECHA_DE_NACIMIENTO" class="i-text form-control" placeholder="Fecha de nacimiento">
                    <input type="hidden" name="foto" value="<?php echo $foto; ?>">

                    










                    <script type=text/javascript>
                    $('.selectpicker').selectpicker({
                        style: 'btn-default'
                    });
                    </script>
                    <center>   <button type="submit" class="btn btn-outline-info "  name="submit">Registrar</button> </center>  
                </form>
            </div>




        </div>
    </div>
</div>