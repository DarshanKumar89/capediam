<?php /*%%SmartyHeaderCode:121178954573f2b02ea8457-04207907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e9879366f9b449d294698cfab7740b40b0692b9' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/router/router_list.tpl',
      1 => 1460547453,
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
    '37f6850b98bad9105bb0e2c592b93e729a4e8e55' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/router/router_list.tpl',
      1 => 1460547453,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '121178954573f2b02ea8457-04207907',
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
  'unifunc' => 'content_573f2b03086b74_74098248',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573f2b03086b74_74098248')) {function content_573f2b03086b74_74098248($_smarty_tpl) {?><!DOCTYPE html>
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
#bitList tbody > tr > td {
    cursor: row-resize;
}
#createRoute .panel-footer {
    display: none;
}
.badge {
    position: relative;
    top: -3px;
    left: 5px;
}
ul.list-inline.additional-text {
    display: inline-block;
    float: right;
    min-width: 600px;
    margin: 2.5px 0 0 30px;
}
ul.list-inline.additional-text > li > span.txt {
    position: relative;
    top: -2px;
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
.circle-indicator.purple {
    background: #410067;
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
                    
<li class="active">
    <a href="cpanel/router" title="Router">
        Router    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-map-signs"></i>&nbsp;
            ROUTER&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 15px;">
    <div class="col-lg-12">
        <form action="cpanel/router/create-route" method="post" role="form">
            <div id="createRoute" class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                         CREATE ROUTE                    </h3>
                    <div class="form-group pull-left" style="width:200px;margin-left: 15px;">                                       
                        <select id="ruleList" name="rule-id" class="form-control select">
                            <option value="0">Vyberte...</option>
                            <option value="1">DIRECT</option>
                            <option value="2">REWRITE</option>
                            <option value="3">REDIRECT</option>
                            <option value="4">FORWARD</option>
                            <option value="5">KEY</option>
                            <option value="6">SCHEMA</option>
                        </select>
                    </div>
                </div><!-- end panel-header -->
                <div class="panel-body panel-body-form"><!-- --></div><!-- end panel-body -->
                <div class="panel-footer">                                 
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                    </button>
                </div><!-- end panel-footer -->
            </div><!-- end panel -->
        </form>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <form action="cpanel/router/update-all" method="post" role="form">
            <div class="panel panel-default">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        ROUTE LIST                        &nbsp;<span class="badge">Zobrazených 1-10 z 598 záznamov</span>
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="cpanel/router/1/10/1" style="background-color:#000;color:#fff;" title="DIRECT">
                                <i class="fa fa-bullseye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="cpanel/router/1/10/2" style="background-color:#3fbae4;color:#fff;" title="REWRITE">
                                <i class="fa fa-bullseye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="cpanel/router/1/10/3" style="background-color:#fea223;color:#fff;" title="REDIRECT">
                                <i class="fa fa-bullseye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="cpanel/router/1/10/4" style="background-color:#95b75d;color:#fff;" title="FORWARD">
                                <i class="fa fa-bullseye"></i>
                            </a>
                        </li>                          
                        <li>
                            <a href="cpanel/router/1/10/5" style="background-color:#b64645;color:#fff;" title="KEY">
                                <i class="fa fa-bullseye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="cpanel/router/1/10/6" style="background-color:#410067;color:#fff;" title="SCHEMA">
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
                                    <select class="form-control select" onchange="location = 'cpanel/router/1/'+this.options[this.selectedIndex].value+'/'+0;" required="">
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
                                            <button type="button" onclick="location = 'cpanel/router/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/router/0/10?q="onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/router/1/10?q=">1</a></li><li class=""><a href="cpanel/router/2/10?q=">2</a></li><li class=""><a href="cpanel/router/3/10?q=">3</a></li><li class=""><a href="cpanel/router/4/10?q=">4</a></li><li class=""><a href="cpanel/router/5/10?q=">5</a></li><li class=""><a href="cpanel/router/6/10?q=">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/router/60/10?q=">60</a></li><li class=""><a href="cpanel/router/2/10?q="><i class="fa fa-angle-right"></i></a></li></ul>
                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="statusList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="25" class="text-center">
                                            #
                                        </th>
                                        <th width="80" class="text-center">
                                            RULE                                        </th>
                                        <th width="120" class="text-center">
                                            REQUEST METHOD                                        </th>
                                        <th class="text-center">
                                            PARAM KEY                                        </th>
                                        <th class="text-center">
                                            REDIRECT URL                                        </th>
                                        <th style="min-width: 150px;" class="text-center">
                                            PATH                                        </th>
                                        <th width="200" class="text-center">
                                            CONTROLLER                                        </th>
                                        <th width="200" class="text-center">
                                            METHOD                                        </th>
                                        <th width="80" class="text-center">
                                            PRIORITY                                        </th>
                                        <th width="100" class="text-center">
                                            AKTÍVNA                                        </th>
                                        <th width="100" class="text-center">
                                            ODSTRÁNIŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                                                           <tr style="border-left: 3px solid #000;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[0]['route-id']" value="1"/>
                                                1
                                            </td>
                                            <td class="text-center">
                                                <strong>DIRECT</strong>                                                                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                <strong>GET</strong>                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/run" target="__blank">
                                                    http://carpedmfashion.local/cpanel/run                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>run</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                100
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[0]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[0]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #000;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[1]['route-id']" value="5"/>
                                                2
                                            </td>
                                            <td class="text-center">
                                                <strong>DIRECT</strong>                                                                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                <strong>GET</strong>                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/router" target="__blank">
                                                    http://carpedmfashion.local/cpanel/router                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>router</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                100
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[1]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[1]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #410067;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[2]['route-id']" value="13"/>
                                                3
                                            </td>
                                            <td class="text-center">
                                                                                                                                                                                                                                                                                                <strong>SCHEMA</strong>                                            </td>
                                            <td class="text-center">
                                                                                                <strong>POST</strong>                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/router/update-all" target="__blank">
                                                    http://carpedmfashion.local/cpanel/router/update-all                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>updateRouteList</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[2]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[2]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #410067;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[3]['route-id']" value="14"/>
                                                4
                                            </td>
                                            <td class="text-center">
                                                                                                                                                                                                                                                                                                <strong>SCHEMA</strong>                                            </td>
                                            <td class="text-center">
                                                                                                <strong>POST</strong>                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/router/create-route" target="__blank">
                                                    http://carpedmfashion.local/cpanel/router/create-route                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>createRoute</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[3]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[3]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #410067;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[4]['route-id']" value="15"/>
                                                5
                                            </td>
                                            <td class="text-center">
                                                                                                                                                                                                                                                                                                <strong>SCHEMA</strong>                                            </td>
                                            <td class="text-center">
                                                                                                <strong>POST</strong>                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/router/add-schema-bit-row" target="__blank">
                                                    http://carpedmfashion.local/cpanel/router/add-schema-bit-row                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>addSchemaBitRow</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[4]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[4]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #410067;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[5]['route-id']" value="18"/>
                                                6
                                            </td>
                                            <td class="text-center">
                                                                                                                                                                                                                                                                                                <strong>SCHEMA</strong>                                            </td>
                                            <td class="text-center">
                                                                                                <strong>POST</strong>                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/router/class-methods" target="__blank">
                                                    http://carpedmfashion.local/cpanel/router/class-methods                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>routerClassMethods</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[5]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[5]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #410067;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[6]['route-id']" value="19"/>
                                                7
                                            </td>
                                            <td class="text-center">
                                                                                                                                                                                                                                                                                                <strong>SCHEMA</strong>                                            </td>
                                            <td class="text-center">
                                                                                                <strong>POST</strong>                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/router/forms" target="__blank">
                                                    http://carpedmfashion.local/cpanel/router/forms                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>routerForms</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[6]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[6]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #000;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[7]['route-id']" value="20"/>
                                                8
                                            </td>
                                            <td class="text-center">
                                                <strong>DIRECT</strong>                                                                                                                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                <strong>GET</strong>                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/sign" target="__blank">
                                                    http://carpedmfashion.local/cpanel/sign                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>sign</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                100
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[7]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[7]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #410067;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[8]['route-id']" value="21"/>
                                                9
                                            </td>
                                            <td class="text-center">
                                                                                                                                                                                                                                                                                                <strong>SCHEMA</strong>                                            </td>
                                            <td class="text-center">
                                                                                                <strong>POST</strong>                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/sign/in" target="__blank">
                                                    http://carpedmfashion.local/cpanel/sign/in                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>singin</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[8]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[8]['remove']" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                                                           <tr style="border-left: 3px solid #410067;">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="routeList[9]['route-id']" value="22"/>
                                                10
                                            </td>
                                            <td class="text-center">
                                                                                                                                                                                                                                                                                                <strong>SCHEMA</strong>                                            </td>
                                            <td class="text-center">
                                                <strong>GET</strong>                                                                                                                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                <a href="http://carpedmfashion.local/cpanel/sign/out" target="__blank">
                                                    http://carpedmfashion.local/cpanel/sign/out                                                </a>
                                            </td>
                                            <td class="text-left">
                                                                                                    <strong>cpanel</strong>
                                                                                            </td>
                                            <td class="text-left">
                                                                                                   <strong>signout</strong>
                                                                                            </td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[9]['active']" checked="" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="routeList[9]['remove']" value="1">
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
                            <span class="txt">DIRECT</span>                              
                        </li>
                        <li>
                            <span class="circle-indicator blue">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li>
                            <span class="txt">REWRITE</span>                        
                        </li>
                        <li>
                            <span class="circle-indicator orange">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li>
                            <span class="txt">REDIRECT</span>                               
                        </li>
                        <li>
                            <span class="circle-indicator green">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li>
                            <span class="txt">FORWARD</span>              
                        </li>
                        <li>
                            <span class="circle-indicator red">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li>
                            <span class="txt">KEY</span>             
                        </li>
                        <li>
                            <span class="circle-indicator purple">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li>
                            <span class="txt">SCHEMA</span>           
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
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript">
$(function() {
    $('#ruleList').on('change',function() {
        var ruleId = parseInt($(this).val());

        if(ruleId !== 0) {
            $.ajax({
                url: 'cpanel/router/forms',
                type: 'POST',
                data: { formId: ruleId },
                success: function(html) {
                    $('#createRoute').find('.panel-body').empty().html(html);
                    $('#createRoute').find('.panel-footer').show();
                },
                error: function(err) {
                    console.log(err);
                },
                dataType: 'HTML'
            });
        } else {
            $('#createRoute').find('.panel-body').empty();
            $('#createRoute').find('.panel-footer').hide();
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
