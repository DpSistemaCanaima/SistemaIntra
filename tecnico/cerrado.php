<?php

include('../cone.php');



$SOLUTION = $_POST['SOLUTION'];

date_default_timezone_set('America/caracas');
$fecha = date('Y-m-d');
$sql= "UPDATE report SET FECHA_SOLUTION ='$fecha', SOLUTION = '$SOLUTION', STATUS = 2";

  // $sql= " UPDATE `report` SET  `STATUS` = '2' WHERE ID_REPORT = '$ID_REPORT'";
      $result = mysqli_query($conn, $sql);
      if ($result === true) {
        echo "Esta mierda sirve";
      }else {
        die("Error al realizar el registro: ".mysqli_error($conn));
      }
  
//    if($result){
//     echo "
//     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//     <script language='JavaScript'>
//     document.addEventListener('DOMContentLoaded', function() {
//         Swal.fire({
//             icon: 'success',
//             title: 'se cerro el caso correctamente',
//             showCancelButton: false,
//             confirmButtonColor: '#3085d6',
//             confirmButtonText: 'OK',
//             timer: 1500
//           }).then(() => {

//             location.assign('soporte.php');

//           });
// });
//     </script>";
// }else {
//   echo "
//  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//  <script language='JavaScript'>
//  document.addEventListener('DOMContentLoaded', function() {
//    Swal.fire({
//      icon: 'error',
//      title: 'Algo salio mal. Intenta de nuevo',
//      showCancelButton: false,
//      confirmButtonColor: '#3085d6',
//      confirmButtonText: 'OK',
//      timer: 1500
//      }).then(() => {

//      location.assign('soporte.php');

//     });
// });
//  </script>";
// }


?>