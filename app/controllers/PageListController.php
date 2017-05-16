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

class PageListController {
  
  /** @var Registry */
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run( $routeId = 0 )
  {
    // PAGE LIST OBJECT
    $obj = self::$registry->getService('page')->pageListObjByRouteId( $routeId );
    
    if((int) $obj->publish === 1) {
      // PAGINATION
      if((int) $obj->use_pagination === 1) {
        $urlBits = self::$registry->getService('irequest')->getUrlBits();
        // reverse
        krsort($urlBits);
        // Add to params
        $params = array_slice($urlBits,0,2);
        // reverse
        krsort($params);
        // reindex
        $params = array_values($params);
        // check 
        $params = ((count($params) === 2) && (is_int((int) $params[0]) && is_int((int) $params[1]))) ? $params : null;
        $page   = ((count($params) === 2) && (((int) $params[0] > 0) && ((int) $params[0] <= 1000))) ? (int) $params[0] : 1;
        $limit  = ((count($params) === 2) && ((string) $params[1] == 'all') ? 'all' : ( (((int) $params[1] > 0) && ((int) $params[1] <= 1000))) ? (int) $params[1] : (int) $obj->per_page);
        $total  = self::$registry->getService('page')->countPages(
          null,
          null,
          true,
          $obj->id_page_list
        );
        // INIT PAGINATION
        self::$registry->getService('pagination')->setPrefix( $obj->path );
        self::$registry->getService('pagination')->setPage( $page );
        self::$registry->getService('pagination')->setLimit( $limit );
        self::$registry->getService('pagination')->setTotal( $total );
      }
      // PAGE DATA
      $pageList = (is_object($obj)) ? self::$registry->getService('page')->pageListOnSiteById($obj->id_page_list, $obj->id_lang, true) : null;
      // TEMP. VARS
      if(is_object($pageList)) {
        // SEO
        self::$registry->getService('controller')->setTitle( $pageList->site_title );
        self::$registry->getService('controller')->setMetaRobot( $pageList->meta_robot );
        self::$registry->getService('controller')->setMetaKeywords( $pageList->meta_keywords );
        self::$registry->getService('controller')->setMetaDescription( $pageList->meta_description );
        // PAGINATION
        if((int) $obj->use_pagination === 1) {
          self::$registry->getService('template')->assign(
            'pagination',
            self::$registry->getService('pagination')->createLinks(5,'pagination pagination-sm')
          );
          self::$registry->getService('template')->assign('limit',$limit);
          self::$registry->getService('template')->assign('total',$total);
        }
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
      self::$registry->getService('template')->assign('pageList',$pageList);
      self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|page_list.tpl|footer.tpl');
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
}