<?php

include('cone.php');

  session_start();
if (!isset($_SESSION['IDDATOS'])) {
       header("Location: index.php");
   }
   
   $USER = $_SESSION['USER'];
   $NAME = $_SESSION['NAME'];
   $ROL = $_SESSION['IDDATOS'];
				
               
				?>
<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <title>Inicio</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="bu.css">
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="oculto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
</head>

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

                  
                <table id="example" class=" table-bordered " style="width:100%">
                    <thead class="thead">
                        <tr>

                        <th class="text">Nombre y Apellido</th>

                          <th class="text">Cédula</th>
                          <th class="text">Solicitudes</th>
                              <th class="text">Opciones</th>



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

                            
                                    <a href="cambiarfoto.php" class="btn btn-primary">+
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

                                    <h2>RRHH <?php  echo $NAME; ?></h2>
                                    <h3>Menu</h3>
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

                            <!-- Section -->


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