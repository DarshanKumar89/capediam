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

class Languages {
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var int **/
  private static $langId;
  
  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function setCurrentLanguage( $langId = 0 )
  {
    self::$langId = ((int) $langId > 0) ? (int) $langId : __DEFAULT_LANG_ID__;
  }
  
  public function getCurrentLanguage()
  {
    return self::$langId;
  }
  
  public function getCurrentLanguageCode()
  {
    $qry = "SELECT
              language_code
            FROM
              app_languages";
    $keys = array(
      ':id_lang' => self::$langId  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->language_code : null;
  }
  
  public function getEnabledLanguages()
  {
    $qry = "SELECT
              id_lang, lang_name, language_code, iso_code
            FROM
              app_languages";
    $keys = array(
      ':active' => 1  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        $data[ $value->id_lang ] = $value;
      }
      return $data;
    }
    return null;
  }
  
  public function getDefaultLanguageId()
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ':active'       => 1,
      ':lang_default' => 1
    );
    $filter = "LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : __DEFAULT_LANG_ID__;
  }
  
  public function countLanguages( $useList = null )
  {
    $qry = "SELECT
              (count(id_lang)) as avx
            FROM
              app_languages";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_lang IN (".implode(",",$useList).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function languageList( $pagination = false, $useList = null )
  {
    $qry = "SELECT
              id_lang, lang_name, country_name, country_code, iso_code,
              language_code, active
            FROM
              app_languages";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_lang IN (".implode(",",$useList).")";
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry );
    }
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function languageIdsByKeywords( $keywords = '' )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // QRY
    $qry = "SELECT 
                id_lang
              FROM 
                app_languages 
              WHERE
                lang_name LIKE ('%".$keywords2."%')
              OR
                country_name LIKE ('%".$keywords2."%')
              OR
                country_code LIKE ('%".$keywords2."%')
              OR
                iso_code LIKE ('%".$keywords2."%')
              GROUP BY
                id_lang";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = self::$registry->getService('storage')->getResult();

      foreach($ids as $value) {
        $data[] = $value->id_lang;
      }
    }
    return (count($data) > 0) ? $data : null;
  }
  
  public function getCountryList()
  {
    $qry = "SELECT
              id_lang, country_name
            FROM
              app_languages
            WHERE
              country_name != '-'";
    $filter = "GROUP BY country_name";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function isCountryById( $countryId = 0 )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ':id_lang' => (int) $countryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isCountryByCode( $cc = null )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ':country_code' => (string) $cc
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function getCountryIdByCCode( $cc = null )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ':country_code' => (string) $cc
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->id_lang : null;
  }
  
  public function getCountryNameById( $langId = 0 )
  {
    $qry = "SELECT
              country_name
            FROM
              app_languages";
    $keys = array(
      ':id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->country_name : null;
  }
  
  public function checkLanguageId( $langId = 0 )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ":id_lang" => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function langIdByCode( $langCode = '' )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ":language_code" => (string) $langCode  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : __DEFAULT_LANG_ID__;
  }
  
  public function isLangCode( $langCode = '' )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ":language_code" => (string) $langCode  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isLangById( $langId = 0 )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ":id_lang" => (int) $langId  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAvailableLangById( $langId = 0 )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_languages";
    $keys = array(
      ':id_lang' => (int) $langId,
      ':active'  => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function updateLanguageById( $changes = null, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_languages', $changes, ' id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
 
}