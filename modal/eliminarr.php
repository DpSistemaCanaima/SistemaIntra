<?php
include('../config/cone.php');

	$CEDULA = $_GET['CEDULA'];

	$sql = "DELETE FROM `user_datos` WHERE `user_datos`.`CEDULA` = '$CEDULA'"; 
	$respuesta = mysqli_query($conn, $sql);
	
	if($respuesta){
		echo "
		<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
		<script language='JavaScript'>
		document.addEventListener('DOMContentLoaded', function() {
			Swal.fire({
				icon: 'success',
				title: 'Se El Correctamente',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'OK',
				timer: 1500
			  }).then(() => {

				location.assign('../gestion_usuario.php');

			  });
	});
		</script>";
	}else {
		 echo "
		<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
		<script language='JavaScript'>
		document.addEventListener('DOMContentLoaded', function() {
			Swal.fire({
				icon: 'error',
				title: 'Algo salio mal. Intenta de nuevo',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'OK',
				timer: 1500
			  }).then(() => {

				location.assign('../gestion_usuario.php');

			 });
	});
		</script>";
	}



?>