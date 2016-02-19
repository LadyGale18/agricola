<?php

require_once '../model/base/terceroBaseTable.class.php';
require_once '../model/terceroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of index.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage index.class.php
 * @version 1.0.0
 */
class delete extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $tercero = new terceroTable($config);            
    $id = filter_input(INPUT_GET, 'id');
    $tercero->setId($id);
    $tercero->delete();
    
    header('Location: ' .  $config->getUrl() .'index.php/tercero/index');    
  }

}
