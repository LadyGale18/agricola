<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php' ?>
<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(5) ?>
<div class="container container-fluid">
  <h1>Tercero</h1>
  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/nuevo"  class="btn btn-success glyphicon glyphicon-plus" > Nuevo</a>
  </p>
  <?php if ($objMetodo != null): ?>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($objMetodo as $tercero): ?>
          <tr>
            <td><?php echo $tercero->nombre ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/ver?id=<?php echo $tercero->id ?>" class="btn btn-warning btn-xs glyphicon glyphicon-eye-open"> Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/editar?id=<?php echo $tercero->id ?>" class="btn btn-primary btn-xs glyphicon glyphicon-repeat"> Editar</a>
              <a href="#" data-toggle='modal' data-target='#myModal<?php echo $tercero->id ?>' class="btn btn-danger btn-xs glyphicon glyphicon-trash"> Eliminar</a>
              <div class="modal fade" id="myModal<?php echo $tercero->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                      <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/delete?id=<?php echo $tercero->id ?>" type="button" class="btn btn-danger">Eliminar</a>
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
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>