<?php

include "cone.php";

session_start();

$sql = "SELECT CEDULA  FROM user_datos WHERE  IDDATOS = IDDATOS";
//   echo $sql;
  $resul = mysqli_query($conn, $sql);



?>

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
  
                  <form  action="contra.php" method="POST" class="m-auto" style="width: 90%">
                    <p class="text-center">Cambiar  Contraseña</p>
                    <?php
                    while( $ver = mysqli_fetch_array($resul)){
                      ?>
                    <input type="hidden" name="cedula" value="<?php echo $ver['CEDULA']; ?>"  class="form-control my-input" placeholder="Contraseña">
                  
                 <?php   } ?>
                    <div class="form-outline has-feedback mb-4">
   
                      <input type="password" name="password" required maxlength="8"  class="form-control my-input" placeholder="Contraseña">

                    </div>
  

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-outline-primary btn-custom fa-lg mb-3"  type="submit" style="padding: 10px 0; width: 100%;">recuperar</button>
                      <a style="text-decoration: none;" href="index.php">Cancelar</a>
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
 