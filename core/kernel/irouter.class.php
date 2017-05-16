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

class IRouter {
  
  CONST DIRECT = 1;
  
  CONST REWRITE = 2;
  
  CONST REDIRECT = 3;
  
  CONST FORWARD = 4;
  
  CONST KEY = 5;
  
  CONST SCHEMA = 6;
  
  CONST GET = 1;
  
  CONST POST = 2;
  
  CONST PUT = 3;
  
  CONST DELETE = 4;
  
  CONST PRIORITY_DIRECT = 100;
  
  CONST PRIORITY_REWRITE = 200;
  
  CONST PRIORITY_REDIRECT = 300;
  
  CONST PRIORITY_FORWARD = 400;
  
  CONST PRIORITY_KEY = 500;
  
  CONST PRIORITY_SCHEMA = 600;
  
  CONST SCHEMA_TYPE_ANCHOR = 1;
  
  CONST SCHEMA_TYPE_VPARAM = 2;
  
  CONST SCHEMA_TYPE_KEY = 3;
  
  CONST SCHEMA_FILTER_INT = 1;
  
  CONST SCHEMA_FILTER_FLOAT = 2;
  
  CONST SCHEMA_FILTER_NUMERIC = 3;
  
  CONST SCHEMA_FILTER_STRING = 4;
  
  CONST SCHEMA_FILTER_DATE = 5;
  
  CONST SCHEMA_FILTER_EMAIL = 6;
  
  CONST SCHEMA_FILTER_KEY = 7;
  
  /** @var void Registry **/
  protected static $registry;
  
  /** @var object **/
  private static $route;
  
  /** @var bool **/
  private static $useRedirect = false;
  
  /** @var string **/
  private static $redirectPath;
  
  /** @var array **/
  private $status = [];
  
  /** @var array **/
  private static $denyBit = array(
    'extensions',
    'files',
    'static'
  );
  
  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function getRoute()
  {
    return self::$route;
  }
  
  public function useRedirect()
  {
    return self::$useRedirect;
  }
  
  public function getRedirectPath()
  {
    return self::$redirectPath;
  }
  
  public function matchByReferer( $referer = '' )
  {
    $urlBits = (strlen($referer) > 0) ? explode('/', $referer) : null;
    
    if(is_array($urlBits) && (count($urlBits) > 0)) {
      $bits = $this->__buildBits(self::GET, $urlBits);

      return self::$registry->getService('router')->isRouteById(
        self::$registry->getService('router')->routeIdByDigit(
          self::GET, 
          $this->__bitsToDigit($bits)
        )
      );
    }
    return false;
  }
  
  public function match( $detector = null, $visitor = null, $userId = 0 )
  {
    $urlBits = self::$registry->getService('irequest')->getUrlBits();
    $rqMth   = $this->getRMID(self::$registry->getService('irequest')->getRequestMethod());
    
    if((is_array($urlBits) && (count($urlBits) > 0)) && 
        $this->isRequestMethod($rqMth) && 
        !in_array($urlBits[0], self::$denyBit)
    ) {
      if((count($urlBits) === 1) && ((string) $urlBits[0] === 'index')) {
        self::$route = (object) array(
          'rule'   => 1,
          'ctrl'   => 'index',
          'mth'    => 'run',
          'params' =>  []
        );
        // analytics
        $this->__analytics($detector, $visitor, $userId, 0);
      } else {
        $bits    = $this->__buildBits($rqMth, $urlBits);
        $routeId = self::$registry->getService('router')->routeIdByDigit($rqMth, $this->__bitsToDigit($bits));
        $route   = self::$registry->getService('router')->routeById($routeId);

        if(is_object($route)) {
          // USE REDIRECT
          $redirect = self::$registry->getService('router')->redirectObjectByRouteId( $routeId );
          
          if(is_object($redirect)) {
            self::$useRedirect  = true;
            self::$redirectPath = $redirect->path; 
          }
          // ANALYTICS
          if((bool) self::$useRedirect === false) {
            $this->__analytics($detector, $visitor, $userId, $routeId);
          }
          // CREATE ROUTE OBJECT
          switch((int) $route->id_rule) {
            case self::SCHEMA:
              $sSchema = self::$registry->getService('router')->schemaParamsById($routeId);
              $params  = array($routeId);

              if(!is_null($sSchema)) {
                foreach($sSchema as $value) {
                  switch((int) $value->id_filter) {
                    case self::SCHEMA_FILTER_INT:
                      $params[] = (int) $value->value;
                      break;
                    case self::SCHEMA_FILTER_FLOAT:
                      $params[] = (float) $value->value;
                      break;
                    case self::SCHEMA_FILTER_NUMERIC:
                      $params[] = ($value->value == (int) $value->value) ? (int) $value->value : (float) $value->value;
                      break;
                    case self::SCHEMA_FILTER_STRING:
                      $params[] = (string) $value->value;
                      break;
                    case self::SCHEMA_FILTER_DATE:
                      $params[] = new DateTime($value->value);
                      break;
                    case self::SCHEMA_FILTER_EMAIL:
                      $params[] = (string) $value->value;
                      break;
                    case self::SCHEMA_FILTER_KEY:
                      $params[] = (string) $value->value;
                      break;
                  }
                }
              }
              self::$route = (object) array(
                'rule'   => (int) $route->id_rule,
                'ctrl'   => $route->ctrl,
                'mth'    => $route->mth,
                'params' => $params
              );
              break;
            case self::KEY:
              unset($urlBits[0]);
              
              self::$route = (object) array(
                'rule'   => (int) $route->id_rule,
                'ctrl'   => $route->ctrl,
                'mth'    => $route->mth,
                'params' => (count($urlBits) > 0) ? array_merge(array($routeId),$urlBits) : array($routeId)
              );
              break;
            case self::FORWARD:
              self::$route = (object) array(
                'rule'   => (int) $route->id_rule,
                'rw_url' => $route->rw_url 
              );
              break;
            case self::REDIRECT:
              self::$route = (object) array(
                'rule'   => (int) $route->id_rule,
                'rw_url' => $route->rw_url 
              );
              break;
            case self::REWRITE:
              unset($urlBits[0]);
              unset($urlBits[1]);

              self::$route = (object) array(
                'rule'   => (int) $route->id_rule,
                'ctrl'   => $route->ctrl,
                'mth'    => $route->mth,
                'params' => (count($urlBits) > 0) ? $urlBits : []
              );
              break;
            case self::DIRECT:
              unset($urlBits[0]);
              unset($urlBits[1]);

              self::$route = (object) array(
                'rule'   => (int) $route->id_rule,
                'ctrl'   => $route->ctrl,
                'mth'    => $route->mth,
                'params' => (count($urlBits) > 0) ? $urlBits : []
              );
              break;
            default:
              self::$route = null;
              break;
          }
        } else {
          self::$route = null;
        }
      }
    } else {
      self::$route = null;
    }
  }
  
  public function digit( $path = '' ) 
  {
    $digit = 0;

    if(strlen($path) > 0) {
      foreach(str_split($path) as $value) {
        $digit = $digit + $this->__charToDigit( $value );
      }
      return $digit;
    }
    return false;
  }
  
  public function addRoute( $object = null )
  {
    if(is_object($object)) {
      switch((isset($object->rule)) ? (int) $object->rule : 0) {
        case self::DIRECT:
          return $this->insertDirect( $object );
        case self::REWRITE:
          return $this->insertRewrite( $object );
        case self::REDIRECT:
          return  $this->insertRedirect( $object );
        case self::FORWARD:
          return $this->insertForward( $object );
        case self::KEY:
          return $this->insertKey( $object );
        case self::SCHEMA:
          return $this->insertSchema( $object );
        default:
          return false;
      }
    }
    return false;
  }
  
  public function deleteRouteById( $routeId = 0 )
  {
    $typeId = self::$registry->getService('router')->routeTypeById( $routeId );
    
    switch($typeId) {
      case 1:
        // DIRECT, REWRITE, REDIRECT, FORWARD, KEY
        return self::$registry->getService('router')->deleteRouteAById( $routeId );
      case 2:
        // SCHEMA
        return self::$registry->getService('router')->deleteRouteBById( $routeId );
      default:
        return false;
    }
  }
  
  private function __buildBits( $rqMth = 0, $params = null )
  {
    if(self::$registry->getService('router')->isRouteByDigit($rqMth, $this->__bitsToDigit($params)) && ((bool) $this->__isSchema($params, $rqMth) === true)) {
      return $params;
    }
    if(self::$registry->getService('router')->isRouteByDigit($rqMth, $this->__bitsToDigit($params[0])) && ((bool) $this->__isKey($params, $rqMth) === true)) {
      return $params[0];
    }
    if((isset($params[0]) && isset($params[1])) && self::$registry->getService('router')->isRouteByDigit($rqMth, $this->__bitsToDigit( array($params[0],$params[1]) ))) {
      return array($params[0],$params[1]);
    }
    if(self::$registry->getService('router')->isRouteByDigit($rqMth, $this->__bitsToDigit( array($params[0],'run') ), true)) {
      return array($params[0],'run');
    }
    return null;
  }
  
  private function __isSchema( $params = null, $rqMth = 0 )
  {
    if(is_array($params) && (count($params) > 0)) {
      $path = self::$registry->getService('router')->routeById( 
        self::$registry->getService('router')->routeIdByDigit($rqMth, $this->__bitsToDigit($params))
      )->path;
      return ((string) $path === (string) self::$registry->getService('irequest')->getUrlPath()) ? true :false;
    }
    return false;
  }
  
  private function __isKey( $params = null, $rqMth = 0 )
  {
    if(is_array($params) && (count($params) > 0)) {
      $path = self::$registry->getService('router')->routeById( 
        self::$registry->getService('router')->routeIdByDigit($rqMth, $this->__bitsToDigit($params[0]))
      )->path;
      return ((string) $path === (string) $params[0]) ? true :false;
    }
    return false;
  }
  
  private function __analytics( $detector = null, $visitor = null, $userId =  0, $routeId = 0 )
  {
    self::$registry->getService('router')->insertAnalyticRecord(array(
      ':id_route'            => (int) $routeId,
      ':id_store_user'       => (int) $userId,
      ':id_sys_user'         => ((int) $userId === 0) ? self::$registry->getService('users')->userIdBySession() : 0,
      ':id_lang'             => self::$registry->getService('languages')->getCurrentLanguage(),
      ':ip_address'          => self::$registry->getService('irequest')->getRemoteAddress(),
      ':rel_path'            => self::$registry->getService('irequest')->getUrlPath(),
      ':is_computer'         => ($detector->isComputer) ? 1 : 0,
      ':is_tablet'           => ($detector->isTablet) ? 1 : 0,
      ':is_mobile'           => ($detector->isMobile) ? 1 : 0,
      ':is_mobile_device'    => ($detector->isMobileDevice) ? 1 : 0,
      ':continent'           => (strlen($visitor->continent) > 0) ? $visitor->continent : 'EU',
      ':country_code'        => $visitor->countryCode,
      ':country_name'        => $visitor->countryName,
      ':city'                => $visitor->city,
      ':latitude'            => $visitor->latitude,
      ':longitude'           => $visitor->longitude,
      ':timezone'            => (isset($visitor->timezone)) ? $visitor->timezone["timeZoneId"] : null,
      ':timezone_name'       => (isset($visitor->timezone)) ? $visitor->timezone["timeZoneName"] : null,
      ':web_browser'         => $detector->browserFull,
      ':operating_system'    => $detector->osFull,
      ':javascript'          => (!$detector->nojs) ? 1 : 0,
      ':screen_resolution_x' => (isset($detector->screenattributes)) ? $detector->screenattributes->windowWidth : null,
      ':screen_resolution_y' => (isset($detector->screenattributes)) ? $detector->screenattributes->windowHeight : null,
      ':screen_color'        => (isset($detector->screenattributes)) ? $detector->screenattributes->colorDepth : null
    ));
  }
  
  private function insertDirect( $object = null )
  {
    if((is_array($object->direction) && (count($object->direction) === 2)) && 
      ((strlen($object->ctrl) > 0) && (strlen($object->mth) > 0)) && 
      $this->isRequestMethod($object->rm)
    ) {
      $digit = $this->__pathToDigit($this->__createPath(self::DIRECT, $object));
      
      if(is_numeric($digit) && self::$registry->getService('router')->isDigitUnique(self::DIRECT, $object->rm, self::PRIORITY_DIRECT, $digit, implode('/',$object->direction))) {
        $routeId = self::$registry->getService('router')->insertRoute(array(
          ':id_rule'         => self::DIRECT,
          ':id_request_type' => (int) $object->rm,
          ':digit'           => $digit,
          ':ctrl'            => $object->ctrl,
          ':mth'             => $object->mth,
          ':priority'        => self::PRIORITY_DIRECT
        ));
        if(self::$registry->getService('router')->isRouteById( $routeId )) {
          $i = 1;

          foreach($object->direction as $bit) {
            $this->status[] = self::$registry->getService('router')->insertDirection(array(
              ':id_route' => (int) $routeId,
              ':bit'      => $bit,
              ':position' => $i
            ));
            $i++;
          }
          return self::$registry->getService('helper')->checkStatus( $this->status );
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function insertRewrite( $object = null )
  {
    if((is_array($object->direction) && (count($object->direction) === 2)) && 
      ((strlen($object->ctrl) > 0) && (strlen($object->mth) > 0)) && 
      $this->isRequestMethod($object->rm)
    ) {
      $digit = $this->__pathToDigit($this->__createPath(self::REWRITE, $object));
      
      if(is_numeric($digit) && self::$registry->getService('router')->isDigitUnique(self::REWRITE, $object->rm, self::PRIORITY_REWRITE, $digit, implode('/',$object->direction))) {
        $routeId = self::$registry->getService('router')->insertRoute(array(
          ':id_rule'         => self::REWRITE,
          ':id_request_type' => (int) $object->rm,
          ':digit'           => $digit,
          ':ctrl'            => $object->ctrl,
          ':mth'             => $object->mth,
          ':priority'        => self::PRIORITY_REWRITE
        ));
        if(self::$registry->getService('router')->isRouteById( $routeId )) {
          $i = 1;

          foreach($object->direction as $bit) {
            $this->status[] = self::$registry->getService('router')->insertDirection(array(
              ':id_route' => (int) $routeId,
              ':bit'      => $bit,
              ':position' => $i
            ));
            $i++;
          }
          return self::$registry->getService('helper')->checkStatus( $this->status );
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function insertRedirect( $object = null ) 
  {
    if((is_array($object->direction) && (count($object->direction) === 2)) && 
      (strlen($object->rw_url) > 0) &&
      $this->isRequestMethod($object->rm)
    ) {
      $digit = $this->__pathToDigit($this->__createPath(self::REDIRECT, $object));
      
      if(is_numeric($digit) && self::$registry->getService('router')->isDigitUnique(self::REDIRECT, $object->rm, self::PRIORITY_REDIRECT, $digit, implode('/',$object->direction))) {
        $routeId = self::$registry->getService('router')->insertRoute(array(
          ':id_rule'         => self::REDIRECT,
          ':id_request_type' => (int) $object->rm,
          ':digit'           => $digit,
          ':rw_url'          => $object->rw_url,
          ':priority'        => self::PRIORITY_REDIRECT
        ));
        if(self::$registry->getService('router')->isRouteById( $routeId )) {
          $i = 1;

          foreach($object->direction as $bit) {
            $this->status[] = self::$registry->getService('router')->insertDirection(array(
              ':id_route' => (int) $routeId,
              ':bit'      => $bit,
              ':position' => $i
            ));
            $i++;
          }
          return self::$registry->getService('helper')->checkStatus( $this->status );
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function insertForward( $object = null )
  {
    if((is_array($object->direction) && (count($object->direction) === 2)) && 
      (strlen($object->rw_url)) &&
      $this->isRequestMethod($object->rm)
    ) {
      $digit = $this->__pathToDigit($this->__createPath(self::FORWARD, $object));
      
      if(is_numeric($digit) && self::$registry->getService('router')->isDigitUnique(self::FORWARD, $object->rm, self::PRIORITY_FORWARD, $digit, implode('/',$object->direction))) {
        $routeId = self::$registry->getService('router')->insertRoute(array(
          ':id_rule'         => self::FORWARD,
          ':id_request_type' => (int) $object->rm,
          ':digit'           => $digit,
          ':rw_url'          => $object->rw_url,
          ':priority'        => self::PRIORITY_FORWARD
        ));
        if(self::$registry->getService('router')->isRouteById( $routeId )) {
          $i = 1;

          foreach($object->direction as $bit) {
            $this->status[] = self::$registry->getService('router')->insertDirection(array(
              ':id_route' => (int) $routeId,
              ':bit'      => $bit,
              ':position' => $i
            ));
            $i++;
          }
          return self::$registry->getService('helper')->checkStatus( $this->status );
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function insertKey( $object = null )
  {
    if(((strlen($object->ctrl) > 0) && (strlen($object->mth) > 0)) && 
      (strlen($object->key) > 0) &&
      $this->isRequestMethod($object->rm)
    ) {
      $digit = $this->__pathToDigit($this->__createPath(self::KEY, $object));

      if(is_numeric($digit) && self::$registry->getService('router')->isDigitUnique(self::KEY, $object->rm, self::PRIORITY_KEY, $digit, $object->key)) {
        $routeId = self::$registry->getService('router')->insertRoute(array(
          ':id_rule'         => self::KEY,
          ':id_request_type' => (int) $object->rm,
          ':digit'           => $digit,
          ':param_key'       => $object->key,
          ':ctrl'            => $object->ctrl,
          ':mth'             => $object->mth,
          ':priority'        => self::PRIORITY_KEY
        ));
        return (self::$registry->getService('router')->isRouteById( $routeId )) ? $routeId : false;
      }
      return false;
    }
    return false;
  }
  
  private function insertSchema( $object = null )
  {
    if((isset($object->schema) && $this->checkSchema($object->schema)) && 
      ((strlen($object->ctrl) > 0) && (strlen($object->mth) > 0)) && 
      $this->isRequestMethod($object->rm)
    ) {
      $digit = $this->__pathToDigit($this->__createPath(self::SCHEMA, $object));
      
      if(is_numeric($digit) && self::$registry->getService('router')->isDigitUnique(self::SCHEMA, $object->rm, self::PRIORITY_SCHEMA, $digit, $this->__createSchemaPath($object->schema))) {
        $routeId = self::$registry->getService('router')->insertRoute(array(
          ':id_rule'         => self::SCHEMA,
          ':id_request_type' => (int) $object->rm,
          ':digit'           => $digit,
          ':ctrl'            => $object->ctrl,
          ':mth'             => $object->mth,
          ':priority'        => self::PRIORITY_SCHEMA
        ));
        if(self::$registry->getService('router')->isRouteById( $routeId )) {
          $i = 1;

          foreach($object->schema as $value) {
            $this->status[] = self::$registry->getService('router')->insertSchema(array(
              ':id_route'  => (int) $routeId,
              ':id_type'   => (int) $value->type,
              ':id_filter' => (int) $value->filter,
              ':value'     => $value->value,
              ':position'  => $i
            ));
            $i++;
          }
          return (self::$registry->getService('helper')->checkStatus( $this->status )) ? $routeId : false;
        }
        return false;
      }
      return false;
    }
    return false;
  }

  private function __createSchemaPath( $schema = null )
  {
    if(is_array($schema) && (count($schema) > 0)) {
      $bits = [];

      foreach($schema as $value) {
        $bits[] = $value->value;
      }
      return implode('/', $bits);
    }
    return null;
  }
  
  private function checkSchema( $schema = null )
  { 
    if(is_array($schema) && (count($schema) > 0)) {
      $params = [];
      
      if($this->isSchemaKeyUnique( $schema )) {
        foreach($schema as $value) {
          if($this->isSchemaType( $value->type ) && (strlen($value->value) > 0)) {
            $this->status[] = (((int) $value->type === self::SCHEMA_TYPE_VPARAM) || ((int) $value->type === self::SCHEMA_TYPE_KEY)) ? $this->isSchemaFilter( $value->filter ) : true;

            $params[] = $value->value;
          } else {
            $this->status[] = false;
          }
        }
        return (self::$registry->getService('helper')->checkStatus( $this->status )) ? true : false;
      }
      return false;
    }
    return false;
  }
  
  private function isSchemaKeyUnique( $schema = null )
  {
    $i = 0;
    
    foreach($schema as $value) {
      $i = (((int) $value->type === self::SCHEMA_TYPE_VPARAM) && ((int) $value->filter === self::SCHEMA_FILTER_KEY)) ? $i + 1 : 0;
    }
    return (($i === 0) || ($i === 1)) ? true : false;
  }
  
  private function isSchemaType( $type = 0 )
  {
    switch((int) $type) {
      case self::SCHEMA_TYPE_ANCHOR:
        return true;
      case self::SCHEMA_TYPE_VPARAM:
        return true;
      case self::SCHEMA_TYPE_KEY:
        return true;
      default:
        return false;
    }
  }
  
  private function isSchemaFilter( $filter = 0 )
  {
    switch((int) $filter) {
      case self::SCHEMA_FILTER_INT:
        return true;
      case self::SCHEMA_FILTER_FLOAT:
        return true;
      case self::SCHEMA_FILTER_NUMERIC:
        return true;
      case self::SCHEMA_FILTER_STRING:
        return true;
      case self::SCHEMA_FILTER_DATE:
        return true;
      case self::SCHEMA_FILTER_EMAIL:
        return true;
      case self::SCHEMA_FILTER_KEY:
        return true;
      default:
        return false;
    }
  }
  
  private function isRequestMethod( $requestMethod = 0 )
  {
    switch((int) $requestMethod) {
      case self::GET:
        return true;
      case self::POST:
        return true;
      case self::PUT:
        return true;
      case self::DELETE:
        return true;
      default:
        return false;
    }
  }
  
  private function getRMID( $rm = '' )
  {
    switch((string) $rm) {
      case 'GET':
        return self::GET;
      case 'POST':
        return self::POST;
      case 'PUT':
        return self::PUT;
      case 'DELETE':
        return self::DELETE;
      default:
        return 0;
    }
  }
  
  private function __createPath( $rule = 0, $object = null )
  {
    switch((int) $rule) {
      case 6:
        if(isset($object->schema) && (is_array($object->schema) && (count($object->schema) > 0))) {
          $vals = [];

          foreach($object->schema as $bit) {
            $vals[] = $bit->value;
          }
          return implode('/', $vals);
        }
        return false;
      case 5:
        if(isset($object->key) && (strlen($object->key) > 0)) {
          return $object->key;
        }
      default:
        if(isset($object->direction) && (is_array($object->direction) && (count($object->direction) > 0))) {
          return implode('/', $object->direction);
        }
        return false;
    }
  }
  
  private function __pathToDigit( $path = '' )
  {
    $digit = (int) strlen($path);

    if(strlen($path) > 0) {
      foreach(str_split($path) as $value) {
        $digit = $digit + $this->__charToDigit( $value );
      }
      return $digit;
    }
    return false;
  }
  
  private function __bitsToDigit( $bits = null )
  {
    if(is_string($bits)) {
      $digit = (int) strlen($bits);
      
      foreach(str_split($bits) as $bit) {
        $digit = $digit + $this->__charToDigit( $bit );
      }
      return $digit;
    } else {
      $digit = (int) strlen(implode('/', (array) $bits));

      foreach(str_split(implode('/', (array) $bits)) as $bit) {
        $digit = $digit + $this->__charToDigit( $bit );
      }
      return $digit;
    }
  }
  
  private function __charToDigit( $char = null )
  {
    if(!is_null($char)) {
      $alphabet = array(
        'a' => 1270, 'b' => 1888, 'c' => 2521, 'd' => 5973, 'e' => 1337, 'f' => 5069, 'g' => 1169,
        'h' => 2139, 'i' => 5642, 'j' => 2148, 'k' => 4479, 'l' => 3376, 'm' => 4979, 'n' => 3954, 
        'o' => 4091, 'p' => 4928, 'q' => 2883, 'r' => 3985, 's' => 2899, 't' => 3786, 'u' => 3240,
        'v' => 4317, 'w' => 1562, 'x' => 4645, 'y' => 1274, 'z' => 2848, 'A' => 1563, 'B' => 2775, 
        'C' => 5878, 'D' => 5148, 'E' => 2696, 'F' => 1148, 'G' => 1035, 'H' => 4218, 'I' => 1120,
        'J' => 1373, 'K' => 3287, 'L' => 1289, 'M' => 2512, 'N' => 2928, 'O' => 2438, 'P' => 5991,
        'Q' => 5304, 'R' => 1416, 'S' => 3945, 'T' => 3395, 'U' => 5345, 'V' => 5829, 'W' => 1379,
        'X' => 2243, 'Y' => 3614, 'Z' => 3619
      );
      return (array_key_exists((string) $char, $alphabet)) ? $alphabet[ $char ] : ((is_numeric($char) && ((int) $char > 0)) ? (int) $char : (((string) $char === "-") ? 66 : 55));
    }
    return 0;
  }

}