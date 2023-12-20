<?php


include('../cone.php');

 $cedula=$_POST['txtcedula'];

 mysqli_query($conn,"DELETE FROM `recursos` WHERE `recursos`.`cedula` = $cedula") ;

  mysqli_close($conn);
 
  if($cedula){
		echo "
		<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
		<script language='JavaScript'>
		document.addEventListener('DOMContentLoaded', function() {
			Swal.fire({
				icon: 'success',
				title: 'Se Elimino correctamente',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'OK',
				timer: 1500
			  }).then(() => {

				location.assign('constancia.php');

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

				location.assign('constancia.php');

			 });
	});
		</script>";
	}


?>