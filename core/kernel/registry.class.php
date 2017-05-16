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

class Registry {
  
  /** @var null **/
  private static $inst;
  
  /** @var null **/
  private static $controllerInc;
  
  /** @var null **/
  private static $moduleInc;
	
  /** @var array **/
  private $objects;

  private function __construct() {}
  
  public static function Instance()
  {
    if(self::$inst === null) {
      self::$inst = new Registry();
    } 
    return self::$inst;
  }
  
  public function buildStorageObjects( $kernel = null )
  {
    if(is_array($kernel) && (count($kernel) > 0)) {
      foreach($kernel as $value) {
        require_once $value->path;
        
        $this->storage[ $value->key ] = new $value->classname( self::$inst );
      }
    } else {
      throw new Exception("SYSTEM FATAL ERROR: KERNEL CRASH.", 500);
    }
  }
  
  public static function setController( $path = '', $controller = '' )
  {
    if(self::$controllerInc !== null) {
      self::$controllerInc = null;
    }
    require_once $path;
    
    self::$controllerInc = new $controller( self::$inst );
  }
  
  public static function getController()
  {
    return self::$controllerInc;
  }
  
  public function getService( $key = '' )
  {
    if(strlen($key) > 0) {
      if(array_key_exists($key, $this->storage)) {
        return $this->storage[ $key ];
      } else  {
        return $this->getModule( $key );
      }
    } else {
      throw new Exception('SYSTEM ERROR: NOT A DEFINED SERVICE.', 500);
    }
  } 
  
  private function getModule( $key = '' )
  {
    if(file_exists( __CONFIG_DIR__ .'models.inc.php' ) && is_readable( __CONFIG_DIR__ .'models.inc.php' )) {
      $config = include __CONFIG_DIR__ .'models.inc.php';

    if(array_key_exists($key, $config) &&
      file_exists( __APP_DIR__ . $config[ $key ]['path'] ) &&
      is_readable( __APP_DIR__ . $config[ $key ]['path'] ) &&
      ((bool) $config[ $key ]['active'] === true)
    ) {
        if(self::$moduleInc !== null) {
          self::$moduleInc = null;
        } 
        include_once __APP_DIR__ . $config[ $key ]['path'];

        self::$moduleInc = new $config[ $key ]['classname']( self::$inst );
        
        return self::$moduleInc;
      } else {
        throw new Exception("Error loading module '".strtoupper($key)."'.");
      }
    } else  {
      throw new Exception("CONFIG FILE NOT READABLE OR NOT EXISTS.");
    }
  }
  
  private function __wakeup() {}
  
  private function __clone() {}

}