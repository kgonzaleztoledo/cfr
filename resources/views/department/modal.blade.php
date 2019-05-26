                                	                      		<!-- Modal -->
<div class="modal fade" id="modalver" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-primary">
        <h3 class="modal-title " id="exampleModalLabel">Detalle Departamento:</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <form>
  
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
         
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input type="text" id="id" class="form-control validate" disabled>
          <label data-error="wrong" data-success="right" for="defaultForm-email">ID</label>
        </div>

        <div class="md-form mb-4">
          <input type="text" id="nombre" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Nombre Departamento:</label>
        </div>

        <div class="md-form mb-4">
          <textarea rows="4" cols="150" id="observaciones" class="form-control validate"> </textarea>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Observaciones:</label>
        </div>

      </div>
       

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary"  id="actualizar">Actualizar</button>

        </form>
      </div>
    </div>
  </div>
</div>



