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

return array (
  // ENGLISH
  51 => (object) array(
    'keys' => array(
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
    ),
    'actions' => array(
      'create-order'  => 'order/create',
      'shopping-cart' => 'cart'
    ),
    'order_links' => array(
      1 => 'order/delivery-and-payment',
      2 => 'order/address-book',
      3 => 'order/order-summary-and-last-review'
    ),
    'form_links' => array(
      1 => 'order/delivery-and-payment/select',
      2 => (object) array(
        'prs'  => 'order/address-book/process',
        'edit' => 'order/address-book/edit',
        'save' => 'order/address-book/save',
        'rm'   => 'order/address-book/delete'
      ),
      3 => 'order/close'  
    )
  ),
  // SLOVAK
  189 => (object) array(
    'keys' => array(
      // COMMANDS
      'vytvorit'  => 0,
      'vyber'     => 1,
      'spracovať' => 1,
      'upravit'   => 2,
      'ulozit'    => 3,
      'uzavriet'  => 4,
      'odstranit' => 4,
      // ORDER STEPS
      'dorucenie-a-platba' => 1,
      'adresar'            => 2,
      'sumarizacia-objednavky-a-posledna-kontrola' => 3,
      // CUSTOMER ACCOUNT
      'historia-objednavok'   => 2,
      'detail-objednavky'     => 5,
      'duplikovat-objednavku' => 6,
      'faktura'               => 7
    ),
    'actions' => array(
      'create-order'  => 'objednavka/vytvorit',
      'shopping-cart' => 'nakupna-taska'
    ),
    'order_links' => array(
      1 => 'objednavka/dorucenie-a-platba',
      2 => 'objednavka/adresar',
      3 => 'objednavka/sumarizacia-objednavky-a-posledna-kontrola'
    ),
    'form_links' => array(
      1 => 'objednavka/dorucenie-a-platba/vyber',
      2 => (object) array(
        'prs'  => 'objednavka/adresar/spracovať',
        'edit' => 'objednavka/adresar/upravit',
        'save' => 'objednavka/adresar/ulozit',
        'rm'   => 'objednavka/adresar/odstranit'
      ),
      3 => 'objednavka/uzavriet'  
    )
  ),
  // ITALY 
  120 => (object) array(
    'keys' => array(
      // COMMANDS
      'creare'      => 0,
      'selezionare' => 1,
      'processo'    => 1,
      'modificare'  => 2,
      'salvare'     => 3,
      'chiudere'    => 4,
      'rimuovere'   => 4,
      // ORDER STEPS
      'consegna-e-pagamento' => 1,
      'indirizzario'         => 2,
      'riepilogo-ordini-e-ultimo-controllo' => 3,
      // CUSTOMER ACCOUNT
      'cronologia-ordini' => 2,
      'dettaglio-ordini'  => 5,
      'duplicato-ordini'  => 6,
      'fattura'           => 7
    ),
    'actions' => array(
      'create-order'  => 'ordine/creare',
      'shopping-cart' => 'carrello'
    ),
    'order_links' => array(
      1 => 'ordine/consegna-e-pagamento',
      2 => 'ordine/indirizzario',
      3 => 'ordine/riepilogo-ordini-e-ultimo-controllo'
    ),
    'form_links' => array(
      1 => 'ordine/consegna-e-pagamento/selezionare',
      2 => (object) array(
        'prs'  => 'ordine/indirizzario/processo',
        'edit' => 'ordine/indirizzario/modificare',
        'save' => 'ordine/indirizzario/memorizzare',
        'rm'   => 'ordine/indirizzario/cancellare'
      ),
      3 => 'ordine/chiudere'  
    )
  ),
);