
<?php

  include('conexion.php') ;

  $time=['DATE_FINAL'];
  $time2=['CREATION_DATE'];
  date_default_timezone_set('America/Caracas');
  $actual=date("Y-m-d");




 
  
  ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $mostrar['ID_REPORT'];?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cerrar caso de Soporte</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

           
            <h5> Fecha actual:<?php if($time>$actual){
          echo '<font color="blue">',$actual,'</font>';
      }elseif($time==$actual){
        echo '<font color="green">',$actual,'</font>';
        }else{
          echo '<font color="red">',$actual,'</font>';}?></h5>

              
                <strong>Solucion</strong><br>
                <br>
                         <form action="solucion.php" method="POST">
               
                    <input type="hidden" value="" name="ID_REPORT">
                    <?php  } ?>
                    <div class="input-group">

                        <input type="date" class="form-control" name="fecha_solution">
                        <input class="form-control" name="solution" 
                            placeholder="Limite de palabras 50">

                    </div><br>
                  <center> <input type="submit" class="btn btn-outline-primary" value="enviar" ></center> 
                </form>
                
        
         
        </div>
       
    </div>
</div>
</div>