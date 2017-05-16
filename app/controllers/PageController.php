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

class PageController {
  
  /** @var Registry */
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run( $routeId = 0 )
  {
    // PAGE OBJECT
    $obj = self::$registry->getService('page')->pageObjByRouteId( $routeId );

    if((int) $obj->publish === 1) {
      // PAGE DATA
      $page = (is_object($obj)) ? self::$registry->getService('page')->pageOnSiteById($obj->id_page, $obj->id_lang) : null;
      // SEO
      if(!is_null($page)) {
        self::$registry->getService('controller')->setTitle( $page->site_title );
        self::$registry->getService('controller')->setMetaRobot( $page->meta_robot );
        self::$registry->getService('controller')->setMetaKeywords( $page->meta_keywords );
        self::$registry->getService('controller')->setMetaDescription( $page->meta_description );
      }
      // RENDER
      self::$registry->getService('template')->assign(
        'pagelist_shortlinks',
        self::$registry->getService('page')->pageListShortLinksOnSiteById(
          self::$registry->getService('languages')->getCurrentLanguage(),
          0
        )
      );
      self::$registry->getService('template')->assign(
        'latest_articles',
        self::$registry->getService('page')->pageListOnSiteById(1, self::$registry->getService('languages')->getCurrentLanguage())
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|page.tpl|footer.tpl');
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
}