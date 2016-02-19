<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of eliminar.class.php
 *
 * @author Lina Montaño <linamontaño@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage eliminar.class.php
 * @version 1.0.0
 */
class eliminar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $id = filter_input(INPUT_GET, 'id');

    $turno = new turnoTable($config);
    $turno->setId($id);
    $this->objturno = $turno->delete();

    header('Location: ' . $config->getUrl() . 'index.php/turno/index');
    exit();
    
  }

}
