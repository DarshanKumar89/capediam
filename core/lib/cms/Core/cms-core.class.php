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

class CMSCore implements Authorization, User, Nav, Page, Drive, Slider, Gallery, Form, Dictionary, Settings {
  
  /** @var Registry **/
  protected static $registry;

  /** @var bool **/
  private $loggedIn = false;

  /** @var bool **/
  private $valid = false;

  /** @var string **/
  private $sid;

  /** @var object **/
  private $user;
  
  /** @var null **/
  private $parrent = null;
  
  /** @var array **/
  private $foldersStructure = array();
  
  /** @var array **/
  private $parentsFolderStructure = array();
  
  /** @var array **/
  private $status;
  
  public function __construct( Registry $registry )
  {
    self::$registry = $registry;
  }
  
  /**
  *
  * SITE STRUCTURE - NAVIGATION
  *
  **/
  
  public function genUniqueNavId()
  {
    $hash = self::$registry->getService('hash')->ripemd128(
      self::$registry->getService('hash')->generateRandomString()                                                  
    );
    if(self::$registry->getService('nav')->isUniqueNavHash($hash)) {
      return $hash;
    }
    $this->genUniqueNavId();
  }
  
  public function navTree()
  {
    $navs = self::$registry->getService('nav')->navList();
    
    if(!is_null($navs)) {
      foreach($navs as $key => $nav) {
        $navs[ $key ]->children = self::$registry->getService('nav')->rootChildrenByNavId( $nav->id_nav );
      }
      return $this->__buildNavTree( $navs );
    }
    return null;
  }
  
  private function __buildNavTree( $source = null  )
  {
    if(!is_null($source) && !empty($source)) {
      $tree = '';
      
      foreach($source as $twig) {
        $tree .= '<li>';
        $tree .= '<span class="nav" data-type="menu" data-id="'.$twig->id_nav.'">';
        $tree .= '<i class="fa fa-code-fork"></i>&nbsp;'.$twig->nav_name.'&nbsp;</span>';
        $tree .= '<a href="#" onclick="return false;"></a>';
        
        if(!is_null($twig->children)) {
          $tree .= $this->__buildNavChildrenTree( $twig->children );
        }
        $tree .= '</li>';
      }
      return '<ul>'.$tree.'</ul>';
    }
    return '';
  }
  
  private function __buildNavChildrenTree( $children = null )
  {
    if(!is_null($children) && !empty($children)) {
      $markup = '';
      
      foreach($children as $child) {
        $list = self::$registry->getService('nav')->childrenByItemId( $child->id_nav_item );
        
        $markup .= '<li>';
        $markup .= '<span data-type="item" data-pattern-id="'.$child->id_pattern.'" data-id="'.$child->id_nav_item.'">';
        $markup .= '<i class="fa '.((is_null($list)) ? "fa-plus": "fa-chevron-circle-left").'"></i>&nbsp;'.$child->nav_item_value;
        $markup .= '<span style="padding: 0 2px 0 7px;color:'.$this->__setNavIconColor($child->id_page, $child->id_page_list, $child->id_category,$child->url_link).';border: 0;">';
        $markup .= $this->__setNavIcon($child->id_page, $child->id_page_list, $child->id_category, $child->url_link).'</span></span>';
        if(!is_null($list)) {
          $markup .= $this->__buildNavChildrenTree( $list );
        }
        $markup .= '</li>';
      }
      return '<ul>'.$markup.'</ul>';
    }
    return '';
  }
  
  private function __setNavIconColor( $pageId = 0, $pageListId = 0, $categoryId = 0, $link = '' )
  {
    if(((int) $pageId > 0) && self::$registry->getService('page')->isPageById( $pageId )) {
      return 'green';
    } else if(((int) $pageListId > 0) && self::$registry->getService('page')->isPageListById( $pageListId )) {
      return 'blue';
    } else if(((int) $categoryId > 0) && self::$registry->getService('store')->isCategoryById( $categoryId )) {
      return 'orange';
    } else if(strlen($link) > 0) {
      return 'brown';
    } else {
      return 'black';
    }
  }
  
  private function __setNavIcon( $pageId = 0, $pageListId = 0, $categoryId = 0, $link = '' )
  {
    if(((int) $pageId > 0) && self::$registry->getService('page')->isPageById( $pageId )) {
      return '<i class="fa fa-file-text"></i>';
    } else if(((int) $pageListId > 0) && self::$registry->getService('page')->isPageListById( $pageListId )) {
      return '<i class="fa fa-list-alt"></i>';
    } else if(((int) $categoryId > 0) && self::$registry->getService('store')->isCategoryById( $categoryId )) {
      return '<i class="fa fa-cubes"></i>';
    } else if(strlen($link) > 0) {
      return '<i class="fa fa-external-link"></i>';
    } else {
      return '<i class="fa fa-circle"></i>';
    }
  }
  
  public function createNav( $form = null ) 
  {
    if(strlen($form["nav-id"]) > 0) {
      return self::$registry->getService('nav')->createNav(array(
        ':nav_hash'    => $form["nav-id"],
        ':nav_name'    => $form["nav-name"],
        ':nav_access'  => $form["nav-access"],
        ':css_id'      => $form["css-id"],
        ':css_classes' => $form["css-classes"],
        ':position'    => self::$registry->getService('nav')->navLastPosNum(),
        ':creator'     => $this->getUser()->id_user,
      ));
    }
    return false;
  }
  
  public function updateNav( $form = null )
  {
    if(isset($form["nav"]) && (count($form["nav"]) > 0)) {
      $i = 1;
      
      foreach($form["nav"] as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = self::$registry->getService('nav')->removeNavById($value["'nav-id'"]);
        } else {
          $this->status[] = self::$registry->getService('nav')->updateNavById(array(
            'nav_name' => $value["'nav-name'"],
            'publish'  => (isset($value["'publish'"])) ? 1 : 0,
            'position' => $i,
          ), $value["'nav-id'"]);
        }
        $i++;
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function deleteNav( $model = 0, $id = 0 )
  {
    switch((int) $model) {
      case 1:
         return self::$registry->getService('nav')->removeNavById( $id );
      case 2:
        if($this->__deleteNavSbParents( $id )) {
          return self::$registry->getService('nav')->removeNavItemById( $id );
        } else {
          return self::$registry->getService('nav')->removeNavItemById( $id );
        }
      default:
        return false;
    }
  }
  
  private function __deleteNavSbParents( $itemId = 0 )
  {
    $parent = self::$registry->getService('nav')->navParentItemsById( $itemId );
    
    if(!is_null($parent)) {
      foreach($parent as $value) {
        $this->status[] = self::$registry->getService('nav')->removeNavItemById( $value->id_nav_item );
        $this->__deleteNavSbParents( $value->id_nav_item );
      }
      return $this->checkStatus();
    }
  }

  public function createNavItem( $form = null )
  {
    $pattern  = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
    $navId    = ((int) $form["model"] == 1) ? (int) $form["parentId"] : self::$registry->getService('nav')->navIdByParentId( $form["parentId"] );
    $parentId = ((int) $form["model"] == 1) ? 0 : (int) $form["parentId"];
    $itemId   = self::$registry->getService('nav')->createNavItem(array(
      ':id_nav'             => $navId,
      ':id_page'            => (isset($form["page-id"])) ? $form["page-id"] : 0,
      ':id_page_list'       => (isset($form["page-list-id"])) ? $form["page-list-id"] : 0,
      ':id_category'        => (isset($form["category-id"])) ? $form["category-id"] : 0,
      ':id_pattern'         => $form["patternId"],
      ':id_parent'          => $parentId,
      ':is_root'            => ( (int)$form["model"] == 1) ? 1 : 0,
      ':on_html'            => (isset($form["use-html"])) ? 1 : 0,
      ':access'             => $form["access"],
      ':icon'               => $form["icon"],
      ':css_id'             => $form["css-id"],
      ':css_classes'        => $form["css-classes"],
      ':position'           => self::$registry->getService('nav')->navItemLasPositon( $navId, $parentId ),
      ':publish'            => (isset($form["publish"])) ? 1 : 0,
      ':upd_user'           => $this->getUser()->id_user,
      ':upd_date'           => date("Y-m-d H:i:s"),
      ':creator'            => $this->getUser()->id_user
    ));
    if(self::$registry->getService('nav')->isNavItemById( $itemId ) &&
       !empty($form["linksname"]) &&
       is_array($form["linksname"])
    ) {
      foreach($form["linksname"] as $key => $value) {
        $this->status[] = self::$registry->getService('nav')->createNavItemLang(array(
          ':id_nav_item'    => $itemId,
          ':id_nav'         => $navId,
          ':id_lang'        => $key,
          ':url_link'       => (isset($value["'url_link'"])) ? str_replace(',', '-', $value["'url_link'"]) : null,
          ':nav_item_value' => trim($value["'name'"]),
          ':html_content'   => str_replace($pattern,'src="/',$value["'html-content'"])
        ));
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function navItemOrderListById( $itemId = 0 )
  {
    $data = self::$registry->getService('nav')->navItemOrderDataByItemId( $itemId );

    return (!is_null($data)) ? self::$registry->getService('nav')->navItemOrderList( $data ) : null;
  }
  
  public function updateNavItemOrder( $form = null )
  {
    if(isset($form["items"]) && (count($form["items"]) > 0)) {
      $i = 1;
      
      foreach($form["items"] as $item) {
        $this->status[] = self::$registry->getService('nav')->updateNavItemOrder($i, $item["'id'"]);
        $i++;
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateNavItem( $form = null )
  {
    $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
    $itemId  = (int) $form["itemId"];
    
    if(self::$registry->getService('nav')->isNavItemById($itemId)) {
        if(self::$registry->getService('nav')->updateNavItemById(array(
        'id_nav_item'  => $itemId,
        'id_page'      => (isset($form["page-id"])) ? $form["page-id"] : $form["'page-id'"],
        'id_page_list' => (isset($form["page-list-id"])) ? $form["page-list-id"] : $form["'page-list-id'"],
        'id_category'  => (isset($form["category-id"])) ? $form["category-id"] : $form["'category-id'"],
        'on_html'      => (isset($form["use-html"]) || isset($form["'use-html'"])) ? 1 : 0,
        'access'       => (isset($form["access"])) ? $form["access"] : $form["'access'"],
        'icon'         => (isset($form["icon"])) ? $form["icon"] : $form["'icon'"],
        'css_id'       => (isset($form["css-id"])) ? $form["css-id"] : $form["'css-id'"],
        'css_classes'  => (isset($form["css-classes"])) ? $form["css-classes"] : $form["'css-classes'"],
        'publish'      => (isset($form["publish"]) || isset($form["'publish'"])) ? 1 : 0,
        'upd_user'     => $this->getUser()->id_user,
        'upd_date'     => date('Y-m-d H:m:i')
      ))) {
        $navId = self::$registry->getService('nav')->navIdByItemId( $itemId );
        $links = (isset($form["linksname"]) && (is_array($form["linksname"]) && (count($form["linksname"]) > 0))) ? $form["linksname"] : null;
        
        if(!is_null($links)) {
          foreach($links as $key => $value) {
            if(self::$registry->getService('nav')->isNavItemLangById( $navId, $itemId, $key )) {
              $this->status[] = self::$registry->getService('nav')->updateNavItemLangById(array(
                  'url_link'       => str_replace(',', '-', $value["'url_link'"]),
                  'nav_item_value' => $value["'name'"],
                  'html_content'   => str_replace($pattern,'src="/',$value["'html-content'"])
                ),
                $itemId, 
                $key
              );
            } else {
              $this->status[] = self::$registry->getService('nav')->createNavItemLang(array(
                ':id_nav_item'    => $itemId,
                ':id_nav'         => $navId,
                ':id_lang'        => $key,
                ':url_link'       => str_replace(',', '-', $value["'url_link'"]),
                ':nav_item_value' => trim($value["'name'"]),
                ':html_content'   => str_replace($pattern,'src="/',$value["'html-content'"])
              ));
            }
          }
        }
       return $this->checkStatus();
      }
      return false;
    }
    return false; 
  }
  
  public function insertNavItemImageById( $itemId = 0, $langId = 0, $images = null )
  {
    if(is_array($images) && (count($images) > 0)) {
      foreach($images as $image) {
        if(isset($image["'use'"])) {
          $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $image["'imgId'"] );
          
          if($fileId > 0) {
            return self::$registry->getService('nav')->updateNavItemImageById( $itemId, $langId, $fileId );
          } else {
            return false;
          }
        }
      }
    }
    return false;
  }
  
  public function navBoxWithTitleOnSiteById( $navId = 0, $langId = 0 )
  {
    if(((bool) self::$registry->getService('nav')->isNavById( $navId ) === true) &&
      ((bool) self::$registry->getService('languages')->isLangById( $langId ) === true)
    ) {
      $setting  = self::$registry->getService('nav')->navSettingsById( $navId );
      $itemList = self::$registry->getService('nav')->rootChildrenByNavId($navId, true, true);
      
      if((is_object($setting) && (isset($setting->css_id) && isset($setting->css_classes))) && 
        (is_array($itemList) && (count($itemList) > 0))    
      ) {
        $tree = '';
        
        foreach($itemList as $key => $twig) {
          $tree[ $key ] = (object) array(
            'id'          => $twig->id_nav_item,
            'css_id'      => $twig->css_id,
            'css_classes' => $twig->css_classes,
            'title'       => $twig->nav_item_value,
            'url_link'    => $twig->url_link,
            'items'       => self::$registry->getService('nav')->childrenByItemId(
              $twig->id_nav_item, 
              true, 
              true
            )
          );

        }
        return $tree;
      }
      return null;
    }
    return null;
  }
  
  public function navV1OnSiteById( $navId = 0, $langId = 0 )
  {
    if(((bool) self::$registry->getService('nav')->isNavById( $navId ) === true) &&
      ((bool) self::$registry->getService('languages')->isLangById( $langId ) === true)
    ) {
      $itemList = self::$registry->getService('nav')->rootChildrenByNavId($navId, true, true);
      
      if(is_array($itemList) && (count($itemList) > 0)) {
        $tree = '';
        
        foreach($itemList as $twig) {
          $childrens = self::$registry->getService('nav')->childrenByItemId($twig->id_nav_item, true, true);

          $tree .= '<li'.
                   ((strlen($twig->css_id) > 0) ? ' id="'.$twig->css_id.'"' : '') .
                   ((strlen($twig->css_classes) > 0) ? ' class="'.((!is_null($childrens)) ? 'parent ' : '') .  str_replace(',', ' ', $twig->css_classes).'"' : ((!is_null($childrens)) ? ' class="parent" ' : '')).'>';
          
          $tree .= '<a '.((strlen($twig->url_link) > 0) ? 'href="'.$twig->url_link.'"' : 'href="#" onclick="return false;"').'>'.
                   '<span>'.$twig->nav_item_value.'</span></a>';
          
          if(is_array($childrens) && (count($childrens) > 0)) {
            $tree .= '<span class="collapse">collapse</span>';
            $tree .= $this->__treeOutChildsV1($childrens, $langId);
          }
          
          $tree .= '</li>';
        }
        return '<ul class="nav-accordion nav-mobile-accordion">'.$tree.'</ul>';
      }
      return null;
    }
    return null;
  }
  
  private function __treeOutChildsV1( $childrens = null, $langId = 0 )
  {
    $markup = '';
    
    if(is_array($childrens) && (count($childrens) > 0)) {
      foreach($childrens as $child)  {
        $childrensX = self::$registry->getService('nav')->childrenByItemId($child->id_nav_item, true, true);

        $markup .= '<li'.
                 ((strlen($child->css_id) > 0) ? ' id="'.$child->css_id.'"' : '') .
                 ((strlen($child->css_classes) > 0) ? ' class="'.((!is_null($childrensX)) ? 'parent ' : '') .  str_replace(',', ' ', $child->css_classes).'"' : ((!is_null($childrensX)) ? ' class="parent" ' : '')).'>';

        $markup .= '<a '.((strlen($child->url_link) > 0) ? 'href="'.$child->url_link.'"' : 'href="#" onclick="return false;"').'>'.
                   '<span>'.$child->nav_item_value.'</span></a>';

        if(is_array($childrensX) && (count($childrensX) > 0)) {
          $markup .= '<span class="collapse">collapse</span>';
          $markup .= $this->__treeOutChildsV1($childrensX, $langId);
        }
        
        $markup .= '</li>';
      }
      return '<ul>'.$markup.'</ul>';
    }
    return $markup;
  }
  
  public function navV2OnSiteById( $navId = 0, $langId = 0 )
  {
    if(((bool) self::$registry->getService('nav')->isNavById( $navId ) === true) &&
      ((bool) self::$registry->getService('languages')->isLangById( $langId ) === true)
    ) {
      $setting  = self::$registry->getService('nav')->navSettingsById( $navId );
      $itemList = self::$registry->getService('nav')->rootChildrenByNavId($navId, true, true);
      
      if((is_object($setting) && (isset($setting->css_id) && isset($setting->css_classes))) && 
        (is_array($itemList) && (count($itemList) > 0))    
      ) {
        $tree = '';
        
        foreach($itemList as $twig) {
          $childrens = self::$registry->getService('nav')->childrenByItemId($twig->id_nav_item, true, true);
          $image     = ((int) $twig->id_image !== 0) ? self::$registry->getService('drive')->fileById( $twig->id_image ) : null;
          $img       = (is_object($image)) ? '<div class="nav-img"><img src="'.$image->file_url.'" alt="'.$image->file_name.'" /></div>' : '';
          
          $tree .= '<li role="presentation"'.
                   ((strlen($twig->css_id) > 0) ? ' id="'.$twig->css_id.'"' : '') .
                   ((strlen($twig->css_classes) > 0) ? ' class="'.((!is_null($childrens)) ? 'dropdown ' : '') .  str_replace(',', ' ', $twig->css_classes).'"' : ((!is_null($childrens)) ? ' class="dropdown" ' : '')).'>';
          
          $tree .= '<a '.((strlen($twig->url_link) > 0) ? 'href="'.$twig->url_link.'"' : 'href="#" onclick="return false;"').'>'.
                   ((is_object($image)) ? $img : '').
                   '<span>'.$twig->nav_item_value.'</span></a>';
          
          if(!is_null($childrens)) {
            $tree .= '<div class="dropdown-full-width-menu">'.$this->__treeOutChildsV2($childrens, $langId).'</div>';
          }
          
          $tree .= '</li>';
        }
        return '<ul'.((strlen($setting->css_id) > 0) ? ' id="'.$setting->css_id.'"' : '').((strlen($setting->css_classes) > 0) ? ' class="'.  str_replace(',',' ', $setting->css_classes).'"' : '').'>'.$tree.'</ul>';
      }
      return null;
    }
    return null;
  }
  
  private function __treeOutChildsV2( $childrens = null, $langId = 0 )
  {
    $markup = '';
    
    if(is_array($childrens) && (count($childrens) > 0)) {
      foreach($childrens as $child)  {
        $childrensX = self::$registry->getService('nav')->childrenByItemId($child->id_nav_item, true, true);
        $image = ((int) $child->id_image !== 0) ? self::$registry->getService('drive')->fileById( $child->id_image ) : null;
        $img   = (is_object($image)) ? '<div class="nav-img"><img src="'.$image->file_url.'" alt="'.$image->file_name.'" /></div>' : '';

        $markup .= '<li role="presentation"'.
                 ((strlen($child->css_id) > 0) ? ' id="'.$child->css_id.'"' : '') .
                 ((strlen($child->css_classes) > 0) ? ' class="'.str_replace(',', ' ', $child->css_classes).'"' : '').'>';

        $markup .= '<a '.((strlen($child->url_link) > 0) ? 'href="'.$child->url_link.'"' : 'href="#" onclick="return false;"').'>'.
                 ((is_object($image)) ? $img : '').
                 '<span>'.$child->nav_item_value.'</span></a>';

        if(is_array($childrensX) && (count($childrensX) > 0)) {
          $markup .= $this->__treeOutChildsV2($childrensX, $langId);
        }
        $markup .= '</li>';
      }
      return '<ul class="sub-menu" role="menu">'.$markup.'</ul>';
    }
    return $markup;
  }
  
  public function navOnSiteById( $navHash = '', $langId = 0 )
  {
    $navId = (int) self::$registry->getService('nav')->navIdByHash( $navHash );
    
    if(!is_null($navId)) {
      $tree          = '';
      $navSetting    = self::$registry->getService('nav')->navSettingsById( $navId );
      $rootChildrens = self::$registry->getService('nav')->rootChildrenByNavId( $navId );
      
      if(!is_null($rootChildrens)) {
        foreach($rootChildrens as $key => $twig) {
          if((int) $twig->publish === 1) {
            $childrens = self::$registry->getService('nav')->childrenByItemId( $twig->id_nav_item );
            $image     = ((int) $twig->id_image !== 0) ? self::$registry->getService('drive')->fileById( $twig->id_image ) : null;
            $img       = (is_object($image)) ? '<div class="nav-img"><img src="'.$image->file_url.'" alt="'.$image->file_name.'" /></div>' : '';
            
            $tree .= '<li role="presentation"'.((!empty($twig->css_id)) ? ' id="'.$twig->css_id.'"' : '').((!empty($twig->css_classes)) ? ' class="'.((!is_null($childrens)) ? 'dropdown ' : '') .  str_replace(',',' ', $twig->css_classes).'"' : ((!is_null($childrens)) ? ' class="dropdown" ' : '')).'>';
            $tree .= '<a '.$this->__buildNavLink($twig->id_page, $twig->id_page_list, $twig->id_category, $langId, $twig->url_link) .' title="'.$twig->nav_item_value.'">';
            $tree .= ((!is_null($image)) ? $img : '');
            if(isset($twig->icon) && (strlen($twig->icon) > 0)) {
              $tree .= '<i class="'.$twig->icon.'"></i>';
            }
            $tree .= '<span>'.$twig->nav_item_value.'</span></a>';
            
            if(((int) $twig->on_html === 1) && !empty($twig->html_content)) {
              $tree .= '<div class="dropdown-html-menu o-'.$key.'">'.$twig->html_content.'</div>';
            }
            if(!is_null($childrens)) {                                                                    
              $tree .= $this->__treeOutChilds($childrens, $langId);
            }
            $tree .= '</li>';
          }
        }
      }
      return '<ul'.((!empty($navSetting->css_id)) ? ' id="'.$navSetting->css_id.'"' : '').((!empty($navSetting->css_classes)) ? ' class="'.  str_replace(',',' ', $navSetting->css_classes).'"' : '').'>'.$tree.'</ul>';
    } 
    return null;
  }
  
  private function __treeOutChilds( $childrens = null, $langId = 0 )
  {
    $markup = '';
    
    if(is_array($childrens) && (count($childrens) > 0)) {
      foreach($childrens as $key => $child)  {
        if((int) $child->publish === 1) {
          $childrensX = self::$registry->getService('nav')->childrenByItemId( $child->id_nav_item );
          $image      = ((int) $child->id_image !== 0) ? self::$registry->getService('drive')->fileById( $child->id_image ) : null;
          $img        = (is_object($image)) ? '<div class="nav-img"><img src="'.$image->file_url.'" alt="'.$image->file_name.'" /></div>' : '';
  
          $markup .= '<li role="presentation"'.((!empty($child->css_id)) ? ' id="'.$child->css_id.'"' : '').((!empty($child->css_classes)) ? ' class="'.  str_replace(',',' ', $child->css_classes).'"' : '').'>';
          $markup .= '<a '.$this->__buildNavLink($child->id_page, $child->id_page_list, $child->id_category, $langId, $child->url_link) . ((!is_null($childrens)) ? '' : '').' title="'.$child->nav_item_value.'">';
          $markup .= ((!is_null($image)) ? $img : '');
          if(isset($child->icon) && (strlen($child->icon) > 0)) {
            $markup .= '<i class="'.$child->icon.'"></i>';
          }
          $markup .= '<span>'.$child->nav_item_value.'</span></a>';
          if(((int) $child->on_html === 1) && !empty($child->html_content)) {
            $markup .= '<div class="dropdown-html-menu o-'.$key.'">'.$child->html_content.'</div>';
          }
          if(!is_null($childrensX)) {
            $markup .= $this->__treeOutChilds($childrensX, $langId);
          }
          $markup .= '</li>';
        }
      }
      return '<ul class="dropdown-menu" role="menu">'.$markup.'</ul>';
    }
    return '';
  }
  
  public function navTreeOnSiteByItemId( $itemId = 0, $langId = 0 )
  {
    $rootList = self::$registry->getService('nav')->childrenByItemId( $itemId );
    
    if(is_array($rootList) && (count($rootList) > 0)) {
      $tree  = '';
      
      foreach($rootList as $twig) {
        if((int) $twig->publish === 1) {
          $childs = self::$registry->getService('nav')->childrenByItemId( $twig->id_nav_item );
          
          $tree .= '<li '.((strlen($twig->css_id) > 0) ? 'id="'.$twig->css_id.'"' : '').' '.((strlen($twig->css_classes) > 0) ? 'class="'.str_replace(',',' ', $twig->css_classes).'"' : '').' data-cid="'.$twig->id_category.'">';      
          $tree .= '<a '.$this->__buildNavLink($twig->id_page, $twig->id_page_list, $twig->id_category, $langId, $twig->url_link).((is_array($childs) && (count($childs) > 0)) ?  'class="first"' : '').'>'.$twig->nav_item_value.'</a>';

          if(is_array($childs) && (count($childs) > 0)) {
            $tree .= $this->__navTreeChild($childs, $langId);
          }
          $tree .= '</li>';
        }
      }
      return '<ul class="mtree light">'.$tree.'</ul>';
    }
    return null;
  }
  
  private function __navTreeChild( $childs = null, $langId = 0 )
  {
    $markup = '';
    
    foreach($childs as $child) {
      $markup .= '<li '.((strlen($child->css_id) > 0) ? 'id="'.$child->css_id.'"' : '').'" '.((strlen($child->css_classes) > 0) ? 'class="'.str_replace(',',' ', $child->css_classes).'"' : '').'" data-cid="'.$child->id_category.'">';     
      $markup .= '<a '.$this->__buildNavLink($child->id_page, $child->id_page_list, $child->id_category, $langId, $child->url_link).'>'.$child->nav_item_value;
      $markup .= '&nbsp;('.((((int) $child->id_category > 0) && self::$registry->getService('store')->isCategoryById( $child->id_category )) ? self::$registry->getService('store')->countArticlesByCatId( $child->id_category ) : '0').')</a>';

      $childs = self::$registry->getService('nav')->childrenByItemId( $child->id_nav_item );

      if(is_array($childs) && (count($childs) > 0)) {
        $markup .= $this->__navTreeChild($childs, $langId);
      }
      $markup .= '</li>';
    }
    return '<ul>'. $markup . '</ul>';
  }
  
  private function __buildNavLink( $pageId = 0, $pageListId = 0, $categoryId = 0, $langId = 0, $link = '' )
  {
    if(((int) $pageId > 0) && self::$registry->getService('page')->isPageById( $pageId )) {
      return 'href="'.self::$registry->getService('page')->pageUrlById($pageId, $langId).'"';
    } else if(((int) $pageListId > 0) && self::$registry->getService('page')->isPageListById( $pageListId )) {
      return 'href="#" onclick="return false;"';
    } else if(((int) $categoryId > 0) && self::$registry->getService('store')->isCategoryById( $categoryId )) {
      $path = self::$registry->getService('store')->categoryPathById($categoryId, $langId);
             
      return (!is_null($path)) ? 'href="'.$path.'"' : 'href="#" onclick="return false;"';
    } else if(strlen($link) > 0) {
      return 'href="'.$link.'"';
    } else {
      return 'href="#" onclick="return false;"';
    }
  }
  
  /**
  *
  * PAGE
  *
  **/
  
  public function createPage( $pagename = '' )
  {
    $pageId = self::$registry->getService('page')->insertPage(array(
      ':pagename' => $pagename,
      ':owner'    => $this->getUser()->id_user,
      ':upd_date' => date("Y-m-d H:i:s")
    ));
    $langs = self::$registry->getService('languages')->getEnabledLanguages();
    
    if(self::$registry->getService('page')->isPageById( $pageId ) && (is_array($langs) && (count($langs) > 0))) {
      foreach($langs as $lang) { 
        $this->status[] = self::$registry->getService('page')->insertPageContent(array(
          ':id_page'          => $pageId,
          ':id_lang'          => $lang->id_lang,
          ':heading'          => $pagename,
          ':subheading'       => $pagename,
          ':site_title'       => $pagename,
          ':meta_keywords'    => '',
          ':meta_description' => '',
          ':meta_robot'       => 'all',
          ':html_content'     => '',
        ));
        $this->status[] = $this->__addPageFullTextSearchIndex(array(
          'pagename'    => $pagename,
          'heading'     => $pagename,
          'description' => '',
          'html'        => ''
        ), $pageId, $lang->id_lang);
      }
      return ($this->checkStatus()) ? $pageId : 0;
    }
    return 0;
  }
  
  public function createPageList( $pageListName = '' )
  {
    $pageListId = self::$registry->getService('page')->insertPageList(array(
      ':page_list_name' => $pageListName,
      ':owner'          => $this->getUser()->id_user,
      ':upd_date'       => date("Y-m-d H:i:s")
    ));
    $langs = self::$registry->getService('languages')->getEnabledLanguages();
    
    if(self::$registry->getService('page')->isPageListById( $pageListId ) && (is_array($langs) && (count($langs) > 0))) {
      foreach($langs as $lang ) { 
        $this->status[] = self::$registry->getService('page')->insertPageListContent(array(
          ':id_page_list'     => $pageListId,
          ':id_lang'          => $lang->id_lang,
          ':heading'          => $pageListName,
          ':site_title'       => $pageListName,
          ':meta_keywords'    => '',
          ':meta_description' => '',
          ':meta_robot'       => 'all',
          ':html_content'     => '',
        ));
        $this->status[] = $this->__addPageListFullTextSearchIndex(array(
          'page-list-name' => $pageListName,
          'heading'        => $pageListName,
          'description'    => '',
          'html'           => ''
        ), $pageListId, $lang->id_lang);
      }
      return $pageListId;
    }
    return 0;
  }
  
  public function updatePage( $form = null )
  {
    $data = array(
      'id_page_layout'      => ((int) $form["page-layout"] == 0) ? 1 : $form["page-layout"], 
      'pagename'            => $form["pagename"],
      'css_id'              => $form["css-id"],
      'css_classes'         => $form["css-classes"],
      'owner'               => $form["owner"],
      'id_background_image' => (empty($form["background-image-id"])) ? 0 : $form["background-image-id"],
      'background_color'    => (empty($form["background-color"])) ? 0 : $form["background-color"],
      'show_page_title'     => (isset($form["show-page-title"])) ? 1 : 0,
      'show_sitelinks'      => (isset($form["show-sitelinks"])) ? 1 : 0,
      'allow_attachments'   => (isset($form["allow-attachments"])) ? 1 : 0,
      'allow_comments'      => (isset($form["allow-comments"])) ? 1 : 0,
      'visitor'             => (isset($form["visitor"])) ? 1 : 0,
      'registred_user'      => (isset($form["registred-user"])) ? 1 : 0,
      'signature'           => (isset($form["signature"])) ? 1 : 0,
      'show_date'           => (isset($form["show-date"])) ? 1 : 0,
      'enabled_aside'       => (isset($form["aside"])) ? 1 : 0,
      'widget'              => ( (int) $form["widget"] > 0 && (int) $form["widget"] < 6) ? $form["widget"] : 1,
      'publish'             => (isset($form["publish"])) ? 1 : 0,
      'upd_user'            => $this->getUser()->id_user,
      'upd_date'            => date("Y-m-d H:i:s")
    );
    if(self::$registry->getService('page')->updatePageById($data, $form['page-id']) &&
      (is_array($form['lang']) && (count($form['lang']) > 0))
    ) {
      $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
      
      foreach($form['lang'] as $key => $value) {
        if(self::$registry->getService('page')->isPageContentById($form['page-id'], $key)) {
          $this->status[] = self::$registry->getService('page')->updatePageContentById(array(
            'id_image'         => (empty($value["'page-image-id'"])) ? 0 : $value["'page-image-id'"],
            'color'            => $value["'color'"],
            'heading'          => $value["'heading'"],
            'subheading'       => $value["'subheading'"],
            'description'      => $value["'description'"],
            'site_title'       => $value["'site-title'"],
            'meta_keywords'    => $value["'meta-keywords'"],
            'meta_description' => $value["'meta-description'"],
            'meta_robot'       => $value["'meta-robot'"],
            'html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
          ), 
          $form['page-id'],
          $key);
        } else {
          $this->status[] = self::$registry->getService('page')->insertPageContent(array(
            ':id_page'          => $form['page-id'],
            ':id_lang'          => $key,
            ':id_image'         => ((int) $value["'page-image-id'"] > 0) ? $value["'page-image-id'"] : 0,
            ':color'            => $value["'color'"],
            ':heading'          => $value["'heading'"],
            ':subheading'       => $value["'subheading'"],
            ':description'      => $value["'description'"],
            ':site_title'       => $value["'site-title'"],
            ':meta_keywords'    => $value["'meta-keywords'"],
            ':meta_description' => $value["'meta-description'"],
            ':meta_robot'       => $value["'meta-robot'"],
            ':html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
          ));
        }
        $this->status[] = $this->__addPageFullTextSearchIndex(array(
          'pagename'    => $form["pagename"],
          'heading'     => $value["'heading'"],
          'description' => $value["'description'"],
          'html'        => str_replace($pattern,'src="/',$value["'html-content'"])
        ), $form['page-id'], $key);
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updatePageList( $form = null )
  {
    $data = array(
      'id_page_list_layout'  => ((int) $form["page-layout"] === 0) ? 1 : (int) $form["page-layout"],
      'id_list_layout'       => ((int) $form["id-list-layout"] === 0) ? 1 : (int) $form["id-list-layout"],
      'page_list_name'       => $form["page-list-name"],
      'css_id'               => $form["css-id"],
      'css_classes'          => $form["css-classes"],
      'owner'                => $form["owner"],
      'id_background_image'  => (empty($form["background-image-id"])) ? 0 : $form["background-image-id"],
      'background_color'     => (empty($form["background-color"])) ? 0 : $form["background-color"],
      'show_page_list_title' => (isset($form["show-page-list-title"])) ? 1 : 0,
      'use_pagination'       => (isset($form["use-pagination"])) ? 1 : 0,
      'visitor'              => (isset($form["visitor"])) ? 1 : 0,
      'registred_user'       => (isset($form["registred-user"])) ? 1 : 0,
      'enabled_aside'        => (isset($form["aside"])) ? 1 : 0,
      'widget'               => ((int) $form["widget"] > 0 && (int) $form["widget"] < 6) ? $form["widget"] : 1,
      'per_page'             => ((int) $form["per-page"] > 0 && (int) $form["per-page"] < 501) ? $form["per-page"] : 10,
      'publish'              => (isset($form["publish"])) ? 1 : 0,
      'upd_user'             => $this->getUser()->id_user,
      'upd_date'             => date("Y-m-d H:i:s")
    );
    if(self::$registry->getService('page')->updatePageListById($data, $form['page-list-id']) &&
      (is_array($form['lang']) && (count($form['lang']) > 0))
    ) {
      $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
      
      foreach($form['lang'] as $key => $value) {
        if(self::$registry->getService('page')->isPageListContentById($form['page-list-id'], $key)) {
          $this->status[] = self::$registry->getService('page')->updatePageListContentById(array(
            'id_image'         => (empty($value["'page-image-id'"])) ? 0 : $value["'page-image-id'"],
            'color'            => $value["'color'"],
            'heading'          => $value["'heading'"],
            'description'      => $value["'description'"],
            'site_title'       => $value["'site-title'"],
            'meta_keywords'    => $value["'meta-keywords'"],
            'meta_description' => $value["'meta-description'"],
            'meta_robot'       => $value["'meta-robot'"],
            'html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
          ), 
          $form['page-list-id'],
          $key);
        } else {
          $this->status[] = self::$registry->getService('page')->insertPageListContent(array(
            ':id_page_list'     => $form['page-list-id'],
            ':id_lang'          => $key,
            ':id_image'         => ((int) $value["'page-image-id'"] > 0) ? $value["'page-image-id'"] : 0,
            ':color'            => $value["'color'"],
            ':heading'          => $value["'heading'"],
            ':description'      => $value["'description'"],
            ':site_title'       => $value["'site-title'"],
            ':meta_keywords'    => $value["'meta-keywords'"],
            ':meta_description' => $value["'meta-description'"],
            ':meta_robot'       => $value["'meta-robot'"],
            ':html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
          ));
        }
        $this->status[] = $this->__addPageListFullTextSearchIndex(array(
          'page-list-name' => $form["page-list-name"],
          'heading'        => $value["'heading'"],
          'description'    => $value["'description'"],
          'html'           => str_replace($pattern,'src="/',$value["'html-content'"])
        ), $form['page-list-id'], $key);
      }
      if(isset($form["pageList"]) && (is_array($form["pageList"]) && (count($form["pageList"]) > 0))) {
        foreach($form["pageList"] as $value) {
          if(self::$registry->getService('page')->isPageInPageListById($form['page-list-id'], $value["'page-id'"])) {
            if(isset($value["'remove'"])) {
              $this->status[] = self::$registry->getService('page')->deletePageFromPageListById($form['page-list-id'], $value["'page-id'"]);
            } else {
              $this->status[] = self::$registry->getService('page')->updatePageInPageListById(array(
                'position' => (int) $value["'position'"],
                'publish'  => (isset($value["'publish'"])) ? 1 : 0
              ), $form['page-list-id'], $value["'page-id'"]);
            }
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  private function __addPageFullTextSearchIndex( $data = null, $pageId = 0, $langId = 0 )
  {
    if(self::$registry->getService('page')->isPageById($pageId) &&
      self::$registry->getService('languages')->isLangById($langId) &&
      self::$registry->getService('page')->deletePageFullTextIndexByPageId($pageId, $langId)     
    ) {
      return self::$registry->getService('page')->insertPageFullTextIndex(array(
        ':id_page' => (int) $pageId,
        ':id_lang' => (int) $langId,
        ':a_index' => html_entity_decode($data["pagename"], ENT_QUOTES, "UTF-8"),
        ':b_index' => html_entity_decode($data["heading"], ENT_QUOTES, "UTF-8"),
        ':c_index' => html_entity_decode($data["description"], ENT_QUOTES, "UTF-8"),
        ':d_index' => html_entity_decode(strip_tags($data["html"]), ENT_QUOTES, "UTF-8")
      ));
    }
  }
  
  private function __addPageListFullTextSearchIndex( $data = null, $pageListId = 0, $langId = 0 )
  {
    if(self::$registry->getService('page')->isPageListById($pageListId) &&
      self::$registry->getService('languages')->isLangById($langId) &&
      self::$registry->getService('page')->deletePageListFullTextIndexByPageId($pageListId, $langId)     
    ) {
      return self::$registry->getService('page')->insertPageListFullTextIndex(array(
        ':id_page_list' => (int) $pageListId,
        ':id_lang'      => (int) $langId,
        ':a_index'      => html_entity_decode($data["page-list-name"], ENT_QUOTES, "UTF-8"),
        ':b_index'      => html_entity_decode($data["heading"], ENT_QUOTES, "UTF-8"),
        ':c_index'      => html_entity_decode($data["description"], ENT_QUOTES, "UTF-8"),
        ':d_index'      => html_entity_decode(strip_tags($data["html"]), ENT_QUOTES, "UTF-8")
      ));
    }
  }
  
  public function updateAllPages( $pageList = null )
  {
    if(is_array($pageList) && (count($pageList) > 0)) {
      foreach($pageList as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = self::$registry->getService('page')->deletePageById( $value["'page-id'"] );
        } else {
          $this->status[] = self::$registry->getService('page')->updatePageById(array(
            'publish' => (isset($value["'publish'"])) ? 1 : 0
          ), $value["'page-id'"]);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateAllPageList( $list = null )
  {
    if(is_array($list) && (count($list) > 0)) {
      foreach($list as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = self::$registry->getService('page')->deletePageListById( $value["'page-list-id'"] );
        } else {
          $this->status[] = self::$registry->getService('page')->updatePageListById(array(
            'publish' => (isset($value["'publish'"])) ? 1 : 0
          ), $value["'page-list-id'"]);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function makeCopyPageById( $pageId = 0, $pagename = '')
  {
    $copyPage = self::$registry->getService('page')->pageById( $pageId );
    $pagename = ($pagename == $copyPage->pagename) ? $copyPage->pagename.' Copy ' : $pagename;
    
    if(!is_null($copyPage)) {
      $nPageId = self::$registry->getService('page')->createPage( $pagename );
      
      if(self::$registry->getService('page')->isPageById( $nPageId )) {
        $data = array(
          'id_page_layout'      => $copyPage->id_page_layout, 
          'pagename'            => $pagename,
          'css_id'              => $copyPage->css_id,
          'css_classes'         => $copyPage->css_classes,
          'owner'               => $copyPage->owner,
          'background_image_id' => (!is_null($copyPage->background_image)) ? $copyPage->background_image->file_id : 0,
          'background_color'    => $copyPage->background_color,
          'show_page_title'     => $copyPage->show_page_title,
          'show_sitelinks'      => $copyPage->show_sitelinks,
          'allow_attachments'   => $copyPage->allow_attachments,
          'allow_comments'      => $copyPage->allow_comments,
          'visitor'             => $copyPage->visitor,
          'registred_user'      => $copyPage->registred_user,
          'signature'           => $copyPage->signature,
          'show_date'           => $copyPage->show_date,
          'enabled_aside'       => $copyPage->enabled_aside,
          'widget'              => $copyPage->widget,
          'publish'             => $copyPage->publish,
          'upd_user'            => $this->getUser()->id_user,
          'upd_date'            => date("Y-m-d H:i:s")
        );
        if(self::$registry->getService('page')->updatePageById($data, $nPageId) &&
          (is_array($copyPage->lang) && (count($copyPage->lang) > 0)) 
        ) {
          $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
          
          foreach($copyPage->lang as $key => $value) {
            $this->status[] = self::$registry->getService('page')->insertPageContent(array(
              ':id_page'          => $nPageId,
              ':id_lang'          => $key,
              ':id_route'         => 0,
              ':id_image'         => (!is_null($value->image)) ? $value->image->file_id : 0,
              ':color'            => $value->color,
              ':heading'          => $pagename,
              ':description'      => $value->description,
              ':site_title'       => $pagename,
              ':meta_keywords'    => $value->meta_keywords,
              ':meta_description' => $value->meta_description,
              ':meta_robot'       => $value->meta_robot,
              ':html_content'     => $value->html_content,
            ));
          }
          return ($this->checkStatus()) ? $nPageId : 0;
        }
        return 0;
      }
      return 0;
    }
    return 0;
  }
  
  public function insertPageImage( $actionId = 0, $pageId = 0, $langId = 0, $images = null )
  {
    if((((int) $actionId === 1) || ((int) $actionId === 2)) &&
      self::$registry->getService('page')->isPageById($pageId) &&
      (((int) $actionId === 1) || self::$registry->getService('languages')->isLangById($langId)) &&
      (is_array($images) && (count($images) > 0))
    ) {
      foreach($images as $image) {
        if(isset($image["'use'"])) {
          $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $image["'imgId'"] );
          
          if(self::$registry->getService('drive')->isFileById($fileId)) {
            return self::$registry->getService('page')->updatePageImageById($actionId, $pageId, $langId, $fileId);
          } else {
            return false;
          }
        }
      }
    }
    return false;
  }
  
  public function insertPageListImage( $actionId = 0, $pageListId = 0, $langId = 0, $images = null )
  {
    if((((int) $actionId === 1) || ((int) $actionId === 2)) &&
      self::$registry->getService('page')->isPageListById($pageListId) &&
      (((int) $actionId === 1) || self::$registry->getService('languages')->isLangById($langId)) &&
      (is_array($images) && (count($images) > 0))
    ) {
      foreach($images as $image) {
        if(isset($image["'use'"])) {
          $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $image["'imgId'"] );
          
          if(self::$registry->getService('drive')->isFileById($fileId)) {
            return self::$registry->getService('page')->updatePageListImageById($actionId, $pageListId, $langId, $fileId);
          } else {
            return false;
          }
        }
      }
    }
    return false;
  }
  
  public function insertPagesToPageList( $pageListId = 0, $ids = null )
  {
    if(self::$registry->getService('page')->isPageListById( $pageListId ) &&
       (is_array($ids) && (count($ids) > 0))
    ) {
      foreach($ids as $id) {
        if(self::$registry->getService('page')->isPageById( $id )) {
          if(!self::$registry->getService('page')->isPageInPageListById($pageListId, $id)) {
            $this->status[] = self::$registry->getService('page')->insertPageToPageList(array(
              ':id_page_list' => (int) $pageListId,
              ':id_page'      => (int) $id
            ));
          }
        } else {
          $this->status[] = false;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /**
  *
  * GLOBAL_SECTION_DRIVE
  *
  **/
  
  public function createFolder( $form = null ) 
  {
    return self::$registry->getService('drive')->insertFolder(array(
      ':folder_hash'      => self::$registry->getService('hash')->ripemd128(self::$registry->getService('helper')->generateRandomString(15).$form['folder-name'].self::$registry->getService('helper')->generateRandomString(10)),
      ':folder_name'      => $form['folder-name'],
      ':folder_owner'     => $this->getUser()->id_user,
      ':folder_url'       => '',
      ':folder_color'     => '#FFFFFF',
      ':folder_parent_id' => (int) $form['folder-id'],
      ':is_root'          => 0
    ));
  }
  
  public function foldersStructure( $folderId = 0 )
  {
    $this->__buildFoldersStructure( $folderId );
    krsort($this->foldersStructure);
    
    return $this->foldersStructure;
  }
  
  private function __buildFoldersStructure( $folderId = 0 )
  {
    $this->parrent = self::$registry->getService('drive')->parentFolder( $folderId );

    if(!is_null($this->parrent) && intval($this->parrent->folder_parent_id) !== 0) {
      array_push($this->foldersStructure,array(
        "folder_hash" => $this->parrent->folder_hash,
        "folder_name" => $this->parrent->folder_name,
      ));
      $this->__buildFoldersStructure($this->parrent->folder_parent_id);
    }
  }
  
  public function driveLeftNavTree()
  {
    $rootList = self::$registry->getService('drive')->rootFolders();
    
    if(!is_null($rootList)) {
      $tree = '';
      
      foreach($rootList as $twig) {
        $tree .= '<li>';      
        $tree .= '<a href="cpanel/my-drive/folders/'.$twig->folder_hash.'">'.$twig->folder_name.'</a>';
        
        if(self::$registry->getService('drive')->haveFolderChildrensById( $twig->folder_id )) {
          $tree .= $this->__buildDriveLeftNavTree( $twig->folder_id );
        }
        $tree .= '</li>';
      }
      return '<ul class="mtree transit">'.$tree.'</ul>';
    }
    return null;
  }
  
  private function __buildDriveLeftNavTree( $folderId = 0 )
  {
    $children = self::$registry->getService('drive')->foldersByParentId( $folderId );
    
    if(!is_null($children)) {
      $markup    = '';
      
      foreach($children as $child) {
        $markup .= '<li>';      
        $markup .= '<a href="cpanel/my-drive/folders/'.$child->folder_hash.'">'.$child->folder_name.'</a>';

        if(self::$registry->getService('drive')->haveFolderChildrensById( $child->folder_id )) {
          $markup .= $this->__buildDriveLeftNavTree( $child->folder_id );
        }
        $markup .= '</li>';
      }
      return '<ul>'. $markup . '</ul>';
    }
    return '';
  }
  
  public function renameItemOnDrive( $kind = null )
  {
    $obj = self::$registry->getService('drive')->itemTypeByHash( $kind[0]["itemId"] );

    if(!is_null($obj)) {
      if((int) $obj["t"] === 1) {          
        $this->status[] = self::$registry->getService('drive')->renameFolderById(array(
          'folder_name' => $kind[0]["itemName"]
        ), $obj["id"]);
      }
      if((int) $obj["t"] === 2) {
        $this->status[] = self::$registry->getService('drive')->renameFileById(array(
          'file_name' => $kind[0]["itemName"]
        ), $obj["id"]);
      }
      $this->checkStatus();
    }
    return false;
  }
  
  public function moveItemsOnDrive( $form = null )
  {
    if(is_array($form) && count($form) > 0) {
      $folderId = $this->__getFolderParentId( $form );
      
      if(self::$registry->getService('drive')->isFolderById( $folderId )) {
        foreach($form as $item) {
          if(!isset($item["parentId"])) {
            $ob = self::$registry->getService('drive')->itemTypeByHash( $item["itemId"] );

            if(!is_null($ob)) {
              if((int) $ob["t"] === 1) {   
                $this->status[] = self::$registry->getService('drive')->moveFolder(array(
                  'folder_parent_id' => $folderId
                ), $ob['id']);
              }
              if((int) $ob["t"] === 2) {
                $this->status[] = self::$registry->getService('drive')->moveFile(array(
                  'folder_id' => $folderId
                ), $ob['id']);
              }
            }
          }
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  private function __getFolderParentId( $form = null ) 
  {
    if(is_array($form) && (count($form) > 0)) {
      foreach($form as $value) {
        if(isset($value["parentId"])) {
          return (int) $value["parentId"];
        }
      }
    }
    return 0;
  }
  
  public function moveToDriveFolderForm()
  {
    $rootList = self::$registry->getService('drive')->rootFolders();
    
    if(!is_null($rootList)) {
      $tree = '';
      
      foreach($rootList as $twig) {
        $tree .= '<li>';
        $tree .= '<a href="#"><input type="radio" name="id_parent" value="'.$twig->folder_id.'" style="margin-right: 7px;">'.$twig->folder_name.'</a>';
        
        if(self::$registry->getService('drive')->haveFolderChildrensById( $twig->folder_id )) {
          $tree .= $this->__buildMoveToDriveFolderForm( $twig->folder_id );
        }
        $tree .= '</li>';
      }
      return '<ul class="mtree transit m-t-f">'.$tree.'</ul>';
    }
    return null;
  }
  
  private function __buildMoveToDriveFolderForm( $folderId = 0 )
  {
    $children = self::$registry->getService('drive')->foldersByParentId( $folderId );
    
    if(!is_null($children)) {
      $markup = '';
      
      foreach($children as $child) {
        $markup .= '<li>';
        $markup .= '<a href="#"><input type="radio" name="id_parent" value="'.$child->folder_id.'" style="margin-right: 7px;">'.$child->folder_name.'</a>';

        if(self::$registry->getService('drive')->haveFolderChildrensById( $child->folder_id )) {
          $markup .= $this->__buildMoveToDriveFolderForm( $child->folder_id );
        }
        $markup .= '</li>';
      }
      return '<ul>'. $markup . '</ul>';
    }
    return '';
  }
  
  public function removeItemsFromDrive( $kind = null )
  {
    if(is_array($kind) && (count($kind) > 0)) {
      foreach($kind as $item) {
        $ob = self::$registry->getService('drive')->itemTypeByHash( $item["itemId"] );

        if(!is_null($ob)) {
          if((int) $ob["t"] === 1) { 
            $subFolders = $this->__parentFolderStructure( $ob["id"] );
            
            if(is_array($subFolders) && (count($subFolders) > 0)) {  
              foreach($subFolders as $value) {
                $this->status[] = self::$registry->getService('drive')->trashAllItemsFromFolderById(array(
                  'is_trash' => 1
                ), $value);
                $this->status[] = self::$registry->getService('drive')->trashFolderById(array(
                  'is_trash' => 1
                ), $value);
              }
            }
            $this->status[] = self::$registry->getService('drive')->trashAllItemsFromFolderById(array(
              'is_trash' => 1
            ), $ob["id"]);
            $this->status[] = self::$registry->getService('drive')->trashFolderById(array(
              'is_trash' => 1
            ), $ob["id"]);
          }
          if((int) $ob["t"] === 2) {
            $this->status[] = self::$registry->getService('drive')->trashFileById(array(
              'is_trash' => 1
            ), $ob["id"]);
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function __parentFolderStructure( $folderId = 0 )
  {
    $parents = self::$registry->getService('drive')->parentsFolderByFolderId( $folderId );
    
    if(is_array($parents) && (count($parents) > 0)) {  
      foreach($parents as $parent) {
        $this->parentsFolderStructure[] = (int) $parent->folder_id;
        // reverse
        $this->__parentFolderStructure( $parent->folder_id );
      }
    }
    return $this->parentsFolderStructure;
  }
  
  public function restoreItemsFromDrive( $kind = null )
  {
    if(is_array($kind) && (count($kind) > 0)) {
      foreach($kind as $item) {
        $ob = self::$registry->getService('drive')->itemTypeByHash( $item["itemId"] );

        if(!is_null($ob)) {
          if((int) $ob["t"] === 1) {          
            $this->status[] = self::$registry->getService('drive')->restoreFolderById(array(
              'is_trash' => 0
            ), $ob["id"]);
          }
          if((int) $ob["t"] === 2) {
            $this->status[] = self::$registry->getService('drive')->restoreFileById(array(
              'is_trash' => 0
            ), $ob["id"]);
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function restoreTrash()
  {
    $this->status[] = self::$registry->getService('drive')->restoreAllFoldersFromTrash( array('is_trash' => 0) );
    $this->status[] = self::$registry->getService('drive')->restoreAllFilesFromTrash( array('is_trash' => 0) );
    
    return $this->checkStatus();
  }
  
  public function deleteTrash()
  {
    $files = self::$registry->getService('drive')->filesFromTrash();
    $folders = self::$registry->getService('drive')->foldersFromTrash();
    
    if(!is_null($files)) {
      foreach($files as $file) {
        $this->status[] = self::$registry->getService('drive')->deleteFileFromDriveByFileId( $file->file_id );
      }
    }
    if(!is_null($folders)) {
      foreach($folders as $folder) {
        $this->status[] = self::$registry->getService('drive')->deleteForlderById( $folder->folder_id );
      }
    }
    return $this->checkStatus();
  }
  
  public function deleteForeverItemsFromDrive( $kind = null )
  {
    if(is_array($kind) && (count($kind) > 0)) {
      foreach($kind as $item) {
        $ob = self::$registry->getService('drive')->itemTypeByHash( $item["itemId"] );
        
        if(!is_null($ob)) {
          if((int) $ob["t"] === 1) {          
            $this->status[] = self::$registry->getService('drive')->deleteForlderById( $ob["id"] );
          }
          if((int) $ob["t"] === 2) {          
            $this->status[] = self::$registry->getService('drive')->deleteFileFromDriveByFileId( $ob["id"] );
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /**
  *
  * SLIDER
  *
  **/
  
  public function createSlider( $form = null )
  {
    if(!empty($form['name'])) {
      return self::$registry->getService('slider')->createSlider(array(
        ':slider_name'  => $form["name"],
        ':id_page'      => $form["page-id"],
        ':use_captions' => (isset($form["use-cations"])) ? 1 : 0,
        ':publish'      => (isset($form["publish"])) ? 1 : 0,
        ':upd_user'     => $this->getUser()->id_user,
        ':upd_date'     => date("Y-m-d H:i:s"),
        ':creator'      => $this->getUser()->id_user
      ));
    }
    return false;
  }
  
  public function insertImagesToSlider( $form = null )
  {
    if(self::$registry->getService('slider')->isSliderById($form["slider-id"]) &&
       (is_array($form["images"]) && (count($form["images"]) > 0))
    ) {
      $i = 1;
      
      foreach($form["images"] as $value) {
        if(isset($value["'use'"])) {
          $file = self::$registry->getService('drive')->fileById( 
            self::$registry->getService('drive')->fileIdByHash( $value["'imgId'"] )
          );
          $this->status[] = self::$registry->getService('slider')->insertImages(array(
            ':id_slider' => $form["slider-id"],
            ':id_image'  => $file->file_id,
            ':width'     => $file->file_width,
            ':height'    => $file->file_height,
            ':position'  => $i++
          ));
          $i++;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function insertSliderCaptions( $sliderId = 0, $imageId = 0, $captions = null )
  {
    if(is_array($captions) && (count($captions) > 0)) {
      if(self::$registry->getService('slider')->clearSliderCaptionsById(array(
        ':id_slider' => (int) $sliderId,
        ':id_image'  => (int) $imageId
      ))) {
        foreach($captions as $key => $value ){
          $this->status[] = self::$registry->getService('slider')->insertSliderCaption(array(
            ':id_slider'   => $sliderId,
            ':id_image'    => $imageId,
            ':id_lang'     => $key,
            ':link'        => $value["'link'"],
            ':title'       => $value["'title'"],
            ':description' => $value["'description'"]
          ));
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  public function updateSlider( $form = null )
  {
    $sliderId = (self::$registry->getService('slider')->isSliderById($form["slider-id"])) ? (int) $form["slider-id"] : null;
    
    if(!is_null($sliderId) && (strlen($form["name"]) > 0)) {
      if(self::$registry->getService('slider')->updateSliderById(array(
        'id_page'      => ( (int) $form["page-id"] > 0) ? $form["page-id"] : 0,
        'slider_name'  => $form["name"],
        'use_captions' => (isset($form["use-cations"])) ? 1 : 0,
        'publish'      => (isset($form["publish"])) ? 1 : 0
        ),
        $sliderId        
      )) {
        if(is_array($form["images"]) && (count($form["images"]) > 0)) {
          $i = 1;
          
          foreach($form["images"] as $value) {
            if(isset($value["'remove'"])) {
              $this->status[] = self::$registry->getService('slider')->removeItemFromSliderById( $sliderId, $value["'id'"]);
            } else {
              $this->status[] = self::$registry->getService('slider')->updateItemSliderById(array(
                'id_page'               => (int) $value["'rw-page-id'"],
                'id_device_type'        => (int) $value["'device-type-id'"],
                'id_viewport_size_type' => (int) $value["'viewport-size-type-id'"],
                'min_size'              => (int) $value["'min-size'"],
                'max_size'              => (int) $value["'max-size'"],
                'publish'               => (isset($value["'publish'"])) ? 1 : 0,
                'position'              => $i
                ),
                $sliderId,
                $value["'id'"]
              );
              $i++;
            }
          }
          return $this->checkStatus();
        }
        return true;
      }
      return false;
    }
    return false;
  }
  
  public function updateSliders( $form = null )
  {
    if(is_array($form["sliders"]) && (count($form["sliders"]) > 0)) {
      foreach($form["sliders"] as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = self::$registry->getService('slider')->removeSliderById( $value["'slider-id'"] );
        } else {
          $this->status[] = self::$registry->getService('slider')->updateSliderById(array(
            'publish' => (isset($value["'publish'"])) ? 1 : 0
            ),
            $value["'slider-id'"]
          );
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function sliderImagesList( $sliderId = 0, $folderHash = '' )
  {
    $folderId = self::$registry->getService('drive')->folderIdByHash( $folderHash );
    $fidsSet  = self::$registry->getService('slider')->getFilesIdBySliderId( $sliderId );
    $slider   = self::$registry->getService('drive')->addOnDriveByFolderId(
      $folderId,
      $fidsSet
    );
    $slider['foldersStructure'] = $this->foldersStructure( $folderId );

    return $slider;
  }
  
  private function __fillSliderRewriteLinks( $sliderId = 0, $imageId = 0, $pageId = 0 )
  {
    $rewriteLinks = self::$registry->getService('page')->getUrlKeysByPageId( $pageId );
            
    if(!is_null($rewriteLinks)) {
      foreach( $rewriteLinks as $value ) {
        $this->status[] = self::$registry->getService('slider')->setRewriteLinkByItemId(
          $sliderId,
          $imageId,
          $value->id_lang,
          $value->link_rewrite
        );
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /**
  *
  * GALLERY
  *
  **/

  
  public function createGallery( $form = null )
  {
    if(isset($form['gallery-name']) && isset($form['group']) && isset($form['type-id']) && 
       isset($form['page-id']) && isset($form['owner']) && isset($form["gallery-lang"])
    ) {
      $galleryId = (int) self::$registry->getService('gallery')->createGallery(array(
        ':gallery_name' => $form['gallery-name'],
        ':id_group'     => (int) $form['group'],
        ':id_type'      => (int) $form['type-id'],
        ':id_page'      => (int) $form['page-id'],
        ':owner'        => (int) $form['owner'],
        ':position'     => (int) self::$registry->getService('gallery')->getGalleryLastPosition(),
        ':publish'      => (isset($form['publish'])) ? 1 : 0,
      ));
      if(self::$registry->getService('gallery')->isGalleryById($galleryId)) {
        if((is_array($form["gallery-lang"]) && (count($form["gallery-lang"]) > 0)) && 
          self::$registry->getService('gallery')->deleteLangById($galleryId)
        ) {
          foreach($form["gallery-lang"] as $key => $value) {
            $this->status[] = self::$registry->getService('gallery')->insertLang(array(
              ':id_gallery'  => $galleryId,
              ':id_lang'     => $key,
              ':title'       => $value["'gallery-title'"],
              ':description' => $value["'gallery-desc'"]               
            ));
          }
          return ($this->checkStatus()) ? $galleryId : 0;
        } else {
          return true;
        }
      }
      return true;
    }
    return false;
  }
  
  public function galleryImagesList( $galleryId = 0, $folderHash = '' )
  {
    $folderId = self::$registry->getService('drive')->folderIdByHash( $folderHash );
    $fidsSet  = self::$registry->getService('gallery')->galleryImagesIdsById( $galleryId );
    $gallery  = self::$registry->getService('drive')->addOnDriveByFolderId(
      $folderId,
      $fidsSet
    );
    $gallery['foldersStructure'] = $this->foldersStructure( $folderId );

    return $gallery;
  }
  
  public function insertGalleryImages( $form = null )
  {
    if(is_array($form["images"]) && (count($form["images"]) > 0)) {
      $i = self::$registry->getService('gallery')->lastPositionImageById($form["gallery-id"]);
      
      foreach($form["images"] as $value) {
        if(isset($value["'use'"])) {
          $file = self::$registry->getService('drive')->fileById(
            self::$registry->getService('drive')->fileIdByHash($value["'imgId'"])
          );
          if(is_object($file)) {
            $data = array(
              ':id_gallery' => (int) $form["gallery-id"],
              ':id_image'   => (int) $file->file_id,
              ':width'      => $file->file_width,
              ':height'     => $file->file_height,
              ':position'   => $i,
            );
            if(self::$registry->getService('gallery')->isImageById(
                $form["gallery-id"], 
                $file->file_id
            )) {
              $this->status[] = self::$registry->getService('gallery')->updateImageToGalleryById(
                $data, 
                $form["gallery-id"], 
                $file->file_id
              );
            } else {
              $this->status[] = self::$registry->getService('gallery')->insertImage($data);
            }
            $i++;
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateGallery( $form = null )
  {
    if(is_array($form) && (count($form) > 0) && 
      self::$registry->getService('gallery')->isGalleryById($form["gallery-id"])
    ) {
      if(self::$registry->getService('gallery')->updateGalleryById(array(
        'gallery_name'  => $form['gallery-name'],
        'id_group'      => (int) $form['group'],
        'id_type'       => (int) $form['gallery-type'],
        'id_page'       => (int) $form['page-id'],
        'owner'         => (int) $form['owner'],
        'publish'       => (isset($form['publish'])) ? 1 : 0,
        'last_modified' => date('Y-m-d H:m:i')
      ), $form["gallery-id"])
      ) {
        if(is_array($form["gallery-lang"]) && (count($form["gallery-lang"]) > 0)) {
          if(self::$registry->getService('gallery')->deleteLangById($form["gallery-id"])) {
            foreach($form["gallery-lang"] as $key => $value) {
              $this->status[] = self::$registry->getService('gallery')->insertLang(array(
                ':id_gallery'  => (int) $form["gallery-id"],
                ':id_lang'     => $key,
                ':title'       => $value["'gallery-title'"],
                ':description' => $value["'gallery-desc'"]               
              ));
            }
          } else {
            return false;
          }
        }
        if(isset($form["images"]) && (is_array($form["images"]) && (count($form["images"]) > 0))) {
          $i = 1;
          
          foreach($form["images"] as $value) {
            if(isset($value["'remove'"])) {
              $this->status[] = self::$registry->getService('gallery')->deleteImage(
                $form["gallery-id"], 
                $value["'image-id'"] 
              );
            } else {
              $this->status[] = self::$registry->getService('gallery')->updateImage(array(
                'id_page'               => (int) $value["'rw-page-id'"],
                'id_device_type'        => (int) $value["'device-type-id'"],
                'id_viewport_size_type' => (int) $value["'viewport-size-type-id'"],
                'min_size'              => (int) $value["'min-size'"],
                'max_size'              => (int) $value["'max-size'"],
                'main'                  => (isset($value["'main'"])) ? 1 : 0,
                'publish'               => (isset($value["'publish'"])) ? 1 : 0,
                'position'              => $i
                ), 
                $form["gallery-id"], 
                $value["'image-id'"] 
              );
              $i++;
            }
          }
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  public function updateGalleries( $form = null )
  {
    if(is_array($form['galleryList']) && (count($form['galleryList']) > 0)) {
      foreach($form['galleryList'] as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = self::$registry->getService('gallery')->deleteGalleryId( $value["'gallery-id'"] );
          $this->status[] = self::$registry->getService('store')->deleteGalleryById( $value["'gallery-id'"] );
        } else {
          $this->status[] = self::$registry->getService('gallery')->updateGalleryById(array('publish' => ((isset($value["'publish'"])) ? 1 : 0)),$value["'gallery-id'"]);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function insertGalleryCaptions( $galleryId = 0, $imageId = 0, $captions = null )
  {
    if( ( (int) $galleryId > 0 ) && ( (int) $imageId > 0 ) && (!empty($captions)) ) {
      if(self::$registry->getService('gallery')->clearGalleryCaptionsById(array(
        ':id_gallery' => (int) $galleryId,
        ':id_image'   => (int) $imageId
      ))) {
        foreach($captions as $key => $value) {
          $this->status[] = self::$registry->getService('gallery')->insertGalleryCaption(array(
            ':id_gallery'   => (int) $galleryId,
            ':id_image'     => (int) $imageId,
            ':id_lang'      => $key,
            ':url_link'     => $value["'link'"],
            ':title'        => $value["'title'"],
            ':description'  => $value["'description'"]
          ));
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  /**
  *
  * FORMS
  *
  **/
  
  public function createForm( $form = null )
  {
    if(strlen($form['form-name']) > 0) {
      $formHash = self::$registry->getService('hash')->ripemd128(
        self::$registry->getService('helper')->generateRandomString(10) .
        $form['form-name'] .
        self::$registry->getService('helper')->generateRandomString(10)
      );
      if(self::$registry->getService('form')->insertForm(array(
        ':form_hash'       => $formHash,
        ':form_name'       => $form['form-name'],
        ':form_embed_link' => "forms/embed/".$formHash,
        ':upd_user'        => 0,
        ':upd_date'        => date("Y-m-d H:i:s"),
        ':creator'         => $this->getUser()->id_user
      ))) {
        return $formHash;
      }
    }
    return false;
  }
  
  public function updateFormList( $form = null )
  {
    if(is_array($form['formList']) && (count($form['formList']) > 0)) {
      foreach($form['formList'] as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = self::$registry->getService('form')->deleteFormById( $value["'form-id'"] );
        } else {
          $this->status[] = self::$registry->getService('form')->updateFormById(array(
            'enabled' => (isset($value["'enabled'"])) ? 1 : 0
          ),$value["'form-id'"]);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /**
  *
  * LANGUAGES
  *
  **/
  
  public function updateLanguages( $data = null )
  { 
    if(is_array($data) && (count($data) > 0)) {    
      foreach($data as $value) {
        $this->status[] = self::$registry->getService('languages')->updateLanguageById(array(
          'active' => (isset($value["'active'"])) ? 1 : 0 
        ), $value["'id-lang'"]);
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /**
  *
  * DICTIONARY
  *
  **/
  
  public function createDictionaryItem( $form = null )
  {
    if(isset($form["translate"]) && (is_array($form["translate"]) && (count($form["translate"]) > 0))) {
      foreach($form["translate"] as $key => $value) {
        if(!self::$registry->getService('dictionary')->isElementByKeys(
            $form["section"],
            $form["block"],
            $key,
            str_replace(',', '_', $form["key"])
        )) {
          if(count($value["'value'"]) > 0) {
            $this->status[] = self::$registry->getService('dictionary')->createItem(array(
              ':section' => $form["section"],
              ':block'   => $form["block"],
              ':l_key'   => $key,
              ':t_key'   => str_replace(',', '_', $form["key"]),
              ':t_value' => $value["'value'"],
              )      
            );
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateDictionaryItems( $form = null )
  {
    if(isset($form["itemList"]) && (is_array($form['itemList']) && (count($form['itemList']) > 0))) {
      foreach($form["itemList"] as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = self::$registry->getService('dictionary')->removeItemFromDictionary($value["'id'"]);
        } else {
          $this->status[] = self::$registry->getService('dictionary')->updateItemOnDictionary(array(
            't_value' => $value["'translate'"] 
            ),
            $value["'id'"]
          );
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /**
  *
  * SEO REDIRECT
  *
  **/
  
  public function createSeoRedirect( $form = null )
  {
    if((strlen((string) $form["url"]) > 0) && (strlen((string) $form["redirect"]) > 0)) {
      return self::$registry->getService('router')->insertSeoRedirect(array(
        ':url'      => (string) $form["url"],
        ':redirect' => (string) $form["redirect"],
      ));
    }
    return false;
  } 
  
  public function updateSeoRedirectList( $form = null )
  {
    if(is_array($form["redirectList"]) && (count($form["redirectList"]) > 0)) {
      foreach($form["redirectList"] as $value) {
        if(self::$registry->getService('router')->isSeoRedirectById( $value["'id-redirect'"] )) {
          if(isset($value["'remove'"])) {
            $this->status[] = self::$registry->getService('router')->deleteSeoRedirectById( $value["'id-redirect'"] );
          } else {
            $this->status[] = self::$registry->getService('router')->updateSeoRedirectById(array(
              'url'      => (string) $value["'url'"],
              'redirect' => (string) $value["'redirect'"],
            ), $value["'id-redirect'"]);
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  
  /**
  *
  * 
  * 
  * 
  * OLD
  * 
  * 
  * 
  *
  **/
  
  
  
  
  
  
  
  
 
  
  
  
  
  
  
  
  
 
  
  /**
  *
  * GLOBAL_SECTION_GENERAL_SETTINGS
  *
  **/
  
  public function getGeneralSettings()
  {
    return self::$registry->getService('general-settings')->generalSettings();
  }
  
  public function updateGeneralSettings( $form = null )
  {
    // base
    if(isset($form["generals"]["'base'"])) {
      self::$registry->getService('general-settings')->clearBaseSettings();
      self::$registry->getService('general-settings')->saveBaseSettings(
        array(
          ':site_name'       => $form["generals"]["'base'"]["'site-name'"],
          ':site_url_prefix' => $form["generals"]["'base'"]["'site-url-prefix'"],
          ':upload_path'     => $form["generals"]["'base'"]["'upload-path'"],
          ':theme'           => $form["generals"]["'base'"]["'theme'"],
          ':scripts'         => $form["generals"]["'base'"]["'html-content'"]
        )      
      );
    }
    // meta
    if(isset($form["generals"]["'base'"]["'meta'"])) {
      self::$registry->getService('general-settings')->clearMetaData();
      
      foreach( $form["generals"]["'base'"]["'meta'"] as $key => $value )
      {
        self::$registry->getService('general-settings')->saveMetaData(
         array(
          ':lang_id'         => (int) $key,
          ':metatitle'       => $value["'title'"],
          ':metakeywords'    => $value["'keywords'"],
          ':metadescription' => $value["'description'"],
          ':metarobots'      => 'all'
         )
        );
      }
    }
    // google analytics
    if(isset($form["generals"]["'ga-analytics'"])) {
      self::$registry->getService('general-settings')->clearGoogleAnalyticsData();
      self::$registry->getService('general-settings')->saveGoogleAnalyticsData(
        array(
          ':tracking_id'   => $form["generals"]["'ga-analytics'"]["'tracking-id'"],
          ':tracking_code' => $form["generals"]["'ga-analytics'"]["'html-content'"]
        )
      );
    }
    // footer
    if(isset($form["generals"]["'footer'"])) {
      self::$registry->getService('general-settings')->clearFooter();
      
      foreach($form["generals"]["'footer'"] as $key => $value){
        self::$registry->getService('general-settings')->saveFooter(array(
          ':lang_id' => (int) $key,
          ':content' => $value["'html-content'"]
        ));
      }
    }
    return true;
  }
  
  /**
  *
  * AUTHORIZATION / SESSION / LOGIN / USER 
  *
  **/
  
  public function getUser()
  {
    return $this->user;
  }
  
  public function getUserSID()
  {
    return $this->sid;
  }
  
  public function isLogin() 
  {
    return $this->loggedIn;
  }
  
  public function logout() 
  {
    $this->loggedIn = false;
    $this->valid    = false;
    $this->user     = null;
    self::$registry->getService('sessions')->remove('sn_auth_session_uid');
  }
  
  public function checkForAuthentication()
  {
    $this->sid = self::$registry->getService('sessions')->get('sn_auth_session_uid');
    
    if(!is_null($this->sid)) {
      $this->checkUserBySID();
    }
  }
  
  public function checkUserBySID()
  {
    if(self::$registry->getService('users')->checkUserSID( $this->sid )) {
      $this->loggedIn = true;
      $this->valid    = true;
      $this->user     = self::$registry->getService('users')->getUserDataBySID( $this->sid )[0];
    }
  }
  
  public function postAuthenticate( $email = '', $passwd = '' )
  {
    $data = self::$registry->getService('users')->authUser( $email, $passwd )[0];
    
    if(!empty($data)) {
      $this->loggedIn = true;
      $this->valid    = true;
      $this->sid      = $data->sid;
      $this->user     = self::$registry->getService('users')->getUserDataBySID( $this->sid )[0];
      
      self::$registry->getService('sessions')->set('sn_auth_session_uid',$this->getUserSID());
      
      return true;
    }
    return false;
  }
  
  public function isAdmin() 
  {
    return self::$registry->getService('users')->checkUserSID(
      self::$registry->getService('sessions')->get('sn_auth_session_uid')    
    );
  }
  
  /**
  *
  * HELPER METHOD
  *
  **/
  
  private function checkStatus()
  {
    if(is_array($this->status) && (count($this->status) > 0)) {      
      foreach($this->status as $status) {
        if((bool) $status === false) {
          return false;
        }
      }
      return true;
    }
    return false;
  }
  
}