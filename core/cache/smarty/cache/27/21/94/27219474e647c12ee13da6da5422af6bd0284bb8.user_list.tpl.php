<?php /*%%SmartyHeaderCode:32584249957989f9f94aa62-55169724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ecd3f77d59d87f7fb575eba31dcfd17d467c4f9' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/users/user_list.tpl',
      1 => 1469528918,
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
    '27219474e647c12ee13da6da5422af6bd0284bb8' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/users/user_list.tpl',
      1 => 1469528918,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '32584249957989f9f94aa62-55169724',
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
  'unifunc' => 'content_57989f9faa4bc8_89875604',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989f9faa4bc8_89875604')) {function content_57989f9faa4bc8_89875604($_smarty_tpl) {?><!DOCTYPE html>
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
#delete {
    cursor: pointer;
}
table > thead > tr > th.enabled {
    background: green;
}
table > thead > tr > th.disabled {
    background: red;
}
table > thead > tr > th.enabled,
table > thead > tr > th.disabled {
    color: #fff;
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
    <a href="cpanel/store/users" title="Uživatelia">
        Uživatelia    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-users"></i>&nbsp;
            UŽIVATELIA&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 25px;">
    <div class="col-lg-12">
        <div class="btn-group" role="group">
            <a href="#" onclick="return false;" class="btn btn-primary"role="menuitem">
                <span>Life Timeline</span>
            </a>
            <a href="#" onclick="return false;" class="btn btn-info"role="menuitem">
                <span>Address Book</span>
            </a>
            <a href="#" onclick="return false;" class="btn btn-warning"role="menuitem">
                <span>Groups</span>
            </a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ignoreList" role="menuitem">
                <span>Ignore List</span>
            </button>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-info widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="99.54%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count">99.54</span>%</div>
                <div class="widget-title">Guest</div>                             
            </div>                                                        
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-warning widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0.46%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count">0.46</span>%</div>
                <div class="widget-title">Visitor</div>                          
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
                <div class="widget-title">Customer</div>                               
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
                <div class="widget-title">Banned</div>                              
            </div>                                                      
        </div> 
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
                    <form action="cpanel/store/users/update-all" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            USER LIST&nbsp;
                            <span class="badge">Zobrazených 1-10 z 3262 záznamov</span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="cpanel/store/users/0/0" style="background-color:#000;color:#fff;" title="VŠETKO">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/users/0/1" style="background-color:#3fbae4;color:#fff;" title="GUEST">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/users/0/2" style="background-color:#fea223;color:#fff;" title="VISITOR">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/users/0/3" style="background-color:#95b75d;color:#fff;" title="CUSTOMER">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>                          
                            <li>
                                <a href="cpanel/store/users/0/4" style="background-color:#b64645;color:#fff;" title="BANNED">
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
                                    <select class="form-control select" onchange="location = 'cpanel/store/users/9/9/1/'+this.options[this.selectedIndex].value;" required="">
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
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/users/0/0/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/users/0/0/1/10">1</a></li><li class=""><a href="cpanel/store/users/0/0/2/10">2</a></li><li class=""><a href="cpanel/store/users/0/0/3/10">3</a></li><li class=""><a href="cpanel/store/users/0/0/4/10">4</a></li><li class=""><a href="cpanel/store/users/0/0/5/10">5</a></li><li class=""><a href="cpanel/store/users/0/0/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store/users/0/0/327/10">327</a></li><li class=""><a href="cpanel/store/users/0/0/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="userList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">
                                            GROUP                                        </th>
                                        <th class="text-center">
                                            DEVICE                                        </th>
                                        <th class="text-center">
                                            OS SYSTEM                                        </th>
                                        <th class="text-center">
                                            BROWSER                                        </th>
                                        <th class="text-center">
                                            LANGUAGE                                        </th>
                                        <th class="text-center">
                                            CONTINENT                                        </th>
                                        <th class="text-center">
                                            COUNTRY CODE                                        </th>
                                        <th class="text-center">
                                            COUNTRY NAME                                        </th>
                                        <th class="text-center">
                                            CITY                                        </th>
                                        <th class="text-center">
                                            VIEW ON MAP                                        </th>
                                        <th class="text-center">
                                            TIMEZONE                                        </th>
                                        <th class="text-center">
                                            TIMEZONE DETAIL                                        </th>
                                        <th class="text-center">
                                            SCREEN RESOLUTION                                        </th>
                                        <th class="text-center">
                                            ADDRESS                                        </th>
                                        <th class="text-center">
                                            BANNED                                        </th>
                                        <th id="delete" class="text-center enabled">
                                            ODSTRÁNIŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[0]['user-id']" value="1"/>
                                                1
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.10.5
                                            </td>
                                            <td class="text-center">
                                                Chrome 46.0.2490
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Bratislava
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.666698455811,19.5);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                                                                    Europe/Bratislava
                                                                                                
                                            </td>
                                            <td class="text-center">
                                                                                                    Central European Summer Time
                                                                                            </td>
                                            <td class="text-center">
                                                <strong>1920x1105</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(1)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[0]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[0]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[1]['user-id']" value="2"/>
                                                2
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.10.5
                                            </td>
                                            <td class="text-center">
                                                Chrome 46.0.2490
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Bratislava
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.666698455811,19.5);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                                                                    Europe/Bratislava
                                                                                                
                                            </td>
                                            <td class="text-center">
                                                                                                    Central European Summer Time
                                                                                            </td>
                                            <td class="text-center">
                                                <strong>1920x1105</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(2)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[1]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[1]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[2]['user-id']" value="3"/>
                                                3
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.10.5
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Trnava
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.377399,17.587200);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
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
                                                <strong>1920x1105</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(3)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[2]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[2]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[3]['user-id']" value="4"/>
                                                4
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.7.5
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Pernek
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.366901,17.144199);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
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
                                                <strong>1677x885</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(4)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[3]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[3]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[4]['user-id']" value="5"/>
                                                5
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.7.5
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Pernek
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.366901,17.144199);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
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
                                                <strong>1677x885</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(5)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[4]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[4]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[5]['user-id']" value="6"/>
                                                6
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.11.3
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Trnava
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.377399,17.587200);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
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
                                                <strong>2560x1345</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(6)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[5]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[5]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[6]['user-id']" value="7"/>
                                                7
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.11.3
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Trnava
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.377399,17.587200);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
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
                                                <strong>2560x1345</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(7)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[6]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[6]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[7]['user-id']" value="8"/>
                                                8
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.11.3
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Bratislava
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.666698455811,19.5);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                                                                    Europe/Bratislava
                                                                                                
                                            </td>
                                            <td class="text-center">
                                                                                                    Central European Summer Time
                                                                                            </td>
                                            <td class="text-center">
                                                <strong>2560x1345</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(8)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[7]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[7]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[8]['user-id']" value="9"/>
                                                9
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.7.5
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Pernek
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.366901,17.144199);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
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
                                                <strong>1672x885</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(9)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[8]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[8]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[9]['user-id']" value="10"/>
                                                10
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                Mac OS X 10.7.5
                                            </td>
                                            <td class="text-center">
                                                Chrome 48.0.2564
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                EU
                                            </td>
                                            <td class="text-center">
                                                SK
                                            </td>
                                            <td class="text-center">
                                                Slovakia
                                            </td>
                                            <td class="text-center">
                                                                                                    Pernek
                                                                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(48.366901,17.144199);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
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
                                                <strong>1672x885</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(10)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[9]['banned']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[9]['remove']" value="1" class="sw-delete">
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
                                GUEST                          
                            </li>
                            <li>
                                <span class="circle-indicator orange">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                VISITOR                                    
                            </li>
                            <li>
                                <span class="circle-indicator green">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                CUSTOMER                    
                            </li>
                            <li>
                                <span class="circle-indicator red">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                BANNED                    
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
        
<!-- MODAL WINDOW GOOGLE MAP -->
<div class="modal" id="modal_google_map" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;padding:0;"><!-- --></div>
            <div class="panel-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    ZAVRIEŤ                </button>
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL WINDOW GOOGLE MAP -->
<!-- MODAL WINDOW ADDRESS -->
<div class="modal" id="modal_address" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:#FFFFFF;padding:0px;"><!-- --></div>
            <div class="panel-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    ZAVRIEŤ                </button>
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL WINDOW ADDRESS -->
<!-- MODAL WINDOW IGNORE LIST -->                          
<div class="modal" id="ignoreList" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;"> 
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            IGNORE LIST&nbsp;<span class="badge"><br />
<b>Notice</b>:  Undefined index: ignoreList in <b>/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>1267</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>1267</b><br />
0
                        </h3>                               
                    </div>
                    <div class="panel-body panel-body-form panel-body-table">
                        <div class="row">
                            <div class="col-lg-12" style="margin:15px 0;">
                                <form id="il-add">
                                    <div class="form-group">
                                        <label>
                                            IP ADDRESS
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="ip-address" value="" placeholder="0.0.0.0" class="form-control">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-warning" type="button">ADD</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end col -->
                        </div><!-- end row -->
                                                    <div class="alert alert-info" style="margin:15px 0;" role="alert">
                                <strong>INFO!!</strong>
                                Ignore list is empty.
                            </div>
                                             </div>
                    <div class="panel-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            ZAVRIEŤ                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL IGNORE LIST -->

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
<script type="text/javascript">
    
    function showMap(latitude,longitude) {
        $('#modal_google_map').find('.modal-body').empty().html(getMap(latitude,longitude));
        $('#modal_google_map').modal('show');
    }

    function showAddress( userId ) {
        $.ajax({
            url: 'cpanel/store/users/address',
            type: 'POST',
            data: { userId: userId },                
            success: function(html) {
                $('#modal_address').find('.modal-body').empty().html(html);
                $('#modal_address').modal('show');
            },
            error: function(e) {
                console.log(e);
                alert('ERROR LOAD DATA');
            },
            dataType: 'HTML'
        });
    }

    function getMap(latitude,longitude) {
        var src    = "http://maps.googleapis.com/maps/api/staticmap?",
          params = {
            center: latitude+','+longitude,
            zoom: 10,
            size: '600x630',
            maptype: 'roadmap',
            sensor: false
          },
          query = [];
        $.each(params, function(k, v) {
        query.push(k + '=' + encodeURIComponent(v));
        });

        src += query.join('&');
        return '<img src="' + src + '" width="600" height="630" />';
    }
</script>
<script>
$(function() { 
    $('#ignoreList').on('submit', function() {
        var form = $(this);
        
        return false;
    });

    $('#search').keyup(function() {
        searchTable($(this).val());
    });

    $('#delete').on('click', function() {
        if($(this).hasClass('enabled')) {
            $(this).removeClass('enabled').addClass('disabled');
        } else {
            $(this).removeClass('disabled').addClass('enabled');
        }
        $('#userList tbody').find('tr').each(function() {
            if($(this).is(':visible')) {
                var switcher = $(this).find('.sw-delete');

                if(switcher.is(':checked')) {
                    switcher.prop("checked", false);
                } else {
                    switcher.prop("checked", true);
                }
            }
        });
    });

    function searchTable(inputVal)
    {
        var table = $('#userList');
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
