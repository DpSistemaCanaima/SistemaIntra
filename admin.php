<?php 
 
  include('cone.php');
  session_start();
  if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$APE = $_SESSION['SURNAME'];
$ROL = $_SESSION['IDROLS'];






date_default_timezone_set('America/caracas');
     $fecha = date('Y-m-d');

     $sql = "SELECT FECHA , foto, NAME FROM user_datos ";
      $result = mysqli_query($conn,$sql);
     $mos = mysqli_fetch_assoc($result);
     $db= $mos['FECHA'];
     $NOMBRE= $mos['NAME'];
     $foto = $mos['foto'];
    
     
     
      if ($fecha==$db) {
        
        echo "
		<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
		<script language='JavaScript'>
		document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Hoy esta de cumpleaños $NOMBRE',
                text: 'Modal with a custom image.',
                imageUrl: '$foto',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                        })
	});
		</script>";
}
    

      


include('Backend/conexion.php');
  $query = "SELECT cod_imagen,imagen, nombre FROM imagenes  ";
  $resultado = mysqli_query($conn,$query);
  if(isset($_GET['Edit'])){//editar usuario
    include "modalvermas.php";

}
?>


<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="usuario.css">
        <link rel="stylesheet" href="main.css">
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
                        <center><h1 style="font-size: 70px;"><strong>Noticias</strong></h1></center>

                        <a href="gestiondeusuario.php?User=true" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#registrarusuario"
                            style="border-bottom: none; font-size:15px; display: block; position: absolute; left: 90%; top:0; border-radius:30px;">Publicacion</a>
                       

                        <?php
                        include "modalnoticias.php";
                    ?>

                    </header>


                    <!-- Wrapper -->
                    <div id="wrapper">

                        <!-- Main -->
                        <div id="main">
                            <div class="inner">





                                <div class="col-lg-13">


                                    <div class="card-columns">
                                        <?php foreach($resultado as $row) { ?>
                                        <div class="card"  style="width: 18em;">
                                            <a style="text-decoration:none"
                                                href="modal.php?Edit=<?php echo $row['cod_imagen'];?>">

                                                <img src="Backend/imagenes/<?php echo $row['imagen']; ?>"
                                                    class="card-img-top"></a>

                                                    <center> <?php echo $row['nombre']; ?></center>  




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
                    <?php
        include('cone.php');
        $modal="SELECT IDDATOS,foto FROM user_datos WHERE IDDATOS = 'IDDATOS' ";
        $resultado = mysqli_query($conn,$modal);
        $ver = mysqli_fetch_assoc($resultado);{
                   
   ?>
                        <!-- Menu -->
                        <nav id="menu">
                            <header class="major">

                            <a class="btn btn-primary"   style=" border-radius:30px;" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">+</a>

                           
                                       
                                        
                                        </a>
                                        <?php

include "modal_admin.php";



?>
                                        <?php }   ?>
                                        <?php 
                                     
                       if (isset($_SESSION['IDDATOS'])) {
		
                       }else{
                           ?>
                           <script type="text/javascript">
                               window.location = "./";
                           </script>
                           <?php 
                       }
                    
                       $consulta = mysqli_query($conn, "SELECT USER , foto FROM user_datos WHERE USER = '$USER';");
                       $valores = mysqli_fetch_array($consulta);
                       $foto = $valores['foto'];
                        ?>
	                           <img class="perfil" src="<?php echo $foto; ?>" width="200px">
	 			
                                        <h2>Administrador <?php  echo $NAME; ?></h2>


                            </ul>
                        </header>
                        <ul>
                            <li><a href="admin.php">Noticias</a></li>



                            <li>
                                <span class="opener">solicitudes</span>
                                <ul>
                                    <li><a href="rrhh_admin.php">Recursos Humanos</a></li>
                                    <li><a href="soporte_admin.php">Soporte tecnico</a></li>


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
                                <a href="gestion_admin.php">Gestor de usuario</a>
                            </li>
                            <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

                            <li><a href="inicio/index.php">Encargar casos de soporte</a></li>

                            <li><a href="logout.php">
                                    <font color="blue">cerrar sesion
                                </a></li><br>

                            <ul class="icons">
                                <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                            class="label">twitter</span></a></li>
                                <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                        class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="https://www.instagram.com/ind_canaima/"
                                        class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
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