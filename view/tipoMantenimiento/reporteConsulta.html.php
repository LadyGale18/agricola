<?php
include_once $fsConfig->getPath() . 'view/partial/head.php' ?>
<div class="container container-fluid">
  <h1>reporte  </h1>

  
    <form id="form1" action="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/reporte" method="post">
      <input type="date" id="fecha1" name="echa1"/> and <input type="date" id="fecha2" id="fecha2"></a>
    <button type="submit">ver entre </button>
  </form>
 
    <table  class="table table-hover">
      <thead>
        <tr>
          <th><input type="checkbox" id="" name=""></th>
      
          <th>Id  </th>
          <th>descripcion</th>
          <td>creado</td>
          
        </tr>
      </thead>
      <tbody>
     <?php foreach ($objtipoMantenimiento as $tipoMantenimiento) : ?>        
           <tr>
            <td><input type="checkbox" id="" name=""></td>
            <td><?php echo $tipoMantenimiento->id ?></td>           
            <td><?php echo $tipoMantenimiento->descripcion ?></td>
            <td><?php echo $tipoMantenimiento->created_at ?></td>
            <?php endforeach ?>
      </tbody>
    </table>
    <div>
        <a href="<?php echo $fsConfig->getUrl() ?>index.php/tipoMantenimiento/reporte" target="_blank" class="btn btn-primary btn-xs">Ver Reporte</a>
    </div>
</div>
