<?php
/*
*  2015 HIGHLITE API
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.eu - Software License
*/

class HighliteAPI {
 
  const LOGIN_URL = "http://www.highlite.nl/user/login";
  
  const DOWNLOAD_URL_0 = "http://www.highlite.nl/silver.download/Downloads@Lists/highlite_items.csv";
  
  const DOWNLOAD_URL_1 = "http://www.highlite.nl/silver.download/products/products_v1_0.csv";
  
  const LOGIN = "205813";
  
  const PASSWORD = "55show55";
  
  private $ckfile;
  
  private $username;
  
  private $password;
  
  public function __construct() {}
  
  public function getXMLFile( $fileId = 0 )
  {
    // AUTH
    $this->__authorization();
    // FETCH
    $ch = curl_init( ((int) $fileId === 1) ? self::DOWNLOAD_URL_1 : self::DOWNLOAD_URL_0 );
    curl_setopt( $ch, CURLOPT_COOKIEFILE, $this->ckfile );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
    // data
    $output = curl_exec( $ch );
    // clear
    unlink( $this->ckfile );
    //
    return $output; 
  }
  
  private function __authorization()
  {
    // TEMP
    $this->ckfile = tempnam( '/tmp', 'CURLCOOKIE' );
    // FETCH
    $ch = curl_init( self::LOGIN_URL );
    curl_setopt( $ch, CURLOPT_POSTFIELDS,  'Login='.self::LOGIN.'&Password='.self::PASSWORD.'&LoginButton=LoginButton' );
    curl_setopt( $ch, CURLOPT_POST, 1 );
    curl_setopt( $ch, CURLOPT_COOKIEJAR, $this->ckfile );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_exec( $ch );
  }
  
}