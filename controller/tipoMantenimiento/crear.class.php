<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class crear extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $tipoMantenimiento = new tipoMantenimientoTable($config);
    $formTipoMantenimiento = filter_input_array(INPUT_POST)['tipoMantenimiento'];

    
    $tipoMantenimiento->setDescripcion($formTipoMantenimiento['tma_descripcion']);


    $this->objtipoMantenimiento = $tipoMantenimiento->save();

    header('Location: ' . $config->getUrl() . 'index.php/tipoMantenimiento/index');
    exit();
  }

}
