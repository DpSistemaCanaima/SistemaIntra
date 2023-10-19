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

<!DOCTYPE HTML>
<html>

<head>
    <title>Industria Canaima</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
                    <a href="Solicitudes.php?Soporte" class="logo"><strong>soporte tecnico</strong></a>
                    <ul class="icons">
                        <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                    class="label">twitter</span></a></li>
                        <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                    class="label">Instagram</span></a></li>

                    </ul>
                </header>

                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        <header>

                            <ul class="actions">
                                <p>¿Problemas con el internet? ¿fallas con tu computador? o algun tipo de problemas
                                    general no
                                    te preocupes envia tu solicitud y atenderemos tu problema</p>
                                <p>nota* adjunta nombre* nombre de departamento* y tu actual problema y lo atenderemos
                                    en
                                    seguida </p>
                            </ul>


                    </div>
                    </header>
                    <form method="post" action="enviar_soporte.php">

                       
                        <div class="mb-3">

                            <input name="user_send" class="form-control" values="<?php echo $NAME; ?>"
                                placeholder="Solicitud" type="hidden" />

                        </div>

                        <div class="mb-3">

                            <input name="TITLE" class="form-control" id="exampleFormControlInput1"
                                placeholder="Solicitud" type="text" />

                        </div>
                        <div class="form-floating">
                            <textarea name="DESCRIPTION" class="form-control" placeholder="Descripcion"
                                id="floatingTextarea2" style="height: 150px" style="width: 150px"></textarea>

                        </div>

                        <br>

                        <br>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar" /></li>
                            <li><input type="reset" value="Borrar" /></li>
                        </ul>

                    </form>
                    </span>
                </section>

                <!-- Section -->




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

                               
                                        <a href="cambiarfoto.php" class="btn btn-primary" >+
                                        </a>
                                        <?php } ?>
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

</body>

</html>

