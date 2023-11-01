<!-- Modal -->
<div class="modal fade" id="registrarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             <h1 class="modal-title " id="exampleModalLabel">Subir publicacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                
                

          
            <form action="Backend/subir.php" method="post" enctype="multipart/form-data">
         
             
              <input id="my-input"  type="file" name="imagen">
       
       
             
              <input  class="form-control" id="floatingInput" placeholder="Titulo" type="text" name="nombre">
            
        
                 <textarea class="form-control" placeholder="Descripcion"  name="comentario"  ></textarea>
 

          
          
   
         
          <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
         </form>
  













            </div>
            
               
                
              
        </div>
    </div>
</div>