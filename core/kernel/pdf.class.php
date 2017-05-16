<?php
/*
*  2015 MOZAYC
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.eu - Software License
*/

require_once __LIB_DIR__ . 'pdf/vendor/autoload.php';
// setting
define('DOMPDF_ENABLE_AUTOLOAD', false);
// configs
require_once __LIB_DIR__ . 'pdf/vendor/dompdf/dompdf/dompdf_config.inc.php';
require_once __LIB_DIR__ . 'pdf/vendor/dompdf/dompdf/dompdf_config.custom.inc.php';

class PDF extends DOMPDF {
  
  /** @var Registry */
  protected static $registry;

  public function __construct( Registry $registry )
  {
    parent::__construct();
    
    self::$registry = $registry;
  }
  
}