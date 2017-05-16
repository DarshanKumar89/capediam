<?php
/*
*  2015 HIGHLITE
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.eu - Software License
*/

require_once __DIR__ . DIRECTORY_SEPARATOR . 'highlite-api.php';

class Highlite extends HighliteAPI {
  
  const IMPORT_FILE = 1;
  
  const DELIMITER_FILE_0 = "\n";
  
  const DELIMITER_FILE_1 = ";";
  
  /** @var array **/
  private $fKeys = array(
    0 => array(),
    1 => array(
      'Product No.'           => 'id_product',
      'Product Name'          => 'product_name',
      'Country of Origin'     => 'country',
      'Weight (kg)'           => 'weigth',
      'Length (m)'            => 'length',
      'Width (m)'             => 'width',
      'Height (m)'            => 'height',
      'Qty. in Carton'        => 'qty_carton',
      'EAN No.'               => 'ean',
      'Internet Advice Prijs' => 'int_advice_prijs',
      'Unit Price'            => 'unit_price',
      'Min. Sales Qty.'       => 'min_sales_qty',
      'Category'              => 'category',
      'Subcategory 1'         => 'subcategory_1',
      'Subcategory 2'         => 'subcategory_2',
      'Subcategory 3'         => 'subcategory_3',
      'Tariff No.'            => 'tarrif',
      'Status'                => 'status',
      'Accessory'             => 'accessory',
      'Substitute'            => 'substitute',
      'Catalog Page'          => 'catalog_page',
      'In Stock'              => 'in_stock',
      'Exp. Week of Arrival'  => 'exp_week_of_arrival',
      'Webshop'               => 'webshop',
      'Subheading EN'         => 'subheading_en',
      'Subheading DE'         => 'subheading_de',
      'Main Description EN'   => 'description_en',
      'Main Description DE'   => 'description_de',
      'Specs EN'              => 'specs_en',
      'Specs DE'              => 'specs_de',
      'Images List'           => 'img_list',
      'Brand'                 => 'brand',
    )
  );
  
  /** @var array **/
  private $ignoreList = [];
  
  /** @var array **/
  private $categoryStructure = [];
  
  public function __construct() 
  {
    parent::__construct();
  }
  
  public function sync()
  {
    $csv = $this->getXMLFile(self::IMPORT_FILE);
    
    if(strlen($csv) > 0) {
      $data = $this->__csvToJson($csv, self::IMPORT_FILE, self::DELIMITER_FILE_1);
      
      // save to db
    }
    return false;
  }
  
  public function fetch()
  {
    $csv  = $this->getXMLFile(self::IMPORT_FILE);
    $data = $this->__csvToJson($csv, self::IMPORT_FILE, self::DELIMITER_FILE_1);
    
    return $data;
  }
  
  private function __csvToJson( $csv = null, $fileId = 0, $delimiter = '' )
  {   
    switch((int) $fileId) 
    {
      case 0:
        
        return null;
      case 1:
        return $this->__parseCSVToJSONF1($csv, $delimiter);
      default: 
        return null;
    }
  }
  
  private function __parseCSVToJSONF1( $csv = null, $delimiter = '' )
  {
    $arr  = $this->__csvstring_to_array($csv, $delimiter);

    if(is_array($arr) && (count($arr) > 0)) {
      $data = [];
      $keys = $arr[0];
      // unset array[0]
      unset($arr[0]);
      // parse keys
      foreach($keys as $key => $value) {
        $keys[ $key ] = $this->fKeys[1][ $value ];
      }
      // parse data
      foreach($arr as $i => $value) {
        foreach($keys as $key => $kValue) {
          $data[ $i ][ $kValue ] = $value[ $key ];
        }
      }
      // parse img
      foreach($data as $key => $value) {
        if(isset($value["img_list"])) {
          $data[ $key ]["img_list"] = explode('|', $value["img_list"]);
        }
      }
      // to object
      foreach($data as $key => $value) {
        $data[ $key ] = (object) $value;
      }
      return $data;
    }
    return null;
  }
  
  private function __simple_csvstring_to_array( $csv = null, $delimiter = '' )
  {
    return array_map("str_getcsv", explode($delimiter, $csv));
  }
  
  private function __csvstring_to_array( $string = "", $separatorChar = ';', $enclosureChar = '', $newlineChar = "\n" ) 
  {
    $array        = array();
    $size         = strlen($string);
    $columnIndex  = 0;
    $rowIndex     = 0;
    $fieldValue   = "";
    $isEnclosured = false;
    
    for($i=0;$i<$size;$i++) 
    {
      $char    = $string{$i};
      $addChar = "";

      if($isEnclosured) {
        if($char==$enclosureChar) {
          if($i+1<$size && $string{$i+1}==$enclosureChar){
            // escaped char
            $addChar=$char;
            $i++; // dont check next char
          } else {
            $isEnclosured = false;
          }
        } else {
          $addChar=$char;
        }
      } else {
        if($char==$enclosureChar) {
          $isEnclosured = true;
        } else {
          if($char==$separatorChar) {
            $array[$rowIndex][$columnIndex] = $fieldValue;
            $fieldValue="";

            $columnIndex++;
          } elseif ($char==$newlineChar) {
            echo $char;
            $array[$rowIndex][$columnIndex] = $fieldValue;
            $fieldValue="";
            $columnIndex=0;
            $rowIndex++;
          } else {
            $addChar=$char;
          }
        }
      }
      if($addChar!="") {
        $fieldValue .= $addChar;
      }
    }
    if($fieldValue) { // save last field
      $array[$rowIndex][$columnIndex] = $fieldValue;
    }
    return $array;
  }
  
}