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

class Sessions {
  
  /** @var Registry **/
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function set( $key = '', $value = '' )
  {
    $_SESSION[ $key ] = $value;
  }
  
  public function get( $key = '' )
  {
    return (array_key_exists( $key, $_SESSION )) ? $_SESSION[ $key ] : null;
  }
  
  public function put( $collection = '', $key = '', $value = '' )
  {
   if(array_key_exists( $collection, $_SESSION)) {
     $_SESSION[ $collection ] = [];
   }
   $_SESSION[ $collection ][ $key ] = $value;
  }
  
  public function check( $key = '' )
  {
    return array_key_exists( $key, $_SESSION );
  }
  
  public function clear( $collection = '', $key = '' )
  {
    if(array_key_exists( $collection, $_SESSION)) {
      unset( $_SESSION[ $collection ][ $key ]);
    }
  }
  
  public function remove( $key = '' )
  {
    if(array_key_exists( $key, $_SESSION)) {
      unset( $_SESSION[ $key ] );
    }
  }
  
}