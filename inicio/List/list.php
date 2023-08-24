<?php 
 
session_start();
if(isset($_GET['All']) && $_GET['All']=="true"){
  $_SESSION['Users'][6]=0; 
}
 elseif(isset($_GET['Active']) && $_GET['Active']=="true"){
  $_SESSION['Users'][6]=1;
  }else if(isset($_GET['close']) && $_GET['close']=="true"){
    $_SESSION['Users'][6]=2;
  }else if(isset($_GET['hold']) && $_GET['hold']=="true"){
    $_SESSION['Users'][6]=3;
  }else if($_SESSION['Users'][6]==1 or $_SESSION['Users'][6]==2 or $_SESSION['Users'][6]==3){
  }else{
    $_SESSION['Users'][6]=0;  
  }
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
require_once('../../conexion.php');
function limitar_cadena($cadena, $limite, $sufijo){
  // Si la longitud es mayor que el límite...
  if(strlen($cadena) > $limite){
    // Entonces corta la cadena y ponle el sufijo
    return substr($cadena, 0, $limite) . $sufijo;
  }
  
  // Si no, entonces devuelve la cadena normal
  return $cadena;
}
  if ($_SESSION['Users'][4]== null){//si el usuario inicio sesion
    header('location: index.php');
}else{
    if ($_SESSION['Users'][2]== 2){//Si el usuario esta habilitado o no
      header("location:index.php");
    }else{
		if ($_SESSION['Users'][1]== 3){
      
        ?>
        <!DOCTYPE html> 
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>List</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="style.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es">
    <section class="u-clearfix u-valign-top-xs u-section-1" id="sec-bcdc">
      <div class="u-expanded-width u-hidden-xs u-table u-table-responsive u-table-1" style:position: static;>
        <table class="u-table-entity">
          <colgroup>
            <col width="11.5%">
            <col width="16.2%">
            <col width="15.3%">
            <col width="57%">
          </colgroup>
          <tbody class="u-align-center u-custom-font u-font-montserrat u-table-body u-table-body-1">
            <tr style="height: 46px;">
              <td class="u-border-1 u-border-grey-90 u-palette-4-light-3 u-table-cell u-table-cell-1">
                <span style="font-size: 0.625rem;"><b>num de reportes</b></span>
              </td>
              <td class="u-border-1 u-border-grey-dark-1 u-palette-4-light-3 u-table-cell u-table-cell-2"><b>Fecha de creación</b></td>
              <td class="u-border-1 u-border-grey-dark-1 u-palette-4-light-3 u-table-cell u-table-cell-3"><b>Usuario</b></td>
              <td class="u-border-1 u-border-grey-dark-1 u-palette-4-light-3 u-table-cell u-table-cell-4"><b>Descripción</b></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="u-expanded-width u-hidden-xs u-table u-table-responsive u-table-2">
        <table class="u-table-entity">
          <colgroup>
            <col width="11.5%">
            <col width="16.2%">
            <col width="15.3%">
            <col width="57%">
          </colgroup>
          <tbody class="u-align-center u-custom-font u-font-oswald u-table-body u-table-body-2">
          
      <?php if($_SESSION['Users'][6]==1){//activo
             $select_stmt=mysqli_query($conn, "SELECT report.ID_REPORT,report.TITLE,user_datos.NAME, report.ID_NAME,report.DESCRIPTION, report.CREATION_DATE, report.STATUS FROM `report` INNER JOIN user_datos ON(user_datos.IDDATOS=report.User_send) where STATUS=1 ORDER BY report.ID_REPORT desc");
             $a=mysqli_num_rows($select_stmt);
             if ($a==0){
              echo "<br><center>Sin reporte en este momento</center>";

             }else{
             while($row = mysqli_fetch_array($select_stmt)){
              $text = $row["DESCRIPTION"]; 
            ?> 
             <tr style="height: 44px;">
             <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
             <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-1" target="_parent"><?php echo $row["ID_REPORT"];?></a>
             </td>
             <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
             <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-2" target="_parent"><?php echo $row["CREATION_DATE"];?></a>
             </td>
             <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
             <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-3" target="_parent"><?php echo $row["NAME"];?></a>
             </td>
             <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
             <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>"  class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-4" target="_parent"><?php echo limitar_cadena($text,40, "...");?></a>
             </td>
             </tr>
             <?php
          }
        }
      }elseif($_SESSION['Users'][6]==2){//Cerrado
        
          $select_stmt=mysqli_query($conn, "SELECT report.ID_REPORT,report.TITLE,user_datos.NAME, report.ID_NAME,report.DESCRIPTION, report.CREATION_DATE, report.STATUS FROM `report` INNER JOIN user_datos ON(user_datos.IDDATOS=report.User_send) where STATUS=2 ORDER BY report.FECHA_SOLUTION desc");
          $a=mysqli_num_rows($select_stmt);
          if ($a==0){
           echo "<br><center>Sin reporte en este momento</center>";

          }else{
          while($row = mysqli_fetch_array($select_stmt)){
           $text = $row["DESCRIPTION"]; 
         ?> 
          <tr style="height: 44px;">
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-1" target="_parent"><?php echo $row["ID_REPORT"];?></a>
          </td>
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-2" target="_parent"><?php echo $row["CREATION_DATE"];?></a>
          </td>
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-3" target="_parent"><?php echo $row["NAME"];?></a>
          </td>
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"];?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-4" target="_parent"><?php echo limitar_cadena($text,40, "...");?></a>
          </td>
          </tr>
          <?php
       }
     }
    }elseif($_SESSION['Users'][6]==3){//en espera
      $select_stmt=mysqli_query($conn, "SELECT report.ID_REPORT,report.TITLE,user_datos.NAME, report.ID_NAME,report.DESCRIPTION, report.CREATION_DATE, report.STATUS FROM `report` INNER JOIN user_datos ON(user_datos.IDDATOS=report.User_send) where STATUS=3 ORDER BY report.ID_REPORT desc");
          $a=mysqli_num_rows($select_stmt);
          if ($a==0){
           echo "<br><center>Sin reporte en este momento</center>";

        } else {
          while ($row = mysqli_fetch_array($select_stmt)) {
            $text = $row["DESCRIPTION"];
          ?> 
          <tr style="height: 44px;">
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-1" target="_parent"><?php echo $row["ID_REPORT"]; ?></a>
          </td>
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-2" target="_parent"><?php echo $row["CREATION_DATE"]; ?></a>
          </td>
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-3" target="_parent"><?php echo $row["NAME"]; ?></a>
          </td>
          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
          <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-4" target="_parent"><?php echo limitar_cadena($text, 40, "..."); ?></a>
          </td>
          </tr>
          <?php
          }
        }
      } elseif($_SESSION['Users'][6]==0) {
        $select_stmt = mysqli_query($conn, "SELECT report.ID_REPORT,report.TITLE,user_datos.NAME, report.ID_NAME,report.DESCRIPTION, report.CREATION_DATE, report.STATUS FROM `report` INNER JOIN user_datos ON(user_datos.IDDATOS=report.User_send) ORDER BY report.ID_REPORT desc");
        $a = mysqli_num_rows($select_stmt);
        if ($a == 0) {
          echo "<br><center>Sin reporte en este momento</center>";

        } else {
          while ($row = mysqli_fetch_array($select_stmt)) {
            $text = $row["DESCRIPTION"];
             ?> 
            <tr style="height: 44px;">
            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
            <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-1" target="_parent"><?php echo $row["ID_REPORT"]; ?></a>
            </td>
            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
            <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-2" target="_parent"><?php echo $row["CREATION_DATE"]; ?></a>
            </td>
            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
            <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-3" target="_parent"><?php echo $row["NAME"]; ?></a>
            </td>
            <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
            <a href="../Reporte.php?Report=<?php echo $row["ID_REPORT"]; ?>"   class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-4" target="_parent"><?php echo limitar_cadena($text, 40, "..."); ?></a>
            </td>
            </tr>
            <?php

          }
        }
      }
          ?> 
         </tbody>

        </table> 
      </div>
      <div class="u-expanded-width u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-table u-table-responsive u-table-3">
        <table class="u-table-entity">
          <colgroup>
            <col width="12.3%">
            <col width="19.9%">
            <col width="24.9%">
            <col width="42.9%">
          </colgroup>
          <tbody class="u-align-center u-custom-font u-font-montserrat u-table-body u-table-body-3">
            <tr style="height: 50px;">
              <td class="u-border-1 u-border-grey-90 u-palette-4-light-3 u-table-cell u-table-cell-13">
                <span style="font-size: 0.625rem; text-transform: uppercase;"><b>ID</b></span>
              </td>
              <td class="u-border-1 u-border-grey-dark-1 u-palette-4-light-3 u-table-cell u-table-cell-14"></td>
              <td class="u-border-1 u-border-grey-dark-1 u-palette-4-light-3 u-table-cell u-table</td>
              <td class="u-border-1 u-border-grey-dark-1 u-palette-4-light-3 u-table-cell u-table-cel</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="u-expanded-width u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-table u-table-responsive u-table-4">
        <table class="u-table-entity">
          <colgroup>
            <col width="12.3%">
            <col width="19.9%">
            <col width="24.9%">
            <col width="42.9%">
          </colgroup>
          <tbody class="u-align-center u-custom-font u-font-oswald u-table-body u-table-body-4">
          <?php
            $select_stmt=mysqli_query($conn, "SELECT report.ID_REPORT,report.TITLE,user_datos.NAME, report.ID_NAME,report.DESCRIPTION, report.CREATION_DATE, report.STATUS FROM `report` INNER JOIN user_datos ON(user_datos.IDDATOS=report.User_send) WHERE STATUS=2");
            while($row = mysqli_fetch_array($select_stmt))
{ $text = $row["DESCRIPTION"];

 
           ?> 
            <tr style="height: 44px;">
              <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                <a href="./Registro2/intro.php?Id=<?php echo $row["ID_REPORT"];?>"   target="barra2"><?php echo $row["ID_REPORT"];?></a>
              </td>
              <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                <a href="./Registro2/intro.php?Id=<?php echo $row["ID_REPORT"];?>"  target="barra2"><?php echo $row["CREATION_DATE"];?></a>
              </td>
              <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                <a href="./Registro2/intro.php?Id=<?php echo $row["ID_REPORT"];?>"  target="barra2"><?php echo limitar_cadena($row["NAME"],10, "...");?></a>
              </td>
              <td class="u-border-1 u-border-grey-dark-1 u-table-cell">
                <a href="./Registro2/intro.php?Id=<?php echo $row["ID_REPORT"];?>"  target="barra2"><?php echo limitar_cadena($text,15, "...");?></a>
              </td>
            </tr>
            <?php
     }?>
          </tbody>
        </table>
      </div>
</section>
</body></html>
     <?php }}}
?>