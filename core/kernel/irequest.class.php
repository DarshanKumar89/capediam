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

class IRequest {
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var string **/
  private $urlPath;
	
  /** @var array **/
  private $urlBits;
  
  /** @var string  **/
  private $method;
  
  /**  @var string  **/
  private $query;
  
  /** @var string **/
  private $referer;
  
  /**  @var string  **/
  private $remote;
  
  /** @var string **/
  private $server;
  
  /** @var string **/
  private $port;
  
  /** @var string **/
  private $host;
  
  /** @var string **/
  private $location;
  
  /** @var boolean  **/
  private $https = false;
  
  /** @var array  **/
  private $post;
  
  /** @var string **/
  private $ip;
  
  /** @var array **/
  private $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
    // initialize
    $this->parseUrl();
    $this->setRemoteAddr();
  }
  
  public function getRequestMethod()
  {
    return strtoupper($this->method);
  }
  
  public function getURLBits()
  {
    return $this->urlBits;
  }

  public function getURLBit( $whichBit )
  {
    return (isset( $this->urlBits[ $whichBit ] )) ? $this->urlBits[ $whichBit ]  : 0 ;
  }
  
  public function setUrlBits( $bits = null ) 
  {
    if(!is_null($bits) && is_array($bits) && (count($bits) > 0)) {
      $this->urlBits = $bits;
    
      return true;
    }
    return false;
  }
  
  public function getRemoteAddress()
  {
    return $this->ip;
  }
	
  public function getEngine()
  {
    return $this->engine;
  }

  public function getUrlPath()
  {
    return $this->urlPath;
  }
  
  public function getQuery()
  {
    return $this->query;
  }
  
  public function getReferer()
  {
    return $this->referer;
  }
  
  public function getRemote()
  {
    return $this->remote;
  }
  
  public function getServer()
  {
    return $this->server;
  }
  
  public function getHost()
  {
    return $this->host;
  }
  
  public function getPort()
  {
    return $this->port;
  }
  
  public function getPost()
  {
    return empty( $this->post ) ? null : $this->post;
  }
  
  public function getLocation()
  {
    return $this->location;
  }

  public function isPost()
  {
    return ($this->method == "POST") ? true : false;
  }
  
  public function movePage( $num = 0, $path = '', $direct = false )
  {
    static $http = array (
      100 => "HTTP/1.1 100 Continue",
      101 => "HTTP/1.1 101 Switching Protocols",
      200 => "HTTP/1.1 200 OK",
      201 => "HTTP/1.1 201 Created",
      202 => "HTTP/1.1 202 Accepted",
      203 => "HTTP/1.1 203 Non-Authoritative Information",
      204 => "HTTP/1.1 204 No Content",
      205 => "HTTP/1.1 205 Reset Content",
      206 => "HTTP/1.1 206 Partial Content",
      300 => "HTTP/1.1 300 Multiple Choices",
      301 => "HTTP/1.1 301 Moved Permanently",
      302 => "HTTP/1.1 302 Found",
      303 => "HTTP/1.1 303 See Other",
      304 => "HTTP/1.1 304 Not Modified",
      305 => "HTTP/1.1 305 Use Proxy",
      307 => "HTTP/1.1 307 Temporary Redirect",
      400 => "HTTP/1.1 400 Bad Request",
      401 => "HTTP/1.1 401 Unauthorized",
      402 => "HTTP/1.1 402 Payment Required",
      403 => "HTTP/1.1 403 Forbidden",
      404 => "HTTP/1.1 404 Not Found",
      405 => "HTTP/1.1 405 Method Not Allowed",
      406 => "HTTP/1.1 406 Not Acceptable",
      407 => "HTTP/1.1 407 Proxy Authentication Required",
      408 => "HTTP/1.1 408 Request Time-out",
      409 => "HTTP/1.1 409 Conflict",
      410 => "HTTP/1.1 410 Gone",
      411 => "HTTP/1.1 411 Length Required",
      412 => "HTTP/1.1 412 Precondition Failed",
      413 => "HTTP/1.1 413 Request Entity Too Large",
      414 => "HTTP/1.1 414 Request-URI Too Large",
      415 => "HTTP/1.1 415 Unsupported Media Type",
      416 => "HTTP/1.1 416 Requested range not satisfiable",
      417 => "HTTP/1.1 417 Expectation Failed",
      500 => "HTTP/1.1 500 Internal Server Error",
      501 => "HTTP/1.1 501 Not Implemented",
      502 => "HTTP/1.1 502 Bad Gateway",
      503 => "HTTP/1.1 503 Service Unavailable",
      504 => "HTTP/1.1 504 Gateway Time-out"
    );
    header( $http[$num] );
    
    if($direct) {
      header( "Location: ". $path );
    } else {
      header( "Location: ". $this->getLocation() . '/' . $path );
    }
  }
  
  private function parseUrl()
  {
    $urldata = ( isset( $_GET['query'] ) ) ? $_GET['query'] : '' ;
    
    $this->urlPath = $urldata;
    
    if( $urldata == '' ) {
      $this->urlBits[0] = 'index';
      $this->urlPath = '';
    } else {
      $data = explode( '/', $urldata );
      
      while ( !empty( $data ) && strlen( reset( $data ) ) === 0 ) 
      {
        array_shift( $data );
      }
      while ( !empty( $data ) && strlen( end( $data ) ) === 0) 
      {
          array_pop($data);
      }
      $this->urlBits = $this->array_trim( $data );
    }
    $this->engine   = (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) ? 1 : 0;
    $this->method   = $_SERVER["REQUEST_METHOD"];
    $this->query    = $_SERVER["QUERY_STRING"];
    $this->referer  = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : null;
    $this->remote   = $_SERVER["REMOTE_ADDR"];
    $this->server   = $_SERVER["SERVER_NAME"];
    $this->host     = $_SERVER["HTTP_HOST"];
    $this->port     = $_SERVER["SERVER_PORT"];
   
    (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true) ? $this->https = true : $this->http = true;
    
    if( $this->https == true ) {
      $this->location = 'https://'.$this->server;
    } else {
      $this->location = 'http://'.$this->server;
    }
    if( isset($this->port) && $this->port !== '80' ) {
      $this->location .= ':'.$this->port;
    } 
    if( $this->isPost() == true ) {
      $this->setPost( $this->sanitize($_POST) );
    }
  }
  
  private function setRemoteAddr()
  {
    // This condition is necessary when using CDN, don't remove it.
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] && (!isset($_SERVER['REMOTE_ADDR']) || preg_match('/^127\..*/i', trim($_SERVER['REMOTE_ADDR'])) || preg_match('/^172\.16.*/i', trim($_SERVER['REMOTE_ADDR'])) || preg_match('/^192\.168\.*/i', trim($_SERVER['REMOTE_ADDR'])) || preg_match('/^10\..*/i', trim($_SERVER['REMOTE_ADDR']))))
    {
      if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ','))
      {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $this->ip = $ips[0];
      } else {
        $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
    }
    $this->ip = $_SERVER['REMOTE_ADDR'];
  }
	
  private function array_trim( $array ) 
  {
    while ( ! empty( $array ) && strlen( reset( $array ) ) === 0) 
    {
      array_shift( $array );
    }

    while ( !empty( $array ) && strlen( end( $array ) ) === 0) 
    {
      array_pop( $array );
    }
    return $array;
  }
  
  private function setPost( $a )
  {
    $this->post = $a;
  }
  
  public function clearInput( $input = null )
  {
    $output = null;
    
    if (is_array($input)) {
      foreach($input as $var=>$val) {
        $output[$var] = $this->clearInput($val);
      }
    } else {
      if (get_magic_quotes_gpc()) {
        $input = stripslashes($input);
      }
      $input  = $this->cleanInput($input);
      $output = strip_tags( $input );
    }
    return $output;
  }
  
  public function sanitize( $input = null ) 
  {
    $output = null;
    
    if (is_array($input)) {
        foreach($input as $var=>$val) {
          $output[$var] = (($var == "html-content") || ($var == "'html-content'")) ? $val : $this->sanitize($val);
        }
    } else {
      if (get_magic_quotes_gpc()) {
          $input = stripslashes($input);
      }
      $input  = $this->cleanInput($input);
      $output = strip_tags( htmlentities( $input, ENT_QUOTES, "UTF-8") );
    }
    return $output;
  }
  
  public function cleanInput($input) 
  {
    $output = preg_replace($this->search, '', $input);
    return $output;
  }
  
  public function isBot( $userAgent = '' ) 
  {
    $crawlers_agents = strtolower('Googlebot 2.1|Bloglines subscriber|Dumbot|Sosoimagespider|QihooBot|FAST-WebCrawler|Superdownloads Spiderman|LinkWalker|msnbot|ASPSeek|WebAlta Crawler|Lycos|FeedFetcher-Google|Yahoo|YoudaoBot|AdsBot-Google|Googlebot|Scooter|Gigabot|Charlotte|eStyle|AcioRobot|GeonaBot|msnbot-media|Baidu|CocoCrawler|Google|Charlotte t|Yahoo! Slurp China|Sogou web spider|YodaoBot|MSRBOT|AbachoBOT|Sogou head spider|AltaVista|IDBot|Sosospider|Yahoo! Slurp|Java VM|DotBot|LiteFinder|Yeti|Rambler|Scrubby|Baiduspider|accoona');
    $crawlers = explode("|", $crawlers_agents);
    
    if(is_array($crawlers)) {
      foreach($crawlers as $crawler) {
        if(strpos(strtolower($userAgent), trim($crawler)) !== false) {
          return true;
        }
      }
    }
    return false;
  }
	
}