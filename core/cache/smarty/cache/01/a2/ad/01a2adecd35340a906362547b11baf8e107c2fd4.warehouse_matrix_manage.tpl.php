<?php /*%%SmartyHeaderCode:1187061576588efa4c203556-53214415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc59221af60791d58ae00f7daedc5f1e78fbf1fc' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_manage.tpl',
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
    '01a2adecd35340a906362547b11baf8e107c2fd4' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_manage.tpl',
      1 => 1469707253,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1187061576588efa4c203556-53214415',
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
  'unifunc' => 'content_588efa4cc7c3f2_24843834',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa4cc7c3f2_24843834')) {function content_588efa4cc7c3f2_24843834($_smarty_tpl) {?><!DOCTYPE html>
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
#MPA table > tbody > tr > td,
#MPB table > tbody > tr > td {
  cursor:row-resize;
}
.tags {
  margin: 9px auto;
}
.label-info {
  background: #000;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: .9em;
  font-weight: bold;
  line-height: 1;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
.agc {
  background: #000;
  display: block;
  width: 30px;
  height: 30px;
  color: #fff;
  font-size: 2em;
  padding-top: .12em;
  line-height: 100%;
  border-radius: 100%;
}
.circle {
  background: #fff;
  display: block;
  width: 25px;
  height: 25px;
  margin: 0 auto;
  padding: 7px;
  border: 1px solid #333;
  border-radius: 100%;
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
  <a href="#" onclick="return false;" title="Správa produktovej matrice">
    Správa produktovej matrice  </a>
</li>
<li class="active">
  <a href="cpanel/store-warehouse-matrix-manage/66ee7975b50ad12860a73cd5505273b8" title="MATRICA VAGABOND HOODIE MAN">
    MATRICA&nbsp;/&nbsp;VAGABOND HOODIE MAN
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">
  <h2>
    <i class="fa fa-database"></i>&nbsp;
    SPRÁVA PRODUKTOVEJ MATRICE&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
  <!-- WAREHOUSE MATRIX MANAGE TITLE -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-colorful">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <strong>MATRICA</strong>&nbsp;/&nbsp;VAGABOND HOODIE MAN
        </h3>
        <ul class="panel-controls">
          <li>
            <a href="#" onclick="return false;" style="background: #b64645 !important;color: #fff;border-color: #b64645;" data-toggle="modal" data-target="#delWHM" title="DELETA MATRIX">
              <i class="fa fa-exclamation-triangle"></i>
            </a>
          </li>
          <li>
            <a href="cpanel/store-warehouse-matrix-qty/66ee7975b50ad12860a73cd5505273b8" style="background: #3fbae4 !important;color: #fff;border-color: #3fbae4;" title="MATRICA MNOŽSTVÁ - VAGABOND HOODIE MAN">
              <i class="fa fa-table"></i>
            </a>
          </li>
          <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
        </ul>
      </div><!-- end panel-header -->
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
<div id="wmrts" class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
      <input type="hidden" name="matrix-id" value="462" />
      <div class="panel panel-primary">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-cogs"></i>&nbsp;
            PARAMETER - A
          </h3>
          <ul class="panel-controls">
                          <li>
                <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                  3
                </a>
              </li>
                        <li>
              <a href="#" onclick="return false;" id="parAPopUp">
                <span class="fa fa-plus"></span>
              </a>
            </li>
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div id="MPA" class="panel-body panel-body-table">
                      <ul class="tags list-inline">
                              <li>
                  <span class="label label-info" style="background: #a7933e !important;">
                    Bavlnen&eacute; farby
                  </span>
                </li>
                          </ul>
            <div class="table-responsive" style="max-height: 690px;border-top: 1px solid #E5E5E5;">
              <table class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th width="30" class="text-center">
                      #
                    </th>
                    <th width="50" class="text-center">
                      ID
                    </th>
                    <th width="30" class="text-center">
                      AG
                    </th>
                    <th class="text-center">
                      NÁZOV HODNOTY
                    </th>
                    <th width="30" class="text-center">
                      FARBA
                    </th>
                    <th width="100" class="text-center">
                      NAVÝŠENIE
                    </th>
                    <th width="130" class="text-center">
                      HODNOTA
                    </th>
                    <th width="50" class="text-center">
                      ODSTRÁNIŤ                    </th>
                  </tr>
                </thead>
                <tbody>
                                      <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[0]['attr-v-id']" value="4"/>
                        <input type="checkbox" name="parX[0]['on']" value="4" class="x-remove">
                      </td>
                      <td class="text-center">
                        4
                      </td>
                      <td class="text-center">
                        <span class="agc" style="background: #a7933e;">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          melanžov&aacute;
                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: #c4c4c4;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[0]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" selected>Vyberte...</option>
                          <option value="1" >%</option>
                          <option value="2" >+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[0]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="4">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[1]['attr-v-id']" value="6"/>
                        <input type="checkbox" name="parX[1]['on']" value="6" class="x-remove">
                      </td>
                      <td class="text-center">
                        6
                      </td>
                      <td class="text-center">
                        <span class="agc" style="background: #a7933e;">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          kr&aacute;lovsk&aacute; modr&aacute;
                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: #4169e1;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[1]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" selected>Vyberte...</option>
                          <option value="1" >%</option>
                          <option value="2" >+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[1]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="6">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[2]['attr-v-id']" value="7"/>
                        <input type="checkbox" name="parX[2]['on']" value="7" class="x-remove">
                      </td>
                      <td class="text-center">
                        7
                      </td>
                      <td class="text-center">
                        <span class="agc" style="background: #a7933e;">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          tmavomodr&aacute;
                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: #191970;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[2]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" selected>Vyberte...</option>
                          <option value="1" >%</option>
                          <option value="2" >+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[2]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="7">
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
              <i class="fa fa-floppy-o"></i>&nbsp;
              ULOŽIŤ ZMENY            </button>
            <button type="button" id="MPADF" class="btn btn-danger pull-right">
              <i class="fa fa-exclamation-triangle"></i>&nbsp;
              VYMAZAŤ VŠETKO
            </button>
            <button type="button" id="MPADS" class="btn btn-warning pull-right" style="margin-right: 15px;">
              <i class="fa fa-times"></i>&nbsp;
              VYMAZAŤ OZNAČENÉ
            </button>
          </div><!-- end panel-footer -->
              </div><!-- end panel -->
    </form>
  </div><!-- end col -->
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <form action="cpanel/store-warehouse-matrix-update-par-x-vs" method="post" role="form">
      <input type="hidden" name="matrix-id" value="462" />
      <div class="panel panel-primary">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-cogs"></i>&nbsp;
            PARAMETER - B
          </h3>
          <ul class="panel-controls">
                          <li>
                <a href="#" onclick="return false;" style="background: #222 !important;color: #fff;border-color: #222;" title="">
                  4
                </a>
              </li>
                        <li>
              <a href="#" onclick="return false;" id="parBPopUp">
                <span class="fa fa-plus"></span>
              </a>
            </li>
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div id="MPB" class="panel-body panel-body-table">
                      <ul class="tags list-inline">
                              <li>
                  <span class="label label-info" style="background: #272672 !important;">
                    Mužsk&eacute; veľkosti
                  </span>
                </li>
                          </ul>
            <div class="table-responsive" style="max-height: 690px;border-top: 1px solid #E5E5E5;">
              <table class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th width="30" class="text-center">
                      #
                    </th>
                    <th width="50" class="text-center">
                      ID
                    </th>
                    <th width="30" class="text-center">
                      AG
                    </th>
                    <th class="text-center">
                      NÁZOV HODNOTY
                    </th>
                    <th width="30" class="text-center">
                      FARBA
                    </th>
                    <th width="100" class="text-center">
                      NAVÝŠENIE
                    </th>
                    <th width="130" class="text-center">
                      HODNOTA
                    </th>
                    <th width="50" class="text-center">
                      ODSTRÁNIŤ                    </th>
                  </tr>
                </thead>
                <tbody>
                                      <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[0]['attr-v-id']" value="118"/>
                        <input type="checkbox" name="parX[0]['on']" value="118" class="x-remove x-cb">
                      </td>
                      <td class="text-center">
                        118
                      </td>
                      <td class="text-center">
                        <span class="agc" style="background: #272672;">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          S
                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[0]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" selected>Vyberte...</option>
                          <option value="1" >%</option>
                          <option value="2" >+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[0]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="118">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[1]['attr-v-id']" value="119"/>
                        <input type="checkbox" name="parX[1]['on']" value="119" class="x-remove x-cb">
                      </td>
                      <td class="text-center">
                        119
                      </td>
                      <td class="text-center">
                        <span class="agc" style="background: #272672;">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          M
                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[1]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" selected>Vyberte...</option>
                          <option value="1" >%</option>
                          <option value="2" >+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[1]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="119">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[2]['attr-v-id']" value="120"/>
                        <input type="checkbox" name="parX[2]['on']" value="120" class="x-remove x-cb">
                      </td>
                      <td class="text-center">
                        120
                      </td>
                      <td class="text-center">
                        <span class="agc" style="background: #272672;">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          L
                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[2]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" selected>Vyberte...</option>
                          <option value="1" >%</option>
                          <option value="2" >+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[2]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="120">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center">
                        <input type="hidden" name="parX[3]['attr-v-id']" value="121"/>
                        <input type="checkbox" name="parX[3]['on']" value="121" class="x-remove x-cb">
                      </td>
                      <td class="text-center">
                        121
                      </td>
                      <td class="text-center">
                        <span class="agc" style="background: #272672;">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        <strong>
                          XL
                        </strong>
                      </td>
                      <td class="text-center">
                        <span class="circle" style="background: #FFFFFF;"><!-- --></span>
                      </td>
                      <td class="text-center">
                        <select name="parX[3]['cdt']" style="display: inline-block;width: 100%;">
                          <option value="0" selected>Vyberte...</option>
                          <option value="1" >%</option>
                          <option value="2" >+</option>
                        </select>
                      </td>
                      <td class="text-right">
                        <div class="form-group upd-m-qty pull-left" style="width:100%;">
                          <input type="text" name="parX[3]['cdv']" value="0.00" class="form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                        </div><!-- end form-group -->
                      </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-danger push-x" data-attr-v-id="121">
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
              <i class="fa fa-floppy-o"></i>&nbsp;
              ULOŽIŤ ZMENY            </button>
            <button type="button" id="MPBDF" class="btn btn-danger pull-right">
              <i class="fa fa-exclamation-triangle"></i>&nbsp;
              VYMAZAŤ VŠETKO
            </button>
            <button type="button" id="MPBDS" class="btn btn-warning pull-right" style="margin-right: 15px;">
              <i class="fa fa-times"></i>&nbsp;
              VYMAZAŤ OZNAČENÉ
            </button>
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
        
<!-- MODAL WINDOW WAREHOUSE PRODUCT MATRIX MANAGE -->
<div class="modal" id="whMatrixModal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW WAREHOUSE PRODUCT MATRIX MANAGE -->

<!-- MODAL WINDOW DELETE WAREHOUSE PRODUCT MATRIX -->                       
<div class="modal" id="delWHM" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
      <div class="modal-body" style="background-color:transparent;">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="cpanel/store-warehouse-matrix-delete" method="post" class="form-horizontal" role="form">
              <input type="hidden" name="m-id" value="462" />
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <strong>
                      ZMAZAŤ NAVŽDY?                    </strong> 
                  </h3>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                  <h4 style="margin: 15px 0;">
                    <strong>
                      Upozornenie: nie je možné vrátiť späť túto akciu.                    </strong>
                  </h4>
                </div><!-- end panel-body -->
                <div class="panel-footer">                                 
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-exclamation-triangle"></i>&nbsp;
                    ZMAZAŤ NAVŽDY                  </button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                    ZAVRIEŤ                  </button>
                </div>
              </div><!-- end panel -->
            </form>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end modal-body -->
    </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW DELETE WAREHOUSE PRODUCT MATRIX -->

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
  Matrix.init(462,'Priebieha spracovanie, prosím čakajte...');
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
