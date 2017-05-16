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

class Hash {
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var int **/
  private $length = 10;
  
  public function __construct( Registry $registry ) {
    self::$registry = $registry;
  }
  
  public function sha512( $a = null )
  {
    return hash('sha512', $a);
  }
  
  public function ripemd128( $a = null )
  {
    return hash('ripemd128', $a);
  }

  public function genSid()
  {
    $sid = $this->x512( $this->generateRandomString() );
    
    if($this->checkSid( $sid ) === true) {
      $this->genSid();
    } else {
      return $sid;
    }
  }
  
  public function generateRandomString( $length = 0 ) 
  {
    $characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $stringLength = ((int) $length > 0) ? (int) $length : $this->length;
    $randomString = '';
    for ($i = 0; $i < $stringLength; $i++) {
      $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
  }
  
  private function checkSid( $sid = '' )
  {
    $qry = "SELECT 
              sid
            FROM
              app_users_auth";
    $keys = array(
      ':sid' => (string) $sid
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() === 1) ? true : false;
  }
  
}