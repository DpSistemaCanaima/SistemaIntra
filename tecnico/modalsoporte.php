<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $mostrar ['ID_REPORT'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Solucion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="cerrado.php" method="post">
                                             
                                             <div class="form-floating">
                             
                                  <input type="text" name="ID_REPORT" value="<?php echo $mostrar['ID_REPORT']  ?>" >
                                  
                         <textarea class="form-control"  name="SOLUTION"  style="height: 100px"></textarea>
                                     <label for="floatingTextarea2">Solucion</label>
                                             </div>
                                           <center>  <input type="submit" class="btn btn-outline-primary"> </center>
      </form>
      </div>
     
    </div>
  </div>
</div>