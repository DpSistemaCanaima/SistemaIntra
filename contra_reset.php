<?php



include "cone.php";

$cedula = $_POST['cedula'];
  
  $sql = "SELECT CEDULA, FECHA, EMAIL FROM user_datos WHERE CEDULA = $cedula";
//   echo $sql;
  $resul = mysqli_query($conn, $sql);
  $ver = mysqli_fetch_array($resul);
    $C = $ver['CEDULA'];
    $F = $ver['FECHA'];
    $E = $ver['EMAIL'];

  $cedula = $_POST['cedula'];
  $fecha = $_POST['fecha'];
  $correo = $_POST['email']; 

 if ($cedula == $C ) {

             if ($fecha == $F) {
                  
                 if ($correo == $E) {
                  
                  $password = $_POST['password'];
                  $PASSWORD_C = sha1($password);  
                 
                  $cabiar_contra = "UPDATE user_datos SET   PASSWORD = '$PASSWORD_C' WHERE CEDULA = '$cedula'";
                 
                   $resultado = mysqli_query($conn, $cabiar_contra);

                   if ($resultado) {
                       
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'susses',
                            title: 'Se cambio exitosamente la contraseña',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            timer: 3000
                          }).then(() => {
            
                            location.assign('reset.php');
            
                         });
                });
                    </script>";

                   }else{
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'No se pudo Cambiar la contraseña ',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            timer: 3000
                          }).then(() => {
            
                            location.assign('reset.php');
            
                         });
                });
                    </script>";
                   }
                
                  }else{
                  
                       
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'El Correo no Coincide',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            timer: 3000
                          }).then(() => {
            
                            location.assign('reset.php');
            
                         });
                });
                    </script>";


                 }
                 

             } else {
              
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'La Fecha de Nacimiento no Coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                      }).then(() => {
        
                        location.assign('reset.php');
        
                     });
            });
                </script>";


             }
 
 }else{
  
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'error',
            title: 'La Cedula no Coincide',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            timer: 3000
          }).then(() => {

            location.assign('reset.php');

         });
});
    </script>";

 }

 

?>
