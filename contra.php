<?php

 include "cone.php";

  $CEDULA = $_POST['cedula'];

 $password = $_POST['password'];
 $PASSWORD_C = sha1($password);  

 $cabiar_contra = "UPDATE user_datos SET   PASSWORD = '$PASSWORD_C' WHERE CEDULA = '$CEDULA'";
 echo $cabiar_contra;
  $resultado = mysqli_query($conn, $cabiar_contra);
  
  if ($resultado) {
      echo "cambio la contra";
  }

?>