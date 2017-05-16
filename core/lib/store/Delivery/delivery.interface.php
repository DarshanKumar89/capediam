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

interface Delivery {
  
  public function createDelivery( $form = null );
  
  public function updateDelivery( $form = null );
  
  public function updateAllDelivery( $form = null );
  
  public function updateDeliveryPaymentTies( $form = null );
  
}