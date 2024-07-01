<?php
include "config/cone.php";

session_start();

if (isset($_SESSION['IDROLS'])) {
  // El usuario ha iniciado sesión
  $mostrar_li = true;
 
} else {
  // El usuario no ha iniciado sesión
  $mostrar_li = false;
}
  
    include "content/inc/header.php";
    
?>

<body>

    <?php    
        include "content/inc/navbar3.php";
        
       
    ?>

<br>
<br>
<br>
<br>
<br>

<main id="main" class="main">

<div class="pagetitle">
  

</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">
<!-----------------------------SESION DE FORMULARIO  ------------------------------------------------------------->


    <div class="conta">
     <h2 style="text-align: center;"><strong>Cambio de Contraseña Requerida</strong></h2>
        <form action="cambio.php" method="post">
        <label for="usuario">cedula:</label>
           <input type="text" name="cedula" placeholder="Ingrese su cedula"  maxlength="8" required>
            <label for="usuario">Nueva Contraseña:</label>
            <input type="password" name="pass" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+" title="No cumple con lo solicitado Ej:Manuel123$" placeholder="Ingrese su nueva contraseña" maxlength="10" required>

            <label for="contrasena"></label>
            
            <button type="submit">Guardar</button>
        </form>
        
    </div>  


      
<!-----------------------------FIN DE FORMULARIO   ------------------------------------------------------------->
        <!-- Revenue Card -->
     

           



      

      </div>
    </div><!-- End Left side columns -->
   
    <!-- Right side columns -->
  
     
     


  </div>

</section>

</main><!-- End #main -->
<br>
<br>
<br>
<br>
<br>

    <!-- ======= Footer ======= -->
    <?php
       
        include "content/inc/footer.php";
        include "content/inc/script.php";
    ?>


</body>

</html>