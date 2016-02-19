<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';
require_once '../libs/Zebra_Pagination.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Lina Montaño <linamontaño@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {

    $config = $this->getConfig();

    $turno = new turnoTable($config);

    $paginacion = new Zebra_Pagination();
    $this->objRespuesta = $turno->total();
    $resultado = 5;
    $pagina = ($paginacion->get_page() - 1 ) * $resultado;

    $this->objturno = $turno->getAll($resultado, $pagina);
    $this->defineView('turno', 'index', 'html');
  }

}
