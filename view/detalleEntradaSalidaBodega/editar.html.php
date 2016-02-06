<?php 
use FStudio\fsController as controller;

include_once $fsConfig->getPath() . 'view/partial/head.php';
?>
<h1>Modificar Informacion</h1>
<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo $fsConfig->getUrl()?>index.php/detalleEntradaSalidaBodega/actualizar" method="post">
        <input type="hidden" name="detalleEntradaSalidaBodega[desId]" value="<?php echo $objDetalleEntradaSalidaBodega[0]->id ?>">
        <div class="form-group" class="modificar">
            <label for="desId">Id </label>
            <input value="<?php echo $objDetalleEntradaSalidaBodega[0]->id ?>" type="text" class="form-control" id="desId" name="detalleEntradaSalidaBodega[desId]" placeholder="id">
        </div>
        <div class="form-group" class="modificar">
            <label for="esbId">id entrada salida bodega</label>
            <input value="<?php echo $objDetalleEntradaSalidaBodega[0]->entrada_salida_bodega_id ?>" type="text" class="form-control" id="esbId" name="detalleEntradaSalidaBodega[esbId]" placeholder="id entrada salida bodega">
        </div>
        <div class="form-group" class="modificar">
        <label for="proId">id de producto </label>
        <input value="<?php echo $objDetalleEntradaSalidaBodega[0]->producto_id ?>" type="text" class="form-control" id="proId" name="detalleEntradaSalidaBodega[proId]" placeholder="id producto">
        </div>
        <div class="form-group" class="modificar">
            <label for="unmId">id unidad medida </label>
            <input value="<?php echo $objDetalleEntradaSalidaBodega[0]->unidad_medida_id ?>" type="text" class="form-control" id="unmId" name="detalleEntradaSalidaBodega[unmId]" placeholder="id unidad medida">
        </div>
        <div class="form-group" class="modificar">
        <label for="desCantidad">cantidad </label>
        <input value="<?php echo $objDetalleEntradaSalidaBodega[0]->cantidad ?>" type="text" class="form-control" id="desCantidad" name="detalleEntradaSalidaBodega[desCantidad]" placeholder="cantidad">
        </div>
        <div class="form-group" class="modificar">
            <label for="desPrecio">precio $</label>
            <input value="<?php echo $objDetalleEntradaSalidaBodega[0]->precio ?>" type="text" class="form-control" id="desPrecio" name="detalleEntradaSalidaBodega[desPrecio]" placeholder="precio">
        </div>
        <br>
        <div id="modificar">
        <button  type="submit" class="btn btn-default">Actualizar</button>
        <button> <a href="<?php echo $fsConfig->getUrl() ?>index.php/detalleEntradaSalidaBodega/index">Cancelar</a></button>
        </div>
    </form>
</div>
<?php include_once $fsConfig->getPath() . 'view/partial/foot.php'; ?>