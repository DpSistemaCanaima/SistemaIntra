<?php 
session_start();

require_once('../../../conexion.php');

if ($_SESSION['Users'][4]== null){//si el usuario inicio sesion
  header('location: index.php');
}else{
  if ($_SESSION['Users'][2]== 2){//Si el usuario esta habilitado o no
    header("location:index.php");
  }else{
  if ($_SESSION['Users'][1]== 3){
    ?><script type="text/javascript">function disableIE() {
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
    </script><?php
if(isset($_POST['solucion'])){
  if(empty($_POST['solucion'])){
    ?><script>
    var yes=alert('El campo, esta vacio');
    if(yes=true){
      window.location.href="intro.php";
    }</script><?php
    }else{
      $identy=$_POST['id'];
      $solucion=$_POST['solucion'];
      mysqli_query($conn,"UPDATE `report` SET `STATUS`= 2,`SOLUTION` = '$solucion'  WHERE `ID_REPORT`='$identy'");
      echo "Reporte cerrado<br><a href='../../index.php' target='_parent'>aceptar</a>";
    }
  }else{
if(empty($_GET['Id']) and (empty($_GET['reporte']))){
  echo "Bienvenido al sistema<br>por favor, toca un reporte para verificar los datos";
}elseif(isset($_GET['Id']) and empty($_GET['reporte'])){
  $secure=$_GET['Id'];
  $secure=mysqli_query($conn,"SELECT ID_NAME FROM `report` WHERE ID_REPORT='$secure'");
  $secure2=mysqli_fetch_assoc($secure);
if(!$secure2){
  echo "este reporte no es tuyo";
     }else{
    $report=$_GET['Id'];
    $name=$_SESSION['Users'][0];
    $ID=$_SESSION['Users'][4];
    $search=mysqli_query($conn,"SELECT report.TITLE,report.User_send,report.DESCRIPTION,report.CREATION_DATE,report.DATE_FINAL, level.LEVEL FROM `report` INNER join `level` ON (level.ID_LEVEL=report.ID_LEVEL) WHERE ID_REPORT='$report'");
    $search1=mysqli_fetch_assoc($search);
    $search3=mysqli_query($conn,"SELECT user_datos.NAME,user_datos.SURNAME FROM `report` INNER join `user_datos` ON (user_datos.IDDATOS=report.User_send) WHERE ID_REPORT='$report'");
    $search2=mysqli_fetch_assoc($search3);
    $time=$search1['DATE_FINAL'];
    $time2=$search1['CREATION_DATE'];
    date_default_timezone_set('America/Caracas');
    $actual=date("Y-m-d");
?>

  <!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="<id report>">
    <meta name="description" content="">
    <title>Report</title>
    <link rel="stylesheet" href="init.css" media="screen">
<link rel="stylesheet" href="Reportes.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Report">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Report.html" data-home-page-title="Report" class="u-body u-xl-mode" data-lang="es" style="padding: 20px,">
    <section class="u-clearfix u-section-1" id="sec-4f84">
      <h1 class="u-text u-text-default u-text-1"><?php echo $report ?></h1>
      <h3 class="u-text u-text-default u-text-2"><?php echo $search2['NAME']," ",$search2['SURNAME']; ?></h3>
      <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
      <h3 class="u-text u-text-default u-text-3">Fecha de creación: <?php echo $time2;?></h3>
      <h3 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-4">Fecha final: <?php if($time>$actual){
          echo '<font color="blue">',$time,'</font>';
      }elseif($time==$actual){
        echo '<font color="green">',$time,'</font>';  
        }else{
          echo '<font color="red">',$time,'</font>';
        }?></h3>
      <h3 class="u-text u-text-default u-text-5">nivel.Alerta:<?php if($search1['LEVEL']=="Urgente"){
          echo '<font color="red">',$search1['LEVEL'],'</font>';
        }elseif($search1['LEVEL']=="Alta"){
          echo '<font color="red">',$search1['LEVEL'],'</font>';
        }elseif($search1['LEVEL']=="Normal"){
          echo '<font color="green">',$search1['LEVEL'],'</font>';
        }elseif($search1['LEVEL']=='Baja'){
          echo '<font color="blue">',$search1['LEVEL'],'</font>';
        }?></h3>
      <h3 class="u-text u-text-default u-text-6">Descripción:<?php echo "<br>", $search1['DESCRIPTION'];?></h3>
      <div class="u-form u-form-1">
        <form action="intro.php?<?php echo $report;?>" class="u-clearfix u-form-spacing-21 u-form-vertical u-inner-form" method="post" name="form" style="padding: 0px;">
          <input type="hidden" name="formServices" value="">
        </form>
      </div>
      <div class="u-form u-form-2">
        <form action="intro.php?reporte=<?php echo $report;?>" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="post" name="form-1" style="padding: 10px;">
          <div class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-right-xs u-form-group u-form-submit">
            <a href="intro.php?reporte=<?php echo $report;?>" class="u-btn u-btn-submit u-button-style u-btn-1">Enviar</a>
            <input type="submit" name="continue" value="submit" class="u-form-control-hidden">
          </div>

        </form>
      </div>
    </section>
</body></html>
  <?php
  }
  }elseif(isset($_GET['reporte'])){
    $secure=$_GET['reporte'];
  $secure=mysqli_query($conn,"SELECT ID_NAME FROM `report` WHERE ID_REPORT='$secure'");
  $secure=mysqli_fetch_assoc($secure);
if(!$secure){
  
  echo "este reporte no es tuyo";
    
}else{
    $report=$_GET['reporte'];
    $name=$_SESSION['Users'][0];
    $ID=$_SESSION['Users'][4];
    $search=mysqli_query($conn,"SELECT * FROM `report` WHERE ID_REPORT='$report'");
    $search1=mysqli_fetch_assoc($search);
    $time=$search1['DATE_FINAL'];
    $time2=$search1['CREATION_DATE'];
    date_default_timezone_set('America/Caracas');
    $actual=date("Y-m-d");
  
  ?>
  <!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="<id report>">
    <meta name="description" content="">
    <title>Solucion</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Solucion.css" media="screen">
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
    <meta property="og:title" content="Solucion">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es">
    <section class="u-clearfix u-section-1" id="sec-4f84">
      <h1 class="u-text u-text-default u-text-palette-1-base u-text-1"><?php echo $report;?></h1>
      <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
      <h3 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2"> Fecha actual:<?php if($time>$actual){
          echo '<font color="blue">',$actual,'</font>';
      }elseif($time==$actual){
        echo '<font color="green">',$actual,'</font>';
        }else{
          echo '<font color="red">',$actual,'</font>';}?></h3>
      <div class="u-form u-form-1">
        <form action="intro.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" method="post" style="padding: 10px;">
          <div class="u-form-group u-form-message">
            <label for="message-5883" class="u-label">Solucion</label>
            <textarea placeholder="Limite de 100 palabra." rows="4" cols="50" id="message-5883" name="solucion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" maxlength="100"></textarea>
          </div>
          <div class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-form-group u-form-submit">
            <button type="submit"  class="u-active-black u-border-2 u-border-active-black u-border-black u-border-hover-black u-btn u-btn-submit u-button-style u-hover-white u-text-black u-text-hover-white u-white u-btn-1">Aceptar</button>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <input type="hidden" value="<?php echo $report;?>" name="id">
          <input type="hidden" name="formServices" value="">
        </form>
      </div>
      <div class="u-form u-form-2">
        <form action="https://forms.nicepagesrv.com/Form/Process" class="u-clearfix u-form-spacing-21 u-form-vertical u-inner-form" source="email" name="form" style="padding: 0px;">
          <div class="u-form-send-message u-form-send-success"> Gracias! Tu mensaje ha sido enviado. </div>
          <div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por favor, corrija los errores y vuelva a intentarlo. </div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="">
        </form>
      </div>
      <h3 class="u-text u-text-default u-text-3"> Fecha <br>de cierre:<?php echo $time;?></h3>
    </section>
</body></html>
  <?php
  }}

}}else{
  header('location:../../../dashboard.php');
}}}?>