<?php /*%%SmartyHeaderCode:184934865457989f67410012-27997780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '847303e6cf3105b6b6c516293879373395acec4c' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/management/short_list.tpl',
      1 => 1469528916,
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
    '1b82def41349315e0c8a3799a7bea3a9b681c009' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/management/short_list.tpl',
      1 => 1469528916,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '184934865457989f67410012-27997780',
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
  'unifunc' => 'content_57989f675a3625_92764226',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989f675a3625_92764226')) {function content_57989f675a3625_92764226($_smarty_tpl) {?><!DOCTYPE html>
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
.widget .widget-title {
  font-size: 15px;
}
.widget .widget-big-int {
  font-size: 29px;
}
.panel-heading > ul.list-inline {
    min-width: 630px;
    margin: 2px 0 0 20px;
}
.panel-heading > ul.list-inline > li.widget {
  float: left;
  width: auto;
  min-width: 100px;
  min-height: 1px;
  margin-left: 15px;
  margin-bottom: 0px;
  padding: 3px 5px;
}
.panel-heading > ul.list-inline > li.widget:first-child {
  margin-left: 0px
}
.table > tbody > tr > td {
  vertical-align: middle;
}

@media only screen and (min-width: 1666px) {
    
  .col-sm-6 {
      width: 16.66666667%;
  }
  
}
@media only screen and (max-width: 980px) {
  
  .panel-heading > ul.list-inline {
      margin: 5px 0 20px 5px;
  }
  .pagination.pagination-sm {
      margin: 5px 0 20px 0;
      float: left !important;
  }
    
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
        Obchod    </a>
</li>
<li>
    <a href="cpanel/store/orders" title="Objednávky">
        Objednávky    </a>
</li>
<li class="active">
    <a href="cpanel/store/orders/management/short" title="Management">
        Management
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
    <h2>
        <i class="fa fa-clipboard"></i>&nbsp;
        OBJEDNÁVKY&nbsp;
        <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom:15px;">
    <div class="col-lg-12">
        <a href="cpanel/store/orders/settings" class="btn btn-info" role="menuitem">
            <span>Settings</span>
        </a>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right:5px;">
        <div class="panel panel-colorful fix-panel panel-toggled">
            <div class="panel-heading">
                <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                    <span style="display:block;font-size:1.4em;float:left;">
                        <i class="fa fa-info-circle"></i>&nbsp;
                        <span style="font-weight:100;color:#000;">Rýchly prehľad</span>
                    </span>
                </h3>
                <ul class="panel-controls">
                    <li>
                        <a href="#" onclick="return false;" class="panel-collapse">
                            <span class="fa fa-angle-down"></span>
                        </a>
                    </li>
                </ul>          
            </div>
            <div class="panel-body panel-body-map">
                <div class="col-sm-6">
                    <div class="widget widget-warning widget-item-icon widget-padding-sm">                            
                        <div class="widget-item-left">
                            <i class="fa fa-sort-amount-desc"></i>
                        </div>
                        <div class="widget-data">
                            <div class="widget-title">LOW AMOUNT ORDER</div>
                            <div class="widget-big-int num-count">5.00&euro;</div>
                        </div>                                                        
                    </div> 
                </div><!-- end col -->
                <div class="col-sm-6">
                    <div class="widget widget-warning widget-item-icon widget-padding-sm">                            
                        <div class="widget-item-left">
                            <i class="fa fa-sort-amount-asc"></i>
                        </div>
                        <div class="widget-data">
                            <div class="widget-title">HIGH AMOUNT ORDER</div>
                            <div class="widget-big-int num-count">340.00&euro;</div>
                        </div>                                                        
                    </div> 
                </div><!-- end col -->
                <div class="col-sm-6">
                    <div class="widget widget-info widget-item-icon widget-padding-sm">                            
                        <div class="widget-item-left">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        <div class="widget-data">
                            <div class="widget-title">TOTAL AMOUNT ORDERS</div>
                            <div class="widget-big-int num-count">7.416.00&euro;</div>
                        </div>                                                        
                    </div> 
                </div><!-- end col -->
                <div class="col-sm-6">
                    <div class="widget widget-primary widget-item-icon widget-padding-sm">                            
                        <div class="widget-item-left">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="widget-data">
                            <div class="widget-title">TOTAL ORDERS / ARTICLES PER UNIT</div>
                            <div class="widget-big-int num-count">51 / 63Ks</div>
                        </div>                                                        
                    </div> 
                </div><!-- end col -->
                <div class="col-sm-6">
                    <div class="widget widget-success widget-padding-sm">                            
                        <div class="widget-item-left">
                            <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="21.57%" data-readOnly="true" data-thickness=".2"/>
                        </div>
                        <div class="widget-data">
                            <div class="widget-big-int"><span class="num-count">21.57</span>%</div>
                            <div class="widget-title">PAYED</div>                              
                        </div>                                                      
                    </div> 
                </div><!-- end col -->
                <div class="col-sm-6">
                    <div class="widget widget-danger widget-padding-sm">                            
                        <div class="widget-item-left">
                            <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="78.43%" data-readOnly="true" data-thickness=".2"/>
                        </div>
                        <div class="widget-data">
                            <div class="widget-big-int"><span class="num-count">78.43</span>%</div>
                            <div class="widget-title">OUTSTANDING</div>                              
                        </div>                                                      
                    </div> 
                </div><!-- end col -->
            </div><!-- end panel-body -->
        </div><!-- end panel -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-default tabs" style="margin-top:20px;padding:10px;">                            
                <ul class="nav nav-tabs" style="margin-top: -2px;padding:0;">
                                            <li >
                            <a href="cpanel/store/orders/management/short/1" title="Prijat&eacute;">
                                Prijat&eacute;
                            </a>
                        </li>
                                            <li >
                            <a href="cpanel/store/orders/management/short/2" title="Čakaj&uacute;ce">
                                Čakaj&uacute;ce
                            </a>
                        </li>
                                            <li >
                            <a href="cpanel/store/orders/management/short/3" title="Vybaven&eacute;">
                                Vybaven&eacute;
                            </a>
                        </li>
                                            <li class="active">
                            <a href="cpanel/store/orders/management/short/4" title="Testovacie">
                                Testovacie
                            </a>
                        </li>
                                    </ul>   
            </div>
            </div><!-- end col -->
</div><!-- end row -->
    <div class="row">
        <div class="col-lg-12">
                            <form action="cpanel/store/orders/change-status" method="post" role="form">
                    <div class="panel panel-default">
                        <div class="panel-heading ui-draggable-handle">
                            <h3 class="panel-title">
                                ORDER LIST&nbsp;
                                <span class="badge">Zobrazených 1-10 z 30 záznamov</span>
                            </h3>
                            <ul class="list-inline pull-left">
                                <li class="widget widget-warning">
                                    <i class="fa fa-sort-amount-desc"></i>
                                    <span style="display:inline-block;float:right;margin-right:5px;">5.00&euro;</span>
                                </li>
                                <li class="widget widget-warning">
                                    <i class="fa fa-sort-amount-asc"></i>
                                    <span style="display:inline-block;float:right;margin-right:5px;">340.00&euro;</span>
                                </li>
                                <li class="widget widget-info">
                                    <i class="fa fa-area-chart"></i>
                                    <span style="display:inline-block;float:right;margin-right:5px;">7.300.00&euro;</span>
                                </li>
                                <li class="widget widget-primary">
                                    <i class="fa fa-bar-chart"></i>
                                    <span style="display:inline-block;float:right;margin-right:5px;">30 / 31Ks</span>
                                </li>
                                <li class="widget widget-success">
                                    <i class="fa fa-pie-chart"></i>
                                    <span style="display:inline-block;float:right;margin-right:5px;">36.67%</span>
                                </li>
                                <li class="widget widget-danger">
                                    <i class="fa fa-pie-chart"></i>
                                    <span style="display:inline-block;float:right;margin-right:5px;">63.33%</span>
                                </li>
                            </ul>
                            <ul class="panel-controls">
                                <li>
                                    <a href="cpanel/store/orders/management/short" title="Order management short list">
                                        <i class="fa fa-list-ul"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cpanel/store/orders/management/long" title="Order management long list">
                                        <i class="fa fa-list"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cpanel/store/orders/list" title="Order List">
                                        <i class="fa fa-list-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body panel-body-table">
                            <div class="row">
                                <div class="col-lg-12" style="padding:15px 10px;">
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
                                    <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                        <select class="form-control select" onchange="location = 'cpanel/store/orders/management/short/4/1/'+this.options[this.selectedIndex].value;" required="">
                                            <option value="all" >všetko</option>
                                            <option value="10" selected>10</option>
                                            <option value="20" >20</option>
                                            <option value="50" >50</option>
                                            <option value="100" >100</option>
                                            <option value="200" >200</option>
                                            <option value="500" >500</option>
                                            <option value="1000" >1000</option>
                                        </select>
                                    </div>
                                    <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                                        <div class="input-group">
                                            <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/orders/management/short/4/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/orders/management/short/4/1/10">1</a></li><li class=""><a href="cpanel/store/orders/management/short/4/2/10">2</a></li><li class=""><a href="cpanel/store/orders/management/short/4/3/10">3</a></li><li class=""><a href="cpanel/store/orders/management/short/4/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                                </div>
                            </div><!-- end row -->
                            <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                                <table id="orderList" class="table table-bordered table-striped table-actions">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="30">
                                                #
                                            </th>
                                            <th class="text-center" width="110">
                                                ORDER ID                                            </th>
                                            <th class="text-center" width="150">
                                                CREATED                                            </th>
                                         
                                            <th class="text-center">
                                                CUSTOMER                                            </th>
                                            <th class="text-center" width="70">
                                                PAID                                            </th>
                                            <th class="text-right" width="100">
                                                AMOUNT                                            </th>
                                            <th class="text-center" width="40">
                                                EDIT                                            </th>
                                            <th class="text-center" width="40">
                                                <strong>FAKTÚRA</strong>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[0]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[0]['order-id']" value="51"/>
                                                    51
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-07-27 13:40:33</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Henrich&nbsp;Barkoczy</strong>
                                                                                                                                                                                                                        </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#fea223;">
                                                            <i class="fa fa-ban"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>46.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/bd68ac3ad7245adfcf2731109e497120" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(51);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[1]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[1]['order-id']" value="43"/>
                                                    43
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 14:13:50</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Alexander&nbsp;Kernasevic</strong>
                                                                                                                                                                                                                                                                                                                                            </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#95b75d;">
                                                            <i class="fa fa-check-circle-o"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>5.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/1fdf8c5add71abde5ec95e4ae5f27402" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(43);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[2]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[2]['order-id']" value="42"/>
                                                    42
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 14:04:40</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Henrich&nbsp;Barkoczy</strong>
                                                                                                                                                                                                                        </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#fea223;">
                                                            <i class="fa fa-ban"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/4cbc6040931cb19fad5c400cfdba95cf" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(42);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[3]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[3]['order-id']" value="41"/>
                                                    41
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 13:58:08</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Alexander&nbsp;Kernasevic</strong>
                                                                                                                                                                                                                                                                                                                                            </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#95b75d;">
                                                            <i class="fa fa-check-circle-o"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/476b19e3acd70ff46df3f2197a58e30d" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(41);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[4]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[4]['order-id']" value="40"/>
                                                    40
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 13:51:02</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Henrich&nbsp;Barkoczy</strong>
                                                                                                                                                                                                                        </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#fea223;">
                                                            <i class="fa fa-ban"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/9c543331fc94a3e2990a0adde181141c" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(40);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[5]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[5]['order-id']" value="39"/>
                                                    39
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 13:40:45</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Henrich&nbsp;Barkoczy</strong>
                                                                                                                                                                                                                        </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#fea223;">
                                                            <i class="fa fa-ban"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/a66dda86c96f30964e2b3e0fec9df1fb" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(39);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[6]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[6]['order-id']" value="38"/>
                                                    38
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 13:36:17</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Henrich&nbsp;Barkoczy</strong>
                                                                                                                                                                                                                        </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#fea223;">
                                                            <i class="fa fa-ban"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/fcc9e5844635013d0a64513211beef65" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(38);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[7]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[7]['order-id']" value="37"/>
                                                    37
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 11:58:45</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Alexander&nbsp;Kernasevic</strong>
                                                                                                                                                                                                                                                                                                                                            </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#95b75d;">
                                                            <i class="fa fa-check-circle-o"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/0403a6e8a7b77c8a1702d356ae386ee4" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(37);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[8]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[8]['order-id']" value="36"/>
                                                    36
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 11:52:50</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Alexander&nbsp;Kernasevic</strong>
                                                                                                                                                                                                                                                                                                                                            </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#95b75d;">
                                                            <i class="fa fa-check-circle-o"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/72891b66bb5387049a2343dd30e2e742" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(36);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                                    <tr>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="orders[9]['on']" value="1"/>
                                                    </div>
                                                </td>
                                                <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                    <input type="hidden" name="orders[9]['order-id']" value="35"/>
                                                    35
                                                </td>
                                                <td class="text-center">
                                                    <strong>2016-06-10 11:44:03</strong>
                                                </td>
                                                <td class="text-left">
                                                                                                                                                                                                                                        <strong>Alexander&nbsp;Kernasevic</strong>
                                                                                                                                                                                                                                                                                                                                            </td>
                                                <td class="text-center" style="max-height:45px;">
                                                                                                            <span style="font-size:1.5em;font-weight:700;color:#95b75d;">
                                                            <i class="fa fa-check-circle-o"></i>
                                                        </span>
                                                                                                    </td>
                                                <td class="text-right">
                                                    <strong>340.00&euro;</strong>
                                                </td>
                                                <td class="text-center">
                                                    <a href="cpanel/store/orders/edit/de8c86166c134fae253a47de8dd914a7" class="btn btn-default" style="padding:7px;border-radius:100%;">
                                                        <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="height:45px;">
                                                                                                          <button type="button" onclick="setOID(35);" class="btn btn-primary btn-block">
                                                        <i class="fa fa-plus-square-o" style="margin-top: 5px !important;margin-right: 0px !important;"></i>
                                                      </button>
                                                                                                    </td>
                                            </tr>
                                                                            </tbody>
                                </table>
                             </table>
                            </div><!-- end table-responsive -->
                        </div><!-- end panel-body -->
                        <div class="panel-footer">
                            <div class="form-group pull-left" style="width:200px;margin-right:15px;">
                                                                    <select name="status-id" class="form-control select" data-live-search="true" required>
                                                                                                                                    <option value="1">Prijat&eacute;</option>
                                                                                                                                                                                <option value="2">Čakaj&uacute;ce</option>
                                                                                                                                                                                <option value="3">Vybaven&eacute;</option>
                                                                                                                                                                                                            </select>
                                                            </div><!-- end form-group -->
                            <button type="submit" class="btn btn-warning" >
                                <i class="fa fa-refresh"></i>&nbsp;
                                ZMENA STAVU OBJEDNÁVKY                            </button>
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
        
<!-- MODAL WINDOW CART ITEM LIST -->
<div class="modal" id="modal_cart_items" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:#FFFFFF;padding:0;"><!-- --></div>
            <div class="panel-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    ZAVRIEŤ                </button>
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL WINDOW CART ITEM LIST -->

<!-- MODAL WINDOW CREATE INVOICE PDF -->                       
<div class="modal" id="create-inovice" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="cpanel/store/invoice/create" method="post" role="form">
                            <input type="hidden" name="orderId" value="0" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            VYTVORITŤ FAKTÚRU
                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>
                                                    Číslo faktúry
                                                </label>
                                                <input type="text" name="invcc" value="0004" maxlength="100" class="form-control">
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Dátum dodania tovaru/služby
                                                </label>
                                                <div class="input-group date">
                                                    <input type="text" name="date-0" value="2016-07-27" maxlength="12" class="form-control datepicker">
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Dátum vystavenia dokladu
                                                </label>
                                                <div class="input-group date">
                                                    <input type="text" name="date-1" value="2016-07-27" maxlength="12" class="form-control datepicker">
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Dátum splatnosti
                                                </label>
                                                <div class="input-group date">
                                                    <input type="text" name="date-2" value="2016-07-27" maxlength="12" class="form-control datepicker">
                                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div><!-- end form-group -->
                                        </div>
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
<!-- //-- MODAL WINDOW CREATE INVOICE PDF -->

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
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script>
    function setOID( orderId ) {
        $('[name="orderId"]').val( orderId );
        $('#create-inovice').modal('show');
    }
</script>
<script type="text/javascript">
$(function() {
    $('#c-control').on('change', function() {
        var value = parseInt($(this).val());
        
        if(value !== 0) {
            $('#orderList').find('[type="checkbox"]').each(function() {
                $(this).prop('checked',false);
            });
        }
        if(value === 99) {
            $('#orderList').find('[type="checkbox"]').each(function() {
                $(this).prop('checked',true);
            });
        }
        if(value === 88) {
            $('#orderList').find('[type="checkbox"]').each(function() {
                $(this).prop('checked',false);
            });
        }
    });
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
