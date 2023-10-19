<?php 
session_start();
$USER = $_POST['USER'];
include 'cone.php';
$foto = $_FILES['nfoto'];

$directorio_destino = "images";

$tmp_name = $foto['tmp_name'];
    
    
        $img_file = $foto['name'];
        $img_type = $foto['type'];
       
        // Si se trata de una imagen   
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
 strpos($img_type, "jpg")) || strpos($img_type, "png")))
        {
            //¿Tenemos permisos para subir la imágen?
         
            $destino = $directorio_destino . '/' .  $img_file;
            mysqli_query($conn, "UPDATE user_datos SET foto = '$destino' WHERE USER = '$USER';");
           (move_uploaded_file($tmp_name, $destino))
        
                ?>

<script type="text/javascript">
     window.location = "rrhh.php";
 </script>
                <?php  

            }
    



    

 ?>

 <script type="text/javascript">
     window.location = "tecnico.php";
 </script>