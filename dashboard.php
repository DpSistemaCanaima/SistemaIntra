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

        <title>Inicio</title>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="assets/css/main.css" />

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
                        <img src="fondo.jpg" width="105%" height="260px">
                    </header>

                    <br>
                    <br>
                    <br>

                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-12">

                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nombre y Apellido</th>

                                            <th>Cédula</th>
                                            <th>Solicitudes</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <?php



                      $result =mysqli_query($conn,"SELECT * FROM recursos");

                      while ($mostrar = mysqli_fetch_array($result)){

?>
                                    <tbody>

                                        <tr>
                                            <td><?php echo $mostrar['nombre'];?> <?php echo $mostrar['apellido'];?></td>

                                            <td><?php echo $mostrar['cedula']?></td>
                                            <td><?php echo $mostrar['solicitud']?></td>
                                            <td>

                                                <!------Eliminar------>
                                                <form action="eliminar.re.php" method="POST">
                                                    <input type="hidden" value="<?php echo $mostrar['cedula'] ?> "
                                                        name="txtcedula">

                                                    <button class="btn"><svg viewBox="0 0 15 17.5" height="17.5"
                                                            width="15" xmlns="http://www.w3.org/2000/svg" class="icon">
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
                                <a href="gestiondeusuario1.php">Gestor de usuario</a>
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


        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
        <script>
        new DataTable('#example');
        </script>

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
        <link rel="stylesheet" href="usuario.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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

                                <div class="contenedor">
                                    <div class="capa"></div>
                                    <div class="parrafo">
                                        <img
                                            src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['contenido']); ?>">
                                        <p><?php echo $row['nombre']; ?> </p>
                                    </div>

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
                                    <li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora
                                            petro</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <span class="opener">Biblioteca digital</span>
                                <ul>

                                    <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de
                                            canaima(.PDF)</a>
                                    </li>
                                    <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                            canaima(.DOCX)</a></li>
                                </ul>
                            </li>

                            <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
                            <li><a href="dashboard.php?logout=on">
                                    <font color="blue">cerrar sesion
                                </a></li>
                        </ul>
                    </nav>
                    <ul class="icons">
                            <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                        class="label">twitter</span></a></li>
                            <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                    class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                            <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                        class="label">Instagram</span></a></li>

                        </ul>
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

<?php 
  include('Backend/conexion.php');
  
  $query = "select cod_imagen,imagen, nombre from imagenes  ";
  $resultado = mysqli_query($conn,$query);
  if(isset($_GET['Edit'])){//editar usuario
    include "modalvermas.php";

}
?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>Industria Canaima</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="usuario.css">
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
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
                       
                    </header>
                    <br>
                     <!-- Wrapper -->
        <div id="wrapper">

<!-- Main -->
<div id="main">
    <div class="inner">
        
 



        <div class="col-lg-13">


<div class="card-columns">
  <?php foreach($resultado as $row) { ?>
<div class="card">
<a style="text-decoration:none" href="modal.php?Edit=<?php echo $row['cod_imagen'];?>">

<img  src="Backend/imagenes/<?php echo $row['imagen']; ?>" class="card-img-top" > 




</div>
<?php } ?>
</div>
</div>


</div>
</div>
</div>



   </div>
</div>




        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Search -->

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">

              <h2>Tecnico <?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?></h2>
                        
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

                        <li><a href="reporte/reporte.php">Reporte</a></li>
                        <li><a href="dashboard.php?logout=on">
                                <font color="blue">cerrar sesion
                            </a></li>
                            <ul class="icons">
                            <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                        class="label">twitter</span></a></li>
                            <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                    class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                            <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                        class="label">Instagram</span></a></li>

                        </ul>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
    new DataTable('#example');
    </script>

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
						die("<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                        <script language='JavaScript'>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Algo salio mal. Intenta de nuevo',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                                timer: 1500
                              }).then(() => {
                
                                location.assign('dashboard.php');
                
                             });
                    });
                        </script>");
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
    
		<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
		<script language='JavaScript'>
		document.addEventListener('DOMContentLoaded', function() {
			Swal.fire({
				icon: 'success',
				title: 'Se Registro correctamente',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'OK',
				timer: 1500
			  }).then(() => {

				location.assign('gestiondeusuario.php');

			  });
	});
		</script>;
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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
                crossorigin="anonymous">
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

                                <input type="file" class="file" name="foto"><br>
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="nombre" ></textarea>
                                </div>
                                <br>

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
            		<!-- Sidebar -->
				<div id="sidebar">
            <div class="inner">

                <!-- Search -->

                <!-- Menu -->
                <nav id="menu">
				<header class="major">
                            <h2>Administrador<br><?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?></h2>

                            <h3>Menu</h3>


                            </ul>
                        </header>
                    <ul>
                        <li><a href="noticias.php">Noticias</a></li>
                        <li><a href="dashboard.php">Subir publicacion</a></li>


                        <li>
                            <span class="opener">solicitudes</span>
                            <ul>
                                <li><a href="solicitude2.php?RRHH">Recursos Humanos</a></li>
                                <li><a href="soporteadmin.php?Soporte">Soporte tecnico</a></li>


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
                            <a href="gestiondeusuario.php">Gestor de usuario</a>
                        </li>
                        <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

                        <li><a href="inicio/reporte.php">Encargar casos de soporte</a></li>

                        <li><a href="dashboard.php?logout=on">
                                <font color="blue">cerrar sesion
                            </a></li><br>
                        <br>
                        <br>
                        <ul class="icons">
                            <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                        class="label">twitter</span></a></li>
                            <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                    class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                            <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                        class="label">Instagram</span></a></li>
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