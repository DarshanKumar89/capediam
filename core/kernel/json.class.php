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

class JSON {
  
  /**  @var Registry **/
  protected static $registry;
  
  /** @var array **/
  private $json;

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function push( $data )
  {
    $this->json = $data;
  }
  
  public function buildAjaxSuccessObject($a,$b,$c,$d='')
  {
    $successObject['request'] = array();
    $successObject['request']['success'] = array(
        "domain"       => "global",
        "reason"       => "required",
        "message"      =>  $a,
        "locationType" => "header",
        "location"     => $b,
        "response"     => $d
    );
    $successObject['request']['code']    = $c;
    $successObject['request']['message'] = $a;
    
    $this->json = $successObject;
  }
  
  public function buildAjaxErrorObject($a,$b,$c)
  {
    $errorObject = array();
    $errorObject['error']['errors'] = array(
        "domain"       => "global",
        "reason"       => "required",
        "message"      =>  $a,
        "locationType" => "header",
        "location"     => $b
    );
    $errorObject['error']['code']    = $c;
    $errorObject['error']['message'] = $a;
    
    $this->json = $errorObject;
  }
  
  public function renderJSON()
  {
    header('Content-Type: application/json');
    print_r( json_encode($this->json, JSON_NUMERIC_CHECK) );
    exit;
  }
  
}