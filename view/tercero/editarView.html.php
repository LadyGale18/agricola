<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Editar tercero</h1>
  <form class="form-horizontal" action="<?php echo $fsConfig->getUrl() ?>index.php/tercero/actualizar" method="POST" >
    <input value="<?php echo $objtercero[0]->id ?>" type="hidden" name="tercero[id]">
    <div class="form-group">
      <label for="nombre" class="col-sm-2 control-label">nombre</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->nombre ?>" type="text" class="form-control" id="nombre" name="tercero[nombre]" required autofocus="">
      </div>
    </div>
    <div class="form-group">
      <label for="apellido" class="col-sm-2 control-label">apellido</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->apellido ?>" type="text" class="form-control" id="apellido" name="tercero[apellido]" placeholder="Nick Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="telefono" class="col-sm-2 control-label">telefono</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->telefono ?>" type="text" class="form-control" id="telefono" name="tercero[telefono]" placeholder="Nick Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="direccion" class="col-sm-2 control-label">direccion</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->direccion ?>" type="text" class="form-control" id="direccion" name="tercero[direccion]" placeholder="Nick Name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="correo" class="col-sm-2 control-label">correo</label>
      <div class="col-sm-10">
        <input value="<?php echo $objtercero[0]->correo ?>" type="text" class="form-control" id="correo" name="tercero[correo]" placeholder="Nick Name" required>
      </div>
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
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo $fsConfig->getUrl() ?>index.php/tercero/index" class="btn btn-warning">Cancelar</a>
      </div>
    </div>
  </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>