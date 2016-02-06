<?php

use FStudio\fsController as controller; ?>
<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
   
  <h1>Nuevo</h1>
  <form class="form-horizontal" action=" <?php echo $fsConfig->getUrl()?>index.php/tipoMantenimiento/crear" method="POST">
        <div class="form-group">
      <label for="tma_descripcion" class="col-sm-2 control-label">descripcion tipo mantenimiento</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="tma_descripcion"  name="tipoMantenimiento[tma_descripcion]"placeholder="descripcion tipo mantenimiento">
      </div>
    </div>


    <div id="modificar">
      <button  type="submit" class="btn btn-default">guardar</button>
      <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/index">Cancelar</a></button>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>
