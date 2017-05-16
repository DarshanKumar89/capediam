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

class Controller {
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var bool **/
  private static $isAdmin;
  
  /** @var object **/
  private static $user;

  /** @var int **/
  private static $userId = 0;
  
  /** @var bool **/
  private static $isUserLogin = false;
  
  /** @var string **/
  private static $userAuthEmail;
  
  /** @var int **/
  private static $defaultLangId;
  
  /** @var array **/
  private static $languageList;
  
  /** @var object **/
  private static $seo;
  
  /** @var object **/
  private static $cart;
  
  /** @var bool **/
  private static $enabledDeliveryDiscount = true;

  /** @var string **/
  private static $locale;
  
  /** @var string **/
  private static $baseUrl;
  
   /** @var string **/
  private static $footer;
  
  /** @var object **/
  private static $googleAnalytics;
  
  /** @var object **/
  private static $addOnScripts;
  
  /** @var object **/
  private static $detect;
  
  private static $shoping_bag_path = array(
    0   => 'nakupna-taska',
    51  => 'shopping-bag',
    120 => 'carrello'
  );
  
  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function init()
  {
    // SET 
    self::$isAdmin         = self::$registry->getService('cms')->isAdmin();
    self::$user            = self::$registry->getService('cms')->getUser();
    self::$defaultLangId   = self::$registry->getService('languages')->getCurrentLanguage();
    self::$languageList    = self::$registry->getService('languages')->getEnabledLanguages();
    self::$googleAnalytics = self::$registry->getService('general-settings')->googleAnalytic();
    self::$addOnScripts    = self::$registry->getService('general-settings')->addOnScripts();
    self::$locale          = self::$registry->getService('languages')->getCurrentLanguageCode();
    self::$footer          = self::$registry->getService('general-settings')->htmlFooter();
    self::$baseUrl         = self::$registry->getService('irequest')->getLocation();
    self::$detect          = self::$registry->getService('idetector')->detect();
    // SHOPPINT CART
    $this->setCart( self::$registry->getService('store')->getCart() );
    // LANGUAGE
    $this->__initLanguageKeys();
    // SEO
    $this->__initDefaultSEO();
    // TEMP. VARS
    self::$registry->getService('template')->assign('isAdmin',self::$isAdmin);
    self::$registry->getService('template')->assign('datetime',time());
    self::$registry->getService('template')->assign('lc',self::$locale);
    self::$registry->getService('template')->assign('user',self::$user);
    self::$registry->getService('template')->assign('footer',self::$footer);
    self::$registry->getService('template')->assign('theme',__THEMES_SET__);
    self::$registry->getService('template')->assign('baseUrl',self::$baseUrl);
    self::$registry->getService('template')->assign('languages',self::$languageList);
    self::$registry->getService('template')->assign('addOnScripts',self::$addOnScripts);
    self::$registry->getService('template')->assign('defaultLanguage',self::$defaultLangId);
    self::$registry->getService('template')->assign('googleAnalytics',self::$googleAnalytics);
    self::$registry->getService('template')->assign('tabLang',$this->__tabLang());
    self::$registry->getService('template')->assign('enabledDeliveryDiscount',self::$enabledDeliveryDiscount);
    self::$registry->getService('template')->assign('shoping_bag_path',((isset(self::$shoping_bag_path[ self::$defaultLangId ])) ? self::$shoping_bag_path[ self::$defaultLangId ] : self::$shoping_bag_path[0]));
    // EXECUTE PERSONAL PROCESS
    $this->__initPersonalMethods();
  }
  
  public function setUserId( $userId = 0 )
  {
    self::$userId = (int) $userId;
  }
  
  public function setUserLogin( $isLogin = false )
  {
    self::$isUserLogin = (bool) $isLogin;
    
    self::$registry->getService('template')->assign('isUserLogin',$isLogin);
  }
  
  public function setUserAuthEmail( $email = '' )
  {
    self::$userAuthEmail = (string) $email;
    
    self::$registry->getService('template')->assign('userAuthEmail',$email);
  }

  public function setCart( $cart = null )
  {
    self::$cart = $cart;
    
    self::$registry->getService('template')->assign('cart',self::$cart);
  }
  
  public function setTitle( $siteTitle = '' )
  {
    self::$registry->getService('template')->assign(
      'site_title', 
      html_entity_decode(((strlen($siteTitle) > 0) ? $siteTitle . ' | CARPEDM' : ((is_object(self::$seo)) ? self::$seo->metatitle . ' | CARPEDM' : 'CARPEDM' )), ENT_QUOTES, "UTF-8") 
    );
  }
  
  public function setMetaRobot( $metaRobot = '' )
  {
    self::$registry->getService('template')->assign(
      'meta_robot', 
      html_entity_decode(((strlen($metaRobot) > 0) ? $metaRobot : ((is_object(self::$seo)) ? self::$seo->metarobots : '' )), ENT_QUOTES, "UTF-8") 
    );
  }
  
  public function setMetaKeywords( $metaKeywords = '' )
  {
    self::$registry->getService('template')->assign(
      'meta_keywords', 
      html_entity_decode(((strlen($metaKeywords) > 0) ? $metaKeywords : ((is_object(self::$seo)) ? self::$seo->metakeywords : '' )), ENT_QUOTES, "UTF-8") 
    );
  }
  
  public function setMetaDescription( $metaDescription = '' )
  {
    self::$registry->getService('template')->assign(
      'meta_description', 
      html_entity_decode(((strlen($metaDescription) > 0) ? $metaDescription : ((is_object(self::$seo)) ? self::$seo->metadescription : '' )), ENT_QUOTES, "UTF-8") 
    );
  }
  
  public function getUserId()
  {
    return self::$userId;
  }
  
  public function isUserLogin()
  {
    return self::$isUserLogin;
  }
  
  public function getUserAuthEmail()
  {
    return self::$userAuthEmail;
  }
  
  public function getCart()
  {
    return self::$cart;
  }
  
  private function __tabLang()
  {
    $tabLang = (object) array(
      'mode' => 1,
      'code' => 0
    );
    if(is_array(self::$languageList) && (count(self::$languageList) > 0)) {
      foreach(self::$languageList as $value) {
        if((int) $value->id_lang === (int) self::$defaultLangId) {
          $tabLang->mode = 2;
          $tabLang->code = (int) self::$defaultLangId;
        }
      }
    }
    return $tabLang;
  }
  
  private function __initLanguageKeys()
  {
    $dictionary = self::$registry->getService('translator')->getDictionary();
    
    if(!is_null($dictionary)) {
      foreach($dictionary as $value) {
        self::$registry->getService('template')->assign( $value->t_key, html_entity_decode($value->t_value, ENT_QUOTES, "UTF-8") );
      }
    }
  }
  
  private function __initDefaultSEO()
  {
    self::$seo = self::$registry->getService('general-settings')->getMetaData();
    
    $this->setTitle();
    $this->setMetaRobot();
    $this->setMetaKeywords();
    $this->setMetaDescription();
  }
 
  private function __initPersonalMethods() 
  {
    self::$registry->getService('template')->assign(
      'nav_main_mobile',
      self::$registry->getService('cms')->navV1OnSiteById(
        1,
        self::$defaultLangId
      )
    );
    self::$registry->getService('template')->assign(
      'nav_main',
      self::$registry->getService('cms')->navV2OnSiteById(
        1,
        self::$defaultLangId
      )
    );
    self::$registry->getService('template')->assign(
      'nav_footer',
      self::$registry->getService('cms')->navBoxWithTitleOnSiteById(
        2,
        self::$defaultLangId
      )
    );
  }
  
}