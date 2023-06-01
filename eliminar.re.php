<?php


include('conexion.php');

 $cedula=$_POST['txtcedula'];

 mysqli_query($conn,"DELETE FROM `recursos` WHERE `recursos`.`cedula` = $cedula") or die("error al eliminar");

  mysqli_close($conn);
  header("location:dashboard.php");


?>