<?php /*%%SmartyHeaderCode:855903744585a0797061361-27045080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5db0e0050b5b09f5e4dd41b64e236ee88a0daa79' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/order_list.tpl',
      1 => 1469707248,
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
    'c6ff227db4537e751685a733e66ce768d5da20f3' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/order_list.tpl',
      1 => 1469707248,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '855903744585a0797061361-27045080',
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
  'unifunc' => 'content_585a07977072b9_27290343',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585a07977072b9_27290343')) {function content_585a07977072b9_27290343($_smarty_tpl) {?><!DOCTYPE html>
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
        Obchod    </a>
</li>
<li class="active">
    <a href="cpanel/store/orders" title="Objednávky">
        Objednávky    </a>
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
                    
<div class="row" style="margin-bottom: 25px;">
    <div class="col-lg-12">
        <div class="btn-group" role="group">
            <a href="#" onclick="return false;" class="btn btn-success"role="menuitem">
                <span>Archiv</span>
            </a>
            <a href="#" onclick="return false;" class="btn btn-default"role="menuitem">
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
                <div class="widget-big-int">0&euro;</div>
                <div class="widget-title">Average Order Value</div>                          
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
                <div class="widget-title">ARCHIVED</div>                              
            </div>                                                      
        </div> 
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
                    <form action="cpanel/store/orders/update-all" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            ORDER LIST&nbsp;
                            <span class="badge">Zobrazených 1-10 z 151 záznamov</span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="cpanel/store/orders/list/0/0" style="background-color:#000;color:#fff;" title="VŠETKO">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/orders/list/0/1" style="background-color:#3fbae4;color:#fff;" title="OPENED">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/orders/list/0/2" style="background-color:#fea223;color:#fff;" title="CLOSED">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/orders/list/0/3" style="background-color:#95b75d;color:#fff;" title="ARCHIVED">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>                          
                            <li>
                                <a href="cpanel/store/orders/list/0/4" style="background-color:#b64645;color:#fff;" title="WAIT FOR PAY">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/orders/management" title="Management">
                                    <i class="fa fa-cog"></i>
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
                                    <select class="form-control select" onchange="location = 'cpanel/store/orders/list/9/9/1/'+this.options[this.selectedIndex].value;" required="">
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
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/orders/list/9/9/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/orders/list/9/9/1/10">1</a></li><li class=""><a href="cpanel/store/orders/list/9/9/2/10">2</a></li><li class=""><a href="cpanel/store/orders/list/9/9/3/10">3</a></li><li class=""><a href="cpanel/store/orders/list/9/9/4/10">4</a></li><li class=""><a href="cpanel/store/orders/list/9/9/5/10">5</a></li><li class=""><a href="cpanel/store/orders/list/9/9/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store/orders/list/9/9/16/10">16</a></li><li class=""><a href="cpanel/store/orders/list/9/9/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="statusList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="110">
                                            ORDER ID                                        </th>
                                        <th class="text-center" width="110">
                                            CART ID                                        </th>
                                        <th class="text-center" width="150">
                                            CREATED                                        </th>
                                        <th class="text-center" width="50">
                                            GROUP                                        </th>
                                        <th class="text-center" width="50">
                                            <span style="font-size:1.4em;font-weight:700;">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </th>
                                        <th class="text-center" width="50">
                                            NEW CLIENT                                        </th>
                                        <th class="text-center" width="190">
                                            CUSTOMER                                        </th>
                                        <th class="text-center">
                                            DELIVERY                                        </th>
                                        <th class="text-center" width="70">
                                            COST                                        </th>
                                        <th class="text-center">
                                            PAYMENT                                        </th>
                                        <th class="text-center" width="70">
                                            COST                                        </th>
                                        <th class="text-right" width="110">
                                            AMOUNT                                        </th>
                                        <th class="text-center" width="150">
                                            <span style="font-size:1.4em;font-weight:700;">
                                                <i class="fa fa-shopping-cart"></i>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[0]['order-id']" value="151"/>
                                                151
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                230
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-19 15:07:21</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                        <strong>Liliana&nbsp;&Scaron;i&scaron;kova</strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Dobierka kuri&eacute;rom
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>6.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba v hotovosti
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>173.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('673c6a988b471e3af4ebf1ea2d73a9bc');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>3</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[1]['order-id']" value="150"/>
                                                150
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                229
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-19 14:11:46</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                        <strong>Andrea&nbsp;Tyborov&aacute;</strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Dobierka
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>4.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba v hotovosti
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>42.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('7a46f225c6be38551a304ee588324244');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>1</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[2]['order-id']" value="149"/>
                                                149
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                228
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-19 07:30:33</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                                                                                                                                                                                            <strong>Jozef&nbsp;Bač&iacute;k</strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Kuri&eacute;r
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>3.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba kartou online 
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>41.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('41483be309309742685f441d95a48077');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>1</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[3]['order-id']" value="148"/>
                                                148
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                227
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-18 20:25:29</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                        <strong>Roman&nbsp;Belencik</strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Dobierka kuri&eacute;rom
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>6.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba v hotovosti
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>60.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('f10ee9d959eea658f16d49b0db279cef');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>1</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[4]['order-id']" value="147"/>
                                                147
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                225
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-18 07:57:38</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
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
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('ed3501acc48c9da5e7c3f4cc1d27290a');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>2</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[5]['order-id']" value="146"/>
                                                146
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                223
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-17 15:59:45</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                        <strong>Pavol&nbsp;Brna</strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Dobierka
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>4.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba v hotovosti
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>28.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('d44d0cb6867e1e1e84575ae2c0dc3912');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>1</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[6]['order-id']" value="145"/>
                                                145
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                222
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-14 18:35:15</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                        <strong>Adriana&nbsp;Dobiasova</strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Kuri&eacute;r
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>3.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba kartou online 
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>41.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('368859e24f339cfcfac7e310d8aeb4e4');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>1</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[7]['order-id']" value="144"/>
                                                144
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                221
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-12 09:36:09</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                        <strong>Nat&aacute;lia &nbsp;Lepie&scaron;ov&aacute; </strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Dobierka
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>4.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba v hotovosti
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>54.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('67490fb94f036a8b2530d1be8cef4193');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>2</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[8]['order-id']" value="143"/>
                                                143
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                212
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-11 21:26:06</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator blue">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Dobierka
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>4.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba v hotovosti
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>0.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('958e76c77b192913f50e65f0ce40a59f');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>2</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="orders[9]['order-id']" value="142"/>
                                                142
                                            </td>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                217
                                            </td>
                                            <td class="text-center">
                                                <strong>2016-12-10 12:40:30</strong>
                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator orange">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:green;">
                                                        <i class="fa fa-check-circle"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                                                                                                                                        <strong>marie&nbsp;jachimecova</strong>
                                                                                                                                                                                                                                                                </td>
                                            <td class="text-left">
                                                                                                    Dobierka kuri&eacute;rom
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>6.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                    Platba v hotovosti
                                                                                            </td>
                                            <td class="text-right">
                                                                                                    <strong>0.00&nbsp;&euro;</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                <strong>100.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showCartItems('86d926c002e2cfb0404ddf487e5f436c');" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-eye"></i>
                                                    <strong>3</strong>
                                                </button>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                         </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success" style="display:none;">
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
                                WAIT FOR PAY                    
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
