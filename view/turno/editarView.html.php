<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Editar turno</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/turno/actualizar" method="POST" >
    <input value="<?php echo $objturno[0]->id ?>" type="hidden" name="turno[id]">
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
      <div class="col-sm-10">
        <input value="<?php echo $objturno[0]->descripcion ?>" type="text" class="form-control" id="descripcion" name="turno[descripcion]" placeholder="Nick Name" required autofocus="">
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Hora inicio</label>
      <div class="col-sm-10">
        <input value="<?php echo $objturno[0]->hora_inicio ?>" type="time" class="form-control" id="horainicio" name="turno[horainicio]" placeholder="Nick Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Hora fin</label>
      <div class="col-sm-10">
        <input value="<?php echo $objturno[0]->hora_fin ?>" type="time" class="form-control" id="horafin" name="turno[horafin]" placeholder="Nick Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Estado</label>
      <div class="col-sm-10">
        <input value="<?php echo $objturno[0]->estado ?>" type="text" class="form-control" id="estado" name="turno[estado]" placeholder="Nick Name" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/turno/index" class="btn btn-warning">Cancelar</a>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>