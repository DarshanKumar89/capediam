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

class EmailController {
  
  /** @var Registry */
  protected static $registry;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
  }
  
  public function run( $routeId = 0, $emailKey = '' )
  {
    if(self::$registry->getService('store')->isOfferByEH( $emailKey )) {
      $offer = self::$registry->getService('store')->offerById(
        self::$registry->getService('store')->offerIdByEH( $emailKey )
      );
      if((int) $offer->enabled === 1) {
        $email = self::$registry->getService('store')->emailDataById( $offer->id_email );

        if(is_array($offer->articleList) && (count($offer->articleList) > 0)) {
          $articleList = [];
          
          foreach($offer->articleList as $value) {
            $article = self::$registry->getService('store')->articleDataById( $value->id_article )->lang[ $offer->id_lang ];

            $articleList[] = (object) array(
              'article_name'     => $article->article_name, 
              'description'      => $article->description,
              'former_price'     => $value->former_price,
              'retail_tax_price' => $value->amount,
              'image'            => $value->image,
              'path'             => self::$registry->getService('store')->articlePathById($value->id_article, $offer->id_lang)
            );
          }
          self::$registry->getService('template')->assign('txt',$email->html_content);
          self::$registry->getService('template')->assign('offer',$offer);
          self::$registry->getService('template')->assign('articleList',$articleList);
          self::$registry->getService('template')->display('extends:store/docs/html_offer.tpl');
        } else {
          self::$registry->getService('irequest')->movePage(301,'');
        }
      } else {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
}