<!-- Modal -->
<div class="modal fade" id="registrarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Usuario</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form" action="registrar.php" method="POST">

<input type="hidden" name="IDDATOS">

<input type="text" id="name" name="name" placeholder="Nombre" size="20">

<input type="text" id="surname"  name="surname" placeholder="Apellido"><br>

<select name="nacionalidad" id="">
    <option value="1">V</option>
    <option value="2">E</option>
</select> 
<input type="text" id="cedula" name="cedula" placeholder="Cedula" size="20">
<select name="nivel" id="nivel">
    <option value="1">primaria</option>
    <option value="2">bachiller</option>
    <option value="3">universitario</option>
    <option value="4">otro</option>
</select>
<input type="text" namer="oficio" placeholder="Oficio ó Abilidad">
<input type="text" name="direccion" placeholder="Direccion Completa">
<input type="text" name="ciudad" placeholder="Ciudad">
<input type="text" name="municipio" placeholder="Municipio">
<input type="text" name="parroquia" placeholder="Parroquia">
<input type="text" id="user" name="user" placeholder="Ingrese usuario">
<input type="password" name="password" placeholder="Ingrese contraseña">
<input type="text" name="email" placeholder="Ingrese correo"><br>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>