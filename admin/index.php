<?php

 
include('../cone.php');

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
 
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Industria Canaima</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="inicio.css">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link rel="stylesheet" href="contenedor.css">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="shortcut icon" href="images/Canaima.png" type="image/x-icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="images/Canaima.png" alt="">
        <span class="d-none d-lg-block">Industria Canaima</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Buscar" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <?php 
                                     
                                     if (isset($_SESSION['IDDATOS'])) {
                  
                                     }else{
                                         ?>
                                         <script type="text/javascript">
                                             window.location = "./";
                                         </script>
                                         <?php 
                                     }
                                  
                                     $consulta = mysqli_query($conn, "SELECT CEDULA , foto FROM user_datos WHERE CEDULA = '$CEDULA';");
                                     $valores = mysqli_fetch_array($consulta);
                                     $foto = $valores['foto'];
                                      ?>
            <img src="<?php echo $foto; ?>" alt="" width="35" height="35" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo  $primeraN .".   ". $primeraA  ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            
              <h6><?php echo  $NAME ?></h6>
              <span><?php echo  $area ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="perfil.php">
                <i class="bi bi-person"></i>
                <span>Mi Perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="ayuda.php">
                <i class="bi bi-question-circle"></i>
                <span>Ayuda</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Inicio</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Solicitud</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="soporte_tecnico.php">
              <i class="bi bi-circle"></i><span>Soporte Tecnico</span>
            </a>
          </li>
          <?php
          $sql1 = "SELECT IDDATOS FROM user_datos WHERE IDDATOS = '$ID' ";
             $resulta = mysqli_query($conn,$sql1);
          
             $mostre = mysqli_fetch_assoc($resulta) 
             ?>
          <li>
       <a  href="Constancia_de_trabajo.php?edi=<?php echo $mostre['IDDATOS'];?>"</a> 
              <i class="bi bi-circle"></i><span>Contancia de trabajo</span>
            </a>
          </li>
          <li>
            <a href="recibo.php">
              <i class="bi bi-circle"></i><span>Recibo de pago</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Descargas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a  href="./pdf/vacaciones.xls" >
              <i class="bi bi-circle"></i><span>Planilla de vacaciones</span>
            </a>
          </li>
          <li>
            <a href="./pdf/permiso.docx">
              <i class="bi bi-circle"></i><span>Planilla de permisos</span>
            </a>
          </li>
          <!-- <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li> -->
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Biblioteca Digital</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="./pdf/103_Manual_Canaimit.pdf">
              <i class="bi bi-circle"></i><span> Manual de canaima</span>
            </a>
          </li>
          <li>
            <a href="./pdf/para_el_usuario.docx">
              <i class="bi bi-circle"></i><span>Cuidado de la canaima</span>
            </a>
          </li>
          <li>
            <a href="./pdf/guia linux.pdf">
              <i class="bi bi-circle"></i><span>Guia de linux </span>
            </a>
          </li>
          <li>
            <a href="./pdf/Linux Desde Cero.pdf">
              <i class="bi bi-circle"></i><span>Linux desde cero</span>
            </a>
          </li>
          <li>
            <a href="./pdf/fundamentos de linux.pdf">
              <i class="bi bi-circle"></i><span>fundamentos de linux</span>
            </a>
          </li>
          <li>
            <a href="./pdf/administrador de linux.pdf">
              <i class="bi bi-circle"></i><span>Administrador de linux</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Web</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="https://bdvenlinea.banvenez.com">
              <i class="bi bi-circle"></i><span>Banco de Venezuela</span>
            </a>
          </li>
          <li>
            <a href="https://bicentenarioenlinea.bicentenariobu.com.ve/?p=1">
              <i class="bi bi-circle"></i><span>Banco Bicentenario</span>
            </a>
          </li>
          <li>
            <a href="https://btenlinea.bt.com.ve/lg">
              <i class="bi bi-circle"></i><span>Banco del Tesoro</span>
            </a>
          </li>
          <li>
            <a href="https://www.eluniversal.com">
              <i class="bi bi-circle"></i><span>Periodico Universal</span>
            </a>
          </li>
        
          <li>
            <a href="https://www.banesconline.com/mantis/Website/Login.aspx">
              <i class="bi bi-circle"></i><span>Banco Banesco</span>
            </a>
          </li>
          <li>
            <a href="https://www.provincial.com/personas.html">
              <i class="bi bi-circle"></i><span>Banco Provincial</span>
            </a>
          </li>
          <li>
            <a href="https://persona.patria.org.ve/login/clave/">
              <i class="bi bi-circle"></i><span>Patria</span>
            </a>
          </li>
          <li>
        <a href="https://mincyt.gob.ve/">
          <i class="bi bi-circle"></i><span>Myncyt</span>
        </a>
      </li>
      <li>
        <a href=" https://minmujer.gob.ve/">
          <i class="bi bi-circle"></i><span>Mi mujer</span>
        </a>
      </li>
        </ul>
      </li><!-- End Charts Nav -->
      
   
      <li class="nav-heading"></li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="perfil.php">
          <i class="bi bi-person"></i>
          <span>Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="caso_soporte.php">
          <i class="bi bi-question-circle"></i>
          <span>Casos de Soporte</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="usuarios.php">
          <i class="bi bi-envelope"></i>
          <span>Gestion de usuarios</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="cargar_noticia.php">
          <i class="bi bi-envelope"></i>
          <span>Cargar Noticia</span>
        </a>
      </li><!-- End Contact Page Nav -->

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="../logout.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Cerrar</span>
        </a>
      </li><!-- End Login Page Nav -->

     
    </ul>

  </aside><!-- End Sidebar-->

 
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
         <img  src="../imagenes/<?php echo $row['imagen']; ?>" style="width: 18rem;" >
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
    <!-- <div class="carousel-indicators">
      <button type="hidden" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="hidden" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="hidden" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->
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
require_once '../cone.php'; // Utiliza require_once para asegurarte de que el archivo se incluya solo una vez

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
   
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
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