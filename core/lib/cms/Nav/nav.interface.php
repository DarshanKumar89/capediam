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

interface Nav {
  
  public function genUniqueNavId();
  
  public function navTree();
  
  public function createNav( $form = null );
  
  public function updateNav( $form = null );
  
  public function deleteNav( $model = 0, $id = 0 );
  
  public function createNavItem( $form = null );
  
  public function navItemOrderListById( $itemId = 0 );
  
  public function updateNavItemOrder( $form = null );
  
  public function updateNavItem( $form = null );

  public function insertNavItemImageById( $itemId = 0, $langId = 0, $images = null );

  /**
  *
  * NAVIGATION_FRONT_END_METHODS
  *
  **/
  
  public function navOnSiteById( $navHash = '' );
  
}