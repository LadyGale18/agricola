<?php

require_once '../model/base/terceroBaseTable.class.php';
require_once '../model/terceroTable.class.php';
require_once '../libs/fpdf/fpdf.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of reporte
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class reporte extends controller implements action {

  public function execute() {

    $config = $this->getConfig();
    $tercero = new terceroTable($config);
    $this->objtercero = $tercero->getAll();

    // así declaramos la vista a usar
    $this->defineView('tercero', 'reporte', 'html');
  }

}
