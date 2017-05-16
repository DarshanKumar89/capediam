<?php
/*
*  2015 Slaty Site
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.cz - Software License
*/

class RedirectController {
  
  /** @var Registry **/
  protected static $registry;

  public function __construct(Registry $registry) {
    self::$registry = $registry;
  }
  
  public function run( $routeId = 0, $path = '' ) 
  {
    self::$registry->getService('irequest')->movePage(301, (string) $path);
  }
  
}