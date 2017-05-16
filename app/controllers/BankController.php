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

class BankController {
  
  /** VUB **/
  
  CONST ID_CLIENT = 10747001;
  
  CONST SECURE_KEY = "oPwIcxj9vl";
  
  CONST STORE_KEY = "CarpeDMFashion111";
  
  CONST CURRENCY = 978;
  
  CONST TRANS_TYPE = "Auth";
  
  CONST BANK_URL_TEST = "https://testsecurepay.intesasanpaolocard.com/fim/est3Dgate";
  
  CONST BANK_URL_ENT = "https://vub.eway2pay.com/fim/est3dgate";
  
  CONST BACK_URL = "/bank/response";
  
  /** RAIFFEISEN **/
  
  CONST MERCHANT_ID = "carpedmfashion";

  /** @var Registry **/
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run()
  {
    self::$registry->getService('irequest')->movePage(301,'');
  }
  
  public function vubPay( $secureKey = '' )
  {
    $order = ($this->hasOrder((string) $secureKey)) ? self::$registry->getService('store')->orderById( $this->getOrderIdBySecureKey((string) $secureKey) ) : null;
    
    if(is_object($order) && ((int) $order->is_payed === 0)) 
    {
      // BANK DATA
      $loc  = self::$registry->getService('irequest')->getLocation();
      $data = (object) array(
        'id_client' => self::ID_CLIENT,
        'id_order'  => strtoupper($secureKey),
        'amount'    => $order->total_price,
        'okurl'     => $loc . self::BACK_URL,
        'failurl'   => $loc . self::BACK_URL,
        'trantype'  => self::TRANS_TYPE,
        'rnd'       => self::SECURE_KEY,
        'currency'  => self::CURRENCY,
        'storekey'  => self::STORE_KEY,
        'bank_url'  => self::BANK_URL_ENT
      );
      // TEMP. VARS
      self::$registry->getService('template')->assign('data',$data);
      // RENDER
      self::$registry->getService('template')->display('extends:store/vub_pay/request.tpl');
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function raiffeisen( $secureKey = '' )
  {
    $order = ($this->hasOrder((string) $secureKey)) ? self::$registry->getService('store')->orderById( $this->getOrderIdBySecureKey((string) $secureKey) ) : null;
    
    if(is_object($order) && ((int) $order->is_payed === 0)) 
    {
      // TEMP. VARS
      self::$registry->getService('template')->assign('merchantID',self::MERCHANT_ID);
      self::$registry->getService('template')->assign('order',$order);
      // RENDER
      self::$registry->getService('template')->display('extends:store/raiffeisen/request.tpl');
    } 
    else 
    {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function response()
  {
    // RAIFFEISEN
    if(isset($_GET['ordernumber']) && isset($_GET["auth"]))
    {
      $orderId = $this->getOrderIdBySecureKey($_GET['ordernumber']);
      $status  = ((strlen($_GET["auth"]) > 0) && (strtolower($_GET["auth"]) != "ko")) ? true : false;
      $msg     = ($status) ? 'OK' : 'KO';
      
      if((bool) self::$registry->getService('store')->isOrderById($orderId, 1) === true)
      {
        if($status)
        {
          self::$registry->getService('store')->updateOrderById(array(
            'is_payed' => 1
          ), $orderId);
        }
        // TEMP. VARS
        self::$registry->getService('template')->assign('status',$status);
        self::$registry->getService('template')->assign('message',$msg);
        // RENDER
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/raiffeisen/response.tpl|footer.tpl');
      }
      else
      {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    }
    // VUB
    if(self::$registry->getService('irequest')->isPost())
    {
      $form = self::$registry->getService('irequest')->getPost();

      if((is_array($form) && (count($form) > 0)) &&
        (isset($form['Response']) && isset($form['ErrMsg']) && isset($form['ReturnOid']))
      ) {
        $secureKey = strtolower($form['ReturnOid']);

        if((((string) $form['Response'] === "Approved") && ((bool) $this->hasOrder($secureKey) === true)) &&
          ((bool) self::$registry->getService('store')->isOrderById($form['ReturnOid'], 1) === true)
        ) {
          self::$registry->getService('store')->updateOrderById(array(
            'is_payed' => 1
          ), $this->getOrderIdBySecureKey($secureKey));
        }
        // TEMP. VARS
        self::$registry->getService('template')->assign('response',$form['Response']);
        self::$registry->getService('template')->assign('message',$form['ErrMsg']);
        // RENDER
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/vub_pay/response.tpl|footer.tpl');
      } 
      else 
      {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    }
  }
  
  private function hasOrder( $secureKey = '' )
  {
    return self::$registry->getService('store')->isOrderBySecureKey($secureKey, false);
  }
  
  private function getOrderIdBySecureKey( $secureKey = '' )
  {
    return self::$registry->getService('store')->orderIdBySecureKey($secureKey, false);
  }
  
}