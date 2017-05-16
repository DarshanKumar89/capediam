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

class ObjectsStorage {
  
  /**  @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function add( $key = null, $obj = null )
  {
    return ((bool) self::$registry->getService('objects')->isObjectKey( $key ) === true) ? self::$registry->getService('objects')->insertObject($key, $obj) : false;
  }
  
  public function get( $key = null )
  {
    return ((bool) self::$registry->getService('objects')->isObjectKey( $key ) === true) ? self::$registry->getService('objects')->object( $key ) : null;
  }
  
}