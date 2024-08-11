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
        include "content/inc/sidebar1.php";
      ?>
    <main class="main-content border-radius-lg ">
        <?php 
            include "content/inc/navbar.php";
        ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
                        <canvas width="700" height="600"
                            class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <!-- <a class="d-block blur-shadow-image">
                                <img src="assets/img/noticias/indus2.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
                            </a>

         ----------->
         <br>
     <br>
     <br>
     <br>
     
        <?php               
   include("prueba.php");
?>
        
                        </div>
                      
                    </div>
                </div>
               
            </div>
        </div>

     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
        
            <!--Pie de pagina de la plantilla.-->
            <?php
                include "content/inc/footer.php";
            ?>
        </div>
    </main>
    <?php
  include "content/inc/script.php";
?>
</body>

</html>