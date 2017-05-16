<?php
/*
*  2015 Slaty Site
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.cz - Software License
*/

class HeurekaCategoryExport {
  
  const HEUREKA_XML_URL = 'http://www.heureka.sk/direct/xml-export/shops/heureka-sekce.xml';
  
  /** @var null **/
  private $xml;
  
  /** @var null **/
  private $json;
  
  /** @var array **/
  private $array;
  
  /** @var array **/
  private $categories;
  
  public function __construct( $url = '' ) 
  {
    $this->xml   = simplexml_load_string(file_get_contents((strlen((string) $url) > 0) ? $url : self::HEUREKA_XML_URL));
    $this->json  = json_encode($this->xml);
    $this->array = json_decode($this->json,TRUE);
    
    $this->parser( $this->array );
  }
  
  public function getCategoryList()
  {
    return $this->categories;
  }
  
  private function parser( $array = null )
  {
    foreach($array as $value) 
    {
      if(is_array($value)) {
        $this->parser( $value );
      } 
      if(isset($value["CATEGORY_ID"]) && isset($value["CATEGORY_NAME"]) && isset($value["CATEGORY_FULLNAME"])) {
        $this->categories[] = array(
          ':id_category'        => (int) $value["CATEGORY_ID"],
          ':category_name'      => $value["CATEGORY_NAME"],
          ':category_full_name' => $value["CATEGORY_FULLNAME"]
        );
      }
    }
  }
  
}