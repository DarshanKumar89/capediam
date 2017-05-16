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

require_once __LIB_DIR__ . 'facebook-sdk-v5/autoload.php';

class FacebookAPI {
  
  CONST APP_ID = "979332885446375";
  
  CONST APP_SECRET = "8abc375e9fc89cabe46db6001fa0d588";
  
  CONST FB_PAGE_ID = "1631126527152420";
  
  /**  @var Registry **/
  protected static $registry;
  
  /**  @var void **/
  protected static $fb;
  
  /**  @var void **/
  protected static $session;
  
  /** @var string **/
  private static $accessToken = "CAAN6srTAZCucBAAlaCuYbzPkWwESeVWnu0oSlPJIOC1kum8FYIxllq3hep4l3C5FET09IkmEguOTaZCgiSsYdgRbPcNoRCUFfWXl6jNhcnrZBpnMZBD1EGkFgZCuSWfaeDtUITkZBvF2q8cwIlM6P8sdZAIWEwg51muxhOaCkuEFPjgvTymFU5bRS6katcZAxssn1YSZAWyWcYQZDZD";

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
    
    self::$fb = new Facebook\Facebook([
      'app_id'                => self::APP_ID,
      'app_secret'            => self::APP_SECRET,
      'default_graph_version' => 'v2.4',
    ]);
    
    self::$fb->setDefaultAccessToken(self::$accessToken);
    
    self::$session = new Facebook\FacebookApp(self::APP_ID, self::APP_SECRET);
  }
  
  public function sendPost( $payload = [] )
  {
    $request = new Facebook\FacebookRequest(
      self::$session,
      $this->__getPageAccessToken(),
      'POST',
      '/'.self::FB_PAGE_ID.'/feed',
      $payload
    );
    $response = self::$fb->getClient()->sendRequest($request);
    
    return $response->getGraphNode()->getField("id");
  }
  
  public function deletePostById( $postId = '' )
  {
    if(strlen($postId) > 0) {
      $request = new Facebook\FacebookRequest(
        self::$session,
        $this->__getPageAccessToken(),
        'DELETE',
        '/'.$postId
      );
      $response = self::$fb->getClient()->sendRequest($request);

      return $response->getGraphNode()->getField("success");
    }
    return false;
  }
  
  private function __getPageAccessToken()
  {
    $request = new Facebook\FacebookRequest(
      self::$session,
      self::$accessToken,
      'GET',
      '/'.self::FB_PAGE_ID,
      array(
        'fields' => 'access_token'
      )
    );
    return self::$fb->getClient()->sendRequest($request)->getDecodedBody()["access_token"];
  }
}