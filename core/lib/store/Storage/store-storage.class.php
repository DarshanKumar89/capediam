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

class StoreStorageCore implements StoreStorageCoreInt {
  
  CONST KIND_ARTICLE = 1;
    
  CONST KIND_CATEGORY = 2;
  
  CONST KIND_ATTRIBUTE = 3;
  
  CONST KIND_ATTR_VALUE = 4;
  
  CONST KIND_DISCOUNT = 5;
  
  /** @var Registry */
  protected static $registry;
  
  /** @var array **/
  private static $resizes = [];
 
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  /*********************************************************************************************************
  *
  * INDEXING SEARCH WORDS
  *
  *********************************************************************************************************/
  
  public function insertSearchKeyword( $keywords = '' )
  {
    self::$registry->getService('storage')->insert( 'app_store_index_search_keywords', array(':keyword' => (string) $keywords) );

    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertUserSRecordBySKWId( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_index_search_keywords_user_list', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleSKWRecord( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_index_search_keywords_article_list', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function insertWord( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_index_search_keywords_word_list', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateSKWScoreById( $score = 0, $sKWId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_index_search_keywords', array('score' => $score), ' id_keyword = '. (int) $sKWId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateWordScoreByWId( $score = 0, $wordId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_index_search_keywords_word_list', array('score' => $score), ' id_word = '. (int) $wordId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateUserSRecordBySKWId( $score = 0, $sKWId = 0, $userId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_index_search_keywords_user_list', array('score' => $score), ' id_keyword = '. (int) $sKWId . ' AND id_user = '. (int) $userId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleRelevanceScoreBySKWId( $score = 0, $sKWId = 0, $articleId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_index_search_keywords_article_list', array('relevance_score' => $score), ' id_keyword = '. (int) $sKWId . ' AND id_article = '. (int) $articleId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function SKWScoreById( $sKWId = 0 )
  {
    $qry = "SELECT
              score
            FROM
              app_store_index_search_keywords";
    $keys = array(
      ':id_keyword' => (int) $sKWId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function keywordIdBySKW( $keywords = '' )
  {
    $qry = "SELECT
              *
            FROM
              app_store_index_search_keywords";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        if((string) strtolower($value->keyword) === (string) strtolower($keywords)) {
          return $data[ $key ]->id_keyword;
        }
      }
    }
    return null;
  }
  
  public function userSRecordBySKWId( $sKWId = 0, $userId = 0 )
  {
    $qry = "SELECT
              score
            FROM
              app_store_index_search_keywords_user_list";
    $keys = array(
      ':id_keyword' => (int) $sKWId,
      ':id_user'    => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function articleSKWRecordBySKWId( $sKWId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              relevance_score
            FROM
              app_store_index_search_keywords_article_list";
    $keys = array(
      ':id_keyword' => (int) $sKWId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function wordByW( $word = '' )
  {
    $qry = "SELECT
              *
            FROM
              app_store_index_search_keywords_word_list";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        if((string) strtolower($value->word) === (string) strtolower($word)) {
          return $data[ $key ];
        }
      }
    }
    return null;
  }
  
  public function isSearchKeywords( $keywords = '' )
  {
    $qry = "SELECT
              id_keyword
            FROM
              app_store_index_search_keywords";
    $keys = array(
      ':keyword' => (string) $keywords
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isSearchKeywordsById( $sKWId = 0 )
  {
    $qry = "SELECT
              id_keyword
            FROM
              app_store_index_search_keywords";
    $keys = array(
      ':id_keyword' => (int) $sKWId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUserSRecordBySKWId(  $sKWId = 0, $userId = 0 )
  {
    $qry = "SELECT
              id_keyword
            FROM
              app_store_index_search_keywords_user_list";
    $keys = array(
      ':id_keyword' => (int) $sKWId,
      ':id_user'    => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticleSKWRecordBySKWId( $sKWId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_keyword
            FROM
              app_store_index_search_keywords_article_list";
    $keys = array(
      ':id_keyword' => (int) $sKWId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWordByW( $word = '' )
  {
    $qry = "SELECT
              word
            FROM
              app_store_index_search_keywords_word_list";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $value) {
        if((string) strtolower($value->word) === (string) strtolower($word)) {
          return true;
        }
      }
    }
    return false;
  }
  
  /*********************************************************************************************************
  *
  * INVOICE
  *
  *********************************************************************************************************/
  
  public function insertInvoice( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_invoice', $data );

    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function createInvoiceRootFolder( $name = 'Invoices' )
  {
    self::$registry->getService('storage')->insert( 
      'app_drive_folders',
      array(
        ':folder_hash'      => self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString(10).$name.self::$registry->getService('hash')->generateRandomString(10)),
        ':folder_name'      => $name,
        ':folder_owner'     => self::$registry->getService('cms')->getUser()->id_user,
        ':folder_url'       => '',
        ':folder_color'     => '#FFFFFF',
        ':folder_parent_id' => 1,
        ':is_root'          => 0
      )
    );
    $folderId = self::$registry->getService('storage')->lastInsertId();
    
    if(self::$registry->getService('drive')->isFolderById( $folderId )) {
      self::$registry->getService('storage')->truncate( 'app_store_invoice_root_folder' );
      self::$registry->getService('storage')->insert( 'app_store_invoice_root_folder', array(':id_folder' => $folderId) );

      return $folderId;
    }
    return null;
  }
  
  public function updateInvoiceById( $changes = null, $invoiceId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_invoice', $changes, ' id_invoice = '. (int) $invoiceId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function invoiceByOrderId( $orderId = 0 )
  {
    $qry = "SELECT
              id_invoice, id_order, id_file, o_code,
              date0, date1, date2
            FROM
              app_store_invoice";
    $keys = array(
      ':id_order' => (int) $orderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function invoiceRootFolderId()
  {
    $qry = "SELECT
              id_folder
            FROM
              app_store_invoice_root_folder";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_folder : null;
  }
  
  public function invoiceIdByOrderId( $orderId = 0 )
  {
    $qry = "SELECT
              id_file
            FROM
              app_store_invoice";
    $keys = array(
      ':id_order' => (int) $orderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_file : 0;
  }
  
  public function lastInvoiceONumber( $addZero = false )
  {
    $qry = "SELECT
              id_invoice
            FROM
              app_store_invoice";
    $filter = "ORDER BY id_invoice DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $number = (int) self::$registry->getService('storage')->getResult()[0]->id_invoice + 1;
      $invcc  = ((int) $number < 10) ? '00'.$number : (((int) $number < 100) ? '0'.$number : $number);
      
      return ($number > 0) ? (($addZero) ? '0' : '').$invcc : null;
    }
    return null;
  }
  
  public function isInvoiceRootFolder()
  {
    $qry = "SELECT
              id_folder
            FROM
              app_store_invoice_root_folder";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isInvoiceByOrderId( $orderId = 0 )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_invoice";
    $keys = array(
      ':id_order' => (int) $orderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false; 
  }
  
  public function isInvoiceIdById( $invoiceId = 0 )
  {
    $qry = "SELECT
              id_invoice
            FROM
              app_store_invoice";
    $keys = array(
      ':id_invoice' => (int) $invoiceId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUniqueINVCC( $invcc = '' )
  {
    $qry = "SELECT
              id_invoice
            FROM
              app_store_invoice";
    $keys = array(
      ':o_code' => (int) $invcc
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }

  /**
  * 
  * FILTER
  * 
  **/
  
  public function isChoiceByDO( $date = null, $oNum = 0 )
  {
    $qry = "SELECT
              id_choice
            FROM
              app_store_filter_choices
            WHERE
              DATE(created) = DATE('".date("Y-m-d", strtotime($date))."')";
    $keys = array(
      ':o_num' => (int) $oNum
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function choiceIdByDO( $date = null, $oNum = 0 )
  {
    $qry = "SELECT
              id_choice
            FROM
              app_store_filter_choices
            WHERE
              DATE(created) = DATE('".date("Y-m-d", strtotime($date))."')";
    $keys = array(
      ':o_num' => (int) $oNum
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys, "LIMIT 1" );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_choice : 0;
  }
  
  public function choiceLinkById( $choiceId = 0 )
  {
    $qry = "SELECT
              o_num, created
            FROM
              app_store_filter_choices";
    $keys = array(
      ':id_choice' => (int) $choiceId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return self::$registry->getService('irequest')->getLocation() .'/vas-vyber/'. date("d-m-Y", strtotime($data->created)) .'/'. $data->o_num;
    }
    return null;
  }
  
  public function choiceOptsById( $choiceId = 0 )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_filter_choices_combination";
    $keys = array(
      ':id_choice' => (int) $choiceId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[]["valId"] = (int) $value->id_value;
      }
      return $data;
    }
    return null;
  }
  
  public function checkFilterOptionsAvaibility( $matrix = null, $data = null, $categoryId = 0 )
  {
    $checkList = [];
    
    foreach($matrix as $section)
    {
      foreach($section as $value) 
      {
        if(!empty($value->values)) 
        {
          foreach($value->values as $item) 
          {
            $checkList[] = (object) array(
              'valueId'   => $item->id_value,
              'available' => $this->__haveArticlesByFilter($data, $categoryId, $item->id_value)
            );
          }
        }
      }
    }
    return (count($checkList) > 0) ? $checkList : null;
  }
  
  public function __haveArticlesByFilter( $data = null, $categoryId = 0, $valueId = 0 )
  {
    $inn = "INNER JOIN
              app_store_article_category b
            ON
              b.id_category = ".(int) $categoryId."
            AND
             a.id_article = b.id_article";
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article_attribute a ";
    if(((int) $categoryId > 0)) {
      $qry .= $inn ." ";
    }
    $qry .= $this->__buildFilterCollection( $data );
    $qry .= " INNER JOIN
                app_store_article_attribute c
              ON
                a.id_article = c.id_article
              AND
                c.id_value = ". (int) $valueId;
    $qry .= " INNER JOIN
                app_store_article d
              ON
                a.id_article = d.id_article
              AND
                d.enabled = 1";
    $filter = "GROUP BY a.id_article LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function loadArticlesListByCollection( $data = null, $categoryId = 0, $price = null, $width = null, $height = null, $depth = null, $merge = false, $choice = false )
  {
    $inn = "INNER JOIN
              app_store_article_category b
            ON
              b.id_category = ".(int) $categoryId."
            AND
             a.id_article = b.id_article";
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article_attribute a ";
    if(((int) $categoryId > 0) && 
      ((bool) $this->isCategoryById( $categoryId ) === true)
    ) {
      $qry .= $inn ." ";
    }
    $qry .= $this->__buildFilterCollection($data, $merge);
    $qry .= " INNER JOIN
                app_store_article c
              ON
                a.id_article = c.id_article";
    // PRICE RANGE
    if(is_object($price) && (isset($price->minPrice) && isset($price->maxPrice))) {
      $qry .= " AND (retail_tax_price BETWEEN ".(float) $price->minPrice." AND ".(float) $price->maxPrice.")";
    }
    // WIDTH RANGE
    if(is_object($width) && (isset($width->minWidth) && isset($width->maxWidth))) {
      $qry .= " AND (width BETWEEN ".(float) $width->minWidth." AND ".(float) $width->maxWidth.")";
    }
    // HEIGHT RANGE
    if(is_object($height) && (isset($height->minHeight) && isset($height->maxHeight))) {
      $qry .= " AND (height BETWEEN ".(float) $height->minHeight." AND ".(float) $height->maxHeight.")";
    }
    // DEPTH RANGE
    if(is_object($depth) && (isset($depth->minDepth) && isset($depth->maxDepth))) {
      $qry .= " AND (depth BETWEEN ".(float) $depth->minDepth." AND ".(float) $depth->maxDepth.")";
    }
    $qry .= "AND c.enabled = 1";
    $filter = "GROUP BY a.id_article";
    
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    $numRow = self::$registry->getService('storage')->rowCount();
    
    if($numRow > 0) {
      $result = self::$registry->getService('storage')->getResult();
      
      if(((bool) $choice === true) && (is_array($data) && (count($data) > 0))) {
        $choiceId = $this->__createChoice(array(
          ':id_user'  => self::$registry->getService('controller')->getUserId(),
          ':is_merge' => ((bool) $merge === true) ? 1 : 0,
          ':o_num'    => $this->__choiceONumber()
        ));
        foreach($data as $value) {
          $this->__insertChoiceCombination(array(
            ':id_choice' => $choiceId,
            ':id_value'  => (int) $value["valId"]
          ));
        }
      }
      return (object) array(
        'count'       => $numRow,
        'choice_link' => (((bool) $choice === true) && ((int) $choiceId !== 0)) ? $this->choiceLinkById( $choiceId ) : null,     
        'collection'  => $result
      );
    }
    return null;
  }
  
  private function __createChoice( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_filter_choices', $data );
    
    return (self::$registry->getService('storage')->executed()) ? self::$registry->getService('storage')->lastInsertId() : 0;
  }
  
  private function __insertChoiceCombination( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_filter_choices_combination', $data );
    
    return (self::$registry->getService('storage')->executed()) ? self::$registry->getService('storage')->lastInsertId() : 0;
  }
  
  private function __choiceONumber()
  {
    $qry = "SELECT
              o_num, DATEDIFF(`created`, CURDATE()) AS diff
            FROM
              app_store_filter_choices
            WHERE
              `created` < date_add(CURDATE(), INTERVAL 1 DAY)";
    $filter = "ORDER BY UNIX_TIMESTAMP(diff) DESC LIMIT 1";
    
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? ((int) self::$registry->getService('storage')->getResult()[0]->o_num + 1) : 1;
  }
  
  private function __buildFilterCollection( $data = null, $merge = false )
  {
    $sqry = '';
    
    if(!is_null($data)) {
      if((bool) $merge === true) {
        $valIds = [];
        $k = 0;
        
        foreach($data as $value) {
          $valIds[ $this->attributeIdByAVId( $value["valId"] ) ][] = (int) $value["valId"];
        }
        foreach($valIds as $key => $value) {
          $sqry .= "INNER JOIN
                    app_store_article_attribute a".$k."
                  ON
                    a.id_article = a".$k.".id_article
                  AND
                    a".$k.".id_attribute = ".(int) $key."
                  AND
                    a".$k.".id_value IN (".implode(",",$value).")";
          $k++;
        }
      } else {
        foreach($data as $key => $value) {
          $sqry .= "INNER JOIN
                      app_store_article_attribute a".$key."
                    ON
                      a.id_article = a".$key.".id_article
                    AND
                      a".$key.".id_value = ".(int) $value["valId"]." ";
        }
      }
    }
    return $sqry;
  }
  
  public function articleListOnSiteByFilterCollection( $collection = null, $pagination = false, $langId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ':enabled' => 1
    );
    if(is_array($collection->collection) && count($collection->collection) > 0) {
      $qry .= " WHERE id_article IN (".implode(",",$this->__parseArtilceIdList($collection->collection)).")";
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = $this->articleOnSiteById($value->id_article, $langId);
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __parseArtilceIdList( $articleIds = null )
  {
    $arr = [];
    
    foreach($articleIds as $value) {
      $arr[] = (int) $value->id_article;
    }
    return $arr;
  }
  
  /**
  * 
  * DELIVERY
  * 
  **/
  
  public function insertDelivery( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_delivery_method', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertDeliveryPaymentTies( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_delivery_payment_ties', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateDeliveryById( $changes = null, $deliveryId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_delivery_method', $changes, ' id_delivery = '. (int) $deliveryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deliveryList()
  {
    $qry = "SELECT
              a.id_delivery, a.delivery_name, a.cost, a.delivery_time, a.delivery_time_unit, 
              a.enabled, b.currency_name, b.sign, c.country_name, c.country_code
            FROM
              app_store_delivery_method a
            LEFT JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency
            LEFT JOIN
              app_languages c
            ON
              a.id_country = c.id_lang";
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function deliveryFormDataById( $deliveryId = 0 )
  {
    $qry = "SELECT
              id_delivery, delivery_name, cost, delivery_time, delivery_time_unit, 
              description, id_currency, id_country, enabled
            FROM
              app_store_delivery_method";
    $keys = array(
      ':id_delivery' => (int) $deliveryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function deliveryPaymentTiesListById( $deliveryId = 0 )
  {
    $qry = "SELECT
              id_payment
            FROM
              app_store_delivery_payment_ties";
    $keys = array(
      ':id_delivery' => (int) $deliveryId
    );
    $filter = "GROUP BY id_payment";
    
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) 
      {
        $data[] = $this->__paymentDetailById( $value->id_payment );
      }
      return $data;
    }
    return null;
  }
  
  private function __paymentDetailById( $paymentId = 0 )
  {
    $qry = "SELECT
              a.id_payment, a.payment_name, a.cost, a.description,
              b.currency_name, b.sign, c.language_code, c.country_name
            FROM
              app_store_payment_method a
            LEFT JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency
            LEFT JOIN
              app_languages c
            ON
              a.id_country = c.id_lang";
    $keys = array(
      ':id_payment' => (int) $paymentId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function loadPaymentTiesById( $deliveryId = 0 )
  {
    $qry = "SELECT
              id_payment
            FROM
              app_store_delivery_payment_ties";
    $keys = array(
      ':id_delivery' => (int) $deliveryId
    );
    $filter = "GROUP BY id_payment";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function loadDeliveryTiesById( $paymentId = 0 )
  {
    $qry = "SELECT
              id_delivery
            FROM
              app_store_delivery_payment_ties";
    $keys = array(
      ':id_payment' => (int) $paymentId
    );
    $filter = "GROUP BY id_delivery";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function lastPositionOnDelivery()
  {
    $qry = "SELECT
              position
            FROM
              app_store_delivery_method";
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? ((int) self::$registry->getService('storage')->getResult()[0]->position + 1) : 1;
  }
  
  public function isDeliveryById( $deliveryId = 0 )
  {
    $qry = "SELECT
              id_delivery
            FROM
              app_store_delivery_method";
    $keys = array(
      ':id_delivery' => (int) $deliveryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteDeliveryById( $deliveryId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_delivery_method', ':id_delivery', (int) $deliveryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteDeliveryPaymentTiesById( $deliveryId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_delivery_payment_ties', ':id_delivery', (int) $deliveryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /**
  * 
  * PAYMENT
  * 
  **/
  
  public function insertPayment( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_payment_method', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updatePaymentById( $changes = null, $paymentId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_payment_method', $changes, ' id_payment = '. (int) $paymentId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function paymentList()
  {
    $qry = "SELECT
              a.id_payment, a.payment_name, a.cost, a.enabled, b.currency_name,
              b.sign, c.country_name, c.country_code
            FROM
              app_store_payment_method a
            LEFT JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency
            LEFT JOIN
              app_languages c
            ON
              a.id_country = c.id_lang";
    $filter = "ORDER BY a.position ASC";
    
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function paymentFormDataById( $paymentId = 0 )
  {
    $qry = "SELECT
              id_payment, payment_name, cost, description,
              id_currency, id_country, enabled
            FROM
              app_store_payment_method";
    $keys = array(
      ':id_payment' => (int) $paymentId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function lastPositionOnPayment()
  {
    $qry = "SELECT
              position
            FROM
              app_store_payment_method";
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? ((int) self::$registry->getService('storage')->getResult()[0]->position + 1) : 1;
  }
  
  public function isPaymentById( $paymentId = 0 )
  {
    $qry = "SELECT
              id_payment
            FROM
              app_store_payment_method";
    $keys = array(
      ':id_payment' => (int) $paymentId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deletePaymentById( $paymentId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_payment_method', ':id_payment', (int) $paymentId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /**
  * 
  * ORDER
  * 
  **/
  
  public function insertOrder( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_orders', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertOrderCost( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_order_cost', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertOrderSettingRule( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_order_setting_rules', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateOrderById( $changes = null, $orderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', $changes, ' id_order = '. (int) $orderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateOrderCostById( $changes = null, $orderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_order_cost', $changes, ' id_order = '. (int) $orderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateOrderSettingRule( $changes = null, $osrId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_order_setting_rules', $changes, ' id_rule = '. (int) $osrId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function setAddressById( $changes = null , $orderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', $changes, ' id_order = '. (int) $orderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function setStepIdByOrderId( $stepId = 0, $orderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', array('id_step' => (int) $stepId), ' id_order = '. (int) $orderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function setDeliveryMethodById( $changes = null, $orderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', $changes, ' id_order = '. (int) $orderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function setPaymentMethodById( $changes = null, $orderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', $changes, ' id_order = '. (int) $orderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function archivOrderByCartId( $cartId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', array('is_locked' => 1, 'id_step' => 0, 'is_archive' => 1), ' id_cart = '. (int) $cartId . ' AND is_locked = 1' );
    
    return self::$registry->getService('storage')->executed();
  }

  public function closeOrder( $notice = "" )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', array('is_locked' => 1, 'id_step' => 0,'notice' => (string) $notice, 'close_date' => date("Y-m-d H:i:s")), ' id_cart = '. (int) self::$registry->getService('controller')->getCart()->id_cart . ' AND id_user = '. self::$registry->getService('controller')->getUserId() );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function setDefaultAddressByOrderId( $orderId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_orders', array('id_address_primary' => 0, 'id_address_invoice' => 0), ' id_order = '. (int) $orderId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function orderStepId()
  {
    $qry = "SELECT
              id_step
            FROM
              app_store_orders";
    $keys = array(
      ':id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':id_user' => self::$registry->getService('controller')->getUserId(),
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_step : false;
  }
  
  public function haveOrder( $cartId = 0 )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ':id_cart'   => (int) $cartId,
      ':id_user'   => self::$registry->getService('controller')->getUserId(),
      ':is_locked' => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function countOrders( $keys = null )
  {
    $qry = "SELECT
              (count(id_order)) as avx
            FROM
              app_store_orders";
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : null;
  }
  
  public function orderWidgetData( $statusId = 0 )
  {
    if((int) $statusId === 0) {
      $qry = $this->__baseOrderWidgetQRY();
      
      self::$registry->getService('storage')->executeQuery( $qry );
    
      return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
    } else {
      // OBJECT
      $data = (object) array(
        'low_amount'        => 0,
        'high_amount'       => 0,
        'total_amount'      => 0,
        'total_orders'      => 0,
        'total_articles'    => 0,
        'total_payed'       => 0,
        'total_outstanding' => 0
      );
      // LOW AMOUNT ORDER
      $qry1 = "SELECT 
                b.total_price
              FROM
                app_store_orders a
              INNER JOIN   
                app_store_order_cost b
              ON
                a.id_order = b.id_order";
      $keys1 = array(
        ':a.id_status' => (int) $statusId
      );
      $filter1 = "ORDER BY b.total_price ASC LIMIT 1";
      
      self::$registry->getService('storage')->executeQuery( $qry1, $keys1, $filter1 );
    
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->low_amount = self::$registry->getService('storage')->getResult()[0]->total_price;
      }
      // HIGH AMOUNT ORDER
      $qry2 = "SELECT 
                b.total_price
              FROM
                app_store_orders a
              INNER JOIN   
                app_store_order_cost b
              ON
                a.id_order = b.id_order";
      $keys2 = array(
        ':a.id_status' => (int) $statusId
      );
      $filter2 = "ORDER BY b.total_price DESC LIMIT 1";
      
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2, $filter2 );
    
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->high_amount = self::$registry->getService('storage')->getResult()[0]->total_price;
      }
      // TOTAL AMOUNT ORDERS
      $qry3 = "SELECT 
                  (sum(b.total_price)) as total_amount
                FROM
                  app_store_orders a
                INNER JOIN   
                  app_store_order_cost b
                ON
                  a.id_order = b.id_order";
      $keys3 = array(
        ':a.id_status' => (int) $statusId
      );
      $filter3 = "ORDER BY b.total_price DESC LIMIT 1";
      
      self::$registry->getService('storage')->executeQuery( $qry3, $keys3, $filter3 );
    
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->total_amount = self::$registry->getService('storage')->getResult()[0]->total_amount;
      }
      // TOTAL COUNT ORDERS
      $qry4 = "SELECT 
                (count(id_order)) as total_orders
              FROM   
                app_store_orders";
      $keys4 = array(
        ':id_status' => (int) $statusId
      );
      self::$registry->getService('storage')->executeQuery( $qry4, $keys4 );
    
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->total_orders = self::$registry->getService('storage')->getResult()[0]->total_orders;
      }
      // TOTAL COUNT ARTICLES
      $qry5 = "SELECT 
                (sum(c.qty)) as total_articles
              FROM
                app_store_orders a
              INNER JOIN
                app_store_cart b
              ON
                a.id_cart = b.id_cart
              INNER JOIN   
                app_store_cart_article c
              ON
                b.id_cart = c.id_cart";
      $keys5 = array(
        ':a.id_status' => (int) $statusId
      );
      self::$registry->getService('storage')->executeQuery( $qry5, $keys5 );
    
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->total_articles = self::$registry->getService('storage')->getResult()[0]->total_articles;
      }
      // TOTAL PAYED ORDERS
      $qry6 = "SELECT 
                (count(id_order)) as total_payed
              FROM   
                app_store_orders";
      $keys6 = array(
        ':is_payed'  => 1,
        ':id_status' => (int) $statusId
      );
      self::$registry->getService('storage')->executeQuery( $qry6, $keys6 );
    
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->total_payed = self::$registry->getService('storage')->getResult()[0]->total_payed;
      }
      // TOTAL OUTSTANDING ORDERS
      $qry7 = "SELECT 
                (count(id_order)) as total_outstanding
              FROM   
                app_store_orders";
      $keys7 = array(
        ':is_payed'  => 0,
        ':id_status' => (int) $statusId
      );
      self::$registry->getService('storage')->executeQuery( $qry7, $keys7 );
    
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->total_outstanding = self::$registry->getService('storage')->getResult()[0]->total_outstanding;
      }
      // RESULT
      return $data;
    }
    return null;
  }
  
  private function __baseOrderWidgetQRY()
  {
    return  "SELECT  (
              SELECT 
                  total_price
              FROM   
                  app_store_order_cost
              ORDER BY
                  total_price ASC
              LIMIT 1
              ) AS low_amount,
              (
              SELECT 
                  total_price
              FROM   
                  app_store_order_cost
              ORDER BY
                  total_price DESC
              LIMIT 1
              ) AS high_amount,
              (
              SELECT 
                  sum(total_price)
              FROM   
                  app_store_order_cost
              ORDER BY
                  total_price DESC
              LIMIT 1
              ) AS total_amount,
              (
              SELECT 
                  count(id_order)
              FROM   
                  app_store_orders
              ) AS total_orders,
              (
              SELECT 
                sum(qty)
              FROM   
                  app_store_cart_article
              ) AS total_articles,
              (
              SELECT 
                  count(id_order)
              FROM   
                  app_store_orders
              WHERE
                  is_payed = 1
              ) AS total_payed,
              (
              SELECT 
                  count(id_order)
              FROM   
                  app_store_orders
              WHERE
                  is_payed = 0
              ) AS total_outstanding";
  }
  
  public function orderList( $keys = null, $pagination = false )
  {
    $qry = "SELECT
              a.id_order, a.id_status, a.id_cart, a.id_user, a.id_currency, a.id_tax, a.is_payed,
              a.is_locked, a.is_recyclable, a.is_archive, a.id_address_primary, a.id_address_invoice,
              a.id_delivery_method, a.id_payment_method, a.reference, a.secure_key, a.created, 
              b.total_items, b.total_price, b.total_discounts, b.total_paid, b.total_wrapping, 
              b.total_shipping, b.total_payment, c.language_code
            FROM
              app_store_orders a
            LEFT JOIN
              app_store_order_cost b
            ON
              a.id_order = b.id_order
            LEFT JOIN
              app_languages c
            ON
              a.id_lang = c.id_lang";
    $filter = "ORDER BY a.created DESC";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->newClient       = $this->isNewClientByUserId( $value->id_user );
        $data[ $key ]->address         = $this->addressDataByUserId( $value->id_user );
        $data[ $key ]->currency        = $this->currencyDataById( $value->id_currency );
        $data[ $key ]->tax             = $this->taxDataById( $value->id_tax );
        $data[ $key ]->delivery        = $this->deliveryDataById( $value->id_delivery_method );
        $data[ $key ]->payment         = $this->paymentDataById( $value->id_payment_method );
        $data[ $key ]->invoice         = ($this->isInvoiceByOrderId( $value->id_order )) ? self::$registry->getService('drive')->fileById( $this->invoiceIdByOrderId( $value->id_order ) ) : null;
        $data[ $key ]->cart_secure_key = $this->cartDataById( $value->id_cart )->secure_key;
        $data[ $key ]->total_price     = self::$registry->getService('helper')->money_format( $value->total_price );
        
        if(!$this->isClosedCartById( $value->id_cart )) {
          $data[ $key ]->cart = $this->cartDataById( $value->id_cart );
        }
      }
      return $data;
    }
    return null;
  }
  
  public function lastPositionOSettingRule()
  {
    $qry = "SELECT
              (position + 1) as apv
            FROM 
              (
                SELECT
                  position
                FROM
                    app_store_order_setting_rules
                GROUP BY
                    position
              ) as result
            ORDER BY
              position DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->apv : 1;
  }
  
  public function orderSettingList()
  {
    $qry = "SELECT
              id_rule, id_status, id_email, is_auto_sendemail, is_auto_notify, timer
            FROM
              app_store_order_setting_rules";
    $filter = "ORDER BY 
                position 
              ASC";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data      = self::$registry->getService('storage')->getResult();
      $statusLID = ($this->__haveSupportLanguageStatus(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageStatus();
      
      foreach($data as $key => $value) 
      {
        $email = ((int) $value->id_email !== 0) ? $this->emailById( $value->id_email ) : null;
        
        $data[ $key ]->status_name = $this->statusDataById( $value->id_status )->lang[ $statusLID ]->status_name;
        $data[ $key ]->email_name  = (is_object($email) && isset($email->email_name)) ? $email->email_name : null;
      }
      return $data;
    }
    return null;
  }
  
  public function dfOrderSettingRule()
  {
    $qry = "SELECT
              id_rule, id_status
           FROM
              app_store_order_setting_rules";
    $keys = array(
      ':position' => 1
    );
    $filter = "ORDER BY position ASC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function OSRByStatusId( $statusId = 0 )
  {
    $qry = "SELECT
              id_rule, id_status, id_email, is_auto_sendemail,
              is_auto_notify, timer
            FROM
              app_store_order_setting_rules";
    $keys = array(
      ':id_status' => (int) $statusId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function orderListByUserId( $userId = 0 )
  {
    $qry = "SELECT
              a.id_order, a.id_status, a.id_cart, a.id_user, a.id_currency, a.id_tax, 
              a.is_locked, a.is_recyclable, a.is_archive, a.id_address_primary, a.id_address_invoice, 
              a.id_delivery_method, a.id_payment_method, a.reference, a.created, a.secure_key,
              b.total_items, b.total_price, b.total_discounts, b.total_paid, b.total_wrapping, 
              b.total_shipping, b.total_payment, c.language_code
            FROM
              app_store_orders a
            LEFT JOIN
              app_store_order_cost b
            ON
              a.id_order = b.id_order
            LEFT JOIN
              app_languages c
            ON
              a.id_lang = c.id_lang";
    $keys = array(
      ':a.is_locked' => 1,
      ':a.id_user'   => (int) $userId
    );
    $filter = "ORDER BY a.created DESC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->address = (object) array(
          'primary' => $this->addressDataByContactId( $value->id_address_primary ),
          'invoice' => $this->addressDataByContactId( $value->id_address_invoice )
        );
        $data[ $key ]->total_price     = self::$registry->getService('helper')->money_format( $value->total_price );
        $data[ $key ]->total_discounts = self::$registry->getService('helper')->money_format( $value->total_discounts );
        $data[ $key ]->total_paid      = self::$registry->getService('helper')->money_format( $value->total_paid );
        $data[ $key ]->total_wrapping  = self::$registry->getService('helper')->money_format( $value->total_wrapping );
        $data[ $key ]->total_shipping  = self::$registry->getService('helper')->money_format( $value->total_shipping );
        $data[ $key ]->total_payment   = self::$registry->getService('helper')->money_format( $value->total_payment );
        $data[ $key ]->currency        = $this->currencyDataById( $value->id_currency );
        $data[ $key ]->tax             = $this->taxDataById( $value->id_tax );
        $data[ $key ]->delivery        = $this->deliveryDataById( $value->id_delivery_method );
        $data[ $key ]->payment         = $this->paymentDataById( $value->id_payment_method );
        $data[ $key ]->cart            = $this->cartDataById( $value->id_cart );
        $data[ $key ]->invoice         = ($this->isInvoiceByOrderId( $value->id_order )) ? self::$registry->getService('drive')->fileById( $this->invoiceIdByOrderId( $value->id_order ) ) : null;
        // clear
        unset( $data[ $key ]->id_user );
        unset( $data[ $key ]->id_tax );
        unset( $data[ $key ]->id_cart );
        unset( $data[ $key ]->id_currency );
        unset( $data[ $key ]->id_delivery_method );
        unset( $data[ $key ]->id_payment_method );
        unset( $data[ $key ]->id_address_primary );
        unset( $data[ $key ]->id_address_invoice );
      }
      return $data;
    }
    return null;
  }
  
  public function orderById( $orderId = 0 )
  {
    $qry = "SELECT
              a.id_order, a.id_lang, a.id_status, a.id_cart, a.id_user, a.id_currency, a.id_tax, a.is_payed,
              a.is_locked, a.is_recyclable, a.is_archive, a.id_address_primary, a.id_address_invoice, 
              a.id_delivery_method, a.id_payment_method, a.reference, a.secure_key, a.notice, a.private_message, a.created, a.close_date,
              b.total_items, b.total_price, b.total_tax, b.total_without_tax, b.total_discounts, b.total_paid, b.total_wrapping, 
              b.total_shipping, b.total_payment, c.language_code
            FROM
              app_store_orders a
            LEFT JOIN
              app_store_order_cost b
            ON
              a.id_order = b.id_order
            LEFT JOIN
              app_languages c
            ON
              a.id_lang = c.id_lang";
    $keys = array(
      ':a.id_order' => (int) $orderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->address = (object) array(
        'primary' => $this->addressDataByContactId( $data->id_address_primary ),
        'invoice' => $this->addressDataByContactId( $data->id_address_invoice )
      );
      $data->currency          = $this->currencyDataById( $data->id_currency );
      $data->tax               = $this->taxDataById( $data->id_tax );
      $data->delivery          = $this->deliveryDataById( $data->id_delivery_method );
      $data->payment           = $this->paymentDataById( $data->id_payment_method );
      $data->cart              = $this->cartDataById( $data->id_cart );
      $data->invoice           = ($this->isInvoiceByOrderId( $data->id_order )) ? self::$registry->getService('drive')->fileById( $this->invoiceIdByOrderId( $data->id_order ) ) : null;
      $data->total_without_tax = self::$registry->getService('helper')->money_format( $data->total_without_tax );
      $data->total_tax         = self::$registry->getService('helper')->money_format( $data->total_tax );
      $data->total_price       = self::$registry->getService('helper')->money_format( $data->total_price );
      $data->total_discounts   = self::$registry->getService('helper')->money_format( $data->total_discounts );

      return $data;
    }
    return null;
  }
  
  public function orderSettingRuleById( $oSId = 0 )
  {
    $qry = "SELECT
              id_rule, id_status, id_email, is_auto_sendemail,
              is_auto_notify, timer
            FROM
              app_store_order_setting_rules";
    $keys = array(
      ':id_rule' => (int) $oSId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function orderSummary()
  {
    $qry = "";
    
    $keys = array(
      ':id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':id_user' => self::$registry->getService('controller')->getUserId(),
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : false;
  }
  
  public function orderAddress()
  {
    $qry = "SELECT
              id_address_primary, id_address_invoice
            FROM
              app_store_orders";
    $keys = array(
      ':id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':id_user' => self::$registry->getService('controller')->getUserId(),
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->delivery = $this->addressDataByContactId( $data->id_address_primary );
      $data->invoice  = $this->addressDataByContactId( $data->id_address_invoice );
    }
    return (isset($data) && count($data) > 0) ? $data : null;
  }
  
  public function checkAddress()
  {
    $qry = "SELECT
              id_contact
            FROM
              app_store_user_address_book
            WHERE
              is_personal_pickup != 1";
    $keys = array(
      ':id_user'   => (int) self::$registry->getService('controller')->getUserId(),
      ':is_delete' => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false; 
  }
  
  public function deliveryMethodList()
  {
    $qry = "SELECT
              a.id_delivery, a.delivery_name, a.delivery_time, a.delivery_time_unit, 
              a.cost, b.currency_name, b.sign, a.description
            FROM
              app_store_delivery_method a
            INNER JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency";
    $keys = array(
      ':id_country' => self::$registry->getService('helper')->getCountryId(),
      ':enabled'    => 1
    );
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function paymentMethodList()
  {
    $qry = "SELECT
              a.id_payment, a.payment_name, a.cost, b.sign, a.description
            FROM
              app_store_payment_method a
            INNER JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency";
    $keys = array(
      ':id_country' => self::$registry->getService('helper')->getCountryId(),
      ':enabled'    => 1
    );
    $filter = "ORDER BY position ASC";
    
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function deliveryIdByOrder()
  {
    $qry = "SELECT
              id_delivery_method
            FROM
              app_store_orders";
    $keys = array(
      ':id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':id_user' => self::$registry->getService('controller')->getUserId(),
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_delivery_method : 0;
  }
  
  public function paymentIdByOrder()
  {
    $qry = "SELECT
              id_payment_method
            FROM
              app_store_orders";
    $keys = array(
      ':id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':id_user' => self::$registry->getService('controller')->getUserId(),
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_payment_method : 0;
  }
  
  public function deliveryDataById( $deliveryId = 0 )
  {
    $qry = "SELECT
              a.id_delivery, a.delivery_name, a.delivery_time, a.delivery_time_unit, 
              a.cost, b.currency_name, b.sign, a.description
            FROM
              app_store_delivery_method a
            INNER JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency";
    $keys = array(
      ':a.id_delivery' => (int) $deliveryId,
      ':a.id_country'  => self::$registry->getService('helper')->getCountryId(),
      ':a.enabled'     => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function paymentDataById( $paymentId = 0 )
  {
    $qry = "SELECT
              a.id_payment, a.payment_name, a.cost,
              b.currency_name, b.sign, a.description
            FROM
              app_store_payment_method a
            INNER JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency";
    $keys = array(
      ':a.id_payment' => (int) $paymentId,
      ':a.id_country' => self::$registry->getService('helper')->getCountryId(),
      ':a.enabled'    => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function orderIdBySecureKey( $secureKey = '', $force = false )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ':secure_key' => (string) $secureKey
    );
    if($force) {
      $keys[':id_cart'] = self::$registry->getService('controller')->getCart()->id_cart;
      $keys[':id_user'] = self::$registry->getService('controller')->getUserId();
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_order : null;
  }
  
  public function orderIdByCartId( $cartId = 0 )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_order : null;
  }
  
  public function secureKeyByOrder()
  {
    $qry = "SELECT
              secure_key
            FROM
              app_store_orders";
    $keys = array(
      ':id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':id_user' => self::$registry->getService('controller')->getUserId(),
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->secure_key : null;
  }
  
  public function primaryAddressIdByOrderId( $orderId = 0 )
  {
    $qry = "SELECT
              id_address_primary
            FROM
              app_store_orders";
    $keys = array(
      ":id_order" => (int) $orderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_address_primary : 0;
  }
  
  public function invoiceAddressIdByOrderId( $orderId = 0 )
  {
    $qry = "SELECT
              id_address_invoice
            FROM
              app_store_orders";
    $keys = array(
      ":id_order" => (int) $orderId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_address_invoice : 0;
  }
  
  public function isOrderById( $oderId = 0, $locked = 0 )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ':id_order'  => (int) $oderId,
      ':is_locked' => (int) $locked
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isDeliveryMethod( $deliveryId = 0 )
  {
    $qry = "SELECT
              id_delivery
            FROM
              app_store_delivery_method";
    $keys = array(
      ':id_delivery' => (int) $deliveryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isPaymentMethod( $paymentId = 0 )
  {
    $qry = "SELECT
              id_payment
            FROM
              app_store_payment_method";
    $keys = array(
      ':id_payment' => (int) $paymentId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAddressByContactId( $contactId = 0 )
  {
    $qry = "SELECT
              id_contact
            FROM
              app_store_user_address_book";
    $keys = array(
      ':id_contact' => (int) $contactId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAddressByUserId( $userId = 0 )
  {
    $qry = "SELECT
              id_contact
            FROM
              app_store_user_address_book";
    $keys = array(
      ':id_user' => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAddressSetUp()
  {
    $qry = "SELECT
              a.id_order
            FROM
              app_store_orders a
            INNER JOIN
              app_store_user_address_book b
            ON
              a.id_address_primary = b.id_contact
            INNER JOIN
              app_store_user_address_book c
            ON
              a.id_address_invoice = c.id_contact
            WHERE
            	c.first_name IS NOT NULL
            AND
            	c.first_name != ''
            AND
            	c.last_name IS NOT NULL
            AND
            	c.last_name != ''
            AND
            	c.email IS NOT NULL
             AND
            	c.email != ''
            AND
            	c.phone IS NOT NULL
            AND
            	c.phone != ''";
    $keys = array(
      ':a.id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':a.id_user' => self::$registry->getService('controller')->getUserId(),
      ':b.id_user' => self::$registry->getService('controller')->getUserId()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isDeliveryAndPaymentSetUp()
  {
    $qry = "SELECT
              a.id_order
            FROM
              app_store_orders a
            INNER JOIN 
              app_store_delivery_method b
            ON
              a.id_delivery_method = b.id_delivery
            INNER JOIN
              app_store_payment_method c
            ON
              a.id_payment_method = c.id_payment";
    $keys = array(
      ':a.id_cart' => self::$registry->getService('controller')->getCart()->id_cart,
      ':a.id_user' => self::$registry->getService('controller')->getUserId()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isOrderBySecureKey( $secureKey = '', $secure = false )
  {
    $qry = "SELECT
              id_cart
            FROM
              app_store_orders";
    $keys = array(
      ':secure_key' => (string) $secureKey
    );
    if($secure) {
      $keys[':id_cart'] = self::$registry->getService('controller')->getCart()->id_cart;
      $keys[':id_user'] = self::$registry->getService('controller')->getUserId();
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUniqueOrderReference( $orderRef = '' )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ":reference" => (string) $orderRef
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isUniqueOrderSecureKey( $secureKey = '' )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ":secure_key" => (string) $secureKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isNewClientByUserId( $userId = 0 )
  {
    $qry = "SELECT
              (count(id_order)) as avx
            FROM
              app_store_orders";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (((int) self::$registry->getService('storage')->getResult()[0]->avx > 1) ? false : true) : true;
  }
  
  public function isMissingPrimaryAddressByOrderId( $orderId = 0 )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ":id_order" => (int) $orderId,
      ":id_address_primary" => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isMissingInvoiceAddressByOrderId( $orderId = 0 )
  {
    $qry = "SELECT
              id_order
            FROM
              app_store_orders";
    $keys = array(
      ":id_order" => (int) $orderId,
      ":id_address_invoice" => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isOrderSettingRuleById( $oSId = 0 )
  {
    $qry = "SELECT
              id_rule
            FROM
              app_store_order_setting_rules";
    $keys = array(
      ":id_rule" => (int) $oSId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteOrderByCartId( $cartId = 0 )
  {
    $st = [];
    
    // ST1
    self::$registry->getService('storage')->delete( 'app_store_orders', array(':id_cart' => (int) $cartId, ':is_locked' => 0 ) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteSettingRuleById( $osrId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_order_setting_rules', ':id_rule', (int) $osrId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /**
  * 
  * Cart
  * 
  **/
  
  public function createCartByUserId( $userId = 0, $currencyId = 0, $taxId = 0 )
  {
    self::$registry->getService('storage')->insert( 
      'app_store_cart', 
      array(
        ':id_user'     => (int) $userId,
        ':id_lang'     => self::$registry->getService('languages')->getCurrentLanguage(),
        ':id_currency' => (int) $currencyId,
        ':id_tax'      => (int) $taxId,
        ':secure_key'  => self::$registry->getService('hash')->ripemd128(
          self::$registry->getService('helper')->generateRandomString().
          $userId.
          self::$registry->getService('languages')->getCurrentLanguage().
          $currencyId.
          $taxId.
          self::$registry->getService('helper')->generateRandomString()
        )
      )
    );
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertItemToCartById( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_cart_article', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateCartById( $changes = null, $cartId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_cart', $changes, ' id_cart = '. (int) $cartId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateItemOnCartById( $changes = null, $cartId = 0, $articleId = 0, $parAId = 0, $parBId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_cart_article', $changes, ' id_cart = '. (int) $cartId . ' AND id_article = '. (int) $articleId . ' AND id_par_a = '. (int) $parAId . ' AND id_par_b = '. (int) $parBId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateItemOnCartByItemId( $changes = null, $itemId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_cart_article', $changes, ' id_cart_item = '. (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }

  public function closeCart()
  {
    $cartId = (int) self::$registry->getService('controller')->getCart()->id_cart;
    
    if($this->isCartById( $cartId )) {
      $offerId = $this->offerIdByCartId( $cartId );
      
      if($this->isOfferById($offerId)) {
        $this->updateOfferById(array(
          'is_buy_enabled' => 0,
          'is_buy_closed'  => 1,
          'buy_date'       => date("Y-m-d H:i:s")
        ), $offerId);
      }
      self::$registry->getService('storage')->update( 'app_store_cart', array('is_locked' => 1), ' id_cart = '. $cartId );

      return self::$registry->getService('storage')->executed();
    }
    return false;
  }
  
  public function closeCartById( $cartId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_cart', array('is_locked' => 1), ' id_cart = '. (int) $cartId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function archivCartById( $cartId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_cart', array('is_locked' => 1, 'is_archive' => 1), ' id_cart = '. (int) $cartId . ' AND is_locked = 1' );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function offerIdByCartId( $cartId = 0 )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_cart";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_offer : 0;
  }
  
  public function cartList( $keys = null, $pagination = false )
  {
    $qry = "SELECT
              a.id_cart, a.secure_key, a.id_user, a.is_locked, a.is_recyclable, a.is_archive, a.is_changed,
              a.changed_count, a.changed_count, a.upd_date, a.created, b.currency_name, b.sign,
              c.tax_name, d.language_code
            FROM
              app_store_cart a
            INNER JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency
            INNER JOIN
              app_store_tax c
            ON
              a.id_tax = c.id_tax
            INNER JOIN
              app_languages d
            ON
              a.id_lang = d.id_lang";
    $filter = "ORDER BY a.created DESC";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
   if(self::$registry->getService('storage')->rowCount() > 0) {
    $data = self::$registry->getService('storage')->getResult();
    
    foreach($data as $key => $value) {
      $data[ $key ]->items  = $this->countItemsOnCartById( $value->id_cart );
      $data[ $key ]->amount = $this->totalAmountOnCartById( $value->id_cart );
    }
   }
   return (isset($data) && count($data) > 0) ? $data : null;
  }
  
  public function countCarts()
  {
    $qry = "SELECT
              (count(id_cart)) as avx
            FROM
              app_store_cart";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : null;
  }
  
  public function calculateItemQtyById( $cartId = 0, $articleId = 0, $parAId = 0, $parBId = 0, $qty = 0 )
  {
    $qry = "SELECT
              qty
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart'    => (int) $cartId,
      ':id_article' => (int) $articleId,
      ':id_par_a'   => (int) $parAId,
      ':id_par_b'   => (int) $parBId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? ((int) self::$registry->getService('storage')->getResult()[0]->qty + (int) $qty) : 1;
  }
  
  public function calcCartItemPriceById( $cartId = 0, $articleId = 0, $round = true )
  {
    // ID LANG
    $cartLangId = (int) $this->__cartLangIdByCartId( $cartId );
    // QRY
    $qry = "SELECT
              id_article, qty
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart'    => (int) $cartId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data    = self::$registry->getService('storage')->getResult()[0];
      $article = $this->__articleToCartById($data->id_article, $cartLangId);
      
      if(is_object($article)) 
      {
        // MERGE OBJECTS
        $data = (object) array_merge((array) $data, (array) $article);
        // DISCOUNT
        $taxRate      = ((float) $this->taxDataById( $data->id_tax )->rate / 100);
        $discount     = $this->articleDiscountByArticleId($data->id_article, $data->retail_tax_price, false);
        $isDiscount   = (is_object($discount)) ? true : false;
        $discountTax  = (is_object($discount)) ? $discount->discount - ($discount->discount / ($taxRate + 1)) : 0;
        $discountWTax = (is_object($discount)) ? ($discount->discount - $discountTax) : 0;
        // VALUES
        $retail_tax_price   = ($isDiscount) ? $discount->discount_price : (float) $data->retail_tax_price;
        $amount_without_tax = ((float) $data->retail_price - $discountWTax) * (int) $data->qty;
        $tax                = $amount_without_tax * $taxRate;
        $amount             = $amount_without_tax + $tax;
        $retail_price       = ((float) $data->retail_price - $discountWTax);
        // SET VARS
        $data->is_discount        = $isDiscount;
        $data->discount           = ($isDiscount) ? (((bool) $round === true) ? self::$registry->getService('helper')->money_format( $discount->discount ) : $discount->discount) : 0.00;
        $data->former_price       = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $data->retail_tax_price ) : (float) $data->retail_tax_price;
        $data->retail_tax_price   = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $retail_tax_price ) : $retail_tax_price;
        $data->amount_without_tax = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $amount_without_tax ) : $amount_without_tax;
        $data->tax                = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $tax ) : $tax;
        $data->amount             = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $amount ) : $amount;
        $data->retail_price       = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $retail_price ) : $retail_price;

        return $data;
      } 
      else 
      {
        throw new Exception('Cart item is not an object.', 500);
      }
      return null;
    }
    return null;
  }
  
  public function cartDataById( $cartId = 0, $locked = false, $lockedId = 0, $round = true )
  {
    $qry = "SELECT
              a.id_cart, a.secure_key, b.currency_name, b.sign
            FROM
              app_store_cart a
            INNER JOIN
              app_store_currency b
            ON
              a.id_currency = b.id_currency";
    $keys = array(
      ':id_cart' => (int) $cartId,
    );
    if($locked) 
    {
      $keys[':is_locked'] = (int) $lockedId;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data              = self::$registry->getService('storage')->getResult()[0];
      $data->items       = $this->countItemsOnCartById( $data->id_cart );
      $data->amount      = $this->totalAmountOnCartById($data->id_cart, $round);
      $data->subtotal    = $this->subtotalOnCartById($data->id_cart, $round);
      $data->tax         = (($round) ? self::$registry->getService('helper')->money_format( ($this->totalAmountOnCartById($data->id_cart, false) - $this->subtotalOnCartById($data->id_cart, false)) ) : (float) ($data->amount - $data->subtotal));
      $data->articleList = $this->articlesOnCartById($data->id_cart, $round);

      return $data;
    }
    return null;
  }
  
  public function countItemsOnCartById( $cartId = 0 )
  {
    $qry = "SELECT 
              (sum(qty)) as avx
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function totalAmountOnCartById( $cartId = 0, $round = true )
  {
    $locked = ($this->__isLockedCartById( $cartId )) ? 1 : 9;
    
    switch($locked) {
      case 1:
        return $this->__lockTotalAmountOnCartById($cartId, $round);
      case 9:
        return $this->__unlockTotalAmountOnCartById($cartId, $round);
      default:
        return null;
    }
  }
  
  private function __lockTotalAmountOnCartById( $cartId = 0, $round = true )
  {
    $qry = "SELECT
              (sum(qty * retail_tax_price)) as total
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (($round) ? self::$registry->getService('helper')->money_format( self::$registry->getService('storage')->getResult()[0]->total ) : (float) self::$registry->getService('storage')->getResult()[0]->total) : 0;
  }
    
  private function __unlockTotalAmountOnCartById( $cartId = 0, $round = true )
  {
    $qry = "SELECT
              id_article, qty
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data  = self::$registry->getService('storage')->getResult();
      $total = 0.00;
      
      foreach($data as $value) 
      {
        $article = $this->__articleToCartById($value->id_article, $this->__cartLangIdByCartId( $cartId ));
        
        if(is_object($article))
        {
          $discount = $this->articleDiscountByArticleId($value->id_article, $article->retail_tax_price, false);
          $total    = $total + (((!is_null($discount)) ? $discount->discount_price : $article->retail_tax_price) * $value->qty);
        }
        else
        {
          throw new Exception('Cart item is not an object.', 500);
        }
      }
      return ($round) ? self::$registry->getService('helper')->money_format( $total ) : (float) $total;
    }
    return 0;
  }
  
  public function subtotalOnCartById( $cartId = 0, $round = true )
  {
    $locked = ($this->__isLockedCartById( $cartId )) ? 1 : 9;
    
    switch($locked)
    {
      case 1:
        return $this->__lockSubtotalOnCartById($cartId, $round);
      case 9:
        return $this->__unlockSubtotalOnCartById($cartId, $round);
      default:
        return null;
    }
  }
  
  private function __lockSubtotalOnCartById( $cartId = 0, $round = true )
  {
    $qry = "SELECT
              (sum(amount_without_tax)) as subtotal
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (($round) ? self::$registry->getService('helper')->money_format( self::$registry->getService('storage')->getResult()[0]->subtotal ) : (float) self::$registry->getService('storage')->getResult()[0]->subtotal) : 0;
  }
    
  private function __unlockSubtotalOnCartById( $cartId = 0, $round = true )
  { 
    $qry = "SELECT
              id_article, qty
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data    = self::$registry->getService('storage')->getResult();
      $total   = 0;
      
      foreach($data as $key => $value) 
      {
        $article = $this->__articleToCartById($value->id_article, $this->__cartLangIdByCartId( $cartId ));
        
        if(is_object($article)) 
        {
          $data[ $key ] = (object) array_merge((array) $value, (array) $article);
        } 
        else 
        {
          throw new Exception('Cart item is not an object.', 500);
        }
      }
      foreach($data as $value) 
      {
        $discount = $this->articleDiscountByArticleId($value->id_article, $value->retail_tax_price, false);
        $taxRate  = ((float) $this->taxDataById( $value->id_tax )->rate / 100) + 1;
        $total    = $total + (((!is_null($discount)) ? (($value->retail_tax_price - $discount->discount) - (($value->retail_tax_price - $discount->discount) - (($value->retail_tax_price - $discount->discount) / $taxRate))) : $value->retail_price) * $value->qty);
      }
      return ($round) ? self::$registry->getService('helper')->money_format( $total ) : (float) $total;
    }
    return 0;
  }
          
  public function articlesOnCartById( $cartId = 0, $round = true )
  {
    $locked = ($this->__isLockedCartById( $cartId )) ? 1 : 9;
    
    switch($locked) {
      case 1:
        return $this->__lockCartArticleListByCartId( $cartId );
      case 9:
        return $this->__unlockCartArticleListByCartId($cartId, $round);
      default:
        return null;
    }
  }
  
  private function __isLockedCartById( $cartId = 0 )
  {
    $qry = "SELECT
              is_locked
            FROM
              app_store_cart";
    $keys = array(
      ':id_cart'   => (int) $cartId,
      ':is_locked' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  private function __lockCartArticleListByCartId( $cartId = 0 )
  { 
    // ID LANG
    $cartLangId = (int) $this->__cartLangIdByCartId( $cartId );
    // QRY
    $qry = "SELECT
              a.id_cart_item, a.id_article, b.id_image, b.id_gallery, 
              a.id_par_a, a.id_par_b, a.is_discount, b.reference, b.sku, 
              c.article_name, a.qty, a.retail_price, a.retail_tax_price, 
              a.former_price, a.discount, (a.discount * a.qty) as total_discount,
              a.tax, a.amount_without_tax, a.amount
            FROM
              app_store_cart_article a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_article_lang c
            ON
              a.id_article = c.id_article
            AND
              c.id_lang = ". $cartLangId;
    $keys = array(
      ':a.id_cart' => (int) $cartId
    );
    $filter = "ORDER BY a.id_cart_item ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->retail_price       = self::$registry->getService('helper')->money_format( $value->retail_price );
        $data[ $key ]->former_price       = self::$registry->getService('helper')->money_format( $value->former_price );
        $data[ $key ]->is_discount        = ((int) $value->is_discount === 1) ? true : false;
        $data[ $key ]->discount           = self::$registry->getService('helper')->money_format( $value->discount );
        $data[ $key ]->retail_tax_price   = self::$registry->getService('helper')->money_format( $value->retail_tax_price );
        $data[ $key ]->amount_without_tax = self::$registry->getService('helper')->money_format( $value->amount_without_tax );
        $data[ $key ]->amount             = self::$registry->getService('helper')->money_format( $value->amount );
        $data[ $key ]->tax                = self::$registry->getService('helper')->money_format( $value->tax );
        $data[ $key ]->total_discount     = self::$registry->getService('helper')->money_format( $value->total_discount );
        $data[ $key ]->image              = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        $data[ $key ]->matrix             = ((((int) $value->id_par_a > 0) && ((bool) $this->isAttributeValueById(0, $value->id_par_a) === true)) && (((int) $value->id_par_b > 0) && ((bool) $this->isAttributeValueById(0, $value->id_par_b) === true))) ? $this->__articleMatrixDataById($value->id_par_a, $value->id_par_b, $cartLangId) : null;
        $data[ $key ]->path               = $this->articlePathById($value->id_article, $cartLangId);
      }
      return $data;
    }
    return null;
  }
  
  private function __unlockCartArticleListByCartId( $cartId = 0, $round = true )
  {
    // ID LANG
    $cartLangId = $this->__cartLangIdByCartId( $cartId );
    // QRY
    $qry = "SELECT
              id_article, id_par_a, id_par_b, qty
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    $filter = "ORDER BY id_cart_item ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) 
      {
        $article = $this->__articleToCartById($value->id_article, $cartLangId);
        
        if(is_object($article)) 
        {
          $data[ $key ] = (object) array_merge((array) $value, (array) $article);
        } 
        else 
        {
          throw new Exception('Cart item is not an object.', 500);
        }
      }
      foreach($data as $key => $value) 
      {
        // DISCOUNT
        $taxRate      = ((float) $this->taxDataById( $data[ $key ]->id_tax )->rate / 100);
        $discount     = $this->articleDiscountByArticleId($value->id_article, $value->retail_tax_price, false);
        $isDiscount   = (is_object($discount)) ? true : false;
        $discountTax  = (is_object($discount)) ? $discount->discount - ($discount->discount / ($taxRate + 1)) : 0;
        $discountWTax = (is_object($discount)) ? ($discount->discount - $discountTax) : 0;
        // VALUES
        $retail_tax_price   = ($isDiscount) ? $discount->discount_price : (float) $value->retail_tax_price;
        $amount_without_tax = ((float) $value->retail_price - $discountWTax) * (int) $value->qty;
        $tax                = $amount_without_tax * $taxRate;
        $amount             = $amount_without_tax + $tax;
        $retail_price       = ((float) $value->retail_price - $discountWTax);
        // SET VARS
        $data[ $key ]->is_discount        = $isDiscount;
        $data[ $key ]->discount           = ($isDiscount) ? (((bool) $round === true) ? self::$registry->getService('helper')->money_format( $discount->discount ) : $discount->discount) : 0.00;
        $data[ $key ]->former_price       = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $value->retail_tax_price ) : (float) $value->retail_tax_price;
        $data[ $key ]->retail_tax_price   = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $retail_tax_price ) : $retail_tax_price;
        $data[ $key ]->amount_without_tax = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $amount_without_tax ) : $amount_without_tax;
        $data[ $key ]->tax                = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $tax ) : $tax;
        $data[ $key ]->amount             = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $amount ) : $amount;
        $data[ $key ]->retail_price       = ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $retail_price ) : $retail_price;
        $data[ $key ]->image              = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        $data[ $key ]->matrix             = ((((int) $value->id_par_a > 0) && ((bool) $this->isAttributeValueById(0, $value->id_par_a) === true)) && (((int) $value->id_par_b > 0) && ((bool) $this->isAttributeValueById(0, $value->id_par_b) === true))) ? $this->__articleMatrixDataById($value->id_par_a, $value->id_par_b, $cartLangId) : null;
        $data[ $key ]->path               = $this->articlePathById($value->id_article, $cartLangId);
      }
      return $data;
    }
    return null;
  }
  
  private function __cartLangIdByCartId( $cartId = 0 )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_store_cart";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : __DEFAULT_LANG_ID__;
  }
  
  private function __articleToCartById( $articleId = 0, $langId = 0 )
  {
    if(((bool) $this->isArticleById( $articleId ) === true) &&
      ((bool) $this->haveArticleLDById($articleId, $langId) === true) 
    ) {
      $mWH  = $this->isArticleManageWH( $articleId );
      $whId = ((bool) $mWH === true) ? $this->warehouseIdByArticleId( $articleId ) : 0;
      $qId  = ((bool) $mWH === true) ? 2 : 1;
      $qry  = $this->__articleQRYToCartById( $qId );
      $cc   = (((bool) $mWH === true) && ((bool) $this->isWarehouseById( $whId ) === true)) ? true : false;
      
      if(!is_null($qry) && ((((bool) $mWH === true) && ((bool) $cc === true)) || ((bool) $mWH === false))) 
      {
        $keys = array(
          ':a.id_article' => (int) $articleId,
          ':b.id_lang'    => (int) $langId
        );
        if((bool) $cc === true) 
        {
          $keys[':c.id_wh'] = (int) $whId;
        }
        self::$registry->getService('storage')->executeQuery( $qry, $keys );
        
        if(self::$registry->getService('storage')->rowCount() > 0) 
        {
          $data = self::$registry->getService('storage')->getResult()[0];
          $data->expedition_time = ((bool) $cc === true) ? $this->whExpeditionTimeToArticleById($whId, $articleId) : null;

          return $data;
        }
        return null;
      }
      return null;
    }
    return null;
  }
  
  private function __articleQRYToCartById( $qId = 0 )
  {
    switch((int) $qId) {
      case 1:
        return "SELECT
                  a.id_image, a.id_gallery, b.id_lang, a.id_tax, a.id_currency, 
                  a.on_show_price, a.on_show_tax, a.on_stock_availability, 
                  a.reference, a.sku, a.retail_price, a.retail_tax_price, 
                  b.article_name, b.description
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_lang b
                ON
                  a.id_article = b.id_article";
      case 2:
        return "SELECT
                  a.id_image, a.id_gallery, b.id_lang, e.id_tax, e.id_currency, 
                  a.on_show_price, a.on_show_tax, a.on_stock_availability, 
                  a.reference, a.sku, d.retail_price, d.retail_tax_price, 
                  b.article_name, b.description
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_lang b
                ON
                  a.id_article = b.id_article
                INNER JOIN
                  app_store_warehouse_al c
                ON
                  a.id_article = c.id_article
                AND
                  c.enabled = 1
                INNER JOIN
                  app_store_warehouse_al_relation d
                ON
                  a.id_article = d.id_article
                AND
                  c.id_rel = d.id_rel
                INNER JOIN
                  app_store_warehouse e
                ON
                  c.id_wh = e.id_wh";
      default:
        return null;
    }
  }
  
  private function __articleMatrixDataById( $parAId = 0, $parBId = 0, $langId = 0 )
  {
    $attrA = $this->attrVDataOnSiteById($this->attributeIdByAVId( $parAId ), $parAId, $langId);
    $attrB = $this->attrVDataOnSiteById($this->attributeIdByAVId( $parBId ), $parBId, $langId);
    
    if(is_object($attrA) && is_object($attrB)) {
      return (object) array(
        'par_a' => $attrA,
        'par_b' => $attrB
      );
    }
    return null;
  }
  
  public function itemAmountById( $itemId = 0 )
  {
    $qry = "SELECT
              a.id_article, a.qty, b.retail_price, b.retail_tax_price
            FROM
              app_store_cart_article a
            INNER JOIN 
              app_store_article b
            ON
              a.id_article = b.id_article";
    $keys = array(
      ':a.id_cart_item' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      // DISCOUNT
      $taxRate      = ((float) $this->taxDataById($this->articleDataById($data->id_article)->id_tax)->rate / 100);
      $discount     = $this->articleDiscountByArticleId($data->id_article, $data->retail_tax_price);
      $discountTax  = (!is_null($discount)) ? ($discount->discount - ($discount->discount / ($taxRate + 1))) : 0;
      $discountWTax = (!is_null($discount)) ? ($discount->discount - $discountTax) : 0;
      $amount_w_t   = (($data->retail_price - $discountWTax) * $data->qty);
      $tax          = ($amount_w_t * $taxRate);
      $amount       = ($amount_w_t + $tax);
      // OBJECT
      return (object) array(
        'amount_without_tax' => $amount_w_t,
        'amount'             => $amount
      );
    }
    return null;
  }
  
  public function cartIdByUserId( $userId = 0 )
  {
    $qry = "SELECT
              id_cart
            FROM
              app_store_cart";
    $keys = array(
      ':id_user'   => (int) $userId,
      ':is_locked' => 0
    );
    $filter = "LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_cart : 0;
  }
  
  public function cartIdBySecureKey( $cartKey = '', $useFilter = true )
  {
    $qry = "SELECT
              id_cart
            FROM
              app_store_cart";
    $keys = array(
      ':secure_key' => (string) $cartKey
    );
    if($useFilter) {
      $keys[':is_locked'] = 0;
    }
    $filter = "LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_cart : 0;
  }
  
  public function itemIdOnCartByIds( $cartId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_cart_item
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart'    => (int) $cartId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_cart_item : false;
  }
  
  public function haveArticleCartById( $cartId = 0 )
  {
    $qry = "SELECT
              (count(id_cart_item)) as avx
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart' => (int) $cartId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (((int) self::$registry->getService('storage')->getResult()[0]->avx > 0) ? true : false) : false;
  }
  
  public function isCartById( $cartId = 0, $secure = false )
  {
    $qry = "SELECT
              id_cart
            FROM
              app_store_cart";
    $keys = array(
      ':id_cart'   => (int) $cartId
    );
    if($secure) {
      $keys[':id_user']   = self::$registry->getService('controller')->getUserId();
      $keys[':is_locked'] = 0;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isCartByUserId( $userId = 0 )
  {
    $qry = "SELECT
              id_cart
            FROM
              app_store_cart";
    $keys = array(
      ':id_user'   => (int) $userId,
      ':is_locked' => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isCartBySecureKey( $cartKey = '', $secure = false )
  {
    $qry = "SELECT
              id_cart
            FROM
              app_store_cart";
    $keys = array(
      ':secure_key' => (string) $cartKey
    );
    if($secure) {
      $keys[':id_user']   = self::$registry->getService('controller')->getUserId();
      $keys[':is_locked'] = 0;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isItemOnCartById( $cartId = 0, $articleId = 0, $parAId = 0, $parBId = 0 )
  {
    $qry = "SELECT
              id_cart_item
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart'    => (int) $cartId,
      ':id_article' => (int) $articleId,
      ':id_par_a'   => (int) $parAId,
      ':id_par_b'   => (int) $parBId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isItemOnCartByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              id_cart_item
            FROM
              app_store_cart_article";
    $keys = array(
      ':id_cart_item' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isClosedCartById( $cartId = 0 )
  {
    $qry = "SELECT
              id_cart
            FROM
              app_store_cart";
    $keys = array(
      ':id_cart'   => (int) $cartId,
      ':is_locked' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteItemFromCartById( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_cart_article', ':id_cart_item' , (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteCartById( $cartId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_cart', ':id_cart' , (int) $cartId );
    self::$registry->getService('storage')->delete( 'app_store_cart_article', ':id_cart' , (int) $cartId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /**
  *
  * User
  *
  **/
  
  public function insertUser( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_user', $data );

    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertUserAuth( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_user_auth', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertUserAuthCA( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_user_ca', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertNewContactOnAddressBook( $data = null, $returnID = false )
  {
    self::$registry->getService('storage')->insert( 'app_store_user_address_book', $data );
    
    return ($returnID) ? self::$registry->getService('storage')->lastInsertId() : self::$registry->getService('storage')->executed();
  }
  
  public function updateContactOnAddressBookById( $changes = null, $contactId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_user_address_book', $changes, ' id_contact = '. (int) $contactId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateSecureTokenBySecureKey( $sToken = '', $skey = '' )
  {
    self::$registry->getService('storage')->update( 'app_store_user', array('secure_token' => $sToken), ' secure_key = "'.(string) $skey.'"' );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateSecureTokenByUserId( $sToken = '', $userId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_user', array('secure_token' => $sToken), ' id_user = '. (int) $userId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateIpAddressByUserId( $ipAddress = '', $userId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_user', array('ip_address' => $ipAddress), ' id_user = '. (int) $userId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function setUserTypeById( $typeId = 0, $userId = 0 )
  {
    switch((int) $typeId) {
      case 1:
        // GUEST
        self::$registry->getService('storage')->update( 'app_store_user', array('is_guest' => 1, 'is_visitor' => 0, 'is_customer' => 0), ' id_user = '. (int) $userId );
    
        return self::$registry->getService('storage')->executed();
      case 2:
        // VISITOR
        self::$registry->getService('storage')->update( 'app_store_user', array('is_guest' => 0, 'is_visitor' => 1, 'is_customer' => 0), ' id_user = '. (int) $userId );
    
        return self::$registry->getService('storage')->executed();
      case 3:
        // CUSTOMER
        self::$registry->getService('storage')->update( 'app_store_user', array('is_guest' => 0, 'is_visitor' => 0, 'is_customer' => 1), ' id_user = '. (int) $userId );
    
        return self::$registry->getService('storage')->executed();
      default:
        return false;
    }
  }
  
  public function setLoginUserStatus( $statusId = 0, $expire = 0, $userId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_user_auth', array('is_login' => (int) $statusId, 'expire' => (((int) $expire !== 0) ? $expire : (time() + 86400) )), ' id_user = '. (int) $userId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function userWidgetData()
  {
    $qry = "SELECT  (
              SELECT 
                count(id_user)
              FROM
                app_store_user
              WHERE
              	web_browser != 'Googlebot 2.1'
              ) AS total_users,
              (
              SELECT 
                count(id_user)
              FROM   
                app_store_user
              WHERE
                is_guest = 1
              AND
              	web_browser != 'Googlebot 2.1'
              ) AS total_guest,
              (
              SELECT 
                count(id_user)
              FROM   
                app_store_user
              WHERE
                is_visitor = 1
              AND
              	web_browser != 'Googlebot 2.1'
              ) AS total_visitor,
              (
              SELECT 
                count(id_user)
              FROM   
                app_store_user
              WHERE
                is_customer = 1
              AND
              	web_browser != 'Googlebot 2.1'
              ) AS total_customer,
              (
              SELECT 
                count(id_user)
              FROM   
                app_store_user
              WHERE
                is_banned = 1
              AND
              	web_browser != 'Googlebot 2.1'
              ) AS total_banned";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function addressBook( $delete = false )
  {
    $qry = "SELECT
              id_contact, secure_key, is_primary, is_invoice, first_name, midlle_name, last_name,
              email, phone, city, street, zip, company_name
            FROM
              app_store_user_address_book";
    $keys = array(
      ":id_user" => self::$registry->getService('controller')->getUserId(),
    );
    if($delete) {
      $keys[":is_delete"] = 0;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function addressDataByUserId( $userId = 0 )
  {
    $qry = "SELECT
              id_contact, secure_key, is_primary, is_invoice, first_name, midlle_name, last_name,
              email, phone, city, street, zip, company_name
            FROM
              app_store_user_address_book";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function addressDataByContactId( $contactId = 0, $delete = false )
  {
    $qry = "SELECT
              id_contact, secure_key, is_personal_pickup, is_primary, is_invoice, first_name, midlle_name, last_name,
              email, phone, city, street, zip, company_name, company_reg_number, vat, vat_code,
              id_country
            FROM
              app_store_user_address_book";
    $keys = array(
      ':id_contact' => (int) $contactId,
    );
    if($delete) {
      $keys[":is_delete"] = 0;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function addressListByUserId( $userId = 0 )
  {
    $qry = "SELECT
              a.id_contact,a.is_primary, a.is_invoice, a.first_name, a.midlle_name, a.last_name, a.email, a.phone,
              b.country_name, a.city, a.street, a.zip, a.company_name, a.company_reg_number, a.vat, a.vat_code, a.created
            FROM
              app_store_user_address_book a
            INNER JOIN
              app_languages b
            ON
              a.id_country = b.id_lang";
    $keys = array(
      ":a.id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function addressEmailList()
  {
    $qry = "SELECT
              id_contact, first_name, midlle_name, last_name, company_name, email
            FROM
              app_store_user_address_book";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function secureKeyByUserId( $userId = 0 )
  {
    $qry = "SELECT
              secure_key
            FROM
              app_store_user";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->secure_key : null;
  }
  
  public function userList( $keys = null, $pagination = false )
  {
    $qry = "SELECT
              a.id_user, a.is_guest, a.is_visitor, a.is_customer, a.is_banned, a.is_computer, a.is_tablet, a.is_mobile, a.is_mobile_device,
              a.web_browser, a.operating_system, a.continent, a.country_code, a.country_name, a.city, a.latitude, a.longitude,
              a.timezone, a.timezone_name, a.screen_resolution_x, a.screen_resolution_y, b.language_code
            FROM
              app_store_user a
            LEFT JOIN
              app_languages b
            ON
              a.id_lang = b.id_lang";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null; 
  }
  
  public function countUsers( $keys = null )
  {
    $qry = "SELECT
              (count(id_user)) as avx
            FROM
              app_store_user";
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : null;
  }
  
  public function getUser( $sToken = null, $sKey = null )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user";
    $keys = array(
      ":secure_token" => (string) $sToken,
      ":secure_key"   => (string) $sKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_user : null;
  }
  
  public function userDataById( $userId = 0 )
  {
    $qry = "SELECT
              id_user, id_lang, secure_token, secure_key
            FROM
              app_store_user";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function userAccountStatisticByUserId( $userId = 0 )
  {
    $qry = "SELECT
              (COUNT(a.id_order)) as orderTotal, (SUM(b.total_items)) as productTotal, (ROUND(SUM(b.total_price),2)) as amount
            FROM   
              app_store_orders a
            INNER JOIN
              app_store_order_cost b
            ON
              a.id_order = b.id_order";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function userAuthDataById( $userId = 0 )
  {
    $qry = "SELECT
              auth_email, created
            FROM
              app_store_user_auth";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function userAuthEmailById( $userId = 0 )
  {
    $qry = "SELECT
              auth_email
            FROM
              app_store_user_auth";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->auth_email : null;
  }
  
  public function userIdByAuthEmail( $email = '' )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user_auth";
    $keys = array(
      ":auth_email" => (string) $email
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_user : 0;
  }
  
  public function contactIdBySecureKey( $secureKey = '' )
  {
    $qry = "SELECT
              id_contact
            FROM
              app_store_user_address_book";
    $keys = array(
      ':secure_key' => (string) $secureKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_contact : null;
  }
  
  public function scPdatByUserId( $userId = 0 )
  {
    $qry = "SELECT
              salt1, salt2, cta, ctb
            FROM
              app_store_user_auth";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->ca = $this->__userCaCollectionByUserId( $userId );
    }
    return (isset($data) && count($data) > 0) ? $data : null;
  }
  
  private function __userCaCollectionByUserId( $userId = 0 )
  {
    $qry = "SELECT
              id_ca
            FROM
              app_store_user_ca";
    $keys = array(
      ':id_user' => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function cPassByUserId( $userId = 0 )
  {
    $qry = "SELECT
              pass
            FROM
              app_store_user_auth";
    $keys = array(
      ':id_user' => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->pass : null;
  }
  
  public function isPrimaryAddress( $contactId = 0 )
  {
    $qry = "SELECT
              id_contact
            FROM
              app_store_user_address_book";
    $keys = array(
      ':id_contact' => (int) $contactId,
      ':is_primary' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isInvoiceAddress( $contactId = 0 )
  {
    $qry = "SELECT
              id_contact
            FROM
              app_store_user_address_book";
    $keys = array(
      ':id_contact' => (int) $contactId,
      ':is_invoice' => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUniqueUserId( $uniqueRef = '' )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user";
    $keys = array(
      ":secure_key" => (string) $uniqueRef
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isUserById( $userId = 0 )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUserByAuthEmail( $email = '' )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user_auth";
    $keys = array(
      ":auth_email" => (string) $email
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUserByToken( $sToken = null, $sKey = null )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user";
    $keys = array(
      ":secure_token" => (string) $sToken,
      ":secure_key"   => (string) $sKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUserBySecureKey( $sKey = null )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user";
    $keys = array(
      ":secure_key"   => (string) $sKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUniqueAddressSecureKey( $secureKey = '' )
  {
    $qry = "SELECT
              id_contact
            FROM
              app_store_user_address_book";
    $keys = array(
      ":secure_key" => (string) $secureKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isRegistredUserById( $userId = 0 )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user_auth";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isUniqueUserAuthEmail( $email = '' )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_user_auth";
    $keys = array(
      ":auth_email" => (string) $email
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isUserAuthLogin( $userId = 0 )
  {
    $qry = "SELECT
              is_login
            FROM
              app_store_user_auth";
    $keys = array(
      ":id_user" => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (bool) self::$registry->getService('storage')->getResult()[0]->is_login : false;
  }
  
  public function isLockUserById( $userId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                count(id_cart)
              FROM
                app_store_cart
              WHERE
                id_user = ".(int) $userId."
              ) AS avc,
              (
              SELECT 
                count(id_order)
              FROM   
                  app_store_orders
              WHERE
                id_user = ".(int) $userId."
              ) AS avo";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult()[0];
      
      return (((int) $result->avc > 0) && ((int) $result->avo > 0)) ? true : false;
    }
    return false;
  }

  public function resetPrimaryAddress()
  {
    self::$registry->getService('storage')->update( 'app_store_user_address_book', array('is_primary' => 0) );
    
    return (self::$registry->getService('storage')->executed()) ? 1 : 0;
  }

  public function resetInvoiceAddress()
  {
    self::$registry->getService('storage')->update( 'app_store_user_address_book', array('is_invoice' => 0) );
    
    return (self::$registry->getService('storage')->executed()) ? 1 : 0;
  }
  
  public function deleteAddressByContactId( $contactId = 0 )
  {
    if($this->__isLockedAddress( $contactId )) {
      self::$registry->getService('storage')->update( 'app_store_user_address_book', array('is_delete' => 1, 'is_primary' => 0, 'is_invoice' => 0), ' id_contact = '. (int) $contactId );
    } else {
      self::$registry->getService('storage')->delete( 'app_store_user_address_book', ':id_contact' , (int) $contactId );
    }
    return self::$registry->getService('storage')->executed();
  }
  
  private function __isLockedAddress( $contactId = 0 )
  {
    $qry = "SELECT
              id_address_primary, id_address_invoice
            FROM
              app_store_orders";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $value) {
        if(((int) $value->id_address_primary === (int) $contactId) || ((int) $value->id_address_invoice === (int) $contactId)) {
          return true;
        }
      }
      return false;
    }
    return false;
  }
  
  public function deleteUserById( $userId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_user', ':id_user' , (int) $userId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAddressByUserId( $userId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_user_address_book', ':id_user' , (int) $userId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /**
  *
  * STATUS
  *
  **/
  
  public function insertStatus( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_status', $data);
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertStatusLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_status_lang', $data);
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateStatusById( $changes = null, $statusId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_status', $changes, ' id_status = '. (int) $statusId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function statusWidgetsData()
  {
    $qry = "SELECT  
              (
            SELECT 
              COUNT(id_status)
            FROM   
              app_store_status
            WHERE
              id_pattern = 1
            ) AS number_of_article,
            (
            SELECT 
              COUNT(id_status)
            FROM   
              app_store_status
            WHERE
              id_pattern = 2
            ) AS number_of_shopping_cart,
            (
            SELECT 
              COUNT(id_status)
            FROM   
              app_store_status
            WHERE
              id_pattern = 3
            ) AS number_of_order,
            (
            SELECT 
              COUNT(id_status)
            FROM   
              app_store_status
            WHERE
              id_pattern = 4
            ) AS number_of_warehouse";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null; 
  }
  
  public function statusList( $filter = 0, $pagination = false )
  {
    $qry = "SELECT
              a.id_status, a.id_pattern, a.color,
              a.enabled, b.status_name
            FROM
              app_store_status a,
              app_store_status_lang b
            WHERE
              a.id_status = b.id_status";
    $keys = array(
      ":b.id_lang"    => ($this->__haveSupportLanguageStatus(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageStatus()
    );
    if(((int) $filter > 0) && ((int) $filter < 5)) {
      $keys[":a.id_pattern"] = (int) $filter;
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null; 
  }
  
  public function statusListByArticleId( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              b.id_status, b.color, c.status_name
            FROM
              app_store_article_status a
            INNER JOIN
              app_store_status b
            ON
              a.id_status = b.id_status
            AND
              b.enabled = 1
            INNER JOIN
              app_store_status_lang c
            ON
              a.id_status = c.id_status";
    $keys = array(
      ":a.id_article" => (int) $articleId,
      ":c.id_lang"    => ((int) $langId > 0) ? (int) $langId : (($this->__haveSupportLanguageStatus(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageStatus())
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function statusDataById( $statusId = 0 )
  {
    $qry1 = "SELECT
              id_status, id_pattern, color
            FROM
              app_store_status";
    $keys = array(
      ':id_status' => (int) $statusId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys );
    
    if((self::$registry->getService('storage')->rowCount() > 0)) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                id_lang, status_name
              FROM
                app_store_status_lang";
      self::$registry->getService('storage')->executeQuery( $qry2, $keys );
      
      if((self::$registry->getService('storage')->rowCount() > 0)) {
        $data->lang = [];
        
        foreach(self::$registry->getService('storage')->getResult() as $value) {
          $data->lang[ $value->id_lang ] = (object) array('status_name' => $value->status_name); 
        }
      }
    }
    return (isset($data) && count($data) > 0) ? $data : null;
  }
  
  public function isStatusById( $statusId = 0 )
  {
    $qry = "SELECT
              id_status
            FROM
              app_store_status";
    $keys = array(
      ":id_status" => (int) $statusId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteStatusLangById( $statusId  = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_status_lang', ':id_status' , (int) $statusId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteStatusById( $statusId  = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_status', ':id_status' , (int) $statusId );
    self::$registry->getService('storage')->delete( 'app_store_status_lang', ':id_status' , (int) $statusId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  private function __haveSupportLanguageStatus( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_status)
              FROM   
                  app_store_status
              ) AS avx,
              (
              SELECT 
                  count(id_status)
              FROM   
                  app_store_status_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ( (int) $data->avx === (int) $data->avs ) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguageStatus()
  {
    $qry = "SELECT
              *
            FROM
            (
            SELECT
              id_lang, count(id_lang) as avx
            FROM
              app_store_status_lang
            GROUP BY
              id_lang
            ) as result
            ORDER BY
              avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  /*********************************************************************************************************
  *
  * ARTICLE
  *
  *********************************************************************************************************/
  
  public function insertArticle( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article', $data);
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertArticleLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleStatusById( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_status', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleCategoryById( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_category', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleAttributeById( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_attribute', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleRelatedArticleById( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_related_article', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleToAlternativeArticleListById( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_alternative_article', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleViwerStatistics( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_viewer_statistics', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleFTIndex( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_article_full_text_indexes', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleById( $changes = null, $articleId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article', $changes, ' id_article = '. (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleLangById( $changes = null, $articleId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article_lang', $changes, ' id_article = '. (int) $articleId . ' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleImageById( $articleId = 0, $fileId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article', array('id_image' => (int) $fileId), ' id_article = '. (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleCategoryById( $changes = null, $articleId = 0, $categoryId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article_category', $changes, ' id_article = '. (int) $articleId . ' AND id_category = '. (int) $categoryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleAttributeValueById( $changes = null, $articleId = 0, $attributeId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article_attribute', $changes, ' id_article = '. (int) $articleId . ' AND id_attribute = '. (int) $attributeId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleFTIndex( $changes = null, $articleId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article_full_text_indexes', $changes, ' id_article = '. (int) $articleId . ' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateArticleRouteById( $routeId = 0, $articleId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article_lang', array('id_route' => (int) $routeId), ' id_article = '. (int) $articleId . ' AND id_lang = '. (int) $langId );
        
    return self::$registry->getService('storage')->executed();
  }
  
  public function countArticles( $ignoreList = null, $useList = null )
  {
    $qry = "SELECT
              count(id_article) as avx	
            FROM
              app_store_article";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) 
    {
      $qry .= " WHERE id_article NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) 
    {
      $qry .= ((count($ignoreList) === 0) ? ' WHERE ' : ' AND ' )." id_article IN (".implode(",",$useList).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function articleDataById( $articleId = 0 )
  {
    $qry = "SELECT
              id_article, id_store, id_article_type, id_visibility, id_currency, id_tax, id_manufacturer,
              id_country_of_manufacturer, id_slider, id_gallery, id_image, reference, sku, article_name_internal,
              ean13_jan_barcode, upc_barcode, wholesale_price, recommended_retail_price, retail_price, retail_tax_price, tax_price, unit_price,
              unity, rent_tax_price, rent_number, rent_unit, qty, qty_out_of_stock, min_qty_in_cart, max_qty_in_cart, default_purchase_amount, new_from_date, new_to_date,
              ap_width, ap_height, ap_depth, ap_weight, ap_shipping_fee, expedition_number_value, expedition_unit_time, is_campaign, is_avaiable_for_order,
              on_show_price, on_show_tax, on_notify_qty, on_monitoring, on_stock_availability, on_online_only, on_pay_paypal, on_pay_cc_paypal, on_pay_visa,
              on_pay_master_card, on_pay_discover, on_pay_credit_card, on_pay_g_wallet, on_pay_amex, on_tp_truck, on_tp_rail, on_tp_marine, on_tp_air,
              on_iss_dhl, on_iss_ups, on_iss_tnt, on_iss_fedex, guest, visitor, customer, enabled
            FROM
              app_store_article";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data                         = self::$registry->getService('storage')->getResult()[0];      
      $data->image                  = ((int) $data->id_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_image ) : (((int) $data->id_gallery > 0) ? $this->__getMainImageFromGallery($data->id_gallery, true, 0, 0) : null);
      $data->lang                   = $this->__getArticleLangDataById( $articleId );
      $data->statusList             = $this->__getArticleStatusListById( $articleId );
      $data->categoryList           = $this->__getArticleCategoryListById( $articleId );
      $data->attributeValueList     = $this->__getArticleAttrValueListById( $articleId );
      $data->relatedArticleList     = $this->__getRelatedArticleListById( $articleId );
      $data->alternativeArticleList = $this->__getAlternativeArticleListById( $articleId );
      
      return $data;
    }
    return null;
  }
  
  public function articleRouteIdByArticleId( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route	
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_article' => (int) $articleId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_route : 0;
  }
  
  private function __getArticleLangDataById( $articleId = 0 )
  {
    $qry = "SELECT
              id_lang, id_route, article_name, description, site_title, 
              meta_keywords, meta_description, meta_robot, html_content
            FROM
              app_store_article_lang";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = $value;
      }
      return $data;
    }
    return null;
  }
  
  private function __getArticleStatusListById( $articleId = 0 )
  {
    $qry = "SELECT
              id_status
            FROM
              app_store_article_status";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[] = (int) $value->id_status;
      }
      return $data;
    }
    return null;
  }
  
  private function __getArticleCategoryListById( $articleId = 0 )
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_article_category";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    $filter = "ORDER BY bc_position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[] = $this->categoryDataForArticleById( $value->id_category );
      }
      return $data;
    }
    return null;
  }
  
  private function __getArticleAttrValueListById( $articleId = 0 )
  {
    $qry = "SELECT
              id_attribute, id_value
            FROM
              app_store_article_attribute";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data    = self::$registry->getService('storage')->getResult();
      $cLangId = self::$registry->getService('languages')->getCurrentLanguage();

      foreach($data as $key => $value) {
        $langId    = ($this->__haveSupportLanguageAttributeValue($value->id_attribute, $cLangId)) ? $cLangId : $this->__getSupportLanguageAttributeValue();
        $attrName  = $this->attributeNameById( $value->id_attribute );
        $attrVData = $this->attributeValueDataById(0, $value->id_value);
        
        $data[ $key ]->attribute_name = (is_object($attrName)) ? $attrName->attribute_name_internal : null;
        $data[ $key ]->value          = (is_object($attrVData)) ? $attrVData[ $langId ]->value : null;
        $data[ $key ]->tree           = $this->buildTreeByAttrId( $value->id_attribute );
        
        $this->resetAttrTreeArr();
      }
      return $data;
    }
    return null;
  }
  
  private function __getRelatedArticleListById( $articleId = 0 )
  {
    $qry = "SELECT
              id_related_article
            FROM
              app_store_article_related_article";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $res  = self::$registry->getService('storage')->getResult();
      $data = [];
      
      foreach($res as $value) {
        $data[] = $this->articleByRelatedArticleId( $value->id_related_article );
      }
      return $data;
    }
    return null;
  }
  
  private function __getAlternativeArticleListById( $articleId = 0 )
  {
    $qry = "SELECT
              id_alternative_article
            FROM
              app_store_article_alternative_article";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $res  = self::$registry->getService('storage')->getResult();
      $data = [];
      
      foreach($res as $value) {
        $data[] = $this->articleByAlternativeArticleId( $value->id_alternative_article );
      }
      return $data;
    }
    return null;
  }
  
  public function amoutArticlesInStock()
  {
    $qry = "SELECT
              sum(qty * retail_tax_price) as avx	
            FROM
              app_store_article";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? round(self::$registry->getService('storage')->getResult()[0]->avx,2): 0;
  }
  
  public function averageGrossMargin()
  {
    $qry = "SELECT
              ( round( ( sum( ( ( (retail_price - wholesale_price) / retail_price) * 100) ) / count(id_article) ), 0) ) as margin
            FROM
              app_store_article";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->margin: 0;
  }
  
  public function disabledArticlesInStock()
  {
    $qry = "SELECT
              count(id_article) as avx	
            FROM
              app_store_article";
    $keys = array(
      ':enabled' => 0        
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function articleNameById( $articleId = 0 )
  {
    $qry = "SELECT
              article_name_internal
            FROM
              app_store_article";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->article_name_internal : null;
  }
  
  public function articleIdByReference( $reference = '' )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ":reference" => (string) $reference
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_article : null;
  }
  
  public function articleIdBySKU( $sku = '' )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ":sku" => $sku
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_article : null;
  }
  
  public function selectArticleList()
  {
    $qry = "SELECT
              id_article, article_name_internal
            FROM
              app_store_article";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function prevArticleById( $articleId = 0 )
  {
    $qry = "SELECT 
              id_article 
            FROM 
              app_store_article 
            WHERE 
              id_article = (
                SELECT 
                  max(id_article) 
                FROM 
                  app_store_article 
                WHERE 
                  id_article < ".(int) $articleId.")";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_article : null;
  }
  
  public function nextArticleById( $articleId = 0 )
  {
    $qry = "SELECT
             id_article 
           FROM 
             app_store_article 
           WHERE 
             id_article = (
               SELECT 
                 min(id_article) 
               FROM 
                 app_store_article 
               WHERE 
                 id_article > ".(int) $articleId.")";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_article : null;
  }
  
  public function articleIdsByThumb()
  {
    $qry = "SELECT
              id_article, id_image, id_gallery
            FROM
              app_store_article";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function articleIdsByCategory( $ids = null, $exp = false )
  {
    $qry = "SELECT
              b.id_article, b.id_image, b.id_gallery
            FROM
              app_store_article_category a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article";
    if(is_array($ids) && (count($ids) > 0)) {
      $qry .= " WHERE a.id_category ".(((bool) $exp === true) ? 'NOT IN' : 'IN')." (".implode(",",$ids).")";
    }
    $filter = "GROUP BY a.id_article";

    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function articleIdsByAttr( $ids = null, $exp = false )
  {
    $qry = "SELECT
              b.id_article, b.id_image, b.id_gallery
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article";
    if(is_array($ids) && (count($ids) > 0)) {
      $qry .= " WHERE a.id_attribute ".(((bool) $exp === true) ? 'NOT IN' : 'IN')." (".implode(",",$ids).")";
    }
    $filter = "GROUP BY a.id_article";

    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function articleIdsByAttrV( $ids = null, $exp = false )
  {
    $qry = "SELECT
              b.id_article, b.id_image, b.id_gallery
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article";
    if(is_array($ids) && (count($ids) > 0)) {
      $qry .= " WHERE a.id_value ".(((bool) $exp === true) ? 'NOT IN' : 'IN')." (".implode(",",$ids).")";
    }
    $filter = "GROUP BY a.id_article";

    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function articleLangListById( $articleId = 0 )
  {
    $qry = "SELECT
            b.id_lang, b.lang_name, b.language_code, b.iso_code
          FROM
            app_store_article_lang a
          INNER JOIN
            app_languages b
          ON
            a.id_lang = b.id_lang";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    $filter = "GROUP BY a.id_lang";
    
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        $data[ $value->id_lang ] = $value;
      }
      return $data;
    }
    return null;
  }
  
  public function articleList( $pagination = false, $ignoreList = null, $useList = null, $sortRuleId = 0 )
  {
    $qry = "SELECT
              a.id_article, a.id_ext_article, a.id_image, a.id_gallery, a.sku, a.article_name_internal,
              a.qty, round(a.wholesale_price,2) as wholesale_price, round(a.retail_price,2) as retail_price, 
              round(a.retail_tax_price,2) as retail_tax_price, round(a.tax_price,2) as tax_price,
              a.id_tax, b.article_name, b.description, a.enabled, c.sign
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            LEFT JOIN
              app_store_currency c
            ON
              a.id_currency = c.id_currency";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE a.id_article NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= ((is_null($ignoreList)) ? ' WHERE ' : ' AND ' )." a.id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':b.id_lang' => ($this->__haveSupportLanguageArticle(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageArticle()
    );
    if(((int) $sortRuleId === 7) || ((int) $sortRuleId === 8)) {
      $keys[':a.enabled'] = ((int) $sortRuleId === 7) ? 1 : 0;
    }
    $filter = $this->__sortArticleListById( $sortRuleId );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        $data[ $key ]->color = $this->__getArticleIndexColor( $value->id_article );
        
        unset($data[ $key ]->id_image);
      }
      return $data;
    }
    return null;
  }
  
  private function __sortArticleListById( $sortRuleId = 0 )
  {
    switch((int) $sortRuleId) {
      case 1:
        return "ORDER BY b.article_name ASC";
      case 2:
        return "ORDER BY b.article_name DESC";
      case 3:
        return "ORDER BY a.retail_tax_price ASC";
      case 4:
        return "ORDER BY a.retail_tax_price DESC";
      case 5:
        return "ORDER BY a.created ASC";
      case 6:
        return "ORDER BY a.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) DESC";
      default:
        return null;
    }
  }
  
  private function __getMainImageFromGallery( $galleryId = 0, $onSite = true, $kind = 0, $sectionId = 0 )
  {
    if(self::$registry->getService('gallery')->isGalleryById( $galleryId )) 
    {
      $gallery = self::$registry->getService('gallery')->galleryById(
        $galleryId,
        $onSite,
        $kind, 
        $sectionId     
      );
      $object = self::$registry->getService('helper')->mainImageFromGallery( $gallery->imageList );

      return (is_object($object)) ? $object->file : null;
    }
    return null;
  }
  
  private function __getArticleIndexColor( $articleId = 0 )
  {
    $qry = "SELECT
            (
            SELECT
              (round(qty * retail_tax_price,0)) as avx
            FROM
              app_store_article
            ORDER BY
              avx DESC
            LIMIT 1
            ) as avx,
            (
            SELECT
              (round(qty * retail_tax_price,0)) as avs
            FROM
              app_store_article
            WHERE
              id_article = ".(int) $articleId."
            ) as avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      if( (int) $data->avx > 0 && $data->avs > 0) {
      
        $result = round(( (int) $data->avs * 100) / (int) $data->avx,0);
        
        if( ($result >= 0) && ($result <= 33) ) {
          return 1;
        } else if( ($result >= 34) && ($result <= 67) ) {
          return 2;
        }
        else if( ($result >= 68) && ($result <= 100) ) {
          return 3;
        } else {
          return 0;
        }
      }
      return 0;
    }
    return 0;
  }
  
  public function fullTextSearchOnArticleIdsByKeywords( $keywords = '', $relevance = false, $limit = 0 )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // QUERY
    $base = "SELECT
              id_article
            FROM
              app_store_article_full_text_indexes
            WHERE
              MATCH(a_index, b_index, c_index, d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE)
            GROUP BY
              id_article";
    $avg = "SELECT
              *
            FROM 
            (
            SELECT
              id_article, MATCH(a_index, b_index, c_index, d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE) AS score
            FROM
              app_store_article_full_text_indexes
            WHERE
              MATCH(a_index, b_index, c_index, d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE)
            GROUP BY
              id_article
            ) as result
            ORDER BY
              score DESC";
    $qry    = ((bool) $relevance === true) ? $avg : $base;
    $filter = ((int) $limit > 0) ? 'LIMIT '.(int) $limit : null;
    // FETCH
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    // articleList
    $data = [];
    // Result
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = self::$registry->getService('storage')->getResult();
      
      foreach($ids as $value) {
        $data[] = $value->id_article;
      }
    } else {
      $qry2 = "SELECT 
                id_article
              FROM 
                app_store_article_full_text_indexes 
              WHERE
                a_index LIKE ('%".$keywords2."%')
              OR
                b_index LIKE ('%".$keywords2."%')
              OR
                c_index LIKE ('%".$keywords2."%')
              OR
                d_index LIKE ('%".$keywords2."%')
              GROUP BY
                id_article";
      $filter2 = ((int) $limit > 0) ? 'LIMIT '.(int) $limit : null;
      // FETCH
      self::$registry->getService('storage')->executeQuery( $qry2, null, $filter2 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $ids2 = self::$registry->getService('storage')->getResult();

        foreach($ids2 as $value) {
          $data[] = $value->id_article;
        }
      }
    }
    return (is_array($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function fullTextSearchOnArticlesByKeywords( $keywords = '', $relevance = false, $limit = 0 )
  {
    // CLEAR
    $keywords2 = htmlspecialchars(html_entity_decode(self::$registry->getService('irequest')->sanitize( $keywords ), ENT_QUOTES, "UTF-8"), ENT_QUOTES, "UTF-8");
    // QUERY
    $base = "SELECT
              a.id_article
            FROM
              app_store_article_full_text_indexes a
            INNER JOIN
              app_store_article b
            ON	
              a.id_article = b.id_article
            AND
              b.enabled = 1
            WHERE
              MATCH(a.a_index, a.b_index, a.c_index, a.d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE)
            GROUP BY
              a.id_article";
    $avg = "SELECT
              *
            FROM 
            (
            SELECT
              a.id_article, MATCH(a.a_index, a.b_index, a.c_index, a.d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE) AS score
            FROM
              app_store_article_full_text_indexes a
            INNER JOIN
              app_store_article b
            ON	
              a.id_article = b.id_article
            AND
              b.enabled = 1
            WHERE
              MATCH(a.a_index, a.b_index, a.c_index, a.d_index) AGAINST('".$keywords2."' IN BOOLEAN MODE)
            GROUP BY
              a.id_article
            ) as result
            ORDER BY
              score DESC";
    $qry    = ((bool) $relevance === true) ? $avg : $base;
    $filter = ((int) $limit > 0) ? 'LIMIT '.(int) $limit : null;
    // FETCH
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    // articleList
    $langId = self::$registry->getService('languages')->getCurrentLanguage();
    $data   = [];
    // Result
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = self::$registry->getService('storage')->getResult();
      
      foreach($ids as $value) {
        $article = $this->articleOnSiteById(
          $value->id_article,
          $langId
        );
        if(is_object($article)) {
          $data[] = $article;
        }
      }
    } else {
      $qry2 = "SELECT 
                a.id_article
              FROM 
                app_store_article_full_text_indexes a
              INNER JOIN
                app_store_article b
              ON
                a.id_article = b.id_article
              WHERE
                b.enabled = 1
              AND
                a.a_index LIKE ('%".$keywords2."%')
              OR
                a.b_index LIKE ('%".$keywords2."%')
              OR
                a.c_index LIKE ('%".$keywords2."%')
              OR
                a.d_index LIKE ('%".$keywords2."%')
              GROUP BY
                a.id_article";
      $filter2 = ((int) $limit > 0) ? 'LIMIT '.(int) $limit : null;
      // FETCH
      self::$registry->getService('storage')->executeQuery( $qry2, null, $filter2 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $ids2 = self::$registry->getService('storage')->getResult();

        foreach($ids2 as $value) {
          $article = $this->articleOnSiteById(
            $value->id_article,
            $langId
          );
          if(is_object($article)) {
            $data[] = $article;
          }
        }
      }
    }
    return (is_array($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function articleDataForFullTextIndexesById( $articleId = 0 )
  {
    $qry = "SELECT
              id_lang, article_name, description
            FROM
              app_store_article_lang";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ $value->id_lang ] = (object) array(
          'article_name' => html_entity_decode($value->article_name, ENT_QUOTES, "UTF-8"),
          'description'  => html_entity_decode($value->description, ENT_QUOTES, "UTF-8"),
          'categories'   => $this->__articleCategoryLangDataById($articleId, $value->id_lang),
          'attributes'   => $this->__articleAttrValuesLangDataById($articleId, $value->id_lang)
        );
      }
      return $data;
    }
    return null;
  }
  
  private function __articleCategoryLangDataById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              b.category_name
            FROM
              app_store_article_category a
            INNER JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":a.id_article" => (int) $articleId,
      ":b.id_lang"    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $resp = self::$registry->getService('storage')->getResult();
      $data = '';
      
      foreach($resp as $key => $value) {
        $data .= (($key === 0) ? '' : ' ') . html_entity_decode($value->category_name, ENT_QUOTES, "UTF-8");
      }
      return (strlen($data) > 0) ? $data : null;
    }
    return null;
  }
  
  private function __articleAttrValuesLangDataById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              b.value
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_attribute_value_lang b
            ON
              a.id_attribute = b.id_attribute
            AND
              a.id_value = b.id_value";
    $keys = array(
      ":a.id_article" => (int) $articleId,
      ":b.id_lang"    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = '';
      
      foreach(self::$registry->getService('storage')->getResult() as $key => $value) {
        if($key === 0) {
          $data .= ((strlen($data) === 0) ? '' : ' ') . html_entity_decode($value->value, ENT_QUOTES, "UTF-8");
        } else {
          $data .= ' ' . html_entity_decode($value->value, ENT_QUOTES, "UTF-8");
        }
      }
      return (strlen($data) > 0) ? $data : null;
    }
    return null;
  }

  public function valueListByArticleId( $articleId = 0, $filter = null )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_article_attribute
            WHERE
              id_value != 0";
    if(is_array($filter) && (count($filter) > 0)) {
      $qry .= " AND id_attribute IN (".implode(",",$filter).")";
    }
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function recentlyViewedArticleListByUserId( $userId = 0, $langId = 0, $limit = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_viewer_statistics";
    $keys = array(
      ':id_user' => (int) $userId,
      ':id_lang' => (int) $langId
    );
    $filter = "ORDER BY UNIX_TIMESTAMP(created) DESC LIMIT 50";

    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = $this->__ArticleArrayIds(self::$registry->getService('storage')->getResult(), $limit);
      $data   = [];

      foreach($result as $value) {
        $article = $this->articleOnSiteById($value, $langId);

        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return (count($data) > 0) ? $data : null;
    }
    return null;
  }

  private function __ArticleArrayIds( $data = null, $limit = 0 )
  {
    if(is_array($data) && (count($data) > 0)) {
      $ids = [];
      $k   = 1;

      foreach($data as $value) {
        if(!in_array($value->id_article, $ids)) {
          if(((int) $limit > 0) && ($k <= (int) $limit)) {
            $ids[] = (int) $value->id_article;

            $k++;
          }
        }
      }
      return $ids;
    }
    return null;
  }

  public function countCategoryAssigningArticle( $categoryId = 0, $useList = null )
  {
     $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_article_category";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ":id_category" => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }

  public function countAttributeAssigningArticle( $attrId = 0, $useList = null )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_article_attribute";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':id_attribute' => (int) $attrId,
      ':id_value'     => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }

  public function countAttributeValueAssigningArticleByAttrVIds( $attrId = 0, $attrVIds = null, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    if((is_array($attrVIds) && (count($attrVIds) > 0)) && $this->isAttributeValueById(0, $manufacturerId)) {
      return $this->__countAttrVAAByAttrVIdsV2(
        $attrId,
        $attrVIds,
        $langId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
    }
    if(is_array($attrVIds) && (count($attrVIds) > 0)) {
      return $this->__countAttrVAAByAttrVIdsV1(
        $attrId,
        $attrVIds,
        $langId,
        $priceFrom,
        $priceUpTo
      );
    }
    return 0;
  }
  
  private function __countAttrVAAByAttrVIdsV1( $attrId = 0, $attrVIds = null, $langId = 0, $priceFrom = 0, $priceUpTo = 0 )
  {
    $qry = "SELECT
              (count(a.id_article)) as avx
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article
            AND
              b.enabled = 1
            INNER JOIN
              app_store_article_lang c
            ON
              a.id_article = c.id_article";
    if(is_array($attrVIds) && (count($attrVIds) > 0)) {
      $qry .= " WHERE a.id_value IN (".implode(',',$attrVIds).")";
    }
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':a.id_attribute' => (int) $attrId,
      ':c.id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  private function __countAttrVAAByAttrVIdsV2( $attrId = 0, $attrVIds = null, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    $qry = "SELECT
              (count(a.id_article)) as avx
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_attribute b
            ON
              a.id_article = b.id_article
            AND
              b.id_attribute = ".(int) $attrId."
            AND
              b.id_value IN (".implode(',',$attrVIds).")
            INNER JOIN
              app_store_article_attribute c
            ON
              a.id_article = c.id_article
            AND
              c.id_value = ".(int) $manufacturerId."
            INNER JOIN
              app_store_article_lang d
            ON
              a.id_article = d.id_article
            WHERE 
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo, true);
    }
    $keys = array(
      ':d.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function countAttributeValueAssigningArticle( $attrId = 0, $attrVId = 0, $useList = null )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_article_attribute";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':id_attribute' => (int) $attrId,
      ':id_value'     => (int) $attrVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }

  public function totalAttrVAssigningArticleOnSiteById( $attrId = 0, $attrVId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    if($this->isAttributeValueById($attrId, $attrVId) && $this->isAttributeValueById(0, $manufacturerId)) {
      return $this->__countAttrVAAV2(
        $attrId,
        $attrVId,
        $langId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
    }
    if($this->isAttributeValueById($attrId, $attrVId)) {
      return $this->__countAttrVAAV1(
        $attrId,
        $attrVId,
        $langId,
        $priceFrom,
        $priceUpTo
      );
    }
    return 0;
  }
  
  private function __countAttrVAAV1( $attrId = 0, $attrVId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0 )
  {
    $qry = "SELECT
              (count(a.id_article)) as avx
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_article_attribute c
            ON
              a.id_article = c.id_article
            AND
              c.id_attribute = ".(int) $attrId."
            AND
              c.id_value = ".(int) $attrVId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo, true);
    }      
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  private function __countAttrVAAV2( $attrId = 0, $attrVId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    $qry = "SELECT
              (count(a.id_article)) as avx
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_article_attribute c
            ON
              a.id_article = c.id_article
            AND
              c.id_attribute = ".(int) $attrId."
            AND
              c.id_value = ".(int) $attrVId."
            INNER JOIN
              app_store_article_attribute d
            ON
              a.id_article = d.id_article
            AND
              d.id_value = ".(int) $manufacturerId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo, true);
    }      
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function totalOrderALCLByCategoryId( $categoryId = 0 )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_article_category
            WHERE
              position != 0";
    $keys = array(
      ':id_category' => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function totalNotOrderALCLByCategoryId( $categoryId = 0 )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_article_category
            WHERE
              position = 0";
    $keys = array(
      ':id_category' => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function numberOfLastOrderALCLByCategoryId( $categoryId = 0 )
  {
    $qry = "SELECT
              position
            FROM
              app_store_article_category
            WHERE
              position != 0";
    $keys = array(
      ':id_category' => (int) $categoryId
    );
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position : 0;
  }
	
  public function articleListByCategoryId( $categoryId = 0, $useList = null, $pagination = false )
  {
    $orderCAAL = $this->__orderArticleListByCategoryId(
      $categoryId, 
      $useList, 
      $pagination
    );
    $notOrderCAAL = $this->__notOrderArticleListByCategoryId(
      $categoryId, 
      $useList, 
      $pagination
    );
    if((is_array($orderCAAL) && (count($orderCAAL) > 0)) &&
      (is_array($notOrderCAAL) && (count($notOrderCAAL) > 0)) 
    ) {
      return array_merge($orderCAAL, $notOrderCAAL);
    }
    if((is_array($orderCAAL) && (count($orderCAAL) > 0)) && is_null($notOrderCAAL)) {
      return $orderCAAL;
    }
    if((is_array($notOrderCAAL) && (count($notOrderCAAL) > 0)) && is_null($orderCAAL)) {
      return $notOrderCAAL;
    }
    return null;
  }
  
  private function __orderArticleListByCategoryId( $categoryId = 0, $useList = null, $pagination = false )
  {
    $qry = "SELECT
              a.id_article, a.id_image, a.id_gallery, 
              a.sku, a.article_name_internal, b.position
            FROM
              app_store_article a,
              app_store_article_category b
            WHERE
              a.id_article = b.id_article
            AND
              b.position != 0";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " AND a.id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':b.id_category' => (int) $categoryId
    );
    $filter = "ORDER BY b.position ASC";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        
        unset($data[ $key ]->id_image);
      }
      return $data;
    }
    return null;
  }
  
  private function __notOrderArticleListByCategoryId( $categoryId = 0, $useList = null, $pagination = false )
  {
    $qry = "SELECT
              a.id_article, a.id_image, a.id_gallery, 
              a.sku, a.article_name_internal, b.position
            FROM
              app_store_article a,
              app_store_article_category b
            WHERE
              a.id_article = b.id_article
            AND
              b.position = 0";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " AND a.id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':b.id_category' => (int) $categoryId
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        
        unset($data[ $key ]->id_image);
      }
      return $data;
    }
    return null;
  }
  
  public function articleListByAttributeId( $attrId = 0, $useList = null, $pagination = false )
  {
    $qry = "SELECT
              a.id_article, a.id_image, a.id_gallery, a.sku, a.article_name_internal
            FROM
              app_store_article a,
              app_store_article_attribute b
            WHERE
              a.id_article = b.id_article";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " AND a.id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ":b.id_attribute" => (int) $attrId,
      ":b.id_value"     => 0
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        
        unset($data[ $key ]->id_image);
      }
      return $data;
    }
    return null;
  }
  
  public function articleListByAttributeValueId( $attributeId = 0, $valueId = 0, $useList = null, $pagination = false )
  {
    $qry = "SELECT
              a.id_article, a.id_image, a.id_gallery, a.sku, a.article_name_internal
            FROM
              app_store_article a,
              app_store_article_attribute b
            WHERE
              a.id_article = b.id_article";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " AND a.id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ":b.id_attribute" => (int) $attributeId,
      ":b.id_value"     => (int) $valueId
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        
        unset($data[ $key ]->id_image);
      }
      return $data;
    }
    return null;
  }
  
  public function articleByRelatedArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              id_article, id_image, id_gallery, sku, article_name_internal
            FROM
              app_store_article";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->image = ((int) $data->id_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_image ) : (((int) $data->id_gallery > 0) ? $this->__getMainImageFromGallery( $data->id_gallery ) : null);
        
      unset($data->id_image);
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function articleByAlternativeArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              id_article, id_image, id_gallery, sku, article_name_internal
            FROM
              app_store_article";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->image = ((int) $data->id_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_image ) : (((int) $data->id_gallery > 0) ? $this->__getMainImageFromGallery( $data->id_gallery ) : null);
        
      unset($data->id_image);
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function articleListOnSiteByCatId( $categoryId = 0, $collection = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    if((int) $sortRuleId === 0) {
      return $this->__defaultOrderArticleListOnSiteByCatId(
        $categoryId, 
        $collection, 
        $langId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        $pagination    
      );
    }
    return $this->__clientSortArticleListOnSiteByCategoryId(
      $categoryId, 
      $collection, 
      $langId,
      $sortRuleId,
      $priceFrom,
      $priceUpTo,
      $manufacturerId,
      $pagination    
    );
  }
  
  private function __defaultOrderArticleListOnSiteByCatId( $categoryId = 0, $collection = null, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $orderCAL = $this->__orderArticleListOnSiteByCategoryId(
      $categoryId, 
      $collection, 
      $langId,
      $priceFrom,
      $priceUpTo,
      $manufacturerId,
      $pagination
    );
    $notOrderCAL = $this->__notOrderArticleListOnSiteByCategoryId(
      $categoryId, 
      $collection, 
      $langId,
      $priceFrom,
      $priceUpTo,
      $manufacturerId,
      $pagination
    );
    if((is_array($orderCAL) && (count($orderCAL) > 0)) &&
      (is_array($notOrderCAL) && (count($notOrderCAL) > 0)) 
    ) {
      return array_merge($orderCAL, $notOrderCAL);
    }
    if((is_array($orderCAL) && (count($orderCAL) > 0)) && is_null($notOrderCAL)) {
      return $orderCAL;
    }
    if((is_array($notOrderCAL) && (count($notOrderCAL) > 0)) && is_null($orderCAL)) {
      return $notOrderCAL;
    }
    return null;
  }
  
  private function __orderArticleListOnSiteByCategoryId( $categoryId = 0, $collection = null, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $mAIDs = (((int) $manufacturerId > 0) && $this->isAttributeValueById(0, $manufacturerId)) ? $this->__setCatAIdsByManufacturerId( $manufacturerId ): null;
    $qry = "SELECT
              b.id_article
            FROM
              app_store_article_category a,
              app_store_article b,
              app_store_article_lang c
            WHERE
              a.position != 0
            AND
              b.id_article = a.id_article
            AND
              b.id_article = c.id_article";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setCatArticleListPriceRange($priceFrom, $priceUpTo);
    }
    if(is_array($mAIDs) && count($mAIDs) > 0) {
      $qry .= " AND b.id_article IN (".implode(",",$mAIDs).")";
    }
    if(is_array($collection) && count($collection) > 0) {
      $qry .= " AND a.id_category IN (".implode(",",$collection).")";
    }
    $keys = array(
      ':a.id_category' => (int) $categoryId,
      ':b.enabled'     => 1,
      ':c.id_lang'     => (int) $langId
    );
    $filter = "ORDER BY b.position ASC";

    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = ((bool) $this->__articlePublishAndStockAvailibilityManage( $value->id_article ) === true) ? $this->articleOnSiteById($value->id_article, $langId, self::KIND_CATEGORY, $categoryId) : null;
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __notOrderArticleListOnSiteByCategoryId( $categoryId = 0, $collection = null, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $mAIDs = (((int) $manufacturerId > 0) && $this->isAttributeValueById(0, $manufacturerId)) ? $this->__setCatAIdsByManufacturerId( $manufacturerId ): null;
    $qry = "SELECT
              b.id_article
            FROM
              app_store_article_category a,
              app_store_article b,
              app_store_article_lang c
            WHERE
              a.position = 0
            AND
              b.id_article = a.id_article
            AND
              b.id_article = c.id_article";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setCatArticleListPriceRange($priceFrom, $priceUpTo);
    }
    if(is_array($mAIDs) && count($mAIDs) > 0) {
      $qry .= " AND b.id_article IN (".implode(",",$mAIDs).")";
    }
    if(is_array($collection) && count($collection) > 0) {
      $qry .= " AND a.id_category IN (".implode(",",$collection).")";
    }
    $keys = array(
      ':a.id_category' => (int) $categoryId,
      ':b.enabled'     => 1,
      ':c.id_lang'     => (int) $langId
    );
    $filter = $this->__sortRuleByCategory($categoryId, 0);

    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = ((bool) $this->__articlePublishAndStockAvailibilityManage( $value->id_article ) === true) ? $this->articleOnSiteById($value->id_article, $langId, self::KIND_CATEGORY, $categoryId) : null;
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __clientSortArticleListOnSiteByCategoryId( $categoryId = 0, $collection = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $mAIDs = (((int) $manufacturerId > 0) && $this->isAttributeValueById(0, $manufacturerId)) ? $this->__setCatAIdsByManufacturerId( $manufacturerId ): null;
    $qry = "SELECT
              b.id_article
            FROM
              app_store_article_category a,
              app_store_article b,
              app_store_article_lang c
            WHERE
              b.id_article = a.id_article
            AND
              b.id_article = c.id_article";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setCatArticleListPriceRange($priceFrom, $priceUpTo);
    }
    if(is_array($mAIDs) && count($mAIDs) > 0) {
      $qry .= " AND b.id_article IN (".implode(",",$mAIDs).")";
    }
    if(is_array($collection) && count($collection) > 0) {
      $qry .= " AND a.id_category IN (".implode(",",$collection).")";
    }
    $keys = array(
      ':a.id_category' => (int) $categoryId,
      ':b.enabled'     => 1,
      ':c.id_lang'     => (int) $langId
    );
    $filter = $this->__sortRuleByCategory($categoryId, $sortRuleId);

    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = ((bool) $this->__articlePublishAndStockAvailibilityManage( $value->id_article ) === true) ? $this->articleOnSiteById($value->id_article, $langId, self::KIND_CATEGORY, $categoryId) : null;
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __setCatArticleListPriceRange( $priceFrom = 0, $priceUpTo = 0 )
  {
    if(((float) $priceFrom > 0) && ((int) $priceUpTo === 0)) {
      return ' AND b.retail_tax_price > '.(float) $priceFrom;
    }
    if(((int) $priceFrom === 0) && ((float) $priceUpTo > 0)) {
      return ' AND b.retail_tax_price < '.(float) $priceUpTo;
    }
    if(((float) $priceFrom > 0) && ((float) $priceUpTo > 0)) {
      return ' AND b.retail_tax_price BETWEEN '.(float) $priceFrom.' AND '.(float) $priceUpTo;
    }
    return null;
  }
  
  private function __setCatAIdsByManufacturerId( $manufacturerId = 0, $categoryId = 0 )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_article_category b
            ON
              a.id_article = b.id_article";
    $keys = array(
      ':a.id_value'    => (int) $manufacturerId,
      ':b.id_category' => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[] = (int) $value->id_article;
      }
      return $data;
    }
    return null;
  }
  
  private function __sortRuleByCategory( $categoryId = 0, $sortRuleId = 0 )
  {
    if((int) $sortRuleId === 0) {
      $qry1 = "SELECT
                id_type
              FROM
                app_store_ordering_rule";
      $keys1 = array(
        ':id_section' => 1,
        ':id_s_value' => (int) $categoryId,
        ':is_default' => 0,
        ':enabled'    => 1
      );
      self::$registry->getService('storage')->executeQuery($qry1, $keys1);

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = self::$registry->getService('storage')->getResult()[0];
      } else {
        $qry2 = "SELECT
                  id_type
                FROM
                  app_store_ordering_rule";
        $keys2 = array(
          ':id_section' => 1,
          ':is_default' => 1,
          ':enabled' => 1
        );
        self::$registry->getService('storage')->executeQuery($qry2, $keys2);

        if(self::$registry->getService('storage')->rowCount() > 0) {
          $data = self::$registry->getService('storage')->getResult()[0];
        }
      }
    }
    $ruleId = (((int) $sortRuleId > 0) && ((int) $sortRuleId < 17)) ? (int) $sortRuleId : ((isset($data) && is_object($data)) ? (int) $data->id_type : 0);

    switch($ruleId) {
      case 1:
        return "ORDER BY c.article_name ASC";
      case 2:
        return "ORDER BY c.article_name DESC";
      case 3:
        return "ORDER BY b.retail_tax_price ASC";
      case 4:
        return "ORDER BY b.retail_tax_price DESC";
      case 5:
        return "ORDER BY b.created ASC";
      case 6:
        return "ORDER BY b.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(b.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(b.upd_date) DESC";
      case 9:
        return null;
      case 10:
        return null;
      case 11:
        return null;
      case 12:
        return null;
      case 13:
        return null;
      case 14:
        return null;
      case 15:
        return null;
      case 16:
        return null;
      default:
        return null;
    }
  }
  
  private function __articleManufacturerById( $articleId = 0, $attrId = 0, $langId = 0 )
  {
    $qry = "SELECT
              (b.id_value) as id,(b.value) as name, b.id_route
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_attribute_value_lang b
            ON
              a.id_attribute = b.id_attribute
            AND
              a.id_value = b.id_value";
    $keys = array(
      ":a.id_article"   => (int) $articleId,
      ":a.id_attribute" => (int) $attrId,
      ":b.id_lang"      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data         = self::$registry->getService('storage')->getResult()[0];
      $data->name   = html_entity_decode($data->name, ENT_QUOTES, "UTF-8");
      $data->prefix = self::$registry->getService('store')->attributeTreeByAVId((int) $data->id);
      $data->path   = ((int) $data->id_route !== 0) ? self::$registry->getService('router')->routeById( $data->id_route )->path : null;

      return $data;
    }
    return null;
  }
  
  public function articleListOnSiteByAttr( $rAttrId = 0, $collection = null, $pagination = false, $langId = 0 )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a,
              app_store_article_attribute b,
              app_store_article_lang c,
              app_store_currency d
            WHERE
              b.id_article = a.id_article
            AND
              a.id_article = c.id_article
            AND
              a.id_currency = d.id_currency";
    $keys = array(
      ":a.enabled"      => 1,
      ":b.id_attribute" => (int) $rAttrId,
      ":c.id_lang"      => (int) $langId
    );
    if(is_array($collection) && count($collection) > 0) {
      $qry .= " AND b.id_value IN (".implode(",",$collection).")";
    }
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[] = $this->articleOnSiteById($value->id_article, $langId);
      }
      return $data;
    }
    return null;
  }
  
  public function articleIdByGalleryId( $galleryId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_article : 0;
  }
  
  public function articleIdByExtId( $extId = null )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ':id_ext_article' => $extId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_article : 0;
  }
  
  public function articleQtyById( $articleId = 0 )
  {
    $qry = "SELECT
              qty
            FROM
              app_store_article";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->qty : 0;
  }
  
  public function articleLastPosition()
  {
    $qry = "SELECT
              position
            FROM
              app_store_article";
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position + 1 : 1;
  }
  
  public function haveArticleGalleryById( $galleryId = 0 )
  {
    $qry = "SELECT
              id_gallery
            FROM
              app_store_article";
    $keys = array(
      ':id_gallery' => (int) $galleryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveArticleCategoryById( $articleId = 0, $categoryId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_category";
    $keys = array(
      ':id_article'  => (int) $articleId,
      ':id_category' => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function haveArticleAttributeById( $articleId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_attribute";
    $keys = array(
      ':id_article'   => (int) $articleId,
      ':id_attribute' => (int) $attrId,
      ':id_value'     => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function haveArticleAttributeValueById( $articleId = 0, $attrId = 0, $attrVId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_attribute";
    $keys = array(
      ':id_article'   => (int) $articleId,
      ':id_attribute' => (int) $attrId,
      ':id_value'     => (int) $attrVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveArticeRouteById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_article' => (int) $articleId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (((int) self::$registry->getService('storage')->getResult()[0]->id_route !== 0) ? true : false) : false;
  }
  
  public function haveArticleLDById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_article' => (int) $articleId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticleById( $articleId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticleByExtId( $extId = null )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ":id_ext_article" => $extId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticleByReference( $reference = '' )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ":reference" => (string) $reference
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticleBySKU( $sku = '' )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article";
    $keys = array(
      ":sku" => (string) $sku
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticleLangById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_article' => (int) $articleId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticlePublishById( $articleId = 0 )
  {
    $qry = "SELECT
              enabled
            FROM
              app_store_article";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (((int) self::$registry->getService('storage')->getResult()[0]->enabled === 1) ? true : false) : false;
    
  }
  
  public function isArticleOnStockAvaibilityById( $articleId = 0 )
  {
    $qry = "SELECT
              on_stock_availability
            FROM
              app_store_article";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (((int) self::$registry->getService('storage')->getResult()[0]->on_stock_availability === 1) ? true : false) : false;
  }
  
  public function isArticleFullTextIndexesById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_full_text_indexes";
    $keys = array(
      ':id_article' => (int) $articleId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAttributeValueInArticleListById( $articleId = 0, $attrId = 0, $valueId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_attribute";
    $keys = array(
      ":id_article"   => (int) $articleId,
      ":id_attribute" => (int) $attrId,
      ":id_value"     => (int) $valueId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  /**
  * ARTICLE PUBLISH AND STOCK AVAILABILITY MANAGE
  *
  * check is product public
  * verification of product availability when stock availability option is on
  *
  * @param (int) (articleId) 
  * @return (bool) (availability)
  **/
  private function __articlePublishAndStockAvailibilityManage( $articleId = 0 )
  {
    $availability = false;
    
    if(((bool) $this->isArticleById( $articleId ) === true) &&
      ((bool) $this->isArticlePublishById( $articleId ) === true)    
    ) {
      $on_stock_availability = $this->isArticleOnStockAvaibilityById( $articleId );
      $is_article_in_wh      = $this->isArticleManageWH( $articleId );
      $id_warehouse          = ((bool) $is_article_in_wh === true) ? $this->warehouseIdByArticleId( $articleId ) : 0;
      $on_warehouse_manage   = false;
      

      // MANAGE WAREHOUSE
      if(((bool) $is_article_in_wh === true) && ((bool) $this->isWarehouseById( $id_warehouse ) === true)) {
        $on_warehouse_manage = true;
      }  
      // [ 0_1 ] STOCK AVAILABILITY (OFF) | WAREHOUSE MANAGE (ON)
      if(((bool) $on_stock_availability === false) && ((bool) $on_warehouse_manage === true)) {
        $availability = ((bool) $this->isWHArticlePublishById($id_warehouse, $articleId) === true) ? true : false;
      }

      // [ 1_1 ] STOCK AVAILABILITY (ON) | WAREHOUSE MANAGE (ON)
      if(((bool) $on_stock_availability === true) && ((bool) $on_warehouse_manage === true)) {
        $qty = $this->warehouseQtyByWAId($id_warehouse, $articleId);

        if((int) $qty > 0) {
          $availability = ((bool) $this->isWHArticlePublishById($id_warehouse, $articleId) === true) ? true : false;
        }
      }
      // [ 0_0 ] STOCK AVAILABILITY (OFF) | WAREHOUSE MANAGE (OFF)
      if(((bool) $on_stock_availability === false) && ((bool) $on_warehouse_manage === false)) {
        $availability = true;
      }
      // [ 1_0 ] STOCK AVAILABILITY (ON) | WAREHOUSE MANAGE (OFF)
      if(((bool) $on_stock_availability === true) && ((bool) $on_warehouse_manage === false)) {
        $qty = $this->articleQtyById( $articleId );

        if((int) $qty > 0) {
          $availability = true;
        }
      }
    }
    return $availability;
  }
  
  public function deleteArticleById( $articleId = 0 )
  {
    $status = [];
    // ST 1
    $status[] = $this->__deleteArticleRoutesById( $articleId );
    // ST 2
    $status[] = self::$registry->getService('storage')->delete( 'app_store_article', ':id_article' , (int) $articleId );
    // ST 3
    $status[] = self::$registry->getService('storage')->delete( 'app_store_article_lang', ':id_article' , (int) $articleId );
    // ST 4
    $status[] = self::$registry->getService('storage')->delete( 'app_store_article_category', ':id_article' , (int) $articleId );
    // ST 5
    $status[] = self::$registry->getService('storage')->delete( 'app_store_article_attribute', ':id_article' , (int) $articleId );
    // ST 6
    $status[] = self::$registry->getService('storage')->delete( 'app_store_article_full_text_indexes', ':id_article' , (int) $articleId );
    // ST 7
    $status[] = self::$registry->getService('storage')->delete( 'app_store_article_viewer_statistics', ':id_article' , (int) $articleId );
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  private function __deleteArticleRoutesById( $articleId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_article_lang
            WHERE
              id_route != 0";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $status = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $status[] = self::$registry->getService('irouter')->deleteRouteById( $value->id_route );
      }
      return self::$registry->getService('helper')->checkStatus($status);
    }
    return true;
  }
  
  public function deleteArticleLangById( $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_lang', ':id_article' , (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteArticleStatusById( $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_status', ':id_article' , (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteArticleCategoryById( $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_category', ':id_article' , (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteArticleFromCategoryById( $articleId = 0, $categoryId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_category', array(':id_article' => (int) $articleId, ':id_category' => (int) $categoryId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteArticleAttributeById( $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_attribute', ':id_article' , (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }

  public function deleteArticleFromAttributeById( $articleId = 0, $attrId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_attribute', array(':id_article' => (int) $articleId, ':id_attribute' => (int) $attrId, ':id_value' => 0) );

    return self::$registry->getService('storage')->executed();
  }

  public function deleteArticleFromAttributeValueById( $articleId = 0, $attrId = 0, $attrVId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_attribute', array(':id_article' => (int) $articleId, ':id_attribute' => (int) $attrId, ':id_value' => (int) $attrVId) );

    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteArticleRelatedArticleById( $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_related_article', ':id_article' , (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAlternativeArticleListById( $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_alternative_article', ':id_article' , (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteArticleImageById( $articleId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article', array('id_image' => 0), ' id_article = '. (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteGalleryById( $galleryId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_article', array('id_gallery' => 0), ' id_gallery = '. (int) $galleryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  private function __haveSupportLanguageArticle( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_article)
              FROM   
                  app_store_article
              ) AS avx,
              (
              SELECT 
                  count(id_article)
              FROM   
                  app_store_article_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ( (int) $data->avx === (int) $data->avs ) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguageArticle()
  {
    $qry = "SELECT
              *
            FROM
            (
            SELECT
              id_lang, count(id_lang) as avx
            FROM
              app_store_article_lang
            GROUP BY
              id_lang
            ) as result
            ORDER BY
              avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  /*************************************************************************************************************************************************************
  * 
  * FRONT METHOD
  * 
  *************************************************************************************************************************************************************/
  
  public function articleObjByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              id_article, id_lang
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data   = self::$registry->getService('storage')->getResult()[0];
      $langId = self::$registry->getService('languages')->getCurrentLanguage();
      
      if((int) $data->id_lang === $langId) { 
        $route      = self::$registry->getService('router')->routeById( $routeId );
        $data->path = (is_object($route) && isset($route->path)) ? $route->path : '';
      } else {
        $redirect_path = $this->articlePathById(
          $data->id_article,
          $langId     
        );
        $data->redirect_path = (strlen($redirect_path) > 0) ? $redirect_path : '';
      }
      return $data;
    }
    return null;
  }
  
  public function articlePathById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_article_lang";
    $keys = array(
      ':id_article' => (int) $articleId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data  = self::$registry->getService('storage')->getResult()[0];
      $route = ((int) $data->id_route !== 0) ? self::$registry->getService('router')->routeById( $data->id_route ) : null;
      
      return (is_object($route)) ? $route->path : null;
    }
    return null;
  }
  
  public function articleBreadcrumbById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT
              *
            FROM
              (
                SELECT
                  a.id_category, b.bc_position
                FROM
                  app_nav_items a
                INNER JOIN
                  app_store_article_category b
                ON
                  a.id_category = b.id_category
                AND
                  b.id_article = ".(int) $articleId."
                WHERE
                  a.id_category != 0
                GROUP BY
                  id_category
              ) as result
            ORDER BY
              result.bc_position ASC";
    self::$registry->getService('storage')->executeQuery( $qry );
		
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $category = $this->categoryById( $value->id_category );
        
        if(is_object($category)) {
          $data[] = (object) array(
            'id_category'   => (int) $category->id_category,
            'category_name' => $category->lang[ $langId ]->category_name,
            'path'          => $this->categoryPathById($category->id_category, $langId),
            'image'         => $category->lang[ $langId ]->image,
            'color'         => $category->lang[ $langId ]->color
          );
        }
      }
      return $data;
    }
    return null;
  }
  
  public function articleOnSiteById( $articleId = 0, $langId = 0, $kind = self::KIND_ARTICLE, $sectionId = 0 )
  {
    if(((bool) $this->isArticleById( $articleId ) === true) &&
      ((bool) $this->haveArticleLDById($articleId, $langId) === true) 
    ) {
        $mWH  = $this->isArticleManageWH( $articleId );
        $whId = ((bool) $mWH === true) ? $this->warehouseIdByArticleId( $articleId ) : 0;
        $qId  = ((bool) $mWH === true) ? 2 : 1;
        $qry  = $this->__articleQRYById( $qId );
        $cc   = (((bool) $mWH === true) && ((bool) $this->isWarehouseById( $whId ) === true)) ? true : false;
        
        if(!is_null($qry) && ((((bool) $mWH === true) && ((bool) $cc === true)) || ((bool) $mWH === false))) {
          $keys = array(
            ':a.id_article' => (int) $articleId,
            ':b.id_lang'    => (int) $langId
          );
          if((bool) $cc === true) {
            $keys[':c.id_wh'] = (int) $whId;
          }
          self::$registry->getService('storage')->executeQuery( $qry, $keys );
          
          if(self::$registry->getService('storage')->rowCount() > 0) {
            $data = self::$registry->getService('storage')->getResult()[0];
            
            if((bool) $this->__articlePublishAndStockAvailibilityManage( $articleId ) === true) 
            {
              // DISCOUNT
              $discount   = $this->articleDiscountByArticleId($data->id_article, $data->retail_tax_price);
              $isDiscount = (is_object($discount)) ? true : false;
              // SET VALUES
              $data->width                    = round((float) $data->width, 2);
              $data->height                   = round((float) $data->height, 2);
              $data->depth                    = round((float) $data->depth, 2);
              $data->rent_tax_price           = self::$registry->getService('helper')->money_format( $data->rent_tax_price );
              $data->former_price             = self::$registry->getService('helper')->money_format( $data->retail_tax_price );
              $data->is_discount              = $isDiscount;
              $data->discount                 = ((bool) $isDiscount === true) ? $discount->discount : 0.00;
              $data->discount_percent         = ((bool) $isDiscount === true) ? round(((100 * $discount->discount) / ((float) $data->retail_tax_price + (((float) $data->recommended_retail_price > 0) ? ((float) $data->recommended_retail_price - (float) $data->retail_tax_price) : (float) $data->retail_tax_price))), 0) : ((float) $data->recommended_retail_price - (float) $data->retail_tax_price);
              $data->retail_price             = self::$registry->getService('helper')->money_format( $data->retail_price );
              $data->retail_tax_price         = ((bool) $isDiscount === true) ? $discount->discount_price : self::$registry->getService('helper')->money_format( $data->retail_tax_price );
              $data->recommended_retail_price = self::$registry->getService('helper')->money_format( $data->recommended_retail_price );
              $data->manufacturer             = $this->__articleManufacturerById($data->id_article, 0, $data->id_lang);
              $data->statusList               = $this->statusListByArticleId($data->id_article, $langId);
              $data->image                    = (((int) $data->id_gallery === 0) && ((int) $data->id_image > 0)) ? self::$registry->getService('drive')->fileById( $data->id_image ) : (((int) $data->id_gallery > 0) ? $this->__getMainImageFromGallery($data->id_gallery, true, $kind, $sectionId) : null);
              $data->gallery                  = ((int) $data->id_gallery > 0) ? self::$registry->getService('gallery')->galleryById($data->id_gallery, true, $kind, $sectionId) : null;
              $data->path                     = $this->articlePathById($articleId, $langId);
              $data->relatedArticles          = $this->__relatedArticleListById($data->id_article, $data->id_lang);
              $data->alternativeArticles      = $this->__alternativeArticleListById($data->id_article, $data->id_lang);
              $data->attrValueList            = $this->__articleAttrValueListById($data->id_article, $data->id_lang, true);
              $data->matrix                   = ((bool) $cc === true) ? $this->whMatrixArticleDataById($whId, $articleId) : null;
              $data->expedition_time          = ((bool) $cc === true) ? $this->whExpeditionTimeToArticleById($whId, $articleId) : null;

              return $data;
            }
            return null;
          }
          return null;
        }
        return null;
    }
    return null;
  }
  
  private function __articleQRYById( $qId = 0 )
  {
    switch((int) $qId) {
      case 1:
        return "SELECT
                  a.id_article, a.id_ext_article, a.id_image, a.id_gallery, b.id_lang, a.reference, a.sku,
                  a.on_stock_availability, a.min_qty_in_cart, a.max_qty_in_cart, a.qty, a.default_purchase_amount, 
                  a.recommended_retail_price, a.retail_price, a.retail_tax_price, a.rent_tax_price, 
                  a.rent_number, a.rent_unit, a.expedition_number_value, a.expedition_unit_time, a.width,
                  a.height, a.depth, a.unit, b.article_name,  b.description, b.site_title, b.meta_keywords, 
                  b.meta_robot, b.meta_description, b.html_content, d.currency_name, d.iso_code, d.sign, 
                  d.blank, d.format, d.decimals, d.conversion_rate
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_lang b
                ON
                  a.id_article = b.id_article
                INNER JOIN
                  app_store_currency d
                ON
                  a.id_currency = d.id_currency";
      case 2:
        return "SELECT
                  a.id_article, a.id_ext_article, a.id_image, a.id_gallery, b.id_lang, a.reference, a.sku,
                  a.on_stock_availability, a.min_qty_in_cart, a.max_qty_in_cart, c.qty, a.default_purchase_amount, 
                  a.recommended_retail_price, d.former_price, d.retail_price, d.retail_tax_price, a.rent_tax_price, 
                  a.rent_number, a.rent_unit, a.expedition_number_value, a.expedition_unit_time, a.width,
                  a.height, a.depth, a.unit, b.article_name, b.description, b.site_title, b.meta_keywords, b.meta_robot, 
                  b.meta_description, b.html_content, f.currency_name, f.iso_code, f.sign, f.blank, f.format, 
                  f.decimals, f.conversion_rate
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_lang b
                ON
                  a.id_article = b.id_article
                INNER JOIN
                  app_store_warehouse_al c
                ON
                  a.id_article = c.id_article
                AND
                  c.enabled = 1
                INNER JOIN
                  app_store_warehouse_al_relation d
                ON
                  a.id_article = d.id_article
                AND
                  c.id_rel = d.id_rel
                INNER JOIN
                  app_store_warehouse e
                ON
                  c.id_wh = e.id_wh
                INNER JOIN
                  app_store_currency f
                ON
                  e.id_currency = f.id_currency";
      default:
        return null;
    }
  }
  
  private function __relatedArticleListById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT 
              id_related_article
            FROM
              app_store_article_related_article";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) 
      {
        if((int) $value->id_related_article !== (int) $articleId) 
        {
          $article = $this->articleOnSiteById($value->id_related_article, $langId);

          if(is_object($article)) 
          {
            $data[] = $article;
          }
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __alternativeArticleListById( $articleId = 0, $langId = 0 )
  {
    $qry = "SELECT 
              id_alternative_article
            FROM
              app_store_article_alternative_article";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) 
      {
        if((int) $value->id_alternative_article !== (int) $articleId) 
        {
          $article = $this->articleOnSiteById($value->id_alternative_article, $langId);

          if(is_object($article)) 
          {
            $data[] = $article;
          }
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __articleAttrValueListById( $articleId = 0, $langId = 0, $publish = false )
  {
    $qry = "SELECT
              a.id_attribute, a.id_value, e.id_route,
              (d.attribute_name_public) as attr_name, 
              (e.value) as attr_v_name
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_attribute_value b
            ON
              a.id_value = b.id_value
            INNER JOIN
              app_store_attribute c
            ON
              b.id_attribute = c.id_attribute
            INNER JOIN
              app_store_attribute_lang d
            ON
              a.id_attribute = d.id_attribute
            INNER JOIN
              app_store_attribute_value_lang e
            ON
              a.id_attribute = e.id_attribute
            AND
              a.id_value = e.id_value";
    $keys = array(
      ':a.id_article' => (int) $articleId,
      ':d.id_lang'    => (int) $langId,
      ':e.id_lang'    => (int) $langId
    );
    if((bool) $publish === true) {
      $keys[':c.active'] = 1;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $route = ((int) $value->id_route > 0) ? self::$registry->getService('router')->routeById( $value->id_route ) : null;
                
        $data[ $key ]->path = (is_object($route)) ? $route->path : null;
      }
      return $data;
    }
    return null;
  }

  public function articleListCountOnSiteByCatId( $categoryId = 0, $collection = null, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    $mAIDs = (((int) $manufacturerId > 0) && $this->isAttributeValueById(0, $manufacturerId)) ? : null;
    $qry = "SELECT
              b.id_article
            FROM
              app_store_category a
            INNER JOIN
              app_store_article_category b
            ON
              a.id_category = b.id_category
            INNER JOIN
              app_store_article_lang c
            ON
              b.id_article = c.id_article";
    $keys = array(
      ':a.active'      => 1,
      ':a.id_category' => (int) $categoryId,
      ':c.id_lang'     => (int) $langId
    );
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setCatArticleListPriceRange($priceFrom, $priceUpTo);
    }
    if(is_array($collection) && count($collection) > 0) {
      $qry .= " AND a.id_category IN (".implode(",",$collection).")";
    }
    if(is_array($mAIDs) && count($mAIDs) > 0) {
      $qry .= " AND b.id_article IN (".implode(",",$mAIDs).")";
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $article) {
        if((bool) $this->__articlePublishAndStockAvailibilityManage( $article->id_article ) === true) {
          $data[] = (int) $article->id_article;
        }
      }
      return count($data);
    }
    return null;
  }
  
  private function __orderingRuleByAttr( $attrId = 0 )
  {
    $qry1 = "SELECT
              id_type
            FROM
              app_store_ordering_rule";
    $keys1 = array(
      ':id_section' => 2,
      ':id_s_value' => (int) $attrId,
      ':is_default' => 0,
      ':enabled'    => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
    } else {
      $qry2 = "SELECT
              id_type
            FROM
              app_store_ordering_rule";
      $keys2 = array(
        ':id_section' => 2,
        ':is_default' => 1,
        ':enabled'    => 1
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = self::$registry->getService('storage')->getResult()[0];
      }
    }
    switch((isset($data) && count($data) > 0) ? (int) $data->id_type : 0) {
      case 1:
        return "ORDER BY b.article_name ASC";
      case 2:
        return "ORDER BY b.article_name DESC";
      case 3:
        return "ORDER BY a.retail_tax_price ASC";
      case 4:
        return "ORDER BY a.retail_tax_price DESC";
      case 5:
        return "ORDER BY a.created ASC";
      case 6:
        return "ORDER BY a.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) DESC";
      case 9:
        return null;
      case 10:
        return null;
      case 11:
        return null;
      case 12:
        return null;
      case 13:
        return null;
      case 14:
        return null;
      case 15:
        return null;
      case 16:
        return null;
      default:
        return null;
    }
  }
  
  private function __orderingRuleByAttrValue( $attrVId = 0 )
  {
    $qry1 = "SELECT
              id_type
            FROM
              app_store_ordering_rule";
    $keys1 = array(
      ':id_section' => 3,
      ':id_s_value' => (int) $attrVId,
      ':is_default' => 0,
      ':enabled'    => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
    } else {
      $qry2 = "SELECT
              id_type
            FROM
              app_store_ordering_rule";
      $keys2 = array(
        ':id_section' => 3,
        ':is_default' => 1,
        ':enabled'    => 1
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = self::$registry->getService('storage')->getResult()[0];
      }
    }
    switch((isset($data) && count($data) > 0) ? (int) $data->id_type : 0)
    {
      case 1:
        return "ORDER BY b.article_name ASC";
      case 2:
        return "ORDER BY b.article_name DESC";
      case 3:
        return "ORDER BY a.retail_tax_price ASC";
      case 4:
        return "ORDER BY a.retail_tax_price DESC";
      case 5:
        return "ORDER BY a.created ASC";
      case 6:
        return "ORDER BY a.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) DESC";
      case 9:
        return null;
      case 10:
        return null;
      case 11:
        return null;
      case 12:
        return null;
      case 13:
        return null;
      case 14:
        return null;
      case 15:
        return null;
      case 16:
        return null;
      default:
        return null;
    }
  }
  
  /*********************************************************************************************************
  *
  * CATEGORY
  *
  *********************************************************************************************************/
  
  public function insertCategory( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_category', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertCategoryLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_category_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertCategorySortItem( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_category_sorting', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertCategorySortLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_category_sorting_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateCategoryImageById( $changes = null, $categoryId = 0, $languageId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_category_lang', $changes, ' id_category = '. (int) $categoryId .' AND id_lang = '. (int) $languageId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateCategoryById( $changes = null, $categoryId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_category', $changes, ' id_category = '. (int) $categoryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateCategoryLink( $changes = null, $itemId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_category_sorting', $changes, ' id_item = '. (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateCategoryLangById( $changes = null , $categoryId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_category_lang', $changes, ' id_category = '. (int) $categoryId . ' AND id_lang = '. (int) $langId );
        
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateCategoryRouteById( $routeId = 0, $categoryId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_category_lang', array('id_route' => (int) $routeId), ' id_category = '. (int) $categoryId . ' AND id_lang = '. (int) $langId );
        
    return self::$registry->getService('storage')->executed();
  }
  
  public function categoryById( $categoryId = 0 )
  {
    $qry1 = "SELECT
              id_category, id_parent, is_root_category,
              guest, visitor, customer, active
            FROM
              app_store_category";
    $keys1 = array(
      ":id_category" => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                id_lang, category_name, id_category_image, color, 
                site_title, description, meta_robots, 
                meta_keywords, meta_description, html_content
              FROM
                app_store_category_lang";
      $keys2 = array(
        ":id_category" => (int) $categoryId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data->lang = [];
        
        foreach(self::$registry->getService('storage')->getResult() as $value) {
          $data->lang[ $value->id_lang ] = $value;
          $data->lang[ $value->id_lang ]->image = ((int) $value->id_category_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_category_image ) : null;
        }
      }
      return $data;
    }
    return null;
  }
  
  public function categoryObjByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              id_category, id_lang
            FROM
              app_store_category_lang";
    $keys = array(
      ':id_route' => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data   = self::$registry->getService('storage')->getResult()[0];
      $langId = self::$registry->getService('languages')->getCurrentLanguage();
      
      if((int) $data->id_lang === $langId) { 
        $route      = self::$registry->getService('router')->routeById( $routeId );
        $data->path = (is_object($route) && isset($route->path)) ? $route->path : '';
      } else {
        $redirect_path = $this->categoryPathById(
          $data->id_category,
          $langId     
        );
        $data->redirect_path = (strlen($redirect_path) > 0) ? $redirect_path : '';
      }
      return $data;
    }
    return null;
  }
  
  public function categoryPathById( $categoryId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_category_lang";
    $keys = array(
      ':id_category' => (int) $categoryId,
      ':id_lang'     => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ((int) $data->id_route !== 0) ? self::$registry->getService('router')->routeById( $data->id_route )->path : null;
    }
    return null;
  }
  
  public function categoryDataForArticleById( $categoryId = 0 )
  {
    $qry = "SELECT
                a.id_category, b.category_name, 
                b.id_category_image, b.description
            FROM
                app_store_category a,
                app_store_category_lang b
            WHERE
                a.id_category = b.id_category";
    $keys = array(
      ":a.id_category" => (int) $categoryId,
      ":b.id_lang"     => ($this->__haveSupportLanguageCategory(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategory()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $data->image = ( (int) $data->id_category_image > 0 ) ? self::$registry->getService('drive')->fileById( $data->id_category_image ) : null;

      unset( $data->id_category_image );
    }
    return (isset($data) && count($data) > 0) ? $data : null;
  }
  
  public function categoryNameById( $categoryId = 0, $languageId = 0 )
  {
    $qry = "SELECT
              category_name
            FROM
              app_store_category_lang";
    $keys = array(
      ":id_category" => (int) $categoryId,
      ":id_lang"     => (self::$registry->getService('languages')->isLangById( $languageId )) ? (int) $languageId : ($this->__haveSupportLanguageCategory(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategory()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->category_name : null;
  }
  
  public function categoryParentIdById( $categoryId = 0 )
  {
    $qry = "SELECT
              id_parent
            FROM
              app_store_category";
    $keys = array(
      ":id_category" => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_parent : null;
  }
  
  public function categoryIdByHash( $categoryId = '' )
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_category_lang";
    $keys = array(
      ":link_rewrite" => (string) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_category : null;
  }
  
  public function categoryList( $pagination = false )
  {
    $qry  = "SELECT
              a.id_category, b.category_name, (a.is_root_category) as root, 
              a.active, b.description, b.id_category_image
            FROM
              app_store_category a
            LEFT JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":b.id_lang" => ($this->__haveSupportLanguageCategory(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategory()
    );
    $filter = "ORDER BY a.position ASC";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $key => $value) {
        $data[ $key ]                       = $value;
        $data[ $key ]->image                = ((int) $value->id_category_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_category_image ) : null;
        $data[ $key ]->count_sub_categories = $this->__countSubCategoryById( $value->id_category );
        $data[ $key ]->count_articles       = $this->countArticlesByCatId( $value->id_category );
      }
      return $data;
    }
    return null;
  }
  
  private function __countSubCategoryById( $categoryId = 0 )
  {
    $qry = "SELECT
              count(id_category) as avx
            FROM
              app_store_category";
    $keys = array(
      ":id_parent" => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function categoryHeadingById( $categoryId = 0 )
  {
    $qry = "SELECT
              id_lang, category_name
            FROM
              app_store_category_lang";
    $keys = array(
      ":id_category" => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    $result = (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
    
    if(!is_null($result)) {
      foreach($result as $key => $value) {
        $result[ $key ]->category_name = html_entity_decode($value->category_name, ENT_QUOTES, 'UTF-8');
      }
    }
    return $result;
  }
  
  public function categoryLastPosition( $catId = 0 )
  {
    $qry = "SELECT
              position
            FROM
              app_store_category";
    $keys = array(
      ':id_parent' => (int) $catId
    );
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position + 1 : 1;
  }
  
  public function categoryParentDataById( $catId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_parent, b.id_route, b.category_name
            FROM
              app_store_category a,
              app_store_category_lang b
            WHERE
              a.id_category = b.id_category";
    $keys = array(
      ":a.id_category" => (int) $catId,
      ":b.id_lang"     => ((int) $langId > 0) ? (int) $langId : (($this->__haveSupportLanguageCategory(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategory())
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->path = ((int) $data->id_route !== 0) ? self::$registry->getService('router')->routeById( $data->id_route )->path : null;
      
      return $data;
    }
    return null;
  }
  
  public function categoriesRootList()
  {
    $qry = "SELECT
              a.id_category, b.category_name
            FROM
              app_store_category a
            LEFT JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":a.is_root_category" => 1,
      ":b.id_lang"          => ($this->__haveSupportLanguageCategory(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategory(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function categoriesSortRootItemsList()
  {
    $qry = "SELECT
              a.id_item, b.link_name
            FROM
              app_store_category_sorting a
            LEFT JOIN
              app_store_category_sorting_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":a.is_root_category" => 1,
      ":b.id_lang"          => ($this->__haveSupportLanguageCategorySort(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategorySort(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function categoriesChildrenListByCatId( $catId = 0 )
  {
    $qry = "SELECT
              a.id_category, b.category_name
            FROM
              app_store_category a
            LEFT JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":a.id_parent"        => (int) $catId,
      ":a.is_root_category" => 0,
      ":b.id_lang"          => ($this->__haveSupportLanguageCategory(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategory(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function categoriesSortChildrenListByCatId( $itemId = 0 )
  {
    $qry = "SELECT
              a.id_item, b.link_name
            FROM
              app_store_category_sorting a
            LEFT JOIN
              app_store_category_sorting_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":a.id_parent"        => (int) $itemId,
      ":a.is_root_category" => 0,
      ":b.id_lang"          => ($this->__haveSupportLanguageCategorySort(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategorySort(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function categorySortDataById( $categoryId = 0 )
  {
    $data = [];
    
    $qry1 = "SELECT
              id_item, id_category, icon, css_id, 
              css_classes, visible
            FROM
              app_store_category_sorting";
    $keys1 = array(
      ":id_category" => (int) $categoryId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                  a.id_lang, a.link_name, b.external_link
                FROM
                  app_store_category_sorting_lang a
                LEFT JOIN
                  app_store_category_lang b
                ON
                  a.id_category = b.id_category
                AND
                  a.id_lang = b.id_lang";
      $keys2 = array(
        ":b.id_category" => (int) $categoryId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      $result = (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
      $langData = [];
      
      if(!is_null($result)) {
       foreach($result as $value) {
         $langData[ $value->id_lang ] = $value;
         
         unset($langData[ $value->id_lang ]->id_lang);
       }
      }      
      $data->item_lang = (!empty($langData)) ? $langData : null;
    }
    return $data;
  }
  
  public function categoryItemParentIdByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              id_parent
            FROM
              app_store_category_sorting";
    $keys = array(
      ":id_item" => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_parent : 0;
  }
  
  public function orderingCatagoryLinksList( $itemId = 0 )
  {
    $data = [];
    
    $qry = "SELECT
              a.id_item, b.category_name, b.id_category_image, 
              b.description, c.active
            FROM
              app_store_category_sorting a
            LEFT JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category
            LEFT JOIN
              app_store_category c
            ON
              a.id_category = c.id_category";
    $keys = array(
      ":a.id_parent" => (int) $itemId,
      ":b.id_lang"   => ($this->__haveSupportLanguageCategorySort(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategorySort()  
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
              
      foreach($result as $key => $value)
      {
        $data[ $key ] = $value;
        $data[ $key ]->image = ( (int) $value->id_category_image > 0 ) ? self::$registry->getService('drive')->fileById( $value->id_category_image ) : null;
        
        unset($data[ $key ]->id_category_image);
      }
    }
    return (!empty($data)) ? $data : null;
  }
  
  public function categoriesLinksIdsByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              id_item
            FROM
              app_store_category_sorting";
    $keys = array(
      ":id_parent" => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function countCategories()
  {
    $qry = "SELECT
              (count(id_category)) as avx
            FROM
              app_store_category";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : null;
  }
  
  public function countDisabledCategories()
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_category";
    $keys = array(
      ":active" => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return self::$registry->getService('storage')->rowCount();
  }
  
  public function countEmptyCategories()
  {
    $qry = "SELECT
              b.id_category
            FROM
              app_store_category a
            INNER JOIN
              app_store_article_category b
            ON
              a.id_category != b.id_category
            GROUP BY
              b.id_category";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return self::$registry->getService('storage')->rowCount();
  }
  
  public function countArticlesOnCAList()
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_category";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $sum = 0;
              
      foreach($result as $value) {
        $sum = $sum + $this->countArticlesByCatId($value->id_category);
      }
      return ($sum > 0) ? $sum : 0;
    }
    return 0;
  }
  
  public function countArticlesByCatId( $catId = 0 )
  {
    $qry = "SELECT
              (count(b.id_article)) as avx
            FROM	
              app_store_category a,
              app_store_article_category b
            WHERE
              a.id_category = b.id_category";
    $keys = array(
      ":a.id_category" => (int) $catId
    );
    $filter = "GROUP BY b.id_category";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function isCategoryById( $catId = 0 )
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_category";
    $keys = array(
      ":id_category" => (int) $catId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isCategoryLangById( $catId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_category_lang";
    $keys = array(
      ':id_category' => (int) $catId,
      ':id_lang'     => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveCategoriesChildrens( $catId = 0 )
  {
    $qry = "SELECT
              id_category
            FROM
              app_store_category";
    $keys = array(
      ":is_root_category" => 0,
      ":id_parent"        => (int) $catId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveCategoriesSortChildrens( $itemId = 0 )
  {
    $qry = "SELECT
              id_item
            FROM
              app_store_category_sorting";
    $keys = array(
      ":is_root_category" => 0,
      ":id_parent"        => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteCategoryById( $catId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_category', ':id_category' , (int) $catId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteCategoryLangById( $catId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_category_lang', ':id_category' , (int) $catId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteCategorySortLangById( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_category_sorting_lang', ':id_item' , (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteCategoryImageById( $categoryId = 0, $languageId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_category_lang', array("id_category_image" => 0), ' id_category = '. (int) $categoryId .' AND id_lang = '. (int) $languageId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteCategoryLinkById( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_category_sorting', ':id_item' , (int) $itemId );
    self::$registry->getService('storage')->delete( 'app_store_category_sorting_lang', ':id_item' , (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteCategoryFromArticleById( $categoryId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_category', ':id_category' , (int) $categoryId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  private function __haveSupportLanguageCategory( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_category)
              FROM   
                  app_store_category
              ) AS avx,
              (
              SELECT 
                  count(id_category)
              FROM   
                  app_store_category_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ( (int) $data->avx === (int) $data->avs ) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguageCategory()
  {
    $qry = "SELECT
              *
            FROM
            (
            SELECT
              id_lang, count(id_lang) as avx
            FROM
              app_store_category_lang
            GROUP BY
              id_lang
            ) as result
            ORDER BY
              avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  private function __haveSupportLanguageCategorySort( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_category)
              FROM   
                  app_store_category_sorting
              ) AS avx,
              (
              SELECT 
                  count(id_category)
              FROM   
                  app_store_category_sorting_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      return ((int) $data->avx === (int) $data->avs) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguageCategorySort()
  {
    $qry = "SELECT
              *
            FROM
            (
            SELECT
              id_lang, count(id_lang) as avx
            FROM
              app_store_category_sorting_lang
            GROUP BY
              id_lang
            ) as result
            ORDER BY
              avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  /** FRONT METHOD **/
  
  public function getCategoryListOnSiteFromBaseById( $categoryId = 0, $languageId = 0 )
  {
    $qry = "SELECT
              a.id_category, b.category_name, b.id_category_image, b.description
            FROM
              app_store_category a
            LEFT JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":a.active"    => 1,
      ":a.id_parent" => (int) $categoryId,
      ":b.id_lang"   => (int) $languageId
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ( (int) $value->id_category_image > 0 ) ? self::$registry->getService('drive')->fileById( $value->id_category_image ) : null;
        
        unset( $data[ $key ]->id_category_image );
      }
    }
    return (isset($data) && count($data) > 0) ? $data : null;
  }		
  
  public function categoryOnTimeLineById( $categoryId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_category, b.category_name, b.id_category_image, b.color,
              b.description, b.meta_keywords
            FROM
              app_store_category a
            LEFT JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ':a.id_category' => (int) $categoryId,
      ':b.id_lang'     => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data                       = self::$registry->getService('storage')->getResult()[0];
      $data->image                = ((int) $data->id_category_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_category_image ) : null;
      $data->count_sub_categories = $this->__countSubCategoryById( $data->id_category );
      $data->count_articles       = $this->countArticlesByCatId( $data->id_category );
      
      return $data;
    }
    return null;
  }

  public function categoryCarouselById( $categoryId = 0, $langId = 0, $limit = 0 )
  {
    $qry = "SELECT
              b.id_route, b.id_category_image, b.color, b.category_name, b.description
            FROM
              app_store_category a
            INNER JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ':a.active'      => 1,
      ':a.id_category' => (int) $categoryId,
      ':b.id_lang'     => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data              = self::$registry->getService('storage')->getResult()[0];
      $route             = ((int) $data->id_route > 0) ? self::$registry->getService('router')->routeById( $data->id_route ) : null;
      $data->link        = (is_object($route)) ? $route->path : null;
      $data->image       = ((int) $data->id_category_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_category_image ) : null;
      $data->articleList = $this->__categoryCarouselArticleListById(
        $categoryId,
        $langId,
        $limit
      );
      return $data;
    }
    return null;
  }
  
  private function __categoryCarouselArticleListById( $categoryId = 0, $langId = 0, $limit = 0 )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_article_category c
            ON
              a.id_article = c.id_article";
    $keys = array(
      ':a.enabled'     => 1,
      ':b.id_lang'     => (int) $langId,
      ':c.id_category' => (int) $categoryId
    );
    $filter = ((int) $limit > 0) ? ' LIMIT '.(int) $limit : null;
    
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
   
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = ((bool) $this->__articlePublishAndStockAvailibilityManage( $value->id_article ) === true) ? $this->articleOnSiteById($value->id_article, $langId) : null;
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  public function categoryOnSiteById( $catId = 0, $collection = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $qry = "SELECT
              a.id_category, b.category_name, b.id_category_image, b.color,
              b.description, b.site_title, b.meta_robots, b.meta_keywords, 
              b.meta_description, b.html_content
            FROM
              app_store_category a
            INNER JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ':a.active'      => 1,
      ':a.id_category' => (int) $catId,
      ':b.id_lang'     => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys, null );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data                  = self::$registry->getService('storage')->getResult()[0];
      $data->image           = ((int) $data->id_category_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_category_image ) : null;
      $data->html_content    = html_entity_decode($data->html_content, ENT_QUOTES, "UTF-8");
      $data->articleList     = $this->articleListOnSiteByCatId($data->id_category, $collection, $langId, $sortRuleId, $priceFrom, $priceUpTo, $manufacturerId, $pagination);
      $data->subCategoryList = $this->__subCategoryListById($data->id_category, $langId);
      
      return $data;
    }
    return null;
  }
  
  private function __subCategoryListById( $categoryId = 0, $languageId = 0 )
  {
    $qry = "SELECT
              b.id_category, b.id_route, b.id_category_image, 
              b.category_name, b.description, b.color
            FROM
              app_store_category a
            INNER JOIN
              app_store_category_lang b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ":a.active"    => 1,
      ":a.id_parent" => (int) $categoryId,
      ":b.id_lang"   => (int) $languageId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->path  = $this->categoryPathById($value->id_category, $languageId);
        $data[ $key ]->image = ((int) $value->id_category_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_category_image ) : null;
        
        unset($data[ $key ]->id_route);
        unset($data[ $key ]->id_category_image);
      }
      return $data;
    }
    return null;
  }
  
  /*********************************************************************************************************
  *
  * EXTERNAL CATEGORY
  *
  *********************************************************************************************************/
  
  public function insertArticleToExtCategory( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_external_category_article', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function articleListByExtCatId( $categoryId = 0, $cValueId = 0 )
  {
    $qry = "SELECT
              a.id_article, a.id_image, a.sku, a.article_name_internal
            FROM
              app_store_article a,
              app_store_external_category_article b
            WHERE
              a.id_article = b.id_article";
    $keys = array(
      ":b.id_cc"       => (int) $categoryId,
      ":b.id_category" => (int) $cValueId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ( (int) $value->id_image > 0 ) ? self::$registry->getService('drive')->fileById( $value->id_image ) : null;
        
        unset($data[ $key ]->id_image);
      }
    }
    return (isset($data) && (count($data) > 0)) ? $data : null;
  }
  
  public function extCategoryListById( $categoryId = 0 )
  {
    switch((int) $categoryId)
    {
      case 1:
        return $this->__heurekaCategoryList();
      default:
        return null;
    }
  }
  
  private function __heurekaCategoryList()
  {
    $qry = "SELECT
              id_category, category_name
            FROM
              app_heureka_category";
    $filter = "ORDER BY category_name ASC";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function deleteArticleListByExtCatId( $categoryId = 0, $cValueId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_external_category_article', array(':id_cc' => (int) $categoryId, ':id_category' => (int) $cValueId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /*********************************************************************************************************
  *
  * ATTR / ATTR-V
  *
  *********************************************************************************************************/
  
  public function insertAttribute( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_attribute', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertAttributeLang( $data = null )
  {
    self::$registry->getService('storage')->insert('app_store_attribute_lang', $data);

    return self::$registry->getService('storage')->executed();
  }
  
  public function insertAttributeSortItem( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_attribute_sorting', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertAttributeSortLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_attribute_sorting_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertAttributeValue( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_attribute_value', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertAttributeValueLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_attribute_value_lang', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateAttributeById( $changes = null, $attrId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute', $changes, ' id_attribute = '. (int) $attrId );
    
    return self::$registry->getService('storage')->executed();
  }

  public function updateAttributeLang( $changes = null, $attrId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_lang', $changes, ' id_attribute = '. (int) $attrId .' AND id_lang = '. (int) $langId );

    return self::$registry->getService('storage')->executed();
  }

  public function updateAttributeImageById( $changes = null, $attrId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_lang', $changes, ' id_attribute = '. (int) $attrId .' AND id_lang = '. (int) $langId );

    return self::$registry->getService('storage')->executed();
  }

  public function updateAttributeRouteById( $routeId = 0, $attrId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_lang', array('id_route' => (int) $routeId), ' id_attribute = '. (int) $attrId .' AND id_lang = '. (int) $langId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateAttributeValueDataById( $changes = null, $attrId = 0, $valueId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_value', $changes, ' id_attribute = '. (int) $attrId .' AND id_value = '. (int) $valueId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateAttributeValueLangById( $changes = null, $attrId = 0, $valueId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_value_lang', $changes, ' id_attribute = '. (int) $attrId .' AND id_value = '. (int) $valueId .' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }

  public function updateAttributeValueRouteById( $routeId = 0, $attrVId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_value_lang', array('id_route' => (int) $routeId), ' id_value = '. (int) $attrVId .' AND id_lang = '. (int) $langId );

    return self::$registry->getService('storage')->executed();
  }

  public function updateAttributeExternaLinkById( $changes = null, $attrId = 0, $languageId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_lang', $changes, ' id_attribute = '. (int) $attrId .' AND id_lang = '. (int) $languageId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateAttributeLink( $changes = null, $itemId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_sorting', $changes, ' id_item = '. (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }

  public function countAttributes()
  {
    $qry = "SELECT
              (count(id_attribute)) as avx
            FROM
              app_store_attribute";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }

  public function countDisabledAttributes()
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute";
    $keys = array(
        ":active" => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return self::$registry->getService('storage')->rowCount();
  }

  public function countEmptyAttributes()
  {
    $qry = "SELECT
              a.id_attribute
            FROM
              app_store_attribute a,
              app_store_article_attribute b
            WHERE
              a.id_attribute != b.id_attribute
            GROUP BY
              a.id_attribute";
    self::$registry->getService('storage')->executeQuery( $qry );

    return self::$registry->getService('storage')->rowCount();
  }

  public function countArticlesOnAAList()
  {
    $sum = 0;
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      
      foreach($result as $value) {
        $sum = $sum + $this->countArticlesByAttrId($value->id_attribute);
      }
    }
    return ($sum > 0) ? $sum : 0;
  }

  public function countArticlesByAttrId( $attrId = 0 )
  {
    $qry = "SELECT
              (count(b.id_article)) as avx
            FROM
              app_store_attribute a,
              app_store_article_attribute b
            WHERE
              a.id_attribute = b.id_attribute";
    $keys = array(
        ":a.id_attribute" => (int) $attrId
    );
    $filter = "GROUP BY b.id_attribute";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function attributeById( $attrId = 0 )
  {
    if(!$this->isAttributeById( $attrId )) {
      return null;
    }
    $qry1 = "SELECT
              id_attribute, id_parent, is_root_attribute,
              is_manufacturer, guest, visitor, customer,
              active
            FROM
              app_store_attribute";
    $keys1 = array(
      ":id_attribute" => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                id_lang, attribute_name_internal, attribute_name_public, id_attribute_image,
                color, description, site_title, meta_robots, meta_keywords, meta_description,
                html_content
              FROM
                app_store_attribute_lang";
      $keys2 = array(
        ":id_attribute" => (int) $attrId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      if(self::$registry->getService('storage')->rowCount() > 0) {
        $result = self::$registry->getService('storage')->getResult();
        $langs  = [];
        
        foreach($result as $value) {
          $langs[ $value->id_lang ] = $value;
          $langs[ $value->id_lang ]->image = ((int) $value->id_attribute_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_attribute_image ) : null;
          
          unset($langs[ $value->id_lang ]->id_lang);
        }
        $data->lang = $langs;
      }
      return $data;
    }
    return null;
  }
  
  public function attributeValueDataById( $attrId = 0, $valueId = 0 )
  {
    if(!$this->isAttributeValueById(0, $valueId)) {
      return null;
    }
    $qry = "SELECT
              id_attribute, id_lang, value, id_route, site_title, description,
              meta_keywords, meta_description, meta_robot, html_content
            FROM
              app_store_attribute_value_lang";
    $keys = array(
      ':id_value' => (int) $valueId
    );
    if($this->isAttributeById($attrId)) {
      $keys[':id_attribute'] = (int) $attrId;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $result = self::$registry->getService('storage')->getResult();
      $data   = [];
        
      foreach($result as $value) {
        $data[ $value->id_lang ] = $value;
        $data[ $value->id_lang ]->path = ((int) $value->id_route !== 0) ? self::$registry->getService('router')->routeById( $value->id_route )->path : null;

        unset($data[ $value->id_lang ]->id_route);
        unset($data[ $value->id_lang ]->id_lang);
      }
      return $data;
    }
    return null;
  }
  
  public function attributeValueColorById( $attrId = 0, $valueId = 0 )
  {
    if(!$this->isAttributeValueById(0, $valueId)) {
      return null;
    }
    $qry = "SELECT
              color
            FROM
              app_store_attribute_value";
    $keys = array(
      ':id_value' => (int) $valueId
    );
    if($this->isAttributeById($attrId)) {
      $keys[':id_attribute'] = (int) $attrId;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->color : null;
  }
  
  public function attributeDataForArticleById( $attrId = 0 )
  {
    $qry = "SELECT
                a.id_attribute, b.attribute_name_internal, b.attribute_name_public,
                b.id_attribute_image, b.description
            FROM
                app_store_attribute a,
                app_store_attribute_lang b
            WHERE
                a.id_attribute = b.id_attribute";
    $keys = array(
      ":a.id_attribute" => (int) $attrId,
      ":b.id_lang"      => ($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $data->image = ( (int) $data->id_attribute_image > 0 ) ? self::$registry->getService('drive')->fileById( $data->id_attribute_image ) : null;

      unset( $data->id_attribute_image );

      return $data;
    }
    return null;
  }
  
  public function attributeSortDataById( $attrId = 0 )
  {
    $data = [];
    
    $qry1 = "SELECT
              id_item, id_attribute, icon, css_id, 
              css_classes, visible
            FROM
              app_store_attribute_sorting";
    $keys1 = array(
      ":id_attribute" => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $qry2 = "SELECT
                  a.id_lang, a.link_name, b.external_link
                FROM
                  app_store_attribute_sorting_lang a
                LEFT JOIN
                  app_store_attribute_lang b
                ON
                  a.id_attribute = b.id_attribute
                AND
                  a.id_lang = b.id_lang";
      $keys2 = array(
        ":b.id_attribute" => (int) $attrId
      );
      self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );
      
      $result = (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
      $langData = [];
      
      if(!is_null($result)) {
       foreach($result as $value) {
         $langData[ $value->id_lang ] = $value;
         
         unset($langData[ $value->id_lang ]->id_lang);
       }
      }      
      $data->item_lang = (!empty($langData)) ? $langData : null;
    }
    return $data;
  }
  
  public function attributeNameById( $attrId = 0, $languageId = 0 )
  {
    $qry = "SELECT
              attribute_name_internal, attribute_name_public
            FROM
              app_store_attribute_lang";
    $keys = array(
      ":id_attribute" => (int) $attrId,
      ":id_lang"      => ($languageId > 0) ? (int) $languageId : self::$registry->getService('languages')->getCurrentLanguage()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function attributeObjByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              id_attribute, id_lang, id_route
            FROM
              app_store_attribute_lang";
    $keys = array(
      ":id_route" => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }

  public function attributeValueObjectByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              id_attribute, id_value, id_lang, id_route
            FROM
              app_store_attribute_value_lang";
    $keys = array(
      ":id_route" => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function attributeValueIdByKeyword( $keyword = '' )
  {
    $kV  = self::$registry->getService('helper')->remove_accents( $keyword );
    $vId = 0;
    
    if(strlen($keyword) > 0) {
      $qry = "SELECT
                id_value, `value`
              FROM
                app_store_attribute_value_lang";
      self::$registry->getService('storage')->executeQuery( $qry );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $result = self::$registry->getService('storage')->getResult();

        foreach($result as $value) {
          if(strtolower($kV) == strtolower(self::$registry->getService('helper')->remove_accents(html_entity_decode($value->value, ENT_QUOTES, "UTF-8")))) {
            $vId = (int) $value->id_value;
          }
        }
      }
    }
    return $vId;
  }
  
  public function attributeHeadingById( $attrId = 0 )
  {
    $qry = "SELECT
              id_lang, (attribute_name_public) as attribute_name
            FROM
              app_store_attribute_lang";
    $keys = array(
      ":id_attribute" => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    $result = (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
    
    if(!is_null($result)) {
      foreach($result as $key => $value) {
        $result[ $key ]->attribute_name = html_entity_decode($value->attribute_name, ENT_QUOTES, 'UTF-8');
      }
    }
    return $result;
  }
  
  public function attributeParentIdById( $attributeId = 0 )
  {
    $qry = "SELECT
              id_parent
            FROM
              app_store_attribute";
    $keys = array(
      ":id_attribute" => (int) $attributeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_parent : null;
  }
  
  public function attributeParentDataById( $attrId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_parent, b.id_route, b.attribute_name_public
            FROM
              app_store_attribute a,
              app_store_attribute_lang b
            WHERE
              a.id_attribute = b.id_attribute";
    $keys = array(
      ":a.id_attribute" => (int) $attrId,
      ":b.id_lang"      => ((int) $langId > 0) ? (int) $langId : (($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes())
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->path = ((int) $data->id_route !== 0) ? self::$registry->getService('router')->routeById( $data->id_route )->path : null;

      return $data;
    }
    return null;
  }

  public function attributeChildById( $attrId = 0 )
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute";
    $keys = array(
      ':id_parent' => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_attribute : null;
  }
  
  public function attributeList( $pagination = false )
  {
    $qry = "SELECT
              a.id_attribute, (a.is_root_attribute) as root,b.attribute_name_internal, b.attribute_name_public,
              b.id_attribute_image, a.active
            FROM
              app_store_attribute a
            LEFT JOIN
              app_store_attribute_lang b
            ON
              a.id_attribute = b.id_attribute";
    $keys = array(
      ":b.id_lang" => ($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes()
    );
    $filter = "ORDER BY a.position ASC";
    
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      
      foreach($result as $key => $value) {
        $result[ $key ] = $value;
        $result[ $key ]->image = ( (int) $value->id_attribute_image > 0 ) ? self::$registry->getService('drive')->fileById( $value->id_attribute_image ) : null;
        $result[ $key ]->count_sub_attributes = $this->__countSubAttributeById( $value->id_attribute );
        $result[ $key ]->count_articles = $this->__countArticlesById( $value->id_attribute );
        
        unset( $result[ $key ]->id_attribute_image );
      }
    }
    return (count($result) > 0) ? $result : null;
  }
  
  private function __countArticlesById( $attributeId = 0 )
  {
    $qry = "SELECT
              (sum(dc)) as avx
            FROM (
              SELECT
                (count(id_article)) as dc
              FROM
                app_store_article_attribute
              WHERE
                id_attribute = ". (int) $attributeId ."
              GROUP BY
                id_article
            ) as result";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function attributeValueList()
  {
    $qry = "SELECT
              a.id_attribute, a.id_value, b.value, b.id_route
            FROM
              app_store_attribute_value a,
              app_store_attribute_value_lang b
            WHERE
              a.id_attribute = b.id_attribute
            AND
              a.id_value = b.id_value";
    $keys = array(
      ":b.id_lang" => ($this->__haveSupportLanguageAttributeValue(0, self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributeValue()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $key => $value) {
        $data[ $key ]->path = ((int) $value->id_route !== 0) ? self::$registry->getService('router')->routeById( $value->id_route )->path : null;
      }
      return $data;
    }
    return null;
  }

  public function countAttributeValuesByAttrId( $attrId = 0 )
  {
    $qry = "SELECT
              (count(id_value)) as avx
            FROM
              app_store_attribute_value";
    $keys = array(
      ':id_attribute' => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function attributeValueListByAttrId( $attrId = 0, $pagination = false )
  {
    $langId = self::$registry->getService('languages')->getCurrentLanguage();
    $qry = "SELECT
              a.id_value, a.color, b.id_route, b.value
            FROM
              app_store_attribute_value a,
              app_store_attribute_value_lang b
            WHERE
              a.id_attribute = b.id_attribute
            AND
              a.id_value = b.id_value";
    $keys = array(
      ':a.id_attribute' => (int) $attrId,
      ':b.id_lang'      => ($this->__haveSupportLanguageAttributeValue($attrId, $langId)) ? $langId : $this->__getSupportLanguageAttributeValue()
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $key => $value) {
        $data[ $key ]->path = ((int) $value->id_route !== 0) ? self::$registry->getService('router')->routeById( $value->id_route )->path : null;
      }
      return $data;
    }
    return null;
  }
  
  public function attributeRootList()
  {
    $qry = "SELECT
              a.id_attribute, a.id_parent,
              b.attribute_name_internal, b.attribute_name_public
            FROM
              app_store_attribute a
            LEFT JOIN
              app_store_attribute_lang b
            ON
              a.id_attribute = b.id_attribute";
    $keys = array(
      ":a.is_root_attribute" => 1,
      ":b.id_lang"           => ($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function attributesChildrenListByAttrId( $attrId = 0 )
  {
    $qry = "SELECT
              a.id_attribute, b.attribute_name_internal, b.attribute_name_public
            FROM
              app_store_attribute a
            LEFT JOIN
              app_store_attribute_lang b
            ON
              a.id_attribute = b.id_attribute";
    $keys = array(
      ":a.id_parent"         => (int) $attrId,
      ":a.is_root_attribute" => 0,
      ":b.id_lang"           => ($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function attributeSortRootItemsList()
  {
    $qry = "SELECT
              a.id_item, b.link_name
            FROM
              app_store_attribute_sorting a
            LEFT JOIN
              app_store_attribute_sorting_lang b
            ON
              a.id_attribute = b.id_attribute";
    $keys = array(
      ":a.is_root_attribute" => 1,
      ":b.id_lang"           => ($this->__haveSupportLanguageAttributesSort(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributesSort(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function attributesSortChildrenListById( $itemId = 0 )
  {
    $qry = "SELECT
              a.id_item, b.link_name
            FROM
              app_store_attribute_sorting a
            LEFT JOIN
              app_store_attribute_sorting_lang b
            ON
              a.id_attribute = b.id_attribute";
    $keys = array(
      ":a.id_parent"         => (int) $itemId,
      ":a.is_root_attribute" => 0,
      ":b.id_lang"           => ($this->__haveSupportLanguageAttributesSort(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributesSort(),
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function attributeLinksIdsByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              id_item
            FROM
              app_store_attribute_sorting";
    $keys = array(
      ":id_parent" => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function attributeItemParentIdByItemId( $itemId = 0 )
  {
    $qry = "SELECT
              id_parent
            FROM
              app_store_attribute_sorting";
    $keys = array(
      ":id_item" => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_parent : 0;
  }
  
  public function attributeIdByAVId( $valueId = 0 )
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute_value";
    $keys = array(
      ":id_value" => (int) $valueId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_attribute : null;
  }

  public function attributeLastPosition( $attrId = 0 )
  {
    $qry = "SELECT
              position
            FROM
              app_store_attribute";
    $keys = array(
        ':id_parent' => (int) $attrId
    );
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position + 1 : 1;
  }

  public function getAttributeLinkLastItemPosition( $attrId = 0 )
  {
    $qry = "SELECT
              position
            FROM
              app_store_attribute_sorting";
    $keys = array(
        ':id_parent' => (int) $attrId
    );
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->position + 1 : 1;
  }
  
  public function orderingAttributeLinksList( $itemId = 0 )
  {
    $qry = "SELECT
              a.id_item, b.attribute_name_internal, b.attribute_name_public,
              b.id_attribute_image, b.description, c.active
            FROM
              app_store_attribute_sorting a
            LEFT JOIN
              app_store_attribute_lang b
            ON
              a.id_attribute = b.id_attribute
            LEFT JOIN
              app_store_attribute c
            ON
              a.id_attribute = c.id_attribute";
    $keys = array(
      ":a.id_parent" => (int) $itemId,
      ":b.id_lang"   => ($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes(), 
    );
    $filter = "ORDER BY a.position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
              
      foreach(self::$registry->getService('storage')->getResult() as $key => $value) {
        $data[ $key ] = $value;
        $data[ $key ]->image = ( (int) $value->id_attribute_image > 0 ) ? self::$registry->getService('drive')->fileById( $value->id_attribute_image ) : null;
        
        unset($data[ $key ]->id_attribute_image);
      }
      return $data;
    }
    return null;
  }

  public function attributeValueIdsByAttrIds( $attrIds = null )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_attribute_value
            WHERE
              id_attribute IN (".implode(",",$attrIds).")";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $ids = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $ids[] = (int) $value->id_value;
      }
      return $ids;
    }
    return null;
  }
  
  public function attrVDataOnSiteById( $attrId = 0, $attrVId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_value, a.id_attribute, a.color, 
              (b.attribute_name_public) as attr_name, c.value
            FROM
              app_store_attribute_value a
            INNER JOIN
              app_store_attribute_lang b
            ON
              a.id_attribute = b.id_attribute
            INNER JOIN
              app_store_attribute_value_lang c
            ON
              a.id_value = c.id_value
            AND
              a.id_attribute = c.id_attribute
            AND
              b.id_lang = c.id_lang";
    $keys = array(
      ':a.id_attribute' => (int) $attrId,
      ':a.id_value'     => (int) $attrVId,
      ':b.id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }

  public function attributeValueArticleListOnSiteByIds( $attrId = 0, $attrVIds = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    if((is_array($attrVIds) && (count($attrVIds) > 0)) && $this->isAttributeValueById(0, $manufacturerId)) {
      return $this->__attrVALOnSiteByIdsV2(
        $attrId,
        $attrVIds,
        $langId, 
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        $pagination
      );
    }
    if(is_array($attrVIds) && (count($attrVIds) > 0)) {
      return $this->__attrVALOnSiteByIdsV1(
        $attrId,
        $attrVIds,
        $langId, 
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $pagination
      );
    }
    return null;
  }
  
  private function __attrVALOnSiteByIdsV1( $attrId = 0, $attrVIds = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $pagination = false ) 
  {
    $qry = "SELECT
              b.id_article
            FROM
              app_store_article_attribute a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article
            AND
              b.enabled = 1
            INNER JOIN
              app_store_article_lang c
            ON
              a.id_article = c.id_article";
    if(is_array($attrVIds) && (count($attrVIds) > 0)) {
      $qry .= " WHERE a.id_value IN (".implode(',',$attrVIds).")";

      if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
        $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo);
      }
    }
    $keys = array(
      ':a.id_attribute' => (int) $attrId,
      ':c.id_lang'      => (int) $langId
    );
    $filter = $this->__attrVSortByRuleId(
      0,
      0,
      $sortRuleId
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = $this->articleOnSiteById($value->id_article, $langId);
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __attrVALOnSiteByIdsV2( $attrId = 0, $attrVIds = null, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $qry = "SELECT
              b.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_attribute b
            ON
              a.id_article = b.id_article
            AND
              b.id_attribute = ".(int) $attrId."
            AND
              b.id_value IN (".implode(',',$attrVIds).")
            INNER JOIN
              app_store_article_attribute c
            ON
              a.id_article = c.id_article
            AND
              c.id_value = ".(int) $manufacturerId."
            INNER JOIN
              app_store_article_lang d
            ON
              a.id_article = d.id_article
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo, true);
    }
    $keys = array(
      ':d.id_lang' => (int) $langId
    );
    $filter = $this->__attrVSortByRuleId(
      0,
      0,
      $sortRuleId,
      true
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = $this->articleOnSiteById($value->id_article, $langId);
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __setAttrVIdsArticleListPriceRange( $priceFrom = 0, $priceUpTo = 0, $mode2 = false )
  {
    $ext = ((bool) $mode2 === true) ? 'a' : 'b';
    
    if(((float) $priceFrom > 0) && ((int) $priceUpTo === 0)) {
      return ' AND '.$ext.'.retail_tax_price > '.(float) $priceFrom;
    }
    if(((int) $priceFrom === 0) && ((float) $priceUpTo > 0)) {
      return ' AND '.$ext.'.retail_tax_price < '.(float) $priceUpTo;
    }
    if(((float) $priceFrom > 0) && ((float) $priceUpTo > 0)) {
      return ' AND '.$ext.'.retail_tax_price BETWEEN '.(float) $priceFrom.' AND '.(float) $priceUpTo;
    }
    return null;
  }

  public function attributeValueOnSiteById( $attrId = 0, $attrVId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    if(!$this->isAttributeValueById($attrId, $attrVId)) {
      return null;
    }
    $qry = "SELECT
              id_route, `value`, site_title, description, meta_keywords,
              meta_description, meta_robot, html_content
            FROM
              app_store_attribute_value_lang";
    $keys = array(
      ':id_attribute' => (int) $attrId,
      ':id_value'     => (int) $attrVId,
      ':id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $data              = self::$registry->getService('storage')->getResult()[0];
      $data->path        = ((int) $data->id_route !== 0) ? self::$registry->getService('router')->routeById( $data->id_route )->path : null;
      $data->articleList = $this->__attributeValueArticleListOnSiteById($attrId, $attrVId, $langId, $sortRuleId, $priceFrom, $priceUpTo, $manufacturerId, $pagination);

      unset( $data->id_route );

      return $data;
    }
    return null;
  }

  private function __attributeValueArticleListOnSiteById( $attrId = 0, $attrVId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    if($this->isAttributeValueById($attrId, $attrVId) && $this->isAttributeValueById(0, $manufacturerId)) {
      return $this->__attrVALOnSiteByAttrVIdV2(
        $attrId,
        $attrVId,
        $langId,
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        $pagination
      );
    }
    if($this->isAttributeValueById($attrId, $attrVId)) {
      return $this->__attrVALOnSiteByAttrVIdV1(
        $attrId,
        $attrVId,
        $langId,
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $pagination
      );
    }
    return null;
  }
  
  private function __attrVALOnSiteByAttrVIdV1(  $attrId = 0, $attrVId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $pagination = false )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_article_attribute c
            ON
              a.id_article = c.id_article
            AND
              c.id_attribute = ".(int) $attrId."
            AND
              c.id_value = ".(int) $attrVId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo, true);
    }      
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    $filter = $this->__attrVSortByRuleId(
      0,
      $attrVId, 
      $sortRuleId,
      true
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = $this->articleOnSiteById($value->id_article, $langId);
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __attrVALOnSiteByAttrVIdV2( $attrId = 0, $attrVId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_article_attribute c
            ON
              a.id_article = c.id_article
            AND
              c.id_attribute = ".(int) $attrId."
            AND
              c.id_value = ".(int) $attrVId."
            INNER JOIN
              app_store_article_attribute d
            ON
              a.id_article = d.id_article
            AND
              d.id_value = ".(int) $manufacturerId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setAttrVIdsArticleListPriceRange($priceFrom, $priceUpTo, true);
    }      
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    $filter = $this->__attrVSortByRuleId(
      0,
      $attrVId, 
      $sortRuleId,
      true
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $article = $this->articleOnSiteById($value->id_article, $langId);
        
        if(is_object($article)) {
          $data[] = $article;
        }
      }
      return $data;
    }
    return null;
  }

  private function __attrVSortByRuleId( $attrId = 0, $attrVId = 0, $sortRuleId = 0, $mode2 = false )
  {
    if((int) $sortRuleId === 0) {
      $qry1 = "SELECT
                id_type
              FROM
                app_store_ordering_rule";
      $keys1 = array(
        ':id_section' => 3,
        ':id_s_value' => (int) $attrVId,
        ':is_default' => 0,
        ':enabled'    => 1
      );
      self::$registry->getService('storage')->executeQuery( $qry1, $keys1 );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = self::$registry->getService('storage')->getResult()[0];
      } else {
        $qry2 = "SELECT
                  id_type
                FROM
                  app_store_ordering_rule";
        $keys2 = array(
          ':id_section' => 3,
          ':is_default' => 1,
          ':enabled'    => 1
        );
        self::$registry->getService('storage')->executeQuery( $qry2, $keys2 );

        if(self::$registry->getService('storage')->rowCount() > 0) {
          $data = self::$registry->getService('storage')->getResult()[0];
        }
      }
    }
    $ruleId = (((int) $sortRuleId > 0) && ((int) $sortRuleId < 17)) ? (int) $sortRuleId : ((isset($data) && is_object($data)) ? (int) $data->id_type : 0);

    switch($ruleId) {
      case 1:
        return ((bool) $mode2 === true) ? "ORDER BY d.article_name ASC" : "ORDER BY c.article_name ASC";
      case 2:
        return ((bool) $mode2 === true) ? "ORDER BY d.article_name DESC" : "ORDER BY c.article_name DESC";
      case 3:
        return ((bool) $mode2 === true) ? "ORDER BY a.retail_tax_price ASC" : "ORDER BY b.retail_tax_price ASC";
      case 4:
        return ((bool) $mode2 === true) ? "ORDER BY a.retail_tax_price DESC" : "ORDER BY b.retail_tax_price DESC";
      case 5:
        return ((bool) $mode2 === true) ? "ORDER BY a.created ASC" : "ORDER BY b.created ASC";
      case 6:
        return ((bool) $mode2 === true) ? "ORDER BY a.created DESC" : "ORDER BY b.created DESC";
      case 7:
        return ((bool) $mode2 === true) ? "ORDER BY UNIX_TIMESTAMP(a.upd_date) ASC" : "ORDER BY UNIX_TIMESTAMP(b.upd_date) ASC";
      case 8:
        return ((bool) $mode2 === true) ? "ORDER BY UNIX_TIMESTAMP(a.upd_date) DESC" : "ORDER BY UNIX_TIMESTAMP(b.upd_date) DESC";
      default:
        return null;
    }
  }
  
  public function manufacturerListOnSite( $langId = 0, $ignoreList = null )
  {
    $qry = "SELECT
              c.id_attribute, c.id_value, c.id_route, c.value, c.description
            FROM
              app_store_attribute a
            INNER JOIN
              app_store_attribute_value b
            ON
              a.id_attribute = b.id_attribute
            INNER JOIN
              app_store_attribute_value_lang c
            ON
              a.id_attribute = c.id_attribute
            AND
              b.id_value = c.id_value";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE a.id_attribute NOT IN (".implode(',',$ignoreList).")";
    }
    $keys = array(
      ':a.is_manufacturer' => 1,
      ':a.active'          => 1,
      ':c.id_lang'         => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0)  {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $route = ((int) $value->id_route !== 0) ? self::$registry->getService('router')->routeById( $value->id_route ) : null;
        $data[ $key ]->path = (is_object($route)) ? $route->path : null;

        unset( $data[ $key ]->id_route );
      }
      return $data;
    }
    return null;
  }

  public function haveAttributeLangById( $attrId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute_lang";
    $keys = array(
      ':id_attribute' => (int) $attrId,
      ':id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function haveAttributeValueLangById( $attrId = 0, $attrVId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_attribute_value_lang";
    $keys = array(
      ':id_attribute' => (int) $attrId,
      ':id_value'     => (int) $attrVId,
      ':id_lang'      => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveAttributesChildrens( $attrId = 0 )
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute";
    $keys = array(
      ":is_root_attribute" => 0,
      ":id_parent"         => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveAttributesSortChildrens( $itemId = 0 )
  {
    $qry = "SELECT
              id_item
            FROM
              app_store_attribute_sorting";
    $keys = array(
      ":is_root_attribute" => 0,
      ":id_parent"         => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveAttributeArticlesById( $attrId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_attribute";
    $keys = array(
      ":id_attribute" => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveAttrValueArticlesById( $attrVId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_article_attribute";
    $keys = array(
      ":id_value" => (int) $attrVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
	
  public function isAttributeRootById( $attrId = 0 )
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute";
    $keys = array(
      ":id_attribute"      => (int) $attrId,
			":is_root_attribute" => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAttributeById( $attrId = 0 )
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute";
    $keys = array(
      ":id_attribute" => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAttributeValueById( $attrId = 0, $valueId = 0 )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_attribute_value";
    $keys = array(
      ":id_value" => (int) $valueId
    );
    if(((int) $attrId > 0) && $this->isAttributeById($attrId)) {
      $keys[':id_attribute'] = (int) $attrId;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAttributeObjectByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              id_attribute
            FROM
              app_store_attribute_lang";
    $keys = array(
      ":id_route" => (int) $routeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isAttributeValueByKeyword( $keyword = '' )
  {
    $qry = "SELECT
              `value`
            FROM
              app_store_attribute_value_lang";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
     
      foreach($result as $value) {
        if(strtolower($keyword) == strtolower(self::$registry->getService('helper')->remove_accents(html_entity_decode($value->value, ENT_QUOTES, "UTF-8")))) {
          return true;
        }
      }
    }
    return false;
  }
  
  public function deleteAttributeById( $attrId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_attribute', ':id_attribute' , (int) $attrId );
    self::$registry->getService('storage')->delete( 'app_store_attribute_lang', ':id_attribute' , (int) $attrId );
    self::$registry->getService('storage')->delete( 'app_store_attribute_sorting', ':id_attribute' , (int) $attrId );
    self::$registry->getService('storage')->delete( 'app_store_attribute_sorting_lang', ':id_attribute' , (int) $attrId );
    self::$registry->getService('storage')->delete( 'app_store_attribute_value', ':id_attribute' , (int) $attrId );
    self::$registry->getService('storage')->delete( 'app_store_attribute_value_lang', ':id_attribute' , (int) $attrId );
    self::$registry->getService('storage')->delete( 'app_store_article_attribute', ':id_attribute' , (int) $attrId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAttributeLangById( $attrId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_attribute_lang', ':id_attribute' , (int) $attrId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAttributeImageById( $attrId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_attribute_lang', array("id_attribute_image" => 0), ' id_attribute = '. (int) $attrId .' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAttributeSortLangById( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_attribute_sorting_lang', ':id_item' , (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAttributeLinkById( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_attribute_sorting', ':id_item' , (int) $itemId );
    self::$registry->getService('storage')->delete( 'app_store_attribute_sorting_lang', ':id_item' , (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAttributeFromArticleById( $attrId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_article_attribute', array(':id_attribute' => (int) $attrId, ':id_value' => 0) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteAttributeValueById( $attrId = 0, $valueId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_attribute_value', array(':id_attribute' => (int) $attrId, ':id_value' => (int) $valueId) );
    self::$registry->getService('storage')->delete( 'app_store_attribute_value_lang', array(':id_attribute' => (int) $attrId, ':id_value' => (int) $valueId) );
    
    return self::$registry->getService('storage')->executed();
  }
  
  private function __countSubAttributeById( $attrId = 0 )
  {
    $qry = "SELECT
              count(id_attribute) as avx
            FROM
              app_store_attribute";
    $keys = array(
      ":id_parent" => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  private function __haveSupportLanguageAttributes( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_attribute)
              FROM   
                  app_store_attribute
              ) AS avx,
              (
              SELECT 
                  count(id_attribute)
              FROM   
                  app_store_attribute_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ((int) $data->avx === (int) $data->avs) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguageAttributes()
  {
    $qry = "SELECT
              *
            FROM
            (
            SELECT
              id_lang, count(id_lang) as avx
            FROM
              app_store_attribute_lang
            GROUP BY
              id_lang
            ) as result
            ORDER BY
              avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  private function __haveSupportLanguageAttributeValue( $attrId = 0, $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                COUNT(id_value)
              FROM   
                app_store_attribute_value
              ".(($this->isAttributeById( $attrId )) ? ' WHERE id_attribute = '.(int) $attrId.' ' : '' )."
              ) AS avx,
              (
              SELECT 
                count(id_value)
              FROM   
                app_store_attribute_value_lang
              WHERE
                id_lang = ".(int) $langId."
              ".(($this->isAttributeById( $attrId )) ? ' AND id_attribute = '.(int) $attrId.' ' : '' )."
              GROUP BY
                id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ((int) $data->avx === (int) $data->avs) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguageAttributeValue()
  {
    $qry = "SELECT
              *
            FROM
            (
            SELECT
              id_lang, count(id_lang) as avx
            FROM
              app_store_attribute_value_lang
            GROUP BY
              id_lang
            ) as result
            ORDER BY
              avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  private function __haveSupportLanguageAttributesSort( $langId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                  COUNT(id_attribute)
              FROM   
                  app_store_attribute_sorting
              ) AS avx,
              (
              SELECT 
                  count(id_attribute)
              FROM   
                  app_store_attribute_sorting_lang
              WHERE
                  id_lang = ".(int) $langId."
              GROUP BY
                  id_lang	
              ) AS avs";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      return ( (int) $data->avx === (int) $data->avs ) ? true : false;
    }
    return false;
  }
  
  private function __getSupportLanguageAttributesSort()
  {
    $qry = "SELECT
              *
            FROM
            (
            SELECT
              id_lang, count(id_lang) as avx
            FROM
              app_store_attribute_sorting_lang
            GROUP BY
              id_lang
            ) as result
            ORDER BY
              avx DESC
            LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_lang : self::$registry->getService('languages')->getCurrentLanguage();
  }
  
  /*********************************************************************************************************
  *
  * ORDERING
  *
  *********************************************************************************************************/
  
  public function insertOrderingRule( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_ordering_rule', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateOrderingRule( $changes = null, $oRuleId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_ordering_rule', $changes, ' id_rule = '. (int) $oRuleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function orderingRuleDataById( $oRuleId = 0 )
  {
    $qry = "SELECT
              id_rule, id_type, id_section, id_s_value
            FROM
              app_store_ordering_rule";
    $keys = array(
      ':id_rule' => (int) $oRuleId  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function orderingRuleList( $pagination = false )
  {
    $qry = "SELECT
              id_rule, id_type, id_section, id_s_value, is_default, enabled
            FROM
              app_store_ordering_rule";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        if((int) $value->is_default !== 1) {
          // Category
          if((int) $value->id_section === 1) {
            $langId = ($this->__haveSupportLanguageCategory(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageCategory();
            $data[ $key ]->s_value_name = $this->categoryById($value->id_s_value)->lang[$langId]->category_name;
          }
          // Attribute
          if((int) $value->id_section === 2) {
            $langId = ($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes();
            $data[ $key ]->s_value_name = $this->attributeById($value->id_s_value)->lang[$langId]->attribute_name_public;
          }
          // Attribute value
          if((int) $value->id_section === 3) {
            $langId = ($this->__haveSupportLanguageAttributeValue(0, self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributeValue();
            $data[ $key ]->s_value_name = $this->attributeValueDataById(0, $value->id_s_value)[$langId]->value;
          }
        }
      }
    }
    return (isset($data) && count($data) > 0) ? $data : null;
  }
  
  public function haveOrderingRuleByAttrId( $attrId = 0 )
  {
    $qry = "SELECT
              id_rule
            FROM
              app_store_ordering_rule";
    $keys = array(
      ':id_section' => 2,
      ':id_s_value' => (int) $attrId,
      ':enabled'    => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveOrderingRuleByAttrValueId( $attrVId = 0 )
  {
    $qry = "SELECT
              id_rule
            FROM
              app_store_ordering_rule";
    $keys = array(
      ':id_section' => 3,
      ':id_s_value' => (int) $attrVId,
      ':enabled'    => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isOrderingRule( $oRuleId = 0 )
  {
    $qry = "SELECT
              id_rule
            FROM
              app_store_ordering_rule";
    $keys = array(
      ':id_rule' => (int) $oRuleId  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteOrderingRuleById( $oRuleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_ordering_rule', ':id_rule' , (int) $oRuleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /*********************************************************************************************************
  *
  * THUMBNAIL
  *
  *********************************************************************************************************/

  public function insertResizeRule( $data = null )
  {
    self::$registry->getService('storage')->insert( 'thumbnail_resize_rule', $data );

    return self::$registry->getService('storage')->executed();
  }

  public function insertThumbnailSection( $data = null )
  {
    self::$registry->getService('storage')->insert( 'thumbnail_section', $data );

    return self::$registry->getService('storage')->lastInsertId();
  }

  public function insertThumbnailSectionEntityId( $data = null )
  {
    self::$registry->getService('storage')->insert( 'thumbnail_section_entity_ids', $data );

    return self::$registry->getService('storage')->executed();
  }

  public function insertThumbResizeRule( $data = null )
  {
    self::$registry->getService('storage')->insert( 'thumbnail_section_resize_rules', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function insertCronThumbnail( $data = null )
  {
    self::$registry->getService('storage')->insert( 'thumbnail_cron_tasks', $data );

    return self::$registry->getService('storage')->executed();
  }

  public function insertThumbnail( $data = null )
  {
    self::$registry->getService('storage')->insert( 'thumbnail', $data );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateThumbSecCronStatusById( $thumbSecId = 0 )
  {
    self::$registry->getService('storage')->update( 'thumbnail_section', array('cron' => 0), ' id_thumb_section = '. (int) $thumbSecId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateThumbnailById( $link = '', $thumbId = 0 )
  {
    self::$registry->getService('storage')->update( 'thumbnail', array('link' => $link), ' id_thumb = '. (int) $thumbId );

    return self::$registry->getService('storage')->executed();
  }

  public function resizeRuleList()
  {
    $qry = "SELECT
              id_rule, device, viewport, min_size, max_size, resize, width, height
            FROM
              thumbnail_resize_rule";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function thumbSectionList()
  {
    $qry = "SELECT
              id_thumb_section, kind, type, cron
            FROM
              thumbnail_section";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $key => $value)
      {
        $data[ $key ]->entity_list  = $this->entityListByThumbId($value->id_thumb_section, $value->type);
        $data[ $key ]->resize_rules = $this->resizeRuleListByThumbId( $value->id_thumb_section );

      }
      return $data;
    }
    return null;
  }

  public function entityListByThumbId( $thumbSecId = 0, $typeId = 0 )
  {
    $qry = "SELECT
              id_entity
            FROM
              thumbnail_section_entity_ids";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $ids = [];

      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        $ids[] = (int) $value->id_entity;
      }
      switch((int) $typeId)
      {
        case 1:
          return $this->categoryList(false, null, $ids);
        case 2:
          return $this->attributeList(false, null, $ids);
        case 3:
          return $this->attributeValueList(null, $ids);
        default:
          return null;
      }
    }
    return null;
  }

  public function resizeRuleListByThumbId( $thumbSecId = 0 )
  {
    $qry = "SELECT
              id_rule
            FROM
              thumbnail_section_resize_rules";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function thumbLinkListByResizeRuleId( $ruleId = 0 )
  {
    $qry = "SELECT
              link
            FROM
              thumbnail";
    $keys = array(
      ':id_rule' => (int) $ruleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function thumbLinkListByThumbSecId( $thumbSecId = 0 )
  {
    $qry = "SELECT
              link
            FROM
              thumbnail";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function resizeRuleById( $ruleId = 0 )
  {
    $qry = "SELECT
              id_rule, device, viewport, min_size, max_size, resize, width, height
            FROM
              thumbnail_resize_rule";
    $keys = array(
      ':id_rule' => (int) $ruleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function thumbCronTaskList()
  {
    $qry = "SELECT
              *
            FROM
              thumbnail_cron_tasks";
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function thumbListByParams( $thumbSecId = 0, $resizeRuleId = 0 )
  {
    $qry = "SELECT
              id_thumb, id_file
            FROM
              thumbnail";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId,
      ':id_resize_rule'   => (int) $resizeRuleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function thumbnailSectionIdByKind( $kindId = 0, $typeId = 0 )
  {
    $qry = "SELECT
              id_thumb_section
            FROM
              thumbnail_section";
    $keys = array(
      ':kind' => (int) $kindId,
      ':type' => (int) $typeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_thumb_section : 0;
  }

  public function thumbSectionIdsByResizeRuleId( $ruleId = 0 )
  {
    $qry = "SELECT
              id_thumb_section
            FROM
              thumbnail_section_resize_rules";
    $keys = array(
      ':id_rule' => (int) $ruleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult() : null;
  }
  
  public function thumbnailLinkByParams( $fileId = 0, $kind = 1, $sectionId = 0 )
  {
    if(is_array(self::$resizes) && (count(self::$resizes) > 0))
    {
      if((int) $kind === 1)
      {
        return $this->__defaultThumbLink( $fileId );
      }
      else 
      {
        foreach(self::$resizes as $resize)
        {
          if((int) $resize->kind === $kind) 
          {
            if(((int) $resize->type === 2) ||
              ((is_array($resize->ids) && (count($resize->ids) > 0)) && in_array($sectionId, $resize->ids))  
            ) {
              return $this->__thubnailLinkByFRIds(
                $fileId,
                $resize->id_resize
              );
            }
          }
        }
        return $this->__defaultThumbLink( $fileId );
      }
    }
    return null;
  }
  
  private function __defaultThumbLink( $fileId = 0 )
  {
    foreach(self::$resizes as $resize)
    {
      if($resize->kind === 1)
      {
        return $this->__thubnailLinkByFRIds(
          $fileId,
          $resize->id_resize
        );
      }
    }
  }
  
  private function __thubnailLinkByFRIds( $fileId = 0, $resize = 0 )
  {
    $qry = "SELECT
              link
            FROM
              thumbnail";
    $keys = array(
      ':id_file' => (int) $fileId,
      ':resize'  => (int) $resize
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0]->link : null;
  }

  public function resizeIdByVisitDevice()
  {
    if((bool) $this->haveResizeRules() === true)
    {
      $detector = self::$registry->getService('idetector')->detect();
      
      if(is_object($detector) &&
        (isset($detector->isComputer) && isset($detector->isTablet)) &&
        (isset($detector->isMobile) || isset($detector->isMobileDevice)) &&
        (isset($detector->screenattributes) && is_object($detector->screenattributes)) &&
        (isset($detector->screenattributes->windowWidth) && isset($detector->screenattributes->windowHeight)) &&
        ((float)$detector->screenattributes->windowWidth > 0) &&
        ((float)$detector->screenattributes->windowHeight > 0)
      ) {
        $resizes = [];
        // FIND RESIZE RULE
        $qry = "SELECT
                  a.id_thumb_section, a.kind, a.type, c.device, 
                  c.viewport, c.min_size, c.max_size, c.resize
                FROM
                  thumbnail_section a
                INNER JOIN
                  thumbnail_section_resize_rules b
                ON
                  a.id_thumb_section = b.id_thumb_section
                INNER JOIN
                  thumbnail_resize_rule c
                ON
                  b.id_rule = c.id_rule";
        self::$registry->getService('storage')->executeQuery( $qry );

        if(self::$registry->getService('storage')->rowCount() > 0)
        {
          $width   = (float) $detector->screenattributes->windowWidth;
          $height  = (float) $detector->screenattributes->windowHeight;
          
          foreach(self::$registry->getService('storage')->getResult() as $value)
          {
            switch ((int) $value->viewport) 
            {
              // [ 0 ]
              case 0:
                $resizes[] = (object) array(
                  'device'    => (int) $value->device,
                  'id_resize' => (int) $value->resize,
                  'kind'      => (int) $value->kind,
                  'type'      => (int) $value->type,
                  'ids'       => (((int) $value->kind !== 1) && ((int) $value->type !== 0)) ? $this->__sectionIdsByThumbSecId( $value->id_thumb_section ) : null
                );
                break;
              // [ 1 ] min-width
              case 1:
                if($width >= (float) $value->min_size) 
                {
                  $resizes[] = (object) array(
                    'device'    => (int) $value->device,
                    'id_resize' => (int) $value->resize,
                    'kind'      => (int) $value->kind,
                    'type'      => (int) $value->type,
                    'ids'       => (((int) $value->kind !== 1) && ((int) $value->type !== 0)) ? $this->__sectionIdsByThumbSecId( $value->id_thumb_section ) : null
                  );
                }
                break;
              // [ 2 ] max-width
              case 2:
                if($width <= (float) $value->max_size) 
                {
                  $resizes[] = (object) array(
                    'device'    => (int) $value->device,
                    'id_resize' => (int) $value->resize,
                    'kind'      => (int) $value->kind,
                    'type'      => (int) $value->type,
                    'ids'       => (((int) $value->kind !== 1) && ((int) $value->type !== 0)) ? $this->__sectionIdsByThumbSecId( $value->id_thumb_section ) : null
                  );
                }
                break;
              // [ 3 ] min-height
              case 3:
                if($height >= (float) $value->min_size) 
                {
                  $resizes[] = (object) array(
                    'device'    => (int) $value->device,
                    'id_resize' => (int) $value->resize,
                    'kind'      => (int) $value->kind,
                    'type'      => (int) $value->type,
                    'ids'       => (((int) $value->kind !== 1) && ((int) $value->type !== 0)) ? $this->__sectionIdsByThumbSecId( $value->id_thumb_section ) : null
                  );
                }
                break;
              // [ 4 ] max-height
              case 4:
                if($height <= (float) $value->max_size) 
                {
                  $resizes[] = (object) array(
                    'device'    => (int) $value->device,
                    'id_resize' => (int) $value->resize,
                    'kind'      => (int) $value->kind,
                    'type'      => (int) $value->type,
                    'ids'       => (((int) $value->kind !== 1) && ((int) $value->type !== 0)) ? $this->__sectionIdsByThumbSecId( $value->id_thumb_section ) : null
                  );
                }
                break;
              // [ 5 ] min-width / max-width
              case 5:
                if(($width >= (float) $value->min_size) &&
                    ($width <= (float) $value->max_size)
                ) {
                  $resizes[] = (object) array(
                    'device'    => (int) $value->device,
                    'id_resize' => (int) $value->resize,
                    'kind'      => (int) $value->kind,
                    'type'      => (int) $value->type,
                    'ids'       => (((int) $value->kind !== 1) && ((int) $value->type !== 0)) ? $this->__sectionIdsByThumbSecId( $value->id_thumb_section ) : null
                  );
                }
                break;
              // [ 6 ] min-height / max-height
              case 6:
                if(($height >= (float) $value->min_size) &&
                    ($height <= (float) $value->max_size)
                ) {
                  $resizes[] = (object) array(
                    'device'    => (int) $value->device,
                    'id_resize' => (int) $value->resize,
                    'kind'      => (int) $value->kind,
                    'type'      => (int) $value->type,
                    'ids'       => (((int) $value->kind !== 1) && ((int) $value->type !== 0)) ? $this->__sectionIdsByThumbSecId( $value->id_thumb_section ) : null
                  );
                }
                break;
            }
          }
        }
        if(is_array($resizes) && (count($resizes) > 0))
        {
          foreach($resizes as $resize)
          {
            switch($resize->device)
            {
              // [ 1 ] ALL
              case 1:
                self::$resizes[] = $resize;
                
                break;
              // [ 2 ] DESKTOP
              case 2:
                if((bool) $detector->isComputer === true) 
                {
                  self::$resizes[] = $resize;
                }
                break;
              // [ 3 ] TABLET & MOBILE
              case 3:
                
                break;
              // [ 4 ] TABLET
              case 4:
                if((bool) $detector->isTablet === true) 
                {
                  self::$resizes[] = $resize;
                }
                break;
              // [ 5 ] MOBILE
              case 5:
                if(((bool) $detector->isTablet === false) &&
                  (((bool) $detector->isMobile === true) || ((bool)$detector->isMobileDevice === true))
                ) {
                  self::$resizes[] = $resize;
                }
                break;
            }
          }
        }
      }
    }
  }
  
  private function __sectionIdsByThumbSecId( $thumbSecId = 0 )
  {
    $qry = "SELECT
              id_entity
            FROM
              thumbnail_section_entity_ids";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $ids = [];

      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        $ids[] = (int) $value->id_entity;
      }
      return $ids;
    }
    return null;
  }
  
  public function isResizeRuleUnique( $device = 0, $viewport = 0, $min = 0, $max = 0, $resize = 0, $width = 0, $height = 0 )
  {
    $qry = "SELECT
            id_rule
          FROM
            thumbnail_resize_rule";
    $keys = array(
        ':device'   => (int)$device,
        ':viewport' => (int)$viewport,
        ':min_size' => (float)$min,
        ':max_size' => (float)$max,
        ':resize'   => (int)$resize,
        ':width'    => (float)$width,
        ':height'   => (float)$height
    );
    self::$registry->getService('storage')->executeQuery($qry, $keys);

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function isResizeRuleById( $ruleId = 0 )
  {
    $qry = "SELECT
              id_rule
            FROM
              thumbnail_resize_rule";
    $keys = array(
      ':id_rule' => (int) $ruleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function isThumbnailSectionById( $thumbSecId = 0 )
  {
    $qry = "SELECT
              id_thumb_section
            FROM
              thumbnail_section";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function isThumbResizeRuleById( $thumbSecId = 0, $ruleId = 0 )
  {
    $qry = "SELECT
              id_thumb_section
            FROM
              thumbnail_section_resize_rules";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId,
      ':id_rule'          => (int) $ruleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function isUniqueThumbnailByIds( $thumbSecId = 0, $id_resize_rule = 0, $id_file = 0 )
  {
    $qry = "SELECT
              id_thumb_section
            FROM
              thumbnail";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId,
      ':id_resize_rule'   => (int) $id_resize_rule,
      ':id_file'          => (int) $id_file
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }

  public function isUniqueThumbSection( $kindId = 0, $typeId = 0 )
  {
    $qry = "SELECT
              id_thumb_section
            FROM
              thumbnail_section";
    $keys = array(
      ':kind' => (int) $kindId,
      ':type' => (int) $typeId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }

  public function isUniqueThumbEntity( $thumbSecId = 0, $entityId = 0 )
  {
    $qry = "SELECT
              id_thumb_section
            FROM
              thumbnail_section_entity_ids";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId,
      ':id_entity'        => (int) $entityId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isUniqueCronThumbByParams( $thumbSecId = 0, $resizeRuleId = 0, $width = 0.00, $height = 0.00, $resize_method = '' )
  {
    $qry = "SELECT
              id_job
            FROM
              thumbnail_cron_tasks";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId,
      ':id_resize_rule'   => (int) $resizeRuleId,
      ':width'            => (float) $width,
      ':height'           => (float) $height,
      ':resize_method'    => $resize_method
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function haveResizeRules()
  {
    $qry = "SELECT
              (count(id_rule)) as avx
            FROM
              thumbnail_resize_rule";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      return ((int) self::$registry->getService('storage')->getResult()[0]->avx > 0) ? true : false;
    }
    return false;
  }

  public function haveThumbSectionOneResizeRuleById( $thumbSecId = 0 )
  {
    $qry = "SELECT
              (count(id_rule)) as avx
            FROM
              thumbnail_section_resize_rules";
    $keys = array(
      ':id_thumb_section' => (int) $thumbSecId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      return ((int) self::$registry->getService('storage')->getResult()[0]->avx === 1) ? true : false;
    }
    return false;
  }

  public function haveFileThumbnailById( $fileId = 0 )
  {
    $qry = "SELECT
              (count(id_file)) as avx
            FROM
              thumbnail";
    $keys = array(
      ':id_file' => (int) $fileId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      return ((int) self::$registry->getService('storage')->getResult()[0]->avx > 0) ? true : false;
    }
    return false;
  }
  
  public function deleteThumbCronTaskById( $jobId = 0 )
  {
    self::$registry->getService('storage')->delete( 'thumbnail_cron_tasks', ':id_job' , (int) $jobId );

    return self::$registry->getService('storage')->executed();
  }

  public function deleteResizeRuleById( $ruleId = 0 )
  {
    $thumbSecIds = $this->thumbSectionIdsByResizeRuleId( $ruleId );

    if(is_array($thumbSecIds) && (count($thumbSecIds) > 0))
    {
      foreach($thumbSecIds as $thumbSec)
      {
        if((bool) $this->haveThumbSectionOneResizeRuleById( $thumbSec->id_thumb_section ) === true)
        {
          $this->deleteThumbSectionById( $thumbSec->id_thumb_section );
        }
      }
      $this->deleteThumbImageByLinks(
        $this->thumbLinkListByResizeRuleId( $ruleId )
      );
    }
    self::$registry->getService('storage')->delete( 'thumbnail_resize_rule', ':id_rule' , (int) $ruleId );

    return self::$registry->getService('storage')->executed();
  }

  public function deleteThumbSectionById( $thumbSecId = 0 )
  {
    $this->deleteThumbImageByLinks(
      $this->thumbLinkListByThumbSecId( $thumbSecId )
    );
    // STATUS
    $status = [];
    // ST 1
    self::$registry->getService('storage')->delete( 'thumbnail', ':id_thumb_section', (int) $thumbSecId );

    $status[] = self::$registry->getService('storage')->executed();
    // ST 2
    self::$registry->getService('storage')->delete( 'thumbnail_section', ':id_thumb_section', (int) $thumbSecId );

    $status[] = self::$registry->getService('storage')->executed();
    // ST 3
    self::$registry->getService('storage')->delete( 'thumbnail_section_entity_ids', ':id_thumb_section', (int) $thumbSecId );

    $status[] = self::$registry->getService('storage')->executed();
    // ST 4
    self::$registry->getService('storage')->delete( 'thumbnail_section_resize_rules', ':id_thumb_section', (int) $thumbSecId );

    $status[] = self::$registry->getService('storage')->executed();
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }

  public function deleteThumbImageByLinks( $links = null )
  {
    if(is_array($links) && (count($links) > 0))
    {
      foreach($links as $link)
      {
        $this->deleteThumbImageByLink( $link->link );
      }
    }
  }

  public function deleteThumbImageByLink( $link = '' )
  {
    if(is_file(__PUBLIC_PATH__ . $link))
    {
      chdir(__PUBLIC_PATH__ . '/files/cached/');

      return unlink(__PUBLIC_PATH__ . $link);
    }
    return false;
  }
  
  /*********************************************************************************************************
  *
  * WAREHOUSE
  *
  *********************************************************************************************************/
  
  public function insertWarehouse( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertWarehouseAvailableCountry( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_country', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertWHExpeditionTime( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_expedition_time', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertWarehouseRelation( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_relation', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertWarehouseALRelationData( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_al_relation', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertArticleToWarehouse( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_al', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function addArticleToWarehouseET( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_et_al', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertWHMatrix( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_matrix', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertMatrixParABv( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_matrix_parameters', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertWHMatrixParQty( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_matrix_parameters_qty', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertMatrixAGColor( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_warehouse_matrix_parameters_group', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateWarehouseById( $changes = null, $whId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_warehouse', $changes, ' id_wh = '. (int) $whId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateWarehouseETById( $changes = null, $whEtId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_warehouse_expedition_time', $changes, ' id_et = '. (int) $whEtId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateWarehouseArticleById( $changes = null, $whId = 0, $articleId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_warehouse_al', $changes, ' id_wh = '. (int) $whId . ' AND id_article = '. (int) $articleId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateWHMatrixParById( $changes = null, $mdId = 0, $parVId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_warehouse_matrix_parameters', $changes, ' id_matrix = '. (int) $mdId . ' AND id_value = '. (int) $parVId );
    
    return self::$registry->getService('storage')->executed();
  }

  public function updateWHMatrixParQtyById( $qty = 0, $mdId = 0, $parAVId = 0, $parBVId= 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_warehouse_matrix_parameters_qty', array('qty' => (int) $qty), ' id_matrix = '. (int) $mdId . ' AND id_par_a = '. (int) $parAVId . ' AND id_par_b = '. (int) $parBVId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function warehouseById( $whId = 0 )
  {
    $qry = "SELECT
              id_wh, id_type, id_usage, id_currency, id_tax, id_wh_country,
              referer, name, street, zip, phone_1, phone_2, fax, email, secure_key
            FROM
              app_store_warehouse";
    $keys = array(
      ':id_wh' => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->country  = $this->__warehouseCountryListById( $whId ); 
      $data->currency = (((int) $data->id_currency > 0) && $this->isCurrencyById( $data->id_currency )) ? $this->currencyDataById( $data->id_currency ) : null;
      $data->tax      = (((int) $data->id_tax > 0) && $this->isTaxById( $data->id_tax )) ? $this->taxDataById( $data->id_tax ) : null;
      
      return $data;
    }
    return null;
  }
  
  public function whETById( $whEtId = 0 )
  {
    $qry = "SELECT
              id_et, id_wh, num_val, unit_time
            FROM
              app_store_warehouse_expedition_time";
    $keys = array(
      ':id_et' => (int) $whEtId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function whExpeditionTimeToArticleById( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              b.num_val, b.unit_time
            FROM
              app_store_warehouse_et_al a
            INNER JOIN
              app_store_warehouse_expedition_time b
            ON
              a.id_et = b.id_et";
    $keys = array(
      ':a.id_wh'      => (int) $whId,
      ':a.id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function countWarehouses()
  {
    $qry = "SELECT
              (count(id_wh)) as avx
            FROM
              app_store_warehouse";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function countArticlesByWarehouseId( $whId = 0, $ignoreList = null, $useList = null )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_warehouse_al";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE id_article NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= ((count($ignoreList) === 0) ? ' WHERE ' : ' AND ' )." id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':id_wh' => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function countWHETArticlesByIds( $whEtId = 0, $ignoreList = null, $useList = null )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_warehouse_et_al";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE id_article NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= ((count($ignoreList) === 0) ? ' WHERE ' : ' AND ' )." id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':id_et' => (int) $whEtId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function warehouseList( $pagination = false )
  {
    $qry = "SELECT
              id_wh, id_type, id_usage, id_currency, id_tax, 
              name, secure_key
            FROM
              app_store_warehouse";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $key => $value) {
        $statistic = $this->__warehouseStatisticById( $value->id_wh );
        
        $data[ $key ]->type     = $this->__warehouseTypeName( $value->id_type );
        $data[ $key ]->usage    = $this->__warehouseUsageName( $value->id_usage );
        $data[ $key ]->country  = $this->__warehouseCountryListById( $value->id_wh ); 
        $data[ $key ]->currency = (((int) $value->id_currency > 0) && $this->isCurrencyById( $value->id_currency )) ? $this->currencyDataById( $value->id_currency ) : null;
        $data[ $key ]->tax      = (((int) $value->id_tax > 0) && $this->isTaxById( $value->id_tax )) ? $this->taxDataById( $value->id_tax ) : null;
        $data[ $key ]->total_products = (is_object($statistic)) ? (int) $statistic->ava : 0;
        $data[ $key ]->total_value    = (is_object($statistic)) ? self::$registry->getService('helper')->money_format( $statistic->avb ) : 0;
        
        unset($data[ $key ]->id_type);
        unset($data[ $key ]->id_usage);
        unset($data[ $key ]->id_currency);
        unset($data[ $key ]->id_tax);
      }
      return $data;
    }
    return null;
  } 
  
  private function __warehouseStatisticById( $whId = 0 )
  {
    $qry = "SELECT  (
              SELECT 
                (COUNT(id_article)) as t
              FROM   
                app_store_warehouse_al
              WHERE
                id_wh = ".(int) $whId."
              ) AS ava,
              (
              SELECT
                (round(sum(a.qty * b.retail_price), 3)) as t
              FROM
                app_store_warehouse_al a
              INNER JOIN
                app_store_warehouse_al_relation b
                ON
                  a.id_wh = b.id_wh
                AND
                  a.id_rel = b.id_rel
              WHERE
                a.id_wh = ".(int) $whId."
              ) AS avb";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  private function __warehouseTypeName( $typeId = 0 )
  {
    switch((int) $typeId) {
      case 1:
        return self::$registry->getService('translator')->translate('store_warehouse_option_global');
      case 2:
        return self::$registry->getService('translator')->translate('store_warehouse_option_physical');
      case 3:
        return self::$registry->getService('translator')->translate('store_warehouse_option_virtual');
      default:
        return null;
    }
  }
  
  private function __warehouseUsageName( $usageId = 0 )
  {
    switch((int) $usageId) {
      case 1:
        return self::$registry->getService('translator')->translate('store_warehouse_option_online_store');
      case 2:
        return self::$registry->getService('translator')->translate('store_warehouse_option_retail_store');
      case 3:
        return self::$registry->getService('translator')->translate('store_warehouse_option_reseller');
      case 4:
        return self::$registry->getService('translator')->translate('store_warehouse_option_transport');
      default:
        return null;
    }
  }
  
  private function __warehouseCountryListById( $whId = 0 )
  {
    $qry = "SELECT
                a.id_country, b.country_name
            FROM
                app_store_warehouse_country a
            INNER JOIN
                app_languages b
            ON
                a.id_country = b.id_lang";
    $keys = array(
      ':id_wh' => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[ (int) $value->id_country ] = $value;
      }
      return $data;
    }
    return null;
  }
  
  public function whExpeditionTimeList( $whId = 0 )
  {
    $qry = "SELECT
              id_et, num_val, unit_time
            FROM
              app_store_warehouse_expedition_time";
    $keys = array(
      ':id_wh' => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $key => $value) {
        $data[ $key ] = $value;
        $data[ $key ]->total_products = $this->countWHETArticlesByIds($value->id_et, null, null);
      }
      return $data;
    }
    return null;
  }
  
  public function warehouseALIdsById( $whId = 0 )
  {
    $qry = "SELECT
              id_article, id_matrix, qty, enabled
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_wh' => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function whETAALIdsByWHId( $whId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_warehouse_et_al";
    $keys = array(
      ':id_wh' => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function whETAALIdsBywhEtId( $whEtID = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_warehouse_et_al";
    $keys = array(
      ':id_et' => (int) $whEtID
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function warehouseALById( $whId = 0, $pagination = false, $ignoreList = null, $useList = null, $sortRuleId = 0, $matrixOff = false )
  {
    $qry = "SELECT
              a.id_article, d.article_name_internal, d.sku, d.id_image, d.id_gallery,
              a.id_matrix, a.qty, a.enabled,  b.id_action, c.former_price, c.cost_difference, 
              c.retail_price, c.tax_price, c.retail_tax_price
            FROM
              app_store_warehouse_al a
            INNER JOIN
              app_store_warehouse_relation b
            ON
              a.id_rel = b.id_rel
            AND
              a.id_wh = b.id_wh
            AND
              a.id_article = b.id_article
            INNER JOIN
              app_store_warehouse_al_relation c
            ON
              a.id_rel = c.id_rel
            AND
              a.id_wh = c.id_wh
            AND
              a.id_article = c.id_article
            INNER JOIN
              app_store_article d
            ON
              a.id_article = d.id_article";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE a.id_article NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= ((count($ignoreList) === 0) ? ' WHERE ' : ' AND ' )." a.id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':a.id_wh' => (int) $whId
    );
    $filter = $this->__sortWALById( $sortRuleId );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->matrix           = (((bool) $matrixOff === false) && ((int) $value->id_matrix > 0) && ((bool) $this->isWHMatrixById( $value->id_matrix ) === true)) ? $this->__whMatrixDataById( $value->id_matrix ) : null;
        $data[ $key ]->former_price     = self::$registry->getService('helper')->money_format( $value->former_price );
        $data[ $key ]->cost_difference  = self::$registry->getService('helper')->money_format( $value->cost_difference );
        $data[ $key ]->retail_price     = self::$registry->getService('helper')->money_format( $value->retail_price );
        $data[ $key ]->tax_price        = self::$registry->getService('helper')->money_format( $value->tax_price );
        $data[ $key ]->retail_tax_price = self::$registry->getService('helper')->money_format( $value->retail_tax_price );
        $data[ $key ]->image            = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        
        unset($data[ $key ]->id_matrix);
        unset($data[ $key ]->id_image);
        unset($data[ $key ]->id_gallery);
      }
      return $data;
    }
    return null;
  }
  
  private function __whMatrixDataById( $matrixId = 0 )
  {
    $qry = "SELECT
              id_matrix, secure_key
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':id_matrix' => (int) $matrixId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  private function __sortWALById( $sortRuleId = 0 )
  {
    switch((int) $sortRuleId) {
      case 1:
        return "ORDER BY d.article_name_internal ASC";
      case 2:
        return "ORDER BY d.article_name_internal DESC";
      case 3:
        return "ORDER BY c.retail_tax_price ASC";
      case 4:
        return "ORDER BY c.retail_tax_price DESC";
      case 5:
        return "ORDER BY d.created ASC";
      case 6:
        return "ORDER BY d.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(d.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(d.upd_date) DESC";
      default:
        return "ORDER BY a.id_article ASC";
    }
  }
  
  public function whETALById( $whEtID = 0, $pagination = false, $ignoreList = null, $useList = null, $sortRuleId = 0 )
  {
    $qry = "SELECT
              a.id_article, b.id_image, b.id_gallery, 
              b.sku, b.article_name_internal 
            FROM
              app_store_warehouse_et_al a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE a.id_article NOT IN (".implode(",",$ignoreList).")";
    }
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= ((count($ignoreList) === 0) ? ' WHERE ' : ' AND ' )." a.id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':a.id_et' => (int) $whEtID
    );
    $filter = $this->__sortWhEtALById( $sortRuleId );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->image = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        
        unset($data[ $key ]->id_image);
        unset($data[ $key ]->id_gallery);
      }
      return $data;
    }
    return null;
  }
  
  private function __sortWhEtALById( $sortRuleId = 0 )
  {
    switch((int) $sortRuleId) {
      case 1:
        return "ORDER BY b.article_name_internal ASC";
      case 2:
        return "ORDER BY b.article_name_internal DESC";
      case 3:
        return "ORDER BY b.retail_tax_price ASC";
      case 4:
        return "ORDER BY b.retail_tax_price DESC";
      case 5:
        return "ORDER BY b.created ASC";
      case 6:
        return "ORDER BY b.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(b.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(b.upd_date) DESC";
      default:
        return "ORDER BY a.id_article ASC";
    }
  }
  
  public function warehouseLastRelationDataById( $whId = 0 )
  {
    $qry = "SELECT
              id_action, (round(`value`, 2)) as value
            FROM
              app_store_warehouse_relation";
    $keys = array(
      ":id_wh" => (int) $whId
    );
    $filter = 'ORDER BY created DESC LIMIT 1';
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function warehouseQtyByWAId( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              qty
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_wh'      => (int) $whId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->qty : 0;
  }
  
  public function whMatrixArticleDataById( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_wh'      => (int) $whId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $matrixId = (int) self::$registry->getService('storage')->getResult()[0]->id_matrix;
      
      if((bool) $this->isWHMatrixById( $matrixId ) === true) {
        $data = new stdClass();
        $data->id_wh     = (int) $whId;
        $data->id_matrix = $matrixId;
        $data->parA      = $this->__whMatrixParList($matrixId, 1);
        $data->parB      = $this->__whMatrixParList($matrixId, 2);
        
        return $data;
      }
      return null;
    }
    return null;
  }
  
  public function prevWHMatrixById( $whId = 0, $articleId = 0 )
  {
    if(((bool) $this->isWarehouseById( $whId ) === true) &&
      ((bool) $this->isArticleById( $articleId ) === true)    
    ) {       
      $qry = "SELECT 
                b.secure_key, (c.article_name_internal) as title
              FROM 
                app_store_warehouse_al a
              INNER JOIN
                app_store_warehouse_matrix b
              ON
                a.id_matrix = b.id_matrix
              INNER JOIN
                app_store_article c
              ON
                a.id_article = c.id_article
              WHERE 
                a.id_wh = ".(int) $whId."
              AND
                a.id_matrix != 0
              AND
                a.id_article = (
                                SELECT 
                                  max(id_article) 
                                FROM 
                                  app_store_warehouse_al 
                                WHERE
                                  id_wh = ".(int) $whId."
                                AND
                                  id_matrix != 0
                                AND 
                                  id_article < ".(int) $articleId.")";
                  
      self::$registry->getService('storage')->executeQuery( $qry );
      
      return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
    }
    return null;
  }
  
  public function nextWHMatrixById( $whId = 0, $articleId = 0 )
  {
    if(((bool) $this->isWarehouseById( $whId ) === true) &&
      ((bool) $this->isArticleById( $articleId ) === true)    
    ) {       
      $qry = "SELECT 
                b.secure_key, (c.article_name_internal) as title
              FROM 
                app_store_warehouse_al a
              INNER JOIN
                app_store_warehouse_matrix b
              ON
                a.id_matrix = b.id_matrix
              INNER JOIN
                app_store_article c
              ON
                a.id_article = c.id_article
              WHERE 
                a.id_wh = ".(int) $whId."
              AND
                a.id_matrix != 0
              AND
                a.id_article = (
                                SELECT 
                                  min(id_article) 
                                FROM 
                                  app_store_warehouse_al 
                                WHERE
                                  id_wh = ".(int) $whId."
                                AND
                                  id_matrix != 0
                                AND 
                                  id_article > ".(int) $articleId.")";
                  
      self::$registry->getService('storage')->executeQuery( $qry );
      
      return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
    }
    return null;
  }
  
  public function whMatrixById( $matrixId = 0 )
  {
    $qry = "SELECT
              a.id_matrix, a.id_wh, a.id_article, a.secure_key, b.qty
            FROM
              app_store_warehouse_matrix a
            INNER JOIN
              app_store_warehouse_al b
            ON
              a.id_wh = b.id_wh
            AND
              a.id_article = b.id_article
            AND
              a.id_matrix = b.id_matrix";
    $keys = array(
      ':a.id_matrix' => (int) $matrixId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->parA = (object) array(
        'tags' => $this->__whMatrixParTags($matrixId, 1),
        'list' => $this->__whMatrixParList($matrixId, 1)
      );
      $data->parB = (object) array(
        'tags' => $this->__whMatrixParTags($matrixId, 2),
        'list' => $this->__whMatrixParList($matrixId, 2)
      );
      $data->data = $this->whMatrixQtyById( $matrixId );
      
      return $data;
    }
    return null;
  }
  
  private function __whMatrixParTags( $matrixId = 0, $parId = 0 )
  {
    $attrIds = $this->whMatrixAttrIdsById(
      $matrixId,
      $parId     
    );
    if(is_array($attrIds) && (count($attrIds) > 0)) {
      $qry = "SELECT
                (a.attribute_name_public) as attr_name, (b.color) as agc
              FROM
                app_store_attribute_lang a
              LEFT JOIN
                app_store_warehouse_matrix_parameters_group b
              ON
                a.id_attribute = b.id_attr
              WHERE
                a.id_attribute IN (".implode(",",$attrIds).")";
      $keys = array(
        ':a.id_lang'   => ($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes(),
        ':b.id_matrix' => (int) $matrixId
      );
      $filter = "GROUP BY a.id_attribute";
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
      
      return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
    }
    return null;
  }
  
  private function __whMatrixParList( $matrixId = 0, $parId = 0 )
  {
    $parXVs = $this->whMatrixParABVsById(
      $matrixId,
      $parId,
      false,
      false
    );
    if(is_array($parXVs) && (count($parXVs) > 0)) {
      $data = [];
      
      foreach($parXVs as $parXv) {
        $data[] = $this->__whMatrixParDataById(
          $matrixId,
          $parXv->id_value,
          $parId
        );
      }
      return $data;
    }
    return null;
  }
  
  private function __whMatrixParDataById( $matrixId = 0, $parXv = 0, $parId = 0 ) 
  {
    $qry = "SELECT
              a.id_value, a.id_cost_differce, b.color, c.value,
              (round(a.cost_difference, 2)) as cost_difference,
              (d.color) as agc
            FROM
              app_store_warehouse_matrix_parameters a
            INNER JOIN
              app_store_attribute_value b
            ON
              a.id_value = b.id_value
            AND
              a.id_attr = b.id_attribute
            INNER JOIN
              app_store_attribute_value_lang c
            ON
              a.id_attr = c.id_attribute
            AND
              a.id_value = c.id_value
            LEFT JOIN
              app_store_warehouse_matrix_parameters_group d
            ON
              a.id_matrix = d.id_matrix
            AND
              a.id_attr = d.id_attr";
    $keys = array(
      ':a.id_matrix' => $matrixId,
      ':a.id_value'  => $parXv,
      ':c.id_lang'   => ($this->__haveSupportLanguageAttributeValue(0, self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributeValue()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->total = $this->__whMatrixParXVt(
        $matrixId,
        $parXv,
        $parId    
      );
      return $data;
    }
    return null;
  }
  
  private function __whMatrixParXVt( $matrixId = 0, $parXv = 0, $parId = 0 )
  {
    switch((int) $parId) {
      case 1:
        return $this->whMatrixParXVtByParId(
          $matrixId,
          $parXv,
          1
        );
      case 2:
        return $this->whMatrixParXVtByParId(
          $matrixId,
          $parXv,
          2
        );
      default:
        return 0;
    }
  }
  
  public function whMatrixParXVtByParId( $matrixId = 0, $parXv = 0, $parId = 0 ) 
  {
    $qry = "SELECT
              (sum(qty)) as qty
            FROM
              app_store_warehouse_matrix_parameters_qty";
    $keys = array(
      ':id_matrix' => (int) $matrixId
    );
    if((int) $parId === 1) {
      $keys[':id_par_a'] = (int) $parXv;
    } else if((int) $parId === 2) {
      $keys[':id_par_b'] = (int) $parXv;
    } else {
      return 0;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->qty : 0;
  }
  
  public function whMatrixQtyById( $matrixId = 0 )
  {
    $parAVs = $this->__whMatrixParXVsById($matrixId, 1);
    $parBVs = $this->__whMatrixParXVsById($matrixId, 2);
    $parXVs = [];
    
    if((is_array($parAVs) && (count($parAVs) > 0)) && 
      (is_array($parBVs) && (count($parBVs) > 0))
    ) {
      foreach($parAVs as $i => $parAV) {
        foreach($parBVs as $y => $parBV) {
          if((bool) $this->isWHMatrixParCombinationByIds(
            $matrixId,
            $parAV,
            $parBV    
          ) === true) {
            $parXVs[ $i ][ $y ] = (object) array(
              'parA' => $parAV,
              'parB' => $parBV,
              'qty'  => $this->whMatrixParXYQtyById(
                $matrixId,
                $parAV,
                $parBV
              )
            );
          }
        }
      }
      return (count($parXVs) > 0) ? $parXVs : null;
    }
    return null;
  }
  
  private function __whMatrixParXVsById( $matrixId = 0, $parId = 0 )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $matrixId,
      ':id_par'    => (int) $parId
    );
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data   = [];
      
      foreach($result as $value) {
        $data[] = (int) $value->id_value;
      }
      return $data;
    }
    return null;
  }
  
  public function whMatrixParXYQtyById( $whId = 0, $parAVId = 0, $parBVId = 0 )
  {
    $qry = "SELECT
              qty
            FROM
              app_store_warehouse_matrix_parameters_qty";
    $keys = array(
      ':id_matrix' => (int) $whId,
      ':id_par_a'  => (int) $parAVId,
      ':id_par_b'  => (int) $parBVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->qty : 0;
  }
  
  public function whMatrixAttrIdsById( $matrixId = 0, $parId = 0 )
  {
    $qry = "SELECT
              id_attr
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $matrixId,
      ':id_par'    => (int) $parId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data   = [];
      
      foreach($result as $value) {
        $data[] = (int) $value->id_attr;
      }
      return $data;
    }
    return null;
  }
  
  public function whMatrixAttrList( $matrixId = 0, $parId = 0 )
  {
    if((bool) $this->isWHMatrixById($matrixId) === false) {
      return null;
    }
    $qry = "SELECT
              *
            FROM 
              (
                SELECT
                  a.id_attribute, (count(a.id_value)) as total,
                  (b.attribute_name_public) as attr_name
                FROM
                  app_store_attribute_value a
                INNER JOIN
                  app_store_attribute_lang b
                ON
                  a.id_attribute = b.id_attribute
                AND
                  b.id_lang = ".(($this->__haveSupportLanguageAttributes(self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributes())."
                GROUP BY 
                  a.id_attribute
              ) as result
            WHERE
              result.total > 0";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data   = [];
      
      foreach($result as $key => $value) {
        if((bool) $this->isWHMatrixParByAttrId($matrixId, $value->id_attribute) === false) {
          $data[] = $result[ $key ];
        } else {
          $vT = $this->__countWHMatrixParByAttrId($matrixId, $value->id_attribute);
          
          if(((bool) $this->haveWHMatrixParAttrById($matrixId, $parId, $value->id_attribute) === true) && 
            ((int) $value->total > $vT)  
          ) {
            $data[] = (object) array(
              'id_attribute' => (int) $value->id_attribute,
              'total'        => ((int) $value->total - $vT),
              'attr_name'    => $value->attr_name
            );
          }
        }
      }
      return $data;
    }
    return null;
  }
  
  private function __countWHMatrixParByAttrId( $matrixId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              (count(id_attr)) as avx
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $matrixId,
      ':id_attr'   => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function whMatrixAttrVListByAttrId( $matrixId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              a.id_attribute, a.id_value, a.color, b.value
            FROM
              app_store_attribute_value a
            INNER JOIN
              app_store_attribute_value_lang b
            ON
              a.id_attribute = b.id_attribute
            AND
              a.id_value = b.id_value";
    if(((int) $matrixId > 0) && ((bool) $this->isWHMatrixById($matrixId) === true)) {
      $aVIds = $this->__whMatrixAttrVIdsById($matrixId, $attrId);
      
      if(!is_null($aVIds)) {
        $qry .= " WHERE a.id_value NOT IN (".$aVIds.")";
      }
    }
    $keys = array(
      ':a.id_attribute' => (int) $attrId,
      ':b.id_lang'      => ($this->__haveSupportLanguageAttributeValue($attrId, self::$registry->getService('languages')->getCurrentLanguage())) ? self::$registry->getService('languages')->getCurrentLanguage() : $this->__getSupportLanguageAttributeValue()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
      
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __whMatrixAttrVIdsById( $matrixId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $matrixId,
      ':id_attr'   => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data   = [];
      
      foreach($result as $value) {
        $data[] = (int) $value->id_value;
      }
      return (is_array($data) && (count($data) > 0)) ? implode(',',$data) : null;
    }
    return null;
  }
  
  public function whMatrixParABVsById( $mId = 0, $parId = 0, $unprocessed = false, $force = false )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_par'    => (int) $parId
    );
    if((bool) $force === true) {
      $keys[':is_unprocessed'] = ((bool) $unprocessed === true) ? 1 : 0;
    }
    $filter = "ORDER BY position ASC";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function whMatrixParABVsQty( $mId = 0 )
  {
    $qry = "SELECT
              (sum(qty)) as qty
            FROM
              app_store_warehouse_matrix_parameters_qty";
    $keys = array(
      ':id_matrix' => (int) $mId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->qty : 0;
  }
  
  public function whMatrixCheckParYByParXId( $whId = 0, $mId = 0, $articleRef = '', $parAId = 0, $parBId = 0, $cmd = 0 )
  {
    if(((int) $cmd === 1) || ((int) $cmd === 2)) {
      $articleId = ((bool) $this->isArticleByReference( $articleRef ) === true) ? $this->articleIdByReference( $articleRef ) : 0;
      
      if(((bool) $this->isArticleById( $articleId ) === true) &&
        ((bool) $this->isWarehouseById( $whId ) === true) &&
        ((bool) $this->isWHMatrixById( $mId ) === true) && 
        ((((int) $cmd === 1) && ((bool) $this->isWHMatrixParByAttrVId($mId, $parAId) === true)) || ((((int) $cmd === 2) && ((bool) $this->isWHMatrixParByAttrVId($mId, $parBId) === true))))
      ) {
        switch((int) $cmd) {
          case 1:
            return $this->__whMatrixParXAvailableListByParAId(
              $whId,
              $mId,
              $articleId,
              $parAId
            );
          case 2:
            return $this->__whMatrixParXAvailableListByParBId(
              $whId,
              $mId,
              $articleId,
              $parBId
            );
        }
      }
      return null;
    }
    return null;
  }
  
  private function __whMatrixParXAvailableListByParAId( $whId = 0, $mId = 0, $articleId = 0, $parXId = 0 )
  {
    $qry = "SELECT
              (b.id_par_b) as parXId, qty
            FROM
              app_store_warehouse_matrix a
            INNER JOIN
              app_store_warehouse_matrix_parameters_qty b
            ON 
              a.id_matrix = b.id_matrix";
    $keys = array(
      ':a.id_matrix'  => (int) $mId,
      ':a.id_wh'      => (int) $whId,
      ':a.id_article' => (int) $articleId,
      ':b.id_par_a'   => (int) $parXId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  private function __whMatrixParXAvailableListByParBId( $whId = 0, $mId = 0, $articleId = 0, $parXId = 0 )
  {
    $qry = "SELECT
              (b.id_par_a) as parXId, qty
            FROM
              app_store_warehouse_matrix a
            INNER JOIN
              app_store_warehouse_matrix_parameters_qty b
            ON 
              a.id_matrix = b.id_matrix";
    $keys = array(
      ':a.id_matrix'  => (int) $mId,
      ':a.id_wh'      => (int) $whId,
      ':a.id_article' => (int) $articleId,
      ':b.id_par_b'   => (int) $parXId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function whMatrixParlastPositionNumById( $mId = 0, $parId = 0 )
  {
    $qry = "SELECT
              position
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_par'    => (int) $parId 
    );
    $filter = "ORDER BY position DESC LIMIT 1";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? ((int) self::$registry->getService('storage')->getResult()[0]->position + 1) : 1;
  }

  public function whMatrixParIdById( $mId = 0, $parXVId = 0 )
  {
    $qry = "SELECT
              id_par
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_value'  => (int) $parXVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_par : 0;
  }
  
  public function warehouseIdBySecureKey( $secureKey = '' )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse";
    $keys = array(
      ":secure_key" => (string) $secureKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_wh : 0;
  }
  
  public function warehouseIds()
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function warehouseSecureKeyById( $whId = 0 )
  {
    $qry = "SELECT
              secure_key
            FROM
              app_store_warehouse";
    $keys = array(
      ":id_wh" => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (string) self::$registry->getService('storage')->getResult()[0]->secure_key : null;
  }
  
  public function warehouseIdByWHMId( $matrixId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':id_matrix' => (int) $matrixId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_wh : 0;
  }
  
  public function warehouseIdByArticleId( $articleId = 0 )
  {    
    $cId = self::$registry->getService('helper')->getCountryId();
        
    if(self::$registry->getService('languages')->isCountryById( $cId ) === true) 
    {
      return ((bool) $this->__isWHArticleByCountryId($articleId, $cId) === true) ? $this->__whIdByACId($articleId, $cId) : (((bool) $this->isWarehouseByCountryId( $cId ) === true) ? 0 : $this->__whIdByAId( $articleId ));
    }
    return 0;
  }
  
  private function __isWHArticleByCountryId( $articleId = 0, $countryId = 0 )
  {
    $qry = "SELECT
              b.id_wh
            FROM
              app_store_warehouse_al a
            INNER JOIN
              app_store_warehouse b
            ON
              a.id_wh = b.id_wh
            INNER JOIN
              app_store_warehouse_country c
            ON
              a.id_wh = c.id_wh";
    $keys = array(
      ':a.id_article' => (int) $articleId,
      ':b.id_type'    => 3,
      ':b.id_usage'   => 1,
      ':c.id_country' => (int) $countryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  private function __whIdByACId( $articleId = 0, $countryId = 0 )
  {
    $qry = "SELECT
              b.id_wh
            FROM
              app_store_warehouse_al a
            INNER JOIN
              app_store_warehouse b
            ON
              a.id_wh = b.id_wh
            INNER JOIN
              app_store_warehouse_country c
            ON
              a.id_wh = c.id_wh";
    $keys = array(
      ':a.id_article' => (int) $articleId,
      ':b.id_type'    => 3,
      ':b.id_usage'   => 1,
      ':c.id_country' => (int) $countryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_wh : 0;
  }
  
  private function __whIdByAId( $articleId = 0 )
  {
    $qry = "SELECT
              b.id_wh
            FROM
              app_store_warehouse_al a
            INNER JOIN
              app_store_warehouse b
            ON
              a.id_wh = b.id_wh";
    $keys = array(
      ':a.id_article' => (int) $articleId,
      ':b.id_type'    => 3,
      ':b.id_usage'   => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $whId = (int) self::$registry->getService('storage')->getResult()[0]->id_wh;
      
      return ((bool) $this->isWHGlobalById( $whId ) === true) ? $whId : 0;
    }
    return 0;
  }
  
  public function warehouseSecureKeyByMatrixId( $mId = 0 )
  {
    $qry = "SELECT
              b.secure_key
            FROM
              app_store_warehouse_matrix a
            INNER JOIN
              app_store_warehouse b
            ON
              a.id_wh = b.id_wh";
    $keys = array(
      ":id_matrix" => (int) $mId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (string) self::$registry->getService('storage')->getResult()[0]->secure_key : null;
  }
  
  public function whMatrixIdBySecureKey( $secureKey = '' )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':secure_key' => (string) $secureKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_matrix : null;
  }
  
  public function whMatrixSecureKeyById( $mId = 0 )
  {
    $qry = "SELECT
              secure_key
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ":id_matrix" => (int) $mId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (string) self::$registry->getService('storage')->getResult()[0]->secure_key : null;
  }
  
  public function whMatrixIdByWHArticleId( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_wh'      => (int) $whId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_matrix : 0;
  }
  
  public function haveWarehouseArticleById( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_wh'      => (int) $whId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveWarehouseETArticleById( $whEtId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_warehouse_et_al";
    $keys = array(
      ':id_et'      => (int) $whEtId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveArticleWHMatrixById( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_wh'      => (int) $whId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $matrixId = (int) self::$registry->getService('storage')->getResult()[0]->id_matrix;
      
      return ($matrixId > 0) ? $this->isWHMatrixById( $matrixId ) : false; 
    }
    return false;
  }
  
  public function haveWHMatrixArticleById( $matrixId = 0, $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':id_matrix'  => (int) $matrixId,
      ':id_wh'      => (int) $whId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveWHMatrixParVsById( $mId = 0, $parId = 0 )
  {
    $qry = "SELECT
              id_value
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_par'    => (int) $parId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveWHMatrixParAttrById( $matrixId = 0, $parId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              id_attr
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $matrixId,
      ':id_par'    => (int) $parId,
      ':id_attr'   => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveWHMatrixAGColorById( $mId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix_parameters_group";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_attr'   => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveWHMatrixAGByColor( $color = '' )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix_parameters_group";
    $keys = array(
      ':color' => (string) $color
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveWHMAtrixQtyAC( $matrixId = 0 )
  {
    if((bool) $this->isWHMatrixById( $matrixId ) === true) {
      $qry = "SELECT  (
                SELECT 
                  (COUNT(id_matrix)) as t
                FROM   
                  app_store_warehouse_matrix_parameters
                WHERE
                  id_matrix = ".(int) $matrixId."
                AND
                  id_par = 1
                ) AS ava,
                (
                SELECT 
                  (COUNT(id_matrix)) as t
                FROM   
                  app_store_warehouse_matrix_parameters
                WHERE
                  id_matrix = ".(int) $matrixId."
                AND
                  id_par = 2
                ) AS avb,
                (
                SELECT 
                  (COUNT(id_matrix)) as t
                FROM   
                  app_store_warehouse_matrix_parameters_qty
                WHERE
                  id_matrix = ".(int) $matrixId."
                ) AS avx";
      self::$registry->getService('storage')->executeQuery( $qry );

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = self::$registry->getService('storage')->getResult()[0];
        
        return (((int) $data->avx > 0) && ((int) $data->avx === ((int) $data->ava * (int) $data->avb))) ? true : false;
      }
      return false;
    }
    return false;
  }
  
  public function isWarehouseById( $whId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse";
    $keys = array(
      ':id_wh' => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWarehouseByRef( $ref = '' )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse";
    $keys = array(
      ":referer" => (string) $ref
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWarehouseBySecureKey( $secureKey = '' )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse";
    $keys = array(
      ":secure_key" => (string) $secureKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWarehouseByCountryId( $countryId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse_country";
    $keys = array(
      ':id_country' => (int) $countryId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWHGlobalById( $whId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse_country";
    $keys = array(
      ":id_wh" => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isWHArticlePublishById( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              enabled
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_wh'      => (int) $whId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (((int) self::$registry->getService('storage')->getResult()[0]->enabled === 1) ? true : false) : false;
  }
  
  public function isWHExpeditionTime( $whEtId = 0 )
  {
    $qry = "SELECT
              id_et
            FROM
              app_store_warehouse_expedition_time";
    $keys = array(
      ':id_et' => (int) $whEtId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWarehouseRelationById( $whId = 0, $relId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_warehouse_relation";
    $keys = array(
      ':id_wh'  => (int) $whId,
      ':id_rel' => (int) $relId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWHMatrixByWHAId( $whId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              a.id_matrix
            FROM
              app_store_warehouse_matrix a
            INNER JOIN
              app_store_warehouse_al b
            ON
              a.id_wh = b.id_wh
            AND
              a.id_article = b.id_article
            INNER JOIN
              app_store_warehouse c	
            ON
              a.id_wh = c.id_wh";
    $keys = array(
      ':a.id_wh'      => (int) $whId,
      ':a.id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWHMatrixById( $matrixId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':id_matrix' => (int) $matrixId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWhMatrixBySecureKey( $secureKey = '' )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':secure_key' => (string) $secureKey
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWHMatrixParByAttrId( $mId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_attr'   => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWHMatrixParByAttrVId( $mId = 0, $attrVId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_value'  => (int) $attrVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWHMatrixParCombinationByIds( $mId = 0, $parAVId = 0, $parBVId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix_parameters_qty";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_par_a'  => (int) $parAVId,
      ':id_par_b'  => (int) $parBVId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isWHMatrixArticleById( $mId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':id_matrix'  => (int) $mId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isArticleManageWH( $articleId = 0 )
  {
    $qry = "SELECT
              (count(id_article)) as t
            FROM
              app_store_warehouse_al";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return ((int) $data->t > 0) ? true : false;
    }
    return false;
  }
  
  public function deleteWarehouseById( $whId = 0 )
  {
    $status = [];

    // ST 0
    $status[] = $this->deleteWarehouseFALById( $whId );
    // ST 1
    self::$registry->getService('storage')->delete( 'app_store_warehouse_country', ':id_wh', (int) $whId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 2
    self::$registry->getService('storage')->delete( 'app_store_warehouse', ':id_wh', (int) $whId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RETURN
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  public function deleteWarehouseArticleById( $whId = 0, $articleId = 0 )
  {
    $status = [];

    // ST 1
    self::$registry->getService('storage')->delete( 'app_store_warehouse_al', array(':id_wh' => (int) $whId, ':id_article' => (int) $articleId) );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 3
    self::$registry->getService('storage')->delete( 'app_store_warehouse_al_relation', array(':id_wh' => (int) $whId, ':id_article' => (int) $articleId) );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 4
    self::$registry->getService('storage')->delete( 'app_store_warehouse_relation', array(':id_wh' => (int) $whId, ':id_article' => (int) $articleId) );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RETURN
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  public function deleteWarehouseFALById( $whId = 0 )
  {
    $status = [];
    $mIds   = $this->__whMatrixIdsByWId( $whId );
    
    // ST 0
    if(is_array($mIds) && (count($mIds) > 0)) {
      foreach($mIds as $m) {
        $status[] = $this->deleteWHMatrixDeleteF( $m->id_matrix );
      }
    }
    // ST 1
    self::$registry->getService('storage')->delete( 'app_store_warehouse_al', ':id_wh', (int) $whId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 3
    self::$registry->getService('storage')->delete( 'app_store_warehouse_al_relation', ':id_wh', (int) $whId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 4
    self::$registry->getService('storage')->delete( 'app_store_warehouse_relation', ':id_wh', (int) $whId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }

  private function __whMatrixIdsByWId( $whId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix";
    $keys = array(
      ':id_wh'  => (int) $whId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function deleteWarehouseETArticleById( $whETId = 0, $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_warehouse_et_al', array(':id_et' => (int) $whETId, ':id_article' => (int) $articleId) );

    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteWarehouseETArticlesById( $whETId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_warehouse_et_al', ':id_et', (int) $whETId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteWHExpeditionTimeByWHEtId( $whETId = 0 )
  {
    $status = [];
    
    // ST 0
    self::$registry->getService('storage')->delete( 'app_store_warehouse_expedition_time', ':id_et', (int) $whETId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 1
    self::$registry->getService('storage')->delete( 'app_store_warehouse_et_al', ':id_et', (int) $whETId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  public function deleteImpactWarehuseETByWHId( $whId = 0 )
  {
    $status = [];
    
    // ST 0
    self::$registry->getService('storage')->delete( 'app_store_warehouse_expedition_time', ':id_wh', (int) $whId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 1
    self::$registry->getService('storage')->delete( 'app_store_warehouse_et_al', ':id_wh', (int) $whId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  public function deleteWarehouseAVCountryListById( $whId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_warehouse_country', ':id_wh', (int) $whId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteWHMatrixParById( $mId = 0, $attrVId = 0, $parId = 0 )
  {
    if(((bool) $this->isWHMatrixById($mId) === true) &&
      ((bool) $this->isWHMatrixParByAttrVId($mId, $attrVId) === true) &&
      (((int) $parId === 1) || ((int) $parId === 2))
    ) {
      $attrId = $this->attributeIdByAVId( $attrVId );
      $status = [];

      switch((int) $parId) {
        case 1:
          // ST 1
          self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters', array(':id_matrix' => (int) $mId, ':id_par' => 1, ':id_value' => (int) $attrVId) );

          $status[] = self::$registry->getService('storage')->executed();
          // ST 2
          self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters_qty', array(':id_matrix' => (int) $mId, ':id_par_a' => (int) $attrVId) );

          $status[] = self::$registry->getService('storage')->executed();
          break;
        case 2:
          // ST 1
          self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters', array(':id_matrix' => (int) $mId, ':id_par' => 2, ':id_value' => (int) $attrVId) );

          $status[] = self::$registry->getService('storage')->executed();
          // ST 2
          self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters_qty', array(':id_matrix' => (int) $mId, ':id_par_b' => (int) $attrVId) );

          $status[] = self::$registry->getService('storage')->executed();
          break;
        default:
          return false;
      }
      if((bool) $this->__allowDeleteWHMatrixAGColor(
        $mId,
        $attrId
      ) === true) {
        self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters_group', array(':id_matrix' => (int) $mId, ':id_attr' => (int) $attrId) );

        $status[] = self::$registry->getService('storage')->executed();
      }
      return (count($status) > 0) ? self::$registry->getService('helper')->checkStatus($status) : false;
    }
    return false;
  }
  
  private function __allowDeleteWHMatrixAGColor( $mId = 0, $attrId = 0 )
  {
    $qry = "SELECT
              id_matrix
            FROM
              app_store_warehouse_matrix_parameters";
    $keys = array(
      ':id_matrix' => (int) $mId,
      ':id_attr'   => (int) $attrId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function deleteWHMatrixDeleteF( $matrixId = 0 )
  {
    $status = [];
    
    // ST 1
    self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix', ':id_matrix', (int) $matrixId );

    $status[] = self::$registry->getService('storage')->executed();
    // ST 2
    self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters', ':id_matrix', (int) $matrixId );

    $status[] = self::$registry->getService('storage')->executed();
    // ST 3
    self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters_group', ':id_matrix', (int) $matrixId );

    $status[] = self::$registry->getService('storage')->executed();
    // ST 4
    self::$registry->getService('storage')->delete( 'app_store_warehouse_matrix_parameters_qty', ':id_matrix', (int) $matrixId );

    $status[] = self::$registry->getService('storage')->executed();
    // ST 5
    self::$registry->getService('storage')->update( 'app_store_warehouse_al', array('id_matrix' => 0, 'qty' => 0), ' id_matrix = '. (int) $matrixId );

    $status[] = self::$registry->getService('storage')->executed();
    // RESULT
    return (count($status) > 0) ? self::$registry->getService('helper')->checkStatus($status) : false;
  }
  
  /*********************************************************************************************************
  *
  * HIGH LOW PRICE BALANCE [ OBV ]
  *
  *********************************************************************************************************/
  
  public function highLowPriceInStock()
  {
    $dObj = (object) array(
      'minPrice' => 0,
      'maxPrice' => 0
    );
    $qry = "SELECT
              (
                SELECT
                  (round(retail_tax_price, 0)) as minPrice
                FROM
                  app_store_article
                WHERE
                	retail_tax_price != 0
                ORDER BY
                  retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  (round(retail_tax_price, 0)) as maxPrice
                FROM
                  app_store_article
                WHERE
                	retail_tax_price != 0
                ORDER BY
                  retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowPriceBalanceByCategoryId( $categoryId = 0, $round = true, $global = false )
  {
    $dObj = (object) array(
      'minPrice' => 0,
      'maxPrice' => 0
    );
    if((bool) $this->isCategoryById( $categoryId ) === false) {
      return $dObj;
    }
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_category b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_category = ".(int) $categoryId.(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_category b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_category = ".(int) $categoryId.(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowPriceBalanceByAttrId( $attrId = 0, $round = true, $global = false )
  {
    $dObj = (object) array(
      'minPrice' => 0,
      'maxPrice' => 0
    );
    if((bool) $this->isAttributeById( $attrId ) === false) {
      return $dObj;
    }
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_attribute = ".(int) $attrId.(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_attribute = ".(int) $attrId.(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowPriceBalanceByAttrVId( $attrId = 0, $attrVId = 0, $round = true, $global = false )
  {
    $dObj = (object) array(
      'minPrice' => 0,
      'maxPrice' => 0
    );
    if((bool) $this->isAttributeById($attrId, $attrVId) === false) {
      return $dObj;
    }
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_value = ".(int) $attrVId.(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_value = ".(int) $attrVId.(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowPriceBalanceByAttrVIds( $attrId = 0, $attrVIds = null, $round = true, $global = false )
  {
    $dObj = (object) array(
      'minPrice' => 0,
      'maxPrice' => 0
    );
    if($this->isAttributeById( $attrId ) && (is_array($attrVIds) && (count($attrVIds) > 0))) {
      return $this->__highLowPriceBalanceByAttrVIdsV1(
        $attrId,
        $attrVIds,
        $dObj,
        $round,
        $global
      );
    }
    if(((int) $attrId === 0) && (is_array($attrVIds) && (count($attrVIds) > 0))) {
      return $this->__highLowPriceBalanceByAttrVIdsV2(
        $attrVIds,
        $dObj,
        $round,
        $global
      );
    }
    return $dObj;
  }
  
  private function __highLowPriceBalanceByAttrVIdsV1( $attrId = 0, $attrVIds = null, $dObj = null, $round = true, $global = false )
  {
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_attribute = ".(int) $attrId."
                AND
                  b.id_value IN (".implode(',',$attrVIds).")".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_attribute = ".(int) $attrId."
                AND
                  b.id_value IN (".implode(',',$attrVIds).")".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  private function __highLowPriceBalanceByAttrVIdsV2( $attrVIds = null, $dObj = null, $round = true, $global = false )
  {
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_value IN (".implode(',',$attrVIds).")".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_article_attribute b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_value IN (".implode(',',$attrVIds).")".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowPriceBalanceByDiscountCircuits( $round = true, $global = false )
  {
    $dObj = (object) array(
      'minPrice' => 0,
      'maxPrice' => 0
    );
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_discount_circuits_articles b
                ON
                  a.id_article = b.id_article
                INNER JOIN
                  app_store_discount_circuits c
                ON
                  b.id_circuit = c.id_circuit
                AND
                  c.enabled = 1 ".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_discount_circuits_articles b
                ON
                  a.id_article = b.id_article
                INNER JOIN
                  app_store_discount_circuits c
                ON
                  b.id_circuit = c.id_circuit
                AND
                  c.enabled = 1 ".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowPriceBalanceByDiscountCircuitById( $dCircuitId = 0, $round = true, $global = false )
  {
    $dObj = (object) array(
      'minPrice' => 0,
      'maxPrice' => 0
    );
    if((bool) $this->isDiscountCircuitById( $dCircuitId ) === false) {
      return $dObj;
    }
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_discount_circuits_articles b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_circuit = ".(int) $dCircuitId."
                INNER JOIN
                  app_store_discount_circuits c
                ON
                  b.id_circuit = c.id_circuit
                AND
                  c.enabled = 1 ".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price ASC
                LIMIT 1
              ) as minPrice,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(a.retail_tax_price, 0))' : '(a.retail_tax_price)' )." as minPrice
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_discount_circuits_articles b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_circuit = ".(int) $dCircuitId."
                INNER JOIN
                  app_store_discount_circuits c
                ON
                  b.id_circuit = c.id_circuit
                AND
                  c.enabled = 1 ".(((bool) $global === true) ? '' : ' WHERE a.enabled = 1 ')."
                ORDER BY
                  a.retail_tax_price DESC
                LIMIT 1
              ) as maxPrice";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }

  public function highLowArticlesWidthBalance( $round = true, $global = false )
  {
    $dObj = (object) array(
      'minWidth' => 0,
      'maxWidth' => 0
    );
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(width, 0))' : '(width)' )." as minWidth
                FROM
                  app_store_article
                ".(((bool) $global === true) ? '' : ' WHERE enabled = 1 ')."
                ORDER BY
                  width ASC
                LIMIT 1
              ) as minWidth,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(width, 0))' : '(width)' )." as maxWidth
                FROM
                  app_store_article
                ".(((bool) $global === true) ? '' : ' WHERE enabled = 1 ')."
                ORDER BY
                  width DESC
                LIMIT 1
              ) as maxWidth";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowArticlesHeightBalance( $round = true, $global = false )
  {
    $dObj = (object) array(
      'minHeight' => 0,
      'maxHeight' => 0
    );
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(height, 0))' : '(height)' )." as minHeight
                FROM
                  app_store_article
                ".(((bool) $global === true) ? '' : ' WHERE enabled = 1 ')."
                ORDER BY
                  height ASC
                LIMIT 1
              ) as minHeight,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(height, 0))' : '(height)' )." as maxHeight
                FROM
                  app_store_article
                ".(((bool) $global === true) ? '' : ' WHERE enabled = 1 ')."
                ORDER BY
                  height DESC
                LIMIT 1
              ) as maxHeight";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  public function highLowArticlesDepthBalance( $round = true, $global = false )
  {
    $dObj = (object) array(
      'minDepth' => 0,
      'maxDepth' => 0
    );
    $qry = "SELECT
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(depth, 0))' : '(depth)' )." as minDepth
                FROM
                  app_store_article
                ".(((bool) $global === true) ? '' : ' WHERE enabled = 1 ')."
                ORDER BY
                  depth ASC
                LIMIT 1
              ) as minDepth,
              (
                SELECT
                  ".(((bool) $round === true) ? '(round(depth, 0))' : '(depth)' )." as maxDepth
                FROM
                  app_store_article
                ".(((bool) $global === true) ? '' : ' WHERE enabled = 1 ')."
                ORDER BY
                  depth DESC
                LIMIT 1
              ) as maxDepth";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : $dObj;
  }
  
  /*********************************************************************************************************
  *
  * CURRENCY
  *
  *********************************************************************************************************/
  
  public function insertCurrency( $data = null ) 
  {
    self::$registry->getService('storage')->insert( 'app_store_currency', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateCurrencyById( $changes = null, $currencyId = 0 ) 
  {
    self::$registry->getService('storage')->update( 'app_store_currency', $changes, ' id_currency = '. (int) $currencyId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function currencyDataById( $currencyId = 0 )
  {
    $qry = "SELECT
              id_currency, currency_name, iso_code, iso_code_num,
              sign, blank, format, decimals, conversion_rate, active
            FROM
              app_store_currency";
    $keys = array(
      ':id_currency' => (int) $currencyId  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function currenciesCount()
  {
    $qry = "SELECT
              id_currency
            FROM
              app_store_currency";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return self::$registry->getService('storage')->rowCount();
  }
  
  public function selectAllCurencies()
  {
    $qry = "SELECT
              id_currency, currency_name, iso_code, 
              iso_code_num, sign, active
            FROM
              app_store_currency";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function isCurrencyById( $currencyId = 0 )
  {
    $qry = "SELECT
              id_currency
            FROM
              app_store_currency";
    $keys = array(
     ':id_currency' => (int) $currencyId   
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteCurrencyById( $currencyId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_currency', ':id_currency' , (int) $currencyId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /*********************************************************************************************************
  *
  * TAX
  *
  *********************************************************************************************************/
  
  public function insertTax( $data = null ) 
  {
    self::$registry->getService('storage')->insert( 'app_store_tax', $data );
    
    return (self::$registry->getService('storage')->affectedRows() == 1) ? true : false;
  }
  
  public function updateTaxById( $changes = null, $taxId = 0 ) 
  {
    self::$registry->getService('storage')->update( 'app_store_tax', $changes, ' id_tax = '. (int) $taxId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function taxDataById( $taxId = 0 )
  { 
    $qry = "SELECT
              id_tax, tax_name, rate, active
            FROM
              app_store_tax";
    $keys = array(
      ':id_tax' => (int) $taxId  
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function taxesCount()
  {
    $qry = "SELECT
              id_tax
            FROM
              app_store_tax";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return self::$registry->getService('storage')->rowCount();
  }
  
  public function selectAllTaxes()
  {
    $qry = "SELECT
              id_tax, tax_name, rate, active
            FROM
              app_store_tax";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function isTaxById( $taxId = 0 )
  {
    $qry = "SELECT
              id_tax
            FROM
              app_store_tax";
    $keys = array(
     ':id_tax' => (int) $taxId   
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteTaxById( $taxId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_tax', ':id_tax' , (int) $taxId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  /*********************************************************************************************************
  *
  * OFFER
  *
  *********************************************************************************************************/
  
  public function insertOffer( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_offer', $data );
    
    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertItemToOffer( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_offer_article', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertOfferCostById( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_offer_cost', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateOfferById( $changes = null, $offerId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_offer', $changes, ' id_offer = '. (int) $offerId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateOfferCostById( $changes = null, $offerId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_offer_cost', $changes, ' id_offer = '. (int) $offerId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function updateOfferItemById( $changes = null, $itemId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_offer_article', $changes, ' id_item = '. (int) $itemId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function totalOffers()
  {
    $qry = "SELECT
              (count(id_offer)) as avx
            FROM
              app_store_offer";
    self::$registry->getService('storage')->executeQuery( $qry );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function offerList( $pagination = false )
  {
    $qry = "SELECT
              id_offer, id_user, is_buy_enabled, is_buy_closed, o_hash, recipient_email,
              date_from, date_until, allow_buy, enabled, buy_date
            FROM
              app_store_offer";
    $filter = "ORDER BY created DESC";
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, null, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, null, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->cost = $this->offerCostById( $value->id_offer );
      }
      return $data;
    }
    return null;
  }
  
  public function offerCalcCostById( $offerId = 0 )
  {
    $qry = "SELECT
              (count(id_article)) as total_items, (sum(former_price)) as total_former, (sum(total_discount)) as total_discount, (sum(amount)) as total_amount
            FROM
              app_store_offer_article";
    $keys = array(
      ':id_offer' => (int) $offerId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult()[0] : null;
  }
  
  public function offerById( $offerId = 0 )
  {
    $qry = "SELECT
              id_offer, id_currency, id_tax, id_email, id_lang, o_hash, e_hash, 
              recipient_email, date_from, date_until, notice, allow_buy, enabled 
            FROM
              app_store_offer";
    $keys = array(
      ':id_offer' => (int) $offerId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data              = self::$registry->getService('storage')->getResult()[0];
      $data->cost        = $this->offerCostById( $offerId );
      $data->articleList = $this->offerArticleListById($offerId, $data->id_lang);
      
      return $data;
    }
    return null;
  }
  
  public function offerCostById( $offerId = 0 )
  {
    $qry = "SELECT
              total_items, total_former, total_discount, total_amount
            FROM
              app_store_offer_cost";
    $keys = array(
      ':id_offer' => (int) $offerId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      $data->percent_discount = round(($data->total_discount / $data->total_former) * 100, 0);
      $data->total_former     = self::$registry->getService('helper')->money_format( $data->total_former );
      $data->total_discount   = self::$registry->getService('helper')->money_format( $data->total_discount );
      $data->total_amount     = self::$registry->getService('helper')->money_format( $data->total_amount );
    }
    return (isset($data) && count($data) > 0) ? $data : null;
  }
  
  public function offerArticleListById( $offerId = 0, $langId = 0 )
  {
    $qry = "SELECT
              a.id_item, a.id_article, a.id_type_of_discount, a.former_price, 
              a.discount_value, a.total_discount, a.amount,
              b.id_image, b.id_gallery, b.sku, b.article_name_internal
            FROM
              app_store_offer_article a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article";
    $keys = array(
      ':id_offer' => (int) $offerId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $routeId = $this->articleRouteIdByArticleId($value->id_article, $langId);
        $path    = (self::$registry->getService('router')->isRouteById( $routeId )) ? self::$registry->getService('router')->routeById( $routeId )->path : null;
        
        $data[ $key ]->former_price     = self::$registry->getService('helper')->money_format( $value->former_price );
        $data[ $key ]->discount_value   = self::$registry->getService('helper')->money_format( $value->discount_value );
        $data[ $key ]->total_discount   = self::$registry->getService('helper')->money_format( $value->total_discount );
        $data[ $key ]->retail_tax_price = self::$registry->getService('helper')->money_format( $value->amount );
        $data[ $key ]->image            = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
        $data[ $key ]->path             = $path;

        unset($data[ $key ]->id_image);
        unset($data[ $key ]->id_gallery);
      }
      return $data;
    }
    return null;
  }
  
  public function offerIdByHash( $offerHash = '' )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':o_hash' => (string) $offerHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_offer : null;
  }
  
  public function offerIdByEH( $emailHash = '' )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':e_hash' => (string) $emailHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_offer : null;
  }
  
  public function offerHashById( $offerId = 0 )
  {
    $qry = "SELECT
              o_hash
            FROM
              app_store_offer";
    $keys = array(
      ':id_offer' => (int) $offerId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? (string) self::$registry->getService('storage')->getResult()[0]->o_hash : null;
  }
  
  public function isUniqueOfferOH( $hash = '' )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':o_hash' => (string) $hash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isUniqueOfferEH( $hash = '' )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':e_hash' => (string) $hash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? false : true;
  }
  
  public function isOfferById( $offerId = 0 )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':id_offer' => (int) $offerId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isOfferByHash( $offerHash = '' )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':o_hash' => (string) $offerHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isOfferByEH( $emailHash = '' )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':e_hash' => (string) $emailHash
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isOfferCostById( $offerId = 0 )
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer_cost";
    $keys = array(
      ':id_offer' => (int) $offerId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isItemOnOfferALById( $itemId = 0 )
  {
    $qry = "SELECT
              id_item
            FROM
              app_store_offer_article";
    $keys = array(
      ':id_item' => (int) $itemId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  private function __isOfferDiscount()
  {
    $qry = "SELECT
              id_offer
            FROM
              app_store_offer";
    $keys = array(
      ':id_user'        => (int) self::$registry->getService('controller')->getUserId(),
      ':is_buy_enabled' => 1,
      ':allow_buy'      => 0,
      ':enabled'        => 0
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
		
    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteItemFromOfferById( $itemId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_offer_article', ':id_item', (int) $itemId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteOfferById( $offerId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_offer', ':id_offer', (int) $offerId );
    self::$registry->getService('storage')->delete( 'app_store_offer_article', ':id_offer', (int) $offerId );
    self::$registry->getService('storage')->delete( 'app_store_offer_cost', ':id_offer', (int) $offerId );
    
    return self::$registry->getService('storage')->executed();
  }

  /*********************************************************************************************************
  *
  * DISCOUNT CIRCUITS
  *
  *********************************************************************************************************/

  public function insertDiscountCircuit( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_discount_circuits', $data );

    return self::$registry->getService('storage')->lastInsertId();
  }

  public function insertDiscountCircuitLang( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_discount_circuits_lang', $data );

    return self::$registry->getService('storage')->executed();
  }

  public function insertDiscountCircuitSectionValue( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_discount_circuits_section_values', $data );

    return self::$registry->getService('storage')->executed();
  }

  public function insertArticleToDiscountCircuit( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_discount_circuits_articles', $data );

    return self::$registry->getService('storage')->executed();
  }

  public function insertUserIdOnDiscCircuit( $data = null )
  {
    self::$registry->getService('storage')->insert( 'app_store_discount_circuits_clients', $data );

    return self::$registry->getService('storage')->executed();
  }

  public function updateDiscountCircuitById( $change = null, $dCircuitId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_discount_circuits', $change, ' id_circuit = '. (int) $dCircuitId );

    return self::$registry->getService('storage')->executed();
  }

  public function updateDiscountCircuitLangById( $changes = null, $dCircuitId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_discount_circuits_lang', $changes, ' id_circuit = '. (int) $dCircuitId . ' AND id_lang = '. (int) $langId );

    return self::$registry->getService('storage')->executed();
  }

  public function updateDiscCurcuitOnDiscCircuitByArticleId( $change = null, $articleId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_discount_circuits_articles', $change, ' id_article = '. (int) $articleId );

    return self::$registry->getService('storage')->executed();
  }

  public function updateDiscountCircuitRouteById( $routeId = 0, $dCircuitId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'app_store_discount_circuits_lang', array('id_route' => (int) $routeId), ' id_circuit = '. (int) $dCircuitId . ' AND id_lang = '. (int) $langId );
        
    return self::$registry->getService('storage')->executed();
  }
  
  public function discountCircuitObjByRouteId( $routeId = 0 )
  {
    $qry = "SELECT
              a.id_circuit, a.id_lang
            FROM
              app_store_discount_circuits_lang a
            INNER JOIN
              app_store_discount_circuits b
            ON
              a.id_circuit = b.id_circuit";
    $keys = array(
      ':a.id_route' => (int) $routeId,
      ':b.enabled'  => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->path = self::$registry->getService('router')->routeById( $routeId )->path;
      
      return $data;
    }
    return null;
  }

  public function totalArticlesOnDiscountCircuits( $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    if($this->isAttributeValueById(0, $manufacturerId)) {
      return $this->__totalArticlesOnDiscountCircuitsV2(
        $langId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
    }
    return $this->__totalArticlesOnDiscountCircuitsV1(
      $langId,
      $priceFrom,
      $priceUpTo
    );
  }
  
  private function __totalArticlesOnDiscountCircuitsV1( $langId = 0, $priceFrom = 0, $priceUpTo = 0 )
  {
    $qry = "SELECT
              d.id_circuit, a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($value->id_circuit, $value->id_article) === true) {
          $data[] = (int) $value->id_article;
        }
      }
      return count($data);
    }
    return 0;
  }
  
  private function __totalArticlesOnDiscountCircuitsV2( $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    $qry = "SELECT
              d.id_circuit, a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            INNER JOIN
              app_store_article_attribute e
            ON
              a.id_article = e.id_article
            AND
              e.id_value = ".(int) $manufacturerId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($value->id_circuit, $value->id_article) === true) {
          $data[] = (int) $value->id_article;
        }
      }
      return count($data);
    }
    return 0;
  }

  public function countArticlesByDiscountCircuitId( $dCircuitId = 0, $useList = null )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_discount_circuits_articles";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }
  
  public function totalArticlesOnDiscountCircuitOnSiteById( $dCircuitId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    if($this->isAttributeValueById(0, $manufacturerId)) {
      return $this->__totalArticlesOnDiscountCircuitOnSiteByIdV2(
        $dCircuitId,
        $langId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
    }
    return $this->__totalArticlesOnDiscountCircuitOnSiteByIdV1(
      $dCircuitId,
      $langId,
      $priceFrom,
      $priceUpTo
    );
  }
  
  private function __totalArticlesOnDiscountCircuitOnSiteByIdV1( $dCircuitId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0 )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            AND
              c.id_circuit = ".(int) $dCircuitId."
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($dCircuitId, $value->id_article) === true) {
          $data[] = (int) $value->id_article;
        }
      }
      return count($data);
    }
    return 0;
  }
  
  private function __totalArticlesOnDiscountCircuitOnSiteByIdV2( $dCircuitId = 0, $langId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            AND
              c.id_circuit = ".(int) $dCircuitId."
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            INNER JOIN
              app_store_article_attribute e
            ON
              a.id_article = e.id_article
            AND
              e.id_value = ".(int) $manufacturerId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($dCircuitId, $value->id_article) === true) {
          $data[] = (int) $value->id_article;
        }
      }
      return count($data);
    }
    return 0;
  }
  
  private function __articleDiscountCheck( $dCircuitId = 0, $articleId = 0 )
  {
    $DCV = $this->__discountCircuitDVById( $dCircuitId );
    $DCD = false;
    
    if(!is_object($DCV)) {
      return false;
    }
    if(is_null( $DCV->from_dt ) && is_null( $DCV->until_dt )) {
      $DCD = true;
    } else if(!is_null( $DCV->from_dt ) && !is_null( $DCV->until_dt )) {
      $DCD = (($DCV->today_dt->format("Y-m-d") >= $DCV->from_dt->format("Y-m-d")) && ($DCV->today_dt->format("Y-m-d") <= $DCV->until_dt->format("Y-m-d"))) ? true : false;
    } else if(is_null( $DCV->from_dt ) && !is_null( $DCV->until_dt )) {
      $DCD = ($DCV->today_dt->format("Y-m-d") <= $DCV->until_dt->format("Y-m-d")) ? true : false;
    } else if(!is_null( $DCV->from_dt ) && is_null( $DCV->until_dt )) {
      $DCD = ($DCV->today_dt->format("Y-m-d") >= $DCV->from_dt->format("Y-m-d")) ? true : false;
    } else {
      $DCD = false;
    }
    if((bool) $DCD === false) {
      return false;
    }
    $qry = "SELECT
              retail_tax_price
            FROM
              app_store_article";
    $keys = array(
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      switch((int) $DCV->id_type_of_discount) {
        case 1:
          return (((float) $data->retail_tax_price - (float) $DCV->discount_value) > 0) ? true : false;
        case 2: 
          return (((float) $data->retail_tax_price - (((float) $data->retail_tax_price / 100) * (float) $DCV->discount_value)) > 0) ? true : false;
        default:
          return false;
      }
    }
    return false;
  }
  
  private function __discountCircuitDVById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_type_of_discount, discount_value,
              (discount_from) as from_dt, (discount_until) as until_dt
            FROM
              app_store_discount_circuits";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $data->from_dt  = (self::$registry->getService('helper')->validateDate( $data->from_dt )) ? new DateTime( $data->from_dt ) : null;
      $data->until_dt = (self::$registry->getService('helper')->validateDate( $data->until_dt )) ? new DateTime( $data->until_dt ) : null;
      $data->today_dt = new DateTime('NOW');
      
      return $data;
    }
    return null;
  }
  
  public function discountCircuitSectionIdById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_section
            FROM
              app_store_discount_circuits";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_section : 0;
  }

  public function discountCircuitFIdsById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_section_value_id
            FROM
              app_store_discount_circuits_section_values";
    $keys = array(
        ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[] = (int) $value->id_section_value_id;
      }
      return $data;
    }
    return null;
  }

  public function articleListOnDiscCircuitByFIds( $dCircuitFIds = null, $sectionId = 0 )
  {
    $qry = null;

    switch($sectionId) {
      // Category
      case 1:
        $qry = "SELECT
                  id_article
                FROM
                  app_store_article_category
                WHERE
                  id_category IN (".implode(",",$dCircuitFIds).")
                GROUP BY
                  id_article";
        break;
      // Attribute
      case 2:
        $qry = "SELECT
                  id_article
                FROM
                  app_store_article_attribute
                WHERE
                  id_attribute IN (".implode(",",$dCircuitFIds).")
                GROUP BY
                  id_article";
        break;
      // Attribute value
      case 3:
        $qry = "SELECT
                  id_article
                FROM
                  app_store_article_attribute
                WHERE
                  id_value IN (".implode(",",$dCircuitFIds).")
                GROUP BY
                  id_article";
        break;
      // Status
      case 4:
        $qry = "SELECT
                  id_article
                FROM
                  app_store_article_status
                WHERE
                  id_status IN (".implode(",",$dCircuitFIds).")
                GROUP BY
                  id_article";
        break;
    }
    self::$registry->getService('storage')->executeQuery( $qry );

    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }

  public function discountCircuitArticleListById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_discount_circuits_articles";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function discountCircuitsBreadcrumb( $langId = 0, $ignoreList = null )
  {
    $qry = "SELECT
              b.id_route, a.color, b.circuit_name
            FROM
              app_store_discount_circuits a
            INNER JOIN
              app_store_discount_circuits_lang b
            ON
              a.id_circuit = b.id_circuit
            AND
              b.id_route != 0";
    if(is_array($ignoreList) && (count($ignoreList) > 0)) {
      $qry .= " WHERE a.id_circuit NOT IN (".implode(",",$ignoreList).")";
    }
    $keys = array(
      ':a.enabled' => 1,
      ':b.id_lang' => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $route = self::$registry->getService('router')->routeById( $value->id_route );
        
        $data[ $key ]->path = (is_object($route)) ? $route->path : null;
        
        unset($data[ $key ]->id_route);
      }
      return $data;
    }
    return null;
  }

  public function discountCircuitOnSiteById( $dCircuitId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $qry = "SELECT
              a.color, b.id_route, b.circuit_name, b.description,b.site_title, 
              b.meta_robots, b.meta_keywords, b.meta_description, b.html_content
            FROM
              app_store_discount_circuits a
            INNER JOIN
              app_store_discount_circuits_lang b
            ON
              a.id_circuit = b.id_circuit";
    $keys = array(
      ':a.id_circuit' => (int) $dCircuitId,
      ':b.id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      // PATH
      $route = self::$registry->getService('router')->routeById( $data->id_route );
      $data->path = (is_object($route)) ? $route->path : null;
      // ARTICLE LIST
      $data->articleList = $this->__discountCircuitArticleListOnSiteById(
        $dCircuitId, 
        $langId, 
        $sortRuleId, 
        $priceFrom, 
        $priceUpTo, 
        $manufacturerId, 
        $pagination
      );
      // RETURN
      return $data;
    }
    return null;
  }
  
  public function __discountCircuitArticleListOnSiteById( $dCircuitId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    if((bool) $this->isAttributeValueById(0, $manufacturerId) === true) {
      return $this->__discountCircuitArticleListOnSiteByIdV2(
        $dCircuitId,
        $langId,
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        $pagination
      );
    }
    return $this->__discountCircuitArticleListOnSiteByIdV1(
      $dCircuitId,
      $langId,
      $sortRuleId,
      $priceFrom,
      $priceUpTo,
      $pagination
    );
  }
  
  private function __discountCircuitArticleListOnSiteByIdV1( $dCircuitId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $pagination = false )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            AND
              c.id_circuit = ".(int) $dCircuitId."
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    $filter = $this->__sortRuleByDiscountCircuit($dCircuitId, $sortRuleId);
    
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($dCircuitId, $value->id_article) === true) {
          $article = $this->articleOnSiteById($value->id_article, $langId);
          
          if(is_object($article)) {
            $data[] = $article;
          }
        }
      }
      return $data;
    }
    return 0;
  }
  
  private function __discountCircuitArticleListOnSiteByIdV2( $dCircuitId = 0, $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $qry = "SELECT
              a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            AND
              c.id_circuit = ".(int) $dCircuitId."
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            INNER JOIN
              app_store_article_attribute e
            ON
              a.id_article = e.id_article
            AND
              e.id_value = ".(int) $manufacturerId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    $filter = $this->__sortRuleByDiscountCircuit($dCircuitId, $sortRuleId);
    
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($dCircuitId, $value->id_article) === true) {
          $article = $this->articleOnSiteById($value->id_article, $langId);
          
          if(is_object($article)) {
            $data[] = $article;
          }
        }
      }
      return $data;
    }
    return 0;
  }
  
  private function __sortRuleByDiscountCircuit( $dCircuitId = 0, $sortRuleId = 0 )
  {
    $data = null; 
    
    if((int) $sortRuleId === 0) {
      // Priprava na nove zoradovacie pravidlo do systemu -- zatial nie je 
      /*
      $qry1 = "SELECT
                id_type
              FROM
                app_store_ordering_rule";
      $keys1 = array(
        ':id_section' => 1,
        ':id_s_value' => (int) $dCircuitId,
        ':is_default' => 0,
        ':enabled'    => 1
      );
      self::$registry->getService('storage')->executeQuery($qry1, $keys1);

      if(self::$registry->getService('storage')->rowCount() > 0) {
        $data = self::$registry->getService('storage')->getResult()[0];
      } else {
        $qry2 = "SELECT
                  id_type
                FROM
                  app_store_ordering_rule";
        $keys2 = array(
          ':id_section' => 1,
          ':is_default' => 1,
          ':enabled' => 1
        );
        self::$registry->getService('storage')->executeQuery($qry2, $keys2);

        if(self::$registry->getService('storage')->rowCount() > 0) {
          $data = self::$registry->getService('storage')->getResult()[0];
        }
      }
      * 
      */
    }
    $ruleId = (((int) $sortRuleId > 0) && ((int) $sortRuleId < 17)) ? (int) $sortRuleId : ((isset($data) && is_object($data)) ? (int) $data->id_type : 0);

    switch($ruleId) {
      case 1:
        return "ORDER BY b.article_name ASC";
      case 2:
        return "ORDER BY b.article_name DESC";
      case 3:
        return "ORDER BY a.retail_tax_price ASC";
      case 4:
        return "ORDER BY a.retail_tax_price DESC";
      case 5:
        return "ORDER BY a.created ASC";
      case 6:
        return "ORDER BY a.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) DESC";
      case 9:
        return null;
      case 10:
        return null;
      case 11:
        return null;
      case 12:
        return null;
      case 13:
        return null;
      case 14:
        return null;
      case 15:
        return null;
      case 16:
        return null;
      default:
        return null;
    }
  }
  
  public function articleListByDiscountCircuits( $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    if($this->isAttributeValueById(0, $manufacturerId)) {
      return $this->__articleListByDiscountCircuitsV2(
        $langId,
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        $pagination
      );
    }
    return $this->__articleListByDiscountCircuitsV1(
      $langId,
      $sortRuleId,
      $priceFrom,
      $priceUpTo,
      $pagination
    );
  }
  
  private function __articleListByDiscountCircuitsV1( $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $pagination = false )
  {
    $qry = "SELECT
              d.id_circuit, a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    $filter = $this->__discountCircuitSortByRuleId( $sortRuleId );

    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($value->id_circuit, $value->id_article) === true) {
          $data[] = $this->articleOnSiteById($value->id_article, $langId);
        }
      }
      return $data;
    }
    return 0;
  }
  
  private function __articleListByDiscountCircuitsV2( $langId = 0, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0, $pagination = false )
  {
    $qry = "SELECT
              d.id_circuit, a.id_article
            FROM
              app_store_article a
            INNER JOIN
              app_store_article_lang b
            ON
              a.id_article = b.id_article
            INNER JOIN
              app_store_discount_circuits_articles c
            ON
              a.id_article = c.id_article
            INNER JOIN
              app_store_discount_circuits d
            ON
              c.id_circuit = d.id_circuit
            AND
              d.enabled = 1
            INNER JOIN
              app_store_article_attribute e
            ON
              a.id_article = e.id_article
            AND
              e.id_value = ".(int) $manufacturerId."
            WHERE
              a.enabled = 1";
    if(((float) $priceFrom > 0) || ((float) $priceUpTo > 0)) {
      $qry .= $this->__setDiscountCircuitsArticlesPriceRange($priceFrom, $priceUpTo);
    }
    $keys = array(
      ':b.id_lang' => (int) $langId
    );
    $filter = $this->__discountCircuitSortByRuleId( $sortRuleId );

    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys, $filter );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($value->id_circuit, $value->id_article) === true) {
          $data[] = $this->articleOnSiteById($value->id_article, $langId);
        }
      }
      return $data;
    }
    return 0;
  }
  
  private function __setDiscountCircuitsArticlesPriceRange( $priceFrom = 0, $priceUpTo = 0 )
  {
    if(((float) $priceFrom > 0) && ((int) $priceUpTo === 0)) {
      return ' AND a.retail_tax_price > '.(float) $priceFrom;
    }
    if(((int) $priceFrom === 0) && ((float) $priceUpTo > 0)) {
      return ' AND a.retail_tax_price < '.(float) $priceUpTo;
    }
    if(((float) $priceFrom > 0) && ((float) $priceUpTo > 0)) {
      return ' AND a.retail_tax_price BETWEEN '.(float) $priceFrom.' AND '.(float) $priceUpTo;
    }
    return null;
  }
  
  private function __discountCircuitSortByRuleId( $sortRuleId = 0 )
  {
    $ruleId = (((int) $sortRuleId > 0) && ((int) $sortRuleId < 17)) ? (int) $sortRuleId : 0;

    switch($ruleId) {
      case 1:
        return "ORDER BY b.article_name ASC";
      case 2:
        return "ORDER BY b.article_name DESC";
      case 3:
        return "ORDER BY a.retail_tax_price ASC";
      case 4:
        return "ORDER BY a.retail_tax_price DESC";
      case 5:
        return "ORDER BY a.created ASC";
      case 6:
        return "ORDER BY a.created DESC";
      case 7:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) ASC";
      case 8:
        return "ORDER BY UNIX_TIMESTAMP(a.upd_date) DESC";
      default:
        return null;
    }
  }

  public function discountCircuitsCarouseltById( $langId = 0, $limit = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_discount_circuits_articles";
    $filter = 'LIMIT '.(((int) $limit > 0) ? (int) $limit : 10);

    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data   = [];

      foreach($result as $value) {
        $data[] = $this->articleOnSiteById($value->id_article, $langId);
      }
      return $data;
    }
    return null;
  }

  public function discountCircuitsDataById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_circuit, id_type, id_section, id_type_of_discount, rule,
              color, circuit_name_int, discount_value, discount_from, discount_until,
              description, enabled
            FROM
              app_store_discount_circuits";
    $keys = array(
        ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];

      $data->discount_value = self::$registry->getService('helper')->money_format( $data->discount_value );
      $data->lang           = $this->__discCircuitLangById( $data->id_circuit );

      return $data;
    }
    return null;
  }

  private function __discCircuitLangById( $dCircuitId = 0 )
  {
    $qry = "SELECT
                id_lang, id_route, circuit_name, site_title, description,
                meta_robots, meta_keywords, meta_description, html_content
              FROM
                app_store_discount_circuits_lang";
    $keys = array(
        ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $result = self::$registry->getService('storage')->getResult();
      $data   = [];

      foreach($result as $value) {
        $data[ $value->id_lang ] = $value;

        unset($data[ $value->id_lang ]->id_lang);
      }
      return (count($data) > 0) ? $data : null;
    }
    return null;
  }
  
  public function errorArticlesByDiscountCircuitId( $dCircuitId = 0 )
  {
    $qry = "SELECT
              a.id_circuit, a.id_article
            FROM
              app_store_discount_circuits_articles a
            INNER JOIN
              app_store_discount_circuits b
            ON
              a.id_circuit = b.id_circuit
            AND
              b.enabled = 1";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        if((bool) $this->__articleDiscountCheck($value->id_circuit, $value->id_article) === false) {
          $data[] = (int) $value->id_article;
        }
      }
      return count($data);
    }
    return 0;
  }

  public function articleListOnDiscountCircuitById( $dCircuitId = 0, $pagination = false, $useList = null )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_discount_circuits_articles";
    if(is_array($useList) && (count($useList) > 0)) {
      $qry .= " WHERE id_article IN (".implode(",",$useList).")";
    }
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    if($pagination) {
      self::$registry->getService('pagination')->fetch( $qry, $keys );
    } else {
      self::$registry->getService('storage')->executeQuery( $qry, $keys );
    }
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = [];

      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $data[] = $this->__articlePriceDataById($dCircuitId, $value->id_article);
      }
      return (count($data) > 0) ? $data : null;
    }
    return null;
  }
  
  private function __articlePriceDataById( $dCircuitId = 0, $articleId = 0 )
  {
    $whSen = $this->haveDiscountCirciutWHById( $dCircuitId );
    $qry   = $this->__articlePriceQryByModeId($dCircuitId, (((bool) $whSen === true) ? 2 : 1 ));
    $keys  = [];
    
    if((bool) $whSen === true) {
      $keys[':a.id_article'] = (int) $articleId;
    } else {
      $keys[':id_article'] = (int) $articleId;
    }
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      // DISCOUNT
      $discount   = $this->articleDiscountByArticleId($data->id_article, $data->retail_tax_price);
      $isDiscount = (is_object($discount)) ? true : false;
      // SET VALUES
      $data->former_price             = self::$registry->getService('helper')->money_format( $data->retail_tax_price );
      $data->is_discount              = $isDiscount;
      $data->discount                 = ($isDiscount) ? $discount->discount : 0.00;
      $data->discount_percent         = 0.00;
      if($isDiscount)
      {
        $data->discount_percent = $this->__discountCircuitPercentageDifference(
          $isDiscount, 
          (((bool) $whSen === true) ? (float) $data->former_price : (float) $data->retail_tax_price),
          (float) $data->recommended_retail_price,
          (float) $data->retail_tax_price,
          $discount->discount
        );
      }
      $data->retail_price             = self::$registry->getService('helper')->money_format( $data->retail_price );
      $data->retail_tax_price         = ($isDiscount) ? $discount->discount_price : self::$registry->getService('helper')->money_format( $data->retail_tax_price );
      $data->recommended_retail_price = self::$registry->getService('helper')->money_format( $data->recommended_retail_price );
      $data->image                    = ((int) $data->id_image > 0) ? self::$registry->getService('drive')->fileById( $data->id_image ) : (((int) $data->id_gallery > 0) ? $this->__getMainImageFromGallery( $data->id_gallery ) : null);
      $data->check                    = $this->__articleDiscountCheck($dCircuitId, $articleId);

      return $data;
    }
    return null;
  }
  
  private function __discountCircuitPercentageDifference( $useDiscount = false, $former_price = 0.00, $rrp = 0.00, $retail_tax_price = 0.00, $discount = 0.00 )
  {
    if((bool) $useDiscount === true) {
      return ($rrp > 0) ? round((100 * ($rrp - $retail_tax_price - $discount)) / $former_price, 0) : round((100 * ($retail_tax_price - $discount)) / $former_price, 0);
    } else {
      return $rrp - $retail_tax_price;
    }
  }
  
  private function __articlePriceQryByModeId( $dCircuitId = 0, $modeId = 0 )
  {
    switch((int) $modeId) {
      case 1:
        return "SELECT
                  id_article, id_ext_article, id_image, id_gallery, reference, 
                  sku, qty, recommended_retail_price, retail_price, 
                  retail_tax_price, article_name_internal
                FROM
                  app_store_article";
      case 2:
        return "SELECT
                  a.id_article, a.id_ext_article, a.id_image, a.id_gallery, a.reference, 
                  a.sku, a.article_name_internal, a.recommended_retail_price, b.qty,
                  c.former_price, c.retail_price, c.retail_tax_price
                FROM
                  app_store_article a
                INNER JOIN
                  app_store_warehouse_al b
                ON
                  a.id_article = b.id_article
                AND
                  b.id_wh = ".$this->discountCircuitWHIdByDCId( $dCircuitId )."
                INNER JOIN
                  app_store_warehouse_al_relation c
                ON
                  a.id_article = c.id_article
                AND
                  b.id_wh = c.id_wh
                AND
                  b.id_rel = c.id_rel";
      default:
        throw new Exception('Discount circuit unknow mod to respondent price.', 500);
    }
  }

  public function discountCircuitList()
  {
    $qry = "SELECT
              id_circuit, id_type, id_type_of_discount, color, circuit_name_int, 
              round(discount_value,2) as discount_value, discount_from, discount_until,
              enabled
            FROM
              app_store_discount_circuits";
    $filter = "ORDER BY created DESC";
    self::$registry->getService('storage')->executeQuery( $qry, null, $filter );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();
      
      foreach($data as $key => $value) {
        $data[ $key ]->count = $this->countArticlesByDiscountCircuitId($value->id_circuit, null);
      }
      return $data;
    }
    return null;
  }
  
  private function __articleOfferDiscountByArticleId( $articleId = 0, $price = 0, $round = true )
  {
    $qry = "SELECT
              a.date_from, a.date_until, b.id_type_of_discount,
              b.discount_value, b.total_discount
            FROM
              app_store_offer a
            INNER JOIN
              app_store_offer_article b
            ON
              a.id_offer = b.id_offer";
    $keys = array(
      ':a.id_user'        => (int) self::$registry->getService('controller')->getUserId(),
      ':a.is_buy_enabled' => 1,
      ':a.allow_buy'      => 0,
      ':a.enabled'        => 0,
      ':b.id_article'     => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      $obj  = (object) array(
        'today_dt'    => new DateTime('NOW'),
        'from_dt'     => (self::$registry->getService('helper')->validateDate( $data->date_from )) ? new DateTime( $data->date_from ) : null,
        'until_dt'    => (self::$registry->getService('helper')->validateDate( $data->date_until )) ? new DateTime( $data->date_until ) : null,
        'is_discount' => false
      );
      if(is_null( $obj->from_dt ) && is_null( $obj->until_dt )) {
        $obj->is_discount = true;
      } else if(!is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) {
        $obj->is_discount = (($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) && ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d"))) ? true : false;
      } else if(is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) {
        $obj->is_discount = ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d")) ? true : false;
      } else if(!is_null( $obj->from_dt ) && is_null( $obj->until_dt )) {
        $obj->is_discount = ($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) ? true : false;
      } else {
        return null;
      }
      if((bool) $obj->is_discount === true) {
        $dValue        = ((int) $data->id_type_of_discount === 0) ? (float) $data->total_discount : (float) $data->discount_value;
        $nSum          = (((int) $data->id_type_of_discount === 0) || ((int) $data->id_type_of_discount === 1)) ? ((float) $price - $dValue) : ((float) $price - (((float) $price / 100) * $dValue));
        $discount      = (((float) $price > $nSum) ? (((int) $data->id_type_of_discount === 2) ? (((float) $price / 100) * $dValue) : $dValue) : 0.00);
        $discountPrice = ((((float) $price > $nSum) && ($nSum > 0)) ? $nSum : $price);

        return (object) array(
          'discount'       => ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $discount ) : $discount,
          'discount_price' => ((bool) $round === true) ? self::$registry->getService('helper')->money_format( $discountPrice ) : $discountPrice
        );
      }
      return null;
    }
    return null;
  }

  public function articleDiscountByArticleId( $articleId = 0, $price = 0, $round = true )
  {
    if($this->__isOfferDiscount()) 
    {
      return $this->__articleOfferDiscountByArticleId($articleId, $price, $round);
    }
    // WAREHOUSE
    $whId = ((bool) $this->isArticleManageWH( $articleId ) === true) ? $this->warehouseIdByArticleId( $articleId ) : 0;
    // DISCOUNT
    $obj = null;
    // USER
    $discUser = null; //(self::$registry->getService('controller')->isUserLogin()) ? $this->__userDiscount( $price ) : null;
    // ARTICLE
    $qry = "SELECT
              b.id_type_of_discount, b.discount_from,
              b.discount_until, b.discount_value
            FROM
              app_store_discount_circuits_articles a,
              app_store_discount_circuits b
            WHERE
              a.id_circuit = b.id_circuit";
    $keys = array(
      ':a.id_article' => (int) $articleId,
      ':b.id_wh'      => ((bool) $this->isWarehouseById( $whId ) === true) ? $whId : 0,
      ':b.enabled'    => 1
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) 
    {
      $data = self::$registry->getService('storage')->getResult()[0];
      $obj  = (object) array(
        'today_dt'    => new DateTime('NOW'),
        'from_dt'     => (self::$registry->getService('helper')->validateDate( $data->discount_from )) ? new DateTime( $data->discount_from ) : null,
        'until_dt'    => (self::$registry->getService('helper')->validateDate( $data->discount_until )) ? new DateTime( $data->discount_until ) : null,
        'is_discount' => false,
        'data'        => null
      );
      if(is_null( $obj->from_dt ) && is_null( $obj->until_dt )) 
      {
        $obj->is_discount = true;
      } 
      else if(!is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) 
      {
        $obj->is_discount = (($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) && ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d"))) ? true : false;
      } 
      else if(is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) 
      {
        $obj->is_discount = ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d")) ? true : false;
      } 
      else if(!is_null( $obj->from_dt ) && is_null( $obj->until_dt )) 
      {
        $obj->is_discount = ($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) ? true : false;
      } 
      else 
      {
        return null;
      }
      if($obj->is_discount) 
      {
        $obj->data = $this->__setPrice($data, $discUser, $data->id_type_of_discount, $price);
      } 
      else 
      {
        $obj->data = (!is_null($discUser) && $discUser->is_discount) ? $discUser->data : null;
      }
    } 
    else 
    {
      if(!is_null($discUser) && $discUser->is_discount) 
      {
        $obj = (object) array(
          'data' => $discUser->data
        );
      }
    }
    return (is_object($obj) && count($obj->data) > 0) ? $obj->data : null;
  }

  private function __userDiscount( $price = 0 )
  {
    $qry = "SELECT
              b.rule, b.id_type_of_discount, b.discount_from,
              b.discount_until, b.discount_value
            FROM
              app_store_discount_circuits_clients a
            INNER JOIN
              app_store_discount_circuits b
            ON
              a.id_circuit = b.id_circuit
            AND
              b.id_type = 3";
    $keys = array(
        ':a.id_user' => (int) self::$registry->getService('controller')->getUserId()
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $response = self::$registry->getService('storage')->getResult()[0];
      $obj      = (object) array(
          'today_dt'    => new DateTime('NOW'),
          'from_dt'     => (self::$registry->getService('helper')->validateDate( $response->discount_from )) ? new DateTime( $response->discount_from ) : null,
          'until_dt'    => (self::$registry->getService('helper')->validateDate( $response->discount_until )) ? new DateTime( $response->discount_until ) : null,
          'rule'        => (int) $response->rule,
          'is_discount' => false,
          'data'        => null
      );
      if(is_null( $obj->from_dt ) && is_null( $obj->until_dt )) {
        $obj->is_discount = true;
      } else if(!is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) {
        $obj->is_discount = (($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) && ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d"))) ? true : false;
      } else if(is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) {
        $obj->is_discount = ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d")) ? true : false;
      } else if(!is_null( $obj->from_dt ) && is_null( $obj->until_dt )) {
        $obj->is_discount = ($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) ? true : false;
      } else {
        return null;
      }
      if($obj->is_discount) {
        if((int) $response->id_type_of_discount === 1) {
          $obj->data = (object) array(
              'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) $response->discount_value) ? $response->discount_value : 0.00) ),
              'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) $response->discount_value) && (((float) $price - (float) $response->discount_value) > 0)) ? ( $price - $response->discount_value ) : $price) )
          );
        } else {
          $obj->data = (object) array(
              'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (($price / 100 ) * $response->discount_value)) ? (($price / 100 ) * $response->discount_value) : 0.00) ),
              'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > ($price - (($price / 100 ) * $response->discount_value))) && (((float) $price - (float) (($price / 100 ) * $response->discount_value)) > 0)) ? ($price - (($price / 100 ) * $response->discount_value)) : $price) )
          );
        }
      }
      return $obj;
    }
    return null;
  }

  private function __setPrice( $dArticle = null, $dUser = null, $dTypeId = 0, $price = 0 )
  {
    $data = null;
    // set
    switch((int) $dTypeId) {
      case 1:
        if(!is_null($dUser) && $dUser->is_discount) {
          if($dUser->rule == 1) {
            if(((float) $price > (float) ($dArticle->discount_value + $dUser->data->discount)) && ((float)($dArticle->discount_value + $dUser->data->discount) > 0)) {
              $data = (object) array(
                  'discount'       => self::$registry->getService('helper')->money_format( ($dArticle->discount_value + $dUser->data->discount) ),
                  'discount_price' => self::$registry->getService('helper')->money_format( ($price - ($dArticle->discount_value + $dUser->data->discount)) )
              );
            } else {
              $dValue = ((float) $dArticle->discount_value > (float) $dUser->data->discount) ? $dArticle->discount_value : $dUser->data->discount;
              $data   = (object) array(
                  'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) $dValue) ? $dValue : 0.00) ),
                  'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) $dValue) && ((float) ($price - $dValue) > 0)) ? ($price - $dValue) : $price) )
              );
            }
          } else {
            $dValue = ((float) $dArticle->discount_value > (float) $dUser->data->discount) ? $dArticle->discount_value : $dUser->data->discount;
            $data   = (object) array(
                'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) $dValue) ? $dValue : 0.00) ),
                'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) $dValue) && ((float) ($price - $dValue) > 0)) ? ($price - $dValue) : $price) )
            );
          }
        } else {
          $data = (object) array(
              'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) $dArticle->discount_value) ? $dArticle->discount_value : 0.00) ),
              'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) ($price - $dArticle->discount_value)) && ((float) ($price - $dArticle->discount_value) > 0)) ? ($price - $dArticle->discount_value) : $price) )
          );
        }
        return $data;
      case 2:
        if(!is_null($dUser) && $dUser->is_discount) {
          if($dUser->rule == 1) {
            if($price > ((($price / 100 ) * $dArticle->discount_value) + $dUser->data->discount)) {
              $data = (object) array(
                  'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) ((($price / 100 ) * $dArticle->discount_value) + $dUser->data->discount)) ? ((($price / 100 ) * $dArticle->discount_value) + $dUser->data->discount) : 0.00) ),
                  'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) ($price - ((($price / 100) * $dArticle->discount_value) + $dUser->data->discount))) && ((float) ($price - ((($price / 100) * $dArticle->discount_value) + $dUser->data->discount)) > 0)) ? ($price - ((($price / 100) * $dArticle->discount_value) + $dUser->data->discount)) : $price) )
              );
            } else {
              $dValue = ((float) (($price / 100 ) * $dArticle->discount_value) > (float) $dUser->data->discount) ? (($price / 100 ) * $dArticle->discount_value) : $dUser->data->discount;
              $data   = (object) array(
                  'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) $dValue) ? $dValue : 0.00) ),
                  'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) ($price - $dValue)) && ((float) ($price - $dValue) > 0)) ? ($price - $dValue) : $price) )
              );
            }
          } else {
            $dValue = ((float) (($price / 100 ) * $dArticle->discount_value) > (float) $dUser->data->discount) ? (($price / 100 ) * $dArticle->discount_value) : $dUser->data->discount;
            $data   = (object) array(
                'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) $dValue) ? $dValue : 0.00) ),
                'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) ($price - $dValue)) && ((float) ($price - $dValue) > 0)) ? ($price - $dValue) : $price) )
            );
          }
        } else {
          $data = (object) array(
              'discount'       => self::$registry->getService('helper')->money_format( (((float) $price > (float) (($price / 100 ) * $dArticle->discount_value)) ? (($price / 100 ) * $dArticle->discount_value) : 0.00) ),
              'discount_price' => self::$registry->getService('helper')->money_format( ((((float) $price > (float) ($price - (($price / 100 ) * $dArticle->discount_value))) && ((float) ($price - (($price / 100 ) * $dArticle->discount_value)) > 0)) ? ($price - (($price / 100 ) * $dArticle->discount_value)) : $price) )
          );
        }
        return $data;
      default:
        return $data;
    }
  }
  
  public function discountCircuitWHIdByDCId( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_discount_circuits";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->id_wh : 0;
  }
  
  public function haveDiscountCirciutWHById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_wh
            FROM
              app_store_discount_circuits";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult()[0];
      
      return $this->isWarehouseById( $data->id_wh );
    }
    return false;
  }

  public function haveDiscountCircuitLangById( $dCircuitId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_circuit
            FROM
              app_store_discount_circuits_lang";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId,
      ':id_lang'    => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function haveArticleDiscountCircuitById( $dCircuitId = 0, $articleId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_discount_circuits_articles";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId,
      ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function isDiscountCircuitById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_circuit
            FROM
              app_store_discount_circuits";
    $keys = array(
        ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function isArticleOnDescCircuitByArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              id_article
            FROM
              app_store_discount_circuits_articles";
    $keys = array(
        ':id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function isUserOnDescCircuitByUserId( $userId = 0 )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_discount_circuits_clients";
    $keys = array(
        ':id_user' => (int) $userId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }

  public function deleteDiscCircuitBaseById( $dCircuitId = 0 )
  {
    $status = [];
    
    // ST 1
    $status[] = $this->__deleteDiscountCircuitRoutesById( $dCircuitId );
    // ST 2
    self::$registry->getService('storage')->delete( 'app_store_discount_circuits', ':id_circuit', (int) $dCircuitId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RETURN
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  private function __deleteDiscountCircuitRoutesById( $dCircuitId = 0 )
  {
    $qry = "SELECT
              id_route
            FROM
              app_store_discount_circuits_lang
            WHERE
              id_route != 0";
    $keys = array(
      ':id_circuit' => (int) $dCircuitId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $status = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value) {
        $status[] = self::$registry->getService('irouter')->deleteRouteById( $value->id_route );
      }
      return self::$registry->getService('helper')->checkStatus($status);
    }
    return true;
  }

  public function deleteDiscCircuitLangById( $dCircuitId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_discount_circuits_lang', ':id_circuit', (int) $dCircuitId );

    return self::$registry->getService('storage')->executed();
  }

  public function deleteDiscCircuitExtById( $dCircuitId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_discount_circuits_section_values', ':id_circuit', (int) $dCircuitId );

    return self::$registry->getService('storage')->executed();
  }
  
  public function deleteArticleFromDiscountCircuitById( $dCircuitId = 0, $articleId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_discount_circuits_articles', array(':id_circuit' => (int) $dCircuitId, ':id_article' => (int) $articleId) );

    return self::$registry->getService('storage')->executed();
  }

  public function deleteDiscCircuitArticleListById( $dCircuitId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_discount_circuits_articles', ':id_circuit', (int) $dCircuitId );

    return self::$registry->getService('storage')->executed();
  }

  public function deleteDiscCircuitClientListById( $dCircuitId = 0 )
  {
    self::$registry->getService('storage')->delete( 'app_store_discount_circuits_clients', ':id_circuit', (int) $dCircuitId );

    return self::$registry->getService('storage')->executed();
  }
  
  /*********************************************************************************************************
  *
  * EMAIL
  *
  *********************************************************************************************************/

  public function insertEmail( $data = null )
  {
    self::$registry->getService('storage')->insert( 'email', $data );

    return self::$registry->getService('storage')->lastInsertId();
  }
  
  public function insertEmailBcc( $data = null )
  {
    self::$registry->getService('storage')->insert( 'email_bcc', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function insertEmailData( $data = null )
  {
    self::$registry->getService('storage')->insert( 'email_data', $data );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateEmailById( $changes = null, $emailId = 0 )
  {
    self::$registry->getService('storage')->update( 'email', $changes, ' id_email = '. (int) $emailId );
    
    return self::$registry->getService('storage')->executed();
  }
  
  public function updateEmailDataById( $changes = null, $emailId = 0, $langId = 0 )
  {
    self::$registry->getService('storage')->update( 'email_data', $changes, ' id_email = '. (int) $emailId . ' AND id_lang = '. (int) $langId );
    
    return self::$registry->getService('storage')->executed();
  }

  public function emailList()
  {
    $qry = "SELECT
              id_email, enabled, email_name
            FROM
              email";
    self::$registry->getService('storage')->executeQuery( $qry );
    
    return (self::$registry->getService('storage')->rowCount() > 0) ? self::$registry->getService('storage')->getResult() : null;
  }
  
  public function emailById( $emailId = 0 )
  {
    $qry = "SELECT
              id_email, id_widget, email_name, enabled
            FROM
              email";
    $keys = array(
      ':id_email' => (int) $emailId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $data       = self::$registry->getService('storage')->getResult()[0];
      $data->bcc  = $this->emailBccById( $data->id_email );
      $data->data = $this->emailDataById( $data->id_email );
              
      return $data;
    }
    return null;
  }
  
  public function emailBccById( $emailId = 0 )
  {
    $qry = "SELECT
              id_lang
            FROM
              email_bcc";
    $keys = array(
      ':id_email' => (int) $emailId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        $data[ $value->id_lang ] = $this->__emailBccListByIds($emailId, $value->id_lang);
      }
      return $data;
    }
    return null;
  }
  
  private function __emailBccListByIds( $emailId = 0, $langId = 0 )
  {
    $qry = "SELECT
              bcc
            FROM
              email_bcc";
    $keys = array(
      ':id_email' => (int) $emailId,
      ':id_lang'  => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        $data[] = $value->bcc;
      }
      return implode(',', $data);
    }
    return null;
  }
  
  public function emailDataById( $emailId = 0 )
  {
    $qry = "SELECT
              id_lang, sender_email, sender_name, subject, signature, html
            FROM
              email_data";
    $keys = array(
      ':id_email' => (int) $emailId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0)
    {
      $data = [];
      
      foreach(self::$registry->getService('storage')->getResult() as $value)
      {
        $data[ $value->id_lang ] = (object) array(
          'sender_email' => $value->sender_email,
          'sender_name'  => $value->sender_name,
          'subject'      => $value->subject,
          'signature'    => $value->signature,
          'html'         => $value->html
        );
      }
      return $data;
    }
    return null;
  }

  public function isEmailById( $emailId = 0 )
  {
    $qry = "SELECT
              id_email
            FROM
              email";
    $keys = array(
      ':id_email' => (int) $emailId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function isEmailDataByLangId( $emailId = 0, $langId = 0 )
  {
    $qry = "SELECT
              id_email
            FROM
              email_data";
    $keys = array(
      ':id_email' => (int) $emailId,
      ':id_lang'  => (int) $langId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? true : false;
  }
  
  public function deleteEmailById( $emailId = 0 )
  {
    $status = [];
    
    // ST 1
    self::$registry->getService('storage')->delete( 'email', ':id_email', (int) $emailId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 2
    self::$registry->getService('storage')->delete( 'email_bcc', ':id_email', (int) $emailId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // ST 3
    self::$registry->getService('storage')->delete( 'email_data', ':id_email', (int) $emailId );
    
    $status[] = self::$registry->getService('storage')->executed();
    // RES
    return self::$registry->getService('helper')->checkStatus($status);
  }
  
  public function deleteEmailBccById( $emailId = 0 )
  {
    self::$registry->getService('storage')->delete( 'email_bcc', ':id_email', (int) $emailId );
    
    return self::$registry->getService('storage')->executed();
  }

  /*********************************************************************************************************
  *
  * PRODUCTS STATISTICS
  *
  *********************************************************************************************************/

  public function viewedProductList()
  {
    $qry = "SELECT
              a.id_article, b.article_name_internal, b.sku,
              b.id_image, b.id_gallery
            FROM
              app_store_article_viewer_statistics a
            INNER JOIN
              app_store_article b
            ON
              a.id_article = b.id_article
            GROUP BY
              a.id_article";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = self::$registry->getService('storage')->getResult();

      foreach($data as $key => $value) {
        $data[ $key ]->total_viewed         = $this->__totalViewedByArticleId( $value->id_article );
        $data[ $key ]->total_user_viewed    = $this->__totalUserViewedByArticleId( $value->id_article );
        $data[ $key ]->total_country_viewed = $this->__totalCountryViewedByArticleId( $value->id_article );
        $data[ $key ]->total_lang_viewed    = $this->__totalLangViewedByArticleId( $value->id_article );
        $data[ $key ]->image                = ((int) $value->id_image > 0) ? self::$registry->getService('drive')->fileById( $value->id_image ) : (((int) $value->id_gallery > 0) ? $this->__getMainImageFromGallery( $value->id_gallery ) : null);
      }
      self::$registry->getService('helper')->array_sort_by_column($data, 'total_viewed');

      return $data;
    }
    return null;
  }

  private function __totalViewedByArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              (count(id_article)) as avx
            FROM
              app_store_article_viewer_statistics";
    $keys = array(
        ":id_article" => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );

    return (self::$registry->getService('storage')->rowCount() > 0) ? (int) self::$registry->getService('storage')->getResult()[0]->avx : 0;
  }

  private function __totalUserViewedByArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              id_user
            FROM
              app_store_article_viewer_statistics";
    $keys = array(
        ":id_article" => (int) $articleId
    );
    $filter = "GROUP BY id_user";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    return self::$registry->getService('storage')->rowCount();
  }

  private function __totalCountryViewedByArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              country_code
            FROM
              app_store_article_viewer_statistics";
    $keys = array(
        ":id_article" => (int) $articleId
    );
    $filter = "GROUP BY country_code";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    return self::$registry->getService('storage')->rowCount();
  }

  private function __totalLangViewedByArticleId( $articleId = 0 )
  {
    $qry = "SELECT
              id_lang
            FROM
              app_store_article_viewer_statistics";
    $keys = array(
      ":id_article" => (int) $articleId
    );
    $filter = "GROUP BY id_lang";
    self::$registry->getService('storage')->executeQuery( $qry, $keys, $filter );

    return self::$registry->getService('storage')->rowCount();
  }


  /*********************************************************************************************************
  *
  * EXPORTS
  *
  *********************************************************************************************************/
  
  public function exports( $key = 0 )
  {
    switch((int) $key) {
      case 1:
        return $this->__heurekaXml( $key );
      default:
        return false;
    }
  }
  
  private function __heurekaXml( $key = 0 )
  {
    $qry = "SELECT
                a.id_article, b.site_title, b.description,
                (round(a.retail_price,2)) as retail_price, 
                (round(a.retail_tax_price,2)) as retail_tax_price,
                c.file_url
              FROM
                app_store_article a
              INNER JOIN
                app_store_article_lang b
              ON
                a.id_article = b.id_article
              AND
                b.id_lang = 189
              LEFT JOIN
                app_drive_files c
              ON
                a.id_image = c.file_id";
    self::$registry->getService('storage')->executeQuery( $qry );

    if(self::$registry->getService('storage')->rowCount() > 0) {
      $xmlArray = [];

      foreach(self::$registry->getService('storage')->getResult() as $article) {
        $manufacturer = $this->__articleManufacturerById($article->id_article, 19, 189);
        
        $xmlArray[] = array(
          'ITEM_ID'       => $article->id_article,
          'PRODUCTNAME'   => html_entity_decode($article->site_title, ENT_QUOTES, "UTF-8"),
          'PRODUCT'       => html_entity_decode($article->site_title, ENT_QUOTES, "UTF-8"),
          'DESCRIPTION'   => html_entity_decode($article->description, ENT_QUOTES, "UTF-8"),
          //'URL'         => self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR . $article->link_rewrite,
          'IMGURL'        => self::$registry->getService('irequest')->getLocation() . $article->file_url,
          'PRICE'         => $article->retail_price,
          'PRICE_VAT'     => $article->retail_tax_price,
          'CATEGORYTEXT'  => $this->__getHeurekaArticleCategoryListOnXML( $key, $article->id_article ),
          'MANUFACTURER'  => (is_object($manufacturer)) ? $manufacturer->name : null,
          'DELIVERY_DATE' => 0
        );
      }
      $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?><SHOP></SHOP>');

      return (is_object($xml)) ? self::$registry->getService('helper')->array_to_xml( $xmlArray, $xml, 'SHOPITEM', __UPLOAD_PATH__ . 'heureka.xml' ) : false;
    }
    return false;
  }
  
  private function __getHeurekaArticleCategoryListOnXML( $idCC = 0, $articleId = 0 )
  {
    $qry = "SELECT
              b.category_full_name
            FROM
              app_store_external_category_article a
            INNER JOIN
              app_heureka_category b
            ON
              a.id_category = b.id_category";
    $keys = array(
      ':a.id_cc'      => (int) $idCC,
      ':a.id_article' => (int) $articleId
    );
    self::$registry->getService('storage')->executeQuery( $qry, $keys );
    
    if(self::$registry->getService('storage')->rowCount() > 0) {
      $data = '';
      
      foreach(self::$registry->getService('storage')->getResult() as $key => $value) {
        $data .= (((int) $key === 0) ? '' : ' ').$value->category_full_name;
      }
      return (strlen($data) > 0) ? $data : '';
    }
    return '';
  }
  
}