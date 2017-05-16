<?php /*%%SmartyHeaderCode:12205191225890893fdaf647-09668811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb7270bce2fa0ac60f36530a0ce03b404285729' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/list/article_short_list.tpl',
      1 => 1469707238,
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
    'd3bcd0cd2dcc3a2faa88e4ce68510f851978834a' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/list/article_short_list.tpl',
      1 => 1469707238,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '12205191225890893fdaf647-09668811',
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
  'unifunc' => 'content_589089407e9aa5_82961162',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589089407e9aa5_82961162')) {function content_589089407e9aa5_82961162($_smarty_tpl) {?><!DOCTYPE html>
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
.widget .widget-title {
    font-size: 12px;
}
.badge {
    position: relative;
    top: -2px;
    left: 5px;
    padding: 3.5px 9.7px;
    font-size: 11px;
    letter-spacing: .7px;
    font-weight: 100;
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
.circle-indicator > i {
    position: relative;
    top: -1px;
    left: .5px;
    font-size: 1.3em;
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
.fix-panel,
.fix-table {
    min-width: 840px;
}

@media (min-width: 768px) {


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
    <a href="#" onclick="return false;" title="KATALÓG">
        Katalóg    </a>
</li>
<li class="active">
    <a href="cpanel/store/catalog/articles" title="Artikle">
        Artikle    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>Artikle&nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span></h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 25px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create-article" role="menuitem">
                <i class="fa fa-plus"></i>
                <span>Nový artikel</span>
            </button>
                    </div>
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
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-info widget-item-icon widget-padding-sm">                            
                        <div class="widget-item-left">
                            <span class="fa fa-database"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-title">Celkový počet artiklov na sklade</div>
                            <div class="widget-big-int num-count">342</div>
                        </div>                                                        
                    </div> 
                </div><!-- end col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-success widget-item-icon widget-padding-sm">                            
                        <div class="widget-item-left">
                            <span class="fa fa-database"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-title">Celkom produktov na sklade</div>
                            <div class="widget-big-int num-count">342</div>
                        </div>                                                        
                    </div> 
                </div><!-- end col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-warning widget-item-icon widget-padding-sm">                            
                        <div class="widget-item-left">
                            <span class="fa fa-database"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-title">Celková hodnota produktov na sklade</div>
                            <div class="widget-big-int num-count">149.933.00&euro;</div>
                        </div>                                                       
                    </div> 
                </div><!-- end col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-danger widget-padding-sm">                            
                        <div class="widget-item-left">
                            <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0%" data-readOnly="true" data-thickness=".2"/>
                        </div>
                        <div class="widget-data">
                            <div class="widget-big-int"><span class="num-count">0</span>%</div>
                            <div class="widget-title">Predaných produktov</div>                              
                        </div>                                                      
                    </div> 
                </div><!-- end col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-primary widget-padding-sm">                            
                        <div class="widget-item-left">
                            <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0%" data-readOnly="true" data-thickness=".2"/>
                        </div>
                        <div class="widget-data">
                            <div class="widget-big-int"><span class="num-count">98</span>%</div>
                            <div class="widget-title">Priemerná hrubá marža</div>                               
                        </div>                                                      
                    </div> 
                </div><!-- end col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-default widget-padding-sm">                            
                        <div class="widget-item-left">
                            <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="0%" data-readOnly="true" data-thickness=".2"/>
                        </div>
                        <div class="widget-data">
                            <div class="widget-big-int"><span class="num-count">35</span>%</div>
                            <div class="widget-title">Vypnuté artikle</div>                              
                        </div>                                                      
                    </div> 
                </div><!-- end col -->
            </div><!-- end panel-body -->
        </div><!-- end panel -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row" style="display:none;">
    <div class="col-lg-12">
        <div class="panel panel-default panel-toggled">
            <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">Filter by categories</h3>
                <ul class="panel-controls">
                  <li>
                    <a href="#" onclick="return false;" class="panel-collapse">
                        <span class="fa fa-angle-down"></span>
                    </a>
                  </li>
                </ul>                                
            </div>
            <div class="panel-body">
                
            </div>
        </div><!-- end panel -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
                    <form action="cpanel/store/catalog/article/update-all" method="post" role="form">
                <input type="hidden" name="update-type" value="1"/>
                <div class="panel panel-default fix-panel">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                        ZOZNAM ARTIKLOV&nbsp;<span class="badge">Zobrazených 1-10 z 342 záznamov</span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="cpanel/store/catalog/articles/price-stock" title="Price and Stock">
                                    <i class="fa fa-usd"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/catalog/articles/long" title="Article long list">
                                    <i class="fa fa-list"></i>
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
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                            <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                              <select class="form-control select" onchange="location = 'cpanel/store/catalog/articles/short/'+this.options[this.selectedIndex].value+'/1/10';">
                                <option value="0" selected>Možnosťi zoradenia...</option>
                                <option value="1" >Názov produktu: od A po Z</option>
                                <option value="2" >Názov produktu: od Z po A</option>
                                <option value="3" >Ceny: od najnižšej</option>
                                <option value="4" >Ceny: od najvyššej</option>
                                <option value="5" >Pridané produkty: vzostupne</option>
                                <option value="6" >Pridané produkty: zostupne</option>
                                <option value="7" >Publikované</option>
                                <option value="8" >Nepublikované</option>
                              </select>
                            </div>
                            <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                              <select class="form-control select" onchange="location = 'cpanel/store/catalog/articles/short/0/1/'+this.options[this.selectedIndex].value;">
                                <option value="10" selected>10</option>
                                <option value="20" >20</option>
                                <option value="50" >50</option>
                                <option value="100" >100</option>
                                <option value="200" >200</option>
                                <option value="500" >500</option>
                              </select>
                            </div>
                            <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                              <div class="input-group">
                                <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                                <span class="input-group-btn">
                                    <button type="button" onclick="location = 'cpanel/store/catalog/articles/short/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                              </div>
                            </div>
                            <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/catalog/articles/short/0/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/catalog/articles/short/0/1/10">1</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/2/10">2</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/3/10">3</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/4/10">4</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/5/10">5</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store/catalog/articles/short/0/35/10">35</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                          </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="fix-table" style="border-top:1px solid #E5E5E5;">
                            <table id="articleList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="25" class="text-center">ID</th>
                                        <th width="30" class="text-center">
                                            OBRÁZOK                                        </th>
                                        <th width="100" class="text-center">
                                            SKU                                        </th>
                                        <th class="text-left">
                                            NÁZOV ARTIKLU                                        </th>
                                        <th width="80" class="text-right">
                                            CENA                                        </th>
                                        <th width="50" class="text-right">
                                            MNOŽSTVO (KS)                                        </th>
                                        <th width="50" class="text-center">
                                            EDITOVAŤ                                        </th>
                                        <th width="100" class="text-center">
                                            ZVEREJNIŤ                                        </th>
                                                                            </tr>
                                </thead>
                                <tbody>                                            
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[0]['article-id']" value="1"/>
                                                1
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/3f96609759809db2d8a0dedc99e85c1a.png" height="35" alt="WANT HOODIE_4"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100001
                                            </td>
                                            <td class="text-left">
                                                WANT HOODIE
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                58&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                10&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/1" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WANT HOODIE">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[0]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[1]['article-id']" value="2"/>
                                                2
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
                                                WANT
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                0&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                0&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/2" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WANT">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[1]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[2]['article-id']" value="3"/>
                                                3
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
                                                WANT HOODIE VELOUR
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                58&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                4&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/3" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WANT HOODIE VELOUR">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[2]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[3]['article-id']" value="4"/>
                                                4
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
                                                WANT VELOUR
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                40&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                6&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/4" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WANT VELOUR">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[3]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[4]['article-id']" value="5"/>
                                                5
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/e9bab8dc55945df01decdb0e8d16fd5e.jpg" height="35" alt="DSC07123_u2"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100005
                                            </td>
                                            <td class="text-left">
                                                ACT
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                46&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                14&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/5" class="btn btn-info" style="padding:7px;border-radius:100%;" title="ACT">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[4]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[5]['article-id']" value="6"/>
                                                6
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/593d1300b5770f7259ca087ba248f62e.jpg" height="35" alt="Stand woman pants9"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100006
                                            </td>
                                            <td class="text-left">
                                                STAND WOMAN
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                39&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                6&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/6" class="btn btn-info" style="padding:7px;border-radius:100%;" title="STAND WOMAN">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[5]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[6]['article-id']" value="7"/>
                                                7
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/0725b5bba3a7c39503fdb7481f3aa361.jpg" height="35" alt="DSC06521_u"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100007
                                            </td>
                                            <td class="text-left">
                                                WILD
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                46&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                25&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/7" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WILD">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[6]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[7]['article-id']" value="8"/>
                                                8
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/a7be1f476b7cb281d6c5c3b700d44600.jpg" height="35" alt="DSC06437_u2"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100008
                                            </td>
                                            <td class="text-left">
                                                WILD JEANS
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                54&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                4&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/8" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WILD JEANS">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[7]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[8]['article-id']" value="9"/>
                                                9
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/b36252689109297a41b338394c31c270.png" height="35" alt="VAGABOND JACKET WOMAN_0"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100009
                                            </td>
                                            <td class="text-left">
                                                VAGABOND HOODIE WOMAN
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                70&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                11&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/9" class="btn btn-info" style="padding:7px;border-radius:100%;" title="VAGABOND HOODIE WOMAN">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[8]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[9]['article-id']" value="10"/>
                                                10
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/2f8dade3a129c8d771986c4931e2af17.jpg" height="35" alt="DSC06420_u2"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100010
                                            </td>
                                            <td class="text-left">
                                                TEMPTER WOMAN
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                46&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                23&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/10" class="btn btn-info" style="padding:7px;border-radius:100%;" title="TEMPTER WOMAN">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[9]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                    </tr>
                                                                    </tbody>
                            </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success" role="button">
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
        
<!-- MODAL WINDOW CREATE ARTICLE -->                       
<div class="modal" id="create-article" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="createArticleForm" action="cpanel/store/catalog/article/create" method="post" role="form">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            NOVÝ ARTIKEL                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>
                                            NÁZOV ARTIKLU                                        </label>
                                        <input type="text" name="article-name" value="" class="form-control" minlength="5" maxlength="150" required="">
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
<!-- //-- MODAL WINDOW CREATE ARTICLE -->

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
<script type="text/javascript" src="extensions/cpanel/js/plugins/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript">
    var jvalidate = $("#createArticleForm").validate({
        ignore: [],
        rules: {                                            
            'article-name': {
                required: true,
                minlength: 3,
                maxlength: 150
            }
        }                                        
    });
    
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
