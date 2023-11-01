<?php 
 
  include('cone.php');
  session_start();
  if (!isset($_SESSION['IDDATOS'])) {
    header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$ROL = $_SESSION['IDROLS'];
$CEDULA = $_SESSION['CEDULA'];


    if(empty($_GET['Edit'])&& empty($_GET['Del']) && empty($_GET['USER'])){

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
    <link rel="stylesheet" href="oculto.css">
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

               

                <?php
                        include "modalregistrarrhh.php";
                    ?>

                <br>

                <table id="example" class=" table-bordered  " style="width:100%; height: 5px; ">
                    <thead class="thead">
                        <tr>

                            <th class="text" scope="col">Nombre y Apellido</th>
                            <th class="text" scope="col">Cedula</th>
                            <th class="text" scope="col">Oficina</th>
                            <th class="text" scope="col">Opciones</th>



                        </tr>
                    </thead>
                    <tbody>
                        <?php
                   
                       
                      
                    
                   $sql = "SELECT  u.IDDATOS, grado.grado, n.nacionalidad, u.NAME, u.SURNAME, u.FECHA , u.NUMERO_DE_HIJOS, u.NOBRE_Y_APELLIDO, u.FECHA_DE_NACIMIENTO , u.ABILIDAD_U_OFICIO, u.DIRECCION, u.CIUDAD, u.MUNICIPIO, u.PARROQUIA, u.CEDULA, u.USER, u.PASSWORD, u.EMAIL, a.AREA, r.PRIVILEGE, l.TIPO_USUARIOS, g.GENDER, u.foto FROM user_datos AS u 
                   INNER JOIN area AS a ON u.ASSIGNED_AREA = a.ID_AREA  
                   INNER JOIN rols AS r ON u.IDROLS = R.IDROLS
                   INNER JOIN gender AS g ON u.GENDER = g.ID
                   INNER JOIN login AS l ON u.LOGIN = l.TIPO
                   INNER JOIN nacionalida As n ON u.NACIONALIDAD = n.ID_NACIONALIDA
                   INNER JOIN grado As grado ON u.GRADO_DE_EDUCACION = grado.ID_GRADO";  


                       
                    $result = mysqli_query($conn,$sql);
                         
                      
                      while ($mostrar = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <th><?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?></th>
                            <th><?php echo $mostrar ['CEDULA'] ?></th>
                            <th><?php echo $mostrar ['AREA'] ?></th>

                            <th >

                                <!------Editar------>
                                <div class="btn-group dropend mx-auto" style="width: 50px; margin-top: 1em;">
                                    <button type="button" class="btn  btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Option
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- Dropdown menu links -->
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $mostrar['CEDULA'];?>"
                                                 ><img
                                                    src="img/svg/editar.svg " alt="Industrias Canaima" width="15"
                                                    height="15"> Editar</a>
                                        </li>
                                        <li> <a class="dropdown-item btn btn-danger"
                                                href="eliminarr.php?CEDULA=<?php echo $mostrar['CEDULA'];?>">
                                                <img src="img/svg/eliminar.svg " alt="Industrias Canaima" width="15"
                                                    height="15"> Eliminar</a>
                                                 
                                                    <li> <a class="dropdown-item btn btn-danger" href="gestion_rrhh.php?User=true" 
                                            data-bs-toggle="modal" data-bs-target="#registrarusuario"><img
                                                    src="img/svg/person-add.svg " alt="Industrias Canaima" width="15"
                                                    height="15">Registrar</a>
                                        </li>
                                        <li><a class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal<?php echo $mostrar['IDDATOS']; ?>"
                                                href="#"><img src="img/svg/eye-fill.svg " alt="Industrias Canaima" width="15"
                                                    height="15">Ver mas</a></li>
                                    </ul>
                                </div>


                            </th>

                        </tr>
                        <?php

                             include "editusuario.php";
                          
                           
                     
                    ?>

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
                <?php
        include('cone.php');
        $modal="SELECT IDDATOS,foto FROM user_datos WHERE IDDATOS = 'IDDATOS' ";
        $resultado = mysqli_query($conn,$modal);
        $ver = mysqli_fetch_assoc($resultado);{
                   
   ?>
                <!-- Menu -->
                <nav id="menu">
                    <header class="major">


                        <a href="cambiarfoto.php" class="btn btn-primary"  style=" border-radius:30px;">+
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
                    
                       $consulta = mysqli_query($conn, "SELECT USER , foto FROM user_datos WHERE CEDULA = '$CEDULA';");
                       $valores = mysqli_fetch_array($consulta);
                       $foto = $valores['foto'];
                        ?>
                        <img class="perfil" src="<?php echo $foto; ?>" width="200px">

                        <h2>Recurso H. <?php  echo $NAME; ?></h2>
                                  
                                </header>
                                <ul>
                                    <li><a href="rrhh.php">Noticias</a></li>
                                    <li><a href="versolicitud.php">ver solicitudes</a></li>


                                    <li>
                                        <span class="opener">solicitudes</span>
                                        <ul>
                                            <li><a href="soporte_rrhh.php">Soporte</a></li>


                                        </ul>
                                    </li>
                                    <li>
                                        <span class="opener">web</span>
                                        <ul>
                                            <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de
                                                    Venezuela</a>
                                            </li>
                                            <li><a href="https://www.eluniversal.com/" target="_blank"> El universal</a>
                                            </li>
                                            <li><a href="https://www.patria.org.ve" target="_blank">pagina patria</a>
                                            </li>
                                            <li><a href="https://calculadorapetro.bt.gob.ve/"
                                                    target="_blank">calculadora
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
                                        <a href="gestion_rrhh.php">Gestor de usuario</a>
                                    </li>
                                    <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>



                                    <li><a href="logout.php">
                                            <font color="blue">cerrar sesion
                                        </a></li>
                                </ul>
                            </nav>


            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="bootstrap.min.js"></script>
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

        }
    
?>