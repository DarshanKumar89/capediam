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

class Messenger {
  
  const SUCCESS = 1;
  
  const INFO = 2;
  
  const WARNING = 3;
  
  const ERROR = 4;
  
  /**  @var Registry **/
  protected static $registry;

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function display( $type = 0, $header = '', $message = '', $data = null, $url = '', $redirectForce = false )
  {
    self::$registry->getService('template')->assign(
      'referer',
      self::$registry->getService('irequest')->getReferer()
    );
    self::$registry->getService('template')->assign('type',$type);
    self::$registry->getService('template')->assign('header',$header);
    self::$registry->getService('template')->assign('message',$message);
    self::$registry->getService('template')->assign('data',$data);
    self::$registry->getService('template')->assign('url',$url);
    self::$registry->getService('template')->assign('redirectForce',$redirectForce);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]messenger/messages.tpl");
  }
  
  public function alert( $typeId = 0, $header = '', $message = '' )
  {
    self::$registry->getService('template')->assign('alert_class',$this->__setAlertClassByTypeId( $typeId ));
    self::$registry->getService('template')->assign('header',$header);
    self::$registry->getService('template')->assign('message',$message);
    self::$registry->getService('template')->display("extends:[cpanel]messenger/alert.tpl");
  }
  
  private function __setAlertClassByTypeId( $typeId )
  {
    switch((int) $typeId)
    {
      case 1:
        return 'alert-success';
      case 2:
        return 'alert-info';
      case 3:
        return 'alert-warning';
      case 4:
        return 'alert-danger';
      default:
        return 'alert-default';
    }
  }
  
}