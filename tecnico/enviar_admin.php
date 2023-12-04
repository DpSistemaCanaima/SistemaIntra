<?php

include('cone.php');

session_start();
if (!isset($_SESSION['IDDATOS'])) {
  header("Location: index.php");
}

$CEDULA= $_SESSION['CEDULA'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$solicitud = $_POST['solicitud'];

$sql = "INSERT INTO `recursos` (`nombre`, `apellido`, `cedula`, `solicitud`) VALUES ('$nombre', '$apellido', '$cedula', '$solicitud')";

  $result = mysqli_query($conn, $sql);
   
  if ($cedula == $CEDULA) {
        
  
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

        location.assign('solicitud_rrhh.php');

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
       title: 'La Cedula no corresponde al usuario o el campo esta vacio',
       showCancelButton: false,
       confirmButtonColor: '#3085d6',
       confirmButtonText: 'OK',
       timer: 1500
       }).then(() => {

           location.assign('solicitud_rrhh.php');

      });
 });
   </script>";
 }

    

?>