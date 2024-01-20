<?php

  include "../conexion.php";

 $NOMBRE = $_POST['nombre'];
 $COMENTARIO = $_POST['comentario'];

 $sql = "UPDATE `imagenes` SET `nombre` = '$NOMBRE', `comentario` = '$COMENTARIO'";

    $resul = mysqli_query($conn, $sql) ;

    if($resul){
		echo "
		<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
		<script language='JavaScript'>
		document.addEventListener('DOMContentLoaded', function() {
			Swal.fire({
				icon: 'success',
				title: 'Se Guardaron los cambios correctamente',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'OK',
				timer: 1500
			  }).then(() => {

				location.assign('index.php');

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

				location.assign('index.php');

			 });
	});
		</script>";
	}
?>