<?php

include('../cone.php');

if ($_POST) {
  $SOLUTION = htmlspecialchars($_POST['SOLUTION']);
  if ($SOLUTION == "") {
    echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
          Swal.fire({
              icon: 'error',
              title: 'Debe llenar el campo de solucion',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK',
              timer: 1500
            }).then(() => {
              location.assign('soporte.php');
            });
  });
      </script>";
      die();
  }
  $ID_REPORT =  htmlspecialchars($_POST['ID_REPORT']);
  if ($ID_REPORT == "") {
    echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
          Swal.fire({
              icon: 'error',
              title: 'No se envia el identificador',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK',
            }).then(() => {
              location.assign('soporte.php');
            });
  });
      </script>";
      die();
  }
  echo $SOLUTION . "<br>" . $ID_REPORT;
  date_default_timezone_set('America/caracas');
  $fecha = date('Y-m-d');
  $sql= "UPDATE report SET FECHA_SOLUTION ='$fecha', SOLUTION = '$SOLUTION', STATUS = 2  WHERE ID_REPORT = '$ID_REPORT' ";
  $result = mysqli_query($conn, $sql);
     if($result){
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
          Swal.fire({
              icon: 'success',
              title: 'se cerro el caso correctamente',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK',
            }).then(() => {
              location.assign('soporte.php');
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
       }).then(() => {
       location.assign('soporte.php');
      });
  });
   </script>";
  }  
}



?>