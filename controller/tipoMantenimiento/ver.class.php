<?php
require_once '../model/base/tipoMantenimientoBaseTable.class.php';
require_once '../model/tipoMantenimientoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of ver
 *
 * @author Diana Meneses <meneses_d@rocketmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class ver extends controller implements action{

  public function execute() {
    $config = $this->getConfig();
    $id  = filter_input(INPUT_GET, 'id');
    $tipoMantenimiento = new tipoMantenimientoTable($config);
    
    $this->objtipoMantenimiento = $tipoMantenimiento->getById($id);

    $this->defineView('tipoMantenimiento', 'ver', 'html');
  }

}
