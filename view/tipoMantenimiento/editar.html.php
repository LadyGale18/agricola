<?php

use FStudio\fsController as controller ?>
<?php include_once $fsConfig->getPath() . 'view/partial/head.php'; ?>


  <h1>Editar</h1>
  <div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/actualizar" method="post">
      <input type="hidden" name="tipoMantenimiento[tma_id]" value="<?php echo $objtipoMantenimiento[0]->id ?>">

      <div class="form-group" class="modificar">
        <label for="tma_descripcion">Descripcion</label>
        <input value="<?php echo $objtipoMantenimiento[0]->descripcion ?>" type="text" class="form-control" id="tma_descripcion" name="tipoMantenimiento[tma_descripcion]" placeholder="descripcion">
      </div>

         <div id="modificar">
        <button  type="submit" class="btn btn-default">Actualizar</button>
        <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/index">Cancelar</a></button>
        </div>
    </form>

  </div>

<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>

