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

class OfferController {
  
  /** @var Registry */
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run()
  {
    self::$registry->getService('irequest')->movePage(301,'');
  }
  
  public function buy( $offerKey = '' )
  {
    if((strlen($offerKey) > 0) && self::$registry->getService('store')->isOfferByHash( $offerKey )) {
      $userId = self::$registry->getService('controller')->getUserId();
      $offer  = self::$registry->getService('store')->offerById(
        self::$registry->getService('store')->offerIdByHash( $offerKey )
      );
      if((((int) $offer->enabled === 1) && ((int) $offer->allow_buy === 1)) &&
        (((int) $offer->is_buy_enabled === 0) || ((int) $offer->is_buy_closed === 0))        
      ) {
        if((bool) $this->__offerDateVerify($offer->date_from, $offer->date_until) === true) {
          if(is_array($offer->articleList) && (count($offer->articleList) > 0)) {
            $cartId = self::$registry->getService('store')->createCartByOffer(
              $offer->articleList,
              $offer->id_offer,
              $offer->id_currency,
              $offer->id_tax,
              $userId
            );
            if(self::$registry->getService('store')->isCartById( $cartId )) {
              if(self::$registry->getService('store')->updateOfferById(array(
                'id_user'        => $userId,
                'is_buy_enabled' => 1,
                'allow_buy'      => 0,
                'enabled'        => 0,
                'cart_date'      => date("Y-m-d H:i:s")
              ), $offer->id_offer)
            ) {
              self::$registry->getService('irequest')->movePage(301,'kosik');
            } else {
              throw new Exception('Updates offers ended in error.', 402);
            }
            } else {
              throw new Exception('Shopping cart has been not created.', 402);
            }       
          } else {
            throw new Exception('Offer does not contain any items.', 402);
          }
        } else {
          throw new Exception('Offer valid timed out.', 402);
        }
      } else {
        throw new Exception('Offer has already been applied or can not apply.', 402);
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __offerDateVerify( $from = '', $until = '' )
  {
    $obj = (object) array(
      'today_dt' => new DateTime('NOW'),
      'from_dt'  => (self::$registry->getService('helper')->validateDate( $from )) ? new DateTime( $from ) : null,
      'until_dt' => (self::$registry->getService('helper')->validateDate( $until )) ? new DateTime( $until ) : null,
    );
    if(is_null( $obj->from_dt ) && is_null( $obj->until_dt )) {
      return true;
    } else if(!is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) {
      return (($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) && ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d"))) ? true : false;
    } else if(is_null( $obj->from_dt ) && !is_null( $obj->until_dt )) {
      return ($obj->today_dt->format("Y-m-d") <= $obj->until_dt->format("Y-m-d")) ? true : false;
    } else if(!is_null( $obj->from_dt ) && is_null( $obj->until_dt )) {
      return ($obj->today_dt->format("Y-m-d") >= $obj->from_dt->format("Y-m-d")) ? true : false;
    } else {
      return false;
    }
  }
  
}