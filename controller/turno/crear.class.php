<?php

require_once '../model/base/turnoBaseTable.class.php';
require_once '../model/turnoTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of crear.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage crear.class.php
 * @version 1.0.0
 */
class crear extends controller implements action{
  
  public function execute() {
    
    $config = $this->getConfig();
    
    $formturno = filter_input_array(INPUT_POST)['turno'];    
    $turno = new turnoTable($config);
    $turno->setDescripcion($formturno['descripcion']);
    $turno->setHoraInicio($formturno['horainicio']);
    $turno->setHoraFin($formturno['horafin']);
    $turno->setEstado($formturno['estado']);
    $this->objturno = $turno->save();
    
    header('Location: ' . $config->getUrl() . 'index.php/turno/index');
    exit();
    
  }
  
}
