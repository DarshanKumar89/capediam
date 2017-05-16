<?php /*%%SmartyHeaderCode:154523154457430c2bd7d327-91981420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f03952105d48f0c453acfa4b47e7be96bbe6e4' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/article/article_edit.tpl',
      1 => 1462804506,
      2 => 'file',
    ),
    '92afef7393d0902bf4b435c3456ae469d5f977a7' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1463131549,
      2 => 'file',
    ),
    '16c330466fb4b26e2d4c99f1bba3c82f16476646' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1460547447,
      2 => 'file',
    ),
    'a8782663cf14517ac6cbf10ed1cc2963ef056ead' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/article/article_edit.tpl',
      1 => 1462804506,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '154523154457430c2bd7d327-91981420',
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
  'unifunc' => 'content_57430c2c161e40_22721097',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57430c2c161e40_22721097')) {function content_57430c2c161e40_22721097($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" href="extensions/bootstrap-tagsinput/bootstrap-tagsinput.css"/>
<style>
#btn-save {
    position: absolute;
    top: 4px;
    left: 5px;
    width: 25px;
    height: 50px;
    margin: 0;
    padding: 0 0 0 3px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
}
.article-image {
    position: relative;
    background: #F8F8F8;
    display: block;
    width: 100px;
    height: 100px;
    margin: 0;
    padding: 0;
    font-size: 5em;
    text-align: center;
    line-height: 110px;
    color: red;
    border: 1px solid #F8F8F8;
    z-index: 400;

    -webkit-box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
    box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
}
.article-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.article-image > a.btn-remove {
    position: absolute;
    top: -2px;
    right: -30px;
    margin: 0;
    padding: 0;
    font-weight: 400;
    color: red;
    text-align: center;
    border: 0;
    z-index: 600;
}
.article-image > a.btn-remove > i {
    font-size:1.7em;
}
.gallery-indicator,
.slider-indicator {
    display: block;
    width: 120px;
    height: 100%;
    line-height: 100%;
    overflow: hidden;
}
.gallery-indicator .title,
.slider-indicator .title {
    display: block;
    float: left;
    width: 50px;
    margin-top: 3px;
    margin-right: 0px;
    font-size: 1.9em;
}
.circle-indicator {
    position:relative;
    display: block;
    float: left;
    width: 23px;
    height: 23px;
    margin-top: 3px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    color: #fff;
    border-radius: 100%;
}
.circle-indicator > i {
    font-size: 1.3em;
    line-height: 24px;
}
.circle-indicator.black {
    background: #000;
}
.circle-indicator.orange {
    background: #fea223;
}
.circle-indicator.green {
    background: #95b75d;
}

#article-categories tbody > tr > td {
    cursor: row-resize;
}

/******************
*
* AUTOCOMPLETE
*
******************/

.ax-message {
    display: none;
}
.ui-ac-wrapp {
  position: relative;
  min-height: 1px;
  max-height: 400px;
  margin-top: 20px;
  padding: 0 10px;
  overflow-x: hidden;
  overflow-y: auto;
}
.ui-ac-wrapp a.btn-ui-ac  {
  display: block;
  height: 100px;
  border: 1px solid #dfdfdf;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-circle {
  position: relative;
  float: left;
  width: 25%;
  height: 83px;
  margin: 4px -5px 0 -5px;
  padding: 0;
  border: 1px solid #dfdfdf;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-circle > img {
  position: relative;
  top: 50%;
  display: block;
  max-width: 100%;
  max-height: 100%;
  margin: 0 auto;
  vertical-align: middle;
  transform: translateY(-50%);
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text {
  position: relative;
  float: right;
  width: 75%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > h5,
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > p {
  word-break: break-word;
  white-space: normal;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > h5 {
  margin-top: 3px;
  margin-bottom: 3px;
  padding-left: 5px;
  padding-bottom: 2px;
  font-size: 15px;
  font-weight: 700;
  text-align: left;
  color: #333333;
  border-bottom: 1px solid #ddd;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > p {
    width: 100%;
    margin: 0;
    padding-left: 5px;
    font-size: 12px;
    line-height: 13px;
    text-align: left;
    color: #333333;
}
.ui-ac-wrapp a.btn-ui-ac:hover {
  background: #29b2e1;
  border-color: #29b2e1;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-circle {
  background: #fff;
  border-color: #fff;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > h5,
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > p {
  color: #fff;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > h5 {
  border-color: #fff;
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
<li>
    <a href="cpanel/store/catalog/articles" title="Artikle">
        Artikle    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="Editovať">
        Editovať    </a>
</li>
<li class="active">
    <a href="cpanel/store/catalog/article/edit/63" title="RUSTLE EGO">
        RUSTLE EGO
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-pencil-square"></i>&nbsp;
    Artikle&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="updateArticleForm" action="cpanel/store/catalog/article/update" method="post" role="form">
    <input type="hidden" name="article-id" value="63" />
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
        
        <!-- ARTICLE TITLE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title" style="overflow: hidden;">
                        <button type="button"
                                class="btn btn-block btn-info pull-left"
                                style="margin-top:0px;margin-right:25px;padding:0;width:29px;height:29px;border-radius:100%;"
                                data-toggle="modal" data-target="#make-a-copy">
                            <i class="fa fa-files-o" style="position: relative;top: 1px;left: 2.5px;"></i>
                        </button>
                        <span style="display:block;font-size:1.4em;float:left;">
                            <i class="fa fa-cube"></i>&nbsp;
                            <span style="font-weight:100;color:#000;">RUSTLE EGO</span>
                        </span>
                    </h3>
                    <ul class="panel-controls">
                        <li class="slider-indicator">
                            <span class="title">
                                <i class="fa fa-camera"></i>
                            </span>
                            <span class="circle-indicator black">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li class="gallery-indicator">
                            <span class="title">
                               <i class="fa fa-picture-o"></i>
                            </span>
                            <span class="circle-indicator green">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                    </ul>                      
                </div><!-- end panel-header -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group pull-left" style="width:660px;min-width: 400px;margin-right:5px;">
                                <div class="input-group">
                                    <input type="text" name="q" value="" placeholder="Hľadaný výraz" class="form-control" autocomplete="off">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                            <div class="btn-group pull-right" role="group">
                                <a href="cpanel/store/catalog/article/edit/62"  class="btn btn-default" >
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a href="cpanel/store/catalog/article/edit/64"  class="btn btn-default" >
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <p class="ax-message" style="padding: 15px 0;">
                                <i class="fa fa-cog"></i>&nbsp;Please wait...
                            </p>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row ui-ac-wrapp"><!-- --></div><!-- end row -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- // ARTICLE TITLE -->
        
        <!-- ARTICLE LANGUAGE INFORMATION AND SEO -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-info panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-globe"></i>&nbsp;
                        LANGUAGE INFORMATION AND SEO                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                                            <div class="panel panel-default tabs" style="margin: 7px 0;">                            
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
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                                                <div class="form-group">
                                                    <label>
                                                        Site title                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="lang[189]['site-title']"
                                                               value="P&Aacute;NSKE TEPL&Aacute;KY - RUSTLE EGO"
                                                               placeholder="Site title"
                                                               class="form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        Article name (public)                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="lang[189]['article-name']"
                                                               value="RUSTLE EGO"
                                                               placeholder="Article name"
                                                               class="form-control"
                                                               required/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        Short description                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <textarea name="lang[189]['description']" class="form-control" rows="5">Exkluz&iacute;vne dizajnov&eacute; tepl&aacute;ky s cvokmi</textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <h4 style="border-bottom:1px solid green;">SEO</h4>
                                                <div class="form-group">
                                                    <label>
                                                        Metarobots                                                    </label>
                                                        <select name="lang[189]['meta-robot']" class="form-control select">
                                                                                                                            <option value="all">all</option>
                                                                                                                            <option value="noindex">noindex</option>
                                                                                                                            <option value="nofollow">nofollow</option>
                                                                                                                            <option value="none">none</option>
                                                                                                                            <option value="noarchive">noarchive</option>
                                                                                                                            <option value="nosnippet">nosnippet</option>
                                                                                                                            <option value="noodp">noodp</option>
                                                                                                                            <option value="notranslate">notranslate</option>
                                                                                                                            <option value="noimagindex">noimagindex</option>
                                                                                                                    </select>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        Meta keywords                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="lang[189]['meta-keywords']"
                                                               value="p&aacute;nske,koženkove,teplaky,bavlnene,s vreckami,dizajnove,carpedm,teplakove,nohavice,ego,panske,luxusne,exkluzivne"
                                                               class="tagsinput form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        Meta description                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <textarea name="lang[189]['meta-description']"class="form-control" rows="5">Luxusn&eacute; dizajnov&eacute; tepl&aacute;ky s ozdobn&yacute;mi cvokmi. Exkluz&iacute;vne p&aacute;nske tepl&aacute;kov&eacute; nohavice z bavlny a koženky, dvomi funkčn&yacute;mi vreckami vzadu.</textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-12" style="margin-top:30px;">
                                                    <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                                                        <span class="pull-left" style="padding-top: 12px;">
                                                            HTML Content                                                        </span>
                                                    </h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <textarea name="lang[189]['html-content']" id="ckeditor_189" class="ckeditor" row="5"><p>Exkluz&iacute;vne p&aacute;nske tepl&aacute;kov&eacute; nohavice z bavlny a koženky, dvomi funkčn&yacute;mi vreckami vzadu&nbsp;a s množstvom kvalitne vypracovan&yacute;ch detailov. Egove najobľ&uacute;benej&scaron;ie CarpeDM tepl&aacute;ky, v ktor&yacute;ch krstil album Kontrafakt. Luxusn&eacute; tepl&aacute;ky z kolekcie EGO pre odv&aacute;žneho a &scaron;t&yacute;lov&eacute;ho mestsk&eacute;ho muža.&nbsp;</p>
</textarea>
                                                    </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end tab -->
                                                            </div><!-- end panel-body -->
                        </div><!-- end panel -->
                                    </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE LANGUAGE INFORMATION AND SEO -->
        
        <!-- DIRECTION -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div id="routerForm" class="panel panel-warning panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-map-signs"></i>&nbsp;
                        DIRECTION                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                                            <div class="row">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div id="ael" class="alert pull-right" style="display: none;" role="alert"><!-- --></div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div id="r-r-f-c" class="col-lg-12 col-sm-12 col-xs-12">
                                <!-- START TABS -->
                                <div class="panel panel-default tabs">                            
                                    <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                                                                    <li class="active">
                                                <a href="#tab-direction-sk" role="tab" data-toggle="tab">
                                                    <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                                                    <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                                                </a>
                                            </li>
                                                                            </ul>                            
                                    <div class="panel-body tab-content">
                                                                                    <div class="tab-pane active" id="tab-direction-sk">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <div id="r-k-v-c-7345-189" class="input-group">
                                                                                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-chrome"></i>
                                                                    </span>
                                                                    <input type="text" value="http://carpedmfashion.local/panske-oblecenie/kolekcia-ego/exkluzivne-panske-teplaky-rustle-ego" class="form-control" />
                                                                    <span class="input-group-btn">
                                                                        <a href="http://carpedmfashion.local/panske-oblecenie/kolekcia-ego/exkluzivne-panske-teplaky-rustle-ego" target="__blank" class="btn btn-primary">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </span>
                                                                                                                            </div>
                                                        </div><!-- end form-group -->
                                                        <div id="r-k-c-c-7345-189" class="row" style="display:none;">
                                                            <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                                                <div class="form-group">
                                                                    <label for="key">
                                                                        URL KEY
                                                                    </label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <span class="flag-icon flag-icon-sk"></span>
                                                                        </span>
                                                                        <input id="r-k-c-i-7345-189"
                                                                            type="text" 
                                                                            value="" 
                                                                            class="form-control"
                                                                            data-route-id="7345"
                                                                            data-lang-id="189"
                                                                            data-object-id="63"
                                                                            data-object-type-id="11"
                                                                            style="border-radius: 0px;"
                                                                        />
                                                                        <span class="input-group-btn">
                                                                            <button type="button" 
                                                                                id="r-k-c-b-u-7345-189" 
                                                                                class="btn btn-success r-k-c-b-u"
                                                                                data-route-id="7345"
                                                                                data-lang-id="189"
                                                                                data-object-id="63"
                                                                                data-object-type-id="11"
                                                                                disabled
                                                                            >
                                                                                <i class="fa fa-floppy-o"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- end form-group -->
                                                            </div><!-- end col -->
                                                            <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                                                <button type="button" id="r-k-c-b-c-7345-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                                                    <i class="fa fa-times"></i>&nbsp;
                                                                    CLOSE                                                                </button>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                                                                                    <div id="r-p-c-7345-189" class="row" style="display:none;">
                                                                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                                                    <div class="form-group">
                                                                        <label for="prefix">
                                                                            URL PREFIX
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <span class="flag-icon flag-icon-sk"></span>
                                                                            </span>
                                                                            <input id="r-p-i-7345-189"
                                                                                type="text" 
                                                                                value="" 
                                                                                class="form-control r-p-v"
                                                                                data-route-id="7345"
                                                                                data-lang-id="189"
                                                                                data-object-id="63"
                                                                                data-object-type-id="11"
                                                                                style="border-radius: 0px;"
                                                                            />
                                                                            <span class="input-group-btn">
                                                                                <button type="button" 
                                                                                    id="r-p-b-u-7345-189" 
                                                                                    class="btn btn-success r-p-b-u" 
                                                                                    data-route-id="7345"
                                                                                    data-lang-id="189"
                                                                                    data-object-id="63"
                                                                                    data-object-type-id="11"
                                                                                    disabled
                                                                                >
                                                                                    <i class="fa fa-floppy-o"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div><!-- end form-group -->
                                                                </div><!-- end col -->
                                                                <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                                                    <button type="button" id="r-p-b-cl-7345-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                                                        <i class="fa fa-times"></i>&nbsp;
                                                                        CLOSE                                                                    </button>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                                                                            </div><!-- end col -->
                                                </div><!-- end row -->
                                                <div class="row" style="margin-top: 15px;">
                                                    <div class="col-lg-4 col-sm-12 col-xs-12">
                                                                                                                    <div class="row" style="margin-bottom: 5px;">
                                                                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-left: 0px;">
                                                                    <button 
                                                                        type="button"
                                                                        id="r-k-c-7345-189"
                                                                        class="btn btn-warning btn-block r-k-c"
                                                                        data-route-id="7345"
                                                                        data-lang-id="189"
                                                                        data-object-id="63"
                                                                        data-object-type-id="11"
                                                                    >
                                                                        <i class="fa fa-exchange"></i>&nbsp;
                                                                        CHANGE URL KEY                                                                    </button>
                                                                </div><!-- end col -->
                                                                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                                                    <button 
                                                                        type="button"
                                                                        class="btn btn-danger btn-block r-d-d"
                                                                        data-route-id="7345"
                                                                        data-lang-id="189"
                                                                        data-object-id="63"
                                                                        data-object-type-id="11"
                                                                    >
                                                                        <i class="fa fa-times"></i>&nbsp;
                                                                        DELETE                                                                    </button>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                                                                                            <button type="button" 
                                                                    id="r-p-b-c-7345-189" 
                                                                    data-route-id="7345"
                                                                    data-lang-id="189"
                                                                    data-object-id="63"
                                                                    data-object-type-id="11"
                                                                    class="btn btn-default btn-block r-p-b-c"
                                                                >
                                                                    <i class="fa fa-location-arrow"></i>&nbsp;
                                                                    ADD URL PREFIX                                                                </button>
                                                                                                                                                                                                                                    </div><!-- end col -->
                                                    <div class="col-lg-8 col-sm-12 col-xs-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading ui-draggable-handle">
                                                                <h3 class="panel-title">
                                                                    <i class="fa fa-map-o"></i>&nbsp;
                                                                    SUGGESTIONS                                                                </h3>
                                                            </div><!-- end panel-heading -->
                                                            <div class="panel-body panel-body-table">
                                                                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                                                    <strong>INFO!!</strong>
                                                                    There are no suggestions.                                                                </div>
                                                            </div><!-- end panel-body -->
                                                        </div><!-- end panel -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                                <div class="row" style="margin-top: 5px;">
                                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading ui-draggable-handle">
                                                                <h3 class="panel-title">
                                                                    <i class="fa fa-exchange"></i>&nbsp;
                                                                    SEO REDIRECTION                                                                </h3>
                                                            </div><!-- end panel-heading -->
                                                            <div class="panel-body panel-body-table">
                                                                                                                                    <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                                                        <strong>INFO!!</strong>
                                                                        There are no redirection.                                                                    </div>
                                                                                                                            </div><!-- end panel-body -->
                                                        </div><!-- end panel -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end tab-pane -->
                                                                            </div><!-- end panel-body -->
                                </div><!-- end panel -->
                                <!-- END TABS -->
                            </div><!-- end col -->
                        </div><!--- end row -->
                                    </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- DIRECTION -->
        
        <!-- ARTICLE GENERAL INFORMATION -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-primary panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-info-circle"></i>&nbsp;
                        VŠEOBECNÉ INFORMÁCIE                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Reference                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="reference" value="dbfb3787496195b12284030204c69053" minlength="10" maxlength="60" class="form-control" required="true" disabled="true">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    SKU                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="sku" value="100063" minlength="3" maxlength="60" class="form-control" required>
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Article name (internal)                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="article-name-internal" value="RUSTLE EGO" minlength="3" maxlength="150" class="form-control" required>
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    EAN-13 or JAN barcode                                </label>
                                <div class="input-group">
                                    <input type="text" name="ean13-jan-barcode" value="" maxlength="13" class="form-control">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    UPC barcode                                </label>
                                <div class="input-group">
                                    <input type="text" name="upc-barcode" value="" maxlength="12" class="form-control">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Country of Manufacture                                </label>
                                <select name="country-of-manufacture-id" class="form-control select" data-live-search="true">
                                    <option value="0">Vyberte...</option>
                                                                            <option value="165" >Afghanistan</option>
                                                                            <option value="194" >Albania</option>
                                                                            <option value="6" >Algeria</option>
                                                                            <option value="62" >Argentina</option>
                                                                            <option value="113" >Armenia</option>
                                                                            <option value="47" >Australia</option>
                                                                            <option value="37" >Austria</option>
                                                                            <option value="21" >Azerbaijan</option>
                                                                            <option value="5" >Bahrain</option>
                                                                            <option value="24" >Belarus</option>
                                                                            <option value="93" >Belgium</option>
                                                                            <option value="48" >Belize</option>
                                                                            <option value="152" >Bokm</option>
                                                                            <option value="153" >Bokm - Norway</option>
                                                                            <option value="63" >Bolivia</option>
                                                                            <option value="27" >Bosnia and Herzegovina</option>
                                                                            <option value="167" >Brazil</option>
                                                                            <option value="148" >Brunei Darussalam</option>
                                                                            <option value="26" >Bulgaria</option>
                                                                            <option value="49" >Canada</option>
                                                                            <option value="50" >Caribbean</option>
                                                                            <option value="69" >Castilian</option>
                                                                            <option value="64" >Chile</option>
                                                                            <option value="233" >China</option>
                                                                            <option value="65" >Colombia</option>
                                                                            <option value="66" >Costa Rica</option>
                                                                            <option value="109" >Croatia</option>
                                                                            <option value="30" >Czech Republic</option>
                                                                            <option value="35" >Denmark</option>
                                                                            <option value="67" >Dominican Republic</option>
                                                                            <option value="68" >Ecuador</option>
                                                                            <option value="7" >Egypt</option>
                                                                            <option value="79" >El Salvador</option>
                                                                            <option value="83" >Estonia</option>
                                                                            <option value="91" >Faroe Islands</option>
                                                                            <option value="200" >Finland</option>
                                                                            <option value="142" >Former Yugoslav Republic of Macedonia</option>
                                                                            <option value="96" >France</option>
                                                                            <option value="124" >Georgia</option>
                                                                            <option value="39" >Germany</option>
                                                                            <option value="45" >Greece</option>
                                                                            <option value="71" >Guatemala</option>
                                                                            <option value="72" >Honduras</option>
                                                                            <option value="234" >Hong Kong</option>
                                                                            <option value="111" >Hungary</option>
                                                                            <option value="117" >Iceland</option>
                                                                            <option value="182" >Inari - Finland</option>
                                                                            <option value="102" >India</option>
                                                                            <option value="115" >Indonesia</option>
                                                                            <option value="87" >Iran</option>
                                                                            <option value="8" >Iraq</option>
                                                                            <option value="52" >Ireland</option>
                                                                            <option value="224" >Islamic Republic of Pakistan</option>
                                                                            <option value="104" >Israel</option>
                                                                            <option value="120" >Italy</option>
                                                                            <option value="53" >Jamaica</option>
                                                                            <option value="122" >Japan</option>
                                                                            <option value="9" >Jordan</option>
                                                                            <option value="126" >Kazakhstan</option>
                                                                            <option value="203" >Kenya</option>
                                                                            <option value="130" >Korea</option>
                                                                            <option value="10" >Kuwait</option>
                                                                            <option value="134" >Kyrgyzstan</option>
                                                                            <option value="11" >Lebanon</option>
                                                                            <option value="12" >Libya</option>
                                                                            <option value="40" >Liechtenstein</option>
                                                                            <option value="184" >Lule - Norway</option>
                                                                            <option value="41" >Luxembourg</option>
                                                                            <option value="235" >Macau</option>
                                                                            <option value="149" >Malaysia</option>
                                                                            <option value="43" >Maldives</option>
                                                                            <option value="151" >Malta</option>
                                                                            <option value="73" >Mexico</option>
                                                                            <option value="144" >Mongolia</option>
                                                                            <option value="13" >Morocco</option>
                                                                            <option value="156" >Netherlands</option>
                                                                            <option value="54" >New Zealand</option>
                                                                            <option value="74" >Nicaragua</option>
                                                                            <option value="179" >Northern</option>
                                                                            <option value="180" >Northern - Finland</option>
                                                                            <option value="183" >Northern - Norway</option>
                                                                            <option value="157" >Nynorsk - Norway</option>
                                                                            <option value="14" >Oman</option>
                                                                            <option value="75" >Panama</option>
                                                                            <option value="78" >Paraguay</option>
                                                                            <option value="76" >Peru</option>
                                                                            <option value="213" >Philippines</option>
                                                                            <option value="163" >Poland</option>
                                                                            <option value="98" >Principality of Monaco</option>
                                                                            <option value="77" >Puerto Rico</option>
                                                                            <option value="15" >Qatar</option>
                                                                            <option value="55" >Republic of the Philippines</option>
                                                                            <option value="176" >Russia</option>
                                                                            <option value="16" >Saudi Arabia</option>
                                                                            <option value="197" >Serbia and Montenegro</option>
                                                                            <option value="236" >Singapore</option>
                                                                            <option value="181" >Skolt - Finland</option>
                                                                            <option value="2" >South Africa</option>
                                                                            <option value="185" >Southern - Norway</option>
                                                                            <option value="29" >Spain</option>
                                                                            <option value="201" >Sweden</option>
                                                                            <option value="38" >Switzerland</option>
                                                                            <option value="17" >Syria</option>
                                                                            <option value="211" >Thailand</option>
                                                                            <option value="56" >Trinidad and Tobago</option>
                                                                            <option value="18" >Tunisia</option>
                                                                            <option value="217" >Turkey</option>
                                                                            <option value="4" >U.A.E.</option>
                                                                            <option value="222" >Ukraine</option>
                                                                            <option value="33" >United Kingdom</option>
                                                                            <option value="57" >United States</option>
                                                                            <option value="80" >Uruguay</option>
                                                                            <option value="226" >Uzbekistan</option>
                                                                            <option value="81" >Venezuela</option>
                                                                            <option value="228" >Vietnam</option>
                                                                            <option value="19" >Yemen</option>
                                                                            <option value="59" >Zimbabwe</option>
                                                                            <option value="89" > Finland</option>
                                                                            <option value="138" > Latvia</option>
                                                                            <option value="136" > Lithuania</option>
                                                                            <option value="161" > Panama</option>
                                                                            <option value="168" > Portugal</option>
                                                                            <option value="174" > Romania</option>
                                                                            <option value="192" > Sierra Leone</option>
                                                                            <option value="190" > Slovakia</option>
                                                                    </select>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="row form-group">
                                <label class="col-lg-12" style="padding-left: 0px;">
                                    Article image                                </label>
                                <div class="input-group col-lg-2 pull-left">
                                    <span class="article-image ">
                                                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                         
                                    </span>
                                </div><!-- end image -->
                                <div class="input-group col-lg-9 pull-right">
                                    <span class="input-group-btn">
                                        <a href="cpanel/store/catalog/article/choose-image/63/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                            <i class="glyphicon glyphicon-hdd"></i>
                                        </a>
                                    </span>
                                    <input type="text" 
                                           placeholder="Načítať obrázok z drive" 
                                           class="form-control">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                  Gallery                                </label>                                                                              
                                                                  <input type="hidden" name="gallery-id" value="53"/>
                                  <div style="overflow:hidden;">
                                      <a href="cpanel/gallery-edit/53" class="btn btn-success pull-left" style="display:inline-block;width: 49%;margin-right: 1%;">
                                        <i class="fa fa-picture-o"></i>&nbsp;ZOBRAZIŤ GALÉRIU
                                      </a>
                                      <a href="cpanel/store/catalog/article/delete-gallery/63" class="btn btn-danger pull-right" style="display:inline-block;width: 49%;margin-left: 1%;">
                                        <i class="fa fa-picture-o"></i>&nbsp;ODSTRÁNIŤ GALÉRIU
                                      </a>
                                  </div>
                                                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Article type                                </label>                                                                              
                                <select name="article-type-id" class="form-control select">
                                    <option value="1" selected>
                                        Standard product                                    </option>
                                    <option value="2" >
                                        Pack of existing products                                    </option>
                                    <option value="3" >
                                        Virtual product (services, booking, downloadable products, etc.)                                    </option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Visibility                                </label>                                                                              
                                <select name="visibility-id" class="form-control select">
                                    <option value="1" selected>
                                        Everywhere                                    </option>
                                    <option value="2" >
                                        Catalog only                                    </option>
                                    <option value="3" >
                                        Search only                                    </option>
                                    <option value="4" >
                                        Nowhere                                    </option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="row form-group" style="margin:0 -10px;">
                                <div class="col-lg-6">
                                    <label>
                                        New from Date                                    </label>
                                    <input type="text" name="new-from-date" value="2015-11-28" maxlength="12" class="form-control datepicker">
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <label>
                                        New to Date                                    </label>
                                    <input type="text" name="new-to-date" value="2015-11-28" maxlength="12" class="form-control datepicker">
                                </div><!-- end col -->
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE GENERAL INFORMATION -->
        
        <!-- ARTICLE SETTINGS -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-cog"></i>&nbsp;
                        NASTAVENIA                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Enabled                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="enable" checked="" value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        Avaible for order                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="available-for-order"  value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        Show price                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="show-price"  value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                                                                    Online only (not sold in your retail store)
                                                                            </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="online-only" value="1" >
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        Notify for Quantity Below                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="notify-qty" value="1" >
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        Intelligent monitoring                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="monitoring" value="1" >
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Stock Availability                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="stock-availability" checked="" value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        Campaign Article                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="campaign" value="1" >
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>Hosť</label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="guest" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>Náštevník</label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="visitor" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>Zákazník</label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="customer" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Statuses                                </label>
                                <select name="statuses[]" class="form-control select" data-live-search="true" multiple>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Qty                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="qty" value="8" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                              <label>
                                Predvolené nákupne množstvo
                              </label>
                              <div class="input-group">
                                <input type="number" name="default-purchase-amount" value="1" class="form-control"/>
                                <span class="input-group-addon">
                                  <i class="fa fa-cog"></i>
                                </span>
                              </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Minimum Qty Allowed in Shopping Cart                                </label>
                                <div class="input-group">
                                    <input type="number" name="min_qty_in_cart" value="1" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Maximum Qty Allowed in Shopping Cart                                </label>
                                <div class="input-group">
                                    <input type="number" name="max_qty_in_cart" value="1000" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Qty for Item's Status to Become Out of Stock                                </label>
                                <div class="input-group">
                                    <input type="number" name="qty_out_of_stock" value="10" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE SETTINGS -->
        
        <!-- ARTICLE PRICES -->
        <div class="col-lg-12">
            <div class="panel panel-danger panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-money"></i>&nbsp;
                        PRICES                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Currency                                </label>                                                                              
                                <select name="currency-id" class="form-control select" data-live-search="true" required>
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1" selected>Euro</option>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Tax rule                                </label>                                                                              
                                <select name="tax-id" class="form-control select" data-live-search="true" required>
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1" selected>DPH SK 20%</option>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Pre-tax wholesale price                                </label>
                                <div class="input-group">
                                    <input type="number" name="wholesale_price" value="0" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Recommended retail price (RRP)                                </label>
                                <div class="input-group">
                                    <input type="number" name="recommended-retail-price" value="0" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Pre-tax retail price                                </label>
                                <div class="input-group">
                                    <input type="number" name="retail_price" value="100" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Retail price with tax                                </label>
                                <div class="input-group">
                                    <input type="number" name="retail_tax_price" value="120" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="row form-group" style="margin:0 -10px;">
                              <div class="col-lg-6">
                                <label>
                                  Unit price (tax excl.)                                </label>
                                <input type="text" name="unit_price" value="0" class="form-control">
                              </div><!-- end col -->
                              <div class="col-lg-6">
                                <label>
                                  Per                                </label>
                                <input type="text" name="unity" value="" class="form-control">
                              </div><!-- end col -->
                            </div><!-- end form-group -->
                            <div class="row" style="margin: 0 -10px 15px -10px;">
                              <h4 style="display: block;margin: 0 10px 15px 10px;padding: 15px 0 7.5px 0;border-bottom: 1px solid #222;">
                                Prenájom
                              </h4>
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label>
                                    Suma (DPH)
                                  </label>
                                  <div class="input-group">
                                    <input type="number" name="rent-tax-price" value="0" placeholder="0.00" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                  </div>
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label>
                                    Doba (číselná hodnota)
                                  </label>
                                  <div class="input-group">
                                    <input type="number" name="rent-number" value="0" placeholder="1" class="form-control"/>
                                    <span class="input-group-addon">
                                      <i class="fa fa-clock-o"></i>
                                    </span>
                                  </div>
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label>
                                    Jednotka času
                                  </label>
                                  <div class="input-group">
                                    <input type="text" name="rent-unit" value="" placeholder="deň" class="form-control"/>
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </span>
                                  </div>
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-paypal"></i>&nbsp;
                                            Paypal                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-paypal" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-paypal"></i>&nbsp;
                                            CC Paypal                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-cc-paypal" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-visa"></i>&nbsp;
                                            VISA                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-visa" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-mastercard"></i>&nbsp;
                                            Master Card                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-master-card" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-discover"></i>&nbsp;
                                            Discover                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-discover" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-credit-card"></i>&nbsp;
                                            Credit Card                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-credit-card" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-google-wallet"></i>&nbsp;
                                            Google Wallet                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-g-wallet" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-amex"></i>&nbsp;
                                            AMEX                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-amex" value="1" >
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>
                                            Show tax<br>
                                            19.81 € (tax incl.) / 16.51 € (tax excl.)
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="show-tax"  value="1">
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE PRICES -->
        
        <!-- ARTICLE SHIPPING -->
        <div class="col-lg-12">
            <div class="panel panel-warning panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-truck"></i>&nbsp;
                        <i class="fa fa-train"></i>&nbsp;
                        <i class="fa fa-ship"></i>&nbsp;
                        <i class="fa fa-plane"></i>&nbsp;
                        SHIPPING                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    Package width                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-width" value="0" class="form-control"/>
                                    <span class="input-group-addon">
                                        cm
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Package height                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-height" value="0" class="form-control"/>
                                    <span class="input-group-addon">
                                        cm
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Package depth                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-depth" value="0" class="form-control"/>
                                    <span class="input-group-addon">
                                        cm
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Package weight                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-weight" value="0" class="form-control"/>
                                    <span class="input-group-addon">
                                        kg
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Additional shipping fees (for a single item)                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-shipping-fee" value="0" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>&nbsp;
                                        (tax excl.)
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="row form-group" style="margin:0 -10px;">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>
                                  Expedičná lehota (číselná hodnota)
                                </label>
                                <div class="input-group">
                                  <input type="text" name="expedition-number-value" value="0" placeholder="1" class="form-control">
                                  <span class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                  </span>
                                </div><!-- end input-group -->
                              </div><!-- end col -->
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>
                                   Expedičná lehota (jednotka času)
                                </label>
                                <div class="input-group">
                                  <input type="text" name="expedition-unit-time" value="" placeholder="deň" class="form-control">
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </div><!-- end input-group -->
                              </div><!-- end col -->
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="col-lg-6">
                                <h4>Freight transportation</h4>
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-truck"></i>&nbsp;
                                        Truck transport                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-truck" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-train"></i>&nbsp;
                                        Rail transport                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-rail" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-ship"></i>&nbsp;
                                        Marine transport                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-marine" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-plane"></i>&nbsp;
                                        Air transport                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-air" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <h4>Integrated Shipping Solutions</h4>
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/dhl_logo.gif" width="40" height="15" alt="DHL Express (DHL XML Solutions)"/>
                                        DHL Express (DHL XML Solutions)                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-dhl" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/ups_brandmark.jpg" width="20" height="20" alt="UPS Shipping API"/>
                                        UPS Shipping API                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-ups" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/tnt_v2.png" width="40" height="15" alt="TNT ExpressConnect"/>
                                        TNT ExpressConnect (XML)                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-tnt" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/fedex.png" width="55" height="15" alt="FedEx Compatible Solutions"/>
                                        FedEx Compatible Solutions                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-fedex" value="1" >
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE SHIPPING -->
        
        <!-- ARTICLE CATEGORIES -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-primary panel-toggled">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                <i class="fa fa-exchange"></i>&nbsp;
                CATEGORIES              </h3>
              <ul class="panel-controls">
                <li>
                  <a href="#" onclick="return false;" data-toggle="modal" data-target="#modal_categories">
                    <span class="fa fa-plus"></span>
                  </a>
                </li>
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>
            </div><!-- end panel-heading -->
            <div class="panel-body panel-body-table">
              <div class="table-responsive">
                <table id="article-categories" class="table table-bordered table-striped table-actions">
                  <thead>
                    <tr>
                      <th width="50" class="text-center">
                        ID
                      </th>
                      <th width="50" class="text-center">
                        OBRÁZOK                      </th>
                      <th width="200" class="text-left">
                        NÁZOV KATEGÓRIE                      </th>
                      <th class="text-center">
                        POPIS                      </th>
                      <th width="50" class="text-center">
                        ODSTRÁNIŤ                      </th>
                    </tr>
                  </thead>
                  <tbody>
                                                                        <tr data-crn="26">
                            <td class="text-center" style="font-weight:700;color:#660000;">
                              <input type="hidden" name="categories[0]['category-id']" value="26">
                              26
                            </td>
                            <td class="text-center">
                                                              <span style="font-size:1.4em;color:red;">
                                  <i class="glyphicon glyphicon-eye-open"></i>
                                </span>
                                                          </td>
                            <td class="text-left" style="font-weight:700;">
                              P&aacute;nska kolekcia EGO
                            </td>
                            <td class="text-left">
                              
                            </td>
                            <td class="text-center">
                              <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                &nbsp;&nbsp;<span class="fa fa-minus"></span>
                              </button>
                            </td>
                          </tr>
                                                  <tr data-crn="7">
                            <td class="text-center" style="font-weight:700;color:#660000;">
                              <input type="hidden" name="categories[1]['category-id']" value="7">
                              7
                            </td>
                            <td class="text-center">
                                                              <span style="font-size:1.4em;color:red;">
                                  <i class="glyphicon glyphicon-eye-open"></i>
                                </span>
                                                          </td>
                            <td class="text-left" style="font-weight:700;">
                              Muži
                            </td>
                            <td class="text-left">
                              
                            </td>
                            <td class="text-center">
                              <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                &nbsp;&nbsp;<span class="fa fa-minus"></span>
                              </button>
                            </td>
                          </tr>
                                                  <tr data-crn="68">
                            <td class="text-center" style="font-weight:700;color:#660000;">
                              <input type="hidden" name="categories[2]['category-id']" value="68">
                              68
                            </td>
                            <td class="text-center">
                                                              <span style="font-size:1.4em;color:red;">
                                  <i class="glyphicon glyphicon-eye-open"></i>
                                </span>
                                                          </td>
                            <td class="text-left" style="font-weight:700;">
                              P&aacute;nske tepl&aacute;ky
                            </td>
                            <td class="text-left">
                              
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
          </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE CATEGORIES -->
        
        <!-- ARTICLE ATTRIBUTES -->
        <div class="col-lg-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i>&nbsp;
                        ATTRIBUTES                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#" onclick="return false;" data-toggle="modal" data-target="#modal_atrributes">
                                <span class="fa fa-plus"></span>
                            </a>
                        </li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table id="article-attribute-values" class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="20" class="text-center">
                                        ID                                    </th>
                                    <th class="text-left">
                                        PARENT ATTRIBUTE                                    </th>
                                    <th width="400" class="text-left">
                                        VETVA                                    </th>
                                    <th class="text-center">
                                        HODNOTA                                    </th>
                                    <th width="100" class="text-center">
                                        ODSTRÁNIŤ                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                                                                                            <tr data-arn="1">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[0]['attr-id']" value="2">
                                                <input type="hidden" name="attrValueList[0]['value-id']" value="1">
                                                1
                                            </td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                            </td>
                                            <td class="text-center">
                                                <strong></strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-arn="118">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[1]['attr-id']" value="10">
                                                <input type="hidden" name="attrValueList[1]['value-id']" value="118">
                                                2
                                            </td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                            </td>
                                            <td class="text-center">
                                                <strong></strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-arn="119">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[2]['attr-id']" value="10">
                                                <input type="hidden" name="attrValueList[2]['value-id']" value="119">
                                                3
                                            </td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                            </td>
                                            <td class="text-center">
                                                <strong></strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-arn="120">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[3]['attr-id']" value="10">
                                                <input type="hidden" name="attrValueList[3]['value-id']" value="120">
                                                4
                                            </td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                            </td>
                                            <td class="text-center">
                                                <strong></strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-arn="121">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[4]['attr-id']" value="10">
                                                <input type="hidden" name="attrValueList[4]['value-id']" value="121">
                                                5
                                            </td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                            </td>
                                            <td class="text-center">
                                                <strong></strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-arn="149">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[5]['attr-id']" value="14">
                                                <input type="hidden" name="attrValueList[5]['value-id']" value="149">
                                                6
                                            </td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                            </td>
                                            <td class="text-center">
                                                <strong></strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr data-arn="153">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[6]['attr-id']" value="14">
                                                <input type="hidden" name="attrValueList[6]['value-id']" value="153">
                                                7
                                            </td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                            </td>
                                            <td class="text-center">
                                                <strong></strong>
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
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE ATTRIBUTES -->
        
        <!-- RELATED ARTICLE LIST -->
        <div class="col-lg-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i>&nbsp;
                        RELATED ARTICLES
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#" onclick="return false;" id="a-o-a-l" title="Article List">
                                <span class="fa fa-plus"></span>
                            </a>
                        </li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table id="related-articles" class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">#</th>
                                    <th width="30" class="text-center">
                                        OBRÁZOK                                    </th>
                                    <th width="200" class="text-center">
                                        SKU                                    </th>
                                    <th width="400" class="text-left">
                                        NÁZOV ARTIKLU                                    </th>
                                    <th width="200" class="text-center">
                                        ODSTRÁNIŤ                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- RELATED ARTICLE LIST -->
        
        <!-- ALTERNATIVE ARTICLE LIST -->
        <div class="col-lg-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i>&nbsp;
                        ALTERNATIVE ARTICLES
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#" onclick="return false;" id="a-r-a" title="Article List">
                                <span class="fa fa-plus"></span>
                            </a>
                        </li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table id="alternative-articles" class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">#</th>
                                    <th width="30" class="text-center">
                                        OBRÁZOK                                    </th>
                                    <th width="200" class="text-center">
                                        SKU                                    </th>
                                    <th width="400" class="text-left">
                                        NÁZOV ARTIKLU                                    </th>
                                    <th width="200" class="text-center">
                                        ODSTRÁNIŤ                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                                                                                            <tr data-an="63">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="alternativeArticleList[0]['article-id']" value="63"/>
                                                1
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/e467e8b7d07d435f284fd744cba94c5c.jpg" height="35" alt="DSC07148"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100063
                                            </td>
                                            <td class="text-left">
                                                RUSTLE EGO
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
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ALTERNATIVE ARTICLE LIST -->

        <button type="submit" id="btn-save" class="btn btn-success" role="button">
            <i class="fa fa-save"></i>
        </button>
    </div><!-- end row -->
</form>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        

<!-- MODAL WINDOW MAKE A COPY -->                       
<div class="modal" id="make-a-copy" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="cpanel/store/catalog/article/make-a-copy" method="post" role="form">
                            <input type="hidden" name="article-id" value="63" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            VYTVORIŤ KÓPIU                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>
                                            Názov nového artiklu                                        </label>
                                        <input type="text" name="article-name" value="RUSTLE EGO Kópia" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="panel-footer">                                 
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        ZAVRIEŤ                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW MAKE A COPY -->

<!-- MODAL WINDOW CATEGORIES -->                       
<div class="modal" id="modal_categories" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
      <div class="modal-body" style="background-color:transparent;">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <strong>
                ZOZNAM KATEGÓRIÍ              </strong> 
            </h3>
          </div>
          <div class="panel-body panel-body-table">
                          <div class="table-responsive" style="padding: 5px;">
                <table id="categorylist" class="table table-bordered table-striped table-actions datatable">
                  <thead>
                    <tr>
                      <th width="25" class="text-center">
                        ID                      </th>
                      <th width="30" class="text-center">
                        OBRÁZOK                      </th>
                      <th width="400" class="text-left">
                        NÁZOV KATEGÓRIE                      </th>
                      <th width="600" class="text-left">
                        POPIS                      </th>
                      <th width="100" class="text-center"></th>
                    </tr>
                  </thead>
                  <tbody>                                            
                                          <tr data-crn="1">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          1
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Ženy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="1" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="2">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          2
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="2" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="3">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          3
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mska kolekcia BLACKGREY
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="3" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="4">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          4
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Blackgrey d&aacute;mske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="4" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="5">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          5
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mska kolekcia FITNESS
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="5" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="55">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          55
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Nov&eacute; p&aacute;nske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="55" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="7">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          7
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Muži
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="7" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="8">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          8
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="8" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="54">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          54
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Nov&eacute; d&aacute;mske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="54" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="10">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          10
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Deti
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="10" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="12">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          12
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mske novinky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="12" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="13">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          13
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="13" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="73">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          73
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske oblečenie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="73" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="72">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          72
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Novinky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="72" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="71">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          71
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          EGO p&aacute;nske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="71" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="70">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          70
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          FITNESS d&aacute;mske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="70" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="69">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          69
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Detsk&eacute; tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="69" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="68">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          68
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          P&aacute;nske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="68" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="67">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          67
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="67" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="66">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          66
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; čiapky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="66" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="65">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          65
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; bundy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="65" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="64">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          64
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; svetre a pul&oacute;vre
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="64" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="25">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          25
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mske kolekcie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="25" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="53">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          53
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Detsk&eacute; novinky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="53" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="27">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          27
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Outlet
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="27" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="63">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          63
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; kraťasy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="63" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="62">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          62
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; tričk&aacute;
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="62" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="30">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          30
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske tielka
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="30" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="61">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          61
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; tepl&aacute;kov&eacute; s&uacute;pravy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="61" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="60">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          60
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; mikiny
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="60" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="59">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          59
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Zlacnen&eacute; detsk&eacute; tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="59" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="58">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          58
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Zlacnen&eacute; p&aacute;nske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="58" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="57">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          57
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Zlacnen&eacute; d&aacute;mske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="57" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="36">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          36
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mske limitovan&eacute; oblečenie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="36" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="37">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          37
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Limitovan&eacute; p&aacute;nske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="37" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="52">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          52
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          P&aacute;nske novinky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="52" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="56">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          56
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Nov&eacute; detsk&eacute; tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="56" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="51">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          51
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mske ta&scaron;ky a kabelky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="51" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="50">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          50
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Outlet deti
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="50" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="42">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          42
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          P&aacute;nske kolekcie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="42" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="43">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          43
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Detsk&eacute; kolekcie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="43" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="44">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          44
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          P&aacute;nske limitovan&eacute; oblečenie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="44" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="45">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          45
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Detsk&eacute; limitovan&eacute; oblečenie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="45" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="46">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          46
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          D&aacute;mske doplnky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="46" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="47">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          47
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          P&aacute;nske doplnky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="47" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="48">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          48
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Outlet ženy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="48" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="49">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          49
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Outlet muži
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="49" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="41">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          41
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          BLACKGREY d&aacute;mske leg&iacute;ny
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="41" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="40">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          40
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; tielka
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="40" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="38">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          38
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Limitovan&eacute; d&aacute;mske tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="38" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="26">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          26
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          P&aacute;nska kolekcia EGO
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="26" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="9">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          9
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske mikiny
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="9" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="6">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          6
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske mikiny
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="6" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="39">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          39
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Limitovan&eacute; detsk&eacute; tepl&aacute;ky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="39" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="28">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          28
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske tepl&aacute;kov&eacute; s&uacute;pravy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="28" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="15">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          15
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske tepl&aacute;kov&eacute; s&uacute;pravy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="15" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="74">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          74
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics detsk&eacute; oblečenie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="74" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="29">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          29
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske tričk&aacute;
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="29" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="16">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          16
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske tričk&aacute; a tielka
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="16" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="31">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          31
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske kraťasy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="31" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="17">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          17
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske tielka
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="17" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="32">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          32
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske svetre a pul&oacute;vre
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="32" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="18">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          18
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske &scaron;ortky, kraťasy a sukne
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="18" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="33">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          33
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske overaly
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="33" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="19">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          19
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske svetre a pul&oacute;vre
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="19" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="34">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          34
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske bundy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="34" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="20">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          20
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske &scaron;aty
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="20" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="35">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          35
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske čiapky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="35" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="21">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          21
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske overaly a kombin&eacute;zy
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="21" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="22">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          22
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske bundy a sak&aacute;
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="22" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="75">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          75
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics p&aacute;nske oblečenie
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="75" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="23">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          23
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske spodn&eacute; pr&aacute;dlo
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="23" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                          <tr data-crn="24">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          24
                        </td>
                        <td class="text-center">
                                                      <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                                                  </td>
                        <td class="text-left">
                          Basics d&aacute;mske čiapky
                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          
                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="24" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                                      </tbody>
                </table>
              </div><!-- end table-responsive -->
                      </div><!-- end panel-body -->
          <div class="panel-footer">                                 
            <button type="button" class="btn btn-default" data-dismiss="modal">
              ZAVRIEŤ            </button>
          </div><!-- end panel-footer -->
        </div><!-- end panel -->
      </div><!-- end modal-body -->
    </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW CATEGORIES -->

<!-- MODAL WINDOW ATRRIBUTES -->                       
<div class="modal" id="modal_atrributes" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            <strong>
                                ZOZNAM ATRIBÚTOV                            </strong> 
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="#" onclick="return false;" class="panel-collapse">
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                        </ul>                                
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive" style="padding: 0px;">
                            <table id="attrValueList" class="table table-bordered table-striped table-actions datatable">
                                <thead>
                                    <tr>
                                        <th width="20" class="text-center">
                                            ID                                        </th>
                                        <th class="text-left">
                                            PARENT ATTRIBUTE                                        </th>
                                        <th width="400" class="text-left">
                                            VETVA                                        </th>
                                        <th class="text-center">
                                            HODNOTA                                        </th>
                                        <th width="100" class="text-center">
                                            
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                                                           <tr data-arn="1">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">1</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čierna</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="1" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="2">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">2</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>biela</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="2" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="3">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">3</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>sivá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="3" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="4">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">4</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>melanžová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="4" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="5">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">5</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ružová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="5" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="6">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">6</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>královská modrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="6" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="7">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">7</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavomodrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="7" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="8">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">8</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tyrkysová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="8" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="9">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">9</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlozelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="9" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="10">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">10</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlomodrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="10" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="11">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">11</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>limetková</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="11" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="12">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">12</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>modrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="12" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="13">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">13</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="13" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="14">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">14</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>fialová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="14" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="15">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">15</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlofialová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="15" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="16">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">16</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>staroružová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="16" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="17">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">17</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>cyklaménová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="17" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="18">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">18</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>koralová červená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="18" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="19">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">19</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavočervená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="19" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="20">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">20</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>hnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="20" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="21">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">21</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlohnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="21" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="22">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">22</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavohnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="22" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="23">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">23</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>červená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="23" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="24">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">24</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>skarletová červená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="24" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="25">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">25</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>žltá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="25" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="26">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">26</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>mojito</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="26" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="27">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">27</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tyrkysovo-zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="27" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="28">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">28</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>broskyňová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="28" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="29">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">29</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>bordová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="29" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="30">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">30</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>akvamarínová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="30" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="31">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">31</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>sivomodrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="31" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="32">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">32</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>vanilková</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="32" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="33">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">33</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ocelovo modrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="33" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="34">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">34</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>unicolor</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="34" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="35">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">35</td>
                                            <td class="text-left">
                                                Bavlnen&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlnen&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>smotanová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="35" data-atr="2" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="36">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">36</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>biela</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="36" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="37">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">37</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>púdrovo biela</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="37" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="38">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">38</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>smotanov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="38" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="39">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">39</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ban&aacute;nov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="39" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="40">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">40</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>vanilkov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="40" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="41">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">41</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>zlatožltá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="41" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="42">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">42</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>horčicovo-žlt&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="42" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="43">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">43</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>melónová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="43" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="44">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">44</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>koralová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="44" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="45">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">45</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>oranžová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="45" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="46">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">46</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>púdrovo-ružová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="46" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="47">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">47</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>levandulovo-ružová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="47" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="48">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">48</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>staroružov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="48" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="49">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">49</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>cyklaménová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="49" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="50">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">50</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>thuli&aacute;nska ružov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="50" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="51">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">51</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čínska ruža</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="51" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="52">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">52</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ferrari červená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="52" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="53">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">53</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>rubínovo-červená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="53" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="54">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">54</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>krvavočervená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="54" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="55">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">55</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>&scaron;koricov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="55" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="56">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">56</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>červeno-hnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="56" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="57">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">57</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>burgundská hnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="57" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="58">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">58</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>bordov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="58" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="59">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">59</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čiernobordov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="59" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="60">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">60</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>fialov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="60" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="61">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">61</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>kapučíno</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="61" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="62">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">62</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ružovo-hnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="62" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="63">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">63</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlohned&aacute; </strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="63" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="64">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">64</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>hnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="64" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="65">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">65</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavohnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="65" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="66">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">66</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ľanová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="66" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="67">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">67</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlohrušková</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="67" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="68">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">68</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>hrušková</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="68" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="69">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">69</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>pistáciová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="69" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="70">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">70</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>morská zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="70" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="71">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">71</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavý mach</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="71" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="72">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">72</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>vojenská zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="72" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="73">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">73</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>hnedozelen&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="73" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="74">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">74</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>sivohnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="74" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="75">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">75</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čiernohnedá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="75" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="76">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">76</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>aquamarínová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="76" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="77">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">77</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>limetková zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="77" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="78">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">78</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>olivová zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="78" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="79">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">79</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="79" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="80">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">80</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tyrkysov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="80" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="81">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">81</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavá tyrkysová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="81" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="82">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">82</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>zelenotyrkysov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="82" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="83">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">83</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>polnočná zelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="83" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="84">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">84</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>petrolejov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="84" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="85">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">85</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čiernozelená</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="85" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="86">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">86</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlomodr&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="86" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="87">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">87</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>modr&aacute; obloha</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="87" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="88">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">88</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>modr&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="88" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="89">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">89</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ocelovo modr&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="89" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="90">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">90</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>kralovská modrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="90" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="91">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">91</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavomodr&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="91" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="92">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">92</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čiernomodr&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="92" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="93">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">93</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlosivá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="93" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="94">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">94</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>sivá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="94" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="95">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">95</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>antracitov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="95" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="96">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">96</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čierna</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="96" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="97">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">97</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>unicolor</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="97" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="98">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">98</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>melanžová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="98" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="171">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">99</td>
                                            <td class="text-left">
                                                Vel&uacute;rov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Vel&uacute;rov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlofialov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="171" data-atr="3" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="99">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">100</td>
                                            <td class="text-left">
                                                Visk&oacute;zov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Visk&oacute;zov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ružová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="99" data-atr="4" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="100">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">101</td>
                                            <td class="text-left">
                                                Visk&oacute;zov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Visk&oacute;zov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čierna</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="100" data-atr="4" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="101">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">102</td>
                                            <td class="text-left">
                                                Visk&oacute;zov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Visk&oacute;zov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>orgovánová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="101" data-atr="4" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="102">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">103</td>
                                            <td class="text-left">
                                                Visk&oacute;zov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Visk&oacute;zov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>svetlomodrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="102" data-atr="4" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="103">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">104</td>
                                            <td class="text-left">
                                                Visk&oacute;zov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Visk&oacute;zov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>cukríkovoružová</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="103" data-atr="4" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="104">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">105</td>
                                            <td class="text-left">
                                                Visk&oacute;zov&eacute; farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Visk&oacute;zov&eacute; farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavosiv&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="104" data-atr="4" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="105">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">106</td>
                                            <td class="text-left">
                                                Akryl farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Akryl farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>neonovo žltá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="105" data-atr="5" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="106">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">107</td>
                                            <td class="text-left">
                                                Akryl farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Akryl farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>cyklam&eacute;nov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="106" data-atr="5" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="107">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">108</td>
                                            <td class="text-left">
                                                Akryl farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Akryl farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čierno biela</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="107" data-atr="5" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="157">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">109</td>
                                            <td class="text-left">
                                                Akryl farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Akryl farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čierna</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="157" data-atr="5" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="158">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">110</td>
                                            <td class="text-left">
                                                Akryl farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Akryl farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>biela</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="158" data-atr="5" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="159">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">111</td>
                                            <td class="text-left">
                                                Akryl farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Akryl farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>siv&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="159" data-atr="5" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="108">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">112</td>
                                            <td class="text-left">
                                                Bavlna-lycra farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlna-lycra farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tmavomodrá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="108" data-atr="6" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="109">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">113</td>
                                            <td class="text-left">
                                                Bavlna-lycra farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlna-lycra farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čierna</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="109" data-atr="6" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="110">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">114</td>
                                            <td class="text-left">
                                                Bavlna-lycra farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlna-lycra farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>biela</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="110" data-atr="6" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="111">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">115</td>
                                            <td class="text-left">
                                                Bavlna-lycra farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlna-lycra farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>sivá</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="111" data-atr="6" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="112">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">116</td>
                                            <td class="text-left">
                                                Bavlna-polyester farby
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Bavlna-polyester farby</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>čierna</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="112" data-atr="7" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="128">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">117</td>
                                            <td class="text-left">
                                                Veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>UNI</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="128" data-atr="8" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="113">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">118</td>
                                            <td class="text-left">
                                                Žensk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Žensk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>2XS</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="113" data-atr="9" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="114">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">119</td>
                                            <td class="text-left">
                                                Žensk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Žensk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>XS</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="114" data-atr="9" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="115">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">120</td>
                                            <td class="text-left">
                                                Žensk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Žensk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>S</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="115" data-atr="9" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="116">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">121</td>
                                            <td class="text-left">
                                                Žensk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Žensk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>M</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="116" data-atr="9" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="117">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">122</td>
                                            <td class="text-left">
                                                Žensk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Žensk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>L</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="117" data-atr="9" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="129">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">123</td>
                                            <td class="text-left">
                                                Žensk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Žensk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>XL</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="129" data-atr="9" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="130">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">124</td>
                                            <td class="text-left">
                                                Žensk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Žensk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>2XL</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="130" data-atr="9" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="118">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">125</td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>S</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="118" data-atr="10" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="119">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">126</td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>M</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="119" data-atr="10" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="120">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">127</td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>L</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="120" data-atr="10" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="121">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">128</td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>XL</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="121" data-atr="10" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="122">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">129</td>
                                            <td class="text-left">
                                                Mužsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Mužsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>2XL</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="122" data-atr="10" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="123">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">130</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>98-104</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="123" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="124">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">131</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>110-116</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="124" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="125">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">132</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>122-128</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="125" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="126">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">133</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>134-140</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="126" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="127">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">134</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>146-152</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="127" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="131">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">135</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>92</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="131" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="132">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">136</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>98</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="132" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="133">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">137</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>104</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="133" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="134">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">138</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>110</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="134" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="135">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">139</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>116</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="135" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="136">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">140</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>68</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="136" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="137">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">141</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>74</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="137" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="138">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">142</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>80</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="138" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="139">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">143</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>86</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="139" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="140">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">144</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>122</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="140" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="141">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">145</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>128</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="141" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="142">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">146</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>158-164</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="142" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="143">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">147</td>
                                            <td class="text-left">
                                                Detsk&eacute; veľkosti
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Detsk&eacute; veľkosti</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>134</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="143" data-atr="11" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="144">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">148</td>
                                            <td class="text-left">
                                                Veľkosti - ponožky
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Veľkosti - ponožky</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>22-23</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="144" data-atr="13" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="145">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">149</td>
                                            <td class="text-left">
                                                Veľkosti - ponožky
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Veľkosti - ponožky</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>24-25</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="145" data-atr="13" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="146">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">150</td>
                                            <td class="text-left">
                                                Veľkosti - ponožky
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Veľkosti - ponožky</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>26-27</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="146" data-atr="13" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="147">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">151</td>
                                            <td class="text-left">
                                                Veľkosti - ponožky
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Veľkosti - ponožky</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>28-29</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="147" data-atr="13" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="148">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">152</td>
                                            <td class="text-left">
                                                Veľkosti - ponožky
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Veľkosti</li>
                                                                                                                    <li>Veľkosti - ponožky</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>30-31</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="148" data-atr="13" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="149">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">153</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>100% bavlna</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="149" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="150">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">154</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>vel&uacute;r - 80% bavlna, 20% polyester</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="150" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="151">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">155</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>elastick&aacute; bavlna - 95% bavlna, 5% lycra</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="151" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="152">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">156</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>elastick&yacute; bavlnen&yacute; kompozit - 73% bavlna, 22% polyester, 5% lycra</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="152" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="153">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">157</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>syntetick&aacute; koža - 100% polyester</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="153" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="154">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">158</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>100% akryl</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="154" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="155">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">159</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>100% visk&oacute;za</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="155" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="156">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">160</td>
                                            <td class="text-left">
                                                Materi&aacute;l - zloženie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Materi&aacute;l - zloženie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>95% polyester</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="156" data-atr="14" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="160">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">161</td>
                                            <td class="text-left">
                                                Farba aplik&aacute;cie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Farba aplik&aacute;cie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>cyklam&eacute;nov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="160" data-atr="15" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="161">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">162</td>
                                            <td class="text-left">
                                                Farba aplik&aacute;cie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Farba aplik&aacute;cie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>ne&oacute;novo žlt&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="161" data-atr="15" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="162">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">163</td>
                                            <td class="text-left">
                                                Farba aplik&aacute;cie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Farba aplik&aacute;cie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>oranžov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="162" data-atr="15" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="163">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">164</td>
                                            <td class="text-left">
                                                Farba aplik&aacute;cie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Farba aplik&aacute;cie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>limetkov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="163" data-atr="15" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="164">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">165</td>
                                            <td class="text-left">
                                                Farba aplik&aacute;cie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Farba aplik&aacute;cie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>tyrkysov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="164" data-atr="15" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="165">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">166</td>
                                            <td class="text-left">
                                                Farba aplik&aacute;cie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Farba aplik&aacute;cie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>siv&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="165" data-atr="15" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="166">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">167</td>
                                            <td class="text-left">
                                                Farba aplik&aacute;cie
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Farby</li>
                                                                                                                    <li>Farba aplik&aacute;cie</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>melanžov&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="166" data-atr="15" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="167">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">168</td>
                                            <td class="text-left">
                                                Dodacia doba
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Dodacia doba</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>do 3 pracovn&yacute;ch dn&iacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="167" data-atr="16" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="168">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">169</td>
                                            <td class="text-left">
                                                Dodacia doba
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Dodacia doba</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>do 10 dn&iacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="168" data-atr="16" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="169">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">170</td>
                                            <td class="text-left">
                                                Dodacia doba
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Dodacia doba</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>do 14 dn&iacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="169" data-atr="16" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                           <tr data-arn="170">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">171</td>
                                            <td class="text-left">
                                                Dodacia doba
                                            </td>
                                            <td class="text-left">
                                                                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                                                                                    <li>Dodacia doba</li>
                                                                                                             </ol>
                                                                                           </td>
                                            <td class="text-center">
                                                <strong>do 21 dn&iacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="170" data-atr="16" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                                                   </tbody>
                            </table>
                        </div>
                    </div><!-- end panel-body -->
                    <div class="panel-footer">                                 
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            ZAVRIEŤ                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW ATRRIBUTES -->

<!-- MODAL WINDOW ARTICLE LIST -->                         
<div class="modal" id="addOnArticles" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1200px;">                   
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW ARTICLE LIST -->


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
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/search.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/relatedArticleList.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/alternativeArticleList.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/router.js"></script>
<script type="text/javascript">
  window.onscroll = function (e) {
    var vertical_position = 0;
    if (pageYOffset)//usual
      vertical_position = pageYOffset;
    else if (document.documentElement.clientHeight)//ie
      vertical_position = document.documentElement.scrollTop;
    else if (document.body)//ie quirks
      vertical_position = document.body.scrollTop;

    var topPosition = vertical_position + ((vertical_position == 0) ? 3 : 200);

    $('#btn-save').css({ top: topPosition + 'px' });
  };
  
  Search.init();

  Router.init();

  RelatedArticleList.init(63);

  AlternativeArticleList.init(63);
</script>
<script type="text/javascript">
$(function() {
    var jvalidate = $("#updateArticleForm").validate({
        ignore: [],
        rules: {                                            
            'sku': {
                required: true,
                minlength: 3,
                maxlength: 150
            }
        }                                        
    });
    
            CKEDITOR.replace('ckeditor_189', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "http://carpedmfashion.local/cpanel/drive-api/build-image-register"
        });
        
    $('#categorylist').find('button.push-x').each(function() {
        $(this).on('click',function() {
            var tr = $('#categorylist').find('[data-crn="'+$(this).data('cat-id')+'"]'),
               obj = {
                rNum: tr.find('td').get(0).textContent,
                img: tr.find('td').get(1).innerHTML,
                name: tr.find('td').get(2).textContent,
                desc: tr.find('td').get(3).textContent
               };
               
            pushCatToTable( $(this).data('cat-id'), obj );
        });
    });
    
    $('#attrValueList').find('button.push-y').each(function() {
        $(this).on('click',function() {
            var tr = $('#attrValueList').find('[data-arn="'+$(this).data('atv')+'"]'),
               obj = {
                rNum: tr.find('td').get(0).textContent,
                prAt:  tr.find('td').get(1).textContent,
                branch: tr.find('td').get(2).innerHTML,
                value: tr.find('td').get(3).textContent
               };
            pushAttrVToTable( $(this).data('atv'), $(this).data('atr'), obj );
        });
    });
    
    $('#article-categories').find('tbody').sortable();
    
    function pushCatToTable( id, obj ) {
        var oTable = $('#article-categories');
        var isElm  = (oTable.find('[data-crn="'+id+'"]').length > 0) ? true : false;
        
        if(!isElm) {
            var appendRow = '<tr data-crn="'+id+'">' +
                            '<td class="text-center" style="font-weight:700;color:#660000;"><input type="hidden" name="categories['+obj.rNum+'][\'category-id\']" value="'+id+'">'+obj.rNum+'</td>' +
                            '<td class="text-center">'+obj.img+'</td>' +
                            '<td class="text-left" style="font-weight:700;">'+obj.name+'</td>' +
                            '<td class="text-left">'+obj.desc+'</td>' +
                            '<td class="text-center"><button type="button" onClick="$(this).closest(\'tr\').remove();" class="btn btn-warning">&nbsp;&nbsp;<span class="fa fa-minus"></span></button></td></tr>';
                   
            oTable.append(appendRow);
       }
    }
    
    function pushAttrVToTable( atv, atr, obj ) {
        var oTable = $('#article-attribute-values');
        var isElm  = (oTable.find('[data-arn="'+atv+'"]').length > 0) ? true : false;
        
        if(!isElm) {
            var appendRow = '<tr data-arn="'+atv+'">' +
                            '<td class="text-center" style="font-weight:700;color:#660000;">' + 
                            '<input type="hidden" name="attrValueList['+obj.rNum+'][\'attr-id\']" value="'+atr+'">'+
                            '<input type="hidden" name="attrValueList['+obj.rNum+'][\'value-id\']" value="'+atv+'">'+obj.rNum+'</td>' +
                            '<td class="text-left">'+obj.prAt+'</td>' +
                            '<td class="text-left">'+obj.branch+'</td>' +
                            '<td class="text-center"><strong>'+obj.value+'</strong></td>' +
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
