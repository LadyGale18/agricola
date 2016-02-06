<?php

require_once '../model/base/metodoRiegoBaseTable.class.php';
require_once '../model/metodoRiegoTable.class.php';

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
class delete extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $metodo = new metodoRiegoTable($config);            
    $id = filter_input(INPUT_GET, 'id');
    $metodo->setId($id);
    $metodo->delete();
    
    header('Location: ' .  $config->getUrl() .'index.php/metodoRiego/index');    
  }

}
