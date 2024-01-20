<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="noti.php" method="post">
        <h5 class="modal-title" id="exampleModalLabel"><input type="text" name="nombre" class="form-control"  value="<?php echo $row['nombre'] ?>" style="background-color:transparent;" ></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   
      <textarea name="comentario" id=""  class="form-control" rows="50"><?php echo $row['comentario'] ?></textarea>
      </div>
      <div class="modal-footer">
      <center>  <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button></center>
      </form>
    </div>
    </div>
  </div>
</div>