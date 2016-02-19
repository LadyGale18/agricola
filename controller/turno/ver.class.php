<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of ver.class.php
 *
 * @author Lina Montaño <linamontaño@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class ver extends controller implements action {

  public function execute() {

    $id = filter_input(INPUT_GET, 'id');
    $config = $this->getConfig();
    $turno = new turnoTable($config);
    $this->objturno = $turno->getById($id);

    $this->defineView('turno', 'verView', 'html');
  }

}
