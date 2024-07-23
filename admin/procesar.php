<?php


   
include('../config/cone.php');



  $IDDATOS = $_POST['IDDATOS'];
  $NAME = $_POST['NAME'];
 
  $SURNAME = $_POST['SURNAME'];
  $DIRECCION = $_POST['DIRECCION'];
  $CEDULA = $_POST['CEDULA'];
  $FECHA = $_POST['FECHA'];
  $EMAIL = $_POST['EMAIL'];
  $LOGIN  = $_POST['LOGIN'];
  $CIUDAD = $_POST['CIUDAD'];
  $MUNICIPIO = $_POST['MUNICIPIO'];
  $PARROQUIA = $_POST['PARROQUIA'];
  $GENDER = $_POST['GENDER'];
  $AREA = $_POST['ASSIGNED_AREA'];
  $IDROLS = $_POST['IDROLS'];
  $NUMERO = $_POST['NUMERO_DE_HIJOS'];
  $NOMBRE = $_POST['NOBRE_Y_APELLIDO'];
  $NACIMIENTO = $_POST['FECHA_DE_NACIMIENTO'];


 $sql= "UPDATE `user_datos` SET `NAME` = '$NAME', `CEDULA` = '$CEDULA', `FECHA` = '$FECHA', `SURNAME` = '$SURNAME', `DIRECCION` = '$DIRECCION', `CIUDAD` = '$CIUDAD', `MUNICIPIO` = '$MUNICIPIO',  `ASSIGNED_AREA`='$AREA' , `PARROQUIA` = '$PARROQUIA', `EMAIL` = '$EMAIL', `IDROLS` = '$IDROLS', `LOGIN` = '$LOGIN', `NUMERO_DE_HIJOS` = '$NUMERO', `NOBRE_Y_APELLIDO` = '$NOMBRE', `FECHA_DE_NACIMIENTO` = '$NACIMIENTO' , `GENDER` = '$GENDER' WHERE `user_datos`.`IDDATOS` = '$IDDATOS' ";
 
 
   
 $resultado =  mysqli_query($conn, $sql);

 if($resultado){
  echo "
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <script language='JavaScript'>
  document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
      icon: 'success',
      title: 'Se Edito correctamente',
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
      title: 'Algo salio mal. Intenta de nuevo',
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



  
?>