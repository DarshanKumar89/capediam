<?php /*%%SmartyHeaderCode:1117565232589088f2a8e365-97435671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcdbc9d3c534eb9e73422b25f06df52ebb4d272b' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_qty.tpl',
      1 => 1469707253,
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
    'e7bd6e95bc35aaa2af9c91ffa3bda2452fae1687' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_qty.tpl',
      1 => 1469707253,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1117565232589088f2a8e365-97435671',
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
  'unifunc' => 'content_589088f31cb5b5_49645397',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589088f31cb5b5_49645397')) {function content_589088f31cb5b5_49645397($_smarty_tpl) {?><!DOCTYPE html>
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
#msA {
  display: none;
  font-size: 1.5em;
  font-weight: 700;
}
.table > thead > tr > th {
  font-size: .9em;
}
.table > tbody > tr > td {
  height: 22px;
  padding: 0 !important;
  font-size: 12px;
  line-height: 100%;
  vertical-align: middle;
  overflow: hidden;
  outline-width: 0;
}
.btn-next[disabled],
.btn-prev[disabled] {
  pointer-events: none;
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
  opacity: .65;
}
.ui-ac-wrapp {
  position: relative;
  min-height: 1px;
  max-height: 189px;
  margin-top: 20px;
  padding-right: 30px;
  overflow-x: hidden;
  overflow-y: auto;
}
.ui-ac-wrapp .profile .profile-image {
  background-color: #fff;
  position: relative;
  float: none;
  width: 100px;
  height: 100px;
  margin: 0 auto;
  border: 3px solid #FFF;
  border-radius: 50%;
  overflow: hidden;
}
.ui-ac-wrapp .profile .profile-image img {
  display: inline-block;
  position: absolute;
  left: 0;
  right: 0;
  width: auto;
  margin: 0 auto;
  border-width: 0;
  border-radius: 0;
}
.ui-ac-wrapp .profile .profile-data .profile-data-title {
  color: #000;
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
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Kornélia Dzurniková">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Kornélia Dzurniková">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">Kornélia&nbsp;Dzurniková</div>
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
    Obchod  </a>
</li>
<li>
  <a href="cpanel/store-warehouse-list" title="Sklady">
    Sklady  </a>
</li>
<li>
  <a href="#" onclick="return false;" title="Správa skladu">
    Správa skladu  </a>
</li>
<li>
  <a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f" title="Nov&aacute; Lesn&aacute;">
    Nov&aacute; Lesn&aacute;
  </a>
</li>
<li>
  <a href="cpanel/store-warehouse-matrix-manage/8ed396ee9b8d44ec20fb15aae672f3cc" title="Správa produktovej matrice">
    Správa produktovej matrice  </a>
</li>
<li>
  <a href="#" onclick="return false;" title="Produktová matrica - množstvá">
    Produktová matrica - množstvá  </a>
</li>
<li class="active">
  <a href="cpanel/store-warehouse-matrix-qty/8ed396ee9b8d44ec20fb15aae672f3cc" title="MATRICA VAGABOND MAN">
    MATRICA&nbsp;/&nbsp;VAGABOND MAN
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">
  <h2>
    <i class="fa fa-database"></i>&nbsp;
    PRODUKTOVÁ MATRICA - MNOŽSTVÁ&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group" style="width: 100%;margin: 0 auto;">
      <div class="input-group">
        <span class="input-group-btn">
          <button type="button" class="btn btn-info">
            <i class="fa fa-search"></i>
          </button>
        </span>
        <input type="text" value="" id="q" class="form-control" placeholder="Hľadaný produkt" autocomplete="off">
      </div><!-- end input-group -->
    </div><!-- end form-group -->
  </div><!-- end col -->
</div><!-- end row -->
<div class="row ui-ac-wrapp" style="margin-bottom: 15px;overflow: hidden;"><!-- --></div>
<div class="row">
  
  <!-- WAREHOUSE MATRIX MANAGE TITLE -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-colorful">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <strong>MATRICA</strong>&nbsp;/&nbsp;VAGABOND MAN
        </h3>
        <ul class="panel-controls">
          <li>
            <a href="cpanel/store-warehouse-matrix-manage/8ed396ee9b8d44ec20fb15aae672f3cc" style="background: #3fbae4 !important;color: #fff;border-color: #3fbae4;" title="MATRICA MNOŽSTVÁ - VAGABOND MAN">
              <i class="fa fa-columns"></i>
            </a>
          </li>
          <li>
            <a href="cpanel/store-warehouse-matrix-qty/c8007b33c3dfcce2f9980ad3da91c747" class="btn-prev" title="WILD JEANS JACKET">
              <i class="fa fa-arrow-left"></i>
            </a>
          </li>
          <li>
            <a href="cpanel/store-warehouse-matrix-qty/3728599fbdfb1456164104019382ee23" class="btn-next" title="ELECTION 2">
              <i class="fa fa-arrow-right"></i>
            </a>
          </li>
        </ul>
      </div><!-- end panel-header -->
      <div class="panel-body panel-body-table">
                  <div class="table-responsive" style="max-height: 690px;border-top: 1px solid #E5E5E5;">
            <table id="mqty" class="table table-bordered table-striped table-actions">
              <thead>
                <tr>
                  <th class="text-center" style="max-width: 200px !important;">#</th>
                                      <th class="text-center">
                      S
                    </th>
                                      <th class="text-center">
                      M
                    </th>
                                      <th class="text-center">
                      L
                    </th>
                                      <th class="text-center">
                      XL
                    </th>
                                      <th class="text-center">
                      2XL
                    </th>
                                    <th class="text-center">
                    SPOLU
                  </th>
                </tr>
              </thead>
              <tbody>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      čierna
                    </th>
                                          <td class="text-center">
                        <input type="text" value="3" class="form-control text-center ipt-qty parAB-1-118" data-paraid="1" data-parbid="118" data-prev-qty="3" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-1-119" data-paraid="1" data-parbid="119" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-1-120" data-paraid="1" data-parbid="120" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-1-121" data-paraid="1" data-parbid="121" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-1-122" data-paraid="1" data-parbid="122" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-1">
                        3
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      melanžov&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="3" class="form-control text-center ipt-qty parAB-4-118" data-paraid="4" data-parbid="118" data-prev-qty="3" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-4-119" data-paraid="4" data-parbid="119" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="5" class="form-control text-center ipt-qty parAB-4-120" data-paraid="4" data-parbid="120" data-prev-qty="5" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="5" class="form-control text-center ipt-qty parAB-4-121" data-paraid="4" data-parbid="121" data-prev-qty="5" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-4-122" data-paraid="4" data-parbid="122" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-4">
                        15
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      kr&aacute;lovsk&aacute; modr&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-6-118" data-paraid="6" data-parbid="118" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-6-119" data-paraid="6" data-parbid="119" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-6-120" data-paraid="6" data-parbid="120" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-6-121" data-paraid="6" data-parbid="121" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-6-122" data-paraid="6" data-parbid="122" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-6">
                        1
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      tmavomodr&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-7-118" data-paraid="7" data-parbid="118" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="3" class="form-control text-center ipt-qty parAB-7-119" data-paraid="7" data-parbid="119" data-prev-qty="3" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="5" class="form-control text-center ipt-qty parAB-7-120" data-paraid="7" data-parbid="120" data-prev-qty="5" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-7-121" data-paraid="7" data-parbid="121" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-7-122" data-paraid="7" data-parbid="122" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-7">
                        9
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      svetlozelen&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-9-118" data-paraid="9" data-parbid="118" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-9-119" data-paraid="9" data-parbid="119" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-9-120" data-paraid="9" data-parbid="120" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-9-121" data-paraid="9" data-parbid="121" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-9-122" data-paraid="9" data-parbid="122" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-9">
                        1
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      tmavohned&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-22-118" data-paraid="22" data-parbid="118" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-22-119" data-paraid="22" data-parbid="119" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-22-120" data-paraid="22" data-parbid="120" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-22-121" data-paraid="22" data-parbid="121" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-22-122" data-paraid="22" data-parbid="122" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-22">
                        1
                      </strong>
                    </th>
                  </tr>
                              </tbody>
              <tfoot>
                <tr>
                  <th class="text-center">
                    SPOLU
                  </th>
                                      <th class="text-center">
                      <strong class="parXV-118">8</strong>
                    </th>
                                      <th class="text-center">
                      <strong class="parXV-119">4</strong>
                    </th>
                                      <th class="text-center">
                      <strong class="parXV-120">10</strong>
                    </th>
                                      <th class="text-center">
                      <strong class="parXV-121">7</strong>
                    </th>
                                      <th class="text-center">
                      <strong class="parXV-122">1</strong>
                    </th>
                                                                                
                  <th class="text-right" >
                    <strong class="mt">30</strong>
                  </th>
                </tr>
              </tfoot>
            </table>
          </div><!-- end table-responsive -->
              </div><!-- end panel-body -->
    </div><!-- end panel -->
  </div><!-- end col -->
  <!-- //-- WAREHOUSE MATRIX MANAGE TITLE -->
  
  <!-- WAREHOUSE MATRIX MANAGE AJAX MESSENGER -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="msA" class="alert alert-info text-center" role="alert">
      Priebieha spracovanie, prosím čakajte...    </div>
  </div><!-- end col -->
  <!-- WAREHOUSE MATRIX MANAGE AJAX MESSENGER -->
  
</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
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
<script type="text/javascript" src="extensions/cpanel/js/ext/matrix.js"></script>
<script type="text/javascript">
  Matrix.init(53,48,'Priebieha spracovanie, prosím čakajte...');
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
