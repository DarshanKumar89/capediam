<?php /*%%SmartyHeaderCode:11535231405842d8ebb34339-78398107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a2fdd57e42aa335b0772629500b1c096ce85814' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/delivery-payment/ties/delivery_payment_ties.tpl',
      1 => 1474276416,
      2 => 'file',
    ),
    '2348aeb5e8989dd42b1116d7d8b299e32f80f818' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1474392201,
      2 => 'file',
    ),
    'bc141a49c252a4eeea1dde78a0f97783d71068f6' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469707230,
      2 => 'file',
    ),
    'e51d5b8d3d43e32ecc2964ed866028e3e2ecf35c' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/delivery-payment/ties/delivery_payment_ties.tpl',
      1 => 1474276416,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '11535231405842d8ebb34339-78398107',
  'variables' => 
  array (
    'baseUrl' => 0,
    'defaultLanguage' => 0,
    'global_section_home' => 0,
    'global_section_dashboard' => 0,
    'global_button_sign_out' => 0,
    'global_button_yes' => 0,
    'global_button_no' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5842d8ec4e5a98_55853927',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5842d8ec4e5a98_55853927')) {function content_5842d8ec4e5a98_55853927($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://www.carpedmfashion.com" />
        <!-- META SECTION -->
        <title>Cpanel</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/css/theme-default.css"/>
        <link type="text/css" rel="stylesheet" href="extensions/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="extensions/bootstrap-flags/css/flag-icon.min.css"/>
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.structure.css"/>
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.theme.css"/>
        
<style>
.badge {
    position: relative;
    top: -3px;
    left: 5px;
}
</style>

        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                
<ul class="x-navigation" style="margin-bottom:98px;">
  <li class="xn-logo">
    <a href="cpanel">
      <img src="extensions/cpanel/img/mozayc.png" style="display: block;width: auto;height: 48px;margin: 0 auto;"/>
    </a>
    <a href="#" onclick="return false;" class="x-navigation-control"><!-- --></a>
  </li>
  <li class="xn-profile">
    <a href="cpanel" class="profile-mini">
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt=" ">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt=" ">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">&nbsp;</div>
      </div>
    </div>                                                                        
  </li>
  <li>
    <a href="cpanel" title="Panel">
      <i class="fa fa-dashboard"></i>
      <span class="xn-text">
        Panel      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/site-structure" title="Štruktúra webu">
      <i class="fa fa-sitemap"></i>
      <span class="xn-text">
        Štruktúra webu      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/page-list" title="Stránky">
      <i class="fa fa-file-text-o"></i>
      <span class="xn-text">
        Stránky      </span>
    </a>                        
  </li>
  <li class="xn-openable" style="display:none;visibility: hidden !important;">
    <a href="cpanel/cpanel/catalog" onclick="return false;" title="Katalóg">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Katalóg      </span>
    </a>
    <ul>
      <li>
        <a href="cpanel/catalog" title="Catalog - Overview">
          <i class="fa fa-eye"></i>
          Prehľad        </a>
      </li>
      <li>
        <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
          <i class="fa fa-plus"></i>
          Nový artikel        </a>
      </li>
      <li>
        <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
          <i class="fa fa-info"></i>
          Spravovať kategórie        </a>
      </li>
      <li>
        <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
          <i class="fa fa-tag"></i>
          Spravovať atribúty        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="cpanel/my-drive" title="MMôj Disk">
      <i class="fa fa-hdd-o"></i>
      <span class="xn-text">
        Môj Disk      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/slider-list" title="Reklamné bannery">
      <i class="fa fa-camera"></i>
      <span class="xn-text">
        Reklamné bannery      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/gallery-list" title="Galéria">
      <i class="fa fa-picture-o"></i>
      <span class="xn-text">
        Galéria      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/language-list" title="Jazyky">
      <i class="glyphicon glyphicon-globe"></i>
      <span class="xn-text">
        Jazyky      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/dictionary-list" title="Slovník">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Slovník      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/seo-redirect-list" title="SEO REDIRECT">
      <i class="fa fa-link"></i>
      <span class="xn-text">
        SEO Redirect      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/translate" title="Preklady">
      <i class="fa fa-table" aria-hidden="true"></i>
      <span class="xn-text">
        Preklady
      </span>
    </a>                        
  </li>
  <li data-menu-item="users">
    <a href="cpanel/store/users" title="Uživatelia">
      <i class="fa fa-users"></i>
      Uživatelia    </a>
  </li>
  <li data-menu-item="carts">
    <a href="cpanel/store/carts" title="Košíky">
      <i class="fa fa-shopping-cart"></i>
      Košíky    </a>
  </li>
  <li class="xn-openable" data-menu-item="orders">
    <a href="cpanel/store/orders" title="Objednávky">
      <i class="fa fa-clipboard"></i>
      Objednávky    </a>
    <ul>
      <li data-menu-item="list">
        <a href="cpanel/store/orders" title="List">
          <span class="fa fa-circle"></span>
          Prehľad        </a>
      </li>
      <li data-menu-item="management">
        <a href="cpanel/store/orders/management/short" title="Management">
          <span class="fa fa-circle"></span>
          Správa        </a>
      </li>
    </ul>
  </li>
  <li class="xn-openable" data-menu-item="catalog">
    <a href="#" onclick="return false;" title="Katalóg">
      <span class="fa fa-book"></span>
      Katalóg    </a>
    <ul>
      <li data-menu-item="articles">
        <a href="cpanel/store/catalog/articles/short" title="Artikle">
          <span class="fa fa-circle"></span>
          Artikle        </a>
      </li>
      <li data-menu-item="store-category-list">
        <a href="cpanel/store-category-list" title="Kategórie">
          <span class="fa fa-circle"></span>
          Kategórie        </a>
      </li>
      <li data-menu-item="store-attribute-list">
        <a href="cpanel/store-attribute-list" title="Atribúty">
          <span class="fa fa-circle"></span>
          Atribúty        </a>
      </li>
      <li data-menu-item="ordering">
        <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
          <span class="fa fa-circle"></span>
          Usporiadanie        </a>
      </li>
    </ul>
  </li>
  <li data-menu-item="thumbnail">
    <a href="cpanel/thumbnail" title="Thumbnail">
      <i class="fa fa-picture-o" aria-hidden="true"></i>
      Thumbnail    </a>
  </li>
  <li data-menu-item="warehouse">
    <a href="cpanel/store-warehouse-list" title="Sklady">
      <i class="fa fa-database"></i>
      Sklady    </a>
  </li>
  <li data-menu-item="statuses">
    <a href="cpanel/store/statuses" title="Stavy">
      <i class="fa fa-heartbeat"></i>
      Stavy    </a>
  </li>
  <li class="xn-openable" data-menu-item="delivery-payment">
    <a href="#" onclick="return false;" title="Doručovanie / Platby">
      <i class="fa fa-pencil-square"></i>
      Doručovanie / Platby    </a>
    <ul>
      <li data-menu-item="delivery">
        <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
          <i class="fa fa-truck"></i>
          Doručovanie        </a>
      </li>
      <li data-menu-item="payment">
        <a href="cpanel/store/delivery-payment/payment" title="Platby">
          <i class="fa fa-usd"></i>
          Platby        </a>
      </li>
      <li data-menu-item="ties">
        <a href="cpanel/store/delivery-payment/ties" title="Väzby">
          <i class="fa fa-exchange"></i>
          Väzby        </a>
      </li>
   </ul>
  </li>
  <li class="xn-openable" data-menu-item="localization">
    <a href="#" onclick="return false;" title="Lokalizácia">
      <span class="fa fa-globe"></span>
      Lokalizácia    </a>
    <ul>
      <li data-menu-item="currencies">
        <a href="cpanel/store/localization/currencies" title="Meny">
          <span class="fa fa-circle"></span>
          Meny        </a>
      </li>
      <li data-menu-item="taxes">
        <a href="cpanel/store/localization/taxes" title="Dane">
          <span class="fa fa-circle"></span>
          Dane        </a>
     </li>
   </ul>
  </li>
  <li data-menu-item="offers">
    <a href="cpanel/store/offers" title="Ponuky">
      <i class="fa fa-sticky-note-o"></i>
      Ponuky    </a>
  </li>
  <li data-menu-item="discount-circuits">
    <a href="cpanel/store-discount-circuit-list" title="Zľavové okruhy">
      <i class="fa fa-circle-o-notch"></i>
      Zľavové okruhy    </a>
  </li>
  <li data-menu-item="email">
    <a href="cpanel/email-list">
      <i class="fa fa-envelope"></i>
      Email
    </a>
  </li>
  <li data-menu-item="store-product-statistics-overview">
    <a href="cpanel/store-product-statistics-overview" title="Product Statistics">
      <i class="fa fa-bar-chart"></i>
      Štatistiky produktov
    </a>
  </li>
  <li style="display: none;">
    <a href="cpanel/manage-users" title="Správa uživateľov">
      <i class="fa fa-users" aria-hidden="true"></i>
      <span class="xn-text">
        Správa uživateľov
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/general-settings" title="Hlavné nastavenia">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        Hlavné nastavenia      </span>
    </a>                        
  </li>
  </ul>

                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="cpanel" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                   
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="cpanel" class="mb-control" data-box="#mb-signout" title="Sign Out">
                            <span class="fa fa-power-off"></span>
                        </a>
                        <ul class="xn-drop-left animated zoomIn" style="display:none;visibility: hidden !important;">
                            <li><a href="cpanel" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                    <!-- LANG BAR -->
                    <li class="xn-icon-button pull-right">
                        <a href="cpanel" style="height: 50px;padding: 11px 0;" title="Slovak">
                                                            <span class="flag-icon flag-icon-sk" style="width:18px;height:18px;"></span>
                                                    </a>
                        <ul class="xn-drop-left xn-drop-white animated zoomIn">
                            <li>
                                <a href="cpanel/set-lang/51" title="English">
                                    <span class="flag-icon flag-icon-gb" style="width:18px;height:18px;"></span>
                                    <span style="position:relative;top:3px;left:3px;">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/set-lang/189" title="Slovak">
                                    <span class="flag-icon flag-icon-sk" style="width:18px;height:18px;"></span>
                                    <span style="position:relative;top:3px;left:3px;">Slovak</span>
                                </a>
                            </li>
                        </ul>                        
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li>
                        <a href="cpanel" title="Domov">
                            Domov                        </a>
                    </li>
                    
<li>
    <a href="#" onclick="return false;" title="Obchod">
        Obchod    </a>
</li>
<li class="active">
    <a href="cpanel/store/delivery-payment/ties" title="DELIVERY-PAYMENT TIES">
        DELIVERY-PAYMENT TIES    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-exchange"></i>&nbsp;
            DELIVERY-PAYMENT TIES&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                 <div class="form-group">
                    <label>DELIVERY LIST</label>                                        
                    <select id="deliveryList" name="delivery-id" class="form-control select" data-live-search="true" onchange="location = 'cpanel/store/delivery-payment/ties/'+this.options[this.selectedIndex].value;" required="">
                        <option value="0">Vyberte...</option>
                                                    <option value="1" >Osobn&yacute; odber - Bratislava</option>
                                                    <option value="2" >Osobn&yacute; odber - Bratislava</option>
                                                    <option value="3" selected>Kuri&eacute;r</option>
                                                    <option value="4" >Dobierka</option>
                                                    <option value="5" >Dobierka kuri&eacute;rom</option>
                                                    <option value="6" >Osobn&yacute; odber - CarpeDM Nov&aacute; Lesn&aacute;</option>
                                                    <option value="7" >DHL Express Italy</option>
                                                    <option value="8" >Collezione personale - CarpeDM Merano</option>
                                            </select>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="margin-top:25px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <form action="cpanel/store/delivery-payment/ties/save" method="post" role="form">
                        <input type="hidden" name="delivery-id" value="3"/>
                        <div class="panel panel-default">
                            <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title">
                                    DELIVERY - PAYMENT LIST                                </h3>
                                <ul class="panel-controls">
                                    <li>
                                        <a href="#" onclick="return false;" data-toggle="modal" data-target="#modal_payment_list">
                                            <span class="fa fa-plus"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="return false;" class="panel-collapse">
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                    </li>
                                </ul>                                
                            </div><!-- end panel-heading -->
                            <div class="panel-body panel-body-table">
                                <div class="table-responsive">
                                    <table id="delivery-payment" class="table table-bordered table-striped table-actions">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="50">#</th>
                                                <th class="text-left">
                                                    PAYMENT NAME                                                </th>
                                                <th class="text-center">
                                                    LANGUAGE                                                </th>
                                                <th class="text-center">
                                                    CURRENCY                                                </th>
                                                <th class="text-center">
                                                    COST                                                </th>
                                                <th width="200" class="text-center">
                                                    ODSTRÁNIŤ                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                                                                <tr data-an="3">
                                                        <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                            <input type="hidden" name="paymentList[1]['payment-id']" value="3">
                                                            1
                                                        </td>
                                                        <td class="text-left">
                                                            <strong>Platba kartou online </strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                            &nbsp;
                                                        </td>
                                                        <td class="text-center">
                                                            Euro&nbsp;(&euro;)
                                                        </td>
                                                        <td class="text-right">
                                                            <strong>0.00&euro;</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                                &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                                                                                                    </tbody>
                                    </table>
                                </div><!-- end table-responsive -->
                            </div><!-- end panel-body -->
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                                </button>
                            </div><!-- end panel-footer -->
                        </div><!-- end panel -->
                    </form>
                            </div><!-- end col -->
        </div><!-- end row -->
    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- PAYMENT LIST -->                          
<div class="modal" id="modal_payment_list" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                                                    <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            PAYMENT LIST                            &nbsp;<span class="badge">6</span>
                        </h3>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive" style="padding:9px;">
                            <table id="paymentList" class="table table-bordered table-striped table-actions datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="50">#</th>
                                        <th class="text-left">
                                            PAYMENT NAME                                        </th>
                                        <th class="text-center">
                                            LANGUAGE                                        </th>
                                        <th class="text-center">
                                            CURRENCY                                        </th>
                                        <th class="text-center">
                                            COST                                        </th>
                                        <th width="200" class="text-center">
                                            PRIDAŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr data-an="1">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">1</td>
                                            <td class="text-left">
                                                <strong>Platba v hotovosti</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-payment-id="1" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-an="2">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">2</td>
                                            <td class="text-left">
                                                <strong>Bankov&yacute; prevod</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-payment-id="2" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-an="3">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">3</td>
                                            <td class="text-left">
                                                <strong>Platba kartou online </strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-payment-id="3" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-an="4">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">4</td>
                                            <td class="text-left">
                                                <strong>Pagamento con carta di credito</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-payment-id="4" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-an="5">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">5</td>
                                            <td class="text-left">
                                                <strong>Pagamento in contanti</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-payment-id="5" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-an="6">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">6</td>
                                            <td class="text-left">
                                                <strong>S&uacute;ťaž</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-payment-id="6" class="btn btn-success push-a">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </tbody>
                         </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            ZAVRIEŤ                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
                                            </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div>
    </div>
</div>  

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span>Odhlásiť sa?</div>
                    <div class="mb-footer">
                        <div class="pull-left">
                            <a href="cpanel/sign/out" class="btn btn-success btn-lg">
                                Áno                            </a>
                            <button class="btn btn-default btn-lg mb-control-close">
                                Nie                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="extensions/cpanel/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="extensions/cpanel/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="extensions/cpanel/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="extensions/bootstrap/js/bootstrap-ckeditor-modal-fix.js"></script>       
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type="text/javascript" src="extensions/cpanel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="extensions/cpanel/js/plugins/datatables/jquery.dataTables.min.js"></script>
        
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript">
$(function(){
    $('#paymentList').find('button.push-a').each(function() {
        $(this).on('click',function() {
            var tr = $('#paymentList').find('[data-an="'+$(this).data('payment-id')+'"]'),
            
               obj = {
                rNum: tr.find('td').get(0).textContent,
                name: tr.find('td').get(1).textContent,
                lang: tr.find('td').get(2).innerHTML,
                curr: tr.find('td').get(3).textContent,
                cost: tr.find('td').get(4).innerHTML
               };
               
            pushPaymentMethodToTable( $(this).data('payment-id'), obj );
        });
    });
    
    function pushPaymentMethodToTable( id, obj ) {
        var oTable = $('#delivery-payment');
        var isElm  = (oTable.find('[data-an="'+id+'"]').length > 0) ? true : false;
        
        if(!isElm) {
            var appendRow = '<tr data-an="'+id+'">' +
                            '<td class="text-center" style="font-weight:700;color:#660000;"><input type="hidden" name="paymentList['+obj.rNum+'][\'payment-id\']" value="'+id+'">'+obj.rNum+'</td>' +
                            '<td class="text-left" style="font-weight:700;">'+obj.name+'</td>' +
                            '<td class="text-center">'+obj.lang+'</td>' +
                            '<td class="text-center">'+obj.curr+'</td>' +
                            '<td class="text-center">'+obj.cost+'</td>' +
                            '<td class="text-center"><button type="button" onClick="$(this).closest(\'tr\').remove();" class="btn btn-warning">&nbsp;&nbsp;<span class="fa fa-minus"></span></button></td></tr>';
            oTable.append(appendRow);
       }
    }
});
</script>

        <!-- END THIS PAGE PLUGINS-->       
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="extensions/cpanel/js/plugins.js"></script>        
        <script type="text/javascript" src="extensions/cpanel/js/actions.js"></script>
        <!-- END TEMPLATE -->
        <script type="text/javascript">
          $(function() {
              var parameters = window.location.href.substr(1).split('/');

              for( var i=0; i < parameters.length; i++) {
                  $('ul.x-navigation').find('li').each(function() {
                      if($(this).data('menu-item') == parameters[i]) {
                          $(this).addClass('active');
                      }
                  });
              }
          });
        </script>
    <!-- END SCRIPTS -->         
    </body>
</html><?php }} ?>
