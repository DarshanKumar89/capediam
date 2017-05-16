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

class CMSAutoload {
  
  /** @var array */
  private $classes;
  
  public function __construct( $auto = true ) 
  {
    if($auto) {
      $this->classMapper();
    }
  }
  
  public function register()
  {
    if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
      //SPL autoloading was introduced in PHP 5.1.2
      if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register(array($this, 'load'), true, true);
      } else {
        spl_autoload_register(array($this, 'load'));
      }
    } else {
      function __autoload($classname) {
        $this->load($classname);
      }
    }
  }
  
  private function classMapper()
  {
    $folders = scandir(__DIR__);
    
    if(isset($folders[ array_search(".", $folders, true) ]) && isset($folders[ array_search("..", $folders, true) ])) {
      unset($folders[ array_search(".", $folders, true) ]);
      unset($folders[ array_search("..", $folders, true) ]);
    }
    if(is_array($folders) && (count($folders) > 0)) {
      foreach($folders as $folder) {
        if(is_dir( __DIR__ . DIRECTORY_SEPARATOR . $folder)) {
          foreach(scandir( __DIR__ . DIRECTORY_SEPARATOR . $folder ) as $file) {
            if($file[0] != '.' &&  $file[1] != '..') {
              if(substr($file, -4) === '.php') {
                $path    = realpath( __DIR__ . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $file );
                $content = file_get_contents( $path );
                $class   = $this->__getClassName($content);

                if(!is_null($class)) {
                  $this->classes[ $class ] = (object) array(
                    'path'      => $path,
                    'filename'  => $file,
                    'classname' => $class  
                  );
                }
              }
            }
          }
        }
      }
      if(count($this->classes) === 0) {
        throw new Exception('SYSTEM FATAL ERROR CMS CORE NOT FOUND.', 500);
      }
    } else {
      throw new Exception('SYSTEM FATAL ERROR CMS LIBRARY NOT FOUND.', 500);
    }
  }
  
  private function __getClassName( $file = null )
  {
    $content = token_get_all($file);
    
    if(!is_null($content) && !is_bool($content)) {
      for($i=0;$i<count($content);$i++) {
        if((isset($content[$i][1])) && (((string) strtolower($content[$i][1]) === 'class') || ((string) strtolower($content[$i][1]) === 'interface'))) {
          
          $class='';
          $j = 1;
          
          while(true) {
            if(trim($content[$i+$j][1]) == '') {
              if($j != 1) {
                break;
              }
            }
            $class .= $content[$i+$j][1];
            $j++;
          }
          return trim($class);
        }
      }
    }
    return null;
  }
  
  private function load( $classname )
  {
    if(array_key_exists($classname, $this->classes)) {
      if(file_exists($this->classes[ $classname ]->path) && is_readable($this->classes[ $classname ]->path)) {
        require_once $this->classes[ $classname ]->path;
      }
    }
  }
  
  private function __wakeup() {}
  
  private function __clone() {}
  
}

$loader = new CMSAutoload(true);
$loader->register();