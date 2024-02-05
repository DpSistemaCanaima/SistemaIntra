<?php

  include('../cone.php');


    $NAME = $_POST['NAME'];
    $SURNAME = $_POST['SURNAME'];
    $NACIONALIDAD = $_POST['NACIONALIDAD'];
    $CEDULA = $_POST['CEDULA'];
    $FECHA = $_POST['FECHA'];
    $DIRECCION =$_POST['DIRECCION'];
    $CIUDAD =$_POST['CIUDAD'];
    $MUNICIPIO =$_POST['MUNICIPIO'];
    $PARROQUIA =$_POST['PARROQUIA'];
    $USER =$_POST['USER'];
    $PASSWORD_C = sha1('PASSWORD');  
    $CORREO =$_POST['EMAIL'];
    $IDROLS =$_POST['IDROLS'];
    $LOGIN =$_POST['LOGIN'];
    $GENDER=$_POST['GENDER'];
    $AREA =$_POST['ASSIGNED_AREA'];
    $NUMERO = $_POST['NUMERO_DE_HIJOS'];
    $NOBRE_Y_APELLIDO = $_POST['NOBRE_Y_APELLIDO'];
    $FECHA_DE_NACIMIENTO = $_POST['FECHA_DE_NACIMIENTO'];
    $foto = $_POST['foto'];


    $consulta = "SELECT * FROM user_datos";
    $result = mysqli_query($conn, $consulta );
    $mostra = mysqli_fetch_assoc($result);
    
    $user = $mostra['USER']; 
    $cedula = $mostra['CEDULA'];

    if ($CEDULA == $cedula ) {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          icon: 'error',
          title: 'La cedula ya esta registrado',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'OK',
          timer: 1500
          }).then(() => {
   
              location.assign('gestion_admin.php');
   
         });
    });
      </script>";
}else{

     if($USER == $user){
 echo "
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
     <script language='JavaScript'>
     document.addEventListener('DOMContentLoaded', function() {
       Swal.fire({
         icon: 'error',
         title: 'No se pudo registrar',
         showCancelButton: false,
         confirmButtonColor: '#3085d6',
         confirmButtonText: 'OK',
         timer: 1500
         }).then(() => {
  
             location.assign('gestion_admin.php');
  
        });
   });
     </script>";
   
     }else{


   $sql="INSERT INTO `user_datos` (`IDDATOS`, `NAME`, `NACIONALIDAD`, `CEDULA`, `FECHA`, `SURNAME`, `DIRECCION`, `CIUDAD`, `MUNICIPIO`, `PARROQUIA`, `GENDER`, `USER`, `PASSWORD`, `EMAIL`, `IDROLS`, `LOGIN`, `ASSIGNED_AREA`, `PASSWORD_ID`, `NUMERO_DE_HIJOS`, `NOBRE_Y_APELLIDO`, `FECHA_DE_NACIMIENTO`, `foto`) VALUES (NULL, '$NAME', '$NACIONALIDAD', '$CEDULA', '$FECHA', '$SURNAME', '$DIRECCION', '$CIUDAD', '$MUNICIPIO', '$PARROQUIA', '$GENDER', '$USER','$PASSWORD_C', '$CORREO', '$IDROLS', '$LOGIN', '$AREA', NULL, '0', '0', '0', 'images/defect.jpg')";

   
    $result = mysqli_query($conn,$sql);
     
      

    if ($result) {
     
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
          icon: 'success',
          title: 'Su Registro fue Exitoso',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'OK',
          timer: 1500
          }).then(() => {
   
              location.assign('usuarios.php');
   
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
         title: 'No se pudo registrar',
         showCancelButton: false,
         confirmButtonColor: '#3085d6',
         confirmButtonText: 'OK',
         timer: 1500
         }).then(() => {
  
             location.assign('usuarios.php');
  
        });
   });
     </script>";
   }
  
   
  }

}
        

  ?>