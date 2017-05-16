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

interface Order {
  
  public function createOrder( $cartId = 0, $currencyId = 0, $taxId = 0  );
  
  public function updateOrder( $form = null );
  
  public function changeOrderAddress( $form = null );
  
  public function addOnArticleListToOrder( $form = null );
  
  public function createNewContantOnAddressBook( $form = null, $secureKey = '' );
  
  public function duplicateOrderById( $orderId = 0 );
  
  public function updateAddressByContactId( $form = null, $contactId = 0, $secureKey = '' );
  
  public function setAddressOnOrder( $form = null, $secureKey = '' );
  
  public function setDeliveryAndPaymentOnOrder( $form = null, $secureKey = '' );
  
  public function calculateCostOrder();
  
  public function orderCSAL();
  
  public function changeStatusOrder( $form = null );
  
  public function isOrderPersonalPickup();
  
  public function createSettingRule( $form = null );
  
  public function updateSettingRule( $form = null );
  
  public function orderingSettingRules( $form = null );
  
  public function orderWidgets();

  public function removeOSRById( $osrId = 0 );
  
  // PAY
  
  public function orderPayByWebPay( $orderId = 0 );
          
}