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
          
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
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
                      
                    
                $sql = "SELECT  u.IDDATOS, u.NAME, u.SURNAME, u.CEDULA, u.USER, u.GENDER, u.PASSWORD, u.EMAIL, u.IDROLS, u.LOGIN, a.AREA FROM user_datos AS u 
                 INNER JOIN area AS a ON u.ASSIGNED_AREA = a.ID_AREA  WHERE IDDATOS NOT IN ('$IDDATOS1')";  

                       
                    $result =mysqli_query($conn,$sql);
                         
                      
                      while ($mostrar = mysqli_fetch_assoc($result)){?>
                            <tr>
                                <th><?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?></th>
                                <th><?php echo $mostrar ['CEDULA'] ?></th>
                                <th><?php echo $mostrar ['AREA'] ?></th>

                                <th>
                                           
                                 <!------Editar------>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-warning boton dropdown-toggle "
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Opciones
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="editusuario.php?Edit=<?php echo $mostrar['IDDATOS'];?>"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                    </svg> Editar</a></li>
                                            <li><a class="dropdown-item"
                                                    href="editusuario.php?Edit=<?php echo $mostrar['IDDATOS'];?>"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                    </svg> Eliminar</a></li>
                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                        <path
                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                                    </svg> Ver Mas</a></li>
                                        </ul>
                                    </div>
                                   
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