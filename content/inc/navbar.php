

<header id="header" class="header fixed-top d-flex align-items-center"  >

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Industria Canaima</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
   
              <div class="responsive" <?php if ($mostrar_li) echo 'style="display: none; "'; ?>>
             <a   href="#openModal" class="btn btn-primary responsive-button">Iniciar Sesión</a>
             </div>
                <nav class="header-nav ms-auto"  <?php if (!$mostrar_li) echo 'style="display: none;"'; ?> >
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <?php 
                               
                                 if (isset($_SESSION['IDDATOS'])) {
              
                                 }else{
                                     ?>
                                 
                                     <?php 
                                 }

                               $USER = $_SESSION['USER'];
                               $NAME = $_SESSION['NAME'];
                               
                              
                           
                           
                               $CEDULA = $_SESSION['CEDULA'];
                               

                                 $consulta = mysqli_query($conn, "SELECT CEDULA , foto FROM user_datos WHERE CEDULA = '$CEDULA';");
                                 $valores = mysqli_fetch_array($consulta);
                                 $foto = $valores['foto'];
                                  ?>
        <img src="assets/images/<?php echo $foto; ?>" alt="" width="35" height="35" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo  $NAME ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
        
          <h6><?php echo  $NAME ?></h6>
          
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="perfil.php">
            <i class="bi bi-person"></i>
            <span>Mi Perfil</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="ayuda.php">
            <i class="bi bi-question-circle"></i>
            <span>ayuda</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Cerrar</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->
</header><!-- End Header -->

