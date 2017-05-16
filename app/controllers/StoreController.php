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

class StoreController {
  
  /** API **/
  
  const API_CART = 'cart';
  
  const API_DELIVERY_PAYMENT_TIES = 'dpt';
  
  const API_FILTER = 'filter';
  
  const API_FILTER_AVAILABILITY_CHECK_OPTIONS = 'aov';
  
  const API_SEARCH_AUTOCOMPLETE = 'ac';
  
  /** CART ACTION IDS **/
  
  const CART_ACTION_MATRIX_PAR_AB_QTY = 1;
  
  const CART_ACTION_ADD_TO_CART = 2;
  
  const CART_ACTION_CALCULATION_ITEM_QTY = 3;
  
  const CART_ACTION_RELOAD_STATUS = 4;
  
  /** ORDER ACTION IDS **/
  
  const ORDER_ACTION_CREATE_NEW_ORDER = 0;
  
  const ORDER_ACTION_DELIVERY_PAYMENT = 1;
  
  const ORDER_ACTION_ADRRESS_BOOK = 2;
  
  const ORDER_ACTION_SUMMARY = 3;

  const ORDER_ACTION_SAVE = 4;
  
  /** ORDER DELIVERY-PAYMENT TIES **/
  
  const ORDER_SUBACTION_DELIVERY_PAYMENT_SET = 1;
  
  const DPT_ACTION_LOAD_PAYMENT_TIES = 1;
  
  const DPT_ACTION_LOAD_DELIVERY_TIES = 2;

  /** ORDER ACCOUNT ACTION **/
  
  const ACCOUNT_ACTION_ADDRESS_CREATE = 0;
  
  const ACCOUNT_ACTION_ADDRESS_BOOK = 1;
  
  const ACCOUNT_ACTION_ADDRESS_BOOK_EDIT = 2;
  
  const ACCOUNT_ACTION_ADDRESS_BOOK_UPDATE = 3;
  
  const ACCOUNT_ACTION_ADDRESS_BOOK_REMOVE = 4;
  
  const ACCOUNT_ACTION_ORDERS_HISTORY = 2;
  
  const ACCOUNT_ACTION_ORDER_DETAIL = 5;
  
  const ACCOUNT_ACTION_ORDER_DUPLICATE = 6;
  
  const ACCOUNT_ACTION_SHOW_INVOICE_PDF = 7;
  
  /** ORDER ADDRESS ACTION **/
  
  const ORDER_SUBACTION_CREATE_NEW_ADDRESS = 0;
  
  const ORDER_SUBACTION_PROCESS_ADDRESS = 1;

  const ORDER_SUBACTION_EDIT_ADDRESS = 2;
  
  const ORDER_SUBACTION_SAVE_CHANGE_ADDRESS = 3;
  
  const ORDER_SUBACTION_REMOVE_ADDRESS = 4;
  
  /** BANK **/
  
  const BANK_URL = '';
  
  const BANK_CERT_NAME = '';
  
  const BANK_CERT_PASSPHRASE = '';
  
  const MERCHANTNUMBER = 0;
  
  /** EXTERNAL API **/
  
  const USE_HEUREKA = false;
  
  const HEUREKA_API_KEY = '';
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var object **/
  private static $layouts;
  
  /** @var array **/
  private static $order_settings;
  
  /** @var array Translate URL Actions Keywords **/
  private $translateUrlKeys;
  
  /** @var array **/
  private $actions;
  
  /** @var array **/
  private $order_links;
  
  /** @var array **/
  private $form_links;
  
  /** @var int **/
  private static $perPage = 24;
  
  /** @var int **/
  private static $currencyId = 0;
  
  /** @var int **/
  private static $taxId = 0;
  
  /** @var int **/
  private static $cartMaxQty = 99;
  
  /** @var float **/
  private static $cartDiscountAmount = 0;
  
  /** @var array Allowed catagories for filter searching **/
  private static $allowFilterCategories = null;
  
  /** @var int **/
  private static $rentCatId = 0;
  
  /** @var int **/
  private static $sizeGuidePageId = 1;
  
  public function __construct( Registry $registry ) 
  {
    // GLOBAL VARS
    self::$registry           = $registry;
    self::$currencyId         = ((bool) self::$registry->getService('objects')->isObjectKey('cart_default_currency_id') === true) ? (int) self::$registry->getService('objects-storage')->get('cart_default_currency_id') : 0;
    self::$taxId              = ((bool) self::$registry->getService('objects')->isObjectKey('cart_default_tax_id') === true) ? (int) self::$registry->getService('objects-storage')->get('cart_default_tax_id') : 0;
    self::$cartDiscountAmount = ((bool) self::$registry->getService('objects')->isObjectKey('cart_discount_amount') === true) ? (float) self::$registry->getService('objects-storage')->get('cart_discount_amount') : 0;
    self::$order_settings     = (is_file(__CONFIG_DIR__ . 'order.inc.php')) ? include_once __CONFIG_DIR__ . 'order.inc.php' : null;
    self::$layouts            = (object) array(
      'article'   => "layout.tpl|header.tpl|nav.tpl|store/article.tpl|footer.tpl",
      'category'  => "layout.tpl|header.tpl|nav.tpl|store/category.tpl|footer.tpl",
      'attribute' => "layout.tpl|header.tpl|nav.tpl|store/attribute.tpl|footer.tpl"
    );
    // SET VAT
    if(self::$registry->getService('geoip')->getVisitor()->countryCode == 'IT')
    {
      self::$taxId = 2;
    }
    // INITIALIZE
    $this->__initTUrls();
  }
  
  public function run()
  {
    self::$registry->getService('irequest')->movePage(301,'');
  }
  
  /*********************************************************************************************************
  *
  * ARTICLE
  *
  *********************************************************************************************************/
  
  public function article( $routeId = 0 )
  {
    // ARTICLE OBJECT
    $obj = self::$registry->getService('store')->articleObjByRouteId( $routeId );
    
    if(is_object($obj)) {
      // ARTICLE DATA OBJECT
      $article = self::$registry->getService('store')->articleOnSiteById($obj->id_article, $obj->id_lang);
      
      //self::$registry->getService('helper')->dump($article);
      
      if(is_object($article)) {
        // SEARCH KEWORD RELEVANCE SCORE
        $rsId = (isset($_GET["rs"]) && self::$registry->getService('store')->isSearchKeywordsById( $_GET["rs"] )) ? (int) $_GET["rs"] : null;
        // SAVE VIEWER STATISTIC
        self::$registry->getService('store')->insertViewerArticleById(
          $article->id_article, 
          $obj->id_lang
        );
        // RENDER
        if(!is_null($rsId)) {
          self::$registry->getService('store')->editArticleRelevanceScoreBySKWId($rsId, $article->id_article);
          self::$registry->getService('irequest')->movePage(
            301,
            $obj->path
          );
        }
        // VARS
        $tagList = self::$registry->getService('store')->articleTagListById(
          $article->id_article, 
          $obj->id_lang,
          null
        );
        // SEO
        self::$registry->getService('controller')->setTitle( ((strlen($article->site_title) > 0) ? $article->site_title : $article->article_name) );
        self::$registry->getService('controller')->setMetaRobot( $article->meta_robot );
        self::$registry->getService('controller')->setMetaKeywords( $article->meta_keywords );
        self::$registry->getService('controller')->setMetaDescription( ((strlen($article->meta_description) > 0) ? $article->meta_description : strip_tags($article->description)) );
        // TEMP. VARS
        self::$registry->getService('template')->assign('tagList',$tagList);
        self::$registry->getService('template')->assign('article',$article);
        self::$registry->getService('template')->assign('sizeGuide',self::$registry->getService('page')->pageOnSiteById(self::$sizeGuidePageId, $obj->id_lang));
        self::$registry->getService('template')->assign('breadcrumb',self::$registry->getService('store')->articleBreadcrumbById($obj->id_article, $obj->id_lang));
        self::$registry->getService('template')->display('extends:'. self::$layouts->article);
      } 
      else 
      { 
        self::$registry->getService('irequest')->movePage(301,'');
      }
    } 
    else 
    { 
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function articleModal()
  {
    $form      = self::$registry->getService('irequest')->getPost();
    $reference = (isset($form['reference'])) ? $form['reference'] : '';
    $articleId = (strlen($reference) === 32) ? self::$registry->getService('store')->articleIdByReference( $reference ) : 0;
    
    if(self::$registry->getService('store')->isArticleById( $articleId )) 
    {
      // ARTICLE DATA OBJECT
      $article = self::$registry->getService('store')->articleOnSiteById(
        $articleId, 
        self::$registry->getService('languages')->getCurrentLanguage()
      );
      self::$registry->getService('template')->assign('article',$article);
      self::$registry->getService('template')->display('extends:store/ajax/article_detail_modal.tpl');
    } 
    else 
    {
      self::$registry->getService('messenger')->alert(
        4,
        'CHYBA',
        'PRODUKT NIE JE K DISPOZICII ALEBO NEEXISTUJE.'
      );
    }
  }

  /*********************************************************************************************************
  *
  * CATEGORY
  *
  *********************************************************************************************************/
  
  public function category( $routeId = 0 )
  {
    // CATEGORY OBJECT
    $obj = self::$registry->getService('store')->categoryObjByRouteId( $routeId );
    
    if(is_object($obj)) {
      /** PAGINATION PARAMETERS **/
      $urlBits = self::$registry->getService('irequest')->getUrlBits();
      // reverse
      krsort($urlBits);
      // Add to params
      $params = array_slice($urlBits,0,2);
      // reverse
      krsort($params);
      // reindex
      $params = array_values($params);
      // check 
      $params     = ((count($params) === 2) && (is_int((int) $params[0]) && is_int((int) $params[1]))) ? $params : null;
      $page       = ((count($params) === 2) && (((int) $params[0] > 0) && ((int) $params[0] <= 1000))) ? (int) $params[0] : 1;
      $limit      = ((count($params) === 2) && ((string) $params[1] == 'all') ? 'all' : ((((int) $params[1] > 0) && ((int) $params[1] <= 1000))) ? (int) $params[1] : self::$perPage);
      $sortRuleId = (isset($_GET["sort"]) && (((int) $_GET["sort"] > 0) && ((int) $_GET["sort"] < 17))) ? (int) $_GET["sort"] : 0;
      $priceFrom  = (isset($_GET["price_from"]) && ((int) $_GET["price_from"] > 0)) ? (float) $_GET["price_from"] : 0;
      $priceUpTo  = (isset($_GET["price_up_to"]) && ((int) $_GET["price_up_to"] > 0)) ? (float) $_GET["price_up_to"] : 0;
      $manufacturerId = (isset($_GET["manufacturer"]) && ((int) $_GET["manufacturer"] > 0)) ? (int) $_GET["manufacturer"] : 0;
      $total = self::$registry->getService('store')->articleListCountOnSiteByCatId(
        $obj->id_category,
        null,
        $obj->id_lang,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
      // INIT PAGINATION
      self::$registry->getService('pagination')->setPrefix( $obj->path );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // CATEGORY DATA
      $category = self::$registry->getService('store')->categoryOnSiteById(
        $obj->id_category,    
        null,
        $obj->id_lang,
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        true
      );
      // CRAWLING AND INDEXING
      $meta_robots = $category->meta_robots;
      
      if((count($params) === 2) ||
        (($sortRuleId !== 0) || ($priceFrom !== 0) || ($priceUpTo !== 0) || ($manufacturerId !== 0))   
      ) {
        $meta_robots = 'noindex,follow';
      }
      // SEO
      self::$registry->getService('controller')->setTitle( $category->site_title );
      self::$registry->getService('controller')->setMetaRobot( $meta_robots );
      self::$registry->getService('controller')->setMetaKeywords( $category->meta_keywords );
      self::$registry->getService('controller')->setMetaDescription( $category->meta_description );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(
          5,
          'pagination pagination-sm', 
          false,
          null,
          null,
          '?sort='.$sortRuleId.'&price_from='.$priceFrom.'&price_up_to='.$priceUpTo.'&manufacturer='.$manufacturerId
        )
      );
      self::$registry->getService('template')->assign(
        'breadcrumb',
        self::$registry->getService('store')->categoryBreadcrumbById(
          $category->id_category, 
          $obj->id_lang
        )
      );
      self::$registry->getService('template')->assign(
        'manufacturerList',
        self::$registry->getService('store')->manufacturerListOnSite(
          $obj->id_lang, 
          null
        )
      );
      self::$registry->getService('template')->assign(
        'higLowPriceBalance',
        self::$registry->getService('store')->highLowPriceBalanceByCategoryId(
          $category->id_category
        )
      );
      // TEMP. VARS
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('path',$obj->path);
      self::$registry->getService('template')->assign('category',$category);
      self::$registry->getService('template')->assign('sortRuleId',$sortRuleId);
      self::$registry->getService('template')->assign('priceFrom',$priceFrom);
      self::$registry->getService('template')->assign('priceUpTo',$priceUpTo);
      self::$registry->getService('template')->assign('manufacturerId',$manufacturerId);
      self::$registry->getService('template')->assign('rentCatId',self::$rentCatId);
      // TEMPLATES
      self::$registry->getService('template')->display('extends:'. self::$layouts->category);
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  /*********************************************************************************************************
  *
  * ATTR / ATTR-V
  *
  *********************************************************************************************************/

  public function attr3( $routeId = 0 )
  {
    // VARS
    $typeId     = (self::$registry->getService('store')->isAttributeObjectByRouteId($routeId)) ? 1 : 2;
    $object     = ((int) $typeId === 1) ? self::$registry->getService('store')->attributeObjByRouteId($routeId) : self::$registry->getService('store')->attributeValueObjectByRouteId($routeId);
    $params     = self::$registry->getService('irequest')->getUrlBits();
    $sortRuleId = (isset($_GET["sort"]) && (((int) $_GET["sort"] > 0) && ((int) $_GET["sort"] < 17))) ? (int) $_GET["sort"] : 0;
    $priceFrom  = (isset($_GET["price_from"]) && ((int) $_GET["price_from"] > 0)) ? (float) $_GET["price_from"] : 0;
    $priceUpTo  = (isset($_GET["price_up_to"]) && ((int) $_GET["price_up_to"] > 0)) ? (float) $_GET["price_up_to"] : 0;
    $manufacturerId = (isset($_GET["manufacturer"]) && ((int) $_GET["manufacturer"] > 0)) ? (int) $_GET["manufacturer"] : 0;

    if(is_object($object) && (is_array($params) && (count($params) > 0))) 
    {
      $case = self::$registry->getService('store')->attrCaseByParams(
        $typeId,
        $object, 
        $params, 
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId   
      );
      /** PAGINATION **/
      if((bool) $case->pagination === true) {
        self::$registry->getService('template')->assign(
          'pagination',
          self::$registry->getService('pagination')->createLinks(
            5,
            'pagination pagination-sm', 
            false,
            null,
            null,
            '?sort='.$sortRuleId.'&price_from='.$priceFrom.'&price_up_to='.$priceUpTo.'&manufacturer='.$manufacturerId
          )
        );
        self::$registry->getService('template')->assign('prefix', $case->prefix);
        self::$registry->getService('template')->assign('page', $case->page);
        self::$registry->getService('template')->assign('limit', $case->limit);
        self::$registry->getService('template')->assign('total', $case->total);
      }
      /** SEO **/
      if(is_object($case->seo)) 
      {
        self::$registry->getService('controller')->setTitle( $case->seo->site_title );
        self::$registry->getService('controller')->setMetaRobot( (((bool) $case->no_follow === true) ? 'noindex,nofollow' : $case->seo->meta_robot) );
        self::$registry->getService('controller')->setMetaKeywords( $case->seo->meta_keywords );
        self::$registry->getService('controller')->setMetaDescription( $case->seo->meta_description );
      }
      /** TEMPLATE VARS **/
      self::$registry->getService('template')->assign(
        'manufacturerList',
        self::$registry->getService('store')->manufacturerListOnSite(
          $object->id_lang, 
          null
          )
      );
      // TEMP. VARS
      self::$registry->getService('template')->assign('sortRuleId',$sortRuleId);
      self::$registry->getService('template')->assign('priceFrom',$priceFrom);
      self::$registry->getService('template')->assign('priceUpTo',$priceUpTo);
      self::$registry->getService('template')->assign('manufacturerId',$manufacturerId);
      self::$registry->getService('template')->assign('data',$case->data);
      self::$registry->getService('template')->assign('links',$case->links);
      self::$registry->getService('template')->assign('path',$case->prefix);
      self::$registry->getService('template')->assign('breadcrumb',$case->breadcrumb);
      self::$registry->getService('template')->assign('articleList',$case->articleList);
      self::$registry->getService('template')->assign('is_pagination',$case->pagination);
      self::$registry->getService('template')->assign('higLowPriceBalance',$case->higLowPriceBalance);
      // TEMPLATES
      self::$registry->getService('template')->display('extends:'. self::$layouts->attribute);
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301, '');
    }
  }
  
  /*********************************************************************************************************
  *
  * DISCOUNT CIRCUITS
  *
  *********************************************************************************************************/
  
  public function discountCircuit( $routeId = 0 )
  {
    // DISCOUNT CIRCUIT OBJECT
    $obj = self::$registry->getService('store')->discountCircuitObjByRouteId( $routeId );
    
    if(is_object($obj)) {
      /** PAGINATION PARAMETERS **/
      $urlBits = self::$registry->getService('irequest')->getUrlBits();
      // reverse
      krsort($urlBits);
      // Add to params
      $params = array_slice($urlBits,0,2);
      // reverse
      krsort($params);
      // reindex
      $params = array_values($params);
      // check 
      $params     = ((count($params) === 2) && (is_int((int) $params[0]) && is_int((int) $params[1]))) ? $params : null;
      $page       = ((count($params) === 2) && (((int) $params[0] > 0) && ((int) $params[0] <= 1000))) ? (int) $params[0] : 1;
      $limit      = ((count($params) === 2) && ((string) $params[1] == 'all') ? 'all' : ( (((int) $params[1] > 0) && ((int) $params[1] <= 1000))) ? (int) $params[1] : self::$perPage);
      $sortRuleId = (isset($_GET["sort"]) && (((int) $_GET["sort"] > 0) && ((int) $_GET["sort"] < 17))) ? (int) $_GET["sort"] : 0;
      $priceFrom  = (isset($_GET["price_from"]) && ((int) $_GET["price_from"] > 0)) ? (float) $_GET["price_from"] : 0;
      $priceUpTo  = (isset($_GET["price_up_to"]) && ((int) $_GET["price_up_to"] > 0)) ? (float) $_GET["price_up_to"] : 0;
      $manufacturerId = (isset($_GET["manufacturer"]) && ((int) $_GET["manufacturer"] > 0)) ? (int) $_GET["manufacturer"] : 0;
      $total = self::$registry->getService('store')->totalArticlesOnDiscountCircuitOnSiteById(
        $obj->id_circuit,
        $obj->id_lang,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
      // INIT PAGINATION
      self::$registry->getService('pagination')->setPrefix( $obj->path );
      self::$registry->getService('pagination')->setPage( $page );
      self::$registry->getService('pagination')->setLimit( $limit );
      self::$registry->getService('pagination')->setTotal( $total );
      // DISCOUNT CIRCUIT
      $discountCircuit = self::$registry->getService('store')->discountCircuitOnSiteById(
        $obj->id_circuit, 
        $obj->id_lang, 
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        true
      );      
      // SEO
      self::$registry->getService('controller')->setTitle( $discountCircuit->site_title );
      self::$registry->getService('controller')->setMetaRobot( $discountCircuit->meta_robots );
      self::$registry->getService('controller')->setMetaKeywords( $discountCircuit->meta_keywords );
      self::$registry->getService('controller')->setMetaDescription( $discountCircuit->meta_description );
      // TEMP. VARS
      self::$registry->getService('template')->assign(
        'pagination',
        self::$registry->getService('pagination')->createLinks(
          5,
          'pagination pagination-sm', 
          false,
          null,
          null,
          '?sort='.$sortRuleId.'&price_from='.$priceFrom.'&price_up_to='.$priceUpTo.'&manufacturer='.$manufacturerId
        )
      );
      self::$registry->getService('template')->assign(
        'breadcrumb',self::$registry->getService('store')->discountCircuitsBreadcrumb(
          $obj->id_lang, 
          array($obj->id_circuit)
        )
      );
      self::$registry->getService('template')->assign(
        'manufacturerList',
        self::$registry->getService('store')->manufacturerListOnSite(
          $obj->id_lang, 
          null
        )
      );
      self::$registry->getService('template')->assign(
        'higLowPriceBalance',
        self::$registry->getService('store')->highLowPriceBalanceByDiscountCircuitById(
          $obj->id_circuit    
        )
      );
      self::$registry->getService('template')->assign('limit',$limit);
      self::$registry->getService('template')->assign('total',$total);
      self::$registry->getService('template')->assign('path',$obj->path);
      self::$registry->getService('template')->assign('sortRuleId',$sortRuleId);
      self::$registry->getService('template')->assign('priceFrom',$priceFrom);
      self::$registry->getService('template')->assign('priceUpTo',$priceUpTo);
      self::$registry->getService('template')->assign('manufacturerId',$manufacturerId);
      self::$registry->getService('template')->assign('discountCircuit',$discountCircuit);
      self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/discount_circuit.tpl|footer.tpl');
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function discountCircuits()
  {
    $langId = self::$registry->getService('languages')->getCurrentLanguage();
    /** PAGINATION PARAMETERS **/
    $urlBits = self::$registry->getService('irequest')->getUrlBits();
    // reverse
    krsort($urlBits);
    // Add to params
    $params = array_slice($urlBits,0,2);
    // reverse
    krsort($params);
    // reindex
    $params = array_values($params);
    // check 
    $prefix     = $urlBits[0];
    $params     = ((count($params) === 2) && (is_int((int) $params[0]) && is_int((int) $params[1]))) ? $params : null;
    $page       = ((count($params) === 2) && (((int) $params[0] > 0) && ((int) $params[0] <= 1000))) ? (int) $params[0] : 1;
    $limit      = ((count($params) === 2) && ((string) $params[1] == 'all') ? 'all' : ( (((int) $params[1] > 0) && ((int) $params[1] <= 1000))) ? (int) $params[1] : self::$perPage);
    $sortRuleId = (isset($_GET["sort"]) && (((int) $_GET["sort"] > 0) && ((int) $_GET["sort"] < 17))) ? (int) $_GET["sort"] : 0;
    $priceFrom  = (isset($_GET["price_from"]) && ((int) $_GET["price_from"] > 0)) ? (float) $_GET["price_from"] : 0;
    $priceUpTo  = (isset($_GET["price_up_to"]) && ((int) $_GET["price_up_to"] > 0)) ? (float) $_GET["price_up_to"] : 0;
    $manufacturerId = (isset($_GET["manufacturer"]) && ((int) $_GET["manufacturer"] > 0)) ? (int) $_GET["manufacturer"] : 0;
    $total = self::$registry->getService('store')->totalArticlesOnDiscountCircuits(
      $langId,
      $priceFrom,
      $priceUpTo,
      $manufacturerId
    );
    // INIT PAGINATION
    self::$registry->getService('pagination')->setPrefix( $prefix );
    self::$registry->getService('pagination')->setPage( $page );
    self::$registry->getService('pagination')->setLimit( $limit );
    self::$registry->getService('pagination')->setTotal( $total );
    // TEMP. VARS
    self::$registry->getService('template')->assign(
      'pagination',
      self::$registry->getService('pagination')->createLinks(
        5,
        'pagination pagination-sm', 
        false,
        null,
        null,
        '?sort='.$sortRuleId.'&price_from='.$priceFrom.'&price_up_to='.$priceUpTo.'&manufacturer='.$manufacturerId
      )
    );
    self::$registry->getService('template')->assign(
      'articleList',
      self::$registry->getService('store')->articleListByDiscountCircuits(
        $langId,
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        true
      )
    );
    self::$registry->getService('template')->assign(
      'breadcrumb',
      self::$registry->getService('store')->discountCircuitsBreadcrumb(
        $langId, 
        null
      )
    );
    self::$registry->getService('template')->assign(
      'manufacturerList',
      self::$registry->getService('store')->manufacturerListOnSite(
        $langId, 
        null
      )
    );
    self::$registry->getService('template')->assign(
      'higLowPriceBalance',
      self::$registry->getService('store')->highLowPriceBalanceByDiscountCircuits()
    );
    self::$registry->getService('template')->assign('limit',$limit);
    self::$registry->getService('template')->assign('total',$total);
    self::$registry->getService('template')->assign('path',$prefix);
    self::$registry->getService('template')->assign('sortRuleId',$sortRuleId);
    self::$registry->getService('template')->assign('priceFrom',$priceFrom);
    self::$registry->getService('template')->assign('priceUpTo',$priceUpTo);
    self::$registry->getService('template')->assign('manufacturerId',$manufacturerId);
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/discount_circuits.tpl|footer.tpl');
  }
  
  /*********************************************************************************************************
  *
  * SEARCH
  *
  *********************************************************************************************************/
  
  public function search()
  {
    $keywords = (string) $_GET["q"];
    $response = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticlesByKeywords($keywords, true) : null;
    
    // INDEXING
    $SKWID = (is_array($response) && (count($response) > 0)) ? self::$registry->getService('store')->indexingSearchWords($keywords, $response) : false;
    // TEMP. VARS
    self::$registry->getService('template')->assign('keywords',$keywords);
    self::$registry->getService('template')->assign('articleList',$response);
    self::$registry->getService('template')->assign('SKWID',(($SKWID !== false) ? $SKWID : null));
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/search.tpl|footer.tpl');
  }
  
  private function __apiSearchAutocomplete()
  {
    $keywords = (string) $_GET["q"];
    $response = (strlen($keywords) >= 3) ? self::$registry->getService('store')->fullTextSearchOnArticlesByKeywords($keywords, true, 10) : null;
    
    // INDEXING
    $SKWID = (is_array($response) && (count($response) > 0)) ? self::$registry->getService('store')->indexingSearchWords($keywords, $response) : false;
    // TEMP. VARS
    self::$registry->getService('template')->assign('articleList',$response);
    self::$registry->getService('template')->assign('SKWID',(($SKWID !== false) ? $SKWID : null));
    self::$registry->getService('template')->display('extends:store/ajax/search_autocomplete.tpl');
  }
  
  /*********************************************************************************************************
  *
  * FILTER CHOICE VIEW
  *
  *********************************************************************************************************/
  
  public function choiceView()
  {
    $date = (string) self::$registry->getService('irequest')->getUrlBit(1);
    $oNum = (int) self::$registry->getService('irequest')->getUrlBit(2);
    
    if((((strlen($date) > 0) && self::$registry->getService('helper')->validateDate($date, 'd-m-Y')) && ($oNum > 0)) && 
      self::$registry->getService('store')->isChoiceByDO($date, $oNum)
    ) {
      $langId      = self::$registry->getService('languages')->getCurrentLanguage();
      $choiceId    = self::$registry->getService('store')->choiceIdByDO($date, $oNum);
      $choiceOpts  = self::$registry->getService('store')->choiceOptsById( $choiceId );
      $aIds        = (count($choiceOpts) > 0) ? self::$registry->getService('store')->loadArticlesListByCollection($choiceOpts, 0, true) : null;
      $articleList = ((int) $aIds->count > 0) ? self::$registry->getService('store')->articleListOnSiteByFilterCollection(((is_object($aIds)) ? $aIds : null), false, $langId) : null;
      $vList       = [];
      
      foreach($choiceOpts as $value) {
        $vList[] = self::$registry->getService('store')->attributeValueDataById(0, $value["valId"])[ $langId ];
      }
      // TEMP. VARS
      self::$registry->getService('template')->assign('valueList',$vList);
      self::$registry->getService('template')->assign('articleList',$articleList);
      self::$registry->getService('template')->assign('choiceLink',self::$registry->getService('store')->choiceLinkById( $choiceId ));
      self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/filter.tpl|store/filter_form.tpl|newsletter.tpl|footer.tpl');
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  /*********************************************************************************************************
  *
  * FILTER
  *
  *********************************************************************************************************/
  
  public function simpleFilter()
  {
    $form   = self::$registry->getService('irequest')->getPost();
    $opts   = [];
    $price  = null;
    $width  = null;
    $height = null;
    $depth  = null;
    $catId  = 0;
    
    // PRICE
    if(isset($form["price-from"]) && isset($form["price-up-to"])) {
      $price = (object) array(
        'minPrice' => $form["price-from"],
        'maxPrice' => $form["price-up-to"]
      );
    }
    // WIDTH
    if(isset($form["width-from"]) && isset($form["width-up-to"])) {
      $width = (object) array(
        'minWidth' => $form["width-from"],
        'maxWidth' => $form["width-up-to"]
      );
    }
    // HEIGHT
    if(isset($form["height-from"]) && isset($form["height-up-to"])) {
      $height = (object) array(
        'minHeight' => $form["height-from"],
        'maxHeight' => $form["height-up-to"]
      );
    }
    // DEPTH
    if(isset($form["depth-from"]) && isset($form["depth-up-to"])) {
      $depth = (object) array(
        'minDepth' => $form["depth-from"],
        'maxDepth' => $form["depth-up-to"]
      );
    }
    // CATEGORY
    if(isset($form["category"]) && ((int) $form["category"] > 0)) {
      $catId = (int) $form["category"];
    }
    // MATERIAL
    if(isset($form["material"]) && ((int) $form["material"] > 0)) {
      $opts[]["valId"] = (int) $form["material"];
    }
    // COLOR
    if(isset($form["color"]) && (is_array($form["color"]) && (count($form["color"]) > 0))) {
      foreach($form["color"] as $value) {
        if(((int) $value["'on'"] === 1) && self::$registry->getService('store')->isAttributeValueById(0, $value["'color'"])) {
          $opts[]["valId"] = (int) $value["'color'"];
        }
      }
    }
    // INIT
    $AIDS = self::$registry->getService('store')->loadArticlesListByCollection($opts, $catId, $price, $width, $height, $depth, true, false);
    $AL   = (is_object($AIDS) && ((int) $AIDS->count > 0)) ? self::$registry->getService('store')->articleListOnSiteByFilterCollection(((is_object($AIDS)) ? $AIDS : null), false, self::$registry->getService('languages')->getCurrentLanguage()) : null;
    // TEMP. VARS
    self::$registry->getService('template')->assign('articleList',$AL);
    // RENDER
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/filter.tpl|footer.tpl');
  }
  
  private function __apiFilter()
  {
    if(self::$registry->getService('irequest')->isPost()) {
      $form  = self::$registry->getService('irequest')->getPost();
      $catId = (int) $form['catId'];
      $articleList = null;
      if(!empty($form["data"])) {
        // article ids
        $ids = (isset($form["data"]) && is_array($form["data"])) ? self::$registry->getService('store')->loadArticlesListByCollection( $form["data"], $catId ) : null;
        // template
        self::$registry->getService('pagination')->setPrefix( '' );
        self::$registry->getService('pagination')->setPage( (((int) $form['page'] < 1) ? 1 : (int) $form['page']) );
        self::$registry->getService('pagination')->setLimit( 12 );
        self::$registry->getService('pagination')->setTotal( $ids->count );
        self::$registry->getService('template')->assign(
          'pagination',
          self::$registry->getService('pagination')->createLinks(5,'pagination pagination-sm', true)
        );
        if(!is_null($ids)) {
          $articleList = self::$registry->getService('store')->articleListOnSiteByFilterCollection(
            $ids,
            true, 
            self::$registry->getService('languages')->getCurrentLanguage()
          );
        }
      }
      self::$registry->getService('template')->assign('articleList',$articleList);
      self::$registry->getService('template')->display('extends:store/filter/ajax/filter_result_articles.tpl');
    } else {
      $this->__BadRequest();
    }
  }
  
  private function __apiFilterAvailabilityCheckOptions()
  {
    if(self::$registry->getService('irequest')->isPost()) {
      $form  = self::$registry->getService('irequest')->getPost();
      $catId = (int) $form['catId'];
      // article ids
      $cList = (((bool) $form["force"] === true) || (isset($form["data"]) && is_array($form["data"]))) ? self::$registry->getService('store')->checkFilterOptionsAvaibility( self::$registry->getService('store')->getFilterMatrix(), $form["data"], $catId ) : null;
      // response
      if(!is_null($cList)) {
        self::$registry->getService('json')->push(array(
          'status'  => 200,
          'message' => 'Success',
          'cList'   => $cList
        ));
        self::$registry->getService('json')->renderJSON();
      } else {
        $this->__Response(500, '766thjh776');
      }
    } else {
      $this->__BadRequest();
    }
  }
  
  private function __apiCountSearchArticle()
  {
    $form = self::$registry->getService('irequest')->getPost();
    
    if(isset($form["data"]) && (is_array($form["data"]) && (count($form["data"]) > 0))) {
      $obj = self::$registry->getService('store')->loadArticlesListByCollection($form["data"], 0, true);
      
      self::$registry->getService('json')->push(array(
        'status' => 200,
        'count'  => ((is_object($obj)) ? $obj->count : 0)
      ));
      self::$registry->getService('json')->renderJSON();
    } else {
      $this->__BadRequest();
    }
  }
  
  /*********************************************************************************************************
  *
  * ACCOUNT
  *
  *********************************************************************************************************/
  
  public function account()
  {
    $bit = self::$registry->getService('irequest')->getUrlBit(1);
    $action = (array_key_exists($bit,$this->translateUrlKeys)) ? $this->translateUrlKeys[ $bit ]: 999;
    
    switch($action) {
      case self::ACCOUNT_ACTION_ADDRESS_BOOK:
        $this->__accountAddressBook();
        break;
      case self::ACCOUNT_ACTION_ORDERS_HISTORY:
        self::$registry->getService('template')->assign(
          'orderList',
          self::$registry->getService('store')->orderListByUserId(
            self::$registry->getService('controller')->getUserId()
          )
        );
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/account/account_orders_history.tpl|footer.tpl');
        break;
      case self::ACCOUNT_ACTION_ORDER_DETAIL:
        $osKey   = (string) self::$registry->getService('irequest')->getUrlBit(2);
        $orderId = (strlen($osKey) === 32) ? self::$registry->getService('store')->orderIdBySecureKey( $osKey ) : null;
        $order   = (!is_null($orderId)) ? self::$registry->getService('store')->orderById( $orderId ) : null;   
    
        self::$registry->getService('template')->assign('order',$order);    
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/account/account_order_detail.tpl|footer.tpl');
        break;
      case self::ACCOUNT_ACTION_ORDER_DUPLICATE:
        $osKey   = (string) self::$registry->getService('irequest')->getUrlBit(2);
        $orderId = (strlen($osKey) === 32) ? self::$registry->getService('store')->orderIdBySecureKey( $osKey ) : null;
        
        if(self::$registry->getService('store')->duplicateOrderById( $orderId )) 
        {
          self::$registry->getService('irequest')->movePage(301,$this->actions['shopping-cart']);
        } else {
          echo 'ERROR';
        }
        break;
      case self::ACCOUNT_ACTION_SHOW_INVOICE_PDF:
        $bit0 = self::$registry->getService('irequest')->getUrlBit(2);
        $orderId = (self::$registry->getService('store')->isOrderBySecureKey( $bit0, false)) ? self::$registry->getService('store')->orderIdBySecureKey( $bit0, false ) : null;
        $invoiceId = (!is_null($orderId) && self::$registry->getService('store')->isInvoiceByOrderId( $orderId )) ? self::$registry->getService('store')->invoiceIdByOrderId( $orderId ) : null;
        $invoice = self::$registry->getService('drive')->getFileById( $invoiceId );
        
        if(!is_null($invoice)) {
          $sPDF = __UPLOAD_PATH__.$invoice->file_hash.$invoice->file_ext;
          // render
          header('Content-type: application/pdf');
          header('Content-Disposition: inline; filename="'.$invoice->file_name.'"');
          header('Content-Transfer-Encoding: binary');
          header('Content-Length: ' . filesize($sPDF));
          header('Accept-Ranges: bytes');

          @readfile($sPDF);
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'statistics',
          self::$registry->getService('store')->userAccountStatisticByUserId(
            self::$registry->getService('controller')->getUserId() 
          )
        );
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/account/account_view.tpl|footer.tpl');
        break;
    }
  }
  
  private function __accountAddressBook()
  {
    $bit2 = (string) self::$registry->getService('irequest')->getUrlBit(2);
    $bit3 = (string) self::$registry->getService('irequest')->getUrlBit(3);
    $action = (array_key_exists($bit2,$this->translateUrlKeys)) ? $this->translateUrlKeys[ $bit2 ]: 999;
    $contactId = (is_string($bit3) && strlen($bit3) == 32) ? self::$registry->getService('store')->contactIdBySecureKey( $bit3 ) : null;
    
    switch($action) {
      case self::ACCOUNT_ACTION_ADDRESS_CREATE:
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          $sKey = explode('_', key($form))[0];

          if(self::$registry->getService('store')->createNewContantOnAddressBook( $form, $sKey )) {
            self::$registry->getService('irequest')->movePage(301,'moje-konto/adresar');
          } else {
            echo "ERROR";
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
        break;
      case self::ACCOUNT_ACTION_ADDRESS_BOOK_EDIT:
        if(!is_null($contactId)) {
          self::$registry->getService('template')->assign(
            'countryList',
            self::$registry->getService('languages')->getCountryList()
          );
          self::$registry->getService('template')->assign('data',self::$registry->getService('store')->addressDataByContactId( $contactId, true ));
          self::$registry->getService('template')->assign('secureKey',self::$registry->getService('cookie')->get('st'));
          self::$registry->getService('template')->assign('addressBook',self::$registry->getService('store')->addressBook());
          self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/account/account_address_book.tpl|footer.tpl');
        } else {
          self::$registry->getService('irequest')->movePage(301,'moje-konto/adresar');
        }
        break;
      case self::ACCOUNT_ACTION_ADDRESS_BOOK_UPDATE:
        if(self::$registry->getService('irequest')->isPost()) {
          $form = self::$registry->getService('irequest')->getPost();
          $cId  = (isset($form['csk']) && !empty($form['csk']) && strlen($form['csk']) == 32) ? self::$registry->getService('store')->contactIdBySecureKey( $form['csk'] ) : null;
          $sKey = explode('_', array_keys($form)[1])[0];

          if(self::$registry->getService('store')->updateAddressByContactId( $form, $cId, $sKey )) {
            self::$registry->getService('irequest')->movePage(301,'moje-konto/adresar');
          } else {
            echo "ERROR";
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
        break;
      case self::ACCOUNT_ACTION_ADDRESS_BOOK_REMOVE:
        if(!is_null($contactId)) {
          if(self::$registry->getService('store')->deleteAddressByContactId( $contactId )) {
            self::$registry->getService('irequest')->movePage(301,'moje-konto/adresar');
          } else {
            // dokoncit
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
        break;
      default:
        self::$registry->getService('template')->assign(
          'countryList',
          self::$registry->getService('languages')->getCountryList()
        );
        self::$registry->getService('template')->assign('secureKey',self::$registry->getService('store')->secureKeyByOrder());
        self::$registry->getService('template')->assign('address',self::$registry->getService('store')->orderAddress());
        self::$registry->getService('template')->assign('addressBook',self::$registry->getService('store')->addressBook());
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/account/account_address_book.tpl|footer.tpl');
        break;
    }
  }
  
  /*********************************************************************************************************
  *
  * SHOPPING CART
  *
  *********************************************************************************************************/
  
  public function cart()
  {
    $cart = self::$registry->getService('controller')->getCart();
    $orderBtn = (is_object($cart)) ? ((self::$registry->getService('store')->haveOrder( $cart->id_cart )) ? $this->__orderRouter(self::ORDER_ACTION_DELIVERY_PAYMENT) : $this->actions['create-order'] . DIRECTORY_SEPARATOR . $cart->secure_key) : null;
    
    self::$registry->getService('template')->assign('orderBtn',$orderBtn);
    self::$registry->getService('template')->assign('referer',self::$registry->getService('irequest')->getReferer());
    self::$registry->getService('template')->assign('deliveryDiscount',$this->__deliveryDiscount());
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/cart.tpl|footer.tpl');
  }
  
  public function removeArticleFromCart( $cartSKey = '', $articleRef = '', $parAId = 0, $parBId = 0 )
  {
    $cartId    = ((strlen($cartSKey) > 0) && ((bool) self::$registry->getService('store')->isCartBySecureKey($cartSKey, true) === true)) ? self::$registry->getService('store')->cartIdBySecureKey( $cartSKey ) : 0;
    $articleId = ((strlen($articleRef) > 0) && ((bool) self::$registry->getService('store')->isArticleByReference( $articleRef ) === true)) ? self::$registry->getService('store')->articleIdByReference( $articleRef ) : 0;
    $itemId    = ((($cartId > 0) && ($articleId > 0)) && ((bool) self::$registry->getService('store')->isItemOnCartById($cartId, $articleId, $parAId, $parBId) === true)) ? self::$registry->getService('store')->itemIdOnCartByIds($cartId, $articleId) : 0;
    
    if(((bool) self::$registry->getService('store')->isCartById($cartId, true) === true) &&
      ((bool) self::$registry->getService('store')->isArticleById( $articleId ) === true) &&
      ((bool) self::$registry->getService('store')->isItemOnCartByItemId( $itemId ) === true)
    ) {
      if((bool) self::$registry->getService('store')->deleteItemFromCartById( $itemId ) === true) {
        if(self::$registry->getService('store')->countItemsOnCartById( $cartId ) === 0) {
          if((bool) self::$registry->getService('store')->deleteCartById( $cartId ) === true) {
            self::$registry->getService('irequest')->movePage(301, $this->actions['shopping-cart']);
          } else {
            throw new Exception('SYSTEM ERROR: #9894f48fh.', 500);
          }
        } else {
          self::$registry->getService('irequest')->movePage(301, $this->actions['shopping-cart']);
        }
      } else {
        throw new Exception('SYSTEM ERROR: #RAFC01205.', 500);
      }
    } else {
      self::$registry->getService('irequest')->movePage(
        301,
        self::$registry->getService('irequest')->getReferer(),
        true
      );
    }
  }
  
  private function __deliveryDiscount()
  {
    $amount = self::$registry->getService('store')->totalAmountOnCartById(
      self::$registry->getService('store')->cartIdByUserId(self::$registry->getService('controller')->getUserId()),
      false
    );
    return (object) array(
      'is_discount' => (($amount >= self::$cartDiscountAmount) && (self::$cartDiscountAmount > 0)) ? true : false,
      'diff_price'  => self::$registry->getService('helper')->money_format((($amount >= self::$cartDiscountAmount) ? 0 : (self::$cartDiscountAmount - $amount)))
    );
  }
  
  /*********************************************************************************************************
  *
  * API
  *
  *********************************************************************************************************/
  
  public function api( $routeId = 0, $reference = '' )
  { 
    switch($reference) {
      case self::API_CART:
        $this->__apiCart();
        break;
      case self::API_DELIVERY_PAYMENT_TIES:
        $this->__apiDeliveryPaymentTies();
        break;
      case self::API_FILTER:
        $this->__apiFilter();
        break;
      case self::API_FILTER_AVAILABILITY_CHECK_OPTIONS:
        $this->__apiFilterAvailabilityCheckOptions();
        break;
       case self::API_SEARCH_AUTOCOMPLETE:
        $this->__apiSearchAutocomplete();
        break;
      default:
        $this->__BadRequest();
        break;
    }     
  }
  
  private function __apiCart()
  {
    $form = self::$registry->getService('irequest')->getPost();
      
    if(isset($form['action'])) {
      if((int) $form['action'] === 4) {
        $cart = self::$registry->getService('controller')->getCart();

        if(is_object($cart)) {
          // DISCOUNT
          $dd = $this->__deliveryDiscount();
          // TEMP. DATA
          self::$registry->getService('template')->assign('cart', $cart);
          // TEMP. CART INFO
          $html = self::$registry->getService('template')->fetch('store/ajax/cart_info.tpl');
          // RESPONSE
          self::$registry->getService('json')->push(array(
            'status'      => 200,
            'items'       => $cart->items,
            'subtotal'    => $cart->subtotal,
            'tax'         => $cart->tax, 
            'amount'      => $cart->amount,
            'sign'        => $cart->sign,
            'is_discount' => $dd->is_discount,
            'diff_price'  => $dd->diff_price,
            'html'        => $html
          ));
          self::$registry->getService('json')->renderJSON();
        } else {
          $this->__BadRequest();
        }
      } else {
        // ACTION 1 - 3
        if((isset($form['articleRef']) && (strlen($form['articleRef']) === 32)) &&
          ((bool) self::$registry->getService('store')->isArticleByReference( $form['articleRef'] ) === true)
        ) {
          switch((int) $form['action']) {
            case self::CART_ACTION_MATRIX_PAR_AB_QTY:
              ((bool) $this->__checkMatrix( $form ) === true) ? $this->__matrixParABQty( $form ) : $this->__BadRequest();
              break;
            case self::CART_ACTION_ADD_TO_CART:
              (isset($form['qty']) && ((bool) $this->__checkQty($form['qty']) === true)) ? $this->__addToCart( $form ) : $this->__BadRequest();
              break;
            case self::CART_ACTION_CALCULATION_ITEM_QTY:
              (isset($form['qty']) && ((bool) $this->__checkQty($form['qty']) === true)) ? $this->__calcItemQty( $form ) : $this->__BadRequest();
              break;
            default:
              $this->__BadRequest();
              break;
          }
        } else {
          $this->__BadRequest();
        }
      }
    } else {
      $this->__BadRequest();
    }
  }
  
  private function __checkMatrix( $data = null )
  {
    if((isset($data['whId']) && isset($data['mId']) && isset($data['parA']) && isset($data['parB']) && $data['cmd']) &&  
      (((int) $data['cmd'] === 1) || ((int) $data['cmd'] === 2)) &&
      (is_numeric($data['parA']) && is_numeric((int) $data['parB'])) &&
      ((bool) self::$registry->getService('store')->isWHMatrixById( $data['mId'] ) === true) &&
      ((bool) self::$registry->getService('store')->isWarehouseById( $data['whId'] ) === true)
    ) {
      return true;
    }
    return false;
  }
  
  private function __checkQty( $qty = 0 )
  {
    return (((int) $qty > 0) && ((int) $qty <= self::$cartMaxQty)) ? true : false;
  }
  
  private function __matrixParABQty( $data = null )
  {
    $list = self::$registry->getService('store')->whMatrixCheckParYByParXId(
      $data['whId'],
      $data['mId'],
      $data['articleRef'],
      $data['parA'],
      $data['parB'],
      $data['cmd']
    );
    if(is_array($list) && (count($list) > 0)) {
      self::$registry->getService('json')->push(array(
        'status'  => 200,
        'message' => 'Success',
        'list'    => $list
      ));
      self::$registry->getService('json')->renderJSON();
    } else {
      $this->__Response(401, 'SYSTEM ERROR: Matrix ParX list is empty.');
    }
  }
  
  private function __addToCart( $data = null )
  {
    if(isset($data['articleRef']) && isset($data['qty']) && isset($data['matrix']) && isset($data['parA']) && isset($data['parB'])) 
    {
      $articleId = self::$registry->getService('store')->articleIdByReference( $data['articleRef'] );
      $langId    = self::$registry->getService('languages')->getCurrentLanguage();
      $cart      = self::$registry->getService('controller')->getCart();
      
      if(((bool) self::$registry->getService('store')->isArticleById( $articleId ) === true) &&
        ((bool) self::$registry->getService('store')->haveArticleLDById($articleId, $langId) === true)
      ) {
        $on_stock_availability = (bool) self::$registry->getService('store')->isArticleOnStockAvaibilityById( $articleId );
        $mWH    = self::$registry->getService('store')->isArticleManageWH( $articleId );
        $whId   = ((bool) $mWH === true) ? self::$registry->getService('store')->warehouseIdByArticleId( $articleId ) : 0;
        $cc     = (((bool) $mWH === true) && ((bool) self::$registry->getService('store')->isWarehouseById( $whId ) === true)) ? true : false;
        $xQty   = (is_object($cart)) ? self::$registry->getService('store')->calculateItemQtyById($cart->id_cart, $articleId, $data["parA"], $data["parB"], $data["qty"]) : $data["qty"];
        // ARTICLE IN WAREHOUSE
        if($cc === true) 
        {
          // WAREHOUSE MATRIX ID 
          $mId = self::$registry->getService('store')->whMatrixIdByWHArticleId($whId, $articleId);

          if((bool) self::$registry->getService('store')->isWHMatrixById( $mId ) === true) 
          {
            $parAId = ((bool) self::$registry->getService('store')->isWHMatrixParByAttrVId($mId, $data["parA"]) === true) ? (int) $data["parA"] : 0;
            $parBId = ((bool) self::$registry->getService('store')->isWHMatrixParByAttrVId($mId, $data["parB"]) === true) ? (int) $data["parB"] : 0;
        
            // IS ARTICLE STOCK AVAILABILITY ON
            if($on_stock_availability === true) 
            {
              // WAREHOUSE ARTICLE MATRIX QTY
              $mQty = self::$registry->getService('store')->whMatrixParXYQtyById(
                $mId, 
                $parAId, 
                $parBId
              );
              if((int) $mQty >= $xQty) 
              {
                $this->__insertArticleToCart(
                  $data,
                  $articleId,
                  $langId
                );
              } 
              else 
              {
                $this->__articleAmountNotAvailable();
              }
            } 
            else 
            {
              $this->__insertArticleToCart(
                $data,
                $articleId,
                $langId
              );
            }
          } 
          else 
          {
            // IS ARTICLE STOCK AVAILABILITY ON
            if($on_stock_availability === true) {
              $cQty = self::$registry->getService('store')->warehouseQtyByWAId($whId, $articleId);

              if((int) $cQty >= $xQty) 
              {
                $this->__insertArticleToCart(
                  $data,
                  $articleId,
                  $langId
                );
              } 
              else 
              {
                $this->__articleAmountNotAvailable();
              }
            } 
            else 
            {
              $this->__insertArticleToCart(
                $data,
                $articleId,
                $langId
              );
            }
          }
        }
        // ARTICLE WITHOUT WAREHOUSE
        if($cc === false) 
        {
          // IS ARTICLE STOCK AVAILABILITY ON
          if($on_stock_availability === true) 
          {
            $cQty = self::$registry->getService('store')->articleQtyById( $articleId );
            
            if((int) $cQty >= $xQty) 
            {
              $this->__insertArticleToCart(
                $data,
                $articleId,
                $langId
              );
            } 
            else 
            {
              $this->__articleAmountNotAvailable();
            }
          } 
          else 
          {
            $this->__insertArticleToCart(
              $data,
              $articleId,
              $langId
            );
          }
        }
      }
      else
      {
        $this->__BadRequest();
      }
    } 
    else 
    {
      $this->__BadRequest();
    }
  }
  
  private function __insertArticleToCart( $data = null, $articleId = 0, $langId = 0 )
  {
    if((bool) self::$registry->getService('store')->addToCard(
      $data['articleRef'],
      $data['qty'],
      $data['matrix'],
      $data['parA'],
      $data['parB'],
      self::$currencyId,
      self::$taxId
    ) === true) {
      // OBJ
      $dd  = $this->__deliveryDiscount();
      $obj = (object) array(
        'article' => self::$registry->getService('store')->articleOnSiteById(
          $articleId,
          $langId
        ),
        'cart' => self::$registry->getService('controller')->getCart()
      );
      $obj->count       = (int) $data['qty'];
      $obj->subtotal    = self::$registry->getService('helper')->money_format(($obj->article->retail_tax_price * $obj->count));
      $obj->is_discount = $dd->is_discount;
      $obj->diff_price  = $dd->diff_price;
      // HTML DATA
      self::$registry->getService('template')->assign('data',$obj);
      // HTML
      $html = self::$registry->getService('template')->fetch('store/ajax/add_new_item_result.tpl');
      // RESPONSE
      self::$registry->getService('json')->push(array(
        'status'  => 200,
        'message' => 'Success',
        'html'    => $html
      ));
      self::$registry->getService('json')->renderJSON();
    } 
    else 
    {
      $trn = self::$registry->getService('translator')->translate("matrix_par_x_list_is_empty");
      $msg = (strlen($trn) > 0) ? $trn : 'SYSTEM ERROR: There was a system error when adding products to the cart.';

      $this->__Response(401, $msg);
    }
  }
  
  private function __calcItemQty( $data = null )
  {
    $cart = self::$registry->getService('controller')->getCart();

    if((is_object($cart) && (isset($data["cartRef"]) && (strlen($data["cartRef"]) === 32))) &&
      ((string) $cart->secure_key === (string) $data["cartRef"]) &&
      (isset($data["mpaId"]) && isset($data["mpbId"]))  
    ) {
      $articleId  = self::$registry->getService('store')->articleIdByReference( $data['articleRef'] );
      $cartItemId = ((bool) self::$registry->getService('store')->isArticleById( $articleId ) === true) ? self::$registry->getService('store')->itemIdOnCartByIds($cart->id_cart, $articleId) : 0;
      
      if((bool) self::$registry->getService('store')->isItemOnCartByItemId( $cartItemId ) === true) 
      {
        $on_stock_availability = (bool) self::$registry->getService('store')->isArticleOnStockAvaibilityById( $articleId );
        $mWH  = self::$registry->getService('store')->isArticleManageWH( $articleId );
        $whId = ((bool) $mWH === true) ? self::$registry->getService('store')->warehouseIdByArticleId( $articleId ) : 0;
        $cc   = (((bool) $mWH === true) && ((bool) self::$registry->getService('store')->isWarehouseById( $whId ) === true)) ? true : false;
        
        // ARTICLE IN WAREHOUSE
        if($cc === true) {
          // WAREHOUSE MATRIX ID 
          $mId = self::$registry->getService('store')->whMatrixIdByWHArticleId($whId, $articleId);
          
          if((bool) self::$registry->getService('store')->isWHMatrixById( $mId ) === true) {
            $parAId = ((bool) self::$registry->getService('store')->isWHMatrixParByAttrVId($mId, $data["mpaId"]) === true) ? (int) $data["mpaId"] : 0;
            $parBId = ((bool) self::$registry->getService('store')->isWHMatrixParByAttrVId($mId, $data["mpbId"]) === true) ? (int) $data["mpbId"] : 0;
            
            // CHECK CHOICE MATRIX PAR_X COMBINATION
            if((bool) self::$registry->getService('store')->isItemOnCartById(
              $cart->id_cart,
              $articleId,
              $parAId,
              $parBId
            ) === true) {
              // IS ARTICLE STOCK AVAILABILITY ON
              if($on_stock_availability === true) 
              {
                // WAREHOUSE ARTICLE MATRIX QTY
                $mQty = self::$registry->getService('store')->whMatrixParXYQtyById(
                  $mId, 
                  $parAId, 
                  $parBId
                );
                if((int) $mQty >= (int) $data["qty"]) 
                {
                  // UPDATE ARTICLE QTY IN CART
                  $this->__updateCartItemQty(
                    $cart->id_cart,
                    $articleId, 
                    $cartItemId, 
                    $data["qty"],
                    $cart->sign
                  );
                } 
                else 
                {
                  $this->__articleAmountNotAvailable();
                }
              }
              else 
              {
                // UPDATE ARTICLE QTY IN CART
                $this->__updateCartItemQty(
                  $cart->id_cart,
                  $articleId, 
                  $cartItemId, 
                  $data["qty"],
                  $cart->sign
                );
              }
            } 
            else 
            {
              $this->__BadRequest();
            }
          } 
          else 
          {
            // IS ARTICLE STOCK AVAILABILITY ON
            if($on_stock_availability === true) 
            {
              $cQty = self::$registry->getService('store')->warehouseQtyByWAId($whId, $articleId);
            
              if((int) $cQty >= (int) $data["qty"]) 
              {
                // UPDATE ARTICLE QTY IN CART
                $this->__updateCartItemQty(
                  $cart->id_cart,
                  $articleId, 
                  $cartItemId, 
                  $data["qty"],
                  $cart->sign
                );
              } 
              else 
              {
                $this->__articleAmountNotAvailable();
              }
            } 
            else 
            {
              // UPDATE ARTICLE QTY IN CART
              $this->__updateCartItemQty(
                $cart->id_cart,
                $articleId, 
                $cartItemId, 
                $data["qty"],
                $cart->sign
              );
            }
          }
        }
        // ARTICLE WITHOUT WAREHOUSE
        if($cc === false) 
        {
          // IS ARTICLE STOCK AVAILABILITY ON
          if($on_stock_availability === true) 
          {
            $cQty = self::$registry->getService('store')->articleQtyById( $articleId );
            
            if((int) $cQty >= (int) $data["qty"]) 
            {
              // UPDATE ARTICLE QTY IN CART
              $this->__updateCartItemQty(
                $cart->id_cart,
                $articleId, 
                $cartItemId, 
                $data["qty"],
                $cart->sign
              );
            } 
            else 
            {
              $this->__articleAmountNotAvailable();
            }
          } 
          else 
          {
            // UPDATE ARTICLE QTY IN CART
            $this->__updateCartItemQty(
              $cart->id_cart,
              $articleId, 
              $cartItemId, 
              $data["qty"],
              $cart->sign
            );
          }
        }
        $this->__BadRequest();
      } 
      else 
      {
        $this->__BadRequest();
      }
    } else {
      $this->__BadRequest();
    }
  }
  
  private function __updateCartItemQty( $cartId = 0, $articleId = 0, $cartItemId = 0, $qty = 0, $sign= '' )
  {
    if((bool) self::$registry->getService('store')->updateItemOnCartByItemId(array(
      'qty' => (int) $qty
    ), $cartItemId) === true) {
      $this->__calcItemQtyResponse(
        $cartId, 
        $articleId,
        true,
        $sign
      );
    } 
    else 
    {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => 'When updating qty of article has occurred system error.'
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __calcItemQtyResponse( $cartId = 0, $articleId = 0, $round = true, $sign = '' )
  {
    $data = self::$registry->getService('store')->calcCartItemPriceById(
      $cartId,
      $articleId,
      $round
    );
    if(is_object($data)) 
    {
      self::$registry->getService('json')->push(array(
        'status'             => 200,
        'message'            => 'success',
        'former_price'       => $data->former_price,
        'retail_price'       => $data->retail_price,
        'retail_tax_price'   => $data->retail_tax_price,
        'amount_without_tax' => $data->amount_without_tax,
        'tax'                => $data->tax,
        'amount'             => $data->amount,
        'sign'               => $sign
      ));
      self::$registry->getService('json')->renderJSON();
    } 
    else 
    {
      self::$registry->getService('json')->push(array(
        'status'  => 402,
        'message' => 'When updating qty of article has occurred system error.'
      ));
      self::$registry->getService('json')->renderJSON();
    }
  }
  
  private function __apiDeliveryPaymentTies()
  {
    $form = self::$registry->getService('irequest')->getPost();

    if(is_array($form) && count($form) > 0) 
    {
      $action = (isset($form["action"]) && is_numeric($form["action"])) ? (int) $form["action"] : 0;

      switch($action) 
      {
        case self::DPT_ACTION_LOAD_PAYMENT_TIES:
          $deliveryId = (isset($form["itemId"]) && is_numeric($form["itemId"])) ? (int) $form["itemId"] : 0;

          if(self::$registry->getService('store')->isDeliveryById( $deliveryId )) {
            $data = self::$registry->getService('store')->loadPaymentTiesById( $deliveryId );

            if(!is_null($data)) {
              self::$registry->getService('json')->push(array(
                'status'   => 200,
                'message'  => 'Success',
                'payments' => $data
              ));
              self::$registry->getService('json')->renderJSON();
            } else {
              $this->__Response(500, '38eh37hd3h');
            }
          } else {
            $this->__Response(500, '29dd4ud48');
          }
          break;
        case self::DPT_ACTION_LOAD_DELIVERY_TIES:
          $paymentId = (isset($form["itemId"]) && is_numeric($form["itemId"])) ? (int) $form["itemId"] : 0;

          if(self::$registry->getService('store')->isPaymentById( $paymentId )) {
            $data = self::$registry->getService('store')->loadDeliveryTiesById( $paymentId );

            if(!is_null($data)) {
                  self::$registry->getService('json')->push(array(
                    'status'     => 200,
                    'message'    => 'Success',
                    'deliveries' => $data
                  ));
                  self::$registry->getService('json')->renderJSON();
                } else {
                  $this->__Response(500, '56f4e3s3re4');
                }
          } else {
            $this->__Response(500, '97y76g32dr45');
          }
          break;
        default:
          $this->__BadRequest();
          break;
      }
    } 
    else 
    {
      $this->__BadRequest();
    }
  }
  
  /*********************************************************************************************************
  *
  * ORDER
  *
  *********************************************************************************************************/
  
  public function order()
  {
    $command  = self::$registry->getService('irequest')->getUrlBit(1);
    $action   = (array_key_exists($command, $this->translateUrlKeys)) ? $this->translateUrlKeys[ $command ]: 999;
    $haveCart = self::$registry->getService('store')->isCartByUserId(
      self::$registry->getService('controller')->getUserId()      
    );
    if($haveCart) 
    {
      switch($action) 
      {
        case self::ORDER_ACTION_CREATE_NEW_ORDER:
          $this->__createOrder();
          break;
        case self::ORDER_ACTION_DELIVERY_PAYMENT:
          $this->__deliveryAndPayment();
          break;
        case self::ORDER_ACTION_ADRRESS_BOOK:
          if(self::$registry->getService('store')->isDeliveryAndPaymentSetUp()) 
          {
            $this->__addressBook();
          } 
          else 
          {
            self::$registry->getService('irequest')->movePage(
              301,
              $this->__orderRouter(self::ORDER_ACTION_DELIVERY_PAYMENT)
            );
          }
          break;
        case self::ORDER_ACTION_SUMMARY:
          if(self::$registry->getService('store')->orderStepId() == self::ORDER_ACTION_SUMMARY) 
          {
            $this->__orderSummary();
          } 
          else 
          {
            self::$registry->getService('irequest')->movePage(
              301,
              $this->__orderRouter( self::$registry->getService('store')->orderStepId() )
            );
          }
          break;
        case self::ORDER_ACTION_SAVE:
          $this->__closeOrder();
          break;
        default:
          throw new Exception('Unknown order command.');
      }
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __createOrder()
  {
    $bit0      = self::$registry->getService('irequest')->getUrlBit(2);
    $cartId    = (self::$registry->getService('store')->isCartBySecureKey( $bit0, true )) ? self::$registry->getService('store')->cartIdBySecureKey( $bit0 ) : null;
    $haveOrder = self::$registry->getService('store')->haveOrder( $cartId );
    
    if((!$haveOrder) && (!is_null($cartId))) 
    {
        if(self::$registry->getService('store')->createOrder( $cartId, self::$currencyId, self::$taxId )) {
          self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
        } else {
          // ERROR
          echo 'SYSTEM ERROR STOP: #859c48484c48 order could not be created';
        }
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
    }
  }
  
  private function __deliveryAndPayment()
  {
    $bit1      = self::$registry->getService('irequest')->getUrlBit(2);
    $action    = (array_key_exists($bit1, $this->translateUrlKeys)) ? $this->translateUrlKeys[ $bit1 ]: 999;
    $haveOrder = self::$registry->getService('store')->haveOrder(
      self::$registry->getService('controller')->getCart()->id_cart
    );
    if($haveOrder) 
    {
      switch($action) 
      {
        case self::ORDER_SUBACTION_DELIVERY_PAYMENT_SET:
          $this->__deliveryAndPaymentSet();
          break;
        default:
          $this->__deliveryAndPaymentDefault();
          break;
      }
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __deliveryAndPaymentDefault()
  {
    self::$registry->getService('template')->assign(
      'delivery',
      self::$registry->getService('store')->deliveryDataById(
        self::$registry->getService('store')->deliveryIdByOrder()     
      )
    );
    self::$registry->getService('template')->assign(
      'payment',
      self::$registry->getService('store')->paymentDataById(
        self::$registry->getService('store')->paymentIdByOrder()
      )
    );
    self::$registry->getService('template')->assign('stepId',1);
    self::$registry->getService('template')->assign('secureKey',self::$registry->getService('store')->secureKeyByOrder());
    self::$registry->getService('template')->assign('deliveryMethodList',self::$registry->getService('store')->deliveryMethodList());
    self::$registry->getService('template')->assign('paymentMethodList',self::$registry->getService('store')->paymentMethodList());
    self::$registry->getService('template')->assign('deliveryDiscount',$this->__deliveryDiscount());
    self::$registry->getService('template')->assign('orderLinks',$this->order_links);
    self::$registry->getService('template')->assign('formLink',$this->form_links[1]);
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/order/delivery_payment.tpl|footer.tpl');
  }
  
  private function __deliveryAndPaymentSet()
  {
    if(self::$registry->getService('irequest')->isPost()) 
    {
      $form = self::$registry->getService('irequest')->getPost();
      $haveOrder = self::$registry->getService('store')->haveOrder(
        self::$registry->getService('controller')->getCart()->id_cart
      );
      if($haveOrder && is_array($form) && (count($form) > 0)) 
      {
        $sKey = explode('_', key($form))[0];
        
        if(self::$registry->getService('store')->isOrderBySecureKey( $sKey, true )) 
        {
          if(self::$registry->getService('store')->setDeliveryAndPaymentOnOrder( $form, $sKey )) {
            self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
          } else {
            // ERROR
            echo 'SYSTEM ERROR STOP: #3257sde85';
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
      } else {
        self::$registry->getService('irequest')->movePage(301,(($haveOrder) ? $this->__orderRouter(self::$registry->getService('store')->orderStepId()) : ''));
      }
    }
  }
  
  private function __addressBook()
  {
    $bit1   = self::$registry->getService('irequest')->getUrlBit(2);
    $action = (array_key_exists($bit1,$this->translateUrlKeys)) ? $this->translateUrlKeys[ $bit1 ]: 999;
    $haveOrder = self::$registry->getService('store')->haveOrder(
      self::$registry->getService('controller')->getCart()->id_cart
    );
    if($haveOrder) 
    {
      switch($action) {
        case self::ORDER_SUBACTION_CREATE_NEW_ADDRESS:
          $this->__addressBookCreateContact();
          break;
        case self::ORDER_SUBACTION_PROCESS_ADDRESS:
          $this->__addressBookProcessAddress();
          break;
        case self::ORDER_SUBACTION_EDIT_ADDRESS:
          $this->__addressBookEdit();
          break;
        case self::ORDER_SUBACTION_SAVE_CHANGE_ADDRESS:
          $this->__addressBookUpdate();
          break;
        case self::ORDER_SUBACTION_REMOVE_ADDRESS:
          $this->__addressBookRemove();
          break;
        default:
          $this->__addressBookDefault();
          break;
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __addressBookCreateContact()
  {
    if(self::$registry->getService('irequest')->isPost()) {
      $form = self::$registry->getService('irequest')->getPost();
      $sKey = explode('_', key($form))[0];
      
      if(self::$registry->getService('store')->isOrderBySecureKey( $sKey, true )) {
        if(self::$registry->getService('store')->createNewContantOnAddressBook( $form, $sKey )) {
          self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
        } else {
          // ERROR
          echo 'SYSTEM ERROR STOP: #654ce3ffed3d5';
        }
      } else {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __addressBookProcessAddress()
  {
    if(self::$registry->getService('irequest')->isPost()) {
      $form = self::$registry->getService('irequest')->getPost();
      
      if(is_array($form) && (count($form) > 0)) {
        $sKey = explode('_', key($form))[0];
        
        if(self::$registry->getService('store')->isOrderBySecureKey( $sKey, true )) {
          // ACTION
          $action = 0;
          // ERROR
          $errors = [];
          // PRIMARY
          if(!is_numeric($form[ $sKey.'_primary_first_name' ]) && (strlen($form[ $sKey.'_primary_first_name' ]) < 3)) {
            $errors[] = 'Meno je povinný údaj.';
          }
          if(!is_numeric($form[ $sKey.'_primary_last_name' ]) && (strlen($form[ $sKey.'_primary_last_name' ]) < 3)) {
            $errors[] = 'Priezvisko je povinný údaj.';
          }
          if(!is_numeric($form[ $sKey.'_primary_email' ]) && (strlen($form[ $sKey.'_primary_email' ]) < 9) && !filter_var($form[ $sKey.'_primary_email' ], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email je povinný údaj.';
          }
          if(!is_string($form[ $sKey.'_primary_phone' ]) && (strlen($form[ $sKey.'_primary_phone' ]) < 9)) {
            $errors[] = 'Telefón je povinný údaj.';
          }
          if(!is_string($form[ $sKey.'_primary_country' ]) && ((int) $form[ $sKey.'_primary_country' ] === 0) && self::$registry->getService('store')->isOrderPersonalPickup() === false) {
            $errors[] = 'Krajina je povinný údaj.';
          }
          // INVOICE
          if(isset($form[ $sKey.'_invoice_city' ]) && (strlen($form[ $sKey.'_invoice_city' ]) > 3)) {
            if(empty($errors) && empty($form[ $sKey.'_invoice_first_name' ]) && empty($form[ $sKey.'_invoice_last_name' ])) {
              $form[ $sKey.'_invoice_first_name' ] = $form[ $sKey.'_primary_first_name' ];
              $form[ $sKey.'_invoice_last_name' ]  = $form[ $sKey.'_primary_last_name' ];
              $form[ $sKey.'_invoice_email' ]      = $form[ $sKey.'_primary_email' ];
              $form[ $sKey.'_invoice_phone' ]      = $form[ $sKey.'_primary_phone' ];
              $form[ $sKey.'_invoice_country' ]    = $form[ $sKey.'_primary_country' ];
            }
            if(!is_string($form[ $sKey.'_invoice_first_name' ]) && (strlen($form[ $sKey.'_invoice_first_name' ]) < 3)) {
              $errors[] = 'Meno je povinný údaj.';
            }
            if(!is_string($form[ $sKey.'_invoice_last_name' ]) && (strlen($form[ $sKey.'_invoice_last_name' ]) < 3)) {
              $errors[] = 'Priezvisko je povinný údaj.';
            }
            if(!is_string($form[ $sKey.'_invoice_email' ]) && (strlen($form[ $sKey.'_invoice_email' ]) < 9) && !filter_var($form[ $sKey.'_primary_email' ], FILTER_VALIDATE_EMAIL)) {
              $errors[] = 'Email je povinný údaj.';
            }
            if(!is_numeric($form[ $sKey.'_invoice_phone' ]) && (strlen($form[ $sKey.'_invoice_phone' ]) < 9)) {
              $errors[] = 'Telefón je povinný údaj.';
            }
            if(!is_numeric($form[ $sKey.'_invoice_country' ]) && ((int) $form[ $sKey.'_invoice_country' ] === 0)) {
              $errors[] = 'Krajina je povinný údaj.';
            }
            if(!is_string($form[ $sKey.'_invoice_city' ]) && (strlen($form[ $sKey.'_invoice_city' ]) < 3)) {
              $errors[] = 'Mesto je povinný údaj.';
            }
            if(strlen($form[ $sKey.'_invoice_street' ]) < 3) {
              $errors[] = 'Ulica je povinný údaj.';
            }
            if(!is_numeric($form[ $sKey.'_invoice_zip' ]) && (strlen($form[ $sKey.'_invoice_zip' ]) < 5)) {
              $errors[] = 'PSČ je povinný údaj.';
            }
          }
          // SET ACTION
          $action = (isset($form[$sKey.'_o_address_AB']) || isset($form[$sKey.'_o_address_A']) || isset($form[$sKey.'_o_address_B'])) ? 2 : 1;
          // PROCCESS
          if($action === 1) {
            if(count($errors) > 0) {
              self::$registry->getService('template')->assign(
                'countryList',
                self::$registry->getService('languages')->getCountryList()
              );
              self::$registry->getService('template')->assign('stepId',2);
              self::$registry->getService('template')->assign('errors',$errors);
              self::$registry->getService('template')->assign('checkAddress',self::$registry->getService('store')->checkAddress());
              self::$registry->getService('template')->assign('secureKey',self::$registry->getService('store')->secureKeyByOrder());
              self::$registry->getService('template')->assign('address',self::$registry->getService('store')->orderAddress());
              self::$registry->getService('template')->assign('addressBook',self::$registry->getService('store')->addressBook( true ));
              self::$registry->getService('template')->assign('orderPersonalPickup',self::$registry->getService('store')->isOrderPersonalPickup());
              self::$registry->getService('template')->assign('deliveryDiscount',$this->__deliveryDiscount());
              self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/order/address_book.tpl|footer.tpl');
            } else {
              // ADDRESS
              $deliveryAddress = array(
                $sKey.'_first_name'           => $form[ $sKey.'_primary_first_name' ],
                $sKey.'_last_name'            => $form[ $sKey.'_primary_last_name' ],
                $sKey.'_email'                => $form[ $sKey.'_primary_email' ],
                $sKey.'_phone'                => $form[ $sKey.'_primary_phone' ],
                $sKey.'_country'              => $form[ $sKey.'_primary_country' ],
                $sKey.'_city'                 => $form[ $sKey.'_primary_city' ],
                $sKey.'_street'               => $form[ $sKey.'_primary_street' ],
                $sKey.'_zip'                  => $form[ $sKey.'_primary_zip' ],
                $sKey.'_company_name'         => $form[ $sKey.'_primary_company_name' ],
                $sKey.'_comapany_reg_number'  => $form[ $sKey.'_primary_comapany_reg_number' ],
                $sKey.'_vat'                  => $form[ $sKey.'_primary_vat' ],
                $sKey.'_vat_code'             => $form[ $sKey.'_primary_vat_code' ],
                $sKey.'_primary_address'      => (isset($form[ $sKey.'_is_primary_address' ])) ? true : (((int) $form[ $sKey.'_personal_pickup' ] === 1) ? true : false),
                $sKey.'_invoice_address'      => (isset($form[ $sKey.'_is_invoice_address' ])) ? true : (((int) $form[ $sKey.'_personal_pickup' ] === 1) ? true : false),
                $sKey.'_personal_pickup'      => ((int) $form[ $sKey.'_personal_pickup' ] === 1) ? true : false
              );
              $invoiceAddress = null;

              if(isset($form[ $sKey.'_invoice_city' ]) && (strlen($form[ $sKey.'_invoice_city' ]) > 3)) {
                $invoiceAddress = array(
                  $sKey.'_first_name'          => $form[ $sKey.'_invoice_first_name' ],
                  $sKey.'_last_name'           => $form[ $sKey.'_invoice_last_name' ],
                  $sKey.'_email'               => $form[ $sKey.'_invoice_email' ],
                  $sKey.'_phone'               => $form[ $sKey.'_invoice_phone' ],
                  $sKey.'_country'             => $form[ $sKey.'_invoice_country' ],
                  $sKey.'_city'                => $form[ $sKey.'_invoice_city' ],
                  $sKey.'_street'              => $form[ $sKey.'_invoice_street' ],
                  $sKey.'_zip'                 => $form[ $sKey.'_invoice_zip' ],
                  $sKey.'_company_name'        => $form[ $sKey.'_invoice_company_name' ],
                  $sKey.'_comapany_reg_number' => $form[ $sKey.'_invoice_comapany_reg_number' ],
                  $sKey.'_vat'                 => $form[ $sKey.'_invoice_vat' ],
                  $sKey.'_vat_code'            => $form[ $sKey.'_invoice_vat_code' ],
                  $sKey.'_primary_address'     => false,
                  $sKey.'_invoice_address'     => (isset($form[ $sKey.'_is_invoice_address' ])) ? true : false
                );
              }
              $aContactId = (int) self::$registry->getService('store')->createNewContantOnAddressBook( $deliveryAddress, $sKey, true );
              $bContactId = (!is_null($invoiceAddress)) ? (int) self::$registry->getService('store')->createNewContantOnAddressBook( $invoiceAddress, $sKey, true ) : null;
              $isVerify   = (self::$registry->getService('store')->isAddressByContactId( $aContactId )) ? ((!is_null($bContactId)) ? self::$registry->getService('store')->isAddressByContactId( $bContactId ) : true) : false;
            }
          }
          // EXECUTE
          switch($action) {
            // NEW CUSTOMER
            case 1:
              if($isVerify) {
                // SETTING ADDRESS
                $sAddress = (!is_null($bContactId)) ? array( $sKey.'_o_address_A' => $aContactId, $sKey.'_o_address_B' => $bContactId) : array( $sKey.'_o_address_AB' => $aContactId);
                // EXECUTE
                if(self::$registry->getService('store')->setAddressOnOrder( $sAddress, $sKey )) {
                  self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
                } else {
                  self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
                }
              } else {
                // ERROR
                echo 'SYSTEM ERROR STOP: #689ce3ffed3d5';
              }
              break;
            // SET DELIVERY AND INVOICE ADDRESS
            case 2:
              if(self::$registry->getService('store')->setAddressOnOrder( $form, $sKey )) {
                self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
              } else {
                // ERROR
                echo 'SYSTEM ERROR STOP: #33ee897dw3d339';
              }
              break;
            default:
              self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::$registry->getService('store')->orderStepId()));
              break;
          }
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
      } else {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    }
  }
  
  private function __addressBookEdit()
  {
    $bit = self::$registry->getService('irequest')->getUrlBit(3);
    $contactId = (is_string($bit) && strlen($bit) == 32) ? self::$registry->getService('store')->contactIdBySecureKey( $bit ) : null;
    
    if(!is_null($contactId)) 
    {
      self::$registry->getService('template')->assign(
        'countryList',
        self::$registry->getService('languages')->getCountryList()
      );
      self::$registry->getService('template')->assign('stepId',2);
      self::$registry->getService('template')->assign('data',self::$registry->getService('store')->addressDataByContactId( $contactId, true ));
      self::$registry->getService('template')->assign('secureKey',self::$registry->getService('store')->secureKeyByOrder());
      self::$registry->getService('template')->assign('addressBook',self::$registry->getService('store')->addressBook( true ));
      self::$registry->getService('template')->assign('orderLinks',$this->order_links);
      self::$registry->getService('template')->assign('formLinks',$this->form_links[2]);
      self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/order/address_book.tpl|footer.tpl');
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(
        301,
        $this->__orderRouter(self::$registry->getService('store')->orderStepId())
      );
    }
  }
  
  private function __addressBookUpdate()
  {
    if(self::$registry->getService('irequest')->isPost()) {
      $form = self::$registry->getService('irequest')->getPost();
      $cId  = (isset($form['csk']) && !empty($form['csk']) && strlen($form['csk']) == 32) ? self::$registry->getService('store')->contactIdBySecureKey( $form['csk'] ) : null;
      $sKey = explode('_', array_keys($form)[1])[0];
      
      if(self::$registry->getService('store')->isOrderBySecureKey( $sKey, true )) {
        if(self::$registry->getService('store')->updateAddressByContactId( $form, $cId, $sKey )) {
          self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::ORDER_ACTION_ADRRESS_BOOK));
        } else {
          // dokoncit
        }
      } else {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function __addressBookRemove()
  {
    $bit0 = (string) self::$registry->getService('irequest')->getUrlBit(3);
    $contactId = (is_string($bit0) && strlen($bit0) == 32) ? self::$registry->getService('store')->contactIdBySecureKey( $bit0 ) : null;
    
    if(!is_null($contactId)) {
      if(self::$registry->getService('store')->deleteAddressByContactId( $contactId )) {
        self::$registry->getService('irequest')->movePage(301,$this->__orderRouter(self::ORDER_ACTION_ADRRESS_BOOK));
      } else {
        // dokoncit
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __addressBookDefault()
  {
    if(self::$registry->getService('irequest')->isPost()) 
    {
      self::$registry->getService('irequest')->movePage(
        301,
        $this->__orderRouter(self::$registry->getService('store')->orderStepId())
      );
    }
    self::$registry->getService('template')->assign(
      'countryList',
      self::$registry->getService('languages')->getCountryList()
    );
    self::$registry->getService('template')->assign('stepId',2);
    self::$registry->getService('template')->assign('checkAddress',self::$registry->getService('store')->checkAddress());
    self::$registry->getService('template')->assign('secureKey',self::$registry->getService('store')->secureKeyByOrder());
    self::$registry->getService('template')->assign('address',self::$registry->getService('store')->orderAddress());
    self::$registry->getService('template')->assign('addressBook',self::$registry->getService('store')->addressBook( true ));
    self::$registry->getService('template')->assign('orderPersonalPickup',self::$registry->getService('store')->isOrderPersonalPickup());
    self::$registry->getService('template')->assign('deliveryDiscount',$this->__deliveryDiscount());
    self::$registry->getService('template')->assign('orderLinks',$this->order_links);
    self::$registry->getService('template')->assign('formLinks',$this->form_links[2]);
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/order/address_book.tpl|footer.tpl');
  }
  
  private function __orderSummary()
  {
    $haveOrder = self::$registry->getService('store')->haveOrder(
      self::$registry->getService('controller')->getCart()->id_cart
    );
    if($haveOrder) 
    {
      if(!self::$registry->getService('store')->isAddressSetUp()) 
      {
        self::$registry->getService('irequest')->movePage(
          301,
          $this->__orderRouter(2)
        );
      } 
      else 
      {
        if(((self::$registry->getService('store')->isOrderPersonalPickup() === false) && 
          (self::$registry->getService('store')->checkAddress() === false))
        ) {
          self::$registry->getService('irequest')->movePage(
            301,
            $this->__orderRouter(2)
          );
        } 
        else 
        {
          $cart             = self::$registry->getService('controller')->getCart();
          $deliveryDiscount = $this->__deliveryDiscount();
          $delivery         = self::$registry->getService('store')->deliveryDataById( self::$registry->getService('store')->deliveryIdByOrder() );
          $payment          = self::$registry->getService('store')->paymentDataById( self::$registry->getService('store')->paymentIdByOrder() );
          
          self::$registry->getService('template')->assign('stepId',3);
          self::$registry->getService('template')->assign('payment',$payment);
          self::$registry->getService('template')->assign('delivery',$delivery);
          self::$registry->getService('template')->assign('deliveryDiscount',$deliveryDiscount);
          self::$registry->getService('template')->assign('deliveryCost',(($delivery->cost > 0) ? (($deliveryDiscount->is_discount == false) ? $delivery->cost : 0) : 0));
          self::$registry->getService('template')->assign('secureKey',self::$registry->getService('store')->secureKeyByOrder());
          self::$registry->getService('template')->assign('address',self::$registry->getService('store')->orderAddress());
          self::$registry->getService('template')->assign('total',(($delivery->cost > 0) ? (($deliveryDiscount->is_discount == false) ? self::$registry->getService('helper')->money_format(($cart->amount + $delivery->cost)) : $cart->amount) : $cart->amount));
          self::$registry->getService('template')->assign('orderLinks',$this->order_links);
          self::$registry->getService('template')->assign('formLink',$this->form_links[3]);
          self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/order/summary.tpl|footer.tpl');
        }
      }
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }

  private function __closeOrder()
  {
    if(self::$registry->getService('irequest')->isPost()) 
    {
      $form      = self::$registry->getService('irequest')->getPost();
      $userId    = self::$registry->getService('controller')->getUserId();
      $haveOrder = self::$registry->getService('store')->haveOrder(
        self::$registry->getService('controller')->getCart()->id_cart
      );
      $sKey   = explode('_', key($form))[0];
      $vOrder = self::$registry->getService('store')->isOrderBySecureKey( $sKey, true );
      // EXECUTE
      if(($haveOrder && $vOrder) && 
        (isset($form[ $sKey."_vop" ]) && 
        ((int) $form[ $sKey."_vop" ] === 1))
      ) {
        if(self::$registry->getService('store')->orderCSAL() && 
          self::$registry->getService('store')->calculateCostOrder()
        ) {
          if(!self::$registry->getService('store')->isRegistredUserById( $userId )) 
          {
            self::$registry->getService('store')->setUserTypeById(2, $userId);
          }
          // CLOSE CART - ORDER
          self::$registry->getService('store')->closeCart();
          self::$registry->getService('store')->closeOrder( $form[ $sKey."_notice" ] );
          self::$registry->getService('controller')->setCart(null);
          // SEND EMAIL NOTIFICATION
          $OSRId = self::$registry->getService('store')->dfOrderSettingRule();
          
          if(!is_null($OSRId)) 
          {
            $OSRD    = self::$registry->getService('store')->orderSettingRuleById( $OSRId->id_rule );
            $orderId = self::$registry->getService('store')->orderIdBySecureKey($sKey, false);
            $order   = self::$registry->getService('store')->orderById( $orderId );
            
            if((int) $OSRD->is_auto_sendemail === 1) 
            {
              self::$registry->getService('store')->sendEmailById(
                $OSRD->id_email, 
                $orderId
              );
            }
            self::$registry->getService('store')->updateOrderById(array(
              'id_status' => (int) $OSRD->id_status 
            ), $orderId);
          }
          // HEUREKA
          if(self::USE_HEUREKA) 
          {
            $this->__heurekaSendOrder( $order );
          }
          // BANK PAYMENT
          if((int) $order->payment->id_payment === 3) 
          {
            self::$registry->getService('irequest')->movePage(
              301,
              'bank/vub-pay/'.$order->secure_key
            );
          }
          else if((int) $order->payment->id_payment === 4)
          {
            self::$registry->getService('irequest')->movePage(
              301,
              'bank/raiffeisen/'.$order->secure_key
            );
          }
          else 
          {
            // TEMP. VARS
            self::$registry->getService('template')->assign('order', $order);
            // RENDER
            self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/order/finished.tpl|footer.tpl');
          }
        } 
        else 
        {
          throw new Exception('#CCO25952', 500);
        }
      } 
      else 
      {
        self::$registry->getService('irequest')->movePage(
          301,
          $this->__orderRouter(self::$registry->getService('store')->orderStepId())
        );
      }
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function orderOnlinePay()
  {
    $PRCODE  = (isset($_GET["PRCODE"]) && is_numeric($_GET["PRCODE"])) ? (int) $_GET["PRCODE"] : null;
    $SRCODE  = (isset($_GET["SRCODE"]) && is_numeric($_GET["SRCODE"])) ? (int) $_GET["SRCODE"] : null;
    $ORDERID = (isset($_GET["ORDERNUMBER"]) && is_numeric($_GET["ORDERNUMBER"])) ? (int) $_GET["ORDERNUMBER"] : null;
    $MESSAGE = '';
    $CHECK   = false;
    
    if(!is_null($PRCODE) && !is_null($SRCODE) && !is_null($ORDERID)) {
      if(($PRCODE === 0) && ($SRCODE === 0) && self::$registry->getService('store')->orderPayByWebPay( $ORDERID )) {
        $MESSAGE = 'Vaša objednávka bola úspešne prijatá a uhradená platobnou kartou. O jej spracovaní Vás budeme priebežne informovať e-mailom. V prípade akýchkoľvek nejasností nás neváhajte kontaktovať (+421 903 755 888, belvet@belvet.sk).';
        $CHECK = true;
      } else {
        switch($PRCODE) {
          case 26:
            $MESSAGE = 'Technický problém.';
            break;
          case 28:
            $MESSAGE = 'Platba bola zamietnutá.';
            break;
          case 30:
            $MESSAGE = 'Platba bola zamietnutá v autorizačnom centre.';
            break;
          case 35:
            $MESSAGE = 'Expirovaná session.';
            break;
          case 50:
            $MESSAGE = 'Platba zrušená klientom.';
            break;
          default:
            $MESSAGE = 'Technický problém.';
            break;
        }
      }
      // render
      self::$registry->getService('template')->assign('check',$CHECK);
      self::$registry->getService('template')->assign('message',$MESSAGE);
      self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/order/finished.tpl|footer.tpl');
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }

  private function __orderRouter( $stepId = 0 )
  {
    if((is_array($this->order_links) && (count($this->order_links) > 0)) &&
      (isset($this->order_links[ $stepId ]) && (strlen($this->order_links[ $stepId ]) > 0))          
    ) {
      return $this->order_links[ $stepId ];
    }
    return '';
  }
  
  public function __bankUrl( $orderId = 0, $paid = 0 )
  {
    // CERTIFICATE
    $cert = openssl_pkey_get_private(file_get_contents(__CERT_DIR__ . self::BANK_CERT_NAME), self::BANK_CERT_PASSPHRASE);
    openssl_pkey_export($cert, $privateKey);
    // PARAMS
    $params = array(
      'MERCHANTNUMBER' => self::MERCHANTNUMBER,
      'OPERATION'      => 'CREATE_ORDER',
      'ORDERNUMBER'    => $orderId,
      'AMOUNT'         => ($paid * 100),
      'CURRENCY'       => 978,
      'DEPOSITFLAG'    => 1,
      'MERORDERNUM'    => $orderId,
      'URL'            => self::$registry->getService('irequest')->getLocation().'/spracovanie-platby?DESCRIPTION=Nakup&MD='.base64_encode($orderId),
    );
    $params['DIGEST'] = $this->__encodedDigest($params, $privateKey);
    // BUILD URL
    return self::BANK_URL . http_build_query($params);
  }
  
  private function __encodedDigest( $params = '', $privateKey = '' )
  {
    $digestText = implode('|', $params);

    openssl_sign($digestText, $signature, $privateKey);

    $signature = base64_encode($signature);

    return $signature;
  }
  
  private function __heurekaSendOrder( $order = null )
  {
    if(is_object($order)) {
      require_once __LIB_DIR__ . 'heureka/HeurekaChecked.php';
      
      $heureka = new HeurekaChecked(self::HEUREKA_API_KEY);

      $heureka->setEmail( $order->address->invoice->email );
      
      foreach($order->cart->articleList as $article) {
        $heureka->addProduct( $article->article_name );
        $heureka->addProductItemId( $article->id_article );
      }
      $heureka->addOrderId( $order->id_order );
      
      return $heureka->send();
    }
    return false;
  }
  
  /*********************************************************************************************************
  *
  * TRANSLATE ORDER URLS
  *
  *********************************************************************************************************/
  
  private function __initTUrls()
  {
    $langId = self::$registry->getService('languages')->getCurrentLanguage();
    
    if((is_array(self::$order_settings) && (count(self::$order_settings) > 0)) &&
      (array_key_exists($langId, self::$order_settings))
    ) {
      $this->translateUrlKeys = self::$order_settings[ $langId ]->keys;
      $this->actions          = self::$order_settings[ $langId ]->actions;
      $this->order_links      = self::$order_settings[ $langId ]->order_links;
      $this->form_links       = self::$order_settings[ $langId ]->form_links;
    }
    else
    {
      $this->translateUrlKeys = array(
        // COMMANDS
        'create'    => 0,
        'select'    => 1,
        'process'   => 1,
        'edit'      => 2,
        'save'      => 3,
        'close'     => 4,
        'remove'    => 4,
        // ORDER STEPS
        'receipt-and-payment' => 1,
        'directory'           => 2,
        'summarization-orders-and-last-check' => 3,
        // CUSTOMER ACCOUNT
        'history-orders'   => 2,
        'detail-orders'    => 5,
        'duplicate-orders' => 6,
        'invoice'          => 7
      );
      $this->actions = array(
        'create-order'  => 'order/create',
        'shopping-cart' => 'cart'
      );
    }
  }
  
  /*********************************************************************************************************
  *
  * API RESPONSE
  *
  *********************************************************************************************************/
  
  private function __articleAmountNotAvailable()
  {
    $trn = self::$registry->getService('translator')->translate("amount_is_not_available");
    $msg = (strlen($trn) > 0) ? $trn : 'Amount is not available.';

    $this->__Response(402, $msg);
  }
  
  private function __Response( $code = 400, $message = '' ) 
  {
    self::$registry->getService('json')->push(array(
      'status'  => (int) $code,
      'message' => $message
    ));
    self::$registry->getService('json')->renderJSON();
  }
  
  private function __BadRequest() 
  {
    self::$registry->getService('json')->push(array(
      'status'  => 400,
      'message' => "Bad Request"
    ));
    self::$registry->getService('json')->renderJSON();
  }
  
}