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

interface StoreStorageCoreInt {
  
  /*********************************************************************************************************
  *
  * INDEXING SEARCH WORDS
  *
  *********************************************************************************************************/
  
  public function insertSearchKeyword( $keywords = '' );
  
  public function insertUserSRecordBySKWId( $data = null );
  
  public function insertArticleSKWRecord( $data = null );
  
  public function insertWord( $data = null );
  
  public function updateSKWScoreById( $score = 0, $sKWId = 0 );
  
  public function updateWordScoreByWId( $score = 0, $wordId = 0 );
  
  public function updateUserSRecordBySKWId( $score = 0, $sKWId = 0, $userId = 0 );
  
  public function updateArticleRelevanceScoreBySKWId( $score = 0, $sKWId = 0, $articleId = 0 );
  
  public function SKWScoreById( $sKWId = 0 );
  
  public function keywordIdBySKW( $keywords = '' );
  
  public function userSRecordBySKWId( $sKWId = 0, $userId = 0 );
  
  public function articleSKWRecordBySKWId( $sKWId = 0, $articleId = 0 );
  
  public function wordByW( $word = '' );
  
  public function isSearchKeywords( $keywords = '' );
  
  public function isSearchKeywordsById( $sKWId = 0 );
  
  public function isUserSRecordBySKWId( $sKWId = 0, $userId = 0 );
  
  public function isArticleSKWRecordBySKWId( $sKWId = 0, $articleId = 0 );
  
  public function isWordByW( $word = '' );
  
  /*********************************************************************************************************
  *
  * INVOICE
  *
  *********************************************************************************************************/
  
  public function insertInvoice( $data = null );
  
  public function createInvoiceRootFolder( $name = 'Invoices' );
  
  public function updateInvoiceById( $changes = null, $invoiceId = 0 );
  
  public function invoiceByOrderId( $orderId = 0 );
  
  public function invoiceRootFolderId();
  
  public function invoiceIdByOrderId( $orderId = 0 );
  
  public function lastInvoiceONumber( $addZero = false );
  
  public function isInvoiceRootFolder();
  
  public function isInvoiceByOrderId( $orderId = 0 );
  
  public function isInvoiceIdById( $invoiceId = 0 );
  
  public function isUniqueINVCC( $invcc = '' );
  
  /*********************************************************************************************************
  *
  * CHOICE FILTER
  *
  *********************************************************************************************************/
  
  public function checkFilterOptionsAvaibility( $matrix = null,  $data = null, $categoryId = 0 );
  
  public function loadArticlesListByCollection( $data = null, $categoryId = 0  );
  
  public function articleListOnSiteByFilterCollection( $collection = null, $pagination = false, $langId = 0 );
  
  /*********************************************************************************************************
  *
  * DELIVERY
  *
  *********************************************************************************************************/
  
  public function insertDelivery( $data = null );
  
  public function insertDeliveryPaymentTies( $data = null );
  
  public function updateDeliveryById( $changes = null, $deliveryId = 0 );
  
  public function deliveryList();
  
  public function deliveryFormDataById( $deliveryId = 0 );
  
  public function deliveryPaymentTiesListById( $deliveryId = 0 );
    
  public function loadPaymentTiesById( $deliveryId = 0 );
  
  public function loadDeliveryTiesById( $paymentId = 0 );
  
  public function lastPositionOnDelivery();
  
  public function isDeliveryById( $deliveryId = 0 );
  
  public function deleteDeliveryById( $deliveryId = 0 );
  
  public function deleteDeliveryPaymentTiesById( $deliveryId = 0 );
  
  /*********************************************************************************************************
  *
  * PAYMENT
  *
  *********************************************************************************************************/
  
  public function insertPayment( $data = null );
  
  public function updatePaymentById( $changes = null, $paymentId = 0 );
  
  public function paymentList();
  
  public function paymentFormDataById( $paymentId = 0 );
  
  public function lastPositionOnPayment();
  
  public function isPaymentById( $paymentId = 0 );
  
  public function deletePaymentById( $paymentId = 0 );
  
  /*********************************************************************************************************
  *
  * ORDER
  *
  *********************************************************************************************************/
  
  public function insertOrder( $data = null );
  
  public function insertOrderCost( $data = null );
  
  public function insertOrderSettingRule( $data = null );
  
  public function updateOrderById( $changes = null, $orderId = 0 );
  
  public function updateOrderCostById( $changes = null, $orderId = 0 );
  
  public function updateOrderSettingRule( $changes = null, $osrId = 0 );

  public function setAddressById( $changes = null , $orderId = 0 );
  
  public function setStepIdByOrderId( $stepId = 0, $orderId = 0 );
  
  public function setDeliveryMethodById( $changes = null , $orderId = 0 );
  
  public function setPaymentMethodById( $changes = null , $orderId = 0 );
  
  public function setDefaultAddressByOrderId( $orderId = 0 );
  
  public function archivOrderByCartId( $cartId = 0 );
  
  public function orderStepId();
  
  public function haveOrder( $cartId = 0 );

  public function closeOrder();
  
  public function countOrders( $keys = null );
  
  public function orderWidgetData();
  
  public function orderList( $keys = null, $pagination = false );
  
  public function lastPositionOSettingRule();
  
  public function orderSettingList();
  
  public function dfOrderSettingRule();
  
  public function OSRByStatusId( $statusId = 0 );
  
  public function orderListByUserId( $userId = 0 );
  
  public function orderById( $orderId = 0 );
  
  public function orderSettingRuleById( $oSId = 0 );
  
  public function orderSummary();
  
  public function orderAddress();
  
  public function checkAddress();
  
  public function deliveryMethodList();
  
  public function paymentMethodList();
  
  public function deliveryIdByOrder();
  
  public function paymentIdByOrder();
  
  public function deliveryDataById( $deliveryId = 0 );
  
  public function paymentDataById( $paymentId = 0 );
  
  public function orderIdBySecureKey( $secureKey = '', $force = false );
  
  public function orderIdByCartId( $cartId = 0 );
  
  public function secureKeyByOrder();
  
  public function primaryAddressIdByOrderId( $orderId = 0 );
  
  public function invoiceAddressIdByOrderId( $orderId = 0 );
  
  public function isOrderById( $oderId = 0, $locked = 0 );
  
  public function isDeliveryMethod( $deliveryId = 0 );
  
  public function isPaymentMethod( $paymentId = 0 );
  
  public function isAddressByContactId( $contactId = 0 );
  
  public function isAddressSetUp();
  
  public function isDeliveryAndPaymentSetUp();
  
  public function isOrderBySecureKey( $secureKey = '', $secure = false );
  
  public function isUniqueOrderReference( $orderRef = '' );
  
  public function isUniqueOrderSecureKey( $secureKey = '' );
  
  public function isNewClientByUserId( $userId = 0 );
  
  public function isMissingPrimaryAddressByOrderId( $orderId = 0 );
  
  public function isMissingInvoiceAddressByOrderId( $orderId = 0 );
  
  public function isOrderSettingRuleById( $oSId = 0 );
  
  public function deleteOrderByCartId( $cartId = 0 );
  
  public function deleteSettingRuleById( $osrId = 0 );
  
  /*********************************************************************************************************
  *
  * CART
  *
  *********************************************************************************************************/
  
  public function createCartByUserId( $userId = 0, $currencyId = 0, $taxId = 0 );
  
  public function insertItemToCartById( $data = null );
  
  public function updateCartById( $changes = null, $cartId = 0 );
  
  public function updateItemOnCartById( $changes = null, $cartId = 0, $articleId = 0, $parAId = 0, $parBId = 0 );

  public function updateItemOnCartByItemId( $changes = null, $itemId = 0 );
          
  public function closeCart();
  
  public function closeCartById( $cartId = 0 );
  
  public function archivCartById( $cartId = 0 );
  
  public function offerIdByCartId( $cartId = 0 );
  
  public function cartList( $keys = null, $pagination = false );
  
  public function countCarts();
 
  public function cartDataById( $cartId = 0, $locked = false, $lockedId = 0, $round = true );
  
  public function calculateItemQtyById( $cartId = 0, $articleId = 0, $parAId = 0, $parBId = 0, $qty = 0 );
  
  public function calcCartItemPriceById( $cartId = 0, $articleId = 0, $round = true );
  
  public function countItemsOnCartById( $cartId = 0 );
  
  public function totalAmountOnCartById( $cartId = 0 );
  
  public function articlesOnCartById( $cartId = 0 );
  
  public function itemAmountById( $itemId = 0 );
  
  public function cartIdByUserId( $userId = 0 );
  
  public function cartIdBySecureKey( $cartKey = '', $useFilter = true );
  
  public function itemIdOnCartByIds( $cartId = 0, $articleId = 0 );
  
  public function haveArticleCartById( $cartId = 0 );
  
  public function isCartById( $cartId = 0, $secure = false );
  
  public function isCartBySecureKey( $cartKey = '', $secure = false );
  
  public function isCartByUserId( $userId = 0 );
  
  public function isItemOnCartById( $cartId = 0, $articleId = 0, $parAId = 0, $parBId = 0 );
  
  public function isItemOnCartByItemId( $itemId = 0 );
  
  public function isClosedCartById( $cartId = 0 );
  
  public function deleteItemFromCartById( $itemId = 0 );
  
  public function deleteCartById( $cartId = 0 );
  
  /*********************************************************************************************************
  *
  * USER
  *
  *********************************************************************************************************/
  
  public function insertUser( $data = null );
  
  public function insertUserAuth( $data = null );
  
  public function insertUserAuthCA( $data = null );
  
  public function insertNewContactOnAddressBook( $data = null );
  
  public function updateContactOnAddressBookById( $changes = null, $contactId = 0 );
  
  public function updateSecureTokenBySecureKey( $sToken = '', $skey = '' );
  
  public function updateSecureTokenByUserId( $sToken = '', $userId = 0 );
  
  public function updateIpAddressByUserId( $ipAddress = '', $userId = 0 );
  
  public function setUserTypeById( $typeId = 0, $userId = 0 );
  
  public function setLoginUserStatus( $statusId = 0, $expire = 0 );
  
  public function userWidgetData();
  
  public function addressBook( $delete = false );
  
  public function addressDataByUserId( $userId = 0 );
  
  public function addressDataByContactId( $contactId = 0, $delete = false );
  
  public function addressListByUserId( $userId = 0 );
  
  public function addressEmailList();
  
  public function secureKeyByUserId( $userId = 0 );
  
  public function userList( $keys = null, $pagination = false );
  
  public function countUsers( $keys = null );
  
  public function getUser( $sToken = null, $sKey = null );
  
  public function userAccountStatisticByUserId( $userId = 0 );
  
  public function userAuthDataById( $userId = 0 );
  
  public function userAuthEmailById( $userId = 0 );
  
  public function userIdByAuthEmail( $email = '' );
  
  public function contactIdBySecureKey( $secureKey = '' );
  
  public function scPdatByUserId( $userId = 0 );
  
  public function cPassByUserId( $userId = 0 );
  
  public function isPrimaryAddress( $contactId = 0 );
  
  public function isInvoiceAddress( $contactId = 0 );
  
  public function isUniqueUserId( $uniqueRef = '' );
  
  public function isUserById( $userId = 0 );
  
  public function isUserByAuthEmail( $email = '' );
  
  public function isUserByToken( $sToken = null, $sKey = null );
  
  public function isUserBySecureKey( $sKey = null );
  
  public function isUniqueAddressSecureKey( $secureKey = '' );
  
  public function isRegistredUserById( $userId = 0 );
  
  public function isUniqueUserAuthEmail( $email = '' );
  
  public function isUserAuthLogin( $userId = 0 );
  
  public function isLockUserById( $userId = 0 );

  public function resetPrimaryAddress();

  public function resetInvoiceAddress();
  
  public function deleteAddressByContactId( $contactId = 0 );
  
  public function deleteUserById( $userId = 0 );
  
  public function deleteAddressByUserId( $userId = 0 );
  
  /*********************************************************************************************************
  *
  * STATUS
  *
  *********************************************************************************************************/
  
  public function insertStatus( $data = null );
  
  public function insertStatusLang( $data = null );
  
  public function updateStatusById( $changes = null, $statusId = 0 );
  
  public function statusWidgetsData();
  
  public function statusList( $filter = 0, $pagination = false );
  
  public function statusListByArticleId( $articleId = 0 );
  
  public function statusDataById( $statusId = 0 );
  
  public function isStatusById( $statusId = 0 );
  
  public function deleteStatusLangById( $statusId  = 0 );
  
  public function deleteStatusById( $statusId  = 0 );
  
  /*******************************************************************************************************************
  *
  * ARTICLE
  *
  *******************************************************************************************************************/
  
  public function insertArticle( $articleName = '' );
  
  public function insertArticleLang( $data = null );
  
  public function insertArticleStatusById( $data = null );
  
  public function insertArticleCategoryById( $data = null );
  
  public function insertArticleAttributeById( $data = null );
  
  public function insertArticleRelatedArticleById( $data = null );
  
  public function insertArticleToAlternativeArticleListById( $data = null );
  
  public function insertArticleViwerStatistics( $data = null );
  
  public function updateArticleById( $changes = null, $articleId = 0 );
  
  public function updateArticleLangById( $changes = null, $articleId = 0, $langId = 0 );
  
  public function updateArticleImageById( $articleId = 0, $fileId = 0 );
  
  public function updateArticleCategoryById( $changes = null, $articleId = 0, $categoryId = 0 );
  
  public function updateArticleAttributeValueById( $changes = null, $articleId = 0, $attributeId = 0 );
  
  public function updateArticleRouteById( $routeId = 0, $articleId = 0, $langId = 0 );
  
  public function countArticles( $ignoreList = null, $useList = null );
  
  public function articleDataById( $articleId = 0 );
  
  public function articleRouteIdByArticleId( $articleId = 0, $langId = 0 );
  
  public function articleNameById( $articleId = 0 );
  
  public function articleIdByReference( $reference = '' );

  public function selectArticleList();
  
  public function prevArticleById( $articleId = 0 );
  
  public function nextArticleById( $articleId = 0 );
  
  public function articleIdsByThumb();
  
  public function articleIdsByCategory( $ids = null, $exp = false );
  
  public function articleIdsByAttr( $ids = null, $exp = false );
  
  public function articleIdsByAttrV( $ids = null, $exp = false );
  
  public function articleLangListById( $articleId = 0 );
  
  public function articleList( $pagination = false, $ignoreList = null, $useList = null, $sortRuleId = 0 );
  
  public function articleDataForFullTextIndexesById( $articleId = 0 );
  
  public function fullTextSearchOnArticleIdsByKeywords( $keywords = '', $relevance = false, $limit = 0 );
  
  public function fullTextSearchOnArticlesByKeywords( $keywords = '', $relevance = false, $limit = 0 );
	
  public function valueListByArticleId( $articleId = 0, $filter = null );

  public function recentlyViewedArticleListByUserId( $userId = 0, $limit = 0 );

  public function countCategoryAssigningArticle( $categoryId = 0, $useList = null );
  
  public function countAttributeAssigningArticle( $attrId = 0, $useList = null );
  
  public function countAttributeValueAssigningArticleByAttrVIds( $attrId = 0, $attrVIds = null, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 );
  
  public function countAttributeValueAssigningArticle( $attrId = 0, $attrVId = 0, $useList = null );
  
  public function totalAttrVAssigningArticleOnSiteById( $attrId = 0, $attrVId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 );
  
  public function totalOrderALCLByCategoryId( $categoryId = 0 );
  
  public function totalNotOrderALCLByCategoryId( $categoryId = 0 );
  
  public function numberOfLastOrderALCLByCategoryId( $categoryId = 0 );

  public function articleListByCategoryId( $categoryId = 0, $useList = null, $pagination = false );

  public function articleListByAttributeId( $attrId = 0, $useList = null, $pagination = false );
  
  public function articleListByAttributeValueId( $attributeId = 0, $valueId = 0 );
  
  public function articleListOnSiteByCatId( $categoryId = 0, $collection = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false );
  
  public function articleListOnSiteByAttr( $rAttrId = 0, $collection = null, $pagination = false, $langId = 0);
  
  public function articleObjByRouteId( $routeId = 0 );
  
  public function articlePathById( $articleId = 0, $langId = 0 );
  
  public function articleOnSiteById( $articleId = 0, $langId = 0, $kind = self::KIND_ARTICLE, $sectionId = 0 );

  public function amoutArticlesInStock();
  
  public function averageGrossMargin();
  
  public function disabledArticlesInStock();

  public function articleIdByGalleryId( $galleryId = 0 );

  public function articleIdByExtId( $extId = null );
  
  public function articleQtyById( $articleId = 0 );
  
  public function articleLastPosition();
  
  public function haveArticleGalleryById( $galleryId = 0 );
  
  public function haveArticleCategoryById( $articleId = 0, $categoryId = 0 );

  public function haveArticleAttributeById( $articleId = 0, $attrId = 0 );

  public function haveArticleAttributeValueById( $articleId = 0, $attrId = 0, $attrVId = 0 );
  
  public function haveArticeRouteById( $articleId = 0, $langId = 0 );
  
  public function haveArticleLDById( $articleId = 0, $langId = 0 );
  
  public function isArticleById( $articleId = 0 );
  
  public function isArticleByExtId( $extId = null );
  
  public function isArticleByReference( $reference = '' );
  
  public function isArticleBySKU( $sku = '' );
  
  public function isArticleLangById( $articleId = 0, $langId = 0 );
  
  public function isArticlePublishById( $articleId = 0 );
  
  public function isArticleOnStockAvaibilityById( $articleId = 0 );
  
  public function deleteArticleById( $articleId = 0 );
  
  public function deleteArticleLangById( $articleId = 0 );
  
  public function deleteArticleStatusById( $articleId = 0 );
  
  public function deleteArticleCategoryById( $articleId = 0 );

  public function deleteArticleFromCategoryById( $articleId = 0, $categoryId = 0 );
  
  public function deleteArticleAttributeById( $articleId = 0 );

  public function deleteArticleFromAttributeById( $articleId = 0, $attrId = 0 );

  public function deleteArticleFromAttributeValueById( $articleId = 0, $attrId = 0, $attrVId = 0 );
  
  public function deleteArticleRelatedArticleById( $articleId = 0 );
  
  public function deleteAlternativeArticleListById( $articleId = 0 );
  
  public function deleteArticleImageById( $articleId = 0 );
  
  public function deleteGalleryById( $galleryId = 0 );
  
  /*******************************************************************************************************************
  *
  * CATEGORY
  *
  *******************************************************************************************************************/
  
  public function insertCategory( $data = null );
  
  public function insertCategoryLang( $data = null );
  
  public function insertCategorySortItem( $data = null );
  
  public function insertCategorySortLang( $data = null );
  
  public function updateCategoryImageById( $changes = null, $categoryId = 0, $languageId = 0 );
  
  public function updateCategoryById( $changes = null, $catId = 0 );
  
  public function updateCategoryLink( $changes = null, $itemId = 0 );
  
  public function updateCategoryLangById( $changes = null , $categoryId = 0, $langId = 0 );
  
  public function updateCategoryRouteById( $routeId = 0, $categoryId = 0, $langId = 0 );
  
  public function categoryById( $catId = 0 );
  
  public function categoryObjByRouteId( $routeId = 0 );
  
  public function categoryNameById( $categoryId = 0, $languageId = 0 );
  
  public function categoryParentIdById( $categoryId = 0 );
  
  public function categoryParentDataById( $catId = 0 );
  
  public function categoryIdByHash( $categoryId = '' );
  
  public function categoryList( $pagination = null );
  
  public function categoriesRootList();
  
  public function categoriesSortRootItemsList();
  
  public function categoriesChildrenListByCatId( $catId = 0 );
  
  public function categoriesSortChildrenListByCatId( $itemId = 0 );
  
  public function categorySortDataById( $categoryId = 0 );
  
  public function categoryItemParentIdByItemId( $itemId = 0 );
  
  public function orderingCatagoryLinksList( $itemId = 0 );
  
  public function categoriesLinksIdsByItemId( $itemId = 0 );
  
  public function countCategories();
  
  public function countDisabledCategories();
  
  public function countEmptyCategories();
  
  public function countArticlesOnCAList();
  
  public function countArticlesByCatId( $catId = 0 );
  
  public function categoryHeadingById( $categoryId = 0 );
  
  public function categoryLastPosition( $catId = 0 );
  
  public function isCategoryById( $catId = 0 );
  
  public function isCategoryLangById( $catId = 0, $langId = 0 );
  
  public function haveCategoriesChildrens( $catId = 0 );
  
  public function haveCategoriesSortChildrens( $itemId = 0 );
  
  public function deleteCategoryById( $catId = 0 );
  
  public function deleteCategoryLangById( $catId = 0 );
  
  public function deleteCategorySortLangById( $itemId = 0 );
  
  public function deleteCategoryImageById( $categoryId = 0, $languageId = 0 );
  
  public function deleteCategoryLinkById( $itemId = 0 );
  
  public function deleteCategoryFromArticleById( $categoryId = 0 );
  
  /** FRONT METHOD **/
  
  public function getCategoryListOnSiteFromBaseById( $categoryId = 0, $languageId = 0 );
  
  public function categoryOnSiteById( $catId = 0, $collection = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false );

  public function categoryCarouselById( $categoryId = 0, $langId = 0, $limit = 0 );
  
  /**
  * 
  * EXTERNAL CATEGORY
  *
  **/

  public function insertArticleToExtCategory( $data = null );
  
  public function articleListByExtCatId( $categoryId = 0, $cValueId = 0 );
  
  public function extCategoryListById( $categoryId = 0 );
  
  public function deleteArticleListByExtCatId( $categoryId = 0, $cValueId = 0 );
  
  /*******************************************************************************************************************
  *
  * ATTRIBUTE - ATTR VALUES
  *
  *******************************************************************************************************************/
  
  public function insertAttribute( $data = null );
  
  public function insertAttributeLang( $data = null );
  
  public function insertAttributeSortItem( $data = null );
  
  public function insertAttributeSortLang( $data = null );
  
  public function insertAttributeValue( $data = null );
  
  public function insertAttributeValueLang( $data = null );
  
  public function updateAttributeById( $changes = null, $attrId = 0 );

  public function updateAttributeLang( $changes = null, $attrId = 0, $langId = 0 );

  public function updateAttributeImageById( $changes = null, $attrId = 0, $langId = 0 );
  
  public function updateAttributeValueDataById( $changes = null, $attrId = 0, $valueId = 0 );
  
  public function updateAttributeValueLangById( $changes = null, $attrId = 0, $valueId = 0, $langId = 0 );

  public function updateAttributeValueRouteById( $routeId = 0, $attrVId = 0, $langId = 0 );
  
  public function updateAttributeExternaLinkById( $changes = null, $attrId = 0, $languageId = 0 );
  
  public function updateAttributeLink( $changes = null, $itemId = 0 );

  public function countAttributes();

  public function countDisabledAttributes();

  public function countEmptyAttributes();

  public function countArticlesOnAAList();
  
  public function attributeParentIdById( $attributeId = 0 );
  
  public function attributeParentDataById( $attrId = 0, $langId = 0 );

  public function attributeChildById( $attrId = 0 );
  
  public function attributeList( $pagination = null );
  
  public function attributeValueList();

  public function countAttributeValuesByAttrId( $attrId = 0 );
  
  public function attributeValueListByAttrId( $attrId = 0 );
  
  public function attributeRootList();
  
  public function attributesChildrenListByAttrId( $attrId = 0 );
  
  public function attributeById( $attrId = 0 );
  
  public function attributeValueDataById( $attrId = 0, $valueId = 0 );
  
  public function attributeValueColorById( $attrId = 0, $valueId = 0 );
  
  public function attributeNameById( $attrId = 0, $languageId = 0 );
  
  public function attributeHeadingById( $attrId = 0 );
  
  public function attributeLastPosition( $attrId = 0 );
  
  public function getAttributeLinkLastItemPosition( $attrId = 0 );
  
  public function attributeSortRootItemsList();
  
  public function attributesSortChildrenListById( $itemId = 0 );
  
  public function attributeLinksIdsByItemId( $itemId = 0 );
  
  public function attributeSortDataById( $attrId = 0 );
  
  public function attributeItemParentIdByItemId( $itemId = 0 );
  
  public function attributeIdByAVId( $valueId = 0 );

  public function attributeObjByRouteId( $routeId = 0 );

  public function attributeValueObjectByRouteId( $routeId = 0 );

  public function attributeValueIdByKeyword( $keyword = '' );
  
  public function orderingAttributeLinksList( $itemId = 0 );

  public function attributeValueIdsByAttrIds( $attrIds = null );
  
  public function attrVDataOnSiteById( $attrId = 0, $attrVId = 0, $langId = 0 );

  public function attributeValueArticleListOnSiteByIds( $attrId = 0, $attrVIds = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false );

  public function attributeValueOnSiteById( $attrId = 0, $attrVId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false );
  
  public function manufacturerListOnSite( $langId = 0, $ignoreList = null );

  public function haveAttributeLangById( $attrId = 0, $langId = 0 );

  public function haveAttributeValueLangById( $attrId = 0, $attrVId = 0, $langId = 0 );
  
  public function haveAttributesChildrens( $attrId = 0 );
  
  public function haveAttributesSortChildrens( $itemId = 0 );
  
  public function haveAttributeArticlesById( $attrId = 0 );
  
  public function haveAttrValueArticlesById( $attrVId = 0 );
  
  public function isAttributeRootById( $attrId = 0 );

  public function isAttributeById( $attrId = 0 );
	
  public function isAttributeValueById( $attrId = 0, $valueId = 0 );

  public function isAttributeObjectByRouteId( $routeId = 0 );
  
  public function isAttributeValueByKeyword( $keyword = '' );
  
  public function isAttributeValueInArticleListById( $articleId = 0, $attrId = 0, $valueId = 0 );
  
  public function deleteAttributeById( $attrId = 0 );
  
  public function deleteAttributeLangById( $attrId = 0 );
  
  public function deleteAttributeImageById( $attrId = 0, $langId = 0 );
  
  public function deleteAttributeSortLangById( $itemId = 0 );
  
  public function deleteAttributeLinkById( $itemId = 0 );
  
  public function deleteAttributeFromArticleById( $attrId = 0 );
  
  public function deleteAttributeValueById( $attrId = 0, $valueId = 0 );

  /*********************************************************************************************************
  *
  * ORDERING
  *
  *********************************************************************************************************/
  
  public function insertOrderingRule( $data = null );
  
  public function updateOrderingRule( $changes = null, $oRuleId = 0 );
  
  public function orderingRuleDataById( $oRuleId = 0 );
  
  public function orderingRuleList( $pagination = false );
  
  public function isOrderingRule( $oRuleId = 0 );
  
  public function deleteOrderingRuleById( $oRuleId = 0 );
  
  /*********************************************************************************************************
  *
  * THUMBNAIL
  *
  *********************************************************************************************************/
  
  public function insertResizeRule( $data = null );
  
  public function insertThumbnailSection( $data = null );
 
  public function insertThumbnailSectionEntityId( $data = null );
  
  public function insertThumbResizeRule( $data = null );
  
  public function insertCronThumbnail( $data = null );
  
  public function insertThumbnail( $data = null );
  
  public function updateThumbSecCronStatusById( $thumbSecId = 0 );
  
  public function updateThumbnailById( $link = '', $thumbSecId = 0 );
  
  public function resizeRuleList();
  
  public function thumbSectionList();
  
  public function resizeRuleById();
  
  public function thumbCronTaskList();
  
  public function thumbListByParams( $thumbSecId = 0, $resizeRuleId = 0 );
  
  public function thumbnailSectionIdByKind( $kindId = 0, $typeId = 0 );
  
  public function thumbSectionIdsByResizeRuleId( $ruleId = 0 );
  
  public function thumbnailLinkByParams( $fileId = 0, $kind = 1, $sectionId = 0 );
  
  public function resizeIdByVisitDevice();
  
  public function isResizeRuleUnique( $device = 0, $viewport = 0, $min = 0, $max = 0, $resize = 0, $width = 0, $height = 0 );
  
  public function isResizeRuleById( $ruleId = 0 );
  
  public function isThumbnailSectionById( $thumbSecId = 0 );
  
  public function isThumbResizeRuleById( $thumbSecId = 0, $ruleId = 0 );
  
  public function isUniqueThumbSection( $kindId = 0, $typeId = 0 );
  
  public function isUniqueThumbnailByIds( $thumbSecId = 0, $id_resize_rule = 0, $id_file = 0 );
  
  public function isUniqueThumbEntity( $thumbSecId = 0, $entityId = 0 );
  
  public function isUniqueCronThumbByParams( $thumbSecId = 0, $resizeRuleId = 0, $width = 0.00, $height = 0.00, $resize_method = '' );
  
  public function haveResizeRules();
  
  public function haveThumbSectionOneResizeRuleById( $thumbSecId = 0 );

  public function haveFileThumbnailById( $fileId = 0 );
  
  public function deleteThumbCronTaskById( $jobId = 0 );
  
  public function deleteResizeRuleById( $ruleId = 0 );
  
  public function deleteThumbSectionById( $thumbSecId = 0 );
  
  /*********************************************************************************************************
  *
  * WAREHOUSE
  *
  *********************************************************************************************************/
  
  public function insertWarehouse( $data = null );
  
  public function insertWarehouseAvailableCountry( $data = null );
  
  public function insertWHExpeditionTime( $data = null );
  
  public function insertWarehouseRelation( $data = null );
  
  public function insertWarehouseALRelationData( $data = null );
  
  public function insertArticleToWarehouse( $data = null );
  
  public function addArticleToWarehouseET( $data = null );
  
  public function insertWHMatrix( $data = null );
  
  public function insertMatrixParABv( $data = null );
  
  public function insertWHMatrixParQty( $data = null );
  
  public function updateWarehouseById( $changes = null, $whId = 0 );
  
  public function updateWarehouseETById( $changes = null, $whEtId = 0 );
  
  public function updateWarehouseArticleById( $changes = null, $whId = 0, $articleId = 0 );
  
  public function updateWHMatrixParById( $changes = null, $mdId = 0, $attrVId = 0 );

  public function updateWHMatrixParQtyById( $qty = 0, $mdId = 0, $parAVId = 0, $parBVId= 0 );
  
  public function warehouseById( $whId = 0 );
  
  public function whETById( $whEtId = 0 );
  
  public function countWarehouses();
  
  public function countArticlesByWarehouseId( $whId = 0, $ignoreList = null, $useList = null );
  
  public function countWHETArticlesByIds( $whEtId = 0, $ignoreList = null, $useList = null );
  
  public function warehouseList( $pagination = false );
  
  public function whExpeditionTimeList( $whId = 0 );
  
  public function warehouseALIdsById( $whId = 0 );
  
  public function whETAALIdsByWHId( $whId = 0 );
  
  public function whETAALIdsBywhEtId( $whEtID = 0 );
  
  public function warehouseALById( $whId = 0, $pagination = false, $ignoreList = null, $useList = null, $sortRuleId = 0, $matrixOff = false );
  
  public function whETALById( $whEtID = 0, $pagination = false, $ignoreList = null, $useList = null, $sortRuleId = 0 );
  
  public function warehouseLastRelationDataById( $whId = 0 );
  
  public function warehouseQtyByWAId( $whId = 0, $articleId = 0 );
  
  public function whMatrixArticleDataById( $whId = 0, $articleId = 0 );
  
  public function prevWHMatrixById( $whId = 0, $articleId = 0 );
  
  public function nextWHMatrixById( $whId = 0, $articleId = 0 );
  
  public function whMatrixById( $matrixId = 0 );
  
  public function whMatrixParXVtByParId( $matrixId = 0, $parXv = 0, $parId = 0 );
  
  public function whMatrixQtyById( $matrixId = 0 );
  
  public function whMatrixParXYQtyById( $whId = 0, $parAVId = 0, $parBVId = 0 );
  
  public function whMatrixAttrIdsById( $matrixId = 0, $parId = 0 );
  
  public function whMatrixAttrList();
  
  public function whMatrixAttrVListByAttrId( $attrId = 0 );
  
  public function whMatrixParABVsById( $mId = 0, $parId = 0, $unprocessed = false, $force = false );
  
  public function whMatrixParABVsQty( $mId = 0 );
  
  public function whMatrixCheckParYByParXId( $whId = 0, $mId = 0, $articleRef = '', $parAId = 0, $parBId = 0, $cmd = 0 );
  
  public function whMatrixParlastPositionNumById( $mId = 0, $parId = 0 );
  
  public function whMatrixParIdById( $mId = 0, $parXVId = 0 );
  
  public function warehouseIdBySecureKey( $secureKey = '' );
  
  public function warehouseIdByWHMId( $matrixId = 0 );
  
  public function warehouseSecureKeyById( $whId = 0 );
  
  public function warehouseIds();
  
  public function whMatrixIdBySecureKey( $secureKey = '' );
  
  public function whMatrixSecureKeyById( $mId = 0 );
  
  public function warehouseSecureKeyByMatrixId( $mId = 0 );
  
  public function whMatrixIdByWHArticleId( $whId = 0, $articleId = 0 );

  public function haveWarehouseArticleById( $whId = 0, $articleId = 0 );
  
  public function haveWarehouseETArticleById( $whEtId = 0, $articleId = 0 );
  
  public function haveArticleWHMatrixById( $whId = 0, $articleId = 0 );
  
  public function haveWHMatrixArticleById( $matrixId = 0, $whId = 0, $articleId = 0 );
  
  public function haveWHMatrixParVsById( $mId = 0, $parId = 0 );
  
  public function haveWHMatrixParAttrById( $matrixId = 0, $parId = 0, $attrId = 0 );
  
  public function haveWHMatrixAGColorById( $mId = 0, $attrId = 0 );
  
  public function haveWHMatrixAGByColor( $color = '' );
  
  public function haveWHMAtrixQtyAC( $matrixId = 0 );
  
  public function isWarehouseById( $whId = 0 );
  
  public function isWarehouseByRef( $ref = '' );
  
  public function isWarehouseBySecureKey( $secureKey = '' );
  
  public function isWarehouseByCountryId( $countryId = 0 );
  
  public function isWHGlobalById( $whId = 0 );
  
  public function isWHArticlePublishById( $whId = 0, $articleId = 0 );
  
  public function isWHExpeditionTime( $whEtId = 0 );
  
  public function isWarehouseRelationById( $whId = 0, $relId = 0 );
  
  public function isWHMatrixByWHAId( $whId = 0, $articleId = 0 );
  
  public function isWHMatrixById( $matrixId = 0 );
  
  public function isWhMatrixBySecureKey( $secureKey = '' );
  
  public function isWHMatrixParByAttrId( $mId = 0, $attrId = 0 );
  
  public function isWHMatrixParByAttrVId( $mId = 0, $attrVId = 0 );
  
  public function isWHMatrixParCombinationByIds( $mId = 0, $parAVId = 0, $parBVId = 0 );
  
  public function isWHMatrixArticleById( $mId = 0, $articleId = 0 );
  
  public function isArticleManageWH( $articleId = 0 );
  
  public function deleteWarehouseById( $whId = 0 );
  
  public function deleteWarehouseArticleById( $whId = 0, $articleId = 0 );
  
  public function deleteWarehouseFALById( $whId = 0 );
  
  public function deleteWarehouseAVCountryListById( $whId = 0 );
  
  public function deleteWarehouseETArticleById( $whETId = 0, $articleId = 0 );
  
  public function deleteWarehouseETArticlesById( $whETId = 0 );
  
  public function deleteWHExpeditionTimeByWHEtId( $whETId = 0 );
  
  public function deleteImpactWarehuseETByWHId( $whId = 0 );
  
  public function deleteWHMatrixParById( $mId = 0, $attrVId = 0, $parId = 0 );
  
  public function deleteWHMatrixDeleteF( $matrixId = 0 );
  
  /*********************************************************************************************************
  *
  * HIGH LOW PRICE BALANCE [ OBV ]
  *
  *********************************************************************************************************/
  
  public function highLowPriceInStock();
  
  public function highLowPriceBalanceByCategoryId( $categoryId = 0, $round = true, $global = false );
  
  public function highLowPriceBalanceByAttrId( $attrId = 0, $round = true, $global = false );
  
  public function highLowPriceBalanceByAttrVId( $attrId = 0, $attrVId = 0, $round = true, $global = false );
  
  public function highLowPriceBalanceByAttrVIds( $attrId = 0, $attrVIds = null, $round = true, $global = false );
  
  public function highLowPriceBalanceByDiscountCircuits( $round = true, $global = false );
  
  public function highLowPriceBalanceByDiscountCircuitById( $dCircuitId = 0, $round = true, $global = false );

  /*********************************************************************************************************
  *
  * CURRENCY
  *
  *********************************************************************************************************/
  
  public function insertCurrency( $data = null );
  
  public function selectAllCurencies();
  
  public function isCurrencyById( $currencyId = 0 );
  
  public function currencyDataById( $currencyId = 0 );
  
  public function updateCurrencyById( $changes = null, $currencyId = 0 );
  
  public function deleteCurrencyById( $currencyId = 0 );
  
  public function currenciesCount();

  /*********************************************************************************************************
  *
  * TAX
  *
  *********************************************************************************************************/
  
  public function insertTax( $data = null );
  
  public function selectAllTaxes();
  
  public function isTaxById( $currencyId = 0 );
  
  public function taxDataById( $currencyId = 0 );
  
  public function updateTaxById( $changes = null, $currencyId = 0 );
  
  public function deleteTaxById( $currencyId = 0 );
  
  public function taxesCount();
  
  /*********************************************************************************************************
  *
  * OFFER
  *
  *********************************************************************************************************/
  
  public function insertOffer( $data = null );
  
  public function insertItemToOffer( $data = null );
  
  public function insertOfferCostById( $data = null );
  
  public function updateOfferById( $changes = null, $offerId = 0 );
  
  public function updateOfferCostById( $changes = null, $offerId = 0 );
  
  public function updateOfferItemById( $changes = null, $itemId = 0 );
  
  public function totalOffers();
  
  public function offerList( $pagination = false );
  
  public function offerCalcCostById( $offerId = 0 );
  
  public function offerById( $offerId = 0 );
  
  public function offerCostById( $offerId = 0 );
  
  public function offerArticleListById( $offerId = 0 );
  
  public function offerIdByHash( $offerHash = '' );
  
  public function offerIdByEH( $emailHash = '' );
  
  public function offerHashById( $offerId = 0 );
  
  public function isUniqueOfferOH( $hash = '' );
  
  public function isUniqueOfferEH( $hash = '' );
  
  public function isOfferById( $offerId = 0 );
  
  public function isOfferByHash( $offerHash = '' );
  
  public function isOfferByEH( $emailHash = '' );
  
  public function isOfferCostById( $offerId = 0 );
  
  public function isItemOnOfferALById( $itemId = 0 );
  
  public function deleteItemFromOfferById( $itemId = 0 );
  
  public function deleteOfferById( $offerId = 0 );

  /*********************************************************************************************************
  *
  * DISCOUNT CIRCUITS
  *
  *********************************************************************************************************/

  public function insertDiscountCircuit( $data = null );

  public function insertDiscountCircuitLang( $data = null );

  public function insertDiscountCircuitSectionValue( $data = null );

  public function insertArticleToDiscountCircuit( $data = null );

  public function insertUserIdOnDiscCircuit( $data = null );

  public function updateDiscountCircuitById( $change = null, $dCircuitId = 0 );

  public function updateDiscountCircuitLangById( $changes = null, $dCircuitId = 0, $langId = 0 );

  public function updateDiscCurcuitOnDiscCircuitByArticleId( $change = null, $articleId = 0 );
  
  public function updateDiscountCircuitRouteById( $routeId = 0, $dCircuitId = 0, $langId = 0 );
  
  public function totalArticlesOnDiscountCircuits( $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 );
  
  public function totalArticlesOnDiscountCircuitOnSiteById( $dCircuitId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 );
  
  public function countArticlesByDiscountCircuitId( $dCircuitId = 0, $useList = null );
  
  public function discountCircuitSectionIdById( $dCircuitId = 0 );

  public function discountCircuitFIdsById( $dCircuitId = 0 );

  public function articleListOnDiscCircuitByFIds( $dCircuitFIds = null, $sectionId = 0 );
  
  public function errorArticlesByDiscountCircuitId( $dCircuitId = 0 );
  
  public function articleListOnDiscountCircuitById( $dCircuitId = 0, $pagination = false );

  public function discountCircuitArticleListById( $dCircuitId = 0 );
  
  public function discountCircuitsBreadcrumb( $langId = 0 );
  
  public function discountCircuitList();

  public function discountCircuitsDataById( $dCircuitId = 0 );

  public function discountCircuitOnSiteById( $dCircuitId = 0, $langId = 0, $pagination = false );

  public function articleListByDiscountCircuits( $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false );

  public function articleDiscountByArticleId( $articleId = 0, $price = 0 );
  
  public function discountCircuitWHIdByDCId( $dCircuitId = 0 );
  
  public function haveDiscountCirciutWHById( $dCircuitId = 0 );

  public function haveDiscountCircuitLangById( $dCircuitId = 0, $langId = 0 );
  
  public function haveArticleDiscountCircuitById( $dCircuitId = 0, $articleId = 0 );

  public function isDiscountCircuitById( $dCircuitId = 0 );

  public function isArticleOnDescCircuitByArticleId( $articleId = 0 );

  public function isUserOnDescCircuitByUserId( $userId = 0 );

  public function deleteDiscCircuitBaseById( $dCircuitId = 0 );

  public function deleteDiscCircuitExtById( $dCircuitId = 0 );

  public function deleteDiscCircuitLangById( $dCircuitId = 0 );
  
  public function deleteArticleFromDiscountCircuitById( $dCircuitId = 0, $articleId = 0 );

  public function deleteDiscCircuitArticleListById( $dCircuitId = 0 );

  public function deleteDiscCircuitClientListById( $dCircuitId = 0 );

  /*********************************************************************************************************
  *
  * EMAIL
  *
  *********************************************************************************************************/

  public function insertEmail( $data = null );
  
  public function insertEmailBcc( $data = null );
  
  public function insertEmailData( $data = null );
  
  public function updateEmailById( $changes = null, $emailId = 0 );
  
  public function updateEmailDataById( $changes = null, $emailId = 0, $langId = 0 );
  
  public function emailList();

  public function emailById( $emailId = 0 );
  
  public function emailBccById( $emailId = 0 );
  
  public function emailDataById( $emailId = 0 );
  
  public function isEmailById( $emailId = 0 );
  
  public function isEmailDataByLangId( $emailId = 0, $langId = 0 );
  
  public function deleteEmailById( $emailId = 0 );
  
  public function deleteEmailBccById( $emailId = 0 );

  /*********************************************************************************************************
  *
  * PRODUCTS STATISTICS
  *
  *********************************************************************************************************/

  public function viewedProductList();

  /*********************************************************************************************************
  *
  * EXPORTS
  *
  *********************************************************************************************************/
  
  public function exports( $key = null );
  
}