<?php

      
     include('conexion.php');

     
      $IDDATOS=$_POST['IDDATOS'];

      
      mysqli_query($conn, "INSERT INTO `report` (`ID_NAME`) VALUES (null,'$IDDATOS')");



   //header("location:casos.php");



?>