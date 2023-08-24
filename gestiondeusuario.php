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
    <link rel="stylesheet" href="bu.css">
    <link rel="stylesheet" href="usuario.css">
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
                <br>
                <a href="gestiondeusuario.php?User=true" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#registrarusuario"
                    style="border-bottom: none; font-size:30px; display: block; position: absolute; left: 90%; top:0">+</a>
                <br><br>

                <?php
                        include "modalregistrarusuario.php";
                    ?>

                <br>

                <table id="example" class="table-primary table-bordered " style="width:100%">
                    <thead class="thead">
                        <tr>

                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Oficina</th>
                            <th scope="col">Opciones</th>



                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $IDDATOS1=$_SESSION['Users'][4];
                        //  $sql="SELECT user_datos.IDDATOS,user_datos.NAME,user_datos.SURNAME,user_datos.CEDULA,user_datos.USER,user_datos.GENDER,user_datos.PASSWORD,user_datos.EMAIL,user_datos.IDROLS,user_datos.LOGIN, area.AREA FROM user_datos INNER JOIN area on user_datos.ASSIGNED_AREA=area.ID_AREA WHERE IDDATOS NOT IN ('$IDDATOS1')";
                      
                    
                $sql = "SELECT  u.IDDATOS, u.NAME, u.SURNAME, u.OFICIO, u.DIRECCION, u.CIUDAD, u.MUNICIPIO, u.PARROQUIA, u.CEDULA, u.USER, u.PASSWORD, u.EMAIL, a.AREA, r.PRIVILEGE, n.NACINALIDAD, l.TIPO_USUARIOS, g.GENDER FROM user_datos AS u 
                 INNER JOIN area AS a ON u.ASSIGNED_AREA = a.ID_AREA  
                 INNER JOIN rols AS r ON u.IDROLS = r.IDROLS
                 INNER JOIN nacionalidad AS n ON u.NACIONALIDAD = n.ID_NACIONALIDAD 
                 INNER JOIN gender AS g ON u.GENDER = g.ID
                 INNER JOIN login AS l ON u.LOGIN = l.TIPO WHERE IDDATOS NOT IN ('$IDDATOS1')";  

                       
                    $result =mysqli_query($conn,$sql);
                         
                      
                      while ($mostrar = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <th><?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?></th>
                            <th><?php echo $mostrar ['CEDULA'] ?></th>
                            <th><?php echo $mostrar ['AREA'] ?></th>

                            <th>

                                <!------Editar------>
                                <div class="btn-group dropend">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Opciones
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- Dropdown menu links -->
                                        <li><a class="dropdown-item"
                                                href="editusuario.php?Edit=<?php echo $mostrar['IDDATOS'];?>"><img
                                                                src="img/svg/editar.svg " alt="Industrias Canaima"
                                                                width="15" height="15"> Editar</a>
                                        </li>
                                        <li> <a class="dropdown-item btn btn-danger" href="eliminarr.php?IDDATOS=<?php echo $mostrar['IDDATOS'];?>">
                                                            <img src="img/svg/eliminar.svg " alt="Industrias Canaima" width="15" height="15"> Eliminar</a>
                                        </li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal<?php echo $mostrar['IDDATOS'];?>" href="#">Ver mas</a></li>
                                    </ul>
                                </div>
                                <!---  <div class="btn-group dropend">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">

                                        Opciones
                                    </button>
                                    <ul class="dropdown-menu">
                                        <button><a href="editusuario.php?Edit=<?php echo $mostrar['IDDATOS'];?>">

                                                Editar</a></button>

                                        <form action="eliminarr.php" method="POST">
                                            <input type="hidden" value="<?php echo $mostrar['IDDATOS'];?>"
                                                name="IDDATOS">

                                            <input type="submit" value="Eliminar">







                                        </form>

                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal">

                                            Ver Mas</button>
                                    </ul>
                                </div>---->

                            </th>

                        </tr>

                        <?php

                            include "modalvermas.php";
                           
                      }
                    ?>
                </table>


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
                        <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
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
                
            
            }elseif(isset($_GET['Edit'])&& empty($_GET['Del'])){//editar usuario
                include "editusuario.php";

        }elseif(isset($_GET['Del'])&& empty($_GET['Edit'])){
            $IDDATOS=$_GET['Del'];
            
            mysqli_query( $conn, "DELETE FROM `user_datos` WHERE `user_datos`.`IDDATOS` = '$IDDATOS'") or die ("error al eliminar");
            
            mysqli_close($conn);
            
            header("location: mostraredit.php");
            
            }elseif(isset($_GET['User'])){
               include "registrodeusuario.php";
            }else{
                header('location:dashboard.php');
            }
         }else{
            header('location:dashboard.php');   
         }

}}}?>