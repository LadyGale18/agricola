<?php

require_once '../model/base/controlAdministrativoRiegoBaseTable.class.php';
require_once '../model/controlAdministrativoRiegoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Duvier Marin <duvier_24@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class index extends controller implements action {

    public function execute() {
    $config = $this->getConfig();
    $control = new controlAdministrativoRiegoTable($config);
     $this->objCar = $control->getAll();
          
     $this->defineView('controlAdministrativoRiego', 'index', 'html');
    }
}
