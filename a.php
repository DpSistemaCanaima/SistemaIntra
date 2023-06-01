<?php

include('conexion.php');

if($_POST["cedula"]==""  || $_POST["user"]=="" || $_POST["password"]==""){

        echo '<script>';
        echo 'alert("revisar los campos puede que alguno  esta vacio !!!");';
        echo 'window.location.href="actualizar.php";';
        echo '</script>';

        die();
}


 $CEDULA=$_POST['cedula'];
 $USER=$_POST['user'];
 $PASSWORD=$_POST['password'];

  mysqli_query($conn, "UPDATE `user_datos` SET `cedula` = '$CEDULA', `user` = '$USER',
  `password` = SHA1('$PASSWORD') WHERE `user_datos`.`cedula` = '$CEDULA'") or die("error al actualizar");
 
 if ($conn) {


       echo '<script>';
       echo 'alert("registro exitoso!!!");';
       echo 'window.location.href="index.php";';
       echo '</script>';
       
} else {
        echo "error revise los campos";
}
?> 				