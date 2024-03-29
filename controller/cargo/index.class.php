<?php

require_once '../model/base/cargoBaseTable.class.php';
require_once '../model/cargoTable.class.php';

require_once '../libs/Zebra_Pagination.php';


use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    
    $metodo = new cargoTable($config);
    $paginacion = new Zebra_Pagination();
    $this->objRespuesta = $metodo->total();
    $respuesta = $this->objRespuesta[0];
    $resultado = 5;
    $pagina = ($paginacion->get_page() - 1 ) * $resultado;
    
    $indicio = filter_input(INPUT_POST, 'filtro');
    if (empty($indicio)) {
    $this->objMetodo = $metodo->pager($resultado, $pagina);
    } else{
      $this->objFiltro = $metodo->filtro($indicio);
      $this->objMetodo = $this->objFiltro;
    }
    
    
    $this->defineView('cargo', 'index', 'html');
  }

}
