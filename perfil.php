<?php
include "config/cone.php";

session_start();
$IDDATOS = $_SESSION['IDDATOS'];
                               
$area  = $_SESSION['ASSIGNED_AREA'];
if (isset($_SESSION['IDROLS'])) {
  // El usuario ha iniciado sesión
  $mostrar_li = true;
 
} else {
  // El usuario no ha iniciado sesión
  $mostrar_li = false;
}
  
    include "content/inc/header.php";
    include "modal/modal_ini.php";
?>
<body>

<?php    
        include "content/inc/navbar.php";
        
        include "content/inc/sidebar.php";
    ?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>Perfil</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Users</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        <?php 
                             
                             if (isset($_SESSION['IDDATOS'])) {
          
                             }else{
                                 ?>
                                 
                                 <?php 
                             }
                             $CEDULA = $_SESSION['CEDULA'];
                             $NAME = $_SESSION['NAME'];
                            
                             $consulta = mysqli_query($conn, "SELECT CEDULA , foto FROM user_datos WHERE CEDULA = '$CEDULA';");
                             $valores = mysqli_fetch_array($consulta);
                             $foto = $valores['foto'];
                              ?>
    <img src="assets/image/<?php echo $foto; ?>"  class="rounded-circle">
          <h2><?php echo  $NAME ?></h2>
          <h3><?php echo  $area ?></h3>
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
           <?php 
           $sql1="SELECT * FROM user_datos WHERE CEDULA = '$CEDULA'";
           $re= mysqli_query($conn, $sql1);
           $mos = mysqli_fetch_array($re);{

           ?>
      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Descripción general</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar perfil</button>
            </li>

       
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Cambiar la contraseña</button>
            </li>

          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
            

              <h5 class="card-title">Detalles del perfil</h5>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Compañía</div>
                <div class="col-lg-9 col-md-8">Industria Canaima</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nombre completo</div>
                <div class="col-lg-9 col-md-8"><?php echo $mos['NAME'] ." ". $mos['SURNAME']  ?></div>
              </div>

             

              <div class="row">
                <div class="col-lg-3 col-md-4 label">cargo</div>
                <div class="col-lg-9 col-md-8"><?php echo $mos['ASSIGNED_AREA'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Adscripción</div>
                <div class="col-lg-9 col-md-8"><?php echo $mos['DIRECCION'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Telefono</div>
                <div class="col-lg-9 col-md-8"><?php echo $mos['telefono'] ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Correo</div>
                <div class="col-lg-9 col-md-8"><?php echo $mos['EMAIL'] ?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
        <form action="foto.php" method="post"  enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto de perfil</label>
                  <div class="col-md-8 col-lg-9">
                 
                  <?php

                        if (isset($_SESSION['IDDATOS'])) {

                           }else{
                    ?>
                    <script type="text/javascript">
                  window.location = "./";
                        </script>
                      <?php 
                         }

                $consulta = mysqli_query($conn, "SELECT CEDULA , foto FROM user_datos WHERE CEDULA = '$CEDULA';");
                    $valores = mysqli_fetch_array($consulta);
                $foto = $valores['foto'];
                     ?>
                    <img src="assets/images/<?php echo $foto; ?>"  >
                   
                    <div class="pt-2">
                    <input type="file" name="nfoto" class="btn btn-primary btn-sm" style="height:30px; ">
                    
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                  
                    </div>
                  </div>
                            </div>

                            <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Usuario</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="USER" type="text" class="form-control" placeholder="<?php echo $mos['USER'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Address" class="col-md-4 col-lg-3 col-form-label">Direccion</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="DIRECCION" type="text" class="form-control"  placeholder="<?php echo $mos['DIRECCION'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telefono</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="telefono" type="text" class="form-control"  placeholder="<?php echo $mos['telefono'] ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Correo</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="EMAIL" type="email" class="form-control" placeholder="<?php echo $mos['EMAIL'] ?>">
                  </div>
                </div>

               

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
        </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">

            
              

        </div>
            <?php  } ?>
            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- Change Password Form -->
              <form action="password.php" method="POST">

                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Contraseña actual</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="actual_pass" type="password" class="form-control" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nueva contraseña</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="PASSWORD" type="password" class="form-control" >
                  </div>
                </div>

                

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
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
<?php
       
       include "content/inc/footer.php";
       include "content/inc/script.php";
   ?>
</body>
</html>