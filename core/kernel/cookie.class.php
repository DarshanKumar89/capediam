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

class Cookie {
  
  /** @var Registry **/
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function set( $key = '', $value = '', $time = null )
  {
    (!is_null($time)) ? setcookie( $key, $value, $time ) : setcookie( $key, $value, time() + 86400 );
  }
  
  public function get( $key = '' )
  {
    return (array_key_exists( $key, $_COOKIE )) ? $_COOKIE[ $key ] : null;
  }
  
  public function update( $key = '', $value = '' )
  {
    if(isset($_COOKIE[ $key ])) {
      $_COOKIE[ $key ] = $value;
    }
  }
  
  public function check( $key = '' )
  {
    return isset($_COOKIE[ $key ]);
  }
  
  public function delete( $key = '' )
  {
    if(array_key_exists( $key, $_COOKIE)) {
      unset( $_COOKIE[ $key ] );
    }
  }
  
}