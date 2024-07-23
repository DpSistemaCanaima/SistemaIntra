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
        include "content/inc/navbar.php";
        
        include "content/inc/sidebar.php";
    ?>
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
        <h1>Cambio de contraseña</h1>
        <form action="cambio.php" method="post">
        <label for="usuario">cedula:</label>
           <input type="text" name="cedula" placeholder="Ingrese su cedula"  maxlength="8" required>
            <label for="usuario">Nuva Contraseña:</label>
            <input type="password" name="pass" onkeyup="validarContrasena()"   placeholder="Ingrese su nombre de usuario" maxlength="15" required>
             <span id="error-contrasena"></span>
            <label for="contrasena"></label>
            
            <button type="submit">Guardar</button>
        </form>
        
    </div>


      
<!-----------------------------FIN DE FORMULARIO   ------------------------------------------------------------->
        <!-- Revenue Card -->
     

           



      

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
require_once 'config/cone.php'; // Utiliza require_once para asegurarte de que el archivo se incluya solo una vez

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
    <?php
       
        include "content/inc/footer.php";
        include "content/inc/script.php";
    ?>


</body>

</html>