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

class ActivityModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function activityTimeLine()
  {
    $qry = "SELECT
              a.id, a.id_store_user, a.id_sys_user, a.id_route,
              a.rel_path, c.id_element, a.created
            FROM
              app_router_analytics a
            LEFT JOIN
              app_router b
            ON
              a.id_route = b.id_route
            LEFT JOIN
              app_activity_timeline_element c
            ON
              b.ctrl = c.a_key
            AND
              b.mth = c.b_key";
    $filter = "ORDER BY created DESC LIMIT 20";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $i = 0;
      
      foreach($data as $key => $value) {
        $data[ $key ]->is_right   = ($i % 2 === 0) ? true : false;
        $data[ $key ]->store_user = (((int) $value->id_store_user > 0) && self::$registry->getService('store')->isAddressByUserId( $value->id_user )) ? self::$registry->getService('store')->addressDataByUserId( $value->id_user ) : null;
        $data[ $key ]->sys_user   = ((int) $value->id_sys_user > 0) ? self::$registry->getService('users')->getUserDataByID( $value->id_sys_user ) : null;
        $data[ $key ]->object     = $this->__buildElementObject($value->id_element, $value->id_route);
        
        // iterator
        $i++;
      }
      return $data;
      
      //self::$registry->getService('helper')->dump($data);
    }
    return null;
  }
  
  private function __buildElementObject( $elementId = null, $routeId = 0 )
  {
    if(!is_null($elementId)) {
      switch((int) $elementId) {
        case 1:
          return false;
        case 2:
          $obj = self::$registry->getService('store')->categoryObjByRouteId( $routeId );
          
          return self::$registry->getService('store')->categoryOnTimeLineById(
            $obj->id_category,
            $obj->id_lang
          );
        case 3:
          $obj = self::$registry->getService('store')->articleObjByRouteId( $routeId );
          
          return self::$registry->getService('store')->articleOnSiteById($obj->id_article, $obj->id_lang);
        default:
          return null;
      }
    }
    return null;
  }
  
  
  
  

  private function __elementTypeIdByRouteId( $routeId = 0 )
  {
    $route = self::$registry->getService('router')->routeById( $routeId );
    
    if(is_object($route)) {
      $qry = "SELECT
                id_element
              FROM
                app_activity_timeline_element";
      $keys = array(
        ':a_key' => (string) $route->ctrl,
        ':b_key' => (string) $route->mth
      );
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
      
      return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_element : null;
    }
    return null;
  }
  
}