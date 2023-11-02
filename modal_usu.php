    <?php

include('cone.php');

  if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1>Cambia tu foto de perfil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">




            <?php
	

	
	$foto = $_SESSION['IDDATOS'];
	$USER= $_SESSION['USER'];
	include 'cone.php';
	$consulta = mysqli_query($conn, "SELECT * FROM user_datos WHERE USER = '$USER';");
	$valores = mysqli_fetch_array($consulta);
	$USER = $valores['USER'];
	$foto = $valores['foto'];
	 ?>
                               
                                <img class="perfil" src="<?php ; echo $foto; ?>">
                                <form action="foto_usu.php" method="post" enctype="multipart/form-data">
                                    <input type="text" name="USER" value="<?php echo $USER; ?>" style="display: none;">
                                    Ingresa tu nuerva foto de perfil
                                    <input class="card-title" type="file" name="nfoto">
                                    <button class="card-title" type="submit" class="btn btn-primary">Actualizar</button>  
                                </form>







            </div>




        </div>
    </div>
</div>