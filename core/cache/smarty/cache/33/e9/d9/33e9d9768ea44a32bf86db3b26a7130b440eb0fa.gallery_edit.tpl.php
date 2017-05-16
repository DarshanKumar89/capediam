<?php /*%%SmartyHeaderCode:1946371462588b300599f945-64133542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9784f97ac8930c455d67b4e99dab0820387f23e' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/gallery/gallery_edit.tpl',
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
    '33e9d9768ea44a32bf86db3b26a7130b440eb0fa' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/gallery/gallery_edit.tpl',
      1 => 1469707228,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1946371462588b300599f945-64133542',
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
  'unifunc' => 'content_588b300664ade2_98229831',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b300664ade2_98229831')) {function content_588b300664ade2_98229831($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" href="extensions/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<style>
#btn-save {
  position: absolute;
  top: 4px;
  left: 5px;
  width: 25px;
  height: 50px;
  margin: 0;
  padding: 0 0 0 3px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
}
.table > tbody > tr > td {
  cursor: row-resize;
}
.circle-indicator {
  position: relative;
  top: 4px;
  display: block;
  float: left;
  width: 23px;
  height: 23px;
  margin: 0 9px 0 0;
  text-align: center;
  color: #fff;
  border-radius: 100%;
}
.circle-indicator > i {
  position: relative;
  top: -2px;
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
.img {
  display:inline-block;
  width:35px;
  height:35px;
  margin: 0 auto;
  border: 2px solid #F5F5F5;
  border-radius: 50%;
}
.table-responsive {
  overflow: initial !important;
}
.tr-device {
  position: relative;
}
.tr-device .device {
  position: absolute;
  top: 12px;
}
.tr-device .device {
  font-size: 1.6em;
}
.tr-device .device.desktop {
  left: -30px;
  color: #95b75d;
}
.tr-device .device.tablet {
  left: -27px;
  color: #fea223;
}
.tr-device .device.mobile {
  left: -24.5px;
  color: #3fbae4;
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
  <a href="cpanel/gallery-list">
          Galéria
      </a>
</li>
<li>
  <a href="#" onclick="return false;">
          Editovať
      </a>
</li>
<li class="active">
  <a href="cpanel/gallery-edit/264">
    GIRLY WAU PANTS
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-picture-o"></i>
          Galéria
        &nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form action="cpanel/update-gallery" method="post" role="form">
  <input type="hidden" name="gallery-id" value="264" />
  <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
        
    <!-- GALLERY TITLE -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-colorful">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <span class="circle-indicator green">
              <i class="fa fa-bullseye"></i>
            </span>
            <span style="display:block;float:left;">GIRLY WAU PANTS</span>
          </h3>  
                      <ul class="panel-controls">
              <li>
                <a href="cpanel/store/catalog/article/edit/345">
                  <i class="fa fa-cube"></i>
                </a>
              </li>
            </ul>    
                  </div><!-- end panel-header -->
      </div><!-- end panel -->
    </div><!-- end col -->
    <!-- // GALLERY TITLE -->
        
    <!-- GALLERY GENERAL INFORMATION -->
    <div class="col-lg-12 col-sm-12 col-xs-12">
      <div class="panel panel-primary panel-toggled">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-info-circle"></i>&nbsp;
                          Všeobecné informácie
                      </h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div class="panel-body panel-body-form">
          <div class="row" style="margin-bottom: 15px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>
                                      Názov galérie (interný)
                                  </label>
                <input type="text"
                       name="gallery-name"
                       value="GIRLY WAU PANTS"
                       placeholder="Názov galérie (interný)"
                       class="form-control"
                       required>
              </div><!-- end form-group -->
            </div><!-- end col -->
          </div><!-- end row -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                          Titulka galérie
                                                      </label>
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
                          </div><!-- end input-group -->
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                                                          Krátky popis
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-en-GB"></span>
                            </span>
                            <textarea name="gallery-lang[51]['gallery-desc']" class="form-control" rows="5"></textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div><!-- end input-group -->
                        </div><!-- end form-group -->
                      </div><!-- end tab -->
                                          <div class="tab-pane " id="tab-it-IT">
                        <div class="form-group">
                          <label>
                                                          Titulka galérie
                                                      </label>
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
                          </div><!-- end input-group -->
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                                                          Krátky popis
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-it-IT"></span>
                            </span>
                            <textarea name="gallery-lang[120]['gallery-desc']" class="form-control" rows="5"></textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div><!-- end input-group -->
                        </div><!-- end form-group -->
                      </div><!-- end tab -->
                                          <div class="tab-pane " id="tab-sk">
                        <div class="form-group">
                          <label>
                                                          Titulka galérie
                                                      </label>
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
                          </div><!-- end input-group -->
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                                                          Krátky popis
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-sk"></span>
                            </span>
                            <textarea name="gallery-lang[189]['gallery-desc']" class="form-control" rows="5"></textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div><!-- end input-group -->
                        </div><!-- end form-group -->
                      </div><!-- end tab -->
                                      </div><!-- end panel-body -->
                </div><!-- end panel -->
                                
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end panel-body -->                          
      </div><!-- end panel -->
    </div><!-- end col -->
    <!-- //-- GALLERY GENERAL INFORMATION -->
        
    <!-- GALLERY SETTINGS -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-success panel-toggled">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-cog"></i>&nbsp;
                          Nastavenia
                      </h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div class="panel-body panel-body-form">
          <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>
                                      Vlastník
                                  </label>
                <select name="owner" class="form-control select" data-live-search="true" required>
                  <option value="0">
                                          Vyberte...
                                      </option>
                                                            <option value="1" >Henrich&nbsp;Barkoczy</option>
                                          <option value="2" >Alexander&nbsp;Kernasevic</option>
                                          <option value="3" >Dobrava&nbsp;Míčka</option>
                                          <option value="4" selected>Kornélia&nbsp;Dzurniková</option>
                                          <option value="5" >Stanislava&nbsp;Kleinova</option>
                                          <option value="6" >Neva&nbsp;Eva</option>
                                          <option value="7" >Ladislav&nbsp;Voros</option>
                                                      </select>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                                      Zoznam stránok
                                  </label>                                    
                <select name="page-id" class="form-control select" data-live-search="true" required>
                  <option value="0">
                                          Vyberte...
                                      </option>
                                                            <option value="1" >Tabuľka veľkost&iacute;</option>
                                          <option value="2" >MAJK SPIRIT - BIELY PRINC</option>
                                          <option value="3" >SANGRE NUEVA</option>
                                          <option value="5" >KOLEKCIA BLACKGREY</option>
                                          <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S KR&Aacute;ĽOVNOU ĽADU </option>
                                          <option value="7" >CARPE DM FASHION - PR&Iacute;BEH TALENTU A V&Aacute;&Scaron;NE</option>
                                          <option value="8" >MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA</option>
                                          <option value="10" >Dodacie podmienky</option>
                                          <option value="11" >Kontakty</option>
                                          <option value="12" >V&scaron;eobecn&eacute; obchodn&eacute; podmienky</option>
                                          <option value="13" >O n&aacute;s</option>
                                          <option value="14" >Z&aacute;ruka a reklamačn&yacute; poriadok</option>
                                          <option value="15" >Balada o tepl&aacute;koch</option>
                                          <option value="16" >TEPL&Aacute;KOV&Eacute; SPOVEDE</option>
                                          <option value="17" >Beach Volley turnaj s CarpeDM</option>
                                          <option value="18" >Čo ony maj&uacute; a my nie?!</option>
                                          <option value="19" >Carpe DM d&aacute;va &scaron;ancu mlad&yacute;m</option>
                                          <option value="20" >test</option>
                                                      </select>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                                      Typ galérie
                                  </label>                                     
                <select name="gallery-type" class="form-control select" required>
                  <option value="1" selected>
                                          Obrázky
                                      </option>
                  <option value="2" >
                                          Dokumenty
                                      </option>
                  <option value="3" >
                    Youtube
                  </option>
                  <option value="4" >
                    Vimeo
                  </option>
                  <option value="5" >
                                          Zmiešané
                                      </option>
                </select>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                                      Skupina
                                  </label>                                     
                <select name="group" class="form-control select" required>
                  <option value="0">
                                          Vyberte...
                                      </option>
                  <option value="1" >
                                          Stránky
                                      </option>
                  <option value="2" >
                                          Artikel (Katalóg)
                                      </option>
                  <option value="3" selected>
                                          Artikel (Obchod)
                                      </option>
                </select>
              </div><!-- end form-group -->
            </div><!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 15px;">
              <div class="form-group">
                <label>
                                      Publikovať
                                  </label><br>                                
                <label class="switch">
                  <input type="checkbox" name="publish" value="1" checked>
                  <span></span>
                </label>
              </div><!-- end form-group -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end panel-body -->                          
      </div><!-- end panel -->
    </div><!-- end col -->
    <!-- //-- GALLERY SETTINGS -->
        
    <!-- GALLERY IMAGE LIST -->
    <div class="col-lg-12 col-sm-12 col-xs-12">
      <div class="panel panel-success">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-file-image-o"></i>&nbsp;
            ZOZNAM OBRÁZKOV
          </h3>
          <ul class="panel-controls">
            <li>
              <a href="cpanel/gallery-images/264/7259b712f116a7fe6310cdc765c836af">
                <span class="fa fa-plus"></span>
              </a>
            </li>
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
          </ul>    
        </div><!-- end panel-heading -->
        <div class="panel-body panel-body-table">
                      <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
              <table id="imageList" class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th class="text-center" width="80">
                                              NÁHĽAD
                                          </th>
                    <th class="text-left" width="150">
                                              NÁZOV OBRÁZKA
                                          </th>
                    <th class="text-center" width="300">
                                              SMEROVAŤ NA STRÁNKU
                                          </th>
                    <th class="text-center" width="30">
                                              TITULKY / WEB ODKAZ
                                          </th>
                    <th class="text-center" width="120">
                                              PÔVODNÁ ŠÍRKA
                                          </th>
                    <th class="text-center" width="120">
                                              PÔVODNÁ VÝŠKA
                                          </th>
                    <th class="text-center" width="80">
                                              APPLY TO DEVICE
                                          </th>
                    <th class="text-center" width="200">
                      VIEWPORT SIZE (type)
                    </th>
                    <th class="text-center" width="130">
                                              MIN SIZE (px)
                                          </th>
                    <th class="text-center" width="130">
                                              MAX SIZE (px)
                                          </th>
                    <th class="text-center" width="130">
                                              VEĽKOSŤ OBRÁZKA
                                          </th>
                    <th class="text-center" width="110">
                                              HLAVNÝ OBRÁZOK
                                          </th>
                    <th class="text-center" width="110">
                                              PUBLIKOVAŤ
                                          </th>
                    <th class="text-center" width="110">
                                              ODSTRÁNIŤ
                                          </th>
                  </tr>
                </thead>
                <tbody>
                                      <tr>
                      <td class="text-center tr-device">
                        <input type="hidden" name="images[0]['image-id']" value="4878" />
                        <a href="/files/b76a3fb96f4bd91d69d96977044d65e0.jpg" onclick="return false;" rel="group" class="img-item" title="DSC01435">
                          <img src="thumbnail/crop/b76a3fb96f4bd91d69d96977044d65e0/35/35" class="img" title="DSC01435" />
                        </a>
                                                                                              </td>
                      <td class="text-left">
                        DSC01435
                      </td>
                      <td class="text-center">                                     
                        <select name="images[0]['rw-page-id']" class="form-control">
                          <option value="0">
                                                          Vyberte...
                                                      </option>
                                                                                    <option value="1" >Tabuľka veľkost&iacute;</option>
                                                          <option value="2" >MAJK SPIRIT - BIELY PRINC</option>
                                                          <option value="3" >SANGRE NUEVA</option>
                                                          <option value="5" >KOLEKCIA BLACKGREY</option>
                                                          <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S KR&Aacute;ĽOVNOU ĽADU </option>
                                                          <option value="7" >CARPE DM FASHION - PR&Iacute;BEH TALENTU A V&Aacute;&Scaron;NE</option>
                                                          <option value="8" >MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA</option>
                                                          <option value="10" >Dodacie podmienky</option>
                                                          <option value="11" >Kontakty</option>
                                                          <option value="12" >V&scaron;eobecn&eacute; obchodn&eacute; podmienky</option>
                                                          <option value="13" >O n&aacute;s</option>
                                                          <option value="14" >Z&aacute;ruka a reklamačn&yacute; poriadok</option>
                                                          <option value="15" >Balada o tepl&aacute;koch</option>
                                                          <option value="16" >TEPL&Aacute;KOV&Eacute; SPOVEDE</option>
                                                          <option value="17" >Beach Volley turnaj s CarpeDM</option>
                                                          <option value="18" >Čo ony maj&uacute; a my nie?!</option>
                                                          <option value="19" >Carpe DM d&aacute;va &scaron;ancu mlad&yacute;m</option>
                                                          <option value="20" >test</option>
                                                                              </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-block btn-default" onclick="renderCaptions(264,4878)">
                          <i class="fa fa-cogs" aria-hidden="true"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        885px
                      </td>
                      <td class="text-center">
                        1196px
                      </td>
                      <td class="text-center">
                        <select name="images[0]['device-type-id']" class="form-control">
                          <option value="0" selected>
                            ALL
                          </option>
                          <option value="1" >
                            DESKTOP
                          </option>
                          <option value="2" >
                            TABLET
                          </option>
                          <option value="3" >
                            MOBILE
                          </option>
                        </select>
                      </td>
                      <td class="text-center">
                        <select name="images[0]['viewport-size-type-id']" class="form-control">
                          <option value="0" selected>
                                                          Vyberte...
                                                      </option>
                          <option value="1" >
                            min-width
                          </option>
                          <option value="2" >
                            max-width
                          </option>
                          <option value="3" >
                            min-height
                          </option>
                          <option value="4" >
                            max-height
                          </option>
                          <option value="5" >
                            min-width / max-width
                          </option>
                          <option value="6" >
                            min-height / max-height
                          </option>
                        </select>
                      </td>
                      <td class="text-center">
                        <input type="number"  name="images[0]['min-size']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                      </td>
                      <td class="text-center">
                        <input type="number"  name="images[0]['max-size']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                      </td>
                      <td class="text-center">
                        0.378 KB
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input class="cb-main" type="checkbox" name="images[0]['main']" value="1" checked="">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="images[0]['publish']" value="1" checked="">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="images[0]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center tr-device">
                        <input type="hidden" name="images[1]['image-id']" value="4879" />
                        <a href="/files/f99185d2462d96a7f2cf594da5c836ce.jpg" onclick="return false;" rel="group" class="img-item" title="DSC01438">
                          <img src="thumbnail/crop/f99185d2462d96a7f2cf594da5c836ce/35/35" class="img" title="DSC01438" />
                        </a>
                                                                                              </td>
                      <td class="text-left">
                        DSC01438
                      </td>
                      <td class="text-center">                                     
                        <select name="images[1]['rw-page-id']" class="form-control">
                          <option value="0">
                                                          Vyberte...
                                                      </option>
                                                                                    <option value="1" >Tabuľka veľkost&iacute;</option>
                                                          <option value="2" >MAJK SPIRIT - BIELY PRINC</option>
                                                          <option value="3" >SANGRE NUEVA</option>
                                                          <option value="5" >KOLEKCIA BLACKGREY</option>
                                                          <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S KR&Aacute;ĽOVNOU ĽADU </option>
                                                          <option value="7" >CARPE DM FASHION - PR&Iacute;BEH TALENTU A V&Aacute;&Scaron;NE</option>
                                                          <option value="8" >MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA</option>
                                                          <option value="10" >Dodacie podmienky</option>
                                                          <option value="11" >Kontakty</option>
                                                          <option value="12" >V&scaron;eobecn&eacute; obchodn&eacute; podmienky</option>
                                                          <option value="13" >O n&aacute;s</option>
                                                          <option value="14" >Z&aacute;ruka a reklamačn&yacute; poriadok</option>
                                                          <option value="15" >Balada o tepl&aacute;koch</option>
                                                          <option value="16" >TEPL&Aacute;KOV&Eacute; SPOVEDE</option>
                                                          <option value="17" >Beach Volley turnaj s CarpeDM</option>
                                                          <option value="18" >Čo ony maj&uacute; a my nie?!</option>
                                                          <option value="19" >Carpe DM d&aacute;va &scaron;ancu mlad&yacute;m</option>
                                                          <option value="20" >test</option>
                                                                              </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-block btn-default" onclick="renderCaptions(264,4879)">
                          <i class="fa fa-cogs" aria-hidden="true"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        933px
                      </td>
                      <td class="text-center">
                        1261px
                      </td>
                      <td class="text-center">
                        <select name="images[1]['device-type-id']" class="form-control">
                          <option value="0" selected>
                            ALL
                          </option>
                          <option value="1" >
                            DESKTOP
                          </option>
                          <option value="2" >
                            TABLET
                          </option>
                          <option value="3" >
                            MOBILE
                          </option>
                        </select>
                      </td>
                      <td class="text-center">
                        <select name="images[1]['viewport-size-type-id']" class="form-control">
                          <option value="0" selected>
                                                          Vyberte...
                                                      </option>
                          <option value="1" >
                            min-width
                          </option>
                          <option value="2" >
                            max-width
                          </option>
                          <option value="3" >
                            min-height
                          </option>
                          <option value="4" >
                            max-height
                          </option>
                          <option value="5" >
                            min-width / max-width
                          </option>
                          <option value="6" >
                            min-height / max-height
                          </option>
                        </select>
                      </td>
                      <td class="text-center">
                        <input type="number"  name="images[1]['min-size']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                      </td>
                      <td class="text-center">
                        <input type="number"  name="images[1]['max-size']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                      </td>
                      <td class="text-center">
                        0.302 KB
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input class="cb-main" type="checkbox" name="images[1]['main']" value="1" >
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="images[1]['publish']" value="1" checked="">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="images[1]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center tr-device">
                        <input type="hidden" name="images[2]['image-id']" value="4880" />
                        <a href="/files/f1fdb8ff1ca32df3344ee76a5f00624b.jpg" onclick="return false;" rel="group" class="img-item" title="DSC01439">
                          <img src="thumbnail/crop/f1fdb8ff1ca32df3344ee76a5f00624b/35/35" class="img" title="DSC01439" />
                        </a>
                                                                                              </td>
                      <td class="text-left">
                        DSC01439
                      </td>
                      <td class="text-center">                                     
                        <select name="images[2]['rw-page-id']" class="form-control">
                          <option value="0">
                                                          Vyberte...
                                                      </option>
                                                                                    <option value="1" >Tabuľka veľkost&iacute;</option>
                                                          <option value="2" >MAJK SPIRIT - BIELY PRINC</option>
                                                          <option value="3" >SANGRE NUEVA</option>
                                                          <option value="5" >KOLEKCIA BLACKGREY</option>
                                                          <option value="6" >OĽGA BEST&Auml;NDIGOV&Aacute; - TR&Eacute;NING S KR&Aacute;ĽOVNOU ĽADU </option>
                                                          <option value="7" >CARPE DM FASHION - PR&Iacute;BEH TALENTU A V&Aacute;&Scaron;NE</option>
                                                          <option value="8" >MARTINA SEDL&Aacute;ROV&Aacute; - SPOD TATIER DO SVETA</option>
                                                          <option value="10" >Dodacie podmienky</option>
                                                          <option value="11" >Kontakty</option>
                                                          <option value="12" >V&scaron;eobecn&eacute; obchodn&eacute; podmienky</option>
                                                          <option value="13" >O n&aacute;s</option>
                                                          <option value="14" >Z&aacute;ruka a reklamačn&yacute; poriadok</option>
                                                          <option value="15" >Balada o tepl&aacute;koch</option>
                                                          <option value="16" >TEPL&Aacute;KOV&Eacute; SPOVEDE</option>
                                                          <option value="17" >Beach Volley turnaj s CarpeDM</option>
                                                          <option value="18" >Čo ony maj&uacute; a my nie?!</option>
                                                          <option value="19" >Carpe DM d&aacute;va &scaron;ancu mlad&yacute;m</option>
                                                          <option value="20" >test</option>
                                                                              </select>
                      </td>
                      <td>
                        <button type="button" class="btn btn-block btn-default" onclick="renderCaptions(264,4880)">
                          <i class="fa fa-cogs" aria-hidden="true"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        916px
                      </td>
                      <td class="text-center">
                        1238px
                      </td>
                      <td class="text-center">
                        <select name="images[2]['device-type-id']" class="form-control">
                          <option value="0" selected>
                            ALL
                          </option>
                          <option value="1" >
                            DESKTOP
                          </option>
                          <option value="2" >
                            TABLET
                          </option>
                          <option value="3" >
                            MOBILE
                          </option>
                        </select>
                      </td>
                      <td class="text-center">
                        <select name="images[2]['viewport-size-type-id']" class="form-control">
                          <option value="0" selected>
                                                          Vyberte...
                                                      </option>
                          <option value="1" >
                            min-width
                          </option>
                          <option value="2" >
                            max-width
                          </option>
                          <option value="3" >
                            min-height
                          </option>
                          <option value="4" >
                            max-height
                          </option>
                          <option value="5" >
                            min-width / max-width
                          </option>
                          <option value="6" >
                            min-height / max-height
                          </option>
                        </select>
                      </td>
                      <td class="text-center">
                        <input type="number"  name="images[2]['min-size']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                      </td>
                      <td class="text-center">
                        <input type="number"  name="images[2]['max-size']" value="0" class="form-control" style="width:100px;margin:0 auto;">
                      </td>
                      <td class="text-center">
                        0.377 KB
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input class="cb-main" type="checkbox" name="images[2]['main']" value="1" >
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="images[2]['publish']" value="1" checked="">
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="images[2]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                  </tbody>
              </table>
            </div><!-- end table-responsive -->
                  </div><!-- end panel-body -->                          
      </div><!-- end panel -->
    </div><!-- end col -->
    <!-- //-- GALLERY IMAGE LIST -->

    <button type="submit" id="btn-save" class="btn btn-success" role="button">
      <i class="fa fa-save"></i>
    </button>
                
  </div><!-- end row -->
</form>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW SLIDER CAPTIONS -->                                  
<div class="modal" id="modal-captions" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="defModalHead">
                      Titulky
                  </h4>
      </div><!-- end modal-header -->
      <div class="modal-body"><!-- --></div><!-- end modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">
                      ZAVRIEŤ
                  </button>
      </div><!-- end modal-footer -->
    </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW SLIDER CAPTIONS -->

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
<script type="text/javascript" src="extensions/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
    
  window.onscroll = function (e) {
    var vertical_position = 0;
    if (pageYOffset)//usual
      vertical_position = pageYOffset;
    else if (document.documentElement.clientHeight)//ie
      vertical_position = document.documentElement.scrollTop;
    else if (document.body)//ie quirks
      vertical_position = document.body.scrollTop;

    var topPosition = vertical_position + ((vertical_position == 0) ? 3 : 200);

    $('#btn-save').css({ top: topPosition + 'px' });
  };
    
  function renderCaptions(galleryId, imageId) {
    $.ajax({
      url: 'cpanel/gallery-captions',
      type: 'POST',
      data: { command: 1, galleryId: galleryId, imageId: imageId },
      success: function(content) {
        $('#modal-captions').find('.modal-body').html(content);
        $('#modal-captions').modal('show');
      },
      error: function(data) {
        console.log(data);
      },
      dataType: 'HTML'
    });
  } 
</script>
<script type="text/javascript">
$(function() {
  var oTable = $( "#imageList" );

  if(oTable) {
    oTable.find('tbody').sortable();

    oTable.find('input.cb-main').each(function() {
        $(this).click(function() {
        $(this).prop("checked", true);
        
        unchecked(oTable,$(this));
      }); 
    });
  }

  $("a.img-item").fancybox({
    'transitionIn'	: 'elastic',
    'transitionOut'	: 'elastic',
    'speedIn'	: 600, 
    'speedOut'	: 200, 
    'overlayShow'	: false
  });

  function unchecked(oTable,current) {
    oTable.find('input.cb-main').each(function() {
      $(this).not(current).prop("checked", false);
    }); 
  }
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
