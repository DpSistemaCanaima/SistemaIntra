<?php
    require_once('conexion.php');
	session_start();
	if (isset($_GET['logout'])&& $_GET['logout']=="on"){
		session_destroy();
		header('location:index.php');
	   }else{
	if ($_SESSION['Users'][4]== null){//si el usuario inicio sesion
		header('location: index.php');
	}
			}
			
				
					
				
					if(isset($_POST['solicitud'])){


	
	if(isset($_POST['Message'])){
		if(empty($_POST['solicitud']) or empty($_POST['Message'])){
			?>				
				<script>
					var yes=alert('Uno de los campos esta vacio, intente de nuevo.');
					if(yes=true){
						window.location.href="soporteadmin.php";
					}
					</script><?php
		}else{
		$solicitud = $_POST['solicitud'];
		$menssage = $_POST['Message'];
		$id = $_SESSION['Users'][4];
		$a = strlen ($solicitud);
		$b = strlen ($menssage);
		
		if($a > 30){
			?>
			<script>
				var yes=alert('El campo "solicitud" ha superado el rango maximo');
				if(yes=true){
				window.location.href="soporteadmin.php";
			}
				</script><?php
		}elseif($b > 100){
					?>				
				<script>
					var yes=alert('El campo "mensaje" ha superado el rango maximo');
					if(yes=true){
						window.location.href="soporteadmin.php";
					}
					</script><?php
			}else
			setlocale(LC_TIME,"es_ES");
			$time=strftime("%G-%m-%d");
			$caducidad= date("Y-m-d",strtotime($time."+ 2 day"));
			$msg = mysqli_query($conn, "INSERT INTO `report`(`ID_REPORT`,`TITLE`,`User_send`, `ID_NAME`, `DESCRIPTION`, `CREATION_DATE`, `DATE_FINAL`, `STATUS`, `ID_LEVEL`) VALUES (null,'$solicitud','$id',null,'$menssage','$time','$caducidad',1,3)");
			?><script>
					var yes=alert('Su reporte se ha enviado de manera exitosa');
					if(yes=true){
						window.location.href="soporteadmin.php";
					}
					</script><?php
}}else{
		?><script>
		alert('La bandeja de mensaje, esta vacia');</script>
		<?php
	}
}	

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Industria Canaima</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="soporteadmin.php" class="logo"><strong>soporte tecnico</strong></a>
									<ul class="icons">
										<li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span class="label">twitter</span></a></li>
										<li><a href="https://es-la.facebook.com/IndustriaCanaima/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
										
										</header>
										
										<p>¿Problemas con el internet? ¿fallas con tu computador? o algun tipo de problemas general no te preocupes envia tu solicitud y atenderemos tu problema</p>
						              <p>nota* adjunta nombre* nombre de departamento* y tu actual problema y lo atenderemos en seguida </p>
									
										<ul class="actions">
											
										</ul>
									</div>
									
									<form method="post" action="soporteadmin.php">
									
									<div class="mb-3">
											
						<input name="solicitud" class="form-control" id="exampleFormControlInput1" placeholder="Solicitud" type="text" />
										
                                   </div>
											<textarea name="Message" placeholder="Descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									
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

                <!-- Menu -->
                <nav id="menu">
				<header class="major">
                            <h2>Administrador<br><?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?></h2>

                            <h3>Menu</h3>


                            </ul>
                        </header>
                    <ul>
                        <li><a href="noticias.php">Noticias</a></li>
                        


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


