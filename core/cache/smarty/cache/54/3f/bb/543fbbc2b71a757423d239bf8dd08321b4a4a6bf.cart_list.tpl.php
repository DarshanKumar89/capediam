<?php /*%%SmartyHeaderCode:142031258057989f9b3d6028-27945651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7552715cd1afb45eb245e4a0ce8f47f559cf01a2' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/carts/cart_list.tpl',
      1 => 1469528903,
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
    '543fbbc2b71a757423d239bf8dd08321b4a4a6bf' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/carts/cart_list.tpl',
      1 => 1469528903,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '142031258057989f9b3d6028-27945651',
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
  'unifunc' => 'content_57989f9b4e7c99_06049929',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989f9b4e7c99_06049929')) {function content_57989f9b4e7c99_06049929($_smarty_tpl) {?><!DOCTYPE html>
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
.hold {
    display: inline-block;
    width: 30px;
    height: 30px;
    padding: 7px;
    font-size: 1.4em;
    font-weight: 700;
    line-height: 100%;
    text-align: center;
    color: #fff;
    vertical-align: middle;
    border-radius: 100%;
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
<li class="active">
    <a href="cpanel/store/carts" title="Košíky">
        Košíky    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-shopping-cart"></i>&nbsp;
            KOŠÍKY&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 25px;">
    <div class="col-lg-12">
        <div class="btn-group" role="group">
            <a href="#" onclick="return false;" class="btn btn-primary"role="menuitem">
                <span>Settings</span>
            </a>
            <a href="#" onclick="return false;" class="btn btn-info"role="menuitem">
                <span>Archiv</span>
            </a>
            <a href="#" onclick="return false;" class="btn btn-warning"role="menuitem">
                <span>Export</span>
            </a>
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
                <div class="widget-title">Opened</div>                             
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
                <div class="widget-title">Closed</div>                               
            </div>                                                        
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-warning widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count">0</span>%</div>
                <div class="widget-title">Archive</div>                          
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
                <div class="widget-title">Renew</div>                              
            </div>                                                      
        </div> 
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
                    <form action="cpanel/store/carts/update-all" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            CART LIST&nbsp;
                            <span class="badge">Zobrazených 1-10 z 52 záznamov</span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="cpanel/store/carts/0/0" style="background-color:#000;color:#fff;" title="VŠETKO">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/carts/0/1" style="background-color:#3fbae4;color:#fff;" title="OPENED">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/carts/0/2" style="background-color:#fea223;color:#fff;" title="CLOSED">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/carts/0/3" style="background-color:#95b75d;color:#fff;" title="ARCHIVED">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>                          
                            <li>
                                <a href="cpanel/store/carts/0/4" style="background-color:#b64645;color:#fff;" title="RENEW">
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
                        <div class="row">
                            <div class="col-lg-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                    <select class="form-control select" onchange="location = 'cpanel/store/carts/9/9/1/'+this.options[this.selectedIndex].value;" required="">
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
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/carts/0/0//0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/carts/0/0//1/10">1</a></li><li class=""><a href="cpanel/store/carts/0/0//2/10">2</a></li><li class=""><a href="cpanel/store/carts/0/0//3/10">3</a></li><li class=""><a href="cpanel/store/carts/0/0//4/10">4</a></li><li class=""><a href="cpanel/store/carts/0/0//5/10">5</a></li><li class=""><a href="cpanel/store/carts/0/0//6/10">6</a></li><li class=""><a href="cpanel/store/carts/0/0//2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="statusList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="50">
                                            CART ID
                                        </th>
                                        <th class="text-center" width="150">
                                            CREATED                                        </th>
                                        <th class="text-center" width="50">
                                            GROUP                                        </th>
                                        <th class="text-center" width="50">
                                            USER                                        </th>
                                        <th class="text-center" width="70">
                                            EXPIRE DATETIME                                        </th>
                                        <th class="text-center" width="70">
                                            EXPIRE (IN MINUTE)                                        </th>
                                        <th class="text-center" width="50">
                                            CHANGED                                        </th>
                                        <th class="text-right" width="70">
                                            NUMBER OF CHANGES                                        </th>
                                        <th class="text-center">
                                            <span style="font-size:1.4em;font-weight:700;">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </th>
                                        <th class="text-center">
                                            CURRENCY                                        </th>
                                        <th class="text-center">
                                            TAX                                        </th>
                                        <th class="text-center">
                                            AMOUNT                                        </th>
                                        <th class="text-center">
                                            <span style="font-size:1.4em;font-weight:700;">
                                                <i class="fa fa-shopping-cart"></i>
                                            </span>
                                        </th>
                                        <th class="text-center">
                                            ODSTRÁNIŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[0]['cart-id']" value="77"/>
                                                77
                                            </td>
                                            <td class="text-center">
                                                2016-07-27 13:12:51
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>46.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('4b4792a1d9c2cedf537f3861c77f6556');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span class="hold">
                                                        <i class="fa fa-link"></i>
                                                    </span>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[1]['cart-id']" value="76"/>
                                                76
                                            </td>
                                            <td class="text-center">
                                                2016-07-19 15:02:27
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>76.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('b1d1d40a164d1ae2849547d734b5f3bd');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>2</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <label class="switch">
                                                        <input type="checkbox" name="carts[1]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[2]['cart-id']" value="75"/>
                                                75
                                            </td>
                                            <td class="text-center">
                                                2016-07-14 12:15:11
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>5.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('01c44ce101b8627b5d22830a47eaf61a');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <label class="switch">
                                                        <input type="checkbox" name="carts[2]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[3]['cart-id']" value="74"/>
                                                74
                                            </td>
                                            <td class="text-center">
                                                2016-07-12 15:43:16
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>44.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('7e2eff73715d5451babead0c4b4c3f35');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <label class="switch">
                                                        <input type="checkbox" name="carts[3]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[4]['cart-id']" value="73"/>
                                                73
                                            </td>
                                            <td class="text-center">
                                                2016-07-12 14:47:23
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>67.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('92e70d83226f8383ca2391d369f0bc18');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>2</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <label class="switch">
                                                        <input type="checkbox" name="carts[4]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[5]['cart-id']" value="72"/>
                                                72
                                            </td>
                                            <td class="text-center">
                                                2016-06-29 11:50:01
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>354.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('1a6050778f3820a09a5a7ab741893316');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>6</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <label class="switch">
                                                        <input type="checkbox" name="carts[5]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[6]['cart-id']" value="71"/>
                                                71
                                            </td>
                                            <td class="text-center">
                                                2016-06-14 16:05:17
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>69.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('ca29316f24262ea60d4484f16bce9cdc');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <label class="switch">
                                                        <input type="checkbox" name="carts[6]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[7]['cart-id']" value="65"/>
                                                65
                                            </td>
                                            <td class="text-center">
                                                2016-06-10 14:13:40
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>5.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('100a98641f21c61340345ad799078489');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span class="hold">
                                                        <i class="fa fa-link"></i>
                                                    </span>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[8]['cart-id']" value="64"/>
                                                64
                                            </td>
                                            <td class="text-center">
                                                2016-06-10 14:04:33
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>340.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('5c045adf33c178bf20cd4e17aaa1eb0c');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span class="hold">
                                                        <i class="fa fa-link"></i>
                                                    </span>
                                                                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[9]['cart-id']" value="63"/>
                                                63
                                            </td>
                                            <td class="text-center">
                                                2016-06-10 13:58:00
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
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
                                                <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                    <i class="fa fa-ban"></i>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <strong>0</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                Euro&nbsp;(&euro;)
                                            </td>
                                            <td class="text-center">
                                                DPH SK 20%
                                            </td>
                                             <td class="text-center">
                                                <strong>340.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('0cf9761938832b2796aa8e1d67fff692');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
                                                    </button>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span class="hold">
                                                        <i class="fa fa-link"></i>
                                                    </span>
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
                                OPENED                          
                            </li>
                            <li>
                                <span class="circle-indicator orange">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                CLOSED                                    
                            </li>
                            <li>
                                <span class="circle-indicator green">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                ARCHIVED                    
                            </li>
                            <li>
                                <span class="circle-indicator red">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                RENEW                    
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
        
<!-- MODAL WINDOW NEW NAVIGATION -->
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
<!-- //-- MODAL WINDOW NEW NAVIGATION -->

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
<script>

    function showCartItems(cartId) {
        $.ajax({
            url: 'cpanel/store/carts/items',
            type: 'POST',
            data: { cartId: cartId },                
            success: function(response) {
                $('#modal_cart_items').find('.modal-body').empty().html(response);
                $('#modal_cart_items').modal('show');
            },
            error: function(e) {
                alert('SYSTEM ERROR: STOP: 3de3r4fd3');
                console.log(e);
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
