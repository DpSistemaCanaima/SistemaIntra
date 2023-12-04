<?php 

include ('conexion.php');


$peticion = $_POST['ID_REPORT'];
   $fecha_solution= $_POST['fecha_solution'];
   $solucion = $_POST['solution'];

            $sql = "UPDATE `report` SET `FECHA_SOLUTION` = ' $fecha_solution', `STATUS` = '2', `SOLUTION` = '$solucion' WHERE  `ID_REPORT` = '$peticion'";
            
     $result= mysqli_query($conn,$sql);

     mysqli_close($conn);

     if($sql){
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          icon: 'success',
          title: 'Se cerro el caso correctamente',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'OK',
          timer: 1500
          }).then(() => {
  
          location.assign('caso.php');
  
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
  
          location.assign('caso.php');
  
         });
    });
      </script>";
    }



  
?>