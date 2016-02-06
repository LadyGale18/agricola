<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>
  <h2>tipo mantenimiento numero: <?php echo $objtipoMantenimiento[0]->id ?></h2>

  <div class="list-group">
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">Id tipo mantenimiento</h4>
      <p class="list-group-item-text"><?php echo $objtipoMantenimiento[0]->id ?></p>
    </div>
    
    
    <div class="list-group-item ">
      <h4 class="list-group-item-heading">descripcion</h4>
      <p class="list-group-item-text"><?php echo $objtipoMantenimiento[0]->descripcion ?></p>
    </div>
        <div class="list-group-item ">
      <h4 class="list-group-item-heading">Creada</h4>
      <p class="list-group-item-text"><?php echo $objtipoMantenimiento[0]->created_at ?></p>
    </div>
 
  
  <div class="text-right">
    <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/index" class="btn btn-default">Volver</a>
  </div>

</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>