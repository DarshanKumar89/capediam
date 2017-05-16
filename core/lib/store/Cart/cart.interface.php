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

interface Cart {
  
  public function getCart();
  
  public function addToCard( $articleRef = '', $qty = 1, $parAId = 0, $parBId = 0, $currencyId = 0, $taxId = 0 );
  
  public function updateCarts( $form = null );
  
  public function removeArticleFromCart( $itemId = 0 );
  
}