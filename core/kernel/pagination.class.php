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

class Pagination {
  
  /**  @var Registry **/
  protected static $registry;
  
  /** @var string **/
  private static $prefix;
  
  /** @var int **/
  private static $page = 1;

  /** @var int **/
  private static $total = 0;
 
  /** @var int **/
  private static $limit = 10;

  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  public function setPrefix( $prefix = '' )
  {
    self::$prefix = $prefix;
  }
  
  public function setPage( $page = 1 )
  {
    self::$page = ( (int) $page == 0) ? 1 : (int) $page;
  }
  
  public function setLimit( $limit = 10 )
  {
    self::$limit = ( (int) $limit == 0) ? ( ($limit == 'all') ? $limit : 10 ) : (int) $limit;
  }
  
  public function setTotal( $total = 0 )
  {
    self::$total = (int) $total;
  }
  
  public function fetch( $qry = null, $keys = null, $filter = null )
  {
    // filter
    $filter = (self::$limit == 'all') ? $filter : ( $filter . " LIMIT " . ( ( self::$page - 1 ) * self::$limit ) . ",". self::$limit );
    // execute query
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
  }
  
  public function createInfo()
  {
    return 'Zobrazených '.( ( ( self::$page - 1 ) * self::$limit ) + 1 ).'-'.(self::$limit * self::$page).' z '.self::$total.' záznamov';
  }
  
  public function createLinks( $links = null, $list_class = 'pagination pagination-sm pull-right', $ajax = false, $ext0 = 0, $ext1 = '', $before = null )
  {
    if(self::$limit == 'all') {
      return '';
    }
    $last = ceil( self::$total / self::$limit );
   
    $start = ( ( self::$page - $links ) > 0 ) ? self::$page - $links : 1;
    $end   = ( ( self::$page + $links ) < $last ) ? self::$page + $links : $last;
 
    $html = '<ul class="'.$list_class.'">';
 
    $class = (self::$page == 1) ? "disabled" : "";
    $html .= ($ajax) ? '<li class="'.$class.'"><a href="#" onclick="return false;" data-page="'.(self::$page - 1).'" data-limit="'.self::$limit.'"><i class="fa fa-angle-left"></i></a></li>' : '<li class="'.$class.'"><a href="'.self::$prefix.DIRECTORY_SEPARATOR.( self::$page - 1 ).DIRECTORY_SEPARATOR.self::$limit.((((int) $ext0 > 0) && (((int) $ext1 > 0) || ($ext1 === 'all'))) ? '/'.$ext0.'/'.$ext1 : '').((count($before) > 0) ? $before : '').'"'.(( self::$page == 1 ) ? 'onclick="return false;"': '').'><i class="fa fa-angle-left"></i></a></li>';
   
    if($start > 1) {
      $html .= ($ajax) ? '<li><a href="#" onclick="return false;" data-page="1" data-limit="'.self::$limit.'">1</a></li>' : '<li><a href="'.self::$prefix.DIRECTORY_SEPARATOR.'1'.DIRECTORY_SEPARATOR.self::$limit.((((int) $ext0 > 0) && (((int) $ext1 > 0) || ($ext1 === 'all'))) ? '/'.$ext0.'/'.$ext1 : '').((count($before) > 0) ? $before : '').'">1</a></li>';
      $html .= '<li class="disabled"><span>...</span></li>';
    }
    for( $i = $start ; $i <= $end; $i++ ) {
      $class  = ( self::$page == $i ) ? "active" : "";
      $html  .= ($ajax) ? '<li class="'.$class.'"><a href="#" onclick="return false;" data-page="'.$i.'" data-limit="'.self::$limit.'">'.$i.'</a></li>' : '<li class="'.$class.'"><a href="'.self::$prefix.DIRECTORY_SEPARATOR.$i.DIRECTORY_SEPARATOR.self::$limit.((((int) $ext0 > 0) && (((int) $ext1 > 0) || ($ext1 === 'all'))) ? '/'.$ext0.'/'.$ext1 : '').((count($before) > 0) ? $before : '').'">'.$i.'</a></li>';
    }
    if($end < $last) {
      $html .= '<li class="disabled"><span>...</span></li>';
      $html .= ($ajax) ? '<li><a href="#" onclick="return false;" data-page="'.$last.'" data-limit="'.self::$limit.'">'.$last.'</a></li>' : '<li><a href="'.self::$prefix.DIRECTORY_SEPARATOR.$last.DIRECTORY_SEPARATOR.self::$limit.((((int) $ext0 > 0) && (((int) $ext1 > 0) || ($ext1 === 'all'))) ? '/'.$ext0.'/'.$ext1 : '').((count($before) > 0) ? $before : '').'">'. $last .'</a></li>';
    }
    $class  = ( self::$page == $last ) ? "disabled" : "";
    $html  .= ($ajax) ? '<li class="'.$class.'"><a href="#" onclick="return false;" data-page="'.( self::$page + 1 ).'" data-limit="'.self::$limit.'"><i class="fa fa-angle-right"></i></a></li>' : '<li class="'. $class .'"><a href="'.self::$prefix.DIRECTORY_SEPARATOR.( self::$page + 1 ).DIRECTORY_SEPARATOR.self::$limit.((((int) $ext0 > 0) && (((int) $ext1 > 0) || ($ext1 === 'all'))) ? '/'.$ext0.'/'.$ext1 : '').((count($before) > 0) ? $before : '').'"'.(( self::$page == $last ) ? 'onclick="return false;"': '').'><i class="fa fa-angle-right"></i></a></li>';
 
    $html .= '</ul>';
 
    return $html;
  }
  
}