<?php
include_once $fsConfig->getPath() . 'view/partial/head.php';
include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php';
include_once $fsConfig->getPath() . 'controller/entradaSalidaBodega/filtro.class.php';
?>

<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(7) ?>
<div class="container container-fluid">
  <h1>Lista </h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>
  <div>
<!--//Nota: el error es  x la funcion de table.class.php-->
<!--    <form id="form1" class="navbar-form navbar-left" role="search" method="post">
  <div class="form-group">
    <input name="filtro" id="filtro" type="text" class="form-control" placeholder="filtrar">
  </div>
  <button type="submit" class="btn btn-default">filtrar</button>
</form>-->
<form class="formulario" name="formulario_registro" method="POST">
              <input type="text" id="filtro" name="filtro">
              <label class="label" for="nombre">Buscar</label>
          </form>

    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>
          <th>Id entrada</th>
          <th>Observacion</th>
          <th>Id tercero soli</th>
          <th>Id tipo docu</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($objMetodo as $entradaSalidaBodega) : ?>
          <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $entradaSalidaBodega->id ?></td>
            <td><?php echo $entradaSalidaBodega->observacion?></td>
            <td><?php echo $entradaSalidaBodega->tercero_id_solicita ?></td>
            <td><?php echo $entradaSalidaBodega->tipo_documento_id ?></td>
            <td>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/ver?id=<?php echo $entradaSalidaBodega->id ?>" class="btn btn-warning btn-xs">Ver</a>
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/editar?id=<?php echo $entradaSalidaBodega->id ?>" class="btn btn-primary btn-xs">Editar</a>
              <a href="#" data-toggle='modal' data-target='#myModal<?php echo $entradaSalidaBodega->id ?>' class="btn btn-danger btn-xs">eliminar</a>
              <?php include $fsConfig->getPath() . 'view/partial/modalEliminarEntradaSalidaBodega.php'; ?>

            </td>
          </tr>
        <?php endforeach ?>
      </tbody>

    </table>

    <?php $pagina->render() ?>

    <div>
      <a href="<?php echo $fsConfig->getUrl() ?>index.php/entradaSalidaBodega/reporte" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
    </div>
  </div>
  <script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
  <?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
