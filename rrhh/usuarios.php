<?php 
 
  include('../cone.php');
  session_start();
  if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$APE = $_SESSION['SURNAME'];
$ROL = $_SESSION['IDROLS'];
$CEDULA = $_SESSION['CEDULA'];

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INTRANET</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="oculto.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../assets/css/general.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.bootstrap5.min.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="http://paginanueva.industriacanaima.gob.ve/wp-content/uploads/2023/11/IndustriaCanaimaRojo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Principal</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Inicio</span>
              </a>
            </li>
          
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample" aria-expanded="false">SOLICITUDES  <i class="ti ti-caret-down"></i></span>
            </li>
            <div class="collapse" id="collapseExample4">
              <li class="sidebar-item">
             <?php 
             $sql1 = "SELECT IDDATOS FROM user_datos WHERE IDDATOS = '$ID' ";
             $resulta = mysqli_query($conn,$sql1);
          
             $mostre = mysqli_fetch_assoc($resulta) 
             ?>
                <a class="sidebar-link" href="generar.php?edi=<?php echo $mostre['IDDATOS'];?>" aria-expanded="false">
             
                  <span>
                    <i class="ti ti-file-description"></i>
                  </span>
                  <span class="hide-menu">Constancia de trabajo</span>
                </a>
              </li>
           
              <li class="sidebar-item">
                <a class="sidebar-link" href="./solicitud-soporte.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-devices-pc"></i>
                  </span>
                  <span class="hide-menu">Soporte técnico</span>
                </a>
              </li>
            </div>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample" aria-expanded="false">DESCARGAS  <i class="ti ti-caret-down"></i></span>
            </li>
            <div class="collapse" id="collapseExample5">
              <li class="sidebar-item">
                <a class="sidebar-link" href="./pdf/permiso.docx" target="_blank" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-download"></i>
                  </span>
                  <span class="hide-menu">Planilla de vacaciones</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./pdf/vacaciones.xls" target="_blank" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-download"></i>
                  </span>
                  <span class="hide-menu">Planilla de permiso</span>
                </a>
              </li>
            </div>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" aria-expanded="false">WEB  <i class="ti ti-caret-down"></i></span>  
            </li>
            <div class="collapse" id="collapseExample2">
              <li class="sidebar-item">
              <a class="sidebar-link" href="https://www.eluniversal.com" target="_blank"  aria-expanded="false">
              <span class="hide-menu">El universal</span>  
              
              </a>
              </li>
                <li class="sidebar-item">
                <a  class="sidebar-link"  href="https://bdvenlinea.banvenez.com" target="_blank" aria-expanded="false">
               
                <span class="hide-menu">  Banco de Venezuela </span>  
                            </a>
              </li>
              <li class="sidebar-item">
              <a class="sidebar-link"  href="https://persona.patria.org.ve/login/clave/" target="_blank" aria-expanded="false">
                
                <span class="hide-menu"> Pagina Patria </span> 
              </a>
              </li>

              <li class="sidebar-item">
              <a class="sidebar-link"  href="https://www.petro.gob.ve/es/" target="_blank" aria-expanded="false">
              <span class="hide-menu">  Calculadora Petro </span>    
              </a>
              </li>

              <li class="sidebar-item">
              <a class="sidebar-link"  href="https://dolartoday.com/calculadora/" target="_blank" aria-expanded="false">
              <span class="hide-menu">   Calcular dolar </span>  
             </a>
              </li>


            </div>

              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" aria-expanded="false">BIBLIOTECA DIGITAL  <i class="ti ti-caret-down"></i></span>
              </li>
              <div class="collapse" id="collapseExample">
                <li class="sidebar-item">
                <a class="sidebar-link" href="./pdf/103_Manual_Canaimit.pdf" target="_blank" aria-expanded="false">
                <span class="hide-menu"> Manual de canaima </span>   
                </a>
                </li>
                <li class="sidebar-item">
                <a class="sidebar-link" href="./pdf/para_el_usuario.docx" target="_blank" aria-expanded="false">
                <span class="hide-menu">  Cuidado de la canaima </span>   
               </a>
                                            
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="./pdf/guia linux.pdf" target="_blank" aria-expanded="false">
                <span class="hide-menu">   Guia de linux </span> 
                </a>
                                            
                </li>

                <li class="sidebar-item">
                <a class="sidebar-link" href="./pdf/Linux Desde Cero.pdf" target="_blank" aria-expanded="false">
                <span class="hide-menu">  Linux desde cero</span>   
                </a>
                                            
                </li>

                <li class="sidebar-item">
              <a class="sidebar-link" href="./pdf/fundamentos de linux.pdf" target="_blank" aria-expanded="false">
              <span class="hide-menu">   fundamentos de linux </span>   
                </a>
              </li>

              <li class="sidebar-item">
              <a class="sidebar-link" href="./pdf/administrador de linux.pdf" target="_blank" aria-expanded="false">
              <span class="hide-menu">   Administrador de linux </span>   
              </a>
              </li>

              </div>
              
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" aria-expanded="false">Gestión  <i class="ti ti-caret-down"></i></span>
              </li>
              <div class="collapse" id="collapseExample3">
                <li class="sidebar-item">
                  <a class="sidebar-link" href="./usuarios.php" aria-expanded="false">
                    <span>
                      <i class="ti ti-user-plus"></i>
                    </span>
                    <span class="hide-menu">Usuarios</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="./constancia.php" aria-expanded="false">
                    <span>
                      <i class="ti ti-file-description"></i>
                    </span>
                    <span class="hide-menu">Constancia de trabajo</span>
                  </a>
                </li>
               
              </div>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li> -->
          </ul>
          
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <p class="mt-3" style="text-align: center;"><?php echo $NAME ." ". $APE ?><br>RRHH</p>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php 
                                     
                                     if (isset($_SESSION['IDDATOS'])) {
                  
                                     }else{
                                         ?>
                                         <script type="text/javascript">
                                             window.location = "./";
                                         </script>
                                         <?php 
                                     }
                                  
                                     $consulta = mysqli_query($conn, "SELECT USER , foto FROM user_datos WHERE USER = '$USER';");
                                     $valores = mysqli_fetch_array($consulta);
                                     $foto = $valores['foto'];
                                      ?>
                  
                  <img src="<?php echo $foto; ?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="./perfil.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Mi Perfil</p>
                    </a>
                    <a href="https://mail.industriacanaima.gob.ve/" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-mail fs-6"></i>
                        <p class="mb-0 fs-3">Correo</p>
                    </a>
                    <a href="../logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Cerrar sesión</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>   <!--  Header End -->
      <div id="para-datatable" class="container-fluid">
        <!--  Row 1 -->
        <div class="container-fluid">
            <div class="container-fluid">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Gestión de Usuarios</h5>
                    <table id="example" class="table table-striped my-datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre y Apellido</th>
                                <th>Nacionalidad</th>
                                <th>cadula</th>
                                <th>area</th>
                                <th>Educacion</th>
                                <th>opcion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                   
                       
                      
                    
                   $sql = "SELECT  u.IDDATOS, grado.grado, n.nacionalidad, u.NAME, u.SURNAME, u.FECHA , u.NUMERO_DE_HIJOS, u.NOBRE_Y_APELLIDO, u.FECHA_DE_NACIMIENTO , u.ABILIDAD_U_OFICIO, u.DIRECCION, u.CIUDAD, u.MUNICIPIO, u.PARROQUIA, u.CEDULA, u.USER, u.PASSWORD, u.EMAIL, a.AREA, r.PRIVILEGE, l.TIPO_USUARIOS, g.GENDER, u.foto FROM user_datos AS u 
                   INNER JOIN area AS a ON u.ASSIGNED_AREA = a.ID_AREA  
                   INNER JOIN rols AS r ON u.IDROLS = r.IDROLS
                   INNER JOIN gender AS g ON u.GENDER = g.ID
                   INNER JOIN login AS l ON u.LOGIN = l.TIPO
                   INNER JOIN nacionalida As n ON u.NACIONALIDAD = n.ID_NACIONALIDA
                   INNER JOIN grado As grado ON u.GRADO_DE_EDUCACION = grado.ID_GRADO";  


                       
                    $result = mysqli_query($conn,$sql);
                         
                      
                      while ($mostrar = mysqli_fetch_assoc($result)){?>
                            <tr>
                                <td><?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?></td>
                                <td> <?php echo $mostrar ['nacionalidad'] ?></td>
                                <td><?php echo $mostrar ['CEDULA'] ?></td>
                                <td><?php echo $mostrar ['AREA'] ?></td>
                                <td> <?php echo $mostrar['grado']?></td>
                                <td>

                                <div class="btn-group dropend mx-auto " style=" width: 50px; margin-top: 1em; ">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        option
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- Dropdown menu links -->
                                        <li> <a class="dropdown-item btn btn-danger"
                                                href="modalregistrarusuario.php?User=true" data-bs-toggle="modal"
                                                data-bs-target="#registrarusuario"><img
                                                    src="svg/person-add.svg " alt="Industrias Canaima" width="15"
                                                    height="15">Registrar</a>
                                        </li>

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
                                            <!-- <div class="btn-group">
                                                <button type="button" class="btn btn-outline-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false" >
                                                    activa
                                                </button>
                                               
                                                <ul class="dropdown-menu" >
                                               
                                                    <li><a  class="dropdown-item" href="activar.php?ID_REPORT=<?php echo $mostrar['ID_REPORT'];?>">activar</a></li>
                                                    <li><a  class="dropdown-item" href="espera.php?ID_REPORT=<?php echo $mostrar['ID_REPORT'];?>">En espera</a></li>
                                                    <li><a   class="dropdown-item" href="cerrado.php?ID_REPORT=<?php echo $mostrar['ID_REPORT'];?>">cerrado</a></li>
                                                   
                                                    
                                                </ul>
                                                 </div>
                                  
                                
                                            </td> -->
                               
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
                           
                        </tbody>
                        
                    </table>
                </div>
              </div>
            </div>
        </div>
        
      </div>
      <footer class="footer">
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Desarrollado por <a href="https://www.industriacanaima.gob.ve/" target="_blank" class="pe-1 text-primary text-decoration-underline">Industria Canaima</a> RIF: G-20010288-8</p>
        </div>
      </footer>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
          language: {
            url: 'https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json'
        }
        });
    });
</script>
</body>
</html>