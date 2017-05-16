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

interface Drive { 
  
  public function createFolder( $form = null );
  
  public function foldersStructure( $folderId = 0 );
  
  public function driveLeftNavTree();

  public function renameItemOnDrive( $kind = null );
  
  public function moveItemsOnDrive( $form = null );
  
  public function removeItemsFromDrive( $kind = null );
  
  public function restoreItemsFromDrive( $kind = null );
  
  public function deleteForeverItemsFromDrive( $kind = null );
  
  public function restoreTrash();
  
  public function deleteTrash();
  
}