<?php
session_start();
require_once('conexion.php');

if ($_SESSION['Users'][0]== null){
    header('location: index.php');
}else{
    if ($_SESSION['Users'][2]== 2){
		header("location:index.php");
    }else{
			if(isset($_GET['RRHH'])){
			if (isset($_POST['Envia'])) {

				$id = $_SESSION['Users'][4];
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$cedula = $_POST['cedula'];
				$solicitud = $_POST['solicitud'];

				$validacion = mysqli_query($conn, "SELECT * FROM `user_datos` WHERE IDDATOS='$id' AND CEDULA='$cedula'");
				$validacion = mysqli_num_rows($validacion);
				if ($validacion > 0) {
					$validacion = mysqli_query($conn, "SELECT * FROM `recursos` WHERE cedula='$cedula'");
				$validacion2 = mysqli_num_rows($validacion);
					if($validacion2>2){
						header('location:solicitudes.php?RRHH&Error=Report_max');	
					}else{

					mysqli_query($conn, "INSERT INTO `recursos` (`nombre`, `apellido`, `cedula`, `solicitud`) VALUES ('$nombre', '$apellido', '$cedula', '$solicitud')");

					if ($conn) {


						echo '<script>';
						echo 'alert("solicitud enviada con exito !!!");';
						echo 'window.location.href="dashboard.php";';
						echo '</script>';
						
					} else {
						header('location:solicitudes.php?RRHH&Error=no_send');
					}
				}
				} else {
					header('location:solicitudes.php?RRHH&&Error=card');
				}
			} else {
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
							<?php if (isset($_GET['Error']) && $_GET['Error'] == "no_send") {
					echo "<br><p><font color='red'>Lo sentimos, ocurrio un error al intentar enviar la solicitud, intente mas tarde.</font></p>";
					header('refresh:3;solicitudes.php?RRHH');
				}elseif(isset($_GET['Error']) && $_GET['Error'] == "card"){
					echo "<br><p><font color='red'>Su cedula no coincide con los datos de su cuenta, intente de nuevo.</font></p>";
					header('refresh:3;solicitudes.php?RRHH');
				}elseif(isset($_GET['Error']) && $_GET['Error'] == "Report_max"){
					echo "<br><p><font color='red'>Tiene 3 solicitudes activa en este momento, intente mas tarde.</font></p>";
					header('refresh:3;solicitudes.php?RRHH');
				} else {
					echo '';
				} ?>

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Recursos Humanos</strong></a>
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
										<p>Para solicitar su constancia de trabajo. Al hacer clic en "Aceptar" debera de espera que pase 3 dias para que Recursos Humanos tenga lista su solicitud. </p>
										<ul class="actions">
											
										</ul>
									</div>
									<span class="image object">
									<form method="post" action="solicitudes.php?RRHH">
									<div class="row gtr-50">
									<div class="col-12">
											<input type="hidden" name="nombre" value="<?php echo $_SESSION['Users'][0]; ?>" maxlength="100"></textarea>
										</div>
										<div class="col-12">
										<input type="hidden" name="apellido" value="<?php echo $_SESSION['Users'][5]; ?>" maxlength="100"></textarea>
										</div>
										<div class="col-6 col-12-mobile">
											
											<input type="text" class="form-control" name="cedula" placeholder="cedula" maxlength="100"  aria-describedby="basic-addon2">
										</div>
										<div class="col-12">
											<select class="form-select"  name="solicitud">
											<option > constancia de trabajo</option>
			                                </select>
										</div>
										<br>
										<div class="col-12">
										<br>
											<ul class="actions">
												<li><input type="submit" class="btn btn-outline-primary" value="Enviar" name="Envia" onclick="return Confirmdalet()" /></li>
												<li><input type="reset" class="btn btn-outline-primary" value="Borrar" /></li>
											</ul>
										</div>
									</div>
								</form>
								<li><a href="./pdf/vacaciones.xls" target="_blank">descargar solicitud de vacaciones</a></li>
								<li><a href="./pdf/permiso.docx" target="_blank">descargar solicitud de permiso</a></li>
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
									<h3>Menu</h3>	


</ul>
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
	<a href="gestiondeusuario.php">Gestor de usuario</a>
</li>
<li><a href="https://mail.industriacanaima.gob.ve/" target="_blank" >Correo</a></li>

<li><a href="inicio/reporte.php">Encargar casos de soporte</a></li>

<li><a href="dashboard.php?logout=on">
		<font color="red">cerrar sesion
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

			}}elseif(isset($_GET['Soporte'])){
				if ($_SESSION['Users'][1]== 1){
					if(isset($_POST['solicitud'])){


	
	if(isset($_POST['Message'])){
		if(empty($_POST['solicitud']) or empty($_POST['Message'])){
			?>				
				<script>
					var yes=alert('Uno de los campos esta vacio, intente de nuevo.');
					if(yes=true){
						window.location.href="solicitudes.php?Soporte";
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
				window.location.href="solicitudes.php?Soporte";
			}
				</script><?php
		}elseif($b > 100){
					?>				
				<script>
					var yes=alert('El campo "mensaje" ha superado el rango maximo');
					if(yes=true){
						window.location.href="solicitudes.php?Soporte";
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
						window.location.href="solicitudes.php?Soporte";
					}
					</script><?php
}}else{
		?><script>
		alert('La bandeja de mensaje, esta vacia');</script>
		<?php
	}
}else{	

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Industria Canaima</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
									
									<form method="post" action="solicitudes.php?Soporte">
									
									<div class="mb-3">
											
						<input name="solicitud" class="form-control" id="exampleFormControlInput1" placeholder="Solicitud" type="text" />
										
                                   </div>
											<textarea name="Message" placeholder="Descripcion" maxlength="100"></textarea>
									
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
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="dashboard.php">noticias</a></li>
										
										
										<li>
											<span class="opener">solicitudes</span>
											<ul>
												<li><a href="solicitudes.php?RRHH">Recursos Humanos</a></li>
												<li><a href="solicitudes.php?Soporte">Soporte tecnico</a></li>
												
												
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

										
										<li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
										
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
}}elseif ($_SESSION['Users'][1]== 2){header('location:dashboard.php');
}elseif ($_SESSION['Users'][1]== 3){header('location:dashboard.php');}

}else{
/*header('location:dashboard.php');*/}}}
?>

