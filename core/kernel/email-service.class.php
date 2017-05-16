<?php
/*
*  Copyright 2016 MOZAYC s.r.o
*
*  NOTICE OF LICENSE
*
*  @author     Mozayc s.r.o. //-- Henrich Barkoczy  <henrich@mozayc.net>
*  @copyright  Mozayc s.r.o.
*  @license    http://www.mozayc.net/software-license - Software License
*/
require_once __LIB_DIR__ . 'mailjet/vendor/autoload.php';

class EmailService extends \Mailjet\Client {
  
  CONST API_KEY = "4b8b062f10850bc8901b587dae643a51";
  
  CONST SECRET_KEY = "2163c504a38a67d5ad217134393f5585";
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var array **/
  private $headers;
  
  /** @var string **/
  private $fromName;
  
  /** @var string **/
  private $fromEmail;
  
  /** @var string **/
  private $subject;
  
  /** @var array **/
  private $to;
  
  /** @var array **/
  private $bcc;
  
  /** @var string **/
  private $textPart;
  
  /** @var string **/
  private $htmlPart;
  
  /** @var array **/
  private $recipients;
  
  /** @var array **/
  private $attachments;
  
  /** @var array **/
  private $_email;
  
  /** @var bool **/
  private $isHTML = false;
  
  public function __construct( Registry $registry ) 
  {
    parent::__construct(self::API_KEY, self::SECRET_KEY);
    
    self::$registry = $registry;
  }
  
  public function setReplytTo( $email = '' )
  {
    if((bool) self::$registry->getService('helper')->isEmail( $email ) === true)
    {
      $this->headers['Headers'] = [
        'Reply-To' => (string) $email
      ];
      return true;
    }
    return false;
  }
  
  public function setFromName( $fromName = '' )
  {
    if(strlen($fromName) > 0) 
    {
      $this->fromName = (string) $fromName;
    }
    return false;
  }
  
  public function setFromEmail( $email = '' )
  {
    if((bool) self::$registry->getService('helper')->isEmail( $email ) === true) 
    {
      $this->fromEmail = (string) $email;
      
      return true;
    }
    return false;
  }
  
  public function setSubject( $subject = '' )
  {
    if(strlen($subject) > 0) 
    {
      $this->subject = (string) $subject;
      
      return true;
    }
    return false;
  }
  
  public function addTo( $email = '', $name = '' )
  {
    if(((bool) self::$registry->getService('helper')->isEmail( $email ) === true) &&
      (count($this->to) <= 50)
    ) {
      $this->to[] = (strlen($name) > 0) ? ('"'.$name.'" <'. $email .'>' ): $email;

      return true;
    }
    return false;
  }
  
  public function addBcc( $email = '', $name = '' )
  {
    if(((bool) self::$registry->getService('helper')->isEmail( $email ) === true) &&
      (count($this->bcc) <= 50)
    ) {
      $this->bcc[] = (strlen($name) > 0) ? ('"'.$name.'" <'. $email .'>' ): $email;

      return true;
    }
    return false;
  }
  
  public function addRecipient( $email = '', $name = '' )
  {
    if((bool) self::$registry->getService('helper')->isEmail( $email ) === true) 
    {
      $this->recipients[] = (strlen($name) > 0) ?  ['Email' => $email, 'Name' => $name] : ['Email' => $email];
      
      return true;
    }
    return false;
  }
  
  public function addAttachment( $path = '', $filename = '' )
  {
    $content = file_get_contents($path);
    
    if($content !== false)
    {
      $name = basename($path);
      
      if($name == '') {
        $name = $filename;
      }
      $this->attachments[] = [
        'Filename'     => $name,
        'Content-type' => 'application/octet-stream',
        'content'      => base64_encode( $content )
      ]; 
      return true;
    }
    return false;
  }
  
  public function textPart( $text = '' )
  {
    if(strlen($text) > 0) 
    {
      $this->textPart = (string) $text;
      
      return true;
    }
    return false;
  }
  
  public function htmlPart( $html = '' )
  {
    if(strlen($html) > 0) 
    {
      $this->htmlPart = (string) $html;
      
      return true;
    }
    return false;
  }
  
  public function isHTML( $bool = false )
  {
    $this->isHTML = (bool) $bool;
  }
  
  public function verifySender( $email = '' )
  {
    if((bool) self::$registry->getService('helper')->isEmail( $email ) === true) {
      $response = $this->post(
        Mailjet\Resources::$Sender, 
        [
          'Email' => $email
        ]
    );
    return ($response->success()) ? $response->getData() : $response->getStatus();
    }
    return false;
  }
  
  public function send( $detail = false )
  {
    if((bool) $this->preSend() === true)
    {
      $response = $this->post(
        Mailjet\Resources::$Email, 
        [
          'body' => $this->_email
        ]
      );
      if((bool) $detail === true) 
      {
        return ($response->success()) ? $response->getData() : $response->getStatus();
      }
      else
      {
        return $response->success();
      }
    }
    return false;
  }
  
  private function preSend()
  {
    // FROM NAME
    if(strlen($this->fromName) > 0) 
    {
      $this->_email['FromName'] = $this->fromName;
    }
    // FROM EMAIL
    if(strlen($this->fromEmail) > 0) 
    {
      $this->_email['FromEmail'] = $this->fromEmail;
    } 
    else 
    {
      return false;
    }
    // SUBJECT
    if(strlen($this->subject) > 0) 
    {
      $this->_email['Subject'] = $this->subject;
    }
    // RECIPIENTS OR TO
    if(is_array($this->recipients) && (count($this->recipients) > 0)) 
    {
      $this->_email['Recipients'] = $this->recipients;
    }
    else
    {
      if(is_array($this->to) && (count($this->to) > 0))
      {
        $this->_email['To'] = implode(',', $this->to);
      }
      else 
      {
        return false;
      }
    }
    // BCC
    if((is_array($this->bcc) && (count($this->bcc) > 0)) &&
      (is_array($this->to) && (count($this->to) > 0)) &&
      (count($this->recipients) === 0)
    ) {
      $this->_email['Bcc'] = implode(',', $this->bcc);
    }
    // TEXT PART
    if(strlen($this->textPart) > 0) 
    {
      $this->_email['Text-Part'] = $this->textPart;
    }
    // HTML PART
    if((bool) $this->isHTML === true) 
    {
      $this->_email['Html-Part'] = $this->htmlPart;
    }
    // ATTACHMENTS
    if(is_array($this->attachments) && (count($this->attachments) > 0))
    {
      $this->_email['Attachments'] = $this->attachments;
    }
    // RESPONSE
    return true;
  }
  
}