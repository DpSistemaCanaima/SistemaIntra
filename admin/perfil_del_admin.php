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
$oficio = $_SESSION['ABILIDAD_U_OFICIO'];
$cedula = $_SESSION['CEDULA'];
$pass = $_SESSION['PASSWORD'];
$tele = $_SESSION['telefono'];
$correo = $_SESSION['EMAIL'];






date_default_timezone_set('America/caracas');
   $fecha = date('Y-m-d');

   $sql = "SELECT FECHA , foto, NAME FROM user_datos WHERE FECHA = '$fecha'";
   $result = mysqli_query($conn,$sql);
   while($mos = mysqli_fetch_assoc($result)){
   
   $NOMBRE= $mos['NAME'];
   $foto = $mos['foto'];
   $db= $mos['FECHA'];
   
    if ($fecha==$db) {
      
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
          Swal.fire({
              title: 'Hoy esta de cumpleaños $NOMBRE',
              text: 'Modal with a custom image.',
              imageUrl: '$foto',
              imageWidth: 400,
              imageHeight: 200,
              imageAlt: 'Custom image',
                      })
  });
      </script>";
}
  
   }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Intranet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- App favicon -->
    <link rel="shortcut icon"
        href="https://www.uneti.edu.ve/campus/pluginfile.php/34/block_edash_partners/content/Canaima.png">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="perfil/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="perfil/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="perfil/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="perfil/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="perfil/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="perfil/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="perfil/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="perfil/css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="https://www.uneti.edu.ve/campus/pluginfile.php/34/block_edash_partners/content/Canaima.png"
                                    alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <img src="svg/3.svg" alt="">
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control dropdown-toggle" placeholder="Search..."
                                    id="top-search">

                                <button class="input-group-text btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg"
                                            alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg"
                                            alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">
                    <li class="dropdown d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="svg/buscar.svg" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                            <span class="align-middle d-none d-lg-inline-block">English</span><img src="svg/bajo.svg "
                                alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="svg/campana.svg" alt="nitification">
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2" style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                <!-- item-->

                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i
                                                class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp <small
                                                        class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                                    Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i
                                                class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Admin <small
                                                        class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i
                                                class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small
                                                        class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about
                                                    our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i
                                                class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                                    Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i
                                                class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="assets/images/users/avatar-4.jpg"
                                                        class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good
                                                    and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="text-center">
                                    <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item border-top py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="dropdown d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="svg/megafono.png" height="22px" width="auto " alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                                </div> <!-- end row-->
                            </div>

                        </div>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">


                        </a>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Theme Mode">
                            <img src="svg/brightness-high.svg " alt="mode">

                        </div>
                    </li>


                    <li class="d-none d-md-inline-block">
                        <a class="nav-link" href="" data-toggle="fullscreen">
                            <img src="svg/bounding-box.svg " alt="agrandar">

                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="assets/images/users/luis.jpg" alt="user-image" width="32"
                                    class="rounded-circle">
                            </span>
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                <h5 class="my-0">Luis Navarro</h5>
                                <h6 class="my-0 fw-normal">Desarrollador</h6>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bienvenido!</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="svg/person.svg" alt="">
                                <span>Mi perfil</span>
                            </a>

                            <!-- item-->


                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="svg/ayuda.svg" alt="">
                                <span>Ayuda</span>
                            </a>

                            <!-- item-->


                            <!-- item-->
                            <a href="logout.php" class="dropdown-item">
                                <img src="svg/cerrar.svg" alt="">
                                <span>Cerrar sesion</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="" class="logo logo-light">
                <span class="logo-lg">
                <img src="Canaima (1).png" style="width:230px; height:auto;" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="https://www.uneti.edu.ve/campus/pluginfile.php/34/block_edash_partners/content/Canaima.png"
                        alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="https://www.uneti.edu.ve/campus/pluginfile.php/34/block_edash_partners/content/Canaima.png"
                        alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <img src="svg/3.svg" alt="">
            </div>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                            class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name mt-2">Dominic Keller</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">





                    <li class="side-nav-item">
                        <a href="admin.php" class="side-nav-link">
                            <img src="svg/periodico.svg" alt="">

                            <span>Noticias</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
                            class="side-nav-link">
                            <img src="svg/solicitud.svg" alt="">
                            <span>Solicitudes</span>
                        </a>
                        <div class="collapse" id="sidebarCrm">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="crm-projects.html">Tecnico</a>
                                </li>
                                <li>
                                    <a href="crm-orders-list.html">Recursos Humanos</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <img src="svg/web.svg" alt="">
                            <span> web </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="dashboard-analytics.html">Banco de Venezuela</a>
                                </li>
                                <li>
                                    <a href="index.html">El universal</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Pagina Patria</a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html">Calculadora Petro</a>
                                </li>

                            </ul>
                        </div>
                    </li>


                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                            aria-controls="sidebarEcommerce" class="side-nav-link">
                            <img src="svg/libro.svg" alt="">
                            <span> Biblioteca digital </span>

                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-ecommerce-products.html">Products</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-products-details.html">Products Details</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false"
                            aria-controls="sidebarEmail" class="side-nav-link">
                            <img src="svg/person.svg" alt="">
                            <span> Gestion de usuario </span>

                        </a>

                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                            aria-controls="sidebarProjects" class="side-nav-link">
                            <img src="svg/correo.svg" alt="">
                            <span>correo </span>
                        </a>

                    </li>









                    <!-- end Help Box -->



                    <!--- End Sidemenu -->

                    <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <br>
        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
               

                    <main id="main" class="main">



                        <section class="section profile">
                            <div class="row">
                                <div class="col-xl-4">

                                    <div class="card">
                                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

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
                                            <img  src="<?php echo $foto; ?>" width="200px">
                                            <h2><?php echo $NAME . "    " .  $APE  ?></h2>
                                            <h3><?php echo $oficio  ?></h3>
                                            <div class="social-links mt-2">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-8">

                                    <div class="card">
                                        <div class="card-body pt-3">
                                            <!-- Bordered Tabs -->
                                            <ul class="nav nav-tabs nav-tabs-bordered">

                                                <li class="nav-item">
                                                    <button class="nav-link active" data-bs-toggle="tab"
                                                        data-bs-target="#profile-overview">Descripcion General</button>
                                                </li>

                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#profile-edit">Editar Perfil</button>
                                                </li>



                                                <li class="nav-item">
                                                    <button class="nav-link" data-bs-toggle="tab"
                                                        data-bs-target="#profile-change-password">Cambiar
                                                        contraseña</button>
                                                </li>

                                            </ul>
                                            <div class="tab-content pt-2">
                                                <br>

                                                <div class="tab-pane fade show active profile-overview"
                                                    id="profile-overview">

                                                    <h5 class="card-title">Detalles de Perfil</h5>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label ">Nombre Completo</div>
                                                        <div class="col-lg-9 col-md-8"><?php echo $NAME ."  " . $APE ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">cedula</div>
                                                        <div class="col-lg-9 col-md-8"><?php  echo $cedula   ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">usuario</div>
                                                        <div class="col-lg-9 col-md-8"><?php echo $USER  ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">contraceña</div>
                                                        <div class="col-lg-9 col-md-8"><?php echo $pass  ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">telefono</div>
                                                        <div class="col-lg-9 col-md-8"><?php echo $tele ?></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4 label">Correo</div>
                                                        <div class="col-lg-9 col-md-8"><?php echo $correo  ?></div>
                                                    </div>

                                                   


                                                </div>

                                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                                    <!-- Profile Edit Form -->
                                                    <form>
                                                        <div class="row mb-3">
                                                            <label for="profileImage"
                                                                class="col-md-4 col-lg-3 col-form-label">Profile
                                                                Image</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                                <div class="pt-2">
                                                                    <a href="#" class="btn btn-primary btn-sm"
                                                                        title="Upload new profile image"><i
                                                                            class="bi bi-upload"></i></a>
                                                                    <a href="#" class="btn btn-danger btn-sm"
                                                                        title="Remove my profile image"><i
                                                                            class="bi bi-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="fullName"
                                                                class="col-md-4 col-lg-3 col-form-label">Nombre
                                                                Completo</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="fullName" type="text" class="form-control"
                                                                    id="fullName" value="Kevin Anderson">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="about"
                                                                class="col-md-4 col-lg-3 col-form-label">cedula</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="fullName" type="text" class="form-control"
                                                                    id="fullName" value="31158005">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="company"
                                                                class="col-md-4 col-lg-3 col-form-label">usuario</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="company" type="text" class="form-control"
                                                                    id="company" value="Lueilwitz, Wisoky and Leuschke">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Job"
                                                                class="col-md-4 col-lg-3 col-form-label">contraseña</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="job" type="text" class="form-control"
                                                                    id="Job" value="Web Designer">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Country"
                                                                class="col-md-4 col-lg-3 col-form-label">Telefono</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="country" type="text" class="form-control"
                                                                    id="Country" value="USA">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Address"
                                                                class="col-md-4 col-lg-3 col-form-label">correo</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="address" type="text" class="form-control"
                                                                    id="Address"
                                                                    value="A108 Adam Street, New York, NY 535022">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="Phone"
                                                                class="col-md-4 col-lg-3 col-form-label">cargo</label>
                                                            <div class="col-md-8 col-lg-9">
                                                                <input name="phone" type="text" class="form-control"
                                                                    id="Phone" value="v.Servios estudiantiles">
                                                            </div>
                                                        </div>


                                                </div>

                                                
                                                </div>

                                               
                                                </div>

                                               
                                                </div>

                                               
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Guardar los
                                                        cambios</button>
                                                </div>
                                                </form><!-- End Profile Edit Form -->

                                            </div>

                                            <div class="tab-pane fade pt-3" id="profile-settings">

                                                <!-- Settings Form -->
                                                <form>

                                                    <div class="row mb-3">
                                                        <label for="fullName"
                                                            class="col-md-4 col-lg-3 col-form-label">Email
                                                            Notifications</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="changesMade" checked>
                                                                <label class="form-check-label" for="changesMade">
                                                                    Changes made to your account
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="newProducts" checked>
                                                                <label class="form-check-label" for="newProducts">
                                                                    Information on new products and services
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="proOffers">
                                                                <label class="form-check-label" for="proOffers">
                                                                    Marketing and promo offers
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="securityNotify" checked disabled>
                                                                <label class="form-check-label" for="securityNotify">
                                                                    Security alerts
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                                </form><!-- End settings Form -->

                                            </div>

                                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                                <!-- Change Password Form -->
                                                <form>

                                                    <div class="row mb-3">
                                                        <label for="currentPassword"
                                                            class="col-md-4 col-lg-3 col-form-label">Current
                                                            Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="password" type="password" class="form-control"
                                                                id="currentPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="newPassword"
                                                            class="col-md-4 col-lg-3 col-form-label">New
                                                            Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="newpassword" type="password"
                                                                class="form-control" id="newPassword">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="renewPassword"
                                                            class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                                            Password</label>
                                                        <div class="col-md-8 col-lg-9">
                                                            <input name="renewpassword" type="password"
                                                                class="form-control" id="renewPassword">
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Change
                                                            Password</button>
                                                    </div>
                                                </form><!-- End Change Password Form -->

                                            </div>

                                        </div><!-- End Bordered Tabs -->

                                    </div>
                                </div>

                            </div>
                </div>
                </section>

                </main><!-- End #main -->


                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>
                                document.write(new Date().getFullYear())
                                </script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->





    </div>

    <!-- Vendor js -->

    <script src="assets/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="assets/js/daterangepicker/moment.min.js"></script>
    <script src="assets/js/daterangepicker/daterangepicker.js"></script>

    <!-- Apex Charts js -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script src="assets/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/vendor/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Dashboard App js -->
    <script src="assets/js/demo.dashboard.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>