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

class StoreCore extends StoreStorageCore implements StoreCoreInt, StoreUser, Articles, Category, Attribute, Ordering, Warehouse, Status, Cart, Order, Delivery, Payment, Currencies, Taxes, Offer, Discount, Invoice, sPDF, Email {
  
  /** ORDER SETTING RULE ID FOR WEB PAY **/
  const OSR_PAY = 5;
  
  /** WH MATRIX PAR TYPES **/
  const PAR_A = 1;
  
  const PAR_B = 2;
  
  /** @var Registry */
  protected static $registry;

  /** @var array **/
  private $status;
  
  /** @var null */
  private $parrent = null;
  
  /** @var array **/
  private $tree = [];
  
  /** @var int **/
  private static $userTypeId = 0;
  
  /** @var int **/
  private static $perPage = 20;
  
  /** @var array **/
  private static $filterMatrix;
  
  /** @var array **/
  private static $OrderPersonalPickupIds = array(1,2,6,8);
  
  /** @var array **/
  private $exportKeys = array(
    1 => 'heureka'
  );

  public function __construct( Registry $registry )
  {
    parent::__construct($registry);
    self::$registry     = $registry;
    self::$filterMatrix = include_once __CONFIG_DIR__ . 'filter_matrix.inc.php';
  }
  
  /** 
  * 
  * INDEXING SEARCH WORDS
  * 
  **/
  
  public function indexingSearchWords( $keywords = '', $articleList = null )
  {
    // parse keywords
    $temp = preg_split('/(\s+)/', self::$registry->getService('helper')->strip_symbols($keywords), -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    $spaces = array();
    $words = array_reduce($temp, function( &$result, $item) use ( &$spaces) {
        if(strlen(trim($item)) === 0) {
          $spaces[] = strlen($item);
        } else {
          $result[] = $item;
        }
        return $result;
    }, array());
    // db
    $sKWordId = ($this->isSearchKeywords( $keywords )) ? $this->keywordIdBySKW( $keywords ) : $this->insertSearchKeyword( $keywords );
    $userId   = self::$registry->getService('controller')->getUserId();
    
    if($this->isSearchKeywordsById( $sKWordId )) {
      // update score
      $SKW = $this->SKWScoreById( $sKWordId );
      $score = (int) $SKW->score + 1;
      
      $this->status[] = $this->updateSKWScoreById($score, $sKWordId);
      // insert / update user
      if($this->isUserSRecordBySKWId( $sKWordId, $userId)) {
        $uSRecord = $this->userSRecordBySKWId($sKWordId, $userId);
        $score1    = (int) $uSRecord->score + 1;

        $this->status[] = $this->updateUserSRecordBySKWId($score1, $sKWordId, $userId);
      } else {
        $this->insertUserSRecordBySKWId(array(
          ':id_keyword' => $sKWordId,
          ':id_user'    => $userId
        ));
      }
      // insert article list
      if(is_array($articleList) && (count($articleList) > 0)) {
        foreach($articleList as $article) {
          if(!$this->isArticleSKWRecordBySKWId($sKWordId, $article->id_article)) {
            $this->insertArticleSKWRecord(array(
              ':id_keyword' => $sKWordId,
              ':id_article' => (int) $article->id_article
            ));
          }
        }
      }
      // insert / update word list
      if(is_array($words) && (count($words) > 0)) {
        foreach($words as $word) {
          if(!$this->isWordByW( $word ) && (strlen($word) >= 3)) {
            $this->status[] = $this->insertWord(array(
              ':word' => (string) $word
            ));
          } else {
            $oWord = $this->wordByW( $word );

            if(!is_null($oWord)) {
              $score2 = (int) $oWord->score + 1;

              $this->status[] = $this->updateWordScoreByWId( $score2, $oWord->id_word );
            }
          }
        }
      }
      return ($this->checkStatus()) ? $sKWordId : false;
    }
    return false;
  }
  
  public function editArticleRelevanceScoreBySKWId( $sKWordId = 0, $articleId = 0 )
  {
    $aRS = $this->articleSKWRecordBySKWId($sKWordId, $articleId);
    $score = (int) $aRS->relevance_score + 1;
    
    return $this->updateArticleRelevanceScoreBySKWId($score, $sKWordId, $articleId);
  }
  
  /** 
  * 
  * HEUREKA IMPORT CATEGORY LIST
  * 
  **/
  
  public function importHeurekaCategoryXml()
  {
    require_once __LIB_DIR__ . 'heureka/HeurekaCategoryExport.php';
    
    $heureka = new HeurekaCategoryExport( self::$registry->getService('objects-storage')->get('heureka_xml_url') );
    
    if(count($heureka->getCategoryList()) > 0) {
      self::$registry->getService('storage')->truncate('app_heureka_category');
      
      foreach($heureka->getCategoryList() as $category) {
        self::$registry->getService('storage')->insert('app_heureka_category', $category);
        
        $this->status[] = self::$registry->getService('storage')->executed();
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /** 
  * 
  * WEBPAY
  * 
  **/
  
  public function orderPayByWebPay( $orderId = 0 )
  {
    if(self::$registry->getService('store')->isOrderById($orderId, 1) && $this->isOrderSettingRuleById( self::OSR_PAY )) {
      // OSR
      $OSR = $this->orderSettingRuleById( self::OSR_PAY );
      // CREATE INVOICE
      $invoiceId = ($this->createInvoice(array('orderId' => $orderId, 'invcc' => self::$registry->getService('store')->lastInvoiceONumber( true )))) ? $this->invoiceIdByOrderId( $orderId ) : 0;
      // SET ORDER PAYED
      $this->status[] = $this->updateOrderById(array('id_status' => (int) $OSR->id_status, 'is_payed' => 1), $orderId);
      // SENDEMAIL
      if((int) $OSR->is_auto_sendemail === 1) 
      {
        $this->status[] = $this->sendEmailById($OSR->id_email, $orderId);
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /** 
  * 
  * INVOICE
  * 
  **/
  
  public function createInvoice( $form = null )
  {
    if(is_array($form) && (count($form) > 0) && $this->isOrderById( $form["orderId"], 1 ) && !empty($form['invcc']) && $this->isUniqueINVCC( $form['invcc'] )) {
      $date0 = (!empty($form["date-0"]) && self::$registry->getService('helper')->validateDate($form["date-0"])) ? $form["date-0"] : date('Y-m-d');
      $date1 = (!empty($form["date-1"]) && self::$registry->getService('helper')->validateDate($form["date-1"])) ? $form["date-1"] : date('Y-m-d');
      $date2 = (!empty($form["date-2"]) && self::$registry->getService('helper')->validateDate($form["date-2"])) ? $form["date-2"] : date('Y-m-d');
      $order = $this->orderById( $form["orderId"] );
      $folderId = $this->__getInvoiceFolderId( $date1 );
      
      if(!is_null($order) && ($this->isInvoiceByOrderId( $order->id_order ) === false) && self::$registry->getService('drive')->isFolderById($folderId)) {
        $userId    = (int) self::$registry->getService('cms')->getUser()->id_user;
        $invoiceId = $this->insertInvoice(array(
          ':id_order'  => $order->id_order,
          ':id_folder' => $folderId,
          ':o_code'    => $form['invcc'],
          ':date0'     => $date0,
          ':date1'     => $date1,
          ':date2'     => $date2,
          ':creator'   => ($userId !== 0) ? $userId : 1
        ));
        $invoiceCode = ((int) $invoiceId < 10) ? '00'.$invoiceId : (((int) $invoiceId < 100) ? '0'.$invoiceId : $invoiceId);
        $personalPickup = ((int) $order->address->primary->is_personal_pickup === 1) ? true : false;
        $deliveryCost   = (!$personalPickup) ? $this->calcDeliveryCost( $order ) : null;
        $isDiscount     = ((float) $order->total_price >= (float) self::$registry->getService('objects-storage')->get('cart_discount_amount')) ? true : false;
        // BUILD INVOICE HTML TEMPLATE
        self::$registry->getService('template')->assign('isPersonalPickUp',$personalPickup);
        self::$registry->getService('template')->assign('deliveryCost',$deliveryCost);
        self::$registry->getService('template')->assign('isDiscount',$isDiscount);
        self::$registry->getService('template')->assign('invoiceId',$invoiceCode);
        self::$registry->getService('template')->assign('order',$order);
        self::$registry->getService('template')->assign('invcc',$form['invcc']);
        self::$registry->getService('template')->assign('date0',$date0);
        self::$registry->getService('template')->assign('date1',$date1);
        self::$registry->getService('template')->assign('date2',$date2);
        // INVOICE HTML STRING
        $invoiceTemp = self::$registry->getService('template')->fetch('store/docs/html_invoice_1.tpl');
        // INVOICE FILE NAME
        $filename = 'fa_'.$invoiceId.'_'.date("Ymd").'.pdf';
        // PDF
        self::$registry->getService('pdf')->load_html($invoiceTemp,'UTF-8');
        self::$registry->getService('pdf')->set_paper('a4', 'portrait');
        self::$registry->getService('pdf')->render();
        // PDF FILE
        $fPDF = self::$registry->getService('pdf')->output();
        $fileHash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString(10).$filename.self::$registry->getService('hash')->generateRandomString(10));
        $file = array(
          ':folder_id'    => $folderId,
          ':file_hash'    => $fileHash,
          ':file_name'    => $filename,
          ':file_owner'   => ($userId !== 0) ? $userId : 1,
          ':file_url'     => '/files/'.$fileHash.'.pdf',
          ':file_type_id' => 2,
          ':file_ext'     => '.pdf',
          ':file_size'    => strlen($invoiceTemp),
        );
        if(file_put_contents(__UPLOAD_PATH__.$fileHash.'.pdf', $fPDF)) {
          $fileId = self::$registry->getService('drive')->insertFile( $file );
          
          $this->status[] = (self::$registry->getService('drive')->isFileById( $fileId )) ? $this->updateInvoiceById(array('id_file' => $fileId), $invoiceId) : false;
        } else {
          throw new Exception('CIF598555', 500);
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  public function rewriteInvoice( $invoice = null, $orderId = 0 )
  {
    if(is_object($invoice) && $this->isOrderById($orderId,1) && self::$registry->getService('drive')->deleteFileFromDriveByFileId( $invoice->id_file )) {
      $userId = (int) self::$registry->getService('cms')->getUser()->id_user;
      $order  = $this->orderById( $orderId );
      $folderId = $this->__getInvoiceFolderId($invoice->date1);
      $personalPickup = ((int) $order->address->primary->is_personal_pickup === 1) ? true : false;
      $deliveryCost   = (!$personalPickup) ? $this->calcDeliveryCost( $order ) : null;
      $isDiscount     = ((float) $order->total_price >= 100) ? true : false;
      // BUILD INVOICE HTML TEMPLATE
      self::$registry->getService('template')->assign('isPersonalPickUp',$personalPickup);
      self::$registry->getService('template')->assign('deliveryCost',$deliveryCost);
      self::$registry->getService('template')->assign('isDiscount',$isDiscount);
      self::$registry->getService('template')->assign('invoiceId',$invoice->id_invoice);
      self::$registry->getService('template')->assign('order',$order);
      self::$registry->getService('template')->assign('invcc',$invoice->o_code);
      self::$registry->getService('template')->assign('date0',$invoice->date0);
      self::$registry->getService('template')->assign('date1',$invoice->date1);
      self::$registry->getService('template')->assign('date2',$invoice->date2);
      // INVOICE HTML STRING
      $invoiceTemp = self::$registry->getService('template')->fetch('store/docs/html_invoice_1.tpl');
      // INVOICE FILE NAME
      $filename = 'fa_'.$invoice->id_invoice.'_'.date("Ymd").'.pdf';
      // PDF
      self::$registry->getService('pdf')->load_html($invoiceTemp,'UTF-8');
      self::$registry->getService('pdf')->set_paper('a4', 'portrait');
      self::$registry->getService('pdf')->render();
      // PDF FILE
      $fPDF = self::$registry->getService('pdf')->output();
      $fileHash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString(10).$filename.self::$registry->getService('hash')->generateRandomString(10));
      $file = array(
        ':folder_id'    => $folderId,
        ':file_hash'    => $fileHash,
        ':file_name'    => $filename,
        ':file_owner'   => ($userId !== 0) ? $userId : 1,
        ':file_url'     => '/files/'.$fileHash.'.pdf',
        ':file_type_id' => 2,
        ':file_ext'     => '.pdf',
        ':file_size'    => strlen($invoiceTemp),
      );
      if(file_put_contents(__UPLOAD_PATH__.$fileHash.'.pdf', $fPDF)) {
        $fileId = self::$registry->getService('drive')->insertFile( $file );

        $this->status[] = (self::$registry->getService('drive')->isFileById( $fileId )) ? $this->updateInvoiceById(array('id_file' => $fileId), $invoice->id_invoice) : false;
      } else {
        throw new Exception('CIF598555', 500);
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function calcDeliveryCost( $order = null )
  {
    if(!is_null($order)) {
      $taxRate = ((float) $order->tax->rate / 100) + 1;
      
      return (object) array(
        'delivery_name' => $order->delivery->delivery_name,
        'qty'           => 1,
        'price'         => self::$registry->getService('helper')->money_format( ($order->delivery->cost - ($order->delivery->cost - ($order->delivery->cost / $taxRate))) ),
        'tax_name'      => $order->tax->tax_name,
        'tax'           => self::$registry->getService('helper')->money_format( $order->delivery->cost - ($order->delivery->cost / $taxRate) ),
        'price_tax'     => self::$registry->getService('helper')->money_format( $order->delivery->cost ),
      );
    }
    return null;
  }
  
  private function __getInvoiceFolderId( $date = null )
  {
    return ($this->isInvoiceRootFolder()) ? $this->invoiceRootFolderId() : $this->createInvoiceRootFolder();
    
    /*
    $d = new DateTime( $date );
    
    $year  = $d->format('Y');
    $mount = $d->format('m');
    $week  = $d->format('w');
    
    self::$registry->getService('helper')->dump( $week );
    * 
    */
  }
  
  private function __buildInvoiceFolderMap()
  {
    
  }
  
  /** 
  * 
  * PDF
  * 
  **/
  
  public function outputViaBrowser( $fileId = 0 )
  {
    
  }
  
  /** 
  * 
  * FILTER MATRIX
  * 
  **/
  
  public function initFilterMatrixValues( $categoryId = 0 )
  {
    foreach(self::$filterMatrix as $key1 => $buckets) {
      foreach($buckets as $key2 => $bucket) {
        foreach($bucket->values as $key3 => $attrVS) {
          self::$filterMatrix[ $key1 ][ $key2 ]->values[ $key3 ]->allow = self::$registry->getService('store')->__haveArticlesByFilter( null, $categoryId, $attrVS->id_value );
        }
      }
    }
  }
  
  public function getFilterMatrix()
  {
    return self::$filterMatrix;
  }

  /** 
  * 
  * OFFER
  * 
  **/
  
  public function createOffer( $form = null )
  {
    if((is_array($form) && (count($form) > 0)) &&
      $this->isEmailById($form['email-id']) &&
      self::$registry->getService('helper')->isEmail($form['recipient-email']) &&
      self::$registry->getService('languages')->isLangById($form['lang-id'])
    ) {
      $userId = self::$registry->getService('cms')->getUser()->id_user;
      
      return $this->insertOffer(array(
        ':id_email'        => (int) $form['email-id'],
        ':id_currency'     => (int) $form['currency-id'],
        ':id_tax'          => (int) $form['tax-id'],
        ':id_lang'         => (int) $form['lang-id'],
        ':o_hash'          => $this->__genUniqueOfferOH(),
        ':e_hash'          => $this->__genUniqueOfferEH(),
        ':recipient_email' => $form['recipient-email'],
        ':date_from'       => (!empty($form["from"])) ? $form["from"] : null,
        ':date_until'      => (!empty($form["until"])) ? $form["until"] : null,
        ':notice'          => $form['notice'],
        ':allow_buy'       => (isset($form['allow-buy'])) ? 1 : 0,
        ':enabled'         => (isset($form['active'])) ? 1 : 0,
        ':upd_user'        => $userId,
        ':upd_date'        => date("Y-m-d H:i:s"),
        ':creator'         => $userId
      ));
    }
    return 0;
  }
  
  private function __genUniqueOfferOH()
  {
    $gHash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('helper')->generateRandomString(20));
    
    if($this->isUniqueOfferOH( $gHash )) {
      return $gHash;
    } else {
      $this->__genUniqueOfferOH();
    }
  }
  
  private function __genUniqueOfferEH()
  {
    $gHash = self::$registry->getService('hash')->ripemd128(self::$registry->getService('helper')->generateRandomString(20));
    
    if($this->isUniqueOfferEH( $gHash )) {
      return $gHash;
    } else {
      $this->__genUniqueOfferEH();
    }
  }
  
  public function createCartByOffer( $articleList = null, $offerId = 0, $currencyId = 0, $taxId = 0, $userId = 0 )
  {
    if((is_array($articleList) && (count($articleList) > 0)) &&
      $this->isCurrencyById( $currencyId ) &&
      $this->isTaxById( $taxId ) &&
      $this->isUserById( $userId )
    ) {
      $cartId = ($this->isCartByUserId($userId)) ? $this->cartIdByUserId($userId) : (int) $this->createCartByUserId( $userId, $currencyId, $taxId );

      if($this->isCartById( $cartId ) &&
        $this->updateCartById(array(
          'id_offer' => $offerId
        ), $cartId)   
      ) {
        foreach($articleList as $value) {
          if((bool) $this->isItemOnCartById($cartId, $value->id_article) === false) {
            $this->status[] = $this->insertItemToCartById(array(
              ':id_cart'    => $cartId,
              ':id_article' => (int) $value->id_article,
              ':qty'        => 1
            ));
          }
        }
        return ((bool) $this->checkStatus() === true) ? $cartId : 0;
      }
      return 0;
    }
    return 0;
  }
  
  public function addOnArticleToOffer( $form = null )
  {
    if((is_array($form) && (count($form) > 0)) && $this->isOfferById($form["offerId"]) && $this->isArticleById($form['articleId'])) {
      $former_price = (float) $this->articleDataById( $form['articleId'] )->retail_tax_price;
      
      if(((int) $form['typeId'] !== 0) || ($former_price > (float) $form['amount'])) {
        // SET %
        $discount = ((int) $form['typeId'] === 2) ? ($former_price / 100) * (float) $form['value'] : 0;
        // COUNT AND SAVE
        if(((int) $form['typeId'] === 0) && ($former_price > (float) $form['amount'])) {
          $this->status[] = $this->insertItemToOffer(array(
            ':id_offer'            => (int) $form["offerId"],
            ':id_article'          => (int) $form['articleId'],
            ':id_type_of_discount' => (int) $form['typeId'],
            ':former_price'        => $former_price,
            ':discount_value'      => 0.00,
            ':total_discount'      => ($former_price - (float) $form['amount']),
            ':amount'              => (float) $form['amount'],
          ));
        } else if(((int) $form['typeId'] === 1) && ((($former_price - (float) $form['value']) < $former_price) && (($former_price - (float) $form['value']) > 0))) {
          $this->status[] = $this->insertItemToOffer(array(
            ':id_offer'            => (int) $form["offerId"],
            ':id_article'          => (int) $form['articleId'],
            ':id_type_of_discount' => (int) $form['typeId'],
            ':former_price'        => $former_price,
            ':discount_value'      => (float) $form['value'],
            ':total_discount'      => (float) $form['value'],
            ':amount'              => ($former_price - (float) $form['value']),
          ));
        } else if(((int) $form['typeId'] === 2) && ((($former_price - $discount) < $former_price) && (($former_price - $discount) > 0))) {
          $this->status[] = $this->insertItemToOffer(array(
            ':id_offer'            => (int) $form["offerId"],
            ':id_article'          => (int) $form['articleId'],
            ':id_type_of_discount' => (int) $form['typeId'],
            ':former_price'        => $former_price,
            ':discount_value'      => (float) $form['value'],
            ':total_discount'      => $discount,
            ':amount'              => ($former_price - $discount),
          ));
        } else {
          return null;
        }
        // OFFER
        $offerCost = $this->offerCalcCostById( $form["offerId"] );
        
        if(!is_null($offerCost)) {
          if($this->isOfferCostById( $form["offerId"] )) {
            $this->status[] = $this->updateOfferCostById(array(
              'total_items'    => (int) $offerCost->total_items,
              'total_former'   => (float) $offerCost->total_former,
              'total_discount' => (float) $offerCost->total_discount,
              'total_amount'   => (float) $offerCost->total_amount
            ), $form["offerId"]);
          } else {
            $this->status[] = $this->insertOfferCostById(array(
              ':id_offer'       => (int) $form["offerId"],
              ':total_items'    => (int) $offerCost->total_items,
              ':total_former'   => (float) $offerCost->total_former,
              ':total_discount' => (float) $offerCost->total_discount,
              ':total_amount'   => (float) $offerCost->total_amount
            ));
          }
          return $this->checkStatus();
        }
        return false;
      }
      return null;
    }
    return false;
  }
  
  public function addOnArticleListToOffer( $form = null )
  {
    if((is_array($form) && (count($form) > 0)) && 
        $this->isOfferById($form["offer-id"]) &&
        (is_array($form['articleList']) && (count($form['articleList']) > 0))
    ) {
      if(self::$registry->getService('store')->updateOfferById(array(
        'id_email'        => (int) $form['email-id'],
        'id_lang'         => (int) $form['lang-id'],
        'recipient_email' => $form['recipient-email'],
        'date_from'       => (strlen($form['from']) > 0) ? $form['from'] : null,
        'date_until'      => (strlen($form['until']) > 0) ? $form['until'] : null,
        'notice'          => $form['notice'],
        'allow_buy'       => (isset($form['allow-buy'])) ? 1 : 0,
        'enabled'         => (isset($form['active'])) ? 1 : 0,
        'upd_user'        => self::$registry->getService('cms')->getUser()->id_user,
        'upd_date'        => date("Y-m-d H:i:s")
      ),$form["offer-id"])) {
        foreach($form['articleList'] as $value) {
          if($this->isItemOnOfferALById($value["'item-id'"]) && $this->isArticleById($value["'article-id'"])) {
            if(isset($value["'remove'"])) {
              $this->status[] = $this->deleteItemFromOfferById( $value["'item-id'"] );
            } else {
              $former_price = (float) $this->articleDataById( $value["'article-id'"] )->retail_tax_price;

              if(((int) $value["'type-of-discount-id'"] !== 0) || ($former_price > (float) $value["'amount'"])) {
                // SET %
                $discount = ((int) $value["'type-of-discount-id'"] === 2) ? ($former_price / 100) * (float) $value["'discount-value'"] : 0;
                // COUNT AND SAVE
                if(((int) $value["'type-of-discount-id'"] === 0) && ($former_price > (float) $value["'amount'"])) {
                  $this->status[] = $this->updateOfferItemById(array(
                    'id_type_of_discount' => (int) $value["'type-of-discount-id'"],
                    'former_price'        => $former_price,
                    'discount_value'      => 0.00,
                    'total_discount'      => ($former_price - (float) $value["'amount'"]),
                    'amount'              => (float) $value["'amount'"],
                  ),$value["'item-id'"]);
                } else if(((int) $value["'type-of-discount-id'"] === 1) && ((($former_price - (float) $value["'discount-value'"]) < $former_price) && (($former_price - (float) $value["'discount-value'"]) > 0))) {
                  $this->status[] = $this->updateOfferItemById(array(
                    'id_type_of_discount' => (int) $value["'type-of-discount-id'"],
                    'former_price'        => $former_price,
                    'discount_value'      => (float) $value["'discount-value'"],
                    'total_discount'      => (float) $value["'discount-value'"],
                    'amount'              => ($former_price - (float) $value["'discount-value'"]),
                  ),$value["'item-id'"]);
                } else if(((int) $value["'type-of-discount-id'"] === 2) && ((($former_price - $discount) < $former_price) && (($former_price - $discount) > 0))) {
                  $this->status[] = $this->updateOfferItemById(array(
                    'id_type_of_discount' => (int) $value["'type-of-discount-id'"],
                    'former_price'        => $former_price,
                    'discount_value'      => (float) $value["'discount-value'"],
                    'total_discount'      => $discount,
                    'amount'              => ($former_price - $discount),
                  ),$value["'item-id'"]);
                } else {
                  return null;
                }
              } else {
                return null;
              }
            }
          } else {
            return false;
          }
        }
        // OFFER
        $offerCost = $this->offerCalcCostById( $form["offer-id"] );
        
        if(!is_null($offerCost)) {
          if($this->isOfferCostById( $form["offer-id"] )) {
            $this->status[] = $this->updateOfferCostById(array(
              'total_items'    => (int) $offerCost->total_items,
              'total_former'   => (float) $offerCost->total_former,
              'total_discount' => (float) $offerCost->total_discount,
              'total_amount'   => (float) $offerCost->total_amount
            ), $form["offer-id"]);
          } else {
            $this->status[] = $this->insertOfferCostById(array(
              ':id_offer'       => (int) $form["offerId"],
              ':total_items'    => (int) $offerCost->total_items,
              ':total_former'   => (float) $offerCost->total_former,
              ':total_discount' => (float) $offerCost->total_discount,
              ':total_amount'   => (float) $offerCost->total_amount
            ));
          }
          return $this->checkStatus();
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  public function updateOfferList( $form = null )
  {
    if(is_array($form['offerList']) && (count($form['offerList']) > 0)) {
      foreach($form['offerList'] as $value) {
        if($this->isOfferById($value["'offer-id'"])) {
          if(isset($value["'remove'"])) {
            $this->status[] = $this->deleteOfferById( $value["'offer-id'"] );
          } else {
            $this->status[] = $this->updateOfferById(array(
              'allow_buy' => (isset($value["'allow-buy'"])) ? 1 : 0,
              'enabled'   => (isset($value["'active'"])) ? 1 : 0,
            ),$value["'offer-id'"]);
          }
        } else {
          $this->status[] = false;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /*********************************************************************************************************
  *
  * EMAIL
  *
  *********************************************************************************************************/
  
  public function createEmail( $data = null )
  {
    // ID EMAIL
    $emailId = $this->insertEmail(array(
      ':id_widget'    => (isset($data["widget-id"])) ? (int) $data["widget-id"] : 0,
      ':email_name'   => (string) $data["email-name"]
    ));
    if($this->isEmailById($emailId))
    {
      if(isset($data["data"]) && (is_array($data["data"]) && (count($data["data"]) > 0)))
      {
        foreach($data["data"] as $key => $value)
        {
          if(self::$registry->getService('languages')->isLangById($key) === true)
          {
            // BCC
            if(isset($value["'bcc'"]) && (strlen($value["'bcc'"]) > 0))
            {
              $bccList = explode(',', $value["'bcc'"]);

              if(is_array($bccList) && (count($bccList) > 0))
              {
                foreach($bccList as $bcc)
                {
                  $this->status[] = $this->insertEmailBcc(array(
                    ':id_email' => (int) $emailId,
                    ':id_lang'  => $key,
                    ':bcc'      => (string) $bcc // email
                  ));
                }
              }
            }
            // DATA
            $this->status[] = $this->insertEmailData(array(
              ':id_email'     => (int) $emailId,
              ':id_lang'      => (int) $key,
              ':sender_email' => (string) $value["'sender-email'"],
              ':sender_name'  => (string) $value["'sender-name'"],
              ':subject'      => (string) $value["'subject'"],
              ':signature'    => (string) $value["'signature'"],
              ':html'         => (string) $value["'html-content'"]
            ));
          }
        }
      }
      return (count($this->status) > 0) ? $this->checkStatus() : false;
    }
    return false;
  }
  
  public function updateEmail( $data = null )
  {
    if($this->updateEmailById(array(
      'id_widget'    => (isset($data["widget-id"])) ? (int) $data["widget-id"] : 0,
      'email_name'   => (string) $data["email-name"]
    ), $data["email-id"])
    ) {
      if((isset($data["data"]) && (is_array($data["data"]) && (count($data["data"]) > 0))) &&
        ($this->deleteEmailBccById($data["email-id"]) === true)
      ) {
        foreach($data["data"] as $key => $value)
        {
          if(self::$registry->getService('languages')->isLangById($key) === true)
          {
            // BCC
            if(isset($value["'bcc'"]) && (strlen($value["'bcc'"]) > 0)) 
            {
              $bccList = explode(',', $value["'bcc'"]);

              if(is_array($bccList) && (count($bccList) > 0))
              {
                foreach($bccList as $bcc)
                {
                  $this->status[] = $this->insertEmailBcc(array(
                    ':id_email' => (int) $data["email-id"],
                    ':id_lang'  => $key,
                    ':bcc'      => (string) $bcc // email
                  ));
                }
              }
            }
            // DATA
            if($this->isEmailDataByLangId($data["email-id"], $key) === true)
            {
              $this->status[] = $this->updateEmailDataById(array(
                'sender_email' => (string) $value["'sender-email'"],
                'sender_name'  => (string) $value["'sender-name'"],
                'subject'      => (string) $value["'subject'"],
                'signature'    => (string) $value["'signature'"],
                'html'         => (string) $value["'html-content'"]
              ), $data["email-id"], $key);
            }
            else
            {
              $this->status[] = $this->insertEmailData(array(
                ':id_email'     => (int) $data["email-id"],
                ':id_lang'      => (int) $key,
                ':sender_email' => (string) $value["'sender-email'"],
                ':sender_name'  => (string) $value["'sender-name'"],
                ':subject'      => (string) $value["'subject'"],
                ':signature'    => (string) $value["'signature'"],
                ':html'         => (string) $value["'html-content'"]
              ));
            }
          }
        }
      }
      return (count($this->status) > 0) ? $this->checkStatus() : false;
    }
    return false;
  }
  
  public function updateEmails( $data = null )
  {
    if(is_array($data) && (count($data) > 0))
    {
      foreach($data as $value)
      {
        if(isset($value["'id'"]) && 
          ($this->isEmailById($value["'id'"]) === true)
        ) {
          // DELETE
          if(isset($value["'delete'"]))
          {
            $this->status[] = $this->deleteEmailById($value["'id'"]);
          }
          else
          {
            // STATUS
            $this->status[] = $this->updateEmailById(array(
              'enabled'  => (isset($value["'enabled'"])) ? 1 : 0
            ), $value["'id'"]);
          }
        }
      }
      return (count($this->status) > 0) ? $this->checkStatus() : false;
    }
    return false;
  }

  public function sendEmailById( $emailId = 0, $objectId = 0, $recipient = '' )
  {
    $email = ($this->isEmailById($emailId) === true) ? $this->emailById( $emailId ) : null;
    
    if(is_object($email))
    {
      $widgetId  = (int) $email->id_widget;
      $widget    = $this->__getWidgetObjectById($widgetId, $objectId);
      $recipient = (strlen($recipient) > 0) ? $recipient : $this->__emailRecipientByWidgetId($widgetId, $widget);
      $langId    = $this->__emailLang($widgetId, $widget);
      $content   = ($widgetId !== 0) ? $this->__buildEmailContent($widgetId, $widget, $email, $langId) : '';

      // TO
      self::$registry->getService('email-service')->addTo( $recipient );
      // REPLY TO
      self::$registry->getService('email-service')->setReplytTo( $email->data[ $langId ]->sender_email );
      // SENDER EMAIL
      self::$registry->getService('email-service')->setFromEmail( $email->data[ $langId ]->sender_email );
      // SENDER NAME
      self::$registry->getService('email-service')->setFromName( 
        html_entity_decode($email->data[ $langId ]->sender_name, ENT_QUOTES, 'UTF-8') 
      );
      // BCC
      if(isset($email->bcc[ $langId ]) && (strlen($email->bcc[ $langId ]) > 0)) 
      {
        $bcc = explode(',', $email->bcc[ $langId ]);
        
        if(is_array($bcc) && (count($bcc) > 0))
        {
          foreach($bcc as $value)
          {
            self::$registry->getService('email-service')->addBCC($value, '');
          }
        }
      }
      // SUBJECT
      self::$registry->getService('email-service')->setSubject(
        html_entity_decode($email->data[ $langId ]->subject, ENT_QUOTES, 'UTF-8')  
      );
      // EMAIL HTML
      self::$registry->getService('email-service')->isHTML(true);
      self::$registry->getService('email-service')->htmlPart( $content );
      // ATTACHMENT
      $this->__emailAttachment($widgetId, $widget);
      // SEND
      return self::$registry->getService('email-service')->send(false);
    }
    return false;
  }
  
  private function __getWidgetObjectById( $widgetId = 0, $objectId = 0 )
  {
    switch($widgetId) 
    {
      // ORDER & INVOICE
      case 1:
      case 2:
        return ($this->isOrderById($objectId, 1)) ? $this->orderById( $objectId ) : null;
      default:
        return null;
    }
  }
  
  public function __emailRecipientByWidgetId( $widgetId = 0, $widget = null )
  {
    switch($widgetId) 
    {
      // ORDER & INVOICE
      case 1:
      case 2:
        return (is_object($widget) && isset($widget->address->invoice->email)) ? $widget->address->invoice->email : __DEFAULT_SENDER_EMAIL__;
      default:
        return __DEFAULT_SENDER_EMAIL__;
    }
  }
  
  public function __emailLang( $widgetId = 0, $widget = null )
  {
    switch($widgetId)
    {
      // ORDER & INVOICE
      case 1:
      case 2:
        return $widget->id_lang;
      default:
        return self::$registry->getService('languages')->getCurrentLanguage();
    }
  }
  
  private function __buildEmailContent( $widgetId = 0, $widget = null, $email = null, $langId = 0 )
  {
    switch($widgetId)
    {
      // ORDER & INVOICE
      case 1:
      case 2:
        $content   = (isset($email->data[ $langId ]->html)) ? $email->data[ $langId ]->html : '';
        $signature = (isset($email->data[ $langId ]->signature)) ? $email->data[ $langId ]->signature : '';

        return $this->__buildEmailHtmlContent(
          (($widgetId === 1) ? $this->__buildOrderWidgetContent($widget, $content) : $content), 
          $signature
        );
      default:
        return (isset($email->data[ $langId ]->html)) ? $email->data[ $langId ]->html : '';
    }
  }
  
  private function __buildOrderWidgetContent( $order = null, $content = '' )
  {
    // ORDER DATA
    $personal_pickup = ((int) $order->address->primary->is_personal_pickup === 1) ? true : false;
    $delivery_cost   = ($personal_pickup === false) ? $this->calcDeliveryCost( $order ) : null;
    $discount        = ((float) $order->total_price >= (float) self::$registry->getService('objects-storage')->get('cart_discount_amount')) ? true : false;
    // BUILD ORDER HTML
    self::$registry->getService('template')->assign('order',$order);
    self::$registry->getService('template')->assign('discount',$discount);
    self::$registry->getService('template')->assign('delivery_cost',$delivery_cost);
    self::$registry->getService('template')->assign('personal_pickup',$personal_pickup);
    // HTML LAYOUT
    $widget_layout = self::$registry->getService('template')->fetch('widgets/email/order/'.$order->id_lang.'/widget_email_order.tpl');
    // REPLACE TAGS
    $replace_data = array(
      '{{client_full_name}}' => ($order->address->invoice->first_name.'&nbsp;'.$order->address->invoice->last_name), 
      '{{notice}}'           => $order->notice
    );
    $output0 = str_replace(
      array_keys($replace_data), 
      array_values($replace_data), 
      $content
    );
    $output = str_replace('{{order}}', $widget_layout, $output0);
    // OUTPUT
    return $output;
  }
  
  private function __buildEmailHtmlContent( $content = '', $signature = '' )
  {
    self::$registry->getService('template')->assign('content',$content);
    self::$registry->getService('template')->assign('signature',$signature);

    return self::$registry->getService('template')->fetch('store/docs/html_email.tpl');
  }
  
  private function __emailAttachment( $widgetId = 0, $widget = null )
  {
    switch($widgetId)
    {
      case 2:
        $invoice = $widget->invoice;

        if((is_object($invoice) && isset($invoice->file_hash) && isset($invoice->file_ext)) &&
          ((strlen($invoice->file_hash) > 0) && (strlen($invoice->file_ext) > 0)) &&
          (self::$registry->getService('drive')->isFileById( $invoice->file_id ) === true)
        ) {
          $path = __UPLOAD_PATH__ . $invoice->file_hash . $invoice->file_ext;

          if(is_readable($path))
          {
            self::$registry->getService('email-service')->addAttachment(
              $path, 
              $invoice->file_name
            );
          }
        }
        break;
    }
  }
  
  /*********************************************************************************************************
  *
  * DELIVERY
  *
  *********************************************************************************************************/
  
  public function createDelivery( $form = null )
  {
    if(is_array($form) && (count($form) > 0)) {
      return $this->insertDelivery(array(
        ':delivery_name'      => $form["delivery-name"],
        ':cost'               => (float) $form["cost"],
        ':delivery_time'      => $form["time"],
        ':delivery_time_unit' => $form["time-unit"],
        ':description'        => $form["description"],
        ':id_country'         => (int) $form["country-id"],
        ':id_currency'        => (int) $form["currency-id"],
        ':enabled'            => (isset($form["enable"])) ? 1 : 0,
        ':position'           => $this->lastPositionOnDelivery()
      ));
    }
    return false;
  }
  
  public function updateDelivery( $form = null )
  {
    if(is_array($form) && (count($form) > 0) && $this->isDeliveryById( $form["delivery-id"] )) {
      return $this->updateDeliveryById(array(
        'delivery_name'      => $form["delivery-name"],
        'cost'               => (float) $form["cost"],
        'delivery_time'      => $form["time"],
        'delivery_time_unit' => $form["time-unit"],
        'description'        => $form["description"],
        'id_country'         => (int) $form["country-id"],
        'id_currency'        => (int) $form["currency-id"],
        'enabled'            => (isset($form["enable"])) ? 1 : 0,
      ),$form["delivery-id"]);
    }
    return false;
  }
  
  public function updateAllDelivery( $form = null )
  {
    if(is_array($form["deliveryList"]) && (count($form["deliveryList"]) > 0)) {
      $i = 1;
      
      foreach($form["deliveryList"] as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = $this->deleteDeliveryById( $value["'delivery-id'"] );
        } else {
          $this->status[] = $this->updateDeliveryById(array(
            'position' => $i,
            'enabled'  => (isset($value["'enable'"])) ? 1 : 0
          ),$value["'delivery-id'"]);
          $i++;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateDeliveryPaymentTies( $form = null )
  {
    if(is_array($form["paymentList"]) && (count($form["paymentList"]) > 0) && (isset($form["delivery-id"]) && is_numeric($form["delivery-id"])) && $this->isDeliveryById( $form["delivery-id"] )) {
      if($this->deleteDeliveryPaymentTiesById( $form["delivery-id"] )) {
        foreach($form["paymentList"] as $value) {
          if($this->isPaymentById( $value["'payment-id'"] )) {
            $this->status[] = $this->insertDeliveryPaymentTies(array(
              ':id_delivery' => (int) $form["delivery-id"],
              ':id_payment'  => (int) $value["'payment-id'"]
            ));
          } else {
            $this->status[] = false;
          }
        }
        return $this->checkStatus();
      }
      return false;
    } elseif((isset($form["delivery-id"]) && is_numeric($form["delivery-id"])) && $this->isDeliveryById( $form["delivery-id"] )) {
      return $this->deleteDeliveryPaymentTiesById( $form["delivery-id"] );
    } else{
      return false;
    }
  }
  
  /** 
  * 
  * PAYMENT
  * 
  **/
  
  public function createPayment( $form = null )
  {
    if(is_array($form) && (count($form) > 0)) {
      return $this->insertPayment(array(
        ':payment_name' => $form["payment-name"],
        ':cost'         => (float) $form["cost"],
        ':description'  => $form["description"],
        ':id_country'   => (int) $form["country-id"],
        ':id_currency'  => (int) $form["currency-id"],
        ':enabled'      => (isset($form["enable"])) ? 1 : 0,
        ':position'     => $this->lastPositionOnPayment()
      ));
    }
    return false;
  }
  
  public function updatePayment( $form = null )
  {
    if(is_array($form) && (count($form) > 0) && $this->isPaymentById( $form["payment-id"] )) {
      return $this->updatePaymentById(array(
        'payment_name' => $form["payment-name"],
        'cost'         => (float) $form["cost"],
        'description'  => $form["description"],
        'id_country'   => (int) $form["country-id"],
        'id_currency'  => (int) $form["currency-id"],
        'enabled'      => (isset($form["enable"])) ? 1 : 0,
      ),$form["payment-id"]);
    }
    return false;
  }
  
  public function updateAllPayment( $form = null )
  {
    if(is_array($form["paymentList"]) && (count($form["paymentList"]) > 0)) {
      $i = 1;
      
      foreach($form["paymentList"] as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = $this->deletePaymentById( $value["'payment-id'"] );
        } else {
          $this->status[] = $this->updatePaymentById(array(
            'position' => $i,
            'enabled'  => (isset($value["'enable'"])) ? 1 : 0
          ),$value["'payment-id'"]);
          $i++;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /** 
  * 
  * Order
  * 
  **/
  
  public function createOrder( $cartId = 0, $currencyId = 0, $taxId = 0 )
  {
    if(self::$registry->getService('store')->isCartById( $cartId, true)) {
      return $this->insertOrder(array(
        ':id_cart'            => (int) $cartId,
        ':id_user'            => self::$registry->getService('controller')->getUserId(),
        ':id_lang'            => self::$registry->getService('languages')->getCurrentLanguage(),
        ':id_currency'        => (int) $currencyId,
        ':id_tax'             => (int) $taxId,
        ':id_address_primary' => 0,
        ':id_address_invoice' => 0,
        ':id_step'            => 1,
        ':reference'          => $this->__uniqueOrderReference(),
        ':secure_key'         => $this->__uniqueOrderSecureKey()
      ));
    }
    return false;
  }
  
  public function updateOrder( $form = null )
  {
    if(is_array($form) && (count($form) > 0) && $this->isOrderById($form["order-id"], 1) && $this->isOrderBySecureKey($form["secure-key"]) && ((int) $form["order-id"] === $this->orderIdBySecureKey($form["secure-key"]))) {
      if(is_array($form["articleList"]) && (count($form["articleList"]) > 0) && $this->__controlOrderArticleList($form["articleList"])) {
        // ORDER
        $order = $this->orderById( $form["order-id"] );
        
        if(!is_null($order)) {
          // ORDER COST DATA
          $total_discount = 0;
          // UPDATE ARTICLE COST DATA
          foreach($form["articleList"] as $item) {
            if(isset($item["'remove'"])) {
              $this->status[] = $this->deleteItemFromCartById( $item["'item-id'"] );
            } else {
              $article = $this->articleDataById( $item["'article-id'"] );
              $former_price = (float) $article->retail_tax_price;
              $retail_price = (float) $article->retail_price;

              if($former_price > 0) {
                $isDiscount         = ($former_price > (float) $item["'amount'"]) ? true : false;
                $discount           = ($isDiscount) ? ($former_price - (float) $item["'amount'"]) : 0;
                $retail_tax_price   = ($isDiscount) ? (float) $item["'amount'"] : (((float) $item["'amount'"] > $former_price) ? (float) $item["'amount'"] : $former_price);
                $amount             = $retail_tax_price * (int) $item["'qty'"];
                $taxRate            = ((float) $order->tax->rate / 100) + 1;
                $tax                = $amount - ($amount / $taxRate);
                $amount_without_tax = $amount - $tax;

                if($isDiscount) {
                  $total_discount = $total_discount + ($discount * (int) $item["'qty'"]);
                }
                $this->status[] = $this->updateItemOnCartByItemId(array(
                  'qty'                => (int) $item["'qty'"],
                  'is_discount'        => ($isDiscount) ? 1 : 0,
                  'retail_tax_price'   => $retail_tax_price,
                  'former_price'       => $former_price,
                  'discount'           => $discount,
                  'tax'                => $tax,
                  'amount_without_tax' => $amount_without_tax,
                  'amount'             => $amount,
                  'retail_price'       => (((bool) $isDiscount === true) || ((float) $item["'amount'"] > $former_price)) ? ($retail_tax_price - ($retail_tax_price - ($retail_tax_price / $taxRate))) : $retail_price
                ),$item["'item-id'"]);
              } else {
                $this->status[] = false;
              }
            }
          }
          $cart = $this->cartDataById( $order->id_cart );

          if(!is_null($cart)) {
            $cartDiscount = (float) self::$registry->getService('objects-storage')->get('cart_discount_amount');
            $deliveryCost = ((int) $order->address->primary->is_personal_pickup === 0) ? $this->calcDeliveryCost( $order ) : null;
            
            $this->status[] = $this->updateOrderCostById(array(
              'total_items'       => $cart->items,
              'total_price'       => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->amount : ($cart->amount + (float) $order->delivery->cost)) : $cart->amount,
              'total_tax'         => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->tax : ($cart->tax + $deliveryCost->tax)) : $cart->tax,
              'total_without_tax' => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->subtotal : ($cart->subtotal + $deliveryCost->price)) : $cart->subtotal,
              'total_discounts'   => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? ($total_discount + (float) $order->delivery->cost) : $total_discount) : $total_discount,
              'total_shipping'    => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? 0 : (float) $order->delivery->cost) : 0
            ),$form["order-id"]);
            $this->status[] = $this->updateOrderById(array(
              'id_status'       => (int) $form["status-id"],
              'private_message' => $form["private-message"]
            ), $form["order-id"]);
          } else {
            $this->status[] = false;
          }
          // ACTIONS
          
          switch((isset($form["action-id"]) ? (int) $form["action-id"] : 0))
          {
            case 1:
              $this->status[] = ($this->isEmailById($form["email-id"])) ? $this->sendEmailById($form["email-id"], $form["order-id"]) : false;
              
              return $this->checkStatus();
            case 2:
              $this->status[] = $this->createInvoice(array(
                'orderId' => $form["order-id"],
                'invcc'   => $form["invcc"],
                'date-0'  => $form["date-0"],
                'date-1'  => $form["date-1"],
                'date-2'  => $form["date-2"]
              ));
              return $this->checkStatus();
            case 3:
              if($this->isInvoiceByOrderId($form["order-id"])) {
                $this->status[] = $this->rewriteInvoice($this->invoiceByOrderId($form["order-id"]), $form["order-id"]);
                
                return $this->checkStatus();
              }
              return false;
            case 4:
              $this->status[] = $this->createInvoice(array(
                'orderId' => $form["order-id"],
                'invcc'   => $form["invcc"],
                'date-0'  => $form["date-0"],
                'date-1'  => $form["date-1"],
                'date-2'  => $form["date-2"]
              ));
              if((bool) $this->status[ end(array_keys($this->status)) ] === true) {
                $this->status[] = ($this->isEmailById($form["email-id"])) ? $this->sendEmailById($form["email-id"], $form["order-id"]) : false;
                
                return $this->checkStatus();
              } else {
                return false;
              }
            case 5:
              if($this->isInvoiceByOrderId($form["order-id"])) {
                $this->status[] = $this->rewriteInvoice($this->invoiceByOrderId($form["order-id"] ), $form["order-id"]);
                
                if((bool) $this->status[ end(array_keys($this->status)) ] === true) {
                  $this->status[] = ($this->isEmailById($form["email-id"])) ? $this->sendEmailById($form["email-id"], $form["order-id"]) : false;

                  return $this->checkStatus();
                } else {
                  return false;
                }
              }
              return false;
            case 6:
              $this->status[] = ($this->isEmailById($form["email-id"])) ? $this->sendEmailById($form["email-id"], $form["order-id"]) : false;
              
              return $this->checkStatus();
            default:
              return $this->checkStatus();
          }
        }
      }
      return false;
    }
    return false;
  }
  
  public function changeOrderAddress( $form = null )
  {
    if($this->isOrderById($form["order-id"], 1) && (is_array($form["address"]) && (count($form["address"]) > 0))) {
      foreach($form["address"] as $address) {
        if($this->isAddressByContactId($address["'address-id'"])) {
          if((int) $form["address-type"] === 1) {
            return $this->updateOrderById(array(
              'id_address_primary' => (int) $address["'address-id'"]
            ),$form["order-id"]);
          }
          if((int) $form["address-type"] === 2) {
            return $this->updateOrderById(array(
              'id_address_invoice' => (int) $address["'address-id'"]
            ),$form["order-id"]);
          }
        }
      }
      return false;
    }
    return false;
  }
  
  public function addOnArticleListToOrder( $form = null )
  { 
    if(is_array($form) && (count($form) > 0) && $this->isOrderById($form["order-id"], 1) && $this->isOrderBySecureKey($form["secure-key"]) && ((int) $form["order-id"] === $this->orderIdBySecureKey($form["secure-key"]))) {
      if(is_array($form["addOnArticleList"]) && (count($form["addOnArticleList"]) > 0)) {
        // ORDER
        $order = $this->orderById( $form["order-id"] );
        
        if(!is_null($order)) {
          // ORDER COST DATA
          $total_discount = (float) $order->total_discounts;
          // UPDATE ARTICLE COST DATA
          foreach($form["addOnArticleList"] as $item) {
            if(isset($item["'on'"])) {
              $article = $this->articleDataById( $item["'article-id'"] );
              $former_price = (float) $article->retail_tax_price;

              if($former_price > 0) {
                $taxRate            = ((float) $order->tax->rate / 100) + 1;
                $isDiscount         = ($former_price > (float) $item["'amount'"]) ? true : false;
                $discount           = ($isDiscount) ? ($former_price - (float) $item["'amount'"]) : 0;
                $retail_tax_price   = ($isDiscount) ? (float) $item["'amount'"] : $former_price;
                $retial_price       = ($retail_tax_price - round($retail_tax_price - ($retail_tax_price / $taxRate),2));
                $amount             = $retail_tax_price * (int) $item["'qty'"];
                $tax                = round($amount - ($amount / $taxRate),2);
                $amount_without_tax = $amount - $tax;

                if($isDiscount) {
                  $total_discount = $total_discount + ($discount * (int) $item["'qty'"]);
                }
                $this->status[] = $this->insertItemToCartById(array(
                  ':id_cart'            => (int) $order->id_cart,
                  ':id_article'         => (int) $item["'article-id'"],
                  ':qty'                => (int) $item["'qty'"],
                  ':is_discount'        => ($isDiscount) ? 1 : 0,
                  ':retail_price'       => $retial_price,
                  ':retail_tax_price'   => $retail_tax_price,
                  ':former_price'       => $former_price,
                  ':discount'           => $discount,
                  ':tax'                => $tax,
                  ':amount_without_tax' => $amount_without_tax,
                  ':amount'             => $amount
                ));
              } else {
                $this->status[] = false;
              }
            }
          }
          $cart = $this->cartDataById( $order->id_cart );

          if(!is_null($cart)) {
            $cartDiscount = (float) self::$registry->getService('objects-storage')->get('cart_discount_amount');
            $deliveryCost = ((int) $order->address->primary->is_personal_pickup === 0) ? $this->calcDeliveryCost( $order ) : null;
            
            $this->status[] = $this->updateOrderCostById(array(
              'total_items'       => $cart->items,
              'total_price'       => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->amount : ($cart->amount + (float) $order->delivery->cost)) : $cart->amount,
              'total_tax'         => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->tax : ($cart->tax + $deliveryCost->tax)) : $cart->tax,
              'total_without_tax' => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->subtotal : ($cart->subtotal + $deliveryCost->price)) : $cart->subtotal,
              'total_discounts'   => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? ($total_discount + (float) $order->delivery->cost) : $total_discount) : $total_discount,
              'total_shipping'    => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? 0 : (float) $order->delivery->cost) : 0
            ),$form["order-id"]);
          } else {
            $this->status[] = false;
          }
          return $this->checkStatus();
        }
      }
      return false;
    }
    return false;
  }
  
  private function __controlOrderArticleList( $articleList = null )
  {
    if(is_array($articleList) && (count($articleList) > 0)) {
      $count = count($articleList);
      
      foreach($articleList as $article) {
        if(isset($article["'remove'"])) {
          $count = $count - 1;
        } else {
          $this->status[] = ($this->isItemOnCartByItemId($article["'item-id'"]) && ((int) $article["'qty'"] > 0) && ((float) $article["'amount'"] > 0)) ? true : false;
        }
      }
      return ($this->checkStatus()) ? (($count > 0) ? true : false) : false;
    }
    return false;
  }
  
  public function duplicateOrderById( $orderId = 0 )
  {
    $userId = self::$registry->getService('controller')->getUserId();
    $order  = $this->orderById( $orderId );
    
    if(!is_null($order)) {
      $cartId = self::$registry->getService('store')->createCartByUserId(
        $userId,
        $order->currency->id_currency,
        $order->tax->id_tax
      );
      foreach($order->cart->articleList as $value) {
        if($this->isArticleByReference( $value->reference )) {
          $this->status[] = $this->insertItemToCartById(array(
            ':id_cart'    => $cartId,
            ':id_article' => $this->articleIdByReference( $value->reference ),
            ':qty'        => $value->qty
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function createNewContantOnAddressBook( $form = null, $secureKey = '', $returnID = false )
  {
    if(is_array($form) && (count($form) > 0) && $this->isOrderBySecureKey($secureKey)) {
      return $this->insertNewContactOnAddressBook(array(
        ':secure_key'         => $this->__uniqueAddressSecureKey(),
        ':id_user'            => self::$registry->getService('controller')->getUserId(),
        ':id_country'         => 190,
        ':is_primary'         => ((bool) $form[ $secureKey.'_primary_address'] === true) ? $this->resetPrimaryAddress() : 0,
        ':is_invoice'         => ((bool) $form[ $secureKey.'_invoice_address'] === true) ? $this->resetInvoiceAddress() : 0,
        ':is_company'         => (!empty($form[ $secureKey.'_company_name']) && !empty($form[ $secureKey.'_comapany_reg_number']) && !empty($form[ $secureKey.'_vat'])) ? 1 : 0,
        ':is_personal_pickup' => (isset($form[ $secureKey.'_personal_pickup' ]) && ((bool) $form[ $secureKey.'_personal_pickup' ] == true)) ? 1 : 0,
        ':first_name'         => (string) $form[ $secureKey.'_first_name'],
        ':last_name'          => (string) $form[ $secureKey.'_last_name'],
        ':email'              => (string) $form[ $secureKey.'_email'],
        ':phone'              => (string) $form[ $secureKey.'_phone'],
        ':city'               => (string) $form[ $secureKey.'_city'],
        ':street'             => (string) $form[ $secureKey.'_street'],
        ':zip'                => (string) $form[ $secureKey.'_zip'],
        ':company_name'       => (string) $form[ $secureKey.'_company_name'],
        ':company_reg_number' => (string) $form[ $secureKey.'_comapany_reg_number'],
        ':vat'                => (string) $form[ $secureKey.'_vat'],
        ':vat_code'           => (string) $form[ $secureKey.'_vat_code'], 
      ), $returnID);
    }
    return false;
  }
  
  private function __uniqueAddressSecureKey()
  {
    $secureKey = self::$registry->getService('hash')->ripemd128(
      self::$registry->getService('helper')->generateRandomString(10)
    );
    if(!$this->isUniqueAddressSecureKey($secureKey)) {
      $this->__uniqueAddressSecureKey(); 
    }
    return $secureKey;
  }
  
  public function updateAddressByContactId( $form = null, $contactId = 0, $secureKey = '' )
  {
    if(is_array($form) && (count($form) > 0) && ($this->isOrderBySecureKey($secureKey) || $this->isUserBySecureKey( $secureKey ) )) {
      return $this->updateContactOnAddressBookById(array(
        'id_country'          => (int) $form[$secureKey.'_country'],
        'is_primary'          => (isset($form[ $secureKey.'_primary_address'])) ? $this->resetPrimaryAddress() : 0,
        'is_invoice'          => (isset($form[ $secureKey.'_invoice_address'])) ? $this->resetInvoiceAddress() : 0,
        'is_company'          => (!empty($form[ $secureKey.'_company_name']) && !empty($form[ $secureKey.'_comapany_reg_number']) && !empty($form[ $secureKey.'_vat'])) ? 1 : 0,
        'is_personal_pickup'  => ($this->__isPersonalPickup( $form[ $secureKey.'_city'], $form[ $secureKey.'_street'], $form[ $secureKey.'_zip'] )) ? 1 : 0,
        'first_name'          => (string) $form[ $secureKey.'_first_name'],
        'last_name'           => (string) $form[ $secureKey.'_last_name'],
        'email'               => (string) $form[ $secureKey.'_email'],
        'phone'               => (string) $form[ $secureKey.'_phone'],
        'city'                => (string) $form[ $secureKey.'_city'],
        'street'              => (string) $form[ $secureKey.'_street'],
        'zip'                 => (string) $form[ $secureKey.'_zip'],
        'company_name'        => (string) $form[ $secureKey.'_company_name'],
        'company_reg_number'  => (string) $form[ $secureKey.'_comapany_reg_number'],
        'vat'                 => (string) $form[ $secureKey.'_vat'],
        'vat_code'            => (string) $form[ $secureKey.'_vat_code'], 
      ),$contactId);
    }
    return false;
  }
  
  private function __isPersonalPickup( $city = '', $street = '', $zip = '' )
  {
    return (!empty($city) && !empty($street) && !empty($zip)) ? false : true;
  }
  
  private function __uniqueOrderReference()
  {
    $orderRef = self::$registry->getService('helper')->generateRandomString(10);
    
    if(!$this->isUniqueOrderReference($orderRef)) {
      $this->__uniqueOrderReference(); 
    }
    return strtoupper($orderRef);
  }
  
  private function __uniqueOrderSecureKey()
  {
    $secureKey = self::$registry->getService('hash')->ripemd128(
      self::$registry->getService('helper')->generateRandomString(10)                                                  
    );
    if(!$this->isUniqueOrderSecureKey($secureKey)) {
      $this->__uniqueOrderSecureKey(); 
    }
    return $secureKey;
  }
  
  public function setAddressOnOrder( $form = null, $secureKey = '' )
  {
    if(is_array($form) && count($form) > 0 && $this->isOrderBySecureKey( $secureKey )) {
      $orderId = $this->orderIdBySecureKey( $secureKey );

      if($this->setDefaultAddressByOrderId( $orderId )) {
        foreach($form as $key => $value) {
          if(isset(explode('_',$key)[3])) {
            $srtp = (string) explode('_',$key)[3];
            $type = ($srtp === "AB") ? 1 : (($srtp === "A") ? 2 : (($srtp === "B") ? 3 : 0));

            if($type !== 0) {
              if($type === 1) {
                $this->status[] = $this->setAddressById(array(
                  'id_address_primary' => (int) $value,
                  'id_address_invoice' => (int) $value
                ), $orderId );
              }
              if($type === 2) {
                $this->status[] = $this->setAddressById(array(
                  'id_address_primary' => (int) $value
                ), $orderId);
              }
              if($type === 3) {
                $this->status[] = $this->setAddressById(array(
                  'id_address_invoice' => (int) $value
                ), $orderId);
              }
            }
          }
        }
        if($this->checkStatus() && !$this->isAddressSetUp()) {
          if($this->isMissingPrimaryAddressByOrderId( $orderId ) == true || $this->isMissingInvoiceAddressByOrderId( $orderId ) == true) {
            if($this->isMissingPrimaryAddressByOrderId( $orderId )) {
              $this->status[] = $this->setAddressById( array('id_address_primary' => $this->invoiceAddressIdByOrderId( $orderId )), $orderId );
            }
            if($this->isMissingInvoiceAddressByOrderId( $orderId )) {
              $this->status[] = $this->setAddressById( array('id_address_invoice' => $this->primaryAddressIdByOrderId( $orderId )), $orderId );
            }
          }
        }
        return ($this->checkStatus()) ? (($this->isAddressSetUp()) ? $this->setStepIdByOrderId( (($this->orderStepId() > 3) ? $this->orderStepId() : 3), $orderId ) : false) : false;
      }
      return false;
    }
    return false;
  }
  
  public function setDeliveryAndPaymentOnOrder( $form = null, $secureKey = '' )
  {
    if(is_array($form) && count($form) > 0 && $this->isOrderBySecureKey( $secureKey )) {
      $orderId = $this->orderIdBySecureKey( $secureKey );
      
      if($this->isDeliveryMethod( $form[ $secureKey.'_delivery' ] )) {
        $this->status[] = $this->setDeliveryMethodById( array('id_delivery_method' => (int) $form[ $secureKey.'_delivery' ]), $orderId );
      }
      if($this->isPaymentMethod( $form[ $secureKey.'_payment' ] )) {
        $this->status[] = $this->setPaymentMethodById( array('id_payment_method' => (int) $form[ $secureKey.'_payment' ]), $orderId );
      }
      return ($this->checkStatus()) ? (($this->isDeliveryAndPaymentSetUp()) ? $this->setStepIdByOrderId( 2, $orderId ) : false) : false;
    }
    return false;
  }
  
  public function calculateCostOrder()
  {
    $order = $this->orderById( $this->orderIdBySecureKey( $this->secureKeyByOrder() ) );
    
    if(!is_null($order)) {
      $cart = $this->getCart(false);
      $cartDiscount   = (float) self::$registry->getService('objects-storage')->get('cart_discount_amount');
      $deliveryCost   = ((int) $order->address->primary->is_personal_pickup === 0) ? $this->calcDeliveryCost( $order ) : null;
      $total_discount = $this->__countTotalDiscount($cart->articleList, (($cartDiscount === true) ? $order->delivery->cost : 0));

      return $this->insertOrderCost(array(
        ':id_order'          => $order->id_order,
        ':total_items'       => $order->cart->items,
        ':total_price'       => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->amount : ($cart->amount + (float) $order->delivery->cost)) : $cart->amount,
        ':total_tax'         => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->tax : ($cart->tax + $deliveryCost->tax)) : $cart->tax,
        ':total_without_tax' => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? $cart->subtotal : ($cart->subtotal + $deliveryCost->price)) : $cart->subtotal,
        ':total_discounts'   => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? ($total_discount + (float) $order->delivery->cost) : $total_discount) : $total_discount,
        ':total_shipping'    => ((int) $order->address->primary->is_personal_pickup === 0) ? ((($cartDiscount > 0) && ($cart->amount > $cartDiscount)) ? 0 : (float) $order->delivery->cost) : 0,
        ':total_payment'     => $order->payment->cost
      ));
    }
    return false;
  }
  
  private function __countTotalDiscount( $articleList = null, $price = 0 )
  {
    foreach($articleList as $article) {
      if((float) $article->discount > 0) {
        $price = $price + (float) $article->discount;
      }
    }
    return $price;
  }
  
  public function orderCSAL()
  {
    $cart  = $this->getCart(false);
    $order = $this->orderById( $this->orderIdByCartId( $cart->id_cart ) );
    
    if(is_array($cart->articleList) && (count($cart->articleList) > 0)) {
      $taxRate = ((float) $order->tax->rate / 100) + 1;

      foreach($cart->articleList as $article) {
        $this->status[] = $this->updateItemOnCartById(array(
          'is_discount'        => ((bool) $article->is_discount === true) ? 1 : 0,
          'retail_price'       => ((bool) $article->is_discount === true) ? ($article->retail_tax_price - ($article->retail_tax_price - ($article->retail_tax_price / $taxRate))) : $article->retail_price,
          'retail_tax_price'   => $article->retail_tax_price,
          'former_price'       => $article->former_price,
          'discount'           => $article->discount,
          'tax'                => $article->tax,
          'amount_without_tax' => $article->amount_without_tax,
          'amount'             => $article->amount
        ), 
          $cart->id_cart, 
          $article->id_article,
          $article->id_par_a,
          $article->id_par_b
        );
        if((int) $article->on_stock_availability === 1) {
          if((bool) $this->isArticleManageWH( $article->id_article ) === true) {
            $whId = $this->warehouseIdByArticleId( $article->id_article );
            
            if((bool) $this->isWarehouseById( $whId ) === true) {
              $mId = $this->whMatrixIdByWHArticleId($whId, $article->id_article);
              
              if((bool) $this->isWHMatrixById( $mId ) === true) {
                // WAREHOUSE MATRIX QTY
                $tQty = $this->warehouseQtyByWAId($whId, $article->id_article);
                $mQty = $this->whMatrixParXYQtyById(
                  $mId, 
                  $article->id_par_a, 
                  $article->id_par_b
                );
                // WAREHOUSE MATRIX PARAB QTY
                $qty = (($mQty > 0) && (($mQty - (int) $article->qty) >= 0)) ? ($mQty - (int) $article->qty) : 0;
                
                $this->updateWHMatrixParQtyById(
                  $qty,
                  $mId,
                  $article->id_par_a,
                  $article->id_par_b
                );
                // WAREHOUSE TOTAL QTY
                $this->status[] = $this->updateWarehouseArticleById(array(
                  'qty' => (($tQty > 0) && (($tQty - (int) $article->qty) >= 0)) ? ($tQty - (int) $article->qty) : 0
                ), $whId, $article->id_article);
              } else {
                // WAREHOUSE QTY
                $qty = $this->warehouseQtyByWAId($whId, $article->id_article);
                
                $this->status[] = $this->updateWarehouseArticleById(array(
                  'qty' => (($qty > 0) && (($qty - (int) $article->qty) >= 0)) ? ($qty - (int) $article->qty) : 0
                ), $whId, $article->id_article);
              }
            }
          } else {
            $qty = $this->articleQtyById( $article->id_article );
            
            $this->status[] = $this->updateArticleById(array(
              'qty' => (($qty > 0) && (($qty - (int) $article->qty) >= 0)) ? ($qty - (int) $article->qty) : 0
            ), $article->id_article);
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function createSettingRule( $form = null )
  {
    if(is_array($form) && (count($form) > 0) && $this->isStatusById( $form["status-id"] )) {
      $userId = self::$registry->getService('cms')->getUser()->id_user;
      
      return $this->insertOrderSettingRule(array(
        ':id_status'         =>  (int) $form["status-id"],
        ':id_email'          =>  (int) $form["email-id"],
        ':is_auto_sendemail' =>  (isset($form["auto-send"])) ? 1 : 0,
        ':is_auto_notify'    =>  (isset($form["notify-send"])) ? 1 : 0,
        ':timer'             =>  null,
        ':position'          =>  $this->lastPositionOSettingRule(),
        ':upd_user'          =>  $userId,
        ':upd_date'          =>  date("Y-m-d H:i:s"),
        ':creator'           =>  $userId
      ));
    }
    return false;
  }
  
  public function updateSettingRule( $form = null )
  {
    if(is_array($form) && (count($form) > 0) && $this->isStatusById( $form["status-id"] ) && $this->isOrderSettingRuleById( $form["osr-id"] )) {
      $userId = self::$registry->getService('cms')->getUser()->id_user;
      
      return $this->updateOrderSettingRule(array(
        'id_status'         =>  (int) $form["status-id"],
        'id_email'          =>  (int) $form["email-id"],
        'is_auto_sendemail' =>  (isset($form["auto-send"])) ? 1 : 0,
        'is_auto_notify'    =>  (isset($form["notify-send"])) ? 1 : 0,
        'timer'             =>  null,
        'upd_user'          =>  $userId,
        'upd_date'          =>  date("Y-m-d H:i:s"),
      ),$form["osr-id"]);
    }
    return false;
  }
  
  public function orderingSettingRules( $form = null )
  {
    if(is_array($form["o-settings"]) && (count($form["o-settings"]) > 0)) {
      $i = 1;
      
      foreach($form["o-settings"] as $value) {
        if($this->isOrderSettingRuleById( $value["'rule-id'"])) {
          $this->status[] = $this->updateOrderSettingRule( array('position' => $i), $value["'rule-id'"] );
          $i++;
        } else {
          $this->status[] = false;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function changeStatusOrder( $form = null )
  {
    if(is_array($form["orders"]) && (count($form["orders"]) > 0) && $this->isStatusById( $form["status-id"] )) {
      $OSR = $this->OSRByStatusId( $form["status-id"] );
      
      foreach($form["orders"] as $key => $value) {
        if(isset($value["'on'"]) && $this->isOrderById( $value["'order-id'"], 1 )) {
          $this->status[ $key ] = $this->updateOrderById(array('id_status' => $form["status-id"]), $value["'order-id'"]);
                    
          if(((int) $OSR->is_auto_sendemail === 1) && $this->isEmailById( $OSR->id_email )) 
          {
            if((bool) $this->status[ $key ] === true) 
            {
              $this->status[ $key ] = $this->sendEmailById($OSR->id_email, $value["'order-id'"], $this->orderById( $value["'order-id'"] )->address->invoice->email);
            }
          }
        } else {
          $this->status[ $key ] = true;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function isOrderPersonalPickup()
  {
    return (in_array($this->deliveryIdByOrder(), self::$OrderPersonalPickupIds)) ? true : false;
  }
  
  public function orderWidgets( $filterId = 0 )
  {
    $data = $this->orderWidgetData( $filterId );
    
    if(!is_null($data)) {
      $total = (int) $data->total_orders / 100;

      return (object) array(
        "low_amount"     => self::$registry->getService('helper')->money_format( $data->low_amount ),
        "high_amount"    => self::$registry->getService('helper')->money_format( $data->high_amount ),
        "total_amount"   => self::$registry->getService('helper')->money_format( $data->total_amount ),
        "total_orders"   => $data->total_orders,
        "total_articles" => $data->total_articles,
        "payed"          => ((int) $data->total_payed > 0) ? round(((int) $data->total_payed / $total), 2) : $data->total_payed,
        "outstanding"    => ((int) $data->total_outstanding > 0) ? round(((int) $data->total_outstanding / $total), 2) : $data->total_outstanding
      );
    }
    return null;
  }
  
  public function removeOSRById( $osrId = 0 )
  {
    if($this->isOrderSettingRuleById( $osrId )) {
      return ($this->deleteSettingRuleById( $osrId )) ? $this->__reindexPositionOSR() : false;
    }
    return false;
  }
  
  private function __reindexPositionOSR()
  {
    $OSRList = $this->orderSettingList();
    
    if(!is_null($OSRList)) {
      $i = 1;
      
      foreach($OSRList as $value) {
        $this->status[] = $this->updateOrderSettingRule(array('position' => $i), $value->id_rule );
        $i++;
      }
      return $this->checkStatus();
    }
    return true;
  }
  
  /** 
  * 
  * User
  * 
  **/
  
  public function uniqueUserId()
  {
    $uniqueRef = self::$registry->getService('hash')->ripemd128(
      self::$registry->getService('hash')->generateRandomString(10)                                                  
    );
    if(!$this->isUniqueUserId($uniqueRef)) {
      $this->uniqueUserId(); 
    }
    return $uniqueRef;
  }
  
  public function createUser( $sToken = '', $skey = '', $langId = 0, $visitor = null, $detector = null )
  {    
    if((strlen($sToken) === 32) && (strlen($skey) === 32) && self::$registry->getService('languages')->checkLanguageId($langId) && !is_null($visitor) && !is_null($detector)) {
      return $this->insertUser(array(
        ':is_guest'            => 1,
        ':is_computer'         => ($detector->isComputer) ? 1 : 0,
        ':is_tablet'           => ($detector->isTablet) ? 1 : 0,
        ':is_mobile'           => ($detector->isMobile) ? 1 : 0,
        ':is_mobile_device'    => ($detector->isMobileDevice) ? 1 : 0,
        ':secure_token'        => $sToken,
        ':secure_key'          => $skey,
        ':id_lang'             => $langId,
        ':continent'           => (strlen($visitor->continent) > 0) ? $visitor->continent : 'EU',
        ':country_code'        => $visitor->countryCode,
        ':country_name'        => $visitor->countryName,
        ':city'                => $visitor->city,
        ':latitude'            => $visitor->latitude,
        ':longitude'           => $visitor->longitude,
        ':timezone'            => $visitor->timezone["timeZoneId"],
        ':timezone_name'       => $visitor->timezone["timeZoneName"],
        ':web_browser'         => $detector->browserFull,
        ':operating_system'    => $detector->osFull,
        ':javascript'          => (!$detector->nojs) ? 1 : 0,
        ':screen_resolution_x' => $detector->screenattributes->windowWidth,
        ':screen_resolution_y' => $detector->screenattributes->windowHeight,
        ':screen_color'        => $detector->screenattributes->colorDepth
      ));
    } else {
      return false;
    }
  }
  
  public function updateUserList( $form = null )
  {
    if(is_array($form["users"]) && (count($form["users"]) > 0)) {
      foreach($form["users"] as $value) {
        if(isset($value["'remove'"]) && !$this->isLockUserById( $value["'user-id'"] )) {
          $this->status[] = $this->deleteUserById( $value["'user-id'"] );
          $this->status[] = $this->deleteAddressByUserId( $value["'user-id'"] );
        }
      }
      return (is_null($this->status)) ? true : $this->checkStatus();
    }
    return false;
  }
  
  public function getUserWidgetsData()
  {
    $data  = $this->userWidgetData();
    $total = (int) $data->total_users / 100;
    
    return (object) array(
      "guest"    => round(((int) $data->total_guest / $total), 2),
      "visitor"  => round(((int) $data->total_visitor / $total), 2),
      "customer" => round(((int) $data->total_customer / $total), 2),
      "banned"   => round(((int) $data->total_banned / $total), 2)
    );
  }
  
  /** 
  * 
  * SHOPPING CART
  * 
  **/
  
  public function getCart( $round = true )
  {
    return ($this->isCartByUserId(self::$registry->getService('controller')->getUserId())) ? $this->cartDataById( $this->cartIdByUserId(self::$registry->getService('controller')->getUserId()), true, 0, $round ) : null;
  }
  
  public function addToCard( $articleRef = '', $qty = 0, $matrix = false, $parAId = 0, $parBId = 0, $currencyId = 0, $taxId = 0 )
  {
    $articleId = ((strlen($articleRef) === 32) && ((bool) $this->isArticleByReference( $articleRef ) === true)) ? $this->articleIdByReference( $articleRef ): 0;
    $langId    = self::$registry->getService('languages')->getCurrentLanguage();
    $userId    = self::$registry->getService('controller')->getUserId();
    
    if(((bool) $this->isArticleById( $articleId ) === true) &&
      ((bool) $this->haveArticleLDById($articleId, $langId) === true) &&
      ((bool) $this->isUserById( $userId ) === true) &&
      ((bool) $this->isCurrencyById( $currencyId ) === true) &&
      ((bool) $this->isTaxById( $taxId ) === true) &&
      ((int) $qty > 0)
    ) {
      $article = $this->articleOnSiteById($articleId, $langId);
      $whId    = $this->warehouseIdByArticleId( $articleId );

      if(is_object($article)) {
        if(((bool) $matrix === true) &&
          !$this->__checkMatrix($article, $parAId, $parBId)
        ) {
          return false;
        }
        $cartId = ($this->isCartByUserId( $userId )) ? $this->cartIdByUserId( $userId ) : (int) $this->createCartByUserId($userId, $currencyId, $taxId);

        if((bool) $this->isCartById( $cartId ) === true) {
          if((bool) $this->isItemOnCartById($cartId, $articleId, $parAId, $parBId) === true) {
            $this->status[] = $this->updateItemOnCartById(array(
              'qty' => $this->calculateItemQtyById($cartId, $articleId, $parAId, $parBId, $qty)
            ), $cartId, $articleId, $parAId, $parBId);
          } else {
            $this->status[] = $this->insertItemToCartById(array(
              ':id_cart'    => $cartId,
              ':id_wh'      => $whId,
              ':id_matrix'  => ((bool) $matrix === true) ? $this->whMatrixIdByWHArticleId($whId, $articleId) : 0,
              ':id_article' => $articleId,
              ':id_par_a'   => (int) $parAId,
              ':id_par_b'   => (int) $parBId,
              ':qty'        => (int) $qty
            ));
          }
          if((bool) $this->checkStatus() === true) {
            self::$registry->getService('controller')->setCart(
              $this->getCart()   
            );
            return true;
          }
          return false;
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function __checkMatrix( $article = null, $parAId = 0, $parBId = 0 )
  {
    if(((bool) $this->isArticleManageWH( $article->id_article ) === true) &&
      ((bool) $this->haveArticleWHMatrixById(
        $this->warehouseIdByArticleId( $article->id_article ),
        $article->id_article
      ) === true)   
    ) {
      if((isset($article->matrix) && is_object($article->matrix)) && 
        (isset($article->matrix->id_wh) && isset($article->matrix->id_matrix)) &&
        ((bool) $this->haveWHMatrixArticleById(
          $article->matrix->id_matrix,
          $article->matrix->id_wh,
          $article->id_article
        ) === true)
      ) {
        return (((bool) $this->isWHMatrixParByAttrVId($article->matrix->id_matrix, $parAId)) && ((bool) $this->isWHMatrixParByAttrVId($article->matrix->id_matrix, $parBId))) ? true : false;
      }
      return false;
    }
    return (((int) $parAId === 0) && ((int) $parBId === 0)) ? true : false;
  }
  
  public function updateCarts( $form = null )
  {
    if(is_array($form["carts"]) && count($form["carts"]) > 0) {
      foreach($form["carts"] as $value) {
        if(isset($value["'closed'"])) {
          $this->status[] = $this->closeCartById( $value["'cart-id'"] );
          $this->status[] = $this->deleteOrderByCartId( $value["'cart-id'"] );
        } else if(isset($value["'archiv'"])) {
          $this->status[] = $this->archivCartById( $value["'cart-id'"] );
          $this->status[] = $this->archivOrderByCartId( $value["'cart-id'"] );
        } else if(isset($value["'remove'"])) {
          $this->status[] = $this->deleteCartById( $value["'cart-id'"] );
          $this->status[] = $this->deleteOrderByCartId( $value["'cart-id'"] );
        } else {
          $this->status[] = true;
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function removeArticleFromCart( $itemId = 0 )
  {
    if($this->deleteItemFromCartById( $itemId )) {
      $cartId = (int) $this->getCart()->id_cart;
      
      if(!$this->haveArticleCartById( $cartId )) {
        $this->status[] = $this->deleteOrderByCartId( $cartId );
        $this->status[] = $this->deleteCartById( $cartId );
        
        return $this->checkStatus();
      }
      return true;
    }
    return false;
  }
  
  /** 
  * 
  * STATUS
  * 
  **/
  
  public function createStatus( $form = null )
  {
    $userId   = self::$registry->getService('cms')->getUser()->id_user;
    $statusId = $this->insertStatus(array(
      ':id_pattern' => (int) $form['pattern-id'],
      ':color'      => $form['color'],
      ':upd_user'   => $userId,
      ':upd_date'   => date("Y-m-d H:i:s"),
      ':creator'    => $userId
    ));
    if($this->isStatusById( $statusId ) && $this->deleteStatusLangById( $statusId )) {
      foreach($form['statuses-lang'] as $key => $value) {
        $this->status[] = $this->insertStatusLang(array(
          ':id_status'   => (int) $statusId,
          ':id_lang'     => $key,
          ':status_name' => $value["'status-name'"]
        ));
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateStatus( $form = null, $statusId = 0 )
  {
    if(is_array($form) && count($form) > 0 && $this->isStatusById($statusId)) {
      if($this->updateStatusById(array(
        'id_pattern' => (int) $form['pattern-id'],
        'color'      => $form['color'],
        'upd_user'   => self::$registry->getService('cms')->getUser()->id_user,
        'upd_date'   => date("Y-m-d H:i:s"),
      ),$statusId)
      ) {
        if($this->deleteStatusLangById( $statusId )) {
          foreach($form['statuses-lang'] as $key => $value) {
            $this->status[] = $this->insertStatusLang(array(
              ':id_status'   => (int) $statusId,
              ':id_lang'     => $key,
              ':status_name' => $value["'status-name'"]
            ));
          }
          return $this->checkStatus();
        } else {
          return false;
        }
      } else {
        return false;
      }
    }
    return false;
  }
  
  public function updateStatuses( $form = null )
  {
    if(!empty($form['statuses']) && is_array($form['statuses'])) {
      foreach($form['statuses'] as $key => $value) {
        if($this->isStatusById( $value["'status-id'"] )) {
          if(isset($value["'remove'"])) {
            $this->status[] = $this->deleteStatusById($value["'status-id'"]);
          } else {        
            $this->status[] = $this->updateStatusById(array(
              'enabled' => (isset($value["'enable'"])) ? 1 : 0                                    
            ),$value["'status-id'"]);
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
  * CATALOG_ARTICLE
  * 
  **/
  
  public function createArticle( $articleName = '', $cUserId = 0 )
  {
    $userId    = ((int) $cUserId !== 0) ? $cUserId : self::$registry->getService('cms')->getUser()->id_user;
    $articleId = $this->insertArticle(array(
      ':article_name_internal' => $articleName,
      ':reference'    => $this->__genUniqueArticleReference(),
      ':sku'          => $this->__genUniqueArticleSKU(),
      ':position'     => $this->articleLastPosition(),
      ':upd_user'     => $userId,
      ':upd_date'     => date("Y-m-d H:i:s"),
      ':creator'      => $userId
    ));
    if($this->isArticleById($articleId)) {
      $langs = self::$registry->getService('languages')->getEnabledLanguages();
      
      if(is_array($langs) && (count($langs) > 0)) {
        foreach($langs as $lang) { 
          $data = array(
            ':id_article'       => $articleId,
            ':id_lang'          => $lang->id_lang,
            ':article_name'     => $articleName,
            ':site_title'       => $articleName,
            ':meta_keywords'    => '',
            ':meta_description' => '',
            ':meta_robot'       => 'all',
            ':html_content'     => '',
          );
          if(!$this->insertArticleLang( $data )) {
            throw new ErrorException('It could not create a language pack for Article.');
          }
        }
      }
      return $articleId;
    }
    return 0;
  }
  
  private function __genUniqueArticleReference()
  {
    $reference = self::$registry->getService('hash')->ripemd128(
      self::$registry->getService('hash')->generateRandomString(10)      
    );
    if(!$this->isArticleByReference( $reference )) {
      return $reference;
    } else {
      $this->__genUniqueArticleReference();
    }
  }
  
  public function __genUniqueArticleSKU()
  {
    $sku = self::$registry->getService('hash')->generateRandomString(10);
    
    if(!$this->isArticleBySKU( $sku )) {
      return $sku;
    } else {
      $this->__genUniqueArticleSKU();
    }
  }
  
  public function insertArticleImageById( $articleId = 0, $images = null )
  {
    if(!empty($images) && is_array($images)) {
      foreach($images as $image) {
        if(isset($image["'use'"])) {
          $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $image["'imgId'"] );
          
          if($fileId > 0) {
            return $this->updateArticleImageById( $articleId, $fileId );
          } else {
            return false;
          }
        }
      }
    }
    return false;
  }
  
  public function insertViewerArticleById( $articleId = 0, $langId = 0 )
  {
    $userId = self::$registry->getService('controller')->getUserId();
    
    if($this->isUserById($userId) && $this->isArticleById($articleId)) {
      $visitor = self::$registry->getService('geoip')->getVisitor();

      if(is_object($visitor)) {
        return $this->insertArticleViwerStatistics(array(
          ':id_article'    => (int) $articleId,
          ':id_user'       => (int) $userId,
          ':id_lang'       => (int) $langId,
          ':ip_address'    => self::$registry->getService('irequest')->getRemoteAddress(),
          ':continent'     => $visitor->continent,
          ':country_code'  => $visitor->countryCode,
          ':country_name'  => $visitor->countryName,
          ':city'          => $visitor->city,
          ':latitude'      => $visitor->latitude,
          ':longitude'     => $visitor->longitude,
          ':timezone'      => (isset($visitor->timezone->timeZoneId)) ? $visitor->timezone->timeZoneId : null,
          ':timezone_name' => (isset($visitor->timezone->timeZoneName)) ? $visitor->timezone->timeZoneName : null,
        ));
      }
      return false;
    }
    return false;
  }
  
  public function updateArticleDataById( $form = null, $articleId = 0, $updUserId = 0 )
  {
    if((is_array($form) && (count($form) > 0)) && $this->isArticleById($articleId)) {
      $prices = $this->__getRetailTaxPrice( $form["retail_price"], $form["retail_tax_price"], $form["tax-id"]);
      $data   = array(
        'id_article_type'            => (int) $form["article-type-id"],
        'id_visibility'              => (int) $form["visibility-id"],
        'id_currency'                => (int) $form["currency-id"],
        'id_tax'                     => (int) $form["tax-id"],
        'id_manufacturer'            => 0,
        'id_country_of_manufacturer' => (int) $form["country-of-manufacture-id"],
        'id_supplier'                => 0,
        'id_slider'                  => 0,
        'id_gallery'                 => (isset($form["gallery-id"])) ? (int) $form["gallery-id"] : 0,
        'id_image'                   => (isset($form["image-id"])) ? ( ( (int) $form["image-id"] > 0 ) ? (int) $form["image-id"] : 0 ) : 0,
        'sku'                        => $form["sku"],
        'article_name_internal'      => $form["article-name-internal"],
        'ean13_jan_barcode'          => $form["ean13-jan-barcode"],
        'upc_barcode'                => $form["upc-barcode"],
        'wholesale_price'            => (float) $form["wholesale_price"],
        'recommended_retail_price'   => (float) $form["recommended-retail-price"],
        'retail_price'               => $prices->retail_price,
        'retail_tax_price'           => $prices->retail_tax_price,
        'tax_price'                  => $prices->tax_price,
        'unit_price'                 => (float) $form["unit_price"],
        'unity'                      => $form["unity"],
        'rent_tax_price'             => (isset($form['rent-tax-price']) && ((float) $form['rent-tax-price'] > 0)) ? (float) $form['rent-tax-price'] : 0,
        'rent_number'                => (isset($form['rent-number']) && ((int) $form['rent-number'] > 0)) ? (int) $form['rent-number'] : 0,
        'rent_unit'                  => (isset($form['rent-unit']) && (strlen($form['rent-unit']) > 0)) ? (string) $form['rent-unit'] : '',
        'qty'                        => (int) $form["qty"],
        'default_purchase_amount'    => (isset($form['default-purchase-amount']) && ((int) $form['default-purchase-amount'] > 0)) ? (int) $form['default-purchase-amount'] : 1,
        'qty_out_of_stock'           => (int) $form["qty_out_of_stock"],
        'min_qty_in_cart'            => (int) $form["min_qty_in_cart"],
        'max_qty_in_cart'            => (int) $form["max_qty_in_cart"],
        'new_from_date'              => $form["new-from-date"],
        'new_to_date'                => $form["new-to-date"],
        'ap_width'                   => (float) $form["ap-width"],
        'ap_height'                  => (float) $form["ap-height"],
        'ap_depth'                   => (float) $form["ap-depth"],
        'ap_weight'                  => (float) $form["ap-weight"],
        'ap_shipping_fee'            => (float) $form["ap-shipping-fee"],
        'expedition_number_value'    => (isset($form['expedition-number-value']) && ((int) $form['expedition-number-value'] > 0)) ? (int) $form['expedition-number-value'] : 0,
        'expedition_unit_time'       => (isset($form['expedition-unit-time']) && (strlen($form['expedition-unit-time']) > 0)) ? (string) $form['expedition-unit-time'] : '',
        'is_campaign'                => (isset($form["campaign"])) ? 1 : 0,
        'is_avaiable_for_order'      => (isset($form["available-for-order"])) ? 1 : 0,
        'on_show_price'              => (isset($form["show-price"])) ? 1 : 0,
        'on_show_tax'                => (isset($form["show-tax"])) ? 1 : 0,
        'on_notify_qty'              => (isset($form["notify-qty"])) ? 1 : 0,
        'on_monitoring'              => (isset($form["monitoring"])) ? 1 : 0,
        'on_stock_availability'      => (isset($form["stock-availability"])) ? 1 : 0,
        'on_online_only'             => (isset($form["online-only"])) ? 1 : 0,
        'on_pay_paypal'              => (isset($form["pay-paypal"])) ? 1 : 0,
        'on_pay_cc_paypal'           => (isset($form["pay-cc-paypal"])) ? 1 : 0,
        'on_pay_visa'                => (isset($form["pay-visa"])) ? 1 : 0,
        'on_pay_master_card'         => (isset($form["pay-master-card"])) ? 1 : 0,
        'on_pay_discover'            => (isset($form["pay-discover"])) ? 1 : 0,
        'on_pay_credit_card'         => (isset($form["pay-credit-card"])) ? 1 : 0,
        'on_pay_g_wallet'            => (isset($form["pay-g-wallet"])) ? 1 : 0,
        'on_pay_amex'                => (isset($form["pay-amex"])) ? 1 : 0,
        'on_tp_truck'                => (isset($form["tp-truck"])) ? 1 : 0,
        'on_tp_rail'                 => (isset($form["tp-rail"])) ? 1 : 0,
        'on_tp_marine'               => (isset($form["tp-marine"])) ? 1 : 0,
        'on_tp_air'                  => (isset($form["tp-air"])) ? 1 : 0,
        'on_iss_dhl'                 => (isset($form["iss-dhl"])) ? 1 : 0,
        'on_iss_ups'                 => (isset($form["iss-ups"])) ? 1 : 0,
        'on_iss_tnt'                 => (isset($form["iss-tnt"])) ? 1 : 0,
        'on_iss_fedex'               => (isset($form["iss-fedex"])) ? 1 : 0,
        'guest'                      => (isset($form["guest"])) ? 1 : 0,
        'visitor'                    => (isset($form["visitor"])) ? 1 : 0,
        'customer'                   => (isset($form["customer"])) ? 1 : 0,
        'enabled'                    => (isset($form["enable"])) ? 1 : 0,
        'upd_user'                   => ((int) $updUserId !== 0) ? $updUserId : self::$registry->getService('cms')->getUser()->id_user,
        'upd_date'                   => date("Y-m-d H:i:s"),
      );
      if(isset($form["article-ext-id"])) {
        $data['id_ext_article'] = $form["article-ext-id"];
      }
      if($this->updateArticleById($data, $articleId)) {
        if(!empty($form["lang"])) {
          $this->status[] = $this->__updateArticleDataLang($form["lang"], $articleId);
          
          if(isset($form["statuses"])) {
            $this->status[] = $this->__updateArticleDataStatusList($form["statuses"], $articleId);
          } else {
            $this->status[] = $this->deleteArticleStatusById($articleId);
          }
          if(isset($form["categories"])) {
            $this->status[] = $this->__updateArticleDataCategoryList($form["categories"], $articleId);
          } else {
            $this->deleteArticleCategoryById($articleId);
          }
          if(isset($form["attrValueList"])) {
            $this->status[] = $this->__updateArticleDataAttrValueList($form["attrValueList"], $articleId);
          } else {
            $this->deleteArticleAttributeById($articleId);
          }
          if(isset($form["relatedArticleList"])) {
            $this->status[] = $this->__updateArticleDataRelatedArticleList($form["relatedArticleList"], $articleId);
          } else {
            $this->deleteArticleRelatedArticleById($articleId);
          }
          if(isset($form["alternativeArticleList"])) {
            $this->status[] = $this->__updateArticleDataAlternativeArticleList($form["alternativeArticleList"], $articleId);
          } else {
            $this->deleteAlternativeArticleListById($articleId);
          }
          // FULL TEXT REINDEXES
          $this->status[] = $this->reindexArticleFullTextIndexesById( $articleId );
          // REGENERATION EXPORT FILES
          // $this->__regenerationExportFiles();
          // CHECK
          return $this->checkStatus();
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function __regenerationExportFiles()
  {
    if(count($this->exportKeys) > 0) {
      foreach($this->exportKeys as $key => $value) {
        $this->status[] = $this->exports( $key );
      }
    }
  }
  
  public function reindexArticleFullTextIndexesById( $articleId = 0 )
  {
    $data = $this->articleDataForFullTextIndexesById( $articleId );

    if(is_array($data) && (count($data) > 0)) {
      foreach($data as $key => $value) {
        if($this->isArticleFullTextIndexesById($articleId, $key)) {
          $this->status[] = $this->updateArticleFTIndex(array(
            'a_index'    => $value->article_name,
            'b_index'    => $value->description,
            'c_index'    => $value->categories,
            'd_index'    => $value->attributes
          ), $articleId, $key);
        } else {
          $this->status[] = $this->insertArticleFTIndex(array(
            ':id_article' => $articleId,
            ':id_lang'    => $key,
            ':a_index'    => $value->article_name,
            ':b_index'    => $value->description,
            ':c_index'    => $value->categories,
            ':d_index'    => $value->attributes
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  private function __getRetailTaxPrice( $retailPrice = 0, $retailTaxPrice = 0, $taxId = 0 )
  {
    $obj = (object) array(
      'retail_price'     => ((float) $retailPrice !== 0) ? (float) $retailPrice : 0,
      'retail_tax_price' => ((float) $retailTaxPrice !== 0) ? (float) $retailTaxPrice : 0,
      'tax_price'        => 0
    );
    if($this->isExistsTaxById($taxId)) {
      $taxRate = ((float) $this->getTaxDataById($taxId)->rate / 100) + 1;
      
      if($obj->retail_price < 1) {
        $obj->tax_price    = $obj->retail_tax_price - ($obj->retail_tax_price / $taxRate);
        $obj->retail_price = $obj->retail_tax_price - $obj->tax_price;
      }
      if($obj->retail_tax_price < 1) {
        $obj->retail_tax_price = $obj->retail_price * $taxRate;
        $obj->tax_price = $obj->retail_tax_price - $obj->retail_price;
      }
      if($obj->tax_price < 1) {
        $obj->tax_price = $obj->retail_tax_price - ($obj->retail_tax_price / $taxRate);
      }
    }
    return $obj;
  }
  
  private function __updateArticleDataLang( $data = null, $articleId = 0 )
  {
    if(is_array($data) && (count($data) > 0)) {
      $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
      
      foreach($data as $key => $value) {
        if($this->isArticleLangById($articleId, $key)) {
          $this->status[] = $this->updateArticleLangById(array(
            'article_name'     => $value["'article-name'"],
            'description'      => $value["'description'"],
            'site_title'       => $value["'site-title'"],
            'meta_keywords'    => $value["'meta-keywords'"],
            'meta_description' => $value["'meta-description'"],
            'meta_robot'       => $value["'meta-robot'"],
            'html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
          ), $articleId, $key);
        } else {
          $this->status[] = $this->insertArticleLang(array(
            ':id_article'       => $articleId,
            ':id_lang'          => $key,
            ':article_name'     => $value["'article-name'"],
            ':description'      => $value["'description'"],
            ':site_title'       => $value["'site-title'"],
            ':meta_keywords'    => $value["'meta-keywords'"],
            ':meta_description' => $value["'meta-description'"],
            ':meta_robot'       => $value["'meta-robot'"],
            ':html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  private function __updateArticleDataStatusList( $statusList = null, $articleId = 0 )
  {
    if(!empty($statusList) && is_array($statusList)) {
      if($this->deleteArticleStatusById($articleId)) {
        foreach($statusList as $value) {
          $this->status[] = $this->insertArticleStatusById(array(
            ':id_article' => (int) $articleId,
            ':id_status'  => (int) $value
          ));
        }
        return $this->checkStatus();
      } else {
        return false;
      }
    }
    return false;
  }
  
  private function __updateArticleDataCategoryList( $categoryList = null, $articleId = 0 )
  {
    if(is_array($categoryList) && (count($categoryList) > 0)) {
      if((bool) $this->deleteArticleCategoryById( $articleId ) === true) {
        $i = 1;
        
        foreach($categoryList as $value) {
          $this->status[] = $this->insertArticleCategoryById(array(
            ':id_article'  => (int) $articleId,
            ':id_category' => (int) $value["'category-id'"],
            ':bc_position' => $i
          ));
          $i++;
        }
        return $this->checkStatus();
      } 
      return false;
    }
    return false;
  }
  
  private function __updateArticleDataAttrValueList( $attrValueList = null, $articleId = 0 )
  {
    if(is_array($attrValueList) && (count($attrValueList) > 0) && $this->deleteArticleAttributeById($articleId)) {
      foreach($attrValueList as $value) {
        $this->status[] = $this->insertArticleAttributeById(array(
          ':id_article'   => (int) $articleId,
          ':id_attribute' => (int) $value["'attr-id'"],
          ':id_value'     => (int) $value["'value-id'"]
        ));
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  private function __updateArticleDataRelatedArticleList( $relatedArticleList = null, $articleId = 0 )
  {
    if((is_array($relatedArticleList) && (count($relatedArticleList) > 0)) && 
      $this->deleteArticleRelatedArticleById($articleId)
    ) {
      foreach($relatedArticleList as $value) {
        $this->status[] = $this->insertArticleRelatedArticleById(array(
          ':id_article'         => (int) $articleId,
          ':id_related_article' => (int) $value["'article-id'"]
        ));
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  private function __updateArticleDataAlternativeArticleList( $alternativeArticleList = null, $articleId = 0 )
  {
    if((is_array($alternativeArticleList) && (count($alternativeArticleList) > 0)) &&
      $this->deleteAlternativeArticleListById($articleId)
    ) {
      foreach($alternativeArticleList as $value) {
        $this->status[] = $this->insertArticleToAlternativeArticleListById(array(
          ':id_article'             => (int) $articleId,
          ':id_alternative_article' => (int) $value["'article-id'"]
        ));
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateArticles( $updateType = 0, $form = null )
  {
    if(is_array($form) && (count($form) > 0)) {
      foreach($form as $value) {
        if(isset($value["'remove'"])) {
          $this->status[] = $this->deleteArticleById($value["'article-id'"]);
        } else {
          if(((int) $updateType == 2) && isset($value["'wholesale-price'"],$value["'retail-price'"],$value["'retail-tax-price'"],$value["'tax-id'"],$value["'qty'"])) {
            if(((float) $value["'retail-price'"] === 0) && ((float) $value["'retail-tax-price'"] > 0)) {
              $prices = $this->__getRetailTaxPrice( 0, $value["'retail-tax-price'"], $value["'tax-id'"]);
              $this->status[] = $this->updateArticleById(array(
                'wholesale_price'  => (float) $value["'wholesale-price'"],
                'retail_price'     => $prices->retail_price,
                'retail_tax_price' => $prices->retail_tax_price,
                'tax_price'        => $prices->tax_price,
                'qty'              => (int) $value["'qty'"]
                ),
                $value["'article-id'"]
              );
            } else if(((float) $value["'retail-price'"] > 0) && ((float) $value["'retail-tax-price'"] === 0)) {
              $prices = $this->__getRetailTaxPrice( $value["'retail-price'"], 0, $value["'tax-id'"]);
              $this->status[] = $this->updateArticleById(array(
                'wholesale_price'  => (float) $value["'wholesale-price'"],
                'retail_price'     => $prices->retail_price,
                'retail_tax_price' => $prices->retail_tax_price,
                'tax_price'        => $prices->tax_price,
                'qty'              => (int) $value["'qty'"]
                ),
                $value["'article-id'"]
              );
            } else {
              $this->status[] = true;
            }
          }
          if((int) $updateType == 1) {
            $this->status[] = $this->updateArticleById(array(
              'enabled' => (isset($value["'enable'"])) ? 1 : 0,
              ),
              $value["'article-id'"]
            );
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
	
  public function articleTagListById( $articleId = 0, $langId = 0, $filter = null )
  {
    $valueList = $this->valueListByArticleId($articleId, $filter);
    $treeList  = [];

    if(!is_null($valueList)) {
      foreach($valueList as $key => $value) {
        $attr = $this->attributeValueDataById(0, $value->id_value);
        $obj = (isset($attr[ $langId ])) ? $attr[ $langId ] : null;
        
        if(!is_null($obj)) {
          $treeList[ $key ] = $obj;
          $treeList[ $key ]->value  = html_entity_decode($treeList[ $key ]->value, ENT_QUOTES, "UTF-8");
          $treeList[ $key ]->prefix = $this->attributeTreeByAVId((int) $value->id_value, $langId);

          if(is_null($treeList[ $key ]->path)) {
            $treeList[ $key ]->path = rawurlencode(str_replace(array("&", "/"), array("@", "$"), strtolower(self::$registry->getService('helper')->remove_accents($treeList[ $key ]->value))));
          }
        }
      }
    }
    return $treeList;
  }
  
  public function makeCopyArticleById( $articleId = 0, $articleName = '' )
  {
    $copyArticle = $this->articleDataById( $articleId );
    $articleName = ($articleName == $copyArticle->article_name_internal) ? $copyArticle->article_name_internal.' Copy ' : $articleName;
    
    if(!is_null($copyArticle)) {
      $nArticleId = $this->createArticle( $articleName );

      if($this->isArticleById( $nArticleId )) {
          $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;
          $prices  = $this->__getRetailTaxPrice( $copyArticle->retail_price, $copyArticle->retail_tax_price, $copyArticle->id_tax);
       
          $data = array(
          'id_article_type'            => $copyArticle->id_article_type,
          'id_visibility'              => $copyArticle->id_visibility,
          'id_currency'                => $copyArticle->id_currency,
          'id_tax'                     => $copyArticle->id_tax,
          'id_manufacturer'            => $copyArticle->id_manufacturer,
          'id_country_of_manufacturer' => $copyArticle->id_country_of_manufacturer,
          'id_supplier'                => 0,
          'id_slider'                  => $copyArticle->id_slider,
          'id_gallery'                 => $copyArticle->id_gallery,
          'id_image'                   => $copyArticle->id_image,
          'sku'                        => $copyArticle->sku,
          'article_name_internal'      => $articleName,
          'ean13_jan_barcode'          => $copyArticle->ean13_jan_barcode,
          'upc_barcode'                => $copyArticle->upc_barcode,
          'wholesale_price'            => $copyArticle->wholesale_price,
          'retail_price'               => $prices->retail_price,
          'retail_tax_price'           => $prices->retail_tax_price,
          'tax_price'                  => $prices->tax_price,
          'unit_price'                 => $copyArticle->unit_price,
          'unity'                      => $copyArticle->unity,
          'qty'                        => $copyArticle->qty,
          'qty_out_of_stock'           => $copyArticle->qty_out_of_stock,
          'min_qty_in_cart'            => $copyArticle->min_qty_in_cart,
          'max_qty_in_cart'            => $copyArticle->max_qty_in_cart,
          'new_from_date'              => $copyArticle->new_from_date,
          'new_to_date'                => $copyArticle->new_to_date,
          'ap_width'                   => $copyArticle->ap_width,
          'ap_height'                  => $copyArticle->ap_height,
          'ap_depth'                   => $copyArticle->ap_depth,
          'ap_weight'                  => $copyArticle->ap_weight,
          'ap_shipping_fee'            => $copyArticle->ap_shipping_fee,
          'is_campaign'                => $copyArticle->is_campaign,
          'is_avaiable_for_order'      => $copyArticle->is_avaiable_for_order,
          'on_show_price'              => $copyArticle->on_show_price,
          'on_show_tax'                => $copyArticle->on_show_tax,
          'on_notify_qty'              => $copyArticle->on_notify_qty,
          'on_monitoring'              => $copyArticle->on_monitoring,
          'on_stock_availability'      => $copyArticle->on_stock_availability,
          'on_online_only'             => $copyArticle->on_online_only,
          'on_pay_paypal'              => $copyArticle->on_pay_paypal,
          'on_pay_cc_paypal'           => $copyArticle->on_pay_cc_paypal,
          'on_pay_visa'                => $copyArticle->on_pay_visa,
          'on_pay_master_card'         => $copyArticle->on_pay_master_card,
          'on_pay_discover'            => $copyArticle->on_pay_discover,
          'on_pay_credit_card'         => $copyArticle->on_pay_credit_card,
          'on_pay_g_wallet'            => $copyArticle->on_pay_g_wallet,
          'on_pay_amex'                => $copyArticle->on_pay_amex,
          'on_tp_truck'                => $copyArticle->on_tp_truck,
          'on_tp_rail'                 => $copyArticle->on_tp_rail,
          'on_tp_marine'               => $copyArticle->on_tp_marine,
          'on_tp_air'                  => $copyArticle->on_tp_air,
          'on_iss_dhl'                 => $copyArticle->on_iss_dhl,
          'on_iss_ups'                 => $copyArticle->on_iss_ups,
          'on_iss_tnt'                 => $copyArticle->on_iss_tnt,
          'on_iss_fedex'               => $copyArticle->on_iss_fedex,
          'guest'                      => $copyArticle->guest,
          'visitor'                    => $copyArticle->visitor,
          'customer'                   => $copyArticle->customer,
          'enabled'                    => $copyArticle->enabled,
          'upd_user'                   => self::$registry->getService('cms')->getUser()->id_user,
          'upd_date'                   => date("Y-m-d H:i:s"),
        );
        $this->status[] = $this->updateArticleById($data, $nArticleId);
        
        foreach($copyArticle->categoryList as $value) {
          $this->status[] = $this->insertArticleCategoryById(array(
            ':id_article'  => (int) $nArticleId,
            ':id_category' => (int) $value->id_category
          ));
        }
        foreach($copyArticle->attributeList as $value) {
          $this->status[] = $this->insertArticleAttributeById(array(
            ':id_article'   => (int) $nArticleId,
            ':id_attribute' => (int) $value->id_attribute,
            ':value'        => (string) $value->value
          ));
        }
        if($this->deleteArticleLangById( $nArticleId )) {
          foreach($copyArticle->lang as $key => $value) {
            $data = array(
              ':id_article'       => $nArticleId,
              ':id_lang'          => $key,
              ':link_rewrite'     => self::$registry->getService('hash')->ripemd128(self::$registry->getService('hash')->generateRandomString().$articleName.self::$registry->getService('hash')->generateRandomString()),
              ':article_name'     => $articleName,
              ':description'      => $value->description,
              ':site_title'       => $value->site_title,
              ':meta_keywords'    => $value->meta_keywords,
              ':meta_description' => $value->meta_description,
              ':meta_robot'       => $value->meta_robot,
              ':html_content'     => str_replace($pattern,'src="/',$value->html_content),
            );
            $this->status[] = $this->insertArticleLang( $data );
          }
        }
        return ($this->checkStatus()) ? $nArticleId : 0;
      }
      return false;
    }
    return false;
  }
  
  public function getArticleWidgets()
  {
    return (object) array(
      'total_articles_in_stock' => $this->__getArticleWidgetDataById(1),
      'total_products'          => $this->__getArticleWidgetDataById(2),
      'amount_products'         => $this->__getArticleWidgetDataById(3),
      'count_of_products_sold'  => $this->__getArticleWidgetDataById(4),
      'average_gross_margin'    => $this->__getArticleWidgetDataById(5),
      'disabled_articles'       => $this->__getArticleWidgetDataById(6)
    );
  }
  
  private function __getArticleWidgetDataById( $widgetId = 0 )
  {
    switch($widgetId)
    {
      case 1:
        return $this->countArticles();
      case 2:
        return $this->countArticles();
      case 3:
        return self::$registry->getService('helper')->money_format($this->amoutArticlesInStock());
      case 4:
        return 0;
      case 5:
        return $this->averageGrossMargin();
      case 6:
        return round( ( ($this->disabledArticlesInStock() > 0) ? ( $this->disabledArticlesInStock() * 100 ) / $this->countArticles() : 0), 0, PHP_ROUND_HALF_UP);
      default:
        return 0;
    }
  }
  
  /*************************************************************************************************************************************************************
  * 
  * CATEGORY
  * 
  *************************************************************************************************************************************************************/
  
  public function createCategory( $form = null )
  {
    if(isset($form["lang"]) && (is_array($form["lang"]) && (count($form["lang"]) > 0))) {
      $categoryId = (int) $this->insertCategory(array(
        ':id_parent'        => (isset($form["root"])) ? 0 : ( (isset($form["id_parent"])) ? $form["id_parent"] : 0 ),
        ':is_root_category' => (isset($form["root"])) ? 1 : 0,
        ':guest'            => (isset($form["guest"])) ? 1 : 0,
        ':visitor'          => (isset($form["visitor"])) ? 1 : 0,
        ':customer'         => (isset($form["customer"])) ? 1 : 0,
        ':active'           => (isset($form["enable"])) ? 1 : 0,
        ':position'         => $this->categoryLastPosition( ((isset($form["id_parent"])) ? $form["id_parent"] : 0) ),
        ':date_upd'         => date("Y-m-d H:i:s"),
        ':date_add'         => date("Y-m-d H:i:s"),
        ':creator'          => self::$registry->getService('cms')->getUser()->id_user
      ));
      if($this->isCategoryById($categoryId)) {
        foreach($form["lang"] as $key => $value) {
          $this->status[] = $this->insertCategoryLang(array(
            ":id_category"      => $categoryId,
            ":id_lang"          => $key,
            ":category_name"    => $value["'category-name'"],
            ":site_title"       => $value["'site-title'"],
            ":description"      => $value["'description'"],
            ":meta_robots"      => $value["'meta-robots'"],
            ":meta_keywords"    => $value["'meta-keywords'"],
            ":meta_description" => $value["'meta-description'"],
            ":html_content"     => $value["'html-content'"]
          ));
        }
        return ($this->checkStatus()) ? $categoryId : false;
      }
      return false;
    }
    return false;
  }
  
  public function updateCategoryDataById( $form = null )
  {
    if(is_array($form["lang"]) && (count($form["lang"]) > 0)) {
      if($this->updateCategoryById(array(
        'id_parent'        => (isset($form["root"])) ? 0 : ( (isset($form["id_parent"])) ? $form["id_parent"] : 0 ),
        'is_root_category' => (isset($form["root"])) ? 1 : 0,
        'guest'            => (isset($form["guest"])) ? 1 : 0,
        'visitor'          => (isset($form["visitor"])) ? 1 : 0,
        'customer'         => (isset($form["customer"])) ? 1 : 0,
        'active'           => (isset($form["enable"])) ? 1 : 0,
        'date_upd'         => date("Y-m-d H:i:s"),
      ),$form["category-id"])) {
        foreach($form["lang"] as $key => $value) {
          if($this->isCategoryLangById($form["category-id"], $key)) {
            $this->status[] = $this->updateCategoryLangById(array(
              "id_category_image" => (isset($value["'category-image-id'"])) ? $value["'category-image-id'"] : 0,
              "category_name"     => $value["'category-name'"],
              "color"             => $value["'color'"],
              "site_title"        => $value["'site-title'"],
              "description"       => $value["'description'"],
              "meta_robots"       => $value["'meta-robots'"],
              "meta_keywords"     => $value["'meta-keywords'"],
              "meta_description"  => $value["'meta-description'"],
              "html_content"      => $value["'html-content'"]
            ), $form["category-id"], $key);
          } else {
            $this->status[] = $this->insertCategoryLang(array(
              ":id_category"       => $form["category-id"],
              ":id_lang"           => $key,
              ":id_category_image" => (isset($value["'category-image-id'"])) ? $value["'category-image-id'"] : 0,
              ":category_name"     => $value["'category-name'"],
              ":color"             => $value["'color'"],
              ":site_title"        => $value["'site-title'"],
              ":description"       => $value["'description'"],
              ":meta_robots"       => $value["'meta-robots'"],
              ":meta_keywords"     => $value["'meta-keywords'"],
              ":meta_description"  => $value["'meta-description'"],
              ":html_content"      => $value["'html-content'"]
            ));
          }
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  public function updateCategoryImage( $categoryId = 0, $languageId = 0, $files = null )
  {
    if(is_array($files) && (count($files) > 0)) {
      foreach($files as $file) {
        if(isset($file["'use'"])) {
          $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $file["'imgId'"] );

          if(self::$registry->getService('drive')->isFileById( $fileId )) {
            return $this->updateCategoryImageById(array(
              'id_category_image' => $fileId
            ), $categoryId, $languageId);
          }
          return false;
        }
      }
      return false;
    }
    return false;
  }
  
  public function updateCategoryList( $form = null )
  {
    if(is_array($form) && (count($form) > 0)) {
      foreach($form as $value) {
        if($this->isCategoryById($value["'category-id'"])) {
          if(isset($value["'remove'"])) {
            $this->status[] = $this->deleteCategoryById( $value["'category-id'"] );
            $this->status[] = $this->deleteCategoryLangById( $value["'category-id'"] );
            $this->status[] = $this->deleteCategoryFromArticleById( $value["'category-id'"] );
          } else {
            $this->status[] = $this->updateCategoryById(array(
              'active' => (isset($value["'enable'"])) ? 1 : 0
            ), $value["'category-id'"]);
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updatePositionCategoryAssigningArticles( $categoryId = 0, $articleList = null )
  {
    if($this->isCategoryById($categoryId) && (is_array($articleList) && (count($articleList) > 0))) {
      foreach($articleList as $value) {
        $this->status[] = $this->updateArticleCategoryById(array(
          'position' => (isset($value["'position'"])) ? (int) $value["'position'"] : 0
        ), $value["'article-id'"], $categoryId);
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function categoryWidgets()
  {
    return array(
      "disabled_categories" => $this->__categoryWidgetDataById(1),
      "empty_categories"    => $this->__categoryWidgetDataById(2),
      "top_categories"      => $this->__categoryWidgetDataById(3),
      "number_of_products"  => $this->__categoryWidgetDataById(4)
    );
  }
  
  private function __categoryWidgetDataById( $widgetId = 0 )
  {
    $totalCategories = $this->countCategories();
            
    switch($widgetId) {
      case 1:
        $x = $this->countDisabledCategories();
        
        return round((($x > 0) ? (($x * 100) / $totalCategories) : 0), 0, PHP_ROUND_HALF_UP);
      case 2:
        $x = $totalCategories - $this->countEmptyCategories();
        
        return round((($x > 0) ? (($x * 100) / $totalCategories) : 0 ), 0, PHP_ROUND_HALF_UP);
      case 3:
        return '-';
      case 4:
        $x = $this->countArticlesOnCAList();
        
        return ($x > 0 ) ? round(($x / $totalCategories), 0, PHP_ROUND_HALF_UP) : 0;
    }
  }
  
  public function insertArticleListToCategory( $categoryId = 0, $ids = null )
  {
    if($this->isCategoryById( $categoryId ) &&
       (is_array($ids) && (count($ids) > 0))
    ) {
      foreach($ids as $id) {
        if($this->isArticleById( $id ) && ((bool) $this->haveArticleCategoryById($id, $categoryId) === false)) {
          $this->status[] = $this->insertArticleCategoryById(array(
            ':id_article'  => (int) $id,
            ':id_category' => (int) $categoryId
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function deleteArticleListFromCategory( $categoryId = 0, $articleList = null )
  {
    if($this->isCategoryById( $categoryId ) &&
       (is_array($articleList) && (count($articleList) > 0))
    ) {
      foreach($articleList as $article) {
        if(isset($article["'on'"]) && $this->isArticleById( $article["'article-id'"] ) && 
          ((bool) $this->haveArticleCategoryById($article["'article-id'"], $categoryId) === true)
        ) {
          $this->status[] = $this->deleteArticleFromCategoryById(
            $article["'article-id'"], 
            $categoryId
          );
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /*************************************************************************************************************************************************************
  * 
  * THUMBNAIL
  * 
  *************************************************************************************************************************************************************/
  
  public function createResizeSection( $data = null, $resize = null )
  {
    if(is_array($data["rules"]) && (count($data["rules"]) > 0)) 
    {
      $kind = (int) $data["kind"];
      $type = (isset($data["type"])) ? (int) $data["type"] : 0;
      $ids  = (isset($data["section-values"])) ? $data["section-values"] : null;
      $exp  = ($type === 3) ? true : false;
      $AL   = null;
      
      // ARTICLE LIST BY KIND
      switch($kind) 
      {
        // ALL SECTION
        case 1:
          $AL = $this->articleIdsByThumb();

          break;
        // CATEGORY
        case 2:
          $AL = ($type === 2) ? $this->articleIdsByCategory(null) : $this->articleIdsByCategory($ids, $exp);

          break;
        // ATTRIBUTE
        case 3:
          $AL = ($type === 2) ? $this->articleIdsByAttr(null) : $this->articleIdsByAttr($ids, $exp);
          
          break;
        // ATTRIBUTE VALUE
        case 4:
          $AL = ($type === 2) ? $this->articleIdsByAttrV(null) : $this->articleIdsByAttrV($ids, $exp);
          
          break;
        default:
          return false;
      }
      if(is_array($AL) && (count($AL) > 0))
      {
        // ID THUMBNAIL SECTION
        $thumbSecId = 0;

        if((bool) $this->isUniqueThumbSection($kind, $type) === true) 
        {
          $thumbSecId = $this->insertThumbnailSection(array(
            ':kind' => $kind,
            ':type' => $type
          ));
        } 
        else 
        {
          $thumbSecId = $this->thumbnailSectionIdByKind($kind, $type);
        }
        if((bool) $this->isThumbnailSectionById( $thumbSecId ) === true) 
        {
          if((bool) $this->__putSectionIds(
            $thumbSecId,
            $type,
            $ids
          ) === true) {
            // INSERT RESIZE RULES 
            if(isset($data["rules"]) && (is_array($data["rules"]) && (count($data["rules"]) > 0)))
            {
              $status = [];

              foreach($data["rules"] as $ruleId) 
              {
                if((bool) $this->isThumbResizeRuleById($thumbSecId, $ruleId) === false)
                {
                  $status[] = $this->insertThumbResizeRule(array(
                    ':id_thumb_section' => (int) $thumbSecId,
                    ':id_rule'          => (int) $ruleId
                  ));
                }
              }
              if((bool) self::$registry->getService('helper')->checkStatus( $status ) === true)
              {
                // RESIZE, COMPRESS, CACHE IMAGES
                $this->__resizeImages(
                  $AL, 
                  $data["rules"], 
                  $resize,
                  $thumbSecId
                );
                return true;
              }
              return false;
            }
            return false;
          }
          return false;
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function __putSectionIds( $thumbSecId = 0, $typeId = 0, $ids = null )
  {
    if((((int) $typeId === 1) || ((int) $typeId === 3)) &&
      (is_array($ids) && (count($ids) > 0))    
    ) {
      $status = [];
      
      foreach($ids as $id) 
      {
        if((bool) $this->isUniqueThumbEntity(
          $thumbSecId, 
          $id
        ) === true) {
          $status[] = $this->insertThumbnailSectionEntityId(array(
            ':id_thumb_section' => (int) $thumbSecId,
            ':id_entity'        => (int) $id
          ));
        }
      }
      return self::$registry->getService('helper')->checkStatus( $status );
    }
    return true;
  }
  
  private function __resizeImages( $AL = null, $rules = null, $resize = null, $thumbSecId = 0 )
  {
    $status = [];
    
    foreach($rules as $ruleId)
    {
      $rule = ((bool) $this->isResizeRuleById( $ruleId ) === true) ? $this->resizeRuleById( $ruleId ) : null;
      
      if(is_object($rule) && (isset($resize[ $rule->resize ]))) 
      {
        foreach($AL as $article) 
        {
          // GALLERY
          if((isset($article->id_gallery) && ((int) $article->id_gallery !== 0)) && 
            ((bool) self::$registry->getService('gallery')->isGalleryById( $article->id_gallery ) === true)
          ) {
            $galleryImages = self::$registry->getService('gallery')->galleryImageIdsById( $article->id_gallery );
            
            if(is_array($galleryImages) && (count($galleryImages) > 0))
            {
              foreach($galleryImages as $image)
              {
                if(isset($image->id_image))
                {
                  $status[] = $this->__insertCTD(
                    $thumbSecId,
                    $rule->id_rule,
                    $image->id_image,
                    $rule->resize,
                    $rule->width,
                    $rule->height,
                    strtolower( $resize[ $rule->resize ] )
                  );
                }
              }
            }
          // IMAGE
          } else {
            $status[] = $this->__insertCTD(
              $thumbSecId,
              $rule->id_rule,
              $image->id_image,
              $rule->resize,
              $rule->width,
              $rule->height,
              strtolower( $resize[ $rule->resize ] )
            );
          }          
        }
      }
    }
    return self::$registry->getService('helper')->checkStatus( $status );
  }
  
  private function __insertCTD( $thumbSecId = 0, $resizeRuleId = 0, $fileId = 0, $resize = 0, $width = 0.00, $height = 0.00, $resize_method = '' )
  {
    $status = [];
    
    if((bool) $this->isUniqueCronThumbByParams(
      $thumbSecId,
      $resizeRuleId,
      $width,
      $height,
      $resize_method
    ) === true)
    {
      $status[] = $this->insertCronThumbnail(array(
        ':id_thumb_section' => $thumbSecId,
        ':id_resize_rule'   => $resizeRuleId,
        ':width'            => $width,
        ':height'           => $height,
        ':resize_method'    => $resize_method
      ));
    }
    $status[] = $this->insertThumbnail(array(
      ':id_thumb_section' => $thumbSecId,
      ':id_resize_rule'   => $resizeRuleId,
      ':id_file'          => $fileId,
      ':resize'           => $resize
    ));
    return self::$registry->getService('helper')->checkStatus( $status );
  }
  
  public function deleteResizeRules( $rules = null )
  {
    if(is_array($rules) && (count($rules) > 0)) {
      foreach($rules as $rule) {
        if(isset($rule["'delete'"]) &&
          ((bool) $this->isResizeRuleById( $rule["'id'"] ) === true) 
        ) {
          $this->status[] = $this->deleteResizeRuleById( $rule["'id'"] );
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function deleteThumbnails( $thumbs = null )
  {
    if(is_array($thumbs) && (count($thumbs) > 0)) {
      foreach($thumbs as $thumb) {
        if(isset($thumb["'delete'"]) &&
          ((bool) $this->isThumbnailSectionById( $thumb["'id'"] ) === true) 
        ) {
          $this->status[] = $this->deleteThumbSectionById( $thumb["'id'"] );
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /*************************************************************************************************************************************************************
  * 
  * WAREHOUSE
  * 
  *************************************************************************************************************************************************************/
  
  public function createWarehouse( $form = null )
  {
    if((isset($form['w-name']) && isset($form['w-type']) && isset($form['w-usage']) && isset($form['currency']) && isset($form['tax'])) &&
      (strlen($form['w-name']) > 3) &&
      (((int) $form['w-type'] > 0) && ((int) $form['w-type'] < 4)) &&
      (((int) $form['w-usage'] > 0) && ((int) $form['w-usage'] < 5)) &&
      ((bool) $this->isCurrencyById($form['currency']) === true) &&
      ((bool) $this->isTaxById($form['tax']) === true)
    ) {
      $whId = (int) $this->insertWarehouse(array(
        ':id_type'       => (int) $form['w-type'],
        ':id_usage'      => (int) $form['w-usage'],
        ':id_currency'   => (int) $form['currency'],
        ':id_tax'        => (int) $form['tax'],
        ':id_wh_country' => (isset($form['w-country'])) ? (int) $form['w-country'] : 0,
        ':referer'       => $this->__uniqueWarehouseRef(),
        ':name'          => (string) trim($form['w-name']),
        ':street'        => (isset($form['w-street']) && (strlen($form['w-street']) > 0)) ? (string) trim($form['w-street']) : null,
        ':zip'           => (isset($form['w-zip']) && (strlen($form['w-zip']) > 0)) ? (string) trim($form['w-zip']) : null,
        ':phone_1'       => (isset($form['w-phone-one']) && (strlen($form['w-phone-one']) > 0)) ? (string) trim($form['w-phone-one']) : null,
        ':phone_2'       => (isset($form['w-phone-two']) && (strlen($form['w-phone-two']) > 0)) ? (string) trim($form['w-phone-two']) : null,
        ':fax'           => (isset($form['w-fax']) && (strlen($form['w-fax']) > 0)) ? (string) trim($form['w-fax']) : null,
        ':email'         => (isset($form['w-email']) && (strlen($form['w-email']) > 0)) ? (string) trim($form['w-email']) : null,
        ':secure_key'    => self::$registry->getService('hash')->ripemd128( 
          self::$registry->getService('hash')->generateRandomString() . trim($form['w-name']) . self::$registry->getService('hash')->generateRandomString()
        )
      ));
      if((bool) $this->isWarehouseById( $whId ) === true) {
        if(isset($form['country']) && (is_array($form['country']) && (count($form['country']) > 0))) {
          foreach($form['country'] as $value) {
            if((bool) self::$registry->getService('languages')->isCountryById($value) === true) {
              $this->status[] = $this->insertWarehouseAvailableCountry(array(
                ':id_wh'      => (int) $whId,
                ':id_country' => (int) $value
              ));
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
  
  private function __uniqueWarehouseRef()
  {
    $ref = strtoupper( self::$registry->getService('hash')->generateRandomString(12) );
    
    if((bool) $this->isWarehouseByRef( $ref ) === true) {
      $this->__uniqueWarehouseRef();
    } else {
      return $ref;
    }
  }
  
  public function createWHExpeditionTime( $form = null, $whId = 0 )
  {
    if((isset($form['numerical-value']) && isset($form['unit-time'])) &&
      ((bool) $this->isWarehouseById( $whId ) === true)
    ) {
      return $this->insertWHExpeditionTime(array(
        ':id_wh'     => (int) $whId,
        ':num_val'   => (int) $form['numerical-value'],
        ':unit_time' => (string) $form['unit-time']
      ));
    }
    return false;
  }
  
  public function createWarehouseMatrix( $whId = 0, $articleId = 0 )
  {
    if((((int) $whId > 0) && ((int) $articleId > 0)) && 
      ((bool) self::$registry->getService('store')->isWarehouseById( $whId ) === true) &&
      ((bool) self::$registry->getService('store')->isArticleById( $articleId ) === true) &&
      ((bool) self::$registry->getService('store')->isWHMatrixByWHAId($whId, $articleId) === false)
    ) {
      $secureKey = self::$registry->getService('hash')->ripemd128( 
        self::$registry->getService('hash')->generateRandomString(40) .
        $whId .
        $articleId .
        self::$registry->getService('hash')->generateRandomString(40)
      );
      $matrixId = $this->insertWHMatrix(array(
        ':id_wh'      => (int) $whId,
        ':id_article' => (int) $articleId,
        ':secure_key' => (string) $secureKey
      ));
      if($this->isWHMatrixById( $matrixId ) && $this->updateWarehouseArticleById(array(
        'id_matrix' => (int) $matrixId,
        'qty'       => 0
      ), $whId, $articleId)) {
        return $secureKey;
      }
      return false;
    }
    return false;
  }
  
  public function updateWarehouseDataById( $form = null ) 
  {
    if((isset($form['whId']) && isset($form['w-name']) && isset($form['w-type']) && isset($form['w-usage']) && isset($form['currency']) && isset($form['tax'])) &&
      ((bool) $this->isWarehouseById( $form['whId'] ) === true) &&
      (strlen($form['w-name']) > 3) &&
      (((int) $form['w-type'] > 0) && ((int) $form['w-type'] < 4)) &&
      (((int) $form['w-usage'] > 0) && ((int) $form['w-usage'] < 5)) &&
      ((bool) $this->isCurrencyById($form['currency']) === true) &&
      ((bool) $this->isTaxById($form['tax']) === true)
    ) {
      if((bool) $this->updateWarehouseById(array(
        'id_type'       => (int) $form['w-type'],
        'id_usage'      => (int) $form['w-usage'],
        'id_currency'   => (int) $form['currency'],
        'id_tax'        => (int) $form['tax'],
        'id_wh_country' => (isset($form['w-country'])) ? (int) $form['w-country'] : 0,
        'name'          => (string) trim($form['w-name']),
        'street'        => (isset($form['w-street']) && (strlen($form['w-street']) > 0)) ? (string) trim($form['w-street']) : null,
        'zip'           => (isset($form['w-zip']) && (strlen($form['w-zip']) > 0)) ? (string) trim($form['w-zip']) : null,
        'phone_1'       => (isset($form['w-phone-one']) && (strlen($form['w-phone-one']) > 0)) ? (string) trim($form['w-phone-one']) : null,
        'phone_2'       => (isset($form['w-phone-two']) && (strlen($form['w-phone-two']) > 0)) ? (string) trim($form['w-phone-two']) : null,
        'fax'           => (isset($form['w-fax']) && (strlen($form['w-fax']) > 0)) ? (string) trim($form['w-fax']) : null,
        'email'         => (isset($form['w-email']) && (strlen($form['w-email']) > 0)) ? (string) trim($form['w-email']) : null,
      ), $form['whId']) === true) {
        if(isset($form['country']) && 
          (is_array($form['country']) && (count($form['country']) > 0)) &&
          ((bool) $this->deleteWarehouseAVCountryListById( $form['whId'] ) === true)
        ) {
          foreach($form['country'] as $value) {
            if((bool) self::$registry->getService('languages')->isCountryById($value) === true) {
              $this->status[] = $this->insertWarehouseAvailableCountry(array(
                ':id_wh'      => (int) $form['whId'],
                ':id_country' => (int) $value
              ));
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
  
  public function updateWarehouseAL( $whId = 0, $wal = null, $action = 0, $value = 0 )
  {
    if(self::$registry->getService('store')->isWarehouseById( $whId ) &&
      (is_array($wal) && (count($wal) > 0)) && 
      (((int) $action >= 0) && ((int) $action <= 5))
    ) {
      foreach($wal as $item) {
        if(isset($item["'on'"]) && 
          ((bool) $this->isArticleById( $item["'article-id'"] ) === true) &&
          ((bool) $this->haveWarehouseArticleById($whId, $item["'article-id'"]) === true) 
        ) { 
          $this->status[] = $this->__updateWHArticle(array(
            'whId'      => (int) $whId,
            'articleId' => (int) $item["'article-id'"],
            'action'    => (int) $action,
            'value'     => (float) $value,
            'matrix'    => (isset($item["'qty'"])) ? true : false,
            'qty'       => (isset($item["'qty'"])) ? (int) $item["'qty'"] : 0,
            'enabled'   => (isset($item["'enable'"])) ? 1 : 0
          ));
        }
      }
      return (is_array($this->status) && (count($this->status) > 0)) ? $this->checkStatus() : true;
    }
    return false;
  }
  
  public function useForceUpdateWarehouseAL( $whId = 0, $action = 0, $value = 0 )
  {
    if(((bool) $this->isWarehouseById( $whId ) === true) &&
      (((int) $action >= 0) && ((int) $action <= 5))
    ) {
      // WAREHOUSE ARTICLE IDS LIST
      $WHAL = $this->warehouseALIdsById( $whId );
      
      if(is_array($WHAL) && (count($WHAL) > 0)) {
        foreach($WHAL as $article) {
          if(((bool) $this->isArticleById( $article->id_article ) === true) && 
            ((bool) $this->haveWarehouseArticleById($whId, $article->id_article) === true)
          ) {
            $this->status[] = $this->__updateWHArticle(array(
              'whId'      => (int) $whId,
              'articleId' => (int) $article->id_article,
              'action'    => (int) $action,
              'value'     => (float) $value,
              'matrix'    => ((int) $article->id_matrix > 0) ? true : false,  
              'qty'       => (int) $article->qty,
              'enabled'   => (int) $article->enabled
            ));
          }
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  private function __updateWHArticle( $data = null )
  {
    if((isset($data["whId"]) && isset($data["articleId"]) && isset($data["action"]) && isset($data["value"]) && isset($data["matrix"]) && isset($data["qty"]) && isset($data["enabled"]))  &&
      (((int) $data["action"] >= 0) && ((int) $data["action"] <= 5))
    ) {
      $taxId   = (int) $this->warehouseById( $data["whId"] )->id_tax;
      $article = $this->articleDataById( $data["articleId"] );
      
      if(((bool) $this->isTaxById( $taxId ) === true) && is_object($article)) {
        $cost = (object) array(
          'qty'              => ((bool) $this->haveArticleWHMatrixById($data["whId"], $data["articleId"]) === true) ? $this->__wAMatrixQty(0, $data["whId"], $data["articleId"]) : (int) $data["qty"],
          'former_price'     => (float) $article->retail_tax_price,
          'cost_difference'  => 0.00,
          'retail_price'     => 0.00,
          'tax_price'        => 0.00,
          'retail_tax_price' => 0.00
        );
        
        if(((float) $article->retail_tax_price > 0) &&
          ((int) $data["action"] > 0) &&
          (((int) $data["action"] === 5) || ((float) $data["value"] > 0))
        ) {
          $cost = $this->__setCostByActionId(
            $data["action"],
            $data["value"],
            $cost->qty,
            $taxId,
            $article->retail_tax_price
          );
          // CREATE RELATION
          $relId = $this->insertWarehouseRelation(array(
            ':id_wh'      => (int) $data['whId'],
            ':id_article' => (int) $data["articleId"],
            ':id_action'  => (int) $data["action"],
            ':value'      => (float) $data["value"]
          ));
          if((bool) $this->isWarehouseRelationById($data['whId'], $relId) === true) {
            // INSERT WAREHOUSE AL RELATION DATA
            if((bool) $this->insertWarehouseALRelationData(array(
              ':id_rel'           => (int) $relId,
              ':id_wh'            => (int) $data['whId'],
              ':id_article'       => (int) $data["articleId"],
              ':former_price'     => $cost->former_price,
              ':cost_difference'  => $cost->cost_difference,
              ':retail_price'     => $cost->retail_price,
              ':tax_price'        => $cost->tax_price,
              ':retail_tax_price' => $cost->retail_tax_price
              )) === true) {
                // UPDATE DATA WAREHOUSE AL
                return $this->updateWarehouseArticleById(array(
                  'id_rel'  => (int) $relId,
                  'qty'     => $cost->qty,
                  'enabled' => $data["enabled"]
                ), $data["whId"], $data["articleId"]);
            }
            return false;
          }
          return false;
        } else {
          return $this->updateWarehouseArticleById(array(
            'qty'     => $cost->qty,
            'enabled' => $data["enabled"]
          ), $data["whId"], $data["articleId"]);
        }
      }
      return false;
    }
    return false;
  }
  
  private function __wAMatrixQty( $mId = 0, $whId = 0, $articleId = 0 )
  {
    if(((bool) $this->isWHMatrixById( $mId ) === true) ||
      ((bool) $this->haveArticleWHMatrixById($whId, $articleId) === true)   
    ) {
      $mId = ((bool) $this->isWHMatrixById( $mId ) === false) ? $this->whMatrixIdByWHArticleId($whId, $articleId) : (int) $mId;

      return ((bool) $this->isWHMatrixById( $mId ) === true) ? $this->whMatrixParABVsQty( $mId ) : 0;
    }
    return 0;
  }
  
  public function updateWHExpeditionTimes( $data = null )
  {
    if(is_array($data) && (count($data) > 0)) {
      foreach($data as $value) {
        if(isset($value["'et-id'"]) && ((bool) $this->isWHExpeditionTime( $value["'et-id'"] ) === true)) {
          if(isset($value["'delete'"])) {
            $this->status[] = $this->deleteWHExpeditionTimeByWHEtId( $value["'et-id'"] );
          } else {
            if((isset($value["'num-val'"]) && isset($value["'unit-time'"])) && 
              (((int) $value["'num-val'"] > 0) && (strlen($value["'unit-time'"]) > 0))
            ) {
              $this->status[] = $this->updateWarehouseETById(array(
                'num_val'   => (int) $value["'num-val'"],
                'unit_time' => (string) $value["'unit-time'"]
              ), $value["'et-id'"]);
            }
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function updateWHMatrixParXVs( $form = null )
  {
    if((isset($form['matrix-id']) && isset($form['parX'])) &&
      ((bool) $this->isWHMatrixById($form['matrix-id']) === true) &&
      (is_array($form['parX']) && (count($form['parX']) > 0))
    ) {
      $i = 1;
      
      foreach($form['parX'] as $parX) {
        if((bool) $this->isWHMatrixParByAttrVId(
          $form['matrix-id'], 
          $parX["'attr-v-id'"]
        ) === true) {
          $this->status[] = $this->updateWHMatrixParById(array(
            'id_cost_differce' => (isset($parX["'cdt'"]) && ((int) $parX["'cdt'"] > 0)) ? (int) $parX["'cdt'"] : 0,
            'cost_difference'  => (isset($parX["'cdv'"]) && ((float) $parX["'cdv'"] > 0)) ? (float) $parX["'cdv'"] : 0,
            'position'         => $i
          ), $form['matrix-id'], $parX["'attr-v-id'"]);

          $i++;
        }
      }
      return (count($this->status) > 0) ? $this->checkStatus() : false;
    }
    return false;
  }
  
  public function updateWHMatrixParABQty( $mId = 0, $articleId = 0 )
  {
    if(((bool) $this->isWHMatrixById( $mId ) === true) && 
      ((bool) $this->isArticleById( $articleId ) === true) &&
      ((bool) $this->isWHMatrixArticleById($mId, $articleId) === true) 
    ) {
      return $this->updateWarehouseArticleById(array(
        'qty' => $this->whMatrixParABVsQty( $mId )
      ), $this->warehouseIdByWHMId( $mId ), $articleId); 
    }
    return false;
  }
  
  public function impactImportALToWarehouse( $whId = 0, $action = 0, $value = 0 )
  {
    if(((bool) $this->isWarehouseById( $whId ) === true) &&
      (((int) $action >= 0) && ((int) $action <= 5))
    ) {
      // WAREHOUSE ARTICLE LIST
      $WHAL = $this->warehouseALIdsById( $whId );
      // INIT
      $ignoreList = null;
      
      if(is_array($WHAL) && (count($WHAL) > 0)) {
        $ignoreList = [];

        foreach($WHAL as $item) {
          $ignoreList[] = $item->id_article;
        }
      }
      // STORE ARTICLE LIST
      $AL = $this->articleList(false, $ignoreList, null, 0);
      
      foreach($AL as $article) {
        if((bool) $this->haveWarehouseArticleById($whId, $article->id_article) === false) {
          $this->status[] = $this->addArticleToWarehouse(array(
            'whId'      => (int) $whId,
            'articleId' => (int) $article->id_article,
            'action'    => (int) $action,
            'value'     => (float) $value,
            'qty'       => 0
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function addArticleListToWarehouse( $whId = 0, $ids = null, $qty = null, $action = 0, $value = 0 )
  {
    if(((bool) $this->isWarehouseById( $whId ) === true) &&
      (is_array($ids) && (count($ids) > 0)) &&
      (is_array($qty) && (count($qty) > 0)) &&
      (((int) $action >= 0) && ((int) $action <= 5))
    ) {
      foreach($ids as $id) {
        if($this->isArticleById( $id ) && ((bool) $this->haveWarehouseArticleById($whId, $id) === false)) {
          $this->status[] = $this->addArticleToWarehouse(array(
            'whId'      => (int) $whId,
            'articleId' => (int) $id,
            'action'    => (int) $action,
            'value'     => (float) $value,
            'qty'       => (array_key_exists($id, $qty)) ? (int) $qty[ $id ] : 0
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function addArticleToWarehouse( $form = null )
  {
    if((isset($form["whId"]) && isset($form["articleId"]) && isset($form["action"]) && isset($form["value"]) && isset($form["qty"]))  &&
      $this->isWarehouseById( $form["whId"] ) &&
      $this->isArticleById( $form["articleId"] ) &&
      ((bool) $this->haveWarehouseArticleById($form["whId"], $form["articleId"]) === false) &&
      (((int) $form["action"] >= 0) && ((int) $form["action"] <= 5))
    ) {
      $taxId   = (int) $this->warehouseById( $form["whId"] )->id_tax;
      $article = $this->articleDataById( $form["articleId"] );
      
      if(((bool) $this->isTaxById( $taxId ) === true) && is_object($article)) {
        $cost = (object) array(
          'qty'              => (int) $form["qty"],
          'former_price'     => (float) $article->retail_tax_price,
          'cost_difference'  => 0.00,
          'retail_price'     => 0.00,
          'tax_price'        => 0.00,
          'retail_tax_price' => 0.00
        );
        
        if(((float) $article->retail_tax_price > 0) &&
          ((int) $form["action"] > 0) &&
          (((int) $form["action"] === 5) || ((float) $form["value"] > 0))
        ) {
          $cost = $this->__setCostByActionId(
            $form["action"],
            $form["value"],
            $form["qty"],
            $taxId,
            $article->retail_tax_price
          );
        }
        if(((int) $form["action"] === 0) && ((float) $article->retail_tax_price > 0)) {
          $cost->cost_difference  = 0.00;
          $cost->retail_price     = (float) $article->retail_price;
          $cost->tax_price        = (float) $article->tax_price;
          $cost->retail_tax_price = (float) $article->retail_tax_price;
        }
        // CREATE RELATION
        $relId = $this->insertWarehouseRelation(array(
          ':id_wh'      => (int) $form['whId'],
          ':id_article' => (int) $form["articleId"],
          ':id_action'  => (int) $form["action"],
          ':value'      => (float) $form["value"]
        ));
        if((bool) $this->isWarehouseRelationById($form['whId'], $relId) === true) {
          // INSERT WAREHOUSE AL RELATION DATA
          if((bool) $this->insertWarehouseALRelationData(array(
            ':id_rel'           => (int) $relId,
            ':id_wh'            => (int) $form['whId'],
            ':id_article'       => (int) $form["articleId"],
            ':former_price'     => $cost->former_price,
            ':cost_difference'  => $cost->cost_difference,
            ':retail_price'     => $cost->retail_price,
            ':tax_price'        => $cost->tax_price,
            ':retail_tax_price' => $cost->retail_tax_price
            )) === true) {
              // INSERT RECORD TO WAREHOUSE AL
              return $this->insertArticleToWarehouse(array(
                ':id_wh'      => (int) $form["whId"],
                ':id_article' => (int) $form["articleId"],
                ':id_rel'     => (int) $relId,
                ':qty'        => $cost->qty,
              ));
          }
          return false;
        }
        return false;
      }
      return false;
    }
    return false;
  }
  
  private function __setCostByActionId( $action = 0, $value = 0, $qty = 0, $taxId = 0, $formerPrice = 0 )
  {
    $amount = 0;
    $cost   = (object) array(
      'qty'              => (int) $qty,
      'former_price'     => (float) $formerPrice,
      'cost_difference'  => 0.00,
      'retail_price'     => 0.00,
      'tax_price'        => 0.00,
      'retail_tax_price' => 0.00
    );
    switch((int) $action) {
      // FORMER PRICE - (FORMER PRICE%)
      case 1:
       $amount = ((float) $formerPrice - (((float) $formerPrice / 100) * (float) $value));
       break;
      // FORMER PRICE + (FORMER PRICE%)
      case 2:
       $amount = ((float) $formerPrice + (((float) $formerPrice / 100) * (float) $value));
       break;
      // FORMER PRICE - (FORMER PRICE[EXACT VALUE])
      case 3:
       $amount = ((float) $formerPrice - (float) $value);
       break;
      // FORMER PRICE + (FORMER PRICE[EXACT VALUE])
      case 4:
       $amount = ((float) $formerPrice + (float) $value);
       break;
      // DEFAULT - FORMER PRICE
      case 5:
       $amount = (float) $formerPrice;
       break;
    }
    $price = ($amount > 0) ? $amount : 0.00;
    $data  = (((int) $action >= 1) && ((int) $action <= 5)) ? $this->__getRetailTaxPrice(0, $price, $taxId) : null;
    
    if(is_object($data)) {
      // INIT COST
      $cost->cost_difference  = (((int) $action === 1) || ((int) $action === 3)) ? ((float) $formerPrice - $data->retail_tax_price) : (((int) $action === 5) ? 0.00 : ($data->retail_tax_price - (float) $formerPrice));
      $cost->retail_price     = $data->retail_price;
      $cost->tax_price        = $data->tax_price;
      $cost->retail_tax_price = $data->retail_tax_price;
    }
    return $cost;
  }
  
  public function addArticleListToWarehouseET( $whETId = 0, $whId = 0, $ids = null )
  {
    if(((bool) $this->isWHExpeditionTime( $whETId ) === true) &&
      ((bool) $this->isWarehouseById( $whId ) === true) &&
      (is_array($ids) && (count($ids) > 0))
    ) {
      foreach($ids as $id) {
        if($this->isArticleById( $id ) && ((bool) $this->haveWarehouseETArticleById($whETId, $id) === false)) {
          $this->status[] = $this->addArticleToWarehouseET(array(
            ':id_et'      => (int) $whETId,
            ':id_wh'      => (int) $whId,
            ':id_article' => (int) $id
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function AddImpactALToWarehouseET( $whId = 0, $whETId = 0 )
  {
    if(((bool) $this->isWarehouseById( $whId ) === true) &&
      ((bool) $this->isWHExpeditionTime( $whETId ) === true)
    ) {
      // WAREHOUSE EXPEDITION TIME ASSING ARTICLE ID LIST
      $whETAAL = $this->whETAALIdsBywhEtID( $whETId );
      // INIT
      $ignoreList = null;
      
      if(is_array($whETAAL) && (count($whETAAL) > 0)) {
        $ignoreList = [];

        foreach($whETAAL as $item) {
          $ignoreList[] = $item->id_article;
        }
      }
      // WAREHOUSE ARTICLE LIST
      $WHAL = $this->warehouseALById($whId, false, $ignoreList, null, 0, true);
      
      foreach($WHAL as $article) {
        if((bool) $this->haveWarehouseETArticleById($whETId, $article->id_article) === false) {
          $this->status[] = $this->addArticleToWarehouseET(array(
            ':id_et'      => (int) $whETId,
            ':id_wh'      => (int) $whId,
            ':id_article' => (int) $article->id_article
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function addAttrVToWHMatrix( $mId = 0, $attrVId = 0, $cdt = 0, $cdv = 0, $parId = 0 )
  {
    if(((bool) $this->isWHMatrixById($mId) === true) && 
      ((bool) $this->isAttributeValueById(0, $attrVId) === true) &&
      (((int) $parId === 1) || ((int) $parId === 2))
    ) {
      switch((int) $parId) {
        // PAR A
        case 1:
          return $this->__createMatrixParAv(
            $mId,
            $attrVId,
            $cdt,
            $cdv
          );
        // PAR B
        case 2:
          return $this->__createMatrixParBv(
            $mId,
            $attrVId,
            $cdt,
            $cdv   
          );
        default:
          return false;
      }
    }
    return false;
  }
  
  private function __createMatrixParAv( $mId = 0, $attrVId = 0, $cdt = 0, $cdv = 0 )
  {
    if((bool) $this->__createMatrixPar(
      $mId,
      $attrVId,
      $cdt, 
      $cdv,
      self::PAR_A
    ) === true) {
      if((bool) $this->haveWHMatrixParVsById($mId, self::PAR_B) === false) {
        return $this->updateWHMatrixParById(array(
          'is_unprocessed' => 1
        ), $mId, $attrVId);
      } else {
        $parAVse = $this->whMatrixParABVsById($mId, self::PAR_A, true, true);
        $parBVs  = $this->whMatrixParABVsById($mId, self::PAR_B, false, true);
        
        if(is_array($parBVs) && (count($parBVs) > 0)) {
          foreach($parBVs as $parBv) {
            if((bool) $this->isWHMatrixParCombinationByIds(
              $mId,
              $attrVId,
              $parBv->id_value
            ) === false) {
              $this->status[] = $this->insertWHMatrixParQty(array(
                ':id_matrix' => (int) $mId,
                ':id_par_a'  => (int) $attrVId,
                ':id_par_b'  => (int) $parBv->id_value,
                ':qty'       => 0
              ));
            }
          }
        }
        if((bool) $this->checkStatus() === true) {
          $this->status = [];

          if((is_array($parAVse) && (count($parAVse) > 0)) &&
            (is_array($parBVs) && (count($parBVs) > 0))    
          ) {
            foreach($parAVse as $parAv) {
              foreach($parBVs as $parBv) {
                if((bool) $this->isWHMatrixParCombinationByIds(
                  $mId,
                  $parAv->id_value,
                  $parBv->id_value
                ) === false) {
                  $this->status[] = $this->insertWHMatrixParQty(array(
                    ':id_matrix' => (int) $mId,
                    ':id_par_a'  => (int) $parAv->id_value,
                    ':id_par_b'  => (int) $parBv->id_value,
                    ':qty'       => 0
                  ));
                }
              }
            }
            return (count($this->status) > 0) ? $this->checkStatus() : true;
          }
          return true;
        }
        return false;
      }
    }
    return false;
  }
  
  private function __createMatrixParBv( $mId = 0, $attrVId = 0, $cdt = 0, $cdv = 0 )
  {
    if((bool) $this->__createMatrixPar(
      $mId,
      $attrVId,
      $cdt, 
      $cdv,
      self::PAR_B
    ) === true) {
      if((bool) $this->haveWHMatrixParVsById($mId, self::PAR_A) === true) {
        $parAVs  = $this->whMatrixParABVsById($mId, self::PAR_A, false, true);
        $parAVse = $this->whMatrixParABVsById($mId, self::PAR_A, true, true);
        $parBVs  = $this->whMatrixParABVsById($mId, self::PAR_B, false, false);
        
        if(is_array($parAVs) && (count($parAVs) > 0)) {
          foreach($parAVs as $parAV) {
            if((bool) $this->isWHMatrixParCombinationByIds(
              $mId,
              $parAV->id_value,
              $attrVId
            ) === false) {
              $this->status[] = $this->insertWHMatrixParQty(array(
                ':id_matrix' => (int) $mId,
                ':id_par_a'  => (int) $parAV->id_value,
                ':id_par_b'  => (int) $attrVId,
                ':qty'       => 0
              ));
            }
          }
          if((count($this->status) > 0) && ((bool) $this->checkStatus() === false)) {
            return false;
          }
        }
        if((is_array($parAVse) && (count($parAVse) > 0)) &&
          (is_array($parBVs) && (count($parBVs) > 0))    
        ) {
          $this->status = [];

          foreach($parAVse as $parAv) {
            foreach($parBVs as $parBv) {
              if((bool) $this->isWHMatrixParCombinationByIds(
                $mId,
                $parAv->id_value,
                $parBv->id_value
              ) === false) {
                $this->status[] = $this->insertWHMatrixParQty(array(
                  ':id_matrix' => (int) $mId,
                  ':id_par_a'  => (int) $parAv->id_value,
                  ':id_par_b'  => (int) $parBv->id_value,
                  ':qty'       => 0
                ));
                $this->status[] = $this->updateWHMatrixParById(array(
                  'is_unprocessed' => 0
                ), $mId, $parAv->id_value);
              }
            }
          }
          return (count($this->status) > 0) ? $this->checkStatus() : true;
        }
        return true;
      }
      return true;
    }
    return false;
  }
  
  private function __createMatrixPar( $mId = 0, $attrVId = 0, $cdt = 0, $cdv = 0, $parId = 0 )
  {
    $attrId = $this->attributeIdByAVId( $attrVId );
    
    if(((bool) $this->isAttributeById( $attrId ) === true) && 
      ((bool) $this->isWHMatrixParByAttrVId($mId, $attrVId) === false)   
    ) {
      if((bool) $this->haveWHMatrixAGColorById($mId, $attrId) === false) {
        if((bool) $this->insertMatrixAGColor(array(
          ':id_matrix' => (int) $mId,
          ':id_attr'   => $attrId,
          ':color'     => $this->__uniqueWHMatrixAGColor()
        )) === false) {
          return false;
        }
      }
      return $this->insertMatrixParABv(array(
        ':id_matrix'        => (int) $mId,
        ':id_par'           => $parId,
        ':id_attr'          => $attrId,
        ':id_value'         => (int) $attrVId,
        ':id_cost_differce' => (int) $cdt,
        ':cost_difference'  => (float) $cdv,
        ':position'         => $this->whMatrixParlastPositionNumById($mId, $parId)
      ));
    }
    return false;
  }
  
  private function __uniqueWHMatrixAGColor()
  {
    $color = self::$registry->getService('helper')->randColor();
    
    if((bool) $this->haveWHMatrixAGByColor($color) === false) {
      return $color;
    } else {
      $this->__uniqueWHMatrixAGColor();
    }
  }
  
  public function addAttrVSFToWHMatrix( $mId = 0, $data = null, $parId = 0 )
  {
    if(((bool) self::$registry->getService('store')->isWHMatrixById($mId) === true) &&
      (is_array($data) && (count($data) > 0)) &&
      (((int) $parId === 1) || ((int) $parId === 2))
    ) {
      $status = [];
      
      foreach($data as $value) {
        if((bool) self::$registry->getService('store')->isAttributeValueById(0, $value["attrVId"]) === true) {
          $status[] = $this->addAttrVToWHMatrix(
            $mId, 
            $value["attrVId"], 
            $value["cdt"], 
            $value["cdv"], 
            $parId
          );
        }
      }
      return self::$registry->getService('helper')->checkStatus($status);
    }
    return false;
  }
  
  public function whMatrixQtyRDById( $mId = 0, $parAVId = 0, $parBVId = 0 )
  {
    if((bool) $this->isWHMatrixById( $mId ) === true) {
      return (object) array(
        'vt_'. (int) $parAVId => $this->whMatrixParXVtByParId($mId, $parAVId, 1),
        'vt_'. (int) $parBVId => $this->whMatrixParXVtByParId($mId, $parBVId, 2),
        'mT'                  => $this->whMatrixParABVsQty( $mId )   
      );
    }
    return null;
  }
  
  public function deleteWarehouseByIds( $wIds = null )
  {
    if(is_array($wIds) && (count($wIds) > 0)) {
      foreach($wIds as $wId) {
        if($this->isWarehouseById( $wId )) {
          $this->status[] = $this->deleteWarehouseById( $wId );
        }
      }
      return (count($this->status) > 0) ? $this->checkStatus() : false;
    }
    return false;
  }
  
  public function deleteWarehouseForce()
  {
    $wIds = $this->warehouseIds();
    
    if(is_array($wIds) && (count($wIds) > 0)) {
      foreach($wIds as $wh) {
        $this->status[] = $this->deleteWarehouseById( $wh->id_wh );
      }
      return (count($this->status) > 0) ? $this->checkStatus() : false;
    }
    return false;
  }
  
  public function deleteWarehouseSAL( $whId = 0, $ids = null )
  {
    if(((bool) $this->isWarehouseById( $whId ) === true) &&
      (is_array($ids) && (count($ids) > 0))
    ) {
      foreach($ids as $id) {
        if($this->isArticleById( $id ) && ((bool) $this->haveWarehouseArticleById($whId, $id) === true)) {
          $this->status[] = $this->deleteWarehouseArticleById($whId, $id);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function deleteSelectedWhEtAAL( $whETId = 0, $ids = null )
  {
    if(((bool) $this->isWHExpeditionTime( $whETId ) === true) &&
      (is_array($ids) && (count($ids) > 0))
    ) {
      foreach($ids as $id) {
        if($this->isArticleById( $id ) && ((bool) $this->haveWarehouseETArticleById($whETId, $id) === true)) {
          $this->status[] = $this->deleteWarehouseETArticleById($whETId, $id);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function deleteWHMatrixParXById( $mId = 0, $parId = 0 )
  {
    if(((bool) $this->isWHMatrixById($mId) === true) &&
      (((int) $parId === 1) || ((int) $parId === 2))
    ) {
      $parXVs = $this->whMatrixParABVsById($mId, (((int) $parId === 1) ? self::PAR_A : self::PAR_B), false, false);

      if(is_array($parXVs) && (count($parXVs) > 0)) {
        foreach($parXVs as $parXV) {
          $this->status[] = $this->deleteWHMatrixParById(
            $mId,
            $parXV->id_value,
            $parId
          );
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  public function deleteWHMatrixParXVs( $mId = 0, $data = null, $parId = 0 )
  {
    if(((bool) self::$registry->getService('store')->isWHMatrixById($mId) === true) &&
      (is_array($data) && (count($data) > 0)) &&
      (((int) $parId === 1) || ((int) $parId === 2))
    ) {
      foreach($data as $value) {
        if((bool) $this->isWHMatrixParByAttrVId($mId, $value['attrVId']) === true) {
          $this->status[] = $this->deleteWHMatrixParById(
            $mId,
            $value['attrVId'],
            $parId
          );
        }
      }
      return (count($this->status) > 0) ? $this->checkStatus() : false;
    }
    return false;
  }

  /*************************************************************************************************************************************************************
  *
  * DISCOUNT CIRCUIT
  *
  *************************************************************************************************************************************************************/

  public function createDiscountCircuit( $form = null )
  {
    if((isset($form['circuit-name-int']) && (strlen($form['circuit-name-int']) > 3)) &&
      (isset($form['type-of-discount-id']) && (((int) $form['type-of-discount-id'] === 1) || ((int) $form['type-of-discount-id'] === 2))) &&
      ((float) $form['discount-value'] > 0) &&
      (is_array($form["lang"]) && (count($form["lang"]) > 0))
    ) {
      if(isset($form['use-client-restriction']) && (((int) $form['client-discount-rule-id'] < 1) || ((int) $form['client-discount-rule-id'] > 2))) {
        return false;
      }
      $userId         = self::$registry->getService('cms')->getUser()->id_user;
      $discountTypeId = (int) $form["type-id"];
      $dCircuitId     = $this->insertDiscountCircuit(array(
        ':id_type'                 => $discountTypeId,
        ':id_wh'                   => (isset($form["warehouse-id"]) && ((bool) $this->isWarehouseById( $form["warehouse-id"] ) === true)) ? (int) $form["warehouse-id"] : 0,
        ':id_section'              => (int) $form["section-id"],
        ':id_type_of_discount'     => (int) $form["type-of-discount-id"],
        ':id_client_discount_rule' => (int) $form['client-discount-rule-id'],
        ':use_client_restriction'  => (isset($form['use-client-restriction'])) ? 1 : 0,
        ':color'                   => $form["color"],
        ':circuit_name_int'        => $form["circuit-name-int"],
        ':discount_value'          => $form["discount-value"],
        ':discount_from'           => (strlen($form["from"]) > 0) ? $form["from"] : null,
        ':discount_until'          => (strlen($form["until"]) > 0) ? $form["until"] : null,
        ':description'             => $form["description"],
        ':enabled'                 => 1,
        ':upd_user'                => $userId,
        ':upd_date'                => date("Y-m-d H:i:s"),
        ':creator'                 => $userId
      ));
      if($this->isDiscountCircuitById( $dCircuitId )) {
        $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;

        foreach($form["lang"] as $key => $value) {
          $this->status[] = $this->insertDiscountCircuitLang(array(
            ':id_circuit'       => $dCircuitId,
            ':id_lang'          => (int) $key,
            ':circuit_name'     => $value["'circuit-name'"],
            ':site_title'       => $value["'site-title'"],
            ':description'      => $value["'description'"],
            ':meta_robots'      => $value["'meta-robot'"],
            ':meta_keywords'    => $value["'meta-keywords'"],
            ':meta_description' => $value["'meta-description'"],
            ':html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
          ));
        }
        if(($discountTypeId === 1) && ((is_array($form["section-values"])) && (count($form["section-values"]) > 0))) {
          foreach($form["section-values"] as $value) {
            $this->status[] = $this->insertDiscountCircuitSectionValue(array(
              ':id_circuit'          => $dCircuitId,
              ':id_section_value_id' => (int) $value
            ));
          }
          $dCircuitFIds = $this->discountCircuitFIdsById( $dCircuitId );
          $articleList  = (!is_null($dCircuitFIds)) ? $this->articleListOnDiscCircuitByFIds($dCircuitFIds, $form["section-id"]) : null;
          
          if(!is_null($articleList)) {
            foreach($articleList as $article) {
              if(!$this->isArticleOnDescCircuitByArticleId( $article->id_article )) {
                $this->status[] = $this->insertArticleToDiscountCircuit(array(
                  ':id_circuit' => $dCircuitId,
                  ':id_article' => (int) $article->id_article
                ));
              } else {
                if(isset($form["force"])) {
                  $this->status[] = $this->updateDiscCurcuitOnDiscCircuitByArticleId(array(
                    'id_circuit' => $dCircuitId
                  ), (int) $article->id_article);
                }
              }
            }
            return ($this->checkStatus()) ? $dCircuitId : false;
          } else {
            self::$registry->getService('messenger')->display(
              2,
              'INFO',
              'V danom výbere nie su zaradené žiadne produkty.',
              null,
              'cpanel/store-update-discount-circuit-form/'.$dCircuitId,
              true
            );
          }
        }
        return ($this->checkStatus()) ? $dCircuitId : false;
      }
      return false;
    }
    return false;
  }

  public function updateDiscountCircuit( $form = null )
  {
    if((isset($form['circuit-name-int']) && (strlen($form['circuit-name-int']) > 3)) &&
      ((float) $form['discount-value'] > 0) &&
      (is_array($form["lang"])) && (count($form["lang"]) > 0) &&
      $this->isDiscountCircuitById( $form["dc-id"] )
    ) {
      $dCircuitId = (int) $form["dc-id"];

      if($this->updateDiscountCircuitById(array(
        'id_type_of_discount' => (int) $form["type-of-discount-id"],
        'rule'                => (isset($form["rule"])) ? 1 : 0,
        'color'               => $form["color"],
        'circuit_name_int'    => $form["circuit-name-int"],
        'description'         => $form["description"],
        'discount_from'       => (strlen($form["from"]) > 0) ? $form["from"] : null,
        'discount_until'      => (strlen($form["until"]) > 0) ? $form["until"] : null,
        'discount_value'      => $form["discount-value"],
        'enabled'             => (isset($form["publish"])) ? 1 : 0
      ), $dCircuitId)) {

        $pattern = 'src="'.self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;

        foreach($form["lang"] as $key => $value) {
          if($this->haveDiscountCircuitLangById($dCircuitId, $key)) {
            $this->status[] = $this->updateDiscountCircuitLangById(array(
              'circuit_name'     => $value["'circuit-name'"],
              'site_title'       => $value["'site-title'"],
              'description'      => $value["'description'"],
              'meta_robots'      => $value["'meta-robot'"],
              'meta_keywords'    => $value["'meta-keywords'"],
              'meta_description' => $value["'meta-description'"],
              'html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
            ), $dCircuitId, $key);
          } else {
            $this->status[] = $this->insertDiscountCircuitLang(array(
              ':id_circuit'       => $dCircuitId,
              ':id_lang'          => (int) $key,
              ':circuit_name'     => $value["'circuit-name'"],
              ':site_title'       => $value["'site-title'"],
              ':description'      => $value["'description'"],
              ':meta_robots'      => $value["'meta-robot'"],
              ':meta_keywords'    => $value["'meta-keywords'"],
              ':meta_description' => $value["'meta-description'"],
              ':html_content'     => str_replace($pattern,'src="/',$value["'html-content'"]),
            ));
          }
        }
        return $this->checkStatus();
      }
      return false;
    }
    return false;
  }
  
  public function insertArticleListToDiscountCircuit( $dCircuitId = 0, $ids = null )
  {
    if($this->isDiscountCircuitById( $dCircuitId ) &&
       (is_array($ids) && (count($ids) > 0))
    ) {
      foreach($ids as $id) {
        if($this->isArticleById( $id ) && ((bool) $this->haveArticleDiscountCircuitById($dCircuitId, $id) === false)) {
          $this->status[] = $this->insertArticleToDiscountCircuit(array(
            ':id_circuit' => (int) $dCircuitId,
            ':id_article' => (int) $id
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function deleteArticleListFromDiscountCircuit( $dCircuitId = 0, $articleList = null )
  {
    if($this->isDiscountCircuitById( $dCircuitId ) &&
       (is_array($articleList) && (count($articleList) > 0))
    ) {
      foreach($articleList as $article) {
        if(isset($article["'on'"]) && $this->isArticleById( $article["'article-id'"] ) && 
          ((bool) $this->haveArticleDiscountCircuitById($dCircuitId, $article["'article-id'"]) === true)
        ) {
          $this->status[] = $this->deleteArticleFromDiscountCircuitById(
            $dCircuitId,
            $article["'article-id'"]
          );
        }
      }
      return $this->checkStatus();
    }
    return false;
  }

  public function deleteDiscountCircuitById( $dCircuitId = 0 )
  {
    if($this->isDiscountCircuitById( $dCircuitId )) {
      $this->status[] = $this->deleteDiscCircuitBaseById( $dCircuitId );
      $this->status[] = $this->deleteDiscCircuitLangById( $dCircuitId );
      $this->status[] = $this->deleteDiscCircuitExtById( $dCircuitId );
      $this->status[] = $this->deleteDiscCircuitArticleListById( $dCircuitId );
      $this->status[] = $this->deleteDiscCircuitClientListById( $dCircuitId );

      return $this->checkStatus();
    }
    return false;
  }
  
  
  
  
  
  
  
  
  
  /*
  * 
  * OLD
  * 
  */
  
  public function assigningArticleListToExtCategory( $form = null )
  {
    if(is_numeric($form["category-id"]) && is_numeric($form["c-value-id"]) && is_array($form["articleList"]) && (count($form["articleList"]) > 0)) {
      if($this->deleteArticleListByExtCatId( $form["category-id"], $form["c-value-id"] )) {
        foreach($form["articleList"] as $value) {
          $this->status[] = $this->insertArticleToExtCategory(array(
              ':id_cc'       => (int) $form["category-id"],
              ':id_category' => (int) $form["c-value-id"],
              ':id_article'  => (int) $value["'article-id'"]
          ));
        }
        return ($this->checkStatus()) ? ((array_key_exists((int) $form["category-id"], $this->exportKeys)) ? $this->exports( $form["category-id"] ) : true ) : false;
      }
      return false;
    }
    return $this->deleteArticleListByExtCatId( $form["category-id"] );
  }
  
  public function createCategoryLink( $form = null )
  {
    $data = array(
      ":id_category"      => $form["category-id"],
      ":id_parent"        => (isset($form["parent-id"])) ? $form["parent-id"] : 0,
      ":is_root_category" => ( (int) $form["parent-id"] == 0) ? 1 : 0,
      ":icon"             => $form["icon"],
      ":css_id"           => $form["css-id"],
      ":css_classes"      => $form["css-classes"],
      ":visible"          => (isset($form["visible"])) ? 1 : 0
    );
    $itemId = (int) $this->insertCategorySortItem( $data );
    
    if( ($itemId > 0) && ($this->deleteCategorySortLangById( $itemId )) ) {
      foreach($form["linksname"] as $key => $value)
      {
        @$langData = array(
          ":id_item"     => $itemId,
          ":id_category" => $form["category-id"],
          ":id_lang"     => $key,
          ":link_name"   => $value["'item-name'"] 
        );
        $this->status[] = $this->insertCategorySortLang( $langData );
        $this->status[] = (!empty($value["'external-link'"])) ? $this->updateCategoryExternaLinkById( array("external_link" => str_replace(',','-', $value["'external-link'"])), $form["category-id"], $key ) : true;
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  
  
  public function editCategoryLink( $form = null )
  {
    $itemId = (int) $form['item-id'];
    
    $data = array(
      "id_category"      => $form["category-id"],
      "icon"             => $form["icon"],
      "css_id"           => $form["css-id"],
      "css_classes"      => $form["css-classes"],
      "visible"          => (isset($form["visible"])) ? 1 : 0
    );
    if($this->updateCategoryLink( $data, $itemId ) && $this->deleteCategorySortLangById( $itemId )) {      
      foreach($form["linksname"] as $key => $value) {
        $this->status[] = $this->insertCategorySortLang(array(
          ":id_item"     => $itemId,
          ":id_category" => $form["category-id"],
          ":id_lang"     => $key,
          ":link_name"   => $value["'item-name'"] 
        ));
        $this->status[] = $this->updateCategoryExternaLinkById( array("external_link" => str_replace(',','-', $value["'external-link'"])), $form["category-id"], $key );
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  public function orderingCateogiresLinks( $form = null )
  {
    $i = 1;
    
    foreach($form as $value) {
      $this->status[] = $this->updateCategoryLink( array("position" => $i), $value["'item-id'"] );
      $i++;
    }
    return $this->checkStatus();
  }
  
  public function getCategoryList( $pagination = false )
  {
    $list = $this->categoryList($pagination);
    
    if(!is_null($list)) {
      foreach($list as $key => $value) {
        $list[ $key ]->tree = ((int) $value->root === 1) ? null : $this->__buildTreeByCatId( $value->id_category );
        
        $this->tree = [];
      }
    }
    return $list;
  }
	
  public function categoryBreadcrumbById( $catId = 0, $langId = 0 )
  {
    $this->tree = [];

    return $this->__buildTreeByCatId( $catId, $langId );
  }
  
  private function __buildTreeByCatId( $catId = 0, $langId = 0 )
  { 
    $this->parrent = $this->categoryParentDataById( $catId, $langId );
    
    if(!is_null($this->parrent) && !$this->inArray( $this->tree, 'category_name', $this->parrent->category_name)) {
      array_push($this->tree,array(
        "id_category"   => (int) $catId,
        "category_name" => $this->parrent->category_name,
        "link"          => $this->parrent->path,           
        "color"         => self::$registry->getService('helper')->randColor()
      ));
      $this->__buildTreeByCatId($this->parrent->id_parent, $langId);
    }
    return array_reverse($this->tree);
  }
  
  public function getCategoryDataById( $catId = 0 )
  {
    return $this->categoryDataByCatId( $catId );
  }
  
  public function getCategoryHeadingById( $categoryId = 0 )
  {
    return $this->categoryHeadingById( $categoryId );
  }
  
  public function getCategorySortLinkDataById( $itemId = 0 )
  {
    return $this->categorySortDataById( $itemId );
  }
  
  public function getOrderingCategoryLinksById( $itemId = 0 )
  {
    return $this->orderingCatagoryLinksList( $this->categoryItemParentIdByItemId( $itemId ) );
  }
  
  public function getCategoriesTree( $categoryId = 0 )
  {
    $rootList = $this->categoriesRootList();
    
    if(!is_null($rootList)) {
      $parendId   = $this->categoryParentIdById( $categoryId );
      $selectedId = ($parendId > 0) ? $parendId : $categoryId;
      $tree = '';
      
      foreach($rootList as $twig) {
        $tree .= '<li class="tree-folder">';      
        $tree .= '<span class="tree-folder-name">';
        $tree .= '<input type="radio" name="id_parent" value="'.$twig->id_category.'"'.( ($selectedId == $twig->id_category) ? ' checked' : '').'>';
        $tree .= '<i class="fa fa-folder-o"></i>';
        $tree .= '<label class="tree-toggler">'.$twig->category_name.'</label>';
        $tree .= '</span>';
        
        if($this->haveCategoriesChildrens( $twig->id_category )) {
          $tree .= $this->__buildCategoriesChildrenTree( $twig->id_category, $selectedId );
        }
        $tree .= '</li>';
      }
      return '<ul id="categories-tree" class="tree">'.$tree.'</ul>';
    }
    return null;
  }
  
  private function __buildCategoriesChildrenTree( $catId = 0, $selectedId = 0 )
  {
    $children = $this->categoriesChildrenListByCatId( $catId );
    $markup    = '';
    
    foreach($children as $child)
    {      
      $markup .= '<li class="tree-folder">';
      $markup .= '<span class="tree-folder-name">';
      $markup .= '<input type="radio" name="id_parent" value="'.$child->id_category.'" '.( ($selectedId == $child->id_category) ? 'checked' : '').'>';
      $markup .= '<i class="fa fa-folder-o"></i>';
      $markup .= '<label class="tree-toggler">'.$child->category_name.'</label>';
      
      if($this->haveCategoriesChildrens( $child->id_category )) {
        $markup .= $this->__buildCategoriesChildrenTree( $child->id_category, $selectedId );
      }
      $markup .= '</li>';
    }
    return '<ul class="tree">'. $markup . '</ul>';
  }
  
  public function getCategoriesSortTree()
  {
    $list = $this->categoriesSortRootItemsList();
    $tree = '';
    
    if(!is_null($list)) {
      foreach($list as $twig) {
        $tree .= '<li>';
        $tree .= '<span data-type="item" data-item-id="'.$twig->id_item.'">';
        $tree .= '<i class="fa fa-plus"></i>&nbsp;'.$twig->link_name.'&nbsp;</span>';

        if($this->haveCategoriesSortChildrens( $twig->id_item )) {
          $tree .= $this->__buildCategoriesSortChildrenTree( $twig->id_item );
        }
        $tree .= '</li>';
      }
      return '<ul>'.$tree.'</ul>';
    }
    return $tree;
  }
  
  private function __buildCategoriesSortChildrenTree( $itemId = 0 )
  {
    $children = $this->categoriesSortChildrenListByCatId( $itemId );
    $markup   = '';
    
    if(!is_null($children)) {
      foreach($children as $child) {      
        $markup .= '<li>';
        $markup .= '<span data-type="item" data-item-id="'.$child->id_item.'"><i class="fa '.((is_null($children)) ? "fa-plus": "fa-chevron-circle-left").'"></i>&nbsp;'.$child->link_name.'&nbsp;</span>';
        
        if($this->haveCategoriesSortChildrens( $child->id_item )) {
          $markup .= $this->__buildCategoriesSortChildrenTree( $child->id_item );
        }
        $markup .= '</li>';
      }
      return '<ul>'. $markup . '</ul>';
    }
    return $markup;
  }
  
  public function removeCategoryLinkById( $itemId = 0 )
  {
    $ids = $this->categoriesLinksIdsByItemId( $itemId );
    
    $this->status[] = $this->deleteCategoryLinkById( $itemId );
            
    if(!is_null($ids)) {
      foreach($ids as $id) {
        $this->status[] = $this->deleteCategoryLinkById( $id->id_item );
      }
    }
    return $this->checkStatus();
  }
  
  /** 
  * 
  * ATTRIBUTE
  * 
  **/
  
  public function createAttribute( $form = null )
  {
    $attrId = (int) $this->insertAttribute( array(
      ':id_parent'         => (isset($form["root"])) ? 0 : ( (isset($form["id_parent"])) ? $form["id_parent"] : 0 ),
      ':is_root_attribute' => (isset($form["root"])) ? 1 : 0,
      ':guest'             => (isset($form["guest"])) ? 1 : 0,
      ':visitor'           => (isset($form["visitor"])) ? 1 : 0,
      ':customer'          => (isset($form["customer"])) ? 1 : 0,
      ':active'            => (isset($form["enable"])) ? 1 : 0,
      ':position'          => $this->attributeLastPosition( ((isset($form["id_parent"])) ? $form["id_parent"] : 0) ),
      ':date_upd'          => date("Y-m-d H:i:s"),
      ':date_add'          => date("Y-m-d H:i:s"),
      ':creator'           => self::$registry->getService('cms')->getUser()->id_user
    ));
    if($this->isAttributeById( $attrId ) && (is_array($form["lang"]) && (count($form["lang"]) > 0))) {
      $pattern = 'src="' . self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;

      foreach($form["lang"] as $key => $value) {
        $this->status[] = $this->insertAttributeLang( array(
          ":id_attribute"            => $attrId,
          ":id_lang"                 => $key,
          ":attribute_name_internal" => $value["'attribute-name-internal'"],
          ":attribute_name_public"   => $value["'attribute-name-public'"],
          ":site_title"              => $value["'title'"],
          ":description"             => $value["'description'"],
          ":meta_robots"             => $value["'meta-robots'"],
          ":meta_keywords"           => $value["'meta-keywords'"],
          ":meta_description"        => $value["'meta-description'"],
          ":html_content"            => str_replace($pattern, 'src="/', $value["'html-content'"])
        ));
      }
      return ($this->checkStatus()) ? $attrId : false;
    }
    return false;
  }

  public function createAttributeValue( $form = null )
  {
    if((is_array($form['values']) && (count($form['values']) > 0)) &&
      $this->isAttributeById( $form['attribute-id'] )
    ) {
      $valueId = $this->insertAttributeValue(array(
        ':id_attribute' => (int) $form['attribute-id'],
        ':color'        => (strlen($form['color']) > 0) ? $form['color'] : null
      ));
      if($this->isAttributeValueById($form['attribute-id'], $valueId)) {
        $pattern = 'src="' . self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;

        foreach($form['values'] as $key => $value) {
          $this->status[] = $this->insertAttributeValueLang(array(
            ':id_attribute'     => (int) $form['attribute-id'],
            ':id_value'         => (int) $valueId,
            ':id_lang'          => (int) $key,
            ':value'            => $value["'value'"],
            ':site_title'       => $value["'site-title'"],
            ':description'      => $value["'description'"],
            ':meta_robot'       => $value["'meta-robot'"],
            ':meta_keywords'    => $value["'meta-keywords'"],
            ':meta_description' => $value["'meta-description'"],
            ':html_content'     => str_replace($pattern, 'src="/', $value["'html-content'"])
          ));
        }
        return ($this->checkStatus()) ? $valueId : false;
      }
      return false;
    }
    return false;
  }

  public function insertArticleListToAttributeValue( $attrId = 0, $attrVId = 0, $ids = null )
  {
    if($this->isAttributeValueById($attrId, $attrVId) && (is_array($ids) && (count($ids) > 0))) {
      foreach($ids as $id) {
        if($this->isArticleById( $id ) && ((bool) $this->haveArticleAttributeValueById($id, $attrId, $attrVId) === false)) {
          $this->status[] = $this->insertArticleAttributeById(array(
            ':id_article'   => (int) $id,
            ':id_attribute' => (int) $attrId,
            ':id_value'     => (int) $attrVId
          ));
        }
      }
      return $this->checkStatus();
    }
    return false;
  }

  public function updateAttributeDataById( $form = null )
  {
    if((is_array($form) && (count($form) > 0)) && isset($form["attribute-id"])) {
      if ($this->updateAttributeById(array(
        'id_parent'         => (isset($form["root"])) ? 0 : ((isset($form["id_parent"])) ? $form["id_parent"] : 0),
        'is_root_attribute' => (isset($form["root"])) ? 1 : 0,
        'is_manufacturer'   => (isset($form["manufacturer"])) ? 1 : 0,
        'guest'             => (isset($form["guest"])) ? 1 : 0,
        'visitor'           => (isset($form["visitor"])) ? 1 : 0,
        'customer'          => (isset($form["customer"])) ? 1 : 0,
        'active'            => (isset($form["enable"])) ? 1 : 0,
        'date_upd'          => date("Y-m-d H:i:s")
      ), $form["attribute-id"])
      ) {
        if (isset($form["lang"]) && (is_array($form["lang"]) && (count($form["lang"]) > 0))) {
          $pattern = 'src="' . self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;

          foreach ($form["lang"] as $key => $value) {
            if ($this->haveAttributeLangById($form["attribute-id"], $key)) {
              $this->status[] = $this->updateAttributeLang(array(
                "attribute_name_internal" => $value["'attribute-name-internal'"],
                "attribute_name_public"   => $value["'attribute-name-public'"],
                "id_attribute_image"      => (isset($value["'attribute-image-id'"])) ? $value["'attribute-image-id'"] : 0,
                "color"                   => $value["'color'"],
                "site_title"              => $value["'title'"],
                "description"             => $value["'description'"],
                "meta_robots"             => $value["'meta-robots'"],
                "meta_keywords"           => $value["'meta-keywords'"],
                "meta_description"        => $value["'meta-description'"],
                "html_content"            => str_replace($pattern, 'src="/', $value["'html-content'"])
              ), $form["attribute-id"], $key);
            } else {
              $this->status[] = $this->insertAttributeLang(array(
                ":id_attribute"            => (int) $form["attribute-id"],
                ":id_lang"                 => $key,
                ":attribute_name_internal" => $value["'attribute-name-internal'"],
                ":attribute_name_public"   => $value["'attribute-name-public'"],
                ":id_attribute_image"      => (isset($value["'attribute-image-id'"])) ? $value["'attribute-image-id'"] : 0,
                ":color"                   => $value["'color'"],
                ":site_title"              => $value["'title'"],
                ":description"             => $value["'description'"],
                ":meta_robots"             => $value["'meta-robots'"],
                ":meta_keywords"           => $value["'meta-keywords'"],
                ":meta_description"        => $value["'meta-description'"],
                ":html_content"            => str_replace($pattern, 'src="/', $value["'html-content'"])
              ));
            }
          }
          return $this->checkStatus();
        }
        return false;
      }
      return false;
    }
    return false;
  }

  public function updateAttributeImage( $attrId = 0, $langId = 0, $files = null )
  {
    if(is_array($files) && (count($files) > 0)) {
      foreach($files as $file) {
        if(isset($file["'use'"])) {
          $fileId = (int) self::$registry->getService('drive')->fileIdByHash( $file["'imgId'"] );

          if(self::$registry->getService('drive')->isFileById( $fileId )) {
            return $this->updateAttributeImageById(array(
              'id_attribute_image' => $fileId
            ), $attrId, $langId);
          }
          return false;
        }
      }
      return false;
    }
    return false;
  }

  public function updateAttributeList( $form = null )
  {
    if(is_array($form) && (count($form) > 0)) {
      foreach ($form as $value) {
        if (isset($value["'remove'"])) {
          $this->status[] = $this->deleteAttributeById($value["'attribute-id'"]);
          $this->status[] = $this->deleteAttributeLangById($value["'attribute-id'"]);
        } else {
          $this->status[] = $this->updateAttributeById(array(
            'active' => ((isset($value["'enable'"])) ? 1 : 0)
          ), (int) $value["'attribute-id'"]);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }

  public function updateAttributeValue( $form = null )
  {
    if((isset($form["attribute-id"]) && isset($form["value-id"])) &&
      (is_array($form["values"]) && (count($form["values"]) > 0))
    ) {
      if($this->updateAttributeValueDataById(array(
        'color' => (strlen($form["color"]) > 0) ? $form["color"] : null
      ),$form["attribute-id"], $form["value-id"])) {
        $pattern = 'src="' . self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;

        foreach($form["values"] as $key => $value) {
          if($this->isAttributeValueById($form["attribute-id"], $form["value-id"])) {
            if($this->haveAttributeValueLangById($form["attribute-id"], $form["value-id"], $key)) {
              $this->status[] = $this->updateAttributeValueLangById(array(
                'value'            => $value["'value'"],
                'site_title'       => $value["'site-title'"],
                'description'      => $value["'description'"],
                'meta_robot'       => $value["'meta-robot'"],
                'meta_keywords'    => $value["'meta-keywords'"],
                'meta_description' => $value["'meta-description'"],
                'html_content'     => str_replace($pattern, 'src="/', $value["'html-content'"])
              ), $form["attribute-id"], $form["value-id"], $key);
            } else {
              $this->status[] = $this->insertAttributeValueLang(array(
                ':id_attribute'     => $form["attribute-id"],
                ':id_value'         => $form["value-id"],
                ':id_lang'          => $key,
                ':value'            => $value["'value'"],
                ':site_title'       => $value["'site-title'"],
                ':description'      => $value["'description'"],
                ':meta_robot'       => $value["'meta-robot'"],
                ':meta_keywords'    => $value["'meta-keywords'"],
                ':meta_description' => $value["'meta-description'"],
                ':html_content'     => str_replace($pattern, 'src="/', $value["'html-content'"])
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

  public function getAttributeList( $pagination = false )
  {
    $list = $this->attributeList($pagination);

    if(!is_null($list)) {
      foreach($list as $key => $value) {
        $list[ $key ]->tree = (((int) $value->root === 1) ? null : $this->buildTreeByAttrId( $value->id_attribute ));
        $this->tree = [];
      }
    }
    return $list;
  }

  public function getAttributeWidgets()
  {
    return array(
      "disabled_attributes" => $this->__attributeWidgetDataById(1),
      "empty_attributes"    => $this->__attributeWidgetDataById(2),
      "top_attribute"       => $this->__attributeWidgetDataById(3),
      "number_of_products"  => $this->__attributeWidgetDataById(4)
    );
  }

  private function __attributeWidgetDataById( $widgetId = 0 )
  {
    $totalAttributes = $this->countAttributes();

    switch($widgetId) {
      case 1:
        $x = $this->countDisabledAttributes();
        return round((($x > 0) ? (($x * 100) / $totalAttributes) : 0 ), 0, PHP_ROUND_HALF_UP);
      case 2:
        $x = $this->countEmptyAttributes();
        return round((($x > 0) ? (($x * 100) / $totalAttributes) : 0 ), 0, PHP_ROUND_HALF_UP);
      case 3:
        return '-';
      case 4:
        $x = $this->countArticlesOnAAList();
        return round(($x / $totalAttributes), 0, PHP_ROUND_HALF_UP);
    }
  }

  public function getAttributeTree( $attributeId = 0 )
  {
    $rootList = $this->attributeRootList();

    if(is_array($rootList) && (count($rootList) > 0)) {
      $parentId   = $this->attributeParentIdById( $attributeId );
      $selectedId = ($parentId > 0) ? $parentId : $attributeId;
      $tree = '';

      foreach($rootList as $twig) {
        $tree .= '<li class="tree-folder">';
        $tree .= '<span class="tree-folder-name">';
        $tree .= '<input type="radio" name="id_parent" value="'.$twig->id_attribute.'"'.(($selectedId == $twig->id_attribute) ? ' checked' : '').'>';
        $tree .= '<i class="fa fa-folder-o"></i>';
        $tree .= '<label class="tree-toggler">&nbsp;<strong>'.( (!empty($twig->attribute_name_internal)) ? $twig->attribute_name_internal : $twig->attribute_name_public ).'&nbsp;</strong></label>';
        $tree .= '</span>';

        if($this->haveAttributesChildrens( $twig->id_attribute )) {
          $tree .= $this->__buildAttributesChildrenTree($twig->id_attribute, $selectedId);
        }
        $tree .= '</li>';
      }
      return '<ul id="attributes-tree" class="tree">'.$tree.'</ul>';
    }
    return null;
  }

  private function __buildAttributesChildrenTree( $attrId = 0, $selectedId = 0 )
  {
    $children = $this->attributesChildrenListByAttrId( $attrId );
    $markup    = '';

    if(!is_null($children)) {
      foreach($children as $child) {
        $markup .= '<li class="tree-folder">';
        $markup .= '<span class="tree-folder-name">';
        $markup .= '<input type="radio" name="id_parent" value="'.$child->id_attribute.'"'.(($selectedId == $child->id_attribute) ? ' checked' : '').'>';
        $markup .= '<i class="fa fa-folder-o"></i>';
        $markup .= '<label class="tree-toggler">&nbsp;<strong>'.( (!empty($child->attribute_name_internal)) ? $child->attribute_name_internal : $child->attribute_name_public ).'&nbsp;</strong></label>';

        if($this->haveAttributesChildrens( $child->id_attribute )) {
          $markup .= $this->__buildAttributesChildrenTree($child->id_attribute, $selectedId);
        }
        $markup .= '</li>';
      }
      return '<ul class="tree">'. $markup . '</ul>';
    }
    return $markup;
  }

  public function getAttributeValueListById( $attrId = 0, $pagination = false )
  {
    $list = $this->attributeValueListByAttrId($attrId, $pagination);

    if(!is_null($list)) {
      foreach($list as $key => $value) {
        $list[ $key ]->tree = $this->attributeTreeByAVId( $value->id_value );
      }
      return $list;
    }
    return null;
  }

  public function attributeTreeByAVId( $valueId = 0, $langId = 0 )
  {
    $attrId = $this->attributeIdByAVId( $valueId );

    if(!is_null($attrId)) {
      $this->tree = [];
      $tree       = $this->__buildLinkRewriteByAttrId($attrId, $langId);
      $prefix     = self::$registry->getService('irequest')->getLocation() . DIRECTORY_SEPARATOR;

      if(is_array($tree) && (count($tree) > 0)) {
        foreach($tree as  $value) {
          if(!is_null($value["path"])) {
            $prefix .= $value["path"] . DIRECTORY_SEPARATOR;
          }
        }
      }
      return $prefix;
    }
    return null;
  }

  private function __buildLinkRewriteByAttrId( $attrId = 0, $langId = 0 )
  {
    $this->parrent = $this->attributeParentDataById($attrId, $langId);

    if(!is_null($this->parrent) && !$this->inArray( $this->tree, 'attribute_name', $this->parrent->attribute_name_public)) {
      array_push($this->tree,array(
        "id_attr"        => (int) $attrId,
        "attribute_name" => $this->parrent->attribute_name_public,
        "path"           => $this->parrent->path
      ));
      $this->__buildLinkRewriteByAttrId($this->parrent->id_parent);
    }
    return array_reverse($this->tree);
  }

  public function attrValueList()
  {
    $attrValueList = $this->attributeValueList();

    if(is_array($attrValueList) && (count($attrValueList) > 0)) {
      foreach($attrValueList as $key => $value) {
        $attrValueList[ $key ]->attribute_name = $this->attributeNameById( $value->id_attribute )->attribute_name_internal;
        $attrValueList[ $key ]->tree = $this->buildTreeByAttrId( $value->id_attribute );

        $this->resetAttrTreeArr();
      }
      return $attrValueList;
    }
    return null;
  }

  public function attrCaseByParams( $typeId = 0, $object = null, $params = null, $sortRuleId = 0, $priceFrom = 0, $priceUpTo = 0, $manufacturerId = 0 )
  {
    // DEFAULT CASE OBJECT
    $caseObject = (object) array(
      'data'               => null,
      'no_follow'          => true,
      'is_canonical'       => false,
      'canonical_link'     => null,
      'pagination'         => false,
      'page'               => 1,
      'limit'              => self::$perPage,
      'total'              => 0,
      'prefix'             => null,
      'seo'                => null,
      'breadcrumb'         => null,
      'links'              => null,
      'articleList'        => null,
      'higLowPriceBalance' => null
    );
    /*******************************************************************************************************************
    *
    * CASE 1 / BIT[0] = ATTR [ view-all ]
    *
    *******************************************************************************************************************/

    if(((int) $typeId === 1) && ((count($params) === 2) && ((string) end($params) === 'view-all'))) {
      $breadcrumb = $this->attributeBreadcrumbById($this->attributeLastChildById($object->id_attribute), $object->id_lang);
      $attrIds = [];

      if(is_array($breadcrumb) && (count($breadcrumb) > 0)) {
        foreach($breadcrumb as $value) {
          $attrIds[] = (int) $value['id_attribute'];
        }
      }
      $attrVIds = $this->attributeValueIdsByAttrIds( $attrIds );
      $attr     = $this->attributeById( $object->id_attribute )->lang[ $object->id_lang ];
      // INIT OBJECT
      $caseObject->data = (object) array(
        'attribute_name' => $attr->attribute_name_public,
        'description'    => $attr->description,
        'html_content'   => $attr->html_content
      );
      $caseObject->seo = (object) array(
        'site_title'       => $attr->site_title,
        'meta_robot'       => $attr->meta_robots,
        'meta_keywords'    => $attr->meta_keywords,
        'meta_description' => $attr->meta_description
      );
      $caseObject->breadcrumb  = $breadcrumb;
      $caseObject->articleList = $this->attributeValueArticleListOnSiteByIds(
        $object->id_attribute, 
        $attrVIds, 
        $object->id_lang, 
        0,
        0,
        0,
        0,
        false
      );
      $caseObject->higLowPriceBalance = $this->highLowPriceBalanceByAttrId(0);
    }

    /*******************************************************************************************************************
    *
    * CASE 2 / BIT[0] = ATTR-V [ view-all ]
    *
    *******************************************************************************************************************/

    if(((int) $typeId === 2) && ((count($params) === 2) && ((string) end($params) === 'view-all'))) {
      $attrV = $this->attributeValueOnSiteById($object->id_attribute, $object->id_value, $object->id_lang, false);

      $caseObject->data = (object) array(
        'value'        => $attrV->value,
        'description'  => $attrV->description,
        'html_content' => $attrV->html_content
      );
      $caseObject->seo = (object) array(
        'site_title'       => $attrV->site_title,
        'meta_robot'       => $attrV->meta_robot,
        'meta_keywords'    => $attrV->meta_keywords,
        'meta_description' => $attrV->meta_description
      );
      $caseObject->breadcrumb  = $this->attributeBreadcrumbById($object->id_attribute, $object->id_lang);
      $caseObject->links       = array(
        0 => (object) array(
          'name' => $attrV->value,
          'path' => $attrV->path
        )
      );
      $caseObject->articleList = $attrV->articleList;
      $caseObject->higLowPriceBalance = $this->highLowPriceBalanceByAttrVId(0, 0);
    }

    /*******************************************************************************************************************
    *
    * CASE 3 / BIT[0] = ATTR [ PAGINATION ]
    *
    *******************************************************************************************************************/

    if(((int) $typeId === 1) && ((count($params) === 1) || ((count($params) === 3) && ((filter_var($params[1], FILTER_VALIDATE_INT) !== false) && (filter_var($params[2], FILTER_VALIDATE_INT) !== false))))) {
      /** ATTR OBJECT **/
      $breadcrumb = $this->attributeBreadcrumbById($this->attributeLastChildById($object->id_attribute), $object->id_lang);
      $attrIds = [];

      if(is_array($breadcrumb) && (count($breadcrumb) > 0)) {
        foreach($breadcrumb as $value) {
          $attrIds[] = (int) $value['id_attribute'];
        }
      }
      $attrVIds = $this->attributeValueIdsByAttrIds( $attrIds );
      $attr     = $this->attributeById( $object->id_attribute )->lang[ $object->id_lang ];
      /** PAGINATION VARS **/
      $caseObject->is_canonical   = true;
      $caseObject->canonical_link = $params[0] . DIRECTORY_SEPARATOR . 'view-all';
      $caseObject->pagination     = true;
      $caseObject->prefix         = $params[0];
      $caseObject->page           = (isset($params[1]) && ((int) $params[1] > 0)) ? (int) $params[1] : 1;
      $caseObject->limit          = (isset($params[2]) && (((int) $params[2] >= 10) && ((int) $params[2] <= 50))) ? (int) $params[2] : self::$perPage;
      $caseObject->total          = self::$registry->getService('store')->countAttributeValueAssigningArticleByAttrVIds(
        $object->id_attribute, 
        $attrVIds,
        $object->id_lang,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
      /** INIT PAGINATION **/
      self::$registry->getService('pagination')->setPrefix( $caseObject->prefix );
      self::$registry->getService('pagination')->setPage( $caseObject->page );
      self::$registry->getService('pagination')->setLimit( $caseObject->limit );
      self::$registry->getService('pagination')->setTotal( $caseObject->total );
      // INIT OBJECT
      $caseObject->data = (object) array(
        'attribute_name' => $attr->attribute_name_public,
        'description'    => $attr->description,
        'html_content'   => $attr->html_content
      );
      $caseObject->seo = (object) array(
        'site_title'       => $attr->site_title,
        'meta_robot'       => $attr->meta_robots,
        'meta_keywords'    => $attr->meta_keywords,
        'meta_description' => $attr->meta_description
      );
      $caseObject->breadcrumb  = $breadcrumb;
      $caseObject->articleList = $this->attributeValueArticleListOnSiteByIds(
        $object->id_attribute, 
        $attrVIds, 
        $object->id_lang, 
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        true
      );
      $caseObject->higLowPriceBalance = $this->highLowPriceBalanceByAttrVIds(
        $object->id_attribute, 
        $attrVIds
      );
    }

    /*******************************************************************************************************************
    *
    * CASE 4 / BIT[0] = ATTR-V [ PAGINATION ]
    *
    *******************************************************************************************************************/

    if(((int) $typeId === 2) && ((count($params) === 1) || ((count($params) === 3) && ((filter_var($params[1], FILTER_VALIDATE_INT) !== false) && (filter_var($params[2], FILTER_VALIDATE_INT) !== false))))) {
      /** PAGINATION VARS **/
      $caseObject->is_canonical   = true;
      $caseObject->canonical_link = $params[0] . DIRECTORY_SEPARATOR . 'view-all';
      $caseObject->pagination     = true;
      $caseObject->prefix         = $params[0];
      $caseObject->page           = (isset($params[1]) && ((int) $params[1] > 0)) ? (int) $params[1] : 1;
      $caseObject->limit          = (isset($params[2]) && (((int) $params[2] >= 10) && ((int) $params[2] <= 50))) ? (int) $params[2] : self::$perPage;
      $caseObject->total          = self::$registry->getService('store')->totalAttrVAssigningArticleOnSiteById(
        $object->id_attribute, 
        $object->id_value,
        $object->id_lang,
        $priceFrom,
        $priceUpTo,
        $manufacturerId
      );
      /** INIT PAGINATION **/
      self::$registry->getService('pagination')->setPrefix( $caseObject->prefix );
      self::$registry->getService('pagination')->setPage( $caseObject->page );
      self::$registry->getService('pagination')->setLimit( $caseObject->limit );
      self::$registry->getService('pagination')->setTotal( $caseObject->total );
      /** ATTR-V OBJECT **/
      $attrV = $this->attributeValueOnSiteById(
        $object->id_attribute, 
        $object->id_value,
        $object->id_lang,
        $sortRuleId,
        $priceFrom,
        $priceUpTo,
        $manufacturerId,
        true
      );
      /** INIT OBJECT **/
      $caseObject->data = (object) array(
        'value'        => $attrV->value,
        'description'  => $attrV->description,
        'html_content' => $attrV->html_content
      );
      $caseObject->seo = (object) array(
        'site_title'       => $attrV->site_title,
        'meta_robot'       => $attrV->meta_robot,
        'meta_keywords'    => $attrV->meta_keywords,
        'meta_description' => $attrV->meta_description
      );
      $caseObject->breadcrumb  = $this->attributeBreadcrumbById($object->id_attribute, $object->id_lang);
      $caseObject->links       = array(
        0 => (object) array(
          'name' => $attrV->value,
          'path' => $attrV->path
        )
      );
      $caseObject->articleList = $attrV->articleList;
      $caseObject->higLowPriceBalance = $this->highLowPriceBalanceByAttrVId(
        $object->id_attribute, 
        $object->id_value
      );
    }
    return $caseObject;
  }

  public function attributeBreadcrumbById( $attrId = 0, $langId = 0 )
  {
    $this->resetAttrTreeArr();

    return $this->buildTreeByAttrId($attrId, $langId);
  }

  public function buildTreeByAttrId( $attrId = 0, $langId = 0 )
  {
    $this->parrent = $this->attributeParentDataById($attrId, $langId);

    if(!is_null($this->parrent) && !$this->inArray( $this->tree, 'attribute_name', $this->parrent->attribute_name_public)) {
      array_push($this->tree,array(
        'id_attribute'   => (int) $attrId,
        'attribute_name' => $this->parrent->attribute_name_public,
        'path'           => $this->parrent->path,
        'color'          => self::$registry->getService('helper')->randColor()
      ));
      $this->buildTreeByAttrId($this->parrent->id_parent, $langId);
    }
    return array_reverse($this->tree);
  }

  public function resetAttrTreeArr()
  {
    $this->tree = [];
  }

  public function attributeLastChildById( $attrId = 0 )
  {
    $data = $this->attributeChildById($attrId);

    if(!is_null($data)) {
      $this->attributeLastChildById($attrId, 0);
    }
    return $attrId;
  }

  public function deleteArticleListFromAttributeValue( $attrId = 0, $attrVId = 0, $articleList = null )
  {
    if($this->isAttributeValueById($attrId, $attrVId) && (is_array($articleList) && (count($articleList) > 0))) {
      foreach($articleList as $article) {
        if(isset($article["'on'"]) && $this->isArticleById( $article["'article-id'"] ) &&
            ((bool) $this->haveArticleAttributeValueById($article["'article-id'"], $attrId, $attrVId) === true)
        ) {
          $this->status[] = $this->deleteArticleFromAttributeValueById(
            $article["'article-id'"],
            $attrId,
            $attrVId
          );
        }
      }
      return $this->checkStatus();
    }
    return false;
  }

  public function deleteAttributeValueList( $form = null )
  {
    if((isset($form['attribute-id']) && $this->isAttributeById( $form['attribute-id'] )) &&
      (isset($form['valueList']) && (is_array($form['valueList']) && (count($form['valueList']) > 0)))
    ) {
      foreach($form['valueList'] as $value) {
        if(isset($value["'on'"]) && $this->isAttributeValueById($form['attribute-id'], $value["'value-id'"])) {
          $this->status[] = $this->deleteAttributeValueById($form['attribute-id'], $value["'value-id'"]);
        }
      }
      return $this->checkStatus();
    }
    return false;
  }

  /*
  *
  *
  * OLD
  *
  */

  public function createAttributeLink( $form = null )
  {
    $data = array(
        ":id_attribute" => $form["attribute-id"],
        ":id_parent" => (isset($form["parent-id"])) ? $form["parent-id"] : 0,
        ":is_root_attribute" => ((int)$form["parent-id"] == 0) ? 1 : 0,
        ":icon" => $form["icon"],
        ":css_id" => $form["css-id"],
        ":css_classes" => $form["css-classes"],
        ":visible" => (isset($form["visible"])) ? 1 : 0,
        ":position" => $this->getAttributeLinkLastItemPosition(((isset($form["parent-id"])) ? $form["parent-id"] : 0))
    );
    $itemId = (int)$this->insertAttributeSortItem($data);

    if (($itemId > 0) && ($this->deleteAttributeSortLangById($itemId))) {
      foreach ($form["linksname"] as $key => $value) {
        $langData = array(
            ":id_item" => $itemId,
            ":id_attribute" => $form["attribute-id"],
            ":id_lang" => $key,
            ":link_name" => $value["'item-name'"]
        );
        $this->status[] = $this->insertAttributeSortLang($langData);
        $this->status[] = (!empty($value["'external-link'"])) ? $this->updateAttributeExternaLinkById(array("external_link" => str_replace(',', '-', $value["'external-link'"])), $form["attribute-id"], $key) : true;
      }
      return $this->checkStatus();
    }
    return false;
  }

  public function editAttributeLink( $form = null )
  {
    if(!empty($form) && is_array($form)) {
      $itemId = (int) $form['item-id'];

      if($itemId > 0) {
        $data = array(
          "id_attribute" => $form["attribute-id"],
          "icon"         => $form["icon"],
          "css_id"       => $form["css-id"],
          "css_classes"  => $form["css-classes"],
          "visible"      => (isset($form["visible"])) ? 1 : 0
        );
        if($this->updateAttributeLink( $data, $itemId ) && $this->deleteAttributeSortLangById( $itemId )) {      
          foreach($form["linksname"] as $key => $value)
          {
            $langData = array(
              ":id_item"      => $itemId,
              ":id_attribute" => $form["attribute-id"],
              ":id_lang"      => $key,
              ":link_name"    => $value["'item-name'"] 
            );
            $this->status[] = $this->insertAttributeSortLang( $langData );
            $this->status[] = $this->updateAttributeExternaLinkById( array("external_link" => str_replace(',','-', $value["'external-link'"])), $form["attribute-id"], $key );
          }
          return $this->checkStatus();
        }
      }
    }
    return false;
  }
  
  public function orderingAttributeLinks( $form = null )
  {
    if(!empty($form) && is_array($form)) {
      $i = 1;

      foreach($form as $value) {
        $this->status[] = $this->updateAttributeLink( array("position" => $i), $value["'item-id'"] );
        $i++;
      }
      return $this->checkStatus();
    }
    return false;
  }
	
  private function __getAttrVIDById( $attrId = 0, $attrV = null )
  {
    if(!is_null($attrV) && is_array($attrV) && (count($attrV) > 0)) {
      foreach($attrV as $key => $aValueId) {
        if($this->isAttributeValueById( (int) $attrId, (int) $aValueId )) {					
          return (object) array('id_value' => (int) $aValueId, 'u_key' => $key);
        }
      }
      return null;
    }
    return null;
  }
  
  public function getAttributeSortLinkDataById( $itemId = 0 )
  {
    return $this->attributeSortDataById( $itemId );
  }
  
  public function getOrderingAttributeLinksById( $itemId = 0 )
  {
    return $this->orderingAttributeLinksList( $this->attributeItemParentIdByItemId( $itemId ) );
  }

  public function getAttributesSortTree()
  {
    $list = $this->attributeSortRootItemsList();
    $tree = '';
    
    if(!is_null($list)) {
      foreach($list as $twig) {
        $tree .= '<li>';
        $tree .= '<span data-type="item" data-item-id="'.$twig->id_item.'">';
        $tree .= '<i class="fa fa-plus"></i>&nbsp;'.$twig->link_name.'&nbsp;</span>';

        if($this->haveCategoriesSortChildrens( $twig->id_item )) {
          $tree .= $this->__buildAttributesSortChildrenTree( $twig->id_item );
        }
        $tree .= '</li>';
      }
      return '<ul>'.$tree.'</ul>';
    }
    return $tree;
  }
  
  private function __buildAttributesSortChildrenTree( $itemId = 0 )
  {
    $children = $this->attributesSortChildrenListById( $itemId );
    $markup   = '';
    
    if(!is_null($children)) {
      foreach($children as $child)
      {      
        $markup .= '<li>';
        $markup .= '<span data-type="item" data-item-id="'.$child->id_item.'"><i class="fa '.((is_null($children)) ? "fa-plus": "fa-chevron-circle-left").'"></i>&nbsp;'.$child->link_name.'&nbsp;</span>';

        if($this->haveAttributesSortChildrens( $child->id_item )) {
          $markup .= $this->__buildAttributesSortChildrenTree( $child->id_item );
        }
        $markup .= '</li>';
      }
      return '<ul>'. $markup . '</ul>';
    }
    return null;
  }
  
  /** 
  * 
  * CATALOG_ORDERING
  * 
  **/
  
  public function createOrderingRule( $form = null )
  {
    if(is_array($form) && 
      (count($form) > 0) && 
      (((int) $form["section-id"] > 0) && ((int) $form["section-id"] < 5)) &&
      (((int) $form["type-id"] > 0) && ((int) $form["type-id"] < 19))
    ) {
      if(isset($form["section-values"])) {
        foreach($form["section-values"] as $value) {
          $this->status[] = $this->insertOrderingRule(array(
            ':id_type'    => (int) $form["type-id"],
            ':id_section' => (int) $form["section-id"],
            ':id_s_value' => (int) $value,
            ':is_default' => 0,
            ':enabled'    => 1
          ));
        }
        return $this->checkStatus();
      } else {
        return $this->insertOrderingRule(array(
          ':id_type'    => (int) $form["type-id"],
          ':id_section' => (int) $form["section-id"],
          ':id_s_value' => 0,
          ':is_default' => 1,
          ':enabled'    => 1
        ));
      }
    }
    return false;
  }
  
  public function editOrderingRule( $form = null )
  {
    if($this->isOrderingRule( $form["rule-id"] )) {
      return $this->updateOrderingRule(array(
        'id_type' => (int) $form["type-id"],
      ),$form["rule-id"]);
    }
    return false;
  }
  
  public function updateAllOrderingRule( $form = null )
  {
    if(is_array($form["orderingRuleList"]) && (count($form["orderingRuleList"]) > 0)) {
      
      foreach($form["orderingRuleList"] as $rule) {
        if($this->isOrderingRule($rule["'rule-id'"])) {
          if(isset($rule["'remove'"])) {
            $this->status[] = $this->deleteOrderingRuleById( $rule["'rule-id'"] );
          } else {
            $this->status[] = $this->updateOrderingRule(array(
              'enabled' => (isset($rule["'enabled'"])) ? 1 : 0,
            ),$rule["'rule-id'"]);
          }
        }
      }
      return $this->checkStatus();
    }
    return false;
  }
  
  /** 
  * 
  * LOZALIZATION_CURRENCIES
  * 
  **/
  
  public function createCurrency( $form = null ) 
  {
    $data = array(
      ':currency_name'   => $form["currency-name"],
      ':iso_code'        => $form["iso-code"],
      ':iso_code_num'    => $form["numeric-iso-code"],
      ':sign'            => $form["symbol"],
      ':conversion_rate' => (float) $form["exchange-rate"],
      ':format'          => (int) $form["currency-format"],
      ':decimals'        => (isset($form["decimals"])) ? 1 : 0,
      ':blank'           => (isset($form["spacing"])) ? 1 : 0,
      ':active'          => (isset($form["enable"])) ? 1 : 0
    );
    return $this->insertCurrency( $data );
  }
  
  public function getCurrenciesList()
  {
    return $this->selectAllCurencies();
  }
  
  public function saveChangesOnCurrencies( $form = null )
  {
    foreach($form as $value)
    {
      if(isset($value["'remove'"])) {
        $this->status[] = $this->deleteCurrencyById( $value["'currency-id'"] );
      } else {
        $this->status[] = $this->updateCurrencyById( array('active' => (int) $value["'enable'"]), (int) $value["'currency-id'"]);
      }
    }
    return $this->checkStatus();
  }
  
  public function isExistsCurrencyById( $currencyId = 0 ) 
  {
    return $this->isCurrencyById( $currencyId );
  }
  
  public function getCurrencyDataById( $currencyId = 0 )
  {
    return $this->currencyDataById( $currencyId );
  }
  
  public function saveChangeOnCurrency( $form = null, $currencyId = 0 )
  {
    $data = array(
      'currency_name'   => $form["currency-name"],
      'iso_code'        => $form["iso-code"],
      'iso_code_num'    => $form["numeric-iso-code"],
      'sign'            => $form["symbol"],
      'conversion_rate' => (float) $form["exchange-rate"],
      'format'          => (int) $form["currency-format"],
      'decimals'        => (isset($form["decimals"])) ? 1 : 0,
      'blank'           => (isset($form["spacing"])) ? 1 : 0,
      'active'          => (isset($form["enable"])) ? 1 : 0
    );
    return $this->updateCurrencyById($data, $currencyId);
  }
  
  public function getCurrenciesCount()
  {
    return $this->currenciesCount();
  }
  
  /** LOZALIZATION_TAXES **/
  
  public function createTax( $form = null )
  {
    $data = array(
      ':tax_name' => $form["tax-name"],
      ':rate'     => $form["rate"],
      ':active'   => (isset($form["enable"])) ? 1 : 0
    );
    return $this->insertTax( $data );
  }
  
  public function getTaxesList()
  {
    return $this->selectAllTaxes();
  }
  
  public function saveChangesOnTaxes( $form = null )
  {
    foreach($form as $value)
    {
      if(isset($value["'remove'"])) {
        $this->status[] = $this->deleteTaxById( $value["'tax-id'"] );
      } else {
        $this->status[] = $this->updateTaxById( array('active' => (int) $value["'enable'"]), (int) $value["'tax-id'"]);
      }
    }
    return $this->checkStatus();
  }
  
  public function isExistsTaxById( $taxId = 0 )
  {
    return $this->isTaxById( $taxId );
  }
  
  public function getTaxDataById( $taxId = 0 )
  {
    return $this->taxDataById( $taxId );
  }
  
  public function saveChangeOnTax( $form = null, $taxId = 0 )
  {
    $data = array(
      'tax_name' => $form["tax-name"],
      'rate'     => $form["rate"],
      'active'   => (isset($form["enable"])) ? 1 : 0
    );
    return $this->updateTaxById($data, $taxId);
  }
  
  public function getTaxesCount()
  {
    return $this->taxesCount();
  }
  
  /** 
  * 
  * HELPER METHODS
  * 
  **/
  
  private function checkStatus()
  {
    if(!empty($this->status)) {      
      foreach($this->status as $status) {
        if( (bool) $status === false) return false;
      }
      return true;
    }
    return false;
  }
  
  private function inArray( $array = null, $index = null, $search = null )
  {
    if( is_array($array) && count($array) > 0 && strlen($index) > 0 && strlen($search) > 0) {
      foreach($array as $value) {
        if($value[ $index ] == $search) {
          return true;
        }
      }
      return false;
    }
    return false;
  }
  
  /** INIT **/
  
  private function __wakeup() {}
  
  private function __clone() {}
  
}