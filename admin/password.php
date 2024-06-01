<?php 
session_start();

include('../config/cone.php');

$ID= $_SESSION['IDDATOS'];
$cedula= $_SESSION['CEDULA'];
$CEDULA = $_POST['CEDULA'];

if($cedula == $CEDULA){

$passwordEnvio = $_POST['PASSWORD'];
 



          mysqli_query($conn,"UPDATE `user_datos` SET `PASSWORD` = SHA1('$passwordEnvio') WHERE `IDDATOS` = $ID");
		 
		echo  "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
		  <script language='JavaScript'>
		  document.addEventListener('DOMContentLoaded', function() {
			  Swal.fire({
				  icon: 'success',
				  title: 'Se cambio la contraseña correctamente',
				  showCancelButton: false,
				  confirmButtonColor: '#3085d6',
				  confirmButtonText: 'OK',
				  timer: 1500
				}).then(() => {
  
				  location.assign('perfil.php');
  
				});
	  });
		  </script>";

}else{
	echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
	<script language='JavaScript'>
	document.addEventListener('DOMContentLoaded', function() {
		Swal.fire({
			icon: 'success',
			title: 'Se Subio Correctamente la Foto',
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



         
    

 ?>



