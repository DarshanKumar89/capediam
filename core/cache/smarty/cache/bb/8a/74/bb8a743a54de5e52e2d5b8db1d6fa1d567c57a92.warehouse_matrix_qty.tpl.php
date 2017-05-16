<?php /*%%SmartyHeaderCode:112997149057989fc5b62da9-64724305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '834da3f57f571b58c032c44d13fbaee70c3935b9' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_qty.tpl',
      1 => 1469528922,
      2 => 'file',
    ),
    '0b9f53588ea7ef2e382fb110a795947dfd61c5dd' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1469528892,
      2 => 'file',
    ),
    '146e27fb27217e76249fb69f93d1c5b4436eb18d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469528891,
      2 => 'file',
    ),
    'bb8a743a54de5e52e2d5b8db1d6fa1d567c57a92' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/warehouse_matrix_qty.tpl',
      1 => 1469528922,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '112997149057989fc5b62da9-64724305',
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
  'unifunc' => 'content_57989fc5c57c74_29069867',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989fc5c57c74_29069867')) {function content_57989fc5c57c74_29069867($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://carpedmfashion.local" />
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
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Henrich Barkoczy">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Henrich Barkoczy">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">Henrich&nbsp;Barkoczy</div>
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
  <li class="xn-openable active">
    <a href="#" onclick="return false;" title="Obchod">
      <i class="fa fa-building-o"></i>
      <span class="xn-text">Obchod</span>
    </a>
    <ul>
    <li data-menu-item="users">
      <a href="cpanel/store/users" title="Uživatelia">
        <i class="fa fa-users"></i>
        Uživatelia      </a>
    </li>
    <li data-menu-item="carts">
      <a href="cpanel/store/carts" title="Košíky">
        <i class="fa fa-shopping-cart"></i>
        Košíky      </a>
    </li>
    <li class="xn-openable" data-menu-item="orders">
      <a href="cpanel/store/orders" title="Objednávky">
        <i class="fa fa-clipboard"></i>
        Objednávky      </a>
      <ul>
        <li data-menu-item="list">
          <a href="cpanel/store/orders" title="List">
            <span class="fa fa-circle"></span>
            Prehľad          </a>
        </li>
        <li data-menu-item="management">
          <a href="cpanel/store/orders/management/short" title="Management">
            <span class="fa fa-circle"></span>
            Správa          </a>
        </li>
      </ul>
    </li>
    <li class="xn-openable" data-menu-item="catalog">
        <a href="#" onclick="return false;" title="Katalóg">
            <span class="fa fa-book"></span>
            Katalóg        </a>
        <ul>
            <li data-menu-item="articles">
                <a href="cpanel/store/catalog/articles/short" title="Artikle">
                    <span class="fa fa-circle"></span>
                    Artikle                </a>
            </li>
            <li data-menu-item="store-category-list">
                <a href="cpanel/store-category-list" title="Kategórie">
                    <span class="fa fa-circle"></span>
                    Kategórie                </a>
            </li>
            <li data-menu-item="store-attribute-list">
                <a href="cpanel/store-attribute-list" title="Atribúty">
                    <span class="fa fa-circle"></span>
                    Atribúty                </a>
            </li>
            <li data-menu-item="ordering">
                <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
                    <span class="fa fa-circle"></span>
                    Usporiadanie                </a>
            </li>
        </ul>
    </li>
    <li data-menu-item="thumbnail">
      <a href="cpanel/thumbnail" title="Thumbnail">
        <i class="fa fa-picture-o" aria-hidden="true"></i>
        Thumbnail      </a>
    </li>
    <li data-menu-item="warehouse">
      <a href="cpanel/store-warehouse-list" title="Sklady">
        <i class="fa fa-database"></i>
        Sklady      </a>
    </li>
    <li data-menu-item="statuses">
        <a href="cpanel/store/statuses" title="Stavy">
            <i class="fa fa-heartbeat"></i>
            Stavy        </a>
    </li>
    <li class="xn-openable" data-menu-item="delivery-payment">
        <a href="#" onclick="return false;" title="Doručovanie / Platby">
            <i class="fa fa-pencil-square"></i>
            Doručovanie / Platby        </a>
        <ul>
            <li data-menu-item="delivery">
                <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
                    <i class="fa fa-truck"></i>
                    Doručovanie                </a>
            </li>
            <li data-menu-item="payment">
                <a href="cpanel/store/delivery-payment/payment" title="Platby">
                    <i class="fa fa-usd"></i>
                    Platby                </a>
            </li>
            <li data-menu-item="ties">
                <a href="cpanel/store/delivery-payment/ties" title="Väzby">
                    <i class="fa fa-exchange"></i>
                    Väzby                </a>
            </li>
       </ul>
    </li>
    <li class="xn-openable" data-menu-item="localization">
        <a href="#" onclick="return false;" title="Lokalizácia">
            <span class="fa fa-globe"></span>
            Lokalizácia        </a>
        <ul>
            <li data-menu-item="currencies">
                <a href="cpanel/store/localization/currencies" title="Meny">
                    <span class="fa fa-circle"></span>
                    Meny                </a>
            </li>
            <li data-menu-item="taxes">
                <a href="cpanel/store/localization/taxes" title="Dane">
                    <span class="fa fa-circle"></span>
                    Dane                </a>
           </li>
       </ul>
    </li>
    <li data-menu-item="offers">
        <a href="cpanel/store/offers" title="Ponuky">
            <i class="fa fa-sticky-note-o"></i>
            Ponuky        </a>
    </li>
    <li data-menu-item="discount-circuits">
        <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
            <i class="fa fa-circle-o-notch"></i>
            Discount circuits        </a>
    </li>
    <li data-menu-item="email">
      <a href="cpanel/store/email" title="Email">
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
    </ul>
  </li>
  <li>
    <a href="cpanel/general-settings" title="Hlavné nastavenia">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        Hlavné nastavenia      </span>
    </a>                        
  </li>
      <li class="xn-openable">
      <a href="#" onclick="return false;" title="Adminstrator">
        <i class="fa fa-exclamation-triangle"></i>
        <span class="xn-text">Administrátor</span>
      </a>
      <ul>
        <li>
          <a href="cpanel/form-list" title="Formuláre">
            <i class="fa fa-pencil"></i>
            <span class="xn-text">
              Formuláre            </span>
          </a>                        
        </li>
        <li>
          <a href="#" onclick="return false;" title="Facebook Tool">
            <i class="fa fa-facebook-square"></i>
            <span class="xn-text">
              Facebook Tool
            </span>
          </a>                        
        </li>
        <li>
          <a href="cpanel/activity-timeline" title="Activity Timeline">
            <i class="fa fa-safari"></i>
            <span class="xn-text">
              Activity Timeline
            </span>
          </a>                        
        </li>
        <li>
          <a href="cpanel/router" title="Router">
            <i class="fa fa-map-signs"></i>
            <span class="xn-text">
              Router            </span>
          </a>                        
        </li>
      </ul>
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
  <a href="cpanel/store-warehouse-matrix-manage/d120a48c634bc3b54a1af5ae5ec1bd75" title="Správa produktovej matrice">
    Správa produktovej matrice  </a>
</li>
<li>
  <a href="#" onclick="return false;" title="Produktová matrica - množstvá">
    Produktová matrica - množstvá  </a>
</li>
<li class="active">
  <a href="cpanel/store-warehouse-matrix-qty/d120a48c634bc3b54a1af5ae5ec1bd75" title="MATRICA WANT HOODIE VELOUR">
    MATRICA&nbsp;/&nbsp;WANT HOODIE VELOUR
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
          <strong>MATRICA</strong>&nbsp;/&nbsp;WANT HOODIE VELOUR
        </h3>
        <ul class="panel-controls">
          <li>
            <a href="cpanel/store-warehouse-matrix-manage/d120a48c634bc3b54a1af5ae5ec1bd75" style="background: #3fbae4 !important;color: #fff;border-color: #3fbae4;" title="MATRICA MNOŽSTVÁ - WANT HOODIE VELOUR">
              <i class="fa fa-columns"></i>
            </a>
          </li>
          <li>
            <a href="cpanel/store-warehouse-matrix-qty/9dc89da8810c414fd90724993273bbaf" class="btn-prev" title="WANT HOODIE">
              <i class="fa fa-arrow-left"></i>
            </a>
          </li>
          <li>
            <a href="cpanel/store-warehouse-matrix-qty/94384c1cb10dc188e9bd827210741153" class="btn-next" title="WANT VELOUR">
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
                      XS
                    </th>
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
                    SPOLU
                  </th>
                </tr>
              </thead>
              <tbody>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      cyklaménová
                    </th>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-49-114" data-paraid="49" data-parbid="114" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-49-115" data-paraid="49" data-parbid="115" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-49-116" data-paraid="49" data-parbid="116" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-49-117" data-paraid="49" data-parbid="117" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-49">
                        1
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      zelenotyrkysov&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-82-114" data-paraid="82" data-parbid="114" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-82-115" data-paraid="82" data-parbid="115" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-82-116" data-paraid="82" data-parbid="116" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-82-117" data-paraid="82" data-parbid="117" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-82">
                        1
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      čiernomodr&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-92-114" data-paraid="92" data-parbid="114" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-92-115" data-paraid="92" data-parbid="115" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-92-116" data-paraid="92" data-parbid="116" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-92-117" data-paraid="92" data-parbid="117" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-92">
                        1
                      </strong>
                    </th>
                  </tr>
                                  <tr>
                    <th class="text-left" style="max-width: 200px !important;">
                      antracitov&aacute;
                    </th>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-95-114" data-paraid="95" data-parbid="114" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-95-115" data-paraid="95" data-parbid="115" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="1" class="form-control text-center ipt-qty parAB-95-116" data-paraid="95" data-parbid="116" data-prev-qty="1" style="min-width: 130px;" />
                      </td>
                                          <td class="text-center">
                        <input type="text" value="0" class="form-control text-center ipt-qty parAB-95-117" data-paraid="95" data-parbid="117" data-prev-qty="0" style="min-width: 130px;" />
                      </td>
                                        <th width="130" class="text-right">
                      <strong class="parXV-95">
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
                      <strong class="parXV-114">0</strong>
                    </th>
                                      <th class="text-center">
                      <strong class="parXV-115">1</strong>
                    </th>
                                      <th class="text-center">
                      <strong class="parXV-116">3</strong>
                    </th>
                                      <th class="text-center">
                      <strong class="parXV-117">0</strong>
                    </th>
                                                                                
                  <th class="text-right" >
                    <strong class="mt">4</strong>
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
  Matrix.init(8,3,'Priebieha spracovanie, prosím čakajte...');
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
