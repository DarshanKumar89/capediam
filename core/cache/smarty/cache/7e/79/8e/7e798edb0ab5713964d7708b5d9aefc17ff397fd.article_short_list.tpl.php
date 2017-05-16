<?php /*%%SmartyHeaderCode:1441362022574304c587ed29-52082118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf28169c949430a98c41a1cfbb46fcd3e47e88f' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/article/list/article_short_list.tpl',
      1 => 1460547458,
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
    '7e798edb0ab5713964d7708b5d9aefc17ff397fd' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/article/list/article_short_list.tpl',
      1 => 1460547458,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1441362022574304c587ed29-52082118',
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
  'unifunc' => 'content_574304c59cbba1_65373077',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574304c59cbba1_65373077')) {function content_574304c59cbba1_65373077($_smarty_tpl) {?><!DOCTYPE html>
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
                            <a href="/cpanel/store/catalog/article/export-images" class="btn btn-default" role="menuitem" title="Export Images">
                    <i class="fa fa-download"></i>
                    <span>Export Images</span>
                </a>
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
                            <div class="widget-big-int num-count">265</div>
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
                            <div class="widget-big-int num-count">265</div>
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
                            <div class="widget-big-int num-count">113.638.00&euro;</div>
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
                            <div class="widget-big-int"><span class="num-count">97</span>%</div>
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
                            <div class="widget-big-int"><span class="num-count">43</span>%</div>
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
                        ZOZNAM ARTIKLOV&nbsp;<span class="badge">Zobrazených 1-10 z 15 záznamov</span>
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
                              <select class="form-control select" onchange="location = 'cpanel/store/catalog/articles/short/0/1/'+this.options[this.selectedIndex].value+'?q=rustle ego';">
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
                                <input type="text" id="search" value="rustle ego" placeholder="Hladať" class="form-control">
                                <span class="input-group-btn">
                                    <button type="button" onclick="location = 'cpanel/store/catalog/articles/short/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                              </div>
                            </div>
                            <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/catalog/articles/short/0/0/10?q=rustle ego"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/catalog/articles/short/0/1/10?q=rustle ego">1</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/2/10?q=rustle ego">2</a></li><li class=""><a href="cpanel/store/catalog/articles/short/0/2/10?q=rustle ego"><i class="fa fa-angle-right"></i></a></li></ul>
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
                                                                                    <th width="100" class="text-center">
                                                ODSTRÁNIŤ                                            </th>
                                                                            </tr>
                                </thead>
                                <tbody>                                            
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[0]['article-id']" value="49"/>
                                                49
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/adcd8ba920e9b73b933c83b594ce60de.png" height="35" alt="ELECTION 2_5"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100049
                                            </td>
                                            <td class="text-left">
                                                ELECTION 2
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                60&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                8&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/49" class="btn btn-info" style="padding:7px;border-radius:100%;" title="ELECTION 2">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[0]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[0]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[1]['article-id']" value="50"/>
                                                50
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/af89ad7c7422e12b6286fcf550afbb07.png" height="35" alt="WARY_0"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100050
                                            </td>
                                            <td class="text-left">
                                                WARY
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                40&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                1&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/50" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WARY">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[1]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[1]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[2]['article-id']" value="51"/>
                                                51
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/199a95c379837a9cc1284faf61e580ea.png" height="35" alt="NIGHT WARRIOR_1"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100051
                                            </td>
                                            <td class="text-left">
                                                NIGHT WARRIOR
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                70&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                6&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/51" class="btn btn-info" style="padding:7px;border-radius:100%;" title="NIGHT WARRIOR">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[2]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[2]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[3]['article-id']" value="52"/>
                                                52
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/56ed0b3d221d86fcff4c453ef0e91be6.png" height="35" alt="RED WARRIOR_2"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100052
                                            </td>
                                            <td class="text-left">
                                                RED WARRIOR
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                90&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                3&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/52" class="btn btn-info" style="padding:7px;border-radius:100%;" title="RED WARRIOR">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[3]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[3]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[4]['article-id']" value="53"/>
                                                53
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/72d6b565d7cd8c2842dab1e30ddfb325.png" height="35" alt="KNOW_1"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100053
                                            </td>
                                            <td class="text-left">
                                                KNOW
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                36&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                10&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/53" class="btn btn-info" style="padding:7px;border-radius:100%;" title="KNOW">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[4]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[4]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[5]['article-id']" value="61"/>
                                                61
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/7e845eb9e36a34ea3b10b01f8650f847.png" height="35" alt="PATRON_7"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100061
                                            </td>
                                            <td class="text-left">
                                                PATRON
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                90&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                10&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/61" class="btn btn-info" style="padding:7px;border-radius:100%;" title="PATRON">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[5]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[5]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[6]['article-id']" value="62"/>
                                                62
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/b3d82539015fbe5abc2c42ba46f2fcf6.png" height="35" alt="WARRANT_0"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100062
                                            </td>
                                            <td class="text-left">
                                                WARRANT
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                210&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                5&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/62" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WARRANT">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[6]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[6]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[7]['article-id']" value="63"/>
                                                63
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="/files/e467e8b7d07d435f284fd744cba94c5c.jpg" height="35" alt="DSC07148"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100063
                                            </td>
                                            <td class="text-left">
                                                RUSTLE EGO
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                120&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                8&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/63" class="btn btn-info" style="padding:7px;border-radius:100%;" title="RUSTLE EGO">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[7]['enable']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[7]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[8]['article-id']" value="64"/>
                                                64
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/0d1745d7fd96ad8d318083d597347afa.png" height="35" alt="ELECTION_5"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100064
                                            </td>
                                            <td class="text-left">
                                                ELECTION
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                40&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                10&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/64" class="btn btn-info" style="padding:7px;border-radius:100%;" title="ELECTION">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[8]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[8]['remove']" value="1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                                                    </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="articles[9]['article-id']" value="65"/>
                                                65
                                            </td>
                                            <td class="text-center">
                                                                                                    <img src="files/6ba3e5e5e45ec7a67cc390a12a18859f.png" height="35" alt="TOSS EGO_0"/>
                                                                                            </td>
                                            <td class="text-center">
                                                100065
                                            </td>
                                            <td class="text-left">
                                                TOSS EGO
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                80&nbsp;&euro;
                                            </td>
                                            <td class="text-right" style="font-weight:700;color:#000;">
                                                10&nbsp;<strong>ks</strong>
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/store/catalog/article/edit/65" class="btn btn-info" style="padding:7px;border-radius:100%;" title="TOSS EGO">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="articles[9]['enable']" value="1" >
                                                    <span></span>
                                                </label>
                                            </td>
                                                                                            <td class="text-center">
                                                    <label class="switch">
                                                        <input type="checkbox" name="articles[9]['remove']" value="1">
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
