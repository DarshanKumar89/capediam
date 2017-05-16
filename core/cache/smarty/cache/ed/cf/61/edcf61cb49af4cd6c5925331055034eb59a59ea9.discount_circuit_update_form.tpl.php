<?php /*%%SmartyHeaderCode:5070481095798b54e6d6be7-40453940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d18315ec70de27b97ab1483e36a2e1ac2ac99a' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/discount_circuit/discount_circuit_update_form.tpl',
      1 => 1469625266,
      2 => 'file',
    ),
    '0b9f53588ea7ef2e382fb110a795947dfd61c5dd' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1469528892,
      2 => 'file',
    ),
    '146e27fb27217e76249fb69f93d1c5b4436eb18d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469528891,
      2 => 'file',
    ),
    'edcf61cb49af4cd6c5925331055034eb59a59ea9' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/discount_circuit/discount_circuit_update_form.tpl',
      1 => 1469625266,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '5070481095798b54e6d6be7-40453940',
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
  'unifunc' => 'content_5798b54e90b601_18153736',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798b54e90b601_18153736')) {function content_5798b54e90b601_18153736($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" href="extensions/bootstrap-tagsinput/bootstrap-tagsinput.css"/>
<style>
  #btn-save {
    position: absolute;
    top: 4px;
    left: 5px;
    width: 25px;
    height: 125px;
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
  .circle-indicator {
    position:relative;
    display: inline-block;
    float: left;
    width: 23px;
    height: 23px;
    margin-top: 4px;
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
    top: -2.3px;
    left: 0px;
    font-size: 1.3em;
    line-height: 24px;
  }
  .badge {
    background: #000000;
    position: relative;
    top: -1px;
    left: 5px;
    font-size: 11px;
    line-height: 20px;
    font-weight: 500;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    padding: 0px 8px;
  }
  .error-number {
    background: #000;
    display: inline-block;
    margin-right: 5px;
    padding: 3px 15px;
    font-weight: 700;
    text-align: center;
    color: #fff;
  }
  #articleListDL > tbody > tr.error {
    border-left: 1px solid red !important;
  }
  #articleListDL > tbody > tr.error > td {
    border-bottom-color: red;
  }
  #articleListDL > tbody > tr.error:last-child > td {
    border-bottom: 1px solid red !important;
  }
  #articleListDL > tbody > tr.error > td.indicator  {
    font-weight: 700;
    color: red !important;
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
  <li class="xn-openable active">
    <a href="#" onclick="return false;" title="Obchod">
      <i class="fa fa-building-o"></i>
      <span class="xn-text">Obchod</span>
    </a>
    <ul>
    <li data-menu-item="users">
      <a href="cpanel/store/users" title="Uživatelia">
        <i class="fa fa-users"></i>
        Uživatelia      </a>
    </li>
    <li data-menu-item="carts">
      <a href="cpanel/store/carts" title="Košíky">
        <i class="fa fa-shopping-cart"></i>
        Košíky      </a>
    </li>
    <li class="xn-openable" data-menu-item="orders">
      <a href="cpanel/store/orders" title="Objednávky">
        <i class="fa fa-clipboard"></i>
        Objednávky      </a>
      <ul>
        <li data-menu-item="list">
          <a href="cpanel/store/orders" title="List">
            <span class="fa fa-circle"></span>
            Prehľad          </a>
        </li>
        <li data-menu-item="management">
          <a href="cpanel/store/orders/management/short" title="Management">
            <span class="fa fa-circle"></span>
            Správa          </a>
        </li>
      </ul>
    </li>
    <li class="xn-openable" data-menu-item="catalog">
        <a href="#" onclick="return false;" title="Katalóg">
            <span class="fa fa-book"></span>
            Katalóg        </a>
        <ul>
            <li data-menu-item="articles">
                <a href="cpanel/store/catalog/articles/short" title="Artikle">
                    <span class="fa fa-circle"></span>
                    Artikle                </a>
            </li>
            <li data-menu-item="store-category-list">
                <a href="cpanel/store-category-list" title="Kategórie">
                    <span class="fa fa-circle"></span>
                    Kategórie                </a>
            </li>
            <li data-menu-item="store-attribute-list">
                <a href="cpanel/store-attribute-list" title="Atribúty">
                    <span class="fa fa-circle"></span>
                    Atribúty                </a>
            </li>
            <li data-menu-item="ordering">
                <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
                    <span class="fa fa-circle"></span>
                    Usporiadanie                </a>
            </li>
        </ul>
    </li>
    <li data-menu-item="thumbnail">
      <a href="cpanel/thumbnail" title="Thumbnail">
        <i class="fa fa-picture-o" aria-hidden="true"></i>
        Thumbnail      </a>
    </li>
    <li data-menu-item="warehouse">
      <a href="cpanel/store-warehouse-list" title="Sklady">
        <i class="fa fa-database"></i>
        Sklady      </a>
    </li>
    <li data-menu-item="statuses">
        <a href="cpanel/store/statuses" title="Stavy">
            <i class="fa fa-heartbeat"></i>
            Stavy        </a>
    </li>
    <li class="xn-openable" data-menu-item="delivery-payment">
        <a href="#" onclick="return false;" title="Doručovanie / Platby">
            <i class="fa fa-pencil-square"></i>
            Doručovanie / Platby        </a>
        <ul>
            <li data-menu-item="delivery">
                <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
                    <i class="fa fa-truck"></i>
                    Doručovanie                </a>
            </li>
            <li data-menu-item="payment">
                <a href="cpanel/store/delivery-payment/payment" title="Platby">
                    <i class="fa fa-usd"></i>
                    Platby                </a>
            </li>
            <li data-menu-item="ties">
                <a href="cpanel/store/delivery-payment/ties" title="Väzby">
                    <i class="fa fa-exchange"></i>
                    Väzby                </a>
            </li>
       </ul>
    </li>
    <li class="xn-openable" data-menu-item="localization">
        <a href="#" onclick="return false;" title="Lokalizácia">
            <span class="fa fa-globe"></span>
            Lokalizácia        </a>
        <ul>
            <li data-menu-item="currencies">
                <a href="cpanel/store/localization/currencies" title="Meny">
                    <span class="fa fa-circle"></span>
                    Meny                </a>
            </li>
            <li data-menu-item="taxes">
                <a href="cpanel/store/localization/taxes" title="Dane">
                    <span class="fa fa-circle"></span>
                    Dane                </a>
           </li>
       </ul>
    </li>
    <li data-menu-item="offers">
        <a href="cpanel/store/offers" title="Ponuky">
            <i class="fa fa-sticky-note-o"></i>
            Ponuky        </a>
    </li>
    <li data-menu-item="discount-circuits">
        <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
            <i class="fa fa-circle-o-notch"></i>
            Discount circuits        </a>
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
                    
  <li>
    <a href="#" onclick="return false;" title="Obchod">
      Obchod    </a>
  </li>
  <li class="active">
    <a href="cpanel/store-discount-circuit-list" title="Discount Circuits">
      Discount circuits    </a>
  </li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
  <div class="page-title">
    <h2>
      <i class="fa fa-circle-o-notch"></i>&nbsp;
      Discount circuits&nbsp;
      <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
  </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
  <form id="updateDiscountCircuitForm" action="cpanel/store-update-discount-circuit" method="post" role="form">
    <input type="hidden" name="dc-id" value="1" />

    <!-- DISCOUNT CIRCUIT TITLE -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-colorful">
            <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <span style="display:block;float:left;">
                    <span class="circle-indicator" style="background:#d9455b;">
                        <i class="fa fa-bullseye"></i>
                    </span>&nbsp;
                    V&yacute;predaj
                    </span>
                </h3>
            </div><!-- end panel-header -->
        </div><!-- end panel -->
    </div><!-- end col -->
    <!-- //-- DISCOUNT CIRCUIT TITLE -->

    <!-- DISCOUNT CIRCUIT LANGUAGE INFORMATION AND SEO -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-info panel-toggled">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-globe"></i>&nbsp;
                          LANGUAGE INFORMATION AND SEO
                      </h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div class="panel-body panel-body-form">
                      <div class="panel panel-default tabs" style="margin: 7px 0;">
              <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                  <li >
                    <a href="#tab-lang-seoen-GB" role="tab" data-toggle="tab">
                      <span class="flag-icon flag-icon-en-GB"  style="width:23px;height:23px;"></span>
                      <span style="position: relative;top: 5.5px;left: 1.5px;">English (United Kingdom)</span>
                    </a>
                  </li>
                                  <li >
                    <a href="#tab-lang-seoit-IT" role="tab" data-toggle="tab">
                      <span class="flag-icon flag-icon-it-IT"  style="width:23px;height:23px;"></span>
                      <span style="position: relative;top: 5.5px;left: 1.5px;">Italian (Italy)</span>
                    </a>
                  </li>
                                  <li class="active">
                    <a href="#tab-lang-seosk" role="tab" data-toggle="tab">
                      <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                      <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                    </a>
                  </li>
                              </ul>
              <div class="panel-body tab-content">
                                  <div class="tab-pane " id="tab-lang-seoen-GB">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                        <div class="form-group">
                          <label>
                            Názov okruhu
                            <span style="color:red;">*</span>
                          </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-en-GB"></span>
                            </span>
                            <input type="text"
                              name="lang[51]['circuit-name']"
                              value=""
                              placeholder="Názov okruhu"
                              class="form-control"
                              required/>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                                                          Titulka
                                                      </label>
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
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            Stručný popis
                          </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-en-GB"></span>
                            </span>
                            <textarea name="lang[51]['description']" class="form-control" rows="5">
                                                          </textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4 style="border-bottom:1px solid green;">SEO</h4>
                        <div class="form-group">
                          <label>
                                                          Metarobots
                                                      </label>
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
                                                          Meta keywords
                                                      </label>
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
                                                          Metadescription - krátky text, ktorý popisuje stránku.
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-en-GB"></span>
                            </span>
                            <textarea name="lang[51]['meta-description']"class="form-control" rows="5">
                                                          </textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:30px;">
                        <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                          <span class="pull-left" style="padding-top: 12px;">
                                                          HTML CONTENT
                                                      </span>
                        </h4>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-en-GB"></span>
                          </span>
                          <textarea name="lang[51]['html-content']" id="ckeditor_51" class="ckeditor" row="5">
                                                      </textarea>
                        </div><!-- end input-group -->
                      </div><!-- end col -->
                    </div><!-- end row -->
                  </div><!-- end tab -->
                                  <div class="tab-pane " id="tab-lang-seoit-IT">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                        <div class="form-group">
                          <label>
                            Názov okruhu
                            <span style="color:red;">*</span>
                          </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-it-IT"></span>
                            </span>
                            <input type="text"
                              name="lang[120]['circuit-name']"
                              value=""
                              placeholder="Názov okruhu"
                              class="form-control"
                              required/>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                                                          Titulka
                                                      </label>
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
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            Stručný popis
                          </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-it-IT"></span>
                            </span>
                            <textarea name="lang[120]['description']" class="form-control" rows="5">
                                                          </textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4 style="border-bottom:1px solid green;">SEO</h4>
                        <div class="form-group">
                          <label>
                                                          Metarobots
                                                      </label>
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
                                                          Meta keywords
                                                      </label>
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
                                                          Metadescription - krátky text, ktorý popisuje stránku.
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-it-IT"></span>
                            </span>
                            <textarea name="lang[120]['meta-description']"class="form-control" rows="5">
                                                          </textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:30px;">
                        <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                          <span class="pull-left" style="padding-top: 12px;">
                                                          HTML CONTENT
                                                      </span>
                        </h4>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-it-IT"></span>
                          </span>
                          <textarea name="lang[120]['html-content']" id="ckeditor_120" class="ckeditor" row="5">
                                                      </textarea>
                        </div><!-- end input-group -->
                      </div><!-- end col -->
                    </div><!-- end row -->
                  </div><!-- end tab -->
                                  <div class="tab-pane active" id="tab-lang-seosk">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                        <div class="form-group">
                          <label>
                            Názov okruhu
                            <span style="color:red;">*</span>
                          </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-sk"></span>
                            </span>
                            <input type="text"
                              name="lang[189]['circuit-name']"
                              value="V&yacute;predaj"
                              placeholder="Názov okruhu"
                              class="form-control"
                              required/>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                                                          Titulka
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-sk"></span>
                            </span>
                            <input type="text"
                              name="lang[189]['site-title']"
                              value="V&yacute;predaj"
                              class="form-control"/>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            Stručný popis
                          </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-sk"></span>
                            </span>
                            <textarea name="lang[189]['description']" class="form-control" rows="5">
                                                          </textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4 style="border-bottom:1px solid green;">SEO</h4>
                        <div class="form-group">
                          <label>
                                                          Metarobots
                                                      </label>
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
                                                          Meta keywords
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-sk"></span>
                            </span>
                            <input type="text"
                              name="lang[189]['meta-keywords']"
                              value="vypredaj,outlet,zlavy,zlacnene,oblecenie"
                              class="tagsinput form-control"/>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                                                          Metadescription - krátky text, ktorý popisuje stránku.
                                                      </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                              <span class="flag-icon flag-icon-sk"></span>
                            </span>
                            <textarea name="lang[189]['meta-description']"class="form-control" rows="5">
                                                          </textarea>
                            <span class="input-group-addon">
                              <i class="fa fa-file-text-o"></i>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:30px;">
                        <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                          <span class="pull-left" style="padding-top: 12px;">
                                                          HTML CONTENT
                                                      </span>
                        </h4>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-sk"></span>
                          </span>
                          <textarea name="lang[189]['html-content']" id="ckeditor_189" class="ckeditor" row="5">
                                                      </textarea>
                        </div><!-- end input-group -->
                      </div><!-- end col -->
                    </div><!-- end row -->
                  </div><!-- end tab -->
                              </div><!-- end panel-body -->
            </div><!-- end panel -->
                  </div><!-- end panel-body -->
      </div><!-- end panel -->
    </div><!-- end col -->
    <!-- //- DISCOUNT CIRCUIT LANGUAGE INFORMATION AND SEO -->
    
    <!-- DIRECTION -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="routerForm" class="panel panel-warning panel-toggled">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-map-signs"></i>&nbsp;
            DIRECTION          </h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div class="panel-body panel-body-form">
                      <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="ael" class="alert pull-right" style="display: none;" role="alert"><!-- --></div>
              </div><!-- end col -->
            </div><!-- end row -->
            <div class="row">
              <div id="r-r-f-c" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- START TABS -->
                <div class="panel panel-default tabs" style="margin: 5px 0;">                            
                  <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                          <li >
                        <a href="#tab-direction-pane-en-GB" role="tab" data-toggle="tab">
                          <span class="flag-icon flag-icon-en-GB"  style="width:23px;height:23px;"></span>
                          <span style="position: relative;top: 5.5px;left: 1.5px;">English (United Kingdom)</span>
                        </a>
                      </li>
                                          <li >
                        <a href="#tab-direction-pane-it-IT" role="tab" data-toggle="tab">
                          <span class="flag-icon flag-icon-it-IT"  style="width:23px;height:23px;"></span>
                          <span style="position: relative;top: 5.5px;left: 1.5px;">Italian (Italy)</span>
                        </a>
                      </li>
                                          <li class="active">
                        <a href="#tab-direction-pane-sk" role="tab" data-toggle="tab">
                          <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                          <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                        </a>
                      </li>
                                      </ul>                            
                  <div class="panel-body tab-content">
                                          <div class="tab-pane " id="tab-direction-pane-en-GB">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <div id="r-k-v-c-0-51" class="input-group">
                                                                  <span class="input-group-addon">
                                    http://carpedmfashion.local
                                  </span>
                                  <input id="r-k-i-0-51"
                                    type="text" 
                                    value="" 
                                    class="form-control r-k-v"
                                    data-route-id="0"
                                    data-lang-id="51"
                                    data-object-id="1"
                                    data-object-type-id="12"
                                    style="border-radius: 0px;"
                                  />
                                  <span class="input-group-addon">
                                    <span class="flag-icon flag-icon-en-GB"></span>
                                  </span>
                                                              </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div id="r-k-c-c-0-51" class="row" style="display:none;">
                              <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                <div class="form-group">
                                  <label for="key">
                                    URL KEY
                                  </label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <span class="flag-icon flag-icon-en-GB"></span>
                                    </span>
                                    <input id="r-k-c-i-0-51"
                                      type="text" 
                                      value="" 
                                      class="form-control"
                                      data-route-id="0"
                                      data-lang-id="51"
                                      data-object-id="1"
                                      data-object-type-id="12"
                                      style="border-radius: 0px;"
                                    />
                                    <span class="input-group-btn">
                                      <button type="button" 
                                        id="r-k-c-b-u-0-51" 
                                        class="btn btn-success r-k-c-b-u"
                                        data-route-id="0"
                                        data-lang-id="51"
                                        data-object-id="1"
                                        data-object-type-id="12"
                                        disabled
                                      >
                                        <i class="fa fa-floppy-o"></i>
                                      </button>
                                    </span>
                                  </div><!-- end input-group -->
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                <button type="button" id="r-k-c-b-c-0-51" class="btn btn-default btn-block" style="margin-top: 22px;">
                                  <i class="fa fa-times"></i>&nbsp;
                                  CLOSE                                </button>
                              </div><!-- end col -->
                            </div><!-- end row -->
                                                          <div id="r-p-c-0-51" class="row" style="display:none;">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                  <div class="form-group">
                                    <label for="prefix">
                                      URL PREFIX
                                    </label>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                        <span class="flag-icon flag-icon-en-GB"></span>
                                      </span>
                                      <input id="r-p-i-0-51"
                                        type="text" 
                                        value="" 
                                        class="form-control r-p-v"
                                        data-route-id="0"
                                        data-lang-id="51"
                                        data-object-id="1"
                                        data-object-type-id="12"
                                        style="border-radius: 0px;"
                                      />
                                      <span class="input-group-btn">
                                        <button type="button" 
                                          id="r-p-b-u-0-51" 
                                          class="btn btn-success r-p-b-u" 
                                          data-route-id="0"
                                          data-lang-id="51"
                                          data-object-id="1"
                                          data-object-type-id="12"
                                          disabled
                                        >
                                          <i class="fa fa-floppy-o"></i>
                                        </button>
                                      </span>
                                    </div><!-- end input-group -->
                                  </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                  <button type="button" id="r-p-b-cl-0-51" class="btn btn-default btn-block" style="margin-top: 22px;">
                                    <i class="fa fa-times"></i>&nbsp;
                                    CLOSE                                  </button>
                                </div><!-- end col -->
                              </div><!-- end row -->
                                                      </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row" style="margin-top: 15px;">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                          <button 
                                type="button" 
                                id="r-c-k-d-b-0-51" 
                                class="btn btn-success btn-block r-c-k-d-b"
                                data-route-id="0"
                                data-lang-id="51"
                                data-object-id="1"
                                data-object-type-id="12"
                                disabled                              >
                                <i class="fa fa-floppy-o"></i>&nbsp;
                                CREATE                              </button>
                                                      </div><!-- end col -->
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                              <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title">
                                  <i class="fa fa-map-o"></i>&nbsp;
                                  SUGGESTIONS                                </h3>
                              </div><!-- end panel-heading -->
                              <div class="panel-body panel-body-table">
                                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                  <strong>INFO!!</strong>
                                  There are no suggestions.                                </div><!-- end alert -->
                              </div><!-- end panel-body -->
                            </div><!-- end panel -->
                          </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row" style="margin-top: 5px;">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                              <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title">
                                  <i class="fa fa-exchange"></i>&nbsp;
                                  SEO REDIRECTION                                </h3>
                              </div><!-- end panel-heading -->
                              <div class="panel-body panel-body-table">
                                                                  <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                    <strong>INFO!!</strong>
                                    There are no redirection.                                  </div><!-- end alert -->
                                                              </div><!-- end panel-body -->
                            </div><!-- end panel -->
                          </div><!-- end col -->
                        </div><!-- end row -->
                      </div><!-- end tab-pane -->
                                          <div class="tab-pane " id="tab-direction-pane-it-IT">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <div id="r-k-v-c-0-120" class="input-group">
                                                                  <span class="input-group-addon">
                                    http://carpedmfashion.local
                                  </span>
                                  <input id="r-k-i-0-120"
                                    type="text" 
                                    value="" 
                                    class="form-control r-k-v"
                                    data-route-id="0"
                                    data-lang-id="120"
                                    data-object-id="1"
                                    data-object-type-id="12"
                                    style="border-radius: 0px;"
                                  />
                                  <span class="input-group-addon">
                                    <span class="flag-icon flag-icon-it-IT"></span>
                                  </span>
                                                              </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div id="r-k-c-c-0-120" class="row" style="display:none;">
                              <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                <div class="form-group">
                                  <label for="key">
                                    URL KEY
                                  </label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <span class="flag-icon flag-icon-it-IT"></span>
                                    </span>
                                    <input id="r-k-c-i-0-120"
                                      type="text" 
                                      value="" 
                                      class="form-control"
                                      data-route-id="0"
                                      data-lang-id="120"
                                      data-object-id="1"
                                      data-object-type-id="12"
                                      style="border-radius: 0px;"
                                    />
                                    <span class="input-group-btn">
                                      <button type="button" 
                                        id="r-k-c-b-u-0-120" 
                                        class="btn btn-success r-k-c-b-u"
                                        data-route-id="0"
                                        data-lang-id="120"
                                        data-object-id="1"
                                        data-object-type-id="12"
                                        disabled
                                      >
                                        <i class="fa fa-floppy-o"></i>
                                      </button>
                                    </span>
                                  </div><!-- end input-group -->
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                <button type="button" id="r-k-c-b-c-0-120" class="btn btn-default btn-block" style="margin-top: 22px;">
                                  <i class="fa fa-times"></i>&nbsp;
                                  CLOSE                                </button>
                              </div><!-- end col -->
                            </div><!-- end row -->
                                                          <div id="r-p-c-0-120" class="row" style="display:none;">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                  <div class="form-group">
                                    <label for="prefix">
                                      URL PREFIX
                                    </label>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                        <span class="flag-icon flag-icon-it-IT"></span>
                                      </span>
                                      <input id="r-p-i-0-120"
                                        type="text" 
                                        value="" 
                                        class="form-control r-p-v"
                                        data-route-id="0"
                                        data-lang-id="120"
                                        data-object-id="1"
                                        data-object-type-id="12"
                                        style="border-radius: 0px;"
                                      />
                                      <span class="input-group-btn">
                                        <button type="button" 
                                          id="r-p-b-u-0-120" 
                                          class="btn btn-success r-p-b-u" 
                                          data-route-id="0"
                                          data-lang-id="120"
                                          data-object-id="1"
                                          data-object-type-id="12"
                                          disabled
                                        >
                                          <i class="fa fa-floppy-o"></i>
                                        </button>
                                      </span>
                                    </div><!-- end input-group -->
                                  </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                  <button type="button" id="r-p-b-cl-0-120" class="btn btn-default btn-block" style="margin-top: 22px;">
                                    <i class="fa fa-times"></i>&nbsp;
                                    CLOSE                                  </button>
                                </div><!-- end col -->
                              </div><!-- end row -->
                                                      </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row" style="margin-top: 15px;">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                          <button 
                                type="button" 
                                id="r-c-k-d-b-0-120" 
                                class="btn btn-success btn-block r-c-k-d-b"
                                data-route-id="0"
                                data-lang-id="120"
                                data-object-id="1"
                                data-object-type-id="12"
                                disabled                              >
                                <i class="fa fa-floppy-o"></i>&nbsp;
                                CREATE                              </button>
                                                      </div><!-- end col -->
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                              <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title">
                                  <i class="fa fa-map-o"></i>&nbsp;
                                  SUGGESTIONS                                </h3>
                              </div><!-- end panel-heading -->
                              <div class="panel-body panel-body-table">
                                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                  <strong>INFO!!</strong>
                                  There are no suggestions.                                </div><!-- end alert -->
                              </div><!-- end panel-body -->
                            </div><!-- end panel -->
                          </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row" style="margin-top: 5px;">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                              <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title">
                                  <i class="fa fa-exchange"></i>&nbsp;
                                  SEO REDIRECTION                                </h3>
                              </div><!-- end panel-heading -->
                              <div class="panel-body panel-body-table">
                                                                  <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                    <strong>INFO!!</strong>
                                    There are no redirection.                                  </div><!-- end alert -->
                                                              </div><!-- end panel-body -->
                            </div><!-- end panel -->
                          </div><!-- end col -->
                        </div><!-- end row -->
                      </div><!-- end tab-pane -->
                                          <div class="tab-pane active" id="tab-direction-pane-sk">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <div id="r-k-v-c-7682-189" class="input-group">
                                                                  <span class="input-group-addon">
                                    <i class="fa fa-chrome"></i>
                                  </span>
                                  <input type="text" value="http://carpedmfashion.local/vypredaj" class="form-control" />
                                  <span class="input-group-btn">
                                    <a href="http://carpedmfashion.local/vypredaj" target="__blank" class="btn btn-primary">
                                      <i class="fa fa-eye"></i>
                                    </a>
                                  </span>
                                                              </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div id="r-k-c-c-7682-189" class="row" style="display:none;">
                              <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                <div class="form-group">
                                  <label for="key">
                                    URL KEY
                                  </label>
                                  <div class="input-group">
                                    <span class="input-group-addon">
                                      <span class="flag-icon flag-icon-sk"></span>
                                    </span>
                                    <input id="r-k-c-i-7682-189"
                                      type="text" 
                                      value="" 
                                      class="form-control"
                                      data-route-id="7682"
                                      data-lang-id="189"
                                      data-object-id="1"
                                      data-object-type-id="12"
                                      style="border-radius: 0px;"
                                    />
                                    <span class="input-group-btn">
                                      <button type="button" 
                                        id="r-k-c-b-u-7682-189" 
                                        class="btn btn-success r-k-c-b-u"
                                        data-route-id="7682"
                                        data-lang-id="189"
                                        data-object-id="1"
                                        data-object-type-id="12"
                                        disabled
                                      >
                                        <i class="fa fa-floppy-o"></i>
                                      </button>
                                    </span>
                                  </div><!-- end input-group -->
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                <button type="button" id="r-k-c-b-c-7682-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                  <i class="fa fa-times"></i>&nbsp;
                                  CLOSE                                </button>
                              </div><!-- end col -->
                            </div><!-- end row -->
                                                          <div id="r-p-c-7682-189" class="row" style="display:none;">
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                  <div class="form-group">
                                    <label for="prefix">
                                      URL PREFIX
                                    </label>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                        <span class="flag-icon flag-icon-sk"></span>
                                      </span>
                                      <input id="r-p-i-7682-189"
                                        type="text" 
                                        value="" 
                                        class="form-control r-p-v"
                                        data-route-id="7682"
                                        data-lang-id="189"
                                        data-object-id="1"
                                        data-object-type-id="12"
                                        style="border-radius: 0px;"
                                      />
                                      <span class="input-group-btn">
                                        <button type="button" 
                                          id="r-p-b-u-7682-189" 
                                          class="btn btn-success r-p-b-u" 
                                          data-route-id="7682"
                                          data-lang-id="189"
                                          data-object-id="1"
                                          data-object-type-id="12"
                                          disabled
                                        >
                                          <i class="fa fa-floppy-o"></i>
                                        </button>
                                      </span>
                                    </div><!-- end input-group -->
                                  </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                  <button type="button" id="r-p-b-cl-7682-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                    <i class="fa fa-times"></i>&nbsp;
                                    CLOSE                                  </button>
                                </div><!-- end col -->
                              </div><!-- end row -->
                                                      </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row" style="margin-top: 15px;">
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                          <div class="row" style="margin-bottom: 5px;">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-left: 0px;">
                                  <button 
                                    type="button"
                                    id="r-k-c-7682-189"
                                    class="btn btn-warning btn-block r-k-c"
                                    data-route-id="7682"
                                    data-lang-id="189"
                                    data-object-id="1"
                                    data-object-type-id="12"
                                  >
                                    <i class="fa fa-exchange"></i>&nbsp;
                                    CHANGE URL KEY                                  </button>
                                </div><!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                  <button 
                                    type="button"
                                    class="btn btn-danger btn-block r-d-d"
                                    data-route-id="7682"
                                    data-lang-id="189"
                                    data-object-id="1"
                                    data-object-type-id="12"
                                  >
                                      <i class="fa fa-times"></i>&nbsp;
                                      DELETE                                  </button>
                                </div><!-- end col -->
                              </div><!-- end row -->
                                                              <button type="button" 
                                  id="r-p-b-c-7682-189" 
                                  data-route-id="7682"
                                  data-lang-id="189"
                                  data-object-id="1"
                                  data-object-type-id="12"
                                  class="btn btn-default btn-block r-p-b-c"
                                >
                                  <i class="fa fa-location-arrow"></i>&nbsp;
                                  ADD URL PREFIX                                </button>
                                                                                                                  </div><!-- end col -->
                          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                              <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title">
                                  <i class="fa fa-map-o"></i>&nbsp;
                                  SUGGESTIONS                                </h3>
                              </div><!-- end panel-heading -->
                              <div class="panel-body panel-body-table">
                                <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                  <strong>INFO!!</strong>
                                  There are no suggestions.                                </div><!-- end alert -->
                              </div><!-- end panel-body -->
                            </div><!-- end panel -->
                          </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row" style="margin-top: 5px;">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                              <div class="panel-heading ui-draggable-handle">
                                <h3 class="panel-title">
                                  <i class="fa fa-exchange"></i>&nbsp;
                                  SEO REDIRECTION                                </h3>
                              </div><!-- end panel-heading -->
                              <div class="panel-body panel-body-table">
                                                                  <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                    <strong>INFO!!</strong>
                                    There are no redirection.                                  </div><!-- end alert -->
                                                              </div><!-- end panel-body -->
                            </div><!-- end panel -->
                          </div><!-- end col -->
                        </div><!-- end row -->
                      </div><!-- end tab-pane -->
                                      </div><!-- end panel-body -->
                </div><!-- end panel -->
                <!-- END TABS -->
              </div><!-- end col -->
            </div><!--- end row -->
                  </div><!-- end panel-body -->
      </div><!-- end panel -->
    </div><!-- end col -->
    <!-- //-- DIRECTION -->

    <!-- DISCOUNT CIRCUIT GENERAL INFORMATION -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-primary panel-toggled">
        <div class="panel-heading ui-draggable-handle">
          <h3 class="panel-title">
            <i class="fa fa-info-circle"></i>&nbsp;
            VŠEOBECNÉ INFORMÁCIE          </h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div class="panel-body panel-body-form">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>Circuit name internal<span style="color:red;">*</span></label>
                <input type="text" name="circuit-name-int" value="V&yacute;predaj" class="form-control" minlength="3" maxlength="150" required="">
                <span class="help-block">Neplatné znaky ;=#{ }</span>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>Farba</label>
                <div class="input-group color" data-color="#d9455b" data-color-format="hex" id="colorpicker">
                <input type="text" name="color" value="#d9455b" class="form-control"/>
                <span class="input-group-addon">
                    <i style="background-color:#d9455b"></i>
                </span>
                </div>
              </div><!-- end form-group -->
            </div><!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>
                  Description                </label>
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
            NASTAVENIA          </h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div class="panel-body panel-body-form">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                <label>
                  TYPE                </label>
                                                  <input type="text" value="ARTICLE LIST" class="form-control" disabled>
                              </div><!-- end form-group -->
            </div><!-- end col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0px;">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>
                      FROM                    </label>
                    <input type="text" name="from" value="" maxlength="12" class="form-control datepicker">
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>
                      UNTIL                    </label>
                    <input type="text" name="until" value="" maxlength="12" class="form-control datepicker">
                  </div><!-- end form-group -->
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="row" style="margin-top: 15px;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>
                      TYPE OF DISCOUNT                      <span style="color:red;">*</span>
                    </label>
                    <select name="type-of-discount-id" class="form-control select" required>
                      <option value="0">Vyberte...</option>
                      <option value="1" >
                                                  [ - ] Exact amount
                                              </option>
                      <option value="2" selected>
                                                  [ % ] Percentage
                                              </option>
                    </select>
                    <span class="help-block">Select the type of discount</span>
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label>
                      Publikovať                    </label><br>
                    <label class="switch">
                      <input type="checkbox" name="publish" value="1" checked>
                      <span></span>
                    </label>
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label>
                      DISCOUNT VALUE                      <span style="color:red;">*</span>
                    </label>
                    <input type="text" name="discount-value" value="50.00" maxlength="12" class="form-control">
                  </div><!-- end form-group -->
                </div><!-- end col -->
              </div><!-- end row -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end panel-body -->
      </div><!-- end panel -->
    </div><!-- end col -->
    <!-- //-- DISCOUNT CIRCUIT SETTINGS -->

    <button type="submit" id="btn-save" class="btn btn-success" role="button">
      <i class="fa fa-save"></i>
    </button>
  </form>

  <!-- DISCOUNT CIRCUIT ARTICLE LIST -->
  <div id="plpt">
    <form action="cpanel/store-delete-article-list-from-discount-circuit" method="post" role="form">
      <input type="hidden" name="dc-id" value="1"/>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <span class="btn btn-info" style="margin: 0 15px;">36</span>
              ZOZNAM PRODUKTOV
              &nbsp;<span class="badge">Zobrazených 1-10 z 36 záznamov</span>            </h3>
            <ul class="panel-controls">
              <li>
                <a href="#" onclick="return false;" id="a-o-a-l" title="Article List">
                  <span class="fa fa-plus"></span>
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
                  <div class="form-group pull-left" style="width:150px;margin-right:5px;">
                    <select id="c-control" class="form-control select">
                      <option value="0">Vyberte...</option>
                      <option value="99">
                        Oznažiť všetko
                      </option>
                      <option value="88">
                        Odznažiť všetko
                      </option>
                    </select>
                  </div>
                  <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                    <select class="form-control select" onchange="location = 'cpanel/store-update-discount-circuit-form/1/1/'+this.options[this.selectedIndex].value;">
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
                            <button type="button" onclick="location = 'cpanel/store-update-discount-circuit-form/1/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                              <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                  </div>
                  <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store-update-discount-circuit-form/1/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store-update-discount-circuit-form/1/1/10">1</a></li><li class=""><a href="cpanel/store-update-discount-circuit-form/1/2/10">2</a></li><li class=""><a href="cpanel/store-update-discount-circuit-form/1/3/10">3</a></li><li class=""><a href="cpanel/store-update-discount-circuit-form/1/4/10">4</a></li><li class=""><a href="cpanel/store-update-discount-circuit-form/1/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                </div>
                              </div><!-- end row -->
              <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                <table id="articleListDL" class="table table-bordered table-striped table-actions">
                  <thead>
                  <tr>
                    <th width="70" class="text-center">
                      #
                    </th>
                    <th width="30" class="text-center">
                      OBRÁZOK                    </th>
                    <th width="200" class="text-center">
                      SKU                    </th>
                    <th class="text-left">
                      NÁZOV ARTIKLU                    </th>
                    <th width="150" class="text-right">
                      Pôvodná suma
                    </th>
                    <th width="150" class="text-right">
                      Zľava (suma)
                    </th>
                    <th width="150" class="text-right">
                      Zľava (percentá)
                    </th>
                    <th width="150" class="text-right">
                      Suma po zľave
                    </th>
                    <th width="100" class="text-center">
                      ODSTRÁNIŤ                    </th>
                  </tr>
                  </thead>
                  <tbody>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[0]['article-id']" value="21"/>
                        <input type="checkbox" name="articleList[0]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/86023d014dde6249458e845d39f9a8c9.png" height="35" alt="CITIZEN_0"/>
                                              </td>
                      <td class="text-center">
                        100021
                      </td>
                      <td class="text-left">
                        CITIZEN
                      </td>
                      <td class="text-right indicator">
                        <strong>60.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>30.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>30.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="21" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[1]['article-id']" value="26"/>
                        <input type="checkbox" name="articleList[1]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/fc68b865906ae104c5a8ac006cf64b46.png" height="35" alt="WAU SAIL_0"/>
                                              </td>
                      <td class="text-center">
                        100026
                      </td>
                      <td class="text-left">
                        WAU SAIL
                      </td>
                      <td class="text-right indicator">
                        <strong>34.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>17.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>17.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="26" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[2]['article-id']" value="30"/>
                        <input type="checkbox" name="articleList[2]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/252880dea5b1b3208ed0e69aa29b34ab.png" height="35" alt="BOOR_0"/>
                                              </td>
                      <td class="text-center">
                        100030
                      </td>
                      <td class="text-left">
                        BOOR
                      </td>
                      <td class="text-right indicator">
                        <strong>12.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>6.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>6.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="30" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[3]['article-id']" value="57"/>
                        <input type="checkbox" name="articleList[3]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/a73d7d4f9d8683c4aefd36f0a0052e7b.png" height="35" alt="GENS_5"/>
                                              </td>
                      <td class="text-center">
                        100057
                      </td>
                      <td class="text-left">
                        GENS
                      </td>
                      <td class="text-right indicator">
                        <strong>30.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>15.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>15.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="57" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[4]['article-id']" value="101"/>
                        <input type="checkbox" name="articleList[4]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/38f27b26b1b3decb04296715e6c9111c.png" height="35" alt="AWAY_27"/>
                                              </td>
                      <td class="text-center">
                        100101
                      </td>
                      <td class="text-left">
                        AWAY
                      </td>
                      <td class="text-right indicator">
                        <strong>70.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>35.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>35.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="101" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[5]['article-id']" value="126"/>
                        <input type="checkbox" name="articleList[5]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/e9c58568a87b633d833c189ffb655d38.png" height="35" alt="SPORTY"/>
                                              </td>
                      <td class="text-center">
                        100126
                      </td>
                      <td class="text-left">
                        SPORTY
                      </td>
                      <td class="text-right indicator">
                        <strong>10.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>5.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>5.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="126" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[6]['article-id']" value="127"/>
                        <input type="checkbox" name="articleList[6]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/4323504032e9c20a74ef0ab817781108.png" height="35" alt="SPORTY STRIPED"/>
                                              </td>
                      <td class="text-center">
                        100127
                      </td>
                      <td class="text-left">
                        SPORTY STRIPED
                      </td>
                      <td class="text-right indicator">
                        <strong>10.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>5.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>5.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="127" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[7]['article-id']" value="138"/>
                        <input type="checkbox" name="articleList[7]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/8d8fc94e661c77d3068b628ad48e0521.png" height="35" alt="WEST_0"/>
                                              </td>
                      <td class="text-center">
                        100138
                      </td>
                      <td class="text-left">
                        WEST
                      </td>
                      <td class="text-right indicator">
                        <strong>30.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>15.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>15.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="138" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[8]['article-id']" value="152"/>
                        <input type="checkbox" name="articleList[8]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/94cc39ac81cb26bdd2af3afb6032a09f.png" height="35" alt="AVANTGARD_4"/>
                                              </td>
                      <td class="text-center">
                        100152
                      </td>
                      <td class="text-left">
                        AVANTGARD
                      </td>
                      <td class="text-right indicator">
                        <strong>40.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>20.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>20.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="152" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                      <tr >
                      <td class="text-center">
                        <input type="hidden" name="articleList[9]['article-id']" value="156"/>
                        <input type="checkbox" name="articleList[9]['on']" value="1">
                      </td>
                      <td class="text-center">
                                                  <img src="files/a30da5bc35b4e19361ab23177a1050dd.png" height="35" alt="SCARF_0"/>
                                              </td>
                      <td class="text-center">
                        100156
                      </td>
                      <td class="text-left">
                        SCARF
                      </td>
                      <td class="text-right indicator">
                        <strong>44.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>22.00&euro;</strong>
                      </td>
                      <td class="text-right indicator">
                        <strong>50%</strong>
                      </td>
                      <td class="text-right price indicator">
                        <strong>22.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <button type="button" data-article-id="156" class="btn btn-danger push-x">
                          &nbsp;&nbsp;<span class="fa fa-minus"></span>
                        </button>
                      </td>
                    </tr>
                                    </tbody>
                </table>
              </div><!-- end table-responsive -->
                      </div><!-- end panel-body -->
                      <div class="panel-footer">
              <button type="submit" class="btn btn-danger">
                <i class="fa fa-times"></i>&nbsp;VYMAZAŤ VÝBER
              </button>
            </div><!-- end panel-footer -->
                  </div><!-- end panel -->
      </div><!-- end col -->
    </form>
  </div><!-- end plpt -->
  <!-- //-- DISCOUNT CIRCUIT ARTICLE LIST -->

</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
  <!-- MODAL WINDOW ARTICLE LIST -->
  <div class="modal" id="addOnArticles" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1200px;">
      <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
  </div><!-- end modal -->
  <!-- //-- MODAL WINDOW ARTICLE LIST -->

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
<script type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/assigningDiscountCircuitArticleList.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/router.js"></script>
<script type="text/javascript">
  Router.init(1);
  
  AssigningDiscountCircuitArticleList.init(1,1,10,0);
</script>
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
