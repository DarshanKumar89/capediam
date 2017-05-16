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

require_once __LIB_DIR__ .'smarty/Smarty.class.php';

class Template extends Smarty {

  /** @var Registry */
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    parent::__construct(); 
    
    self::$registry = $registry;
    
    $this->setTemplateDir(array(
      'theme'  => __THEMES_DIR__ . __THEMES_SET__,
      'cpanel' => __THEMES_DIR__ . 'cpanel'
    ));
    $this->compile_dir    = __SMARTY_COMPILE_DIR__;
    $this->cache_dir      = __SMARTY_CACHE_DIR__;
    $this->debugging      = false;
    $this->use_sub_dirs   = true;
    $this->caching        = true;
    $this->cache_lifetime = 120;
    $this->force_compile  = true;
    $this->compile_check  = true;
  }
  
}