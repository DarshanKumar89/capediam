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

require_once __LIB_DIR__ . 'detector/detector.php';

class iDetector extends Detector {
  
  /** @var Registry **/
  protected static $registry;
  
  private static $iua;
  
  public function __construct( Registry $registry ) 
  { 
    parent::__construct();
    
    self::$registry = $registry;
    
    self::$iua = Detector::build();
    self::$iua->family = featureFamily::find(self::$iua);
  }
  
  public function detect()
  {
    return self::$iua;
  }
  
}