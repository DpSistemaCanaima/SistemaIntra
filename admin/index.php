<?php

 
include('../config/cone.php');

session_start();
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
 
include "../content/inc/header.php";

?>
<body>
<?php


 
 include "../content/inc/navbar2.php";
 include "../content/inc/sidebar2.php";

?>
  
 
<main id="main" class="main">

<div class="pagetitle">
  <h1>Noticias</h1>

</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">
<!-----------------------------SESION DE NOTICIAS   ------------------------------------------------------------->
      

        <?php

$query = "SELECT cod_imagen,imagen, nombre FROM imagenes ORDER BY cod_imagen DESC ";
$resultado = mysqli_query($conn,$query);

?>


                         
 <?php foreach($resultado as $row) { ?>
  <div class="card" style="width: 18rem; margin:0 5px 20px 10px">
     <div class="contenedor-imagenes">
        
         <div class="imagen">
         <img  src="../assets/img//<?php echo $row['imagen']; ?>" style="width: 18rem;" >
         <a href="#openModal<?php echo $row['cod_imagen'];?>">
         <!-- <a  data-bs-toggle="modal" data-bs-target="#exampleModal<?php //echo $row['cod_imagen'];?>">    -->
         <div class="overlay">
            <h2 ><?php echo $row['nombre']; ?></h2>
          
                
            </div>
            </a>
         </div>
         <?php  include "modal_noticias.php"; ?>
       
      </div>
    </div>
      <?php } ?>
      
<!-----------------------------FIN DE NOTICIAS   ------------------------------------------------------------->
        <!-- Revenue Card -->
     

           

<!-- Sales Card -->

<div class="conte">
<h3 class="text-center">Tren Directivo</h3>
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="1.jpg"  class="im" alt="...">
        
        <img src="img1.jpg" class="im" alt="...">
        
        <img src="img2.jpg" class="im" alt="...">
        
      </div>
   
      
      <div class="carousel-item" data-bs-interval="2000">
        <img src="2.jpg" class="im" alt="...">
        <img src="1.jpg"  class="im" alt="...">
           
        <img src="img1.jpg" class="im" alt="...">
      
      </div>
      <div class="carousel-item">
        <img src="5.jpg" class="im" alt="...">
        <img src="1.jpg"  class="im" alt="...">
           
           <img src="img1.jpg" class="im" alt="...">
           
          
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


      

      </div>
    </div><!-- End Left side columns -->
   
    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">cumpleañeros del día<span>| hoy </span></h5>
          <?php
require_once "../config/cone.php"; // Utiliza require_once para asegurarte de que el archivo se incluya solo una vez

// Establece la zona horaria y obtiene la fecha actual
date_default_timezone_set('America/Caracas');
$fechaActual = date('Y-m-d');

// Prepara la consulta SQL con parámetros para evitar inyecciones SQL
$sql = "SELECT SURNAME, FECHA, foto, no_hay, NAME FROM user_datos WHERE FECHA = '$fechaActual'";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Verifica si hay resultados
if (mysqli_num_rows($result) > 0) {
while ($fila = mysqli_fetch_assoc($result)) {
    $nombre = $fila['NAME'];
    $noHay = $fila['no_hay'];
    $apellido = $fila['SURNAME'];
    $foto = $fila['foto'];
    $fechaNacimiento = $fila['FECHA'];

    // Compara la fecha actual con la fecha de nacimiento
    if ($fechaActual == $fechaNacimiento) {
        echo "$nombre $apellido"; // Concatena los nombres con un espacio
    } else {
        echo $noHay;
    }
}
} else {
echo "No hay resultados";
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>

</div>

        </div>
       
         <iframe class="inst" src="https://www.instagram.com/gabrielajimenezve/embed/" frameborder="0"></iframe>
          <br>
          <br>
        <div class="container-fluid row">
                            
                            <div id="detalleseleccion" name="detalleseleccion" style="overflow-x: hidden; overflow-y: auto; height: 20em; border: 1px solid white;  box-shadow: rgba(145,158,171,0.2) 0px 0px 2px 0px, rgb(0 0 0) 0px -3px 24px -24px;">  <a class="twitter-timeline" href="https://twitter.com/Gabrielasjr">Tweets de @Gabrielasjr</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                        </div>
     
          
         
         
      </div><!-- End Recent Activity -->
     
     


  </div>

</section>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Desarrollado por Industria Canaima</span></strong>. Reservados todos los derechos
    </div>
    <div class="credits">
    <a href="https://bootstrapmade.com/"> RIF: G-20010288-8</a>
    </div>
  </footer><!-- End Footer -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>