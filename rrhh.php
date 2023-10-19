<?php 
 
  include('cone.php');
  session_start();
  if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$ROL = $_SESSION['IDROLS'];

include('Backend/conexion.php');
  $query = "SELECT cod_imagen,imagen, nombre FROM imagenes  ";
  $resultado = mysqli_query($conn,$query);
  if(isset($_GET['Edit'])){//editar usuario
    include "modalvermas.php";

}
?>

<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="usuario.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <title>RRHH</title>
    </head>

    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                    <header id="header">
                        <h1><a href="dashboard.php" class="logo"><strong>Noticias</strong></a></h1>

                    </header>
                    <br>
                    <!-- Wrapper -->
                    <div id="wrapper">

                        <!-- Main -->
                        <div id="main">
                            <div class="inner">





                                <div class="col-lg-13">


                                    <div class="card-columns">
                                        <?php foreach($resultado as $row) { ?>
                                        <div class="card">
                                            <a style="text-decoration:none"
                                                href="moadal_recurso.php?Edit=<?php echo $row['cod_imagen'];?>">

                                                <img src="Backend/imagenes/<?php echo $row['imagen']; ?>"
                                                    class="card-img-top"></a>

                                                  <center> <?php echo $row['nombre']; ?></center> 




                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Search -->
                    <?php
        include('cone.php');
        $modal="SELECT IDDATOS,foto FROM user_datos WHERE IDDATOS = 'IDDATOS' ";
        $resultado = mysqli_query($conn,$modal);
        $ver = mysqli_fetch_assoc($resultado);{
                   
   ?>
                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">

                            
                                    <a href="modal_foto.php" class="btn btn-primary"  style=" border-radius:30px;">+
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

                                    <h2>Recursos H. <?php  echo $NAME; ?></h2>
                                   
                                </header>
                                <ul>
                                    <li><a href="rrhh.php">Noticias</a></li>
                                    <li><a href="versolicitud.php">ver solicitudes</a></li>


                                    <li>
                                        <span class="opener">solicitudes</span>
                                        <ul>
                                            <li><a href="soporte_rrhh.php">Soporte</a></li>


                                        </ul>
                                    </li>
                                    <li>
                                        <span class="opener">web</span>
                                        <ul>
                                            <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de
                                                    Venezuela</a>
                                            </li>
                                            <li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a>
                                            </li>
                                            <li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a>
                                            </li>
                                            <li><a href="https://calculadorapetro.bt.gob.ve/"
                                                    target="_blank">calculadora
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
                                        <a href="gestion_rrhh.php">Gestor de usuario</a>
                                    </li>
                                    <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>



                                    <li><a href="logout.php">
                                            <font color="blue">cerrar sesion
                                        </a></li>
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

    </body>

    </html>