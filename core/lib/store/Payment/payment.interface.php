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

interface Payment {
  
  public function createPayment( $form = null );
  
  public function updatePayment( $form = null );
  
  public function updateAllPayment( $form = null );
  
}