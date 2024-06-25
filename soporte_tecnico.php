<?php

 
include('config/cone.php');

session_start();
if (!isset($_SESSION['IDDATOS'])) {
  header("Location: index.php");
}

if (isset($_SESSION['IDROLS'])) {
  // El usuario ha iniciado sesión
  $mostrar_li = true;
 
} else {
  // El usuario no ha iniciado sesión
  $mostrar_li = false;
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
 
include "content/inc/header.php";

?>
<body>
  

<?php


 
 include "content/inc/navbar.php";
 include "content/inc/sidebar.php";

?>
  

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