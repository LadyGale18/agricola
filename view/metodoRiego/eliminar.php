 <!----- modal eliminar --->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Confirmar inhabilitación</h4>
        </div>
        <div class="modal-body">                    
          <p>desea inhabilitar el registro?</p>
          <p class="debug-url"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <a href="<?php echo $fsConfig->getUrl() ?>index.php/metodoRiego/delete?id=<?php echo $metodo->id ?>" class="btn btn-danger danger">Aceptar</a>
        </div>
      </div>
    </div>
  </div>
  <!----- fin de modal --->