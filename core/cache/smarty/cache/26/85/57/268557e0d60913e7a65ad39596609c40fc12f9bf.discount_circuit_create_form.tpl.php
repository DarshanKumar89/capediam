<?php /*%%SmartyHeaderCode:12940655675805dc597185d8-37723681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '122150ccc225e0d1a3c964449b6cc3bc68268e30' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/discount_circuit/discount_circuit_create_form.tpl',
      1 => 1469707244,
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
    '268557e0d60913e7a65ad39596609c40fc12f9bf' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/discount_circuit/discount_circuit_create_form.tpl',
      1 => 1469707244,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '12940655675805dc597185d8-37723681',
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
  'unifunc' => 'content_5805dc5a2dbd22_17719853',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805dc5a2dbd22_17719853')) {function content_5805dc5a2dbd22_17719853($_smarty_tpl) {?><!DOCTYPE html>
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
  #btn-save {
    position: absolute;
    top: 4px;
    left: 5px;
    width: 25px;
    height: 150px;
    margin: 0;
    padding: 0 0 0 3px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
  }
  .alert-default {
    background-color: #F5F5F5;
    border-color: #DDD;
  }
  .c-c-a-r {
    display: none;
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
                    
  <li>
    <a href="#" onclick="return false;" title="Obchod">
      Obchod    </a>
  </li>
  <li class="active">
    <a href="cpanel/store-discount-circuit-list" title="Zľavové okruhy">
      Zľavové okruhy    </a>
  </li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
  <div class="page-title">
    <h2>
      <i class="fa fa-circle-o-notch"></i>&nbsp;
      ZĽAVOVÉ OKRUHY&nbsp;
      <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
  </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="createDiscountCircuitForm" action="cpanel/store-create-discount-circuit" method="post" role="form">
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">

      <!-- DISCOUNT CIRCUIT TITLE -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-colorful">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title">
                    NOVÝ ZĽAVOVÝ OKRUH
                  </h3>
              </div><!-- end panel-header -->
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //-- DISCOUNT CIRCUIT TITLE -->

      <!-- DISCOUNT CIRCUIT LANGUAGE INFORMATION AND SEO -->
      <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="panel panel-info panel-toggled">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <i class="fa fa-globe"></i>&nbsp;
              LANGUAGE INFORMATION AND SEO            </h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            </ul>
          </div><!-- end panel-heading -->
          <div class="panel-body panel-body-form">
                          <div class="panel panel-default tabs" style="margin: 7px 0;">
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
                                      <li class="active">
                      <a href="#tab-sk" role="tab" data-toggle="tab">
                        <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                        <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                      </a>
                    </li>
                                  </ul>
                <div class="panel-body tab-content">
                                      <div class="tab-pane " id="tab-en-GB">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                          <div class="form-group">
                            <label>
                              Circuit name                              <span style="color:red;">*</span>
                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-en-GB"></span>
                              </span>
                              <input type="text"
                                     name="lang[51]['circuit-name']"
                                     value=""
                                     placeholder="Circuit name"
                                     class="form-control"
                                     required/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Neplatné znaky ;=#{ }</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Titulka                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-en-GB"></span>
                              </span>
                              <input type="text"
                                     name="lang[51]['site-title']"
                                     value=""
                                     class="form-control"/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Neplatné znaky ;=#{ }</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Description
                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-en-GB"></span>
                              </span>
                              <textarea name="lang[51]['description']" class="form-control" rows="5"></textarea>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Zakázané znaky  = # {}</span>
                          </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h4 style="border-bottom:1px solid green;">SEO</h4>
                          <div class="form-group">
                            <label>
                              Metarobots                            </label>
                            <select name="lang[51]['meta-robot']" class="form-control select">
                                                              <option value="all">all</option>
                                                              <option value="noindex">noindex</option>
                                                              <option value="nofollow">nofollow</option>
                                                              <option value="none">none</option>
                                                              <option value="noarchive">noarchive</option>
                                                              <option value="nosnippet">nosnippet</option>
                                                              <option value="noodp">noodp</option>
                                                              <option value="notranslate">notranslate</option>
                                                              <option value="noimagindex">noimagindex</option>
                                                          </select>
                            <span class="help-block">Vyberte jednu z nasledujúcich možností</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Meta keywords                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-en-GB"></span>
                              </span>
                              <input type="text"
                                     name="lang[51]['meta-keywords']"
                                     value=""
                                     class="tagsinput form-control"/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Metadescription - krátky text, ktorý popisuje stránku.                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-en-GB"></span>
                              </span>
                              <textarea name="lang[51]['meta-description']"class="form-control" rows="5"></textarea>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Zakázané znaky  = # {}</span>
                          </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-12" style="margin-top:30px;">
                          <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                            <span class="pull-left" style="padding-top: 12px;">
                                HTML Content                            </span>
                          </h4>
                          <div class="input-group">
                            <span class="input-group-addon">
                                <span class="flag-icon flag-icon-en-GB"></span>
                            </span>
                            <textarea name="lang[51]['html-content']" id="ckeditor_51" class="ckeditor" row="5"></textarea>
                          </div>
                        </div><!-- end col -->
                      </div><!-- end row -->
                    </div><!-- end tab -->
                                      <div class="tab-pane " id="tab-it-IT">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                          <div class="form-group">
                            <label>
                              Circuit name                              <span style="color:red;">*</span>
                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-it-IT"></span>
                              </span>
                              <input type="text"
                                     name="lang[120]['circuit-name']"
                                     value=""
                                     placeholder="Circuit name"
                                     class="form-control"
                                     required/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Neplatné znaky ;=#{ }</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Titulka                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-it-IT"></span>
                              </span>
                              <input type="text"
                                     name="lang[120]['site-title']"
                                     value=""
                                     class="form-control"/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Neplatné znaky ;=#{ }</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Description
                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-it-IT"></span>
                              </span>
                              <textarea name="lang[120]['description']" class="form-control" rows="5"></textarea>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Zakázané znaky  = # {}</span>
                          </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h4 style="border-bottom:1px solid green;">SEO</h4>
                          <div class="form-group">
                            <label>
                              Metarobots                            </label>
                            <select name="lang[120]['meta-robot']" class="form-control select">
                                                              <option value="all">all</option>
                                                              <option value="noindex">noindex</option>
                                                              <option value="nofollow">nofollow</option>
                                                              <option value="none">none</option>
                                                              <option value="noarchive">noarchive</option>
                                                              <option value="nosnippet">nosnippet</option>
                                                              <option value="noodp">noodp</option>
                                                              <option value="notranslate">notranslate</option>
                                                              <option value="noimagindex">noimagindex</option>
                                                          </select>
                            <span class="help-block">Vyberte jednu z nasledujúcich možností</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Meta keywords                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-it-IT"></span>
                              </span>
                              <input type="text"
                                     name="lang[120]['meta-keywords']"
                                     value=""
                                     class="tagsinput form-control"/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Metadescription - krátky text, ktorý popisuje stránku.                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-it-IT"></span>
                              </span>
                              <textarea name="lang[120]['meta-description']"class="form-control" rows="5"></textarea>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Zakázané znaky  = # {}</span>
                          </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-12" style="margin-top:30px;">
                          <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                            <span class="pull-left" style="padding-top: 12px;">
                                HTML Content                            </span>
                          </h4>
                          <div class="input-group">
                            <span class="input-group-addon">
                                <span class="flag-icon flag-icon-it-IT"></span>
                            </span>
                            <textarea name="lang[120]['html-content']" id="ckeditor_120" class="ckeditor" row="5"></textarea>
                          </div>
                        </div><!-- end col -->
                      </div><!-- end row -->
                    </div><!-- end tab -->
                                      <div class="tab-pane active" id="tab-sk">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                          <div class="form-group">
                            <label>
                              Circuit name                              <span style="color:red;">*</span>
                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-sk"></span>
                              </span>
                              <input type="text"
                                     name="lang[189]['circuit-name']"
                                     value=""
                                     placeholder="Circuit name"
                                     class="form-control"
                                     required/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Neplatné znaky ;=#{ }</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Titulka                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-sk"></span>
                              </span>
                              <input type="text"
                                     name="lang[189]['site-title']"
                                     value=""
                                     class="form-control"/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Neplatné znaky ;=#{ }</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Description
                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-sk"></span>
                              </span>
                              <textarea name="lang[189]['description']" class="form-control" rows="5"></textarea>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Zakázané znaky  = # {}</span>
                          </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <h4 style="border-bottom:1px solid green;">SEO</h4>
                          <div class="form-group">
                            <label>
                              Metarobots                            </label>
                            <select name="lang[189]['meta-robot']" class="form-control select">
                                                              <option value="all">all</option>
                                                              <option value="noindex">noindex</option>
                                                              <option value="nofollow">nofollow</option>
                                                              <option value="none">none</option>
                                                              <option value="noarchive">noarchive</option>
                                                              <option value="nosnippet">nosnippet</option>
                                                              <option value="noodp">noodp</option>
                                                              <option value="notranslate">notranslate</option>
                                                              <option value="noimagindex">noimagindex</option>
                                                          </select>
                            <span class="help-block">Vyberte jednu z nasledujúcich možností</span>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Meta keywords                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-sk"></span>
                              </span>
                              <input type="text"
                                     name="lang[189]['meta-keywords']"
                                     value=""
                                     class="tagsinput form-control"/>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                          </div><!-- end form-group -->
                          <div class="form-group">
                            <label>
                              Metadescription - krátky text, ktorý popisuje stránku.                            </label>
                            <div class="input-group">
                              <span class="input-group-addon">
                                  <span class="flag-icon flag-icon-sk"></span>
                              </span>
                              <textarea name="lang[189]['meta-description']"class="form-control" rows="5"></textarea>
                              <span class="input-group-addon">
                                  <i class="fa fa-file-text-o"></i>
                              </span>
                            </div>
                            <span class="help-block">Zakázané znaky  = # {}</span>
                          </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-12" style="margin-top:30px;">
                          <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                            <span class="pull-left" style="padding-top: 12px;">
                                HTML Content                            </span>
                          </h4>
                          <div class="input-group">
                            <span class="input-group-addon">
                                <span class="flag-icon flag-icon-sk"></span>
                            </span>
                            <textarea name="lang[189]['html-content']" id="ckeditor_189" class="ckeditor" row="5"></textarea>
                          </div>
                        </div><!-- end col -->
                      </div><!-- end row -->
                    </div><!-- end tab -->
                                  </div><!-- end panel-body -->
              </div><!-- end panel -->
                      </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- DISCOUNT CIRCUIT LANGUAGE INFORMATION AND SEO -->

      <!-- DISCOUNT CIRCUIT GENERAL INFORMATION -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-primary panel-toggled">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <i class="fa fa-info-circle"></i>&nbsp;
              VŠEOBECNÉ INFORMÁCIE            </h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            </ul>
          </div><!-- end panel-heading -->
          <div class="panel-body panel-body-form">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Circuit name internal<span style="color:red;">*</span></label>
                  <input type="text" name="circuit-name-int" value="" class="form-control" minlength="3" maxlength="150" required="">
                  <span class="help-block">Neplatné znaky ;=#{ }</span>
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>Farba</label>
                  <div class="input-group color" data-color="#38c4f2" data-color-format="hex" id="colorpicker">
                  <input type="text" name="color" value="#38c4f2" class="form-control"/>
                  <span class="input-group-addon">
                      <i style="background-color:#38c4f2"></i>
                  </span>
                  </div>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    Description                  </label>
                  <textarea name="description" class="form-control" rows="6"></textarea>
                </div><!-- end form-group -->
              </div><!-- end col -->
            </div><!-- end row -->
          </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- DISCOUNT CIRCUIT GENERAL INFORMATION -->

      <!-- DISCOUNT CIRCUIT SETTINGS -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-success panel-toggled">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <i class="fa fa-cog"></i>&nbsp;
              NASTAVENIA            </h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            </ul>
          </div><!-- end panel-heading -->
          <div class="panel-body panel-body-form">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none; padding: 0;">
                    <div class="form-group pull-left" style="width: 50%;padding-left: 0px;">
                      <label>
                        Obmedziť na uživateľa / skupinu uživateľov
                      </label><br>
                      <label class="switch">
                        <input type="checkbox" name="use-client-restriction" value="1">
                        <span></span>
                      </label>
                    </div><!-- end form-group -->
                    <div class="form-group pull-left" style="width: 50%;padding-right: 0px;">
                      <label>
                        Pravidlo uplatnenia zľavy
                        <span style="color:red;">*</span>
                      </label>
                      <select name="client-discount-rule-id" class="form-control select" required>
                        <option value="0">Vyberte...</option>
                        <option value="1">
                          Uplatní sa väčšia zľava
                        </option>
                        <option value="2">
                          Uplatní sa sčítanie zliav
                        </option>
                      </select>
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0;">
                      <label>
                        TYPE                        <span style="color:red;">*</span>
                      </label>
                      <select name="type-id" class="form-control select" required>
                        <option value="0">Vyberte...</option>
                        <option value="1">
                                                      ARTICLE LIST BY FILTER
                                                  </option>
                        <option value="2">
                                                      ARTICLE LIST
                                                  </option>
                      </select>
                      <span class="help-block">
                                                      Select the type of item you wish to add to the discount circuit.
                                                </span>
                    </div><!-- end form-group -->
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
                      <label>
                                                  WAREHOUSE
                                              </label>
                                              <select name="warehouse-id" class="form-control select" data-live-search="true">
                          <option value="0">Vyberte...</option>
                                                      <option value="5">Nov&aacute; Lesn&aacute;</option>
                                                      <option value="6">Merano - Italy</option>
                                                  </select>
                                          </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
                <div class="row c-c-a-r">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;">
                    <div class="form-group">
                      <label>
                        SECTION                        <span style="color:red;">*</span>
                      </label>
                      <select id="d-c-s-s" name="section-id" class="form-control select"required="">
                        <option value="0">Vyberte...</option>
                        <option value="1">
                                                      CATEGORY
                                                  </option>
                        <option value="2">
                                                      ATTRIBUTE
                                                  </option>
                        <option value="3">
                                                      ATTRIBUTE VALUE
                                                  </option>
                        <option value="4">
                                                      STATUS
                                                  </option>
                      </select>
                      <span class="help-block">
                                                      Choose a section to which is to be assigned circuit discount.
                                                </span>
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right: 0px;">
                    <div class="form-group">
                      <label>
                        SECTION VALUES                        <span style="color:red;">*</span>
                      </label>
                      <div class="sv" style="height: 70px;">
                        <div class="alert alert-info" style="padding: 5px 15px;" role="alert">
                          <span style="font-size:11px;">
                              <i class="fa fa-info-circle"></i>
                              <strong>Choose a section to which is to be assigned circuit discount.</strong>
                          </span>
                        </div>
                      </div>
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;">
                    <div class="alert alert-warning" role="alert">
                      <p>
                        <i class="fa fa-exclamation-triangle"></i>
                        V prípade, že produkt sa už nachádza v zľavovom okruhu môžete si zvoliť možnosť premiestniť produkt
                        alebo ponechať v zľavovom okruhu.
                      </p>
                    </div>
                  </div><!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right: 0px;">
                    <div class="form-group">
                      <label>
                        Change YES / NO                      </label><br>
                      <label class="switch">
                        <input type="checkbox" name="force" value="1">
                        <span></span>
                      </label>
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
              </div><!-- end col -->
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0px;">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                        FROM                      </label>
                      <input type="text" name="from" value="" maxlength="12" class="form-control datepicker">
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                        UNTIL                      </label>
                      <input type="text" name="until" value="" maxlength="12" class="form-control datepicker">
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
                <div class="row" style="margin-top: 15px;">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                        TYPE OF DISCOUNT                        <span style="color:red;">*</span>
                      </label>
                      <select name="type-of-discount-id" class="form-control select"required="">
                        <option value="0">Vyberte...</option>
                        <option value="1">
                                                      [ - ] Exact amount
                                                  </option>
                        <option value="2">
                                                      [ % ] Percentage
                                                  </option>
                      </select>
                      <span class="help-block">Select the type of discount</span>
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label>
                        DISCOUNT VALUE                        <span style="color:red;">*</span>
                      </label>
                      <input type="text" name="discount-value" value="" maxlength="12" class="form-control">
                    </div><!-- end form-group -->
                  </div><!-- end col -->
                </div><!-- end row -->
              </div><!-- end col -->
            </div><!-- end row -->
          </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- ARTICLE SETTINGS -->

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
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
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
</script>
<script type="text/javascript">
$(function() {
  if($('#cd-list').length > 0) {
    $('#cd-list').find('a').each(function() {
      if(!$(this).hasClass('locked')) {
        $(this).on( "click", function(event) {
          var target = $( event.target );

          if((target.is( 'i' )) || (target.is( 'button' ))) {
            $('#d-c-r').modal('show');

            return false;
          }
        });
      }
    });
  }

  $('[name="type-id"]').on('change',function() {
    $('.c-c-a-r').hide();

    if(parseInt($(this).val()) === 1) {
      $('.c-c-a-r').show();
    }
  });
  $('#d-c-s-s').on('change',function() {
    var container = $('.sv'),
            value = parseInt($(this).val());

    var info = '<div class="alert alert-info" style="padding: 5px 15px;" role="alert"><span style="font-size:11px;"><i class="fa fa-info-circle"></i><strong>&nbsp;Choose a section to which is to be assigned circuit discount.</strong></span></div>';

    if((container.length > 0) && (value !== 0)) {
      $.ajax({
        url: 'cpanel/store/api/section-values',
        data: { sectionId: value, required: true },
        type: 'POST',
        success: function(content) {
          container.empty().html( content );
        },
        error: function(data) {
          console.log(data)
        },
        dataType: 'HTML'
      });
    } else {
      container.empty().html( info );
    }
  });
});

function setDCId( dCircuitId ) {
  $('[name="d-c-id"]').val( dCircuitId );
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
