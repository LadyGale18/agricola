<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of tipoDocumentoBaseTable
 * 
 * @author Angela Cardona <angela04cardona@hotmail.com>
 * @package FStudio
 * @subpackage model
 * @subpackage base
 * @version 1.0.0
 */
class tipoDocumentoBaseTable extends model {

  /**
   * ID de la tabla
   */
  const ID = 'tpd_id';

  /**
   * Descripcion del documento
   */
  const DESCRIPCION = 'tpd_descripcion';

  /**
   * Logitud de la descripcion
   */
  const DESCRIPCION_LENGTH = 80;

  /**
   * Descripcion del tipo de movimiento
   */
  const TIPO_MOVIMIENTO = 'tpd_tipo_movimiento';

  /**
   * logitud Tipo de movimiento documento
   */
  const TIPO_MOVIMIENTO_LENGTH = 80;

  /**
   * Estado documento
   */
  const ESTADO = 'tpd_estado';

  /**
   * Fecha y hora de creación del documento
   */
  const CREATED_AT = 'tdp_created_at';

  /**
   * Fecha y hora de la ultima actualización del documento
   */
  const UPDATED_AT = 'tdp_updated_at';

  /**
   * Fecha y hora para controlar el borrado lógico
   */
  const DELETED_AT = 'tdp_deleted_at';
  const _SEQUENCE = 'bda_tipo_documento_tpd_id_seq';
  const _TABLE = 'bda_tipo_documento';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;

  /**
   * id del registro del documento
   * @var integer
   */
  private $id;

  /**
   * muestra la descripcion del documento
   * @var varchar
   */
  private $descripcion;

  /**
   * muestra el movimiento del documento
   * @var varchar
   */
  private $tipo_movimiento;

  /**
   * mestra el estado del documento
   * @var boolean
   */
  private $estado;

  /**
   * Fecha y hora de creación del documento
   * @var date_time
   */
  private $created_at;

  /**
   * Fecha y hora de la ultima actualización del documento
   * @var date_time
   */
  private $updated_at;

  /**
   * Fecha y hora para controlar el borrado lógico
   * @var date_time
   */
  private $deleted_at;

  /**
   *
   * constructor class tipoDocumentoBaseTable
   * @version 1.0.0
   * @param integer $id
   * @param varchar $descripcion
   * @param varchar $movimiento
   * @param booleano $estado
   * @param date_time $createdAt
   * @param date_time $updateAt
   * @param date_time $deletedAt
   */
  public function __construct(config $config, $id = null, $descripcion = null, $tipo_movimiento = null, $estado = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->descripcion = $descripcion;
    $this->tipo_movimiento = $tipo_movimiento;
    $this->estado = $estado;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  /**
   * Retorna el id del registro
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Retorna la descripcion del documento
   * @return varchar
   */
  public function getDescripcion() {
    return $this->descripcion;
  }

  /**
   * Retorna el tipo de movimiento del documento
   * @return varchar
   */
  public function getTipoMovimiento() {
    return $this->tipo_movimiento;
  }

  /**
   * Retorna el estado del documento
   * @return boolean
   */
  public function getEstado() {
    return $this->estado;
  }

  /**
   * Retorna la fecha y la hora de creación del documento
   * @return date_time
   */
  public function getCreatedAt() {
    return $this->created_at;
  }

  /**
   * Fecha y hora de la ultima actualización de la descripcion del documento
   * @return date_time
   */
  public function getUpdatedAt() {
    return $this->updated_at;
  }

  /**
   * Retorna la fecha y la hora del borrado lógico del registro
   * @return date_time
   */
  public function getDeletedAt() {
    return $this->deleted_at;
  }

  /**
   * Fija el id del registro del documento
   * @param integer $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * descripcion del tipo de documento
   * @param varchar $descripcion
   */
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  /**
   * movimiento del documento
   * @param varchar $movimiento
   */
  public function setTipoMovimiento($tipo_movimiento) {
    $this->tipo_movimiento = $tipo_movimiento;
  }

  /**
   * estado del documento
   * @param boolean  $estado
   */
  public function setEstado($estado) {
    $this->estado = $estado;
  }

  /**
   * Fija la fecha y la hora de creación del documento
   * @version 1.0.0
   * @param date_time $createdAt
   */
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  /**
   * Fija la fecha y la hora de la última actualización del documento
   * @version 1.0.0
   * @param date_time $updateAt
   */
  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  /**
   * Fija la fecha y la hora del borrado lógico
   * @version 1.0.0
   * @param date_time $deletedAt
   */
  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
