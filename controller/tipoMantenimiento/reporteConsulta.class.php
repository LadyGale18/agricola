<?php

require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';
require_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of reporte
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class reporteConsulta extends controller implements action {

  public function execute() {
   $config = $this->getConfig();
    $tipoMantenimiento = new tipoMantenimientoTable($config);
    $this->objtipoMantenimiento = $tipoMantenimiento->getAll();
    $fecha1= filter_input(INPUT_POST, 'fecha1');
    $fecha2= filter_input(INPUT_POST, 'fecha2');
    

    $this->defineView('tipoMantenimiento', 'reporteConsulta', 'html');
  }

}
