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


                <form action="registrarrhh.php" method="POST">
                    <input type="text" class="form-control" aria-label="Username" name="NAME" placeholder="Nombre"
                        size="20">

                    <input type="text" class="form-control" aria-label="Username" name="SURNAME" placeholder="Apellido">

                    <input type="radio" name="NACIONALIDAD" class="i-radio" value="1"> Venezolano
                   <input type="radio" name="NACIONALIDAD" class="i-radio" value="2"> extranjero <br>    

                    <input type="text" class="form-control" aria-label="Username" id="cedula" name="CEDULA"
                        placeholder="Cedula" size="20">
                        <input type="date" class="form-control" name="FECHA" class="i-text" placeholder="Fecha de nacimiento">
                  <select class="form-select" aria-label="Default select example" name="GRADO_DE_EDUCACION" >
                      <option value="">Nivel de intruccion</option> 
                      <option value="11">Primaria</option>
                       <option value="12">Secundaria</option>
                       <option value="13">Universitario</option>
                       <option value="14">otro</option>
                  </select>
                    <input type="text" class="form-control" aria-label="Username" name="ABILIDAD_U_OFICIO"
                        placeholder="Oficio ó Abilidad">
                    <input type="text" class="form-control" aria-label="Username" name="DIRECCION"
                        placeholder="Direccion Completa">
                    <input type="text" class="form-control" aria-label="Username" name="CIUDAD" placeholder="Ciudad">
                    <input type="text" class="form-control" aria-label="Username" name="MUNICIPIO"
                        placeholder="Municipio">
                    <input type="text" class="form-control" aria-label="Username" name="PARROQUIA"
                        placeholder="Parroquia">
                    <input type="text" class="form-control" aria-label="Username" name="USER"
                        placeholder="Ingrese usuario">
                    <input type="password" class="form-control" aria-label="Username" name="PASSWORD"
                        placeholder="Ingrese contraseña">
                    <input type="text" class="form-control" aria-label="Username" name="EMAIL"
                        placeholder="Ingrese correo">
                      
                    <select class="form-select" aria-label="Default select example" name="IDROLS">
                        <option>Roles</option>
                        <option value="2">Usuario</option>
                        <option value="3">Tecnico</option>
                    </select>
                    <select class="form-select" aria-label="Default select example" name="LOGIN">
                        <option>Status</option>
                        <option value="1">Habilitado</option>
                        <option value="2">Deshabilitado</option>
                    </select>
                    <select class="form-select" aria-label="Default select example" name="GENDER">
                        <option>Sexo</option>
                        <option value=1>Hombre</option>
                        <option value=2>Mujer</option>
                        <option value=3>Otro</option>
                    </select>

                    <?php $result3 = mysqli_query($conn, "SELECT * FROM area");?>
                    <select class="form-select" aria-label="Default select example" name="ASSIGNED_AREA">
                        <option>Area</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>


             <label for="hijos">Seleccione si tiene hijos.</label>
        <input type="radio" name="gender" class="i-radio" value="si"> Si
        <input type="radio" name="gender" class="i-radio" value="no"> No <br>
        <input type="number"  name="NUMERO_DE_HIJOS" class="i-text" placeholder="Numero de hijos">
        <input type="text"  name="NOBRE_Y_APELLIDO" class="i-text" placeholder="Nombre y apellido">
        <input type="date"  name="FECHA_DE_NACIMIENTO" class="i-text" placeholder="Fecha de nacimiento">
        <input type="hidden" name="foto" value="<?php echo $foto; ?>">

                    <br>










                    <script type=text/javascript>
                    $('.selectpicker').selectpicker({
                        style: 'btn-default'
                    });
                    </script>
                    <br>

                    <input type="submit" name="submit">
                </form>
            </div>




        </div>
    </div>
</div>