<?php
    require "conexion.php";

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
                                <input type="text" value="<?php echo $mostrar['NAME'] ?>" name="NAME">
                                <br>
                                <p>Apellido</p>
                                <input type="text" value="<?php echo $mostrar['SURNAME'] ?>" name="SURNAME">
                                <br>
                                <p>Cedula</p>
                                <input type="text" value="<?php echo $mostrar['CEDULA'] ?>" name="CEDULA">
                                <br>
                                <p>Usuario</p>
                                <input type="text" value="<?php echo $mostrar['USER'] ?>" name="USER" disabled>
                                <br>
                                <p>Contraseña</p>
                                <div id=password2>
                                    <input type="password" name="PASSWORD">
                                </div>
                                <br>
                                <input type="checkbox" id="demo-copy" name="confirmation">
                                <label for="demo-copy">Contraseña propia</label>
                                <p>Correo</p>
                                <input type="text" value="<?php echo $mostrar['EMAIL'] ?>" name="EMAIL">
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
                                    <option value="<?php echo $gender['ID']; ?>"><?php echo $gender['GENDER']; ?>
                                    </option>
                                    <?php }?>
                                </select>
                                <br>
                                <p>Area asignada</p>

                                <select name="ASSIGNED_AREA" class="selectpicker" data-show-subtext="true"
                                    data-live-search="true">
                                    <option value="<?php echo $mostrar['ASSIGNED_AREA']?>" selected="true">--Defecto--
                                    </option>
                                    <?php while ($area = mysqli_fetch_array($result3)) {
                        ?>
                                    <option value="<?php echo $area['ID_AREA']; ?>"><?php echo $area['AREA']; ?>
                                    </option>
                                    <?php }?>
                                </select>
                                <script type=text/javascript>
                                $('.selectpicker').selectpicker({
                                    style: 'btn-default'
                                });
                                </script>


                                <br>
                                <input type="submit" value="actualizar">

                            </form>
                            <script type="text/javascript">
                            document.addEventListener('DOMContentLoaded', function() {
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

                        <li>
                            <a href="mostraredit.php">Gestor de usuario</a>
                        </li>
                        <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>
                        <li><a href="mostraredit.php?logout=on">
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

?>