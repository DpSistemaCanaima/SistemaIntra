<?php
 require_once('conexion.php');
 session_start();
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
		 if ($_SESSION['Users'][1]== 3){//Lista
			if(empty($_GET['Edit'])&& empty($_GET['Del']) && empty($_GET['User'])){

				?>
				<!DOCTYPE HTML>
				
				<html>
					<head>
						<title>Gestor de usuario</title>
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
												<br>
												<a href="mostraredit.php?User=true" style="border-bottom: none; font-size:30px; display: block; position: absolute; left: 90%; top:0">+</a>
												<br>
												<div class="espacio-tabla">
					<table class="table table-dark table-striped">
				  <thead>
					<tr>
				   
					  <th scope="col">Nombre</th>
					  <th scope="col">Apellido</th>
					  <th scope="col">Cedula</th>
					  <th scope="col">Usuario</th>
					  <th scope="col">Genero</th>
					  <th scope="col">Correo</th>
					  <th scope="col">Cargo</th>
					  <th scope="col">Estatus</th>
					  <th scope="col">Direccion</th>
					  <th scope="col">Opcion</th>
					 
					  
					</tr>
				  </thead>
				  <tbody>
					<?php
					$IDDATOS1=$_SESSION['Users'][4];
					  $sql="SELECT user_datos.IDDATOS,user_datos.NAME,user_datos.SURNAME,user_datos.CEDULA,user_datos.USER,user_datos.GENDER,user_datos.PASSWORD,user_datos.EMAIL,user_datos.IDROLS,user_datos.LOGIN, user_datos.NAME,area.AREA FROM user_datos INNER JOIN area on user_datos.ASSIGNED_AREA=area.ID_AREA WHERE IDDATOS NOT IN ('$IDDATOS1')";
					  $result =mysqli_query($conn,$sql);
					  
					  while ($mostrar = mysqli_fetch_assoc($result)){
					  
				
				
					
					?>
					<tr>
					  <th><?php echo $mostrar ['NAME'] ?></th>
					  <th><?php echo $mostrar ['SURNAME'] ?></th> 
					  <th><?php echo $mostrar ['CEDULA'] ?></th>
					  <th><?php echo $mostrar ['USER'] ?></th>
					  <th><?php if($mostrar ['GENDER']==1){
						echo "H";
					  }elseif($mostrar ['GENDER']==2){
						echo "M";
					  }else{
						echo "N.Binario";
					  } ?></th>
					  <th><?php echo $mostrar ['EMAIL'] ?></th>
					  <th><?php if($mostrar ['IDROLS']==2){ echo "Usuario";}else{ echo "Tecnico";} ?></th>
					  <th><?php if($mostrar ['LOGIN']==1){ echo "<font color='green'>Habilitado</font>";}else{ echo "<font color='red'>Deshabilitado</font>";} ?></th>
					  <th><?php echo $mostrar ['AREA'] ?></th>
				
					  <td>
						
						<!------Editar------>
						  <form><a href="mostraredit.php?Edit=<?php echo $mostrar['IDDATOS'];?>" style="border-bottom: none;">Editar </a><a href="mostraredit.php?Del=<?php echo $mostrar['IDDATOS'];?>"style="border-bottom: none; color: blue">Eliminar</a>
				
					  
					</td>  
					 
					</tr>
						<?php
					  }
					?>
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
														<h2>Menu</h2>
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
																<li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a></li>
																<li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
																<li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
																<li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a></li>
																
															</ul>
														</li>
														<li>
														
														<a href="mostraredit.php">Gestor de usuario</a>	
														</li>
														<li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
														<li><a href="#">siges</a></li>
														<li><a href="mostraredit.php?logout=on"><font color="red">cerrar sesion</a></li>
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
				
			
			}elseif(isset($_GET['Edit'])&& empty($_GET['Del'])){//editar usuario
				$id = $_GET['Edit'];
				?>
			
			
			<!DOCTYPE HTML>
			
			<html>
				<head>
					<title>Industria Canaima</title>
					<meta charset="utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
					<link rel="stylesheet" href="assets/css/main.css" />
					<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
					<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
					<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
				</head>
				<body class="is-preload">
			
					<!-- Wrapper -->
						<div id="wrapper">
			
							<!-- Main -->
								<div id="main">
									<div class="inner">
			
										<!-- Header -->
											
												
											
											
											<div class="espacio-tabla">
												
				 <!----------Mostrar-------->
			<table class="table">
			<?php if(isset($_GET['Error'])&&($_GET['Error']=='Campo')){
						echo '<br><p>Uno o varios campo tiene un error, intentelo de nuevo</p>';
						header("refresh:3;mostraredit.php?Edit={$_GET['Edit']}");
												}elseif(isset($_GET['Error'])&&($_GET['Error']=='Cedula'))
												{echo '<br><p>Ya existe un usuario con la misma cedula.</p>';
												header("refresh:3;mostraredit.php?Edit={$_GET['Edit']}");
											}elseif(isset($_GET['Error'])&&($_GET['Error']=='Correo'))
											{echo '<br><p>existe 3 usuario con el mismo correo, por favor coloque otro.</p>';
											header("refresh:3;mostraredit.php?Edit={$_GET['Edit']}");
												}else{echo '';} ?>
			 
			 <tbody>
			
			  <?php
				
			
				
				$result=mysqli_query($conn,"SELECT * FROM user_datos where `IDDATOS`='$id'");
				$result2 = mysqli_query($conn, "SELECT * FROM gender");
				$result3 = mysqli_query($conn, "SELECT * FROM area");
				$mostrar=mysqli_fetch_array($result);
					if ($mostrar == null) {
						header('location:mostraredit.php');
					} else {
						
              ?>
				<br>
				 
					<br>
				 <form action="procesar_editar.php" method="POST">
				 <input type="hidden" value="<?php echo $mostrar['IDDATOS']; ?>" name="IDDATOS">
				  <p>Nombre</p>
				  <input type="text"  value="<?php echo $mostrar['NAME'] ?>" name="NAME">
				  <br>
				  <p>Apellido</p> 
				  <input type="text"  value="<?php echo $mostrar['SURNAME'] ?>" name="SURNAME">
				  <br>
				  <p>Cedula</p>
				  <input type="text"  value="<?php echo $mostrar['CEDULA'] ?>" name="CEDULA">
				  <br>
				  <p>Usuario</p>
				  <input type="text"  value="<?php echo $mostrar['USER'] ?>" name="USER" disabled>
				  <br>
				  <p>Contraseña</p>
				  <div id=password2>
				  <input type="password"  name="PASSWORD">
				</div>
				  <br>
				  <input type="checkbox" id="demo-copy" name="confirmation" >
				  <label for="demo-copy">Contraseña propia</label>
				  <p>Correo</p>
				  <input type="text"  value="<?php echo $mostrar['EMAIL'] ?>" name="EMAIL">
				  <br>
				  <p>Cargo</p> 
				  <select name="IDROLS">
				  <option value="2">Usuario</option>
				  <option value="3">Tecnico</option>
				</select>
				<br>
				  <p>Estado</p> 
				  <select name="LOGIN">
				  <option value="<?php echo $mostrar['LOGIN'];?>">--Defecto--</option> 
				  <option value="1">Habilitado</option>
				  <option value="2">Deshabilitado</option>
				</select>
				   <br>
				   <p>Genero</p>
				   <select name=GENDER>
					<option value="<?php echo $mostrar['GENDER'];?>">--Defecto--</option> 
				   <?php while ($gender = mysqli_fetch_array($result2)) {
						?>
						<option value="<?php echo $gender['ID']; ?>"><?php echo $gender['GENDER']; ?></option>
						<?php }?>
			</select>
				  <br>
				  <p>Area asignada</p> 
				  
				  <select name="ASSIGNED_AREA" class="selectpicker" data-show-subtext="true" data-live-search="true">
				  <option value="<?php echo $mostrar['ASSIGNED_AREA']?>" selected="true">--Defecto--</option>
				  <?php while ($area = mysqli_fetch_array($result3)) {
						?>
						<option value="<?php echo $area['ID_AREA']; ?>"><?php echo $area['AREA']; ?></option>
						<?php }?>
				   </select>
				   <script type=text/javascript>
				 $('.selectpicker').selectpicker({
					style: 'btn-default'
					});</script>
			
			  
			<br>
			  <input type="submit" value="actualizar">
			  
			  </form>
			  <script type="text/javascript">
				document.addEventListener('DOMContentLoaded', function () {
  // Adjunte el detector de eventos `change` al checkbox
  document.getElementById('demo-copy').onchange = toggleBilling;
}, true);

function toggleBilling() {
  // Seleccione los campos de texto de facturación
  var billingItems = document.querySelectorAll('#password2 input[type="password"]');

  // Alternar los campos de texto de facturación
  for (var i = 0; i < billingItems.length; i++) {
    billingItems[i].disabled = !billingItems[i].disabled;
  }
  }
  

</script>
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
													<h2>Menu</h2>
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
															<li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a></li>
															<li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
															<li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
															<li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a></li>
															
														</ul>
													</li>
													<li>
									<span class="opener">Biblioteca digital</span>
										<ul>
										
										<li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de canaima(.PDF)</a></li>
												<li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la canaima(.DOCX)</a></li>
											</ul>
			</li>
													
													<li>
														<a href="mostraredit.php">Gestor de usuario</a>	
													</li>
													<li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
													<li><a href="mostraredit.php?logout=on"><font color="red">cerrar sesion</a></li>
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
		}elseif(isset($_GET['Del'])&& empty($_GET['Edit'])){
			$IDDATOS=$_GET['Del'];
			
			mysqli_query( $conn, "DELETE FROM `user_datos` WHERE `user_datos`.`IDDATOS` = '$IDDATOS'") or die ("error al eliminar");
			
			mysqli_close($conn);
			
			header("location: mostraredit.php");
			
			}elseif(isset($_GET['User'])){
				?>
				<DOPCTYPE html>
				<html>
					<head>
						<title>registrar usuario</title>
						<meta charset="utf-8" />
						<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
						<link rel="stylesheet" href="assets/css/main.css" />
						<link rel="stylesheet" href="input.css">
					</head>
					<body class="is-preload">
					
				
						<!-- Wrapper -->
							<div id="wrapper">
				
								<!-- Main -->
									<div id="main">
										<div class="inner">				
											<!-- Header -->
												
												<?php if(isset($_GET['Error'])&& $_GET['Error']=="Campo"){
														echo "<p style='text-transform: none;font-size:12;padding:12px;'><font color='red'>No se pudo procesar su solicitud, Error en uno o varios campo.</font></p>";
														header('refresh:3; mostraredit.php?User=true');
													} elseif (isset($_GET['Error']) && $_GET['Error'] == "Card") {
						echo "<p style='text-transform: none;font-size:12;padding:12px;'><font color='red'>Ya existe un usuario con ese numero de cedula.Por favor, ingrese otro.</font></p>";
						header('refresh:3; mostraredit.php?User=true');
					} elseif (isset($_GET['Error']) && $_GET['Error'] == "Email") {
						echo "<p style='text-transform: none;font-size:12;padding:12px;'><font color='red'>3 usuario ya estan utilizando ese correo, por favor pruebe con otro.</font></p>";
						header('refresh:3; mostraredit.php?User=true');
					}elseif(isset($_GET['Error']) && $_GET['Error']== "User_use"){
						echo "<p style='text-transform: none;font-size:12;padding:12px;'><font color='red'>Ya existe una cuenta con ese  usuario, intente con otro.</font></p>";
						header('refresh:3; mostraredit.php?User=true');
					}else{echo '';}?>
													<form id="form" action="registrar.php" method="POST">
													   <input type="hidden" name="IDDATOS">
													   <input type="text" id="name" name="name" placeholder=" Nombres" size="20">
                                                       <input type="text" id="surname" name="surname" placeholder="Apellidos">
													 <select name="" id="">
														<option value="v">V</option>
														<option value="">E</option>
													 </select>  <input type="text" id="cedula" name="cedula" placeholder="Cedula" size="20">
													    <select name="" id="">
															<option value="">primaria</option>
															<option value="">bachiller</option>
															<option value="">universitario</option>
															<option value="">otro</option>
														</select>
														<input type="text" namer="oficio" placeholder="Oficio ó Abilidad">
														<input type="text" name="direccion" placeholder="Direccion Completa">
														<input type="text" name="ciudad" placeholder="Ciudad">
														<input type="text" name="municipio" placeholder="Municipio">
														<input type="text" name="parroquia" placeholder="Parroquia">
													    <input type="text" id="user" name="user" placeholder="Ingrese usuario">
													    <input type="password" name="password" placeholder="Ingrese contraseña">
													    <input type="text" name="email" placeholder="Ingrese correo">
													     <select name="idrols">
													        <option value="2">Usuario</option> 
													         <option value="3">Tecnico</option>
													     </select>
													      <select name="login">
													         <option value="1">Habilitado</option>
													          <option value="2">Deshabilitado</option>
													      </select>
													   <select name="gender">
													   <option value=1>Hombre</option>
													   <option value=2>Mujer</option>
													   <option value=3>Otro</option>
													</select>
													   
													
													   <?php $result3 = mysqli_query($conn, "SELECT * FROM area");?>
				  <select name="assgned_area" class="selectpicker" data-show-subtext="true" data-live-search="true">
				  <option value="<?php echo $mostrar['ASSIGNED_AREA']?>" selected="true">--Defecto--</option>
				  <?php while ($area = mysqli_fetch_array($result3)) {
						?>
						<option value="<?php echo $area['ID_AREA']; ?>"><?php echo $area['AREA']; ?></option>
						<?php }?>
				   </select>
				   <script type=text/javascript>
				 $('.selectpicker').selectpicker({
					style: 'btn-default'
					});</script>
													   <br>
				
														<input type="submit" >
													</form>	
													
													<ul class="icons">
														<li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span class="label">twitter</span></a></li>
														<li><a href="https://es-la.facebook.com/IndustriaCanaima/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
														<li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
														
													</ul>
											
																	
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
														<h2>Menu</h2>
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
																<li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de Venezuela</a></li>
																<li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a></li>
																<li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a></li>
																<li><a href="https://calculadorapetro.bt.gob.ve/" target="_blank">calculadora petro</a></li>
																
															</ul>
														</li>
														<li>
									<span class="opener">Biblioteca digital</span>
										<ul>
										
										<li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de canaima(.PDF)</a></li>
												<li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la canaima(.DOCX)</a></li>
											</ul>
			</li>
														<li>
															
														<a href="mostraredit.php">Gestor de usuario</a>	
														</li>
														<li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
														<li><a href="#">siges</a></li>
														<li><a href="mostraredit.php?logout=on"><font color="red">cerrar sesion</a></li>
														
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
				header('location:dashboard.php');
			}
		 }else{
			header('location:dashboard.php');	
		 }

}}}?>	