<?php

require_once '../model/base/terceroBaseTable.class.php';
require_once '../model/terceroTable.class.php';

require_once '../model/base/cargoBaseTable.class.php';
require_once '../model/cargoTable.class.php';

require_once '../model/base/tipoIdBaseTable.class.php';
require_once '../model/tipoIdTable.class.php';

require_once '../model/base/tipoTerceroBaseTable.class.php';
require_once '../model/tipoTerceroTable.class.php';

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
    
    $cargo = new cargoTable($config);
    $this->objcargo = $cargo->getAll();

    $tipoId = new tipoIdTable($config);
    $this->objTipoId = $tipoId->getAll();

    $tipoTercero = new tipoTerceroTable($config);
    $this->objTipoTercero = $tipoTercero->getAll();
    
    $metodo = new terceroTable($config);
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
    
    $this->defineView('tercero', 'index', 'html');
  }

}
