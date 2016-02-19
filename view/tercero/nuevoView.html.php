<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Crear nuevo registro para tercero</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/tercero/crear" method="POST" >
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" id="nombre" name="tercero[nombre]" required>      </div>
    </div>
    <div class="form-group">
      <label for="apellido" class="col-sm-2 control-label">apellido</label>
      <div class="col-sm-10">
        <input type="text" id="apellido" name="tercero[apellido]"  required>      </div>
    </div>
    <div class="form-group">
      <label for="telefono" class="col-sm-2 control-label">telefono</label>
      <div class="col-sm-10">
        <input type="number" id="telefono" name="tercero[telefono]"  required>      </div>
    </div>
    <div class="form-group">
      <label for="direccion" class="col-sm-2 control-label">direccion</label>
      <div class="col-sm-10">
        <input type="text" id="direccion" name="tercero[direccion]"  required>      </div>
    </div>
    <div class="form-group">
      <label for="correo" class="col-sm-2 control-label">correo</label>
      <div class="col-sm-10">
        <input type="email" id="correo" name="tercero[correo]"  required>    </div>
    </div>
    <div class="form-group">
      <label for="cargo" class="col-sm-2 control-label">cargo</label>
      <select name="tercero[cargoId]" id="cargo">
        <?php foreach ($objcargo as $cargo): ?>
          <option value="<?php echo $cargo->id ?>"><?php echo $cargo->descripcion ?></option>
        <?php endforeach ?>
      </select>
    </div>
    <div class="form-group">
      <label for="tipoID" class="col-sm-2 control-label">tipo ID</label>
      <select name="tercero[tipoId]" id="tipoID">
        <?php foreach ($objTipoId as $tipoId): ?>
          <option value="<?php echo $tipoId->id ?>"><?php echo $tipoId->descripcion ?></option>
        <?php endforeach ?>
      </select>
    </div>
    <div class="form-group">
      <label for="tipoTerceroId" class="col-sm-2 control-label">tipo Tercero Id</label>
      <select name="tercero[tipoTerceroId]" id="tipoTerceroId">
        <?php foreach ($objTipoTercero as $tipoTercero): ?>
          <option value="<?php echo $tipoTercero->id ?>"><?php echo $tipoTercero->descripcion ?></option>
        <?php endforeach ?>
      </select>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Registrar</button>
        <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/index" class="btn btn-warning">Cancelar</a>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>
