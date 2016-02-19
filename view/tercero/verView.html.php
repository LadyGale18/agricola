<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Tercero</h1>
  <div class="list-group">
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">ID</h4>
      <p class="list-group-item-text"><?php echo $objtercero[0]->id ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">nombre</h4>
      <p class="list-group-item-text"><?php echo $objtercero[0]->nombre ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">apellido</h4>
      <p class="list-group-item-text"><?php echo $objtercero[0]->apellido ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">telefono</h4>
      <p class="list-group-item-text"><?php echo $objtercero[0]->telefono ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">direccion</h4>
      <p class="list-group-item-text"><?php echo $objtercero[0]->direccion ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">correo</h4>
      <p class="list-group-item-text"><?php echo $objtercero[0]->correo ?></p>
    </div>
    <div href="" class="list-group-item ">
        <h4 class="list-group-item-heading">Cargo</h4>
        <?php foreach ($objcargo as $cargo):?>
        <?php if ($cargo->id == $objtercero[0]->cargo_id):?>
        <p class="list-group-item-text"><?php echo $cargo->descripcion ?></p>
        <?php endif;?>
        <?php endforeach;?>
      </div>
      <div href="" class="list-group-item ">
        <h4 class="list-group-item-heading">Tipo Id</h4>
        <?php foreach ($objTipoId as $tipoId):?>
        <?php if ($tipoId->id == $objtercero[0]->tipo_id):?>
        <p class="list-group-item-text"><?php echo $tipoId->descripcion ?></p>
        <?php endif;?>
        <?php endforeach;?>
      </div>
      <div href="" class="list-group-item ">
        <h4 class="list-group-item-heading">Tipo tercero Id</h4>
        <?php foreach ($objTipoTercero as $tipoTercero):?>
        <?php if ($tipoTercero->id == $objtercero[0]->tipo_tercero_id):?>
        <p class="list-group-item-text"><?php echo $tipoTercero->descripcion ?></p>
        <?php endif;?>
        <?php endforeach;?>
      </div>
    
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl()?>index.php/tercero/index" class="btn btn-default">Volver</a>
    </div>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>