<?php /*%%SmartyHeaderCode:43798768257319b38028932-74236667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dbeee3ee6fcff481e0b4f0d90c31d1df9725691' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/statuses/status_list.tpl',
      1 => 1460547470,
      2 => 'file',
    ),
    '92afef7393d0902bf4b435c3456ae469d5f977a7' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1460547449,
      2 => 'file',
    ),
    '16c330466fb4b26e2d4c99f1bba3c82f16476646' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1460547447,
      2 => 'file',
    ),
    '41279c1d84bfff712a0604016a38201c6cd04b1e' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/statuses/status_list.tpl',
      1 => 1460547470,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '43798768257319b38028932-74236667',
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
  'unifunc' => 'content_57319b382f1094_23639581',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57319b382f1094_23639581')) {function content_57319b382f1094_23639581($_smarty_tpl) {?><!DOCTYPE html>
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
.badge {
    position: relative;
    top: -3px;
    left: 5px;
}
ul.list-inline.additional-text {
    display: inline-block;
    float: right;
    width: 536px;
    margin: 2.5px 0 0 30px;
}
ul.panel-controls i {
    position: relative;
    top: 1.45px;
    left: .5px;
    font-size: 1.3em;
}
.colorpicker, .colorpicker * {
    z-index: 999999;
}
.circle-indicator {
    position:relative;
    display: block;
    width: 23px;
    height: 23px;
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
    top: -1.3px;
    left: 0px;
    font-size: 1.3em;
    line-height: 24px;
}
.circle-indicator.black {
    background: #000;
}
.circle-indicator.blue {
    background: #3fbae4;
}
.circle-indicator.orange {
    background: #fea223;
}
.circle-indicator.green {
    background: #95b75d;
}
.circle-indicator.red {
    background: #b64645;
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
                
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="cpanel">MOZAYC</a>
        <a href="cpanel" class="x-navigation-control"></a>
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
    <li class="xn-title">
        <strong>
            NAVIGAČNÁ LIŠTA        </strong>
    </li>
    <li>
        <a href="cpanel" title="Panel">
            <i class="fa fa-dashboard"></i>
            <span class="xn-text">
                Panel            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/site-structure" title="Štruktúra webu">
            <i class="fa fa-sitemap"></i>
            <span class="xn-text">
                Štruktúra webu            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/page-list" title="Stránky">
            <i class="fa fa-file-text-o"></i>
            <span class="xn-text">
                Stránky            </span>
        </a>                        
    </li>
    <li class="xn-openable" style="display:none;visibility: hidden !important;">
        <a href="cpanel/cpanel/catalog" onclick="return false;" title="Katalóg">
            <i class="fa fa-book"></i>
            <span class="xn-text">
                Katalóg            </span>
        </a>
        <ul>
            <li>
                <a href="cpanel/catalog" title="Catalog - Overview">
                    <i class="fa fa-eye"></i>
                    Prehľad                </a>
            </li>
            <li>
                <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
                    <i class="fa fa-plus"></i>
                    Nový artikel                </a>
            </li>
            <li>
                <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
                    <i class="fa fa-info"></i>
                    Spravovať kategórie                </a>
            </li>
            <li>
                <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
                    <i class="fa fa-tag"></i>
                    Spravovať atribúty                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="cpanel/my-drive" title="MMôj Disk">
            <i class="fa fa-hdd-o"></i>
            <span class="xn-text">
                Môj Disk            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/slider-list" title="Reklamné bannery">
            <i class="fa fa-camera"></i>
            <span class="xn-text">
                Reklamné bannery            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/gallery-list" title="Galéria">
            <i class="fa fa-picture-o"></i>
            <span class="xn-text">
                Galéria            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/language-list" title="Jazyky">
            <i class="glyphicon glyphicon-globe"></i>
            <span class="xn-text">
                Jazyky            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/dictionary-list" title="Slovník">
            <i class="fa fa-book"></i>
            <span class="xn-text">
                Slovník            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/seo-redirect-list" title="SEO REDIRECT">
            <i class="fa fa-link"></i>
            <span class="xn-text">
                SEO Redirect            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/general-settings" title="Hlavné nastavenia">
            <i class="fa fa-gear"></i>
            <span class="xn-text">
                Hlavné nastavenia            </span>
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
                            Formuláre                        </span>
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
                            Router                        </span>
                    </a>                        
                </li>
            </ul>
        </li>
        <li class="xn-title">
      <strong>
        ROZŠÍRENIA      </strong>
    </li>
    <li class="xn-openable active" style="margin-bottom:98px;">
        <a href="#" onclick="return false;" title="Obchod">
            <i class="fa fa-building-o"></i>
            <span class="xn-text">Obchod</span>
        </a>
        <ul>
            <li data-menu-item="users">
                <a href="cpanel/store/users" title="Uživatelia">
                    <i class="fa fa-users"></i>
                    Uživatelia                </a>
            </li>
            <li data-menu-item="carts">
                <a href="cpanel/store/carts" title="Košíky">
                    <i class="fa fa-shopping-cart"></i>
                    Košíky                </a>
            </li>
            <li class="xn-openable" data-menu-item="orders">
                <a href="cpanel/store/orders" title="Objednávky">
                    <i class="fa fa-clipboard"></i>
                    Objednávky                </a>
                <ul>
                    <li data-menu-item="list">
                        <a href="cpanel/store/orders" title="List">
                            <span class="fa fa-circle"></span>
                            Prehľad                        </a>
                    </li>
                    <li data-menu-item="management">
                        <a href="cpanel/store/orders/management/short" title="Management">
                            <span class="fa fa-circle"></span>
                            Správa                        </a>
                    </li>
                </ul>
            </li>
            <li class="xn-openable" data-menu-item="catalog">
                <a href="#" onclick="return false;" title="Katalóg">
                    <span class="fa fa-book"></span>
                    Katalóg                </a>
                <ul>
                    <li data-menu-item="articles">
                        <a href="cpanel/store/catalog/articles/short" title="Artikle">
                            <span class="fa fa-circle"></span>
                            Artikle                        </a>
                    </li>
                    <li data-menu-item="store-category-list">
                        <a href="cpanel/store-category-list" title="Kategórie">
                            <span class="fa fa-circle"></span>
                            Kategórie                        </a>
                    </li>
                    <li data-menu-item="store-attribute-list">
                        <a href="cpanel/store-attribute-list" title="Atribúty">
                            <span class="fa fa-circle"></span>
                            Atribúty                        </a>
                    </li>
                    <li data-menu-item="ordering">
                        <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
                            <span class="fa fa-circle"></span>
                            Usporiadanie                        </a>
                    </li>
                </ul>
            </li>
            <li data-menu-item="warehouse">
              <a href="cpanel/store-warehouse-list" title="Sklady">
                <i class="fa fa-database"></i>
                Sklady              </a>
            </li>
            <li data-menu-item="statuses">
                <a href="cpanel/store/statuses" title="Stavy">
                    <i class="fa fa-heartbeat"></i>
                    Stavy                </a>
            </li>
            <li class="xn-openable" data-menu-item="delivery-payment">
                <a href="#" onclick="return false;" title="Doručovanie / Platby">
                    <i class="fa fa-pencil-square"></i>
                    Doručovanie / Platby                </a>
                <ul>
                    <li data-menu-item="delivery">
                        <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
                            <i class="fa fa-truck"></i>
                            Doručovanie                        </a>
                    </li>
                    <li data-menu-item="payment">
                        <a href="cpanel/store/delivery-payment/payment" title="Platby">
                            <i class="fa fa-usd"></i>
                            Platby                        </a>
                    </li>
                    <li data-menu-item="ties">
                        <a href="cpanel/store/delivery-payment/ties" title="Väzby">
                            <i class="fa fa-exchange"></i>
                            Väzby                        </a>
                    </li>
               </ul>
            </li>
            <li class="xn-openable" data-menu-item="localization">
                <a href="#" onclick="return false;" title="Lokalizácia">
                    <span class="fa fa-globe"></span>
                    Lokalizácia                </a>
                <ul>
                    <li data-menu-item="currencies">
                        <a href="cpanel/store/localization/currencies" title="Meny">
                            <span class="fa fa-circle"></span>
                            Meny                        </a>
                    </li>
                    <li data-menu-item="taxes">
                        <a href="cpanel/store/localization/taxes" title="Dane">
                            <span class="fa fa-circle"></span>
                            Dane                        </a>
                   </li>
               </ul>
            </li>
            <li data-menu-item="offers">
                <a href="cpanel/store/offers" title="Ponuky">
                    <i class="fa fa-sticky-note-o"></i>
                    Ponuky                </a>
            </li>
            <li data-menu-item="discount-circuits">
                <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
                    <i class="fa fa-circle-o-notch"></i>
                    Discount circuits                </a>
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
<li>
    <a href="#" onclick="return false;" title="KATALÓG">
        Katalóg    </a>
</li>
<li class="active">
    <a href="cpanel/store/statuses" title="Stavy">
        Stavy    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-heartbeat"></i>&nbsp;
            STAVY&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 25px;">
    <div class="col-lg-12">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create-status" role="menuitem">
                <i class="fa fa-plus"></i>
                <span>Nový stav</span>
            </button>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-info widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count">0</span>%</div>
                <div class="widget-title">Article</div>                             
            </div>                                                        
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-success widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count">0</span>%</div>
                <div class="widget-title">Shopping cart</div>                               
            </div>                                                        
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-warning widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="4%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count">4</span>%</div>
                <div class="widget-title">Order</div>                          
            </div>                                                       
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-primary widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count">0</span>%</div>
                <div class="widget-title">Warehouse</div>                              
            </div>                                                      
        </div> 
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
                    <form action="cpanel/store/statuses/update-all" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            STATUS LIST&nbsp;
                            <span class="badge"></span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="cpanel/store/statuses/0/0" style="background-color:#000;color:#fff;" title="VŠETKO">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/statuses/0/1" style="background-color:#3fbae4;color:#fff;" title="ARTIKEL">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/statuses/0/2" style="background-color:#fea223;color:#fff;" title="NÁKUPNÝ KOSÍK">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/statuses/0/3" style="background-color:#95b75d;color:#fff;" title="OBJEDNÁVKA">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>                          
                            <li>
                                <a href="cpanel/store/statuses/0/4" style="background-color:#b64645;color:#fff;" title="SKLAD">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="return false;" class="panel-collapse">
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="statusList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="50" class="text-center">
                                            ID                                        </th>
                                        <th width="100" class="text-center">
                                            SKUPINA                                        </th>
                                        <th class="text-left">
                                            NÁZOV STAVU                                        </th>
                                        <th width="100" class="text-center">
                                            EDITOVAŤ                                        </th>
                                        <th width="100" class="text-center">
                                            ZOBRAZIŤ                                        </th>
                                        <th width="100" class="text-center">
                                            ODSTRÁNIŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                                                           <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;border-left: 1.5px solid #5810f2;border-bottom: 1.5px solid #5810f2;">
                                               <input type="hidden" name="statuses[0]['status-id']" value='1'/>
                                               1
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator center green">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                Prijat&eacute;
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="renderEdit(1);" class="btn btn-info" style="padding:7px;border-radius:100%;" title="<br />
<b>Notice</b>:  Undefined property: stdClass::$delivery_name in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>937</b><br />
">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="statuses[0]['enable']"  value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="statuses[0]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                        </tr>
                                                                           <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;border-left: 1.5px solid #f0e710;border-bottom: 1.5px solid #f0e710;">
                                               <input type="hidden" name="statuses[1]['status-id']" value='2'/>
                                               2
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator center green">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                Čakaj&uacute;ce
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="renderEdit(2);" class="btn btn-info" style="padding:7px;border-radius:100%;" title="<br />
<b>Notice</b>:  Undefined property: stdClass::$delivery_name in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>937</b><br />
">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="statuses[1]['enable']"  value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="statuses[1]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                        </tr>
                                                                           <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;border-left: 1.5px solid #44ed69;border-bottom: 1.5px solid #44ed69;">
                                               <input type="hidden" name="statuses[2]['status-id']" value='3'/>
                                               3
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator center green">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                Vybaven&eacute;
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="renderEdit(3);" class="btn btn-info" style="padding:7px;border-radius:100%;" title="<br />
<b>Notice</b>:  Undefined property: stdClass::$delivery_name in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>937</b><br />
">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="statuses[2]['enable']"  value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="statuses[2]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                        </tr>
                                                                           <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;border-left: 1.5px solid #634d4d;border-bottom: 1.5px solid #634d4d;">
                                               <input type="hidden" name="statuses[3]['status-id']" value='4'/>
                                               4
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator center green">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-left">
                                                Testovacie
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="renderEdit(4);" class="btn btn-info" style="padding:7px;border-radius:100%;" title="<br />
<b>Notice</b>:  Undefined property: stdClass::$delivery_name in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>937</b><br />
">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="statuses[3]['enable']"  value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                               <label class="switch">
                                                    <input type="checkbox" name="statuses[3]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                           </td>
                                        </tr>
                                                                   </tbody>
                            </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                        </button>
                        <ul class="list-inline additional-text">
                            <li>
                                <span class="circle-indicator black">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                VŠETKO                                  
                            </li>
                            <li>
                                <span class="circle-indicator blue">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                ARTIKEL                          
                            </li>
                            <li>
                                <span class="circle-indicator orange">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                NÁKUPNÝ KOSÍK                                    
                            </li>
                            <li>
                                <span class="circle-indicator green">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                OBJEDNÁVKA                    
                            </li>
                            <li>
                                <span class="circle-indicator red">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                SKLAD                    
                            </li>
                        </ul>
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
        
<!-- MODAL WINDOW CREATE STATUS -->                       
<div class="modal" id="create-status" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <form id="createStatusForm" action="cpanel/store/status/create" method="post" role="form">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <strong>
                                    NOVÝ STAV                                </strong> 
                            </h3>
                        </div><!-- end panel-header -->
                        <div class="panel-body panel-body-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            SEKCIA                                            <span style="color:red;">*</span>
                                        </label>
                                        <select name="pattern-id" class="form-control select"required="">
                                            <option value="1">
                                                ARTIKEL                                            </option>
                                            <option value="2">
                                                NÁKUPNÝ KOSÍK                                            </option>
                                            <option value="3">
                                                OBJEDNÁVKA                                            </option>
                                            <option value="4">
                                                SKLAD                                            </option>
                                        </select>
                                        <span class="help-block">Vyberte si sekciu, ku ktorej má byť pridelený stav</span>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Farba</label>
                                        <div class="input-group color" data-color="#FFFFFF" data-color-format="hex" id="colorpicker">
                                            <input type="text" name="color" value="#FFFFFF" class="form-control"/>
                                            <span class="input-group-addon">
                                                <i style="background-color: #FFFFFF"></i>
                                            </span>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-12">
                                                                            <div class="panel panel-default tabs">                            
                                            <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                                                                                    <li class="active">
                                                        <a href="#tab-sk" role="tab" data-toggle="tab">
                                                            <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                                                            <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                                                        </a>
                                                    </li>
                                                                                            </ul>                            
                                            <div class="panel-body tab-content">
                                                                                                    <div class="tab-pane active" id="tab-sk">
                                                        <div class="form-group">
                                                            <label>
                                                                NÁZOV STAVU                                                                <span style="color:red;">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <span class="flag-icon flag-icon-sk"></span>
                                                                </span>
                                                                <input type="text" name="statuses-lang[189]['status-name']" value="" class="form-control" minlength="3" maxlength="150" required="">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-text-o"></i>
                                                                </span>
                                                            </div>
                                                            <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                        </div><!-- end form-group -->
                                                    </div>
                                                                                            </div><!-- end panel-body -->
                                        </div><!-- end panel -->
                                                                    </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end panel-body -->
                        <div class="panel-footer">                                 
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                ZAVRIEŤ                            </button>
                        </div><!-- end panel-footer -->  
                    </div><!-- end panel -->
                </form> 
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW CREATE STATUS -->

<!-- MODAL WINDOW EDIT STATUS -->                       
<div class="modal" id="edit-status" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;"><!-- --></div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW CREATE STATUS -->

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
        
<script type="text/javascript" src="extensions/cpanel/js/plugins/knob/jquery.knob.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript">
$('#search').keyup(function() {
    searchTable($(this).val());
});
    
function searchTable(inputVal)
{
    var table = $('#statusList');
        table.find('tr').each(function(index, row) {
            var allCells = $(row).find('td');
            if(allCells.length > 0)
            {
                var found = false;
                allCells.each(function(index, td)
                {
                    var regExp = new RegExp(inputVal, 'i');
                    if(regExp.test($(td).text()))
                    {
                        found = true;
                        return false;
                    }
                });
                if(found == true)$(row).show();else $(row).hide();
            }
        });
}

function renderEdit( statusId ) {
    var modalWindow  = $('#edit-status');
  
    $.ajax({
        url: 'cpanel/store/status/edit/'+statusId,
        type: 'GET',
        success: function(content) {
           modalWindow.find('.modal-body').html(content);
           modalWindow.modal('show');
        },
        error: function(data) {
            console.log(data);
        },
        dataType: 'HTML'
    });
}
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
