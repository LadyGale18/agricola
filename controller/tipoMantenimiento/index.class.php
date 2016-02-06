<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';
include_once '../libs/Zebra_Pagination.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {


    $config = $this->getConfig();
    $metodo = new tipoMantenimientoTable($config);
    $paginacion = new Zebra_Pagination();
    $this->objRespuesta = $metodo->total();
    $respuesta = $this->objRespuesta[0];
    $resultado = 2;
    $pagina = ($paginacion->get_page() - 1 ) * $resultado;

    $indicio = filter_input(INPUT_POST, 'filtro');
    if (empty($indicio)) {
      $this->objMetodo = $metodo->pager($resultado, $pagina);
    } else {
      $this->objFiltro = $metodo->filtro($indicio);
      $this->objMetodo = $this->objFiltro;
    }




    $this->defineView('tipoMantenimiento', 'index', 'html');
  }

}
