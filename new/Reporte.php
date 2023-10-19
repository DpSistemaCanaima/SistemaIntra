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


<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content=", Cant.Reportes:">
    <meta name="description" content="">
    <title>Reportes</title>
    <link rel="stylesheet" href="tabla.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="Canaima.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


   
</head>

<body>














   <!-- Sidebar -->
   <div id="sidebar">
                <div class="inner">

                    <!-- Search -->

                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>Administrador<br><?php echo  $_SESSION['Users'][0],' ',$_SESSION['Users'][5];?></h2>

                            <h3>Menu</h3>


                            </ul>
                        </header>
                        <ul>
                            <li><a href="noticias.php">Noticias</a></li>
                           
                            <li><a href="new/Reporte.php">Noticias22</a></li>

                            <li>
                                <span class="opener">solicitudes</span>
                                <ul>
                                    <li><a href="solicitude2.php?RRHH">Recursos Humanos</a></li>
                                    <li><a href="soporteadmin.php?Soporte">Soporte tecnico</a></li>


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
                                    <font color="blue">cerrar sesion
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
   
     
      
        <ul class="menu">

           <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Ingresar</a>
        </ul>
  


      
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informacion adicional</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   





                <div class="u-form u-form-1">

<form action="Reporte.php" method="post" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form"
    style="padding: 15px;">
    <p class="u-align-center u-form-group u-form-text u-text u-text-4"> ID.Reporte<br><?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']=='') {
echo "ninguno";
} else {
echo $Report['ID_REPORT'];
}
?>
    </p>
    <p class="u-align-left u-form-group u-form-text u-text u-text-5">
        <?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']=='') {
echo "Fecha de creación: Ninguno <br>Fecha. culminación: Ninguno <br>Departamento: Ninguno<br> Usuario: Ninguno";
} else {
echo "Fecha de creación: ", $Report['CREATION_DATE'], "<br>Fecha. culminación: ", $Report['DATE_FINAL'], "<br>Departamento: ", $Report['AREA'],"<br>Usuario: ",$Report['NAME']," ",$Report['SURNAME'],"(",$Report['USER'],")",
"<br> Estado: ";
if($Report['STATUS']==1){echo "Activo";}else if($Report['STATUS']==2){echo "Cerrado";}else{echo "En espera";}} ?>
    </p>
    <input type="hidden" name="id" value="<?php echo $Report['ID_REPORT'];?>">
    <div class="u-form-group u-form-select u-label-top u-form-group-3">
        <label for="select-ed2a" class="u-label">Tecnico</label>
        <div class="u-form-select-wrapper"><?php 
    $Tech = mysqli_query($conn, "SELECT * FROM user_datos WHERE IDROLS=3 and LOGIN=1");
echo "<select id='select-ed2a' name='Tecnico' class='u-border-1 u-border-grey-30 u-input u-input-rectangle'>";
    
  
    while($Tech2= mysqli_fetch_array($Tech)){
      ?>
            <option value="<?php echo $Tech2['IDDATOS']; ?>"><?php echo $Tech2['NAME']; ?></option>
            <?php } ?>
            </select>

            <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
            </svg>
        </div>
    </div>
    <div class="u-form-group u-form-select u-label-top u-form-group-4">
        <label for="select-f8d9" class="u-label">Estado</label>
        <div class="u-form-select-wrapper">
            <select id="select-f8d9" name="status"
                class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
                <?php
    if ($id==null || empty($id)){
      echo "<option>Ninguno</option>";
    }else{
    echo "<option value=",$Report['STATUS'],">--Defecto--</option>","<option value='1'>Activo</option>","<option value='2'>Cerrado</option>","<option value='3'>En espera</option>";
    
    
    
  }
    ?>
            </select>
            <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
            </svg>
        </div>
    </div>
    <div class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-5">
        <div class="u-form-radio-button-wrapper">
            <!--<div class="u-input-row">
     <input type="radio" name="Timeout" value="Cierre automact.">
    <label class="u-label" for="radiobutton">Cierre automact.</label>
  </div> 
  <div class="u-input-row">
    <input type="radio" name="Timeout" value="Desactivado">
    <label class="u-label" for="radiobutton">Desactivado</label>
  </div>-->
        </div>
    </div>
    <div class="u-form-group u-form-submit u-label-top">

    </div>
    <?php if ($id==null || empty($id)){

}else{
echo'<input type="submit" name="Guardar" value="Guardar" class=" u-border-none u-btn u-btn-submit u-button-style u-custom-color-2 u-hover-palette-2-light-2 u-btn-5">'; }?>
</div>
</form>
</div>
<p class="u-text u-text-default u-text-6">Descripción</p>
<div
class="u-border-3 u-border-palette-5-light-1 u-container-style u-group u-shape-rectangle u-white u-group-3">
<div class="u-container-layout u-container-layout-3">
    <p class="u-text u-text-default u-text-7"><?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']==''){
echo "<br>Seleccione un reporte.";
}else{

echo $Report['DESCRIPTION'];
} ?></p>
</div>
</div>
<p class="u-text u-text-default u-text-8">Solución</p>
<div
class="u-border-3 u-border-palette-5-light-1 u-container-style u-group u-shape-rectangle u-white u-group-4">
<?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']==''){
echo "<br>Seleccione un reporte.";
}elseif ( empty($Report['SOLUTION']) or $Report['ID_REPORT']==''){
echo "<font color='grey'>Sin solucion todavia</font>";
}else{
echo $Report['SOLUTION'],"<font size='2'color='gray'><br>", $Report['FECHA_SOLUTION'],"</font>";

} ?>
</div>
<div class="u-expanded-width u-gradient u-shape u-shape-rectangle u-shape-1"></div>
</section>
</body>

</html><?php 
}
}else{
header('location:../dashboard.php');}}}}?>






                </div>
            </div>
        </div>
    </div>








       