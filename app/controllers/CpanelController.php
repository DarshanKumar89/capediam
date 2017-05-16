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

require_once __APP_DIR__ . 'extensions/StoreRequest.php';

class CpanelController extends StoreRequest {
  
  /** @var Registry */
  protected static $registry;
  
  /** @var array */
  private $driveActionKeys = array(
    1 => "move",
    2 => "add_star",
    3 => "change_color",
    4 => "remove",
    5 => "restore",
    6 => "deleteForever",
    7 => "rename"
  );

  public function __construct( Registry $registry ) 
  {
    parent::__construct($registry);
    
    self::$registry = $registry;
    
    self::$registry->getService('cms')->checkForAuthentication();
    
    if( (!self::$registry->getService('cms')->isLogin()) &&
        (self::$registry->getService('irequest')->getUrlBit(1) !== 'sign') &&
        (self::$registry->getService('irequest')->getUrlBit(2) == 0 || self::$registry->getService('irequest')->getUrlBit(2) == 'in' || self::$registry->getService('irequest')->getUrlBit(2) == 'out' )
    ) {
      if(!self::$registry->getService('cms')->isLogin()) {
        self::$registry->getService('cms')->logout();
        self::$registry->getService('irequest')->movePage(301,'cpanel/sign');
      }
    }
  }
  
  /**
  *
  * DASHBOARD
  *
  **/
  
  public function run()
  {
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl");
  }
  
  public function setLanguage( $langId = 0 )
  {
    if(self::$registry->getService('languages')->isLangById($langId)) {
      self::$registry->getService('sessions')->set( 
        'language_cpanel', 
        $langId 
      );
      self::$registry->getService('irequest')->movePage(
        301,
        self::$registry->getService('irequest')->getReferer(),
        true     
      );
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        'Language not found.',
        null,
        'cpanel',
        true
      );
    }
  }
  
  /**
  *
  * LOGIN
  *
  **/
  
  public function sign( $action = null )
  {
    self::$registry->getService('template')->display('file:[1]signin.tpl');
  }
  
  public function singin()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["xe"]) && isset($form["xps"])) {
      $errs = [];
      
      if((strlen($form["xe"]) === 0) && self::$registry->getService('helper')->isEmail($form["xe"])) {
        $errs[] = "EMAIL IS REQUIRED.";
      }
      if(strlen($form["xps"]) === 0) {
        $errs[] = "PASSWORD IS REQUIRED.";
      }
      if((count($errs) === 0) && $this->__loginProcessed($form['xe'], $form['xps'])) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel'
        );
      } else {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/sign'
        );
      }
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/sign'
      );
    }
  }
  
  private function __loginProcessed( $email = '', $passwd = '' )
  {
    return  self::$registry->getService('cms')->postAuthenticate( 
      $email, 
      self::$registry->getService('hash')->sha512( $passwd )
    );
  }
  
  public function signout()
  {
    self::$registry->getService('cms')->logout();
    self::$registry->getService('irequest')->movePage(
      301,
      'cpanel/sign'
    );
  }
  
  /**
  *
  * SITE STRUCTURE
  *
  **/
  
  public function siteStructure( $itemId = 0 )
  {
    $data = (self::$registry->getService('nav')->isNavItemById( $itemId )) ? self::$registry->getService('nav')->navItemDataById( $itemId ) : null;
    
    self::$registry->getService('template')->assign(
      'navId',
      self::$registry->getService('cms')->genUniqueNavId()
    );
    self::$registry->getService('template')->assign(
      'navTree',
      self::$registry->getService('cms')->navTree()
    );
    self::$registry->getService('template')->assign(
      'navList2',
      self::$registry->getService('nav')->navList2()
    );
    self::$registry->getService('template')->assign('data',$data);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]site/sitemap.tpl");
  }
  
  /**
  *
  * NAVIGATION
  *
  **/
  
  public function createNav()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->createNav($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/site-structure'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/site-structure',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/site-structure'
      );
    }
  }
  
  public function updateNavList()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateNav($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/site-structure'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/site-structure',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/site-structure'
      );
    }
  }
  
  public function deleteNav()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["model"]) && isset($form["id"])) && (((int) $form["model"] > 0) && ((int) $form["id"] > 0))) {
      $model = (int) $form["model"];
      $id    = (int) $form["id"];

      if(($model == 1) || ($model == 2)) {
        if(self::$registry->getService('cms')->deleteNav($model, $id)) {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/site-structure'
          );
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
            null,
            'cpanel/site-structure',
            true
          );
        }
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'FORM ERROR',
          'Unknown type model.',
          null,
          'cpanel/site-structure'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/site-structure'
      );
    }
  }
  
  public function createNavItem()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->createNavItem($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/site-structure'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/site-structure',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/site-structure'
      );
    } 
  }
  
  public function navFormCreateItem()
  {
    $form  = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["patternId"]) && isset($form["model"]) && isset($form["id"])) &&
      (((int) $form["patternId"] > 0) && ((int) $form["model"] > 0) && ((int) $form["id"] > 0))
    ) {
      $patternId = (int) $form["patternId"];
      $model = (int) $form["model"];
      $id    = (int) $form["id"];

      if((($model == 1) || ($model == 2)) && (($patternId == 1) || ($patternId == 2))) {
        self::$registry->getService('template')->assign('model',$model);
        self::$registry->getService('template')->assign('parentId',$id);
        self::$registry->getService('template')->assign('patternId',$patternId);
        self::$registry->getService('template')->assign(
          'pageList',
          self::$registry->getService('page')->pageList()
        );
        self::$registry->getService('template')->assign(
          'categoryList',
          self::$registry->getService('store')->categoryList()
        );
        self::$registry->getService('template')->display("extends:[cpanel]navigation/nav_create_item.tpl");
      } else {
        self::$registry->getService('messenger')->alert(
          4,
          '401 BAD REQUEST',
          'ERROR: DATA NOT VALID.'
        );
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function navFormItemOrder()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["model"]) && isset($form["id"])) && (((int) $form["model"] > 0) && ((int) $form["id"] > 0))) {
      if((int) $form["model"] === 2) {
        self::$registry->getService('template')->assign(
          'itemList',
          self::$registry->getService('cms')->navItemOrderListById( $form["id"] )
        );
        self::$registry->getService('template')->display("extends:[cpanel]navigation/nav_item_order.tpl");
      } else {
        self::$registry->getService('messenger')->alert(
          4,
          '401 BAD REQUEST',
          'ERROR: DATA NOT VALID.'
        );
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function updateNavItemOrder()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateNavItemOrder($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/site-structure'
        );    
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/site-structure',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/site-structure'
      );
    }
  }
  
  public function navFormEditItem()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["patternId"]) && isset($form["model"]) && isset($form["id"])) && 
      (((int) $form["patternId"] > 0) && ((int) $form["model"] > 0) && ((int) $form["id"] > 0))
    ) {
      $model     = (int) $form["model"];
      $patternId = (int) $form["patternId"];
      $itemId    = (int) $form["id"];

      if((($model == 1) || ($model == 2)) && ($patternId == 1 || $patternId == 2)) {
        self::$registry->getService('template')->assign(
          'pageList',
          self::$registry->getService('page')->pageList()
        );
        self::$registry->getService('template')->assign(
          'categoryList',
          self::$registry->getService('store')->categoryList()
        );
        self::$registry->getService('template')->assign(
          'data',
          self::$registry->getService('nav')->navItemDataById( $itemId )
        );
        self::$registry->getService('template')->display("extends:[cpanel]navigation/nav_edit_item.tpl");
      } else {
        self::$registry->getService('messenger')->alert(
          4,
          '401 BAD REQUEST',
          'ERROR: DATA NOT VALID.'
        );
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function updateNavItem()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateNavItem($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/site-structure'
        );       
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/site-structure',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/site-structure'
      );
    }
  }
  
  public function chooseNavItemImage( $itemId = 0, $langId = 0, $folderHash = '' )
  {
    $folderId = (strlen($folderHash) > 0) ? (int) self::$registry->getService('drive')->folderIdByHash($folderHash) : 0;

    if(self::$registry->getService('nav')->isNavItemById($itemId) &&
       self::$registry->getService('drive')->isFolderById($folderId)
    ) {
      $drive = self::$registry->getService('drive')->addOnDriveByFolderId( $folderId );
      $drive['foldersStructure'] = self::$registry->getService('cms')->foldersStructure( $folderId );

      self::$registry->getService('template')->assign('drive', $drive);
      self::$registry->getService('template')->assign('itemId', $itemId);
      self::$registry->getService('template')->assign('langId', $langId);
      self::$registry->getService('template')->assign('folderHash', $folderHash);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]navigation/nav_item_images.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'NAVIGATION ITEM NOT FOUND.',
        null,
        'cpanel/site-structure',
        true
      );
    }
  }
  
  public function insertNavItemImage()
  {
    $form  = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["images"]) && (is_array($form["images"]) && (count($form["images"]) > 0))) {
      if(self::$registry->getService('nav')->isNavItemById($form["item-id"])) {
        if(self::$registry->getService('cms')->insertNavItemImageById(
          $form["item-id"], 
          $form["lang-id"], 
          $form["images"] 
        )) {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/site-structure/'.$form["item-id"]
          );
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
            null,
            'cpanel/site-structure',
            true
          );
        }
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'NAVIGATION ITEM NOT FOUND.',
          null,
          'cpanel/site-structure',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/site-structure'
      );
    }
  }
  
  public function deleteNavItemImage( $itemId = 0, $langId = 0 )
  {
    if(self::$registry->getService('nav')->isNavItemById($itemId) && 
       self::$registry->getService('languages')->isLangById($langId)
    ) {
      if(self::$registry->getService('nav')->updateNavItemImageById($itemId, $langId, 0)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/site-structure/'.$itemId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/site-structure',
          true
        );
      }
    } else {
       self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'NAVIGATION ITEM NOT FOUND.',
        null,
        'cpanel/site-structure',
        true
      );
    }
  }
  
  public function navPageLangData()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["pageId"]) && ((int) $form["pageId"] > 0)) {
      $pageId = (int) $form["pageId"];

      if(self::$registry->getService('page')->isPageById( $pageId )) {
        $data = self::$registry->getService('page')->pageHeadingByPageId( $pageId );

        if(!is_null($data)) {
          self::$registry->getService('json')->push(array(
            'status' => 200,
            'data'   => $data
                  
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "PAGE DATA WAS NOT OBTAINED."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "PAGE NOT FOUND."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  /**
  *
  * PAGE
  *
  **/
  
  public function createPage()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['page-name']) && (strlen($form['page-name']) > 0)) {
      $pageId = self::$registry->getService('cms')->createPage( $form['page-name'] );
      
      if(self::$registry->getService('page')->isPageById( $pageId )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-edit/'.$pageId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list'
      );
    }
  }
  
  public function createPagelist()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['page-list-name']) && (strlen($form['page-list-name']) > 0)) {
      $pageListId = self::$registry->getService('cms')->createPageList( $form['page-list-name'] );
      
      if(self::$registry->getService('page')->isPageListById( $pageListId )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list-edit/'.$pageListId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list-table',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list-table'
      );
    }
  }
  
  public function pageList( $bit0 = 0, $bit1 = 0, $sort = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('page')->pageIdsByKeywords($keywords) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 50 : (int) $bit1;
    $total = self::$registry->getService('page')->countPages(null, $useList);
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/page-list' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'pageList',
      self::$registry->getService('page')->pageList(true, null, $useList, $this->__setPageListFilter( $sort ))
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('sort',$sort);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/page_list.tpl");
  }
  
  private function __setPageListFilter( $sort = 0 )
  {
    switch((int) $sort) {
      case 77:
        return "ORDER BY a.pagename ASC";
      case 66:
        return "ORDER BY a.pagename DESC";
      case 55:
        return "ORDER BY a.created ASC";
      case 44:
        return "ORDER BY a.created DESC";
      default:
        return null;
    }
  }
  
  public function pageListTable( $bit0 = 0, $bit1 = 0, $sort = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('page')->pageListIdsByKeywords($keywords) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 50 : (int) $bit1;
    $total = self::$registry->getService('page')->countList($useList);
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/page-list-table' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'listTable',
      self::$registry->getService('page')->listTable(true, $useList, $this->__setListTableFilter( $sort ))
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('sort',$sort);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/page_list_table.tpl");
  }
  
  private function __setListTableFilter( $sort = 0 )
  {
    switch((int) $sort) {
      case 77:
        return "ORDER BY a.page_list_name ASC";
      case 66:
        return "ORDER BY a.page_list_name DESC";
      case 55:
        return "ORDER BY a.created ASC";
      case 44:
        return "ORDER BY a.created DESC";
      default:
        return null;
    }
  }
  
  public function pageEditForm( $pageId = 0 )
  {
    if(self::$registry->getService('page')->isPageById( $pageId )) {
      self::$registry->getService('template')->assign(
        'userList',
        self::$registry->getService('users')->userList()
      );
      self::$registry->getService('template')->assign(
        'metarobots',
        self::$registry->getService('page')->metaRobots()
      );
      self::$registry->getService('template')->assign(
        'page',
        self::$registry->getService('page')->pageById( $pageId )
      );
      self::$registry->getService('template')->assign(
        'slider',
        self::$registry->getService('page')->isPageSliderById( $pageId )
      );
      self::$registry->getService('template')->assign(
        'gallery',
        self::$registry->getService('page')->isPageGalleryById( $pageId )
      );
      self::$registry->getService('template')->assign(
        'router',
        self::$registry->getService('router')->routerObject(1, $pageId)
      );
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/page_edit.tpl");
    } else  {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("global_pages_alert_page_not_found"),
        null,
        'cpanel/page-list',
        true
      );
    }
  }
  
  public function pageListEditForm( $pageListId = 0, $bit0 = 0, $bit1 = 0, $sort = 0 )
  {
    if(self::$registry->getService('page')->isPageListById( $pageListId )) {
      // SEARCH
      $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
      $pageIds  = self::$registry->getService('page')->pageIdsByPageListId( $pageListId );
      $useList  = (strlen($keywords) >= 3) ? $this->__pageIdsByKI($keywords, $pageIds) : $pageIds;
      // PAGINATION VARS
      $page  = ((int) $bit0 > 0) ? (int) $bit0 : 1;
      $limit = (((int) $bit1 > 0) && ((int) $bit1 < 501)) ? (int) $bit1 : 50;
      $total = self::$registry->getService('page')->countPages(null, $useList, true, $pageListId);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( 'cpanel/page-list-edit/'.$pageListId );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ('/'.$sort))
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'userList',
        self::$registry->getService('users')->userList()
      );
      self::$registry->getService('template')->assign(
        'metarobots',
        self::$registry->getService('page')->metaRobots()
      );
      self::$registry->getService('template')->assign(
        'pageList',
        self::$registry->getService('page')->pageList(true, null, $useList, $this->__setPageListPagesFilter( $sort ), true, $pageListId)
      );
      self::$registry->getService('template')->assign(
        'data',
        self::$registry->getService('page')->pageListById( $pageListId )
      );
      self::$registry->getService('template')->assign(
        'router',
        self::$registry->getService('router')->routerObject(2, $pageListId)
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('sort',$sort);
      self::$registry->getService('template')->assign('countOrder',self::$registry->getService('page')->countOrder( $pageListId ));
      self::$registry->getService('template')->assign('countNotOrder',self::$registry->getService('page')->countNotOrder( $pageListId ));
      self::$registry->getService('template')->assign('countLastOrder',self::$registry->getService('page')->countLastOrder( $pageListId ));
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/page_list_edit_form.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("global_pages_alert_page_list_not_found"),
        null,
        'cpanel/page-list',
        true
      );
    }
  }
  
  private function __pageIdsByKI( $keywords = '', $pageIds = null )
  {
    $data = self::$registry->getService('page')->pageIdsByKeywords( $keywords );
    $uids = [];
    
    foreach($data as $id) {
      if(in_array($id, $pageIds)) {
        array_push($uids, $id);
      }
    }
    return $uids;
  }
  
  private function __setPageListPagesFilter( $sort = 0 )
  {
    switch((int) $sort) {
      case 99:
        return "ORDER BY c.position ASC";
      case 88:
        return "ORDER BY c.position DESC";
      case 77:
        return "ORDER BY a.pagename ASC";
      case 66:
        return "ORDER BY a.pagename DESC";
      case 55:
        return "ORDER BY c.created ASC";
      case 44:
        return "ORDER BY c.created DESC";
      default:
        return null;
    }
  }
  
  public function modalPageList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["pageListId"]) && isset($form['page']) && isset($form['limit'])) && 
      self::$registry->getService('page')->isPageListById( $form["pageListId"] )
    ) {
      // SEARCH
      $keywords   = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? html_entity_decode($form['keywords'], ENT_QUOTES, "UTF-8") : null;
      $ignoreList = self::$registry->getService('page')->pageIdsByPageListId( $form["pageListId"] );
      $useList    = (!is_null($keywords) && (strlen($keywords) >= 3)) ? self::$registry->getService('page')->pageIdsByKeywords( $keywords ) : null;
      // PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] > 0) && ((int) $form['limit'] < 501))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('page')->countPages($ignoreList, $useList);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( '' );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', true)
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'pageList',
        self::$registry->getService('page')->pageList(true, $ignoreList, $useList)
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('keywords',$form['keywords']);
      self::$registry->getService('template')->display("extends:[cpanel]page/ajax/page_list_modal.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '400 BAD REQUEST',
        'ERROR: PAGE OR LMIT NOT DEFINED.'
      );
    }
  }

  public function addPageToPageList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["pageListId"]) && isset($form["pageId"]))  &&
      self::$registry->getService('page')->isPageListById( $form["pageListId"] ) &&
      self::$registry->getService('page')->isPageById( $form["pageId"] )
    ) {
      if(!self::$registry->getService('page')->isPageInPageListById($form["pageListId"], $form["pageId"])) {
        if(self::$registry->getService('page')->insertPageToPageList(array(
          ':id_page_list' => (int) $form["pageListId"],
          ':id_page'      => (int) $form["pageId"]
        ))) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The page has successfully added to the list.'
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 402,
            'message' => self::$registry->getService('translator')->translate("global_alert_form_processed_error")
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => 'The page is already in the list.'
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => 'POSTING PAYLOAD IS INCORRECT.'
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  public function addPagesToPageList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["pageListId"]) && isset($form["ids"]))  &&
      self::$registry->getService('page')->isPageListById( $form["pageListId"] ) &&
      (is_array($form["ids"]) && (count($form["ids"]) > 0))
    ) {
        if(self::$registry->getService('cms')->insertPagesToPageList(
          $form["pageListId"],
          $form["ids"]
        )) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The pages has successfully added to the list.'
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 402,
            'message' => self::$registry->getService('translator')->translate("global_alert_form_processed_error")
          ));
          self::$registry->getService('json')->renderJSON();
        }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => 'POSTING PAYLOAD IS INCORRECT.'
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  public function pageListPagesTable()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["pageListId"]) && isset($form['page']) && isset($form['limit']) && isset($form["sort"])) &&
      self::$registry->getService('page')->isPageListById( $form["pageListId"] )
    ) {
      // SEARCH
      $useList = self::$registry->getService('page')->pageIdsByPageListId( $form["pageListId"] );
      // PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] > 0) && ((int) $form['limit'] < 501))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('page')->countPages(null, $useList, true, $form["pageListId"]);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( 'cpanel/page-list-edit/'.$form["pageListId"] );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5)
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'pageList',
        self::$registry->getService('page')->pageList(true, null, $useList, $this->__setPageListFilter( $form["sort"] ), true, $form["pageListId"])
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('sort',$form["sort"]);
      self::$registry->getService('template')->assign('countOrder',self::$registry->getService('page')->countOrder( $form["pageListId"] ));
      self::$registry->getService('template')->assign('countNotOrder',self::$registry->getService('page')->countNotOrder( $form["pageListId"] ));
      self::$registry->getService('template')->assign('countLastOrder',self::$registry->getService('page')->countLastOrder( $form["pageListId"] ));
      self::$registry->getService('template')->display("extends:[cpanel]page/ajax/page_list_pages_table.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function makeCopyPage()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['page-id']) && isset($form['pagename'])) &&
       self::$registry->getService('page')->isPageById($form['page-id']) &&
       (strlen($form['pagename']) > 0)
    ) { 
      $pageId = self::$registry->getService('cms')->makeCopyPageById($form['page-id'], $form['pagename']);
            
      if(self::$registry->getService('page')->isPageById($pageId)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-edit/'.$pageId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list'
      );
    }
  }
  
  public function updatePage()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((is_array($form) && (count($form) > 0)) && (isset($form['page-id']) && self::$registry->getService('page')->isPageById($form['page-id']))) {
      if(self::$registry->getService('cms')->updatePage($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-edit/'.$form['page-id']
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list'
      );
    }
  }
  
  public function updatePageList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((is_array($form) && (count($form) > 0)) && (isset($form['page-list-id']) && self::$registry->getService('page')->isPageListById($form['page-list-id']))) {
      if(self::$registry->getService('cms')->updatePageList($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list-edit/'.$form['page-list-id']
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list-table',
          true
        );
      }
     } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list-table'
      );
    }
  }
  
  public function updateAllPages()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(isset($form["pagelist"]) && (count($form["pagelist"]) > 0)) {
      if(self::$registry->getService('cms')->updateAllPages( $form["pagelist"] )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list'
      );
    }
  }
  
  public function updateAllPageList()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(isset($form["list"]) && (count($form["list"]) > 0)) {
      if(self::$registry->getService('cms')->updateAllPageList( $form["list"] )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list-table'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list-table',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list-table'
      );
    }
  }
  
  public function choosePageImage( $actionId = 0, $pageId = 0, $langId = 0, $folderHash = '' )
  {
    $folderId = (strlen($folderHash) > 0) ? self::$registry->getService('drive')->folderIdByHash($folderHash) : 0;

    if((((int) $actionId === 1) || ((int) $actionId === 2)) &&
      self::$registry->getService('page')->isPageById( $pageId ) &&
      (((int) $actionId === 1) || self::$registry->getService('languages')->isLangById( $langId )) &&
      self::$registry->getService('drive')->isFolderById( $folderId )
    ) {
      $drive = self::$registry->getService('drive')->addOnDriveByFolderId( $folderId );
      $drive['foldersStructure'] = self::$registry->getService('cms')->foldersStructure( $folderId );

      self::$registry->getService('template')->assign('actionId',$actionId);
      self::$registry->getService('template')->assign('pageId',$pageId);
      self::$registry->getService('template')->assign('langId',$langId);
      self::$registry->getService('template')->assign('folderHash',$folderHash);
      self::$registry->getService('template')->assign('drive',$drive);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/page_images.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
        null,
        'cpanel/page-list',
        true
      );
    }
  }
  
  public function choosePageListImage( $actionId = 0, $pageListId = 0, $langId = 0, $folderHash = '' )
  {
    $folderId = (strlen($folderHash) > 0) ? self::$registry->getService('drive')->folderIdByHash($folderHash) : 0;

    if((((int) $actionId === 1) || ((int) $actionId === 2)) &&
      self::$registry->getService('page')->isPageListById( $pageListId ) &&
      (((int) $actionId === 1) || self::$registry->getService('languages')->isLangById( $langId )) &&
      self::$registry->getService('drive')->isFolderById( $folderId )
    ) {
      $drive = self::$registry->getService('drive')->addOnDriveByFolderId( $folderId );
      $drive['foldersStructure'] = self::$registry->getService('cms')->foldersStructure( $folderId );

      self::$registry->getService('template')->assign('drive',$drive);
      self::$registry->getService('template')->assign('langId',$langId);
      self::$registry->getService('template')->assign('actionId',$actionId);
      self::$registry->getService('template')->assign('pageListId',$pageListId);
      self::$registry->getService('template')->assign('folderHash',$folderHash);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/page_list_images.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
        null,
        'cpanel/page-list-table',
        true
      );
    }
  }
  
  public function insertPageImage()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["action-id"]) && isset($form["page-id"]) && isset($form["lang-id"]) && isset($form["images"])) &&
      (((int) $form["action-id"] === 1) || ((int) $form["action-id"] === 2)) &&
      self::$registry->getService('page')->isPageById($form["page-id"]) &&
      (((int) $form["action-id"] === 1) || self::$registry->getService('languages')->isLangById($form["lang-id"])) &&
      (is_array($form["images"]) && (count($form["images"]) > 0))
    ) {
      if(self::$registry->getService('cms')->insertPageImage(
        $form["action-id"], 
        $form["page-id"], 
        $form["lang-id"], 
        $form["images"] 
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-edit/'.$form["page-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list'
      );
    }
  }
  
  public function insertPageListImage()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["action-id"]) && isset($form["page-list-id"]) && isset($form["lang-id"]) && isset($form["images"])) &&
      (((int) $form["action-id"] === 1) || ((int) $form["action-id"] === 2)) &&
      self::$registry->getService('page')->isPageListById($form["page-list-id"]) &&
      (((int) $form["action-id"] === 1) || self::$registry->getService('languages')->isLangById($form["lang-id"])) &&
      (is_array($form["images"]) && (count($form["images"]) > 0))
    ) {
      if(self::$registry->getService('cms')->insertPageListImage(
        $form["action-id"], 
        $form["page-list-id"], 
        $form["lang-id"], 
        $form["images"] 
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list-edit/'.$form["page-list-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list-table',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list-table'
      );
    }
  }
  
  public function deletePageImage( $actionId = 0, $pageId = 0, $langId = 0 )
  {
    if((((int) $actionId === 1) || ((int) $actionId === 2)) &&
      self::$registry->getService('page')->isPageById($pageId) &&
      (((int) $actionId === 1) || self::$registry->getService('languages')->isLangById($actionId))
    ) {
      if(self::$registry->getService('page')->updatePageImageById(
        $actionId, 
        $pageId, 
        $langId, 
        0
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-edit/'.$pageId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
        null,
        'cpanel/page-list',
        true
      );
    }
  }
  
  public function deletePageListImage( $actionId = 0, $pageListId = 0, $langId = 0 )
  {
    if((((int) $actionId === 1) || ((int) $actionId === 2)) &&
      self::$registry->getService('page')->isPageListById($pageListId) &&
      (((int) $actionId === 1) || self::$registry->getService('languages')->isLangById($actionId))
    ) {
      if(self::$registry->getService('page')->updatePageListImageById(
        $actionId, 
        $pageListId, 
        $langId, 
        0
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list-edit/'.$pageListId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list-table',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
        null,
        'cpanel/page-list-table',
        true
      );
    }
  }
  
  public function deletePage( $pageId = 0 )
  {
    if(self::$registry->getService('page')->isPageById( $pageId )) {
      if(self::$registry->getService('page')->deletePageById( $pageId )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list'
        );
      } else  {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("global_pages_alert_page_not_found"),
        null,
        'cpanel/page-list',
        true
      );
    }
  }
  
  public function deletePageList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(self::$registry->getService('page')->isPageListById( $form['page-list-id'] )) {
      if(self::$registry->getService('page')->deletePageListById( $form['page-list-id'] )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/page-list-table'
        );
      } else  {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list-table',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("global_pages_alert_page_list_not_found"),
        null,
        'cpanel/page-list-table',
        true
      );
    }
  }
  
  public function pageListBySiteStructure()
  {
    self::$registry->getService('template')->assign(
      'unfiled_pagelist_count',
      self::$registry->getService('page')->unfiledPageListCount()
    );
    self::$registry->getService('template')->assign(
      'rootStructure',
      self::$registry->getService('nav')->navMainStructure()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/page_list_by_site_structure.tpl");
  }
  
  public function unfiledPageList()
  {
    self::$registry->getService('template')->assign(
      'pageList',
      self::$registry->getService('page')->unfiledPageList()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/unfiled_pages_list.tpl");
  }
  
  public function rootPageList( $navHash = '' )
  {
    if(self::$registry->getService('nav')->isNavByHash($navHash)) {
      self::$registry->getService('template')->assign(
        'rootItemsStructure',
        self::$registry->getService('nav')->navRootItemsStructeByNavId( $navHash )
      );
      self::$registry->getService('template')->assign(
        'pageList',
        self::$registry->getService('page')->pageListByRIN( $navHash )
      );
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/root_page_list.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/page-list-by-site-structure'
      );
    }
  }
  
  public function slavePageList( $navHash = '', $itemId = 0 )
  {
    if(self::$registry->getService('nav')->isNavByHash($navHash) &&
       self::$registry->getService('nav')->isNavItemById($itemId)
    ) {
      self::$registry->getService('template')->assign(
        'itemsStructure',
        self::$registry->getService('nav')->navItemsStructureByItemId( $navId, $itemId )
      );
      self::$registry->getService('template')->assign(
        'pageList',
        self::$registry->getService('page')->pageListByIND( $navId, $itemId )
      );
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]page/slave_page_list.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/page-list-by-site-structure'
      );
    }
  }
  
  /**
  *
  * MY DRIVE
  *
  **/
  
  public function rootFolder( $bit1 = 0, $bit2 = 0, $bit3 = 0, $bit4 = 0 )
  {
    $folderId = 1;
    // Folder Set Pagination
    $page1  = ((int) $bit1 === 0) ? 1 : (int) $bit1;
    $limit1 = ((int) $bit2 === 0) ? 30 : (int) $bit2;
    $total1 = self::$registry->getService('drive')->countFoldersByFolderId( $folderId );
    // Files Set Pagination
    $page2  = ((int) $bit3 === 0) ? 1 : (int) $bit3;
    $limit2 = ((int) $bit4 === 0) ? 30 : (int) $bit4;
    $total2 = self::$registry->getService('drive')->countFilesByFolderId( $folderId );
    // Folder Pagination Data
    self::$registry->getService('pagination')->setPrefix( 'cpanel/my-drive' );
    self::$registry->getService('pagination')->setPage( $page1 );
    self::$registry->getService('pagination')->setLimit( $limit1 );
    self::$registry->getService('pagination')->setTotal( $total1 );
    self::$registry->getService('template')->assign(
      'pagination1',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left', false, $page2, $limit2)
    );
    self::$registry->getService('template')->assign(
      'pagination_info1',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'folderList',
      self::$registry->getService('drive')->folderListByFolderId($folderId, true)
    );
    // Files Pagination Data
    self::$registry->getService('pagination')->setPrefix( 'cpanel/my-drive/'.$page1.'/'.$limit1 );
    self::$registry->getService('pagination')->setPage( $page2 );
    self::$registry->getService('pagination')->setLimit( $limit2 );
    self::$registry->getService('pagination')->setTotal( $total2 );
    self::$registry->getService('template')->assign(
      'pagination2',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left')
    );
    self::$registry->getService('template')->assign(
      'pagination_info2',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'fileList',
      self::$registry->getService('drive')->fileListByFolderId($folderId, true)
    );
    // Temp. vars
    self::$registry->getService('template')->assign(
      'foldersStructure',
      self::$registry->getService('cms')->foldersStructure( $folderId )
    );
    self::$registry->getService('template')->assign('page1',$page1);
    self::$registry->getService('template')->assign('page2',$page2);
    self::$registry->getService('template')->assign('limit1',$limit1);
    self::$registry->getService('template')->assign('limit2',$limit2);
    self::$registry->getService('template')->assign('total1',$total1);
    self::$registry->getService('template')->assign('total2',$total2);
    self::$registry->getService('template')->assign('folderId',$folderId);
    self::$registry->getService('template')->assign('hash','');
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]drive/drive_boxes.tpl");
  }
  
  public function folder( $bit0 = '', $bit1 = 0, $bit2 = 0, $bit3 = 0, $bit4 = 0 )
  {
    if(self::$registry->getService('drive')->isFolderByHash( $bit0 )) {
      $folderId = self::$registry->getService('drive')->folderIdByHash( $bit0 );
      // Folder Set Pagination
      $page1  = ((int) $bit1 === 0) ? 1 : (int) $bit1;
      $limit1 = ((int) $bit2 === 0) ? 30 : (int) $bit2;
      $total1 = self::$registry->getService('drive')->countFoldersByFolderId( $folderId );
      // Files Set Pagination
      $page2  = ((int) $bit3 === 0) ? 1 : (int) $bit3;
      $limit2 = ((int) $bit4 === 0) ? 30 : (int) $bit4;
      $total2 = self::$registry->getService('drive')->countFilesByFolderId( $folderId );
      // Folder Pagination Data
      self::$registry->getService('pagination')->setPrefix( 'cpanel/my-drive-folder/'.$bit0 );
      self::$registry->getService('pagination')->setPage( $page1 );
      self::$registry->getService('pagination')->setLimit( $limit1 );
      self::$registry->getService('pagination')->setTotal( $total1 );
      self::$registry->getService('template')->assign(
        'pagination1',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left', false, $page2, $limit2)
      );
      self::$registry->getService('template')->assign(
        'pagination_info1',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'folderList',
        self::$registry->getService('drive')->folderListByFolderId($folderId, true)
      );
      // Files Pagination Data
      self::$registry->getService('pagination')->setPrefix( 'cpanel/my-drive-folder/'.$bit0.'/'.$page1.'/'.$limit1 );
      self::$registry->getService('pagination')->setPage( $page2 );
      self::$registry->getService('pagination')->setLimit( $limit2 );
      self::$registry->getService('pagination')->setTotal( $total2 );
      self::$registry->getService('template')->assign(
        'pagination2',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left')
      );
      self::$registry->getService('template')->assign(
        'pagination_info2',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'fileList',
        self::$registry->getService('drive')->fileListByFolderId($folderId, true)
      );
      // Temp. vars
      self::$registry->getService('template')->assign(
        'foldersStructure',
        self::$registry->getService('cms')->foldersStructure( $folderId )
      );
      self::$registry->getService('template')->assign('page1',$page1);
      self::$registry->getService('template')->assign('page2',$page2);
      self::$registry->getService('template')->assign('limit1',$limit1);
      self::$registry->getService('template')->assign('limit2',$limit2);
      self::$registry->getService('template')->assign('total1',$total1);
      self::$registry->getService('template')->assign('total2',$total2);
      self::$registry->getService('template')->assign('folderId',$folderId);
      self::$registry->getService('template')->assign('hash',$bit0);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]drive/drive_boxes.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/my-drive'
      );
    }
  }
  
  public function driveList()
  {
    self::$registry->getService('template')->assign(
      'rootFolder',
      self::$registry->getService('drive')->rootFolder()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]drive/drive_root_list.tpl");
  }
  
  public function createFolder()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if(isset($form['folder-name']) && (strlen($form['folder-name']) > 0)) {
      $folderId = (int) self::$registry->getService('cms')->createFolder( $form );

      if(self::$registry->getService('drive')->isFolderById( $folderId )) {
        if((int) $form['is_root'] === 1) {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/my-drive'
          );
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/my-drive-folder/'.self::$registry->getService('drive')->folderHashByFolderId( $form['folder-id'] )
          );
        }
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/page-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'You must enter the file name.',
        null,
        'cpanel/my-drive',
        true
      );
    }
  }
  
  public function uploadFileForm( $isRoot = null, $folderId = 0 )
  {
    if((((int) $isRoot === 0) || ((int) $isRoot === 1)) &&
      self::$registry->getService('drive')->isFolderById($folderId)
    ) {
      $settings = new stdClass();
      $settings->is_root   = (int) $isRoot;
      $settings->folder_id = (int) $folderId;
    
      self::$registry->getService('template')->assign('settings',$settings);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]drive/drive_upload_file_form.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/my-drive'
      );
    }
  }
  
  public function insertFile()
  {
    $form   = self::$registry->getService('irequest')->getPost();
    $userId = (int) self::$registry->getService('cms')->getUser()->id_user; 

    $files_name     = $_FILES['upload-files']['name'];
    $files_tmp_name = $_FILES['upload-files']['tmp_name'];
    $files_type     = $_FILES['upload-files']['type'];
    $files_size     = $_FILES['upload-files']['size'];
    //$files_error    = $_FILES['upload-files']['error'];

    if(count($files_tmp_name) > 0) {
      $files = array();
      $check = array();

      for($i = 0; $i < count($files_tmp_name); $i++) {       
        if(!empty($files_tmp_name[$i])) {
          $folderId = (int) $form['folder-id'];
          $fileHash = self::$registry->getService('hash')->ripemd128(
            self::$registry->getService('helper')->generateRandomString() . 
            $files_name[$i] . 
            self::$registry->getService('helper')->generateRandomString() 
          );
          $fileType = self::$registry->getService('helper')->setFileTypeId( $files_type[$i] );
          $fileExt  = self::$registry->getService('helper')->setFileExt( $files_type[$i] );
          $fileInfo = ($fileType == 1) ? getimagesize( $files_tmp_name[$i] ) : null;

          if(self::$registry->getService('drive')->isFolderById($folderId)) {
            $files[]  = array(
              ':folder_id'    => $folderId,
              ':file_hash'    => $fileHash,
              ':file_name'    => self::$registry->getService('helper')->replaceFileType( $files_name[$i] ),
              ':file_owner'   => $userId,
              ':file_url'     => '/files/'.$fileHash.$fileExt,
              ':file_type_id' => $fileType,
              ':file_ext'     => $fileExt,
              ':file_size'    => $files_size[$i],
              ':file_width'   => (!is_null($fileInfo)) ? $fileInfo[0] : 0,
              ':file_height'  => (!is_null($fileInfo)) ? $fileInfo[1] : 0,
            );
            $check[] = array(
              'file'    => $files_name[$i],
              'control' => move_uploaded_file($files_tmp_name[$i], __UPLOAD_PATH__ . $fileHash . $fileExt)
            );
          }
        }
      }
      foreach($files as $file) {
        self::$registry->getService('drive')->insertFile( $file );
      }
      // UNSET FORM DATA
      unset($_POST);
      unset($_FILES);
      // REDIRECT
      if((int) $folderId === 1)  {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/my-drive'
        );
      } else {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/my-drive-folder/'.self::$registry->getService('drive')->folderHashByFolderId($form['folder-id'])
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
        null,
        'cpanel/my-drive',
        true
      );
    }
  }
  
  public function driveLeftNav()
  {
    self::$registry->getService('template')->assign(
      'leftNav',
      self::$registry->getService('cms')->driveLeftNavTree()
    );
    self::$registry->getService('template')->display("extends:[cpanel]drive/ajax/drive_left_nav.tpl");
  }
  
  public function driveMoveForm()
  {
    self::$registry->getService('template')->assign(
      'moveToForm',
      self::$registry->getService('cms')->moveToDriveFolderForm()
    );
    self::$registry->getService('template')->display("extends:[cpanel]drive/ajax/drive_move_form.tpl");
  }
  
  public function driveSearch()
  {
    $form = self::$registry->getService('irequest')->getPost();
    $data = (isset($form["search"]) && (strlen($form["search"]) > 0)) ? self::$registry->getService('drive')->search( $form["search"] ) : null;
    
    //self::$registry->getService('helper')->dump($data);
    
    self::$registry->getService('template')->assign('folderList',$data->folders);
    self::$registry->getService('template')->assign('fileList',$data->files);
    self::$registry->getService('template')->display("extends:[cpanel]drive/ajax/drive_search.tpl");
  }
  
  public function trash()
  {
    self::$registry->getService('template')->assign(
      'trash',
      self::$registry->getService('drive')->trash()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]drive/drive_trash.tpl");
  }
  
  public function restoreTrash()
  {
    if(self::$registry->getService('cms')->restoreTrash()) {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/my-drive-trash'
      );
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
        null,
        'cpanel/my-drive',
        true
      );
    }
  }
  
  public function deleteTrash()
  {
    if(self::$registry->getService('cms')->deleteTrash()) {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/my-drive-trash'
      );
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
        null,
        'cpanel/my-drive',
        true
      );
    }
  }
  
  public function drive()
  {
    if(self::$registry->getService('irequest')->isPost()) {
      $form = self::$registry->getService('irequest')->getPost();
      
      if(in_array($form["action"], $this->driveActionKeys) && !empty($form["kind"])) {
        $actionKey = array_search($form["action"], $this->driveActionKeys);
        $check     = false;
        
        switch ($actionKey) {
          case 1:
            // move
            $check = self::$registry->getService('cms')->moveItemsOnDrive( $form["kind"] );
            break;
          case 2:
            // add star
            break;
          case 3:
            // change color
            break;
          case 4:
            // remove
            $check = self::$registry->getService('cms')->removeItemsFromDrive( $form["kind"] );
            break;
          case 5:
            // restore
            $check = self::$registry->getService('cms')->restoreItemsFromDrive( $form["kind"] );
            break;
          case 6:
            // delete forever
            $check = self::$registry->getService('cms')->deleteForeverItemsFromDrive( $form["kind"] );
            break;
          case 7:
            // rename
            $check = self::$registry->getService('cms')->renameItemOnDrive( $form["kind"] );
            break;
        }
        self::$registry->getService('json')->push(array(
          'status'  => ($check) ? 200 : 400,
          'message' => ($check) ? 'success' : 'error'
        ));
        self::$registry->getService('json')->renderJSON();
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 400,
          'message' => 'error'
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      $bits = self::$registry->getService('irequest')->getUrlBits();
      
      if(((string) $bits[2] === "reload") && self::$registry->getService('drive')->isFolderById( $bits[3] )) {
        // Folder
        $folderId   = (int) $bits[3];
        $folderHash = self::$registry->getService('drive')->folderHashByFolderId( $bits[3] );
        // Folder Set Pagination
        $page1  = ($bits[4] === 0) ? 1 : $bits[4];
        $limit1 = ((string) $bits[5] === 'all') ? 'all' : (((int) $bits[5] === 0) ? 30 : (int) $bits[5]);
        $total1 = self::$registry->getService('drive')->countFoldersByFolderId( $folderId );
        // Files Set Pagination
        $page2  = ($bits[6] === 0) ? 1 : $bits[6];
        $limit2 = ((string) $bits[7] === 'all') ? 'all' : (((int) $bits[7] === 0) ? 30 : (int) $bits[7]);
        $total2 = self::$registry->getService('drive')->countFilesByFolderId( $folderId );
        // Folder Pagination Data
        self::$registry->getService('pagination')->setPrefix( 'cpanel/my-drive-folder/'.$folderHash );
        self::$registry->getService('pagination')->setPage( $page1 );
        self::$registry->getService('pagination')->setLimit( $limit1 );
        self::$registry->getService('pagination')->setTotal( $total1 );
        self::$registry->getService('template')->assign(
          'pagination1',
          self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left', false, $page2, $limit2)
        );
        self::$registry->getService('template')->assign(
          'pagination_info1',
          self::$registry->getService('pagination')->createInfo()
        );
        self::$registry->getService('template')->assign(
          'folderList',
          self::$registry->getService('drive')->folderListByFolderId($folderId, true)
        );
        // Files Pagination Data
        self::$registry->getService('pagination')->setPrefix( 'cpanel/my-drive-folder/'.$folderHash.'/'.$page1.'/'.$limit1 );
        self::$registry->getService('pagination')->setPage( $page2 );
        self::$registry->getService('pagination')->setLimit( $limit2 );
        self::$registry->getService('pagination')->setTotal( $total2 );
        self::$registry->getService('template')->assign(
          'pagination2',
          self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left')
        );
        self::$registry->getService('template')->assign(
          'pagination_info2',
          self::$registry->getService('pagination')->createInfo()
        );
        self::$registry->getService('template')->assign(
          'fileList',
          self::$registry->getService('drive')->fileListByFolderId($folderId, true)
        );
        // Temp. vars
        self::$registry->getService('template')->assign(
          'foldersStructure',
          self::$registry->getService('cms')->foldersStructure( $folderId )
        );
        self::$registry->getService('template')->assign('page1',$page1);
        self::$registry->getService('template')->assign('page2',$page2);
        self::$registry->getService('template')->assign('limit1',$limit1);
        self::$registry->getService('template')->assign('limit2',$limit2);
        self::$registry->getService('template')->assign('total1',$total1);
        self::$registry->getService('template')->assign('total2',$total2);
        self::$registry->getService('template')->assign('folderId',$folderId);
        self::$registry->getService('template')->assign('hash',$folderHash);
        self::$registry->getService('template')->display("extends:[cpanel]drive/ajax/drive_boxes.tpl");
        exit;
      } else if(((string) $bits[2] === "reload") && ((string) $bits[3] === "trash")) {
        self::$registry->getService('template')->assign(
          'trash',
          self::$registry->getService('drive')->trash()
        );
        self::$registry->getService('template')->display("extends:[cpanel]drive/ajax/drive_trash.tpl");
      } else if((string) $bits[2] === "build-image-register") {
        $imagesList = self::$registry->getService('drive')->CKEditorImagesList();
        $imagesJson = [];
        
        if(!empty($imagesList)) {
          foreach($imagesList as $item) {
            $imagesJson[] = array(
              'image'  => self::$registry->getService('irequest')->getLocation() . '/files/' . $item->file_hash . $item->file_ext,
              'thumb'  => self::$registry->getService('irequest')->getLocation() .'/thumbnail/crop/' . $item->file_hash .'/400/300',
              'folder' => $item->folder_name
            );
          }
        }
        self::$registry->getService('json')->push( $imagesJson );
        self::$registry->getService('json')->renderJSON();
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 400,
          'message' => "Bad Request"
        ));
        self::$registry->getService('json')->renderJSON();
      }
    }
  }
  
  /**
  *
  * SLIDER
  *
  **/
  
  public function sliderList( $bit0 = 0, $bit1 = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('slider')->sliderIdsByKeywords(implode('_',explode(' ',$keywords))) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 10 : (int) $bit1;
    $total = self::$registry->getService('slider')->countSliders($useList);
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/slider-list' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'pageList',
      self::$registry->getService('page')->pageList()
    );
    self::$registry->getService('template')->assign(
      'sliderList',
      self::$registry->getService('slider')->sliderList(true, $useList)
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]slider/slider_list.tpl");
  }
  
  public function createSlider()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      $sliderId = self::$registry->getService('cms')->createSlider($form);
      
      if(self::$registry->getService('slider')->isSliderById( $sliderId )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/slider-images/'.$sliderId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/slider-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/slider-list'
      );
    }
  }
  
  public function sliderImages( $sliderId = 0, $folderHash = '' )
  {
    if(self::$registry->getService('slider')->isSliderById( $sliderId ) &&
       self::$registry->getService('drive')->isFolderByHash( $folderHash ) 
    ) {
      self::$registry->getService('template')->assign('sliderId', $sliderId);
      self::$registry->getService('template')->assign(
        'sliderName', 
        self::$registry->getService('slider')->sliderNameById( $sliderId )
      );
      self::$registry->getService('template')->assign(
        'imageList',
        self::$registry->getService('cms')->sliderImagesList( $sliderId, $folderHash )
      );
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]slider/slider_images.tpl");
    } else if(self::$registry->getService('slider')->isSliderById($sliderId) && (strlen($folderHash) === 0)) {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/slider-images/'.$sliderId.'/'.__DRIVE_ROOT_ID__
      );
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/page-list'
      );
    }
  }
  
  public function insertSliderImages()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->insertImagesToSlider( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/slider-edit/'.$form['slider-id']
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/slider-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/slider-list'
      );
    }
  }
  
  public function sliderEditForm( $sliderId = 0 )
  {
    if(self::$registry->getService('slider')->isSliderById( $sliderId )) {
      self::$registry->getService('template')->assign(
        'data',
        self::$registry->getService('slider')->sliderDataById( $sliderId )
      );
      self::$registry->getService('template')->assign(
        'pageList',
        self::$registry->getService('page')->pageList()
      );
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]slider/slider_edit.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/slider-list'
      );
    }
  }
  
  public function updateSlider()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateSlider($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/slider-edit/'.$form['slider-id']
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/slider-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/slider-list'
      );
    }
  }
  
  public function updateSliders()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateSliders($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/slider-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/slider-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/slider-list'
      );
    }
  }
  
  public function captionsSlider()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((is_array($form) && (count($form) > 0) && isset($form['command'])) && 
      self::$registry->getService('slider')->isSliderById($form['sliderId']) &&
      ((int) $form['itemId'] > 0)
    ) {
      switch((int) $form['command']) {
        // FORM
        case 1:
          self::$registry->getService('template')->assign('sliderId',$form['sliderId']);
          self::$registry->getService('template')->assign('itemId',$form['itemId']);
          self::$registry->getService('template')->assign(
            'captions',
            self::$registry->getService('slider')->sliderCaptionsById($form['sliderId'], $form['itemId'])
          );
          self::$registry->getService('template')->display("extends:[cpanel]slider/ajax/slider_captions_form.tpl");
          break;
        // INSERT
        case 2:
          if(self::$registry->getService('cms')->insertSliderCaptions(
            $form['sliderId'],
            $form['itemId'], 
            $form["captions"] 
          )) {
            self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "Captions has been successfully added."
            ));
            self::$registry->getService('json')->renderJSON();
          } else {
            self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => self::$registry->getService('translator')->translate("global_alert_form_processed_error")
            ));
            self::$registry->getService('json')->renderJSON();
          }
          break;
        default:
          self::$registry->getService('messenger')->alert(
            4,
            '402 ERROR',
            'COMMAND NOT FOUND.'
          );
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }

  /**
  *
  * GALLERY
  *
  **/
  
  public function galleryList( $bit0 = 0, $bit1 = 0, $bit2 = 0, $bit3 = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('gallery')->galleryIdsByKeywords(implode('_',explode(' ',$keywords))) : null;
    // Filter
    $filterA0 = ((int) $bit0 === 0) ? 9 : (int) $bit0;
    $filterA1 = ((int) $bit1 === 0) ? 9 : (int) $bit1;
    // Pagination set
    $page  = ((int) $bit2 === 0) ? 1 : (int) $bit2;
    $limit = ((int) $bit3 === 0) ? 10 : (int) $bit3;
    $total = self::$registry->getService('gallery')->countGalleries( $this->__getGalleryFilterId( $filterA0, $filterA1 ), $useList );
    // Folder Pagination Data
    self::$registry->getService('pagination')->setPrefix( 'cpanel/gallery-list/'.$filterA0.'/'.$filterA1 );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'galleryList',
      self::$registry->getService('gallery')->galleryList(true, $this->__getGalleryFilterId($filterA0, $filterA1), $useList)
    );
    self::$registry->getService('template')->assign(
      'userList',
      self::$registry->getService('users')->userList()
    );
    self::$registry->getService('template')->assign(
      'pageList',
      self::$registry->getService('page')->pageList()
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('filterA0',$filterA0);
    self::$registry->getService('template')->assign('filterA1',$filterA1);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]gallery/gallery_list.tpl");
  }
  
  private function __getGalleryFilterId( $a = 9, $b = 9 )
  {
    $combination = $a.'_'.$b;
    
    switch($combination) {
      case '9_9':
        return 0;
      case '9_1':
        return 4;
      case '9_2':
        return 1;
      case '9_3':
        return 2;
      case '9_4':
        return 3;
      default:
        return 0;
    }
  }
  
  public function createGallery()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0 )) {
      $galleryId = (int) self::$registry->getService('cms')->createGallery( $form );

      if(self::$registry->getService('gallery')->isGalleryById($galleryId)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/gallery-images/'.$galleryId.'/'. __DRIVE_ROOT_ID__
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/gallery-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/gallery-list'
      );
    }
  }
  
  public function galleryImages( $galleryId = 0, $folderHash = '' )
  {
    if(self::$registry->getService('gallery')->isGalleryById($galleryId)) {
      if(self::$registry->getService('drive')->isFolderByHash($folderHash)) {
        self::$registry->getService('template')->assign(
          'galleryName', 
          self::$registry->getService('gallery')->galleryNameById($galleryId)
        );
        self::$registry->getService('template')->assign(
          'gallery',
          self::$registry->getService('cms')->galleryImagesList($galleryId, $folderHash)
        );
        self::$registry->getService('template')->assign('galleryId',$galleryId);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]gallery/gallery_images.tpl"); 
      } else {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/gallery-images/'.$galleryId.'/'. __DRIVE_ROOT_ID__
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/gallery-list'
      );
    }
  }
  
  public function insertGalleryImages()
  {
    $form  = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0) &&
      self::$registry->getService('gallery')->isGalleryById($form["gallery-id"])
    ) {
      if(self::$registry->getService('cms')->insertGalleryImages($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/gallery-edit/'.$form["gallery-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/gallery-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/gallery-list'
      );
    }
  }
  
  public function galleryEditForm( $galleryId = 0 )
  {
    if(self::$registry->getService('gallery')->isGalleryById($galleryId)) {
      $articleId = (self::$registry->getService('store')->haveArticleGalleryById( $galleryId )) ? self::$registry->getService('store')->articleIdByGalleryId( $galleryId ) : 0;

      self::$registry->getService('template')->assign(
        'userList',
        self::$registry->getService('users')->userList()
      );
      self::$registry->getService('template')->assign(
        'pageList',
        self::$registry->getService('page')->pageList()
      );
      self::$registry->getService('template')->assign(
        'gallery',
        self::$registry->getService('gallery')->galleryById($galleryId)
      );
      self::$registry->getService('template')->assign('articleId',$articleId);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]gallery/gallery_edit.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(301,'cpanel/gallery');
    }
  }
  
  public function updateGallery()
  {
    $form  = self::$registry->getService('irequest')->getPost();

    if(self::$registry->getService('gallery')->isGalleryById($form["gallery-id"])) { 
      if(self::$registry->getService('cms')->updateGallery($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/gallery-edit/'.$form["gallery-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/gallery-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/gallery-list'
      );
    }
  }
  
  public function updateGalleries()
  {
    $form  = self::$registry->getService('irequest')->getPost();
          
    if(is_array($form) && (count($form) > 0)) {
        if(self::$registry->getService('cms')->updateGalleries($form)) {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/gallery-list'
          );
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
            null,
            'cpanel/gallery-list',
            true
          );
        }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/gallery-list'
      );
    }
  }
  
  public function captionsGallery()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((is_array($form) && (count($form) > 0) && isset($form['command'])) && 
      self::$registry->getService('gallery')->isGalleryById($form['galleryId']) &&
      ((int) $form['imageId'] > 0)
    ) {
      switch((int) $form['command']) {
        // FORM
        case 1:
          self::$registry->getService('template')->assign('galleryId',$form['galleryId']);
          self::$registry->getService('template')->assign('imageId',$form['imageId']);
          self::$registry->getService('template')->assign(
            'captions',
            self::$registry->getService('gallery')->galleryCaptionsById($form['galleryId'], $form['imageId'])
          );
          self::$registry->getService('template')->display("extends:[cpanel]gallery/ajax/gallery_captions_form.tpl");
          break;
        // INSERT
        case 2:
          if(self::$registry->getService('cms')->insertGalleryCaptions(
            $form['galleryId'],
            $form['imageId'], 
            $form["captions"] 
          )) {
            self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "Captions has been successfully added."
            ));
            self::$registry->getService('json')->renderJSON();
          } else {
            self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => self::$registry->getService('translator')->translate("global_alert_form_processed_error")
            ));
            self::$registry->getService('json')->renderJSON();
          }
          break;
        default:
          self::$registry->getService('messenger')->alert(
            4,
            '402 ERROR',
            'COMMAND NOT FOUND.'
          );
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  /**
  *
  * FORMS
  *
  **/
  
  public function formList( $bit0 = 0, $bit1 = 0 )
  {
    // Pagination set
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 10 : (int) $bit1;
    $total = self::$registry->getService('form')->countForms();
    // Folder Pagination Data
    self::$registry->getService('pagination')->setPrefix( 'cpanel/form-list' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5)
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    // temp. vars
    self::$registry->getService('template')->assign(
      'formList',
      self::$registry->getService('form')->formList(true)
    );
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]form/form_list.tpl");
  }
  
  
  public function createForm()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if(isset($form["form-name"]) && (strlen($form["form-name"]) > 0)) {
      $formHash = self::$registry->getService('cms')->createForm( $form );

      if(((bool) $formHash !== false) && self::$registry->getService('form')->isFormByHash( $formHash )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/form-builder/'.$formHash
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/form-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'FORM NAME IS REQUIRED.',
        null,
        'cpanel/form-list',
        false
      );
    }
  }
  
  public function formBuilder( $formHash = '' )
  {
    $formId = self::$registry->getService('form')->formIdByHash($formHash);
    
    if(self::$registry->getService('form')->isFormById($formId)) {
      self::$registry->getService('template')->assign('formId',$formId);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]form/form_builder.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/form-list'
      );
    }
  }
  
  public function addRowToForm()
  {
    $formId = (int) self::$registry->getService('irequest')->getPost()["formId"];
          
    if(self::$registry->getService('form')->isFormById( $formId )) {

    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 400,
        'message' => "FORM NOT FOUND"
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  public function updateForms()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateFormList($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/form-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/form-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/form-list'
      );
    }
  }
  
  /**
  *
  * LANGUAGES
  *
  **/
  
  public function languageList( $bit0 = 0, $bit1 = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList = (strlen($keywords) >= 3) ? self::$registry->getService('languages')->languageIdsByKeywords(implode('_',explode(' ',$keywords))) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 10 : (int) $bit1;
    $total = self::$registry->getService('languages')->countLanguages($useList);
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/language-list' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'languageList',
      self::$registry->getService('languages')->languageList(true, $useList)
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]languages/languages_list.tpl");
  }
  
  public function updateLanguages()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if(is_array($form['languageList']) && (count($form['languageList']) > 0)) {
      if(self::$registry->getService('cms')->updateLanguages($form['languageList'])) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/language-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/language-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/language-list',
        true
      );
    }
  }
  
  /**
  *
  * DICTIONARY
  *
  **/
  
  public function dictionaryList( $bit0 = 0, $bit1 = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList = (strlen($keywords) >= 3) ? self::$registry->getService('dictionary')->itemIdsByKeywords(implode('_',explode(' ',$keywords))) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 20 : (int) $bit1;
    $total = self::$registry->getService('dictionary')->countItems($useList);
    // Folder Pagination Data
    self::$registry->getService('pagination')->setPrefix( 'cpanel/dictionary-list' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    // temp. vars
    self::$registry->getService('template')->assign(
      'dictionary',
      self::$registry->getService('dictionary')->itemList(true, $useList)
    );
    self::$registry->getService('template')->assign(
      'languageList',
      self::$registry->getService('languages')->languageList()
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]dictionary/dictionary_list.tpl");
  }
  
  public function createDictionaryItem()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->createDictionaryItem($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/dictionary-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/dictionary-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/dictionary-list',
        true
      );
    }
  }
  
  public function updateDictionaryItems()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateDictionaryItems($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/dictionary-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/dictionary-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/dictionary-list',
        true
      );
    }
  }
  
  /**
  *
  * SEO REDIRECT
  *
  **/
  
  public function seoRedirectList( $bit0 = 0, $bit1 = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList = (strlen($keywords) >= 3) ? self::$registry->getService('router')->redirectIdsByKeywords(implode('_',explode(' ',$keywords))) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 10 : (int) $bit1;
    $total = self::$registry->getService('router')->countSeoRedirect($useList);
    // Pagination
    self::$registry->getService('pagination')->setPrefix( 'cpanel/seo-redirect-list' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    // Temp. vars
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5,'pagination pagination-sm pull-right',false,null,null,('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
     self::$registry->getService('template')->assign(
      'redirectList',
      self::$registry->getService('router')->seoRedirectList(true, $useList)
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]seo/redirect_list.tpl");
  }
  
  public function createSeoRedirect()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if(is_array($form) && (count($form))) {
      if(self::$registry->getService('cms')->createSeoRedirect( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          ((strlen((string) $form["rewrite"]) > 0) ? $form["rewrite"] : 'cpanel/seo-redirect-list')
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/seo-redirect-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/seo-redirect-list'
      );
    }
  }

  public function updateSeoRedirectList()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if(is_array($form) && (count($form) > 0)) {
      if(self::$registry->getService('cms')->updateSeoRedirectList($form)) {
        self::$registry->getService('irequest')->movePage(
          301,
          ((strlen((string) $form["rewrite"]) > 0) ? $form["rewrite"] : 'cpanel/seo-redirect-list')
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/seo-redirect-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/seo-redirect-list'
      );
    }
  }
  
  /**
  *
  * GENERAL SETTINGS
  *
  **/
  
  public function generalSettingsForms()
  {
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]general_settings/settings.tpl");
  }
  
  
  
  
  public function generalSettingsE( $action = null )
  {
    switch( is_null( $action ) ? '' : $action ) {
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          if(self::$registry->getService('cms')->updateGeneralSettings(
            self::$registry->getService('irequest')->getPost()
          )) {
            self::$registry->getService('irequest')->movePage(301,'cpanel/general-settings');
          } else {
            self::$registry->getService('messenger')->display(4,'ERROR','An error occurred while processing this form please contact your system administrator.',null,'cpanel/general-settings',true);
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/general-settings');
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'data',
          self::$registry->getService('cms')->getGeneralSettings()
        );
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]general_settings/settings.tpl");
        break;
    }
  }
  
  /*************************************************************************************************************************************************************
  *
  * ADMINISTRATOR
  *
  *************************************************************************************************************************************************************/
  
  /**
  *
  * ACTIVITY TIMELINE
  *
  **/
  
  public function activityTimeLine()
  {
    self::$registry->getService('template')->assign(
      'timeline',
      self::$registry->getService('activity')->activityTimeLine()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]activity_timeline/timeline.tpl");
  }
  
  /**
  *
  * ROUTER
  *
  **/
  
  public function router( $page = 0, $limit = 0, $filter = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('router')->routeIdsByKeywords(implode('_',explode(' ',$keywords))) : null;
    // PAGINATION VARS
    $page  = ((int) $page === 0) ? 1 : (int)  $page;
    $limit = (((int) $limit >= 10) && ((int)  $limit <= 500)) ? (int) $limit : 10;
    $total = self::$registry->getService('router')->countRoutes( $filter, $useList );
    // INIT PAGATINATION
    self::$registry->getService('pagination')->setPrefix( 'cpanel/router' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    // TEMP. VARS
    
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, $filter, 1, ('?q='.$keywords))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'routeList',
      self::$registry->getService('router')->routeList(true, $filter, $useList)
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('filter',$filter);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]router/router_list.tpl");
  }
  
  public function updateRouteList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(is_array($form["routeList"]) && (count($form["routeList"]) > 0)) {
      $status = [];
      
      foreach($form["routeList"] as $value) {
        if(self::$registry->getService('router')->isRouteById($value["'route-id'"])) {
          if(isset($value["'remove'"])) {
            $status[] = self::$registry->getService('irouter')->deleteRouteById($value["'route-id'"]);
          } else {
            $status[] = self::$registry->getService('router')->updateRouteById(array(
              'active' => isset($value["'active'"]) ? 1 : 0
            ),$value["'route-id'"]);
          }
        }
      }
      if(self::$registry->getService('helper')->checkStatus($status)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/router'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/router',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/router'
      );
    }
  }
  
  public function routerForms()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['formId']) && (strlen($form['formId']) > 0)) {
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'controllerList',
        self::$registry->getService('dispatcher')->getControllerList()
      );
      // TEMPLATE
      switch((int) $form['formId']) {
        case 1:
          self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_direct_form.tpl");
          break;
        case 2:
          self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_rewrite_form.tpl");
          break;
        case 3:
          self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_redirect_form.tpl");
          break;
        case 4:
          self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_forward_form.tpl");
          break;
        case 5:
          self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_key_form.tpl");
          break;
        case 6:
          self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_schema_form.tpl");
          break;
        default:
          self::$registry->getService('messenger')->alert(
            4,
            '401 BAD REQUEST',
            'ERROR: FORM NOT FOUND.'
          );
          break;
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function routerClassMethods()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['index']) && (strlen($form['index']) > 0)) {
      $controllerList = self::$registry->getService('dispatcher')->getControllerList();

      if(array_key_exists($form['index'], $controllerList)) {
        self::$registry->setController(
          __APP_DIR__ . $controllerList[ $form['index'] ]['path'],
          $controllerList[ $form['index'] ]['classname']
        );
        self::$registry->getService('template')->assign(
          'methodList',
          get_class_methods( self::$registry->getController() )
        );
        self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_class_method_list.tpl");
      } else {
        self::$registry->getService('messenger')->alert(
          4,
          '500 INTERNAL SERVER ERROR',
          'ERROR: CORE FATAL ERROR.'
        );
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function addSchemaBitRow( $form = null )
  {
    if(self::$registry->getService('irequest')->isPost()) {
      self::$registry->getService('template')->assign('form',self::$registry->getService('irequest')->getPost());
      self::$registry->getService('template')->display("extends:[cpanel]router/ajax/route_schema_bit_row.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function createRoute( $form = null )
  {
    $form = self::$registry->getService('irequest')->getPost();
      
    if(is_array($form) && (count($form) > 0)) {
      if(isset($form['rule-id']) && (((int) $form['rule-id'] >= 1) && ((int) $form['rule-id'] <= 6))) {
        if(isset($form['rm-id']) && (((int) $form['rm-id'] >= 1) && ((int) $form['rm-id'] <= 4))) {
          switch((int) $form['rule-id']) {
            case 1:
              $this->__addDirectRoute( $form );
              break;
            case 2:
              $this->__addRewriteRoute( $form );
              break;
            case 3:
              $this->__addRedirectRoute( $form );
              break;
            case 4:
              $this->__addForwardRoute( $form );
              break;
            case 5:
              $this->__addKeyRoute( $form );
              break;
            case 6:
              $this->__addSchemaRoute( $form );
              break;
          }
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            'REQUEST METHOD NOT DEFINED.',
            null,
            'cpanel/router'
          );
        }
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          'RULE NOT DEFINED.',
          null,
          'cpanel/router'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/router'
      );
    }
  }
  
  private function __addDirectRoute( $form = null )
  {
    $errs = [];
    
    if(!strlen($form['bit-0']) > 0) {
      $errs[] = "BIT-0 NOT DEFINED.";
    }
    if(!strlen($form['bit-1']) > 0) {
      $errs[] = "BIT-1 NOT DEFINED.";
    }
    if(!strlen($form['ctrl']) > 0) {
      $errs[] = "CONTROLLER NOT DEFINED.";
    }
    if(!strlen($form['mth']) > 0) {
      $errs[] = "METHOD NOT DEFINED.";
    }
    if(count($errs) === 0) {
      $object = (object) array(
        'rule'   => 1,
        'rm'     => (int) $form['rm-id'],
        'ctrl'   => $form['ctrl'],
        'mth'    => $form['mth'],
        'direction' => array(str_replace(',','-',$form['bit-0']),str_replace(',','-',$form['bit-1']))
      );
      if(self::$registry->getService('irouter')->addRoute($object)) {
        self::$registry->getService('messenger')->display(
          1,
          'SUCCESS',
          'Route has been added successfully.',
          null,
          'cpanel/router',
          true
        );
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'Path already exists.',
          $errs,
          'cpanel/router'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The following errors occurred.',
        $errs,
        'cpanel/router'
      );
    }
  }
  
  private function __addRewriteRoute( $form = null )
  {
    $errs = [];
    
    if(!strlen($form['bit-0']) > 0) {
      $errs[] = "BIT-0 NOT DEFINED.";
    }
    if(!strlen($form['bit-1']) > 0) {
      $errs[] = "BIT-1 NOT DEFINED.";
    }
    if(!strlen($form['ctrl']) > 0) {
      $errs[] = "CONTROLLER NOT DEFINED.";
    }
    if(!strlen($form['mth']) > 0) {
      $errs[] = "METHOD NOT DEFINED.";
    }
    if(count($errs) === 0) {
      $object = (object) array(
        'rule'   => 2,
        'rm'     => (int) $form['rm-id'],
        'ctrl'   => $form['ctrl'],
        'mth'    => $form['mth'],
        'direction' => array(str_replace(',','-',$form['bit-0']),str_replace(',','-',$form['bit-1']))
      );
      if(self::$registry->getService('irouter')->addRoute($object)) {
        self::$registry->getService('messenger')->display(
          1,
          'SUCCESS',
          'Route has been added successfully.',
          null,
          'cpanel/router',
          true
        );
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'Path already exists.',
          $errs,
          'cpanel/router'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The following errors occurred.',
        $errs,
        'cpanel/router'
      );
    }
  }
  
  private function __addRedirectRoute( $form = null )
  {
    $errs = [];
    
    if(!strlen($form['bit-0']) > 0) {
      $errs[] = "BIT-0 NOT DEFINED.";
    }
    if(!strlen($form['bit-1']) > 0) {
      $errs[] = "BIT-1 NOT DEFINED.";
    }
    if(!strlen($form['rw-url']) > 0) {
      $errs[] = "REDIRECT URL NOT DEFINED.";
    }
    if(count($errs) === 0) {
      $object = (object) array(
        'rule'   => 3,
        'rm'     => (int) $form['rm-id'],
        'rw_url' => $form['rw-url'],
        'direction' => array(str_replace(',','-',$form['bit-0']),str_replace(',','-',$form['bit-1']))
      );
      if(self::$registry->getService('irouter')->addRoute($object)) {
        self::$registry->getService('messenger')->display(
          1,
          'SUCCESS',
          'Route has been added successfully.',
          null,
          'cpanel/router',
          true
        );
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'Path already exists.',
          $errs,
          'cpanel/router'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The following errors occurred.',
        $errs,
        'cpanel/router'
      );
    }
  }
  
  private function __addForwardRoute( $form = null )
  {
    $errs = [];
    
    if(!strlen($form['bit-0']) > 0) {
      $errs[] = "BIT-0 NOT DEFINED.";
    }
    if(!strlen($form['bit-1']) > 0) {
      $errs[] = "BIT-1 NOT DEFINED.";
    }
    if(!strlen($form['rw-url']) > 0) {
      $errs[] = "REDIRECT URL NOT DEFINED.";
    }
    if(count($errs) === 0) {
      $object = (object) array(
        'rule'   => 4,
        'rm'     => (int) $form['rm-id'],
        'rw_url' => $form['rw-url'],
        'direction' => array(str_replace(',','-',$form['bit-0']),str_replace(',','-',$form['bit-1']))
      );
      if(self::$registry->getService('irouter')->addRoute($object)) {
        self::$registry->getService('messenger')->display(
          1,
          'SUCCESS',
          'Route has been added successfully.',
          null,
          'cpanel/router',
          true
        );
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'Path already exists.',
          $errs,
          'cpanel/router'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The following errors occurred.',
        $errs,
        'cpanel/router'
      );
    }
  }
  
  private function __addKeyRoute( $form = null )
  {
    $errs = [];
    
    if(!strlen($form['key']) > 0) {
      $errs[] = "KEY NOT DEFINED.";
    }
    if(!strlen($form['ctrl']) > 0) {
      $errs[] = "CONTROLLER NOT DEFINED.";
    }
    if(!strlen($form['mth']) > 0) {
      $errs[] = "METHOD NOT DEFINED.";
    }
    if(count($errs) === 0) {
      $object = (object) array(
        'rule' => 5,
        'rm'   => (int) $form['rm-id'],
        'ctrl' => $form['ctrl'],
        'mth'  => $form['mth'],
        'key'  => str_replace(',','-',$form['key']),
      );
      if(self::$registry->getService('irouter')->addRoute($object)) {
        self::$registry->getService('messenger')->display(
          1,
          'SUCCESS',
          'Route has been added successfully.',
          null,
          'cpanel/router',
          true
        );
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'Path already exists.',
          $errs,
          'cpanel/router'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The following errors occurred.',
        $errs,
        'cpanel/router'
      );
    }
  }
  
  private function __addSchemaRoute( $form = null )
  {
    $errs = [];
   
    if(!strlen($form['ctrl']) > 0) {
      $errs[] = "CONTROLLER NOT DEFINED.";
    }
    if(!strlen($form['mth']) > 0) {
      $errs[] = "METHOD NOT DEFINED.";
    }
    if(is_array($form['schema']) && (count($form['schema']) === 0)) {
      $errs[] = "SCHEMA NOT FOUND.";
    } else {
      foreach($form['schema'] as $value) {
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'value'"])) && (((int) $value["'filter'"] === 0) && (strlen($value["'value'"]) === 0))) {
          $errs[] = "BIT BAD DEFINED. VALUE MUST BE ENTERED.";
        }
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'value'"])) && (((int) $value["'filter'"] === 1) && !is_int((int) $value["'value'"]))) {
          $errs[] = "BIT BAD DEFINED. VALUE MUST BE INTEGER NUMBER.";
        }
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'value'"])) && (((int) $value["'filter'"] === 2) && !is_float((float) $value["'value'"]) )) {
          $errs[] = "BIT BAD DEFINED. VALUE MUST BE FLOAT NUMBER.";
        }
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'value'"])) && (((int) $value["'filter'"] === 3) && !is_numeric($value["'value'"]) )) {
          $errs[] = "BIT BAD DEFINED. VALUE MUST BE NUMBER.";
        }
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'value'"])) && (((int) $value["'filter'"] === 4) && !is_string($value["'value'"]) )) {
          $errs[] = "BIT BAD DEFINED. VALUE MUST BE STRING.";
        }
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'date'"])) && (((int) $value["'filter'"] === 5) && !self::$registry->getService('helper')->validateDate($value["'date'"], 'd-m-Y'))) {
          $errs[] = "BIT BAD DEFINED. VALUE MUST BE DATE.";
        }
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'value'"])) && (((int) $value["'filter'"] === 6) && !self::$registry->getService('helper')->isEmail($value["'value'"]))) {
          $errs[] = "BIT BAD DEFINED. VALUE MUST BE EMAIL.";
        }
        if((isset($value["'type'"]) && isset($value["'filter'"]) && isset($value["'key'"])) && (((int) $value["'filter'"] === 7) && (strlen($value["'key'"]) === 0))) {
          $errs[] = "BIT BAD DEFINED. KEY MUST BE ENTERED.";
        }
      }
    }
    if(count($errs) === 0) {
      $schema = [];
      
      foreach($form['schema'] as $value) {
        $schema[] = (object) array(
          'type'   => (int) $value["'type'"],
          'filter' => (isset($value["'key'"])) ? 7 : (int) $value["'filter'"],
          'value'  => (isset($value["'value'"])) ? $value["'value'"] : ((isset($value["'date'"])) ? $value["'date'"] : str_replace(',','-',$value["'key'"]))
        );
      }
      $object = (object) array(
        'rule'   => 6,
        'rm'     => (int) $form['rm-id'],
        'ctrl'   => $form['ctrl'],
        'mth'    => $form['mth'],
        'schema' => $schema,
      );
      if(self::$registry->getService('irouter')->addRoute($object)) {
        self::$registry->getService('messenger')->display(
          1,
          'SUCCESS',
          'Route has been added successfully.',
          null,
          'cpanel/router',
          true
        );
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'Path already exists.',
          $errs,
          'cpanel/router'
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The following errors occurred.',
        $errs,
        'cpanel/router'
      );
    }
  }
  
  public function routerApi()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['command'])) 
    {
      switch((int) $form['command']) 
      {
        // CHECK IF KEY IS USED
        case 1:
          $this->__isRouteByKey( $form );
          break;
        // CHECK IF SCHEMA IS USED
        case 2:
          $this->__isRouteBySchema( $form );
          break;
        // CREATE ROUTE BY RULE KEY
        case 3:
          $this->__createKeyRoute( $form );
          break;
        // CHANGE KEY ROUTE
        case 4:
          $this->__changeKeyRoute( $form );
          break;
        // CREATE P-SCHEMA
        case 5:
          $this->__createPSchemaRoute( $form );
          break;
        // USE REDIRECT
        case 6:
          $this->__useRedirect( $form );
          break;
        // DELETE ROUTE
        case 7:
          $this->__deleteRouteByObjectId( $form );
          break;
        // DELETE REDIRECT
        case 8:
          $this->__deleteRedirect( $form );
          break;
        // RELOAD ROUTER FORM
        case 9:
          $this->__routerFormByObjectId( $form );
          break;
        default:
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "ERROR: COMMAND NOT FOUND."
          ));
          self::$registry->getService('json')->renderJSON();
          break;
      }
    } 
    else 
    {
      self::$registry->getService('json')->push(array(
        'status'  => 400,
        'message' => "Bad Request"
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __isRouteByKey( $form = null )
  {
    if(isset($form['key']) && (strlen($form['key']) > 0)) {
      if((isset($form['routeId']) && ((int) $form['routeId'] !== 0)) && ((int) self::$registry->getService('router')->routeById($form['routeId'])->id_rule === 6)) {
        if((string) self::$registry->getService('router')->schemaKeyById($form['routeId']) !== (string) str_replace(',','-',$form['key'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "Direction is not used."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 400,
            'message' => "Direction already exists."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
          if(!self::$registry->getService('router')->isRouteByKey( array(str_replace(',','-',$form['key'])) )) {
            self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "Direction is not used."
            ));
            self::$registry->getService('json')->renderJSON();
          } else {
            self::$registry->getService('json')->push(array(
              'status'  => 400,
              'message' => "Direction already exists."
            ));
            self::$registry->getService('json')->renderJSON();
          }
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "ERROR: KEY NOT DEFINED."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __isRouteBySchema( $form = null )
  {
    if((isset($form['routeId']) && self::$registry->getService('router')->isRouteById($form['routeId'])) && (isset($form['key']) && (strlen($form['key']) > 0))) 
    {
      $key   = ((int) self::$registry->getService('router')->routeById($form['routeId'])->id_rule === 6) ? self::$registry->getService('router')->schemaKeyById($form['routeId']) : self::$registry->getService('router')->routeKeyById($form['routeId']);
      $path  = str_replace(',','/',$form['key']).'/'.$key;
      $digit = self::$registry->getService('irouter')->digit( $path );
      
      if(!self::$registry->getService('router')->isRouteByDigit(1, $digit, true, $path)) 
      {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => "Direction is not used."
        ));
        self::$registry->getService('json')->renderJSON();
      } 
      else 
      {
        self::$registry->getService('json')->push(array(
          'status'  => 400,
          'message' => "Direction already exists."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } 
    else 
    {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "ERROR: PREFIX NOT DEFINED."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __createKeyRoute( $form = null )
  {
    if(isset($form['objectTypeId']) && isset($form['objectId']) && isset($form['langId']) && isset($form['key']) && (strlen($form['key']) > 0)) {
      if(self::$registry->getService('languages')->isLangById($form['langId'])) {
        switch((int) $form['objectTypeId']) {
          // PAGE
          case 1:
            $this->__insertRouteToPage($form);
            break;
          // PAGE LIST
          case 2:
            $this->__insertRouteToPageList($form);
            break;
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
            break;
          // STORE CATEGORY
          case 8:
            $this->__insertRouteToStoreCategory($form);
            break;
          // STORE ATTRIBUTE
          case 9:
            $this->__insertRouteToStoreAttribute($form);
            break;
          // STORE ATTRIBUTE VALUE
          case 10:
            $this->__insertRouteToStoreAttributeValue($form);
            break;
          // STORE ARTICLE
          case 11:
            $this->__insertRouteToStoreArticle($form);
            break;
          // STORE DISCOUNT CIRCUIT
          case 12:
            $this->__insertRouteToStoreDiscountCircuit($form);
            break;
          default:
            self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "The object is not supported."
            ));
            self::$registry->getService('json')->renderJSON();
            break;
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Language is not supported."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __changeKeyRoute( $form = null )
  {
    if((isset($form['objectTypeId']) && isset($form['objectId']) && isset($form['routeId']) && isset($form['langId']) && isset($form['key'])) && 
      (isset($form['key']) && (strlen($form['key']) > 0))
    ) {
      if(self::$registry->getService('languages')->isLangById($form['langId'])) {
        if(self::$registry->getService('router')->isRouteById( $form['routeId'] )) {
          $routeTypeId = (int) self::$registry->getService('router')->routeById( $form['routeId'] )->id_rule;

          switch($routeTypeId) {
            case 6:
              $params = self::$registry->getService('router')->schemaBitsById( $form['routeId'] );
              $schema = [];
              // CREATE SCHEMA OBJECT
              foreach($params as $param) {
                if((int) $param->id_filter === 0) {
                  $schema[] = (object) array(
                    'type'   => 1,
                    'filter' => 0,
                    'value'  => (string) $param->value
                  );
                }
              }
              $schema[] = (object) array(
                'type'   => 3,
                'filter' => 7,
                'value'  => str_replace(',','-',$form['key'])
              );
              $object = (object) array(
                'rule'   => 6,
                'rm'     => 1,
                'ctrl'   => $this->__setRouteCtrlByObjectTypeId( $form['objectTypeId'] ),
                'mth'    => $this->__setRouteMthByObjectTypeId( $form['objectTypeId'] ),
                'schema' => $schema,
              );
              $routeId = self::$registry->getService('irouter')->addRoute($object);

              if(self::$registry->getService('router')->isRouteById($routeId)) {
                $redirectId = self::$registry->getService('router')->insertRedirect(array(
                  ':id_object'      => (int) $form['objectId'],
                  ':id_object_type' => (int) $form['objectTypeId'],
                  ':id_lang'        => (int) $form['langId'],
                  ':id_route'       => (int) $form['routeId']
                ));
                if(self::$registry->getService('router')->isRedirectById($redirectId)) {
                  $this->__updateRouteIdByObjectId($routeId, $form);
                } else {
                  self::$registry->getService('json')->push(array(
                    'status'  => 401,
                    'message' => "System error occurred redirect object has been created."
                  ));
                  self::$registry->getService('json')->renderJSON();
                }
              } else {
                self::$registry->getService('json')->push(array(
                  'status'  => 401,
                  'message' => "System error occurred schema object has been created."
                ));
                self::$registry->getService('json')->renderJSON();
              }
              break;
            case 5:
              $redirectId = self::$registry->getService('router')->insertRedirect(array(
                ':id_object'      => (int) $form['objectId'],
                ':id_object_type' => (int) $form['objectTypeId'],
                ':id_lang'        => (int) $form['langId'],
                ':id_route'       => (int) $form['routeId']
              ));
              if(self::$registry->getService('router')->isRedirectById($redirectId)) {
                $this->__insertRouteIdByObjectId( $form );
              } else {
                self::$registry->getService('json')->push(array(
                  'status'  => 401,
                  'message' => "System error occurred redirect object has been created."
                ));
                self::$registry->getService('json')->renderJSON();
              }
              break;
            default:
              self::$registry->getService('json')->push(array(
                'status'  => 401,
                'message' => "DIRECTION NOT FOUND."
              ));
              self::$registry->getService('json')->renderJSON();
              break;
          }
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "DIRECTION NOT FOUND."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Language is not supported."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }

  private function __createPSchemaRoute( $form = null )
  {
    if((isset($form['objectTypeId']) && isset($form['objectId']) && isset($form['routeId']) && isset($form['langId'])) &&
      (isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('router')->isRouteById( $form['routeId'] )
    ) {
      if(self::$registry->getService('languages')->isLangById($form['langId'])) {
        $key  = ((int) self::$registry->getService('router')->routeById($form['routeId'])->id_rule === 6) ? self::$registry->getService('router')->schemaKeyById($form['routeId']) : self::$registry->getService('router')->routeKeyById($form['routeId']);
        $bits = explode(',',$form['key']);
        $schema = [];
        // CREATE SCHEMA OBJECT
        foreach($bits as $bit) {
          $schema[] = (object) array(
            'type'   => 1,
            'filter' => 0,
            'value'  => (string) $bit
          );
        }
        $schema[] = (object) array(
          'type'   => 3,
          'filter' => 7,
          'value'  => (string) $key
        );
        $object = (object) array(
          'rule'   => 6,
          'rm'     => 1,
          'ctrl'   => $this->__setRouteCtrlByObjectTypeId( $form['objectTypeId'] ),
          'mth'    => $this->__setRouteMthByObjectTypeId( $form['objectTypeId'] ),
          'schema' => $schema,
        );
        $routeId = self::$registry->getService('irouter')->addRoute($object);
        
        if(self::$registry->getService('router')->isRouteById($routeId)) {
          $redirectId = self::$registry->getService('router')->insertRedirect(array(
            ':id_object'      => (int) $form['objectId'],
            ':id_object_type' => (int) $form['objectTypeId'],
            ':id_lang'        => (int) $form['langId'],
            ':id_route'       => (int) $form['routeId']
          ));
          if(self::$registry->getService('router')->isRedirectById($redirectId)) {
            $this->__updateRouteIdByObjectId($routeId, $form);
          } else {
            self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "System error occurred redirect object has been created."
            ));
            self::$registry->getService('json')->renderJSON();
          }
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "System error occurred schema object has been created."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Language is not supported."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __useRedirect( $form = null )
  {
    if((isset($form['objectTypeId']) && isset($form['objectId']) && isset($form['redirectId']) && isset($form['routeId']) && isset($form['langId'])) &&
      (((int) $form['routeId'] === 0) || self::$registry->getService('router')->isRouteById( $form['routeId'] )) &&
      self::$registry->getService('router')->isRedirectById( $form['redirectId'] )
    ) {
      if(self::$registry->getService('languages')->isLangById($form['langId'])) {
        $redirectId = 0;
        
        if((int) $form['routeId'] > 0) {
          $redirectId = self::$registry->getService('router')->insertRedirect(array(
            ':id_object'      => (int) $form['objectId'],
            ':id_object_type' => (int) $form['objectTypeId'],
            ':id_lang'        => (int) $form['langId'],
            ':id_route'       => (int) $form['routeId']
          ));
        }
        if(((int) $form['routeId'] === 0) || self::$registry->getService('router')->isRedirectById($redirectId)) {
          $routeId = self::$registry->getService('router')->routeIdByRedirectId( $form['redirectId'] );
          
          if(self::$registry->getService('router')->deleteRedirect( $form['redirectId'] )) {
            $this->__updateRouteIdByObjectId($routeId, $form);
          } else {
            self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "When updating the page system error has occurred."
            ));
            self::$registry->getService('json')->renderJSON();
          }
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "System error occurred redirect object has been created."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Language is not supported."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __deleteRouteByObjectId( $form = null )
  {
    if((isset($form['objectTypeId']) && isset($form['objectId']) && isset($form['routeId']) && isset($form['langId'])) && 
      self::$registry->getService('router')->isRouteById( $form['routeId'] )
    ) {
      if(self::$registry->getService('languages')->isLangById($form['langId'])) {
        switch((int) $form['objectTypeId']) {
          // PAGE
          case 1:
            $this->__deleteRouteFromPage( $form );
            break;
          // PAGE LIST
          case 2:
            $this->__deleteRouteFromPageList( $form );
            break;
          case 3:
          case 4:
          case 5:
          case 6:
          case 7:
            break;
          // STORE CATEGORY
          case 8:
            $this->__deleteRouteFromStoreCategory( $form );
            break;
          // STORE ATTRIBUTE
          case 9:
            $this->__deleteRouteFromStoreAttribute( $form );
            break;
          // STORE ATTRIBUTE VALUE
          case 10:
            $this->__deleteRouteFromStoreAttributeValue( $form );
            break;
          // STORE ARTICLE
          case 11:
            $this->__deleteRouteFromStoreArticle( $form );
            break;
          // STORE DISCOUNT CIRCUIT
          case 12:
            $this->__deleteRouteFromStoreDiscountCircuit( $form );
            break;
          default:
            self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "The object is not supported."
            ));
            self::$registry->getService('json')->renderJSON();
            break;
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Language is not supported."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  public function __deleteRedirect( $form = null )
  {
    if((isset($form['objectTypeId']) && isset($form['objectId']) && isset($form['redirectId'])) && 
      self::$registry->getService('router')->isRedirectById( $form['redirectId'] )
    ) {
      $routeId = self::$registry->getService('router')->routeIdByRedirectId( $form['redirectId'] );
      
      if(self::$registry->getService('router')->deleteRedirect( $form['redirectId'] ) &&
         self::$registry->getService('irouter')->deleteRouteById( $routeId )
      ) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => "The redirect was successfully deleted."
        ));
        self::$registry->getService('json')->renderJSON();
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When updating the page system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __routerFormByObjectId( $form = null )
  {
    if(isset($form['objectTypeId']) && isset($form['objectId'])) {
      switch((int) $form['objectTypeId']) {
        // PAGE
        case 1:
          if(self::$registry->getService('page')->isPageById( $form['objectId'] )) {
            self::$registry->getService('template')->assign(
              'router',
              self::$registry->getService('router')->routerObject($form['objectTypeId'], $form['objectId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]router/ajax/router_form.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
              4,
              '401 BAD REQUEST',
              'ERROR: Page not found.'
            );
          }
          break;
        // PAGE LIST
        case 2:
          if(self::$registry->getService('page')->isPageListById( $form['objectId'] )) {
            self::$registry->getService('template')->assign(
              'router',
              self::$registry->getService('router')->routerObject($form['objectTypeId'], $form['objectId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]router/ajax/router_form.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
              4,
              '401 BAD REQUEST',
              'ERROR: Page not found.'
            );
          }
          break;
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
          break;
        // STORE CATEGORY
        case 8:
          if(self::$registry->getService('store')->isCategoryById( $form['objectId'] )) {
            self::$registry->getService('template')->assign(
              'router',
              self::$registry->getService('router')->routerObject($form['objectTypeId'], $form['objectId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]router/ajax/router_form.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
              4,
              '401 BAD REQUEST',
              'ERROR: Store category not found.'
            );
          }
          break;
        // STORE ATTRIBUTE
        case 9:
          if(self::$registry->getService('store')->isAttributeById( $form['objectId'] )) {
            self::$registry->getService('template')->assign(
              'router',
              self::$registry->getService('router')->routerObject($form['objectTypeId'], $form['objectId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]router/ajax/router_form.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
                4,
                '401 BAD REQUEST',
                'ERROR: Store attribute not found.'
            );
          }
        break;
        // STORE ATTRIBUTE VALUE
        case 10:
          if(self::$registry->getService('store')->isAttributeValueById(0, $form['objectId'])) {
            self::$registry->getService('template')->assign(
              'router',
              self::$registry->getService('router')->routerObject($form['objectTypeId'], $form['objectId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]router/ajax/router_form.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
              4,
              '401 BAD REQUEST',
              'ERROR: Store attribute not found.'
            );
          }
          break;
        // STORE ARTICLE
        case 11:
          if(self::$registry->getService('store')->isArticleById( $form['objectId'] )) {
            self::$registry->getService('template')->assign(
              'router',
              self::$registry->getService('router')->routerObject($form['objectTypeId'], $form['objectId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]router/ajax/router_form.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
              4,
              '401 BAD REQUEST',
              'ERROR: Store article not found.'
            );
          }
          break;
        // STORE DISCOUNT CIRCUIT
        case 12:
          if(self::$registry->getService('store')->isDiscountCircuitById( $form['objectId'] )) {
            self::$registry->getService('template')->assign(
              'router',
              self::$registry->getService('router')->routerObject($form['objectTypeId'], $form['objectId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]router/ajax/router_form.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
              4,
              '401 BAD REQUEST',
              'ERROR: Discount circuit not found.'
            );
          }
          break;
        default:
          self::$registry->getService('messenger')->alert(
            4,
            '401 BAD REQUEST',
            'ERROR: The object is not supported.'
          );
          break;
      }
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  private function __setRouteCtrlByObjectTypeId( $objectTypeId = 0 )
  {
    switch((int) $objectTypeId) {
      // PAGE
      case 1:
        return 'page';
      // PAGE LIST
      case 2:
        return 'page-list';
      // STORE CATEGORY
      case 8:
        return 'store';
      // STORE ATTRIBUTE
      case 9:
        return 'store';
      // STORE ATTRIBUTE VALUE
      case 10:
        return 'store';
      // STORE ARTICLE
      case 11:
        return 'store';
      // STORE DISCOUNT CIRCUIT
      case 12:
        return 'store';
      default:
        return null;
    }
  }
  
  private function __setRouteMthByObjectTypeId( $objectTypeId = 0 )
  {
    switch((int) $objectTypeId) {
      // PAGE
      case 1:
        return 'run';
      // PAGE LIST
      case 2:
        return 'run';
      // STORE CATEGORY
      case 8:
        return 'category';
      // STORE ATTRIBUTE
      case 9:
        return 'attr3';
      // STORE ATTRIBUTE VALUE
      case 10:
        return 'attr3';
      // STORE ARTICLE
      case 11:
        return 'article';
      // STORE DISCOUNT CIRCUIT
      case 12:
        return 'discountCircuit';
      default:
        return null;
    }
  }
  
  private function __insertRouteIdByObjectId( $form = null )
  {
    switch((int) $form['objectTypeId']) {
      // PAGE
      case 1:
        $this->__insertRouteToPage( $form );
        break;
      // PAGE LIST
      case 2:
        $this->__insertRouteToPageList( $form );
        break;
      case 3:
      case 4:
      case 5:
      case 6:
      case 7:
        break;
      // STORE CATEGORY
      case 8:
        $this->__insertRouteToStoreCategory( $form );
        break;
      // STORE ATTRIBUTE
      case 9:
        $this->__insertRouteToStoreAttribute( $form );
        break;
      // STORE ATTRIBUTE VALUE
      case 10:
        $this->__insertRouteToStoreAttributeValue( $form );
        break;
      // STORE ARTICLE
      case 11:
        $this->__insertRouteToStoreArticle( $form );
        break;
      // STORE DISCOUNT CIRCUIT
      case 12:
        $this->__insertRouteToStoreDiscountCircuit( $form );
        break;
      default:
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "The object is not supported."
        ));
        self::$registry->getService('json')->renderJSON();
        break;
    }
  }
  
  private function __updateRouteIdByObjectId( $routeId = 0, $form = null )
  {
    switch((int) $form['objectTypeId']) {
      // PAGE
      case 1:
        if(self::$registry->getService('page')->updatePageRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was changed successfully."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      // PAGE LIST
      case 2:
        if(self::$registry->getService('page')->updatePageListRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was changed successfully."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page list system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      case 3:
      case 4:
      case 5:
      case 6:
      case 7:
        break;
      // STORE CATEGORY
      case 8:
        if(self::$registry->getService('store')->updateCategoryRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was changed successfully."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the store category system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      // STORE ATTRIBUTE
      case 9:
        if(self::$registry->getService('store')->updateAttributeRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "The direction was changed successfully."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "When updating the store attribute system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      // STORE ATTRIBUTE VALUE
      case 10:
        if(self::$registry->getService('store')->updateAttributeValueRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "The direction was changed successfully."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "When updating the store attribute value system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      // STORE ARTICLE
      case 11:
        if(self::$registry->getService('store')->updateArticleRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was changed successfully."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page list system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      // STORE DISCOUNT CIRCUIT
      case 12:
        if(self::$registry->getService('store')->updateDiscountCircuitRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was changed successfully."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page list system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      default:
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "The object is not supported."
        ));
        self::$registry->getService('json')->renderJSON();
        break;
    }
  }

  private function __insertRouteToPage( $form = null )
  {
    if((isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('page')->isPageById( $form['objectId'] )) {
      $object = (object) array(
        'rule' => 5,
        'rm'   => 1,
        'ctrl' => 'page',
        'mth'  => 'run',
        'key'  => str_replace(',','-',$form['key'])
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if(!is_bool($routeId)) {
        if(self::$registry->getService('page')->updatePageRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully created."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Page not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __insertRouteToPageList( $form = null )
  {
    if((isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('page')->isPageListById( $form['objectId'] )) {
      $object = (object) array(
        'rule' => 5,
        'rm'   => 1,
        'ctrl' => 'page-list',
        'mth'  => 'run',
        'key'  => str_replace(',','-',$form['key'])
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if(!is_bool($routeId)) {
        if(self::$registry->getService('page')->updatePageListRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully created."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page list system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Page list not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __insertRouteToStoreCategory( $form = null )
  {
    if((isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('store')->isCategoryById( $form['objectId'] )) {
      $object = (object) array(
        'rule' => 5,
        'rm'   => 1,
        'ctrl' => 'store',
        'mth'  => 'category',
        'key'  => str_replace(',','-',$form['key'])
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if(!is_bool($routeId)) {
        if(self::$registry->getService('store')->updateCategoryRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully created."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Store category not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }

  private function __insertRouteToStoreAttribute( $form = null )
  {
    if((isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('store')->isAttributeById( $form['objectId'] )) {
      $object = (object) array(
          'rule' => 5,
          'rm'   => 1,
          'ctrl' => 'store',
          'mth'  => 'attr3',
          'key'  => str_replace(',','-',$form['key'])
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if(!is_bool($routeId)) {
        if(self::$registry->getService('store')->updateAttributeRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "The direction was successfully created."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "When updating the attribute system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Store attribute not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }

  private function __insertRouteToStoreAttributeValue( $form = null )
  {
    if((isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('store')->isAttributeValueById(0, $form['objectId'])) {
      $object = (object) array(
          'rule' => 5,
          'rm'   => 1,
          'ctrl' => 'store',
          'mth'  => 'attr3',
          'key'  => str_replace(',','-',$form['key'])
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if(!is_bool($routeId)) {
        if(self::$registry->getService('store')->updateAttributeValueRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "The direction was successfully created."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "When updating the attribute value system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Store attribute value not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __insertRouteToStoreArticle( $form = null )
  {
    if((isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('store')->isArticleById( $form['objectId'] )) {
      $object = (object) array(
        'rule' => 5,
        'rm'   => 1,
        'ctrl' => 'store',
        'mth'  => 'article',
        'key'  => str_replace(',','-',$form['key'])
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if(!is_bool($routeId)) {
        if(self::$registry->getService('store')->updateArticleRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully created."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Store article not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __insertRouteToStoreDiscountCircuit( $form = null )
  {
    if((isset($form['key']) && (strlen($form['key']) > 0)) && self::$registry->getService('store')->isDiscountCircuitById( $form['objectId'] )) {
      $object = (object) array(
        'rule' => 5,
        'rm'   => 1,
        'ctrl' => 'store',
        'mth'  => 'discountCircuit',
        'key'  => str_replace(',','-',$form['key'])
      );
      $routeId = self::$registry->getService('irouter')->addRoute( $object );

      if(!is_bool($routeId)) {
        if(self::$registry->getService('store')->updateDiscountCircuitRouteById($routeId, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully created."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the discount circuit system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Discount circuit not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __deleteRouteFromPage( $form = null )
  {
    if(self::$registry->getService('page')->isPageById( $form['objectId'] )) {
      if(self::$registry->getService('irouter')->deleteRouteById( $form['routeId'] )) {
        if(self::$registry->getService('page')->updatePageRouteById(0, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully deleted."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Page not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __deleteRouteFromPageList( $form = null )
  {
    if(self::$registry->getService('page')->isPageListById( $form['objectId'] )) {
      if(self::$registry->getService('irouter')->deleteRouteById( $form['routeId'] )) {
        if(self::$registry->getService('page')->updatePageListRouteById(0, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully deleted."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page list system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Page list not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __deleteRouteFromStoreCategory( $form = null )
  {
    if(self::$registry->getService('store')->isCategoryById( $form['objectId'] )) {
      if(self::$registry->getService('irouter')->deleteRouteById( $form['routeId'] )) {
        if(self::$registry->getService('store')->updateCategoryRouteById(0, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully deleted."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the store category system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Store category not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }

  private function __deleteRouteFromStoreAttribute( $form = null )
  {
    if(self::$registry->getService('store')->isAttributeById( $form['objectId'] )) {
      if(self::$registry->getService('irouter')->deleteRouteById( $form['routeId'] )) {
        if(self::$registry->getService('store')->updateAttributeRouteById(0, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "The direction was successfully deleted."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "When updating the store attribute system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Store attribute not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }

  private function __deleteRouteFromStoreAttributeValue( $form = null )
  {
    if(self::$registry->getService('store')->isAttributeValueById(0, $form['objectId'])) {
      if(self::$registry->getService('irouter')->deleteRouteById( $form['routeId'] )) {
        if(self::$registry->getService('store')->updateAttributeValueRouteById(0, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => "The direction was successfully deleted."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => "When updating the store attribute value system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "Store attribute value not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __deleteRouteFromStoreArticle( $form = null )
  {
    if(self::$registry->getService('store')->isArticleById( $form['objectId'] )) {
      if(self::$registry->getService('irouter')->deleteRouteById( $form['routeId'] )) {
        if(self::$registry->getService('store')->updateArticleRouteById(0, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully deleted."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the page list system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Store article not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __deleteRouteFromStoreDiscountCircuit( $form = null )
  {
    if(self::$registry->getService('store')->isDiscountCircuitById( $form['objectId'] )) {
      if(self::$registry->getService('irouter')->deleteRouteById( $form['routeId'] )) {
        if(self::$registry->getService('store')->updateDiscountCircuitRouteById(0, $form['objectId'], $form['langId'])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => "The direction was successfully deleted."
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "When updating the discount circuit system error has occurred."
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
          'status'  => 401,
          'message' => "When creating a road system error has occurred."
        ));
        self::$registry->getService('json')->renderJSON();
      }
    } else {
      self::$registry->getService('json')->push(array(
        'status'  => 401,
        'message' => "Discount circuit not found."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
}