<?php

require "../conexion.php";


	$cod_imagen = $_GET['cod_imagen'];

	$sql = "DELETE FROM imagenes WHERE cod_imagen ='$cod_imagen'"; 
    echo $sql;
	$respuesta = mysqli_query($conn, $sql);
      header("location:index.php");
    ?>