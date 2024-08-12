<!DOCTYPE html>
<html lang="es">
<?php
session_start();
include "config/cone.php";
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
$pass = $_SESSION['PASSWORD'];

if (isset($_SESSION['IDROLS'])) {
  // El usuario ha iniciado sesión
  $mostrar_li = true;
 
} else {
  // El usuario no ha iniciado sesión
  $mostrar_li = false;
}

  include "content/inc/header.php";
 ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php 
        include "content/inc/sidebar3.php";
      ?>
    <main class="main-content border-radius-lg ">
        <?php 
            include "content/inc/navbar.php";
        ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
                        <canvas width="700" height="600"
                            class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
                    </div>
                </div>
            </div>
            <a  href="modal/modalregistrarusuario.php?User=true" data-bs-toggle="modal"
            data-bs-target="#registrarusuario" class="btn btn-outline-primary" >Agregar Usuario</a>
            <div class="row mb-4">
              
            <?php
    $sql = "SELECT  u.IDDATOS,  n.nacionalidad, u.NAME, u.SURNAME, u.FECHA , u.NUMERO_DE_HIJOS, u.NOBRE_Y_APELLIDO, u.FECHA_DE_NACIMIENTO , u.DIRECCION, u.CIUDAD, u.MUNICIPIO, u.PARROQUIA, u.CEDULA, u.USER, u.PASSWORD, u.EMAIL, u.ASSIGNED_AREA, r.PRIVILEGE, l.TIPO_USUARIOS, g.GENDER, u.foto , u.no_hay FROM user_datos AS u 
                   INNER JOIN rols AS r ON u.IDROLS = r.IDROLS
                   INNER JOIN gender AS g ON u.GENDER = g.ID
                   INNER JOIN login AS l ON u.LOGIN = l.TIPO
                   INNER JOIN nacionalida As n ON u.NACIONALIDAD = n.ID_NACIONALIDA
                 ";  


                       
                    $result = mysqli_query($conn,$sql);
                         
                      
                  ?>
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gestion de usuario</h6>
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

                              <div class="btn-group dropend mx-auto " style=" width: 100px; margin-top: 1em; ">
                                  <button type="button" class="btn btn-outline-info dropdown-toggle"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      opciones
                                  </button>
                                  <ul class="dropdown-menu">
                                      <!-- Dropdown menu links -->
                                 

                                      <li><a class="dropdown-item" data-bs-toggle="modal"
                                              data-bs-target="#exampleModal<?php echo $mostrar['CEDULA'];?>"><img
                                                  src="svg/editar.svg " alt="Industrias Canaima" width="15"
                                                  height="15"> Editar</a>
                                      </li>
                                      <li> <a class="dropdown-item "
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
                      include "modal/modalregistrarusuario.php";
                  ?>

                      <?php

                           include "modal/gestion_esdit.php";
                        
                         
                   
                  ?>

                    
                          <?php
    include "modal/vermas.php";
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
               
            </div>
        </div>
       
            <!--Pie de pagina de la plantilla.-->
            <?php
                include "content/inc/footer.php";
            ?>
        </div>
    </main>
    <?php
  include "content/inc/script.php";
?>
</body>

</html>