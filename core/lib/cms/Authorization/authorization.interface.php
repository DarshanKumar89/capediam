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

interface Authorization {
  
  public function isLogin();
  
  public function logout();
  
  public function checkForAuthentication();
  
  public function postAuthenticate( $email = '', $passwd = '' );
  
}