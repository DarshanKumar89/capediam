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

interface Category {

  public function createCategory( $form = null );
  
  public function updateCategoryDataById( $form = null );
  
  public function updateCategoryImage( $categoryId = 0, $languageId = 0, $files = null );
  
  public function updateCategoryList( $form = null );
  
  public function updatePositionCategoryAssigningArticles( $categoryId = 0, $articleList = null );
  
  public function categoryWidgets();
  
  public function insertArticleListToCategory( $categoryId = 0, $ids = null );
  
  public function deleteArticleListFromCategory( $categoryId = 0, $articleList = null );
  
  /*
  * 
  * OLD
  * 
  */

  public function createCategoryLink( $form = null );
  
  public function getCategoryList();
  
  public function getCategoriesTree();
  
  public function getCategoriesSortTree();
	
  public function categoryBreadcrumbById( $catId = 0 );

  public function getCategoryHeadingById( $categoryId = 0 );
  
  public function getCategorySortLinkDataById( $itemId = 0 );
  
  public function getOrderingCategoryLinksById( $itemId = 0 );
  
  public function editCategoryLink( $form = null );
  
  public function orderingCateogiresLinks( $form = null );
  
  public function assigningArticleListToExtCategory( $form = null );
  
  public function removeCategoryLinkById( $itemId = 0 );
  
}