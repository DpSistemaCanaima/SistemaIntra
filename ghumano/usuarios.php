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
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
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

  <!-- ======= Sidebar ======= -->
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
      <h1>Gestion de Usuario</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol><br>
      
        <a  href="modalregistrarusuario.php?User=true" data-bs-toggle="modal"
                      data-bs-target="#registrarusuario" class="btn btn-primary " >Agregar Usuario</a>
      </nav>
    </div><!-- End Page Title -->
<br>
<br>


    <section class="section dashboard">

    <?php
    $sql = "SELECT  u.IDDATOS,  n.nacionalidad, u.NAME, u.SURNAME, u.FECHA , u.NUMERO_DE_HIJOS, u.NOBRE_Y_APELLIDO, u.FECHA_DE_NACIMIENTO , u.DIRECCION, u.CIUDAD, u.MUNICIPIO, u.PARROQUIA, u.CEDULA, u.USER, u.PASSWORD, u.EMAIL, u.ASSIGNED_AREA, r.PRIVILEGE, l.TIPO_USUARIOS, g.GENDER, u.foto , u.no_hay FROM user_datos AS u 
                   INNER JOIN rols AS r ON u.IDROLS = r.IDROLS
                   INNER JOIN gender AS g ON u.GENDER = g.ID
                   INNER JOIN login AS l ON u.LOGIN = l.TIPO
                   INNER JOIN nacionalida As n ON u.NACIONALIDAD = n.ID_NACIONALIDA
                  WHERE  u.NAME = 'Luis Manuel' ";  


                       
                    $result = mysqli_query($conn,$sql);
                         
                      
                  ?>
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Dispositivos Entregados</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    
                                        <tr>
                                            <th>Nombres y Apellidos</th>
                                            <th>Cedula</th>
                                            <th>Cargo</th>
                                            <th>opcion</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php     while ($mostrar = mysqli_fetch_assoc($result)){ ?>
                                        <tr>
                                           
                                        <td><?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?></td>
                              
                              <td><?php echo $mostrar ['CEDULA'] ?></td>
                              <td> <?php echo $mostrar ['ASSIGNED_AREA'] ?></td>
                              
                              
                              <td>

                              <div class="btn-group dropend mx-auto " style=" width: 50px; margin-top: 1em; ">
                                  <button type="button" class="btn btn-outline-info dropdown-toggle"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      option
                                  </button>
                                  <ul class="dropdown-menu">
                                      <!-- Dropdown menu links -->
                                 

                                      <li><a class="dropdown-item" data-bs-toggle="modal"
                                              data-bs-target="#exampleModal<?php echo $mostrar['CEDULA'];?>"><img
                                                  src="svg/editar.svg " alt="Industrias Canaima" width="15"
                                                  height="15"> Editar</a>
                                      </li>
                                      <li> <a class="dropdown-item btn btn-danger"
                                              href="eliminarr.php?CEDULA=<?php echo $mostrar['CEDULA'];?>">
                                              <img src="svg/eliminar.svg " alt="Industrias Canaima" width="15"
                                                  height="15"> Eliminar</a>
                                      </li>

                                      <li><a class="dropdown-item" data-bs-toggle="modal"
                                              data-bs-target="#exampleModal<?php echo $mostrar['IDDATOS']; ?>"
                                              href="#"> <img src="svg/eye-fill.svg " alt="Industrias Canaima" width="15"
                                                  height="15">Ver mas</a></li>
                                  </ul>
                              </div>


                          </td>
                                          
                             
                          </tr>
                          <?php
                      include "modalregistrarusuario.php";
                  ?>

                      <?php

                           include "gestion_esdit.php";
                        
                         
                   
                  ?>

                    
                          <?php
    include "vermas.php";
}
?>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- incluir los modales -->
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

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- SweetAlert Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- DataTable Scripts -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="js/datatables-demo.js"></script>

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