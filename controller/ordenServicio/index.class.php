<?php

require_once '../model/base/ordenServicioBaseTable.class.php';
require_once '../model/ordenServicioTable.class.php';

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
    $index = new ordenServicioTable($config);
    $this->objordenServicio = $index->getAll();
    // así declaramos la vista a usar
    $this->defineView('ordenServicio', 'index', 'html' );  
  }

}
   