<?php
/*
*  2015 SLATY STORE
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.cz>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.eu - Software License
*/

interface Status {
  
  public function createStatus( $form = null );
  
  public function updateStatus( $form = null, $statusId = 0 );
  
  public function updateStatuses( $form = null );
  
}