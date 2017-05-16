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

require_once __LIB_DIR__ .'mailer/PHPMailerAutoload.php';

class Sendmail extends PHPMailer {
  
  /** @var Registry */
  protected static $registry;

  public function __construct( Registry $registry ) 
  {
    parent::__construct();
    self::$registry = $registry;
  }
  
}