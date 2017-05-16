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

interface Taxes {
  
  public function createTax( $form = null );
  
  public function saveChangesOnTaxes( $form = null );
  
  public function saveChangeOnTax( $form = null, $taxId = 0 );
  
  public function getTaxesList();
  
  public function getTaxDataById( $taxId = 0 );
  
  public function getTaxesCount();
  
  public function isExistsTaxById( $taxId = 0 );
  
}