<?php

  include('conexion.php');

  $ID=$_GET['ID'];

  mysqli_query($conn, "DELETE FROM `imagen` WHERE `imagen`.`ID` = '$ID'");
 
     mysqli_close($conn);

     header("location:dashboard.php");

 ?>   