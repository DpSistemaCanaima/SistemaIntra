<?php
 include('cone.php');
date_default_timezone_set('America/caracas');
     $fecha = date('Y-m-d');

     $sql = "SELECT FECHA ,foto, NAME, SURNAME FROM user_datos WHERE FECHA = '$fecha'";
      $result = mysqli_query($conn,$sql);
     while ($mos = mysqli_fetch_assoc($result)){

      $db= $mos['FECHA'];
      $NOMBRE= $mos['NAME'];
      $apellido=$mos['SURNAME'];
      $foto = $mos['foto'];
     }
      if ($fecha==$db) {
      
        include 'modal_fecha.php';
}

?>
   
<?php 
 
 include('cone.php');
  session_start();
  if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$APE = $_SESSION['SURNAME'];
$ROL = $_SESSION['IDROLS'];








      


include('Backend/conexion.php');
  $query = "SELECT cod_imagen,imagen, nombre FROM imagenes  ";
  $resultado = mysqli_query($conn,$query);
  if(isset($_GET['Edit'])){//editar usuario
    include "modalvermas.php";

}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Industria Canaima</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
            
                <center><h1 style="font-size: 70px;"><strong>Noticias</strong></h1></center>

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
                                            href="modal_usuario.php?Edit=<?php echo $row['cod_imagen'];?>">

                                            <img src="Backend/imagenes/<?php echo $row['imagen']; ?>"
                                                class="card-img-top">
                                               <center><strong><?php echo $row['nombre']; ?></strong> </center>




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


                    <a class="btn btn-primary"   style=" border-radius:30px;" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">+</a>

                           
                                       
                                        
                                        </a>
                                        <?php

include "modal_usu.php";



?>
                        <?php 
        }
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
                        
                           <h2>      Usuario <?php  echo $NAME; ?></h2>
                        
                    </header>
                    <ul>
                        <li><a href="usuario.php">noticias</a></li>


                        <li>
                            <span class="opener">solicitudes</span>
                            <ul>
                                <li><a href="rrhh_usuario.php">Recursos Humanos</a></li>
                                <li><a href="soporte_usuario.php">soporte tecnico</a></li>


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
                                        petro</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <span class="opener">Biblioteca digital</span>
                            <ul>

                                <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de
                                        canaima(.PDF)</a>
                                </li>
                                <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                        canaima(.DOCX)</a></li>
                            </ul>
                        </li>

                        <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
                        <li><a href="logout.php">
                                <font color="blue">cerrar sesion
                            </a></li>
                    </ul>
                </nav>
                <ul class="icons">
                    <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                class="label">twitter</span></a></li>
                    <li><a href="https://es-la.facebook.com/IndustriaCanaima/" class="icon brands fa-facebook-f"><span
                                class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                class="label">Instagram</span></a></li>

                </ul>
                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Versiones de canaima</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a href="#" class="image"><img src="Canaima 3.png" alt="" /></a>
                            <p>canaima 3</p><a href="canaima.php?info=3">mas detalles</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="Canaima 4.png" alt="" /></a>
                            <p>canaima 4</p><a href="canaima.php?info=4">mas detalles</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="Canaima 5.png" alt="" /></a>
                            <p>canaima 5</p><a href="canaima.php?info=5">mas detalles</a>
                        </article>
                    </div>

                </section>

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