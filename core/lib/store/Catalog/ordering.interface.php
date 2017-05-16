<?php
/*
*  2014 KCMS
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.cz>
*  @copyright  2014 Kolovratrok s.r.o.
*  @license    http://www.slatyfork.cz - Software License
*/

interface Ordering {

  public function createOrderingRule( $form = null );
  
  public function editOrderingRule( $form = null );
  
  public function updateAllOrderingRule( $form = null );
  
}