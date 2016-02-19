<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php' ?>
<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(5) ?>
<div class="container container-fluid">
  <h1>turno </h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/turno/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>
  <?php if ($objturno != null): ?>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Descripcion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objturno as $turno): ?>
          <tr>
            <td><?php echo $turno->descripcion ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/turno/ver?id=<?php echo $turno->id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/turno/editar?id=<?php echo $turno->id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a href="#" data-toggle='modal' data-target='#myModal<?php echo $turno->id ?>' class="btn btn-danger btn-xs">Eliminar</a>
              <div class="modal fade" id="myModal<?php echo $turno->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Confirmar eliminacion</h4>
                    </div>
                    <div class="modal-body">
                      ¿Desea eliminar el registro seleccionado?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <a href="<?php echo $fsConfig->getUrl() ?>index.php/turno/eliminar?id=<?php echo $turno->id ?>" type="button" class="btn btn-danger">Eliminar</a>
                    </div>
                  </div>
                </div>
              </div>
            </td>       
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>No existen registros, cree uno nuevo</p>
  <?php endif; ?>
  <?php $pagina->render() ?>
</div>
<script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>