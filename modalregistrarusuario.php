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

<input type="text" id="name" name="name" placeholder="Nombre" size="20">

<input type="text" id="surname"  name="surname" placeholder="Apellido">

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
<select name="assgned_area" class="selectpicker" data-show-subtext="true"
    data-live-search="true" >
    <option value="<?php echo $mostrar['ASSIGNED_AREA']?>" selected="true">--Defecto--</option>
    <?php while ($area = mysqli_fetch_array($result3)) {
?>
    <option value="<?php echo $area['ID_AREA']; ?>"><?php echo $area['AREA']; ?></option>
    <?php }?>
</select>


<h2>Tienes hijos </h2>


<input type="radio" name="gender" class="i-radio" value="si"> Si
<input type="radio" name="gender" class="i-radio" value="no"> No<br>
<br>

<input type="number" name="numero_de_hijos" class="i-text" placeholder="Numero de hijos">
<input type="text" name="nombre_y_apellido" class="i-text" placeholder="Nombre del ñiño">
<input type="date" name="fecha_de_nacimiento" class="i-text" placeholder="fecha de nacimiento"><br>


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
