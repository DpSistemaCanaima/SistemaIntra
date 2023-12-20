<?php

include('../cone.php');

session_start();
if (!isset($_SESSION['IDDATOS'])) {
  header("Location: index.php");
}

 $consulta= mysqli_query($conn,"SELECT * FROM user_datos"); 
 $row = mysqli_fetch_array($consulta);

 $mostrar = $row['CEDULA'];

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$solicitud = $_POST['solicitud'];

 if ($mostrar == $cedula) {


$sql = "INSERT INTO `recursos` (`nombre`, `cedula`, `solicitud`) VALUES ('$nombre', '$cedula', '$solicitud')";

  $result = mysqli_query($conn, $sql);
   
  if ($result) {
        
  
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        icon: 'success',
        title: 'Se Envio tu solicitud correctamente',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
        timer: 1500
        }).then(() => {

        location.assign('solicitud-rrhh.php');

        });
  });
    </script>";
  }

}else {
  echo "
 <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
 <script language='JavaScript'>
 document.addEventListener('DOMContentLoaded', function() {
   Swal.fire({
     icon: 'error',
     title: 'La Cedula no corresponde al usuario o el campo esta vacio',
     showCancelButton: false,
     confirmButtonColor: '#3085d6',
     confirmButtonText: 'OK',
     timer: 1500
     }).then(() => {

         location.assign('solicitud-rrhh.php');

    });
});
 </script>";
}


?>