<?php 
session_start();

include '../cone.php';

$foto = $_FILES['nfoto'];
$cedula = $_SESSION['CEDULA'];
$USE =$_POST['USER'];


$passwordEnvio = $_POST['PASSWORD'];
$PASSWORD_C = sha1($passwordEnvio);  



$directorio_destino = "../images";

$tmp_name = $foto['tmp_name'];
    
    
        $img_file = $foto['name'];
        $img_type = $foto['type'];
       
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
 strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
         
            $destino = $directorio_destino . '/' .  $img_file;
            mysqli_query($conn, "UPDATE user_datos SET foto = '$destino', USER = '$USE' , PASSWORD = '$PASSWORD_C' WHERE CEDULA = '$cedula' ");
           (move_uploaded_file($tmp_name, $destino))
        
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
				icon: 'error',
				title: 'Algo salio mal. Intenta de nuevo',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'OK',
				timer: 1500
			  }).then(() => {

				location.assign('perfil.php');

			 });
	});
		</script>