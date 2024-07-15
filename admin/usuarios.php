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

<?php


 
 include "../content/inc/navbar2.php";
 include "../content/inc/sidebar2.php";

?>
  
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