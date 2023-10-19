<?php

  include('conexion.php') ;

  $time=['DATE_FINAL'];
  $time2=['CREATION_DATE'];
  date_default_timezone_set('America/Caracas');
  $actual=date("Y-m-d");

session_start();

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$ROL = $_SESSION['IDROLS'];

 
  
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="thead.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <img src="img/1.jpg" width="100%" height="210px">

                <br>
                <br>

                <h5> Fecha actual:<?php if($time>$actual){
          echo '<font color="blue">',$actual,'</font>';
      }elseif($time==$actual){
        echo '<font color="green">',$actual,'</font>';
        }else{
          echo '<font color="red">',$actual,'</font>';}?></h5>

                <?php 

       

       $sql="SELECT ID_REPORT FROM report";
       $result =mysqli_query($conn,$sql);
     
  
 
    ?>
                <strong>Solucion</strong><br>
                <br>
                <form action="solucion.php" method="POST">
                    <?php $mostrar = mysqli_fetch_assoc($result);{ ?>
                    <input type="hiddeb" value="<?php echo $mostrar['ID_REPORT']; ?>" name="ID_REPORT">
                    <?php } ?>
                    <div class="input-group">

                        <input type="date" name="fecha_solution">
                        <textarea class="form-control" name="solution" aria-label="With textarea"
                            placeholder="Limite de palabras 100"></textarea>

                    </div>
                    <input type="submit" class="btn btn-outline-primary">
                </form>


            </div>
        </div>




    </div>
    </div>

   <!-- Sidebar -->
   <div id="sidebar">
            <div class="inner">

                <!-- Search -->

             <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <?php
      
        $modal="SELECT IDDATOS,foto FROM user_datos WHERE IDDATOS = 'IDDATOS' ";
        $resultado = mysqli_query($conn,$modal);
        $ver = mysqli_fetch_assoc($resultado);{
                   
   ?>
                        
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
	 			
                                        <h2>Tecnico <?php  echo $NAME; ?></h2>

                                        <h3>Menu</h3>
                                    </header>
                                    <ul>
                                        <li><a href="../tecnico.php">noticias</a></li>


                                        <li>
                                            <span class="opener">solicitudes</span>
                                            <ul>
                                                <li><a href="../rrhh_tecnico.php">Recursos Humanos</a></li>


                                            </ul>
                                        </li>
                                        <li>
                                            <span class="opener">web</span>
                                            <ul>
                                                <li><a href="https://bdvenlinea.banvenez.com" target="_blank">Banco de
                                                        Venezuela</a>
                                                </li>
                                                <li><a href="https://www.eluniversal.com/" target="_blank"> El
                                                        universal</a></li>
                                                <li><a href="https://www.patria.org.ve" target="_blank">pagina
                                                        patria</a></li>
                                                <li><a href="https://calculadorapetro.bt.gob.ve/"
                                                        target="_blank">calculadora petro</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <span class="opener">Biblioteca digital</span>
                                            <ul>

                                                <li><a href="./pdf/103_Manual_Canaimit.pdf" target="_blank">Manual de
                                                        canaima(.PDF)</a>
                                                </li>
                                                <li><a href="./pdf/para_el_usuario.docx" target="_blank">Cuidado de la
                                                        canaima(.DOCX)</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://mail.industriacanaima.gob.ve/">Correo</a></li>

                                        <li><a href="reporte/reporte.php">Reporte</a></li>
                                        <li><a href="../logout.php">
                                                <font color="blue">cerrar sesion
                                            </a></li>
                                        <ul class="icons">
                                            <li><a href="https://twitter.com/ind_canaima"
                                                    class="icon brands fa-twitter"><span
                                                        class="label">twitter</span></a></li>
                                            <li><a href="https://es-la.facebook.com/IndustriaCanaima/"
                                                    class="icon brands fa-facebook-f"><span
                                                        class="label">Facebook</span></a></li>
                                            <li><a href="https://www.instagram.com/ind_canaima/"
                                                    class="icon brands fa-instagram"><span
                                                        class="label">Instagram</span></a></li>

                                        </ul>
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