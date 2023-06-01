<?php 
session_start();
require_once('../conexion.php');
if (isset($_GET['logout'])&& $_GET['logout']=="on"){
	session_destroy();
	header('location:../index.php');
}else{
  if ($_SESSION['Users'][4]== null){//si el usuario inicio sesion
    header('location: index.php');
}else{
    if ($_SESSION['Users'][2]== 2){//Si el usuario esta habilitado o no
      header("location:index.php");
    }else{
		if ($_SESSION['Users'][1]== 2){
$name=$_SESSION['Users'][0];
$ID=$_SESSION['Users'][4];
$search=mysqli_query($conn,"SELECT * FROM `report` WHERE ID_NAME='$ID' AND STATUS=1");
$cantidad=mysqli_num_rows($search);
?><script type="text/javascript">
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
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content=", Cant.Reportes:">
    <meta name="description" content="">
    <title>Reportes</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Reportes.css" media="screen">
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
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-3" href="../dashboard.php" style="padding: 2px 20px;">Principal</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-3" style="padding: 2px 20px;">Ayuda</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-black u-text-hover-custom-color-3" a href="index.php?logout=on" style="padding: 2px 20px 2px 20px;">Cerrar sesion</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../dashboard.php">Principal</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Ayuda</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php?logout=on">Cerrar sesion</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <p class="u-hidden-lg u-hidden-xl u-text u-text-default-xs u-text-1">Cant.Reportes: <?php echo $cantidad;?></p>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-5137">
      <div class="u-container-style u-group u-hidden-sm u-hidden-xs u-image u-shape-rectangle u-image-1" data-image-width="985" data-image-height="462">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-text u-text-default u-text-1"><?php echo $name; ?></h1>
          <h2 class="u-text u-text-default u-text-2">Cant.Reportes: <?php echo $cantidad;?></h2>
        </div>
      </div>
      <a href="List/list.php?history=true" class="u-active-custom-color-2 u-border-2 u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-radius-11 u-white u-btn-1" target="barra1">Historial</a>
      <a href="List/list.php" class="u-active-custom-color-2 u-border-2 u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-radius-11 u-white u-btn-2" target="barra1">Regresar</a>
      <h3 class="u-text u-text-default u-text-3">Informacion adicional</h3>
      <div class="u-border-3 u-border-palette-5-light-1 u-container-style u-group u-shape-rectangle u-white u-group-2">
        <iframe name="barra1" class="u-container-layout u-container-layout-2" src="./List/list.php"></iframe>
      </div>
      <div class="u-border-3 u-border-palette-5-light-1 u-container-style u-group u-shape-rectangle u-white u-group-3">
        <iframe name="barra2" class="u-container-layout u-container-layout-3" src="./List/Registro2/intro.php"></iframe>
      </div>
      <div class="u-expanded-width u-gradient u-shape u-shape-rectangle u-shape-1"></div>
    </section>
 
</body></html> <?php }else{
  header('location:../dashboard.php');
}}}} ?>