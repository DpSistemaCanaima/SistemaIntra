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

                        <input type="text" id="name" name="name" placeholder="Nombre" size="20">

                        <input type="text" id="surname" name="surname" placeholder="Apellido">

                        <select name="nacionalidad" id="">
                            <option value="1">V</option>
                            <option value="2">E</option>
                        </select>
                        <input type="text" id="cedula" name="cedula" placeholder="Cedula" size="20">
                        <select name="nivel" id="nivel">
                            <option value="1">primaria</option>
                            <option value="2">bachiller</option>
                            <option value="3">universitario</option>
                            <option value="4">otro</option>
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
                        <select name="assgned_area" class="selectpicker" data-show-subtext="true"
                            data-live-search="true">
                            <option value="<?php echo $mostrar['ASSIGNED_AREA']?>" selected="true">--Defecto--</option>
                            <?php while ($area = mysqli_fetch_array($result3)) {
                        ?>
                            <option value="<?php echo $area['ID_AREA']; ?>"><?php echo $area['AREA']; ?></option>
                            <?php }?>
                        </select>


                        <h2>Tienes hijos </h2>


                        <input type="radio" name="gender" class="i-radio" value="si"> Si
                        <input type="radio" name="gender" class="i-radio" value="no"> No<br>
                        <br>

                        <input type="number" name="numero_de_hijos" class="i-text" placeholder="Numero de hijos">
                        <input type="text" name="nombre_y_apellido" class="i-text" placeholder="Nombre del ñiño">
                        <input type="date" name="fecha_de_nacimiento" class="i-text"
                            placeholder="fecha de nacimiento"><br>

                        <br>
                        <script type=text/javascript>
                        $('.selectpicker').selectpicker({
                            style: 'btn-default'
                        });
                        </script>
                        <br>

                        <input type="submit">
                    </form>
                    <br>

                    <ul class="icons">
                        <li><a href="https://twitter.com/ind_canaima" class="icon brands fa-twitter"><span
                                    class="label">twitter</span></a></li>
                        <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/ind_canaima/" class="icon brands fa-instagram"><span
                                    class="label">Instagram</span></a></li>

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
                            <li><a href="noticias.php">noticias</a></li>

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
                            <li><a href="#">siges</a></li>
                            <li><a href="mostraredit.php?logout=on">
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


