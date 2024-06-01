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
     
<br>
<br>

 
         
          

          
    <div class="container-fluid fondo">
        <!--  Row 1 -->
        <div class="container-fluid">
           
             
        <div class="card-body">
                   <center><h5 class="card-title fw-semibold mb-4">Cargar nueva noticia</h5>
                    <form action="../subir.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Titulo de la noticia</b></label>
                        <input type="text" class="form-control" name="nombre"  aria-describedby="emailHelp" pattern="[a-zA-Z\s]{10,60}" maxlength="60" minlength="10">
                        </div>
                        <b>Contenido</b>
                  
                
                              
             
                                   <textarea class="form-control  quill-editor-full" name="comentario" ></textarea>
                             
                                  
    
                        
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