<!-- Modal -->

<div id="openModal<?php echo $row['cod_imagen'];?>" class="modalDialog">
<div class="scrollll">
   <?php   

     $codigoDeimagen = $row['cod_imagen'];

      $query = "SELECT cod_imagen,imagen, nombre, comentario FROM imagenes WHERE cod_imagen = '$codigoDeimagen' ";
      $resultado = mysqli_query($conn,$query);

   ?>
   
    <a href="#close" title="Close" class="close">X</a>
    
		<h2 class="titulo"><?php echo $row['nombre'];?></h2>
		
   <?php  foreach($resultado as $row) { ?>

            <div class="contenedor">
                    <div class="div1"><img style="width:85%;" src="assets/img/<?php echo $row['imagen']; ?>"   alt="..." ></div>
                     <div class="div2"><h5 class="contenido"><?php  echo $row['comentario'] ?></h5></div>
              </div>
              
          
        

         
             
 
             
              
 
            
    <?php  } ?>

  </div>

</div>
