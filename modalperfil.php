<div class="modal fade" id="exampleModal<?php echo $ver['IDDATOS']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $ver['IDDATOS']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><h1>Cambia tu foto de perfil</h1></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		
      <?php  
	
	include 'cone.php';
	$consulta = mysqli_query($con, "SELECT * FROM user_datos ");
	$valores = mysqli_fetch_array($consulta);
	$IDDATOS = $valores['IDDATOS'];
	$foto = $valores['foto'] ?>
	<img class="perfil" src="<?php ; echo $foto; ?>">
	<form action="foto.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="IDDATOS" value="<?php echo $IDDATOS; ?>">
		Ingresa tu nuerva foto de perfil
		<input type="file" name="nfoto">
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
      </div>
    </div>
  </div>

</div>

