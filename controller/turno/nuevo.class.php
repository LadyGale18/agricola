<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of nuevo.class.php
 *
 * @author Lina Montaño <linamontaño@hotmail.com>
 * @package FStudio
 * @subpackage controller
 * @subpackage nuevo.class.php
 * @version 1.0.0
 */
class nuevo extends controller implements action {

  public function execute() {

    $this->defineView('turno', 'nuevoView', 'html');
  }

}
