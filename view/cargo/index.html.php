<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php' ?>
<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(5) ?>

<div class="container container-fluid">
  <h1>CRUD de la tabla Cargo</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/cargo/nuevo" class="btn btn-success glyphicon glyphicon-plus"> Nuevo </a>
  </p>
  <?php if ($objcargo != NULL): ?>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Descripción</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objcargo as $cargo): ?>
          <tr>
            <td><?php echo $cargo->descripcion ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/cargo/editar?id=<?php echo $cargo->id ?>" class="btn btn-primary btn-xs glyphicon glyphicon-repeat"> Editar </a>
              <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-xs glyphicon glyphicon-trash"> Eliminar </a>
            </td>
          </tr>
        <?php endforeach ?>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <a href="<?php echo $fsConfig->getUrl() ?>index.php/cargo/delete?id=<?php echo $cargo->id ?>" type="button" class="btn btn-danger">Eliminar</a>
              </div>
            </div>
          </div>
        </div>
      </tbody>
      <tfoot>
      </tfoot>
    </table>
  <?php else: ?>
    <p>No existen registros.</p>
  <?php endif; ?>
</div>
<script src="<?php echo $fsConfig->getUrl() ?>js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>