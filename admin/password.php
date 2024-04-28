<?php 
session_start();

include '../cone.php';
$contra= $_SESSION['PASSWORD'];
$cedula = $_SESSION['CEDULA'];
$pass = $_POST['actual_pass'];
if($pass === $contra){
$passwordEnvio = $_POST['PASSWORD'];
$PASSWORD_C = sha1($passwordEnvio);  



         
            mysqli_query($conn, "UPDATE user_datos SET  , PASSWORD = '$PASSWORD_C' WHERE CEDULA = '$cedula' ");
        

                ?>

    
		<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
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
		</script>
	


                <?php  

            }
    

		

    

 ?>

<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
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
		</script>

