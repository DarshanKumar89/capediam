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

class Authenticate {
  
  /** @var Registry **/
  protected static $registry;

  /** @var string **/
  private $sid;

  /** @var bool **/
  private $loggedIn = false;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
    
  public function checkForAuthentication()
  {
    $this->sid = self::$core->getService('session')->getSession('sn_auth_session_uid');
    if( isset($this->sid) ) {
      self::$core->getObject('registry', 'User')->checkUserBySID( $this->sid );
      if ( self::$core->getObject('registry', 'User')->isValid() ) {
        $this->loggedIn = true;
      }
    }
  }
  
  public function postAuthenticate($a,$b,$c)
  {
    self::$core->getObject('registry', 'User')->verifyLoginData($a,$b,$c);
    if ( self::$core->getObject('registry', 'User')->isValid() ) {
        $this->loggedIn = true;
        self::$core->getObject('modul', 'Session')->setSession('sn_auth_session_uid',self::$core->getObject('registry', 'User')->getUserSID());
        return true;
    } else {
      return false;
    }
  }
  
  public function isLogin()
  {
    return $this->loggedIn;
  }
    
  public function logout() 
  {
    $this->loggedIn = false;
    self::$core->getObject('modul', 'Session')->removeSession('sn_auth_session_uid');
  }
    
}