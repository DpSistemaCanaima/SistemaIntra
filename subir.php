<?php
include ('conexion.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    if (!preg_match("/[a-zA-Z\s]{10,60}/", $nombre)) {
      echo "
              <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
              <script language='JavaScript'>
              document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                  icon: 'success',
                  title: 'El campo nombre no cumple con los caracteres establecidos.',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK',
                  timer: 1500
                  }).then(() => {
          
                  location.assign('html/index.php');
          
                  });
            });
              </script>";
    }
    $comentario = $_POST['comentario'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')  || strpos($tipo,'jpg')  || strpos($tipo,'jfif')  || strpos($tipo,'mp4')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp , png , jpg, jfif , mp4';
          $_SESSION['tipo'] = 'danger';
          header('location:../index.php');
       }else{
         $query = "INSERT INTO imagenes (imagen,nombre,comentario) values ('$imagen ', '$nombre', '$comentario')";
         $resultado = mysqli_query($conn,$query);
         if($resultado){
              move_uploaded_file($temp,'imagenes/'.$imagen);   
              echo "
              <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
              <script language='JavaScript'>
              document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                  icon: 'success',
                  title: 'Se a Subido du noticia correctamente',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK',
                  timer: 1500
                  }).then(() => {
          
                  location.assign('html/index.php');
          
                  });
            });
              </script>";
         }else{
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                icon: 'error',
                title: 'Ocurrio un Error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
                }).then(() => {
         
                    location.assign('html/index.php');
         
               });
          });
            </script>";
          }
         }
       }
    }



?>