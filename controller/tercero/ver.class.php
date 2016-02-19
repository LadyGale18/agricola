<?php

require_once '../model/base/terceroBaseTable.class.php';
require_once '../model/terceroTable.class.php';

require_once '../model/base/cargoBaseTable.class.php';
require_once '../model/cargoTable.class.php';

require_once '../model/base/tipoIdBaseTable.class.php';
require_once '../model/tipoIdTable.class.php';

require_once '../model/base/tipoTerceroBaseTable.class.php';
require_once '../model/tipoTerceroTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of ver.class.php
 *
 * @author Jordan Marles <jordanmarles@hotmail.es>
 * @package FStudio
 * @subpackage controller
 * @subpackage ver.class.php
 * @version 1.0.0
 */
class ver extends controller implements action {

  public function execute() {

    $config = $this->getConfig();

    $cargo = new cargoTable($config);
    $this->objcargo = $cargo->getAll();

    $tipoId = new tipoIdTable($config);
    $this->objTipoId = $tipoId->getAll();

    $tipoTercero = new tipoTerceroTable($config);
    $this->objTipoTercero = $tipoTercero->getAll();

    $id = filter_input(INPUT_GET, 'id');

    $tercero = new terceroTable($config);

    $this->objtercero = $tercero->getById($id);

    $this->defineView('tercero', 'verView', 'html');
  }

}
