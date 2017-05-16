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

interface Currencies {
  
  public function createCurrency( $form = null );
  
  public function getCurrenciesList();
  
  public function saveChangesOnCurrencies( $form = null );
  
  public function isExistsCurrencyById( $currencyId = 0 );
  
  public function getCurrencyDataById( $currencyId = 0 );
  
  public function saveChangeOnCurrency( $form = null, $currencyId = 0 );
  
  public function getCurrenciesCount();
  
}