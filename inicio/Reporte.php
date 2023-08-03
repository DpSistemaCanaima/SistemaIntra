<script type="text/javascript">
function disableIE() {
    if (document.all) {
        return false;
    }
}

function disableNS(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3) {
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = disableNS;
} else {
    document.onmouseup = disableNS;
    document.oncontextmenu = disableIE;
}
document.oncontextmenu = new Function("return false");
</script>
<?php

session_start();
 include('conexion.php');
if (isset($_GET['logout'])&& $_GET['logout']=="on"){
	session_destroy();
	header('location:../index.php');
}else{
  if ($_SESSION['Users'][4]== null){//si el usuario inicio sesion
    header('location: ../index.php');
}else{
    if ($_SESSION['Users'][2]== 2){//Si el usuario esta habilitado o no
      header("location:../index.php");
    }else{
		if ($_SESSION['Users'][1]== 3){
$name=$_SESSION['Users'][0];
$ID=$_SESSION['Users'][4];
$search=mysqli_query($conn,"SELECT * FROM `report` WHERE STATUS=1");
$cantidad=mysqli_num_rows($search);
$search1=mysqli_query($conn,"SELECT * FROM `report` WHERE STATUS=3");
$cantidad1=mysqli_num_rows($search1);

if (isset($_POST['Guardar'])&& ($_POST['Guardar']=="Guardar")){//guardar solicitud
  $Id=$_POST['id'];
  $Tecnico=$_POST['Tecnico'];
  $Status=$_POST['status'];
  if($_POST['status']==2){
    setlocale(LC_TIME,"es_ES");
    $Timer=strftime("%G-%m-%d");
    mysqli_query($conn, "UPDATE `report` SET `ID_NAME`='$Tecnico',`STATUS`='$Status',`FECHA_SOLUTION`='$Timer' WHERE ID_REPORT='$Id'");
header("refresh:2;Reporte.php");
  echo "<p><CENTER>reporte modificado</CENTER></p>";
  }else{
  $Status=$_POST['status'];
  mysqli_query($conn, "UPDATE `report` SET `ID_NAME`='$Tecnico',`STATUS`='$Status',`FECHA_SOLUTION`=null WHERE ID_REPORT='$Id'");
  header("refresh:2;Reporte.php");
  echo "<p><CENTER>reporte modificado</CENTER></p>";

  
 
}
  

}else{

if(empty($_GET['Report']) && ($_GET['Report']=null)){
}else{
  $id=$_GET['Report'];
  
$Report = mysqli_query($conn, "SELECT report.ID_REPORT,report.TITLE,user_datos.NAME,user_datos.SURNAME,user_datos.USER,area.AREA,report.ID_NAME,report.DESCRIPTION,report.CREATION_DATE,report.DATE_FINAL,report.FECHA_SOLUTION,report.STATUS,report.SOLUTION FROM report INNER JOIN user_datos ON(report.User_send=user_datos.IDDATOS)  INNER JOIN  area ON(user_datos.ASSIGNED_AREA=area.ID_AREA )WHERE ID_REPORT='$id'");
$Report1 = mysqli_query($conn, "SELECT user_datos.NAME,user_datos.SURNAME,user_datos.USER FROM report INNER JOIN user_datos ON(report.ID_NAME=user_datos.IDDATOS) WHERE ID_REPORT='$id'");
$Report = mysqli_fetch_assoc($Report);
$Report1 = mysqli_fetch_assoc($Report1);
}
?>

<DOPCTYPE html>
    <html>

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="cla.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Inicio</title>
        <link rel="stylesheet" href="style.css">
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
                    <header >
                       <img src="images/Salto-Angel.jpg"  height="400px" width="100%" alt="">
                    </header>



                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-12">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col"> <a class="btn btn-outline-danger"  
                                                     target="_parent"  href="list.php?All=true">Inicio</a></th>
                                            <th scope="col"> <a class="btn btn-outline-danger"
                                           target="_parent"    href="list.php?Active=true">Activo</a></th>
                                            <th scope="col"><a class="btn btn-outline-danger"
                                          target="_parent"    href="list.php?hold=true">En espera</a></th>

                                            <th scope="col"><a href=""><a class="btn btn-outline-danger"
                                            target="_parent"     href="list.php?close=true">Cerrado</a></a></th>
                                                        
                                        </tr>
                                    </thead>
                                    <tbody>


                






                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                    <?php include('list.php');  ?>

                    <!-- Section -->



                </div>
            </div>

            <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                    <nav id="menu">
                        <header class="major">
                            <h2>Administrador<br></h2>

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
                                <li><a href="https://www.instagram.com/ind_canaima/"
                                        class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
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
}
}else{
  header('location:../dashboard.php');}}}}?>