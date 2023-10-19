<?php  


include('cone.php');
session_start();


$ROL = $_SESSION['IDDATOS'];
$TITLE = $_POST['TITLE'];
$DESCRIPTION = $_POST ['DESCRIPTION'];



   $sql= "INSERT INTO `report` (`ID_REPORT`, `TITLE`, `User_send`, `ID_NAME`, `DESCRIPTION`, `CREATION_DATE`, `DATE_FINAL`, `FECHA_SOLUTION`, `STATUS`, `ID_LEVEL`, `SOLUTION`) VALUES (NULL, '$TITLE', '$ROL', NULL, '$DESCRIPTION', '', NULL, NULL, '3', '3', NULL)";
      
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

        location.assign('soporte_rrhh.php');

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
       title: 'su solicitud no se envio',
       showCancelButton: false,
       confirmButtonColor: '#3085d6',
       confirmButtonText: 'OK',
       timer: 1500
       }).then(() => {

           location.assign('soporte_rrhh.php');

      });
 });
   </script>";
 }



?>