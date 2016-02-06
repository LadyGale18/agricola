<?php

require_once '../model/base/detalleCaudalSurcoBaseTable.class.php';
require_once '../model/detalleCaudalSurcoTable.class.php';

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
    $caudal = new detalleCaudalSurcoTable($config);
    $this->objCaudal = $caudal->getAll();
    
     $this->defineView('detalleCaudalSurco', 'index', 'html');
    }
}
