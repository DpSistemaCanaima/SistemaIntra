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
        include "content/inc/sidebar1.php";
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
            <div class="row mb-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="assets/img/noticias/indus2.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
                            </a>
                            <!-- <div class="colored-shadow"
                                style="background-image: url(&quot;assets/img/noticias/indus2.jpg&quot;);">
                            </div> -->
                        </div>
                        <div class="card-body px-4 pt-2">
                            <a href="javascript:;">
                                <h5 class="font-weight-normal mt-3">
                                    Conócenos
                                </h5>
                            </a>
                            <p>
                                Somos una empresa socialista que fabrica y comercializa equipos de informática y de
                                telecomunicaciones. Comprometidos en el desarrollo y la producción del sector de las
                                telecomunicaciones del país, de América Latina y del Caribe.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Tweets de
                                @Gabrielasjr</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <a class="twitter-timeline" data-width="300" data-height="500"
                                href="https://twitter.com/Gabrielasjr?ref_src=twsrc%5Etfw">Tweets by Gabrielasjr</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--De aqui en adelante agregar el contenido que va para cada vista-->

        <?php

$query = "SELECT cod_imagen,imagen, nombre FROM imagenes ORDER BY cod_imagen DESC ";
$resultado = mysqli_query($conn,$query);

?>
                         
                        
        <div class="row mt-2">
        <?php foreach($resultado as $row) { ?>
            <div class="col-lg-3 col-md-6 mt-4 mb-5 ms">
                <div class="card z-index-2  ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="text-center">
                        <img  src="assets/img/noticias/<?php echo $row['imagen']; ?>" class=" img-fluid rounded float-end border-radius-lg" >
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 "><?php echo $row['nombre']; ?></h6>
                        <p class="text-sm ">Breve descripcion</p>
                        <hr class="dark horizontal">
                        <div class="d-flex ">
                            <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Ver
                                    toda la
                                    informacion</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
           

            </div>
          
            <div class="row mb-4">
                <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Directores de Departamentos</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-5 my-auto text-end">
                                    <div class="dropdown float-lg-end pe-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-5">
                            <div class="row">
                                <div class="col-md-8 mx-auto">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-bs-slide-to="1">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-bs-slide-to="2">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-bs-slide-to="3">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-bs-slide-to="4">
                                            </li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100 border-radius-lg"
                                                    src="assets/img/directores/administracion.png" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Some representative placeholder content for the first
                                                        slide.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 border-radius-lg"
                                                    src="assets/img/directores/oac.png" alt="Second slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Some representative placeholder content for the first
                                                        slide.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 border-radius-lg"
                                                    src="assets/img/directores/planificacion.png" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Some representative placeholder content for the first
                                                        slide.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 border-radius-lg"
                                                    src="assets/img/directores/talento.png" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Some representative placeholder content for the first
                                                        slide.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100 border-radius-lg"
                                                    src="assets/img/directores/yelitza.png" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>First slide label</h5>
                                                    <p>Some representative placeholder content for the first
                                                        slide.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Cumpleañeros del Mes</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                            <?php 
                                     date_default_timezone_set('America/Caracas');
                                     $FECHA = date('Y-m-d');
                                    include "config/cone.php";
                                    $cumple="SELECT * FROM user_datos WHERE FECHA = '$FECHA'";
                                    $resulta = mysqli_query($conn,$cumple);
                                    while ($cum = mysqli_fetch_assoc( $resulta )) {
                                    ?>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                    <div class="avatar me-3">
                                        <img src="assets/img/kal-visuals-square.jpg" alt="kal"
                                            class="border-radius-lg shadow">
                                    </div>
                                   
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm"><?php echo $cum['NAME'];?></h6>
                                        <p class="mb-0 text-xs">Esta de Cumpleaños Hoy</p>
                                    </div>
                                    <?php } ?>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Pie de pagina de la plantilla.-->
            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                © <script>
                                document.write(new Date().getFullYear())
                                </script>,
                                Desarrollado con <i class="fa fa-heart"></i> por
                                <a href="https://www.industriacanaima.gob.ve/" class="font-weight-bold"
                                    target="_blank">Industria Canaima C.A</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.industriacanaima.gob.ve/" class="nav-link text-muted"
                                        target="_blank">Industria Canaima C.A</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <?php
  include "content/inc/script.php";
?>
</body>

</html>