
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilos.css">
  <title>Login</title>
</head>
<body class="vh-100" style="border: 1px solid black;">
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card text-black border-custom">
            <div class="row g-0 rounded-5 caja-lg border-custom">
              <div class="col-lg-6 border-custom">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="https://www.uneti.edu.ve/campus/pluginfile.php/34/block_edash_partners/content/Canaima.png"
                      style="width: 250px; " alt="logo">
                  </div>
  
                  <form  action="contra_reset.php" method="POST" class="m-auto" style="width: 90%">
                    <p class="text-center">Recuperacion de Contraseña</p>
  
                    <div class="form-group has-feedback mb-4">
                     <img src="cedula.png" style="height: 20px;" alt="">
                      <input type="text" name="cedula" maxlength="8"  required class="form-control my-input" placeholder="Cedula">
                    </div>
                    <div class="form-group has-feedback mb-4">
                     <svg xmlns="http://www.w3.org/2000/svg"  height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
  <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>
                      <input type="date" name="fecha" maxlength="8"  required class="form-control my-input" placeholder="Fecha de nacimiento">
                    </div>

                    <div class="form-outline has-feedback mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
</svg>
                      <input type="email" name="email" required  class="form-control my-input" placeholder="Correo">

                    </div>
                     <div class="form-group has-feedback mb-4">
                     <svg xmlns="http://www.w3.org/2000/svg"  height="16" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
  <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>
                      <input type="password" name="password" maxlength="8"  required class="form-control my-input" placeholder="Nueva Contraseña">
                    </div>

             
  

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-outline-primary btn-custom fa-lg mb-3"  type="submit" style="padding: 10px 0; width: 100%;">recuperar</button>
                      <a style="text-decoration: none;" href="index.php">Regresar</a>
                    </div>
                  </form>
                  <p class="text-muted text-center">&copy; Industria Canaima 2023</p>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2 border-custom-img" style="
                background: url(./indus2.jpg) rgba(0, 0, 0, .3);
                background-position: center;
                background-size: cover;
                background-blend-mode: overlay;
              ">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <form action="" method="POST">
<!--  <input pattern=".{3,}" required title="minimo 3 caracteres" maxlength="8">
<input type="submit" value="aceptar">
</form> -->
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>
</html>