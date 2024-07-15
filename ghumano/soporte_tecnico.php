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
          <img src="../assets/images/<?php echo $foto; ?>" alt="" width="35" height="35" class="rounded-circle">
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
                <span>ayuda</span>
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

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>inicio</span>
        </a>
      </li><!-- End Dashboard Nav -->

  

      <li class="nav-item">
        <a class="nav-link collapsed" href="perfil.php">
          <i class="bi bi-person"></i>
          <span>Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="usuarios.php">
          <i class="bi bi-envelope"></i>
          <span>Gestion de usuarios</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="soporte_tecnico.php">
          <i class="bi bi-envelope"></i>
          <span>Soporte Tecnico</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="inabilitados.php">
          <i class="bi bi-envelope"></i>
          <span>Usuarios Inabilitados</span>
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
     
<br>
<br>

 
         
          

          
    <div class="container-fluid fondo">
        <!--  Row 1 -->
        <div class="container-fluid">
           
             
                <div class="card-body">
             <center><h3 class="card-title fw-semibold mb-4">Solicitud de Soporte Técnico</h3></center> 
                   
                   <form method="post" action="enviar_soporte.php">
                   <input type="hidden" name="name_surname" value=" <?php echo $NAME ." ". $APE ?> "  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       </div>
                       <div class="mb-3">
                       <center>
                       <strong> Departamento </strong><br>
                       <br>
                       <select style="width: 90%;" class="form-select" aria-label="Default select example" name="area">
                       <option value="1">Presidencia</option>
                       <option value="2">Proyecto</option>
                       <option value="3">Consultoria Juridica</option>
                       <option value="4">Planificación y Presupuesto</option>
                       <option value="5">Gestion Humana</option>
                       <option value="6">Procura</option>
                       <option value="7">Administración y Finanzas</option>
                       <option value="8">Tic</option>
                       <option value="9">Atencion al ciudadano</option>
                       <option value="10">Comercializacion</option>
                       <option value="11">Seguridad</option>
                       <option value="12">Seguridad Integral</option>
                       <option value="13">Producción</option>
                   </select>
                
                   <br>
                   
                       <div class="mb-3">
                       <strong> Descripción de la falla presentada</strong>
                       <br><br>
                       <textarea style="width: 90%;" name="TITLE" class="form-control"  maxlength="100"  id="exampleFormControlTextarea1" ></textarea>
                       </div>
                   
                     <button type="submit" style="width:30%;"  class="btn btn-outline-primary">Enviar</button></center>
                   </form>
                   <br>
                   <br>
                </div>
              
            
        </div>
      </div>
           

          

     
       
       

        

      </div>
   
    </section>

  </main><!-- End #main -->
<br>
<br><br>

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