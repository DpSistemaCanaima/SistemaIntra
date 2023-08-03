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
                

                <form  action="registrar.php" method="POST">
<input type="text"  name="name" placeholder="Nombre" size="20">

<input type="text"  name="surname" placeholder="Apellido">

<select name="nacionalidad" >
    <option value="1">V</option>
    <option value="2">E</option>
</select> 
<input type="text" id="cedula" name="cedula" placeholder="Cedula" size="20">

<input type="text" name="oficio" placeholder="Oficio ó Abilidad">
<input type="text" name="direccion" placeholder="Direccion Completa">
<input type="text" name="ciudad" placeholder="Ciudad">
<input type="text" name="municipio" placeholder="Municipio">
<input type="text" name="parroquia" placeholder="Parroquia">
<input type="text"  name="user" placeholder="Ingrese usuario">
<input type="password" name="password" placeholder="Ingrese contraseña">
<input type="text" name="email" placeholder="Ingrese correo">
<select name="idrols">
    <option value="2">Usuario</option>
    <option value="3">Tecnico</option>
</select>
<select name="login">
    <option value="1">Habilitado</option>
    <option value="2">Deshabilitado</option>
</select>
<select name="gender" >
   
    <option value=1>Hombre</option>
    <option value=2>Mujer</option>
    <option value=3>Otro</option>
</select>

<?php $result3 = mysqli_query($conn, "SELECT * FROM area");?>
<select name="assigned_area" >
    
      <option value="1">1</option>
      <option value="2">2</option> 
      <option value="3">3</option>
</select>




<br>










<script type=text/javascript>
$('.selectpicker').selectpicker({
    style: 'btn-default'
});
</script>
<br>

<input type="submit">
</form>
            </div>
            
               
                
              
        </div>
    </div>
</div>
