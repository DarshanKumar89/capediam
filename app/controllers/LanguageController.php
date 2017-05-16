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

class LanguageController {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct(Registry $registry) 
  {
    self::$registry = $registry;
  }
  
  public function run( $routeId = 0, $langCode = '' )
  {
    $referer = self::$registry->getService('irequest')->getReferer();
    $useRef  = self::$registry->getService('irouter')->matchByReferer( $referer );

    if((bool) self::$registry->getService('languages')->isLangCode( $langCode ) === true) {
      $langId = self::$registry->getService('languages')->langIdByCode( $langCode );
      
      if((bool) self::$registry->getService('languages')->isAvailableLangById( $langId ) === true) {
        self::$registry->getService('sessions')->set( 
          'language_global', 
          $langId
        );
      }
    }
    self::$registry->getService('irequest')->movePage(
      301,
      (((bool) $useRef === true) ? $referer : '')
    );
  }
  
}