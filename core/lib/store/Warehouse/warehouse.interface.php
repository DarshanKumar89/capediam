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

interface Warehouse {
  
  public function createWarehouse( $form = null );
  
  public function createWHExpeditionTime( $form = null, $whId = 0 );
  
  public function updateWarehouseDataById( $form = null );
  
  public function updateWarehouseAL( $whId = 0, $wal = null, $action = 0, $value = 0 );
  
  public function useForceUpdateWarehouseAL( $whId = 0, $action = 0, $value = 0 );
  
  public function updateWHExpeditionTimes( $data = null );
  
  public function updateWHMatrixParXVs( $form = null );
  
  public function updateWHMatrixParABQty( $mId = 0, $articleId = 0 );
  
  public function impactImportALToWarehouse( $whId = 0, $action = 0, $value = 0 );
  
  public function addArticleListToWarehouse( $whId = 0, $ids = null, $qty = null, $action = 0, $value = 0 );
  
  public function addArticleToWarehouse( $form = null );
  
  public function addArticleListToWarehouseET( $whETId = 0, $whId = 0, $ids = null );
  
  public function AddImpactALToWarehouseET( $whId = 0, $whETId = 0 );
  
  public function addAttrVToWHMatrix( $mId = 0, $attrVId = 0, $cdt = 0, $cdv = 0, $parId = 0 );
  
  public function addAttrVSFToWHMatrix( $mId = 0, $data = null, $parId = 0 );
  
  public function whMatrixQtyRDById( $mId = 0, $parAVId = 0, $parBVId = 0 );
  
  public function deleteWarehouseByIds( $wIds = null );
  
  public function deleteWarehouseForce();
  
  public function deleteWarehouseSAL( $whId = 0, $ids = null );
  
  public function deleteSelectedWhEtAAL( $whETId = 0, $ids = null );
  
  public function deleteWHMatrixParXById( $mId = 0, $parId = 0 );
  
  public function deleteWHMatrixParXVs( $mId = 0, $data = null, $parId = 0 );
  
}