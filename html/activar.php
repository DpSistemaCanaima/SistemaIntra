<?php

include('../cone.php');

$ID_REPORT= $_POST['ID_REPORT'];
$STATUS = $_POST['STATUS'];
$ID_NAME = $_POST['ID_NAME'];
$ID_LEVEL = $_POST['ID_LEVEL'];

  $sql= " UPDATE `report` SET `ID_NAME` = '$ID_NAME', `STATUS` = '$STATUS' , `ID_LEVEL` = '$ID_LEVEL' WHERE ID_REPORT = '$ID_REPORT' ";
     $result = mysqli_query($conn, $sql);
  
  
   if($result){
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Se asigno y modifico el caso correctamente',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            timer: 1500
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
            timer: 1500
          }).then(() => {

            location.assign('soporte.php');

         });
});
    </script>";
}
?>