<?php 
session_start();

require_once('conexion.php');
if (isset($_GET['logout'])&& $_GET['logout']=="on"){
	session_destroy();
	header('location:index.php');
   }else{
if ($_SESSION['Users'][4]== null){//si el usuario inicio sesion
    header('location: index.php');
}else{
    if ($_SESSION['Users'][2]== 2){//Si el usuario esta habilitado o no
		header("location:index.php");
    }else{
		if ($_SESSION['Users'][1]== 1){//Usuario
			if($_SESSION['Users'][3]==1){//RRHH
				if(isset($_POST['btnEliminar'])){//elimnar cont. RRHH
            
				$IDDATOS=$_POST['id'];
				
				mysqli_query( $conn, "DELETE FROM `recursos` WHERE id='$IDDATOS'") or die ("error al eliminar");
				
				mysqli_close($conn);
				
				header("location: dashboard.php");
			}else{
				?>
<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="usuario.css">
        <title>RRHH</title>
    </head>

    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                    <br>
                    <br>
                    <header id="header">
                    <h1><a href="dashboard.php" class="logo"><strong>Noticias</strong></a></h1>
                    <ul class="icons">
                        <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                    class="label">twitter</span></a></li>
                        <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                    class="label">Instagram</span></a></li>

                    </ul>
                </header>



                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-12">

                                <table class="table table-striped">

                                    <tbody>

                                        <?php
                        include('conexion.php');
						$conn = mysqli_connect($servername, $username, $password, $database);
                        $query = "SELECT ID,nombre,tipo,contenido FROM imagen ORDER BY ID ASC, nombre,tipo,contenido";
                        $res = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>

                                      
    <div class="contenedor">                
<div class="capa"></div>
   <div class="parrafo">
   <img  src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['contenido']); ?>">
   <p><?php echo $row['nombre']; ?> </p>
   </div>
                            
                        </div>
                                        <?php
                        }
                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                    <!-- Banner -->

                    <!-- Section -->



                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Search -->

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>RRHH<br><?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?></h2>
                            <h3>Menu</h3>
                        </header>
                        <ul>
                        <li><a href="recurso_noti.php">Noticias</a></li>
                            <li><a href="dashboard.php">ver solicitudes</a></li>


                            <li>
                                <span class="opener">solicitudes</span>
                                <ul>
                                    <li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>


                                </ul>
                            </li>
                            <li>
                                <span class="opener">web</span>
                                <ul>
                                    <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a>
                                    </li>
                                    <li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
                                    <li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
                                    <li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora
                                            petro</a></li>

                                </ul>
                            </li>
                            <li>
                                <span class="opener">Biblioteca digital</span>
                                <ul>

                                    <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de
                                            canaima(.PDF)</a></li>
                                    <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                            canaima(.DOCX)</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="mostraredit.php">Gestor de usuario</a>
                            </li>
                            <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

                        

                            <li><a href="dashboard.php?logout=on">
                                    <font color="red">cerrar sesion
                                </a></li>
                        </ul>
                    </nav>

                    <!-- Section -->


                </div>
            </div>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

    </html>
<?php }

			}else{
		?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Industria Canaima</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="cla.css">
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <h1><a href="" class="logo"><strong>Noticias</strong></a></h1>
                    <ul class="icons">
                        <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                    class="label">twitter</span></a></li>
                        <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                    class="label">Instagram</span></a></li>

                    </ul>
                </header>
                <br>
                <div class="espacio-tabla">
                    <table class="table table-striped">

                        <tbody>

                            <?php
include('conexion.php');
$conn = mysqli_connect($servername, $username, $password, $database);
$query = "SELECT ID,nombre,tipo,contenido FROM imagen ORDER BY ID ASC, nombre,tipo,contenido";
$res = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($res)) {
?>

                            <div class="classy">


                                <hr>


                                <img class="imagen"
                                    src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['contenido']); ?>">

                                <p><?php echo $row['nombre']; ?>
                                <p>




                            </div>
                            <?php
}
?>
                        </tbody>
                    </table>
                </div>


                <!-- Banner -->

                <!-- Section -->



            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Usuario<br><?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?><h3>
                                <h3>Menu</h3>
                    </header>
                    <ul>
                        <li><a href="dashboard.php">noticias</a></li>


                        <li>
                            <span class="opener">solicitudes</span>
                            <ul>
                                <li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>
                                <li><a href="solicitudes.php?Soporte">soporte tecnico</a></li>


                            </ul>
                        </li>
                        <li>
                            <span class="opener">web</span>
                            <ul>
                                <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a>
                                </li>
                                <li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
                                <li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
                                <li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <span class="opener">Biblioteca digital</span>
                            <ul>

                                <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de canaima(.PDF)</a>
                                </li>
                                <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                        canaima(.DOCX)</a></li>
                            </ul>
                        </li>

                        <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
                        <li><a href="dashboard.php?logout=on">
                                <font color="red">cerrar sesion
                            </a></li>
                    </ul>
                </nav>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Versiones de canaima</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a href="#" class="image"><img src="Canaima 3.png" alt="" /></a>
                            <p>canaima 3</p><a href="canaima.php?info=3">mas detalles</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="Canaima 4.png" alt="" /></a>
                            <p>canaima 4</p><a href="canaima.php?info=4">mas detalles</a>
                        </article>
                        <article>
                            <a href="#" class="image"><img src="Canaima 5.png" alt="" /></a>
                            <p>canaima 5</p><a href="canaima.php?info=5">mas detalles</a>
                        </article>
                    </div>

                </section>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
<?php

		}}elseif ($_SESSION['Users'][1]== 2){//Tecnico
			?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Industria Canaima</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="cla.css">
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <h1><a href="dashboard.php" class="logo"><strong>Noticias</strong></a></h1>
                    <ul class="icons">
                        <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                    class="label">twitter</span></a></li>
                        <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                    class="label">Instagram</span></a></li>

                    </ul>
                </header>
                <br>
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-12">

                            <table class="table table-striped">

                                <tbody>

                                    <?php
                        include('conexion.php');
						$conn = mysqli_connect($servername, $username, $password, $database);
                        $query = "SELECT ID,nombre,tipo,contenido FROM imagen ORDER BY ID ASC, nombre,tipo,contenido";
                        $res = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>

                                    <div class="classy">


                                        <hr>


                                        <img class="imagen"
                                            src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['contenido']); ?>">


                                        <p> <?php echo $row['nombre']; ?></p>






                                    </div>
                                    <?php
                        }
                        ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>



                <!-- Banner -->

                <!-- Section -->



            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">

                        <h2>Tecnico<br><?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?></h2>
                        <h3>Menu</h3>
                    </header>
                    <ul>
                        <li><a href="dashboard.php">noticias</a></li>


                        <li>
                            <span class="opener">solicitudes</span>
                            <ul>
                                <li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>


                            </ul>
                        </li>
                        <li>
                            <span class="opener">web</span>
                            <ul>
                                <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a>
                                </li>
                                <li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
                                <li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
                                <li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <span class="opener">Biblioteca digital</span>
                            <ul>

                                <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de canaima(.PDF)</a>
                                </li>
                                <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                        canaima(.DOCX)</a></li>
                            </ul>
                        </li>
                        <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

                        <li><a href="reporte/index.php">Reporte</a></li>
                        <li><a href="dashboard.php?logout=on">
                                <font color="red">cerrar sesion
                            </a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
<?php
			

		}
		elseif ($_SESSION['Users'][1]== 3){//Administrador

			if (isset($_REQUEST['guardar'])) {//para publicar la pagina
				if (isset($_FILES['foto']['name'])) {
					$tipoArchivo = $_FILES['foto']['type'];
					$permitido=array("image/png","image/jpeg");
					if( in_array($tipoArchivo,$permitido) ==false ){
						die("Archivo no permitido");
					}
				   $nombreArchivo = $_POST['nombre'];
					$tamanoArchivo = $_FILES['foto']['size'];
					$imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
					$binariosImagen = fread($imagenSubida, $tamanoArchivo);
					include ('conexion.php');
					$conn = mysqli_connect($servername, $username, $password, $database);
					$binariosImagen = mysqli_escape_string($conn, $binariosImagen);
					$query = "INSERT INTO imagen (nombre            ,contenido                 ,tipo) values 
													 ('" . $nombreArchivo . "','" . $binariosImagen . "','" . $tipoArchivo . "');
						";
					  
					$res = mysqli_query($conn, $query);
					if ($res=true) {
			?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <center>
        <p>Registro insertado exitosamente</p>
        <center>
</div>
<?php
							   header("refresh:2;dashboard.php");
					} else {
					?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    Error <?php echo mysqli_error($conn); ?>

</div>
<?php
			header("refresh:2;dashboard.php");

					}
				}
			}

			?>
<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="cla.css">
        <title>Inicio</title>
    </head>

    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                    <br>
                    <br>
                    <header>
                        <form action="dashboard.php" method="post" enctype="multipart/form-data">

                            <input type="file" class="form-control-file" name="foto">

                            <input type="text" name="nombre" placeholder="comentario">

                            <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>

                        </form>
                    </header>



                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-12">

                                <table class="table table-striped">

                                    <tbody>

                                        <?php
                        include('conexion.php');
						$conn = mysqli_connect($servername, $username, $password, $database);
                        $query = "SELECT ID,nombre,tipo,contenido FROM imagen ORDER BY ID ASC, nombre,tipo,contenido";
                        $res = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>

                                        <div class="classy">


                                            <hr>


                                            <img class="imagen"
                                                src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['contenido']); ?>">

                                            <p><?php echo $row['nombre']; ?>
                                            <p>




                                            <form action="elimin.php" method="pot">
                                                <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID">


                                                <button class="sub">eliminar</button>


                                            </form>

                                        </div>
                                        <?php
                        }
                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                    <!-- Banner -->

                    <!-- Section -->



                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <!-- Search -->

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>Administrador<br><?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?></h2>
                            <h3>Menu</h3>
                        </header>
                        <ul>
                            <li><a href="noticias.php">Noticias</a></li>
                            <li><a href="dashboard.php">Subir publicacion</a></li>


                            <li>
                                <span class="opener">solicitudes</span>
                                <ul>
                                    <li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>


                                </ul>
                            </li>
                            <li>
                                <span class="opener">web</span>
                                <ul>
                                    <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a>
                                    </li>
                                    <li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
                                    <li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
                                    <li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora
                                            petro</a></li>

                                </ul>
                            </li>
                            <li>
                                <span class="opener">Biblioteca digital</span>
                                <ul>

                                    <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de
                                            canaima(.PDF)</a></li>
                                    <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                            canaima(.DOCX)</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="mostraredit.php">Gestor de usuario</a>
                            </li>
                            <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

                            <li><a href="inicio/reporte.php">Encargar casos de soporte</a></li>

                            <li><a href="dashboard.php?logout=on">
                                    <font color="red">cerrar sesion
                                </a></li>
                        </ul>
                    </nav>

                    <!-- Section -->


                </div>
            </div>

        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

    </html>
    <?php
}else{

header("location:index.php");

 }
}}} ?>