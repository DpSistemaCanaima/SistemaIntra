<?php

// incluimos la conexion
require "config/cone.php";

// recibimos los datos del formulario
$CEDULA = $_POST['cedula'];
$password = $_POST['pass'];

// encriptamos la contraseña
$password_c = sha1($password);

// consulta sql para actualizar la contraseña
$query = "UPDATE user_datos SET PASSWORD = '$password_c'  WHERE CEDULA = '$CEDULA'";
  $result = mysqli_query($conn,$query);

// arrojamos un script para saber si funciono o no 
if ($result) {
  echo "
				<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script language='JavaScript'>
				document.addEventListener('DOMContentLoaded', function() {
				  Swal.fire({
					icon: 'success',
					title: 'Se cambio correctamente la contraseña',
					showCancelButton: false,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'OK',
					timer: 35000
					}).then(() => {
			 
						location.assign('index.php');
			 
				   });
			  });
				</script>";
} else {
  echo "Failed to update password. Please try again.";
}


?>
