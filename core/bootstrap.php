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

include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'config/sys.inc.php';

class KernelLoader {
  
  /** @var null **/
  private static $kernelLoader;
  
  /** @var object **/
  private static $core;
  
  /** @var array **/
  private $kernel;
  
  /** @var int **/
  private static $userId = 0;
  
  /** @var object **/
  private static $detector;
  
  /** @var object **/
  private static $visitor;
  
  private function __construct() {}
  
  public static function Instance( $autoLoad = true )
  {
    if(self::$kernelLoader === null) {
      self::$kernelLoader = new KernelLoader();
    } 
    if((bool) $autoLoad === true) {
      self::$kernelLoader->__kernelMapper();
      self::$kernelLoader->register();
      self::$kernelLoader->initCore();
      self::$kernelLoader->boot();
      self::$kernelLoader->init();
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
  
  public function initCore()
  {
    self::$core = Registry::Instance();
  }
  
  public function boot()
  {
    self::$core->buildStorageObjects( $this->kernel );
  }
  
  public function init()
  {
    /** DETECTOR **/
    self::$detector = self::$core->getService('idetector')->detect();
    
    /** VISITOR **/
    self::$core->getService('geoip')->init();
    
    self::$visitor = self::$core->getService('geoip')->getVisitor();

    /** STORAGE **/
    self::$core->getService('storage')->createLocalStorageConn();
    
    /** SEO REDIRECT (301) **/
    $redirect = self::$core->getService('router')->isSeoRedirectByUrl( implode('/',self::$core->getService('irequest')->getUrlBits()) );

    if(!is_null($redirect) || (strlen((string) $redirect) > 0)) {
      self::$core->getService('irequest')->setUrlBits(array(0 => 'redirect', 1 => $redirect));
    }
    
    /** LANGUAGES **/
    $country = (isset(self::$visitor->countryCode) && (strlen(self::$visitor->countryCode) === 2)) ? self::$visitor->countryCode : null;
    $dLangId = self::$core->getService('languages')->getDefaultLanguageId();
    $gLangId = self::$core->getService('sessions')->get('language_global');
    $cLangId = self::$core->getService('sessions')->get('language_cpanel');
    
    if(!is_null($country)) {
      // SK, CZ
      if(($country === "SK") || ($country === "CZ")) {
        $dLangId = 189;
      }
      // IT
      if($country === "IT") {
        $dLangId = 120;
      }
    }
    if(is_null($gLangId)) {
      self::$core->getService('sessions')->set(
        'language_global',
        $dLangId    
      );
    }
    if(is_null($cLangId)) {
      self::$core->getService('sessions')->set(
        'language_cpanel',
        __DEFAULT_LANG_ID__    
      );
    }
    if((string) self::$core->getService('irequest')->getUrlBit(0) === 'cpanel') {
      self::$core->getService('languages')->setCurrentLanguage(
        self::$core->getService('sessions')->get('language_cpanel')
      );
    } else {
      self::$core->getService('languages')->setCurrentLanguage(
        self::$core->getService('sessions')->get('language_global')
      );
    }
    
    /** STORE **/
    $this->__initStore( $redirect );
    
    /** ROUTER **/
    self::$core->getService('irouter')->match(self::$detector, self::$visitor, self::$userId);

    
    /** DISPATCHER **/
    self::$core->getService('dispatcher')->run();
  }
  
  private function __initStore( $redirect = null )
  {
    // THUMBNAIL
    self::$core->getService('store')->resizeIdByVisitDevice();
    // BOT OR HUMAN - CPANEL
    if((self::$core->getService('irequest')->isBot(self::$detector->ua) === false) && ((string) self::$core->getService('irequest')->getUrlBit(0) !== 'cpanel')) {
      $skey = (self::$core->getService('cookie')->check('st')) ? self::$core->getService('cookie')->get('st') : self::$core->getService('cookie')->set('st',self::$core->getService('store')->uniqueUserId(),(time()+3600 * 24 * 365));
      // AUTHENTICATE
      $sToken  = self::$core->getService('hash')->ripemd128(
        self::$core->getService('irequest')->getRemoteAddress().
        self::$visitor->countryCode.self::$detector->full.$skey
      );
      if(self::$core->getService('store')->isUserByToken( $sToken, $skey )) {
        self::$userId = self::$core->getService('store')->getUser( $sToken, $skey );
      } else {
        if(self::$core->getService('store')->isUserBySecureKey( $skey )) {
          if(self::$core->getService('store')->updateSecureTokenBySecureKey( $sToken, $skey )) {
            self::$userId = self::$core->getService('store')->getUser( $sToken, $skey );
          } else {
            throw new Exception('SYSTEM FATAL ERROR: SECURE TOKEN HAS NOT BEEN UPDATED ', 500);
          }
        } else {
          self::$userId = self::$core->getService('store')->createUser( $sToken, $skey, self::$core->getService('languages')->getCurrentLanguage(), self::$visitor, self::$detector );

          if(!self::$core->getService('cookie')->check('st')) {
            if(!is_null($redirect) || (strlen((string) $redirect) > 0)) {
              self::$core->getService('irequest')->movePage(301, self::$core->getService('irequest')->getReferer(), true);
            } else {
              $path = implode('/',self::$core->getService('irequest')->getUrlBits());

              if((string) $path === 'index') {
                self::$core->getService('irequest')->movePage(301,'');
              } else {
                self::$core->getService('irequest')->movePage(301, $path);
              }
            }
          }
        }
      }
      if(((bool) self::$userId === false) || ((int) self::$userId === 0)) {
        throw new Exception('SYSTEM ERROR: ACCOUNT INSTANCE IS NOT DECLARED.', 500);
      } else {
        self::$core->getService('controller')->setUserId( self::$userId );
        self::$core->getService('store')->updateIpAddressByUserId(
          self::$core->getService('irequest')->getRemoteAddress(),
          self::$userId
        );
        if(self::$core->getService('store')->isRegistredUserById( self::$userId )) {
          self::$core->getService('controller')->setUserLogin(
            self::$core->getService('store')->isUserAuthLogin( self::$userId )      
          );
          self::$core->getService('controller')->setUserAuthEmail(
            self::$core->getService('store')->userAuthEmailById( self::$userId )      
          );
        }
      }
    }
  }
  
  private function __kernelMapper()
  {
    $files = scandir(__KERNEL_DIR__);
    
    if(isset($files[ array_search(".", $files, true) ]) && isset($files[ array_search("..", $files, true) ])) {
      unset($files[ array_search(".", $files, true) ]);
      unset($files[ array_search("..", $files, true) ]);
    }
    if(is_array($files) && (count($files) > 0)) {
      foreach($files as $file) {
        if((string) substr($file, -4) === '.php') {
          $path    = realpath( __KERNEL_DIR__ . $file );
          $content = file_get_contents( $path );
          $class   = $this->__getClassName($content);

          if(!is_null($class)) {
            $this->kernel[ $class ] = (object) array(
              'key'       => strtolower(substr($file, 0, -10)),
              'path'      => $path,
              'filename'  => $file,
              'classname' => $class,
            );
          }
        }
      }
    }
  }
  
  private function __getClassName( $file = null )
  {
    $content = token_get_all($file);
    
    if(!is_null($content) && !is_bool($content)) {
      for($i=0;$i<count($content);$i++) {
        if((isset($content[$i][1])) && ((string) strtolower($content[$i][1]) === 'class')) {
          
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
  
  private function load( $classname = '' )
  {
    if(array_key_exists($classname, $this->kernel)) {
      if(file_exists($this->kernel[ $classname ]->path) && is_readable($this->kernel[ $classname ]->path)) {
        require_once $this->kernel[ $classname ]->path;
      }
    }
  }
  
  private function __wakeup() {}
  
  private function __clone() {}
  
}

/** BOOT KERNEL **/

try {
  $KernelLoader = KernelLoader::Instance(true);
} catch (Exception $e) {
  print_r('SYSTEM ERROR: '.$e->getMessage());
}
