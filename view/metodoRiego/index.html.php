<?php include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'libs/Zebra_Pagination.php' ?>
<?php $pagina = new Zebra_Pagination(); ?>
<?php $pagina->records($objRespuesta[0]) ?>
<?php $pagina->records_per_page(2) ?>
<div class="container container-fluid">
  <h1>Metodo de Riego <small> ver</small></h1>    
  <hr>
  <div class="">
    <div>
      <a href="<?php echo $fsConfig->getUrl() ?>index.php/metodoRiego/nuevo" class="btn btn-success" >
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Agregar un  nuevo Metodo</a>    
    </div>
    <form id="filtro_form" class="col-lg-3 col-lg-offset-7 form-inline" method="POST">
      <label><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
      <input name="filtro" id="filtro" class="form-control" placeholder="Buscar" >      
    </form>    
  </div>    
  <hr>    
  <?php if ($objMetodo !== false) : ?>  
    <table class="table table-bordered table-striped resultado ">
      <thead>
        <tr>
          <th></th>
          <th>Id</th> 
          <th>Descripción</th>
          <th>Creado</th>
          <th>Actualizado</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>                        
        <?php foreach ($objMetodo as $metodo): ?>      
          <tr>
            <td><input type="checkbox" name="<?php echo $metodo->id ?>"></td>
            <td><?php echo $metodo->id ?></td>
            <td><?php echo $metodo->descripcion ?></td>
            <td><?php echo $metodo->created_at ?></td>            
            <td><?php echo $metodo->updated_at ?></td>                        
            <td><a class="btn btn-primary" href="<?php echo $fsConfig->getUrl() ?>index.php/metodoRiego/actualizar?id=<?php echo $metodo->id ?>">
                <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Actualizar</a>
              <a class="btn btn-danger"  data-toggle="modal" data-target="#confirm-delete" href="#">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Inhabilitar</a>                
            </td>
          </tr>
        <?php endforeach ?>      
      </tbody>
      <tfoot>
      </tfoot>
    </table>  
    <?php $pagina->render() ?>
  <?php else : ?>
    <h2>No hay registros disponibles</h2>
  <?php endif; ?>    
  <?php include 'eliminar.php'; ?>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php' ?>