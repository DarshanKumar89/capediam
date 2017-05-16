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

class Translator {
  
  /** @var Registry **/
  protected static $registry;
  
  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function translate( $key = '' )
  {
    $qry = "SELECT
              t_value
            FROM
              app_dictionary";
    $keys = array(
      ':l_key' => self::$registry->getService('languages')->getCurrentLanguage(),
      ':t_key' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? html_entity_decode(self::$registry->getService('storage')->getResult()[0]->t_value, ENT_QUOTES, "UTF-8") : null;
  }
  
  public function getDictionary()
  {
    $qry = "SELECT
              t_key, t_value
            FROM
              app_dictionary";
    $keys = array(
      ':l_key' => self::$registry->getService('languages')->getCurrentLanguage()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
 
}