<!DOCTYPE html>
<html lang="es">
<?php
session_start();
include "config/cone.php";
if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
  }

$ID = $_SESSION['IDDATOS']; 
$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$primeraN = substr($NAME, 0, 1);
$APE = $_SESSION['SURNAME'];
$primeraA = substr($APE, 0, 8);
$ROL = $_SESSION['IDROLS'];
$CEDULA = $_SESSION['CEDULA'];
$area  = $_SESSION['ASSIGNED_AREA'];
$pass = $_SESSION['PASSWORD'];

if (isset($_SESSION['IDROLS'])) {
  // El usuario ha iniciado sesión
  $mostrar_li = true;
 
} else {
  // El usuario no ha iniciado sesión
  $mostrar_li = false;
}

  include "content/inc/header.php";
 ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php 
        include "content/inc/sidebar3.php";
      ?>
    <main class="main-content border-radius-lg ">
        <?php 
            include "content/inc/navbar.php";
        ?>
        <!-- End Navbar -->
        <div class="container-fluid fondo">
        <!--  Row 1 -->
        <div class="container-fluid">
           
             
        <div class="card-body">
                   <center><h5 class="card-title fw-semibold mb-4">Cargar nueva noticia</h5>
                    <form action="subir.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label"><b>Titulo de la noticia</b></label>
                        <input type="text" class="form-control" placeholder="titulo" name="nombre"  aria-describedby="emailHelp" pattern="[a-zA-Z\s]{10,60}" maxlength="60" minlength="10">
                        </div>
                        <b>Contenido</b>
                  
                
                              
             
                                   <textarea class="form-control   quill-editor-full" name="comentario" placeholder="comentario"></textarea>
                             
                                  
    
                        
                        <label for="exampleInputEmail1" class="form-label"><b>Subir Imagen</b></label>
                        <div class="input-group mb-3">
                       
                            <input type="file" name="imagen" class="form-control" >
                        </div>
                        <button type="submit" name="Guardar" style="width:30%;"  class="btn btn-outline-primary">Cargar noticia</button></center> 
                    </form>
                </div>
              
            
        </div>
      </div>
           

          

     
       
       

        

      </div>
        
       
            <!--Pie de pagina de la plantilla.-->
            <?php
                include "content/inc/footer.php";
            ?>
     
    </main>
    <?php
  include "content/inc/script.php";
?>
</body>

</html>