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

interface Page {
  
  public function createPage( $pagename = '' );
  
  public function createPageList( $pageListName = '' );
  
  public function updatePage( $form = null );
  
  public function updatePageList( $form = null );
  
  public function updateAllPages( $pageList = null );
  
  public function updateAllPageList( $list = null );
  
  public function makeCopyPageById( $pageId = 0, $pagename = '');

  public function insertPageImage( $actionId = 0, $pageId = 0, $langId = 0, $images = null );
  
  public function insertPageListImage( $actionId = 0, $pageListId = 0, $langId = 0, $images = null );
  
  public function insertPagesToPageList( $pageListId = 0, $ids = null );
  
}