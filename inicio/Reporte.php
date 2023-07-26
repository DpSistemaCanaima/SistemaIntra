<script type="text/javascript">
function disableIE() {
  if (document.all) {
      return false;
  }
}
function disableNS(e) {
  if (document.layers || (document.getElementById && !document.all)) {
      if (e.which==2 || e.which==3) {
          return false;
      }
  }
}
if (document.layers) {
  document.captureEvents(Event.MOUSEDOWN);
  document.onmousedown = disableNS;
} 
else {
  document.onmouseup = disableNS;
  document.oncontextmenu = disableIE;
}
document.oncontextmenu=new Function("return false");

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
    <link rel="stylesheet" href="screen1.css" media="screen">
<link rel="stylesheet" href="CC.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Reportes">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Reportes.html" data-home-page-title="Reportes" class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-gradient u-header u-sticky u-sticky-3a7f u-header" id="sec-bf5c"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <nav class=" u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-3" href="../dashboard.php" style="padding: 2px 20px;">Principal</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-3" href="Reporte.php?logout=on" style="padding: 2px 20px 2px 20px;">Cerrar sesion</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../dashboard.php">Principal</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Reporte.php?logout=on">Cerrar sesion</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-5137">
      <div class="u-container-style u-group u-image u-shape-rectangle u-image-1" data-image-width="985" data-image-height="462">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-text u-text-default u-text-1"><?php echo $name; ?></h1>
          <h2 class="u-text u-text-default u-text-2">Activo:<?php echo $cantidad;?>  En espera:<?php echo $cantidad1;?></h2>
        </div>
      </div>
      <a href="List/list.php?hold=true" class="u-active-custom-color-2 u-border-2 u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-radius-11 u-white u-btn-1" target="barra1">En espera</a>
      <a href="List/list.php?Active=true" class="u-active-custom-color-2 u-border-2 u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-radius-11 u-white u-btn-2" target="barra1">Activo</a>
      <a href="List/list.php?All=true" class="u-active-custom-color-2 u-border-2 u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-radius-11 u-white u-btn-3" target="barra1">Inicio</a>
      <a href="List/list.php?close=true" class="u-active-custom-color-2 u-border-2 u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-radius-11 u-white u-btn-4" target="barra1">Cerrado</a>
      <div class="u-border-3 u-border-palette-5-light-1 u-container-style u-group u-shape-rectangle u-white u-group-2">
      <iframe name="barra1" class="u-container-layout u-container-layout-2" src="./List/list.php"></iframe>
      </div>
      <h3 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-hidden-xs u-text u-text-default u-text-3">Informacion adicional</h3>
      <div class="u-form u-form-1">

        <form action="Reporte.php" method="post" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" >
          <p class="u-align-center u-form-group u-form-text u-text u-text-4"> ID.Reporte<br><?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']=='') {
        echo "ninguno";
        } else {
          echo $Report['ID_REPORT'];
        }
          ?>
          </p>
          <p class="u-align-left u-form-group u-form-text u-text u-text-5"><?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']=='') {
        echo "Fecha de creación: Ninguno <br>Fecha. culminación: Ninguno <br>Departamento: Ninguno<br> Usuario: Ninguno";
        } else {
        echo "Fecha de creación: ", $Report['CREATION_DATE'], "<br>Fecha. culminación: ", $Report['DATE_FINAL'], "<br>Departamento: ", $Report['AREA'],"<br>Usuario: ",$Report['NAME']," ",$Report['SURNAME'],"(",$Report['USER'],")",
        "<br>Tecnico: ", $Report1['NAME']," ",$Report1['SURNAME'],"(",$Report1['USER'],")", "<br> Estado: ";
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
              
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
            </div>
          </div>
          <div class="u-form-group u-form-select u-label-top u-form-group-4">
            <label for="select-f8d9" class="u-label">Estado</label>
            <div class="u-form-select-wrapper">
              <select id="select-f8d9" name="status" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">
                <?php
                if ($id==null || empty($id)){
                  echo "<option>Ninguno</option>";
                }else{
                echo "<option value=",$Report['STATUS'],">--Defecto--</option>","<option value='1'>Activo</option>","<option value='2'>Cerrado</option>","<option value='3'>En espera</option>";
                
                
                
              }
                ?>
              </select>
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
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
            
          </div> <?php if ($id==null || empty($id)){
 
          }else{
            echo'<input type="submit" name="Guardar" value="Guardar" class=" u-border-none u-btn u-btn-submit u-button-style u-custom-color-2 u-hover-palette-2-light-2 u-btn-5">'; }?>
                </div>
        </form>
      </div>
      <p class="u-text u-text-default u-text-6">Descripción</p>
      <div class="u-border-3 u-border-palette-5-light-1 u-container-style u-group u-shape-rectangle u-white u-group-3">
        <div class="u-container-layout u-container-layout-3">
          <p class="u-text u-text-default u-text-7"><?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']==''){
            echo "<br>Seleccione un reporte.";
          }else{
         
            echo $Report['DESCRIPTION'];
          } ?></p>
        </div>
      </div>
      <p class="u-text u-text-default u-text-8">Solución</p>
      <div class="u-border-3 u-border-palette-5-light-1 u-container-style u-group u-shape-rectangle u-white u-group-4">
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