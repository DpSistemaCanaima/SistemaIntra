<?php 

session_start();

include('../config/cone.php'); // Assuming 'cone.php' contains the database connection

$password = $_POST['password'];
$passwordEncriptada = SHA1($password); // Corrected variable name

$sql = "SELECT CEDULA FROM user_datos";
$result = mysqli_query($conn, $sql); // Corrected function call for clarity

if ($result) { // Check if query execution was successful
    $verificar = mysqli_fetch_array($result);

    if ($verificar) { // Check if any rows were returned (user exists)
        $cedu = $verificar['CEDULA'];
        $cedula = $_POST['cedula'];

        if ($cedula = $cedu) {
			$ID = $_SESSION['IDDATOS']; 
            $actualizar = "UPDATE `user_datos` SET `PASSWORD` = '$passwordEncriptada' WHERE `IDDATOS` = $ID";
           // echo $actualizar; // Optional: For debugging purposes

            $resul = mysqli_query($conn, $actualizar);

            if ($resul) {
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
					timer: 1500
					}).then(() => {
			 
						location.assign('perfil.php');
			 
				   });
			  });
				</script>"; // Corrected grammar
            } else {
				echo "
				<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script language='JavaScript'>
				document.addEventListener('DOMContentLoaded', function() {
				  Swal.fire({
					icon: 'error',
					title: 'Error al actualizar la contraseña',
					showCancelButton: false,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'OK',
					timer: 1500
					}).then(() => {
			 
						location.assign('perfil.php');
			 
				   });
			  });
				</script>" . mysqli_error($conn); // Include error message
            }
        } else {
            echo "
				<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script language='JavaScript'>
				document.addEventListener('DOMContentLoaded', function() {
				  Swal.fire({
					icon: 'error',
					title: 'La cédula no coincide con ningún usuario registrado',
					showCancelButton: false,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'OK',
					timer: 1500
					}).then(() => {
			 
						location.assign('perfil.php');
			 
				   });
			  });
				</script>";
        }
    } else {
        echo "
				<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script language='JavaScript'>
				document.addEventListener('DOMContentLoaded', function() {
				  Swal.fire({
					icon: 'error',
					title: 'No se encontraron usuarios en la base de datos',
					showCancelButton: false,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'OK',
					timer: 1500
					}).then(() => {
			 
						location.assign('perfil.php');
			 
				   });
			  });
				</script>";
    }
} else {
    echo "
				<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
				<script language='JavaScript'>
				document.addEventListener('DOMContentLoaded', function() {
				  Swal.fire({
					icon: 'error',
					title: 'Error: Consulta a la base de datos fallida',
					showCancelButton: false,
					confirmButtonColor: '#3085d6',
					confirmButtonText: 'OK',
					timer: 1500
					}).then(() => {
			 
						location.assign('perfil.php');
			 
				   });
			  });
				</script>" . mysqli_error($conn); // Include error message
}

mysqli_close($conn); // Close the database connection (assuming it's not done in 'cone.php')






         
    

 ?>



