<?php /*%%SmartyHeaderCode:176608804958510c5cde7e71-41931297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9093afdeb8a81995e58a44f9be42ff8392ce82d8' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_manage_expedition_time_al.tpl',
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
    '10d9d10aa7504a3745c414dce1f306090f69345c' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_manage_expedition_time_al.tpl',
      1 => 1469707252,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '176608804958510c5cde7e71-41931297',
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
  'unifunc' => 'content_58510c5d4dba65_91309490',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58510c5d4dba65_91309490')) {function content_58510c5d4dba65_91309490($_smarty_tpl) {?><!DOCTYPE html>
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
.c-c-a-r {
  display: none;
}
.alert-default {
  background: #F5F5F5;
  border-color: #DDD;
}
.badge {
  background: #000000;
  position: relative;
  top: -1px;
  left: 5px;
  padding: 0px 8px;
  font-size: 11px;
  line-height: 20px;
  font-weight: 500;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
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
  <a href="cpanel/warehouse-expedition-time-manage/2c16f1ef5d2af438a8dce841743a194f" title="Manage expedition time">
    Manage expedition time
  </a>
</li>
<li class="active">
  <a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2" title="Manage expedition time assign article">
    Manage expedition time assign article
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">
  <h2>
    <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
    MANAGE EXPEDITION TIME ASSIGN ARTICLE&nbsp;
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
          <strong>Nov&aacute; Lesn&aacute;</strong>&nbsp;/&nbsp;
          <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
          48hod&iacute;n
        </h3>
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
  
  <!-- WAREHOUSE ET ASSIGN ARTICLE LIST -->
  <div id="plpt">
    <form action="cpanel/update-warehouse-expedition-time-al" method="post" role="form">
      <input type="hidden" name="whEtId" value="2"/>
      <input type="hidden" name="sort" value="0"/>
      <input type="hidden" name="page" value="1"/>
      <input type="hidden" name="limit" value="10"/>
      <input type="hidden" name="keywords" value=""/>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <span class="btn btn-info" style="margin: 0 15px;">223</span>
              ZOZNAM ARTIKLOV              &nbsp;<span class="badge">Zobrazených 1-10 z 223 záznamov</span>            </h3>
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
                    <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/'+this.options[this.selectedIndex].value+'/1/10';">
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
                    <select class="form-control select" onchange="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/1/'+this.options[this.selectedIndex].value;">
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
                            <button type="button" onclick="location = 'cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                              <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                  </div>
                  <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/1/10">1</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/2/10">2</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/3/10">3</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/4/10">4</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/5/10">5</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/23/10">23</a></li><li class=""><a href="cpanel/warehouse-expedition-time-assign-article/2c16f1ef5d2af438a8dce841743a194f/2/0/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                <table id="whETAL" class="table table-bordered table-striped table-actions">
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
                      <th width="100" class="text-center">
                        ODSTRÁNIŤ                      </th>
                    </tr>
                  </thead>
                  <tbody>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[0]['article-id']" value="1"/>
                          <input type="checkbox" name="whETAL[0]['on']" value="1" class="x-remove x-cb">
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
                        <td class="text-center">
                          <button type="button" data-article-id="1" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[1]['article-id']" value="5"/>
                          <input type="checkbox" name="whETAL[1]['on']" value="5" class="x-remove x-cb">
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
                        <td class="text-center">
                          <button type="button" data-article-id="5" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[2]['article-id']" value="6"/>
                          <input type="checkbox" name="whETAL[2]['on']" value="6" class="x-remove x-cb">
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
                        <td class="text-center">
                          <button type="button" data-article-id="6" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[3]['article-id']" value="7"/>
                          <input type="checkbox" name="whETAL[3]['on']" value="7" class="x-remove x-cb">
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
                        <td class="text-center">
                          <button type="button" data-article-id="7" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[4]['article-id']" value="8"/>
                          <input type="checkbox" name="whETAL[4]['on']" value="8" class="x-remove x-cb">
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
                        <td class="text-center">
                          <button type="button" data-article-id="8" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[5]['article-id']" value="9"/>
                          <input type="checkbox" name="whETAL[5]['on']" value="9" class="x-remove x-cb">
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
                        <td class="text-center">
                          <button type="button" data-article-id="9" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[6]['article-id']" value="10"/>
                          <input type="checkbox" name="whETAL[6]['on']" value="10" class="x-remove x-cb">
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
                        <td class="text-center">
                          <button type="button" data-article-id="10" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[7]['article-id']" value="11"/>
                          <input type="checkbox" name="whETAL[7]['on']" value="11" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="/files/d93914d670add6da65bce387d140b8da.jpg" height="35" alt="DSC06447_u2"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100011</strong>
                        </td>
                        <td class="text-left">
                          WAY WOMAN
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="11" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[8]['article-id']" value="12"/>
                          <input type="checkbox" name="whETAL[8]['on']" value="12" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="files/b29a6201f6b9b836eb1d66196a913b34.png" height="35" alt="WILD SNOW_3"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100012</strong>
                        </td>
                        <td class="text-left">
                          WILD SNOW
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="12" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr>
                        <td class="text-center">
                          <input type="hidden" name="whETAL[9]['article-id']" value="17"/>
                          <input type="checkbox" name="whETAL[9]['on']" value="17" class="x-remove x-cb">
                        </td>
                        <td class="text-center">
                                                      <img src="/files/c5149c29d0d6aea385533076a2ad305a.jpg" height="35" alt="fdcd8b3c6da933e734894290665237f7"/>
                                                  </td>
                        <td class="text-center">
                          <strong>100017</strong>
                        </td>
                        <td class="text-left">
                          GENTLE
                        </td>
                        <td class="text-center">
                          <button type="button" data-article-id="17" class="btn btn-danger push-x">
                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                          </button>
                        </td>
                      </tr>
                                      </tbody>
                </table>
              </div><!-- end table-responsive -->
                      </div><!-- end panel-body -->
                      <div class="panel-footer">
              <button type="button" id="delete-saa" class="btn btn-danger" style="margin-right: 15px;">
                <i class="fa fa-times"></i>&nbsp;
                VYMAZAŤ OZNAČENÉ ARTIKLE
              </button>
              <button type="button" id="delete-aaa"class="btn btn-danger">
                <i class="fa fa-exclamation-triangle"></i>&nbsp;
                VYMAZAŤ VŠETKY ARTIKLE
              </button>
            </div><!-- end panel-footer -->
                  </div><!-- end panel -->
      </div><!-- end col -->
    </form>
  </div><!-- end plpt -->
  <!-- //-- WAREHOUSE ET ASSIGN ARTICLE LIST -->
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
<script type="text/javascript" src="extensions/cpanel/js/ext/Warehouse_ET_A_A.js"></script>
<script type="text/javascript">
  Warehouse_ET_A_A.init(5,2,1,10,0,'','Priebieha spracovanie, prosím čakajte...');
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
