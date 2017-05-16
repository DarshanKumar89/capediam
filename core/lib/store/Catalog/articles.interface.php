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

interface Articles {
  
  public function createArticle( $articleName = '' );
  
  public function insertArticleImageById( $articleId = 0, $images = null );
  
  public function insertViewerArticleById( $articleId = 0, $langId = 0 );
  
  public function updateArticleDataById( $form = null, $articleId = 0 );
  
  public function updateArticles( $updateType = 0, $form = null );
  
  public function makeCopyArticleById( $articleId = 0, $articleName = '' );
  
  public function getArticleWidgets();

  public function articleTagListById( $articleId = 0 );
  
}