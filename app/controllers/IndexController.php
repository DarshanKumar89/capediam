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

class IndexController {
  
  CONST MAILCHIMP_API_KEY = "2780646095e5b01e8119679de29c7872-us13";
  
  CONST MAILCHIMP_LIST_ID = "e1df041000";
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var array */
  protected static $carousels = array(
    2,
    8,
  );
  
  /** @var int */
  protected static $limit = 24;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run()
  {
    $langId = self::$registry->getService('languages')->getCurrentLanguage();
    
    self::$registry->getService('template')->assign(
      'slider',
      self::$registry->getService('slider')->sliderOnSiteById(1, $langId)
    );
    self::$registry->getService('template')->assign(
      'sub_slider',
      self::$registry->getService('slider')->sliderOnSiteById(2, $langId)
    );
    self::$registry->getService('template')->assign(
      'carousels',
      $this->__carousels()
    );
    self::$registry->getService('template')->assign(
      'latest_articles',
      self::$registry->getService('page')->pageListOnSiteById(1, $langId)
    );
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|slider.tpl|nav.tpl|main.tpl|footer.tpl');
  }
  
  private function __carousels()
  {
    if(isset(self::$carousels) && (is_array(self::$carousels) && (count(self::$carousels) > 0))) 
    {
      $langId = self::$registry->getService('languages')->getCurrentLanguage();
      $data   = [];
      
      foreach(self::$carousels as $caruselId) {
        $data[] = self::$registry->getService('store')->categoryCarouselById(
          $caruselId,
          $langId,
          self::$limit
        );
      }
      return $data;
    }
    return null;
  }
  
  public function mailChimp() 
  {
		$form = self::$registry->getService('irequest')->getPost();

		if((isset($form['mce']) && (strlen($form['mce']) > 10)) && 
      ((bool) self::$registry->getService('helper')->isEmail($form['mce']) === true)
    ) {
      $success = self::$registry->getService('translator')->translate("mailchimp_newsletter_success");
      $error   = self::$registry->getService('translator')->translate("mailchimp_newsletter_error");
      $expl    = explode('@', $form['mce']);
      $first   = (is_array($expl) && (count($expl) > 0)) ? $expl[0] : null;
      
			$reqCode = (int) $this->syncMailchimp(array(
        'email'     => (string) $form['mce'],
        'status'    => 'subscribed',
        'firstname' => $first,
        'lastname'  => ' ',
      ));
			self::$registry->getService('json')->push(array(
        'status'  => ($reqCode == 200) ? 200 : 401,
        'message' => ($reqCode == 200) ? $success : $error
      ));
			self::$registry->getService('json')->renderJSON();
		} else {
			self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => self::$registry->getService('translator')->translate("mailchimp_wrong_email"),
      ));
			self::$registry->getService('json')->renderJSON();
		}
	}

	private function syncMailchimp( $data = null ) 
  {
    if(((strlen(self::MAILCHIMP_API_KEY) > 0) && (strlen(self::MAILCHIMP_LIST_ID) > 0)) &&
       (is_array($data) && (count($data) > 0)) && 
       (isset($data['email']) && isset($data['status']) && isset($data['firstname']) && isset($data['lastname'])) &&
       ((strlen($data['email']) > 0) && (strlen($data['status']) > 0) && (strlen($data['firstname']) > 0) && (strlen($data['lastname']) > 0))
    ) {
      // VARS
      $memberId = md5(strtolower($data['email']));
      $api_key  = substr(self::MAILCHIMP_API_KEY, (strpos(self::MAILCHIMP_API_KEY, '-') + 1));
      $req_url  = 'https://'.$api_key.'.api.mailchimp.com/3.0/lists/'.self::MAILCHIMP_LIST_ID.'/members/'.$memberId;
      // OBJECT
      $json = json_encode([
        'email_address' => $data['email'],
        'status'        => $data['status'],
        'merge_fields'  => [
          'FNAME'       => $data['firstname'],
          'LNAME'       => $data['lastname']
        ]
      ]);
      // FETCH
      $ch = curl_init($req_url);
      curl_setopt($ch, CURLOPT_USERPWD, 'user:'.self::MAILCHIMP_API_KEY);
      curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
      // EXEC
      curl_exec($ch);
      // HTTP CODE
      $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      // CLOSE
      curl_close($ch);
      // RETURN HTTP CODE
      return $httpCode;
    }
    return 402;
	}

}