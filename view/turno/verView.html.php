<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>Turno</h1>
  <div class="list-group">
    <?php foreach ($objturno as $turno):?>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">ID</h4>
      <p class="list-group-item-text"><?php echo $turno->id ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Descripción</h4>
      <p class="list-group-item-text"><?php echo $turno->descripcion ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Hora inicio</h4>
      <p class="list-group-item-text"><?php echo $turno->hora_inicio ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Hora fin</h4>
      <p class="list-group-item-text"><?php echo $turno->hora_fin ?></p>
    </div>
    <div href="" class="list-group-item ">
      <h4 class="list-group-item-heading">Estado</h4>
      <p class="list-group-item-text"><?php echo $turno->estado ?></p>
    </div>
    <?php endforeach;?>
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl()?>index.php/turno/index" class="btn btn-default">Volver</a>
    </div>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>