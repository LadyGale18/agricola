<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Crear nuevo registro para turno</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl()?>index.php/turno/crear" method="POST" >
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="descripcion" name="turno[descripcion]" placeholder="Descripcion" required="" autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Hora inicio</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="horainicio" name="turno[horainicio]" placeholder="horainicio" required="">
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Hora fín</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="horafin" name="turno[horafin]" placeholder="horafin" required="">
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-sm-2 control-label">Estado</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="estado" name="turno[estado]" placeholder="estado" required="">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo $fsConfig->getUrl()?>index.php/turno/index" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
