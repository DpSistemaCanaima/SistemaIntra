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
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php
                            
                            $sql = "SELECT  r.ID_REPORT, r.TITLE, r.name_surname, u.NAME, r.area , r.CREATION_DATE, r.DATE_FINAL, r.FECHA_SOLUTION, s.STATUS, l.LEVEL, r.SOLUTION FROM report AS r  
                            INNER JOIN status AS s ON r.STATUS = s.ID_STATUS
                            INNER JOIN level AS l ON r.ID_LEVEL = l.ID_LEVEL
                            INNER JOIN user_datos AS u ON r.ID_NAME = u.IDDATOS WHERE r.STATUS = '3'";  
           
                                  
                               $result =mysqli_query($conn,$sql);
                          
                  
                    
                             ?>
    <section class="section dashboard">
  

      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Dispositivos Entregados</h6>
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
                                            <th>opcion</th>
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
                                            <td><div class="btn-group">
  <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $mostrar['ID_REPORT'];?>" class="btn btn-outline-primary">Asignar</button>
 
      
  <?php 
                                           
                                           $consultaTecnico = "SELECT IDDATOS, NAME ,IDROLS FROM user_datos WHERE IDROLS= 3";
                                           $ve= mysqli_query($conn,$consultaTecnico);
                                      
                                           ?>
</div></td>
<?php  include "modal_activar.php";  ?>  
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
<br>
<br>
<br>
<br>
  </main><!-- End #main -->

    <?php   
    include "../content/inc/footer.php";
    include "../content/inc/script.php";

    ?>

</body>

</html>