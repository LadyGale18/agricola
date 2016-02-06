<?php
include_once $fsConfig->getPath() . 'view/partial/head.php';
include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php';
?>

<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(2) ?>



<div class="container container-fluid">
  <h1>Tipo Mantenimiento</h1>

  <p>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/nuevo"  class="btn btn-warning glyphicon glyphicon-plus" >Nuevo</a>
  </p>

  <div>
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/reporteConsulta" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
  </div>

  <form  class="navbar-form navbar-left" role="search" name="formulario_registro" method="POST">
    <input type="text" class="form-control" id="filtro" name="filtro">
    <button type="submit" class="btn btn-default">Filtrar </button>
  </form>

  <table  class="table table-hover">
    <thead>
      <tr>
        <th><input type="checkbox" id="" name="masivo"></th>
        <th>identificacion tipo mantenimiento</th>
        <th>descripcion tipo mantenimiento</th>
      </tr>
    </thead>

    <tbody>

      <?php foreach ($objMetodo as $tipoMantenimiento) : ?>        
        <tr>
          <td><input type="checkbox" id="" name=""></td>
          <td><?php echo $tipoMantenimiento->id ?></td>           
          <td><?php echo $tipoMantenimiento->descripcion ?></td>
          <td>

            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/ver?id=<?php echo $tipoMantenimiento->id ?>" class="btn btn-warning btn-xs">Ver </a>
            <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/editar?id=<?php echo $tipoMantenimiento->id ?>" class="btn btn-primary btn-xs">Editar</a>
            <a href="#" data-toggle='modal' data-target='#myModal<?php echo $tipoMantenimiento->id ?>' class="btn btn-danger btn-xs">eliminar</a>
            <?php include $fsConfig->getPath() . 'view/partial/modalEliminarTipoMantenimiento.php'; ?>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <?php $pagina->render() ?>

</div>
<script src="<?php echo $fsConfig->getUrl() ?>css/js/eliminar.js"></script>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>

