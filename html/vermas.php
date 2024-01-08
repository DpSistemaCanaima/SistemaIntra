<?php 
 
 include('../cone.php');
 if (!isset($_SESSION['IDDATOS'])) {
   header("Location: index.php");
}

$USER = $_SESSION['USER'];
$NAME = $_SESSION['NAME'];
$ROL = $_SESSION['IDROLS'];
$CEDULA = $_SESSION['CEDULA'];
?>

<div class="modal fade" id="exampleModal<?php echo $mostrar['IDDATOS'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h1 > Mas Detalles </h1> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
      if (isset($_SESSION['IDDATOS'])) {
		
    }else{
        ?>
                <script type="text/javascript">
                window.location = "./";
                </script>
                <?php 
    }
  
    $consulta = mysqli_query($conn, "SELECT IDDATOS ,USER , foto FROM user_datos  WHERE `CEDULA` = '$CEDULA' ");
    $valores = mysqli_fetch_array($consulta);
    $foto = $valores['foto'];
     ?>
                <input type="hidden" value="<?php echo $mostrar['CEDULA'];?>">
               <center> <img width="150" height="150" class="rounded-circle" src="<?php echo $mostrar['foto'];  ?>"></center>




               
              
            </div>
            <div class="modal-body">
                <center>
                <label for="floatingInput"><strong> Nombre y Apellido</strong></label>:
                <?php echo $mostrar ['NAME'] . " "  .  $mostrar ['SURNAME'] ?><br>
                <label for="floatingInput"><strong>Nacionalidad</strong></label>:
                <?php echo $mostrar ['nacionalidad'] ?><br>
                <label for="floatingInput"><strong>Cedula</strong></label>:
                <?php echo $mostrar ['CEDULA'] ?><br>
                <label for="floatingInput"><strong>Grado de Educacion</strong></label>:
                <?php echo $mostrar['grado']?><br>
                <label for="floatingInput"><strong>Fecha de Nacimiento</strong></label>:
                <?php echo $mostrar['FECHA']?><br>
                <label for="floatingInput"><strong>Oficio</strong></label>:
                <?php echo $mostrar['ABILIDAD_U_OFICIO']?><br>
                <label for="floatingInput"><strong>Direccion</strong></label>:
                <?php echo $mostrar['DIRECCION']?><br>
                <label for="floatingInput"><strong>Ciudad</strong></label>:
                <?php echo $mostrar ['CIUDAD'] ?><br>
                <label for="floatingInput"><strong>Municipio</strong></label>:
                <?php echo $mostrar ['MUNICIPIO'] ?><br>
                <label for="floatingInput"><strong>Parroquia</strong></label>:
                <?php echo $mostrar ['PARROQUIA'] ?><br>
                <label for="floatingInput"><strong>Usuario</strong></label>:
                <?php echo $mostrar ['USER'] ?><br>
                <label for="floatingInput"><strong>Area</strong></label>:
                <?php echo $mostrar ['AREA'] ?><br>
                <label for="floatingInput"><strong>Sexo</strong></label>:
                <?php if($mostrar ['GENDER']==1){
                          echo "H";
                        }elseif($mostrar ['GENDER']==2){
                          echo "M";
                        }else{
                          echo "otro";
                        } ?> <br>
                <label for="floatingInput"><strong>Correo</strong></label>:
                <?php echo $mostrar ['EMAIL'] ?><br>
                <label for="floatingInput"><strong>Rol</strong></label>:
                <?php echo $mostrar ['PRIVILEGE'] ?><br>
                <label for="floatingInput"><strong>Status</strong></label>:
                <?php echo $mostrar ['TIPO_USUARIOS'] ?><br>
                <label for="floatingInput"><strong>Nunero de Hijos</strong></label>:
                <?php echo $mostrar ['NUMERO_DE_HIJOS'] ?><br>
                <label for="floatingInput"><strong>Nombre y Apellido</strong></label>:
                <?php echo $mostrar ['NOBRE_Y_APELLIDO'] ?><br>
                <label for="floatingInput"><strong>Fecha de Nacimiento</strong></label>:
                <?php echo $mostrar ['FECHA_DE_NACIMIENTO'] ?>
                </center>
            </div>
           
        </div>
    </div>
</div>