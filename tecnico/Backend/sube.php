<?php
include('perfil/conn.php');

if(isset($_POST['Guardar'])){
    $id_perfil = $_REQUEST['id_perfil'];
    $imagen = $_FILES['imagen']['name'];
   
 

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')  || strpos($tipo,'jpg')  || strpos($tipo,'jfif')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp , png , jpg, jfif';
          $_SESSION['tipo'] = 'danger';
          header('location:../noticias.php');
       }else{
         $query = "UPDATE `perfil` SET `imagen` = '$imagen' WHERE `id_perfil` = '$id_perfil'";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'perfil/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:../noticias.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>