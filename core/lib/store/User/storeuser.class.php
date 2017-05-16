<?php
/*
*  2015 Slaty Site
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.cz - Software License
*/

interface StoreUser {
  
  public function uniqueUserId();
  
  public function createUser( $sToken = '', $skey = '', $langId = 0, $visitor = null, $detector = null );
  
  public function updateUserList( $form = null );
  
  public function getUserWidgetsData();
  
}