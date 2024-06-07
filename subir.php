<?php


include ('config/cone.php');

if(isset($_POST['Guardar'])){
    $imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    // Check if image upload is successful
    if ($_FILES['imagen']['error'] === 0) {
        // Get temporary file path
        $temp = $_FILES['imagen']['tmp_name'];

        // Prepare SQL query using prepared statements
        $stmt = $conn->prepare("INSERT INTO `imagenes` (`imagen`, `nombre`, `comentario`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $imagen, $nombre, $comentario);
     
        // Execute the prepared statement
        if ($stmt->execute()) {
            // Move the uploaded file
            move_uploaded_file($temp, '../SistemaIntra/assets/img/' . $imagen);

            // Success message
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                icon: 'success',
                title: 'Se subio correctamente la imagen',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
                }).then(() => {
         
                    location.assign('index.php');
         
               });
          });
            </script>";
        } else {
            // Error message
            echo "
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
     <script language='JavaScript'>
     document.addEventListener('DOMContentLoaded', function() {
       Swal.fire({
         icon: 'error',
         title: 'No se pudo almacenar',
         showCancelButton: false,
         confirmButtonColor: '#3085d6',
         confirmButtonText: 'OK',
         timer: 1500
         }).then(() => {
  
             location.assign('index.php');
  
        });
   });
     </script>"  . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "
     <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
     <script language='JavaScript'>
     document.addEventListener('DOMContentLoaded', function() {
       Swal.fire({
         icon: 'error',
         title: 'No se pudo almacenar',
         showCancelButton: false,
         confirmButtonColor: '#3085d6',
         confirmButtonText: 'OK',
         timer: 1500
         }).then(() => {
  
             location.assign('index.php');
  
        });
   });
     </script>";
        }
    }


// include ('config/cone.php');

// if(isset($_POST['Guardar'])){
  

//     $imagen = $_FILES['imagen']['name'];
//     $nombre = $_POST['nombre'];
    
   
//     $comentario = $_POST['comentario'];
   
   

//         $sql = "INSERT INTO `imagenes` (`imagen`, `nombre`, `comentario`) VALUES ('$imagen', '$nombre', '$comentario')";
       
      

//          $resultado =  $conn->query($sql);
      
//           move_uploaded_file($temp,'./admin/assets/img/'.$imagen);   
    
//          }
  


?>