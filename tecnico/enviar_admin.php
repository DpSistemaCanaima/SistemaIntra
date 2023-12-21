<?php

include('../cone.php');

session_start();
if (!isset($_SESSION['IDDATOS'])) {
  header("Location: index.php");
}

if ($_POST) {
  $consulta= mysqli_query($conn,"SELECT * FROM user_datos"); 
  $row = mysqli_fetch_array($consulta);
  $mostrar = $row['CEDULA'];

  $nombre = $_POST['nombre'];
  if ($nombre == "") {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        icon: 'error',
        title: 'El nombre se encuentra vacio',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
        }).then(() => {
            location.assign('solicitud-rrhh.php');
        });
    });
    </script>";
    die();
  }
  $cedula = $_POST['cedula'];
  if ($cedula == "") {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        icon: 'error',
        title: 'La cedula se encuentra vacia',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
        }).then(() => {
            location.assign('solicitud-rrhh.php');
        });
    });
    </script>";
    die();
  }
  $solicitud = $_POST['solicitud'];
  if ($solicitud == "") {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        icon: 'error',
        title: 'Debe elegir una solicitud',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
        }).then(() => {
            location.assign('solicitud-rrhh.php');
        });
    });
    </script>";
    die();
  }

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
        }).then(() => {

            location.assign('solicitud-rrhh.php');

        });
    });
    </script>";
    }
}

 


?>