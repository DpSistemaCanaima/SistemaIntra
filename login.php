<!DOCTYPE html>
<html lang="es">
<?php 
    include "content/inc/header.php";
?>
<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('assets/img/noticias/indus2.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Ingresar</h4>
                </div>
              </div>
              <div class="card-body">
                <form role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Usuario</label>
                    <input type="email" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn bg-gradient-info w-100 my-4 mb-2">Iniciar Sesión</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Desarrollado con <i class="fa fa-heart" aria-hidden="true"></i> por
                <a href="https://www.industriacanaima.gob.ve/" class="font-weight-bold text-white" target="_blank">Industria Canaima C.A</a>
              </div>
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