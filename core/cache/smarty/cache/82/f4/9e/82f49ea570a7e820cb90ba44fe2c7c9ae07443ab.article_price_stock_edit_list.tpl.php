<?php /*%%SmartyHeaderCode:53490711857c911e22478a0-48649426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0011eab9f69433e65c01e45ab4a0c65673e3701f' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/list/article_price_stock_edit_list.tpl',
      1 => 1469707238,
      2 => 'file',
    ),
    '2348aeb5e8989dd42b1116d7d8b299e32f80f818' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1470836096,
      2 => 'file',
    ),
    'bc141a49c252a4eeea1dde78a0f97783d71068f6' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469707230,
      2 => 'file',
    ),
    '82f49ea570a7e820cb90ba44fe2c7c9ae07443ab' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/list/article_price_stock_edit_list.tpl',
      1 => 1469707238,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '53490711857c911e22478a0-48649426',
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
  'unifunc' => 'content_57c911e29b59a6_37733207',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c911e29b59a6_37733207')) {function content_57c911e29b59a6_37733207($_smarty_tpl) {?><!DOCTYPE html>
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
#ig-info > .input-group-addon {
    background-color: #3fbae4;
    border-color: #3fbae4;
}
#ig-success > .input-group-addon {
    background-color: #95b75d;
    border-color: #95b75d;
}
#ig-warning > .input-group-addon {
    background-color: #fea223;
    border-color: #fea223;
}
#ig-default > .input-group-addon {
    background-color: brown;
    border-color: brown;
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
    <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
      <i class="fa fa-circle-o-notch"></i>
      Discount circuits    </a>
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
    <h2>
        Artikle        &nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-info" role="alert">
            <strong>UPOZORENIE:</strong>
            <span>&nbsp;V prípade, že artikel má definované daňové pravidlo možete zadat základnú cenu alebo maloobchodnú cenu <span style="color:red;">(vrátane dph)</span> system automaticky prepočítava hodnoty.</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="cpanel/store/catalog/article/update-all" method="post" role="form">
            <input type="hidden" name="update-type" value="2"/>
            <div class="panel panel-default">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        ZOZNAM ARTIKLOV&nbsp;<span class="badge">Zobrazených 1-10 z 280 záznamov
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="cpanel/store/catalog/articles/short" title="Article short list">
                                <i class="fa fa-list-ul"></i>
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
                    <div class="row" style="margin: 15px 0;">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                        <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                          <select class="form-control select" onchange="location = 'cpanel/store/catalog/articles/price-stock/'+this.options[this.selectedIndex].value+'/1/10';">
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
                          <select class="form-control select" onchange="location = 'cpanel/store/catalog/articles/price-stock/0/1/'+this.options[this.selectedIndex].value;">
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
                                <button type="button" onclick="location = 'cpanel/store/catalog/articles/price-stock/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                          </div>
                        </div>
                        <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store/catalog/articles/price-stock/0/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store/catalog/articles/price-stock/0/1/10">1</a></li><li class=""><a href="cpanel/store/catalog/articles/price-stock/0/2/10">2</a></li><li class=""><a href="cpanel/store/catalog/articles/price-stock/0/3/10">3</a></li><li class=""><a href="cpanel/store/catalog/articles/price-stock/0/4/10">4</a></li><li class=""><a href="cpanel/store/catalog/articles/price-stock/0/5/10">5</a></li><li class=""><a href="cpanel/store/catalog/articles/price-stock/0/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/store/catalog/articles/price-stock/0/28/10">28</a></li><li class=""><a href="cpanel/store/catalog/articles/price-stock/0/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                      </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                        <table id="articleList" class="table table-bordered table-striped table-actions table-fixed">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">#</th>
                                    <th width="30" class="text-center">
                                        OBRÁZOK                                    </th>
                                    <th width="200" class="text-center">
                                        SKU                                    </th>
                                    <th width="400" class="text-left">
                                        NÁZOV ARTIKLU                                    </th>
                                    <th width="80" class="text-right">
                                        VEĽKOOBCHODNÁ CENA (PRED ZDANENÍM)                                    </th>
                                    <th width="80" class="text-right">
                                        ZÁKLADNÁ CENA                                    </th>
                                    <th width="80" class="text-right">
                                        MALOOBCHODNÁ CENA                                    </th>
                                    <th width="80" class="text-right">
                                        DAŇ                                    </th>
                                    <th width="80" class="text-right">
                                        MNOŽSTVO (KS)                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[0]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[0]['retail-price']" value="48.33" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[0]['retail-tax-price']" value="58.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[0]['tax-id']" value="1"/>
                                                    <input type="text" value="9.67" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[0]['qty']" value="10" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[1]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[1]['retail-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[1]['retail-tax-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[1]['tax-id']" value="1"/>
                                                    <input type="text" value="0" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[1]['qty']" value="0" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[2]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[2]['retail-price']" value="48.33" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[2]['retail-tax-price']" value="58.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[2]['tax-id']" value="1"/>
                                                    <input type="text" value="9.67" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[2]['qty']" value="4" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[3]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[3]['retail-price']" value="33.33" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[3]['retail-tax-price']" value="40.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[3]['tax-id']" value="1"/>
                                                    <input type="text" value="6.67" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[3]['qty']" value="6" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[4]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[4]['retail-price']" value="38.33" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[4]['retail-tax-price']" value="46.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[4]['tax-id']" value="1"/>
                                                    <input type="text" value="7.67" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[4]['qty']" value="14" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
                                        <td class="text-center" style="font-weight:700;color:#660000;">
                                            <input type="hidden" name="articles[5]['article-id']" value="6"/>
                                            6
                                        </td>
                                        <td class="text-center">
                                                                                            <img src="files/d18bb601584fd3625c3b0e603ed90bb9.png" height="35" alt="STAND PANTS WOMAN_0"/>
                                                                                    </td>
                                        <td class="text-center">
                                            100006
                                        </td>
                                        <td class="text-left">
                                            STAND WOMAN
                                        </td>
                                       <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[5]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[5]['retail-price']" value="40.16" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[5]['retail-tax-price']" value="49.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[5]['tax-id']" value="2"/>
                                                    <input type="text" value="8.84" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[5]['qty']" value="6" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[6]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[6]['retail-price']" value="20.83" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[6]['retail-tax-price']" value="46.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[6]['tax-id']" value="1"/>
                                                    <input type="text" value="7.67" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[6]['qty']" value="25" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[7]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[7]['retail-price']" value="69.67" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[7]['retail-tax-price']" value="85.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[7]['tax-id']" value="2"/>
                                                    <input type="text" value="15.33" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[7]['qty']" value="4" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[8]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[8]['retail-price']" value="58.33" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[8]['retail-tax-price']" value="70.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[8]['tax-id']" value="1"/>
                                                    <input type="text" value="11.67" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[8]['qty']" value="11" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                                    <tr style="border-bottom:2px solid ;border-left: 2px solid ;">
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
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-info" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[9]['wholesale-price']" value="0.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-success" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[9]['retail-price']" value="59.02" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-warning" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="text"  name="articles[9]['retail-tax-price']" value="72.00" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div id="ig-default" class="input-group">
                                                    <span class="input-group-addon">&euro;</span>
                                                    <input type="hidden" name="articles[9]['tax-id']" value="2"/>
                                                    <input type="text" value="12.98" class="form-control text-right" disabled>
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right" style="font-weight:700;color:#000;">
                                            <div class="form-group pull-right" style="width:153px;">
                                                <div class="input-group">
                                                    <span class="input-group-addon">ks</span>
                                                    <input type="text"  name="articles[9]['qty']" value="23" class="form-control text-right">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
                </div><!-- end panel-body -->
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success" role="button">
                        <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                    </button>
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
