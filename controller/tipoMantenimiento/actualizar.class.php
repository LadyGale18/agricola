<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of  actualizar
 * @author Itiani Moreno Rosero <itiani2811@gmail.com>
 * @package
 * @subpackage model
 * @subpackage table
 * @version 1.0.0
 */
class actualizar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $tipoMantenimiento = new tipoMantenimientoTable($config);
    
    $formTipoMantenimiento = filter_input_array(INPUT_POST)['tipoMantenimiento'];

    
    $tipoMantenimiento->setDescripcion($formTipoMantenimiento['tma_descripcion']);


    $this->objtipoMantenimiento = $tipoMantenimiento->update();

      header('Location: ' . $config->getUrl() . 'index.php/tipoMantenimiento/index');
  }

}
