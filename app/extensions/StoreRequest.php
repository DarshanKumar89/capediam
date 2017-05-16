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

class StoreRequest {
  
  CONST ORDER_ARTICLE_LIST_MODAL = 1;
  
  CONST OFFER_ARTICLE_LIST_MODAL = 2;
  
  CONST ARTICLE_ADD_ON_ARTICLE_LIST_MODAL = 3;
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var array Email Tags **/
  private $emailTags = array(
    1 => array(
      '{{store_name}}',
      '{{store_phone}}',
      '{{store_email}}',
      '{{store_pickup_address}}',
      '{{store_address}}',
      '{{store_opening_hours}}',
      '{{client_full_name}}',
      '{{order}}',
      '{{notice}}',
      '{{primary_email}}',
      '{{secondary_email}}',
    ),
    2 => array(
      '{{store_name}}',
      '{{store_phone}}',
      '{{store_email}}',
      '{{store_pickup_address}}',
      '{{store_address}}',
      '{{store_opening_hours}}',
      '{{client_full_name}}',
      '{{invoice}}',
      '{{primary_email}}',
      '{{secondary_email}}',
    ),
    3 => array(
      '{{store_name}}',
      '{{store_phone}}',
      '{{store_email}}',
      '{{store_pickup_address}}',
      '{{store_address}}',
      '{{store_opening_hours}}',
      '{{client_full_name}}',
      '{{articleList}}',
      '{{primary_email}}',
      '{{secondary_email}}',
    ),
    4 => array(
      '{{store_name}}',
      '{{store_phone}}',
      '{{store_email}}',
      '{{store_pickup_address}}',
      '{{store_address}}',
      '{{store_opening_hours}}',
      '{{client_full_name}}',
      '{{discount_circuit}}',
      '{{primary_email}}',
      '{{secondary_email}}',
    ),
    5 => array(
      '{{store_name}}',
      '{{store_phone}}',
      '{{store_email}}',
      '{{store_pickup_address}}',
      '{{store_address}}',
      '{{store_opening_hours}}',
      '{{client_full_name}}',
    )
  );
  
  /** @var array **/
  private static $device = array(
    1 => 'ALL',
    2 => 'DESKTOP',
    3 => 'DESKTOP + TABLET',
    4 => 'TABLET',
    5 => 'MOBILE'
  );
  
  /** @var array **/
  private static $viewport = array(
    0 => '-',
    1 => 'min-width',
    2 => 'max-width',
    3 => 'min-height',
    4 => 'max-height',
    5 => 'min-width / max-width',
    6 => 'min-height / max-height'
  );
  
  /** @var array **/
  private static $resize = array(
    1 => 'AUTO',
    2 => 'CROP',
    3 => 'EXACT',
    4 => 'LANDSCAPE',
    5 => 'PORTRAIT'
  );
  
  /** @var array **/
  private static $resizeSections = array(
    1 => 'ALL',
    2 => 'CATEGORY',
    3 => 'ATTR',
    4 => 'ATTR-VALUE'
  );
  
  /** @var array **/
  private $extCategoryList = array(
    1 => 'Heureka'
  );
  
  public function __construct( Registry $registry ) 
  {     
    self::$registry = $registry;
  }

  /*********************************************************************************************************
   *
   * STORE ARTICLE
   *
   *********************************************************************************************************/

  public function storeArticleSearchAutocomplete()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(isset($form['q']) && (strlen($form['q']) >= 3)) {
      $articleList = self::$registry->getService('store')->fullTextSearchOnArticlesByKeywords($form['q'], true);

      self::$registry->getService('template')->assign('keywords',$form['q']);
      self::$registry->getService('template')->assign('articleList',$articleList);
      self::$registry->getService('template')->display('extends:[cpanel]store/api/search_autocomplete.tpl');
    } else {
      self::$registry->getService('messenger')->alert(
          4,
          '401 BAD REQUEST',
          'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }

  public function storeAjaxUpdateArticle()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(self::$registry->getService('store')->isArticleById($form["article-id"])) {
      $errors = [];

      if(empty($form["article-name-internal"]) &&
          !is_string($form["article-name-internal"]) &&
          ((strlen($form["article-name-internal"]) < 5) && (strlen($form["article-name-internal"]) > 151))
      ) {
        $errors[] = (object) array("type" => 3,"message" => 'Empty article name (internal)');
      }
      if(empty($form["sku"]) && !is_string($form["sku"])) {
        $errors[] = (object) array("type" => 3,"message" => 'Empty SKU');
      }
      if(count($errors) === 0) {
        if(self::$registry->getService('store')->updateArticleDataById($form, (int) $form["article-id"])) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => 'Succes'
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          self::$registry->getService('json')->push(array(
              'status'  => 401,
              'message' => self::$registry->getService('translator')->translate("global_alert_form_processed_error")
          ));
          self::$registry->getService('json')->renderJSON();
        }
      } else {
        self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => 'WARNING: FORM NOT VALID.',
            'errors'  => $errors
        ));
        self::$registry->getService('json')->renderJSON();
      }
    }
  }

  /*********************************************************************************************************
  *
  * STORE CATEGORY
  *
  *********************************************************************************************************/
  
  public function storeCategoryList( $page = 0, $limit = 0 )
  {
    $page  = ((int) $page > 0) ? (int) $page : 1;
    $limit = ((int) $limit > 0) ? (int) $limit : 10;
    $total = self::$registry->getService('store')->countCategories();
    
    self::$registry->getService('pagination')->setPrefix( 'cpanel/store-category-list' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'categoryList',
      self::$registry->getService('store')->getCategoryList(true)
    );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5)
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'widgets',
      self::$registry->getService('store')->categoryWidgets()
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/category/category_list.tpl");
  }
  
  public function storeCreateCategoryForm()
  {
    self::$registry->getService('template')->assign(
      'metaRobots',
      self::$registry->getService('page')->metaRobots()
    );
    self::$registry->getService('template')->assign(
      'categoryTree',
      self::$registry->getService('store')->getCategoriesTree()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/category/category_create_form.tpl");
  }
  
  public function storeCreateCategory()
  {
    $form = self::$registry->getService('irequest')->getPost();
    $errors = [];
    
    if((is_array($form) && (count($form) > 0)) && (is_array($form["lang"]) && (count($form["lang"]) > 0))) {
      foreach($form["lang"] as $value) {
        if(strlen($value["'category-name'"]) === 0) {
          $errors[] = self::$registry->getService('translator')->translate("store_form_errors_empty_category_name");
        }
      }
      if(count($errors) === 0) {
        $categoryId = self::$registry->getService('store')->createCategory( $form );

        if($categoryId !== false) {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store-update-category-form/'.$categoryId
          );
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            'An error occurred while processing this form please contact your system administrator.',
            null,
            'cpanel/store-category-list',
            true
          );
        }
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'FORM ERROR',
          '',
          $errors,
          'cpanel/store-create-category-form',
          false
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-category-list',
        true
      );
    }
  }
  
  public function storeUpdateCategoryForm( $categoryId = 0 )
  {
    if(self::$registry->getService('store')->isCategoryById( $categoryId )) {
      $data = self::$registry->getService('store')->categoryById( $categoryId );

      if(!is_null($data)) {
        self::$registry->getService('template')->assign(
          'metaRobots',
          self::$registry->getService('page')->metaRobots()
        );
        self::$registry->getService('template')->assign(
          'categoryTree',
          self::$registry->getService('store')->getCategoriesTree( $categoryId )
        );
        self::$registry->getService('template')->assign(
          'router',
          self::$registry->getService('router')->routerObject(8, $categoryId)
        );
        self::$registry->getService('template')->assign('data',$data);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/category/category_update_form.tpl");
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          'Processing the request encountered a system error, please contact your system administrator.',
          null,
          'cpanel/store-category-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_category_reports_category_not_found"),
        null,
        'cpanel/store-category-list',
        true
      );
    }
  }
  
  public function storeUpdateCategory()
  {
    $form = self::$registry->getService('irequest')->getPost();
          
    if((is_array($form) && (count($form) > 0)) && (isset($form["category-id"]) && self::$registry->getService('store')->isCategoryById($form["category-id"]))) {
      if(self::$registry->getService('store')->updateCategoryDataById( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-category-form/'.$form["category-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          'An error occurred while processing this form please contact your system administrator.',
          null,
          'cpanel/store-category-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-category-list'
      );
    }
  }
  
  public function storeChooseCategoryImage( $categoryId = 0, $langId = 0, $folderHash = '' )
  {
    if(self::$registry->getService('store')->isCategoryById( $categoryId ) &&
       self::$registry->getService('languages')->isLangById( $langId ) &&
       self::$registry->getService('drive')->isFolderByHash( $folderHash )
    ) {
        $folderId = self::$registry->getService('drive')->folderIdByHash( $folderHash );
        $drive    = self::$registry->getService('drive')->addOnDriveByFolderId( $folderId );
        $drive['foldersStructure'] = self::$registry->getService('cms')->foldersStructure( $folderId );
          
        self::$registry->getService('template')->assign(
          'category_name',
          self::$registry->getService('store')->categoryNameById( $categoryId )
        );
        self::$registry->getService('template')->assign('categoryId',$categoryId);
        self::$registry->getService('template')->assign('languageId',$langId);
        self::$registry->getService('template')->assign('folderHash',$folderHash);
        self::$registry->getService('template')->assign('drive',$drive);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/category/category_images.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_category_reports_category_not_found"),
        null,
        'cpanel/store-category-list',
        true
      );
    }
  }
  
  public function storeUpdateCategoryImage()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["category-id"]) && isset($form["language-id"]) && isset($form["images"])) &&
      self::$registry->getService('store')->isCategoryById( $form["category-id"] ) &&
      self::$registry->getService('languages')->isLangById( $form["language-id"] ) &&
      (is_array($form["images"]) && (count($form["images"]) > 0))
    ) {
      if(self::$registry->getService('store')->updateCategoryImage(
        $form["category-id"], 
        $form["language-id"], 
        $form["images"] 
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-category-form/'. $form["category-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-update-category-form/'. $form["category-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_category_reports_category_not_found"),
        null,
        'cpanel/store-category-list',
        true
      );
    }
  }
  
  public function storeDeleteCategoryImage( $categoryId = 0, $langId = 0 )
  {
    if(self::$registry->getService('store')->isCategoryById( $categoryId ) &&
      self::$registry->getService('languages')->isLangById( $langId )    
    ) {
      if(self::$registry->getService('store')->deleteCategoryImageById($categoryId, $langId)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-category-form/'.$categoryId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-update-category-form/'.$categoryId,
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_category_reports_category_not_found"),
        null,
        'cpanel/store-category-list',
        true
      );
    }
  }
  
  public function storeUpdateCategoryList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["categoryList"]) && (is_array($form["categoryList"]) && (count($form["categoryList"]) > 0))) {
      if(self::$registry->getService('store')->updateCategoryList( $form["categoryList"] )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-category-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-category-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-category-list'
      );
    }
  }
  
  public function storeCategoryAssigningArticleForm( $categoryId = 0, $bit0 = 0, $bit1 = 0 )
  {
    // SEARCH FULLTEXT
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 10 : (int) $bit1;
    $total = self::$registry->getService('store')->countCategoryAssigningArticle($categoryId, $useList);
     // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/store-category-assigning-article-form/'.$categoryId );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'categoryList',
      self::$registry->getService('store')->categoryList()
    );
    self::$registry->getService('template')->assign(
      'articleListCL',
      self::$registry->getService('store')->articleListByCategoryId($categoryId, $useList, true)
    );
    self::$registry->getService('template')->assign(
      'totalOrder',
      self::$registry->getService('store')->totalOrderALCLByCategoryId( $categoryId )
    );
    self::$registry->getService('template')->assign(
      'totalNotOrder',
      self::$registry->getService('store')->totalNotOrderALCLByCategoryId( $categoryId )
    );
    self::$registry->getService('template')->assign(
      'numberOfLastOrder',
      self::$registry->getService('store')->numberOfLastOrderALCLByCategoryId( $categoryId )
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->assign('categoryId',$categoryId);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/category/category_assigning_article.tpl");
  }
  
  public function storePushArticleToCategoryModal()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['categoryId']) && isset($form['page']) && isset($form['limit'])) &&
      self::$registry->getService('store')->isCategoryById( $form['categoryId'] )
    ) {
      // INIT
      $useList    = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $form['keywords'] ) : null;
      $ignoreList = [];
      $data = self::$registry->getService('store')->articleListByCategoryId($form['categoryId'], null, false);
      
      if(!is_null($data)) {
        $ignoreList = [];

        foreach($data as $value) {
          $ignoreList[] = $value->id_article;
        }
      }
      // SET PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] >= 1) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('store')->countArticles($ignoreList, $useList);
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
        'articleList',
        self::$registry->getService('store')->articleList(true, $ignoreList, $useList)
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('keywords',$form['keywords']);
      self::$registry->getService('template')->display("extends:[cpanel]store/catalog/category/ajax/add_on_article_list_modal.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeAddArticleToCategory()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["categoryId"]) && isset($form["articleId"]))  &&
      self::$registry->getService('store')->isCategoryById( $form["categoryId"] ) &&
      self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if((bool) self::$registry->getService('store')->haveArticleCategoryById($form["articleId"], $form["categoryId"]) === false) {
        if(self::$registry->getService('store')->insertArticleCategoryById(array(
          ':id_article'  => (int) $form["articleId"],
          ':id_category' => (int) $form["categoryId"]
        ))) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully added to the category.'
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
          'message' => 'The article is already in the category.'
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
  
  public function storeAddArticleListToCategory()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["categoryId"]) && isset($form["ids"]))  &&
      self::$registry->getService('store')->isCategoryById( $form["categoryId"] ) &&
      (is_array($form["ids"]) && (count($form["ids"]) > 0))
    ) {
        if(self::$registry->getService('store')->insertArticleListToCategory(
          $form["categoryId"],
          $form["ids"]
        )) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The articles has successfully added to the category.'
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
  
  public function storeDeleteArticleFromCategory()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["categoryId"]) && isset($form["articleId"]))  &&
      self::$registry->getService('store')->isCategoryById( $form["categoryId"] ) &&
      self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if((bool) self::$registry->getService('store')->haveArticleCategoryById($form["articleId"], $form["categoryId"]) === true) {
        if(self::$registry->getService('store')->deleteArticleFromCategoryById($form["articleId"], $form["categoryId"])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully deleted to the category.'
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
          'message' => 'The article not found in the category.'
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
  
  public function storeDeleteArticleListFromCategory()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["category-id"]) && isset($form["articleList"])) &&
      self::$registry->getService('store')->isCategoryById( $form["category-id"] ) &&
      (is_array($form["articleList"]) && (count($form["articleList"]) > 0))
    ) {
      if(self::$registry->getService('store')->deleteArticleListFromCategory(
        $form["category-id"],
        $form["articleList"]
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-category-assigning-article-form/'.$form["category-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-category-assigning-article-form/'.$form["category-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-category-assigning-article-form'
      );
    }
  }
  
  public function storeCategoryAssigningArticleListTable()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["categoryId"]) && isset($form['page']) && isset($form['limit'])) &&
      self::$registry->getService('store')->isCategoryById( $form["categoryId"] )
    ) {
      // PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] > 0) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('store')->countCategoryAssigningArticle( $form["categoryId"] );
       // PAGINATION INIT
      self::$registry->getService('pagination')->setPrefix( 'cpanel/store-category-assigning-article-form/'.$form["categoryId"] );
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
      self::$registry->getService('template')->assign(
        'categoryList',
        self::$registry->getService('store')->categoryList(false)
      );
      self::$registry->getService('template')->assign(
        'articleListCL',
        self::$registry->getService('store')->articleListByCategoryId($form["categoryId"], null, true)
      );
      self::$registry->getService('template')->assign(
        'totalOrder',
        self::$registry->getService('store')->totalOrderALCLByCategoryId( $form["categoryId"] )
      );
      self::$registry->getService('template')->assign(
        'totalNotOrder',
        self::$registry->getService('store')->totalNotOrderALCLByCategoryId( $form["categoryId"] )
      );
      self::$registry->getService('template')->assign(
        'numberOfLastOrder',
        self::$registry->getService('store')->numberOfLastOrderALCLByCategoryId( $form["categoryId"] )
      );
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('keywords','');
      self::$registry->getService('template')->assign('categoryId',$form["categoryId"]);
      self::$registry->getService('template')->display("extends:[cpanel]store/catalog/category/ajax/category_assigning_article_table.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeCategoryUpdateOrderArticleList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["category-id"]) && (isset($form['articleList']) && (is_array($form['articleList']) && (count($form['articleList']) > 0)))) &&
      self::$registry->getService('store')->isCategoryById( $form["category-id"] )
    ) {
      if(self::$registry->getService('store')->updatePositionCategoryAssigningArticles(
         $form["category-id"],
         $form["articleList"]
       )) {
         self::$registry->getService('messenger')->alert(
           1,
           '200 SUCCESS',
           'SPRÁVA: Zoradenie produktov bolo úspešne aktualizované.'
         );
       } else {
          self::$registry->getService('messenger')->alert(
           4,
           '402 ERROR',
           self::$registry->getService('translator')->translate("global_alert_form_processed_error")
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
  
  public function storeCategoryLangData()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["categoryId"]) && self::$registry->getService('store')->isCategoryById($form["categoryId"])) {
      $data = self::$registry->getService('store')->categoryHeadingById( $form["categoryId"] );

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
        'message' => "POSTING PAYLOAD IS INCORRECT."
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }

  /*********************************************************************************************************
  *
  * STORE ATTRIBUTE
  *
  *********************************************************************************************************/

  public function storeAttributeList( $page = 0, $limit = 0 )
  {
    $page  = ((int) $page > 0) ? (int) $page : 1;
    $limit = ((int) $limit > 0) ? (int) $limit : 10;
    $total = self::$registry->getService('store')->countAttributes();
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/store-attribute-list' );
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
      'attributeList',
      self::$registry->getService('store')->getAttributeList(true)
    );
    self::$registry->getService('template')->assign(
      'widgets',
      self::$registry->getService('store')->getAttributeWidgets()
    );
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_list.tpl");
  }

  public function storeCreateAttributeForm()
  {
    self::$registry->getService('template')->assign(
      'metaRobots',
      self::$registry->getService('page')->metaRobots()
    );
    self::$registry->getService('template')->assign(
      'attributeTree',
      self::$registry->getService('store')->getAttributeTree()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_create_form.tpl");
  }

  public function storeCreateAttribute()
  {
    $form = self::$registry->getService('irequest')->getPost();
    $errors = [];

    if(is_array($form["lang"]) && (count($form["lang"]) > 0)) {
      foreach($form["lang"] as $value) {
        if(strlen($value["'attribute-name-public'"]) === 0) {
          $errors[] = self::$registry->getService('translator')->translate("store_attributes_forms_errors_empty_attribute_internal_name");
        }
      }
      if(count($errors) === 0) {
        $attributeId = self::$registry->getService('store')->createAttribute( $form );

        if((bool) $attributeId !== false) {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store-update-attribute-form/'.$attributeId
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
          3,
          'FORM ERROR',
          '',
          $errors,
          'cpanel/store-create-category-form',
          false
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-attribute-list'
      );
    }
  }

  public function storeUpdateAttributeForm( $attrId = 0 )
  {
    if(self::$registry->getService('store')->isAttributeById( $attrId )) {
      $data = self::$registry->getService('store')->attributeById( $attrId );

      if(is_object($data)) {
        self::$registry->getService('template')->assign(
          'metaRobots',
          self::$registry->getService('page')->metaRobots()
        );
        self::$registry->getService('template')->assign(
          'attributeTree',
          self::$registry->getService('store')->getAttributeTree( $attrId )
        );
        self::$registry->getService('template')->assign(
          'router',
          self::$registry->getService('router')->routerObject(9, $attrId)
        );
        self::$registry->getService('template')->assign('data',$data);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_update_form.tpl");
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-attribute-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-list',
        true
      );
    }
  }

  public function storeUpdateAttribute()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((is_array($form) && (count($form) > 0)) && (isset($form["attribute-id"]) && self::$registry->getService('store')->isAttributeById( $form["attribute-id"] ))) {
      if(self::$registry->getService('store')->updateAttributeDataById( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-attribute-form/'.$form["attribute-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
            'cpanel/store-update-attribute-form/'.$form["attribute-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-attribute-list'
      );
    }
  }

  public function storeChooseAttributeImage( $attrId = 0, $langId = 0, $folderHash = '' )
  {
    if(self::$registry->getService('store')->isAttributeById( $attrId ) &&
      self::$registry->getService('languages')->isLangById( $langId ) &&
      self::$registry->getService('drive')->isFolderByHash( $folderHash )
    ) {
      $folderId = self::$registry->getService('drive')->folderIdByHash( $folderHash );
      $drive    = self::$registry->getService('drive')->addOnDriveByFolderId( $folderId );
      $drive['foldersStructure'] = self::$registry->getService('cms')->foldersStructure( $folderId );

      self::$registry->getService('template')->assign(
        'attribute_name',
        self::$registry->getService('store')->attributeNameById($attrId, $langId)
      );
      self::$registry->getService('template')->assign('attrId',$attrId);
      self::$registry->getService('template')->assign('languageId',$langId);
      self::$registry->getService('template')->assign('folderHash',$folderHash);
      self::$registry->getService('template')->assign('drive',$drive);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_images.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-list',
        true
      );
    }
  }

  public function storeUpdateAttributeImage()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attribute-id"]) && isset($form["language-id"]) && isset($form["images"])) &&
        self::$registry->getService('store')->isAttributeById($form["attribute-id"]) &&
        self::$registry->getService('languages')->isLangById($form["language-id"]) &&
        (is_array($form["images"]) && (count($form["images"]) > 0))
    ) {
      if(self::$registry->getService('store')->updateAttributeImage(
        $form["attribute-id"],
        $form["language-id"],
        $form["images"]
      )
      ) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-attribute-form/'.$form["attribute-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-update-attribute-form/'.$form["attribute-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-list',
        true
      );
    }
  }

  public function storeDeleteAttributeImage( $attrId = 0, $langId = 0 )
  {
    if(self::$registry->getService('store')->isAttributeById( $attrId ) &&
        self::$registry->getService('languages')->isLangById( $langId )
    ) {
      if(self::$registry->getService('store')->deleteAttributeImageById($attrId, $langId)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-attribute-form/'.$attrId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-update-attribute-form/'.$attrId,
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
          self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-list',
        true
      );
    }
  }

  public function storeUpdateAttributeList()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(isset($form["attributeList"]) && (is_array($form["attributeList"]) && (count($form["attributeList"]) > 0))) {
      if(self::$registry->getService('store')->updateAttributeList( $form["attributeList"] )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-attribute-list'
        );
      } else {

      }
    } else {
      self::$registry->getService('messenger')->display(
          4,
          'FORM ERROR',
          'Unable to process a blank form.',
          null,
          'cpanel/store-attribute-list'
      );
    }
  }

  public function storeAttributeValueAssigningArticleForm( $attrId = 0, $attrVId = 0, $bit0 = 0, $bit1 = 0 )
  {
    // SEARCH FULLTEXT
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
    // PAGINATION VARS
    $page  = ((int) $bit0 === 0) ? 1 : (int) $bit0;
    $limit = ((int) $bit1 === 0) ? 10 : (int) $bit1;
    $total = self::$registry->getService('store')->countAttributeValueAssigningArticle($attrId, $attrVId, $useList);
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/store-attribute-value-assigning-article-form/'.$attrId.((self::$registry->getService('store')->isAttributeValueById($attrId, $attrVId)) ? '/'.$attrVId : '') );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'attributeList',
      self::$registry->getService('store')->attributeList()
    );
    self::$registry->getService('template')->assign(
      'attributeValueList',
      self::$registry->getService('store')->getAttributeValueListById( $attrId )
    );
    self::$registry->getService('template')->assign(
      'articleListAL',
      self::$registry->getService('store')->articleListByAttributeValueId($attrId, $attrVId, $useList, true)
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('attrId',$attrId);
    self::$registry->getService('template')->assign('attrVId',$attrVId);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_assigning.tpl");
  }

  public function storePushArticleToAttributeValueModal()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(((isset($form['attrId']) && isset($form['attrVId'])) && isset($form['page']) && isset($form['limit'])) &&
        self::$registry->getService('store')->isAttributeValueById($form['attrId'], $form['attrVId'])
    ) {
      // INIT
      $useList    = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $form['keywords'] ) : null;
      $ignoreList = [];
      $data = self::$registry->getService('store')->articleListByAttributeValueId($form['attrId'], $form['attrVId'],null, false);

      if(is_array($data) && (count($data) > 0)) {
        $ignoreList = [];

        foreach($data as $value) {
          $ignoreList[] = $value->id_article;
        }
      }
      // SET PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] >= 1) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('store')->countArticles($ignoreList, $useList);
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
        'articleList',
        self::$registry->getService('store')->articleList(true, $ignoreList, $useList)
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('keywords',$form['keywords']);
      self::$registry->getService('template')->display("extends:[cpanel]store/catalog/attribute/ajax/add_on_article_list_modal.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
          4,
          '401 BAD REQUEST',
          'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }

  public function storeAddArticleToAttributeValue()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attrId"]) && isset($form["attrVId"]) && isset($form["articleId"]))  &&
        self::$registry->getService('store')->isAttributeValueById($form["attrId"], $form["attrVId"]) &&
        self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if((bool) self::$registry->getService('store')->haveArticleAttributeValueById($form["articleId"], $form["attrId"], $form["attrVId"]) === false) {
        if(self::$registry->getService('store')->insertArticleAttributeById(array(
            ':id_article'   => (int) $form["articleId"],
            ':id_attribute' => (int) $form["attrId"],
            ':id_value'     => (int) $form["attrVId"]
        ))) {
          self::$registry->getService('json')->push(array(
              'status'  => 200,
              'message' => 'The article has successfully added to the attribute value.'
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
            'message' => 'The article is already in the atrribute value.'
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

  public function storeAddArticleListToAttributeValue()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attrId"]) && isset($form["attrVId"]) && isset($form["ids"]))  &&
        self::$registry->getService('store')->isAttributeValueById($form["attrId"], $form["attrVId"]) &&
        (is_array($form["ids"]) && (count($form["ids"]) > 0))
    ) {
      if(self::$registry->getService('store')->insertArticleListToAttributeValue(
        $form["attrId"],
        $form["attrVId"],
        $form["ids"]
      )) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully added to the attribute value.'
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

  public function storeDeleteArticleFromAttributeValue()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attrId"]) && isset($form["attrVId"]) && isset($form["articleId"]))  &&
        self::$registry->getService('store')->isAttributeValueById($form["attrId"], $form["attrVId"]) &&
        self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if((bool) self::$registry->getService('store')->haveArticleAttributeValueById($form["articleId"], $form["attrId"], $form["attrVId"]) === true) {
        if(self::$registry->getService('store')->deleteArticleFromAttributeValueById($form["articleId"], $form["attrId"], $form["attrVId"])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully deleted to the attribute value.'
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
          'message' => 'The article not found in the attribute value.'
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

  public function storeDeleteArticleListFromAttributeValue()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attribute-id"]) && isset($form["value-id"]) && isset($form["articleList"])) &&
        self::$registry->getService('store')->isAttributeValueById($form["attribute-id"], $form["value-id"]) &&
        (is_array($form["articleList"]) && (count($form["articleList"]) > 0))
    ) {
      if(self::$registry->getService('store')->deleteArticleListFromAttributeValue(
        $form["attribute-id"],
        $form["value-id"],
        $form["articleList"]
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-attribute-value-assigning-article-form/'.$form["attribute-id"].DIRECTORY_SEPARATOR.$form["value-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
            'cpanel/store-attribute-value-assigning-article-form/'.$form["attribute-id"].DIRECTORY_SEPARATOR.$form["value-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-attribute-value-assigning-article-form'
      );
    }
  }

  public function storeAttributeValueAssigningArticleListTable()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(((isset($form["attrId"]) && isset($form["attrVId"])) && isset($form['page']) && isset($form['limit'])) &&
        self::$registry->getService('store')->isAttributeValueById($form["attrId"], $form["attrVId"])
    ) {
      // PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] > 0) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('store')->countAttributeValueAssigningArticle($form["attrId"], $form["attrVId"]);
      // PAGINATION INIT
      self::$registry->getService('pagination')->setPrefix( 'cpanel/store-attribute-assigning-article-form/'.$form["attrId"].((self::$registry->getService('store')->isAttributeValueById($form["attrId"], $form["attrVId"])) ? '/'.$form["attrVId"] : '') );
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
      self::$registry->getService('template')->assign(
        'articleListAL',
        self::$registry->getService('store')->articleListByAttributeValueId($form["attrId"], $form["attrVId"], null, true)
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('attrId',$form["attrId"]);
      self::$registry->getService('template')->assign('attrVId',$form["attrVId"]);
      self::$registry->getService('template')->display("extends:[cpanel]store/catalog/attribute/ajax/attribute_assigning_table.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }

  public function storeAttributeAssigningValueList( $attrId = 0, $page = 0, $limit = 0 )
  {
    // PAGINATION VARS
    $page  = ((int) $page === 0) ? 1 : (int) $page;
    $limit = ((int) $limit === 0) ? 10 : (int) $limit;
    $total = self::$registry->getService('store')->countAttributeValuesByAttrId( $attrId );
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/store-attribute-assigning-value-list/'.$attrId );
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
      'metarobots',
      self::$registry->getService('page')->metaRobots()
    );
    self::$registry->getService('template')->assign(
      'attributeList',
      self::$registry->getService('store')->getAttributeList()
    );
    self::$registry->getService('template')->assign(
      'attributeValueList',
      self::$registry->getService('store')->getAttributeValueListById($attrId, true)
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('attrId',$attrId);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_assigning_value_list.tpl");
  }

  public function storeCreateAttributeValueFrom( $attrId = 0 )
  {
    if(self::$registry->getService('store')->isAttributeById($attrId)) {
      self::$registry->getService('template')->assign(
        'metarobots',
        self::$registry->getService('page')->metaRobots()
      );
      self::$registry->getService('template')->assign('attrId',$attrId);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_create_value_form.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-assigning-value-list',
        true
      );
    }
  }

  public function storeCreateAttributeValue()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attribute-id"]) && self::$registry->getService('store')->isAttributeById($form["attribute-id"])) &&
      (isset($form["values"]) && (is_array($form["values"]) && (count($form["values"]) > 0)))
    ) {
      $attrVId = self::$registry->getService('store')->createAttributeValue($form);

      if(!is_bool($attrVId)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-attribute-value-form/'.$form["attribute-id"].DIRECTORY_SEPARATOR.$attrVId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-update-attribute-value-form/'.$form["attribute-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-attribute-assigning-value-list'
      );
    }
  }

  public function storeUpdateAttributeValueForm( $attrId = 0, $attrVId = 0 )
  {
    if(self::$registry->getService('store')->isAttributeValueById($attrId, $attrVId)) {
      self::$registry->getService('template')->assign(
        'metarobots',
        self::$registry->getService('page')->metaRobots()
      );
      self::$registry->getService('template')->assign(
        'data',
        self::$registry->getService('store')->attributeValueDataById($attrId, $attrVId)
      );
      self::$registry->getService('template')->assign(
        'color',
        self::$registry->getService('store')->attributeValueColorById($attrId, $attrVId)
      );
      self::$registry->getService('template')->assign(
        'router',
        self::$registry->getService('router')->routerObject(10, $attrVId)
      );
      self::$registry->getService('template')->assign('attrId',$attrId);
      self::$registry->getService('template')->assign('attrVId',$attrVId);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/attribute/attribute_update_value_form.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-assigning-value-list',
        true
      );
    }
  }

  public function storeUpdateAttributeValue()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attribute-id"]) && isset($form["value-id"]) && isset($form["values"])) &&
      self::$registry->getService('store')->isAttributeValueById($form["attribute-id"], $form["value-id"])
    ) {
      if(self::$registry->getService('store')->updateAttributeValue( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-attribute-value-form/'.$form["attribute-id"].DIRECTORY_SEPARATOR.$form["value-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-update-attribute-value-form/'.$form["attribute-id"].DIRECTORY_SEPARATOR.$form["value-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-assigning-value-list',
        true
      );
    }
  }

  public function storeDeleteAttributeValue( $attrId = 0, $attrVId = 0 )
  {
    if(self::$registry->getService('store')->isAttributeValueById($attrId, $attrVId)) {
      if(self::$registry->getService('store')->deleteAttributeValueById($attrId, $attrVId)) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-attribute-assigning-value-list/'.$attrId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-attribute-assigning-value-list/'.$attrId,
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-assigning-value-list',
        true
      );
    }
  }

  public function storeDeleteAttributeValueList()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["attribute-id"]) && self::$registry->getService('store')->isAttributeById($form["attribute-id"])) &&
      (isset($form["valueList"]) && (is_array($form["valueList"]) && (count($form["valueList"]) > 0)))
    ) {
      if(self::$registry->getService('store')->deleteAttributeValueList( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-attribute-assigning-value-list/'.$form["attribute-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-attribute-assigning-value-list/'.$form["attribute-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_attributes_reports_attribute_not_found"),
        null,
        'cpanel/store-attribute-assigning-value-list',
        true
      );
    }
  }
  
  /*********************************************************************************************************
  *
  * THUMBNAIL
  *
  *********************************************************************************************************/
  
  public function thumbnail()
  {
    self::$registry->getService('template')->assign(
      'resizeRuleList', 
      self::$registry->getService('store')->resizeRuleList()
    );
    self::$registry->getService('template')->assign(
      'thumbSectionList', 
      self::$registry->getService('store')->thumbSectionList()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/thumbnail/manage.tpl");
  }
  
  public function createResizeRule()
  {
    $form = self::$registry->getService('irequest')->getPost();
    $errs = [];
    
    if(!isset($form["device"]) || (!array_key_exists($form["device"], self::$device))) {
      $errs[] = "MISSING DEVICE.";
    }
    if(isset($form["viewport"]) && (!array_key_exists($form["viewport"], self::$viewport))) {
      $errs[] = "VIEWPORT UNKNOWN OPTION.";
    }
    if(isset($form["viewport"]) && (array_key_exists($form["viewport"], self::$viewport))) {
      // min[1,3]
      if(((int) $form["viewport"] === 1) || ((int) $form["viewport"] === 3)) {
        if(isset($form["min"]) && (!is_numeric($form["min"]))) {
          $errs[] = "VIEWPORT MIN SIZE NOT A NUMBER.";
        }
      }
      // max[2,4]
      if(((int) $form["viewport"] === 2) || ((int) $form["viewport"] === 4)) {
        if(isset($form["max"]) && (!is_numeric($form["max"]))) {
          $errs[] = "VIEWPORT MAX SIZE NOT A NUMBER.";
        }
      }
      // min-max[5,6]
      if(((int) $form["viewport"] === 5) || ((int) $form["viewport"] === 6)) {
        if((isset($form["min"]) && (!is_numeric($form["min"]))) &&
          (isset($form["max"]) && (!is_numeric($form["max"]))) 
        ) {
          $errs[] = "VIEWPORT MIN OR MAX SIZE NOT A NUMBER.";
        }
      }
    }
    if(!isset($form["resize"]) || (!array_key_exists($form["resize"], self::$resize))) {
      $errs[] = "MISSING RESIZE OPTION";
    } else {
      // RESIZE - W/H TIES
      switch((int) $form["resize"]) 
      {
        case 1:
        case 2:
        case 3:
          if(!isset($form["width"]) || ((int) $form["width"] === 0)) {
            $errs[] = "WIDTH NOT BE NULL.";
          }
          if(!isset($form["height"]) || ((int) $form["height"] === 0)) {
            $errs[] = "HEIGHT NOT BE NULL.";
          }
          break;
        case 4:
          if(!isset($form["width"]) || ((int) $form["width"] === 0)) {
            $errs[] = "WIDTH NOT BE NULL.";
          }
          break;
        case 5:
          if(!isset($form["height"]) || ((int) $form["height"] === 0)) {
            $errs[] = "HEIGHT NOT BE NULL.";
          }
          break;
      }
    }
    if((count($errs) === 0) && 
      ((bool) self::$registry->getService('store')->isResizeRuleUnique(
        $form["device"], 
        $form["viewport"],
        $form["min"],
        $form["max"],
        $form["resize"],
        $form["width"],
        $form["height"]
    ) === true)) {
      $errs[] = "DUPLICATE RESIZE RULE.";
    }
    if(count($errs) === 0) {
      if((bool) self::$registry->getService('store')->insertResizeRule(array(
        ':device'   => (int) $form["device"],
        ':viewport' => (int) $form["viewport"],
        ':min_size' => (float) $form["min"],
        ':max_size' => (float) $form["max"],
        ':resize'   => (int) $form["resize"],
        ':width'    => (float) $form["width"],
        ':height'   => (float) $form["height"],
      )) === true) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/thumbnail'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/thumbnail',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The processing of applications following errors occurred',
        $errs,
        'cpanel/thumbnail',
        false
      );
    }
  }
  
  public function createResizeSection()
  {
    $form   = self::$registry->getService('irequest')->getPost();
    $errs   = [];
    $output = array(
      'status'  => 402,
      'message' => 'POSTING PAYLOAD IS INCORRECT.'
    );
    if((!isset($form["kind"])) && (!array_key_exists($form["kind"], self::$resizeSections))) {
      $errs[] = "Unknown option section.Please select a section.";
    } else {
      if(in_array($form["kind"], array(2,3,4))) {
        if(!isset($form["type"])) {
          $errs[] = "Unknown option section type.Please select a section type.";
        } else {
          if(($form["type"] === 1) || ((int) $form["type"] === 3)) {
            if(!isset($form["section-values"]) && (!is_array($form["section-values"]) || (count($form["section-values"]) === 0))) {
              $errs[] = "Undefined choose for section specification.";
            }
          }
        }
      }
    }
    if((!isset($form["rules"])) && (!is_array($form["rules"]) || (count($form["rules"]) === 0))) {
      $errs[] = "Unknown option resize rule or rules.Please select a resize rule or rules.";
    } else {
      foreach($form["rules"] as $rule) {
        if((bool) self::$registry->getService('store')->isResizeRuleById( $rule ) === false) {
          $errs[] = "Non existing resize rule.";
        }
      }
    }
    if(count($errs) === 0) {
      if((bool) self::$registry->getService('store')->createResizeSection($form, self::$resize) === true) {
        $output = array(
          'status'  => 200,
          'message' => 'Spracovanie obrázkov bolo úspešne dokončené.'
        );
      } else {
        $output = array(
          'status'  => 401,
          'message' => self::$registry->getService('translator')->translate("global_alert_form_processed_error")
        );
      }
    }
    self::$registry->getService('json')->push($output);
    self::$registry->getService('json')->renderJSON();
  }
  
  public function thumbnailReloadBlock()
  {
    self::$registry->getService('template')->assign(
      'resizeRuleList', 
      self::$registry->getService('store')->resizeRuleList()
    );
    self::$registry->getService('template')->assign(
      'thumbSectionList', 
      self::$registry->getService('store')->thumbSectionList()
    );
    self::$registry->getService('template')->display("extends:[cpanel]store/thumbnail/ajax/reload.tpl");
  }
  
  public function deleteResizeRules()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["resizeRuleList"]) && 
      (is_array($form["resizeRuleList"]) && (count($form["resizeRuleList"]) > 0))
    ) {
      if((bool) self::$registry->getService('store')->deleteResizeRules( $form["resizeRuleList"] ) === true) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/thumbnail'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/thumbnail',
          true
        );
      }
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/thumbnail'
      );
    }
  }
  
  public function deleteThumbnails()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["thumbList"]) && 
      (is_array($form["thumbList"]) && (count($form["thumbList"]) > 0))
    ) {
      if((bool) self::$registry->getService('store')->deleteThumbnails( $form["thumbList"] ) === true) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/thumbnail'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/thumbnail',
          true
        );
      }
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/thumbnail'
      );
    }
  }
  
  /*********************************************************************************************************
  *
  * WAREHOUSES
  *
  *********************************************************************************************************/
  
  public function storeWarehouseList( $page = 0, $limit = 0 )
  {
    // SEARCH
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? null : null;
    // SET
    $page  = ((int) $page > 0) ? (int) $page : 1;
    $limit = ((int) $limit > 0) ? (int) $limit : 10;
    $total = self::$registry->getService('store')->countWarehouses();
    // PAGINATION
    self::$registry->getService('pagination')->setPrefix( 'cpanel/store-warehouse-list' );
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
      'warehouseList',
      self::$registry->getService('store')->warehouseList(true)
    );
    self::$registry->getService('template')->assign(
      'countryList',
      self::$registry->getService('languages')->getCountryList()
    );
    self::$registry->getService('template')->assign(
      'currencyList',
      self::$registry->getService('store')->getCurrenciesList()
    );
    self::$registry->getService('template')->assign(
      'taxList',
      self::$registry->getService('store')->getTaxesList()
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/warehouses/warehouse_list.tpl");
  }
  
  public function storeCreateWarehouse()
  {
    $form  = self::$registry->getService('irequest')->getPost();
    $error = [];
    
    if(!isset($form['w-name']) || (strlen($form['w-name']) < 3)) {
      $t = self::$registry->getService('translator')->translate("store_warehouse_error_name");
      $error[] = (is_null($t)) ? 'Warehouse name is required.' : $t;
    }
    if(!isset($form['w-type']) || (((int) $form['w-type'] < 1) && ((int) $form['w-type'] > 3))) {
      $t = self::$registry->getService('translator')->translate("store_warehouse_error_type");
      $error[] = (is_null($t)) ? 'Warehouse type is required.' : $t;
    }
    if(!isset($form['w-usage']) || (((int) $form['w-usage'] < 1) && ((int) $form['w-usage'] > 4))) {
      $t = self::$registry->getService('translator')->translate("store_warehouse_error_usage");
      $error[] = (is_null($t)) ? 'Warehouse usage is required.' : $t;
    }
    if(!isset($form['currency']) || ((bool) self::$registry->getService('store')->isCurrencyById( $form['currency'] ) === false)) {
      $t = self::$registry->getService('translator')->translate("store_warehouse_error_currency");
      $error[] = (is_null($t)) ? 'You must set the currency for warehouse.' : $t;
    }
    if(!isset($form['tax']) || ((bool) self::$registry->getService('store')->isTaxById( $form['tax'] ) === false)) {
      $t = self::$registry->getService('translator')->translate("store_warehouse_error_tax");
      $error[] = (is_null($t)) ? 'You must set the tax for warehouse.' : $t;
    }
    if(((int) $form['w-type'] <= 0) || ((int) $form['w-type'] > 3)) {
      $t = self::$registry->getService('translator')->translate("store_warehouse_error_invalid_option_type");
      $error[] = (is_null($t)) ? 'Invalid option for warehouse type.Please you choose from tree options.' : $t;
    }
    if(((int) $form['w-usage'] <= 0) || ((int) $form['w-usage'] > 4)) {
      $t = self::$registry->getService('translator')->translate("store_warehouse_error_invalid_option_usage");
      $error[] = (is_null($t)) ? 'Invalid option for warehouse usage.Please you choose from tree options.' : $t;
    }
    if(count($error) > 0) {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'The processing of applications following errors occurred',
        $error,
        'cpanel/store-warehouse-list',
        false
      );
    } else {
      if(self::$registry->getService('store')->createWarehouse( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-warehouse-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-warehouse-list',
          true
        );
      }
    }
  }
  
  public function storeWarehouseEditFormModal()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(isset($form['whId']) && ((bool) self::$registry->getService('store')->isWarehouseById($form['whId']) === true)) {
      self::$registry->getService('template')->assign(
        'data',
        self::$registry->getService('store')->warehouseById($form['whId'])
      );
      self::$registry->getService('template')->assign(
        'countryList',
        self::$registry->getService('languages')->getCountryList()
      );
      self::$registry->getService('template')->assign(
        'currencyList',
        self::$registry->getService('store')->getCurrenciesList()
      );
      self::$registry->getService('template')->assign(
        'taxList',
        self::$registry->getService('store')->getTaxesList()
      );
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_edit_form_modal.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeUpdateWarehouse()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['whId'])) {
      if(self::$registry->getService('store')->isWarehouseById($form['whId'])) {
        $error = [];
    
        if(!isset($form['w-name']) || (strlen($form['w-name']) < 3)) {
          $t = self::$registry->getService('translator')->translate("store_warehouse_error_name");
          $error[] = (is_null($t)) ? 'Warehouse name is required.' : $t;
        }
        if(!isset($form['w-type']) || (((int) $form['w-type'] < 1) && ((int) $form['w-type'] > 3))) {
          $t = self::$registry->getService('translator')->translate("store_warehouse_error_type");
          $error[] = (is_null($t)) ? 'Warehouse type is required.' : $t;
        }
        if(!isset($form['w-usage']) || (((int) $form['w-usage'] < 1) && ((int) $form['w-usage'] > 4))) {
          $t = self::$registry->getService('translator')->translate("store_warehouse_error_usage");
          $error[] = (is_null($t)) ? 'Warehouse usage is required.' : $t;
        }
        if(!isset($form['currency']) || ((bool) self::$registry->getService('store')->isCurrencyById( $form['currency'] ) === false)) {
          $t = self::$registry->getService('translator')->translate("store_warehouse_error_currency");
          $error[] = (is_null($t)) ? 'You must set the currency for warehouse.' : $t;
        }
        if(!isset($form['tax']) || ((bool) self::$registry->getService('store')->isTaxById( $form['tax'] ) === false)) {
          $t = self::$registry->getService('translator')->translate("store_warehouse_error_tax");
          $error[] = (is_null($t)) ? 'You must set the tax for warehouse.' : $t;
        }
        if(((int) $form['w-type'] <= 0) || ((int) $form['w-type'] > 3)) {
          $t = self::$registry->getService('translator')->translate("store_warehouse_error_invalid_option_type");
          $error[] = (is_null($t)) ? 'Invalid option for warehouse type.Please you choose from tree options.' : $t;
        }
        if(((int) $form['w-usage'] <= 0) || ((int) $form['w-usage'] > 4)) {
          $t = self::$registry->getService('translator')->translate("store_warehouse_error_invalid_option_usage");
          $error[] = (is_null($t)) ? 'Invalid option for warehouse usage.Please you choose from tree options.' : $t;
        }
        if(count($error) > 0) {
          self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            'The processing of applications following errors occurred',
            $error,
            'cpanel/store-warehouse-list',
            false
          );
        } else {
          if(self::$registry->getService('store')->updateWarehouseDataById( $form )) {
            self::$registry->getService('irequest')->movePage(
              301,
              'cpanel/store-warehouse-list'
            );
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store-warehouse-list',
              true
            );
          }
        }
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          self::$registry->getService('translator')->translate("store_info_warehouse_not_found"),
          null,
          'cpanel/store-warehouse-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        'POSTING PAYLOAD IS INCORRECT.',
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storeWarehouseManage( $whSecureKey = '', $sort = 0, $page = 0, $limit = 0 )
  {
    if((bool) self::$registry->getService('store')->isWarehouseBySecureKey( $whSecureKey )) {
      // WAREHOUSE ID
      $whID = self::$registry->getService('store')->warehouseIdBySecureKey( $whSecureKey );
      // SEARCH FULLTEXT
      $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
      $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
      // PAGINATION VARS
      $page  = ((int) $page === 0) ? 1 : (int) $page;
      $limit = ((int) $limit === 0) ? 10 : (int) $limit;
      $total = self::$registry->getService('store')->countArticlesByWarehouseId($whID, null, $useList);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( 'cpanel/store-warehouse-manage/'.$whSecureKey.'/'.(int) $sort );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // WAREHOUSE OBJECT
      $data = self::$registry->getService('store')->warehouseById( $whID );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'whAL',
        self::$registry->getService('store')->warehouseALById($whID, true, null, $useList, $sort)
      );
      self::$registry->getService('template')->assign('data',$data);
      self::$registry->getService('template')->assign('sort',$sort);
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('keywords',$keywords);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/warehouses/warehouse_manage.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_info_warehouse_not_found"),
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storePushArticleToWarehouseModal()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['whId']) && isset($form['page']) && isset($form['limit'])) &&
      self::$registry->getService('store')->isWarehouseById( $form['whId'] )
    ) {
      // WAREHOUSE ARTICLE LIST
      $WHAL = self::$registry->getService('store')->warehouseALIdsById( $form['whId'] );
      // INIT
      $useList    = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $form['keywords'] ) : null;
      $ignoreList = null;
      
      if(is_array($WHAL) && (count($WHAL) > 0)) {
        $ignoreList = [];

        foreach($WHAL as $value) {
          $ignoreList[] = $value->id_article;
        }
      }
      // SET PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] >= 1) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('store')->countArticles($ignoreList, $useList);
      // SORT RULE
      $sortRuleId = (isset($form['sort']) && ((int) $form['sort'] > 0)) ? (int) $form['sort'] : 0;
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( '' );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left', true)
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'articleList',
        self::$registry->getService('store')->articleList(true, $ignoreList, $useList, $sortRuleId)
      );
      self::$registry->getService('template')->assign(
        'whLR',
        self::$registry->getService('store')->warehouseLastRelationDataById( $form['whId'] )
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('sort',$sortRuleId);
      self::$registry->getService('template')->assign('keywords',$form['keywords']);
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/add_on_article_list_modal.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeAddArticleToWarehouse()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["articleId"]) && isset($form["action"]) && isset($form["value"]) && isset($form["qty"]))  &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      self::$registry->getService('store')->isArticleById( $form["articleId"] ) &&
      (((int) $form["action"] >= 0) && ((int) $form["action"] <= 5))
    ) {
      if((bool) self::$registry->getService('store')->haveWarehouseArticleById($form["whId"], $form["articleId"]) === false) {
        if(self::$registry->getService('store')->addArticleToWarehouse( $form )) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully added to the warehouse.'
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
          'message' => 'The article is already in the warehouse.'
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
  
  public function storeAddArticleListToWarehouse()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["ids"]) && isset($form["qty"]) && isset($form["action"]) && isset($form["value"]))  &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      (is_array($form["ids"]) && (count($form["ids"]) > 0)) &&
      (is_array($form["qty"]) && (count($form["qty"]) > 0)) &&
      (((int) $form["action"] >= 0) && ((int) $form["action"] <= 5))
    ) {
      if(self::$registry->getService('store')->addArticleListToWarehouse(
        $form["whId"],
        $form["ids"],
        $form["qty"],
        $form["action"],
        $form["value"]
      )) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully added to the warehouse.'
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
  
  public function storeImpactImportALToWarehouse()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["action"]) && isset($form["value"]))  &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      (((int) $form["action"] >= 0) && ((int) $form["action"] <= 5))
    ) {
      if(self::$registry->getService('store')->impactImportALToWarehouse(
        $form["whId"],
        $form["action"],
        $form["value"]
      )) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully added to the warehouse.'
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
  
  public function storeWarehouseAssigningArticleListTable()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["whId"]) && isset($form['page']) && isset($form['limit']) && isset($form['sort'])) &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] )
    ) {
      // WAREHOUSE OBJECT
      $data = self::$registry->getService('store')->warehouseById( $form["whId"] );
      // SEARCH FULLTEXT
      $keywords = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? (string) $form['keywords'] : '';
      $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
      // PAGINATION VARS
      $page  = ((int) $form['page'] === 0) ? 1 : (int) $form['page'];
      $limit = ((int) $form['limit'] === 0) ? 10 : (int) $form['limit'];
      $total = self::$registry->getService('store')->countArticlesByWarehouseId($form["whId"], null, null);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( 'cpanel/store-warehouse-manage/'.$data->secure_key.'/'.(int) $form['sort'] );
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
        'whAL',
        self::$registry->getService('store')->warehouseALById($form["whId"], true, null, $useList, $form['sort'], true)
      );
      self::$registry->getService('template')->assign('data',$data);
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('sort',$form['sort']);
      self::$registry->getService('template')->assign('keywords',$keywords);
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_articles_assigning_table.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseDeleteArticle()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["articleId"]))  &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if((bool) self::$registry->getService('store')->haveWarehouseArticleById($form["whId"], $form["articleId"]) === true) {
        if(self::$registry->getService('store')->deleteWarehouseArticleById($form["whId"], $form["articleId"])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully deleted to the warehouse.'
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
          'message' => 'The article not found in the warehouse.'
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
  
  public function storeWarehouseForceDeleteAL()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["whId"]) && self::$registry->getService('store')->isWarehouseById( $form["whId"] )) {
      if(self::$registry->getService('store')->deleteWarehouseFALById( $form["whId"] )) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully deleted to the warehouse.'
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
  
  public function storeWarehouseDeleteSAL()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["ids"]))  &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      (is_array($form["ids"]) && (count($form["ids"]) > 0))
    ) {
      if(self::$registry->getService('store')->deleteWarehouseSAL($form["whId"], $form["ids"])) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully removed to the warehouse.'
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
  
  public function storeWarehouseUpdateArticleList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['whId']) && isset($form['whAL']) && isset($form['action']) && isset($form['value'])) && 
      (isset($form["sort"]) && isset($form["page"]) && isset($form["limit"]) && isset($form["keywords"])) &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      (is_array($form["whAL"]) && (count($form["whAL"]) > 0)) && 
      (((int) $form["action"] >= 0) && ((int) $form["action"] <= 5))
    ) {
      $wSecKey = self::$registry->getService('store')->warehouseSecureKeyById( $form['whId'] );
      
      if(self::$registry->getService('store')->updateWarehouseAL(
        $form['whId'],
        $form['whAL'],
        $form['action'],
        $form['value']
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-warehouse-manage/'. $wSecKey .'/'. $form["sort"] .'/'. $form["page"] .'/'. $form["limit"] .((strlen($form["keywords"]) >= 3) ? '?q='.htmlentities( urlencode($form["keywords"]) ) : '')
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-warehouse-manage/'. $wSecKey,
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storeWarehouseUseForceAL()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["action"]) && isset($form["value"]))  &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      (((int) $form["action"] >= 0) && ((int) $form["action"] <= 5))
    ) {
      if(self::$registry->getService('store')->useForceUpdateWarehouseAL(
        $form["whId"],
        $form["action"],
        $form["value"]
      )) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully updated to the warehouse.'
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
  
  public function storeWarehouseUpdateArticleQty()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form['articleId']) && isset($form["qty"]))  &&
      self::$registry->getService('store')->isWarehouseById( $form["whId"] ) &&
      self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if(self::$registry->getService('store')->updateWarehouseArticleById(array(
        'qty' => (int)$form["qty"]   
      ), $form["whId"], $form["articleId"])) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The article qty has successfully updated to the warehouse.'
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
  
  public function storeWarehouseCreateMatrix( $whId = '', $articleId = 0 )
  {
    if((((int) $whId > 0) && ((int) $articleId > 0)) && 
      ((bool) self::$registry->getService('store')->isWarehouseById( $whId ) === true) &&
      ((bool) self::$registry->getService('store')->isArticleById( $articleId ) === true) &&
      ((bool) self::$registry->getService('store')->isWHMatrixByWHAId($whId, $articleId) === false)
    ) {
      $matrixSecKey = self::$registry->getService('store')->createWarehouseMatrix($whId, $articleId);
      
      if(!is_bool($matrixSecKey) && 
        ((bool) self::$registry->getService('store')->isWhMatrixBySecureKey( $matrixSecKey ) === true)
      ) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-warehouse-matrix-manage/'. $matrixSecKey
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-warehouse-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_info_warehouse_not_found"),
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storeWarehouseMatrixManage( $matrixSecKey = '' )
  {
    if((strlen($matrixSecKey) > 0) &&
      ((bool) self::$registry->getService('store')->isWhMatrixBySecureKey( $matrixSecKey ) === true)
    ) {
      $matrix = self::$registry->getService('store')->whMatrixById(
        self::$registry->getService('store')->whMatrixIdBySecureKey( $matrixSecKey )
      );
      self::$registry->getService('template')->assign(
        'data',
        self::$registry->getService('store')->warehouseById(
          $matrix->id_wh
        )
      );
      self::$registry->getService('template')->assign(
        'article',
        self::$registry->getService('store')->articleDataById( $matrix->id_article )
      );
      self::$registry->getService('template')->assign('matrix',$matrix);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/warehouses/warehouse_matrix_manage.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_info_warehouse_not_found"),
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storeWarehouseMatrixAttrVModal()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form['mId']) && isset($form['parId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      (((int) $form['parId'] === 1) || ((int) $form['parId'] === 2))
    ) {
      self::$registry->getService('template')->assign(
        'attrList',
        self::$registry->getService('store')->whMatrixAttrList($form['mId'], $form['parId'])
      );
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_matrix_attr_v_list_modal.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixAttrListReload()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['mId']) && isset($form['parId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      (((int) $form['parId'] === 1) || ((int) $form['parId'] === 2))
    ) {
      self::$registry->getService('template')->assign(
        'attrList',
        self::$registry->getService('store')->whMatrixAttrList($form['mId'], $form['parId'])
      );
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_matrix_attr_list_reload.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixAttrVList()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['mId']) && isset($form['attrId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      ((((int) $form['attrId'] > 0) && ((bool) self::$registry->getService('store')->isAttributeById($form['attrId']) === true)) || ((int) $form['attrId'] === 0))
    ) {
      self::$registry->getService('template')->assign(
        'attrVList',
        self::$registry->getService('store')->whMatrixAttrVListByAttrId($form['mId'], $form['attrId'])
      );
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_matrix_attr_v_list_table.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixAddAttrV()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['mId']) && isset($form['attrVId']) && isset($form['cdt']) && isset($form['cdv']) && isset($form['parId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      ((bool) self::$registry->getService('store')->isAttributeValueById(0, $form['attrVId']) === true) &&
      (((int) $form['parId'] === 1) || ((int) $form['parId'] === 2))
    ) {
      if((bool) self::$registry->getService('store')->addAttrVToWHMatrix(
        $form['mId'],
        $form['attrVId'],
        $form['cdt'],
        $form['cdv'],
        $form['parId']
      ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The attribute value has successfully added to the warehouse product matrix.'
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
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixAddAttrVSForce()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['mId']) && isset($form['data']) && isset($form['parId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      (is_array($form['data']) && (count($form['data']) > 0)) &&
      (((int) $form['parId'] === 1) || ((int) $form['parId'] === 2))
    ) {
      if((bool) self::$registry->getService('store')->addAttrVSFToWHMatrix(
        $form['mId'],
        $form['data'],
        $form['parId']
      ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The attribute values has successfully added to the warehouse product matrix.'
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
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixDeleteAttrV()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['mId']) && isset($form['attrVId']) && isset($form['parId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      ((bool) self::$registry->getService('store')->isWHMatrixParByAttrVId($form['mId'], $form['attrVId']) === true) &&
      (((int) $form['parId'] === 1) || ((int) $form['parId'] === 2))
    ) {
      if((bool) self::$registry->getService('store')->deleteWHMatrixParById(
        $form['mId'],
        $form['attrVId'],
        $form['parId']
      ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The attribute value has successfully deleted from the warehouse product matrix.'
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
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixDeleteAttrVSForce()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['mId']) && isset($form['parId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      (((int) $form['parId'] === 1) || ((int) $form['parId'] === 2))
    ) {
      if((bool) self::$registry->getService('store')->deleteWHMatrixParXById(
        $form['mId'],
        $form['parId']
      ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The attribute values has successfully deleted from the warehouse product matrix.'
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
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixDeleteAttrVSSelect()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['mId']) && isset($form['data']) && isset($form['parId'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['mId']) === true) &&
      (is_array($form['data']) && (count($form['data']) > 0)) &&
      (((int) $form['parId'] === 1) || ((int) $form['parId'] === 2))
    ) {
      if((bool) self::$registry->getService('store')->deleteWHMatrixParXVs(
        $form['mId'],
        $form['data'],
        $form['parId']
      ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The attribute values has successfully deleted from the warehouse product matrix.'
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
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeWarehouseMatrixUpdateParXVs()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['matrix-id']) && isset($form['parX'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById($form['matrix-id']) === true) &&
      (is_array($form['parX']) && (count($form['parX']) > 0))
    ) {
      $mSecKey = self::$registry->getService('store')->whMatrixSecureKeyById( $form['matrix-id'] );
      
      if(self::$registry->getService('store')->updateWHMatrixParXVs( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-warehouse-matrix-manage/'.$mSecKey
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-warehouse-matrix-manage/'.$mSecKey,
          true
        );
      }
      self::$registry->getService('helper')->dump($form);
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        'POSTING PAYLOAD IS INCORRECT.',
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storeWarehouseMatrixParABReload()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['mId']) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById( $form['mId'] ) === true)
    ) {
      self::$registry->getService('template')->assign(
        'matrix',
        self::$registry->getService('store')->whMatrixById( $form['mId'] )
      );
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_matrix_reload.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '402 ERROR',
        self::$registry->getService('translator')->translate("store_info_warehouse_matrix_not_found")
      );
    }
  }
  
  public function storeWarehouseMatrixQty( $matrixSecKey = '' )
  {
    $WHMId = ((bool) self::$registry->getService('store')->isWhMatrixBySecureKey( $matrixSecKey ) === true) ? self::$registry->getService('store')->whMatrixIdBySecureKey( $matrixSecKey ) : 0;
    
    if((bool) self::$registry->getService('store')->isWHMatrixById( $WHMId ) === true) {
      if((bool) self::$registry->getService('store')->haveWHMAtrixQtyAC( $WHMId ) === false) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-warehouse-matrix-manage/'. $matrixSecKey
        );
      }
      $matrix = self::$registry->getService('store')->whMatrixById( $WHMId );
      $prev   = self::$registry->getService('store')->prevWHMatrixById($matrix->id_wh, $matrix->id_article);
      $next   = self::$registry->getService('store')->nextWHMatrixById($matrix->id_wh, $matrix->id_article);
      
      self::$registry->getService('template')->assign(
        'data',
        self::$registry->getService('store')->warehouseById(
          $matrix->id_wh
        )
      );
      self::$registry->getService('template')->assign(
        'article',
        self::$registry->getService('store')->articleDataById( $matrix->id_article )
      );
      self::$registry->getService('template')->assign('matrix',$matrix);
      self::$registry->getService('template')->assign('prev',$prev);
      self::$registry->getService('template')->assign('next',$next);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/warehouses/warehouse_matrix_qty.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_info_warehouse_matrix_not_found"),
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storeWarehouseMatrixUpdateParABQty()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["mId"]) && isset($form["articleId"]) && isset($form["parAId"]) && isset($form["parBId"]) && isset($form["qty"]))  &&
      ((bool) self::$registry->getService('store')->isWHMatrixById( $form["mId"] ) === true) && 
      ((bool) self::$registry->getService('store')->isArticleById( $form["articleId"] ) === true) &&
      ((bool) self::$registry->getService('store')->isWHMatrixArticleById($form["mId"], $form["articleId"]) === true) &&
      ((bool) self::$registry->getService('store')->isWHMatrixParCombinationByIds($form["mId"], $form['parAId'], $form['parBId']) === true)
    ) {
      if(((bool) self::$registry->getService('store')->updateWHMatrixParQtyById(
        $form["qty"],
        $form["mId"],
        $form["parAId"],
        $form["parBId"] 
      ) === true) && ((bool) self::$registry->getService('store')->updateWHMatrixParABQty(
        $form["mId"],
        $form["articleId"]
      ) === true)) {
        $data = self::$registry->getService('store')->whMatrixQtyRDById(
          $form["mId"],
          $form["parAId"],
          $form["parBId"]
        );
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The matrix qty has successfully updated to the warehouse.',
          'data'    => (is_object($data)) ? $data : null
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
  
  public function storeWarehouseMatrixSearchAutocomplete()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form['mId']) && isset($form['q']) && (strlen($form['q']) >= 3)) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById( $form['mId'] ) === true)   
    ) {
      // WAREHOUSE ID
      $whId = self::$registry->getService('store')->warehouseIdByWHMId( $form['mId'] );
      // SEARCH FULLTEXT
      $keywords = (isset($form['q']) && (strlen($form['q']) >= 3)) ? (string) $form['q'] : '';
      $useList  = (((int) $whId > 0) && (strlen($keywords) >= 3)) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
      $whAL     = (((int) $whId > 0) && (is_array($useList) && (count($useList) > 0))) ? self::$registry->getService('store')->warehouseALById($whId, false, null, $useList, 0, true) : null;

      self::$registry->getService('template')->assign('whAL', $whAL);
      self::$registry->getService('template')->assign('keywords', $form['q']);
      self::$registry->getService('template')->display('extends:[cpanel]store/warehouses/ajax/warehouse_matrix_search_autocomplete.tpl');
    } else {
      self::$registry->getService('template')->assign('whAL', null);
      self::$registry->getService('template')->assign('keywords', '');
      self::$registry->getService('template')->display('extends:[cpanel]store/warehouses/ajax/warehouse_matrix_search_autocomplete.tpl');
    }
  }
  
  public function storeWarehouseArticleChart( $whId = 0, $articleRef = '' )
  {
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/warehouses/warehouse_article_chart.tpl");
  }
  
  public function storeWarehouseMatrixDelete()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["m-id"]) && ((bool) self::$registry->getService('store')->isWHMatrixById( $form["m-id"] ) === true)) {
      $WHSk = self::$registry->getService('store')->warehouseSecureKeyByMatrixId( $form["m-id"] );
      
      if((bool) self::$registry->getService('store')->deleteWHMatrixDeleteF( $form["m-id"] ) === true) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-warehouse-manage/'. $WHSk
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-warehouse-matrix-manage/'. self::$registry->getService('store')->whMatrixSecureKeyById( $form["m-id"] ),
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function storeWarehouseDelete()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['whId']) &&
      ((bool) self::$registry->getService('store')->isWarehouseById( $form['whId'] ) === true)  
    ) {
      if((bool) self::$registry->getService('store')->deleteWarehouseById( $form['whId'] ) === true) {
        // SEARCH
        $keywords = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? (string) $form['keywords'] : '';
        //$useList  = (strlen($keywords) >= 3) ? null : null;
        // SET
        $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
        $limit = (isset($form['limit']) && (((int) $form['limit'] >= 1) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
        $total = self::$registry->getService('store')->countWarehouses();
        // PAGINATION
        self::$registry->getService('pagination')->setPrefix( 'cpanel/store-warehouse-list' );
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
          'warehouseList',
          self::$registry->getService('store')->warehouseList(true)
        );
        self::$registry->getService('template')->assign('page',$page);
        self::$registry->getService('template')->assign('limit',$limit);
        self::$registry->getService('template')->assign('total',$total);
        self::$registry->getService('template')->assign('keywords',$keywords);
        self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_list_reload.tpl");
      } else {
        self::$registry->getService('messenger')->alert(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error")
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
  
  public function storeWarehouseSDelete()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['ids']) && (is_array($form['ids']) && (count($form['ids']) > 0))) {
      if((bool) self::$registry->getService('store')->deleteWarehouseByIds( $form['ids'] ) === true) {
        // SEARCH
        $keywords = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? (string) $form['keywords'] : '';
        //$useList  = (strlen($keywords) >= 3) ? null : null;
        // SET
        $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
        $limit = (isset($form['limit']) && (((int) $form['limit'] >= 1) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
        $total = self::$registry->getService('store')->countWarehouses();
        // PAGINATION
        self::$registry->getService('pagination')->setPrefix( 'cpanel/store-warehouse-list' );
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
          'warehouseList',
          self::$registry->getService('store')->warehouseList(true)
        );
        self::$registry->getService('template')->assign('page',$page);
        self::$registry->getService('template')->assign('limit',$limit);
        self::$registry->getService('template')->assign('total',$total);
        self::$registry->getService('template')->assign('keywords',$keywords);
        self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_list_reload.tpl");
      } else {
        self::$registry->getService('messenger')->alert(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error")
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
  
  public function storeWarehouseFDelete()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form['a']) && ((int) $form['a'] === 1)) {
      if((bool) self::$registry->getService('store')->deleteWarehouseForce() === true) {
        self::$registry->getService('template')->assign('warehouseList',null);
        self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_list_reload.tpl");
      } else {
        self::$registry->getService('messenger')->alert(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error")
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
  
  public function warehouse_manage_expedition_time( $whSecureKey = '' )
  {
    $whID = ((strlen($whSecureKey) === 32) && ((bool) self::$registry->getService('store')->isWarehouseBySecureKey( $whSecureKey ) === true)) ? self::$registry->getService('store')->warehouseIdBySecureKey( $whSecureKey ) : 0;
    
    if((bool) self::$registry->getService('store')->isWarehouseById( $whID ) === true) {
      $data = self::$registry->getService('store')->warehouseById( $whID );
      
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'et_list',
        self::$registry->getService('store')->whExpeditionTimeList( $data->id_wh )
      );
      self::$registry->getService('template')->assign('data',$data);
      // Render
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/warehouses/warehouse_manage_expedition_time.tpl");
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/store-warehouse-list'
      );
    }
  }
  
  public function create_warehouse_expedition_time( $whSecureKey = '' )
  {
    $whID  = ((strlen($whSecureKey) === 32) && ((bool) self::$registry->getService('store')->isWarehouseBySecureKey( $whSecureKey ) === true)) ? self::$registry->getService('store')->warehouseIdBySecureKey( $whSecureKey ) : 0;
    $form  = self::$registry->getService('irequest')->getPost();
    $error = [];
    
    if(!isset($form['numerical-value']) || !is_numeric($form['numerical-value'])) {
      $error[] = 'Numerical value is required and must be numeric.';
    }
    if(!isset($form['unit-time']) || !is_string($form['unit-time'])) {
      $error[] = 'Unit time is required and must be string.';
    }
    if((bool) self::$registry->getService('store')->isWarehouseById( $whID ) === true) {
      if(count($error)  === 0) {
        if((bool) self::$registry->getService('store')->createWHExpeditionTime($form, $whID) === true) {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/warehouse-manage-expedition-time/'. $whSecureKey
          );
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
            null,
            'cpanel/warehouse-manage-expedition-time/'. $whSecureKey,
            true
          );
        }
      } else {
        self::$registry->getService('messenger')->display(
          3,
          'WARNING',
          'The processing of applications following errors occurred',
          $error,
          'cpanel/warehouse-manage-expedition-time/'. $whSecureKey,
          false
        );
      }
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/store-warehouse-list'
      );
    }
  }
  
  public function update_warehouse_expedition_times()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(((isset($form["whs"]) && (strlen($form["whs"]) === 32)) && isset($form["whET"])) &&
      ((bool) self::$registry->getService('store')->isWarehouseBySecureKey( $form["whs"] ) === true) &&
      (is_array($form["whET"]) && (count($form["whET"]) > 0)) 
    ) {
      if((bool) self::$registry->getService('store')->updateWHExpeditionTimes( $form["whET"] ) === true) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/warehouse-manage-expedition-time/'. $form["whs"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/warehouse-manage-expedition-time/'. $form["whs"],
          true
        );
      }
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/store-warehouse-list'
      );
    }
  }
  
  public function warehouse_expedition_time_assign_article( $whSecureKey = '', $whEtId = 0, $sort = 0, $page = 0, $limit = 0 )
  {
    $whID = ((strlen($whSecureKey) === 32) && ((bool) self::$registry->getService('store')->isWarehouseBySecureKey( $whSecureKey ) === true)) ? self::$registry->getService('store')->warehouseIdBySecureKey( $whSecureKey ) : 0;
    
    if(((bool) self::$registry->getService('store')->isWarehouseById( $whID ) === true) &&
      ((bool) self::$registry->getService('store')->isWHExpeditionTime( $whEtId ) === true)
    ) { 
      // WAREHOUSE / WH EXPEDITION TIME OBJECTs
      $wh   = self::$registry->getService('store')->warehouseById( $whID );
      $whET = self::$registry->getService('store')->whETById( $whEtId );
      // SEARCH FULLTEXT
      $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
      $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
      // PAGINATION VARS
      $page  = ((int) $page > 0) ? (int) $page : 1;
      $limit = ((int) $limit > 0) ? (int) $limit : 10;
      $total = self::$registry->getService('store')->countWHETArticlesByIds($whEtId, null, $useList);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( 'cpanel/warehouse-expedition-time-assign-article/'.$whSecureKey.'/'.$whEtId.'/'.(int) $sort );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'whETAL',
        self::$registry->getService('store')->whETALById($whEtId, true, null, $useList, $sort)
      );
      self::$registry->getService('template')->assign('wh',$wh);
      self::$registry->getService('template')->assign('whET',$whET);
      self::$registry->getService('template')->assign('sort',$sort);
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('keywords',$keywords);
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/warehouses/warehouse_manage_expedition_time_al.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_info_warehouse_not_found"),
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }
  
  public function warehouse_expedition_time_assigning_article_list_table()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["whId"]) && isset($form["whETId"]) && isset($form['page']) && isset($form['limit']) && isset($form['sort'])) &&
      ((bool) self::$registry->getService('store')->isWarehouseById( $form["whId"] ) === true) &&
      ((bool) self::$registry->getService('store')->isWHExpeditionTime( $form["whETId"] ) === true)
    ) {
      // WAREHOUSE / WH EXPEDITION TIME OBJECTs
      $wh   = self::$registry->getService('store')->warehouseById( $form["whId"] );
      $whET = self::$registry->getService('store')->whETById( $form["whETId"] );
      // SEARCH FULLTEXT
      $keywords = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? (string) $form['keywords'] : '';
      $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
      // PAGINATION VARS
      $page  = ((int) $form['page'] === 0) ? 1 : (int) $form['page'];
      $limit = ((int) $form['limit'] === 0) ? 10 : (int) $form['limit'];
      $total = self::$registry->getService('store')->countWHETArticlesByIds($form["whETId"], null, null);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( 'cpanel/warehouse-expedition-time-assign-article/'.$wh->secure_key.'/'.$whET->id_et.'/'.(int) $form['sort'] );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'whETAL',
        self::$registry->getService('store')->whETALById($form["whETId"], true, null, $useList, $form['sort'])
      );
      self::$registry->getService('template')->assign('wh',$wh);
      self::$registry->getService('template')->assign('whET',$whET);
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('sort',$form['sort']);
      self::$registry->getService('template')->assign('keywords',$keywords);
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/warehouse_et_article_list_assigning_table.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function warehouse_expedition_time_al_modal()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['whId']) && isset($form['whETId']) && isset($form['page']) && isset($form['limit'])) &&
      self::$registry->getService('store')->isWHExpeditionTime( $form['whETId'] )
    ) {
      // WAREHOUSE EXPEDITION TIME ASSIGN ARTICLE LIST
      $whETAL = self::$registry->getService('store')->whETAALIdsByWHId( $form['whId'] );
      // INIT
      $useList    = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $form['keywords'] ) : null;
      $ignoreList = null;
      
      if(is_array($whETAL) && (count($whETAL) > 0)) {
        $ignoreList = [];

        foreach($whETAL as $value) {
          $ignoreList[] = $value->id_article;
        }
      }
      // SET PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] >= 1) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('store')->countArticlesByWarehouseId($form['whId'], $ignoreList, $useList);
      // SORT RULE
      $sortRuleId = (isset($form['sort']) && ((int) $form['sort'] > 0)) ? (int) $form['sort'] : 0;
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( '' );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-left', true)
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'etAAL',
        self::$registry->getService('store')->warehouseALById($form['whId'], true, $ignoreList, $useList, $sortRuleId, true)
      );
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('sort',$sortRuleId);
      self::$registry->getService('template')->assign('keywords',$form['keywords']);
      self::$registry->getService('template')->display("extends:[cpanel]store/warehouses/ajax/add_on_et_article_list_modal.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function add_article_to_warehouse_expedition_time()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["whETId"]) && isset($form["articleId"]))  &&
      ((bool) self::$registry->getService('store')->isWarehouseById( $form["whId"] ) === true) &&
      ((bool) self::$registry->getService('store')->isWHExpeditionTime( $form["whETId"] ) === true) &&
      ((bool) self::$registry->getService('store')->isArticleById( $form["articleId"] ) === true)
    ) {
      if((bool) self::$registry->getService('store')->haveWarehouseETArticleById($form["whETId"], $form["articleId"]) === false) {
        if((bool) self::$registry->getService('store')->addArticleToWarehouseET(array(
          ':id_et'      => (int) $form["whETId"],
          ':id_wh'      => (int) $form["whId"],
          ':id_article' => (int) $form["articleId"]
        )) === true) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully added to the warehouse expedition time.'
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
          'message' => 'The article is already in the warehouse expedition time.'
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
  
  public function add_article_list_to_warehouse_expedition_time()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["whETId"]) && isset($form["ids"]))  &&
      ((bool) self::$registry->getService('store')->isWarehouseById( $form["whId"] ) === true) &&
      ((bool) self::$registry->getService('store')->isWHExpeditionTime( $form["whETId"] ) === true) &&
      (is_array($form["ids"]) && (count($form["ids"]) > 0))
    ) {
      if(self::$registry->getService('store')->addArticleListToWarehouseET(
        $form["whETId"],
        $form["whId"],
        $form["ids"]
      )) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully added to the warehouse expedition time.'
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
  
  public function add_impact_al_to_warehouse_expedition_time()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whId"]) && isset($form["whETId"]))  &&
      ((bool) self::$registry->getService('store')->isWarehouseById( $form["whId"] ) === true) &&
      ((bool) self::$registry->getService('store')->isWHExpeditionTime( $form["whETId"] ) === true)
    ) {
      if((bool) self::$registry->getService('store')->AddImpactALToWarehouseET(
        $form["whId"],
        $form["whETId"]
      ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully added to the warehouse expedition time.'
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
  
  public function delete_warehouse_expedition_time_assign_article()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whETId"]) && isset($form["articleId"]))  &&
      ((bool) self::$registry->getService('store')->isWHExpeditionTime( $form["whETId"] ) === true) &&
      ((bool) self::$registry->getService('store')->isArticleById( $form["articleId"] ) === true)
    ) {
      if((bool) self::$registry->getService('store')->haveWarehouseETArticleById(
        $form["whETId"], 
        $form["articleId"]
      ) === true) {
        if((bool) self::$registry->getService('store')->deleteWarehouseETArticleById(
          $form["whETId"], 
          $form["articleId"]
        ) === true) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully deleted from the warehouse expedition time.'
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
          'message' => 'The article not found in the warehouse expedition time.'
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
  
  public function delete_selected_al_from_warehouse_expedition_time()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["whETId"]) && isset($form["ids"]))  &&
      ((bool) self::$registry->getService('store')->isWHExpeditionTime( $form["whETId"] ) === true) &&
      (is_array($form["ids"]) && (count($form["ids"]) > 0))
    ) {
      if((bool) self::$registry->getService('store')->deleteSelectedWhEtAAL(
        $form["whETId"], 
        $form["ids"]
      ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully removed from the warehouse expedition time.'
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
  
  public function delete_all_assign_articles_from_warehouse_expedition_time()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["whETId"]) && ((bool) self::$registry->getService('store')->isWHExpeditionTime( $form["whETId"] ) === true)) {
      if((bool) self::$registry->getService('store')->deleteWarehouseETArticlesById( $form["whETId"] ) === true) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully deleted from the warehouse expedition time.'
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
  
  public function delete_all_warehouse_expedition_times( $whSecureKey = '' )
  {
    $whID  = ((strlen($whSecureKey) === 32) && ((bool) self::$registry->getService('store')->isWarehouseBySecureKey( $whSecureKey ) === true)) ? self::$registry->getService('store')->warehouseIdBySecureKey( $whSecureKey ) : 0;
    
    if((bool) self::$registry->getService('store')->isWarehouseById( $whID ) === true) { 
      if((bool) self::$registry->getService('store')->deleteImpactWarehuseETByWHId( $whID ) === true) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/warehouse-manage-expedition-time/'. $whSecureKey
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/warehouse-manage-expedition-time/'. $whSecureKey,
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        self::$registry->getService('translator')->translate("store_info_warehouse_not_found"),
        null,
        'cpanel/store-warehouse-list',
        true
      );
    }
  }

  /*********************************************************************************************************
  *
  * DISCOUNT CIRCUITS
  *
  *********************************************************************************************************/

  public function storeDiscountCircuitList()
  {
    self::$registry->getService('template')->assign(
      'discountList',
      self::$registry->getService('store')->discountCircuitList()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/discount_circuit/discount_circuit_list.tpl");
  }

  public function storeCreateDiscountCircuitForm()
  {
    self::$registry->getService('template')->assign(
      'metaRobots',
      self::$registry->getService('page')->metaRobots()
    );
    self::$registry->getService('template')->assign(
      'rColor',
      self::$registry->getService('helper')->randColor()
    );
    self::$registry->getService('template')->assign(
      'warehouseList',
      self::$registry->getService('store')->warehouseList(false)
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/discount_circuit/discount_circuit_create_form.tpl");
  }

  public function storeCreateDiscountCircuit()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(is_array($form) && (count($form) > 0)) {
      $dCircuitId = self::$registry->getService('store')->createDiscountCircuit( $form );

      if($dCircuitId) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-discount-circuit-form/'.$dCircuitId
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-discount-circuit-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-discount-circuit-list'
      );
    }
  }

  public function storeUpdateDiscountCircuitForm( $dCircuitId = 0, $page = 0, $limit = 0 )
  {
    if(self::$registry->getService('store')->isDiscountCircuitById( $dCircuitId )) {
      // SEARCH FULLTEXT
      $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
      $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
      // PAGINATION VARS
      $page  = ((int) $page === 0) ? 1 : (int) $page;
      $limit = ((int) $limit === 0) ? 10 : (int) $limit;
      $total = self::$registry->getService('store')->countArticlesByDiscountCircuitId($dCircuitId, $useList);
      // INITIALIZE PAGINATION
      self::$registry->getService('pagination')->setPrefix( 'cpanel/store-update-discount-circuit-form/'.$dCircuitId );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // DISCOUNT OBJECT
      $data = self::$registry->getService('store')->discountCircuitsDataById( $dCircuitId );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'metaRobots',
        self::$registry->getService('page')->metaRobots()
      );
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
      );
      self::$registry->getService('template')->assign(
        'pagination_info',
        self::$registry->getService('pagination')->createInfo()
      );
      self::$registry->getService('template')->assign(
        'articleListDL',
        self::$registry->getService('store')->articleListOnDiscountCircuitById($dCircuitId, true, $useList)
      );
      self::$registry->getService('template')->assign(
        'router',
        self::$registry->getService('router')->routerObject(12, $dCircuitId)
      );
      self::$registry->getService('template')->assign('data',$data);
      self::$registry->getService('template')->assign('page',$page);
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('keywords',$keywords);
      self::$registry->getService('template')->assign('eAL',self::$registry->getService('store')->errorArticlesByDiscountCircuitId( $dCircuitId ));
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/discount_circuit/discount_circuit_update_form.tpl");
    } else {
      self::$registry->getService('messenger')->display(
        3,
        'WARNING',
        'DISCOUNT CIRCUIT NOT FOUND',
        null,
        'cpanel/store-discount-circuit-list',
        true
      );
    }
  }

  public function storeUpdateDiscountCircuit()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((is_array($form) && (count($form) > 0)) &&
      self::$registry->getService('store')->isDiscountCircuitById( $form["dc-id"] )
    ) {
      if(self::$registry->getService('store')->updateDiscountCircuit( $form )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-discount-circuit-form/'.$form["dc-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-discount-circuit-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-discount-circuit-list'
      );
    }
  }
  
  public function storePushArticleToDiscountCircuitModal()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form['dCircuitId']) && isset($form['page']) && isset($form['limit'])) &&
      self::$registry->getService('store')->isDiscountCircuitById( $form['dCircuitId'] )
    ) {
      $keywords = (isset($form['keywords'])) ? $form['keywords'] : '';
      $page     = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit    = (isset($form['limit']) && (((int) $form['limit'] >= 1) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      
      // WAREHOUSE SENSITIVE OR NOT
      if((bool) self::$registry->getService('store')->haveDiscountCirciutWHById( $form['dCircuitId'] ) === true) {
        $this->__discountCircuitALModalV2(
          $form['dCircuitId'],
          $keywords,
          $page,
          $limit
        );
      } else {
        $this->__discountCircuitALModalV1(
          $form['dCircuitId'],
          $keywords,
          $page,
          $limit
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
  
  private function __discountCircuitALModalV1( $dCircuitId = 0, $keywords = '', $page = 0, $limit = 0 )
  {
    // DISCOUNT CIRCUIT SECTION ID
    $secId = self::$registry->getService('store')->discountCircuitSectionIdById( $dCircuitId );
    // DISCOUNT CIRCIUT ARTICLE LIST
    $DCAL = self::$registry->getService('store')->discountCircuitArticleListById( $dCircuitId );
    $DCAI = ((int) $secId !== 0) ? $this->__discountCircuitALIdsById($dCircuitId, $secId) : null;
    // INIT
    $useList = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
    $ignoreList = null;

    if(is_array($DCAL) && (count($DCAL) > 0)) {
      $ignoreList = [];

      foreach($DCAL as $value) {
        $ignoreList[] = $value->id_article;
      }
    }
    if(is_array($DCAI) && (count($DCAI) > 0)) {
      foreach($DCAI as $value) {
        $useList = (is_array($useList) && (count($useList) > 0)) ? $useList : [];

        if(!in_array($value->id_article, $useList)) {
          $useList[] = $value->id_article;
        }
      }
    }
    // SET PAGINATION VARS
    $total = self::$registry->getService('store')->countArticles($ignoreList, $useList);
    // INITIALIZE PAGINATION
    self::$registry->getService('pagination')->setPrefix( '' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    // ARTICLE LIST
    $articleList = ((((int) $secId !== 0) && (is_array($DCAI) && (count($DCAI) > 0))) || ((int) $secId === 0)) ? self::$registry->getService('store')->articleList(true, $ignoreList, $useList) : null;
    // TEMP. VARS
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', true)
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->assign('articleList',$articleList);
    self::$registry->getService('template')->display("extends:[cpanel]store/discount_circuit/ajax/add_on_article_list_modal.tpl");
  }
  
  private function __discountCircuitALModalV2( $dCircuitId = 0, $keywords = '', $page = 0, $limit = 0 )
  {
    // WAREHOUSE ID
    $whId = self::$registry->getService('store')->discountCircuitWHIdByDCId( $dCircuitId );
    // DISCOUNT CIRCUIT SECTION ID
    $secId = self::$registry->getService('store')->discountCircuitSectionIdById( $dCircuitId );
    // DISCOUNT CIRCIUT ARTICLE LIST
    $DCAL = self::$registry->getService('store')->discountCircuitArticleListById( $dCircuitId );
    $DCAI = ((int) $secId !== 0) ? $this->__discountCircuitALIdsById($dCircuitId, $secId) : null;
    // INIT
    $useList = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
    $ignoreList = null;

    if(is_array($DCAL) && (count($DCAL) > 0)) {
      $ignoreList = [];

      foreach($DCAL as $value) {
        $ignoreList[] = $value->id_article;
      }
    }
    if(is_array($DCAI) && (count($DCAI) > 0)) {
      foreach($DCAI as $value) {
        $useList = (is_array($useList) && (count($useList) > 0)) ? $useList : [];

        if(!in_array($value->id_article, $useList)) {
          $useList[] = $value->id_article;
        }
      }
    }
    // SET PAGINATION VARS
    $total = self::$registry->getService('store')->countArticlesByWarehouseId($whId, $ignoreList, $useList);
    // INITIALIZE PAGINATION
    self::$registry->getService('pagination')->setPrefix( '' );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    // ARTICLE LIST
    $articleList = ((((int) $secId !== 0) && (is_array($DCAI) && (count($DCAI) > 0))) || ((int) $secId === 0)) ? self::$registry->getService('store')->warehouseALById($whId, true, $ignoreList, $useList, 0, true) : null;
    // TEMP. VARS
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', true)
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->assign('articleList',$articleList);
    self::$registry->getService('template')->display("extends:[cpanel]store/discount_circuit/ajax/add_on_article_list_modal.tpl");
  }
  
  private function __discountCircuitALIdsById( $dCircuitId = 0, $sectionId = 0 )
  {
    return self::$registry->getService('store')->articleListOnDiscCircuitByFIds(
      self::$registry->getService('store')->discountCircuitFIdsById( $dCircuitId ),
      $sectionId
    );
  }
  
  public function storeAddArticleToDiscountCircuit()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["dCircuitId"]) && isset($form["articleId"]))  &&
      self::$registry->getService('store')->isDiscountCircuitById( $form["dCircuitId"] ) &&
      self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if((bool) self::$registry->getService('store')->haveArticleDiscountCircuitById($form["dCircuitId"], $form["articleId"]) === false) {
        if(self::$registry->getService('store')->insertArticleToDiscountCircuit(array(
          ':id_circuit' => (int) $form["dCircuitId"],
          ':id_article' => (int) $form["articleId"]
        ))) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully added to the discount circuit.'
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
          'message' => 'The article is already in the discount circuit.'
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
  
  public function storeAddArticleListToDiscountCircuit()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["dCircuitId"]) && isset($form["ids"]))  &&
      self::$registry->getService('store')->isDiscountCircuitById( $form["dCircuitId"] ) &&
      (is_array($form["ids"]) && (count($form["ids"]) > 0))
    ) {
      if(self::$registry->getService('store')->insertArticleListToDiscountCircuit(
        $form["dCircuitId"],
        $form["ids"]
      )) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'The articles has successfully added to the discount circuit.'
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
  
  public function storeDiscountCircuitAssigningArticleListTable()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["dCircuitId"]) && isset($form['page']) && isset($form['limit'])) &&
      self::$registry->getService('store')->isDiscountCircuitById( $form["dCircuitId"] )
    ) {
      // PAGINATION VARS
      $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
      $limit = (isset($form['limit']) && (((int) $form['limit'] > 0) && ((int) $form['limit'] <= 500))) ? (int) $form['limit'] : 10;
      $total = self::$registry->getService('store')->countArticlesByDiscountCircuitId($form["dCircuitId"], null);
       // PAGINATION INIT
      self::$registry->getService('pagination')->setPrefix( 'cpanel/store-update-discount-circuit-form/'.$form["dCircuitId"] );
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
      self::$registry->getService('template')->assign(
        'articleListDL',
        self::$registry->getService('store')->articleListOnDiscountCircuitById($form["dCircuitId"], true, null)
      );
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('dCircuitId',$form["dCircuitId"]);
      self::$registry->getService('template')->display("extends:[cpanel]store/discount_circuit/ajax/discount_circuit_articles_assigning_table.tpl");
    } else {
      self::$registry->getService('messenger')->alert(
        4,
        '401 BAD REQUEST',
        'ERROR: POSTING PAYLOAD IS INCORRECT.'
      );
    }
  }
  
  public function storeDeleteArticleFromDiscountCircuit()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["dCircuitId"]) && isset($form["articleId"]))  &&
      self::$registry->getService('store')->isDiscountCircuitById( $form["dCircuitId"] ) &&
      self::$registry->getService('store')->isArticleById( $form["articleId"] )
    ) {
      if((bool) self::$registry->getService('store')->haveArticleDiscountCircuitById($form["dCircuitId"], $form["articleId"]) === true) {
        if(self::$registry->getService('store')->deleteArticleFromDiscountCircuitById($form["dCircuitId"], $form["articleId"])) {
          self::$registry->getService('json')->push(array(
            'status'  => 200,
            'message' => 'The article has successfully deleted to the discount circuit.'
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
          'message' => 'The article not found in the discount circuit.'
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

  public function storeDeleteArticleListFromDiscountCircuit()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if((isset($form["articleList"]) && (is_array($form["articleList"]) && (count($form["articleList"]) > 0))) &&
      (isset($form["dc-id"]) && self::$registry->getService('store')->isDiscountCircuitById( $form["dc-id"] ))
    ){
      if(self::$registry->getService('store')->deleteArticleListFromDiscountCircuit(
        $form["dc-id"],
        $form["articleList"]
      )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-update-discount-circuit-form/'.$form["dc-id"]
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-update-discount-circuit-form/'.$form["dc-id"],
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-discount-circuit-list'
      );
    }
  }

  public function storeDeleteDiscountCircuit()
  {
    $form = self::$registry->getService('irequest')->getPost();
    $dCircuitId = (isset($form["d-c-id"])) ? (int) $form["d-c-id"] : 0;

    if(self::$registry->getService('store')->isDiscountCircuitById( $dCircuitId )) {
      if(self::$registry->getService('store')->deleteDiscountCircuitById( $dCircuitId )) {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store-discount-circuit-list'
        );
      } else {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/store-discount-circuit-list',
          true
        );
      }
    } else {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/store-discount-circuit-list'
      );
    }
  }
  
  /*********************************************************************************************************
  *
  * TRANSLATE PRODUCTS
  *
  *********************************************************************************************************/
  
  public function translate()
  {
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]translate/choice_menu.tpl");
  }
  
  public function translateProduct()
  {
    // PARAMS
    $params = array(
      'articleId' => (int) self::$registry->getService('irequest')->getURLBit(2),
      'langIds'   => array(
        0 => (int) self::$registry->getService('irequest')->getURLBit(3),
        1 => (int) self::$registry->getService('irequest')->getURLBit(4)
      ),
      'sort'  => (int) self::$registry->getService('irequest')->getURLBit(5),
      'page'  => (int) self::$registry->getService('irequest')->getURLBit(6),
      'limit' => (int) self::$registry->getService('irequest')->getURLBit(7)
    );
    // ARTICLE ID
    $params['articleId'] = ((bool) self::$registry->getService('store')->isArticleById( $params['articleId'] ) === true) ? $params['articleId'] : 1;
    // SEARCH FULLTEXT
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
    // PAGINATION VARS
    $page  = ($params['page'] > 0) ? $params['page'] : 1;
    $limit = ($params['limit'] > 0) ? $params['limit'] : 10;
    $total = self::$registry->getService('store')->countArticles(null, $useList);
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/translate-product/'.$params['articleId'].'/'.$params['langIds'][0].'/'.$params['langIds'][1].'/'.$params['sort'] );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    // TEMP. VARS
    self::$registry->getService('template')->assign(
      'prevArticle',
      self::$registry->getService('store')->prevArticleById( $params['articleId'] )
    );
    self::$registry->getService('template')->assign(
      'nextArticle',
      self::$registry->getService('store')->nextArticleById( $params['articleId'] )
    );
    self::$registry->getService('template')->assign(
      'langIds',
      $params['langIds']
    );
    self::$registry->getService('template')->assign(
      'productlangList',
      self::$registry->getService('store')->articleLangListById( $params['articleId'] )
    );
    self::$registry->getService('template')->assign(
      'article',
      self::$registry->getService('store')->articleDataById( $params['articleId'] )
    );
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
    );
    self::$registry->getService('template')->assign(
      'articleList',
      self::$registry->getService('store')->articleList(true, null, $useList, $params['sort'])
    );
    self::$registry->getService('template')->assign(
      'router',
      self::$registry->getService('router')->routerObject(11, $params['articleId'])
    );
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->assign('sort',$params['sort']);
    // TEMPLATE
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]translate/product_update.tpl");
  }
  
  public function updateTranslateProduct()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if((isset($form["articleId"]) && isset($form["lang1"])) &&
      ((bool) self::$registry->getService('store')->isArticleById( $form["articleId"] ) === true) &&
      ((bool) self::$registry->getService('languages')->isLangById( $form["lang1"] ) === true)
    ) {
      // UPDATE
      if((bool) self::$registry->getService('store')->haveArticleLDById($form["articleId"], $form["lang1"]) === true)
      {
        $update = [];

        if(isset($form["site-title"]) && (strlen($form["site-title"]) > 0))
        {
          $update['site_title'] = $form["site-title"];
        }
        if(isset($form["article-name"]) && (strlen($form["article-name"]) > 0))
        {
          $update['article_name'] = $form["article-name"];
        }
        if(isset($form["description"]) && (strlen($form["description"]) > 0))
        {
          $update['description'] = $form["description"];
        }
        if(isset($form["meta-keywords"]) && (strlen($form["meta-keywords"]) > 0))
        {
          $update['meta_keywords'] = $form["meta-keywords"];
        }
        if(isset($form["meta-description"]) && (strlen($form["meta-description"]) > 0))
        {
          $update['meta_description'] = $form["meta-description"];
        }
        if(isset($form["html-content"]) && (strlen($form["html-content"]) > 0))
        {
          $update['html_content'] = $form["html-content"];
        }
        if(is_array($update) && (count($update) > 0))
        {
          if((bool) self::$registry->getService('store')->updateArticleLangById(
           $update,
           $form["articleId"],
           $form["lang1"]
          ) === true)
          {
            self::$registry->getService('irequest')->movePage(
              301,
              'cpanel/translate-product/'.$form['articleId'].'/'.$form['lang0'].'/'.$form['lang1'].'/'.$form['sort'].'/'.$form['page'].'/'.$form['limit']
            );
          }
          else
          {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/translate-product/'.$form['articleId'].'/'.$form['lang0'].'/'.$form['lang1'].'/'.$form['sort'].'/'.$form['page'].'/'.$form['limit'],
              true
            );
          }
        }
        else
        {
          self::$registry->getService('messenger')->display(
            3,
            'UPOZORNENIE',
            'Nie je možné uložiť prázdny formulár.',
            null,
            'cpanel/translate-product/'.$form['articleId'].'/'.$form['lang0'].'/'.$form['lang1'].'/'.$form['sort'].'/'.$form['page'].'/'.$form['limit'],
            true
          );
        }
      }
      // INSERT
      else
      {
        $insert = [];
        // INIT DATA
        $insert[':id_article'] = $form["articleId"];
        $insert[':id_lang']    = $form["lang1"];
        // OPTIONAL
        if(isset($form["site-title"]) && (strlen($form["site-title"]) > 0))
        {
          $insert[':site_title'] = $form["site-title"];
        }
        if(isset($form["article-name"]) && (strlen($form["article-name"]) > 0))
        {
          $insert[':article_name'] = $form["article-name"];
        }
        if(isset($form["description"]) && (strlen($form["description"]) > 0))
        {
          $insert[':description'] = $form["description"];
        }
        if(isset($form["meta-keywords"]) && (strlen($form["meta-keywords"]) > 0))
        {
          $insert[':meta_keywords'] = $form["meta-keywords"];
        }
        if(isset($form["meta-description"]) && (strlen($form["meta-description"]) > 0))
        {
          $insert[':meta_description'] = $form["meta-description"];
        }
        if(isset($form["html-content"]) && (strlen($form["html-content"]) > 0))
        {
          $insert[':html_content'] = $form["html-content"];
        }
        if(is_array($insert) && (count($insert) > 0))
        {
          if((bool) self::$registry->getService('store')->insertArticleLang( $insert ) === true)
          {
            self::$registry->getService('irequest')->movePage(
              301,
              'cpanel/translate-product/'.$form['articleId'].'/'.$form['lang0'].'/'.$form['lang1'].'/'.$form['sort'].'/'.$form['page'].'/'.$form['limit']
            );
          }
          else
          {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/translate-product/'.$form['articleId'].'/'.$form['lang0'].'/'.$form['lang1'].'/'.$form['sort'].'/'.$form['page'].'/'.$form['limit'],
              true
            );
          }
        }
        else
        {
          self::$registry->getService('messenger')->display(
            3,
            'UPOZORNENIE',
            'Nie je možné uložiť prázdny formulár.',
            null,
            'cpanel/translate-product/'.$form['articleId'].'/'.$form['lang0'].'/'.$form['lang1'].'/'.$form['sort'].'/'.$form['page'].'/'.$form['limit'],
            true
          );
        }
      }
    }
    else
    {
      self::$registry->getService('messenger')->display(
        4,
        'FORM ERROR',
        'Unable to process a blank form.',
        null,
        'cpanel/translate-product/'.$form['articleId'].'/'.$form['lang0'].'/'.$form['lang1'].'/'.$form['sort'].'/'.$form['page'].'/'.$form['limit']
      );
    }
  }
  
  /*********************************************************************************************************
  *
  * EMAIL
  *
  *********************************************************************************************************/
  
  public function emailList()
  {
    self::$registry->getService('template')->assign(
      'emailList',
      self::$registry->getService('store')->emailList()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]email/email_list.tpl");
  }
  
  public function createEmail()
  {
    $form = self::$registry->getService('irequest')->getPost();
    $errs = [];
    
    // EMAIL NAME
    if(!isset($form["email-name"]) && (strlen($form["email-name"]) == 0))
    {
      $errs[] = "Názov emailu je povinný údaj.";
    }
    // DATA
    if(!isset($form["data"]) && (!is_array($form["data"]) && (count($form["data"]) == 0)))
    {
      $errs[] = "Vstupné dáta sú v zlom tvare.";
    }
    // SENDER EMAILS
    else
    {
      foreach($form["data"] as $value)
      {
        if((!isset($value["'sender-email'"]) && (strlen($value["'sender-email'"]) == 0)) ||
          (self::$registry->getService('helper')->isEmail($value["'sender-email'"]) === false)
        ) {
          $errs[] = "Odosielateľ (meno) je povinný údaj.";
        }
      }
    }
    if(count($errs) === 0)
    {
      if(self::$registry->getService('store')->createEmail( $form ))
      {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/email-list'
        );
      }
      else
      {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/email-list',
          true
        );
      }
    }
    else
    {
      self::$registry->getService('messenger')->display(
        3,
        'UPOZORNENIE',
        'Nastali nasledujúce chyby.',
        $errs,
        'cpanel/email-list',
        true
      );
    }
  }
  
  public function updateEmailForm( $emailId = 0 )
  {
    if(self::$registry->getService('store')->isEmailById($emailId) === true)
    {
      //self::$registry->getService('helper')->dump(self::$registry->getService('store')->emailById($emailId));
      self::$registry->getService('template')->assign(
        'email',
        self::$registry->getService('store')->emailById($emailId)
      );
      self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]email/email_update_form.tpl");
    }
    else
    {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/email-list'
      );
    }
  }
  
  public function updateEmail()
  {
    $form = self::$registry->getService('irequest')->getPost();
    $errs = [];
    
    if(isset($form["email-id"]) && 
      (self::$registry->getService('store')->isEmailById($form["email-id"]) === true)
    ) {
      // EMAIL NAME
      if(!isset($form["email-name"]) && (strlen($form["email-name"]) == 0))
      {
        $errs[] = "Názov emailu je povinný údaj.";
      }
      // DATA
      if(!isset($form["data"]) && (!is_array($form["data"]) && (count($form["data"]) == 0)))
      {
        $errs[] = "Vstupné dáta sú v zlom tvare.";
      }
      // SENDER EMAILS
      else
      {
        foreach($form["data"] as $value)
        {
          if((!isset($value["'sender-email'"]) && (strlen($value["'sender-email'"]) == 0)) ||
            (self::$registry->getService('helper')->isEmail($value["'sender-email'"]) === false)
          ) {
            $errs[] = "Odosielateľ (meno) je povinný údaj.";
          }
        }
      }
      if(count($errs) === 0)
      {
        if(self::$registry->getService('store')->updateEmail( $form ))
        {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/update-email-form/'.$form["email-id"]
          );
        }
        else
        {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
            null,
            'cpanel/update-email-form/'.$form["email-id"],
            true
          );
        }
      }
      else
      {
        self::$registry->getService('messenger')->display(
          3,
          'UPOZORNENIE',
          'Nastali nasledujúce chyby.',
          $errs,
          'cpanel/update-email-form/'.$form["email-id"],
          true
        );
      }
    }
    else
    {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/email-list'
      );
    }
  }
  
  public function updateEmails()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["emailList"]) && 
      (is_array($form["emailList"]) && (count($form["emailList"]) > 0))
    ) {
      if(self::$registry->getService('store')->updateEmails($form["emailList"]) === true)
      {
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/email-list'
        );
      }
      else
      {
        self::$registry->getService('messenger')->display(
          4,
          'ERROR',
          self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
          null,
          'cpanel/email-list',
          true
        );
      }
    }
    else
    {
      self::$registry->getService('irequest')->movePage(
        301,
        'cpanel/email-list'
      );
    }
  }
  
  /*********************************************************************************************************
  *
  * MANAGE USER & PROFILE
  *
  *********************************************************************************************************/
  
  public function profile()
  {
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]user/profile.tpl");
  }
  
  public function manageUsers()
  {
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/user/user_list.tpl");
  }

  /*********************************************************************************************************
  *
  * PRODUCTS STATISTICS
  *
  *********************************************************************************************************/

  public function storeProductStatisticsOverview()
  {
    self::$registry->getService('template')->assign(
      'viewedProductList',
      self::$registry->getService('store')->viewedProductList()
    );
    self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/statistics/article_statistic_list.tpl");
  }

  /*********************************************************************************************************
  *
  * OLD
  *
  *********************************************************************************************************/

  
  public function store( $action = '' )
  {
    switch((strlen($action) > 0) ? $action : '') 
    {
      case 'users':
        $this->__users();
        break;
      case 'carts':
        $this->__carts();
        break;
      case 'orders':
        $this->__orders();
        break;
      case 'invoice':
        $this->__invoice();
        break;
      case 'catalog':
        $this->__catalog();
        break;
      case 'statuses':
        $this->__statuses();
        break;
      case 'status':
        $this->__status();
        break;
      case 'delivery-payment':
        $this->__deliveryPayment();
        break;
      case 'localization':
        $this->__localization();
        break;
      case 'offers':
        $this->__offers();
        break;
      case 'api':
        $this->__api();
        break;
      default:
        self::$registry->getService('irequest')->movePage(301,'cpanel');
        break;
    }
  }
  
  /**
  *
  * USERS
  *
  **/
  
  private function __users()
  {
    switch( empty(self::$registry->getService('irequest')->getUrlBit(3)) ? '' : self::$registry->getService('irequest')->getUrlBit(3) )
    {
      case 'address':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(!is_null(self::$registry->getService('store')->isUserById( $form['userId'] ))) {
            self::$registry->getService('template')->assign(
              'addressList',
              self::$registry->getService('store')->addressListByUserId( $form['userId'] )
            );
          }
        }
        self::$registry->getService('template')->display("extends:[cpanel]store/users/ajax/address_list.tpl");
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->updateUserList( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                self::$registry->getService('irequest')->getReferer(),
                true
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/users',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/users'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/users');
        }
        break;
      default:
        // Bits
        $bit0 = (int) self::$registry->getService('irequest')->getUrlBit(3);
        $bit1 = (int) self::$registry->getService('irequest')->getUrlBit(4);
        $bit2 = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $bit3 = self::$registry->getService('irequest')->getUrlBit(6);
        // vars  
        $filterA0 = ($bit0 === 0) ? 9 : $bit0;
        $filterA1 = ($bit1 === 0) ? 9 : $bit1;
        $page     = ($bit2 === 0) ? 1 : $bit2;
        $limit    = ((string) $bit3 === 'all') ? 'all' : (((int) $bit3 === 0) ? 10 : (int) $bit3);
        $total    = self::$registry->getService('store')->countUsers( $this->__getUserFilterId( $filterA0, $filterA1 ) );
        // pagination and data
        self::$registry->getService('pagination')->setPrefix( 'cpanel/store/users/'.$bit0.DIRECTORY_SEPARATOR.$bit1 );
        self::$registry->getService('pagination')->setPage( $page );
        self::$registry->getService('pagination')->setLimit( $limit );
        self::$registry->getService('pagination')->setTotal( $total );
        self::$registry->getService('template')->assign(
          'userList',
          self::$registry->getService('store')->userList( $this->__getUserFilterId( $filterA0, $filterA1 ), true )
        );
        self::$registry->getService('template')->assign('filterA',$filterA0);
        self::$registry->getService('template')->assign('filterB',$filterA1);
        self::$registry->getService('template')->assign(
          'pagination',
          self::$registry->getService('pagination')->createLinks(5)
        );
        self::$registry->getService('template')->assign(
          'pagination_info',
          self::$registry->getService('pagination')->createInfo()
        );
        self::$registry->getService('template')->assign(
          'widgets',
          self::$registry->getService('store')->getUserWidgetsData()
        );
        self::$registry->getService('template')->assign('limit',$limit);
        self::$registry->getService('template')->assign('total',$total);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/users/user_list.tpl");
        break;
    }
  }
  
  private function __getUserFilterId( $a = 9, $b = 9 )
  {
    switch($a.'_'.$b) 
    {
      case '9_9':
        return null;
      case '9_1':
        return array(':is_guest' => 1);
      case '9_2':
        return array(':is_visitor' => 1);
      case '9_3':
        return array(':is_customer' => 1);
      case '9_4':
        return array(':is_banned' => 1);
      default:
        return null;
    }
  }
  
  /**
  *
  * CARTS
  *
  **/
  
  private function __carts()
  {
    switch( empty(self::$registry->getService('irequest')->getUrlBit(3)) ? '' : self::$registry->getService('irequest')->getUrlBit(3) )
    {
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->updateCarts( $form )) {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/carts');
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/catalog/articles',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/carts');
        }
        break;
      case 'items':
        if(self::$registry->getService('irequest')->isPost()) {
          $form   = self::$registry->getService('irequest')->getPost();
          $cartId = (self::$registry->getService('store')->isCartBySecureKey($form['cartId'])) ? self::$registry->getService('store')->cartIdBySecureKey( $form['cartId'], false ) : null;

          if(!is_null($cartId)) {
            self::$registry->getService('template')->assign('data',self::$registry->getService('store')->articlesOnCartById( $cartId ));
          }
        }
        self::$registry->getService('template')->display("extends:[cpanel]store/carts/ajax/cart_item_list.tpl");
        break;
      default:
        // Bits
        $bit0 = (int) self::$registry->getService('irequest')->getUrlBit(3);
        $bit1 = (int) self::$registry->getService('irequest')->getUrlBit(4);
        $bit2 = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $bit3 = self::$registry->getService('irequest')->getUrlBit(6);
        // vars  
        $filterA0 = ($bit0 === 0) ? 9 : $bit0;
        $filterA1 = ($bit1 === 0) ? 9 : $bit1;
        $page     = ($bit2 === 0) ? 1 : $bit2;
        $limit    = ((string) $bit3 === 'all') ? 'all' : (((int) $bit3 === 0) ? 10 : (int) $bit3);
        $total    = self::$registry->getService('store')->countCarts();
        // pagination and data
        self::$registry->getService('pagination')->setPrefix( 'cpanel/store/carts/'.$bit0.DIRECTORY_SEPARATOR.$bit1.DIRECTORY_SEPARATOR );
        self::$registry->getService('pagination')->setPage( $page );
        self::$registry->getService('pagination')->setLimit( $limit );
        self::$registry->getService('pagination')->setTotal( $total );
        self::$registry->getService('template')->assign(
          'cartList',
          self::$registry->getService('store')->cartList( $this->__getCartFilterId( $filterA0, $filterA1 ), true )
        );
        self::$registry->getService('template')->assign('filterA',$filterA0);
        self::$registry->getService('template')->assign('filterB',$filterA1);
        self::$registry->getService('template')->assign(
          'pagination',
          self::$registry->getService('pagination')->createLinks(5)
        );
        self::$registry->getService('template')->assign(
          'pagination_info',
          self::$registry->getService('pagination')->createInfo()
        );
        self::$registry->getService('template')->assign('limit',$limit);
        self::$registry->getService('template')->assign('total',$total);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/carts/cart_list.tpl");
        break;
    }
  }
  
  private function __getCartFilterId( $a = 9, $b = 9 )
  {
    switch($a.'_'.$b) 
    {
      case '9_9':
        return null;
      case '9_1':
        return array(':is_locked' => 0);
      case '9_2':
        return array(':is_locked' => 1);
      case '9_3':
        return array(':is_recyclable' => 1);
      case '9_4':
        return array(':is_archive' => 1);
      default:
        return null;
    }
  }
  
  /**
  *
  * ORDERS
  *
  **/
  
  private function __orders()
  {
    switch(empty(self::$registry->getService('irequest')->getUrlBit(3)) ? '' : self::$registry->getService('irequest')->getUrlBit(3))
    {
      case 'update-all':
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store/orders'
        );
        break;
      case 'create-setting-rule':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->createSettingRule( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/settings'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/orders'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/orders'
          );
        }
        break;
      case 'edit-setting-rule':
        $data = null;
        
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->isOrderSettingRuleById( $form["ruleId"] )) {
            $data = self::$registry->getService('store')->orderSettingRuleById( $form["ruleId"] );
          }
        }
        self::$registry->getService('template')->assign(
          'statusList',
          self::$registry->getService('store')->statusList(3)
        );
        self::$registry->getService('template')->assign(
          'emailList',
          self::$registry->getService('store')->emailList()
        );
        self::$registry->getService('template')->assign('data',$data);
        self::$registry->getService('template')->display("extends:[cpanel]store/orders/ajax/order_setting_edit_form.tpl");
        break;
      case 'save-setting-rule':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0) && self::$registry->getService('store')->isOrderSettingRuleById( $form["osr-id"] )) {
            if(self::$registry->getService('store')->updateSettingRule( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/settings'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders/settings',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/orders/settings'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/orders'
          );
        }
        break;
      case 'remove-setting-rule':
        $bit0  = (int) self::$registry->getService('irequest')->getUrlBit(4);
        $osrId = ($bit0 > 0) ? ((self::$registry->getService('store')->isOrderSettingRuleById( $bit0 )) ? $bit0 : null) : null;
        
        if(!is_null($osrId)) {
          if(self::$registry->getService('store')->removeOSRById( $osrId )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/settings'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders/settings',
                true
              );
            }
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/orders/settings'
          );
        }
        break;
      case 'ordering-setting-rules':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form["o-settings"]) && (count($form["o-settings"]) > 0)) {
            if(self::$registry->getService('store')->orderingSettingRules( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/settings'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders/settings',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/orders/settings'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/orders/settings'
          );
        }
        break;
      case 'settings':
        self::$registry->getService('template')->assign(
          'statusList',
          self::$registry->getService('store')->statusList(3)
        );
        self::$registry->getService('template')->assign(
          'emailList',
          self::$registry->getService('store')->emailList()
        );
        self::$registry->getService('template')->assign(
          'settingList',
          self::$registry->getService('store')->orderSettingList()
        );
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/orders/order_setting.tpl");
        break;
      case 'management':
        // GLOBAL
        $locked = true;
        // Params
        $bit0 = (string) self::$registry->getService('irequest')->getUrlBit(4);
        $bit1 = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $bit2 = (int) self::$registry->getService('irequest')->getUrlBit(6);
        $bit3 = self::$registry->getService('irequest')->getUrlBit(7);
        // view
        $view = (($bit0 === 'short') || ($bit0 === 'long')) ? $bit0 : 'short';
        // qry keys - FILTER BY STATUS ID
        $keys = (($bit1 > 0) && self::$registry->getService('store')->isStatusById($bit1)) ? array(':id_status' => $bit1) : null;
        
        if(is_null($keys)) {
          // Is first order setting rule?
          $firstOSR = self::$registry->getService('store')->dfOrderSettingRule();
          // SET
          $keys = (!is_null($firstOSR)) ? array(':id_status' => (int) $firstOSR->id_status) : null;
          // LOCK OR NOT
          $locked = (!is_null($keys)) ? false : true;
        }
        // OSRPID
        $OSRPID = ($bit1 !== 0) ? $bit1 : ((is_object($firstOSR)) ? $firstOSR->id_status : 0);
        // Pagination
        $page  = ($bit2 === 0) ? 1 : $bit2;
        $limit = ((string) $bit3 === 'all') ? 'all' : (((int) $bit3 === 0) ? 10 : (int) $bit3);
        $total = self::$registry->getService('store')->countOrders( $keys );
        // LOCK OR NOT
        $locked = ($total == 0) ? true : false;
        // Pagination init
        self::$registry->getService('pagination')->setPrefix( 'cpanel/store/orders/management/'.$view.DIRECTORY_SEPARATOR.$OSRPID );
        self::$registry->getService('pagination')->setPage( $page );
        self::$registry->getService('pagination')->setLimit( $limit );
        self::$registry->getService('pagination')->setTotal( $total );
        // Temp. vars
        self::$registry->getService('template')->assign(
          'pagination',
          self::$registry->getService('pagination')->createLinks(5)
        );
        self::$registry->getService('template')->assign(
          'pagination_info',
          self::$registry->getService('pagination')->createInfo()
        );
        self::$registry->getService('template')->assign(
          'settingList',
          self::$registry->getService('store')->orderSettingList()
        );
        self::$registry->getService('template')->assign(
          'statusList',
          self::$registry->getService('store')->statusList(3)
        );
        self::$registry->getService('template')->assign(
          'orderList',
          self::$registry->getService('store')->orderList($keys, true)
        );
        self::$registry->getService('template')->assign(
          'widgets',
          self::$registry->getService('store')->orderWidgets()
        );
        self::$registry->getService('template')->assign(
          'statistics',
          self::$registry->getService('store')->orderWidgets( $OSRPID )
        );
        self::$registry->getService('template')->assign('limit',$limit);
        self::$registry->getService('template')->assign('total',$total);
        self::$registry->getService('template')->assign('locked',$locked);
        self::$registry->getService('template')->assign('OSRPID',$OSRPID);
        self::$registry->getService('template')->assign('view',$view);
        self::$registry->getService('template')->assign('INVCC',self::$registry->getService('store')->lastInvoiceONumber( true ));
        // render
        switch($view) {
          case 'short':
            self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/orders/management/short_list.tpl");
            break;
          case 'long':
            self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/orders/management/long_list.tpl");
            break;
        }
        break;
      case 'change-status':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0) && self::$registry->getService('store')->isStatusById( $form["status-id"])) {
            if(self::$registry->getService('store')->changeStatusOrder( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/management/short/'.$form["status-id"]
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders/management/short',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/orders/management/short'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/orders/management/short'
          );
        }
        break;
      case 'edit':
        // URL Params
        $bit0 = (string) self::$registry->getService('irequest')->getUrlBit(4);
        $bit1 = (string) self::$registry->getService('irequest')->getUrlBit(5);
        $bit2 = (int) self::$registry->getService('irequest')->getUrlBit(6);
        $bit3 = self::$registry->getService('irequest')->getUrlBit(7);
        // ORDER 
        $orderId = (self::$registry->getService('store')->isOrderBySecureKey($bit0)) ? self::$registry->getService('store')->orderIdBySecureKey( $bit0 ) : null;
        
        if(!is_null($orderId)) {
          $order = self::$registry->getService('store')->orderById( $orderId );
          $customer = (self::$registry->getService('store')->isRegistredUserById( $order->id_user )) ? self::$registry->getService('store')->userAuthDataById( $order->id_user ) : null;
          $statistics = self::$registry->getService('store')->userAccountStatisticByUserId( $order->id_user );
          $ignoreList = [];
          // COUNTRY AND GEO
          $primaryCountry = null;
          $invoiceCountry = null;
          $geoDeliveryUrl = null;
          $geoInvoiceUrl  = null;
          
          if((int) $order->address->primary->is_personal_pickup === 0) {
            $primaryCountry = self::$registry->getService('languages')->getCountryNameById( $order->address->primary->id_country );
            $geoDeliveryUrl = urlencode($order->address->primary->street.','.$order->address->primary->city.','.$order->address->primary->zip.','.$primaryCountry);
          }
          if((int) $order->address->invoice->is_personal_pickup === 0) {
            $invoiceCountry = self::$registry->getService('languages')->getCountryNameById( $order->address->invoice->id_country );
            $geoInvoiceUrl  = urlencode($order->address->invoice->street.','.$order->address->invoice->city.','.$order->address->invoice->zip.','.$invoiceCountry);
          }
          // ADD INGORE ARTICLE LIST
          foreach($order->cart->articleList as $article) {
            $ignoreList[] = (int) $article->id_article;
          }
          //self::$registry->getService('helper')->dump( $ignoreList );
          // Pagination
          $page  = ($bit2 === 0) ? 1 : $bit2;
          $limit = ((string) $bit3 === 'all') ? 'all' : (((int) $bit3 === 0) ? 10 : (int) $bit3);
          $total = self::$registry->getService('store')->countArticles( $ignoreList );
          // Pagination init
          self::$registry->getService('pagination')->setPrefix( 'cpanel/store/orders/edit/'.$order->secure_key.'/modal' );
          self::$registry->getService('pagination')->setPage( $page );
          self::$registry->getService('pagination')->setLimit( $limit );
          self::$registry->getService('pagination')->setTotal( $total );
          // Temp. vars
          self::$registry->getService('template')->assign(
            'statusList',
            self::$registry->getService('store')->statusList(3)
          );
          self::$registry->getService('template')->assign(
            'emailList',
            self::$registry->getService('store')->emailList(12)
          );
          self::$registry->getService('template')->assign(
            'pagination',
            self::$registry->getService('pagination')->createLinks(5)
          );
          self::$registry->getService('template')->assign(
            'pagination_info',
            self::$registry->getService('pagination')->createInfo()
          );
          self::$registry->getService('template')->assign(
            'articleList',
            self::$registry->getService('store')->articleList(true, $ignoreList)
          );
          self::$registry->getService('template')->assign(
            'addressList',
            self::$registry->getService('store')->addressListByUserId( $order->id_user )
          );
          self::$registry->getService('template')->assign(
            'countryList',
            self::$registry->getService('languages')->getCountryList()
          );
          self::$registry->getService('template')->assign('isModalOn',(($bit1 === "modal") ? true : false));
          self::$registry->getService('template')->assign('limit',$limit);
          self::$registry->getService('template')->assign('total',$total);
          self::$registry->getService('template')->assign('order',$order);
          self::$registry->getService('template')->assign('customer',$customer);
          self::$registry->getService('template')->assign('statistics',$statistics);
          self::$registry->getService('template')->assign('primaryCountry',$primaryCountry);
          self::$registry->getService('template')->assign('invoiceCountry',$invoiceCountry);
          self::$registry->getService('template')->assign('geoDeliveryUrl',$geoDeliveryUrl);
          self::$registry->getService('template')->assign('geoInvoiceUrl',$geoInvoiceUrl);
          self::$registry->getService('template')->assign('INVCC',self::$registry->getService('store')->lastInvoiceONumber( true ));
          self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/orders/order_edit.tpl");
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/orders/management');
        }
        break;
      case 'print-order':
        $bit0 = (string) self::$registry->getService('irequest')->getUrlBit(4);
        $orderId = (self::$registry->getService('store')->isOrderBySecureKey($bit0)) ? self::$registry->getService('store')->orderIdBySecureKey( $bit0 ) : null;
        
        if(!is_null($orderId)) {
          $order = self::$registry->getService('store')->orderById( $orderId );
          $docId = ((int) $order->id_order < 10) ? '00'.$order->id_order : (((int) $order->id_order < 100) ? '0'.$order->id_order : $order->id_order);
          $personalPickup = ((int) $order->address->primary->is_personal_pickup === 1) ? true : false;
          $deliveryCost   = (!$personalPickup) ? self::$registry->getService('store')->calcDeliveryCost( $order ) : null;
          $isDiscount     = (((bool) self::$registry->getService('controller')->isDeliveryDiscount() === true)) && ((float) $order->total_price >= (float) self::$registry->getService('objects-storage')->get('cart_discount_amount')) ? true : false;
          // BUILD ORDER HTML
          self::$registry->getService('template')->assign('orderId',$docId);
          self::$registry->getService('template')->assign('order',$order);
          self::$registry->getService('template')->assign('isPersonalPickUp',$personalPickup);
          self::$registry->getService('template')->assign('deliveryCost',$deliveryCost);
          self::$registry->getService('template')->assign('isDiscount',$isDiscount);
          // HTML
          $sHTML = self::$registry->getService('template')->fetch('store/docs/html_order_pdf_1.tpl');
          // ORDER FILE NAME
          $filename = 'order_'.$docId.'_'.date("Ymd").'.pdf';
          // PDF
          self::$registry->getService('pdf')->load_html($sHTML,'UTF-8');
          self::$registry->getService('pdf')->set_paper('a4', 'portrait');
          // PDF FILE
          self::$registry->getService('pdf')->render();
          // RENDER
          self::$registry->getService('pdf')->stream($filename, array("Attachment" => 0));
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
        break;
      case 'change-order-address':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->changeOrderAddress( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/edit/'.$form["secure-key"]
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders/edit/'.$form["secure-key"],
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/orders/management'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/orders/list');
        }
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->updateOrder( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/edit/'.$form["secure-key"]
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders/management',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/orders/management'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/orders/list');
        }
        break;
      case 'add-article-list-to-order':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->addOnArticleListToOrder( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/orders/edit/'.$form["secure-key"]
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/orders/management',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/orders/management'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/orders/list');
        }
        break;
      case 'list':
        // URL Params
        $bit0 = (int) self::$registry->getService('irequest')->getUrlBit(4);
        $bit1 = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $bit2 = (int) self::$registry->getService('irequest')->getUrlBit(6);
        $bit3 = self::$registry->getService('irequest')->getUrlBit(7);
        // vars  
        $filterA0 = ($bit0 === 0) ? 9 : $bit0;
        $filterA1 = ($bit1 === 0) ? 9 : $bit1;
        $page     = ($bit2 === 0) ? 1 : $bit2;
        $limit    = ((string) $bit3 === 'all') ? 'all' : (((int) $bit3 === 0) ? 10 : (int) $bit3);
        $total    = self::$registry->getService('store')->countOrders( $this->__getOrderFilterId( $filterA0, $filterA1 ) );
        $prefix   = 'cpanel/store/orders/list/'.$filterA0.DIRECTORY_SEPARATOR.$filterA1;
        // Pagination init
        self::$registry->getService('pagination')->setPrefix( $prefix );
        self::$registry->getService('pagination')->setPage( $page );
        self::$registry->getService('pagination')->setLimit( $limit );
        self::$registry->getService('pagination')->setTotal( $total );
        // Temp. vars
        self::$registry->getService('template')->assign(
          'orderList',
          self::$registry->getService('store')->orderList( $this->__getOrderFilterId( $filterA0, $filterA1 ), true )
        );
        self::$registry->getService('template')->assign('filterA',$filterA0);
        self::$registry->getService('template')->assign('filterB',$filterA1);
        self::$registry->getService('template')->assign(
          'pagination',
          self::$registry->getService('pagination')->createLinks(5)
        );
        self::$registry->getService('template')->assign(
          'pagination_info',
          self::$registry->getService('pagination')->createInfo()
        );
        self::$registry->getService('template')->assign('limit',$limit);
        self::$registry->getService('template')->assign('total',$total);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/orders/order_list.tpl");
        break;
      default:
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store/orders/list'
        );
        break;
    }
  }
  
  private function __getOrderFilterId( $a = 9, $b = 9 )
  {
    switch($a.'_'.$b) 
    {
      case '9_9':
        return null;
      case '9_1':
        return array(':is_locked' => 0);
      case '9_2':
        return array(':is_locked' => 1);
      case '9_3':
        return array(':is_recyclable' => 1);
      case '9_4':
        return array(':is_archive' => 1);
      default:
        return null;
    }
  }
  
  /*********************************************************************************************************
  *
  * INVOICE
  *
  *********************************************************************************************************/
  
  private function __invoice()
  {
    $action = self::$registry->getService('irequest')->getUrlBit(3);
    
    switch(((strlen($action) > 0) ? $action : '')) 
    {
      case 'create':
        $form = self::$registry->getService('irequest')->getPost();

        if(self::$registry->getService('store')->createInvoice( $form )) 
        {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/orders/management/short'
          );
        } 
        else 
        {
          self::$registry->getService('messenger')->display(
            4,
            'ERROR',
            self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
            null,
            'cpanel/store/orders/management/short',
            true
          );
        }
        break;
    }
  }
  
  /*********************************************************************************************************
  *
  * DELIVERY - PAYMENT
  *
  *********************************************************************************************************/
  
  private function __deliveryPayment()
  {
    $action = self::$registry->getService('irequest')->getUrlBit(3);
    
    switch(((strlen($action) > 0) ? $action : ''))
    {
      case 'delivery':
        $this->__delivery();
        
        break;
      case 'payment':
        $this->__payment();
        
        break;
      case 'ties':
        $this->__deliveryPaymentTies();
        
        break;  
    }
  }
  
  /*********************************************************************************************************
  *
  * DELIVERY
  *
  *********************************************************************************************************/
  
  private function __delivery()
  {
    $action = self::$registry->getService('irequest')->getUrlBit(4);
    
    switch(((strlen($action) > 0) ? $action : ''))
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) 
        {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->createDelivery( $form )) 
          {
            self::$registry->getService('irequest')->movePage(
              301,
              'cpanel/store/delivery-payment/delivery'
            );
          } 
          else 
          {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/delivery-payment/delivery',
              true
            );
          }
        } 
        else 
        {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/delivery');
        }
        break;
      case 'edit':
        $bit = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $deliveryId = (($bit > 0) && (self::$registry->getService('store')->isDeliveryById( $bit ))) ? $bit : null;
        
        if(!is_null($deliveryId)) 
        {
          self::$registry->getService('template')->assign(
            'data',
            self::$registry->getService('store')->deliveryFormDataById( $deliveryId )
          );
          self::$registry->getService('template')->assign(
            'countryList',
            self::$registry->getService('languages')->getCountryList()
          );
          self::$registry->getService('template')->assign(
            'currencyList',
            self::$registry->getService('store')->getCurrenciesList()
          );
          self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/delivery-payment/delivery/delivery_edit_form.tpl");
        } 
        else 
        {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/delivery-payment/delivery'
          );
        }
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) 
        {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(isset($form["delivery-id"]) && ((int) $form["delivery-id"] > 0)) 
          {
            if(self::$registry->getService('store')->updateDelivery( $form )) 
            {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/delivery-payment/delivery'
              );
            } 
            else 
            {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/delivery-payment/delivery',
                true
              );
            }
          } 
          else 
          {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/delivery');
          }
        } 
        else 
        {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/delivery');
        }
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->updateAllDelivery( $form )) {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/delivery');
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/delivery-payment/delivery',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/delivery');
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'countryList',
          self::$registry->getService('languages')->getCountryList()
        );
        self::$registry->getService('template')->assign(
          'currencyList',
          self::$registry->getService('store')->getCurrenciesList()
        );
        self::$registry->getService('template')->assign(
          'deliveryList',
          self::$registry->getService('store')->deliveryList()
        );
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/delivery-payment/delivery/delivery_list.tpl");
        break;
    }
  }
  
  /**
  *
  * PAYMENT
  *
  **/
  
  private function __payment()
  {
    switch( empty(self::$registry->getService('irequest')->getUrlBit(4)) ? '' : self::$registry->getService('irequest')->getUrlBit(4) )
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) 
        {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->createPayment( $form )) 
          {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/payment');
          } 
          else 
          {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/delivery-payment/payment',
              true
            );
          }
        } 
        else 
        {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/payment');
        }
        break;
      case 'edit':
        $bit = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $paymentId = (($bit > 0) && (self::$registry->getService('store')->isPaymentById( $bit ))) ? $bit : null;
        
        if(!is_null($paymentId)) 
        {
          self::$registry->getService('template')->assign(
            'data',
            self::$registry->getService('store')->paymentFormDataById( $paymentId )
          );
          self::$registry->getService('template')->assign(
            'countryList',
            self::$registry->getService('languages')->getCountryList()
          );
          self::$registry->getService('template')->assign(
            'currencyList',
            self::$registry->getService('store')->getCurrenciesList()
          );
          self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/delivery-payment/payment/payment_edit_form.tpl");
        } 
        else 
        {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/delivery-payment/payment'
          );
        }
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(isset($form["payment-id"]) && ((int) $form["payment-id"] > 0)) {
            if(self::$registry->getService('store')->updatePayment( $form )) {
              self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/payment');
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/delivery-payment/payment',
                true
              );
            }
          } else {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/payment');
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/payment');
        }
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->updateAllPayment( $form )) {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/payment');
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/delivery-payment/payment',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/payment');
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'countryList',
          self::$registry->getService('languages')->getCountryList()
        );
        self::$registry->getService('template')->assign(
          'currencyList',
          self::$registry->getService('store')->getCurrenciesList()
        );
        self::$registry->getService('template')->assign(
          'paymentList',
          self::$registry->getService('store')->paymentList()
        );
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/delivery-payment/payment/payment_list.tpl");
        break;
    }
  }
  
  /**
  *
  * DELIVERY-PAYMENT TIES
  *
  **/
  
  private function __deliveryPaymentTies()
  {
    switch( empty(self::$registry->getService('irequest')->getUrlBit(4)) ? '' : self::$registry->getService('irequest')->getUrlBit(4) ) {
      case 'save':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->updateDeliveryPaymentTies( $form )) {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/ties/'.$form["delivery-id"]);
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/delivery-payment/ties',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/delivery-payment/ties');
        }
        break;
      default:
        $bit = (int) self::$registry->getService('irequest')->getUrlBit(4);
        $deliveryId = (($bit > 0) && (self::$registry->getService('store')->isDeliveryById( $bit ))) ? $bit : 0;
        
        self::$registry->getService('template')->assign(
          'deliveryList',
          self::$registry->getService('store')->deliveryList()
        );
        self::$registry->getService('template')->assign(
          'paymentList',
          self::$registry->getService('store')->paymentList()
        );
        self::$registry->getService('template')->assign(
          'deliveryPaymentTiesList',
          self::$registry->getService('store')->deliveryPaymentTiesListById( $deliveryId )
        );
        self::$registry->getService('template')->assign('deliveryId',$deliveryId);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/delivery-payment/ties/delivery_payment_ties.tpl");
        break;
    }
  }
  
  /**
  *
  * CATALOG
  *
  **/
  
  private function __catalog()
  {
    switch(empty(self::$registry->getService('irequest')->getUrlBit(3)) ? '' : self::$registry->getService('irequest')->getUrlBit(3))
    {
      case 'article':
        $this->__article();
        break;
      case 'articles':
        $this->__articles();
        break;
      case 'attributes':
        $this->__attributes();
        break;
      case 'ordering':
        $this->__ordering();
        break;
      default:
        self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        break;
    }
  }
  
  /** 
  * 
  * CATALOG_ARTICLES
  * 
  **/
  
  private function __articles()
  {
    // PARAMS
    $bit0  = (is_string(self::$registry->getService('irequest')->getUrlBit(4))) ? (string) self::$registry->getService('irequest')->getUrlBit(4) : null;
    $bit1  = (int) self::$registry->getService('irequest')->getUrlBit(5);
    $bit2  = (int) self::$registry->getService('irequest')->getUrlBit(6);
    $bit3  = self::$registry->getService('irequest')->getUrlBit(7);
    // SEARCH FULLTEXT
    $keywords = (isset($_GET['q']) && (strlen($_GET['q']) >= 3)) ? $_GET['q'] : '';
    $useList  = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $keywords ) : null;
    // PAGINATION VARS
    $page  = ($bit2 === 0) ? 1 : $bit2;
    $limit = ((string) $bit3 === 'all') ? 'all' : (((int) $bit3 === 0) ? 10 : (int) $bit3);
    $total = self::$registry->getService('store')->countArticles(null, $useList);
    $xPref = array('price-stock','long','short');
    $prefix = (in_array($bit0, $xPref)) ? $bit0 : 'short';
    // PAGINATION INIT
    self::$registry->getService('pagination')->setPrefix( 'cpanel/store/catalog/articles/'.$prefix.'/'.$bit1 );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    // TEMP. VARS
    self::$registry->getService('template')->assign(
      'pagination_info',
      self::$registry->getService('pagination')->createInfo()
    );
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(5, 'pagination pagination-sm pull-right', false, null, null, ((strlen($keywords) >= 3) ? '?q='.$keywords : ''))
    );
    self::$registry->getService('template')->assign(
      'articleList',
      self::$registry->getService('store')->articleList(true, null, $useList, $bit1)
    );
    self::$registry->getService('template')->assign(
      'widgets',
      self::$registry->getService('store')->getArticleWidgets()
    );
    self::$registry->getService('template')->assign('prefix',$prefix);
    self::$registry->getService('template')->assign('sort',$bit1);
    self::$registry->getService('template')->assign('page',$page);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('keywords',$keywords);
    // TEMPLATE
    switch($bit0) {
      case 'price-stock':
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/article/list/article_price_stock_edit_list.tpl");
        break;
      case 'long':
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/article/list/article_long_list.tpl");
        break;
      case 'short':
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/article/list/article_short_list.tpl");
        break;
      default:
        self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles/short');
        break;
    }
  }
  
  private function __article()
  {
    switch( empty( self::$registry->getService('irequest')->getUrlBit(4) ) ? '' : self::$registry->getService('irequest')->getUrlBit(4) )
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if((strlen($form["article-name"]) >= 3) && (strlen($form["article-name"]) < 151)) {
            $articleId = self::$registry->getService('store')->createArticle( $form["article-name"] );
            
            if(self::$registry->getService('store')->isArticleById( $articleId )) {
              self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/article/edit/'.$articleId);
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/articles',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              3,
              'WARNING',
              self::$registry->getService('translator')->translate("store_articles_form_errors_bad_article_name"),
              null,
              'cpanel/store/catalog/articles',
              false
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        }
        break;
      case 'edit':
        $articleId = (int) self::$registry->getService('irequest')->getUrlBit(5);
        
        if(self::$registry->getService('store')->isArticleById( $articleId )) {
          self::$registry->getService('template')->assign(
            'countryList',
            self::$registry->getService('languages')->getCountryList()
          );
          self::$registry->getService('template')->assign(
            'statusList',
            self::$registry->getService('store')->statusList(1,false)
          );
          self::$registry->getService('template')->assign(
            'currencyList',
            self::$registry->getService('store')->getCurrenciesList()
          );
          self::$registry->getService('template')->assign(
            'taxList',
            self::$registry->getService('store')->getTaxesList()
          );
          self::$registry->getService('template')->assign(
            'categoryList',
            self::$registry->getService('store')->getCategoryList()
          );
          self::$registry->getService('template')->assign(
            'attrValueList',
            self::$registry->getService('store')->attrValueList()
          );
          self::$registry->getService('template')->assign(
            'meta_robots',
            self::$registry->getService('page')->metaRobots()
          );
          self::$registry->getService('template')->assign(
            'article',
            self::$registry->getService('store')->articleDataById( $articleId )
          );
          self::$registry->getService('template')->assign(
            'prevArticle',
            self::$registry->getService('store')->prevArticleById( $articleId )
          );
          self::$registry->getService('template')->assign(
            'nextArticle',
            self::$registry->getService('store')->nextArticleById( $articleId )
          );
          self::$registry->getService('template')->assign(
            'router',
            self::$registry->getService('router')->routerObject(11, $articleId)
          );
          self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/article/article_edit.tpl");
        } else {
          self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            self::$registry->getService('translator')->translate("store_articles_reports_article_not_found"),
            null,
            'cpanel/store/catalog/articles',
            true
          );
        }
        break;
      case 'create-gallery':
        $articleId = (int) self::$registry->getService('irequest')->getUrlBit(5);
        
        if(self::$registry->getService('store')->isArticleById( $articleId )) {
          $galleryId = (int) self::$registry->getService('gallery')->createGallery(array(
            ':gallery_name' => self::$registry->getService('store')->articleNameById( $articleId ),
            ':id_group'     => 3,
            ':id_type'      => 1,
            ':id_page'      => 0,
            ':owner'        => (int) self::$registry->getService('cms')->getUser()->id_user,
            ':position'     => (int) self::$registry->getService('gallery')->getGalleryLastPosition(),
            ':publish'      => 1,
          ));
          if(self::$registry->getService('gallery')->isGalleryById( $galleryId )) {
            self::$registry->getService('store')->updateArticleById(array(
              'id_gallery' => $galleryId
            ), $articleId);
            self::$registry->getService('irequest')->movePage(
              301,
              'cpanel/gallery-images/'.$galleryId.'/7259b712f116a7fe6310cdc765c836af'
            );
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/catalog/article/edit/'.$articleId,
              true
            );
          }
        } else {
          self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            self::$registry->getService('translator')->translate("store_articles_reports_article_not_found"),
            null,
            'cpanel/store/catalog/articles',
            true
          );
        }
        break;
      case 'delete-gallery':
        $articleId = (int) self::$registry->getService('irequest')->getUrlBit(5);
        
        if(self::$registry->getService('store')->isArticleById( $articleId )) {
          $galleryId = (int) self::$registry->getService('store')->articleDataById( $articleId )->id_gallery;
          
          if(self::$registry->getService('gallery')->deleteGalleryId( $galleryId )) {
            self::$registry->getService('store')->updateArticleById(array(
              'id_gallery' => 0
            ), $articleId);
            self::$registry->getService('irequest')->movePage(
              301,
              'cpanel/store/catalog/article/edit/'.$articleId
            );
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/catalog/article/edit/'.$articleId,
              true
            );
          }
        } else {
          self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            self::$registry->getService('translator')->translate("store_articles_reports_article_not_found"),
            null,
            'cpanel/store/catalog/articles',
            true
          );
        }
        break;
      case 'choose-image':
        $articleId = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $folderId  = (!empty(self::$registry->getService('irequest')->getURLBit(6))) ? (int) self::$registry->getService('drive')->folderIdByHash( self::$registry->getService('irequest')->getURLBit(6) ) : null;

        if( self::$registry->getService('store')->isArticleById($articleId) && $folderId > 0 ) {
          $drive = self::$registry->getService('drive')->addOnDriveByFolderId( $folderId );
          $drive['foldersStructure'] = self::$registry->getService('cms')->foldersStructure( $folderId );
          
          self::$registry->getService('template')->assign(
            'article_name',
            self::$registry->getService('store')->articleNameById( $articleId )
          );
          self::$registry->getService('template')->assign('drive', $drive);
          self::$registry->getService('template')->assign('articleId', $articleId);
          self::$registry->getService('template')->assign('folderHash', self::$registry->getService('irequest')->getURLBit(6));
          self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/article/article_images.tpl");
        } else {
          self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            self::$registry->getService('translator')->translate("store_articles_reports_article_not_found"),
            null,
            'cpanel/store/catalog/articles',
            true
          );
        }
        break;
      case 'image-save':
        if(self::$registry->getService('irequest')->isPost()) {
          $form  = self::$registry->getService('irequest')->getPost();
          $cFile = ( isset($form["images"]) && is_array($form["images"]) && !empty($form["images"])) ? true : false;
          
          if(self::$registry->getService('store')->isArticleById($form["article-id"]) && $cFile) {
            if(self::$registry->getService('store')->insertArticleImageById( $form["article-id"], $form["images"] )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/catalog/article/edit/'.$form["article-id"]
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/articles',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              3,
              'WARNING',
              self::$registry->getService('translator')->translate("store_articles_reports_article_not_found"),
              null,
              'cpanel/store/catalog/articles',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        }
        break;
      case 'remove-article-image':
        $articleId = (int) self::$registry->getService('irequest')->getUrlBit(5);

        if(self::$registry->getService('store')->isArticleById($articleId)) {
          if(self::$registry->getService('store')->deleteArticleImageById( $articleId )) {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/article/edit/'.$articleId);
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
              null,
              'cpanel/store/catalog/articles',
              true
            );
          }
        } else {
           self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            self::$registry->getService('translator')->translate("store_articles_reports_article_not_found"),
            null,
            'cpanel/store/catalog/articles',
            true
          );
        }
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->isArticleById($form["article-id"])) {
            $errors = [];
            
            if( empty($form["article-name-internal"]) && 
                !is_string($form["article-name-internal"]) && 
                (strlen($form["article-name-internal"]) < 5 && strlen($form["article-name-internal"]) > 151)
            ) {
              $errors[] = (object) array("type" => 3,"message" => 'Empty article name (internal)');
            }
            if(empty($form["sku"]) && !is_string($form["sku"])) {
              $errors[] = (object) array("type" => 3,"message" => 'Empty SKU');
            }
            if(empty($errors)) {
              if(self::$registry->getService('store')->updateArticleDataById($form, (int) $form["article-id"])) {
                self::$registry->getService('irequest')->movePage(
                  301,
                  'cpanel/store/catalog/article/edit/'.$form["article-id"]
                );
              } else {
                self::$registry->getService('messenger')->display(
                  4,
                  'ERROR',
                  self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                  null,
                  'cpanel/store/catalog/articles',
                  true
                );
              }
            } else {
              self::$registry->getService('messenger')->display(
                3,
                'WARNING',
                'ERROR LIST:',
                $errors,
                'cpanel/store/catalog/articles',
                false
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/catalog/articles'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        }
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(!empty($form['articles']) && is_array($form['articles'])) {
            if(self::$registry->getService('store')->updateArticles($form['update-type'], $form['articles'])) {
              self::$registry->getService('irequest')->movePage(
                301,
                self::$registry->getService('irequest')->getReferer(),
                true     
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/articles',
                true
              );
            }
          exit;
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/catalog/articles'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        }
        break;
      case 'make-a-copy':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          $articleId   = (isset($form['article-id']) && ( (int) $form['article-id'] )) ? (int) $form['article-id'] : 0;
          $articleName = (!empty($form['article-name'])) ? $form['article-name'] : null;
        
          if(self::$registry->getService('store')->isArticleById( $articleId ) && !is_null($articleName)) {
            $nArticleId = self::$registry->getService('store')->makeCopyArticleById( $articleId, $articleName);
            
            if(self::$registry->getService('store')->isArticleById( $nArticleId )) {
              self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/article/edit/'.$nArticleId);
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/articles',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/catalog/articles'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        }
        break;
      case 'remove':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          $articleId = (isset($form['article-id']) && ( (int) $form['article-id'] )) ? (int) $form['article-id'] : 0;
          
          if(self::$registry->getService('store')->isArticleById( $articleId )) {
            if(self::$registry->getService('store')->deleteArticleById( $articleId )) {
              self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/articles',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/catalog/articles'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        }
        break;
      case 'export-images':
        // path 
        $folderPath = __CACHE_DIR__.'images';
        // articleList
        $articleList = self::$registry->getService('store')->articleList(false);
        // create images
        foreach($articleList as $article) {
          if(!is_null($article->image) && file_exists(__UPLOAD_PATH__.$article->image->file_hash.$article->image->file_ext)) {
            // get blob
            $file = file_get_contents(__UPLOAD_PATH__.$article->image->file_hash.$article->image->file_ext);
            // remove if exists
            if(is_file($folderPath.$article->image->file_hash.$article->image->file_ext)) {
              unlink($folderPath.$article->image->file_hash.$article->image->file_ext);
            }
            if(file_put_contents($folderPath.DIRECTORY_SEPARATOR.$article->image->file_hash.$article->image->file_ext, $file) == false) {
              throw new Exception( $article->article_name_internal. ' STATUS: WRONG', 402);
            }
          }
        }
        self::$registry->getService('helper')->create_zip( null, $folderPath, '', 'articles_images.zip', true );
        break;
      default:
        self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/articles');
        break;
    }
  }
  
  /** 
  * 
  * CATALOG_STATUSES
  * 
  **/
  
  private function __statuses()
  {
    switch( empty( self::$registry->getService('irequest')->getUrlBit(3) ) ? '' : self::$registry->getService('irequest')->getUrlBit(3) ) {
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          if(self::$registry->getService('store')->updateStatuses(self::$registry->getService('irequest')->getPost())) {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'ERROR',
              'An error occurred while processing this form please contact your system administrator.',
              null,
              'cpanel/store/statuses',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
        }
        break;
      default:
        $filterA0 = ( (int) self::$registry->getService('irequest')->getUrlBit(3) == 0) ? 9 : self::$registry->getService('irequest')->getUrlBit(3);
        $filterA1 = ( (int) self::$registry->getService('irequest')->getUrlBit(4) == 0) ? 9 : self::$registry->getService('irequest')->getUrlBit(4);
        
        self::$registry->getService('template')->assign(
          'widgets',
          self::$registry->getService('store')->statusWidgetsData()
        );
        self::$registry->getService('template')->assign(
          'statusList',
          self::$registry->getService('store')->statusList( $this->__getStatusFilterId( $filterA0, $filterA1 ) )
        );
        self::$registry->getService('template')->assign('filterA',$filterA0);
        self::$registry->getService('template')->assign('filterB',$filterA1);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/statuses/status_list.tpl");
        break;
    }
  }
  
  private function __getStatusFilterId( $a = 9, $b = 9 )
  {
    $combination = $a.'_'.$b;
    
    switch($combination) {
      case '9_9':
        return 0;
      case '9_1':
        return 1;
      case '9_2':
        return 2;
      case '9_3':
        return 3;
      case '9_4':
        return 4;
      default:
        return 0;
    }
  }
  
  /** 
  * 
  * CATALOG_STATUS
  * 
  **/
  
  private function __status()
  {
    switch( empty( self::$registry->getService('irequest')->getUrlBit(3) ) ? '' : self::$registry->getService('irequest')->getUrlBit(3) ) 
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(isset($form['pattern-id']) && !empty($form['statuses-lang']) && is_array($form['statuses-lang'])) {
            $error = [];
            
            if((int) $form['pattern-id'] < 1 && (int) $form['pattern-id'] < 5) {
              $error[] = self::$registry->getService('translator')->translate('store_statuses_alert_unknown_pattern');
            }
            foreach($form['statuses-lang'] as $value) {
              if(!is_string($value["'status-name'"]) && strlen($value["'status-name'"]) <= 2) {
                $error[] = self::$registry->getService('translator')->translate('store_statuses_alert_empty_status_name');
                break;
              }
            }
            if(empty($error)) {
              if(self::$registry->getService('store')->createStatus( $form )) {
                self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
              } else {
                self::$registry->getService('messenger')->display(
                  4,
                  'ERROR',
                  'An error occurred while processing this form please contact your system administrator.',
                  null,
                  'cpanel/store/statuses',
                  true
                );
              }
            } else {
              self::$registry->getService('messenger')->display(0,'','',$error,'cpanel/store/statuses',false);
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/statuses'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
        }
        break;
      case 'edit':
        $statusId = (int) self::$registry->getService('irequest')->getUrlBit(4);
        $data     = (self::$registry->getService('store')->isStatusById( $statusId )) ? self::$registry->getService('store')->statusDataById( $statusId ) : null;

        self::$registry->getService('template')->assign('data',$data);
        self::$registry->getService('template')->display("extends:store/statuses/ajax/status_edit_form.tpl");
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->isStatusById($form["status-id"])) {
            if(self::$registry->getService('store')->updateStatus($form, $form["status-id"])) {
              self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'FORM ERROR',
                'Unable to process a blank form.',
                null,
                'cpanel/store/statuses'
              );
            }
          } else {
            self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
        }
        break;
      default:
        self::$registry->getService('irequest')->movePage(301,'cpanel/store/statuses');
        break;
    }
  }
  
  /** 
  * 
  * CATALOG - ORDERING
  * 
  **/
  
  private function __ordering()
  {
    switch(empty(self::$registry->getService('irequest')->getUrlBit(4)) ? '' : self::$registry->getService('irequest')->getUrlBit(4))
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->createOrderingRule( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/catalog/ordering'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/ordering',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/catalog/ordering'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/ordering');
        }
        break;
      case 'edit':
        $ruleId = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $data = (self::$registry->getService('store')->isOrderingRule( $ruleId )) ? self::$registry->getService('store')->orderingRuleDataById( $ruleId ) : null;
        
        self::$registry->getService('template')->assign('data',$data);
        self::$registry->getService('template')->display("extends:store/catalog/ordering/ajax/ordering_rule_edit.tpl");
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->editOrderingRule( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/catalog/ordering'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/ordering',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/catalog/ordering'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/ordering');
        }
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            if(self::$registry->getService('store')->updateAllOrderingRule( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/catalog/ordering'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                self::$registry->getService('translator')->translate("global_alert_form_processed_error"),
                null,
                'cpanel/store/catalog/ordering',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/catalog/ordering'
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'cpanel/store/catalog/ordering');
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'orderingRuleList',
          self::$registry->getService('store')->orderingRuleList()
        );
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/catalog/ordering/ordering_list.tpl");
        break;
    }
  }
  
  /**
  *
  * LOCALIZATTION
  *
  **/
  
  private function __localization()
  {
    switch(empty(self::$registry->getService('irequest')->getUrlBit(3)) ? '' : self::$registry->getService('irequest')->getUrlBit(3))
    {
      case 'currencies':
        $this->__currencies();
        break;
      case 'taxes':
        $this->__taxes();
        break;
      default:
        self::$registry->getService('irequest')->movePage(
          301,
          'cpanel/store/catalog/articles'
        );
        break;
    }
  }
  
  /**
  *
  * CURRENCIES
  *
  **/
  
  private function __currencies()
  {
    switch( empty( self::$registry->getService('irequest')->getUrlBit(4) ) ? '' : self::$registry->getService('irequest')->getUrlBit(4) )
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) {
          $errors = [];
          $form = self::$registry->getService('irequest')->getPost();

          if(!empty($form)) {
            if(empty($form["currency-name"])) {
              $errors[] = (object) array("type" => 3,"message" => self::$registry->getService('translator')->translate("store_localization_currencies_form_input_currency_name_error_empty"));
            }
            if(empty($form["iso-code"])) {
              $errors[] = (object) array("type" => 3,"message" => "ISO code is required.You must enter the currency name.");
            }
            if(empty($form["numeric-iso-code"])) {
              $errors[] = (object) array("type" => 3,"message" => "Numeric ISO code is required.You must enter the currency name.");
            }
            if(empty($form["symbol"])) {
              $errors[] = (object) array("type" => 3,"message" => "Symbol is required.You must enter the currency name.");
            }
            if(empty($form["exchange-rate"])) {
              $errors[] = (object) array("type" => 3,"message" => "Exchange rate is required.You must enter the exchange rate.");
            }
            if(strlen($form["currency-name"]) > 32) {
              $errors[] = (object) array("type" => 3,"message" => "The field currency name must not be longer than 32 characters long.");
            }
            if(strlen($form["iso-code"]) > 3) {
              $errors[] = (object) array("type" => 3,"message" => "The field ISO code must not be longer than 3 characters long.");
            }
            if(strlen($form["numeric-iso-code"]) > 3) {
              $errors[] = (object) array("type" => 3,"message" => "The field numeric ISO code must not be longer than 3 characters long.");
            }
            if(strlen($form["symbol"]) > 8) {
              $errors[] = (object) array("type" => 3,"message" => "The field symbol must not be longer than 8 characters long.");
            }
            if(!is_numeric($form["exchange-rate"])) {
              $errors[] = (object) array("type" => 3,"message" => "The field exchange rate must be number.");
            }
            if(empty($errors)) {
              $response = self::$registry->getService('store')->createCurrency( $form );
              
              if($response) {
                self::$registry->getService('messenger')->display(1,'SUCCESS','Currency has been saved successfully.',null,'cpanel/store/localization/currencies',true);
              }
              self::$registry->getService('messenger')->display(4,'ERROR','An error occurred while processing this form please contact your system administrator.',null,'cpanel/store/localization/currencies',true);
            }
            self::$registry->getService('messenger')->display(0,'','',$errors,'cpanel/store/localization/currencies',false);
          }
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/localization/currencies'
          );
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/localization/currencies'
          );
        }
        break;
      case 'edit':
        $currencyId = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $isExists   = ($currencyId > 0) ? self::$registry->getService('store')->isExistsCurrencyById( $currencyId ) : false;
        
        if($isExists) {
          $data = self::$registry->getService('store')->getCurrencyDataById( $currencyId );
          
          if(!is_null($data)) {
            self::$registry->getService('template')->assign('data',$data);
            self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/localization/currencies/currencies_edit.tpl");
          } else {
            self::$registry->getService('messenger')->display(4,'ERROR','Processing the request encountered a system error, please contact your system administrator.',null,'cpanel/store/localization/currencies',true);
          }
        } else {
          self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            'The currency not found.',
            null,
            'cpanel/store/localization/currencies',
            true
          );
        }
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          $currencyId = (int) $form["currency-id"];
          $isExists   = ($currencyId > 0) ? self::$registry->getService('store')->isExistsCurrencyById( $currencyId ) : false;
          
          if($isExists) {
            $response = self::$registry->getService('store')->saveChangeOnCurrency( $form, $currencyId );
            
            if($response) {
              self::$registry->getService('messenger')->display(1,'SUCCESS','Currency has been updated successfully.',null,'cpanel/store/localization/currencies',true);
            } else {
              self::$registry->getService('messenger')->display(4,'ERROR','Processing the request encountered a system error, please contact your system administrator.',null,'cpanel/store/localization/currencies',true);
            }
          } else {
            self::$registry->getService('messenger')->display(
              3,
              'WARNING',
              'The currency not found.',
              null,
              'cpanel/store/localization/currencies',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/localization/currencies'
          );
        }
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(!empty($form["currencies"])) {
            $response = self::$registry->getService('store')->saveChangesOnCurrencies( $form["currencies"] );
            
            if($response) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/localization/currencies'
              );
            }
            self::$registry->getService('messenger')->display(4,'ERROR','An error occurred while processing this form please contact your system administrator.',null,'cpanel/store/localization/currencies',true);
          }
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/localization/currencies'
          );
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/localization/currencies'
          );
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'currenciesCount',
          self::$registry->getService('store')->getCurrenciesCount()
        );
        self::$registry->getService('template')->assign(
          'currenciesList',
          self::$registry->getService('store')->getCurrenciesList()
        );
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/localization/currencies/currencies_list.tpl");
        break;
    }
  }
  
  /**
  *
  * TAXES
  *
  **/
  
  private function __taxes()
  {
    switch(empty( self::$registry->getService('irequest')->getUrlBit(4) ) ? '' : self::$registry->getService('irequest')->getUrlBit(4))
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) {
          $errors = [];
          $form = self::$registry->getService('irequest')->getPost();

          if(!empty($form)) {
            if(empty($form["tax-name"])) {
              $errors[] = (object) array("type" => 3,"message" => "Tax name is required.You must enter the tax name.");
            }
            if(empty($form["rate"])) {
              $errors[] = (object) array("type" => 3,"message" => "Rate is required.You must enter the rate.");
            }
            if(!is_string($form["tax-name"])) {
              $errors[] = (object) array("type" => 3,"message" => "The field tax name must be string.");
            }
            if(!is_numeric($form["rate"])) {
              $errors[] = (object) array("type" => 3,"message" => "The field rate must be number.");
            }
            if(strlen($form["tax-name"]) > 32) {
              $errors[] = (object) array("type" => 3,"message" => "The field tax name must not be longer than 32 characters long.");
            }
            if(empty($errors)) {
              $response = self::$registry->getService('store')->createTax( $form );
              
              if($response) {
                self::$registry->getService('messenger')->display(1,'SUCCESS','Tax has been saved successfully.',null,'cpanel/store/localization/taxes',true);
              }
              self::$registry->getService('messenger')->display(4,'ERROR','An error occurred while processing this form please contact your system administrator.',null,'cpanel/store/localization/taxes',true);
            }
            self::$registry->getService('messenger')->display(0,'','',$errors,'cpanel/store/localization/taxes',false);
          }
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/localization/taxes'
          );
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/localization/taxes'
          );
        }
        break;
      case 'edit':
        $taxId    = (int) self::$registry->getService('irequest')->getUrlBit(5);
        $isExists = ($taxId > 0) ? self::$registry->getService('store')->isExistsTaxById( $taxId ) : false;
        
        if($isExists) {
          $data = self::$registry->getService('store')->getTaxDataById( $taxId );
          
          if(!is_null($data)) {
            self::$registry->getService('template')->assign('data',$data);
            self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/localization/taxes/taxes_edit.tpl");
          } else {
            self::$registry->getService('messenger')->display(4,'ERROR','Processing the request encountered a system error, please contact your system administrator.',null,'cpanel/store/localization/taxes',true);
          }
        } else {
          self::$registry->getService('messenger')->display(
            3,
            'WARNING',
            'The tax not found.',
            null,
            'cpanel/store/localization/taxes',
            true
          );
        }
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form  = self::$registry->getService('irequest')->getPost();
          $taxId = (int) $form["tax-id"];
          $isExists = ($taxId > 0) ? self::$registry->getService('store')->isExistsTaxById( $taxId ) : false;
          
          if($isExists) {
            $response = self::$registry->getService('store')->saveChangeOnTax( $form, $taxId );
            
            if($response) {
              self::$registry->getService('messenger')->display(1,'SUCCESS','Tax has been updated successfully.',null,'cpanel/store/localization/taxes',true);
            } else {
              self::$registry->getService('messenger')->display(4,'ERROR','Processing the request encountered a system error, please contact your system administrator.',null,'cpanel/store/localization/taxes',true);
            }
          } else {
            self::$registry->getService('messenger')->display(
              3,
              'WARNING',
              'The tax not found.',
              null,
              'cpanel/store/localization/taxes',
              true
            );
          }
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/localization/taxes'
          );
        }
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(!empty($form["taxes"])) {
            $response = self::$registry->getService('store')->saveChangesOnTaxes( $form["taxes"] );
            
            if($response) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/localization/taxes'
              );
            }
            self::$registry->getService('messenger')->display(4,'ERROR','An error occurred while processing this form please contact your system administrator.',null,'cpanel/store/localization/taxes',true);
          }
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/localization/taxes'
          );
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/localization/taxes'
          );
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'taxesCount',
          self::$registry->getService('store')->getTaxesCount()
        );
        self::$registry->getService('template')->assign(
          'taxesList',
          self::$registry->getService('store')->getTaxesList()
        );
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/localization/taxes/taxes_list.tpl");
        break;
    }
  }
  
  /**
  *
  * OFFERS
  *
  **/
  
  private function __offers()
  {
    switch(empty(self::$registry->getService('irequest')->getUrlBit(3)) ? '' : self::$registry->getService('irequest')->getUrlBit(3))
    {
      case 'create':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0)) {
            $offerId = self::$registry->getService('store')->createOffer( $form );
            
            if(self::$registry->getService('store')->isOfferById($offerId)) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/offers/edit/'.self::$registry->getService('store')->offerHashById( $offerId )
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                'An error occurred while processing this form please contact your system administrator.',
                null,
                'cpanel/store/offers',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/offers'
            );
          }
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/offers'
          );
        }
        break;
      case 'edit':
        $offerHash = (string) self::$registry->getService('irequest')->getUrlBit(4);

        if(self::$registry->getService('store')->isOfferByHash($offerHash)) {
          $offerId = self::$registry->getService('store')->offerIdByHash( $offerHash );

          self::$registry->getService('template')->assign(
            'emailList',
            self::$registry->getService('store')->emailList(5)
          );
          self::$registry->getService('template')->assign(
            'currencyList',
            self::$registry->getService('store')->getCurrenciesList()
          );
          self::$registry->getService('template')->assign(
            'taxList',
            self::$registry->getService('store')->getTaxesList()
          );
          self::$registry->getService('template')->assign(
            'offer',
            self::$registry->getService('store')->offerById($offerId)
          );
          self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/offers/offer_edit.tpl");
        } else {
          self::$registry->getService('irequest')->movePage(
            301,
            'cpanel/store/offers'
          );
        }
        break;
      case 'add-article-to-offer':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0) && self::$registry->getService('store')->isOfferById($form['offerId'])) {
            $resp = self::$registry->getService('store')->addOnArticleToOffer( $form );
            
            if((bool) $resp === true) {
              self::$registry->getService('json')->push(array(
                'status'  => 200,
                'message' => "Success"
              ));
              self::$registry->getService('json')->renderJSON();
            } else if(is_null($resp)) {
              self::$registry->getService('json')->push(array(
                'status'  => 401,
                'message' => "ERROR DISCOUNT NOT DEFINED."
              ));
              self::$registry->getService('json')->renderJSON();
            } else {
              self::$registry->getService('json')->push(array(
                'status'  => 400,
                'message' => "ERROR"
              ));
              self::$registry->getService('json')->renderJSON();
            }
          } else {
            self::$registry->getService('json')->push(array(
              'status'  => 400,
              'message' => "FORM ERROR - Unable to process a blank form."
            ));
            self::$registry->getService('json')->renderJSON();
          }
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 401,
            'message' => "FORM ERROR - Unable to process a blank form."
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      case 'table-article-list':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->isOfferById($form['offerId'])) {
            self::$registry->getService('template')->assign(
              'offer',
              self::$registry->getService('store')->offerById($form['offerId'])
            );
            self::$registry->getService('template')->display("extends:[cpanel]store/offers/ajax/offer_article_list.tpl");
          } else {
            self::$registry->getService('messenger')->alert(
              3,
              '401 BAD REQUEST',
              'ERROR: OFFER NOT FOUND.'
            );
          }
        } else {
          $this->__BadPayloud();
        } 
        break;
      case 'update':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form) && (count($form) > 0) && self::$registry->getService('store')->isOfferById($form['offer-id'])) {
            $resp = self::$registry->getService('store')->addOnArticleListToOffer( $form );
            
            if((bool) $resp === true) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/offers/edit/'.self::$registry->getService('store')->offerHashById( $form['offer-id'] )
              );
            } else if(is_null($resp)) {
              self::$registry->getService('messenger')->display(
                3,
                'WARNING',
                'You must enter the correct value product discount.',
                null,
                'cpanel/store/offers/edit/'.self::$registry->getService('store')->offerHashById( $form['offer-id'] ),
                true
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                'An error occurred while processing this form please contact your system administrator.',
                null,
                'cpanel/store/offers',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/offers'
            );
          }
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/offers'
          );
        }
        break;
      case 'send-email':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if((is_array($form) && (count($form) > 0)) && 
              self::$registry->getService('store')->isOfferById( $form['offerId'] ) &&
              self::$registry->getService('store')->isEmailById( $form['emailId'] ) &&
              self::$registry->getService('helper')->isEmail( $form['recipient'] )
          ) {
              if(self::$registry->getService('store')->sendEmailById($form['emailId'], $form['offerId'], $form['recipient'])) {
                self::$registry->getService('json')->push(array(
                  'status'  => 200,
                  'message' => "Success"
                ));
                self::$registry->getService('json')->renderJSON();
              } else {
                self::$registry->getService('json')->push(array(
                  'status'  => 400,
                  'message' => "ERROR - An error occurred while processing this form please contact your system administrator."
                ));
                self::$registry->getService('json')->renderJSON();
              }
          } else {
            self::$registry->getService('json')->push(array(
              'status'  => 400,
              'message' => "BAD REQUEST"
            ));
            self::$registry->getService('json')->renderJSON();
          }
        } else {
          self::$registry->getService('json')->push(array(
            'status'  => 400,
            'message' => "BAD REQUEST"
          ));
          self::$registry->getService('json')->renderJSON();
        }
        break;
      case 'update-all':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(is_array($form['offerList']) && (count($form['offerList']) > 0)) {
            if(self::$registry->getService('store')->updateOfferList( $form )) {
              self::$registry->getService('irequest')->movePage(
                301,
                'cpanel/store/offers'
              );
            } else {
              self::$registry->getService('messenger')->display(
                4,
                'ERROR',
                'An error occurred while processing this form please contact your system administrator.',
                null,
                'cpanel/store/offers',
                true
              );
            }
          } else {
            self::$registry->getService('messenger')->display(
              4,
              'FORM ERROR',
              'Unable to process a blank form.',
              null,
              'cpanel/store/offers'
            );
          }
        } else {
          self::$registry->getService('messenger')->display(
            4,
            'FORM ERROR',
            'Unable to process a blank form.',
            null,
            'cpanel/store/offers'
          );
        }
        break;
      default:
        // PARAMS
        $bit0 = (int) self::$registry->getService('irequest')->getUrlBit(3);
        $bit1 = (int) self::$registry->getService('irequest')->getUrlBit(4);
        // SET PAGINATION VARS
        $page    = ($bit0 > 0) ? $bit0 : 1;
        $limit   = (($bit1 > 0) && ($bit1 <= 500)) ? $bit1 : 10;
        $total   = self::$registry->getService('store')->totalOffers();
        // INIT PAGINATION
        self::$registry->getService('pagination')->setPrefix( 'cpanel/store/offers' );
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
          'currencyList',
          self::$registry->getService('store')->getCurrenciesList()
        );
        self::$registry->getService('template')->assign(
          'taxList',
          self::$registry->getService('store')->getTaxesList()
        );
        self::$registry->getService('template')->assign(
          'emailList',
          self::$registry->getService('store')->emailList(5)
        );
        self::$registry->getService('template')->assign(
          'offerList',
          self::$registry->getService('store')->offerList(true)
        );
        self::$registry->getService('template')->assign('limit',$limit);
        self::$registry->getService('template')->assign('total',$total);
        self::$registry->getService('template')->display("extends:[cpanel]layout.tpl|[cpanel]navigation.tpl|[cpanel]store/offers/offer_list.tpl");
        break;
    }
  }

  /*********************************************************************************************************
  *
  * API
  *
  *********************************************************************************************************/
  
  private function __api()
  {
    switch(empty(self::$registry->getService('irequest')->getUrlBit(3)) ? '' : self::$registry->getService('irequest')->getUrlBit(3))
    {
      case 'o-article-list-modal':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if((isset($form['typeId']) && isset($form['page']) && isset($form['limit']))) {
            // COMMAND CONTROL STATUS
            $status = false;
            // CHECK IS COMMAND OK BY MODAL TYPE
            switch((int) $form['typeId']) {
              case self::ORDER_ARTICLE_LIST_MODAL:
                $status = false;
                break;
              case self::OFFER_ARTICLE_LIST_MODAL:
                $status = (isset($form['offerId']) && self::$registry->getService('store')->isOfferById($form['offerId'])) ? true : false;
                break;
              case self::ARTICLE_ADD_ON_ARTICLE_LIST_MODAL:
                $status = (isset($form['articleId']) && self::$registry->getService('store')->isArticleById($form['articleId'])) ? true : false;
                break;
              default:
                $status = false;
                break;
            }
            if((bool) $status === false) {
              $this->__commandNotFound();
            } else {
              // ARTICLE IGNORE AND USE LIST
              $useList = (isset($form['keywords']) && (strlen($form['keywords']) >= 3)) ? self::$registry->getService('store')->fullTextSearchOnArticleIdsByKeywords( $form['keywords'] ) : null;
              $ignoreList = null;

              switch((int) $form['typeId']) {
                case self::ORDER_ARTICLE_LIST_MODAL:
                  $ignoreList = null;
                  $useList = null;
                  break;
                case self::OFFER_ARTICLE_LIST_MODAL:
                  $data = self::$registry->getService('store')->offerArticleListById( $form['offerId'] );
                  
                  if(!is_null($data)) {
                    $ignoreList = [];

                    foreach($data as $value) {
                      $ignoreList[] = $value->id_article;
                    }
                  }
                  break;
                case self::ARTICLE_ADD_ON_ARTICLE_LIST_MODAL:
                  $data = self::$registry->getService('store')->articleDataById( $form['articleId'] )->relatedArticleList;
                  
                  if(!is_null($data)) {
                    $ignoreList = [];

                    foreach($data as $value) {
                      $ignoreList[] = $value->id_article;
                    }
                  }
                  break;
                default:
                  $ignoreList = null;
                  break;
              }
              // SET PAGINATION VARS
              $page  = (isset($form['page']) && ((int) $form['page'] > 0)) ? (int) $form['page'] : 1;
              $limit = (isset($form['limit']) && (((int) $form['limit'] > 0) && ((int) $form['limit'] < 501))) ? (int) $form['limit'] : 10;
              $total = self::$registry->getService('store')->countArticles( $ignoreList, $useList );
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
                'articleList',
                self::$registry->getService('store')->articleList(true, $ignoreList, $useList)
              );
              self::$registry->getService('template')->assign('page',$page);
              self::$registry->getService('template')->assign('limit',$limit);
              self::$registry->getService('template')->assign('total',$total);
              // RENDER MODAL
              switch((int) $form['typeId']) {
                case self::ORDER_ARTICLE_LIST_MODAL:
                  self::$registry->getService('template')->assign('orderId',$form['orderId']);
                  self::$registry->getService('template')->assign('sKey',$form['sKey']);
                  self::$registry->getService('template')->display("extends:[cpanel]store/api/order_article_list_modal.tpl");
                  break;
                case self::OFFER_ARTICLE_LIST_MODAL:
                  self::$registry->getService('template')->assign('keywords',$form['keywords']);
                  self::$registry->getService('template')->display("extends:[cpanel]store/api/offer_article_list_modal.tpl");
                  break;
                case self::ARTICLE_ADD_ON_ARTICLE_LIST_MODAL:
                  self::$registry->getService('template')->assign('keywords',$form['keywords']);
                  self::$registry->getService('template')->display("extends:[cpanel]store/api/related_article_list_modal.tpl");
                  break;
              }
            }
          } else {
            $this->__commandNotFound();
          }
        } else {
          $this->__BadPayloud();
        }
        break;
      case 'address-email-list':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
        
          if(isset($form['command']) && ((int) $form['command'] === 1)) {
            self::$registry->getService('template')->assign(
              'addressEmaliList',
              self::$registry->getService('store')->addressEmailList()
            );
            self::$registry->getService('template')->display("extends:[cpanel]store/api/address_email_list.tpl");
          } else {
            $this->__commandNotFound();
          }
        } else {
          $this->__BadPayloud();
        }
        break;
      case 'section-values':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          $sectionId = (int) $form["sectionId"];
          $required  = ((string) $form['required'] === "false") ? false : true;
          $avIds = array(1,2,3,4);
          $data  = null;
          
          if(in_array($sectionId, $avIds)) {
            switch($sectionId) {
              case 1:
                $data = self::$registry->getService('store')->categoryList();
                break;
              case 2:
                $data = self::$registry->getService('store')->attributeList();
                break;
              case 3:
                $data = self::$registry->getService('store')->attributeValueList();
                break;
              case 4:
                $data = self::$registry->getService('store')->statusList(1);
                break;
              default:
                $this->__BadRequest();
                break;
            }
            self::$registry->getService('template')->assign('data',$data);
            self::$registry->getService('template')->assign('sectionId',$sectionId);
            self::$registry->getService('template')->assign('required',$required);
            self::$registry->getService('template')->display("extends:[cpanel]store/api/section_value_list.tpl");
          }
        } else {
          $this->__BadRequest();
        }
        break;
      case 'address':
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          
          if(self::$registry->getService('store')->isAddressByContactId($form["contactId"])) {
            $data = self::$registry->getService('store')->addressDataByContactId($form["contactId"]);
            $data->first_name   = html_entity_decode($data->first_name, ENT_QUOTES, "UTF-8");
            $data->midlle_name  = html_entity_decode($data->midlle_name, ENT_QUOTES, "UTF-8");
            $data->last_name    = html_entity_decode($data->last_name, ENT_QUOTES, "UTF-8");
            $data->city         = html_entity_decode($data->city, ENT_QUOTES, "UTF-8");
            $data->company_name = html_entity_decode($data->company_name, ENT_QUOTES, "UTF-8");
            $data->street       = html_entity_decode($data->street, ENT_QUOTES, "UTF-8");
            // render
            self::$registry->getService('json')->push($data);
            self::$registry->getService('json')->renderJSON();
          } else {
            $this->__BadRequest();
          }
        } else {
          $this->__BadRequest();
        }
        break;
      default:
        $this->__BadRequest();
        break;
    }
  }
  
  private function __BadPayloud()
  {
    self::$registry->getService('messenger')->alert(
      4,
      '401 BAD REQUEST',
      'ERROR: POSTING PAYLOAD IS INCORRECT.'
    );
  }
  
  private function __commandNotFound()
  {
    self::$registry->getService('messenger')->alert(
      4,
      '400 BAD REQUEST',
      'ERROR: COMMAND NOT FOUND.'
    );
  }
  
  private function __BadRequest() 
  {
    self::$registry->getService('json')->push(array(
      'status'  => 400,
      'message' => "Bad Request"
    ));
    self::$registry->getService('json')->renderJSON();
  }
  
  private function __wakeup() {}
  
  private function __clone() {}
  
}