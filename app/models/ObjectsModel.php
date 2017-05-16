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

class ObjectsModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function insertObject( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_objects_storage', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function isObjectKey( $key = null )
  {
    $qry = "SELECT
              id_obj
            FROM
              app_objects_storage";
    $keys = array(
      ':obj_key' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function object( $key = null )
  {
    $qry = "SELECT
              obj_value
            FROM
              app_objects_storage";
    $keys = array(
      ':obj_key' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->obj_value : null;
  }
          
}