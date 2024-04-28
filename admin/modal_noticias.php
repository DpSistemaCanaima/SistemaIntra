<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['cod_imagen'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['nombre'];?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php   

        $codigoDeimagen = $row['cod_imagen'];
     
         $query = "SELECT cod_imagen,imagen, nombre, comentario FROM imagenes WHERE cod_imagen = '$codigoDeimagen' ";
         $resultado = mysqli_query($conn,$query);
        
      ?>

<?php foreach($resultado as $row) { ?>
              
                    <img src="../imagenes/<?php echo $row['imagen']; ?>" class="card-img-noticia" alt="..." style="width: 100%;">
              

               
                    <?php echo $row['nombre'] ?>
                     <?php echo $row['comentario'] ?>
              
              <?php } ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>