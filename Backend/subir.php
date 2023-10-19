<?php
include ('conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')  || strpos($tipo,'jpg')  || strpos($tipo,'jfif')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp , png , jpg, jfif';
          $_SESSION['tipo'] = 'danger';
          header('location:../index.php');
       }else{
         $query = "INSERT INTO imagenes (imagen,nombre,comentario) values ('$imagen ', '$nombre', '$comentario')";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'imagenes/'.$imagen);   
             $_SESSION['mensaje'] = 'se ha subido correctamente';
             $_SESSION['tipo'] = 'success';
             header('location:../admin.php');
         }else{
             $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
             $_SESSION['tipo'] = 'danger';
         }
       }
    }
}


?>