<?php
 require_once('conexion.php');
 session_start();
 
 if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$ROL = $_SESSION['IDROLS'];
 

        
                ?>


<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="usuario.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="thead.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
        <title>Inicio</title>
    </head>

    <body class="is-preload">



        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <img src="salto.jpg" width="100%" height="210px">

                    <br>
                    <br>
                    <a class="btn btn-outline-primary" href="index.php">Todos</a> <a class="btn btn-outline-primary"
                        href="activo.php">activo</a> <a class="btn btn-outline-primary" href="espera.php">en espera</a>
                    <a class="btn btn-outline-primary" href="cerrado.php">cerrados</a>
                    <table id="example" class=" table-bordered " style="width:100%">
                        <thead class="thead">
                            <tr>
                                <th class="text" scope="col">num de Reporte</th>
                                <th class="text" scope="col">Falla</th>
                                <th class="text" scope="col">Usuario</th>
                                <th class="text" scope="col">opcion</th>





                            </tr>
                        </thead>
                        <tbody>


                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-12">

                                        <?php
                            
                            $sql = "SELECT  r.ID_REPORT, r.TITLE, u.NAME, r.ID_NAME, r.DESCRIPTION, r.CREATION_DATE, r.DATE_FINAL, r.FECHA_SOLUTION, s.STATUS, l.LEVEL, r.SOLUTION FROM report AS r 
                            INNER JOIN user_datos AS u ON r.User_send = u.IDDATOS  
                            INNER JOIN status AS s ON r.STATUS = s.ID_STATUS
                            INNER JOIN level AS l ON r.ID_LEVEL = l.ID_LEVEL WHERE r.STATUS = '3' ";  
           
                                  
                               $result =mysqli_query($conn,$sql);
                           // $sql="SELECT * FROM report ";
                           
                           //$result =mysqli_query($conn,$sql);
                         
                      
                      while ($mostrar = mysqli_fetch_assoc($result)){
                             ?>
                                        <tr>
                                            <th><?php echo $mostrar ['ID_REPORT'] ?></th>
                                            <th><?php echo $mostrar ['TITLE'] ?></th>
                                            <th><?php echo $mostrar ['NAME'] ?></th>
                                            <th>


                                                <!--- <a href="" type="button" class="btn  btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal<?php echo $mostrar['ID_REPORT']; ?>">Ver
                                                    mas</a>
                                                </ul>--->

                                                <div class="btn-group dropend mx-auto" style=" width: 50px; margin-top: 1em;">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Option
                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <!-- Dropdown menu links -->


                                                        <li><a class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal<?php echo $mostrar['ID_REPORT'];?>"><img
                                                src="img/svg/editar.svg " alt="Industrias Canaima" width="15"
                                                height="15"> Editar</a>
                                    </li>
  


                                                        <li><a class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal<?php echo $mostrar['ID_REPORT']; ?>"
                                                                href="#">Ver mas</a></li>


                                                    </ul>
                                                </div>


                                            </th>
                                        </tr>
                                    </div>
                                </div>
                                <?php

include "gestion_esdit.php";



?>
                            </div>





                            <div class="modal fade" id="exampleModal<?php echo $mostrar['ID_REPORT'];?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informacion adicional
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <strong> ID:</strong> <?php echo $mostrar ['ID_REPORT'] ?><br>
                                            <strong> Falla:</strong> <?php echo $mostrar ['TITLE'] ?><br>
                                            <strong> Usuario:</strong> <?php echo $mostrar ['NAME'] ?><br>
                                            <strong> Tecnico:</strong> <?php echo $mostrar ['ID_NAME'] ?><br>
                                            <strong> Descripcion:</strong> <?php echo $mostrar ['DESCRIPTION'] ?><br>
                                            <strong> Fecha de creacion :</strong>
                                            <?php echo $mostrar ['CREATION_DATE'] ?><br>
                                            <strong> Fecha final:</strong> <?php echo $mostrar ['DATE_FINAL'] ?><br>
                                            <strong> Fecha de solucion:</strong>
                                            <?php echo $mostrar ['FECHA_SOLUTION'] ?><br>
                                            <strong> Status:</strong> <?php echo $mostrar ['STATUS'] ?><br>
                                            <strong> Urgencia:</strong> <?php echo $mostrar ['LEVEL'] ?><br>
                                            <strong> Solucion:</strong> <?php echo $mostrar ['SOLUTION'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php   
               }
              
                     
              ?>
                            <!-- Banner -->

                            <!-- Section -->

                    </table>
                    <?php include "modaleditar.php";?>
                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Search -->

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <?php
        include('conexion.php');
        $modal="SELECT IDDATOS,foto FROM user_datos WHERE IDDATOS = 'IDDATOS' ";
        $resultado = mysqli_query($conn,$modal);
        $ver = mysqli_fetch_assoc($resultado);{
                   
   ?>



                            <a href="cambiarfoto.php" class="btn btn-primary">+
                            </a>
                            <?php } ?>
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
                            <img class="perfil" src="<?php echo $foto; ?>" width="200px">

                            <h2>Administrador <?php  echo $NAME; ?></h2>

                           

                            </ul>
                        </header>
                        <ul>
                            <li><a href="../admin.php">Noticias</a></li>



                            <li>
                                <span class="opener">solicitudes</span>
                                <ul>
                                    <li><a href="../solicitude2.php?RRHH">Recursos Humanos</a></li>
                                    <li><a href="../soporteadmin.php?Soporte">Soporte tecnico</a></li>


                                </ul>
                            </li>
                            <li>
                                <span class="opener">web</span>
                                <ul>
                                    <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a>
                                    </li>
                                    <li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
                                    <li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
                                    <li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora
                                            petro</a></li>

                                </ul>
                            </li>
                            <li>
                                <span class="opener">Biblioteca digital</span>
                                <ul>

                                    <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de
                                            canaima(.PDF)</a></li>
                                    <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                            canaima(.DOCX)</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="../gestiondeadmin.php">Gestor de usuario</a>
                            </li>
                            <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

                            <li><a href="inicio/reporte.php">Encargar casos de soporte</a></li>

                            <li><a href="../logout.php">
                                    <font color="blue">cerrar sesion
                                </a></li><br>
                            <br>
                            <br>
                            <ul class="icons">
                                <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                            class="label">twitter</span></a></li>
                                <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                        class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="https://www.instagram.com/ind_canaima/"
                                        class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                            </ul>
                    </nav>
                    <!-- Section -->

                </div>
            </div>

        </div>


        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
        <script>
        new DataTable('#example');
        </script>

    </body>

    </html>


   