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

class DictionaryModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function createItem( $data = nulll )
  {
    self::$registry->getService('storage')->insert( 'app_dictionary', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateItemOnDictionary( $changes = null, $itemId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_dictionary', $changes, ' id_dictionary = '. (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function countItems( $useList = null )
  {
    $qry = "SELECT
              (count(id_dictionary)) as avx
            FROM
              app_dictionary";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_dictionary IN (".implode(",",$useList).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function itemList( $pagination = false, $useList = null )
  {
    if((int) self::$registry->getService('cms')->getUser()->rule == 1) {
      $qry = "SELECT
                id_dictionary, section, block, l_key, t_key, t_value
              FROM
                app_dictionary";
      if(is_array($useList) && (count($useList) > 0)) {
        $qry .= " WHERE id_dictionary IN (".implode(",",$useList).")";
      }
    } else {
      $qry = "SELECT
                id_dictionary, section, block, l_key, t_key, t_value
              FROM
                app_dictionary
              WHERE
                section != 'Global'
              AND
                section != 'Store'";
      if(is_array($useList) && (count($useList) > 0)) {
        $qry .= " AND id_dictionary IN (".implode(",",$useList).")";
      }
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry );
    }
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function itemIdsByKeywords( $keywords = '' )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // QRY
    $qry = "SELECT 
                id_dictionary
              FROM 
                app_dictionary 
              WHERE
                section LIKE ('%".$keywords2."%')
              OR
                block LIKE ('%".$keywords2."%')
              OR
                t_key LIKE ('%".$keywords2."%')
              OR
                t_value LIKE ('%".$keywords2."%')
              GROUP BY
                id_dictionary";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids  = self::$registry->getService('storage')->getResult();
      $data = [];

      foreach($ids as $value) {
        $data[] = (int) $value->id_dictionary;
      }
      return $data;
    }
    return null;
  }
  
  public function isElementByKeys( $section = '', $block = '', $langId = 0, $elementKey = '' )
  {
    $qry = "SELECT
            id_dictionary
          FROM
            app_dictionary";
    $keys = array(
      ':section' => $section,
      ':block'   => $block,
      ':l_key'   => $langId,
      ':t_key'   => $elementKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function itemIdByKeyLang( $langId = 0, $key = '' )
  {
    $qry = "SELECT
              id_dictionary
            FROM
              app_dictionary";
    $keys = array(
      ':l_key' => $langId,
      ':t_key' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_dictionary : 0;
  }
  
  public function isKey( $langId = 0, $key = '' )
  {
    $qry = "SELECT
              t_value
            FROM
              app_dictionary";
    $keys = array(
      ':l_key' => $langId,
      ':t_key' => $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function removeItemFromDictionary( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_dictionary', ':id_dictionary', (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
}