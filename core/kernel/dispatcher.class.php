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

class Dispatcher {
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var array **/
  private static $controllers;
  
  /** @var string Login / Logout controller  **/
  private $secure_controller = 'Signin';
  
  /** @var string Controller to use if found controller doesn't exist **/
  private $controller_not_found = 'Pagenotfound';
  
  public function __construct( Registry $registry )
  {
    self::$registry    = $registry;
    self::$controllers = include_once __CONFIG_DIR__ . 'controllers.inc.php';
  }
  
  public function run()
  {
    $route = self::$registry->getService('irouter')->getRoute();
    
    if(is_object($route)) {
      if(((int) $route->rule === 3) || ((int) $route->rule === 4)) {
        $this->http( $route );
      } else {
        if((bool) self::$registry->getService('irouter')->useRedirect() === true) {
          self::$registry->getService('irequest')->movePage(
            301, 
            self::$registry->getService('irouter')->getRedirectPath()
          );
        } else {
          (array_key_exists($route->ctrl, self::$controllers)) ? $this->routeCtrl( $route ) : $this->notCtrl();
        }
      }
    } else {
      $this->notCtrl();
    }
  }
  
  public function getControllerList()
  {
    return self::$controllers;
  }
  
  private function http( $route = null )
  {
    if(isset($route->rw_url) && (strlen($route->rw_url) > 0)) {
      self::$registry->getService('irequest')->movePage(
        301,
        $route->rw_url,
        (((int) $route->rule === 4) ? true : false)
      );
    } else {
      $this->notCtrl();
    }
  }
  
  private function routeCtrl( $route = null )
  {
    if(is_object($route)) {
      if(file_exists( __APP_DIR__ . self::$controllers[ $route->ctrl ]['path'] ) &&
         is_readable( __APP_DIR__ . self::$controllers[ $route->ctrl ]['path'] )
      ) {
        if(((bool) self::$controllers[ $route->ctrl ]['auth'] === true) && 
            ((bool) self::$registry->getService('controller')->isUserLogin() === false)
        ) {
          $this->secureCtrl();
        } else {
          self::$registry->setController(
            __APP_DIR__ . self::$controllers[ $route->ctrl ]['path'],
            self::$controllers[ $route->ctrl ]['classname']
          );
          if((bool) method_exists(self::$registry->getController(), $route->mth) === true) {
            $this->boot($route->mth, $route->params);
          } else {
            $this->notCtrl();
          }
        }
      } else {
        $this->notCtrl();
      }
    } else {
      $this->notCtrl();
    }
  }
  
  private function secureCtrl()
  {
    if(file_exists( __APP_DIR__ . 'controllers/' . $this->secure_controller .'Controller.php') &&
       is_readable( __APP_DIR__ . 'controllers/' . $this->secure_controller .'Controller.php')
    ) {
      self::$registry->setController(
        __APP_DIR__ . 'controllers/' . $this->secure_controller .'Controller.php',
        $this->secure_controller . 'Controller'
      );
      $this->boot();
    } else {
      $this->notCtrl();
    }
  }
  
  private function notCtrl()
  {
    if(file_exists( __APP_DIR__ . 'controllers/' . $this->controller_not_found .'Controller.php') &&
       is_readable( __APP_DIR__ . 'controllers/' . $this->controller_not_found .'Controller.php')
    ) {
      self::$registry->setController(
        __APP_DIR__ . 'controllers/' . $this->controller_not_found .'Controller.php',
        $this->controller_not_found . 'Controller'
      );
      $this->boot();
    } else {
      throw new Exception("SYSTEM FATAL ERROR - CONTROLLER INC.");
    }
  }
  
  private function boot( $method = 'run', $args = []  )
  {
    // INIT BASE CONTROLLER
    self::$registry->getService('controller')->init();
    // EXECUTE
    call_user_func_array([self::$registry->getController(), $method], $args);
  }
  
}