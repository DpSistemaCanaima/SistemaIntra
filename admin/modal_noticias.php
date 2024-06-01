<!-- Modal -->

<div id="openModal<?php echo $row['cod_imagen'];?>" class="modalDialog">
	<div>
  <?php   

     $codigoDeimagen = $row['cod_imagen'];

      $query = "SELECT cod_imagen,imagen, nombre, comentario FROM imagenes WHERE cod_imagen = '$codigoDeimagen' ";
      $resultado = mysqli_query($conn,$query);

   ?>
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="titulo"><?php echo $row['nombre'];?></h2>
		
   <?php  foreach($resultado as $row) { ?>

            <div class="contenedor">
                    <div class="div1"><img style="width:85%;" src="../assets/img/<?php echo $row['imagen']; ?>"   alt="..." ></div>
                     <div class="div2"><h5 class="contenido"><?php  echo $row['comentario'] ?></h5></div>
              </div>
              
          
        

         
             

             
              
            
            
    <?php  } ?>

	</div>
</div>



<!-- <div class="modal fade" id="exampleModal<?php echo $row['cod_imagen'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php   

        //$codigoDeimagen = $row['cod_imagen'];
     
        // $query = "SELECT cod_imagen,imagen, nombre, comentario FROM imagenes WHERE cod_imagen = '$codigoDeimagen' ";
       //  $resultado = mysqli_query($conn,$query);
        
      ?>

<?php // foreach($resultado as $row) { ?>
              
                    <img style="float:left; width: 100%;" src="../imagenes/<?php //echo $row['imagen']; ?>" class="card-img-noticia" alt="..." >
              

               
                    <?php //echo $row['nombre'] ?>
                     <?php //echo $row['comentario'] ?>
              
              <?php// } ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

