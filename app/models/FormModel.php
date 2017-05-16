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

class FormModel {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function insertFormRecord( $key = '' )
  {
    self::$registry->getService('storage')->insert( 'app_form_verify', array(':form_hash' => (string) $key) );
    
    return (self::$registry->getService('storage')->executed()) ? $this->vFormDataByKey( $key ) : null;
  }
  
  public function insertFormEmail( $email = '' )
  {
    self::$registry->getService('storage')->insert( 'app_form_emails', array(':email' => (string) $email) );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertWHQtyInfoEmail( $articleId = 0, $emailId = 0 )
  {
    self::$registry->getService('storage')->insert( 'app_form_stock_qty_info', array(':id_article' => $articleId, ':id_email' => (string) $emailId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function addSendRecord( $count = 0, $key = '' )
  {
    self::$registry->getService('storage')->update( 'app_form_verify', array('count' => $count), ' form_hash = "'. (string) $key .'"');
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function resetCount( $key = '' )
  {
    self::$registry->getService('storage')->update( 'app_form_verify', array('count' => 0, 'created' => date("Y-m-d H:i:s")), ' form_hash = "'. (string) $key .'"' );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function vFormDataByKey( $key = '' )
  {
    $qry = "SELECT
              count, created
            FROM
              app_form_verify";
    $keys = array(
      ':form_hash' => (string) $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function formEmailIdByEmail( $email = '' )
  {
    $qry = "SELECT
              id_email
            FROM
              app_form_emails";
    $keys = array(
      ':email' => (string) $email
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_email : 0;
  }
  
  public function isFormKey( $key = '' )
  {
    $qry = "SELECT
              form_hash
            FROM
              app_form_verify";
    $keys = array(
      ':form_hash' => (string) $key
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isFormEmailByEmailId( $emailId = 0 )
  {
    $qry = "SELECT
              id_email
            FROM
              app_form_emails";
    $keys = array(
      ':id_email' => (int) $emailId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isFormEmailByEmail( $email = '' )
  {
    $qry = "SELECT
              id_email
            FROM
              app_form_emails";
    $keys = array(
      ':email' => (string) $email
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isFormEmailUniqueById( $email = '' )
  {
    $qry = "SELECT
              id_email
            FROM
              app_form_emails";
    $keys = array(
      ':email' => (string) $email
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isEmailInWHQtyInfo( $articleId = 0, $emailId = 0 )
  {
    $qry = "SELECT
              id_request
            FROM
              app_form_stock_qty_info";
    $keys = array(
      ':id_article' => (int) $articleId,
      ':id_email'   => (int) $emailId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
}