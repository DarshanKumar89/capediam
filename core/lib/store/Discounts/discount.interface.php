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

interface Discount {
  
  public function createDiscountCircuit( $form = null );
  
  public function updateDiscountCircuit( $form = null );
  
  public function insertArticleListToDiscountCircuit( $dCircuitId = 0, $ids = null );
  
  public function deleteArticleListFromDiscountCircuit( $dCircuitId = 0, $articleList = null );
  
  public function deleteDiscountCircuitById( $dCircuitId = 0 );
  
}