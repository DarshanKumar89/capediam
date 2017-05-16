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

class FormsController {
  
  const MAX_SEND_FORM = 5;
  
  /** @var Registry **/
  protected static $registry;

  /** @var  array **/
  private static $recipients = array(
    'henrich@mozayc.net',
  );
  
  /** @var array **/
  private static $form_keys = array(
    'request-storgin-info' => '__form_request_storgin_info',
  );
  
  /** @var array */
  private $keys = array(
    'full-name' => 'Meno a priezvisko',
    'company'   => 'Spoločnosť',
    'email'     => 'E-mail',
    'phone'     => 'Phone',
    'message'   => 'Správa',
    'product'   => 'Produkt'
  );
  
  /** @var  array **/
  private $status;

  /** @var  array **/
  private $errors;

  /** @var  array **/
  private $data;

  /** @var  bool **/
  private $send;

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }

  public function run()
  {
    self::$registry->getService('irequest')->movePage(301,'');
  }
  
  public function api( $formKey = null )
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(array_key_exists($formKey, self::$form_keys)) {
      $form_method_name = self::$form_keys[ $formKey ];
      $form_hash_key    = self::$registry->getService('hash')->ripemd128(
        self::$registry->getService('controller')->getUserId() 
      );
      
      ((strlen($form_method_name) > 0) && ((bool) $this->__vsForm( $form_hash_key ) === true)) ? $this->$form_method_name( $form ) : $this->__exceeding_the_daily_limit();
    }
    $this->__BadRequest();
  }
  
  private function __form_request_storgin_info( $form = null )
  {
    if(((strlen($form["email"]) > 0) && ((bool) self::$registry->getService('helper')->isEmail($form["email"]) === true)) &&
      ((isset($form["articleRef"]) && (strlen($form["articleRef"]) === 32)) && ((bool) self::$registry->getService('store')->isArticleByReference( $form["articleRef"] ) === true))  
    ) {
      // EMAIL ID 
      $emailId = ((bool) self::$registry->getService('form')->isFormEmailByEmail( $form["email"] ) === true) ? self::$registry->getService('form')->formEmailIdByEmail( $form["email"] ) : self::$registry->getService('form')->insertFormEmail( $form["email"] );
      // ARTICLE
      $articleId   = self::$registry->getService('store')->articleIdByReference( $form["articleRef"] );
      $articleName = self::$registry->getService('store')->articleNameById( $articleId );
      
      if((bool) self::$registry->getService('form')->isEmailInWHQtyInfo(
        $articleId,
        $emailId
      ) === true) {
        self::$registry->getService('json')->push(array(
          'valid'   => 1,
          'message' => "Pre daný produkt bola žiadost už odoslaná."
        ));
        self::$registry->getService('json')->renderJSON();
      } else {
        // SET VARS
        $this->data["email"]   = $form["email"];
        $this->data["product"] = $articleId .' - '. $articleName;
        // SENDING
        if(((bool) self::$registry->getService('form')->insertWHQtyInfoEmail(
            $articleId,
            $emailId
          ) === true) &&
          ((bool) $this->__sendMails(
          'Kontaktujte ma prosim, pri naskladnení nových zásob.',
          true
        ) === true)) {
          self::$registry->getService('json')->push(array(
            'valid'   => 1,
            'message' => "Ďakujeme budeme Vás kontaktovať."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'valid'   => 0,
            'message' => "Bohužial došlo k chybe pri spracovaní žiadosťi.Prosím skúste to neskôr."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      }
    } else {
      self::$registry->getService('json')->push(array(
        'valid'   => 0,
        'message' => "Neplatná emailová adresa."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function is_email_unique( $email = '' )
  {
    return self::$registry->getService('form')->isFormEmailUniqueById( $email );
  }
  
  private function __vsForm( $formKey = '' )
  {
    $hash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('irequest')->getRemoteAddress() . $formKey);
    $cxx  = (self::$registry->getService('form')->isFormKey( $hash )) ? self::$registry->getService('form')->vFormDataByKey( $hash ) : self::$registry->getService('form')->insertFormRecord( $hash );

    if(!is_null($cxx)) {
      $toDay = new DateTime('NOW');
      $fDate = new DateTime( $cxx->created );

      if($fDate->format("Y-m-d") < $toDay->format("Y-m-d")) {
        return self::$registry->getService('form')->resetCount( $hash );
      } else {
        return (($fDate->format("Y-m-d") == $toDay->format("Y-m-d")) && ((int) $cxx->count < self::MAX_SEND_FORM)) ? self::$registry->getService('form')->addSendRecord( ((int) $cxx->count + 1), $hash) : false;
      }
    }
    return false;
  }
  
  private function __exceeding_the_daily_limit()
  {
    self::$registry->getService('json')->push(array(
      'valid'   => 0,
      'message' => "Prekročený denný limit."
    ));
    self::$registry->getService('json')->renderJSON();
  }
  
  private function __email_not_unique()
  {
    self::$registry->getService('json')->push(array(
      'valid'   => 0,
      'message' => "Email už existuje."
    ));
    self::$registry->getService('json')->renderJSON();
  }
  
  private function __sendMails( $subject = '', $html = false )
  {
    if(is_array(self::$recipients) && (count(self::$recipients) > 0)) {
      foreach(self::$recipients as $recipient) {
        $this->status[] = $this->sendMail($subject, $html, $recipient);
      }
      return self::$registry->getService('helper')->checkStatus( $this->status );
    } else {
      throw new Exception();
    }
  }
  
  private function sendMail( $subject = '', $html = false, $recipient = null )
  {
    // SUBJECT
    self::$registry->getService('sendmail')->Subject = $subject;
    // SETTINGS
    self::$registry->getService('sendmail')->isSendmail();
    self::$registry->getService('sendmail')->setFrom( __DEFAULT_SENDER_EMAIL__ );
    self::$registry->getService('sendmail')->addAddress( __DEFAULT_SENDER_EMAIL__ );
    self::$registry->getService('sendmail')->addReplyTo( (((bool) self::$registry->getService('helper')->isEmail($recipient) === true) ? $recipient : $this->data['email']) );
    if((bool) $html === true) {
      self::$registry->getService('sendmail')->msgHtml( $this->tableBuilder( $subject, $this->keys, $this->data ) );
    }
    // SEND
    return self::$registry->getService('sendmail')->send();
  }

  private function tableBuilder( $caption = '', $keys = null, $data = null )
  {
    $tHead = '';
    $tBody = '';

    foreach( $data as $key => $value) {
        $tHead .= '<th style="padding: 8px;line-height: 1.42857143;vertical-align: bottom;text-align: left;border-top: 0;border-bottom: 2px solid #ddd;">' . html_entity_decode(((isset($keys[$key])) ? $keys[$key] : $key), ENT_QUOTES, 'UTF-8') . '</th>';
        $tBody .= '<td style="padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;">'.html_entity_decode($value, ENT_QUOTES, 'UTF-8').'</td>';
    }
    $table  = '<table style="display:table;width:100%;max-width: 100%;margin-bottom:20px;border-spacing: 0;border-collapse: collapse;">';
    $table .= '<caption style="margin-bottom:20px;padding:5px;border-bottom:1px solid #3d4e5d;">'.$caption.'</caption>';
    $table .= '<thead><tr>'.$tHead.'</tr></thead>';
    $table .= '<tbody><tr>'.$tBody.'</tr></tbody>';
    $table .= '</table>';

    return $table;
  }
  
  private function __BadRequest() 
  {
    self::$registry->getService('json')->push(array(
      'status'  => 400,
      'message' => "Bad Request"
    ));
    self::$registry->getService('json')->renderJSON();
  }

}