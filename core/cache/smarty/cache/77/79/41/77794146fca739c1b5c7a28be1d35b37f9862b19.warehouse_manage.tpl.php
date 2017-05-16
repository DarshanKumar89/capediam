<?php /*%%SmartyHeaderCode:91708681558908a728e7e15-10039757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f867b8da7c4d7cf361ce45ad6caef7f002d3286' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_manage.tpl',
      1 => 1469707252,
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
    '77794146fca739c1b5c7a28be1d35b37f9862b19' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_manage.tpl',
      1 => 1469707252,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '91708681558908a728e7e15-10039757',
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
  'unifunc' => 'content_58908a732bc429_70933767',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58908a732bc429_70933767')) {function content_58908a732bc429_70933767($_smarty_tpl) {?><!DOCTYPE html>
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
.alert-default {
  background-color: #F5F5F5;
  border-color: #DDD;
}
.c-c-a-r {
  display: none;
}
.circle-indicator {
  position:relative;
  display: inline-block;
  float: left;
  width: 23px;
  height: 23px;
  margin-top: 4px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  color: #fff;
  border-radius: 100%;
}
.circle-indicator.center > i {
  position: relative;
  top: -1px;
  left: .5px;
}
.circle-indicator > i {
  position: relative;
  top: -2.3px;
  left: 0px;
  font-size: 1.3em;
  line-height: 24px;
}
.badge {
  background: #000000;
  position: relative;
  top: -1px;
  left: 5px;
  font-size: 11px;
  line-height: 20px;
  font-weight: 500;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  padding: 0px 8px;
}
a.price-dev-list {
  font-size: 1.2em;
  color: #990000;
}
a.price-dev-list .fa {
  display: none;
}
a.price-dev-list:hover {
  text-decoration: underline;
  color: #990000;
}
a.price-dev-list:hover .fa {
  display: inline-block;
}
.warning-info {
  background: #1b1e24;
  position: relative;
  display: none;
  border-radius: 5px;
  margin-top: 5px;
  padding: 5px 15px;
  overflow: hidden;
}
.warning-info p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  word-break: break-word;
  white-space: normal;
}
.warning-info p strong {
  display: block;
}
.warning-info p strong span.total {
  padding: 0 3.5px;
  font-size: 1.7em;
  line-height: 1.9em;
  color: red;
}
.warning-info .btn-group {
  position: relative;
  display: block;
  vertical-align: middle;
  margin: 0 auto 10px auto;
  float: none;
  width: 105px !important;
  overflow: hidden;
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
<li class="active">
  <a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f" title="Nov&aacute; Lesn&aacute;">
    Nov&aacute; Lesn&aacute;
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">
  <h2>
    <i class="fa fa-database"></i>&nbsp;
    SPRÁVA SKLADU&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
  <!-- WAREHOUSE TITLE -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-colorful">
      <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">
          <strong>Nov&aacute; Lesn&aacute;</strong>&nbsp;/&nbsp;V7SPVVDINS0I
        </h3>
        <ul class="panel-controls">
          <li>
            <a href="cpanel/warehouse-manage-expedition-time/2c16f1ef5d2af438a8dce841743a194f" title="Warehouse expedition time">
              <i class="fa fa-clock-o" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div><!-- end panel-header -->
    </div><!-- end panel -->
  </div><!-- end col -->
  <!-- //-- WAREHOUSE TITLE -->
  
  <!-- WAREHOUSE AJAX MESSENGER -->
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="msA" class="alert alert-info text-center" role="alert">
      Priebieha spracovanie, prosím čakajte...    </div>
  </div><!-- end col -->
  <!-- WAREHOUSE AJAX MESSENGER -->
  
  <!-- WAREHOUSE ARTICLE LIST -->
  <div id="plpt">
    <form action="cpanel/store-warehouse-update-article-list" method="post" role="form">
      <input type="hidden" name="whId" value="5"/>
      <input type="hidden" name="sort" value="0"/>
      <input type="hidden" name="page" value="1"/>
      <input type="hidden" name="limit" value="10"/>
      <input type="hidden" name="keywords" value=""/>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <span class="btn btn-info" style="margin: 0 15px;">334</span>
              ZOZNAM ARTIKLOV              &nbsp;<span class="badge">Zobrazených 1-10 z 334 záznamov</span>            </h3>
            <ul class="panel-controls">
              <li>
                <a href="#" onclick="return false;" id="a-o-a-l" title="Article List">
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
                          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                  <div class="form-group pull-left" style="width:150px;margin-right:5px;">
                    <select id="c-control" class="form-control select">
                      <option value="0">Vyberte...</option>
                      <option value="99">
                        Oznažiť všetko
                      </option>
                      <option value="88">
                        Odznažiť všetko
                      </option>
                    </select>
                  </div>
                  <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                    <select class="form-control select" onchange="location = 'cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/'+this.options[this.selectedIndex].value+'/1/10';">
                      <option value="0" selected>Možnosťi zoradenia...</option>
                      <option value="1" >Názov produktu: od A po Z</option>
                      <option value="2" >Názov produktu: od Z po A</option>
                      <option value="3" >Ceny: od najnižšej</option>
                      <option value="4" >Ceny: od najvyššej</option>
                      <option value="5" >Pridané produkty: vzostupne</option>
                      <option value="6" >Pridané produkty: zostupne</option>
                      <option value="7" >Naposledy aktualizované: vzostupne</option>
                      <option value="8" >Naposledy aktualizované: zostupne</option>
                    </select>
                  </div><!-- end form-group -->
                  <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                    <select class="form-control select" onchange="location = 'cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/1/'+this.options[this.selectedIndex].value;">
                      <option value="10" selected>10</option>
                      <option value="20" >20</option>
                      <option value="50" >50</option>
                      <option value="100" >100</option>
                      <option value="200" >200</option>
                      <option value="500" >500</option>
                    </select>
                  </div>
                  <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                    <div class="input-group">
                      <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" onclick="location = 'cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                              <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                  </div>
                  <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/1/10">1</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/2/10">2</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/3/10">3</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/4/10">4</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/5/10">5</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/34/10">34</a></li><li class=""><a href="cpanel/store-warehouse-manage/2c16f1ef5d2af438a8dce841743a194f/0/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                <table id="whAL" class="table table-bordered table-striped table-actions">
                  <thead>
                    <tr>
                      <th width="30" class="text-center">
                        #
                      </th>
                      <th width="30" class="text-center">
                        OBRÁZOK                      </th>
                      <th width="200" class="text-center">
                        SKU                      </th>
                      <th class="text-left" style="min-width: 300px;">
                        NÁZOV ARTIKLU                      </th>
                      <th width="150" class="text-center">
                        RRP
                      </th>
                      <th width="150" class="text-center">
                        ROZDIEL
                      </th>
                      <th width="150" class="text-center">
                        ZÁKLADNÁ CENA                      </th>
                      <th width="150" class="text-center">
                        DAŇ
                      </th>
                      <th width="150" class="text-center">
                        MALOOBCHODNÁ CENA                      </th>
                      <th width="150" class="text-center">
                        MNOŽSTVO (KS)                      </th>
                      <th width="150" class="text-center">
                        MATRICA
                      </th>
                      <th width="150" class="text-center">
                        EDITOVAŤ ARTIKEL
                      </th>
                      <th width="100" class="text-center">
                        ZVEREJNIŤ                      </th>
                      <th width="100" class="text-center">
                        ODSTRÁNIŤ                      </th>
                    </tr>
                  </thead>
                  <tbody>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[0]['article-id']" value="1"/>
                          <input type="checkbox" name="whAL[0]['on']" value="1" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="files/3f96609759809db2d8a0dedc99e85c1a.png" height="35" alt="WANT HOODIE_4"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100001</strong>
                        </td>
                        <td class="text-left">
                          WANT HOODIE
                        </td>
                        <td class="text-right indicator">
                          <strong>58.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>48.33&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>9.67&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              58.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>7</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/9dc89da8810c414fd90724993273bbaf" class="btn btn-info" title="WANT HOODIE - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/1" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[0]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="1" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[1]['article-id']" value="2"/>
                          <input type="checkbox" name="whAL[1]['on']" value="2" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-center">
                          <strong>100002</strong>
                        </td>
                        <td class="text-left">
                          WANT
                        </td>
                        <td class="text-right indicator">
                          <strong>0.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>0.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>0.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              0.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>14</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/2ad33e65672ae4982b1643828cab1348" class="btn btn-info" title="WANT - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/2" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[1]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="2" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[2]['article-id']" value="3"/>
                          <input type="checkbox" name="whAL[2]['on']" value="3" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-center">
                          <strong>100003</strong>
                        </td>
                        <td class="text-left">
                          WANT HOODIE VELOUR
                        </td>
                        <td class="text-right indicator">
                          <strong>58.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>48.33&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>9.67&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              58.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>3</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/d120a48c634bc3b54a1af5ae5ec1bd75" class="btn btn-info" title="WANT HOODIE VELOUR - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/3" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[2]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="3" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[3]['article-id']" value="4"/>
                          <input type="checkbox" name="whAL[3]['on']" value="4" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-center">
                          <strong>100004</strong>
                        </td>
                        <td class="text-left">
                          WANT VELOUR
                        </td>
                        <td class="text-right indicator">
                          <strong>40.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>33.33&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>6.67&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              40.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>4</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/94384c1cb10dc188e9bd827210741153" class="btn btn-info" title="WANT VELOUR - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/4" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[3]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="4" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[4]['article-id']" value="5"/>
                          <input type="checkbox" name="whAL[4]['on']" value="5" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="/files/e9bab8dc55945df01decdb0e8d16fd5e.jpg" height="35" alt="DSC07123_u2"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100005</strong>
                        </td>
                        <td class="text-left">
                          ACT
                        </td>
                        <td class="text-right indicator">
                          <strong>46.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>38.33&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>7.67&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              46.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>25</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/22590e69f36a86695bee00ee6896fb90" class="btn btn-info" title="ACT - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/5" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[4]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="5" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[5]['article-id']" value="6"/>
                          <input type="checkbox" name="whAL[5]['on']" value="6" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="/files/593d1300b5770f7259ca087ba248f62e.jpg" height="35" alt="Stand woman pants9"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100006</strong>
                        </td>
                        <td class="text-left">
                          STAND WOMAN
                        </td>
                        <td class="text-right indicator">
                          <strong>39.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>32.50&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>6.50&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              39.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>4</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/cb9c09188ec222d71ac5b63131737b84" class="btn btn-info" title="STAND WOMAN - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/6" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[5]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="6" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[6]['article-id']" value="7"/>
                          <input type="checkbox" name="whAL[6]['on']" value="7" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="/files/0725b5bba3a7c39503fdb7481f3aa361.jpg" height="35" alt="DSC06521_u"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100007</strong>
                        </td>
                        <td class="text-left">
                          WILD
                        </td>
                        <td class="text-right indicator">
                          <strong>46.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>38.33&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>7.67&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              46.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>8</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/291034409f04ca603389da2be573de91" class="btn btn-info" title="WILD - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/7" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[6]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="7" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[7]['article-id']" value="8"/>
                          <input type="checkbox" name="whAL[7]['on']" value="8" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="/files/a7be1f476b7cb281d6c5c3b700d44600.jpg" height="35" alt="DSC06437_u2"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100008</strong>
                        </td>
                        <td class="text-left">
                          WILD JEANS
                        </td>
                        <td class="text-right indicator">
                          <strong>54.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>45.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>9.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              54.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>7</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/b67e19155f33441ab6d180ebc0df502a" class="btn btn-info" title="WILD JEANS - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/8" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[7]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="8" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[8]['article-id']" value="9"/>
                          <input type="checkbox" name="whAL[8]['on']" value="9" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="files/b36252689109297a41b338394c31c270.png" height="35" alt="VAGABOND JACKET WOMAN_0"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100009</strong>
                        </td>
                        <td class="text-left">
                          VAGABOND HOODIE WOMAN
                        </td>
                        <td class="text-right indicator">
                          <strong>70.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>58.33&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>11.67&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              70.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>9</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/6fbe92f555fbc4a758f53f942ab713ac" class="btn btn-info" title="VAGABOND HOODIE WOMAN - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/9" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[8]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="9" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whAL[9]['article-id']" value="10"/>
                          <input type="checkbox" name="whAL[9]['on']" value="10" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="/files/2f8dade3a129c8d771986c4931e2af17.jpg" height="35" alt="DSC06420_u2"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100010</strong>
                        </td>
                        <td class="text-left">
                          TEMPTER WOMAN
                        </td>
                        <td class="text-right indicator">
                          <strong>46.00&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong style="color:#000">
                                                                                    0.00&euro;
                          </strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>38.33&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <strong>7.67&euro;</strong>
                        </td>
                        <td class="text-right indicator">
                          <a href="#" onclick="return false;" class="price-dev-list" title="">
                            <i class="fa fa-pencil"></i>
                            <strong>
                              46.00&euro;
                            </strong>
                          </a>
                        </td>
                        <td class="text-right price indicator">
                                                      <strong>14</strong>
                                                  </td>
                        <td class="text-center">
                                                      <a href="cpanel/store-warehouse-matrix-qty/051828913bbc5a8f05d394cf3ca45bc6" class="btn btn-info" title="TEMPTER WOMAN - Matrix">
                              &nbsp;&nbsp;<i class="fa fa-table"></i>
                            </a>
                                                  </td>
                        <td class="text-center">
                          <a href="cpanel/store/catalog/article/edit/10" class="btn btn-warning">
                            &nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <label class="switch">
                            <input type="checkbox" name="whAL[9]['enable']" value="1" checked="">
                            <span></span>
                          </label>
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="10" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                      </tbody>
                </table>
              </div><!-- end table-responsive -->
                      </div><!-- end panel-body -->
                      <div class="panel-footer">
              <div class="form-group pull-left" style="width:200px;margin-right:15px;margin-bottom:0px;">     
                <select name="action" class="form-control select" required>
                  <option value="0">Vyberte...</option>
                  <option value="1">
                    Percentuálne zníženie
                  </option>
                  <option value="2">
                    Percentuálne navýšenie
                  </option>
                  <option value="3">
                    Čiastkové zníženie
                  </option>
                  <option value="4">
                    Čiastkové navýšenie
                  </option>
                  <option value="5">
                    Východzia základna cena
                  </option>
                </select>
              </div><!-- end form-group -->
              <div class="form-group pull-left" style="width:140px;margin-right:15px;margin-bottom:0px;">
                <div class="input-group">  
                  <span class="input-group-addon" style="background-color: #3fbae4;border-color: #3fbae4;">.00</span>
                  <input type="text"  name="value" value="" class="form-control text-right">
                </div>
              </div><!-- end form-group -->
              <button type="submit" class="btn btn-warning">
                <i class="fa fa-save"></i>&nbsp;
                UPLATNIŤ NA OZNAČENÉ ARTIKLE              </button>
              <button type="button" id="UFWAL" class="btn btn-primary">
                <i class="fa fa-save"></i>&nbsp;
                UPLATNIŤ NA VŠETKY ARTIKLE
              </button>
              <div class="delete-group pull-right">
                <button type="button" class="btn btn-block btn-danger">
                  <i class="fa fa-exclamation-triangle"></i>&nbsp;
                  VYMAZAŤ VŠETKY ARTIKLE
                </button>
                <div class="warning-info">
                  <p>
                    <strong style="color: red;">
                      Varovanie: história vývoja cien bude navždy zmazaná.
                    </strong>
                    <strong>
                      Skutočne chcete vymazať celkom <span class="total">334</span> artiklov?
                    </strong>
                  </p>
                  <div class="btn-group" role="group" aria-label="...">
                    <button type="button" id="dFAL" class="btn btn-default">
                      Áno
                    </button>
                    <button type="button" class="btn btn-info btn-cls">
                      Nie
                    </button>
                  </div><!-- end btn-group -->
                </div><!-- end warning-info -->
              </div><!-- end delete-group -->
              <button type="button" id="sdAL" class="btn btn-danger pull-right" style="margin-right: 15px;">
                <i class="fa fa-times"></i>&nbsp;
                VYMAZAŤ OZNAČENÉ ARTIKLE
              </button>
            </div><!-- end panel-footer -->
                  </div><!-- end panel -->
      </div><!-- end col -->
    </form>
  </div><!-- end plpt -->
  <!-- //-- WAREHOUSE ARTICLE LIST -->
    
</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
  <!-- MODAL WINDOW WAREHOUSE ARTICLE LIST -->
  <div class="modal" id="addOnArticles" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1200px;">
      <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
  </div><!-- end modal -->
  <!-- //-- MODAL WINDOW WAREHOUSE ARTICLE LIST -->

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
<script type="text/javascript" src="extensions/cpanel/js/ext/warehouse.js"></script>
<script type="text/javascript">
  Warehouse.init(2,5,1,10,0,'','Priebieha spracovanie, prosím čakajte...');
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
