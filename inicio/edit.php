<?php

include('conexion.php');
   
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






                    <form action="editar.php" method="post">
                    
                        <select class="form-select" name="STATUS" aria-label="Default select example">
                           <option value="">casos</option>
                          <option value="1">Activo</option>
                          <option value="3">En espera</option>
                          <option value="2">Cerrados</option>
                            
                        </select>
                        <select class="form-select" name="ID_LEVEL" >
                               
                               <option value="1">Urgente</option>
                               <option value="2">Alta</option>
                               <option value="3">Normal</option>
                               <option value="4">Baja</option>
                           
                               </select>
      
                        <?php  //consulta relacionada para mandar el Nombre del tecnico

                            $sql = "SELECT  r.PRIVILEGE , u.NAME , u.IDDATOS FROM user_datos AS u
                               INNER JOIN rols AS r ON u.IDROLS = R.IDROLS WHERE u.IDROLS = '3' ";

                                $result = mysqli_query($conn,$sql);
      
   
                         
                               
                        ?>


                        <select class="form-select" name="ID_NAME" aria-label="Default select example">

                            <option>Tecnicos</option>
                             
                            <?php  while ($mostrar = mysqli_fetch_array($result)){?>

                            <option value="<?php echo $mostrar ['IDDATOS']; ?>"><?php echo $mostrar ['NAME'] ?></option>
                            <?php 
                                  
                                } ?>
                        </select>

                       

                        <input type="submit" value="enviar">
                    </form>
                 
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



    <!-- Modal -->