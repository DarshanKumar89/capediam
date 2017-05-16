<?php /*%%SmartyHeaderCode:17946142435888892dabdf89-53062306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4493e1315de79db25cebc63ac175a3d5026535b' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/gallery/gallery_list.tpl',
      1 => 1469707228,
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
    '5f1056ed9e334f135594f2703509b48da75c707c' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/gallery/gallery_list.tpl',
      1 => 1469707228,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '17946142435888892dabdf89-53062306',
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
  'unifunc' => 'content_5888892e45c4f2_83401981',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5888892e45c4f2_83401981')) {function content_5888892e45c4f2_83401981($_smarty_tpl) {?><!DOCTYPE html>
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
.xt {
    position: relative;
    top: -1px;
    margin-top: 0px;
    padding: 4px 10px;
    min-width: 29px;
    height: 29px;
    max-height: 29px;
    font-size: 17px;
    font-weight: 400;
    line-height: 19px;
    overflow: hidden;
}
ul.list-inline.additional-text {
    display: inline-block;
    float: right;
    min-width: 100px;
    margin: 2.5px 0 0 30px;
}
ul.panel-controls i {
    position: relative;
    top: 1.45px;
    left: .5px;
    font-size: 1.3em;
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
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Stanislava Kleinova">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Stanislava Kleinova">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">Stanislava&nbsp;Kleinova</div>
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
                    
<li class="active">
    <a href="cpanel/gallery-list" title="Galéria">
        Galéria    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
    <h2>
        <i class="fa fa-picture-o"></i>
        Galéria&nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <form action="cpanel/create-gallery" method="post" role="form">
            <div class="panel panel-default panel-toggled">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        VYTVORIŤ GALÉRIU                    </h3>  
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                            <div class="form-group">
                                <label>
                                    Názov galérie (interný)                                </label>
                                <input type="text"
                                       name="gallery-name"
                                       value=""
                                       placeholder="Názov galérie (interný)"
                                       class="form-control"
                                       required>
                            </div><!-- end form-group -->
                                                            <!-- START TABS -->
                                <div class="panel panel-default tabs" style="margin-top: 5px;">                            
                                    <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                                                                    <li >
                                                <a href="#tab-en-GB" role="tab" data-toggle="tab">
                                                    <span class="flag-icon flag-icon-en-GB"  style="width:23px;height:23px;"></span>
                                                    <span style="position: relative;top: 5.5px;left: 1.5px;">English (United Kingdom)</span>
                                                </a>
                                            </li>
                                                                                    <li >
                                                <a href="#tab-it-IT" role="tab" data-toggle="tab">
                                                    <span class="flag-icon flag-icon-it-IT"  style="width:23px;height:23px;"></span>
                                                    <span style="position: relative;top: 5.5px;left: 1.5px;">Italian (Italy)</span>
                                                </a>
                                            </li>
                                                                                    <li >
                                                <a href="#tab-sk" role="tab" data-toggle="tab">
                                                    <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                                                    <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                                                </a>
                                            </li>
                                                                            </ul>                            
                                    <div class="panel-body tab-content">
                                                                                    <div class="tab-pane " id="tab-en-GB">
                                                <div class="form-group">
                                                    <label>
                                                        Titulka galérie                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-en-GB"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="gallery-lang[51]['gallery-title']"
                                                               value=""
                                                               placeholder="Titulka galérie"
                                                               class="form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        Krátky popis                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-en-GB"></span>
                                                        </span>
                                                        <textarea name="gallery-lang[51]['gallery-desc']" class="form-control" rows="5"></textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end tab -->
                                                                                    <div class="tab-pane " id="tab-it-IT">
                                                <div class="form-group">
                                                    <label>
                                                        Titulka galérie                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-it-IT"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="gallery-lang[120]['gallery-title']"
                                                               value=""
                                                               placeholder="Titulka galérie"
                                                               class="form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        Krátky popis                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-it-IT"></span>
                                                        </span>
                                                        <textarea name="gallery-lang[120]['gallery-desc']" class="form-control" rows="5"></textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end tab -->
                                                                                    <div class="tab-pane " id="tab-sk">
                                                <div class="form-group">
                                                    <label>
                                                        Titulka galérie                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="gallery-lang[189]['gallery-title']"
                                                               value=""
                                                               placeholder="Titulka galérie"
                                                               class="form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        Krátky popis                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <textarea name="gallery-lang[189]['gallery-desc']" class="form-control" rows="5"></textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end tab -->
                                                                            </div><!-- end panel-body -->
                                </div><!-- end panel -->
                                                
                        </div><!-- end col -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <h4 style="border-bottom:1px solid #33414e;">NASTAVENIA</h4>
                            <div class="form-group">
                                <label>
                                    Vlastník                                </label>
                                <select name="owner" class="form-control select" data-live-search="true" required>
                                                                            <option value="1">Henrich&nbsp;Barkoczy</option>
                                                                            <option value="2">Alexander&nbsp;Kernasevic</option>
                                                                            <option value="3">Dobrava&nbsp;Míčka</option>
                                                                            <option value="4">Kornélia&nbsp;Dzurniková</option>
                                                                            <option value="5">Stanislava&nbsp;Kleinova</option>
                                                                            <option value="6">Neva&nbsp;Eva</option>
                                                                            <option value="7">Ladislav&nbsp;Voros</option>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Zoznam stránok                                </label>                                    
                                <select name="page-id" class="form-control select" data-live-search="true" required>
                                    <option value="0">Vyberte...</option>
                                                                            <option value="1">Tabuľka veľkost&iacute;</option>
                                                                            <option value="2">MAJK SPIRIT - BIELY PRINC</option>
                                                                            <option value="3">SANGRE NUEVA</option>
                                                                            <option value="5">KOLEKCIA BLACKGREY</option>
                                                                            <option value="6">OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S KR&Aacute;ĽOVNOU ĽADU </option>
                                                                            <option value="7">CARPE DM FASHION - PR&Iacute;BEH TALENTU A V&Aacute;&Scaron;NE</option>
                                                                            <option value="8">MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA</option>
                                                                            <option value="10">Dodacie podmienky</option>
                                                                            <option value="11">Kontakty</option>
                                                                            <option value="12">V&scaron;eobecn&eacute; obchodn&eacute; podmienky</option>
                                                                            <option value="13">O n&aacute;s</option>
                                                                            <option value="14">Z&aacute;ruka a reklamačn&yacute; poriadok</option>
                                                                            <option value="15">Balada o tepl&aacute;koch</option>
                                                                            <option value="16">TEPL&Aacute;KOV&Eacute; SPOVEDE</option>
                                                                            <option value="17">Beach Volley turnaj s CarpeDM</option>
                                                                            <option value="18">Čo ony maj&uacute; a my nie?!</option>
                                                                            <option value="19">Carpe DM d&aacute;va &scaron;ancu mlad&yacute;m</option>
                                                                            <option value="20">test</option>
                                                                    </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Typ galérie                                </label>                                     
                                <select name="type-id" class="form-control select" required>
                                        <option value="1">
                                            Obrázky                                        </option>
                                        <option value="2">
                                            Dokumenty                                        </option>
                                        <option value="3">
                                            Youtube
                                        </option>
                                        <option value="4">
                                            Vimeo
                                        </option>
                                        <option value="5">
                                            Zmiešané                                        </option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Skupina                                </label>                                     
                                <select name="group" class="form-control select" required>
                                    <option value="0">Vyberte...</option>
                                    <option value="1">Stránky</option>
                                    <option value="2">Artikel (Katalóg)</option>
                                    <option value="3">Artikel (Obchod)</option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Publikovať                                </label><br>                                
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
                        <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                    </button>
                </div><!-- end panel-footer -->
            </div><!-- end panel -->
        </form>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form action="cpanel/update-galleries" method="post" role="form">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <span class="btn btn-info pull-left xt">
              258
            </span>
            <h3 class="panel-title">
              ZOZNAM GALÉRIÍ              &nbsp;<span class="badge">Zobrazených 11-20 z 258 záznamov</span>
            </h3>  
            <ul class="panel-controls">
              <li>
                <a href="cpanel/gallery-list" style="background-color:#fff;color:#000;" title="Reset">
                  <i class="fa fa-bullseye"></i>
                </a>
              </li>
              <li>
                <a href="cpanel/gallery-list/0/1" style="background-color:#000;color:#fff;" title="Východzia">
                  <i class="fa fa-bullseye"></i>
                </a>
              </li>
              <li>
                <a href="cpanel/gallery-list/0/2" style="background-color:#3fbae4;color:#fff;" title="Stránky">
                  <i class="fa fa-bullseye"></i>
                </a>
              </li>
              <li>
                <a href="cpanel/gallery-list/0/3" style="background-color:#fea223;color:#fff;" title="Artikel (Katalóg)">
                  <i class="fa fa-bullseye"></i>
                </a>
              </li>
              <li>
                <a href="cpanel/gallery-list/0/4" style="background-color:#95b75d;color:#fff;" title="Artikel (Obchod)">
                  <i class="fa fa-bullseye"></i>
                </a>
              </li>
              <li>
                <a href="#" onclick="return false;" class="panel-collapse">
                  <span class="fa fa-angle-down"></span>
                </a>
              </li>
            </ul>
          </div><!-- end panel-heading -->
          <div class="panel-body panel-body-table">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                  <select class="form-control select" onchange="location = 'cpanel/gallery-list/9/9/1/'+this.options[this.selectedIndex].value;">
                    <option value="10" selected>10</option>
                    <option value="20" >20</option>
                    <option value="50" >50</option>
                    <option value="100" >100</option>
                    <option value="200" >200</option>
                    <option value="500" >500</option>
                  </select>
                </div><!-- end form-group -->
                <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                  <div class="input-group">
                    <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" onclick="location = 'cpanel/gallery-list/9/9/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                        <i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </div><!-- end form-group -->
                <ul class="pagination pagination-sm pull-right"><li class=""><a href="cpanel/gallery-list/9/9/1/10?q="><i class="fa fa-angle-left"></i></a></li><li class=""><a href="cpanel/gallery-list/9/9/1/10?q=">1</a></li><li class="active"><a href="cpanel/gallery-list/9/9/2/10?q=">2</a></li><li class=""><a href="cpanel/gallery-list/9/9/3/10?q=">3</a></li><li class=""><a href="cpanel/gallery-list/9/9/4/10?q=">4</a></li><li class=""><a href="cpanel/gallery-list/9/9/5/10?q=">5</a></li><li class=""><a href="cpanel/gallery-list/9/9/6/10?q=">6</a></li><li class=""><a href="cpanel/gallery-list/9/9/7/10?q=">7</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/gallery-list/9/9/26/10?q=">26</a></li><li class=""><a href="cpanel/gallery-list/9/9/3/10?q="><i class="fa fa-angle-right"></i></a></li></ul>
              </div><!-- end col -->
            </div><!-- end row -->
            <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
              <table id="gallery-list" class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th width="70" class="text-center">
                      #
                    </th>
                    <th width="50" class="text-center">
                      TYP                    </th>
                    <th width="50" class="text-center">
                      SKUPINA                    </th>
                    <th class="text-left" style="min-width:500px;">
                      NÁZOV GALÉRIE                    </th>
                    <th width="80" class="text-right">
                      POČET OBRÁZKOV                    </th>
                    <th width="250" class="text-left">
                      NÁZOV STRÁNKY                    </th>
                    <th width="200" class="text-left">
                      VLASTNÍK                    </th>
                    <th width="200" class="text-center">
                      POSLEDNÁ ÚPRAVA                    </th>
                    <th width="100" class="text-center">
                      EDITOVAŤ                    </th>
                    <th width="100" class="text-center">
                      PUBLIKOVAŤ                    </th>
                    <th width="100" class="text-center">
                      ODSTRÁNIŤ                    </th>
                  </tr>
                </thead>
                <tbody>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[0]['gallery-id']" value="11"/>
                        1
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        SNAP
                      </td>
                      <td class="text-right">
                        <strong>6</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">01-06-2016</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/11" class="btn btn-info" style="padding:7px;border-radius:100%;" title="SNAP">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[0]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[0]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[1]['gallery-id']" value="12"/>
                        2
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        GENTLE
                      </td>
                      <td class="text-right">
                        <strong>9</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">31-05-2016</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/12" class="btn btn-info" style="padding:7px;border-radius:100%;" title="GENTLE">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[1]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[1]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[2]['gallery-id']" value="13"/>
                        3
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        STAND PANTS MAN
                      </td>
                      <td class="text-right">
                        <strong>11</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">-</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/13" class="btn btn-info" style="padding:7px;border-radius:100%;" title="STAND PANTS MAN">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[2]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[2]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[3]['gallery-id']" value="14"/>
                        4
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        SHINE
                      </td>
                      <td class="text-right">
                        <strong>3</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">07-04-2016</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/14" class="btn btn-info" style="padding:7px;border-radius:100%;" title="SHINE">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[3]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[3]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[4]['gallery-id']" value="16"/>
                        5
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        CITIZEN
                      </td>
                      <td class="text-right">
                        <strong>16</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">30-11-2016</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/16" class="btn btn-info" style="padding:7px;border-radius:100%;" title="CITIZEN">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[4]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[4]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[5]['gallery-id']" value="17"/>
                        6
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        WAU JELLY
                      </td>
                      <td class="text-right">
                        <strong>5</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">-</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/17" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WAU JELLY">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[5]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[5]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[6]['gallery-id']" value="18"/>
                        7
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        WAU NITE SHORT
                      </td>
                      <td class="text-right">
                        <strong>5</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">-</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/18" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WAU NITE SHORT">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[6]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[6]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[7]['gallery-id']" value="19"/>
                        8
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        WAU ROLLER
                      </td>
                      <td class="text-right">
                        <strong>3</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">-</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/19" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WAU ROLLER">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[7]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[7]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[8]['gallery-id']" value="20"/>
                        9
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        WAU SAIL
                      </td>
                      <td class="text-right">
                        <strong>6</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">-</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/20" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WAU SAIL">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[8]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[8]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#660000;">
                        <input type="hidden" name="galleryList[9]['gallery-id']" value="21"/>
                        10
                      </td>
                      <td class="text-center">
                        <span style="font-size:1.2em;color:#D14731">
                          <i class="fa fa-picture-o"></i>
                        </span>
                      </td>
                      <td class="text-center">
                        <span class="circle-indicator green">
                          <i class="fa fa-bullseye"></i>
                        </span>
                      </td>
                      <td class="text-left">
                        WAU CANDY
                      </td>
                      <td class="text-right">
                        <strong>5</strong>
                      </td>
                      <td class="text-center">
                                                  <span style="font-size:1.4em;font-weight:700;color:orange;">
                            <i class="fa fa-times-circle-o"></i>
                          </span>
                                              </td>
                      <td class="text-left">Henrich&nbsp;Barkoczy</td>
                      <td class="text-center">-</td>
                      <td class="text-center">
                        <a href="cpanel/gallery-edit/21" class="btn btn-info" style="padding:7px;border-radius:100%;" title="WAU CANDY">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[9]['publish']" checked="" value="1">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="galleryList[9]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                  </tbody>
              </table>
            </div><!-- end flip-scroll -->
          </div><!-- end panel-body -->
          <div class="panel-footer">
            <button type="submit" class="btn btn-success" role="button">
              <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY            </button>
            <ul class="list-inline additional-text">
              <li>
                <span class="circle-indicator black">
                  <i class="fa fa-bullseye"></i>
                </span>
              </li>
              <li>
                Východzia                           
              </li>
              <li>
                <span class="circle-indicator blue">
                  <i class="fa fa-bullseye"></i>
                </span>
              </li>
              <li>
                Stránky                       
              </li>
              <li>
                <span class="circle-indicator orange">
                  <i class="fa fa-bullseye"></i>
                </span>
              </li>
              <li>
                Artikel (Katalóg)            
              </li>
              <li>
                <span class="circle-indicator green">
                  <i class="fa fa-bullseye"></i>
                </span>
              </li>
              <li>
                Artikel (Obchod)           
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
