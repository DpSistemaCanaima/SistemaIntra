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
      <a href="historial.php" class="btn btn-outline-primary m-3">historial</a><a href="Caso_soporte.php" class="btn btn-outline-primary m-3">En espera</a><a href="casos_activo.php" class="btn btn-outline-primary m-3">Activos</a>
      <nav>
      
      </nav>
    </div><!-- End Page Title -->

    <?php
                            
                            $sql = "SELECT  r.ID_REPORT, r.TITLE, r.name_surname, u.NAME, r.area , r.CREATION_DATE, r.DATE_FINAL, r.FECHA_SOLUTION, s.STATUS, l.LEVEL, r.SOLUTION FROM report AS r  
                            INNER JOIN status AS s ON r.STATUS = s.ID_STATUS
                            INNER JOIN level AS l ON r.ID_LEVEL = l.ID_LEVEL
                            INNER JOIN user_datos AS u ON r.ID_NAME = u.IDDATOS WHERE r.STATUS = '1'";  
           
                                  
                               $result =mysqli_query($conn,$sql);
                          
                  
                    
                             ?>
    <section class="section dashboard">
  

      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Casos Activos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    
                                        <tr>
                                            <th>Descripcion</th>
                                            <th>Nombre y Apellidos</th>
                                            <th>Fecha de Creacion</th>
                                            <th>Tecnico</th>
                                            <th>Status</th>
                                            <th>Nivel</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php   while ($mostrar = mysqli_fetch_assoc($result)){ ?>
                                        <tr>
                                            <td><?php echo $mostrar ['TITLE'] ?></td>
                                            <td><?php echo $mostrar ['name_surname'] ?></td>
                                            <td><?php echo $mostrar ['CREATION_DATE'] ?></td>
                                            <td><?php echo $mostrar ['NAME'] ?></td>
                                            <td><?php echo $mostrar ['STATUS'] ?></td>
                                            <td><?php echo $mostrar ['LEVEL'] ?></td>
                                           
                                        </tr>
                                        <?php  }  ?>
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