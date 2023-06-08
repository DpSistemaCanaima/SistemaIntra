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
<!DOCTYPE html>
<!DOCTYPE HTML>
<html>

<head>
    <title>Industria Canaima</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="tabla.css" />
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->

                <header>
                    <center><img src="fondo.jpg" width="100%" height="250px" /></center>
                </header>



                <table>

                    <div class="table-wrapper">
                        <table class="fl-table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cédula</th>
                                    <th>Solicitudes</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <?php

       $sql_registe= mysqli_query($conn,"SELECT COUNT(*) as total_registro FROM `recursos`");
       $result_resgister= mysqli_fetch_array($sql_registe);

       $total_registro = $result_resgister['total_registro'];


       $por_pagina= 5;

       if(empty($_GET['pagina'])){
        $pagina = 1;
       }else{
         $pagina =$_GET['pagina'];
       }

     
       $desde =($pagina-1)  *$por_pagina;
       $total_paginas = ceil($total_registro / $por_pagina);


$result =mysqli_query($conn,"SELECT id,nombre,apellido,cedula,solicitud FROM `recursos` ORDER BY nombre ASC,apellido,cedula,solicitud
  LIMIT $desde,$por_pagina");
while ($mostrar = mysqli_fetch_array($result)){

    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $mostrar['nombre'];?></td>
                                    <td><?php echo $mostrar['apellido'];?></td>
                                    <td><?php echo $mostrar['cedula']?></td>
                                    <td><?php echo $mostrar['solicitud']?></td>
                                    <td>

                                        <!------Eliminar------>
                                        <form action="eliminar.re.php" method="POST">
                                            <input type="hidden" value="<?php echo $mostrar['cedula'] ?> "
                                                name="txtcedula">

                                            <button class="btn"><svg viewBox="0 0 15 17.5" height="17.5" width="15"
                                                    xmlns="http://www.w3.org/2000/svg" class="icon">
                                                    <path transform="translate(-2.5 -1.25)"
                                                        d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z"
                                                        id="Fill"></path>
                                                </svg></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
}
        ?>
                            <tbody>
                        </table>
                        <div class="paginador">
                            <ul>
                                <?php
            if ($pagina != 1) {
            ?>
                                <li><a href="?pagina=<?php echo 1; ?>">!<< /a>
                                </li>
                                <li><a href="?pagina=<?php echo $pagina-1; ?>">
                                        <<< /a>
                                </li>
                                <?php                
            }
            for ($i=1; $i < $total_paginas; $i++) { 
                if ($i == $pagina) {
                    echo '<li class="pageselected">'.$i.'</li>';
                }else {
                    echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                }
            }

            if ($pagina != $total_paginas) {
            ?>
                                <li><a href="?pagina=<?php echo $pagina+1;?>">>></a></li>
                                <li><a href="?pagina=<?php echo $total_paginas;?>">>!</a></li>
                                <?php    
            }
            ?>
                            </ul>

                        </div>
                    </div>

                    <!-- Sidebar -->
                    <header class="header">
                        <div class="container">
                            <div class="btn-menu">
                                <label for="btn-menu">☰</label>
                            </div>

                        </div>




                    </header>
                    <div class="capa"></div>
                    <!--	--------------->
                    <input type="checkbox" id="btn-menu">
                    <div class="container-menu">
                        <div class="cont-menu">

                            <nav>
                                <a href="solicitudes.php?Soporte">soporte tecnico</a>
                                <a href="https://bdvenlinea.banvenez.com">banco de venezuela</a>
                                <a href="https://www.patria.org.ve/">patria</a>
                                <a href="https://calculadorapetro.bt.gob.ve/">calculadora petro</a>
                                <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
                                <a href="dashboard.php?logout=on">cerrar sesion</a>
                            </nav>
                            <label for="btn-menu">✖️</label>
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

                        <li><a href="./Reporte">Reporte</a></li>
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
                             <?php 
                             
                              include('conexion.php');

                              
                              $conn = mysqli_connect($servername, $username, $password, $database);
                              $query = "SELECT IDDATOS, NAME FROM user_datos WHERE IDROLS='3'";
                              $res = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_assoc($res)) {

                             
                             ?>

                    <br>
                    <br>
                    <header>
                        <form action="enviar.php" method="POST">

                            
                           
                                <input type="hidden" value="<?php echo $row['IDDATOS']; ?>">
                                <input type="text" value="<?php echo $row['NAME']; ?>" >
                             

                            <button type="submit" class="btn btn-primary">Enviar</button>

                        </form>
                    </header>

       <?php  

                              }

      ?>

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-12">

                              

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

                            <li><a href="casos.php">Encargar casos de soporte</a></li>

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