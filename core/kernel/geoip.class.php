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

class GEOIP {
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var null **/
  private $visitor;
  
  /** @var array **/
  private static $default = array(
    'continent'   => 'EU',
    'countryCode' => 'SK',
    'countryName' => 'Slovakia',
    'city'        => 'Bratislava',
    'region'      => '',
    'metroCode'   => '',
    'areaCode'    => '',
    'latitude'    => '48.666698455811',
    'longitude'   => '19.5',
    'postalCode'  => '',
    'timezone'    => array(
      'timeZoneId'   => 'Europe/Bratislava',
      'timeZoneName' => 'Central European Summer Time'
    )
  );

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function getVisitor()
  {
    return $this->visitor;
  }
  
  public function init()
  {
    if(!is_bool(apache_note("GEOIP_CONTINENT_CODE"))) {
      $this->visitor = (object) array(
        'continent'   => apache_note("GEOIP_CONTINENT_CODE"),
        'countryCode' => apache_note("GEOIP_COUNTRY_CODE"),
        'countryName' => apache_note("GEOIP_COUNTRY_NAME"),
        'city'        => apache_note("GEOIP_CITY"),
        'region'      => apache_note("GEOIP_REGION"),
        'metroCode'   => apache_note("GEOIP_DMA_CODE"),
        'areaCode'    => apache_note("GEOIP_AREA_CODE"),
        'latitude'    => apache_note("GEOIP_LATITUDE"),
        'longitude'   => apache_note("GEOIP_LONGITUDE"),
        'postalCode'  => apache_note("GEOIP_POSTAL_CODE")
      );
    } else {
      $object = $this->__fetchGeoIP();

      if( ( !is_bool($object->continent) && !is_null($object->continent) && (count($object->continent) !== 0)) &&
    	( !is_bool($object->continent) && !is_null($object->countryCode) && (count($object->countryCode) !== 0)) &&
        ( !is_bool($object->continent) && !is_null($object->countryName) && (count($object->countryName) !== 0)) &&
        ( !is_null($object->city) && (count($object->city) !== 0)) &&
        ( !is_null($object->latitude) && (count($object->latitude) !== 0)) &&
        ( !is_null($object->longitude) && (count($object->longitude) !== 0)) 
      ) {
        $this->visitor = $object;
      } else {
        $this->visitor = (object) self::$default;
      }
    }
  }
  
  private function __fetchGeoIP()
  {
    $IP = self::$registry->getService('irequest')->getRemoteAddress();

    if($IP !== '127.0.0.1') 
    {
      $curl = curl_init();
              curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => __GEOIP_EXTERNAL_URL__ . $IP,
              ));
      $result = curl_exec($curl);
                curl_close($curl);
      $object = (object) json_decode($result,JSON_NUMERIC_CHECK);      
      
      return (is_object($object)) ? $object : (object) self::$default;
    } 
    else 
    {
      return (object) self::$default;
    }
  }
  
}