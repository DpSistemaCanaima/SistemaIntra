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
      <form id="form" action="registrar.php" method="POST">

<input type="hidden" name="IDDATOS">

<label for="floatingInput">Nombre</label>
<input type="text" id="name" name="name"  size="20" class="form-control">

<label for="floatingInput">Apellido</label>
<input type="text" id="surname"  name="surname"  class="form-control" >

<label for="floatingInput">Cedula</label>
<div class="input-group mb-3">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">nacionalidad</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Venezolano</a></li>
    <li><a class="dropdown-item" href="#">Extrajero</a></li>
  </ul>
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
</div>

<label for="floatingInput">estudios</label>
<select class="form-control" name="nivel" id="nivel">
    <option value="1">primaria</option>
    <option value="2">bachiller</option>
    <option value="3">universitario</option>
    <option value="4">otro</option>
</select>

<label for="floatingInput">Oficio ó Abilidad</label>
<input type="text" namer="oficio"  class="form-control">

<label for="floatingInput">ciudad</label>
<input type="text" name="ciudad"  class="form-control">

<label for="floatingInput">Municipio</label>
<input type="text" name="municipio"  class="form-control">

<label for="floatingInput">Parroquia</label>
<input type="text" name="parroquia"  class="form-control">

<label for="floatingInput">Direccion Completa</label>
<input type="text" name="direccion"  class="form-control">

<label for="floatingInput">Usuario</label>
<input type="text" id="user" name="user"  class="form-control">

<label for="floatingInput">password</label>
<input type="password" name="password"  class="form-control">

<label for="floatingInput">Correo</label>
<input type="text" name="email"  class="form-control"><br>

<label for="floatingInput">Tipo de Usuario</label>
<select name="idrols" class="form-select" aria-label="Default select example">
    <option value="2">Usuario</option>
    <option value="3">Tecnico</option>
</select>

<label for="floatingInput">Status</label>
<select name="login" class="form-select" aria-label="Default select example">
    <option value="1">Habilitado</option>
    <option value="2">Deshabilitado</option>
</select>

<label for="floatingInput">Sexo</label>
<select name="gender" class="form-select" aria-label="Default select example">
    <option value=1>Hombre</option>
    <option value=2>Mujer</option>
    <option value=3>Otro</option>
</select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </form>
      </div>
    </div>
  </div>
</div>