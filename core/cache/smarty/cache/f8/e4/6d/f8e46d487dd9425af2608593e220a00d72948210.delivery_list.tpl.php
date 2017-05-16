<?php /*%%SmartyHeaderCode:537121776573a0a5905c572-50063252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff8747a05406534b76f80b7c4a350219408d735d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/delivery-payment/delivery/delivery_list.tpl',
      1 => 1460547463,
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
    'f8e46d487dd9425af2608593e220a00d72948210' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/delivery-payment/delivery/delivery_list.tpl',
      1 => 1460547463,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '537121776573a0a5905c572-50063252',
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
  'unifunc' => 'content_573a0a59185613_90330272',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0a59185613_90330272')) {function content_573a0a59185613_90330272($_smarty_tpl) {?><!DOCTYPE html>
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
#deliveryList tbody > tr > td {
    cursor: row-resize;
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
<li class="active">
    <a href="cpanel/store/delivery-payment/delivery" title="Doručovacie metódy">
        Doručovacie metódy    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-truck"></i>&nbsp;
            DORUČOVACIE METÓDY&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="cpanel/store/delivery-payment/delivery/create" method="post" role="form">
            <div class="panel panel-default panel-toggled">
                <div class="panel-heading">                                
                    <h3 class="panel-title">
                        CREATE DELIVERY METHOD                    </h3>  
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                            <div class="form-group">
                                <label>
                                    Delivery name                                    <span style="color:red;">*</span>
                                </label>
                                <input type="text"
                                       name="delivery-name"
                                       value=""
                                       placeholder="Delivery name"
                                       class="form-control"
                                       required>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-4" style="padding-left:0px;">
                                <label>
                                    Cost                                    <span style="color:red;">*</span>
                                </label>
                                <input type="text"
                                       name="cost"
                                       value=""
                                       placeholder="Cost"
                                       class="form-control"
                                       required>
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-4" style="padding:0px;">
                                <label>
                                    Time                                </label>
                                <input type="text"
                                       name="time"
                                       value=""
                                       placeholder="Time"
                                       class="form-control">
                            </div><!-- end form-group -->
                            <div class="form-group col-lg-4" style="padding-right:0px;">
                                <label>
                                    Time unit                                </label>
                                <input type="text"
                                       name="time-unit"
                                       value=""
                                       placeholder="Time unit"
                                       class="form-control">
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Description                                </label>
                                <textarea name="description" class="form-control" rows="5"></textarea>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <h4 style="border-bottom:1px solid #33414e;">NASTAVENIA</h4>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Language                                        <span style="color:red;">*</span>
                                    </label>                                                                              
                                    <select name="language-id" class="form-control select" data-live-search="true" required>
                                        <option value="0">Vyberte...</option>
                                                                                    <option value="1" data-icon="flag-icon flag-icon-af">Afrikaans</option>
                                                                                    <option value="2" data-icon="flag-icon flag-icon-af-ZA">Afrikaans (South Africa)</option>
                                                                                    <option value="3" data-icon="flag-icon flag-icon-ar">Arabic</option>
                                                                                    <option value="4" data-icon="flag-icon flag-icon-ar-AE">Arabic (U.A.E.)</option>
                                                                                    <option value="5" data-icon="flag-icon flag-icon-ar-BH">Arabic (Bahrain)</option>
                                                                                    <option value="6" data-icon="flag-icon flag-icon-ar-DZ">Arabic (Algeria)</option>
                                                                                    <option value="7" data-icon="flag-icon flag-icon-ar-EG">Arabic (Egypt)</option>
                                                                                    <option value="8" data-icon="flag-icon flag-icon-ar-IQ">Arabic (Iraq)</option>
                                                                                    <option value="9" data-icon="flag-icon flag-icon-ar-JO">Arabic (Jordan)</option>
                                                                                    <option value="10" data-icon="flag-icon flag-icon-ar-KW">Arabic (Kuwait)</option>
                                                                                    <option value="11" data-icon="flag-icon flag-icon-ar-LB">Arabic (Lebanon)</option>
                                                                                    <option value="12" data-icon="flag-icon flag-icon-ar-LY">Arabic (Libya)</option>
                                                                                    <option value="13" data-icon="flag-icon flag-icon-ar-MA">Arabic (Morocco)</option>
                                                                                    <option value="14" data-icon="flag-icon flag-icon-ar-OM">Arabic (Oman)</option>
                                                                                    <option value="15" data-icon="flag-icon flag-icon-ar-QA">Arabic (Qatar)</option>
                                                                                    <option value="16" data-icon="flag-icon flag-icon-ar-SA">Arabic (Saudi Arabia)</option>
                                                                                    <option value="17" data-icon="flag-icon flag-icon-ar-SY">Arabic (Syria)</option>
                                                                                    <option value="18" data-icon="flag-icon flag-icon-ar-TN">Arabic (Tunisia)</option>
                                                                                    <option value="19" data-icon="flag-icon flag-icon-ar-YE">Arabic (Yemen)</option>
                                                                                    <option value="20" data-icon="flag-icon flag-icon-az">Azeri (Latin)</option>
                                                                                    <option value="21" data-icon="flag-icon flag-icon-az-AZ">Azeri (Latin) (Azerbaijan)</option>
                                                                                    <option value="22" data-icon="flag-icon flag-icon-az-AZ">Azeri (Cyrillic) (Azerbaijan)</option>
                                                                                    <option value="23" data-icon="flag-icon flag-icon-be">Belarusian</option>
                                                                                    <option value="24" data-icon="flag-icon flag-icon-be-BY">Belarusian (Belarus)</option>
                                                                                    <option value="25" data-icon="flag-icon flag-icon-bg">Bulgarian</option>
                                                                                    <option value="26" data-icon="flag-icon flag-icon-bg-BG">Bulgarian (Bulgaria)</option>
                                                                                    <option value="27" data-icon="flag-icon flag-icon-bs-BA">Bosnian (Bosnia and Herzegovina)</option>
                                                                                    <option value="28" data-icon="flag-icon flag-icon-ca">Catalan</option>
                                                                                    <option value="29" data-icon="flag-icon flag-icon-ca-ES">Catalan (Spain)</option>
                                                                                    <option value="30" data-icon="flag-icon flag-icon-cs">Czech</option>
                                                                                    <option value="31" data-icon="flag-icon flag-icon-cs-CZ">Czech (Czech Republic)</option>
                                                                                    <option value="32" data-icon="flag-icon flag-icon-cy">Welsh</option>
                                                                                    <option value="33" data-icon="flag-icon flag-icon-cy-GB">Welsh (United Kingdom)</option>
                                                                                    <option value="34" data-icon="flag-icon flag-icon-da">Danish</option>
                                                                                    <option value="35" data-icon="flag-icon flag-icon-da-DK">Danish (Denmark)</option>
                                                                                    <option value="36" data-icon="flag-icon flag-icon-de">German</option>
                                                                                    <option value="37" data-icon="flag-icon flag-icon-de-AT">German (Austria)</option>
                                                                                    <option value="38" data-icon="flag-icon flag-icon-de-CH">German (Switzerland)</option>
                                                                                    <option value="39" data-icon="flag-icon flag-icon-de-DE">German (Germany)</option>
                                                                                    <option value="40" data-icon="flag-icon flag-icon-de-LI">German (Liechtenstein)</option>
                                                                                    <option value="41" data-icon="flag-icon flag-icon-de-LU">German (Luxembourg)</option>
                                                                                    <option value="42" data-icon="flag-icon flag-icon-dv">Divehi</option>
                                                                                    <option value="43" data-icon="flag-icon flag-icon-dv-MV">Divehi (Maldives)</option>
                                                                                    <option value="44" data-icon="flag-icon flag-icon-el">Greek</option>
                                                                                    <option value="45" data-icon="flag-icon flag-icon-el-GR">Greek (Greece)</option>
                                                                                    <option value="46" data-icon="flag-icon flag-icon-en">English</option>
                                                                                    <option value="47" data-icon="flag-icon flag-icon-en-AU">English (Australia)</option>
                                                                                    <option value="48" data-icon="flag-icon flag-icon-en-BZ">English (Belize)</option>
                                                                                    <option value="49" data-icon="flag-icon flag-icon-en-CA">English (Canada)</option>
                                                                                    <option value="50" data-icon="flag-icon flag-icon-en-CB">English (Caribbean)</option>
                                                                                    <option value="51" data-icon="flag-icon flag-icon-en-GB">English (United Kingdom)</option>
                                                                                    <option value="52" data-icon="flag-icon flag-icon-en-IE">English (Ireland)</option>
                                                                                    <option value="53" data-icon="flag-icon flag-icon-en-JM">English (Jamaica)</option>
                                                                                    <option value="54" data-icon="flag-icon flag-icon-en-NZ">English (New Zealand)</option>
                                                                                    <option value="55" data-icon="flag-icon flag-icon-en-PH">English (Republic of the Philippines)</option>
                                                                                    <option value="56" data-icon="flag-icon flag-icon-en-TT">English (Trinidad and Tobago)</option>
                                                                                    <option value="57" data-icon="flag-icon flag-icon-en-US">English (United States)</option>
                                                                                    <option value="58" data-icon="flag-icon flag-icon-en-ZA">English (South Africa)</option>
                                                                                    <option value="59" data-icon="flag-icon flag-icon-en-ZW">English (Zimbabwe)</option>
                                                                                    <option value="60" data-icon="flag-icon flag-icon-eo">Esperanto</option>
                                                                                    <option value="61" data-icon="flag-icon flag-icon-es">Spanish</option>
                                                                                    <option value="62" data-icon="flag-icon flag-icon-es-AR">Spanish (Argentina)</option>
                                                                                    <option value="63" data-icon="flag-icon flag-icon-es-BO">Spanish (Bolivia)</option>
                                                                                    <option value="64" data-icon="flag-icon flag-icon-es-CL">Spanish (Chile)</option>
                                                                                    <option value="65" data-icon="flag-icon flag-icon-es-CO">Spanish (Colombia)</option>
                                                                                    <option value="66" data-icon="flag-icon flag-icon-es-CR">Spanish (Costa Rica)</option>
                                                                                    <option value="67" data-icon="flag-icon flag-icon-es-DO">Spanish (Dominican Republic)</option>
                                                                                    <option value="68" data-icon="flag-icon flag-icon-es-EC">Spanish (Ecuador)</option>
                                                                                    <option value="69" data-icon="flag-icon flag-icon-es-ES">Spanish (Castilian)</option>
                                                                                    <option value="70" data-icon="flag-icon flag-icon-es-ES">Spanish (Spain)</option>
                                                                                    <option value="71" data-icon="flag-icon flag-icon-es-GT">Spanish (Guatemala)</option>
                                                                                    <option value="72" data-icon="flag-icon flag-icon-es-HN">Spanish (Honduras)</option>
                                                                                    <option value="73" data-icon="flag-icon flag-icon-es-MX">Spanish (Mexico)</option>
                                                                                    <option value="74" data-icon="flag-icon flag-icon-es-NI">Spanish (Nicaragua)</option>
                                                                                    <option value="75" data-icon="flag-icon flag-icon-es-PA">Spanish (Panama)</option>
                                                                                    <option value="76" data-icon="flag-icon flag-icon-es-PE">Spanish (Peru)</option>
                                                                                    <option value="77" data-icon="flag-icon flag-icon-es-PR">Spanish (Puerto Rico)</option>
                                                                                    <option value="78" data-icon="flag-icon flag-icon-es-PY">Spanish (Paraguay)</option>
                                                                                    <option value="79" data-icon="flag-icon flag-icon-es-SV">Spanish (El Salvador)</option>
                                                                                    <option value="80" data-icon="flag-icon flag-icon-es-UY">Spanish (Uruguay)</option>
                                                                                    <option value="81" data-icon="flag-icon flag-icon-es-VE">Spanish (Venezuela)</option>
                                                                                    <option value="82" data-icon="flag-icon flag-icon-et">Estonian</option>
                                                                                    <option value="83" data-icon="flag-icon flag-icon-et-EE">Estonian (Estonia)</option>
                                                                                    <option value="84" data-icon="flag-icon flag-icon-eu">Basque</option>
                                                                                    <option value="85" data-icon="flag-icon flag-icon-eu-ES">Basque (Spain)</option>
                                                                                    <option value="86" data-icon="flag-icon flag-icon-fa">Farsi</option>
                                                                                    <option value="87" data-icon="flag-icon flag-icon-fa-IR">Farsi (Iran)</option>
                                                                                    <option value="88" data-icon="flag-icon flag-icon-fi">Finnish</option>
                                                                                    <option value="89" data-icon="flag-icon flag-icon-fi-FI">Finnish (Finland)</option>
                                                                                    <option value="90" data-icon="flag-icon flag-icon-fo">Faroese</option>
                                                                                    <option value="91" data-icon="flag-icon flag-icon-fo-FO">Faroese (Faroe Islands)</option>
                                                                                    <option value="92" data-icon="flag-icon flag-icon-fr">French</option>
                                                                                    <option value="93" data-icon="flag-icon flag-icon-fr-BE">French (Belgium)</option>
                                                                                    <option value="94" data-icon="flag-icon flag-icon-fr-CA">French (Canada)</option>
                                                                                    <option value="95" data-icon="flag-icon flag-icon-fr-CH">French (Switzerland)</option>
                                                                                    <option value="96" data-icon="flag-icon flag-icon-fr-FR">French (France)</option>
                                                                                    <option value="97" data-icon="flag-icon flag-icon-fr-LU">French (Luxembourg)</option>
                                                                                    <option value="98" data-icon="flag-icon flag-icon-fr-MC">French (Principality of Monaco)</option>
                                                                                    <option value="99" data-icon="flag-icon flag-icon-gl">Galician</option>
                                                                                    <option value="100" data-icon="flag-icon flag-icon-gl-ES">Galician (Spain)</option>
                                                                                    <option value="101" data-icon="flag-icon flag-icon-gu">Gujarati</option>
                                                                                    <option value="102" data-icon="flag-icon flag-icon-gu-IN">Gujarati (India)</option>
                                                                                    <option value="103" data-icon="flag-icon flag-icon-he">Hebrew</option>
                                                                                    <option value="104" data-icon="flag-icon flag-icon-he-IL">Hebrew (Israel)</option>
                                                                                    <option value="105" data-icon="flag-icon flag-icon-hi">Hindi</option>
                                                                                    <option value="106" data-icon="flag-icon flag-icon-hi-IN">Hindi (India)</option>
                                                                                    <option value="107" data-icon="flag-icon flag-icon-hr">Croatian</option>
                                                                                    <option value="108" data-icon="flag-icon flag-icon-hr-BA">Croatian (Bosnia and Herzegovina)</option>
                                                                                    <option value="109" data-icon="flag-icon flag-icon-hr-HR">Croatian (Croatia)</option>
                                                                                    <option value="110" data-icon="flag-icon flag-icon-hu">Hungarian</option>
                                                                                    <option value="111" data-icon="flag-icon flag-icon-hu-HU">Hungarian (Hungary)</option>
                                                                                    <option value="112" data-icon="flag-icon flag-icon-hy">Armenian</option>
                                                                                    <option value="113" data-icon="flag-icon flag-icon-hy-AM">Armenian (Armenia)</option>
                                                                                    <option value="114" data-icon="flag-icon flag-icon-id">Indonesian</option>
                                                                                    <option value="115" data-icon="flag-icon flag-icon-id-ID">Indonesian (Indonesia)</option>
                                                                                    <option value="116" data-icon="flag-icon flag-icon-is">Icelandic</option>
                                                                                    <option value="117" data-icon="flag-icon flag-icon-is-IS">Icelandic (Iceland)</option>
                                                                                    <option value="118" data-icon="flag-icon flag-icon-it">Italian</option>
                                                                                    <option value="119" data-icon="flag-icon flag-icon-it-CH">Italian (Switzerland)</option>
                                                                                    <option value="120" data-icon="flag-icon flag-icon-it-IT">Italian (Italy)</option>
                                                                                    <option value="121" data-icon="flag-icon flag-icon-ja">Japanese</option>
                                                                                    <option value="122" data-icon="flag-icon flag-icon-ja-JP">Japanese (Japan)</option>
                                                                                    <option value="123" data-icon="flag-icon flag-icon-ka">Georgian</option>
                                                                                    <option value="124" data-icon="flag-icon flag-icon-ka-GE">Georgian (Georgia)</option>
                                                                                    <option value="125" data-icon="flag-icon flag-icon-kk">Kazakh</option>
                                                                                    <option value="126" data-icon="flag-icon flag-icon-kk-KZ">Kazakh (Kazakhstan)</option>
                                                                                    <option value="127" data-icon="flag-icon flag-icon-kn">Kannada</option>
                                                                                    <option value="128" data-icon="flag-icon flag-icon-kn-IN">Kannada (India)</option>
                                                                                    <option value="129" data-icon="flag-icon flag-icon-ko">Korean</option>
                                                                                    <option value="130" data-icon="flag-icon flag-icon-ko-KR">Korean (Korea)</option>
                                                                                    <option value="131" data-icon="flag-icon flag-icon-kok">Konkani</option>
                                                                                    <option value="132" data-icon="flag-icon flag-icon-kok-IN">Konkani (India)</option>
                                                                                    <option value="133" data-icon="flag-icon flag-icon-ky">Kyrgyz</option>
                                                                                    <option value="134" data-icon="flag-icon flag-icon-ky-KG">Kyrgyz (Kyrgyzstan)</option>
                                                                                    <option value="135" data-icon="flag-icon flag-icon-lt">Lithuanian</option>
                                                                                    <option value="136" data-icon="flag-icon flag-icon-lt-LT">Lithuanian (Lithuania)</option>
                                                                                    <option value="137" data-icon="flag-icon flag-icon-lv">Latvian</option>
                                                                                    <option value="138" data-icon="flag-icon flag-icon-lv-LV">Latvian (Latvia)</option>
                                                                                    <option value="139" data-icon="flag-icon flag-icon-mi">Maori</option>
                                                                                    <option value="140" data-icon="flag-icon flag-icon-mi-NZ">Maori (New Zealand)</option>
                                                                                    <option value="141" data-icon="flag-icon flag-icon-mk">FYRO Macedonian</option>
                                                                                    <option value="142" data-icon="flag-icon flag-icon-mk-MK">FYRO Macedonian (Former Yugoslav Republic of Macedonia)</option>
                                                                                    <option value="143" data-icon="flag-icon flag-icon-mn">Mongolian</option>
                                                                                    <option value="144" data-icon="flag-icon flag-icon-mn-MN">Mongolian (Mongolia)</option>
                                                                                    <option value="145" data-icon="flag-icon flag-icon-mr">Marathi</option>
                                                                                    <option value="146" data-icon="flag-icon flag-icon-mr-IN">Marathi (India)</option>
                                                                                    <option value="147" data-icon="flag-icon flag-icon-ms">Malay</option>
                                                                                    <option value="148" data-icon="flag-icon flag-icon-ms-BN">Malay (Brunei Darussalam)</option>
                                                                                    <option value="149" data-icon="flag-icon flag-icon-ms-MY">Malay (Malaysia)</option>
                                                                                    <option value="150" data-icon="flag-icon flag-icon-mt">Maltese</option>
                                                                                    <option value="151" data-icon="flag-icon flag-icon-mt-MT">Maltese (Malta)</option>
                                                                                    <option value="152" data-icon="flag-icon flag-icon-nb">Norwegian (Bokm?l)</option>
                                                                                    <option value="153" data-icon="flag-icon flag-icon-nb-NO">Norwegian (Bokm?l) (Norway)</option>
                                                                                    <option value="154" data-icon="flag-icon flag-icon-nl">Dutch</option>
                                                                                    <option value="155" data-icon="flag-icon flag-icon-nl-BE">Dutch (Belgium)</option>
                                                                                    <option value="156" data-icon="flag-icon flag-icon-nl-NL">Dutch (Netherlands)</option>
                                                                                    <option value="157" data-icon="flag-icon flag-icon-nn-NO">Norwegian (Nynorsk) (Norway)</option>
                                                                                    <option value="158" data-icon="flag-icon flag-icon-ns">Northern Sotho</option>
                                                                                    <option value="159" data-icon="flag-icon flag-icon-ns-ZA">Northern Sotho (South Africa)</option>
                                                                                    <option value="160" data-icon="flag-icon flag-icon-pa">Punjabi</option>
                                                                                    <option value="161" data-icon="flag-icon flag-icon-pa-IN">Punjabi (India)</option>
                                                                                    <option value="162" data-icon="flag-icon flag-icon-pl">Polish</option>
                                                                                    <option value="163" data-icon="flag-icon flag-icon-pl-PL">Polish (Poland)</option>
                                                                                    <option value="164" data-icon="flag-icon flag-icon-ps">Pashto</option>
                                                                                    <option value="165" data-icon="flag-icon flag-icon-ps-AR">Pashto (Afghanistan)</option>
                                                                                    <option value="166" data-icon="flag-icon flag-icon-pt">Portuguese</option>
                                                                                    <option value="167" data-icon="flag-icon flag-icon-pt-BR">Portuguese (Brazil)</option>
                                                                                    <option value="168" data-icon="flag-icon flag-icon-pt-PT">Portuguese (Portugal)</option>
                                                                                    <option value="169" data-icon="flag-icon flag-icon-qu">Quechua</option>
                                                                                    <option value="170" data-icon="flag-icon flag-icon-qu-BO">Quechua (Bolivia)</option>
                                                                                    <option value="171" data-icon="flag-icon flag-icon-qu-EC">Quechua (Ecuador)</option>
                                                                                    <option value="172" data-icon="flag-icon flag-icon-qu-PE">Quechua (Peru)</option>
                                                                                    <option value="173" data-icon="flag-icon flag-icon-ro">Romanian</option>
                                                                                    <option value="174" data-icon="flag-icon flag-icon-ro-RO">Romanian (Romania)</option>
                                                                                    <option value="175" data-icon="flag-icon flag-icon-ru">Russian</option>
                                                                                    <option value="176" data-icon="flag-icon flag-icon-ru-RU">Russian (Russia)</option>
                                                                                    <option value="177" data-icon="flag-icon flag-icon-sa">Sanskrit</option>
                                                                                    <option value="178" data-icon="flag-icon flag-icon-sa-IN">Sanskrit (India)</option>
                                                                                    <option value="179" data-icon="flag-icon flag-icon-se">Sami (Northern)</option>
                                                                                    <option value="180" data-icon="flag-icon flag-icon-se-FI">Sami (Northern) (Finland)</option>
                                                                                    <option value="181" data-icon="flag-icon flag-icon-se-FI">Sami (Skolt) (Finland)</option>
                                                                                    <option value="182" data-icon="flag-icon flag-icon-se-FI">Sami (Inari) (Finland)</option>
                                                                                    <option value="183" data-icon="flag-icon flag-icon-se-NO">Sami (Northern) (Norway)</option>
                                                                                    <option value="184" data-icon="flag-icon flag-icon-se-NO">Sami (Lule) (Norway)</option>
                                                                                    <option value="185" data-icon="flag-icon flag-icon-se-NO">Sami (Southern) (Norway)</option>
                                                                                    <option value="186" data-icon="flag-icon flag-icon-se-SE">Sami (Northern) (Sweden)</option>
                                                                                    <option value="187" data-icon="flag-icon flag-icon-se-SE">Sami (Lule) (Sweden)</option>
                                                                                    <option value="188" data-icon="flag-icon flag-icon-se-SE">Sami (Southern) (Sweden)</option>
                                                                                    <option value="189" data-icon="flag-icon flag-icon-sk">Slovak</option>
                                                                                    <option value="190" data-icon="flag-icon flag-icon-sk-SK">Slovak (Slovakia)</option>
                                                                                    <option value="191" data-icon="flag-icon flag-icon-sl">Slovenian</option>
                                                                                    <option value="192" data-icon="flag-icon flag-icon-sl-SI">Slovenian (Slovenia)</option>
                                                                                    <option value="193" data-icon="flag-icon flag-icon-sq">Albanian</option>
                                                                                    <option value="194" data-icon="flag-icon flag-icon-sq-AL">Albanian (Albania)</option>
                                                                                    <option value="195" data-icon="flag-icon flag-icon-sr-BA">Serbian (Latin) (Bosnia and Herzegovina)</option>
                                                                                    <option value="196" data-icon="flag-icon flag-icon-sr-BA">Serbian (Cyrillic) (Bosnia and Herzegovina)</option>
                                                                                    <option value="197" data-icon="flag-icon flag-icon-sr-SP">Serbian (Latin) (Serbia and Montenegro)</option>
                                                                                    <option value="198" data-icon="flag-icon flag-icon-sr-SP">Serbian (Cyrillic) (Serbia and Montenegro)</option>
                                                                                    <option value="199" data-icon="flag-icon flag-icon-sv">Swedish</option>
                                                                                    <option value="200" data-icon="flag-icon flag-icon-sv-FI">Swedish (Finland)</option>
                                                                                    <option value="201" data-icon="flag-icon flag-icon-sv-SE">Swedish (Sweden)</option>
                                                                                    <option value="202" data-icon="flag-icon flag-icon-sw">Swahili</option>
                                                                                    <option value="203" data-icon="flag-icon flag-icon-sw-KE">Swahili (Kenya)</option>
                                                                                    <option value="204" data-icon="flag-icon flag-icon-syr">Syriac</option>
                                                                                    <option value="205" data-icon="flag-icon flag-icon-syr-SY">Syriac (Syria)</option>
                                                                                    <option value="206" data-icon="flag-icon flag-icon-ta">Tamil</option>
                                                                                    <option value="207" data-icon="flag-icon flag-icon-ta-IN">Tamil (India)</option>
                                                                                    <option value="208" data-icon="flag-icon flag-icon-te">Telugu</option>
                                                                                    <option value="209" data-icon="flag-icon flag-icon-te-IN">Telugu (India)</option>
                                                                                    <option value="210" data-icon="flag-icon flag-icon-th">Thai</option>
                                                                                    <option value="211" data-icon="flag-icon flag-icon-th-TH">Thai (Thailand)</option>
                                                                                    <option value="212" data-icon="flag-icon flag-icon-tl">Tagalog</option>
                                                                                    <option value="213" data-icon="flag-icon flag-icon-tl-PH">Tagalog (Philippines)</option>
                                                                                    <option value="214" data-icon="flag-icon flag-icon-tn">Tswana</option>
                                                                                    <option value="215" data-icon="flag-icon flag-icon-tn-ZA">Tswana (South Africa)</option>
                                                                                    <option value="216" data-icon="flag-icon flag-icon-tr">Turkish</option>
                                                                                    <option value="217" data-icon="flag-icon flag-icon-tr-TR">Turkish (Turkey)</option>
                                                                                    <option value="218" data-icon="flag-icon flag-icon-tt">Tatar</option>
                                                                                    <option value="219" data-icon="flag-icon flag-icon-tt-RU">Tatar (Russia)</option>
                                                                                    <option value="220" data-icon="flag-icon flag-icon-ts">Tsonga</option>
                                                                                    <option value="221" data-icon="flag-icon flag-icon-uk">Ukrainian</option>
                                                                                    <option value="222" data-icon="flag-icon flag-icon-uk-UA">Ukrainian (Ukraine)</option>
                                                                                    <option value="223" data-icon="flag-icon flag-icon-ur">Urdu</option>
                                                                                    <option value="224" data-icon="flag-icon flag-icon-ur-PK">Urdu (Islamic Republic of Pakistan)</option>
                                                                                    <option value="225" data-icon="flag-icon flag-icon-uz">Uzbek (Latin)</option>
                                                                                    <option value="226" data-icon="flag-icon flag-icon-uz-UZ">Uzbek (Latin) (Uzbekistan)</option>
                                                                                    <option value="227" data-icon="flag-icon flag-icon-uz-UZ">Uzbek (Cyrillic) (Uzbekistan)</option>
                                                                                    <option value="228" data-icon="flag-icon flag-icon-vi">Vietnamese</option>
                                                                                    <option value="229" data-icon="flag-icon flag-icon-vi-VN">Vietnamese (Viet Nam)</option>
                                                                                    <option value="230" data-icon="flag-icon flag-icon-xh">Xhosa</option>
                                                                                    <option value="231" data-icon="flag-icon flag-icon-xh-ZA">Xhosa (South Africa)</option>
                                                                                    <option value="232" data-icon="flag-icon flag-icon-zh">Chinese</option>
                                                                                    <option value="233" data-icon="flag-icon flag-icon-zh-CN">Chinese (S)</option>
                                                                                    <option value="234" data-icon="flag-icon flag-icon-zh-HK">Chinese (Hong Kong)</option>
                                                                                    <option value="235" data-icon="flag-icon flag-icon-zh-MO">Chinese (Macau)</option>
                                                                                    <option value="236" data-icon="flag-icon flag-icon-zh-SG">Chinese (Singapore)</option>
                                                                                    <option value="237" data-icon="flag-icon flag-icon-zh-TW">Chinese (T)</option>
                                                                                    <option value="238" data-icon="flag-icon flag-icon-zu">Zulu</option>
                                                                                    <option value="239" data-icon="flag-icon flag-icon-zu-ZA">Zulu (South Africa)</option>
                                                                            </select>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        Currency                                        <span style="color:red;">*</span>
                                    </label>                                                                              
                                    <select name="currency-id" class="form-control select" data-live-search="true" required>
                                        <option value="0">Vyberte...</option>
                                                                                    <option value="1">Euro</option>
                                                                            </select>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        Enable                                    </label><br>                                
                                    <label class="switch">
                                        <input type="checkbox" name="enable" value="1">
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                        </div><!-- end col -->
                    </div>
                </div><!-- end panel-body -->
                <div class="panel-footer">                                 
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                    </button>
                </div><!-- end panel-footer -->
            </div><!-- end panel -->
        </form>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="cpanel/store/delivery-payment/delivery/update-all" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            DELIVERY LIST                            &nbsp;<span class="badge">6</span>
                        </h3>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive">
                            <table id="deliveryList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="50">#</th>
                                        <th class="text-left">
                                            DELIVERY NAME                                        </th>
                                        <th class="text-center">
                                            LANGUAGE                                        </th>
                                        <th class="text-center">
                                            CURRENCY                                        </th>
                                        <th class="text-center">
                                            COST                                        </th>
                                        <th class="text-center">
                                            TIME                                        </th>
                                        <th class="text-center">
                                            UNIT TIME                                        </th>
                                        <th class="text-center" width="100">
                                            EDITOVAŤ                                        </th>
                                        <th class="text-center" width="100">
                                            ENABLE                                        </th>
                                        <th class="text-center" width="100">
                                            DELETE                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="deliveryList[0]['delivery-id']" value="1"/>
                                                1
                                            </td>
                                            <td class="text-left">
                                                <strong>Osobn&yacute; odber - Bratislava</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;Slovak
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    24
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    h
                                                                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/delivery-payment/delivery/edit/1" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Osobn&yacute; odber - Bratislava">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[0]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[0]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="deliveryList[1]['delivery-id']" value="2"/>
                                                2
                                            </td>
                                            <td class="text-left">
                                                <strong>Osobn&yacute; odber - Bratislava</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;Slovak
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/delivery-payment/delivery/edit/2" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Osobn&yacute; odber - Bratislava">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[1]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[1]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="deliveryList[2]['delivery-id']" value="3"/>
                                                3
                                            </td>
                                            <td class="text-left">
                                                <strong>Kuri&eacute;r</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;Slovak
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>3.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    24
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    h
                                                                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/delivery-payment/delivery/edit/3" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Kuri&eacute;r">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[2]['enable']" value="1" checked>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[2]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="deliveryList[3]['delivery-id']" value="4"/>
                                                4
                                            </td>
                                            <td class="text-left">
                                                <strong>Dobierka</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;Slovak
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>4.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    24
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    h
                                                                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/delivery-payment/delivery/edit/4" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Dobierka">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[3]['enable']" value="1" checked>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[3]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="deliveryList[4]['delivery-id']" value="5"/>
                                                5
                                            </td>
                                            <td class="text-left">
                                                <strong>Dobierka kuri&eacute;rom</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;Slovak
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>6.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/delivery-payment/delivery/edit/5" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Dobierka kuri&eacute;rom">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[4]['enable']" value="1" checked>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[4]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="deliveryList[5]['delivery-id']" value="6"/>
                                                6
                                            </td>
                                            <td class="text-left">
                                                <strong>Osobn&yacute; odber - CarpeDM Nov&aacute; Lesn&aacute;</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                                &nbsp;Slovak
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/delivery-payment/delivery/edit/6" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Osobn&yacute; odber - CarpeDM Nov&aacute; Lesn&aacute;">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[5]['enable']" value="1" checked>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="deliveryList[5]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </tbody>
                         </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                        </button>
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
<script>
$(function(){
    $('#deliveryList').find('tbody').sortable();
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
