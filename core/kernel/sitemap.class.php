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

class Sitemap  {
  
  CONST PAGE_ROTI = 1;
  
  CONST PAGE_LIST_ROTI = 2;
  
  CONST ATRICLE_ROTI = 3;
  
  CONST CATEGORY_ROTI = 4;
  
  CONST ATTR_ROTI = 5;
  
  CONST ATTR_V_ROTI = 6;
  
  CONST DISCOUNT_CIRCLES_ROTI = 7;
  
  CONST FREQ = "daily";
  
  CONST PRIORITY = "1.00";

  /** @var string **/
  private static $prefix;
  
  /** @var string **/
  private static $datetime;
  
  /** @var array **/
  private $urls;
  
  /** @var Registry */
  protected static $registry;

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
    self::$prefix   = self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
    self::$datetime = new DateTime('NOW');
  }
  
  public function generate()
  {
    if(is_file(__SITEMAP__) && is_readable(__SITEMAP__)) {
      $urls = $this->__urlList();

      $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

      return self::$registry->getService('helper')->array_to_xml( $urls, $xml, 'url', __SITEMAP__, false );
    }
    return false;
  }
  
  public function __urlList()
  { 
    // PAGE ROUTES
    $pageRoutes = self::$registry->getService('router')->routesByObjectId( self::PAGE_ROTI );
    
    if(is_array($pageRoutes) && (count($pageRoutes) > 0)) {
      foreach($pageRoutes as $pageRoute) {
        $this->urls[] = array(
          'loc'        => self::$prefix . $pageRoute->path,
          'lastmod'    => self::$datetime->format('Y-m-d\TH:i:sP') ,
          'changefreq' => self::FREQ,
          'priority'   => self::PRIORITY
        );
      }
    }
    
    // PAGE LIST ROUTES
    $pageListRoutes = self::$registry->getService('router')->routesByObjectId( self::PAGE_LIST_ROTI );
    
    if(is_array($pageListRoutes) && (count($pageListRoutes) > 0)) {
      foreach($pageListRoutes as $pageListRoute) {
        $this->urls[] = array(
          'loc'        => self::$prefix . $pageListRoute->path,
          'lastmod'    => self::$datetime->format('Y-m-d\TH:i:sP') ,
          'changefreq' => self::FREQ,
          'priority'   => self::PRIORITY
        );
      }
    }
    
    // ARTICLE ROUTES
    $articleRoutes = self::$registry->getService('router')->routesByObjectId( self::ATRICLE_ROTI );
    
    if(is_array($articleRoutes) && (count($articleRoutes) > 0)) {
      foreach($articleRoutes as $articleRoute) {
        $this->urls[] = array(
          'loc'        => self::$prefix . $articleRoute->path,
          'lastmod'    => self::$datetime->format('Y-m-d\TH:i:sP') ,
          'changefreq' => self::FREQ,
          'priority'   => self::PRIORITY
        );
      }
    }
    
    // CATEGORY ROUTES
    $categoryRoutes = self::$registry->getService('router')->routesByObjectId( self::CATEGORY_ROTI );
    
    if(is_array($categoryRoutes) && (count($categoryRoutes) > 0)) {
      foreach($categoryRoutes as $categoryRoute) {
        $this->urls[] = array(
          'loc'        => self::$prefix . $categoryRoute->path,
          'lastmod'    => self::$datetime->format('Y-m-d\TH:i:sP') ,
          'changefreq' => self::FREQ,
          'priority'   => self::PRIORITY
        );
      }
    }
    
    // ATTR ROUTES
    $attrRoutes = self::$registry->getService('router')->routesByObjectId( self::ATTR_ROTI );
    
    if(is_array($attrRoutes) && (count($attrRoutes) > 0)) {
      foreach($attrRoutes as $attrRoute) {
        $this->urls[] = array(
          'loc'        => self::$prefix . $attrRoute->path,
          'lastmod'    => self::$datetime->format('Y-m-d\TH:i:sP') ,
          'changefreq' => self::FREQ,
          'priority'   => self::PRIORITY
        );
      }
    }
    
    // ATTR-V ROUTES
    $attrVRoutes = self::$registry->getService('router')->routesByObjectId( self::ATTR_V_ROTI );
    
    if(is_array($attrVRoutes) && (count($attrVRoutes) > 0)) {
      foreach($attrVRoutes as $attrVRoute) {
        $this->urls[] = array(
          'loc'        => self::$prefix . $attrVRoute->path,
          'lastmod'    => self::$datetime->format('Y-m-d\TH:i:sP') ,
          'changefreq' => self::FREQ,
          'priority'   => self::PRIORITY
        );
      }
    }
    
    // DISCOUNT CIRCLES ROUTES
    $discountCircleRoutes = self::$registry->getService('router')->routesByObjectId( self::DISCOUNT_CIRCLES_ROTI );
    
    if(is_array($discountCircleRoutes) && (count($discountCircleRoutes) > 0)) {
      foreach($discountCircleRoutes as $discountCircleRoute) {
        $this->urls[] = array(
          'loc'        => self::$prefix . $discountCircleRoute->path,
          'lastmod'    => self::$datetime->format('Y-m-d\TH:i:sP') ,
          'changefreq' => self::FREQ,
          'priority'   => self::PRIORITY
        );
      }
    }
    
    // RETURN URL LIST
    return $this->urls;
  }
  
}