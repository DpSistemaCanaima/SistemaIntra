<?php 
 
  include('cone.php');
session_start();
  if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$ROL = $_SESSION['IDROLS'];

?>

<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="usuario.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <title>Inicio</title>
    </head>

    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">
                    <header id="header">
                        <h1><a href="rrhh.php" class="logo"> <h1>Cambia tu foto de perfil</h1></a></h1>

                       

                    </header>



                    <div class="col-lg-18">


                        <div class="card">

                            <div class="card">

                                <?php
	

	
	$foto = $_SESSION['IDDATOS'];
	$USER= $_SESSION['USER'];
	include 'cone.php';
	$consulta = mysqli_query($conn, "SELECT * FROM user_datos WHERE USER = '$USER';");
	$valores = mysqli_fetch_array($consulta);
	$USER = $valores['USER'];
	$foto = $valores['foto'];
	 ?>
                               
                                <img class="perfil" src="<?php ; echo $foto; ?>">
                                <form action="foto_admin.php" method="post" enctype="multipart/form-data">
                                    <input type="text" name="USER" value="<?php echo $USER; ?>" style="display: none;">
                                    Ingresa tu nuerva foto de perfil
                                    <input class="card-title" type="file" name="nfoto">
                                    <button class="card-title" type="submit" class="btn btn-primary">Actualizar</button>  <a class="card-title" href="rrhh.php" class="btn btn-primary">Regresar</a>
                                </form>


                            </div>


                        </div>

                    </div>
                </div>





            </div>
        </div>

       

    </body>

    </html>