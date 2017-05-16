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

class GeneralSettingsModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function generalSettings()
  {
    $settings = [];
    
    $qry1 = "SELECT
              site_name, site_url_prefix, upload_path,
              scripts
            FROM
              app_generals";
    self::$registry->getService('storage')->executeQuery( $qry1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $settings['base'] = self::$registry->getService('storage')->getResult()[0];
    }
    $qry2 = "SELECT 
              * 
            FROM
              app_generals_meta";
    self::$registry->getService('storage')->executeQuery( $qry2 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      $meta = [];
      
      foreach( $data as $value) {
        $meta[ $value->lang_id ] = $value;
      }
      $settings['base']->meta = $meta;
    }
    $qry3 = "SELECT 
              * 
            FROM
              app_generals_footer";
    self::$registry->getService('storage')->executeQuery( $qry3 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data1  = self::$registry->getService('storage')->getResult();
      $footer = [];
      
      foreach( $data1 as $value) {
        $footer[ $value->lang_id ] = $value;
      }
      $settings['footer'] = $footer;
    }
    $qry4 = "SELECT 
              * 
            FROM
              app_generals_google_analytics";
    self::$registry->getService('storage')->executeQuery( $qry4 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $settings['ga-analytics'] = self::$registry->getService('storage')->getResult()[0];
    }
    return (count($settings) > 0) ? $settings : null;
  }
  
  /** OLD **/
  
  public function htmlFooter( $langId = 0 )
  {
    $qry = "SELECT
              content
            FROM
              app_generals_footer";
    $keys = array(
      ':lang_id' => $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function getMetaData()
  {
    $qry = "SELECT
              metatitle, metakeywords, metadescription,
              metarobots
            FROM
              app_generals_meta";
    $keys = array(
      ':lang_id' => self::$registry->getService('languages')->getCurrentLanguage()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function getGenerals()
  {
    $qry = "SELECT
              site_name,scripts
            FROM
              app_generals";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function googleAnalytic()
  {
    $qry = "SELECT 
              * 
            FROM
              app_generals_google_analytics";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function addOnScripts()
  {
    $qry = "SELECT 
              scripts 
            FROM
              app_generals";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->scripts : null;
  }
  
  public function clearBaseSettings()
  {
    self::$registry->getService('storage')->truncate( "app_generals" );
  }
  
  public function saveBaseSettings( $data )
  {
    self::$registry->getService('storage')->insert( 'app_generals', $data );
  }
  
  public function clearMetaData()
  {
    self::$registry->getService('storage')->truncate( "app_generals_meta" );
  }
  
  public function saveMetaData( $data )
  {
    self::$registry->getService('storage')->insert( 'app_generals_meta', $data );
  }
  
  public function clearFooter()
  {
    self::$registry->getService('storage')->truncate( "app_generals_footer" );
  }
  
  public function saveFooter( $data )
  {
    self::$registry->getService('storage')->insert( 'app_generals_footer', $data );
  }
  
  public function clearGoogleAnalyticsData()
  {
    self::$registry->getService('storage')->truncate( "app_generals_google_analytics" );
  }
  
  public function saveGoogleAnalyticsData( $data )
  {
    self::$registry->getService('storage')->insert( 'app_generals_google_analytics', $data );
  }
          
}