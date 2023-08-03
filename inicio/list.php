<?php 
session_start();
if(isset($_GET['All']) && $_GET['All']=="true"){
  $_SESSION['Users'][6]=0; 
}
 elseif(isset($_GET['Active']) && $_GET['Active']=="true"){
  $_SESSION['Users'][6]=1;
  header("location:Reporte.php");
  }else if(isset($_GET['close']) && $_GET['close']=="true"){
    $_SESSION['Users'][6]=2;
    header("location:Reporte.php");
  }else if(isset($_GET['hold']) && $_GET['hold']=="true"){
    $_SESSION['Users'][6]=3;
    header("location:Reporte.php");
  }else if($_SESSION['Users'][6]==1 or $_SESSION['Users'][6]==2 or $_SESSION['Users'][6]==3){
  }else{
    $_SESSION['Users'][6]=0; 
  }
?><script type="text/javascript">
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
</script><?php
require_once('conexion.php');
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>



    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">num de reportes</th>
                <th scope="col"> Fecha de creación</th>
                <th scope="col">Usuario</th>
                <th scope="col">Descripción</th>
                <th scope="col">opcion</th>
            </tr>
        </thead>






        <tbody>

            <?php if($_SESSION['Users'][6]==1){//activo
             $select_stmt=mysqli_query($conn, "SELECT report.ID_REPORT,report.TITLE,user_datos.NAME, report.ID_NAME,report.DESCRIPTION, report.CREATION_DATE, report.STATUS FROM `report` INNER JOIN user_datos ON(user_datos.IDDATOS=report.User_send) where STATUS=1 ORDER BY report.ID_REPORT desc");
             $a=mysqli_num_rows($select_stmt);
             if ($a==0){
              echo "<br><center>Sin reporte en este momento</center>";

             }else{
             while($row = mysqli_fetch_array($select_stmt)){
              $text = $row["DESCRIPTION"]; 
            ?>
            <tr>
                <td><a href="<?php echo $row["ID_REPORT"];?>" class="lis"
                        target="_parent"><?php echo $row["ID_REPORT"];?></a></td>
                <td><a href="<?php echo $row["ID_REPORT"];?>" class="lis" target="_parent">
                        <?php echo $row["CREATION_DATE"];?></a></td>
                <td><a href="<?php echo $row["ID_REPORT"];?>" class="lis"
                        target="_parent"><?php echo $row["NAME"];?></a> </td>


                <td><a href="<?php echo $row["ID_REPORT"];?>" class="lis"
                        target="_parent"><?php echo limitar_cadena($text,40, "...");?></a></td>
                <th>
                    <a href="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">visualizacion</a>




                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel"> Informacion adicional</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>
                                <div class="modal-body">
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <form action="Reporte.php" method="post">
                                                <p class="u-align-center u-form-group u-form-text u-text u-text-4">
                                                    ID.Reporte<br><?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']=='') {
        echo "ninguno";
        } else {
          echo $Report['ID_REPORT'];
        }
          ?>
                                                </p>
                                                <p>
                                                    <?php if ( empty($Report['ID_REPORT']) or $Report['ID_REPORT']=='') {
        echo "Fecha de creación: Ninguno <br>Fecha. culminación: Ninguno <br>Departamento: Ninguno<br> Usuario: Ninguno";
        } else {
        echo "Fecha de creación: ", $Report['CREATION_DATE'], "<br>Fecha. culminación: ", $Report['DATE_FINAL'], "<br>Departamento: ", $Report['AREA'],"<br>Usuario: ",$Report['NAME']," ",$Report['SURNAME'],"(",$Report['USER'],")",
        "<br>Tecnico: ", $Report1['NAME']," ",$Report1['SURNAME'],"(",$Report1['USER'],")", "<br> Estado: ";
        if($Report['STATUS']==1){echo "Activo";}else if($Report['STATUS']==2){echo "Cerrado";}else{echo "En espera";}} ?>
                                                </p>
                                                <input type="hidden" name="id"
                                                    value="<?php echo $Report['ID_REPORT'];?>">
                                                <div class="u-form-group u-form-select u-label-top u-form-group-3">
                                                    <label for="select-ed2a" class="u-label">Tecnico</label>
                                                    <div class="u-form-select-wrapper"><?php 
                $Tech = mysqli_query($conn, "SELECT * FROM user_datos WHERE IDROLS=3 and LOGIN=1");
        echo "<select id='select-ed2a' name='Tecnico' >";
                
              
                while($Tech2= mysqli_fetch_array($Tech)){
                  ?>
                                                        <option value="<?php echo $Tech2['IDDATOS']; ?>">
                                                            <?php echo $Tech2['NAME']; ?></option>
                                                        <?php } ?>
                                                        </select>
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
                                                            <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                y="0px" width="16px" height="16px" viewBox="0 0 16 16"
                                                                style="fill:currentColor;" xml:space="preserve">
                                                                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-5">
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
                                        <hr>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                </th>
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
            <tr>
                <td>
                    <a href="<?php echo $row["ID_REPORT"];?>" class="lis"
                        target="_parent"><?php echo $row["ID_REPORT"];?></a>
                </td>
                <td>
                    <a href="<?php echo $row["ID_REPORT"];?>" class="lis"
                        target="_parent"><?php echo $row["CREATION_DATE"];?></a>
                </td>
                <td>
                    <a href="<?php echo $row["ID_REPORT"];?>" class="lis"
                        target="_parent"><?php echo $row["NAME"];?></a>
                </td>
                <td>
                    <a href="<?php echo $row["ID_REPORT"];?>" class="lis"
                        target="_parent"><?php echo limitar_cadena($text,40, "...");?></a>
                </td>
                <th>
                    <a href="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">visualizacion</a>




                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Usuario</label>
                                            <input type="text" class="form-control" aria-describedby="nameHelp"
                                                name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Contraseña</label>
                                            <input type="password" class="form-control" aria-describedby="nameHelp"
                                                name="pass">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                </th>
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
            <tr>
                <td>
                    <a href=" <?php echo $row["ID_REPORT"]; ?> " class="lis"
                        target="_parent"><?php echo $row["ID_REPORT"]; ?></a>
                </td>
                <td>
                    <a href=" <?php echo $row["ID_REPORT"]; ?> " class="lis" target="_parent">
                        <?php echo $row["CREATION_DATE"]; ?></a>
                </td>
                <td>
                    <a href=" <?php echo $row["ID_REPORT"]; ?> " class="lis"
                        target="_parent"><?php echo $row["NAME"]; ?>></a>
                </td>
                <td>
                    <a href=" <?php echo $row["ID_REPORT"]; ?> " class="lis"
                        target="_parent"><?php echo limitar_cadena($text, 40, "..."); ?></a>
                </td>

                <th>
                    <a href="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">visualizacion</a>




                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Usuario</label>
                                            <input type="text" class="form-control" aria-describedby="nameHelp"
                                                name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Contraseña</label>
                                            <input type="password" class="form-control" aria-describedby="nameHelp"
                                                name="pass">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                </th>

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
            <tr>
                <td>
                    <a href=" <?php echo $row["ID_REPORT"]; ?>  " class="lis" target="_parent">
                        <?php echo $row["ID_REPORT"]; ?></a>
                </td>
                <td>
                    <a href="  <?php echo $row["ID_REPORT"]; ?> " class="lis" target="_parent">
                        <?php echo $row["CREATION_DATE"]; ?></a>
                </td>
                <td>
                    <a href=" <?php echo $row["ID_REPORT"]; ?>  " class="lis" target="_parent">
                        <?php echo $row["NAME"]; ?></a>
                </td>
                <td>
                    <a href="<?php echo $row["ID_REPORT"]; ?> " class="lis" target="_parent">
                        <?php echo limitar_cadena($text, 40, "..."); ?></a>
                </td>


                <th>
                    <a href="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">visualizacion</a>




                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Usuario</label>
                                            <input type="text" class="form-control" aria-describedby="nameHelp"
                                                name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Contraseña</label>
                                            <input type="password" class="form-control" aria-describedby="nameHelp"
                                                name="pass">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">Enviar</button>
                </th>

            </tr>
            <?php

          }
        }
      }
          ?>

        </tbody>

    </table>










</body>

</html>
<?php }}}
?>