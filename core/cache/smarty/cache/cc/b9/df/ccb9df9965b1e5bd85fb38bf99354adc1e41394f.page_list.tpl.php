<?php /*%%SmartyHeaderCode:906486433573a224a107074-48650947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5d12c559331ce86554ce53dae9c2083ce7f05e9' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/page/page_list.tpl',
      1 => 1460547451,
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
    'ccb9df9965b1e5bd85fb38bf99354adc1e41394f' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/page/page_list.tpl',
      1 => 1460547451,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '906486433573a224a107074-48650947',
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
  'unifunc' => 'content_573a224a21aca0_67989816',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a224a21aca0_67989816')) {function content_573a224a21aca0_67989816($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/pages.css"/>

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
    <a href="cpanel/page-list" title="Stránky">
        Stránky    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-file-text"></i>&nbsp;
            Stránky&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 15px;">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="btn-group pull-left" role="group">
            <button type="button" class="btn btn-info text-uppercase mb-control" data-box="#message-box-create-page">
                VYTVORIŤ STRÁNKU            </button>
            <button type="button" class="btn btn-primary text-uppercase mb-control" data-box="#message-box-create-page-list">
                VYTVORIŤ ZOZNAM            </button>
        </div>
        <div class="btn-group pull-right" role="group">
            <a href="cpanel/page-list" class="btn btn-default" title="list">
                <i class="fa fa-list"></i>
            </a>
            <a href="cpanel/page-list-table" class="btn btn-default" title="list">
                <i class="fa fa-list-alt"></i>
            </a>
            <a href="cpanel/page-list-by-site-structure" class="btn btn-default" title="boxes">
               <span class="fa fa-sitemap"></span>
            </a>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
                    <form action="cpanel/update-all-pages" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i>&nbsp;
                            ZOZNAM STRÁNOK&nbsp;
                            <span class="btn btn-info" style="margin: 0 15px;">12</span>
                            <span class="badge">Zobrazených 1-50 z 12 záznamov</span>
                        </h3>                               
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="row">
                            <div class="col-lg-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                                  <select class="form-control select" onchange="location = 'cpanel/page-list/1/50/'+this.options[this.selectedIndex].value;">
                                      <option value="0">Triedenie</option>
                                      <option value="77" >
                                          Zoradiť od A po Z.
                                      </option>
                                      <option value="66" >
                                          Zoradiť od Z po A
                                      </option>
                                      <option value="55" >
                                          Zoradiť od najstaršieho po najnovšie.
                                      </option>
                                      <option value="44" >
                                          Zoradiť od najnovšieho po najstaršie
                                      </option>
                                  </select>
                                </div>
                                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                    <select class="form-control select" onchange="location = 'cpanel/page-list/1/'+this.options[this.selectedIndex].value;">
                                        <option value="10" >10</option>
                                        <option value="20" >20</option>
                                        <option value="50" selected>50</option>
                                        <option value="100" >100</option>
                                        <option value="200" >200</option>
                                        <option value="500" >500</option>
                                    </select>
                                </div>
                                <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                                    <div class="input-group">
                                        <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" onclick="location = 'cpanel/page-list/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/page-list/0/50?q="onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/page-list/1/50?q=">1</a></li><li class="disabled"><a href="cpanel/page-list/2/50?q="onclick="return false;"><i class="fa fa-angle-right"></i></a></li></ul>
                            </div>
                        </div><!-- end row -->  
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th width="70" class="text-center">#</th>
                                        <th width="70" class="text-center">
                                            OBRÁZOK POZADIA STRÁNKY                                        </th>
                                        <th class="text-left">
                                           NÁZOV STRÁNKY                                        </th>
                                        <th width="200" class="text-center">
                                            VLASTNÍK                                        </th>
                                        <th width="100" class="text-center">
                                            POSLEDNÁ ZMENA                                        </th>
                                        <th width="100" class="text-center">
                                            EDITOVAŤ                                        </th>
                                        <th width="100" class="text-center">
                                            PUBLIKOVAŤ                                        </th>
                                        <th width="100" class="text-center">
                                            VYMAZAŤ                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[0]['page-id']" value="1"/>
                                                1
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Tabuľka veľkost&iacute;
                                            </td>
                                            <td class="text-left">
                                                Henrich&nbsp;Barkoczy
                                            </td>
                                            <td class="text-center">
                                                16-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/1" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="Tabuľka veľkost&iacute;">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[0]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[0]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[1]['page-id']" value="2"/>
                                                2
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                MAJK SPIRIT
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                13-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/2" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="MAJK SPIRIT">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[1]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[1]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[2]['page-id']" value="3"/>
                                                3
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                SANGRE NUEVA
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                13-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/3" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="SANGRE NUEVA">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[2]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[2]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[3]['page-id']" value="5"/>
                                                4
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                KOLEKCIA BLACKGREY
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                13-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/5" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="KOLEKCIA BLACKGREY">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[3]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[3]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[4]['page-id']" value="6"/>
                                                5
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S ĽADOVOU KR&Aacute;ĽOVNOU
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                16-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/6" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S ĽADOVOU KR&Aacute;ĽOVNOU">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[4]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[4]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[5]['page-id']" value="7"/>
                                                6
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                CARPE DM FASHION
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                13-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/7" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="CARPE DM FASHION">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[5]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[5]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[6]['page-id']" value="8"/>
                                                7
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                16-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/8" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[6]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[6]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[7]['page-id']" value="10"/>
                                                8
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Dodacie podmienky
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                05-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/10" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="Dodacie podmienky">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[7]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[7]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[8]['page-id']" value="11"/>
                                                9
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Kontakty
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                09-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/11" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="Kontakty">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[8]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[8]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[9]['page-id']" value="12"/>
                                                10
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Obchodn&eacute; podmienky
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                05-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/12" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="Obchodn&eacute; podmienky">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[9]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[9]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[10]['page-id']" value="13"/>
                                                11
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                O n&aacute;s
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                09-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/13" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="O n&aacute;s">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[10]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[10]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                <input type="hidden" name="pagelist[11]['page-id']" value="14"/>
                                                12
                                            </td>
                                            <td class="text-center">
                                                                                                    <span style="font-size:1.4em;color:red;">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </span>
                                                                                            </td>
                                            <td class="text-left">
                                                Z&aacute;ruka a reklamačn&yacute; poriadok
                                            </td>
                                            <td class="text-left">
                                                Alexander&nbsp;Kernasevic
                                            </td>
                                            <td class="text-center">
                                                05-05-2016
                                            </td>
                                            <td class="text-center">
                                                <a href="cpanel/page-edit/14" class="btn btn-primary" style="padding:7px;border-radius:100%;" title="Z&aacute;ruka a reklamačn&yacute; poriadok">
                                                    <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="pagelist[11]['publish']" value="1" checked="">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                     <input type="checkbox" name="pagelist[11]['remove']" value="1">
                                                     <span></span>
                                                 </label>
                                            </td>
                                        </tr>
                                                                    </tbody>
                             </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end pane-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">
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
        
<div class="message-box message-box-info animated fadeIn" id="message-box-create-page">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title">
                NOVÁ STRÁNKA            </div>
            <div class="mb-content">
                <div class="row">
                    <div class="col-md-12">                    
                        <form role="form" action="cpanel/create-page" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 col-xs-12 control-label">
                                    NÁZOV STRÁNKY                                </label>
                                <div class="col-md-10 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="page-name" value="" class="form-control" required>
                                    </div>                                            
                                    <span class="help-block" style="color:#000;">
                                        
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                            </button>
                            <button class="btn btn-default mb-control-close">
                                ZAVRIEŤ                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="message-box message-box-info animated fadeIn" id="message-box-create-page-list">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title">
                NOVÝ ZOZNAM STRÁNOK            </div>
            <div class="mb-content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">                    
                        <form role="form" action="cpanel/create-page-list" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-12 col-xs-12 control-label">
                                    NÁZOV ZOZNAMU                                </label>
                                <div class="col-lg-10 col-sm-12 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" name="page-list-name" value="" class="form-control" required>
                                    </div>                                            
                                    <span class="help-block" style="color:#000;">
                                        
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                            </button>
                            <button class="btn btn-default mb-control-close">
                                ZAVRIEŤ                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
