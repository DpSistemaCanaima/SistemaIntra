<?php

include "../cone.php";

session_start();
if (!isset($_SESSION['IDDATOS'])) {
  header("Location: index.php");
}

$USER = $_SESSION['USER'];

$USUARIO = $_POST['USER'];
$PASS  = $_POST ['PASSWORD'];

$sql=mysqli_query($conn,"UPDATE `user_datos` SET `USER` = $USUARIO , `PASSWORD` = $PASS WHERE  `USER` = $USER");
echo $sql;


if ($result) {
       echo "funco";
}else{
    echo "no funco";
}



?>