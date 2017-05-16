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

class NavModel {
  
  /** @var Registry */
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function createNav( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_nav', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function createNavItem( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_nav_items', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function createNavItemLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_nav_items_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateNavById( $changes = null, $navId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_nav', $changes, ' id_nav = '. (int) $navId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateNavItemById( $changes = null )
  {
    self::$registry->getService('storage')->update( 'app_nav_items', $changes, ' id_nav_item = '. (int) $changes['id_nav_item'] );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateNavItemLangById( $changes = null, $itemId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_nav_items_lang', $changes, ' id_nav_item = '. (int) $itemId . ' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateNavItemOrder( $pos = 1, $itemId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_nav_items', array('position' => $pos), ' id_nav_item = '. (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateNavItemImageById( $itemId = 0, $langId = 0, $fileId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_nav_items_lang', array('id_image' => (int) $fileId), ' id_nav_item = '. (int) $itemId . ' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function navItemDataById( $itemId = 0 )
  {
    $qry1 = "SELECT
              id_nav_item, id_parent, id_pattern, id_page, id_page_list,
              id_category, on_html, access, icon, css_id, css_classes, publish
            FROM
              app_nav_items";
    $keys1 = array(
      ':id_nav_item' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                id_lang, id_image, url_link, nav_item_value, html_content
              FROM
                app_nav_items_lang";
      $keys2 = array(
        ':id_nav_item' => (int) $itemId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      if(self::$registry->getService('storage')->rowCount() > 0 ) {
        $data2 = self::$registry->getService('storage')->getResult();
        $linksname = [];
        
        foreach($data2 as $value) {
          $linksname[ $value->id_lang ] = new stdClass();
          $linksname[ $value->id_lang ]->image        = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : null;
          $linksname[ $value->id_lang ]->name         = html_entity_decode($value->nav_item_value, ENT_QUOTES, 'UTF-8'); 
          $linksname[ $value->id_lang ]->url_link = $value->url_link;
          $linksname[ $value->id_lang ]->html_content = $value->html_content;
        }
        $data->linksname = $linksname;
      }
    }
    return $data;
  }
  
  public function navList()
  {
    $qry = "SELECT
              id_nav, nav_name
            FROM
              app_nav";
    $filter = "ORDER BY position ASC";    
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function navList2()
  {
    $qry = "SELECT
             a.id_nav, a.nav_hash , a.nav_name, a.nav_access,
             a.publish, a.created, b.first_name, b.last_name
            FROM
              app_nav a,
              app_users_info b
            WHERE
              a.creator = b.id_user";
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $item) {
        $data[ $key ]->items = (int) $this->navItemsCount( $item->id_nav );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function navParentItemsById( $item = 0 )
  {
    $qry = "SELECT
              id_nav_item
            FROM
              app_nav_items";
    $keys = array(
      ':id_parent' => (int) $item
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function navItemOrderDataByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              id_nav, id_parent
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav_item' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function navItemOrderList( $data = null )
  {
    $qry = "SELECT
              a.id_nav_item, b.nav_item_value, a.publish, a.created,
              a.upd_date, c.first_name, c.last_name
            FROM
              app_nav_items a
            LEFT JOIN
              app_nav_items_lang b
            ON
              a.id_nav = b.id_nav
            AND
              a.id_nav_item = b.id_nav_item
            LEFT JOIN
              app_users_info c
            ON
              a.creator = c.id_user";
    $keys = array(
      ':a.id_nav'    => (int) $data->id_nav,
      ':a.id_parent' => (int) $data->id_parent,
      ':b.id_lang'   => $this->__supportLangOrderingNavItemsList( $data->id_parent )
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __supportLangOrderingNavItemsList( $itemId = 0 )
  {
    $qry = "SELECT
              *
            FROM (
              SELECT
                  (count(a.id_nav_item)) as svx, b.id_lang
              FROM
                  app_nav_items a,
                  app_nav_items_lang b
              WHERE
                  a.id_nav = b.id_nav
              AND
                  a.id_nav_item = b.id_nav_item
              AND
                  a.id_parent = ".(int) $itemId."
              GROUP BY
                  b.id_lang
              ) as result
            ORDER BY
              svx DESC
              LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ?  (int) self::$registry->getService('storage')->getResult()[0]->id_lang : 0;
  }
  
  public function navIdByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              id_nav
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav_item' => (int) $itemId,
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_nav : 0;
  }
  
  
  public function navIdByParentId( $itemId = 0 )
  {
    $qry = "SELECT
              id_nav
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav_item' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_nav : 0;
  }
  
  public function navLastPosNum()
  {
    $qry = "SELECT
              position
            FROM
              app_nav";
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position + 1 : 1;
  }
  
  public function navItemLasPositon( $navId = 0, $parentId = 0 )
  {
    $qry = "SELECT
              (count(id_nav_item)) as avx
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav'    => (int) $navId,
      ':id_parent' => (int) $parentId,
    );
    $filter = "ORDER BY position ASC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx + 1 : 0;
  }
  
  public function navItemsCount( $navId = 0 )
  {
    $qry = "SELECT
              id_nav
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav' => (int) $navId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return self::$registry->getService('storage')->rowCount();
  }
  
  public function rootChildrenByNavId( $navId = 0, $buildLink = false, $onSite = false )
  {
    $langId = ($this->__haveSupportLanguageNav( $navId )) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLangByNav( $navId );

    $qry = "SELECT
              a.id_nav_item, a.id_pattern, a.id_parent, a.id_page, a.id_page_list,
              a.id_category, a.on_html, a.icon, a.css_id, a.css_classes, a.publish, 
              b.id_image, b.url_link, b.nav_item_value, b.html_content
            FROM
              app_nav_items a,
              app_nav_items_lang b
            WHERE
              a.id_nav = b.id_nav
            AND
              a.id_nav_item = b.id_nav_item";
    $keys = array(
      ':a.id_nav'  => (int) $navId,
      ':b.id_lang' => (int) $langId,
      ':a.is_root' => 1
    );
    if((bool) $onSite === true) {
      $keys[':a.publish'] = 1;
    }
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->nav_item_value = html_entity_decode($value->nav_item_value, ENT_QUOTES, "UTF-8");
        $data[ $key ]->url_link       = ((bool) $buildLink === true) ? $this->__buildNavLink($value->id_page, $value->id_page_list, $value->id_category, $langId, $value->url_link) : $value->url_link;
      }
      return $data;
    }
    return null;
  }
  
  public function childrenByItemId( $itemId = 0, $buildLink = false, $onSite = false )
  {
    $langId = ($this->__haveSupportLanguageItemNav( $itemId )) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLangByItemNav( $itemId );

    $qry = "SELECT
              a.id_nav_item, a.id_pattern, a.id_parent, a.id_page, a.id_page_list,
              a.id_category, a.icon, a.on_html, a.css_id, a.css_classes, a.publish, 
              b.id_image, b.url_link, b.nav_item_value, b.html_content
            FROM
              app_nav_items a,
              app_nav_items_lang b
            WHERE
              a.id_nav = b.id_nav 
            AND
              a.id_nav_item = b.id_nav_item";
    $keys = array(
      ':a.id_parent' => (int) $itemId,
      ':b.id_lang'   => (int) $langId,
      ':a.is_root'   => 0
    );
    if((bool) $onSite === true) {
      $keys[':a.publish'] = 1;
    }
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->nav_item_value = html_entity_decode($value->nav_item_value, ENT_QUOTES, "UTF-8");
        $data[ $key ]->url_link       = ((bool) $buildLink === true) ? $this->__buildNavLink($value->id_page, $value->id_page_list, $value->id_category, $langId, $value->url_link) : $value->url_link;
      }
      return $data;
    }
    return null;
  }

  private function __buildNavLink( $pageId = 0, $pageListId = 0, $categoryId = 0, $langId = 0, $link = '' )
  {
    if(((int) $pageId > 0) && self::$registry->getService('page')->isPageById( $pageId )) {
      return self::$registry->getService('page')->pageUrlById($pageId, $langId);
    } else if(((int) $pageListId > 0) && self::$registry->getService('page')->isPageListById( $pageListId )) {
      return null;
    } else if(((int) $categoryId > 0) && self::$registry->getService('store')->isCategoryById( $categoryId )) {
      $path = self::$registry->getService('store')->categoryPathById($categoryId, $langId);

      return (!is_null($path)) ? $path : null;
    } else if(strlen($link) > 0) {
      return $link;
    } else {
      return null;
    }
  }
  
  public function navMainStructure()
  {
    $qry = "SELECT
              nav_hash, nav_name
            FROM
              app_nav";
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->count = $this->countNavItemsByNavId( $value->nav_hash );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function navRootItemsStructeByNavId( $navId = 0 )
  {
    $navId = (is_numeric($navId)) ? (int) $navId : $this->navIdByHash( $navId );
    
    $qry = "SELECT
              a.nav_hash, b.id_nav_item, c.nav_item_value
            FROM
              app_nav a,
              app_nav_items b,
              app_nav_items_lang c
            WHERE
              a.id_nav = b.id_nav
            AND
              a.id_nav = c.id_nav
            AND
              b.id_nav_item = c.id_nav_item";
    $keys = array(
      ':a.id_nav'  => $navId,
      ':b.is_root' => 1,
      ':c.id_lang' => ($this->__haveSupportLanguageNav( $navId )) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLangByNav( $navId )
    );
    $filter = "ORDER BY b.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $key => $value) {
        $data[ $key ]->count = $this->countNavItemsByItemId( $value->id_nav_item );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function navItemsStructureByItemId( $navId = '', $itemId = 0 )
  {
    $navId = (is_numeric($navId)) ? (int) $navId : $this->navIdByHash( $navId );
    
    $qry = "SELECT
              a.nav_hash, b.id_nav_item, c.nav_item_value
            FROM
              app_nav a,
              app_nav_items b,
              app_nav_items_lang c
            WHERE
              a.id_nav = b.id_nav
            AND
              a.id_nav = c.id_nav
            AND
              b.id_nav_item = c.id_nav_item";
    $keys = array(
      ':a.id_nav'    => $navId,
      ':b.is_root'   => 0,
      ':b.id_parent' => (int) $itemId,
      ':c.id_lang'   => ($this->__haveSupportLanguageNav( $navId )) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLangByNav( $navId )
    );
    $filter = "ORDER BY b.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $key => $value) {
        $data[ $key ]->count = $this->countNavItemsByItemId( $value->id_nav_item );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function navIdByHash( $navHash = '' )
  {
    $qry = "SELECT
              id_nav
            FROM
              app_nav";
    $keys = array(
      ':nav_hash' => $navHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ?  (int) self::$registry->getService('storage')->getResult()[0]->id_nav : 0;
  }
  
  public function countNavItemsByNavId( $navId = 0 )
  {
    $qry = "SELECT
              (count(id_nav_item)) as total
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav' => (is_numeric($navId)) ? (int) $navId : $this->navIdByHash( $navId ),
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->total : 0;
  }
  
  public function countNavItemsByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              (count(id_nav_item)) as total
            FROM
              app_nav_items";
    $keys = array(
      ':id_parent' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->total : 0;
  }
  
  public function isUniqueNavHash( $hash = '' )
  {
    $qry = "SELECT
              id_nav
            FROM
              app_nav";
    $keys = array(
      ':nav_hash' =>  $hash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isNavById( $navId = '' )
  {
    $qry = "SELECT
              id_nav
            FROM
              app_nav";
    $keys = array(
      ':id_nav' => (int) $navId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isNavByHash( $navHash = '' )
  {
    $qry = "SELECT
              id_nav
            FROM
              app_nav";
    $keys = array(
      ':nav_hash' => (string) $navHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isNavItemById( $itemId = 0 )
  {
    $qry = "SELECT
              id_nav_item
            FROM
              app_nav_items";
    $keys = array(
      ':id_nav_item' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isNavItemLangById( $navId = 0, $itemId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_nav_item
            FROM
              app_nav_items_lang";
    $keys = array(
      ':id_nav'      => (int) $navId,
      ':id_nav_item' => (int) $itemId,
      ':id_lang'     => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function removeNavById( $navId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_nav', ':id_nav', (int) $navId );
    self::$registry->getService('storage')->delete( 'app_nav_items', ':id_nav', (int) $navId );
    self::$registry->getService('storage')->delete( 'app_nav_items_lang', ':id_nav', (int) $navId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function removeNavItemById( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_nav_items', ':id_nav_item', (int) $itemId );
    self::$registry->getService('storage')->delete( 'app_nav_items_lang', ':id_nav_item', (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  private function __haveSupportLanguageNav( $navId = 0 )
  {
    $qry = "SELECT
              *
            FROM (
              SELECT
                  (count(a.id_nav_item)) as svx, b.id_lang
              FROM
                  app_nav_items a,
                  app_nav_items_lang b
              WHERE
                  a.id_nav = b.id_nav
              AND
                  a.id_nav_item = b.id_nav_item
              AND
                  a.id_nav = ".(int) $navId."
              AND
                  a.is_root = 1
              GROUP BY
                  b.id_lang
              ) as result
            ORDER BY
              svx DESC";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $svx  = (int) $data[0]->svx;
      
      foreach($data as $value) {
        if(((int) $value->id_lang === self::$registry->getService('languages')->getCurrentLanguage()) && ($svx === (int) $value->svx)) {
          return true;
        }
      }
    }
    return false;
  }
  
  private function __getSupportLangByNav( $navId = 0 )
  {
    $qry = "SELECT
              *
            FROM (
              SELECT
                  (count(a.id_nav_item)) as svx, b.id_lang
              FROM
                  app_nav_items a,
                  app_nav_items_lang b
              WHERE
                  a.id_nav = b.id_nav
              AND
                  a.id_nav_item = b.id_nav_item
              AND
                  a.id_nav = ".(int) $navId."
              AND
                  a.is_root = 1
              GROUP BY
                  b.id_lang
              ) as result
            ORDER BY
              svx DESC";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $svx  = (int) $data[0]->svx;
      
      foreach($data as $value) {
        if(((int) $value->id_lang === self::$registry->getService('languages')->getCurrentLanguage()) && ($svx === (int) $value->svx)) {
          return (int) $value->id_lang;
        }
      }
      return (int) $data[0]->id_lang;
    }
    return 0;
  }
  
  private function __haveSupportLanguageItemNav( $itemId = 0 )
  {
    $qry = "SELECT
              *
            FROM (
              SELECT
                  (count(a.id_nav_item)) as svx, b.id_lang
              FROM
                  app_nav_items a,
                  app_nav_items_lang b
              WHERE
                  a.id_nav = b.id_nav
              AND
                  a.id_nav_item = b.id_nav_item
              AND
                  a.id_parent = ".(int) $itemId."
              AND
              	  a.is_root = 0
              GROUP BY
                  b.id_lang
              ) as result
            ORDER BY
              svx DESC";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $svx  = (int) $data[0]->svx;
      
      foreach($data as $value) {
        if(((int) $value->id_lang === self::$registry->getService('languages')->getCurrentLanguage()) && ($svx === (int) $value->svx)) {
          return true;
        }
      }
    }
    return false;
  }
  
  private function __getSupportLangByItemNav( $itemId = 0 )
  {
    $qry = "SELECT
              *
            FROM (
              SELECT
                  (count(a.id_nav_item)) as svx, b.id_lang
              FROM
                  app_nav_items a,
                  app_nav_items_lang b
              WHERE
                  a.id_nav = b.id_nav
              AND
                  a.id_nav_item = b.id_nav_item
              AND
                  a.id_parent = ".(int) $itemId."
              AND
              	  a.is_root = 0
              GROUP BY
                  b.id_lang
              ) as result
            ORDER BY
              svx DESC";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $svx  = (int) $data[0]->svx;
      
      foreach($data as $value) {
        if(((int) $value->id_lang === self::$registry->getService('languages')->getCurrentLanguage()) && ($svx === (int) $value->svx)) {
          return (int) $value->id_lang;
        }
      }
      return (int) $data[0]->id_lang;
    }
    return 0;
  }
  
  /**
  *
  * FRONT_END_METHOD
  *
  **/
  
  public function navSettingsById( $navId = 0 )
  {
    $qry = "SELECT
              css_id, css_classes
            FROM
              app_nav";
    $keys = array(
      ':id_nav' => (int) $navId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function navItemListOnSiteByItemId( $itemId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_page, a.icon, a.css_id,
              a.css_classes, b.url_link, b.nav_item_value
            FROM
              app_nav_items a,
              app_nav_items_lang b
            WHERE
              a.id_nav_item = b.id_nav_item
            AND
              a.id_nav = b.id_nav";
    $keys = array(
      ':a.id_parent' => (int) $itemId,
      ':b.id_lang'   => (int) $langId,
      ':a.is_root'   => 0,
      ':a.publish'   => 1
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->url_link = (!empty($data[ $key ]->url_link)) ? $data[ $key ]->url_link : self::$registry->getService('page')->pageUrlById( $data[ $key ]->id_page, $langId );
        
        unset($data[ $key ]->id_page);
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
}