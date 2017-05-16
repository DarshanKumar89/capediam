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

class CatalogController {
  
  /** @var Registry **/
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run( $action = null )
  {
    $key = (!is_null($action)) ? $action : self::$registry->getService('irequest')->getUrlBit(1);

    if(!is_null($key) && !is_numeric($key)) {
      $catId  = self::$registry->getService('dashboard')->getCatIdByUrlKey( $key );
      $langId = self::$registry->getService('dashboard')->getCatLangIdByUrlKey( $key );

      if( !is_null($catId) && !is_null($langId) ) {
        $data = self::$registry->getService('dashboard')->getArticlesListOnSiteByCatId( $catId, $langId );
        
        self::$registry->getService('template')->assign('category',$data["category"]);
        self::$registry->getService('template')->assign('articlesList',$this->__buildTableStructure( $data["list"], 4));
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|catalog/catalog.tpl|aside.tpl|footer.tpl');
      } else {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function articleDetail( $action=null )
  {
    $key = (!is_null($action)) ? $action : self::$registry->getService('irequest')->getUrlBit(1);
    $articleId = self::$registry->getService('dashboard')->getArticleIdByUrlKey( $key );
    $langId    = self::$registry->getService('dashboard')->getArticleLangIdByUrlKey( $key );
    
    if( !is_null($articleId) && !is_null($langId) ) 
    {
      self::$registry->getService('template')->assign(
        'data',
        self::$registry->getService('dashboard')->getArticleDataOnSiteById( $articleId, $langId )
      );
      self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|catalog/article.tpl|aside.tpl|footer.tpl');
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __buildTableStructure( $items = null, $iterator = 2 )
  {
    $table = array();
    $i = 0;
    $y = 0;
    
    if(is_array($items)) 
    {
      foreach ($items as $item) 
      {
          if($i % $iterator === 0) {
              $y = $y + 1;
          }
          $table[$y][] = $item;
          $i++;
      }
    }
    return $table;
  }
  
}