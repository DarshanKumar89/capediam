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

class RouterModel {
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var array **/
  private static $routeObjectTableNames = array(
    // [ 1 ] = Page 
    1 => 'app_pages_content',  
    // [ 2 ] = PageList 
    2 => 'app_page_list_content',
    // [ 3 ] = ARTICLE 
    3 => 'app_store_article_lang',
    // [ 4 ] = CATEGORY 
    4 => 'app_store_category_lang',
    // [ 5 ] = ATTR 
    5 => 'app_store_attribute_lang',
    // [ 6 ] = ATTR-V 
    6 => 'app_store_attribute_value_lang',
    // [ 7 ] = DISCOUNT CIRCLES 
    7 => 'app_store_discount_circuits_lang',
  );

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function insertRoute( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_router', $data );

    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertDirection( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_router_direction', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function insertSchema( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_router_schema', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function insertRedirect( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_router_redirect', $data );

    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertAnalyticRecord( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_router_analytics', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateRouteById( $changes = null, $routeId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_router', $changes, ' id_route = '. (int) $routeId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function countRoutes( $filter = 0, $useList = null )
  {
    $qry = "SELECT
              (count(id_route)) as avx
            FROM
              app_router";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_route IN (".implode(",",$useList).")";
    }
    $keys = (($filter >= 1) && ( $filter <= 6) ) ? array(':id_rule' => $filter) : null;
    
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function routeList( $pagination = false, $filter = 0, $useList = null )
  {  
    $qry = "SELECT
              id_route, id_rule, id_request_type, param_key,
              rw_url, ctrl, mth, priority, active
            FROM
              app_router";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_route IN (".implode(",",$useList).")";
    }
    $keys = (((int) $filter >= 1) && ((int) $filter <= 6)) ? array(':id_rule' => (int) $filter) : null;
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->path = $this->__getPath( $value->id_rule, $value->id_route );
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function routeIdsByKeywords( $keywords = '' )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // ROUTE ID LIST
    $ids = [];
    $qn = 3;
    
    for($i=1;$i<=$qn;$i++) {
      $result = $this->__searchQry($i, $keywords2);
      
      if(!is_null($result)) {
        foreach($result as $value) {
          if(!in_array($value, $ids)) {
            array_push($ids, $value);
          }
        }
      }
    }
    return (count($ids) > 0) ? $ids : null;
  }
  
  private function __searchQry( $typeId = 0, $keywords = '' )
  {
    switch((int) $typeId) {
      case 1:
        $qry = "SELECT
                  id_route
                FROM
                  app_router
                WHERE
                  param_key LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          $ids = self::$registry->getService('storage')->getResult();

          foreach($ids as $value) {
            $data[] = $value->id_route;
          }
        }
        return (isset($data) && (count($data) > 0)) ? $data : null;
      case 2:
        $qry = "SELECT
                  id_route
                FROM
                  app_router_direction
                WHERE
                  `bit` LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          $ids = self::$registry->getService('storage')->getResult();

          foreach($ids as $value) {
            $data[] = $value->id_route;
          }
        }
        return (isset($data) && (count($data) > 0)) ? $data : null;
      case 3:
        $qry = "SELECT
                  id_route
                FROM
                  app_router_schema
                WHERE
                  `value` LIKE ('%".$keywords."%')";
        self::$registry->getService('storage')->executeQuery( $qry );
        
        if(self::$registry->getService('storage')->rowCount() > 0) {
          $ids = self::$registry->getService('storage')->getResult();

          foreach($ids as $value) {
            $data[] = $value->id_route;
          }
        }
        return (isset($data) && (count($data) > 0)) ? $data : null;
    }
  }
  
  private function __getPath( $rule = 0, $routeId = 0 )
  { 
    if((int) $rule === 5) {
      $qry = 'SELECT
                param_key
              FROM
                app_router';
    } else if((int) $rule === 6) {
      $qry = 'SELECT
                `value`
              FROM
                app_router_schema';
    } else {
      $qry = 'SELECT
                `bit`
              FROM
                app_router_direction';
    }
    $keys = array(
      ':id_route' => (int) $routeId
    );
    $filter = ((int) $rule === 5) ? null : "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      if((int) $rule === 5) {
        return $data[0]->param_key;
      } else {
        $vals = [];

        foreach($data as $value) {
          $vals[] = ((int) $rule === 6) ? $value->value : $value->bit;
        }
        return implode('/', $vals);
      }
    }
    return null;
  }
  
  public function redirectObjectByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              id_object_type, id_object, id_lang
            FROM
              app_router_redirect";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];

      switch((int) $data->id_object_type) {
        // PAGE
        case 1:
          return $this->routeById( $this->__pageRouteIdByObject($data->id_object, $data->id_lang) );
        // PAGE LIST
        case 2:
          return $this->routeById( $this->__pageListRouteIdByObject($data->id_object, $data->id_lang) );
        // CMS CATALOG ARTICLE
        case 3:
          return null;
        // CMS CATALOG CATEGORY
        case 4:
          return null;
        // CMS CATALOG ATTRIBUTE
        case 5:
          return null;
        // DISK - PUBLIC FOLDER
        case 6:
          return null;
        // GALLERY
        case 7:
          return null;
        // STORE CATEGORY
        case 8:
          return $this->routeById( $this->__storeCategoryRouteIdByObject($data->id_object, $data->id_lang) );
        // STORE ATTRIBUTE
        case 9:
          return $this->routeById( $this->__storeAttributeRouteIdByObject($data->id_object, $data->id_lang) );
        // STORE ATTRIBUTE VALUE
        case 10:
          return $this->routeById( $this->__storeAttributeValueRouteIdByObject($data->id_object, $data->id_lang) );
        // STORE ARTICLE
        case 11:
          return $this->routeById( $this->__storeArticleRouteIdByObject($data->id_object, $data->id_lang) );
        // STORE DISCOUNT CIRCIUT
        case 12:
          return $this->routeById( $this->__storeDiscountCircuitRouteIdByObject($data->id_object, $data->id_lang) );
        default:
          return null;
      }
    }
    return null;
  }
  
  private function __pageRouteIdByObject( $objectId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_pages_content";
    $keys = array(
      ':id_page' => (int) $objectId,
      ':id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  private function __pageListRouteIdByObject( $objectId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_page_list_content";
    $keys = array(
      ':id_page_list' => (int) $objectId,
      ':id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  private function __storeCategoryRouteIdByObject( $objectId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_category_lang";
    $keys = array(
      ':id_category' => (int) $objectId,
      ':id_lang'     => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  private function __storeAttributeRouteIdByObject( $objectId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_attribute_lang";
    $keys = array(
      ':id_attribute' => (int) $objectId,
      ':id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  private function __storeAttributeValueRouteIdByObject( $objectId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_attribute_value_lang";
    $keys = array(
      ':id_value' => (int) $objectId,
      ':id_lang'  => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  private function __storeArticleRouteIdByObject( $objectId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_article' => (int) $objectId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  private function __storeDiscountCircuitRouteIdByObject( $objectId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_discount_circuits_lang";
    $keys = array(
      ':id_circuit' => (int) $objectId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  public function routerObject( $typeId = 0, $objectId = 0 )
  {
    switch((int) $typeId) {
      // PAGE
      case 1:
        return (object) array(
          'id_object'      => (int) $objectId,
          'id_object_type' => 1,
          'allow_prefix'   => true,
          'allow_schema'   => false,
          'list'           => $this->routeListByPageId( $objectId ),
          'redirectList'   => $this->__reditectList($typeId, $objectId)
        );
      // PAGE LIST
      case 2:
        return (object) array(
          'id_object'      => (int) $objectId,
          'id_object_type' => 2,
          'allow_prefix'   => true,
          'allow_schema'   => false,
          'list'           => $this->routeListByPageListId( $objectId ),
          'redirectList'   => $this->__reditectList($typeId, $objectId)
        );
      // CMS CATALOG ARTICLE
      case 3:
        return null;
      // CMS CATALOG CATEGORY
      case 4:
        return null;
      // CMS CATALOG ATTRIBUTE
      case 5:
        return null;
      // DISK - PUBLIC FOLDER
      case 6:
        return null;
      // GALLERY
      case 7:
        return null;
      // STORE CATEGORY
      case 8:
       return (object) array(
          'id_object'      => (int) $objectId,
          'id_object_type' => 8,
          'allow_prefix'   => false,
          'allow_schema'   => false,
          'list'           => $this->routeListByStoreCategoryId( $objectId ),
          'redirectList'   => $this->__reditectList($typeId, $objectId)
        );
      // STORE ATTRIBUTE
      case 9:
        return (object) array(
            'id_object'      => (int) $objectId,
            'id_object_type' => 9,
            'allow_prefix'   => false,
            'allow_schema'   => false,
            'list'           => $this->routeListByStoreAttributeId( $objectId ),
            'redirectList'   => $this->__reditectList($typeId, $objectId)
        );
      // STORE ATTRIBUTE VALUE
      case 10:
        return (object) array(
            'id_object'      => (int) $objectId,
            'id_object_type' => 10,
            'allow_prefix'   => false,
            'allow_schema'   => false,
            'list'           => $this->routeListByStoreAttributeValueId( $objectId ),
            'redirectList'   => $this->__reditectList($typeId, $objectId)
        );
      // STORE ARTICLE
      case 11:
        return (object) array(
          'id_object'      => (int) $objectId,
          'id_object_type' => 11,
          'allow_prefix'   => true,
          'allow_schema'   => false,
          'list'           => $this->routeListByStoreArticleId( $objectId ),
          'redirectList'   => $this->__reditectList($typeId, $objectId)
        );
      // STORE DISCOUNT CIRCIUT
      case 12:
        return (object) array(
          'id_object'      => (int) $objectId,
          'id_object_type' => 12,
          'allow_prefix'   => true,
          'allow_schema'   => false,
          'list'           => $this->routeListByStoreDiscountCircuitId( $objectId ),
          'redirectList'   => $this->__reditectList($typeId, $objectId)
        );
      default:
        return null;
    }
  }
  
  private function __reditectList( $typeId = 0, $objectId = 0 )
  {
    $qry = "SELECT
              id_rw, id_route, id_lang
            FROM
              app_router_redirect";
    $keys = array(
      ':id_object'      => (int) $objectId,
      ':id_object_type' => (int) $typeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $key => $value) {
        $data[ $value->id_lang ][ $key ] = $value;
        $data[ $value->id_lang ][ $key ]->path = $this->__getPath( $this->routeById( $value->id_route )->id_rule, $value->id_route );
      }
      return $data;
    }
    return null;
  }
  
  public function routeListByPageId( $pageId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route
            FROM
              app_pages_content";
    $keys = array(
      ':id_page' => (int) $pageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = (object) array(
          'id_route' => (int) $value->id_route,
          'path'     => ((int) $value->id_route !== 0) ? $this->__getPath( $this->routeById( $value->id_route )->id_rule, $value->id_route ) : null
        );
      }
      return $data;
    }
    return null;
  }
  
  public function routeListByPageListId( $pageListId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route
            FROM
              app_page_list_content";
    $keys = array(
      ':id_page_list' => (int) $pageListId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = (object) array(
          'id_route' => (int) $value->id_route,
          'path'     => ((int) $value->id_route !== 0) ? $this->__getPath( $this->routeById( $value->id_route )->id_rule, $value->id_route ) : null
        );
      }
      return $data;
    }
    return null;
  }
  
  public function routeListByStoreCategoryId( $categoryId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route
            FROM
              app_store_category_lang";
    $keys = array(
      ':id_category' => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = (object) array(
          'id_route' => (int) $value->id_route,
          'path'     => ((int) $value->id_route !== 0) ? $this->__getPath( $this->routeById( $value->id_route )->id_rule, $value->id_route ) : null
        );
      }
      return $data;
    }
    return null;
  }

  public function routeListByStoreAttributeId( $attrId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route
            FROM
              app_store_attribute_lang";
    $keys = array(
        ':id_attribute' => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = (object) array(
            'id_route' => (int) $value->id_route,
            'path'     => ((int) $value->id_route !== 0) ? $this->__getPath( $this->routeById( $value->id_route )->id_rule, $value->id_route ) : null
        );
      }
      return $data;
    }
    return null;
  }
  
  public function routeListByStoreAttributeValueId( $attrVId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route
            FROM
              app_store_attribute_value_lang";
    $keys = array(
      ':id_value' => (int) $attrVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = (object) array(
          'id_route' => (int) $value->id_route,
          'path'     => ((int) $value->id_route !== 0) ? $this->__getPath( $this->routeById( $value->id_route )->id_rule, $value->id_route ) : null
        );
      }
      return $data;
    }
    return null;
  }
  
  public function routeListByStoreArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) 
      {
        $route = ((int) $value->id_route !== 0) ? $this->routeById( $value->id_route ) : null;
        
        $data[ $value->id_lang ] = (object) array(
          'id_route' => (int) $value->id_route,
          'path'     => (is_object($route)) ? $this->__getPath( $route->id_rule, $value->id_route ) : null
        );
      }
      return $data;
    }
    return null;
  }
  
  public function routeListByStoreDiscountCircuitId( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route
            FROM
              app_store_discount_circuits_lang";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = (object) array(
          'id_route' => (int) $value->id_route,
          'path'     => ((int) $value->id_route !== 0) ? $this->__getPath( $this->routeById( $value->id_route )->id_rule, $value->id_route ) : null
        );
      }
      return $data;
    }
    return null;
  }
  
  public function routesByObjectId( $objectId = 0 )
  {
    if(array_key_exists($objectId, self::$routeObjectTableNames)) {
      $qry = "SELECT id_route FROM ". self::$routeObjectTableNames[ $objectId ];

      self::$registry->getService('storage')->executeQuery( $qry );

      return (self::$registry->getService('storage')->rowCount() > 0) ? $this->__loadRoutes( self::$registry->getService('storage')->getResult() ) : null;
    }
    return null;
  }
  
  private function __loadRoutes( $routes = null )
  {
    if(is_array($routes) && (count($routes) > 0)) {
      $data = [];
      
      foreach($routes as $value) {
        $route = $this->routeById( $value->id_route );
        
        if(is_object($route)) {
          $data[] = $route;
        }
      }
      return (is_array($data) && (count($data) > 0)) ? $data : null;
    }
    return null;
  }
  
  public function routeById( $routeId = 0 )
  {
    $qry = "SELECT
              id_rule, id_request_type, 
              ctrl, mth, rw_url
            FROM
              app_router";
    $keys = array(
      ':id_route' => (int) $routeId,
      ':active'   => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->path = $this->__getPath($data->id_rule, $routeId);
      
      return $data;
    }
    return null;
  }
  
  public function routeTypeById( $routeId = 0 )
  {
    $qry = "SELECT
              id_rule
            FROM
              app_router";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (((int) self::$registry->getService('storage')->getResult()[0]->id_rule === 6) ? 2 : 1) : 0;
  }
  
  public function routeKeyById( $routeId = 0 )
  {
    $qry = "SELECT
              param_key
            FROM
              app_router";
    $keys = array(
      ':id_route' => (int) $routeId,
      ':id_rule'  => 5
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->param_key : null;
  }
  
  public function schemaParamsById( $routeId = 0 )
  {
    $qry = "SELECT
              id_filter, `value`
            FROM
              app_router_schema
            WHERE
              id_type != 1";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function schemaBitsById( $routeId = 0 )
  {
    $qry = "SELECT
              id_filter, `value`
            FROM
              app_router_schema";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function schemaKeyById( $routeId = 0 )
  {
    $qry = "SELECT
              `value`
            FROM
              app_router_schema";
    $keys = array(
      ':id_route'  => (int) $routeId,
      ':id_type'   => 3,
      ':id_filter' => 7
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->value : null;
  }
  
  public function haveSchemaKeyById( $routeId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_router_schema";
    $keys = array(
      ':id_route'  => (int) $routeId,
      ':id_type'   => 3,
      ':id_filter' => 7
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function routeIdByDigit( $rm = 0, $digit = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_router";
    $keys = array(
      ':id_request_type' => (int) $rm,
      ':digit'           => (int) $digit,
      ':active'          => 1
    );
    $filter = "ORDER BY priority DESC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      if(count($data) === 1) {
        return (int) $data[0]->id_route;
      }
      $urlBits = self::$registry->getService('irequest')->getUrlBits();
      
      foreach($data as $value) {
        $route = $this->routeById( $value->id_route );

        if(((int) $route->id_rule === 6) && (string) $route->path === (string) self::$registry->getService('irequest')->getUrlPath()) {
          return (int) $value->id_route;
        }
        if(((int) $route->id_rule === 5) && (string) $route->path === (string) $urlBits[0]) {
          return (int) $value->id_route;
        }
        if((((int) $route->id_rule >= 1) && ((int) $route->id_rule <= 4)) && (string) $route->path === (string) implode('/', array($urlBits[0],$urlBits[1]))) {
          return (int) $value->id_route;
        }
        if((((int) $route->id_rule >= 1) && ((int) $route->id_rule <= 4)) && (string) $route->path === (string) implode('/', array($urlBits[0],'run'))) {
          return (int) $value->id_route;
        }
      }
    }
    return 0;
  }
  
  public function routeIdByRedirectId( $redirectId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_router_redirect";
    $keys = array(
      ':id_rw' => (int) $redirectId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  public function isRouteByDigit( $rm = 0, $digit = 0, $sensitive = false, $compare = '' )
  {
    $qry = "SELECT
              id_route
            FROM
              app_router";
    $keys = array(
      ':id_request_type' => (int) $rm,
      ':digit'           => (int) $digit
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      if((bool) $sensitive === true)
      {
        $data    = self::$registry->getService('storage')->getResult()[0];
        $route   = $this->routeById( $data->id_route );
        $compare = (strlen($compare) > 0) ? $compare : self::$registry->getService('irequest')->getUrlPath();
        $urlBits = (strlen($compare) > 0) ? explode('/', $compare) : self::$registry->getService('irequest')->getUrlBits();

        if(((int) $route->id_rule === 6) && (string) $route->path === (string) $compare)
        {
          return true;
        }
        if(((int) $route->id_rule === 5) && (string) $route->path === (string) $urlBits[0]) 
        {
          return true;
        }
        if((((int) $route->id_rule >= 1) && ((int) $route->id_rule <= 4)) && (isset($urlBits[1]) && ((string) $route->path === (string) implode('/', array($urlBits[0],$urlBits[1]))))) 
        {
          return true;
        }
        if((((int) $route->id_rule >= 1) && ((int) $route->id_rule <= 4)) && (string) $route->path === (string) implode('/', array($urlBits[0],'run'))) {
          return true;
        }
        return false;
      }
      return true;
    }
    return false;
  }
  
  public function isDigitUnique( $rule = 0, $rm = 0, $priority = 0, $digit = 0, $path = '' )
  {
    $qry = "SELECT
              id_route
            FROM
              app_router";
    $keys = array(
      ':id_rule'  => (int) $rule,
      ':digit'    => (int) $digit,
      ':priority' => (int) $priority,
      ':id_request_type' => (int) $rm
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $value) {
        if((string) $this->routeById( $value->id_route )->path === (string) $path) {
          return false;
        }
      }
      return true;
    }
    return true;
  }
  
  public function isRouteById( $routeId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_router";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isRedirectById( $redirectId = 0 )
  {
    $qry = "SELECT
              id_rw
            FROM
              app_router_redirect";
    $keys = array(
      ':id_rw' => (int) $redirectId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isRouteByKey( $params = null )
  {
    $qry = "SELECT
              id_rule
            FROM
              app_router";
    $keys = array(
      ':param_key' => (string) $params[0]
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteRouteAById( $routeId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_router', ':id_route', (int) $routeId );
    self::$registry->getService('storage')->delete( 'app_router_direction', ':id_route', (int) $routeId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteRouteBById( $routeId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_router', ':id_route', (int) $routeId );
    self::$registry->getService('storage')->delete( 'app_router_schema', ':id_route', (int) $routeId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteRedirect( $redirectId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_router_redirect', ':id_rw', (int) $redirectId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /**
  *
  * SEO REDIRECT
  *
  **/
  
  public function insertSeoRedirect( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_seo_redirect', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateSeoRedirectById( $changes = null, $redirectId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_seo_redirect', $changes, ' id_redirect = '. (int) $redirectId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function countSeoRedirect( $useList = null )
  {
    $qry = "SELECT
              (count(id_redirect)) as avx
            FROM
              app_seo_redirect";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_redirect IN (".implode(",",$useList).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function seoRedirectList( $pagination = false, $useList = null )
  {
    $qry = "SELECT
              id_redirect, url, redirect
            FROM
              app_seo_redirect";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_redirect IN (".implode(",",$useList).")";
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry );
    }
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  
  public function redirectIdsByKeywords( $keywords = '' )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // QRY
    $qry = "SELECT 
                id_redirect
              FROM 
                app_seo_redirect 
              WHERE
                url LIKE ('%".$keywords2."%')
              OR
                redirect LIKE ('%".$keywords2."%')
              GROUP BY
                id_redirect";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = self::$registry->getService('storage')->getResult();

      foreach($ids as $value) {
        $data[] = $value->id_redirect;
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function isSeoRedirectByUrl( $url = '' )
  {
    $qry = "SELECT
              redirect
            FROM
              app_seo_redirect";
    $keys = array(
      ':url' => (string) $url
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->redirect : null;
  }
  
  public function isSeoRedirectById( $redirectId = 0 )
  {
    $qry = "SELECT
              id_redirect
            FROM
              app_seo_redirect";
    $keys = array(
      ':id_redirect' => (int) $redirectId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteSeoRedirectById( $redirectId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_seo_redirect', ':id_redirect', (int) $redirectId );
    
    return self::$registry->getService('storage')->executed();
  }
  
}