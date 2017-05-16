<?php
/*
*  2015 SLATY STORE
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.eu - Software License
*/

interface Offer {
  
  public function createOffer( $form = null );
  
  public function createCartByOffer( $articleList = null, $offerId = 0, $currencyId = 0, $taxId = 0, $userId = 0 );
  
  public function addOnArticleToOffer( $form = null );
  
  public function addOnArticleListToOffer( $form = null );
  
  public function updateOfferList( $form = null );
  
}