<div class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <!--La etiqueta "a" es la que redirecciona.-->
        <a class="navbar-brand m-0" href="index.php" target="_blank">
            <img src="./assets/img/logos/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Intranet <br> Industria Canaima C.A</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white " href="usuario.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">solicitudes
                </h6>
            </li>
          
            <li class="nav-item">
            <?php
         $ID = $_SESSION['IDDATOS'];
      $sql1 = "SELECT IDDATOS FROM `user_datos` WHERE IDDATOS = $ID";
         $resulta = mysqli_query($conn,$sql1);
      
         $mostre = mysqli_fetch_assoc($resulta); 
         ?>
        
                <a class="nav-link text-white " target="_blank" href="pdf/constancia_de_trabajo.php?edi=<?php echo $mostre['IDDATOS'];?>">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Constancia de trabajo</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="./pdf/recibo_de_pago.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Recibo de pago</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="arc.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">ARC</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" target="_blank" href="./pdf/permiso.pdf">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Planilla de Permiso</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white " target="_blank" href="./pdf/vacaciones.pdf">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Planilla de VAcaciones
                    </span>
                </a>
            </li>
          
        
            <li class="nav-item">
                <a class="nav-link text-white " href="./logout.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Cerrar</span>
                </a>
            </li>
           

        
        </ul>
    </div>
</div>