<!DOCTYPE html>
<html lang="es">
<?php
  include "content/inc/header.php";
 ?>

<body class="g-sidenav-show  bg-gray-100">
    <?php 
        include "content/inc/sidebar.php";
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
            <!--De aqui en adelante agregar el contenido que va para cada vista-->
            <div class="row mt-2">
                <div class="col-lg-3 col-md-6 mt-4 mb-5 ms">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="text-center">
                                <img src="assets/img/noticias/indus2.jpg" alt="profile_image"
                                    class=" img-fluid rounded float-end border-radius-lg ">
                            </div>
                            <!-- Configuracion de imagen pequeña -->
                            <!-- <div class="text-center">
                  <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class=" img-fluid w-70 rounded float-center border-radius-lg ">
                </div> -->
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Titulo Noticia 1</h6>
                            <p class="text-sm ">Breve descripcion</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Ver toda la
                                        informacion</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mb-4 ms-1">
                    <div class="card z-index-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="text-center">
                                <img src="assets/img/noticias/robotica_1.jpg" alt="profile_image"
                                    class=" img-fluid  rounded float-end border-radius-lg ">
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Titulo Noticia 2</h6>
                            <p class="text-sm ">Breve descripcion</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Ver toda la
                                        informacion</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mb-4 ms-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="text-center">
                                <img src="assets/img/noticias/robotica_2.jpg" alt="profile_image"
                                    class=" img-fluid rounded float-end border-radius-lg ">
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Titulo Noticia 3</h6>
                            <p class="text-sm ">Breve descripcion</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Ver toda la
                                        informacion</a></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 mt-4 mb-4 ms-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="text-center">
                                <img src="assets/img/noticias/sistema.png" alt="profile_image"
                                    class=" img-fluid rounded float-end border-radius-lg ">
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Titulo Noticia 4</h6>
                            <p class="text-sm ">Breve descripcion</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Ver toda la
                                        informacion</a></p>
                            </div>
                        </div>
                    </div>
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
                                        <div id="carouselExampleIndicators" class="carousel slide"
                                            data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 border-radius-lg"
                                                        src="assets/img/directores/administracion.png"
                                                        alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Some representative placeholder content for the first slide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 border-radius-lg"
                                                        src="assets/img/directores/oac.png" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Some representative placeholder content for the first slide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 border-radius-lg"
                                                        src="assets/img/directores/planificacion.png" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Some representative placeholder content for the first slide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 border-radius-lg"
                                                        src="assets/img/directores/talento.png" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Some representative placeholder content for the first slide.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 border-radius-lg"
                                                        src="assets/img/directores/yelitza.png" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Some representative placeholder content for the first slide.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-bs-slide="next">
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
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                        <div class="avatar me-3">
                                            <img src="assets/img/kal-visuals-square.jpg" alt="kal"
                                                class="border-radius-lg shadow">
                                        </div>
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Sophie B.</h6>
                                            <p class="mb-0 text-xs">Esta de Cumpleaños Hoy</p>
                                        </div>
                                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                            href="javascript:;">Reply</a>
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                        <div class="avatar me-3">
                                            <img src="assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                                        </div>
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Anne Marie</h6>
                                            <p class="mb-0 text-xs">Esta de Cumpleaños Hoy</p>
                                        </div>
                                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                            href="javascript:;">Reply</a>
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                        <div class="avatar me-3">
                                            <img src="assets/img/ivana-square.jpg" alt="kal"
                                                class="border-radius-lg shadow">
                                        </div>
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Ivanna</h6>
                                            <p class="mb-0 text-xs">Esta de Cumpleaños Hoy</p>
                                        </div>
                                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                            href="javascript:;">Reply</a>
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                        <div class="avatar me-3">
                                            <img src="assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                                        </div>
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Peterson</h6>
                                            <p class="mb-0 text-xs">Esta de Cumpleaños Hoy</p>
                                        </div>
                                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                            href="javascript:;">Reply</a>
                                    </li>
                                    <li class="list-group-item border-0 d-flex align-items-center px-0">
                                        <div class="avatar me-3">
                                            <img src="assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                                        </div>
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Nick Daniel</h6>
                                            <p class="mb-0 text-xs">Esta de Cumpleaños Hoy</p>
                                        </div>
                                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                            href="javascript:;">Reply</a>
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