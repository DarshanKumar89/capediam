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

interface StoreCoreInt {
  
  public function indexingSearchWords( $keywords = '', $articleList = null );
  
  public function editArticleRelevanceScoreBySKWId( $sKWordId = 0, $articleId = 0 );
  
  public function importHeurekaCategoryXml();
  
}