<?php /*%%SmartyHeaderCode:152778394158400d323169a3-07780049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '148886d21aaf6e6b73718b48d3834cdd94d62a73' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/carts/cart_list.tpl',
      1 => 1469707237,
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
    '0d640b8c7b75f738cb386af5e93d99dd781ff5e5' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/carts/cart_list.tpl',
      1 => 1469707237,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '152778394158400d323169a3-07780049',
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
  'unifunc' => 'content_58400d32e1bf15_69268706',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58400d32e1bf15_69268706')) {function content_58400d32e1bf15_69268706($_smarty_tpl) {?><!DOCTYPE html>
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
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Alexander Kernasevic">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Alexander Kernasevic">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">Alexander&nbsp;Kernasevic</div>
      </div>
    </div>                                                                        
  </li>
  <li>
    <a href="cpanel" title="Dashboard">
      <i class="fa fa-dashboard"></i>
      <span class="xn-text">
        Dashboard      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/site-structure" title="Site">
      <i class="fa fa-sitemap"></i>
      <span class="xn-text">
        Site      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/page-list" title="Pages">
      <i class="fa fa-file-text-o"></i>
      <span class="xn-text">
        Pages      </span>
    </a>                        
  </li>
  <li class="xn-openable" style="display:none;visibility: hidden !important;">
    <a href="cpanel/cpanel/catalog" onclick="return false;" title="Catalog">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Catalog      </span>
    </a>
    <ul>
      <li>
        <a href="cpanel/catalog" title="Catalog - Overview">
          <i class="fa fa-eye"></i>
          Overview        </a>
      </li>
      <li>
        <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
          <i class="fa fa-plus"></i>
          New article        </a>
      </li>
      <li>
        <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
          <i class="fa fa-info"></i>
          Manage categories        </a>
      </li>
      <li>
        <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
          <i class="fa fa-tag"></i>
          Manage attributes        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="cpanel/my-drive" title="MMy Drive">
      <i class="fa fa-hdd-o"></i>
      <span class="xn-text">
        My Drive      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/slider-list" title="Slider">
      <i class="fa fa-camera"></i>
      <span class="xn-text">
        Slider      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/gallery-list" title="Gallery">
      <i class="fa fa-picture-o"></i>
      <span class="xn-text">
        Gallery      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/language-list" title="Languages">
      <i class="glyphicon glyphicon-globe"></i>
      <span class="xn-text">
        Languages      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/dictionary-list" title="Dictionary">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Dictionary      </span>
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
    <a href="cpanel/store/users" title="User">
      <i class="fa fa-users"></i>
      Users    </a>
  </li>
  <li data-menu-item="carts">
    <a href="cpanel/store/carts" title="Carts">
      <i class="fa fa-shopping-cart"></i>
      Carts    </a>
  </li>
  <li class="xn-openable" data-menu-item="orders">
    <a href="cpanel/store/orders" title="Orders">
      <i class="fa fa-clipboard"></i>
      Orders    </a>
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
    <a href="#" onclick="return false;" title="Catalog">
      <span class="fa fa-book"></span>
      Catalog    </a>
    <ul>
      <li data-menu-item="articles">
        <a href="cpanel/store/catalog/articles/short" title="Articles">
          <span class="fa fa-circle"></span>
          Articles        </a>
      </li>
      <li data-menu-item="store-category-list">
        <a href="cpanel/store-category-list" title="Categories">
          <span class="fa fa-circle"></span>
          Categories        </a>
      </li>
      <li data-menu-item="store-attribute-list">
        <a href="cpanel/store-attribute-list" title="Attributes">
          <span class="fa fa-circle"></span>
          Attributes        </a>
      </li>
      <li data-menu-item="ordering">
        <a href="cpanel/store/catalog/ordering" title="Ordering">
          <span class="fa fa-circle"></span>
          Ordering        </a>
      </li>
    </ul>
  </li>
  <li data-menu-item="thumbnail">
    <a href="cpanel/thumbnail" title="Thumbnail">
      <i class="fa fa-picture-o" aria-hidden="true"></i>
      Thumbnail    </a>
  </li>
  <li data-menu-item="warehouse">
    <a href="cpanel/store-warehouse-list" title="Warehouses">
      <i class="fa fa-database"></i>
      Warehouses    </a>
  </li>
  <li data-menu-item="statuses">
    <a href="cpanel/store/statuses" title="Status list">
      <i class="fa fa-heartbeat"></i>
      Status list    </a>
  </li>
  <li class="xn-openable" data-menu-item="delivery-payment">
    <a href="#" onclick="return false;" title="Delivery / Payment">
      <i class="fa fa-pencil-square"></i>
      Delivery / Payment    </a>
    <ul>
      <li data-menu-item="delivery">
        <a href="cpanel/store/delivery-payment/delivery" title="Delivery">
          <i class="fa fa-truck"></i>
          Delivery        </a>
      </li>
      <li data-menu-item="payment">
        <a href="cpanel/store/delivery-payment/payment" title="Payment">
          <i class="fa fa-usd"></i>
          Payment        </a>
      </li>
      <li data-menu-item="ties">
        <a href="cpanel/store/delivery-payment/ties" title="Ties">
          <i class="fa fa-exchange"></i>
          Ties        </a>
      </li>
   </ul>
  </li>
  <li class="xn-openable" data-menu-item="localization">
    <a href="#" onclick="return false;" title="Localization">
      <span class="fa fa-globe"></span>
      Localization    </a>
    <ul>
      <li data-menu-item="currencies">
        <a href="cpanel/store/localization/currencies" title="Currencies">
          <span class="fa fa-circle"></span>
          Currencies        </a>
      </li>
      <li data-menu-item="taxes">
        <a href="cpanel/store/localization/taxes" title="Taxes">
          <span class="fa fa-circle"></span>
          Taxes        </a>
     </li>
   </ul>
  </li>
  <li data-menu-item="offers">
    <a href="cpanel/store/offers" title="Offers">
      <i class="fa fa-sticky-note-o"></i>
      Offers    </a>
  </li>
  <li data-menu-item="discount-circuits">
    <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
      <i class="fa fa-circle-o-notch"></i>
      Discount circuits    </a>
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
    <a href="cpanel/general-settings" title="General Settings">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        General Settings      </span>
    </a>                        
  </li>
      <li class="xn-openable">
      <a href="#" onclick="return false;" title="Adminstrator">
        <i class="fa fa-exclamation-triangle"></i>
        <span class="xn-text">Administrátor</span>
      </a>
      <ul>
        <li>
          <a href="cpanel/form-list" title="Forms">
            <i class="fa fa-pencil"></i>
            <span class="xn-text">
                          </span>
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
                        <a href="cpanel" style="height: 50px;padding: 11px 0;" title="English">
                                                            <span class="flag-icon flag-icon-gb" style="width:18px;height:18px;"></span>
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
                        <a href="cpanel" title="Home">
                            Home                        </a>
                    </li>
                    
<li>
    <a href="#" onclick="return false;" title="Store">
        Store    </a>
</li>
<li class="active">
    <a href="cpanel/store/carts" title="Carts">
        Carts    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-shopping-cart"></i>&nbsp;
            Carts&nbsp;
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
                            <span class="badge">Zobrazených 1-10 z 146 záznamov</span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="cpanel/store/carts/0/0" style="background-color:#000;color:#fff;" title="ALL">
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
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/carts/0/0//0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/carts/0/0//1/10">1</a></li><li class=""><a href="cpanel/store/carts/0/0//2/10">2</a></li><li class=""><a href="cpanel/store/carts/0/0//3/10">3</a></li><li class=""><a href="cpanel/store/carts/0/0//4/10">4</a></li><li class=""><a href="cpanel/store/carts/0/0//5/10">5</a></li><li class=""><a href="cpanel/store/carts/0/0//6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store/carts/0/0//15/10">15</a></li><li class=""><a href="cpanel/store/carts/0/0//2/10"><i class="fa fa-angle-right"></i></a></li></ul>
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
                                            REMOVE                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="carts[0]['cart-id']" value="193"/>
                                                193
                                            </td>
                                            <td class="text-center">
                                                2016-11-30 14:22:09
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
                                                <strong>85.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('f9dcc1362723b8be3a567581902641fd');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>2</strong>
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
                                                <input type="hidden" name="carts[1]['cart-id']" value="192"/>
                                                192
                                            </td>
                                            <td class="text-center">
                                                2016-11-30 12:43:58
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
                                                <strong>58.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('c6b44bb945982be83bfe2afb7b2a9a98');" class="btn btn-info btn-sm btn-block">
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
                                                <input type="hidden" name="carts[2]['cart-id']" value="191"/>
                                                191
                                            </td>
                                            <td class="text-center">
                                                2016-11-29 23:42:39
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
                                                <strong>120.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('09439a19cf5605ba089fe4d1a8df4c6e');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>2</strong>
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
                                                <input type="hidden" name="carts[3]['cart-id']" value="190"/>
                                                190
                                            </td>
                                            <td class="text-center">
                                                2016-11-28 20:42:27
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
                                                <strong>60.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('26224bdc12932c235942a8ed94334fd2');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>2</strong>
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
                                                <input type="hidden" name="carts[4]['cart-id']" value="189"/>
                                                189
                                            </td>
                                            <td class="text-center">
                                                2016-11-28 11:55:09
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
                                                <strong>35.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('0516372cf96741f5c67bd5acffe79a2a');" class="btn btn-info btn-sm btn-block">
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
                                                <input type="hidden" name="carts[5]['cart-id']" value="188"/>
                                                188
                                            </td>
                                            <td class="text-center">
                                                2016-11-27 13:32:08
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
                                                <strong>35.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('55e2f1d81076e99400ef2c0c6ed00446');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>1</strong>
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
                                                <input type="hidden" name="carts[6]['cart-id']" value="187"/>
                                                187
                                            </td>
                                            <td class="text-center">
                                                2016-11-24 15:31:48
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
                                                <strong>35.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('4275164554238cffc8b73b2fba15cfa8');" class="btn btn-info btn-sm btn-block">
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
                                                <input type="hidden" name="carts[7]['cart-id']" value="186"/>
                                                186
                                            </td>
                                            <td class="text-center">
                                                2016-11-23 14:43:57
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
                                                <strong>38.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('78e74b856b31a8568c97d4329b4f6ab9');" class="btn btn-info btn-sm btn-block">
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
                                                <input type="hidden" name="carts[8]['cart-id']" value="185"/>
                                                185
                                            </td>
                                            <td class="text-center">
                                                2016-11-23 05:54:42
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
                                                <strong>49.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('252a1f011c2dbff15c62b1eccd3d210d');" class="btn btn-info btn-sm btn-block">
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
                                                <input type="hidden" name="carts[9]['cart-id']" value="184"/>
                                                184
                                            </td>
                                            <td class="text-center">
                                                2016-11-22 14:31:04
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
                                                <strong>85.00&euro;</strong>
                                            </td>
                                            <td class="text-center">
                                                                                                    <button type="button" onclick="showCartItems('73c61f1c0da90d7a31cf0612d8aed9c1');" class="btn btn-info btn-sm btn-block">
                                                        <i class="fa fa-eye"></i>
                                                        <strong>2</strong>
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
                            <i class="fa fa-save"></i>&nbsp;SAVE CHANGES                        </button>
                        <ul class="list-inline additional-text">
                            <li>
                                <span class="circle-indicator black">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                ALL                                  
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
                    CLOSE                </button>
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL WINDOW NEW NAVIGATION -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span>Sign out?</div>
                    <div class="mb-footer">
                        <div class="pull-left">
                            <a href="cpanel/sign/out" class="btn btn-success btn-lg">
                                Yes                            </a>
                            <button class="btn btn-default btn-lg mb-control-close">
                                No                            </button>
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
