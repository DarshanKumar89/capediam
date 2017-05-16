<?php /*%%SmartyHeaderCode:2046236568573a22520319c2-01602102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67aa805075e3eccc68f5e4e8cecaeabe996ad645' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/page/page_edit.tpl',
      1 => 1460547449,
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
    '797d5d1f607b96e79d4a2a6cc4d6f294d3f471ca' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/page/page_edit.tpl',
      1 => 1460547449,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '2046236568573a22520319c2-01602102',
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
  'unifunc' => 'content_573a22522381d8_18005531',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a22522381d8_18005531')) {function content_573a22522381d8_18005531($_smarty_tpl) {?><!DOCTYPE html>
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
#btns-action {
    position: absolute;
    top: 4px;
    left: 5px;
    width: 25px;
    min-height: 50px;
    margin: 0;
    padding: 0 0 0 3px;
}
#btns-action > .btn {
    width: 25px;
    height: 50px;
    margin: 0 0 10px 0;
    padding: 0 0 0 3px;
}
.page-image {
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
.page-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.page-image > a.btn-remove {
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
.page-image > a.btn-remove > i {
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
    <a href="cpanel/page-list" title="Stránky">
        Stránky    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="Edit">
        Editovať    </a>
</li>
<li class="active">
    <a href="cpanel/page-edit/12" title="Obchodn&eacute; podmienky">
        Obchodn&eacute; podmienky
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">
        <h2>
            <span class="fa fa-edit"></span>&nbsp;
            Stránky&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="editPageForm"  action="cpanel/update-page" method="post" role="form">
    <input type="hidden" name="page-id" value="12" />
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
        
        <!-- PAGE FORM HEADER -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title" style="overflow: hidden;">
                        <button type="button"
                                class="btn btn-block btn-info pull-left"
                                style="margin-top:0px;margin-right:25px;padding:0;width:29px;height:29px;border-radius:100%;"
                                data-toggle="modal" data-target="#make-copy">
                            <i class="fa fa-files-o" style="position: relative;top: 1px;left: 2.5px;"></i>
                        </button>
                        <span style="display:block;float:left;">
                            <span style="color:#FFFFFF">
                                <i class="fa fa-file-text-o"></i>
                            </span>&nbsp;
                            Obchodn&eacute; podmienky
                        </span>
                    </h3>
                    <ul class="panel-controls">
                        <li class="slider-indicator">
                            <span class="title">
                                <i class="fa fa-camera"></i>
                            </span>
                            <span class="circle-indicator orange">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li class="gallery-indicator">
                            <span class="title">
                               <i class="fa fa-picture-o"></i>
                            </span>
                            <span class="circle-indicator orange">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                    </ul>                      
                </div><!-- end panel-header -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- // PAGE FORM HEADER -->
        
        <!-- PAGE LANGUAGE INFORMATION AND SEO -->
        <div class="col-lg-12">
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
                                            <!-- START TABS -->
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
                                        <div class="col-lg-6">
                                            <h4 style="margin:5px 0;border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                                            <div class="row form-group">
                                                <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                                                    <span class="page-image ">
                                                                                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                         
                                                    </span>
                                                </div><!-- end image -->
                                                <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                                                    <span class="input-group-btn">
                                                        <a href="cpanel/choose-page-image/2/12/189/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                                            <i class="glyphicon glyphicon-hdd"></i>
                                                        </a>
                                                    </span>
                                                    <input type="text"
                                                           placeholder="Načítať obrázok z drive" class="form-control">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>Farba</label>
                                                <div class="input-group color colorpicker" style="padding: 0px;" data-color="rgb(255, 255, 255)" data-color-format="rgb">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <input type="text" name="lang[189]['color']" value="rgb(255, 255, 255)" class="form-control"/>
                                                    <span class="input-group-addon">
                                                        <i style="background-color: rgb(255, 255, 255)"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Titulka stránky                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <input type="text"
                                                           name="lang[189]['site-title']"
                                                           value="Obchodn&eacute; podmienky"
                                                           placeholder="Titulka stránky"
                                                           class="form-control"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Nadpis                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <input type="text"
                                                           name="lang[189]['heading']"
                                                           value="Obchodn&eacute; podmienky"
                                                           placeholder="Nadpis"
                                                           class="form-control"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                  Podtitulok
                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <input type="text"
                                                           name="lang[189]['subheading']"
                                                           value="Obchodn&eacute; podmienky"
                                                           placeholder="Podtitulok"
                                                           class="form-control"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Krátky popis                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <textarea name="lang[189]['description']" class="form-control" rows="5"></textarea>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                        </div><!-- end col -->
                                        <div class="col-lg-6">
                                            <h4 style="margin:5px 0;border-bottom:1px solid green;">SEO</h4>
                                            <div class="form-group">
                                                <label>
                                                    Meta robot (inštrukcie pre robot vyhľadávačov)                                                </label>
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
                                                    Meta tagy (klúčové slová)                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <input type="text"
                                                           name="lang[189]['meta-keywords']"
                                                           value=""
                                                           class="tagsinput form-control"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Meta popis                                                </label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-sk"></span>
                                                    </span>
                                                    <textarea name="lang[189]['meta-description']"class="form-control" rows="5"></textarea>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text-o"></i>
                                                    </span>
                                                </div>
                                            </div><!-- end form-group -->
                                        </div><!-- end col -->
                                        <div class="col-lg-12" style="margin-top:30px;">
                                            <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                                                <span class="pull-left" style="padding-top: 12px;">
                                                    HTML Obsah                                                </span>
                                                <button type="submit" class="btn btn-info pull-right" onclick="javascript: form.action='/cpanel/page/preview/189';form.target='_blank';return true;" title="Preview">
                                                    <span class="fa fa-file-text"></span>
                                                    Ukážka                                                </button>
                                            </h4>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="flag-icon flag-icon-sk"></span>
                                                </span>
                                                <textarea name="lang[189]['html-content']" id="ckeditor_189" class="ckeditor" row="5"><ol style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">&Uacute;vodn&eacute; ustanovenia </span></span></p>
	</li>
</ol>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">1.1 Obchodn&aacute; spoločnosť Carpe DM &nbsp;s.r.o., Tatransk&aacute; 243, 059 86 Nov&aacute; Lesn&aacute;, IČO: 46 171 096 (ďalej primerane len &quot;pred&aacute;vaj&uacute;ci&quot; alebo &bdquo;Carpe DM&ldquo; ) je zap&iacute;san&aacute; v obchodnom registri Okresn&eacute;ho s&uacute;du Pre&scaron;ov, oddiel: Sro, vložka č&iacute;slo: </span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap;">24408/P</span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">. Spoločnosť Carpe DM s.r.o. prostredn&iacute;ctvom tretej osoby prev&aacute;dzkuje n&aacute;kupn&yacute; web port&aacute;l/e-shop/e-store na str&aacute;nke </span><a href="http://www.exisport.com/" style="text-decoration: none;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">www.c</span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">arpedmfashion</span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">.com</span></a><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> (ďalej primerane aj &bdquo;n&aacute;kupn&yacute; port&aacute;l&ldquo;). Prostredn&iacute;ctvom tohto port&aacute;lu m&aacute; tretia osoba (ďalej &bdquo;kupuj&uacute;ci&ldquo;) možnosť prezerať si tovar na str&aacute;nke n&aacute;kupn&eacute;ho port&aacute;lu. S&uacute;časne za podmienok určen&yacute;ch t&yacute;mito v&scaron;eobecn&yacute;mi obchodn&yacute;mi podmienkami ( ďalej &bdquo;VOP&ldquo; ) a za predpokladu akcept&aacute;cie objedn&aacute;vky/n&aacute;vrhu k&uacute;pnej zmluvy pred&aacute;vaj&uacute;cim m&aacute; t&aacute;to osoba ako kupuj&uacute;ci možnosť zak&uacute;piť n&iacute;m vybran&yacute; tovar. </span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">1.2 Adresa elektronickej po&scaron;ty pred&aacute;vaj&uacute;ceho je estore@carpedmfashion.com. Telef&oacute;nne č&iacute;slo pred&aacute;vaj&uacute;ceho je +421 52 381 11 87,. Operačn&eacute; hodiny call centra a reklamačn&eacute;ho strediska pred&aacute;vaj&uacute;ceho: bežn&eacute; pracovn&eacute; dni pondelok až piatok od 09.00 -12.00 hod. mimo dn&iacute; pracovn&eacute;ho pokoja a sviatkov. Tieto &uacute;daje m&ocirc;žu byť kedykoľvek pozmenen&eacute; alebo aktualizovan&eacute; na </span><a href="http://www.exisport.com/" style="text-decoration: none;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">www.</span></a><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">carpedmfashion.com</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">1.3 Tieto VOP upravuj&uacute; pr&aacute;vne vzťahy medzi spoločnosťou Carpe DM s.r.o. ako pred&aacute;vaj&uacute;cim a kupuj&uacute;cim, ktor&yacute; v s&uacute;lade a postupom podľa VOP prejav&iacute; z&aacute;ujem o k&uacute;pu tovaru na internetovej str&aacute;nke </span><a href="http://www.exisport.com/" style="text-decoration: none;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(17, 85, 204); text-decoration: underline; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">www.carpedmfashion.com</span></a><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">. Tieto pr&aacute;vne vzťahy medzi pred&aacute;vaj&uacute;cim a kupuj&uacute;cim vznikaj&uacute;ce pri k&uacute;pe, dod&aacute;vke tovaru a reklam&aacute;ci&aacute;ch v&aacute;d tovaru sa v z&aacute;vislosti od ich obsahu a &uacute;častn&iacute;kov k&uacute;py primerane riadia ustanoveniami pr&iacute;slu&scaron;n&yacute;ch pr&aacute;vnych predpisov Slovenskej republiky, najm&auml; Občianskeho z&aacute;konn&iacute;ka SR a Obchodn&eacute;ho z&aacute;konn&iacute;ka SR. Tieto VOP upravuj&uacute; aj povinnosti str&aacute;n do okamihu uzatvorenia k&uacute;pnej zmluvy na z&aacute;klade registr&aacute;cie osoby kupuj&uacute;ceho. Vz&aacute;jomn&eacute; vzťahy pred&aacute;vaj&uacute;ceho a kupuj&uacute;ceho sa riadia aj reklamačn&yacute;m poriadkom pre internetov&yacute; obchod </span><a href="http://www.exisport.com/" style="text-decoration: none;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">www.</span></a><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">carpedmfashion.com (ďalej len &quot;Reklamačn&yacute; poriadok&quot;) uveden&yacute;m v bode 5. VOP. </span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">1.4 K&uacute;pnou zmluvou sa rozumie zmluva medzi pred&aacute;vaj&uacute;cim a kupuj&uacute;cim, ktorej predmetom je k&uacute;pa tovaru prezentovan&eacute;ho na www.carpedmfashion.com, uzavret&aacute; podľa čl&aacute;nku 2. a nasl. VOP. </span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">1.5 Ustanovenia VOP a z&aacute;kona upravuj&uacute;ce pr&aacute;va spotrebiteľa sa nevzťahuj&uacute; na kupuj&uacute;ceho, ktor&yacute; nie je spotrebiteľ podľa z&aacute;kona č. 250/2007 Z.z. alebo ktor&yacute; nakupuje tovar za &uacute;čelom podnikania a nie za &uacute;čelom osobnej spotreby. Tejto osobe neprin&aacute;ležia pr&aacute;va spotrebiteľa podľa platn&yacute;ch pr&aacute;vnych predpisov. Zodpovednosť za vady tovaru a vz&aacute;jomn&eacute; vzťahy pred&aacute;vaj&uacute;ceho a kupuj&uacute;ceho, ktor&yacute; nie je spotrebiteľ sa v tomto pr&iacute;pade riadia ustanoveniami Obchodn&eacute;ho z&aacute;konn&iacute;ka Slovenskej republiky.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">1.6 &Uacute;daje prezentovan&eacute;ho tovaru na n&aacute;kupnom port&aacute;le ( najm&auml; dostupnosť, cena, veľkosť, z&aacute;soby ) nie s&uacute; aktualizovan&eacute; pred&aacute;vaj&uacute;cim online v každom okamihu. Tieto &uacute;daje ohľadne tovaru nemusia byť na n&aacute;kupnom port&aacute;le vždy spr&aacute;vne a &uacute;pln&eacute; v porovnan&iacute; so skutočn&yacute;m stavom. &Uacute;daj &bdquo;dostupnosť&ldquo; zobrazen&yacute; pri tovarovej položke na n&aacute;kupnom port&aacute;li nie je možn&eacute; interpretovať ako lehotu pre dodanie tovaru pred&aacute;vaj&uacute;cim. Uveden&aacute; dostupnosť tovaru je len indikat&iacute;vny, nez&aacute;v&auml;zn&yacute; odhad času, ktor&yacute; sa predpoklad&aacute; pre vypredanie dostupn&yacute;ch skladov&yacute;ch z&aacute;sob pred&aacute;vaj&uacute;ceho. Tovar nie je možn&eacute; vopred uk&aacute;zať kupuj&uacute;cemu, nie je možn&eacute; vždy vykonať prijatie a akcept&aacute;ciu objedn&aacute;vok a vykonať jeho dodanie, hoc prostredn&iacute;ctvom tretej osoby. Tovar pred&aacute;van&yacute; cez n&aacute;kupn&yacute; port&aacute;l je vždy limitovan&yacute; aktu&aacute;lnymi skladov&yacute;mi z&aacute;sobami pred&aacute;vaj&uacute;ceho a doobjedn&aacute;vanie a/alebo dod&aacute;vanie tovaru po jeho vypredan&iacute; nie je možn&eacute;, ani prostredn&iacute;ctvom inej osoby. V určit&yacute;ch pr&iacute;padoch pred&aacute;vaj&uacute;ci nebude schopn&yacute; dodať v&yacute;robky alebo rovnocenn&eacute; v&yacute;robky alebo zariadiť, aby dod&aacute;vku uskutočnil in&yacute; pred&aacute;vaj&uacute;ci za t&uacute;to cenu, v čase a v množstve, ktor&eacute; s&uacute; rozumn&eacute; vzhľadom na v&yacute;robok, rozsah reklamy v&yacute;robku a cenu, najm&auml; ak nastal mimoriadny pr&iacute;pad podľa čl. 2.15 VOP. Na každ&uacute; tak&uacute;to mimoriadnu skutočnosť nemožnosti dodania tovaru bude vždy kupuj&uacute;ci informovan&yacute; vhodn&yacute;m sp&ocirc;sobom a v pr&iacute;pade uzatvorenej zmluvy m&aacute; každ&aacute; zo str&aacute;n pr&aacute;vo od zmluvy odst&uacute;piť.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">1.7 Pokiaľ na str&aacute;nke n&aacute;kupn&eacute;ho port&aacute;lu nie je uveden&eacute; osobitne inak, reklamn&eacute; a s&uacute;ťažn&eacute; akcie spoločnosti Carpe DM s.r.o. zverejnen&eacute; cez reklamn&eacute; let&aacute;ky spoločnosti Carpe DM s.r.o. s&uacute; platn&eacute; v&yacute;lučne pre predaj tovaru v maloobchodn&yacute;ch sieťach Carpe DM a nevzťahuj&uacute; sa na predaj tovaru cez n&aacute;kupn&yacute; port&aacute;l www.carpedmfashion.com.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<ol start="2" style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Objedn&aacute;vanie tovaru / k&uacute;pna zmluva / &uacute;kony pre uzatvorenie zmluvy</span></span></p>
	</li>
</ol>

<p style="line-height: 20.8px;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.1. K&uacute;pa tovaru sa realizuje formou vystavenia a odoslania objedn&aacute;vky kupuj&uacute;cim v n&aacute;kupnom port&aacute;li pred&aacute;vaj&uacute;ceho s t&yacute;m, že objedn&aacute;vka kupuj&uacute;ceho mus&iacute; byť ods&uacute;hlasen&aacute; ( akceptovan&aacute; ) pred&aacute;vaj&uacute;cim v s&uacute;lade s VOP, inak zmluvn&yacute; vzťah nevznikne. Ak je objedn&aacute;vka akceptovan&aacute; pred&aacute;vaj&uacute;cim postupom podľa VOP, pred&aacute;vaj&uacute;ci dod&aacute; objednan&yacute; tovar v dodacej lehote podľa čl. 4.1 VOP. Pred odoslan&iacute;m objedn&aacute;vky kupuj&uacute;cim s&uacute; na n&aacute;kupnom port&aacute;li a vo VOP kupuj&uacute;cemu oznamovan&eacute; a poskytovan&eacute; inform&aacute;cie podľa osobitn&yacute;ch predpisov, najm&auml; podľa &sect; 3 z&aacute;kona č. 102/2014 Z.z. Kupuj&uacute;ci prejavuje s&uacute;hlas s t&yacute;mito podmienkami odkliknut&iacute;m pr&iacute;slu&scaron;n&eacute;ho pol&iacute;čka pred odoslan&iacute;m objedn&aacute;vky na port&aacute;li. Kupuj&uacute;ci odoslan&iacute;m objedn&aacute;vky potvrdzuje, že bol obozn&aacute;men&yacute; s t&yacute;m, že s podan&iacute;m objedn&aacute;vky a s&uacute;časťou objedn&aacute;vky je povinnosť zaplatiť cenu objednan&eacute;ho tovaru.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.2. Pre možnosť akt&iacute;vneho nakupovania na n&aacute;kupnom port&aacute;li, pr&iacute;padne pre &uacute;časť na reklamn&yacute;ch a s&uacute;ťažn&yacute;ch aktivit&aacute;ch pred&aacute;vaj&uacute;ceho je nevyhnutn&eacute;, aby sa kupuj&uacute;ci zaregistroval na www.carpedmfashion.com v registračnej časti port&aacute;lu. Registr&aacute;ciu kupuj&uacute;ceho je možn&eacute; vykonať pred v&yacute;berom tovaru alebo v procese jeho v&yacute;beru. Osoba vypĺňaj&uacute;ca registračn&yacute; formul&aacute;r je povinn&aacute; vyplniť &uacute;daje podľa požadovan&yacute;ch pol&iacute; registračn&eacute;ho formul&aacute;ra. Vyplnen&iacute;m registračn&eacute;ho formul&aacute;ra s&uacute;časne kupuj&uacute;ci udeľuje s&uacute;hlas so spracovan&iacute;m svojich osobn&yacute;ch a ďal&scaron;&iacute;ch &uacute;dajov v s&uacute;lade s čl. 7. a nasl. VOP a s podmienkami podľa VOP. Tieto &uacute;daje je kupuj&uacute;ci povinn&yacute; v pr&iacute;pade ich zmeny bezodkladne aktualizovať na port&aacute;li pri zasielan&iacute; objedn&aacute;vky, nakoľko ich spr&aacute;vnosť, pravdivosť a aktu&aacute;lnosť m&aacute; vplyv na dodanie tovaru kupuj&uacute;cemu. Povinn&eacute; polia registračn&eacute;ho formul&aacute;ra s&uacute; označen&eacute; znakom &ldquo;*&ldquo;. Kupuj&uacute;ci je povinn&yacute; uviesť spr&aacute;vne, &uacute;pln&eacute; a pravdiv&eacute; &uacute;daje. Nesplnenie uveden&yacute;ch povinnosti kupuj&uacute;cim je vykladan&eacute; v neprospech kupuj&uacute;ceho. &Uacute;spe&scaron;n&yacute; proces registr&aacute;cie je ukončen&yacute; pridelen&iacute;m pr&iacute;stupov&eacute;ho mena a hesla, osobitn&yacute; e-mail nie je posielan&yacute;. Kupuj&uacute;ci je povinn&yacute; uschovať pr&iacute;stupov&eacute; meno a heslo generovan&eacute; v registračnom procese na bezpečnom mieste a ochraňovať tak, aby nemohlo d&ocirc;jsť k jeho zneužitiu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.3. Kupuj&uacute;ci si tovar prezer&aacute; a vyber&aacute; podľa tovarov&yacute;ch kateg&oacute;ri&iacute; uveden&yacute;ch v ľavom tovarovom menu, resp. kliknut&iacute;m na zobrazen&yacute; tovar. Pri tovare si kupuj&uacute;ci vyberie &uacute;daje podľa zverejnen&yacute;ch objedn&aacute;vac&iacute;ch inform&aacute;ci&iacute; a kliknut&iacute;m na tlačidlo &bdquo;Vložiť do ko&scaron;&iacute;ka&ldquo; tovar prid&aacute; do svojej objedn&aacute;vky. V pr&iacute;pade, že proces v&yacute;beru tovaru kupuj&uacute;ci ukončil, klikne na tlačidlo &bdquo;K&uacute;piť obsah ko&scaron;&iacute;ka&ldquo;. Inak je opr&aacute;vnen&yacute; vr&aacute;tiť sa k procesu v&yacute;beru tovarov kliknut&iacute;m na &bdquo;Pokračovať v n&aacute;kupe&ldquo;.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.4. Proces tvorby vystavenia objedn&aacute;vky kupuj&uacute;ceho pozost&aacute;va zo 4 krokov: a) v&yacute;ber tovaru a kliknutie na tlačidlo &bdquo; K&uacute;piť obsah ko&scaron;&iacute;ka&ldquo; b) v&yacute;beru sp&ocirc;sobu platby, dopravy a ceny dopravy, c) potvrdenie objedn&aacute;vky, d) odoslanie objedn&aacute;vky.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.5. V každom z t&yacute;chto krokov postupuje kupuj&uacute;ci podľa navigačn&yacute;ch in&scaron;trukci&iacute; a každ&yacute; z t&yacute;chto krokov je spravidla ukončen&yacute; kliknut&iacute;m na &bdquo;Potvrdzujem&ldquo;. Kupuj&uacute;ci je povinn&yacute; uviesť &uacute;pln&eacute;, pravdiv&eacute; a spr&aacute;vne &uacute;daje nevyhnutn&eacute; pre spr&aacute;vne doručenie tovaru. Kupuj&uacute;ci je povinn&yacute; odkontrolovať spr&aacute;vnosť vybran&yacute;ch d&aacute;t a &uacute;dajov v procese objedn&aacute;vania tovaru pred ich definit&iacute;vnym odoslan&iacute;m pred&aacute;vaj&uacute;cemu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.6. V&yacute;slovne sa vylučuje aplik&aacute;cia ak&yacute;chkoľvek in&yacute;ch podmienok kupuj&uacute;ceho uveden&yacute;ch v objedn&aacute;vke, inom dokumente, spr&aacute;ve alebo v e-maili kupuj&uacute;ceho, ktor&eacute; by boli v rozpore s t&yacute;mito VOP.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.7. Objedn&aacute;vka kupuj&uacute;ceho sa považuje za odoslan&uacute;, ak bude doručen&aacute; pred&aacute;vaj&uacute;cemu a ak bude obsahovať v&scaron;etky požadovan&eacute; &uacute;daje - n&aacute;zov objedn&aacute;van&eacute;ho tovaru, jeho množstvo, cenu, dodaciu, fakturačn&uacute; adresu, e-mailov&yacute; a telefonick&yacute; kontakt &nbsp;na kupuj&uacute;ceho.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.8. Pred zaslan&iacute;m objedn&aacute;vky pred&aacute;vaj&uacute;cemu je od kupuj&uacute;ceho vždy vyžadovan&eacute;, aby kupuj&uacute;ci odklikol a potvrdil, že sa obozn&aacute;mil a s&uacute;hlas&iacute; s platn&yacute;mi VOP pred&aacute;vaj&uacute;ceho, považuj&uacute;c ich za s&uacute;časť zmluvn&eacute;ho vzťahu medzi pred&aacute;vaj&uacute;cim a kupuj&uacute;cim. Proces vystavenia a zaslania objedn&aacute;vky kupuj&uacute;cim nie je možn&eacute; zavŕ&scaron;iť bez vykonania tohto &uacute;konu. Každej objedn&aacute;vke je pridelen&eacute; evidenčn&eacute; č&iacute;slo. Pri komunik&aacute;cii s pred&aacute;vaj&uacute;cim a pri &uacute;hrade uv&aacute;dza kupuj&uacute;ci aj č&iacute;slo objedn&aacute;vky.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.9. Kupuj&uacute;ci posiela pred&aacute;vaj&uacute;cemu objedn&aacute;vku cez n&aacute;kupn&yacute; port&aacute;l. T&aacute;to objedn&aacute;vka je n&aacute;vrhom kupuj&uacute;ceho na uzavretie k&uacute;pnej zmluvy za zmluvn&yacute;ch podmienok podľa t&yacute;chto VOP. Objedn&aacute;vka je určen&aacute; pre pred&aacute;vaj&uacute;ceho na prijatie pred&aacute;vaj&uacute;cim v lehote 15 dn&iacute; od jej doručenia pred&aacute;vaj&uacute;cemu. Odoslan&iacute;m objedn&aacute;vky pred&aacute;vaj&uacute;cemu cez n&aacute;kupn&yacute; port&aacute;l prejavuje kupuj&uacute;ci v&ocirc;ľu byť viazan&yacute; svojou objedn&aacute;vkou počas uvedenej lehoty, k&uacute;piť a prevziať n&iacute;m vybran&yacute; tovar za k&uacute;pnu cenu, a to v s&uacute;lade s podmienkami VOP, a to za predpokladu jej akcept&aacute;cie pred&aacute;vaj&uacute;cim. Po doručen&iacute; objedn&aacute;vky pred&aacute;vaj&uacute;ci elektronicky bezodkladne potvrd&iacute; objedn&aacute;vku kupuj&uacute;ceho, t.j. informuje kupuj&uacute;ceho o obdržan&iacute; a zaraden&iacute; objedn&aacute;vky kupuj&uacute;ceho v syst&eacute;me pred&aacute;vaj&uacute;ceho. Elektronick&eacute; potvrdenie objedn&aacute;vky nie je akcept&aacute;ciou/prijat&iacute;m objedn&aacute;vky pred&aacute;vaj&uacute;cim podľa čl. 2 VOP a nezaklad&aacute; vznik čiastkovej k&uacute;pnej zmluvy.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.10. Na z&aacute;klade dohody str&aacute;n a v s&uacute;lade s VOP je k&uacute;pna zmluva medzi stranami uzatvoren&aacute; ak pred&aacute;vaj&uacute;ci objedn&aacute;vku kupuj&uacute;ceho potvrd&iacute; a s&uacute;časne ak osobitn&yacute;m e-mailom alebo spr&aacute;vou adresovanou kupuj&uacute;cemu ju v uvedenej lehote 15 dn&iacute; od doručenia objedn&aacute;vky akceptuje ( t.j. prejav&iacute; s&uacute;hlas s objedn&aacute;vkou ) postupom podľa t&yacute;chto VOP. Pred&aacute;vaj&uacute;ci vykon&aacute; akcept&aacute;ciu objedn&aacute;vky kupuj&uacute;ceho zaslan&iacute;m e-mailu alebo spr&aacute;vy kupuj&uacute;cemu. V akceptačnom e-maili pred&aacute;vaj&uacute;ceho bude uveden&aacute; skutočnosť akcept&aacute;cie objedn&aacute;vky kupuj&uacute;ceho, pr&iacute;padne aj skutočnosť exped&iacute;cie tovaru ( pre VOP ďalej primerane &bdquo;akcept&aacute;cia objedn&aacute;vky&ldquo;). Akcept&aacute;ciou objedn&aacute;vky je medzi stranami uzatvoren&aacute; k&uacute;pna zmluva. Pred&aacute;vaj&uacute;ci je na z&aacute;klade dohody str&aacute;n a t&yacute;chto VOP povinn&yacute; akceptovan&uacute; objedn&aacute;vku splniť v lehote podľa čl. 4.1 VOP. V tomto e-maili o akcept&aacute;ci objedn&aacute;vky s&uacute; s&uacute;časne kupuj&uacute;cemu posielan&eacute; z&aacute;konom vyžadovan&eacute; inform&aacute;cie pre spotrebiteľa, </span><a href="http://www.exisport.com/public/files/Poucenie_o_uplatneni_prava_spotrebitela_na_odstupenie_od_zmluvy.pdf" style="text-decoration: none;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Poučenie spotrebiteľa o uplatnen&iacute; pr&aacute;va na odst&uacute;penie o zmluvy (PDF)</span></a><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">, </span><a href="http://www.exisport.com/public/files/Vzorovy_formular_na_odstupenie_od_zmluvy.pdf" style="text-decoration: none;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">formul&aacute;r Odst&uacute;penia od zmluvy (PDF)</span></a><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">, pr&iacute;padne link v e-maili na tieto inform&aacute;cie a dokumenty. Aktiv&aacute;ciou tohto linku v e-maili sa tieto inform&aacute;cie a dokumenty kupuj&uacute;cemu zobrazia a kupuj&uacute;ci m&aacute; pr&aacute;vo si ich aj uložiť.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.11. Objedn&aacute;vku m&ocirc;že kupuj&uacute;ci odvolať e-mailom doručen&yacute;m pred&aacute;vaj&uacute;cemu, ak toto odvolanie d&ocirc;jde pred&aacute;vaj&uacute;cemu sk&ocirc;r ako pred&aacute;vaj&uacute;ci vykon&aacute; akcept&aacute;ciu objedn&aacute;vky postupom podľa VOP. M&aacute;rnym uplynut&iacute;m lehoty na prijatie objedn&aacute;vky (akcept&aacute;ciu objedn&aacute;vky ) pred&aacute;vaj&uacute;cim bez jej akcept&aacute;cie sa objedn&aacute;vka automaticky zru&scaron;&iacute;. Objedn&aacute;vka sa zru&scaron;uje aj v in&yacute;ch pr&iacute;padoch podľa VOP.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.12. Zmena v objedn&aacute;vke/podmienkach: ak pred&aacute;vaj&uacute;ci nebude schopn&yacute; ods&uacute;hlasiť - akceptovať objedn&aacute;vku kupuj&uacute;ceho v celom rozsahu ( napr. 1 z 4 položiek nebude dostupn&aacute; ) alebo ak navrhne jej zmenu alebo zmenu podmienok dodania z in&yacute;ch d&ocirc;vodov, kupuj&uacute;ci bude o tejto skutočnosti informovan&yacute; e-mailom alebo in&yacute;m vhodn&yacute;m sp&ocirc;sobom. S&uacute;časne bude požiadan&yacute; o vyjadrenie s&uacute;hlasu, resp. nes&uacute;hlasu so zmenou. Kupuj&uacute;ci je povinn&yacute; vyjadriť s&uacute;hlas, resp. nes&uacute;hlas v lehote 2 dn&iacute; odo dňa ozn&aacute;menia navrhovanej zmeny. Po t&uacute;to dobu bud&uacute; dostupn&eacute; položky z objedn&aacute;vky kupuj&uacute;ceho rezervovan&eacute; pre kupuj&uacute;ceho. Až akcept&aacute;ciou ( ods&uacute;hlasen&iacute;m ) pred&aacute;vaj&uacute;cim navrhovanej zmeny v objedn&aacute;vke zo strany kupuj&uacute;ceho vznikne medzi stranami zmluvn&yacute; vzťah. V pr&iacute;pade ak kupuj&uacute;ci neods&uacute;hlas&iacute; zmenu v uvedenej lehote uveden&yacute;m sp&ocirc;sobom, objedn&aacute;vka kupuj&uacute;ceho sa m&aacute;rnym uplynut&iacute;m uvedenej lehoty považuje za zru&scaron;en&uacute; v celom rozsahu a n&aacute;vrh pred&aacute;vaj&uacute;ceho na zmenu za neakceptovan&yacute; kupuj&uacute;cim.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.13. K&uacute;pna zmluva medzi pred&aacute;vaj&uacute;cim a kupuj&uacute;cim je uzavret&aacute; akcept&aacute;ciou objedn&aacute;vky kupuj&uacute;ceho pred&aacute;vaj&uacute;cim alebo akcept&aacute;ciou zmeny objedn&aacute;vky navrhnutej pred&aacute;vaj&uacute;cim a vykonanej kupuj&uacute;cim. Z k&uacute;pnej zmluvy vznikne pred&aacute;vaj&uacute;cemu povinnosť predmet k&uacute;py kupuj&uacute;cemu odovzdať a plniť povinnosti podľa VOP. Kupuj&uacute;cemu vznikne z uzatvorenej zmluvy povinnosť predmet k&uacute;py prevziať, zaplatiť zaň pred&aacute;vaj&uacute;cemu dohodnut&uacute; cenu plnen&iacute; a plniť povinnosti podľa zmluvy a VOP. Pred&aacute;vaj&uacute;ci spln&iacute; akceptovan&uacute; objedn&aacute;vku v lehote podľa čl. 4.1 VOP.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.14. V osobitn&yacute;ch pr&iacute;padoch a pred odoslan&iacute;m akcept&aacute;cie si pred&aacute;vaj&uacute;ci vyhradzuje pr&aacute;vo vyžiadať si od kupuj&uacute;ceho dodanie ďal&scaron;&iacute;ch potrebn&yacute;ch podkladov, &uacute;dajov, pr&iacute;padne vykonať overenie spr&aacute;vnosti osobn&yacute;ch &uacute;dajov, e-mailovej adresy alebo telef&oacute;nneho č&iacute;sla kupuj&uacute;ceho. Pred&aacute;vaj&uacute;ci je vždy opr&aacute;vnen&yacute; v z&aacute;vislosti od charakteru objedn&aacute;vky kupuj&uacute;ceho požiadať kupuj&uacute;ceho o dodatočn&uacute; autoriz&aacute;ciu objedn&aacute;vky alebo totožnosti kupuj&uacute;ceho vhodn&yacute;m sp&ocirc;sobom, ako napr&iacute;klad v p&iacute;somnej forme, e-mailom, sms alebo telefonicky. Ak kupuj&uacute;ci nevykon&aacute; dodatočn&uacute; autoriz&aacute;ciu pred&aacute;vaj&uacute;cim požadovan&yacute;m sp&ocirc;sobom a v pred&aacute;vaj&uacute;cim požadovanej lehote, m&aacute;rnym uplynut&iacute;m tejto lehoty sa objedn&aacute;vka ( pred jej akcept&aacute;ciou ) alebo k&uacute;pna zmluva ( po akcept&aacute;cii ) zru&scaron;uje od začiatku.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.15. Ak pred&aacute;vaj&uacute;ci pred alebo po uzatvoren&iacute; zmluvy zist&iacute; tlačov&uacute;, syst&eacute;mov&uacute;, ľudsk&uacute;, dod&aacute;vateľsk&uacute; alebo in&uacute; chybu ohľadne tovaru, jeho ceny, dostupnosti, množstva alebo možnost&iacute; jeho dodania, ako aj v pr&iacute;pade vypredania z&aacute;sob, nedostupnosti tovaru alebo ak nie je schopn&yacute; dodať tovar kupuj&uacute;cemu v dohodnutej lehote alebo v cene uvedenej v internetovom obchode alebo z d&ocirc;vodov vy&scaron;&scaron;ej moci, o tejto skutočnosti bude informovať kupuj&uacute;ceho. Pred&aacute;vaj&uacute;ci i kupuj&uacute;ci je v ktoromkoľvek z t&yacute;chto mimoriadnych pr&iacute;padov opr&aacute;vnen&yacute; pred uzatvoren&iacute;m zmluvy svoju objedn&aacute;vku odvolať/zru&scaron;iť (kupuj&uacute;ci), resp. ju odmietnuť (pred&aacute;vaj&uacute;ci). Ak nastane tak&aacute;to mimoriadna okolnosť po uzatvoren&iacute; zmluvy, pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; odst&uacute;piť od zmluvy do okamihu dodania tovaru kupuj&uacute;cemu. Kupuj&uacute;ci je taktiež v uvedenom pr&iacute;pade v&yacute;skytu tejto mimoriadnej ozn&aacute;menej okolnosti opr&aacute;vnen&yacute; odst&uacute;piť od k&uacute;pnej zmluvy v s&uacute;lade s VOP a pr&aacute;vnymi predpismi. Ak kupuj&uacute;ci už zaplatil k&uacute;pnu cenu, t&aacute;to mu bude vr&aacute;ten&aacute; v s&uacute;lade s pr&aacute;vnymi predpismi a VOP. Pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; jednostranne odst&uacute;piť od zmluvy a/alebo nevydať tovar kupuj&uacute;cemu aj v pr&iacute;pade ak zist&iacute;, že mu v komunik&aacute;cii boli uveden&eacute; alebo poskytnut&eacute; nespr&aacute;vne, ne&uacute;pln&eacute; alebo nepravdiv&eacute; &uacute;daje ohľadne kupuj&uacute;ceho, osoby preberaj&uacute;cej tovar alebo ak hroz&iacute;, že v d&ocirc;sledku spr&aacute;vania osoby, s ktorou pred&aacute;vaj&uacute;ci komunikoval m&ocirc;že d&ocirc;jsť k vzniku &scaron;kody na strane pred&aacute;vaj&uacute;ceho ( napr. podvodn&eacute; konanie ).</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.16. Kupuj&uacute;ci je opr&aacute;vnen&yacute; jednostranne odst&uacute;piť od zmluvy v obdob&iacute; od uzatvorenia zmluvy až do doručenia tovaru. Možnosti odst&uacute;penia kupuj&uacute;ceho po prevzat&iacute; tovaru s&uacute; uveden&eacute; vo VOP a v pr&aacute;vnych predpisoch. Pr&iacute;lohou VOP je aj Poučenie o uplatnen&iacute; pr&aacute;va spotrebiteľa na odst&uacute;penie od zmluvy, ako aj Vzorov&yacute; formul&aacute;r pre spotrebiteľa na odst&uacute;penie od zmluvy. Tieto dokumenty si kupuj&uacute;ci m&ocirc;že stiahnuť z nasledovnej adresy/linku. Pred&aacute;vaj&uacute;ci t&yacute;mto pri uzavret&iacute; zmluvy poskytuje spotrebiteľovi Poučenie o uplatnen&iacute; pr&aacute;va spotrebiteľa na odst&uacute;penie od zmluvy a Vzorov&yacute; formul&aacute;r na odst&uacute;penie spotrebiteľa od zmluvy pri dodan&iacute; tovaru.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.17. Kupuj&uacute;ci ani pred&aacute;vaj&uacute;ci nie je opr&aacute;vnen&yacute; post&uacute;piť pohľad&aacute;vku zo vz&aacute;jomn&yacute;ch vzťahov na tretiu osobu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">2.18. Pred odoslan&iacute;m objedn&aacute;vky je kupuj&uacute;ci opr&aacute;vnen&yacute; za &uacute;čelom uzatvorenia zmluvy, zistenia alebo opravy technick&yacute;ch ch&yacute;b vykonať &uacute;kony a použiť technick&eacute; prostriedky pop&iacute;san&eacute; v čl. 2. a 3. t&yacute;chto VOP.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<ol start="3" style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">K&uacute;pna cena a platobn&eacute; podmienky</span></span></p>
	</li>
</ol>

<p style="line-height: 20.8px;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.1. Kupuj&uacute;ci je povinn&yacute; zaplatiť pred&aacute;vaj&uacute;cemu za tovar k&uacute;pnu cenu a cenu prepravy podľa pred&aacute;vaj&uacute;cim akceptovanej objedn&aacute;vky ( uzatvorenej zmluvy ). Pri tvoren&iacute; objedn&aacute;vky s&uacute; tieto položky uveden&eacute; taktiež sum&aacute;rne ( s&uacute;čet ceny tovaru a prepravy ). Cena tovaru na port&aacute;li je uveden&aacute; s DPH, pokiaľ nie je uveden&eacute;, že ide o cenu bez DPH. DPH je pri dodan&iacute; tovaru a služieb uplatňovan&aacute; v s&uacute;lade s pr&aacute;vnymi predpismi.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.2. V k&uacute;pnej cene tovaru nie s&uacute; zahrnut&eacute; poplatky b&aacute;nk za vykonanie &uacute;hrady k&uacute;pnej ceny, n&aacute;klady na prepravu tovaru, n&aacute;klady dobierky, n&aacute;klady doručovania zak&uacute;pen&eacute;ho tovaru podľa bodu 4. VOP, n&aacute;klady na použitie elektronick&yacute;ch prostriedkov na komunik&aacute;ciu. Tieto poplatky a n&aacute;klady je povinn&yacute; zaplatiť kupuj&uacute;ci, ak ďalej nie je uveden&eacute; inak. Pri platbe zo zahraničia je kupuj&uacute;ci ako pr&iacute;kazca platby povinn&yacute; zn&aacute;&scaron;ať poplatky svojej banky a ostatn&eacute; poplatky, najm&auml; kore&scaron;pondenčn&yacute;ch b&aacute;nk a banky pr&iacute;jemcu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.3. Cena sa m&ocirc;že zmeniť z d&ocirc;vodov zjavnej tlačovej či inej chyby t&yacute;kaj&uacute;cej sa ceny tovaru zistenej v syst&eacute;me pred&aacute;vaj&uacute;ceho alebo zverejnenej na n&aacute;kupnom port&aacute;li pri tovare. Kupuj&uacute;ci i pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; zru&scaron;iť objedn&aacute;vku, resp. odst&uacute;piť od k&uacute;pnej zmluvy ( do okamihu prevzatia tovaru ) ak je kupuj&uacute;cemu ozn&aacute;men&aacute; zmena k&uacute;pnej ceny niektorej položky v d&ocirc;sledku zjavnej tlačovej či inej chyby t&yacute;kaj&uacute;cej sa ceny tovaru.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.4. Sp&ocirc;sob zaplatenia k&uacute;pnej ceny, n&aacute;kladov dopravy tovaru ( sp&ocirc;sob platenia vol&iacute; kupuj&uacute;ci v procese objedn&aacute;vania tovaru na n&aacute;kupnom port&aacute;li a je uveden&yacute; v objedn&aacute;vke s vyč&iacute;slen&iacute;m n&aacute;kladov ):</span></span></p>

<ul style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">hotovostne pri prevzat&iacute; tovaru ( dobierka ) &ndash; k&uacute;pna cena a n&aacute;klady dobierky i prepravy tovaru s&uacute; uveden&eacute; v n&aacute;kupnom ko&scaron;&iacute;ku v procese objedn&aacute;vania tovaru,</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">hotovostne vkladom na &uacute;čet pred&aacute;vaj&uacute;ceho &ndash; k&uacute;pna cena a n&aacute;klady dopravy tovaru s&uacute; uveden&eacute; v n&aacute;kupnom ko&scaron;&iacute;ku pri objedn&aacute;van&iacute; tovaru,</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">bezhotovostne &uacute;hradou na &uacute;čet pred&aacute;vaj&uacute;ceho v momente vytv&aacute;rania objedn&aacute;vky alebo po akcept&aacute;cii objedn&aacute;vky &ndash; k&uacute;pna cena a n&aacute;klady prepravy tovaru s&uacute; uveden&eacute; v n&aacute;kupnom ko&scaron;&iacute;ku pri objedn&aacute;van&iacute; tovaru.</span></span></p>
	</li>
</ul>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Pri platen&iacute; je ako variabiln&yacute; symbol nutn&eacute; uviesť č&iacute;slo objedn&aacute;vky kupuj&uacute;ceho. Kupuj&uacute;cim nespr&aacute;vne uveden&yacute; variabiln&yacute; symbol pri platbe m&aacute; za n&aacute;sledok nespr&aacute;vne z&uacute;čtovanie k&uacute;pnej ceny a kupuj&uacute;ci nesie v&scaron;etky rizik&aacute; s t&yacute;m spojen&eacute; a kupuj&uacute;ci je v ome&scaron;kan&iacute; s plnen&iacute;m povinnosti zaplatiť.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.5. Splatnosť k&uacute;pnej ceny:</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">a) pri zvolen&iacute; bezhotovostnej platby alebo hotovostnej platbe vkladom na &uacute;čet pred&aacute;vaj&uacute;ceho: kupuj&uacute;ci je povinn&yacute; zaplatiť pred&aacute;vaj&uacute;cemu k&uacute;pnu cenu najnesk&ocirc;r do 2 dn&iacute; odo dňa uzatvorenia zmluvy a pred prevzat&iacute;m tovaru sp&ocirc;sobom podľa čl. 3. VOP; kupuj&uacute;ci je opr&aacute;vnen&yacute; zaplatiť už pri vystaven&iacute; a odoslan&iacute; objedn&aacute;vky pred&aacute;vaj&uacute;cemu s t&yacute;m, že platba je vn&iacute;man&aacute; ako preddavok na k&uacute;pnu cenu a n&aacute;kladov dopravy tovaru, av&scaron;ak kupuj&uacute;cemu sa odpor&uacute;ča, aby platil až po akcept&aacute;cii objedn&aacute;vky pred&aacute;vaj&uacute;cim ( uzatvoren&iacute; zmluvy ),</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">b) pri hotovostnej &uacute;hrade pri doručen&iacute; tovaru na dobierku: kupuj&uacute;ci je povinn&yacute; zaplatiť pred&aacute;vaj&uacute;cemu k&uacute;pnu cenu a n&aacute;klady dopravy najnesk&ocirc;r pri doručen&iacute; tovaru kupuj&uacute;cemu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Cena za dobierku: viď. bod 4.1 VOP &nbsp;&nbsp;&nbsp;&nbsp;</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Cena pri platbe vopred (platobnou kartou, prevodom na &uacute;čet): viď. bod 4.1 VOP</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.6. Poplatky b&aacute;nk za vykonanie &uacute;hrady k&uacute;pnej ceny a n&aacute;kladov dopravy kupuj&uacute;cim sa riadia zmluvou medzi kupuj&uacute;cim a bankou kupuj&uacute;ceho. Kupuj&uacute;ci je upozorňovan&yacute;, že inform&aacute;cie o n&aacute;kladoch prepravy tovaru s&uacute; jednoznačne uveden&eacute; v procese objedn&aacute;vania tovaru a z&aacute;visia od v&yacute;beru dopravcu/doručovacej služby/sp&ocirc;sobu doručenia. N&aacute;klady na použitie elektronick&yacute;ch prostriedkov komunik&aacute;cie sa riadia zmluvou medzi kupuj&uacute;cim a jeho poskytovateľom internetov&eacute;ho pripojenia, pr&iacute;padne jeho poskytovateľom služieb elektronickej komunik&aacute;cie.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.7. Pred&aacute;vaj&uacute;ci vystav&iacute; a doruč&iacute; fakt&uacute;ru kupuj&uacute;cemu v s&uacute;lade s platn&yacute;mi z&aacute;konmi SR. Kupuj&uacute;ci zaslan&iacute;m objedn&aacute;vky s&uacute;hlas&iacute; s t&yacute;m, aby fakt&uacute;ra bola poslan&aacute; spolu s tovarom alebo spr&iacute;stupnen&aacute; kupuj&uacute;cemu elektronicky. Fakt&uacute;ra je posielan&aacute; spolu s tovarom a fakt&uacute;ra je s&uacute;časne aj dodac&iacute;m listom a z&aacute;ručn&yacute;m listom, ak nie je doručovan&yacute; osobitn&yacute; z&aacute;ručn&yacute; list. Osobitn&yacute; doručovan&yacute; z&aacute;ručn&yacute; list m&ocirc;že byť pred&aacute;vaj&uacute;cim potvrden&yacute; na z&aacute;klade žiadosti kupuj&uacute;ceho a na predajni Carpe DM v lehote 7 dn&iacute; odo dňa dodania tovaru kupuj&uacute;cemu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">3.8. Pri odst&uacute;pen&iacute; od uzatvorenej zmluvy sa postupuje v s&uacute;lade s pr&aacute;vnymi predpismi a VOP. Ak bola k&uacute;pna cena zaplaten&aacute; pred uzatvoren&iacute;m zmluvy a zmluva nie je uzatvoren&aacute; ani do 15 dn&iacute; od doručenia objedn&aacute;vky kupuj&uacute;ceho, k&uacute;pna cena bude vr&aacute;ten&aacute; kupuj&uacute;cemu najnesk&ocirc;r do 30 dn&iacute; odo dňa doručenia objedn&aacute;vky kupuj&uacute;ceho alebo do 14 dn&iacute; odo dňa od odmietnutia objedn&aacute;vky alebo odvolania objedn&aacute;vky, a to podľa toho, ktor&yacute; z t&yacute;chto d&aacute;tumov nastane sk&ocirc;r. Vr&aacute;tenie k&uacute;pnej ceny sa vykon&aacute; na ten &uacute;čet, z ktor&eacute;ho bola platba prijat&aacute;, resp. in&yacute;m sp&ocirc;sobom na z&aacute;klade dohody str&aacute;n. Pred vr&aacute;ten&iacute;m zaplatenej ceny je v pr&iacute;pade pochybnost&iacute; pred&aacute;vaj&uacute;ci opr&aacute;vnen&yacute; od kupuj&uacute;ceho požadovať preuk&aacute;zanie skutočnosti, že je majiteľom &uacute;čtu a/alebo opr&aacute;vnenosti prijatia peň. prostriedkov. Ak je pred&aacute;vaj&uacute;ci povinn&yacute; vr&aacute;tiť kupuj&uacute;cemu k&uacute;pnu cenu a tovar bol už doručovan&yacute; kupuj&uacute;cemu, pred&aacute;vaj&uacute;ci vr&aacute;ti kupuj&uacute;cemu k&uacute;pnu cenu po vr&aacute;ten&iacute; tovaru pred&aacute;vaj&uacute;cemu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<ol start="4" style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Dodanie tovaru, dodacie podmienky a n&aacute;klady na dodanie tovaru</span></span></p>
	</li>
</ol>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.1. Pred&aacute;vaj&uacute;ci dod&aacute; tovar kupuj&uacute;cemu v lehote 14 dn&iacute; odo dňa kedy bola medzi pred&aacute;vaj&uacute;cim a kupuj&uacute;cim uzatvoren&aacute; zmluva postupom podľa t&yacute;chto VOP. Pred&aacute;vaj&uacute;ci dod&aacute; tovar kupuj&uacute;cemu na adresu n&iacute;m uveden&uacute; pri vystaven&iacute; objedn&aacute;vky ( v&yacute;lučne na &uacute;zem&iacute; kraj&iacute;n v Eur&oacute;pskej &uacute;nii ) a v&yacute;lučne osobe, ktor&aacute; je uveden&aacute; ako kupuj&uacute;ci. Dodanie alebo vydanie tovaru inej osobe ako kupuj&uacute;cemu nie je možn&eacute; bez osobitn&eacute;ho vopred dan&eacute;ho p&iacute;somn&eacute;ho s&uacute;hlasu pred&aacute;vaj&uacute;ceho a pred&aacute;vaj&uacute;cim požadovan&yacute;ch dokumentov. Z tohto d&ocirc;vodu je nevyhnutn&eacute;, aby kupuj&uacute;ci uviedol spr&aacute;vne svoje identifikačn&eacute; &uacute;daje pri objedn&aacute;van&iacute; tovaru a &uacute;daje pre dodanie tovaru. Dodanie tovaru mimo &uacute;zemia E&Uacute; alebo inej osobe bez opr&aacute;vnenia k prijatiu tovaru nie je možn&eacute;. Doručovateľ tovaru je opr&aacute;vnen&yacute; u preberaj&uacute;cej osoby vhodn&yacute;mi prostriedkami vykonať zistenie a overenie či t&aacute;to osoba je kupuj&uacute;cim a či je opr&aacute;vnen&aacute; prevziať tovar. Ak to okolnosti vyžaduj&uacute;, pred&aacute;vaj&uacute;ci a kupuj&uacute;ci sa m&ocirc;žu dohodn&uacute;ť na predĺžen&iacute; dodacej lehoty, alebo na n&aacute;hradnom plnen&iacute; v rovnakej kvalite a cene.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Cena prepravn&yacute;ch služieb Slovensko</span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> </span></span></p>

<ul style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Objedn&aacute;vka</span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> do 50&euro;</span><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> - </span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">cena za dopravu partnerskou kuri&eacute;rskou službou je 3&euro;</span><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> (pri platbe kartou pri n&aacute;kupe, alebo z PayPal &uacute;čtu). </span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Objedn&aacute;vka </span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">nad 50&euro;</span><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> - </span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">bezplatn&aacute; doprava partnerskou kuri&eacute;rskou službou</span><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> (pri platbe kartou pri n&aacute;kupe, alebo z PayPal &uacute;čtu).</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Objedn&aacute;vka na dobierku -</span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> cena za dopravu na dobierku cez Slovensk&uacute; po&scaron;tu je 4&euro;</span><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> (bez ohľadu na celkov&uacute; v&yacute;&scaron;ku n&aacute;kupu).</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Objedn&aacute;vka na dobierku - </span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">cena za dopravu na dobierku cez kuri&eacute;rsku službu Slovenskej po&scaron;ty (doručenie na adresu) je 6&euro;</span><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;"> (bez ohľadu na celkov&uacute; v&yacute;&scaron;ku n&aacute;kupu).</span></span></p>
	</li>
</ul>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Cena prepravn&yacute;ch služieb v krajin&aacute;ch EU</span></span></p>

<ul style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Doručenie objedn&aacute;vky </span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">partnerskou kuri&eacute;rskou službou do ČR - cena 8,00&euro;</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Doručenie objedn&aacute;vky </span><span style="font-size: 13.3333px; font-weight: 700; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">partnerskou kuri&eacute;rskou službou do ostatn&yacute;ch kraj&iacute;n EU - cena 20,00&euro; (len bal&iacute;ky do 15kg)</span></span></p>
	</li>
</ul>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.2. Vydanie tovaru kupuj&uacute;cemu je možn&eacute; len ak je zaplaten&aacute; k&uacute;pna cena a cena prepravy za dod&aacute;van&yacute; tovar. V opačnom pr&iacute;pade je pred&aacute;vaj&uacute;ci, resp. dopravca/doručovateľ opr&aacute;vnen&yacute; nevydať tovar a pred&aacute;vaj&uacute;ci nie je v ome&scaron;kan&iacute; s dodan&iacute;m tovaru. Kupuj&uacute;ci je povinn&yacute; od prepravcu/doručovateľa riadne prevziať tovar v rozsahu pred&aacute;vaj&uacute;cim akceptovanej objedn&aacute;vky. Kupuj&uacute;ci nadob&uacute;da vlastn&iacute;ctvo k tovaru až po zaplaten&iacute; k&uacute;pnej ceny tovaru, ceny prepravy a n&aacute;slednom prevzat&iacute; tovaru.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.3. Sp&ocirc;sob dodania tovaru vol&iacute; kupuj&uacute;ci na n&aacute;kupnom port&aacute;le, a to v procese objedn&aacute;vania tovaru z pred&aacute;vaj&uacute;cim pon&uacute;kan&yacute;ch možnost&iacute;. V z&aacute;sade je možn&eacute; dodanie tovaru &scaron;pedičnou spoločnosťou alebo prostredn&iacute;ctvom po&scaron;tov&eacute;ho podniku a cena prepravy je uveden&aacute; v objedn&aacute;vke.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.4. V určit&yacute;ch pr&iacute;padoch je pred&aacute;vaj&uacute;ci opr&aacute;vnen&yacute; pozmeniť kupuj&uacute;cim vybran&yacute; sp&ocirc;sob prepravy tovaru na in&yacute; pon&uacute;kan&yacute; sp&ocirc;sob prepravy pred akcept&aacute;ciou objedn&aacute;vky. V tomto pr&iacute;pade bude kupuj&uacute;ci o tejto skutočnosti p&iacute;somne informovan&yacute;, bude mu navrhnut&aacute; zmena objedn&aacute;vky, podmienok zmluvy podľa čl. 2 VOP a bude informovan&yacute; o zmene n&aacute;kladov na dopravu. Zmena n&aacute;kladov dopravy v d&ocirc;sledku zmeny sp&ocirc;sobu prepravy nebude v neprospech kupuj&uacute;ceho.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.5. Kupuj&uacute;ci je upozornen&yacute;, že pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; dodať tovar aj viacer&yacute;mi samostatn&yacute;mi dod&aacute;vkami s t&yacute;m, že aj pre tak&eacute;to samostatn&eacute; dodania tovaru plat&iacute; cena prepravy ako pri akcept&aacute;cii objedn&aacute;vky (t.j. viac prepr&aacute;v je &uacute;čtovan&yacute;ch za cenu jednej prepravy ).</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.6. Pred&aacute;vaj&uacute;ci, prepravn&aacute; spoločnosť alebo z&aacute;sielkov&aacute; služba je opr&aacute;vnen&aacute; avizovať dod&aacute;vku tovaru kupuj&uacute;cemu e-mailom, sms spr&aacute;vou alebo inou vhodnou formou ( napr. telefonicky ). Kupuj&uacute;ci s&uacute;hlas&iacute; s t&yacute;m, aby pred&aacute;vaj&uacute;ci poskytol tieto &uacute;daje kupuj&uacute;ceho prepravnej/&scaron;pedičnej spoločnosti alebo doručovateľovi. Kupuj&uacute;ci je povinn&yacute; byť zastihnuteľn&yacute; na n&iacute;m uvedenej adrese v čase ozn&aacute;men&eacute;ho dodania tovaru.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.7. Pri prevzat&iacute; tovaru je kupuj&uacute;ci povinn&yacute; bez vyzvania preuk&aacute;zať dopravcovi svoju totožnosť prostredn&iacute;ctvom platn&yacute;ch dokladov totožnosti ( občiansky preukaz alebo pas ). Z t&yacute;chto dokladov mus&iacute; byť zrejm&aacute; totožnosť kupuj&uacute;ceho a opr&aacute;vnenie k prevzatiu tovaru. V opačnom pr&iacute;pade nemus&iacute; byť tovar odovzdan&yacute; zo strany pred&aacute;vaj&uacute;ceho/prepravcu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.8. Ak kupuj&uacute;ci neopr&aacute;vnene odmietne prevziať tovar alebo ho opakovane neopr&aacute;vnene neprevezme, je pred&aacute;vaj&uacute;ci opr&aacute;vnen&yacute; si voči nemu uplatniť v&scaron;etky n&aacute;klady, ktor&eacute; mu v tejto s&uacute;vislosti vznikli.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.9. Pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; jednostranne a podľa vlastn&eacute;ho uv&aacute;ženia interne určiť hodnotu objedn&aacute;vky, pri ktorej kupuj&uacute;ci už neplat&iacute; cenu prepravy tovaru. Skutočnosť platenia alebo neplatenia ceny prepravy kupuj&uacute;cim sa zobraz&iacute; v objedn&aacute;vke na str&aacute;nke www.carpedmfashion.com. Pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; jednostranne bez nutnosti uv&aacute;dzania zmeny v t&yacute;chto VOP meniť a upravovať hodnotu objedn&aacute;vky (uzatvorenej zmluvy), pri ktorej kupuj&uacute;ci neplat&iacute; cenu prepravy. Na uzatvoren&eacute; zmluvy t&aacute;to zmena nem&aacute; vplyv.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.10. Pri prevzat&iacute; tovaru je kupuj&uacute;ci povinn&yacute; odkontrolovať neporu&scaron;enosť obalu a kompletnosť dod&aacute;vky, najm&auml; počet transportn&yacute;ch balen&iacute; ( bal&iacute;kov/z&aacute;sielok ). V pr&iacute;pade ak&yacute;chkoľvek zjavn&yacute;ch v&aacute;d zisten&yacute;ch v s&uacute;vislosti s prepravou a tovarom je kupuj&uacute;ci povinn&yacute; tieto bezodkladne, najnesk&ocirc;r do 12 hod&iacute;n ozn&aacute;miť dopravcovi i pred&aacute;vaj&uacute;cemu. Kupuj&uacute;ci je povinn&yacute; na prepravnom dokumente vyznačiť v&scaron;etky zjavn&eacute; po&scaron;kodenia z&aacute;sielky a poru&scaron;enosť obalu. Ak je transportn&eacute; balenie opatren&eacute; origin&aacute;lnou p&aacute;skou Carpe DM, ktor&aacute; je po&scaron;koden&aacute; alebo je zisten&eacute; in&eacute; naru&scaron;enie obalu balenia či z&aacute;sielky, po neopr&aacute;vnenom otvoren&iacute; z&aacute;sielky je kupuj&uacute;ci povinn&yacute; z&aacute;sielku od prepravcu/doručovateľa neprevziať. Podpisom preberacieho protokolu kupuj&uacute;ci potvrdzuje, že z&aacute;sielka bola prevzat&aacute; neporu&scaron;en&aacute;. Ak kupuj&uacute;ci nevznesie n&aacute;mietky k nedoručeniu tovaru a nedoručeniu dokladov dod&aacute;van&yacute;ch s tovarom v lehote 12 hod&iacute;n od dodania tovaru, na z&aacute;klade potvrden&yacute;ch dodac&iacute;ch a prepravn&yacute;ch listov sa predpoklad&aacute; , že tovar bol kupuj&uacute;cemu dodan&yacute; riadne, ak sa d&ocirc;kazne nepreuk&aacute;že opak.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.11. Po&scaron;kodenie tovaru ozn&aacute;mi kupuj&uacute;ci pred&aacute;vaj&uacute;cemu formou e-mailu estore@carpedmfashion.com, alebo in&yacute;m vhodn&yacute;m sp&ocirc;sobom. Na dodatočn&eacute; nahl&aacute;senie mechanick&yacute;ch po&scaron;koden&iacute; zistiteľn&yacute;ch pri prevzat&iacute; tovaru nie je možn&eacute; brať ohľad a tieto nebud&uacute; uznan&eacute;.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.12. Pred&aacute;vaj&uacute;ci bude bezodkladne informovať kupuj&uacute;ceho o nemožnosti dodania tovaru, ako aj v pr&iacute;padoch vy&scaron;&scaron;ej moci alebo d&ocirc;vodoch, za ktor&eacute; pred&aacute;vaj&uacute;ci alebo dopravca/doručovateľ nezodpoved&aacute;. V tomto pr&iacute;pade pred&aacute;vaj&uacute;ci pon&uacute;kne alebo poskytne spotrebiteľovi n&aacute;hradn&eacute; plnenie a postupuje podľa VOP a pr&aacute;vnych predpisov.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">4.13. Osobn&yacute; odber tovaru na predajni Carpe DM je možn&yacute; len v pr&iacute;pade, ak sa na predajni objednan&yacute; tovar nach&aacute;dza. Doručovanie tovaru do predajn&iacute; Carpe DM nie je možn&eacute;. Zjavn&eacute; vady tovaru je kupuj&uacute;ci povinn&yacute; reklamovať okamžite. </span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<ol start="5" style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Z&aacute;ruka, reklamačn&eacute; podmienky a reklamačn&yacute; poriadok</span></span></p>
	</li>
</ol>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.1. Ustanovenia tohto bodu sa nevzťahuj&uacute; na kupuj&uacute;ceho, ktor&yacute; nie je spotrebiteľ a/ alebo osoby, nakupuje tovar za &uacute;čelom podnikania a nie za &uacute;čelom osobnej spotreby fyzick&yacute;ch os&ocirc;b; zodpovednosť za vady tovaru sa v tomto pr&iacute;pade riadi ustanoveniami &sect;422 a nasl. Obchodn&eacute;ho z&aacute;konn&iacute;ka. Pred&aacute;vaj&uacute;ci vybavuje spotrebiteľsk&eacute; reklam&aacute;cie v s&uacute;lade s pr&aacute;vnymi predpismi Slovenskej republiky, najm&auml; z&aacute;konom č. 250/2007 Z.z. v platnom znen&iacute;, Občianskym z&aacute;konn&iacute;kom SR a platn&yacute;mi pr&aacute;vnymi predpismi.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.2. Pri v&scaron;etk&yacute;ch tovaroch kupovan&yacute;ch na z&aacute;klade občianskopr&aacute;vnych vzťahov je z&aacute;ručn&aacute; doba v s&uacute;lade s pr&aacute;vnymi predpismi Slovenskej republiky &scaron;tandardne 24 mesiacov, ak pr&aacute;vne predpisy SR neustanovuj&uacute; krat&scaron;iu dobu pre určit&eacute; druhy tovaru. Z&aacute;ručn&aacute; doba zač&iacute;na plyn&uacute;ť odo dňa prevzatia tovaru kupuj&uacute;cim. Pred&aacute;vaj&uacute;ci zodpoved&aacute; kupuj&uacute;cemu spotrebiteľovi za vady tovaru podľa &sect; 623 a 623 Občianskeho z&aacute;konn&iacute;ka.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.3. Trvanie z&aacute;ručnej doby vypl&yacute;va z pr&aacute;vnych predpisov Slovenskej republiky. Ak je na pred&aacute;vanej veci, jej obale alebo n&aacute;vode k nej pripojenom vyznačen&aacute; lehota na použitie, neskonč&iacute; sa z&aacute;ručn&aacute; doba pred uplynut&iacute;m tejto lehoty.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.4. Z&aacute;ruka sa nevzťahuje na vady a po&scaron;kodenia vzniknut&eacute;: v s&uacute;vislosti s bežn&yacute;m opotreben&iacute;m, konan&iacute;m kupuj&uacute;ceho alebo tretej osoby po prevzat&iacute; tovaru kupuj&uacute;cim, neodborn&yacute;m, ne&scaron;etrn&yacute;m zaobch&aacute;dzan&iacute;m, nadmernou z&aacute;ťažou, mechanick&yacute;m po&scaron;koden&iacute;m alebo opotrebovan&iacute;m, použit&iacute;m tovaru v rozpore s jeho n&aacute;vodom alebo &uacute;čelom použitia alebo nedodržan&iacute;m pravidiel použ&iacute;vania, &uacute;držby alebo skladovania, pri živeln&yacute;ch katastrof&aacute;ch.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.5. Kupuj&uacute;cemu zanik&aacute; z&aacute;ruka aj v pr&iacute;pade ak je odstr&aacute;nen&aacute; plomba z tovaru alebo ak bude vykonan&yacute; z&aacute;sah do tovaru.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.6. Kupuj&uacute;ci m&ocirc;že uplatniť reklam&aacute;ciu: predložen&iacute;m tovaru a dokladu o k&uacute;pe, odoslan&iacute;m tovaru spolu s ďal&scaron;&iacute;mi požadovan&yacute;mi dokumentmi ( najm&auml; doklad o k&uacute;pe ) na centr&aacute;lne reklamačn&eacute; oddelenie Carpe DM s.r.o. na adresu Tatransk&aacute; 243, N. Lesn&aacute; 059 86</span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(66, 66, 66); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">, z&aacute;kazn&iacute;cka podpora: telef&oacute;n +421 52 381 11 87, Email: estore@carpedmfashion.com</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.7. K reklamovan&eacute;mu tovaru prilož&iacute; kupuj&uacute;ci čitateľn&yacute; origin&aacute;l alebo k&oacute;piu dokladu o k&uacute;pe tovaru a podrobne uvedie popis vady a sp&ocirc;sob ak&yacute;m sa vada navonok prejavuje. Tovar m&aacute; byť doručen&yacute; v čistom stave a s pr&iacute;slu&scaron;enstvom dod&aacute;van&yacute;m s tovarom.</span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.8. Pred&aacute;vaj&uacute;ci pri uplatnen&iacute; reklam&aacute;cie vyd&aacute; spotrebiteľovi potvrdenie. Pos&uacute;denie reklam&aacute;cie bez predloženia tovaru alebo bez predloženia k&oacute;pie dokladu o k&uacute;pe nie je možn&eacute;.</span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.9. Pred&aacute;vaj&uacute;ci vybavuje spotrebiteľsk&eacute; reklam&aacute;cie v s&uacute;lade s pr&aacute;vnymi predpismi Slovenskej republiky, najm&auml; z&aacute;konom č. 250/2007 Z.z. v platnom znen&iacute;, Občianskym z&aacute;konn&iacute;kom SR a platn&yacute;mi pr&aacute;vnymi predpismi. Ak ide o vadu, ktor&uacute; možno odstr&aacute;niť, m&aacute; kupuj&uacute;ci pr&aacute;vo, aby bola bezplatne, včas a riadne odstr&aacute;nen&aacute;. Pred&aacute;vaj&uacute;ci je povinn&yacute; vadu bez zbytočn&eacute;ho odkladu odstr&aacute;niť. Kupuj&uacute;ci m&ocirc;že namiesto odstr&aacute;nenia vady požadovať v&yacute;menu veci, alebo ak sa vada t&yacute;ka len s&uacute;časti veci, v&yacute;menu s&uacute;časti, ak t&yacute;m pred&aacute;vaj&uacute;cemu nevznikn&uacute; neprimeran&eacute; n&aacute;klady vzhľadom na cenu tovaru alebo z&aacute;važnosť vady. Pred&aacute;vaj&uacute;ci m&ocirc;že vždy namiesto odstr&aacute;nenia vady vymeniť vadn&uacute; vec za bezvadn&uacute;, ak to kupuj&uacute;cemu nesp&ocirc;sob&iacute; z&aacute;važn&eacute; ťažkosti. Ak ide o vadu, ktor&uacute; nemožno odstr&aacute;niť a ktor&aacute; br&aacute;ni tomu, aby sa vec mohla riadne už&iacute;vať ako vec bez vady, m&aacute; kupuj&uacute;ci pr&aacute;vo na v&yacute;menu veci alebo m&aacute; pr&aacute;vo od zmluvy odst&uacute;piť. Tie ist&eacute; pr&aacute;va prisl&uacute;chaj&uacute; kupuj&uacute;cemu, ak ide s&iacute;ce o odstr&aacute;niteľn&eacute; vady, ak v&scaron;ak kupuj&uacute;ci nem&ocirc;že pre op&auml;tovn&eacute; vyskytnutie sa vady po oprave alebo pre v&auml;č&scaron;&iacute; počet v&aacute;d vec riadne už&iacute;vať. Ak ide o in&eacute; neodstr&aacute;niteľn&eacute; vady, m&aacute; kupuj&uacute;ci pr&aacute;vo na primeran&uacute; zľavu z ceny veci.</span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.10. Pred&aacute;vaj&uacute;ci vyd&aacute; doklad o vybaven&iacute; reklam&aacute;cie najnesk&ocirc;r do 30 dn&iacute; odo dňa uplatnenia reklam&aacute;cie v s&uacute;lade so z&aacute;konom o ochrane spotrebiteľa a pr&aacute;vnymi predpismi. Kupuj&uacute;ci berie na vedomie a s&uacute;hlas&iacute;, že doklad o uplatnen&iacute; reklam&aacute;cie a vybaven&iacute; reklam&aacute;cie bude doručen&yacute; kupuj&uacute;cemu v s&uacute;lade s pr&aacute;vnymi predpismi. Pri ukončen&iacute; reklamačn&eacute;ho konania, ako aj na z&aacute;klade v&yacute;zvy pred&aacute;vaj&uacute;ceho je kupuj&uacute;ci povinn&yacute; v lehote 15 dn&iacute; si prevziať od pred&aacute;vaj&uacute;ceho reklamovan&yacute; tovar, ak reklam&aacute;cia bola vybaven&aacute; formou opravy, zľavy, v&yacute;menou tovaru ( nov&yacute; tovar ) alebo zamietnut&iacute;m reklam&aacute;cie. Sťažnosti a podnety spotrebiteľov je možn&eacute; adresovať na adresu s&iacute;dla pred&aacute;vaj&uacute;ceho.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">5.11. Ak si kupuj&uacute;ci neprevezme vec ani do 30 dn&iacute; po vybaven&iacute; reklam&aacute;cie alebo do 30 dn&iacute; od dňa opakovan&eacute;ho doručovania tovaru kupuj&uacute;cemu alebo si ho neprevezme v rovnakej lehote od odoslania v&yacute;zvy pred&aacute;vaj&uacute;ceho po ukončen&iacute; reklamačn&eacute;ho konania na kontaktn&uacute; adresu poskytnut&uacute; kupuj&uacute;cim, pred&aacute;vaj&uacute;ci je v s&uacute;lade s pr&aacute;vnymi predpismi opr&aacute;vnen&yacute; požadovať od kupuj&uacute;ceho plnenie vo v&yacute;&scaron;ke 0,20&euro; za každ&yacute; deň uskladnenia.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<ol start="6" style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Vr&aacute;tenie tovaru - odst&uacute;penie od zmluvy</span></span></p>
	</li>
</ol>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">6.1. Poučenie o pr&aacute;ve spotrebiteľa odst&uacute;piť od zmluvy / uplatnen&iacute; pr&aacute;va na odst&uacute;penie od zmluvy.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Kupuj&uacute;ci spotrebiteľ m&aacute; pr&aacute;vo odst&uacute;piť od zmluvy bez uvedenia d&ocirc;vodu v lehote 14 dn&iacute;. Lehota na odst&uacute;penie od zmluvy uplynie po 14 dňoch odo dňa keď kupuj&uacute;ci spotrebiteľ alebo n&iacute;m určen&aacute; tretia osoba s v&yacute;nimkou dopravcu prevezme tovar. Ak sa tovary dod&aacute;vaj&uacute; oddelene, lehota na odst&uacute;penie od zmluvy uplynie po 14 dňoch odo dňa keď kupuj&uacute;ci spotrebiteľ alebo n&iacute;m určen&aacute; osoba s v&yacute;nimkou dopravcu prevezme tovar, ktor&yacute; bol dodan&yacute; ako posledn&yacute;. Pri uplatnen&iacute; pr&aacute;va na odst&uacute;penie od zmluvy kupuj&uacute;ci spotrebiteľ informujte pred&aacute;vaj&uacute;ceho o svojom rozhodnut&iacute; odst&uacute;piť od tejto zmluvy jednoznačn&yacute;m vyhl&aacute;sen&iacute;m (napr&iacute;klad listom zaslan&yacute;m po&scaron;tou) na adrese Carpe DM s.r.o.,Tatransk&aacute; 243, Nov&aacute; Lesn&aacute; 059 86, Slovensk&aacute; republika. Na tento &uacute;čel m&ocirc;že kupuj&uacute;ci spotrebiteľ použiť vzorov&yacute; formul&aacute;r na odst&uacute;penie od zmluvy, ktor&yacute; bol kupuj&uacute;cemu zaslan&yacute; alebo ktor&yacute; je spr&iacute;stupnen&yacute; na webom s&iacute;dle /n&aacute;kupnom port&aacute;li pred&aacute;vaj&uacute;ceho. Lehota na odst&uacute;penie od zmluvy je zachovan&aacute;, ak kupuj&uacute;ci spotrebiteľ za&scaron;le ozn&aacute;menie o uplatnen&iacute; pr&aacute;va na odst&uacute;penie od zmluvy pred t&yacute;m, ako uplynie lehota na odst&uacute;penie od zmluvy. Bliž&scaron;ie podmienky s&uacute; upraven&eacute; v z&aacute;kone č. 102/2014 Z.z. Po odst&uacute;pen&iacute; od zmluvy pred&aacute;vaj&uacute;ci vr&aacute;ti kupuj&uacute;cemu spotrebiteľovi v&scaron;etky platby, ktor&eacute; je pred&aacute;vaj&uacute;ci povinn&yacute; vr&aacute;tiť podľa pr&aacute;vnych predpisov. To sa nevzťahuje na dodatočn&eacute; n&aacute;klady, ak si kupuj&uacute;ci spotrebiteľ zvolil in&yacute; druh doručenia, ako je najlacnej&scaron;&iacute; bežn&yacute; sp&ocirc;sob doručenia, ktor&yacute; pred&aacute;vaj&uacute;ci pon&uacute;ka. Platby pred&aacute;vaj&uacute;ci vr&aacute;ti kupuj&uacute;cemu spotrebiteľovi bez zbytočn&eacute;ho odkladu, najnesk&ocirc;r do 14 dn&iacute; odo dňa, keď mu bude doručen&eacute; ozn&aacute;menie kupuj&uacute;ceho spotrebiteľa o odst&uacute;pen&iacute; od tejto zmluvy. Ich &uacute;hrada bude uskutočnen&aacute; rovnak&yacute;m sp&ocirc;sobom, ak&yacute; bol použit&yacute; pri p&ocirc;vodnej platbe kupuj&uacute;cim spotrebiteľom ( ak nebude osobitne dohodnut&eacute; inak, a to bez &uacute;čtovania ak&yacute;chkoľvek ďal&scaron;&iacute;ch poplatkov). Platba za zak&uacute;pen&yacute; tovar bude uhraden&aacute; kupuj&uacute;cemu spotrebiteľovi až po doručen&iacute; vr&aacute;ten&eacute;ho tovaru sp&auml;ť na adresu s&iacute;dla pred&aacute;vaj&uacute;ceho alebo po predložen&iacute; dokladu preukazuj&uacute;ceho zaslanie tovaru sp&auml;ť podľa toho, čo nastane sk&ocirc;r. Tovar mus&iacute; byť doručen&yacute; sp&auml;ť na adresu Carpe DM s.r.o., Tatransk&aacute; 243, Nov&aacute; Lesn&aacute; 059 86, Slovensk&aacute; republika, najnesk&ocirc;r do 14 dn&iacute; odo dňa uplatnenia pr&aacute;va na odst&uacute;penie od zmluvy. Lehota sa považuje za zachovan&uacute;, ak bude tovar odoslan&yacute; sp&auml;ť pred uplynut&iacute;m 14-dňovej lehoty. Priame n&aacute;klady na vr&aacute;tenie tovaru zn&aacute;&scaron;a kupuj&uacute;ci spotrebiteľ, pri zmluve na diaľku aj n&aacute;klady na vr&aacute;tenie tovaru, ktor&yacute; vzhľadom na jeho povahu nie je možn&eacute; vr&aacute;tiť prostredn&iacute;ctvom po&scaron;ty. Kupuj&uacute;ci spotrebiteľ zodpoved&aacute; za ak&eacute;koľvek zn&iacute;ženie hodnoty tovaru v d&ocirc;sledku zaobch&aacute;dzania s n&iacute;m in&yacute;m sp&ocirc;sobom, než ak&yacute; je potrebn&yacute; na zistenie povahy, vlastnost&iacute; a funkčnosti tovaru. Kupuj&uacute;ci spotrebiteľ nem&ocirc;že odst&uacute;piť od zmluvy v pr&iacute;padoch podľa &sect; 7 ods. 6 z&aacute;kona č. 102/2014 Z.z. a str&aacute;ca pr&aacute;vo odst&uacute;piť od zmluvy ak je tovar po&scaron;koden&yacute;, zničen&yacute;, použ&iacute;van&yacute; nad r&aacute;mec zaobch&aacute;dzania potrebn&eacute;ho na zistenie vlastnost&iacute; a funkčnosti tovaru.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Tovar mus&iacute; byť vr&aacute;ten&yacute; nepo&scaron;koden&yacute;, nepouž&iacute;van&yacute;, bez zn&aacute;mok opotrebenia a v p&ocirc;vodnom obale. Pred&aacute;vaj&uacute;ci vr&aacute;ten&yacute; tovar prekontroluje a presk&uacute;&scaron;a. Pokiaľ bol tovar vr&aacute;ten&yacute; kupuj&uacute;cemu nepo&scaron;koden&yacute; a neopotrebovan&yacute;, vr&aacute;ti pred&aacute;vaj&uacute;ci kupuj&uacute;cemu zaplaten&uacute; k&uacute;pnu cenu tovaru v s&uacute;lade s VOP a pr&aacute;vnymi predpismi. Na z&aacute;klade tejto dohody sa k&uacute;pna cena vr&aacute;ti bankov&yacute;m prevodom na p&ocirc;vodn&yacute; &uacute;čet kupuj&uacute;ceho spotrebiteľa, ak sa strany nedohodn&uacute; inak.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">6.2. V pr&iacute;pade vr&aacute;tenia po&scaron;koden&eacute;ho, použ&iacute;van&eacute;ho alebo opotrebovan&eacute;ho tovaru alebo tovaru bez sprievodn&yacute;ch dokladov a pr&iacute;slu&scaron;enstva je pred&aacute;vaj&uacute;ci opr&aacute;vnen&yacute; uplatniť si voči kupuj&uacute;cemu n&aacute;hradu &scaron;kody, resp. in&eacute; z&aacute;konn&eacute; n&aacute;roky, ktor&eacute; je opr&aacute;vnen&yacute; započ&iacute;tať si oproti pohľad&aacute;vke na vr&aacute;tenie k&uacute;pnej ceny ( s v&yacute;nimkou tovaru vr&aacute;ten&eacute;ho z d&ocirc;vodu preuk&aacute;zan&yacute;ch z&aacute;ručn&yacute;ch v&aacute;d ).</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">6.3. Na z&aacute;klade dohody pred&aacute;vaj&uacute;ceho a kupuj&uacute;ceho a v s&uacute;lade s t&yacute;mito VOP nie je kupuj&uacute;ci opr&aacute;vnen&yacute; bez uvedenia d&ocirc;vodu odst&uacute;piť od k&uacute;pnej zmluvy v ktoromkoľvek z nasledovn&yacute;ch pr&iacute;padov: a) predaj tovaru uzavret&eacute;ho v ochrannom obale, ktor&yacute; nie je vhodn&eacute; vr&aacute;tiť z d&ocirc;vodu ochrany zdravia alebo z hygienick&yacute;ch d&ocirc;vodov a ktor&eacute;ho ochrann&yacute; obal bol po dodan&iacute; poru&scaron;en&yacute;. b) predaj tovaru, ktor&yacute; m&ocirc;že byť vzhľadom na svoju povahu po dodan&iacute; neoddeliteľne zmie&scaron;an&yacute; s in&yacute;m tovarom.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">6.4. Pri poru&scaron;en&iacute; podmienok pre odst&uacute;penie od zmluvy alebo riadneho vr&aacute;tenia tovaru je pred&aacute;vaj&uacute;ci opr&aacute;vnen&yacute; uplatniť si u kupuj&uacute;ceho n&aacute;hradu &scaron;kody, ktor&aacute; mu t&yacute;m vznikla podľa pr&iacute;slu&scaron;n&yacute;ch pr&aacute;vnych predpisov.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<ol start="7" style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Ochrana osobn&yacute;ch &uacute;dajov</span></span></p>
	</li>
</ol>

<p dir="ltr" style="line-height: 1.22727; margin-top: 11pt; margin-bottom: 11pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Spoločnosť CARPE DM s.r.o., IČO: 46 171 096, so s&iacute;dlom: Tatransk&aacute; 243, 059 86 Nov&aacute; Lesn&aacute;, Slovensk&aacute; republika, zap&iacute;sanou v obchodnom registri Okresn&eacute;ho s&uacute;du Pre&scaron;ov, oddiel: Sro, vložka č&iacute;slo: </span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap;">24408/P</span><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">, z&aacute;kazn&iacute;cka podpora: telef&oacute;n +421 52 381 11 87, Email: estore@carpedmfashion.com, kore&scaron;pondenčn&aacute; adresa pre styk so z&aacute;kazn&iacute;kmi: CARPE DM s.r.o., Tatransk&aacute; 243, 059 86 Nov&aacute; Lesn&aacute;, Slovensk&aacute; republika, ako pred&aacute;vaj&uacute;ci sprac&uacute;va osobn&eacute; &uacute;daje, ktor&eacute; kupuj&uacute;ci na port&aacute;li www.carpedmfashion.com zadal alebo poskytol pri vz&aacute;jomnej komunik&aacute;cii. Pred&aacute;vaj&uacute;ci je prev&aacute;dzkovateľom informačn&eacute;ho syst&eacute;mu osobn&yacute;ch &uacute;dajov podľa z&aacute;kona č.122/2013 Z.z. o ochrane osobn&yacute;ch &uacute;dajov ( ďalej &bdquo;ZoOO&Uacute;&ldquo;). Kupuj&uacute;ci poskytuje pred&aacute;vaj&uacute;cemu osobn&eacute; &uacute;daje v rozsahu: meno, priezvisko, adresa, e-mailov&aacute; adresa, telef&oacute;nne č&iacute;slo, pr&iacute;padne d&aacute;tum alebo rok narodenia. &Uacute;čelom sprac&uacute;vania osobn&yacute;ch &uacute;dajov je:</span></span></p>

<ul style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">identifik&aacute;cia kupuj&uacute;ceho ako zmluvn&eacute;ho partnera pre plnenie zmluvy realizovanej cez n&aacute;kupn&yacute; port&aacute;l, spr&aacute;vne doručovanie p&iacute;somnost&iacute; a tovaru, j realiz&aacute;ciu a zavedenie predzmluvn&yacute;ch vzťahov,</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">identifik&aacute;cia kupuj&uacute;ceho pre &uacute;čel uskutočnenia vyvolan&yacute;ch rokovan&iacute; o zmene alebo ukončen&iacute; zmluvy,</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">plnenie povinnost&iacute; ustanoven&yacute;ch z&aacute;konom a v&scaron;eobecne z&aacute;v&auml;zn&yacute;mi pr&aacute;vnymi predpismi SR, najm&auml; podľa z&aacute;kona o DPH.</span></span></p>
	</li>
</ul>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Pr&aacute;vnym z&aacute;kladom sprac&uacute;vania osobn&yacute;ch &uacute;dajov je ZoOO&Uacute;, in&yacute; v&scaron;eobecne z&aacute;v&auml;zn&yacute; pr&aacute;vny predpis a/alebo s&uacute;hlas kupuj&uacute;ceho podľa ZoOO&Uacute;. Tieto &uacute;daje a s&uacute;hlas poskytuje kupuj&uacute;ci dobrovoľne. Bez poskytnutia t&yacute;chto &uacute;dajov nie je možn&eacute; vykonať n&aacute;kup, doručiť tovar a nie je možn&eacute; vystaviť ani doručiť doklad o n&aacute;kupe. Kupuj&uacute;ci poskytuje s&uacute;hlas a pred&aacute;vaj&uacute;ci informuje kupuj&uacute;ceho, že poskytnut&eacute; osobn&eacute; &uacute;daje m&ocirc;žu byť:</span></span></p>

<ul style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">poskytnut&eacute; tret&iacute;m osob&aacute;m v nevyhnutnom rozsahu za &uacute;čelom pr&iacute;pravy, plnenia a kontroly zmluvy, plnenia pr&aacute;v a povinnost&iacute;,</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">spr&iacute;stupnen&eacute; pr&iacute;jemcom, ktor&iacute; sa podieľaj&uacute; na pr&iacute;prave, realiz&aacute;cii n&aacute;kupnej objedn&aacute;vky, na pr&iacute;prave a realiz&aacute;cii informačn&yacute;ch spr&aacute;v na z&aacute;klade s&uacute;hlasu poskytnut&eacute;ho kupuj&uacute;cim, .</span></span></p>
	</li>
	<li dir="ltr" style="list-style-type: disc; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">v nevyhnutnom rozsahu zverejnen&eacute; na na&scaron;ich prev&aacute;dzkach, informačnom let&aacute;ku a/alebo na port&aacute;li v&yacute;lučne, ak kupuj&uacute;ci bude v&yacute;herca v s&uacute;ťaži/akcii.</span></span></p>
	</li>
</ul>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Kupuj&uacute;ci udeľuje s&uacute;hlas aj k spracovaniu poskytnut&yacute;ch &uacute;dajov, ktor&eacute; nemaj&uacute; povahu osobn&yacute;ch &uacute;dajov.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-style: italic; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Poučenie:</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Ako dotknut&aacute; osoba m&aacute; kupuj&uacute;ci pr&aacute;va najm&auml; podľa &sect; 28 a in&eacute; ZoOO&Uacute;. Na z&aacute;klade p&iacute;somnej žiadosti doručenej na adresu pred&aacute;vaj&uacute;ceho m&aacute; kupuj&uacute;ci pr&aacute;vo najm&auml; vyžadovať potvrdenie, či s&uacute; alebo nie s&uacute; osobn&eacute; &uacute;daje o kupuj&uacute;com sprac&uacute;van&eacute; a namietať voči sprac&uacute;vaniu osobn&yacute;ch &uacute;dajov kupuj&uacute;ceho, o ktor&yacute;ch predpoklad&aacute;, že s&uacute; alebo bud&uacute; sprac&uacute;van&eacute; na &uacute;čely priameho marketingu bez s&uacute;hlasu kupuj&uacute;ceho, a žiadať ich likvid&aacute;ciu. Ak pred&aacute;vaj&uacute;ci m&aacute; povinnosť poskytn&uacute;ť a/alebo doručiť kupuj&uacute;cemu povinn&eacute; inform&aacute;cie a t&aacute;to povinnosť nie je splnen&aacute; formou zverejnenia vo VOP, registr&aacute;ciou vyjadrujete s&uacute;hlas, aby sa kupuj&uacute;cemu tieto inform&aacute;cie poskytli formou e-mailovej alebo sms spr&aacute;vy na poskytnut&yacute; kontaktn&yacute; &uacute;daj, resp. in&yacute;m vhodn&yacute;m sp&ocirc;sobom.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<ol start="8" style="line-height: 20.8px; margin-top: 0pt; margin-bottom: 0pt;">
	<li dir="ltr" style="list-style-type: decimal; font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); font-weight: 700; vertical-align: baseline; background-color: transparent;">
	<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">Z&aacute;verečn&eacute; ustanovenia</span></span></p>
	</li>
</ol>

<p style="line-height: 20.8px;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">8.1. Pred&aacute;vaj&uacute;ci je opr&aacute;vnen&yacute; uschovať a archivovať vz&aacute;jomn&uacute; dokument&aacute;ciu a zmluvu v elektronickej forme spolu s pr&iacute;slu&scaron;n&yacute;mi V&scaron;eobecn&yacute;mi obchodn&yacute;mi podmienkami po dobu 5 rokov. Archivovan&aacute; zmluva nie je dostupn&aacute; kupuj&uacute;cemu. Na uzatvorenie zmluvy je pon&uacute;kan&yacute; slovensk&yacute; jazyk. Kupuj&uacute;ci je opr&aacute;vnen&yacute; podstatn&eacute; n&aacute;ležitosti zmluvy v elektronickej podobe reprodukovať v s&uacute;lade s pr&aacute;vnymi predpismi. Zmluva sa uzatv&aacute;ra na dobu do vysporiadania z&aacute;v&auml;zkov str&aacute;n zo zmluvy, resp. na dobu do okamihu jej zru&scaron;enia postupom podľa zmluvy, VOP a pr&aacute;vnych predpisov. Minim&aacute;lna dĺžka trvania z&aacute;v&auml;zkov kupuj&uacute;ceho spotrebiteľa zo zmluvy je určen&aacute; pr&aacute;vnymi predpismi SR, VOP a zmluvou.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">8.2. Pre doručovanie elektronick&yacute;ch spr&aacute;v adresovan&yacute;ch kupuj&uacute;cemu plat&iacute;, že ak pred&aacute;vaj&uacute;ci neobdrž&iacute; chybov&eacute; hl&aacute;senie o nemožnosti doručenia spr&aacute;vy ( e-mailu alebo sms spr&aacute;va ) na poskytnut&uacute; e-mailov&uacute; adresu, resp. telef. č&iacute;slo kupuj&uacute;ceho ( mobil ), považuje sa t&aacute;to spr&aacute;va ( e-mail alebo sms spr&aacute;va ) za doručen&uacute; na ďal&scaron;&iacute; deň od jej odoslania, ak kogentn&eacute; pr&aacute;vne predpisy neustanovuj&uacute; inak. Pre doručovanie elektronick&yacute;ch spr&aacute;v adresovan&yacute;ch pred&aacute;vaj&uacute;cemu (e-mail) plat&iacute;, že elektronick&aacute; p&iacute;somnosť sa považuje za nedoručen&uacute; do momentu, k&yacute;m jej prijatie pred&aacute;vaj&uacute;ci nepotvrd&iacute; kupuj&uacute;cemu sp&auml;tnou e-mailovou spr&aacute;vou. Z&aacute;sielka sa považuje za doručen&uacute; aj v pr&iacute;pade, ak ju adres&aacute;t odmietne prevziať, alebo aj v pr&iacute;pade, že si ju adres&aacute;t vlastn&yacute;m zavinen&iacute;m alebo opomenut&iacute;m neprevezme. V takom pr&iacute;pade sa považuje za doručen&uacute; uplynut&iacute;m &uacute;ložnej doby na po&scaron;te v trvan&iacute; podľa určenia odosielateľa a vr&aacute;ten&iacute;m z&aacute;sielky odosielateľovi, o čom mus&iacute; odosielateľ preuk&aacute;zať nepo&scaron;koden&yacute; d&ocirc;kaz. Ozn&aacute;menia doručovan&eacute; prostredn&iacute;ctvom doručovateľa &ndash; kuri&eacute;rskej/po&scaron;tovej služby bud&uacute; považovan&eacute; za doručen&eacute; momentom prevzatia zmluvnou stranou. V pr&iacute;pade ne&uacute;spe&scaron;nosti doručenia kuri&eacute;rskou službou sa bude považovať za moment doručenia tret&iacute; deň po vykonan&iacute; prv&eacute;ho pokusu o doručenie, pričom vykonanie pokusu o doručenie sa preuk&aacute;že vyhl&aacute;sen&iacute;m doručovateľa &ndash; kuri&eacute;rskej služby. Je v&yacute;lučn&yacute;m opr&aacute;vnen&iacute;m pred&aacute;vaj&uacute;ceho rozhodn&uacute;ť akou formou a v ktor&yacute;ch pr&iacute;padoch touto formou bude komunikovať s kupuj&uacute;cim ( sms alebo e-mail alebo in&yacute; vhodn&yacute; sp&ocirc;sob).</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">8.3. Ak sa preuk&aacute;že, že niektor&eacute; z ustanoven&iacute; VOP a/alebo zmluvy je neplatn&eacute; alebo ne&uacute;činn&eacute;, nem&aacute; tak&aacute;to neplatnosť alebo ne&uacute;činnosť za n&aacute;sledok neplatnosť alebo ne&uacute;činnosť ďal&scaron;&iacute;ch ustanoven&iacute; zmluvy / VOP. V takomto pr&iacute;pade sa strany zav&auml;zuj&uacute; bezodkladne nahradiť tak&eacute;to neplatn&eacute; alebo ne&uacute;činn&eacute; ustanovenie nov&yacute;m tak, aby bol zachovan&yacute; &uacute;čel, sledovan&yacute; pr&iacute;slu&scaron;n&yacute;m neplatn&yacute;m či ne&uacute;činn&yacute;m ustanoven&iacute;m v čase jeho prijatia, resp. uzatvorenia tejto zmluvy.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">8.4. Nad činnosťou pred&aacute;vaj&uacute;ceho je opr&aacute;vnen&yacute; vykon&aacute;vať dohľad In&scaron;pektor&aacute;t Slovenskej obchodnej in&scaron;pekcie so s&iacute;dlom v Ko&scaron;iciach pre Ko&scaron;ick&yacute; kraj, Vr&aacute;tna 3, 040 01 Ko&scaron;ice.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">8.5. Rozhodn&yacute;m hmotn&yacute;m a procesn&yacute;m pr&aacute;vom je pr&aacute;vo Slovenskej republiky. V&scaron;etky spory, ktor&eacute; vznikn&uacute; z VOP, zmluvy alebo v s&uacute;vislosti s nimi, vr&aacute;tane sporov z dod&aacute;vok tovaru bud&uacute; prejedn&aacute;vať a rozhodovať v&yacute;lučne s&uacute;dy v Slovenskej republike podľa pr&aacute;va SR.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">8.6. VOP s&uacute; platn&eacute; a zav&auml;zuj&uacute; odo dňa ich zverejnenia na internetovej str&aacute;nke pred&aacute;vaj&uacute;ceho a je možn&eacute; do nich nahliadnuť aj v s&iacute;dle pred&aacute;vaj&uacute;ceho. Pred&aacute;vaj&uacute;ci si vyhradzuje pr&aacute;vo podľa vlastn&eacute;ho uv&aacute;ženia ich ru&scaron;iť, meniť, upravovať alebo nahr&aacute;dzať nov&yacute;mi s t&yacute;m, že na uzatvoren&eacute; zmluvy sa vzťahuj&uacute; VOP platn&eacute; v čase uzatvorenia k&uacute;pnej zmluvy. Vykonan&iacute;m registr&aacute;cie, ako aj zaslan&iacute;m objedn&aacute;vky a odkliknut&iacute;m s&uacute;hlasu so znen&iacute;jsm VOP na www.Carpe DM.com pri ukončen&iacute; procesu objedn&aacute;vania kupuj&uacute;ci potvrdzuje, že mu boli poskytnut&eacute; inform&aacute;cie o pr&aacute;ve kupuj&uacute;ceho odst&uacute;piť od zmluvy podľa &sect; 3 ods. 1 p&iacute;sm. h) z&aacute;kona č. 102/2014 Z.z., že sa obozn&aacute;mil a s&uacute;hlas&iacute; s VOP, reklamačn&yacute;m poriadkom (čl. 5 ), považuj&uacute;c ich za s&uacute;časť zmluvn&eacute;ho vzťahu.</span></span></p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>

<p dir="ltr" style="line-height: 1.38; margin-top: 0pt; margin-bottom: 0pt;"><span id="docs-internal-guid-d690dca0-8230-6fcd-a3b8-57c21ec04aa1"><span style="font-size: 13.3333px; font-family: Arial; color: rgb(0, 0, 0); vertical-align: baseline; white-space: pre-wrap; background-color: transparent;">VOP v tomto znen&iacute; s&uacute; zverejnen&eacute; a platn&eacute; od 13.6.2014 a použij&uacute; sa na objedn&aacute;vky doručovan&eacute; cez n&aacute;kupn&yacute; port&aacute;l po tomto d&aacute;tume.</span></span></p>

<div>&nbsp;</div>
</textarea>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                                            </div><!-- end panel-body -->
                        </div><!-- end panel -->
                        <!-- END TABS --> 
                                    </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- PAGE LANGUAGE INFORMATION AND SEO -->
        
        <!-- DIRECTION -->
        <div class="col-lg-12">
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
                                                            <div id="r-k-v-c-7662-189" class="input-group">
                                                                                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-chrome"></i>
                                                                    </span>
                                                                    <input type="text" value="http://carpedmfashion.local/obchodne-podmienky" class="form-control" />
                                                                    <span class="input-group-btn">
                                                                        <a href="http://carpedmfashion.local/obchodne-podmienky" target="__blank" class="btn btn-primary">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </span>
                                                                                                                            </div>
                                                        </div><!-- end form-group -->
                                                        <div id="r-k-c-c-7662-189" class="row" style="display:none;">
                                                            <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                                                <div class="form-group">
                                                                    <label for="key">
                                                                        URL KEY
                                                                    </label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <span class="flag-icon flag-icon-sk"></span>
                                                                        </span>
                                                                        <input id="r-k-c-i-7662-189"
                                                                            type="text" 
                                                                            value="" 
                                                                            class="form-control"
                                                                            data-route-id="7662"
                                                                            data-lang-id="189"
                                                                            data-object-id="12"
                                                                            data-object-type-id="1"
                                                                            style="border-radius: 0px;"
                                                                        />
                                                                        <span class="input-group-btn">
                                                                            <button type="button" 
                                                                                id="r-k-c-b-u-7662-189" 
                                                                                class="btn btn-success r-k-c-b-u"
                                                                                data-route-id="7662"
                                                                                data-lang-id="189"
                                                                                data-object-id="12"
                                                                                data-object-type-id="1"
                                                                                disabled
                                                                            >
                                                                                <i class="fa fa-floppy-o"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- end form-group -->
                                                            </div><!-- end col -->
                                                            <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                                                <button type="button" id="r-k-c-b-c-7662-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                                                    <i class="fa fa-times"></i>&nbsp;
                                                                    CLOSE                                                                </button>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                                                                                    <div id="r-p-c-7662-189" class="row" style="display:none;">
                                                                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                                                    <div class="form-group">
                                                                        <label for="prefix">
                                                                            URL PREFIX
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <span class="flag-icon flag-icon-sk"></span>
                                                                            </span>
                                                                            <input id="r-p-i-7662-189"
                                                                                type="text" 
                                                                                value="" 
                                                                                class="form-control r-p-v"
                                                                                data-route-id="7662"
                                                                                data-lang-id="189"
                                                                                data-object-id="12"
                                                                                data-object-type-id="1"
                                                                                style="border-radius: 0px;"
                                                                            />
                                                                            <span class="input-group-btn">
                                                                                <button type="button" 
                                                                                    id="r-p-b-u-7662-189" 
                                                                                    class="btn btn-success r-p-b-u" 
                                                                                    data-route-id="7662"
                                                                                    data-lang-id="189"
                                                                                    data-object-id="12"
                                                                                    data-object-type-id="1"
                                                                                    disabled
                                                                                >
                                                                                    <i class="fa fa-floppy-o"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div><!-- end form-group -->
                                                                </div><!-- end col -->
                                                                <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                                                    <button type="button" id="r-p-b-cl-7662-189" class="btn btn-default btn-block" style="margin-top: 22px;">
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
                                                                        id="r-k-c-7662-189"
                                                                        class="btn btn-warning btn-block r-k-c"
                                                                        data-route-id="7662"
                                                                        data-lang-id="189"
                                                                        data-object-id="12"
                                                                        data-object-type-id="1"
                                                                    >
                                                                        <i class="fa fa-exchange"></i>&nbsp;
                                                                        CHANGE URL KEY                                                                    </button>
                                                                </div><!-- end col -->
                                                                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                                                    <button 
                                                                        type="button"
                                                                        class="btn btn-danger btn-block r-d-d"
                                                                        data-route-id="7662"
                                                                        data-lang-id="189"
                                                                        data-object-id="12"
                                                                        data-object-type-id="1"
                                                                    >
                                                                        <i class="fa fa-times"></i>&nbsp;
                                                                        DELETE                                                                    </button>
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                                                                                            <button type="button" 
                                                                    id="r-p-b-c-7662-189" 
                                                                    data-route-id="7662"
                                                                    data-lang-id="189"
                                                                    data-object-id="12"
                                                                    data-object-type-id="1"
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
        
        <!-- PAGE GENERAL INFORMATION -->
        <div class="col-lg-12">
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
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>
                                    Vlastník                                </label>                                    
                                <select name="owner" class="form-control select" data-live-search="true" required>
                                                                            <option value="1" >Henrich&nbsp;Barkoczy</option>
                                                                            <option value="2" selected>Alexander&nbsp;Kernasevic</option>
                                                                            <option value="3" >Dobrava&nbsp;Míčka</option>
                                                                            <option value="4" >Kornélia&nbsp;Dzurniková</option>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Názov stránky (interný)                                </label>
                                <input type="text" name="pagename" value="Obchodn&eacute; podmienky" class="form-control">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    CSS ID                                </label>
                                <input type="text" name="css-id" value="" class="form-control">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    CSS Triedy                                </label>
                                <input type="text" name="css-classes" value="" class="form-control tagsinput"/>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Farba pozadia</label>
                                <div class="input-group color colorpicker" style="padding: 0px;" data-color="#FFFFFF" data-color-format="rgb">
                                    <span class="input-group-addon">
                                        <span class="fa fa-paint-brush"></span>
                                    </span>
                                    <input type="text" name="background-color" value="#FFFFFF" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i style="background-color: #FFFFFF"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="row form-group">
                                <h6 style="font-size: 12px;font-weight: 600;color: #656d78;">Obrázok na pozadí</h6>
                                <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                                    <span class="page-image ">
                                                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                         
                                    </span>
                                </div><!-- end image -->
                                <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                                    <span class="input-group-btn">
                                        <a href="cpanel/choose-page-image/1/12/0/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                            <i class="glyphicon glyphicon-hdd"></i>
                                        </a>
                                    </span>
                                    <input type="text" placeholder="Načítať obrázok z drive" class="form-control">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- PAGE GENERAL INFORMATION -->
        
        <!-- PAGE SETTINGS -->
        <div class="col-lg-12">
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
                        <div class="col-lg-9 col-sm-12 col-xs-12">
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Publikovať                                </label><br>
                                <label class="switch">
                                    <input type="checkbox" name="publish" checked="" value="1">
                                    <span></span>
                                </label>                                          
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Náštevník                                </label><br>                                       
                                <label class="switch">
                                    <input type="checkbox" name="visitor" value="1" >
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Registrovaný uživateľ                                </label><br>                                       
                                <label class="switch">
                                    <input type="checkbox" name="registred-user" value="1" >
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Podpis vlastníka                                </label><br>                                       
                                <label class="switch">
                                    <input type="checkbox" name="signature" value="1" >
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Zobraziť dátum                                </label><br>                                       
                                <label class="switch">
                                    <input type="checkbox" name="show-date" value="1" >
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Zobraziť titulku stránku                                </label><br>                                      
                                <label class="switch">
                                    <input type="checkbox" name="show-page-title" checked="" value="1">
                                    <span></span>
                                </label>                                          
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Zobraziť odkazy na podstránky                                </label><br>                                    
                                <label class="switch">
                                    <input type="checkbox" name="show-sitelinks"  value="1">
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Povoliť prílohy                                </label><br>                                     
                                <label class="switch">
                                    <input type="checkbox" name="allow-attachments"  value="1">
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Povoliť komentáre                                </label><br>                                       
                                <label class="switch">
                                    <input type="checkbox" name="allow-comments"  value="1">
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="min-width: 220px;">
                                <label>
                                    Povoliť bočný panel                                </label><br>                                       
                                <label class="switch">
                                    <input type="checkbox" name="aside"  value="1">
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>
                                    Rozloženie stránky                                </label>                                                                              
                                <select name="page-layout" class="form-control select" data-style="btn-success">
                                    <option value="1" selected>
                                        BEŽNÁ STRÁNKA S NADPISOM                                    </option>
                                    <option value="2" >
                                        OBRÁZOK V HLAVIČKE STRÁNKY                                    </option>
                                    <option value="3" >
                                        OBRÁZOK S POPISOM V HLAVIČKE STRÁNKY                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>
                                    Počet widgetov                                </label>
                                <input type="number" name="widget" value="1" class="form-control"/>
                            </div><!-- end form-group -->   
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- PAGE SETTINGS -->
        
        <div id="btns-action" role="group">
            <button type="submit" id="btn-save" class="btn btn-success" role="button">
                <i class="fa fa-save"></i>
            </button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_remove_page">
                <i class="glyphicon glyphicon-floppy-remove"></i>
            </button>
        </div><!-- end btns-action -->
    </div><!-- end row -->
</form>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW REMOVE PAGE -->                       
<div class="modal" id="modal_remove_page" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" action="cpanel/navigation/remove" method="post" role="form">
                            <input id="removeModel" type="hidden" name="model" value="0" />
                            <input id="removeParentId" type="hidden" name="id" value="0" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            ZMAZAŤ NAVŽDY?                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-table">
                                    <h4 style="margin: 15px 0;">
                                        <strong>
                                            Upozornenie: nie je možné vrátiť späť túto akciu.                                        </strong>
                                    </h4>
                                </div>
                                <div class="panel-footer">                                 
                                    <a href="cpanel/delete-page/12" class="btn btn-danger">
                                        ZMAZAŤ NAVŽDY                                    </a>
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
<!-- //-- MODAL WINDOW REMOVE PAGE -->
<!-- MODAL WINDOW MAKE A COPY -->                       
<div class="modal" id="make-copy" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="cpanel/make-copy-page" method="post" role="form">
                            <input type="hidden" name="page-id" value="12" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            VYTVORIŤ KÓPIU                                            
                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>
                                            NÁZOV NOVEJ STRÁNKY                                        </label>
                                        <input type="text" name="pagename" value="Obchodn&eacute; podmienky Kópia" class="form-control" required="">
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
<script type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/router.js"></script>
<script type="text/javascript">
    
    Router.init();
    
    window.onscroll = function (e) {
      var vertical_position = 0;
      if (pageYOffset)//usual
        vertical_position = pageYOffset;
      else if (document.documentElement.clientHeight)//ie
        vertical_position = document.documentElement.scrollTop;
      else if (document.body)//ie quirks
        vertical_position = document.body.scrollTop;

      var topPosition = vertical_position + ((vertical_position == 0) ? 3 : 200);

      $('#btns-action').css({ top: topPosition + 'px' });
    };
</script>
<script type="text/javascript">
            CKEDITOR.replace('ckeditor_189', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "http://carpedmfashion.local/cpanel/drive-api/build-image-register"
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
