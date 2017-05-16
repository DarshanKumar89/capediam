<?php /*%%SmartyHeaderCode:10614568895880ed020c7072-69648423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eae5c861c818adef9a1eb664e46b3e1d0326583' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/site/sitemap.tpl',
      1 => 1469707235,
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
    '51ae4af621ae6492ca9e87225eeb44144885ef01' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/site/sitemap.tpl',
      1 => 1469707235,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '10614568895880ed020c7072-69648423',
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
  'unifunc' => 'content_5880ed0250d344_38585445',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5880ed0250d344_38585445')) {function content_5880ed0250d344_38585445($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/gl-drive-sp-lib.css"/>
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/drive.css"/>
<style>
#siteControls button {
    font-weight: 600;
}
#navList tbody > tr > td {
    cursor:row-resize;
}

.tree {
    background-color:#fff;
    min-height:200px;
    margin-bottom:10px;
    padding:19px;
    overflow: scroll;
    
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none;
    cursor: pointer;
}
.tree li span.nav {
    background-color: #95b75d;
    font-size: 11.5px;
    font-weight: 600;
    letter-spacing: 1.1px;
    color: #fff;
    border-color: #95b75d;
}
.tree li span.nav > i {
    font-size: 13px;
    font-weight: 800;
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree > ul > li::before, .tree > ul > li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li > span:hover, .tree li.parent_li > span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
.tree li > a {
    padding-left: 5px;
    color: #000;
}
.tree li > a:hover {
    color: #34302f;
    text-decoration: none;
}

.nav-item-image {
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
.nav-item-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.nav-item-image > a.btn-remove {
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
.nav-item-image > a.btn-remove > i {
    font-size:1.7em;
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
                    
<li class="active">
    <a href="cpanel/site-structure" title="Štruktúra webu">
        Štruktúra webu    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-sitemap"></i>
            <strong>Štruktúra webu</strong>
            <span style="font-size: .7em;color:red;">
                <sup>Beta</sup>
            </span>
            <small>mapa stránok</small>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom:20px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="siteControls" class="btn-group" role="group">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_create_nav">
                <span class="fa fa-plus"></span>
                Pridať novú navigáciu            </button>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_order_nav">
                <span class="fa fa-sort"></span>
                Zotriediť navigácie            </button>
        </div><!-- end btn-group -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-md-12">
        <div class="tree well">
            <ul><li><span class="nav" data-type="menu" data-id="1"><i class="fa fa-code-fork"></i>&nbsp;Hlavne menu&nbsp;</span><a href="#" onclick="return false;"></a><ul><li><span data-type="item" data-pattern-id="1" data-id="1"><i class="fa fa-chevron-circle-left"></i>&nbsp;Ženy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="5"><i class="fa fa-chevron-circle-left"></i>&nbsp;Basics<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="6"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="17"><i class="fa fa-plus"></i>&nbsp;Mikiny<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="18"><i class="fa fa-plus"></i>&nbsp;Teplákové súpravy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="20"><i class="fa fa-plus"></i>&nbsp;Tričká a tielka<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="22"><i class="fa fa-plus"></i>&nbsp;Kraťasy, šortky, sukne<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="19"><i class="fa fa-plus"></i>&nbsp;Šaty<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="23"><i class="fa fa-plus"></i>&nbsp;Overaly a kombinézy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="25"><i class="fa fa-plus"></i>&nbsp;Bundy a saká<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="26"><i class="fa fa-plus"></i>&nbsp;Spodné prádlo<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="29"><i class="fa fa-plus"></i>&nbsp;Čiapky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="12"><i class="fa fa-chevron-circle-left"></i>&nbsp;Kolekcie<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="27"><i class="fa fa-plus"></i>&nbsp;AMERICAN APACHE<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="28"><i class="fa fa-plus"></i>&nbsp;BLACKGREY<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="138"><i class="fa fa-plus"></i>&nbsp;FITNESS<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="139"><i class="fa fa-plus"></i>&nbsp;INITIALS<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="13"><i class="fa fa-chevron-circle-left"></i>&nbsp;Limitovaná edícia<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="30"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="14"><i class="fa fa-chevron-circle-left"></i>&nbsp;Doplnky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="31"><i class="fa fa-plus"></i>&nbsp;Tašky a kabelky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="15"><i class="fa fa-chevron-circle-left"></i>&nbsp;Novinky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="33"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="35"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="16"><i class="fa fa-chevron-circle-left"></i>&nbsp;Outlet<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="34"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="36"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="3"><i class="fa fa-chevron-circle-left"></i>&nbsp;Muži<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="56"><i class="fa fa-chevron-circle-left"></i>&nbsp;Basics<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="57"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="58"><i class="fa fa-plus"></i>&nbsp;Mikiny<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="59"><i class="fa fa-plus"></i>&nbsp;Teplákové súpravy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="60"><i class="fa fa-plus"></i>&nbsp;Tričká a Polo tričká<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="62"><i class="fa fa-plus"></i>&nbsp;Kraťasy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="64"><i class="fa fa-plus"></i>&nbsp;Overaly<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="65"><i class="fa fa-plus"></i>&nbsp;Bundy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="66"><i class="fa fa-plus"></i>&nbsp;Čiapky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="37"><i class="fa fa-chevron-circle-left"></i>&nbsp;Kolekcie<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="67"><i class="fa fa-plus"></i>&nbsp;AMERICAN APACHE<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="140"><i class="fa fa-plus"></i>&nbsp;EGO<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="38"><i class="fa fa-chevron-circle-left"></i>&nbsp;Limitovaná edícia<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="68"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="39"><i class="fa fa-chevron-circle-left"></i>&nbsp;Novinky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="69"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="70"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="40"><i class="fa fa-chevron-circle-left"></i>&nbsp;Outlet<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="71"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="72"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="4"><i class="fa fa-chevron-circle-left"></i>&nbsp;Deti<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="73"><i class="fa fa-chevron-circle-left"></i>&nbsp;Basics<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="74"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="75"><i class="fa fa-plus"></i>&nbsp;Mikiny<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="76"><i class="fa fa-plus"></i>&nbsp;Teplákové súpravy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="77"><i class="fa fa-plus"></i>&nbsp;Tričká a Polo tričká<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="78"><i class="fa fa-plus"></i>&nbsp;Tielka<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="79"><i class="fa fa-plus"></i>&nbsp;Kraťasy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="80"><i class="fa fa-plus"></i>&nbsp;Svetre a pulóvre<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="81"><i class="fa fa-plus"></i>&nbsp;Bundy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="82"><i class="fa fa-plus"></i>&nbsp;Čiapky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="47"><i class="fa fa-chevron-circle-left"></i>&nbsp;Kolekcie<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="143"><i class="fa fa-plus"></i>&nbsp;AMERICAN APACHE<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="48"><i class="fa fa-chevron-circle-left"></i>&nbsp;Novinky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="83"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="84"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="49"><i class="fa fa-chevron-circle-left"></i>&nbsp;Outlet<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="85"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="86"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="7"><i class="fa fa-chevron-circle-left"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="87"><i class="fa fa-chevron-circle-left"></i>&nbsp;Dámske<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="90"><i class="fa fa-plus"></i>&nbsp;Basics<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="91"><i class="fa fa-plus"></i>&nbsp;AMERICAN APACHE<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="92"><i class="fa fa-plus"></i>&nbsp;BLACKGREY<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="93"><i class="fa fa-plus"></i>&nbsp;FITNESS<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="141"><i class="fa fa-plus"></i>&nbsp;Limitovaná edícia<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="88"><i class="fa fa-chevron-circle-left"></i>&nbsp;Pánske<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="94"><i class="fa fa-plus"></i>&nbsp;Basics<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="95"><i class="fa fa-plus"></i>&nbsp;AMERICAN APACHE<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="96"><i class="fa fa-plus"></i>&nbsp;EGO<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="142"><i class="fa fa-plus"></i>&nbsp;Limitovaná edícia<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="89"><i class="fa fa-chevron-circle-left"></i>&nbsp;Detské<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="97"><i class="fa fa-plus"></i>&nbsp;Basics<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="98"><i class="fa fa-plus"></i>&nbsp;AMERICAN APACHE<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="144"><i class="fa fa-plus"></i>&nbsp;Limitovaná edícia<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="8"><i class="fa fa-plus"></i>&nbsp;BLACKGREY<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="9"><i class="fa fa-plus"></i>&nbsp;FITNESS<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="10"><i class="fa fa-chevron-circle-left"></i>&nbsp;Novinky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="99"><i class="fa fa-chevron-circle-left"></i>&nbsp;Dámske<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="111"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="112"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="100"><i class="fa fa-chevron-circle-left"></i>&nbsp;Pánske<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="113"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="114"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="101"><i class="fa fa-chevron-circle-left"></i>&nbsp;Detské<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="115"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="116"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="11"><i class="fa fa-chevron-circle-left"></i>&nbsp;Outlet<span style="padding: 0 2px 0 7px;color:brown;border: 0;"><i class="fa fa-external-link"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="102"><i class="fa fa-chevron-circle-left"></i>&nbsp;Ženy<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="105"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="106"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="103"><i class="fa fa-chevron-circle-left"></i>&nbsp;Muži<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="107"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="108"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="104"><i class="fa fa-chevron-circle-left"></i>&nbsp;Deti<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="109"><i class="fa fa-plus"></i>&nbsp;Tepláky<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="110"><i class="fa fa-plus"></i>&nbsp;Všetko<span style="padding: 0 2px 0 7px;color:orange;border: 0;"><i class="fa fa-cubes"></i></span></span></li></ul></li></ul></li></ul></li><li><span class="nav" data-type="menu" data-id="2"><i class="fa fa-code-fork"></i>&nbsp;Footer&nbsp;</span><a href="#" onclick="return false;"></a><ul><li><span data-type="item" data-pattern-id="1" data-id="117"><i class="fa fa-chevron-circle-left"></i>&nbsp;INFORMÁCIE<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="120"><i class="fa fa-plus"></i>&nbsp;O nás<span style="padding: 0 2px 0 7px;color:green;border: 0;"><i class="fa fa-file-text"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="121"><i class="fa fa-plus"></i>&nbsp;Tabuľka veľkostí<span style="padding: 0 2px 0 7px;color:green;border: 0;"><i class="fa fa-file-text"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="122"><i class="fa fa-plus"></i>&nbsp;Všeobecné obchodné podmienky<span style="padding: 0 2px 0 7px;color:green;border: 0;"><i class="fa fa-file-text"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="123"><i class="fa fa-plus"></i>&nbsp;Dodacie podmienky<span style="padding: 0 2px 0 7px;color:green;border: 0;"><i class="fa fa-file-text"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="124"><i class="fa fa-plus"></i>&nbsp;Záruka a reklamačný poriadok<span style="padding: 0 2px 0 7px;color:green;border: 0;"><i class="fa fa-file-text"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="125"><i class="fa fa-plus"></i>&nbsp;Kontakty<span style="padding: 0 2px 0 7px;color:green;border: 0;"><i class="fa fa-file-text"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="118"><i class="fa fa-chevron-circle-left"></i>&nbsp;MAJK SPIRIT - BIELY PRINC<span style="padding: 0 2px 0 7px;color:green;border: 0;"><i class="fa fa-file-text"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="126"><i class="fa fa-plus"></i>&nbsp;Product Recall<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="127"><i class="fa fa-plus"></i>&nbsp;Gift Vouchers<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="128"><i class="fa fa-plus"></i>&nbsp;Returns and Exchanges<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="129"><i class="fa fa-plus"></i>&nbsp;Shipping Options<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="130"><i class="fa fa-plus"></i>&nbsp;Help & FAQs<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="131"><i class="fa fa-plus"></i>&nbsp;Sale only today<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li></ul></li><li><span data-type="item" data-pattern-id="1" data-id="119"><i class="fa fa-chevron-circle-left"></i>&nbsp;MÔJ ÚČET<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span><ul><li><span data-type="item" data-pattern-id="1" data-id="132"><i class="fa fa-plus"></i>&nbsp;Prihlásenie<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="133"><i class="fa fa-plus"></i>&nbsp;Moja nákupná taška<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="134"><i class="fa fa-plus"></i>&nbsp;Zoznam obľúbených vecí<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="135"><i class="fa fa-plus"></i>&nbsp;Check out<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="136"><i class="fa fa-plus"></i>&nbsp;Track my order<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li><li><span data-type="item" data-pattern-id="1" data-id="137"><i class="fa fa-plus"></i>&nbsp;Pomoc<span style="padding: 0 2px 0 7px;color:black;border: 0;"><i class="fa fa-circle"></i></span></span></li></ul></li></ul></li></ul>
        </div>
    </div>
</div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW NEW NAVIGATION -->
<div class="modal" id="modal_create_nav" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-md-12">
                        <form action="cpanel/create-nav" method="post" role="form">
                            <input type="hidden" name="nav-id" value="6b3f7cf2c89acd735c1b4418eb5a432f" />
                            <input type="hidden" name="nav-access" value="0" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            Nová navigácia                                        </strong>
                                    </h3>
                                </div>
                                <div class="panel-body">                                                                        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    Unikátny kód navigácie                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" value="6b3f7cf2c89acd735c1b4418eb5a432f" disabled>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-barcode"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Názov navigácie                                                </label>
                                                <input class="form-control" type="text" name="nav-name" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    Úroveň prístupu                                                </label>                                       
                                                <select class="form-control select" name="nav-access" data-style="btn-warning" disabled>
                                                    <option value="0">default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    CSS ID                                                </label>
                                                <input class="form-control" type="text" name="css-id" value="">
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    CSS Triedy                                                </label>
                                                <input class="tagsinput form-control" type="text" name="css-classes" value=""/>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    Publikovať                                                </label><br>
                                                <label class="switch">
                                                    <input type="checkbox" name="publish" value="1">
                                                    <span></span>
                                                </label>
                                            </div><!-- end form-group -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end panel-body -->
                                <div class="panel-footer">  
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                                    </button>
                                    <button type="button" class="btn btn-warning" onclick="clear_form_elements(this.form);">
                                        <i class="fa fa-scissors"></i>&nbsp;RESETOVAŤ FORMULÁR                                    </button>
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
<!-- //-- MODAL WINDOW NEW NAVIGATION -->

<!-- MODAL WINDOW ORDERING NAVIGATION -->
<div class="modal" id="modal_order_nav" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog" style="width:1200px;">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <script>
                    function delete_row(rowId) {
                        if($('#'+rowId).length > 0)  {
                            $('#'+rowId).hide();
                            $('#ipt_'+rowId).val('1');
                        }
                    }
                </script>
                <div class="row">
                    <div class="col-md-12">
                        <form action="cpanel/update-nav-list" method="post" role="form">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            Zoznam navigácií                                        </strong>
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-table">
                                    <div class="table-responsive">
                                        <table id="navList" class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="200" class="text-center">
                                                        UNIKÁTNÝ KÓD NAVIGÁCIE                                                    </th>
                                                    <th class="text-center">
                                                        NÁZOV NAVIGÁCIE                                                    </th>
                                                    <th width="50" class="text-center">
                                                        POČET NAVIGAČNÝCH POLOŽIEK                                                    </th>
                                                    <th width="150" class="text-center">
                                                        VYTVORIL                                                    </th>
                                                    <th width="100" class="text-center">
                                                        VYTVORENÉ                                                    </th>
                                                    <th width="100" class="text-center">
                                                        PUBLIKOVAŤ                                                    </th>
                                                    <th width="100" class="text-center">
                                                        ODSTRÁNIŤ                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>   
                                                                                                    <tr id="trow_0">
                                                        <td class="text-center">
                                                            <input type="hidden" name="nav[0]['nav-id']" value="1" />
                                                            916e8db0ef1dd435898255b03fd8f5b0
                                                        </td>
                                                        <td class="text-left">
                                                            <input type="text" name="nav[0]['nav-name']" value="Hlavne menu" style="width: 100%;padding: 0 5px;">
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="label text-center label-success" style="margin-right: 15px;font-size: 1em;">105</span>
                                                        </td>
                                                        <td class="text-left">Henrich&nbsp;Barkoczy</td>
                                                        <td class="text-center">08-02-2016</td>
                                                        <td class="text-center">
                                                            <label class="switch">
                                                                <input class="cb-main" type="checkbox" name="nav[0]['publish']" value="1"  />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="text-center">
                                                            <label class="switch">
                                                                <input type="checkbox" name="nav[0]['remove']" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                                                                    <tr id="trow_1">
                                                        <td class="text-center">
                                                            <input type="hidden" name="nav[1]['nav-id']" value="2" />
                                                            34eaeb37d30eaa1e2fb99ed7733d0e28
                                                        </td>
                                                        <td class="text-left">
                                                            <input type="text" name="nav[1]['nav-name']" value="Footer" style="width: 100%;padding: 0 5px;">
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="label text-center label-success" style="margin-right: 15px;font-size: 1em;">21</span>
                                                        </td>
                                                        <td class="text-left">Henrich&nbsp;Barkoczy</td>
                                                        <td class="text-center">20-04-2016</td>
                                                        <td class="text-center">
                                                            <label class="switch">
                                                                <input class="cb-main" type="checkbox" name="nav[1]['publish']" value="1"  />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="text-center">
                                                            <label class="switch">
                                                                <input type="checkbox" name="nav[1]['remove']" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                                                            </tbody>
                                        </table>
                                    </div>                                
                                </div>
                                <div class="panel-footer">                                 
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                                    </button>
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
<!-- //-- MODAL WINDOW ORDERING NAVIGATION -->

<!-- MODAL WINDOW CREATE, PAGE LIST, EDIT, ORDER NAVIGATION -->                                       
<div class="modal" id="modal_dynamic_window" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;"><!-- --></div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW CREATE, PAGE LIST, EDIT, ORDER NAVIGATION -->

<!-- MODAL WINDOW REMOVE NAVIGATION -->                       
<div class="modal" id="modal_remove" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="cpanel/delete-nav" method="post" role="form">
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
                                    <button type="submit" class="btn btn-danger">
                                        ZMAZAŤ NAVŽDY                                    </button>
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
<!-- //-- MODAL WINDOW REMOVE NAVIGATION --> 

<!--  MODAL WINDOW MOUSE MENU BAR -->
<div class="d-r-n" aria-haspopup="true" tabindex="-1">
    <ul class="nav nav-pills nav-stacked" role="menu">
        <li role="menuitem" data-menu-item="create" data-pattern-id="1">
            <a href="#" onclick="return false;">
                <span class="fa fa-external-link"></span>
                <span class="d-r-n-m-i-t t-1x-f">
                    Pridať novú navigačnú položku                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="order" data-pattern-id="0">
            <a href="#" onclick="return false;">
                <span class="fa fa-sort"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Usporiadanie                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="edit" data-pattern-id="0">
            <a href="#" onclick="return false;">
                <span class="fa fa-pencil"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Editovať                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="remove" data-pattern-id="0">
            <a href="#" onclick="return false;">
                <span class="fa fa-trash-o"></span>
                <span class="d-r-n-m-i-t t-1x">
                   Odstrániť                </span>
            </a>
        </li>
    </ul>
</div>
<!-- //-- MODAL WINDOW MOUSE MENU BAR -->


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
<script type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/nestable/jquery.nestable.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    function clear_form_elements(elm) {
        $(elm).find(':input').each(function() {
            switch(this.type) {
                case 'password':
                case 'select-multiple':
                case 'select-one':
                case 'text':
                case 'textarea':
                    $(this).val('');
                    break;
                case 'checkbox':
                case 'radio':
                    this.checked = false;
            }
        });
    }
</script>
<script>
$(function() {
    
            
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('fa-chevron-circle-down').removeClass('fa-chevron-circle-left');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('fa-chevron-circle-left').removeClass('fa-chevron-circle-down');
        }
        e.stopPropagation();
    });
    $('#navList').find('tbody').sortable();
    
    var Tree = new Object();
        // DOM
        Tree.layout = $('div.tree');
        // geo
        Tree.mouse  = {};
        // modal
        Tree.modals = {
            navigation: {
                elm: $('#modal_order_nav'),
                on: function() {
                    Tree.modals.navigation.elm.modal('show');
                }
            },
            dynamic: {
                elm: $('#modal_dynamic_window'),
                on: function() {
                    Tree.modals.dynamic.elm.modal('show');
                },
                put: function(content) {
                    Tree.modals.dynamic.elm.find('.modal-body').empty();
                    Tree.modals.dynamic.elm.find('.modal-body').html(content);
                }
            },
            remove: {
                elm: $('#modal_remove'),
                on: function() {
                    Tree.modals.remove.elm.modal('show');
                }
            }
        };
        // menu
        Tree.menu   = {
            model: null,
            itemId: null,
            patternId: null,
            elm: $('.d-r-n'),
            init: function() {
                Tree.menu.create();
                Tree.menu.order();
                Tree.menu.edit();
                Tree.menu.remove();
            },
            on: function() {
                Tree.menu.elm.css({ top: Tree.mouse.screenY,left: Tree.mouse.screenX });
                Tree.menu.elm.show();
            },
            off: function() {
                Tree.menu.elm.css({ top: 0,left: 0 });
                Tree.menu.elm.hide();
                Tree.menu.model  = null;  
                Tree.menu.itemId = null;  
                Tree.menu.patternId = null;
            },
            create: function() {
                Tree.menu.elm.find('[data-menu-item="create"]').on('click', function() { 
                    if(Tree.menu.itemId !== null) {
                        $.ajax({
                            url: 'cpanel/nav-form-create-item',
                            type: 'POST',
                            data: {model: Tree.menu.model,id: Tree.menu.itemId, patternId: $(this).data('pattern-id')},
                            success: function(response) {
                               Tree.modals.dynamic.put(response);
                               Tree.modals.dynamic.on();
                            },
                            error: function(data) {
                                console.log(data);
                            },
                            dataType: 'HTML'
                        });
                    }
                    Tree.menu.off();
                });
            },
            order: function() {
                Tree.menu.elm.find('[data-menu-item="order"]').on('click', function() {
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 2) &&
                        (Tree.menu.itemId !== null) &&
                        (Tree.menu.patternId !== null)
                    ) {
                        $.ajax({
                            url: 'cpanel/nav-form-item-order',
                            type: 'POST',
                            data: {model: Tree.menu.model,id: Tree.menu.itemId},
                            success: function(response) {
                               Tree.modals.dynamic.put(response);
                               Tree.modals.dynamic.on();
                            },
                            error: function(data) {
                                console.log(data);
                            },
                            dataType: 'HTML'
                        });
                    }
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 1)
                    ) {
                        Tree.modals.navigation.on();
                    }
                    Tree.menu.off();
                });
            },
            edit: function() {
                Tree.menu.elm.find('[data-menu-item="edit"]').on('click', function() {
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 2) &&
                        (Tree.menu.itemId !== null) &&
                        (Tree.menu.patternId !== null)
                    ) {
                        $.ajax({
                            url: 'cpanel/nav-form-edit-item',
                            type: 'POST',
                            data: {model: Tree.menu.model,id: Tree.menu.itemId, patternId: Tree.menu.patternId},
                            success: function(response) {
                               Tree.modals.dynamic.put(response);
                               Tree.modals.dynamic.on();
                            },
                            error: function(data) {
                                console.log(data);
                            },
                            dataType: 'HTML'
                        });
                    }
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 1)
                    ) {
                        Tree.modals.navigation.on();
                    }
                    Tree.menu.off();
                });
            },
            remove: function() {
                Tree.menu.elm.find('[data-menu-item="remove"]').on('click', function() {
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 1)
                    ) {
                        Tree.modals.navigation.on();
                    } else {
                        $('#removeModel').val( Tree.menu.model );
                        $('#removeParentId').val( Tree.menu.itemId );
                        Tree.modals.remove.on();
                    }
                    Tree.menu.off();
                });
            }
        };
        Tree.setSize = function() {
            var offset = Tree.layout.offset();
            
            Tree.layout.css({ height: ($('body').innerHeight() - offset.top) - 20 });
        };
        Tree.setSize();
        Tree.menu.init();
    
        Tree.layout.on("contextmenu",function(e) {
            e.preventDefault();
        });
        Tree.layout.mousedown(function(event) {
            Tree.mouse.screenX = event.pageX;
            Tree.mouse.screenY = ( (event.pageY + Tree.menu.elm.innerHeight()) > $('body').innerHeight() ) ? event.pageY - Tree.menu.elm.innerHeight() : event.pageY;

            switch(event.which) {
                case 1:
                    Tree.menu.off();
                    break;
                case 3:
                    //console.log(event);
                    break;
            }
        });
        Tree.layout.find('[data-type="menu"]').each(function() {
            $(this).on('contextmenu',function(event) {
                if(event.which === 3) {
                    Tree.menu.model  = 1;
                    Tree.menu.itemId = $(this).data('id');
                    Tree.menu.on();
                }
            });
        });
        Tree.layout.find('[data-type="item"]').each(function() {
            $(this).on('contextmenu',function(event) {
                if(event.which === 3) {
                    Tree.menu.model  = 2;
                    Tree.menu.itemId = $(this).data('id');
                    Tree.menu.on();
                }
                if($(this).data('pattern-id')) {
                    Tree.menu.patternId = $(this).data('pattern-id');
                }
            });
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
