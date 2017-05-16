<?php /*%%SmartyHeaderCode:1831019730588b0f48206e14-19647820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1eeb245d0fe6e4b8068e4a794e33c0237fae9c2' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/order_edit.tpl',
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
    'fa25132ca16f7227695d1cd83d1c9838bff3e262' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/order_edit.tpl',
      1 => 1469707248,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1831019730588b0f48206e14-19647820',
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
  'unifunc' => 'content_588b0f4898fc22_11441609',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b0f4898fc22_11441609')) {function content_588b0f4898fc22_11441609($_smarty_tpl) {?><!DOCTYPE html>
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
.id-order {
    background: #3fbae4;
    background: -moz-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3fbae4), color-stop(100%, #29b2e1));
    background: -webkit-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: -o-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: -ms-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: linear-gradient(to bottom, #3fbae4 0%, #29b2e1 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3fbae4, endColorstr=#29b2e1, GradientType=0);
    display: inline-block;
    padding: 3px 15px;
    color: #fff;
    line-height: 100%;
}
.form-control[disabled], 
.form-control[readonly] {
    color: #330000;
}
#map-delivery-canvas,
#map-invoice-canvas {
    background: url(extensions/cpanel/img/map.png);
    background-position: inherit;
    background-repeat: no-repeat;
    height: 298px;
}
#ig-info > .input-group-addon {
    background-color: #3fbae4;
    border-color: #3fbae4;
}
#ig-default > .input-group-addon {
    background-color: brown;
    border-color: brown;
}
.widget .widget-title {
    font-size: 15px;
}
.widget .widget-big-int {
    font-size: 29px;
}
.panel-heading > ul.list-inline {
    min-width: 860px;
    margin: 2px 0 0 20px;
}
.panel-heading > ul.list-inline > li.widget {
    width: auto;
    min-width: 240px;
    min-height: 1px;
    margin-left: 15px;
    margin-bottom: 0px;
    padding: 3px 5px;
}
.panel-heading > ul.list-inline > li.widget:first-child {
    margin-left: 0px
}
#articleList > tbody > tr > td {
    font-size: 11.5px;
    line-height: 15px;
}
.attr-v-circle {
  display: block;
  position: absolute;
  top: 7px;
  left: auto;
  right: auto;
  width: 15px;
  height: 15px;
  margin: 0 auto;
  padding: 0;
  line-height: 100%;
  border-radius: 100%;
}
.attr-name {
  width: 33% !important;
  padding: 0 5px;
  font-size: .8em !important;
  line-height: 1.3em;
  text-align: left !important;
  vertical-align: middle;
  word-break: break-word;
  white-space: normal;
}

@media only screen and (min-width: 1666px) {
    #order .x2 {
        width: 16.66666667%;
    }
    #order .x3 {
        width: 25%;
    }
    #order .x4 {
        width: 33.33333333%;
    }
    #order .x5 {
        width: 41.66666667%;
    }
    #order .x6 {
        width: 50%;
    }
    #order .x12 {
        width: 100%;
    }
}

@media only screen and (max-width: 1666px) {
    #order .xmt-15 {
        margin-top: 15px;
    }
    #order .xpl-0 {
        padding-left: 0px;
    }
    #order .xpr-0 {
        padding-right: 0px;
    }
    #order .panel-heading > ul.list-inline {
        margin-left: 8px;
    }
    #flip-scroll table > thead > tr > th:nth-child(1),
    #flip-scroll table > thead > tr > th:nth-child(3),
    #flip-scroll table > thead > tr > th:nth-child(4),
    #flip-scroll table > thead > tr > th:nth-child(6),
    #flip-scroll table > thead > tr > th:nth-child(7),
    #flip-scroll table > thead > tr > th:nth-child(9) {
        height: 45px;
        line-height: 30px;
    }
    #flip-scroll table > thead > tr > th:nth-child(5),
    #flip-scroll table > thead > tr > th:nth-child(8),
    #flip-scroll table > thead > tr > th:nth-child(10),
    #flip-scroll table > thead > tr > th:nth-child(11),
    #flip-scroll table > thead > tr > th:nth-child(12),
    #flip-scroll table > thead > tr > th:nth-child(13),
    #flip-scroll table > thead > tr > th:nth-child(14) {
        height: 45px;
        line-height: 17px;
    }
    #flip-scroll table > thead > tr > th:nth-child(2) {
        height: 52px;
        line-height: 37px;
    }
    #flip-scroll table > thead > tr > th:nth-child(15) {
        height: 58px;
        line-height: 43px;
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
<li>
    <a href="cpanel/store/orders" title="Objednávky">
        Objednávky    </a>
</li>
<li class="active">
    <a href="cpanel/store/orders/management" title="Management">
        Management
    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="Edit">
        Editovať    </a>
</li>
<li class="active">
    <a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c" title="VUNWJ9IIUR">
        VUNWJ9IIUR
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
                    
<div id="order" class="row" style="margin-bottom:350px;">
    <div class="col-lg-12">
        <form action="cpanel/store/orders/update" method="post" role="form">
            <input type="hidden" name="order-id" value="156" />
            <input type="hidden" name="secure-key" value="b3c0e982b499648eba12a73b90e5457c" />
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title" style="overflow: hidden;">
                        <span style="display:block;font-size:1.4em;float:left;">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;
                            <span style="font-weight:100;color:#000;">
                                ORDER ID:&nbsp;
                                <strong class="id-order">156</strong>
                                &nbsp;|&nbsp;
                                <i class="fa fa-barcode"></i>
                                &nbsp;
                                <strong>VUNWJ9IIUR</strong>
                            </span>
                        </span>
                    </h3>                      
                </div><!-- end panel-header -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-sm-6 x3">
                            <div class="widget widget-primary widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-calendar-o"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">ORDER CREATED</div>
                                    <div class="widget-big-int num-count">2017-01-18 21:43:31</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                        <div class="col-sm-6 x3">
                            <div class="widget widget-info widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">PRODUCTS</div>
                                    <div class="widget-big-int num-count">1KS</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                        <div class="col-sm-6 x3">
                            <div class="widget widget-warning widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">DISCOUNT</div>
                                    <div class="widget-big-int num-count">0.00&euro;</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                        <div class="col-sm-6 x3">
                            <div class="widget widget-success widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-usd"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">AMOUNT</div>
                                    <div class="widget-big-int num-count">52.00&euro;</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-clipboard"></i>&nbsp;
                                        OBJEDNÁVKA
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="col-sm-4 x2">
                                        <div class="form-group">
                                            <label>Stav</label>
                                            <select name="status-id" class="form-control select" data-style="btn-success" data-live-search="true">
                                                                                                    <option value="1" >Prijat&eacute;</option>
                                                                                                    <option value="2" >Čakaj&uacute;ce</option>
                                                                                                    <option value="3" selected>Vybaven&eacute;</option>
                                                                                                    <option value="4" >Testovacie</option>
                                                                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vytlačiť objednávku</label>
                                            <a href="cpanel/store/orders/print-order/b3c0e982b499648eba12a73b90e5457c" target="__blank" class="btn btn-block btn-info" title="Vytlačiť objednávku">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label>Faktúra</label>
                                                                                            <a href="/files/66df9ab7588a0566c745dba91102fd8d.pdf" class="btn btn-primary btn-sm btn-block text-uppercase" target="_blank" title="INVOICE PDF">
                                                    <i class="fa fa-file-pdf-o"></i>
                                                </a>
                                                                                    </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-4 x2">
                                        <div class="form-group">
                                            <label>Klientská poznámka</label>
                                            <textarea name="notice" rows="8" class="form-control" disabled></textarea>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-4 x3">
                                        <div class="form-group">
                                            <label>Súkromná správa</label>
                                            <textarea name="private-message" rows="8" class="form-control"></textarea>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-12 x5 xmt-15">
                                        <div class="col-sm-6 xpl-0">
                                            <div class="form-group">
                                                <label>Informovať zákazníka</label>
                                                <textarea rows="8" class="form-control" disabled></textarea>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-sm-6 xpr-0">
                                            <div class="form-group">
                                                <label>
                                                    EMAIL
                                                </label>
                                                                                                    <select id="send-email-id" class="form-control select" data-style="btn-info" data-live-search="true" disabled>
                                                        <option value="0">Vyberte...</option>
                                                                                                                    <option value="1">Prijat&aacute; objedn&aacute;vka</option>
                                                                                                                    <option value="2">Objedn&aacute;vka spracovan&aacute;</option>
                                                                                                            </select> 
                                                                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <button type="button" class="btn btn-block btn-default" style="margin-top:25px;" disabled>
                                                    <i class="fa fa-paper-plane"></i>&nbsp;
                                                    Odoslať
                                                </button>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end col -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- CUSTOMER INFORMATION -->
                    <div class="row">
                        <div class="col-sm-12 x4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-info-circle"></i>&nbsp;
                                        ZÁKAZNÍK
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" value="luba.rompf@gmail.com" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Účet bol registrovaný</label>
                                        <input type="text" value="NEREGISTROVANÝ" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Celkom objednávok</label>
                                        <input type="text" value="1" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Celkom zakúpených produkotv</label>
                                        <div class="input-group">
                                            <input type="text" value="1" class="form-control">
                                            <span class="input-group-addon">KS</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tovar v celkovej hodnote</label>
                                        <div class="input-group">                                            
                                            <span class="input-group-addon">&euro;</span>
                                            <input type="text" value="52.00Euro" class="form-control" disabled>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                        <div class="col-sm-6 x4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-truck"></i>&nbsp;
                                        DORUČENIE
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="form-group col-lg-12">
                                        <label>Názov</label>
                                        <input type="text" value="Dobierka kuri&eacute;rom" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6 pull-left">
                                        <label>Čas</label>
                                        <input type="text" value="" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6 pull-right">
                                        <label>Jednotka času</label>
                                        <input type="text" value="" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Náklady</label>
                                        <div class="input-group">                                            
                                            <span class="input-group-addon">&euro;</span>
                                            <input type="text" value="6.00Euro" class="form-control" disabled>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Popis</label>
                                        <textarea class="form-control" rows="4" disabled>(doručenie z&aacute;sielky kuri&eacute;rom Slovenskej po&scaron;ty na Va&scaron;u adresu)</textarea>
                                    </div>
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                        <div class="col-sm-6 x4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-money"></i>&nbsp;
                                        PLATBA
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>Názov</label>
                                        <input type="text" value="Platba v hotovosti" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Náklady</label>
                                        <div class="input-group">                                            
                                            <span class="input-group-addon">&euro;</span>
                                            <input type="text" value="0.00Euro" class="form-control" disabled>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Popis</label>
                                        <textarea class="form-control" rows="7" disabled>- pri vyzdvihnut&iacute; z&aacute;sielky na Slovenskej po&scaron;te
- pri doručen&iacute; z&aacute;sielky kuri&eacute;rom Slovenskej po&scaron;ty
- pri osobnom odbere </textarea>
                                    </div>
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                         <div class="col-sm-12 x6">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-truck"></i>&nbsp;
                                        DORUČOVACIA ADRESA
                                    </h3>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="setAddressType(1);" data-toggle="modal" data-target="#address">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Meno</label>
                                                <input type="text" value="Marcela" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Priezvisko</label>
                                                <input type="text" value="Hrdličkov&aacute;" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Ulica, číslo</label>
                                                <input type="text" value="Hviezdoslavova 4" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Mesto</label>
                                                <input type="text" value="Senec" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>PSČ</label>
                                                <input type="text" value="90301" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Krajina</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Spoločnosť</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČO</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>DIČ</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČ-DPH</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Mapa</label>
                                                <div id="map-delivery-canvas"><!-- --></div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                        <div class="col-sm-12 x6">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-file-text"></i>&nbsp;
                                        FAKTURAČNÁ ADRESA
                                    </h3>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="setAddressType(2);" data-toggle="modal" data-target="#address">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Meno</label>
                                                <input type="text" value="Marcela" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Priezvisko</label>
                                                <input type="text" value="Hrdličkov&aacute;" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Ulica, číslo</label>
                                                <input type="text" value="Hviezdoslavova 4" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Mesto</label>
                                                <input type="text" value="Senec" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>PSČ</label>
                                                <input type="text" value="90301" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Krajina</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Spoločnosť</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČO</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>DIČ</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČ-DPH</label>
                                                <input type="text" value="" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Mapa</label>
                                                <div id="map-invoice-canvas"><!-- --></div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-sm-12 x12">
                            <div id="flip-scroll">
                                <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-list-alt"></i>&nbsp;
                                        PRODUKTY
                                    </h3>
                                    <ul class="list-inline pull-left">
                                        <li class="widget widget-info">
                                            <span>Položiek celkom</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                1ks
                                            </span>
                                        </li>
                                        <li class="widget widget-warning">
                                            <span>Celkom (Medzisúčet)</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                38.33Euro
                                            </span>
                                        </li>
                                        <li class="widget widget-danger">
                                            <span>DPH SK 20%</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                7.67Euro
                                            </span>
                                        </li>
                                        <li class="widget widget-success">
                                            <span>Celkom na úhradu</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                46.00Euro
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="return false;" data-toggle="modal" data-target="#addOnArticleList">
                                                <span class="fa fa-plus"></span>
                                            </a>
                                        </li>
                                    </ul>     
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form panel-body-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="25" class="text-center">
                                                        #
                                                    </th>
                                                    <th width="35" class="text-center">
                                                        NÁHĽAD
                                                    </th>
                                                    <th width="35" class="text-center">
                                                        SKU
                                                    </th>
                                                    <th width="400" class="text-left">
                                                        NÁZOV POLOŽKY
                                                    </th>
                                                    <th class="text-right">
                                                        PÔVODNÁ CENA / ks<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-right">
                                                        CENA / Ks<br>
                                                        bez DPH
                                                    </th>
                                                    <th class="text-center">
                                                        DPH (%)
                                                    </th>
                                                    <th class="text-center" style="width: 260px !important;">
                                                        MATRICA
                                                    </th>
                                                    <th class="text-right" style="min-width: 120px !important;">
                                                        CENA / Ks<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-center" style="min-width: 120px !important;">
                                                        MNOŽSTVO
                                                    </th>
                                                    <th class="text-right">
                                                        ZĽAVA<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom<br>
                                                        bez DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom<br>
                                                        DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom zľava<br>
                                                        s DPH
                                                    </th>
                                                    <th width="100" class="text-center">
                                                        ODSTRÁNIŤ                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                              <tr>
                                                  <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articleList[0]['item-id']" value="325" />
                                                    <input type="hidden" name="articleList[0]['article-id']" value="161" />
                                                    161
                                                  </td>
                                                  <td class="text-center">
                                                                                                          <img src="files/ae0227fd53c75ac774d9d6821389e2bd.png" height="35" alt="INSTYLE_0"/>
                                                                                                      </td>
                                                  <td class="text-center">
                                                    100161
                                                  </td>
                                                  <td class="text-left">
                                                    <strong>INSTYLE</strong>
                                                  </td>
                                                  <td class="text-right">
                                                    46.00&euro;
                                                  </td>
                                                  <td class="text-right">
                                                    38.33&euro;
                                                  </td>
                                                  <td class="text-center">
                                                    20.000
                                                  </td>
                                                  <td class="text-center" style="width: 260px !important;">
                                                                                                          <div class="form-group" style="width: 260px !important;margin-bottom: 3px;">
                                                        <div id="ig-info" class="input-group">                                            
                                                          <span class="input-group-addon attr-name">
                                                            VELÚROVÉ FARBY
                                                          </span><!-- end input-group-addon -->
                                                          <input type="text" value="svetlo tyrkysov&aacute;" class="form-control text-left" style="font-size: .8em !important;padding: 6px 4px;" disabled>
                                                          <span class="input-group-addon" style="position: relative;">
                                                            <span class="attr-v-circle" style="background: #0dd9cd;"><!-- --></span><!-- end attr-v-circle -->
                                                          </span>
                                                        </div>
                                                      </div><!-- end form-group -->
                                                      <div class="form-group" style="width: 260px !important;">
                                                        <div id="ig-info" class="input-group" style="width: 260px !important;margin-bottom: 3px;">                                            
                                                          <span class="input-group-addon attr-name">
                                                            ŽENSKÉ VEĽKOSTI
                                                          </span><!-- end input-group-addon -->
                                                          <input type="text" value="S" class="form-control text-left" style="font-size: .8em !important;padding: 6px 4px;" disabled>
                                                          <span class="input-group-addon" style="position: relative;">
                                                            <span class="attr-v-circle" style="background: #FFFFFF;"><!-- --></span><!-- end attr-v-circle -->
                                                          </span><!-- end input-group-addon -->
                                                        </div><!-- end input-group -->
                                                      </div><!-- end form-group -->
                                                                                                      </td>
                                                  <td class="text-center">
                                                    <div class="form-group pull-right" style="width: 100%;">
                                                      <input type="text"  name="articleList[0]['amount']" value="46.00" class="form-control text-right">
                                                    </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-group pull-right" style="width: 100%;">
                                                        <input type="number"  name="articleList[0]['qty']" value="1" min="1" class="form-control text-right">
                                                      </div>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      0.00EUR
                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      38.33EUR
                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      7.67EUR
                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      46.00EUR
                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      0.00EUR
                                                    </strong>
                                                  </td>
                                                  <td class="text-center">
                                                    <label class="switch">
                                                      <input type="checkbox" name="articleList[0]['remove']" value="1">
                                                      <span></span>
                                                    </label>
                                                  </td>
                                                </tr>
                                                                                          </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                            </div><!-- end flip-scroll -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                                     </div><!-- end panel-body -->
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group pull-left" style="width:400px;margin-right:15px;">
                                <select name="action-id" class="form-control select" data-style="btn-warning">
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1">Spracovať a zaslať objednávku emailom</option>
                                                                                <option value="6">Spracovať a zaslať faktúru emailom</option>
                                                                                                                                                        <option value="3">Spracovať a vygenerovať novú faktúru</option>
                                                                                                                                                            <option value="5">Spracovať, vygenerovať novú faktúru a zaslať email</option>
                                                                                                            </select>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="width:400px;margin-right:15px;">
                                                                    <select name="email-id" class="form-control select" data-style="btn-info" data-live-search="true">
                                        <option value="0">Vyberte...</option>
                                                                                    <option value="1">Prijat&aacute; objedn&aacute;vka</option>
                                                                                    <option value="2">Objedn&aacute;vka spracovan&aacute;</option>
                                                                            </select> 
                                                            </div><!-- end form-group -->
                            <button type="submit" class="btn btn-danger" role="button">
                                <i class="fa fa-exclamation-triangle"></i>&nbsp;
                                VYKONAŤ AKCIU
                            </button>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-footer -->                         
            </div><!-- end main panel -->
        </form>
    </div><!-- end col -->
</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW ARTICLE LIST -->                         
<div class="modal" id="addOnArticleList" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1120px;">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <form action="cpanel/store/orders/add-article-list-to-order" method="post" role="form">
                    <input type="hidden" name="order-id" value="156" />
                    <input type="hidden" name="secure-key" value="b3c0e982b499648eba12a73b90e5457c" />
                    <div class="row">
                        <div class="col-lg-12">
                                                                <div class="panel panel-default">
                                        <div class="panel-heading ui-draggable-handle">
                                            <h3 class="panel-title">
                                                ZOZNAM ARTIKLOV&nbsp;&nbsp;<span class="badge">Zobrazených 1-10 z 341 záznamov</span>
                                            </h3>
                                            <ul class="panel-controls">
                                                <li>
                                                    <a href="#" onclick="return false;" class="panel-collapse">
                                                        <span class="fa fa-angle-down"></span>
                                                    </a>
                                                </li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body panel-body-table panel-body-form">
                                            <div class="row">
                                                <div class="col-lg-12" style="padding:15px 10px;">
                                                    <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                                        <select class="form-control select" onchange="location = 'cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/1/'+this.options[this.selectedIndex].value;" required="">
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
                                                    <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/1/10">1</a></li><li class=""><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/2/10">2</a></li><li class=""><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/3/10">3</a></li><li class=""><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/4/10">4</a></li><li class=""><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/5/10">5</a></li><li class=""><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/35/10">35</a></li><li class=""><a href="cpanel/store/orders/edit/b3c0e982b499648eba12a73b90e5457c/modal/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="alert alert-info" role="alert">
                                                        <strong>INFO!!</strong>
                                                        Pridávať produkty možete len zo zobrazeného výberu.
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                                                <table id="articleList" class="table table-bordered table-striped table-actions">
                                                    <thead>
                                                        <tr>
                                                            <th width="25" class="text-center">#</th>
                                                            <th width="30" class="text-center">
                                                                OBRÁZOK                                                            </th>
                                                            <th width="200" class="text-center">
                                                                SKU                                                            </th>
                                                            <th width="400" class="text-left">
                                                                NÁZOV ARTIKLU                                                            </th>
                                                            <th class="text-center">
                                                                MNOŽSTVO
                                                            </th>
                                                            <th class="text-right">
                                                                MALOOBCHODNÁ CENA / ks<br>
                                                                s DPH
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                            
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[0]['article-id']" value="1">
                                                                    <input type="checkbox" name="addOnArticleList[0]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <img src="files/3f96609759809db2d8a0dedc99e85c1a.png" height="35" alt="WANT HOODIE_4"/>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100001
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>WANT HOODIE</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[0]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[0]['amount']" value="58.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[1]['article-id']" value="2">
                                                                    <input type="checkbox" name="addOnArticleList[1]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <span style="font-size:1.4em;color:red;">
                                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                                        </span>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100002
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>WANT</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[1]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[1]['amount']" value="0.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[2]['article-id']" value="3">
                                                                    <input type="checkbox" name="addOnArticleList[2]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <span style="font-size:1.4em;color:red;">
                                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                                        </span>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100003
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>WANT HOODIE VELOUR</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[2]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[2]['amount']" value="58.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[3]['article-id']" value="4">
                                                                    <input type="checkbox" name="addOnArticleList[3]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <span style="font-size:1.4em;color:red;">
                                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                                        </span>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100004
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>WANT VELOUR</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[3]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[3]['amount']" value="40.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[4]['article-id']" value="5">
                                                                    <input type="checkbox" name="addOnArticleList[4]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <img src="/files/e9bab8dc55945df01decdb0e8d16fd5e.jpg" height="35" alt="DSC07123_u2"/>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100005
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>ACT</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[4]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[4]['amount']" value="46.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[5]['article-id']" value="6">
                                                                    <input type="checkbox" name="addOnArticleList[5]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <img src="/files/593d1300b5770f7259ca087ba248f62e.jpg" height="35" alt="Stand woman pants9"/>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100006
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>STAND WOMAN</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[5]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[5]['amount']" value="39.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[6]['article-id']" value="7">
                                                                    <input type="checkbox" name="addOnArticleList[6]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <img src="/files/0725b5bba3a7c39503fdb7481f3aa361.jpg" height="35" alt="DSC06521_u"/>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100007
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>WILD</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[6]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[6]['amount']" value="46.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[7]['article-id']" value="8">
                                                                    <input type="checkbox" name="addOnArticleList[7]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <img src="/files/a7be1f476b7cb281d6c5c3b700d44600.jpg" height="35" alt="DSC06437_u2"/>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100008
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>WILD JEANS</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[7]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[7]['amount']" value="54.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[8]['article-id']" value="9">
                                                                    <input type="checkbox" name="addOnArticleList[8]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <img src="files/b36252689109297a41b338394c31c270.png" height="35" alt="VAGABOND JACKET WOMAN_0"/>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100009
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>VAGABOND HOODIE WOMAN</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[8]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[8]['amount']" value="70.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                                    <tr>
                                                                <td class="text-center">
                                                                    <input type="hidden" name="addOnArticleList[9]['article-id']" value="10">
                                                                    <input type="checkbox" name="addOnArticleList[9]['on']" value="1">
                                                                </td>
                                                                <td class="text-center">
                                                                                                                                            <img src="/files/2f8dade3a129c8d771986c4931e2af17.jpg" height="35" alt="DSC06420_u2"/>
                                                                                                                                    </td>
                                                                <td class="text-center">
                                                                    100010
                                                                </td>
                                                                <td class="text-left">
                                                                    <strong>TEMPTER WOMAN</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[9]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon">&euro;</span>
                                                                            <input type="text"  name="addOnArticleList[9]['amount']" value="46.00" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                            </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-success">
                                                PRIDAŤ
                                            </button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                ZAVRIEŤ                                            </button>
                                        </div><!-- end panel-footer -->
                                    </div><!-- end panel -->
                                                    </div><!-- end col -->
                    </div><!-- end row -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW ARTICLE LIST -->

<!-- MODAL WINDOW DELIVERY ADDRESS -->
<div class="modal" id="address" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1120px;">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <form action="cpanel/store/orders/change-order-address" method="post" role="form">
                    <input type="hidden" name="order-id" value="156" />
                    <input type="hidden" name="secure-key" value="b3c0e982b499648eba12a73b90e5457c" />
                    <input type="hidden" name="address-type" value="0" />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        ZMENA ADRESY                                    </h3>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="return false;" id="unchecked">
                                                <i class="fa fa-minus-square"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table panel-body-form">
                                                                            <div class="row">
                                            <div class="col-lg-12" style="padding:0px;">
                                                <div class="table-responsive">
                                                    <table id="addressList" class="table table-bordered table-striped table-actions" style="margin: 0;width:1400px;min-width:1400px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    #
                                                                </th>
                                                                <th class="text-center">
                                                                    PRIMARY
                                                                </th>
                                                                <th class="text-center">
                                                                    INVOICE
                                                                </th>
                                                                <th class="text-left">
                                                                    FIRST NAME
                                                                </th>
                                                                <th class="text-left">
                                                                    LAST NAME
                                                                </th>
                                                                <th class="text-left">
                                                                    EMAIL
                                                                </th>
                                                                <th class="text-left">
                                                                    PHONE
                                                                </th>
                                                                <th class="text-left">
                                                                    COUNTRY
                                                                </th>
                                                                <th class="text-left">
                                                                    CITY
                                                                </th>
                                                                <th class="text-left">
                                                                    STREET
                                                                </th>
                                                                <th class="text-left">
                                                                    ZIP
                                                                </th>
                                                                <th class="text-left">
                                                                    COMPANY NAME
                                                                </th>
                                                                <th class="text-left">
                                                                    REG. NUMBER
                                                                </th>
                                                                <th class="text-left">
                                                                    VAT
                                                                </th>
                                                                <th class="text-left">
                                                                    VAT CODE
                                                                </th>
                                                                <th class="text-left">
                                                                    CREATED
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                                                                            <tr>
                                                                    <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                                        <input type="checkbox" name="address[0]['address-id']" value="83"/>
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
                                                                    <td class="text-left">
                                                                        Marcela
                                                                    </td>
                                                                    <td class="text-left">
                                                                        Hrdličkov&aacute;
                                                                    </td>
                                                                    <td class="text-left">
                                                                        luba.rompf@gmail.com
                                                                    </td>
                                                                    <td class="text-left">
                                                                        0903240314
                                                                    </td>
                                                                    <td class="text-left">
                                                                        
                                                                    </td>
                                                                    <td class="text-left">
                                                                        Senec
                                                                    </td>
                                                                    <td class="text-left">
                                                                        Hviezdoslavova 4
                                                                    </td>
                                                                    <td class="text-left">
                                                                        90301
                                                                    </td>
                                                                    <td class="text-left">
                                                                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                                                                                            </td>
                                                                    <td class="text-left">
                                                                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                                                                                            </td>
                                                                    <td class="text-left">
                                                                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                                                                                            </td>
                                                                    <td class="text-left">
                                                                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                                                                                            </td>
                                                                    <td class="text-left">
                                                                        2017-01-18 21:46:52
                                                                    </td>
                                                                </tr>
                                                                                                                    </tbody>
                                                    </table>
                                                </div><!-- end table-responsive -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                        <div id="addr" class="row" style="margin-bottom: 15px;">
                                            <h4 style="background:#F5F5F5;margin:0 auto 15px auto;padding:15px 10px;border-color:#E5E5E5;color:#434a54;">NOVÁ ADRESA</h4>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Meno</label>
                                                    <input type="text" name="first-name" value="" class="form-control" required>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Priezvisko</label>
                                                    <input type="text" name="last-name" value="" class="form-control" required>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Ulica, číslo</label>
                                                    <input type="text" name="street" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Mesto</label>
                                                    <input type="text" name="city" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>PSČ</label>
                                                    <input type="text" name="zip" value="" class="form-control">
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Krajina</label>
                                                    <select name="country" class="form-control select" required>
                                                                                                                    <option value="190" selected></option>
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
                                                                                                                    <option value="189" > Slovakia</option>
                                                                                                            </select>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Spoločnosť</label>
                                                    <input type="text" name="company-name" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>IČO</label>
                                                    <input type="text" name="company-reg-number" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>DIČ</label>
                                                    <input type="text" name="vat" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>IČ-DPH</label>
                                                    <input type="text" name="vat-code" value="" class="form-control">
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="form-group col-lg-12" style="margin-top:22px;">
                                                    <div class="col-lg-3">
                                                        <label class="switch">
                                                            <input type="checkbox" name="personal_pickup" value="1">
                                                            <span></span>
                                                        </label>
                                                    </div><!-- end col -->
                                                    <label class="col-lg-9" style="padding-top:5px;">Osobný odber</label>
                                                </div><!-- end form-group -->
                                                <div class="form-group col-lg-12">
                                                    <div class="col-lg-3">
                                                        <label class="switch">
                                                            <input type="checkbox" name="edit" value="1">
                                                            <span></span>
                                                        </label>
                                                    </div><!-- end col -->
                                                    <label class="col-lg-9" style="padding-top:5px;">Upraviť</label>
                                                </div><!-- end form-group -->
                                                <div class="form-group col-lg-12">
                                                    <div class="col-lg-3">
                                                        <label class="switch">
                                                            <input type="checkbox" name="edit" value="1">
                                                            <span></span>
                                                        </label>
                                                    </div><!-- end col -->
                                                    <label class="col-lg-9" style="padding-top:5px;">Pridať</label>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                                                    </div><!-- end panel-body -->
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-success">
                                        ZMENIŤ
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        ZAVRIEŤ                                    </button>
                                </div><!-- end panel-footer -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW DELIVERY ADDRESS -->

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
<script type="text/javascript">
    function setAddressType( typeId ) {
        $('[name="address-type"]').val(typeId);
    }
</script>
<script type="text/javascript">
$(function() { 
    $('#addressList').find('[type="checkbox"]').each(function() {
        $(this).click(function() {
            $(this).prop("checked", true);
            unchecked($('#addressList'),$(this));
            // load address
            getAddress(parseInt($(this).val()));
        }); 
    });
    $('#unchecked').on('click', function() {
        $('#addressList').find('[type="checkbox"]').each(function() {
            $(this).prop("checked", false);
        });
        $('#addr').find('[type="text"]').each(function() {
            $(this).val('');
        });
        $('#addr').find('[type="checkbox"]').each(function() {
            $(this).prop("checked", false);
        });
    });
    
    function unchecked(oTable,current) {
        oTable.find('[type="checkbox"]').each(function() {
            $(this).not(current).prop("checked", false);
        }); 
    }
    
    function getAddress( cId ) {
        $.ajax({
            url: 'cpanel/store/api/address',
            type: 'POST',
            data: { contactId: cId },                
            success: function(responseJSON) {
                $('[name="personal_pickup"]').prop("checked", false);
                $('[name="first-name"]').val(responseJSON.first_name);
                $('[name="last-name"]').val(responseJSON.last_name);
                $('[name="street"]').val(responseJSON.street);
                $('[name="city"]').val(responseJSON.city);
                $('[name="zip"]').val(responseJSON.zip);
                $('[name="company-name"]').val(responseJSON.company_name);
                $('[name="company-reg-number"]').val(responseJSON.company_reg_number);
                $('[name="vat"]').val(responseJSON.vat);
                $('[name="vat-code"]').val(responseJSON.vat_code);
                $('[name="country"]').each(function() { 
                    this.selected = (this.text == responseJSON.id_country); 
                });
                if(responseJSON.is_personal_pickup == 1) {
                    $('[name="personal_pickup"]').prop("checked", true);
                }
            },
            error: function(e) {
                console.log(e);
            },
            dataType: 'JSON'
        });
    }
});
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript">
$(document).ready(function() {
    var geocoder = new google.maps.Geocoder();
    var delivery_map, invoice_map;

    geocoder.geocode({
        address: 'Hviezdoslavova 4,Senec,90301,'
        }, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            delivery_map = new google.maps.Map(document.getElementById('map-delivery-canvas'), {
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: results[0].geometry.location
            });
            var delivery_marker = new google.maps.Marker({
                map: delivery_map,
                position: results[0].geometry.location,
                url: 'http://maps.google.com?q=Hviezdoslavova+4%2CSenec%2C90301%2C'
            });
            google.maps.event.addListener(delivery_marker, 'click', function() {
                window.open(delivery_marker.url);
            });
        }
    });

    geocoder.geocode({
        address: 'Hviezdoslavova 4,Senec,90301,'
        }, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            invoice_map = new google.maps.Map(document.getElementById('map-invoice-canvas'), {
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: results[0].geometry.location
            });
            invoice_marker = new google.maps.Marker({
                map: invoice_map,
                position: results[0].geometry.location,
                url: 'http://maps.google.com?q=Hviezdoslavova+4%2CSenec%2C90301%2C'
            });
            google.maps.event.addListener(invoice_marker, 'click', function() {
                window.open(invoice_marker.url);
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
