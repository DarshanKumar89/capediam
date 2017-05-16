<?php /*%%SmartyHeaderCode:9961233635889bad96db9c3-15251336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2738d480c471e98382c7760380d4dd93627040' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/translate/product_update.tpl',
      1 => 1470844332,
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
    '141e4549dd3a78306fd1c8248cf957c13137049b' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/translate/product_update.tpl',
      1 => 1470844332,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '9961233635889bad96db9c3-15251336',
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
  'unifunc' => 'content_5889bada9a8895_53458035',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889bada9a8895_53458035')) {function content_5889bada9a8895_53458035($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" href="extensions/bootstrap-tagsinput/bootstrap-tagsinput.css"/>
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
.form-control[disabled], 
.form-control[readonly] {
  color: #000;
}
.poster {
  position: relative;
  display: block;
  float: left;
  width: 120px;
  height: 120px;
  overflow: hidden;
}
.poster > img {
  position: relative;
  top: 50%;
  display: block;
  max-width: 100%;
  max-height: 100%;
  margin: 0 auto;
  vertical-align: middle;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.poster > span {
  display: block;
  width: 90px;
  height: 90px;
  margin: 10px auto;
  font-size: 1.4em;
  color: #4285f4;
}
.poster .glyphicon {
  font-size: 3em;
  left: 21px;
}

/******************
*
* AUTOCOMPLETE
*
******************/

.ax-message {
    display: none;
}
.ui-ac-wrapp {
  position: relative;
  min-height: 1px;
  max-height: 400px;
  margin-top: 20px;
  padding: 0 10px;
  overflow-x: hidden;
  overflow-y: auto;
}
.ui-ac-wrapp a.btn-ui-ac  {
  display: block;
  height: 100px;
  border: 1px solid #dfdfdf;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-circle {
  position: relative;
  float: left;
  width: 25%;
  height: 83px;
  margin: 4px -5px 0 -5px;
  padding: 0;
  border: 1px solid #dfdfdf;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-circle > img {
  position: relative;
  top: 50%;
  display: block;
  max-width: 100%;
  max-height: 100%;
  margin: 0 auto;
  vertical-align: middle;
  transform: translateY(-50%);
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text {
  position: relative;
  float: right;
  width: 75%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > h5,
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > p {
  word-break: break-word;
  white-space: normal;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > h5 {
  margin-top: 3px;
  margin-bottom: 3px;
  padding-left: 5px;
  padding-bottom: 2px;
  font-size: 15px;
  font-weight: 700;
  text-align: left;
  color: #333333;
  border-bottom: 1px solid #ddd;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > p {
  width: 100%;
  margin: 0;
  padding-left: 5px;
  font-size: 12px;
  line-height: 13px;
  text-align: left;
  color: #333333;
}
.ui-ac-wrapp a.btn-ui-ac:hover {
  background: #29b2e1;
  border-color: #29b2e1;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-circle {
  background: #fff;
  border-color: #fff;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > h5,
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > p {
  color: #fff;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > h5 {
  border-color: #fff;
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
  <a href="cpanel/translate" title="Preklady">
    Preklady
  </a>
</li>
<li class="active">
  <a href="cpanel/translate-product/1/0/0/0/1/10" title="Preklad produktu">
    Preklad produktu
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-language" aria-hidden="true"></i>&nbsp;
    Preklad produktu
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
      <form action="cpanel/update-translate-product" method="post" role="form">
      <input type="hidden" name="articleId" value="8" />
      <input type="hidden" name="lang0" value="0" />
      <input type="hidden" name="lang1" value="120" />
      <input type="hidden" name="sort" value="0" />
      <input type="hidden" name="page" value="1" />
      <input type="hidden" name="limit" value="10" />
      <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">

        <!-- ARTICLE TITLE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-colorful">
            <div class="panel-heading ui-draggable-handle">
              <div class="poster">
                                  <img src="/files/a7be1f476b7cb281d6c5c3b700d44600.jpg" height="100" alt="DSC06437_u2"/>
                              </div>
              <h3 class="panel-title" style="overflow: hidden;">
                WILD JEANS
              </h3>                  
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                  <div class="form-group pull-left" style="width:660px;min-width: 400px;margin-right:5px;">
                    <div class="input-group">
                      <input type="text" name="q" value="" placeholder="Hľadaný výraz" class="form-control" autocomplete="off">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-info">
                          <i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div><!-- end input-group -->
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                  <div class="btn-group pull-right" role="group">
                    <a href="cpanel/translate-product/7/0/120"  class="btn btn-default" >
                      <i class="fa fa-arrow-left"></i>
                    </a>
                    <a href="cpanel/translate-product/9/0/120"  class="btn btn-default" >
                      <i class="fa fa-arrow-right"></i>
                    </a>
                  </div>
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <p class="ax-message" style="padding: 15px 0;">
                    <i class="fa fa-cog"></i>&nbsp;Please wait...
                  </p>
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="row ui-ac-wrapp"><!-- --></div><!-- end row -->
              <div class="row" style="margin-top: 15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="form-control select" onchange="location = 'cpanel/translate-product/8/'+this.options[this.selectedIndex].value+'/120';">
                      <option value="0">Vyberte...</option>
                                              <option value="51" >English (United Kingdom)</option>
                                              <option value="120" >Italian (Italy)</option>
                                              <option value="189" >Slovak</option>
                                          </select>
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="form-control select" onchange="location = 'cpanel/translate-product/8/0/'+this.options[this.selectedIndex].value;" data-live-search="true">
                      <option value="0">Vyberte...</option>
                                              <option value="51" >English (United Kingdom)</option>
                                              <option value="120" selected>Italian (Italy)</option>
                                              <option value="189" >Slovak</option>
                                          </select>
                  </div><!-- end form-group -->
                </div><!-- end col -->
              </div><!-- end row -->
            </div><!-- end panel-body -->
          </div><!-- end panel -->
        </div><!-- end col -->
        <!-- // ARTICLE TITLE -->

        <!-- LEFT SIDE -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="alert alert-info" role="alert">
              <strong>INFO!</strong>
              Zvoľte jazyk.
            </div><!-- end alert -->
                  </div>
        <!-- //-- LEFT SIDE -->

        <!-- RIGHT SIDE -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="panel panel-success">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <span class="flag-icon flag-icon-it-IT"></span>
                  Italian (Italy)
                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-form">
                <div class="form-group">
                  <label>
                    TITULKA STRÁNKY
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-it-IT"></span>
                    </span>
                    <input type="text" name="site-title" value="Pantaloni da donna - WILD J PANTS" class="form-control"/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    NÁZOV PRODUKTU
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-it-IT"></span>
                    </span>
                    <input type="text" name="article-name" value="WILD J PANTS" class="form-control" required/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    POPIS
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-it-IT"></span>
                    </span>
                    <textarea name="description" class="form-control" rows="5">Pantaloni da donna con applicazioni in denim</textarea>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    META - KLÚČOVÉ SLOVÁ
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-it-IT"></span>
                    </span>
                    <input type="text" name="meta-keywords" value="donna,design,tuta,jeans,cotone,prodotto di marca,carpedm,di qualit&agrave;,sportivo,fashion" class="form-control tagsinput"/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    META - POPIS
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-it-IT"></span>
                    </span>
                    <textarea name="meta-description" class="form-control" rows="5">Pantaloni da donna con applicazioni in denim</textarea>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    HTML CONTENT
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-it-IT"></span>
                    </span>
                    <textarea name="html-content" id="ckeditor_120" class="ckeditor" row="5"><p>Pantalone di tuta di design originale e di qualit&agrave; con applicazioni di jeans. Il loro vantaggio &egrave; la flessibilit&agrave; e la convenienza.</p>
</textarea>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
              </div><!-- end panel-body -->
            </div><!-- end panel -->
                  </div>
        <!-- //-- RIGHT SIDE -->
        
        <!-- DIRECTION -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="routerForm" class="panel panel-warning panel-toggled">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                <i class="fa fa-map-signs"></i>&nbsp;
                DIRECTION              </h3>
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
                                  <div id="r-k-v-c-8107-51" class="input-group">
                                                                          <span class="input-group-addon">
                                        <i class="fa fa-chrome"></i>
                                      </span>
                                      <input type="text" value="http://www.carpedmfashion.com/womens-clothing/womens-sweatpants/womens-sweatpants-wild-jeans" class="form-control" />
                                      <span class="input-group-btn">
                                        <a href="http://www.carpedmfashion.com/womens-clothing/womens-sweatpants/womens-sweatpants-wild-jeans" target="__blank" class="btn btn-primary">
                                          <i class="fa fa-eye"></i>
                                        </a>
                                      </span>
                                                                      </div><!-- end input-group -->
                                </div><!-- end form-group -->
                                <div id="r-k-c-c-8107-51" class="row" style="display:none;">
                                  <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                    <div class="form-group">
                                      <label for="key">
                                        URL KEY
                                      </label>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <span class="flag-icon flag-icon-en-GB"></span>
                                        </span>
                                        <input id="r-k-c-i-8107-51"
                                          type="text" 
                                          value="" 
                                          class="form-control"
                                          data-route-id="8107"
                                          data-lang-id="51"
                                          data-object-id="8"
                                          data-object-type-id="11"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-k-c-b-u-8107-51" 
                                            class="btn btn-success r-k-c-b-u"
                                            data-route-id="8107"
                                            data-lang-id="51"
                                            data-object-id="8"
                                            data-object-type-id="11"
                                            disabled
                                          >
                                            <i class="fa fa-floppy-o"></i>
                                          </button>
                                        </span>
                                      </div><!-- end input-group -->
                                    </div><!-- end form-group -->
                                  </div><!-- end col -->
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                    <button type="button" id="r-k-c-b-c-8107-51" class="btn btn-default btn-block" style="margin-top: 22px;">
                                      <i class="fa fa-times"></i>&nbsp;
                                      CLOSE                                    </button>
                                  </div><!-- end col -->
                                </div><!-- end row -->
                                                                  <div id="r-p-c-8107-51" class="row" style="display:none;">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                      <div class="form-group">
                                        <label for="prefix">
                                          URL PREFIX
                                        </label>
                                        <div class="input-group">
                                          <span class="input-group-addon">
                                            <span class="flag-icon flag-icon-en-GB"></span>
                                          </span>
                                          <input id="r-p-i-8107-51"
                                            type="text" 
                                            value="" 
                                            class="form-control r-p-v"
                                            data-route-id="8107"
                                            data-lang-id="51"
                                            data-object-id="8"
                                            data-object-type-id="11"
                                            style="border-radius: 0px;"
                                          />
                                          <span class="input-group-btn">
                                            <button type="button" 
                                              id="r-p-b-u-8107-51" 
                                              class="btn btn-success r-p-b-u" 
                                              data-route-id="8107"
                                              data-lang-id="51"
                                              data-object-id="8"
                                              data-object-type-id="11"
                                              disabled
                                            >
                                              <i class="fa fa-floppy-o"></i>
                                            </button>
                                          </span>
                                        </div><!-- end input-group -->
                                      </div><!-- end form-group -->
                                    </div><!-- end col -->
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                      <button type="button" id="r-p-b-cl-8107-51" class="btn btn-default btn-block" style="margin-top: 22px;">
                                        <i class="fa fa-times"></i>&nbsp;
                                        CLOSE                                      </button>
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
                                        id="r-k-c-8107-51"
                                        class="btn btn-warning btn-block r-k-c"
                                        data-route-id="8107"
                                        data-lang-id="51"
                                        data-object-id="8"
                                        data-object-type-id="11"
                                      >
                                        <i class="fa fa-exchange"></i>&nbsp;
                                        CHANGE URL KEY                                      </button>
                                    </div><!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                      <button 
                                        type="button"
                                        class="btn btn-danger btn-block r-d-d"
                                        data-route-id="8107"
                                        data-lang-id="51"
                                        data-object-id="8"
                                        data-object-type-id="11"
                                      >
                                          <i class="fa fa-times"></i>&nbsp;
                                          DELETE                                      </button>
                                    </div><!-- end col -->
                                  </div><!-- end row -->
                                                                      <button type="button" 
                                      id="r-p-b-c-8107-51" 
                                      data-route-id="8107"
                                      data-lang-id="51"
                                      data-object-id="8"
                                      data-object-type-id="11"
                                      class="btn btn-default btn-block r-p-b-c"
                                    >
                                      <i class="fa fa-location-arrow"></i>&nbsp;
                                      ADD URL PREFIX                                    </button>
                                                                                                                                  </div><!-- end col -->
                              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                                  <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                      <i class="fa fa-map-o"></i>&nbsp;
                                      SUGGESTIONS                                    </h3>
                                  </div><!-- end panel-heading -->
                                  <div class="panel-body panel-body-table">
                                    <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                      <strong>INFO!!</strong>
                                      There are no suggestions.                                    </div><!-- end alert -->
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
                                      SEO REDIRECTION                                    </h3>
                                  </div><!-- end panel-heading -->
                                  <div class="panel-body panel-body-table">
                                                                          <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                        <strong>INFO!!</strong>
                                        There are no redirection.                                      </div><!-- end alert -->
                                                                      </div><!-- end panel-body -->
                                </div><!-- end panel -->
                              </div><!-- end col -->
                            </div><!-- end row -->
                          </div><!-- end tab-pane -->
                                                  <div class="tab-pane " id="tab-direction-pane-it-IT">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <div id="r-k-v-c-8417-120" class="input-group">
                                                                          <span class="input-group-addon">
                                        <i class="fa fa-chrome"></i>
                                      </span>
                                      <input type="text" value="http://www.carpedmfashion.com/abbigliamento-donna/pantaloni-donna/pantaloni-donna-wild-jeans" class="form-control" />
                                      <span class="input-group-btn">
                                        <a href="http://www.carpedmfashion.com/abbigliamento-donna/pantaloni-donna/pantaloni-donna-wild-jeans" target="__blank" class="btn btn-primary">
                                          <i class="fa fa-eye"></i>
                                        </a>
                                      </span>
                                                                      </div><!-- end input-group -->
                                </div><!-- end form-group -->
                                <div id="r-k-c-c-8417-120" class="row" style="display:none;">
                                  <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                    <div class="form-group">
                                      <label for="key">
                                        URL KEY
                                      </label>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <span class="flag-icon flag-icon-it-IT"></span>
                                        </span>
                                        <input id="r-k-c-i-8417-120"
                                          type="text" 
                                          value="" 
                                          class="form-control"
                                          data-route-id="8417"
                                          data-lang-id="120"
                                          data-object-id="8"
                                          data-object-type-id="11"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-k-c-b-u-8417-120" 
                                            class="btn btn-success r-k-c-b-u"
                                            data-route-id="8417"
                                            data-lang-id="120"
                                            data-object-id="8"
                                            data-object-type-id="11"
                                            disabled
                                          >
                                            <i class="fa fa-floppy-o"></i>
                                          </button>
                                        </span>
                                      </div><!-- end input-group -->
                                    </div><!-- end form-group -->
                                  </div><!-- end col -->
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                    <button type="button" id="r-k-c-b-c-8417-120" class="btn btn-default btn-block" style="margin-top: 22px;">
                                      <i class="fa fa-times"></i>&nbsp;
                                      CLOSE                                    </button>
                                  </div><!-- end col -->
                                </div><!-- end row -->
                                                                  <div id="r-p-c-8417-120" class="row" style="display:none;">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                      <div class="form-group">
                                        <label for="prefix">
                                          URL PREFIX
                                        </label>
                                        <div class="input-group">
                                          <span class="input-group-addon">
                                            <span class="flag-icon flag-icon-it-IT"></span>
                                          </span>
                                          <input id="r-p-i-8417-120"
                                            type="text" 
                                            value="" 
                                            class="form-control r-p-v"
                                            data-route-id="8417"
                                            data-lang-id="120"
                                            data-object-id="8"
                                            data-object-type-id="11"
                                            style="border-radius: 0px;"
                                          />
                                          <span class="input-group-btn">
                                            <button type="button" 
                                              id="r-p-b-u-8417-120" 
                                              class="btn btn-success r-p-b-u" 
                                              data-route-id="8417"
                                              data-lang-id="120"
                                              data-object-id="8"
                                              data-object-type-id="11"
                                              disabled
                                            >
                                              <i class="fa fa-floppy-o"></i>
                                            </button>
                                          </span>
                                        </div><!-- end input-group -->
                                      </div><!-- end form-group -->
                                    </div><!-- end col -->
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                      <button type="button" id="r-p-b-cl-8417-120" class="btn btn-default btn-block" style="margin-top: 22px;">
                                        <i class="fa fa-times"></i>&nbsp;
                                        CLOSE                                      </button>
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
                                        id="r-k-c-8417-120"
                                        class="btn btn-warning btn-block r-k-c"
                                        data-route-id="8417"
                                        data-lang-id="120"
                                        data-object-id="8"
                                        data-object-type-id="11"
                                      >
                                        <i class="fa fa-exchange"></i>&nbsp;
                                        CHANGE URL KEY                                      </button>
                                    </div><!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                      <button 
                                        type="button"
                                        class="btn btn-danger btn-block r-d-d"
                                        data-route-id="8417"
                                        data-lang-id="120"
                                        data-object-id="8"
                                        data-object-type-id="11"
                                      >
                                          <i class="fa fa-times"></i>&nbsp;
                                          DELETE                                      </button>
                                    </div><!-- end col -->
                                  </div><!-- end row -->
                                                                      <button type="button" 
                                      id="r-p-b-c-8417-120" 
                                      data-route-id="8417"
                                      data-lang-id="120"
                                      data-object-id="8"
                                      data-object-type-id="11"
                                      class="btn btn-default btn-block r-p-b-c"
                                    >
                                      <i class="fa fa-location-arrow"></i>&nbsp;
                                      ADD URL PREFIX                                    </button>
                                                                                                                                  </div><!-- end col -->
                              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                                  <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                      <i class="fa fa-map-o"></i>&nbsp;
                                      SUGGESTIONS                                    </h3>
                                  </div><!-- end panel-heading -->
                                  <div class="panel-body panel-body-table">
                                    <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                      <strong>INFO!!</strong>
                                      There are no suggestions.                                    </div><!-- end alert -->
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
                                      SEO REDIRECTION                                    </h3>
                                  </div><!-- end panel-heading -->
                                  <div class="panel-body panel-body-table">
                                                                          <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                                        <table id="statusList" class="table table-bordered table-striped table-actions">
                                          <thead>
                                            <tr>
                                              <th width="25" class="text-center">
                                                #
                                              </th>
                                              <th class="text-center">
                                                PATH                                              </th>
                                              <th width="100" class="text-center">
                                                USE                                              </th>
                                              <th width="100" class="text-center">
                                                DELETE                                              </th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                                                                          <tr>
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                  1
                                                </td>
                                                <td class="text-left">
                                                  <strong>http://www.carpedmfashion.com/donna-abbigliamento-pantaloni-wild jeans</strong>
                                                </td>
                                                <td class="text-center">
                                                  <button type="button"
                                                    data-object-id="8"
                                                    data-object-type-id="11"
                                                    data-lang-id="120"
                                                    data-redirect-id="292" 
                                                    data-route-id="8417" 
                                                    class="btn btn-warning r-r-u-b"
                                                  >
                                                      &nbsp;&nbsp;<i class="fa fa-check"></i>
                                                  </button>
                                                </td>
                                                <td class="text-center">
                                                  <button type="button"
                                                    data-object-id="8"
                                                    data-object-type-id="11"
                                                    data-redirect-id="292"
                                                    class="btn btn-danger r-r-d-b"
                                                  >
                                                    &nbsp;&nbsp;<i class="fa fa-times"></i>
                                                  </button>
                                                </td>
                                              </tr>
                                                                                          <tr>
                                                <td class="text-center" style="font-weight:700;color:#660000;">
                                                  2
                                                </td>
                                                <td class="text-left">
                                                  <strong>http://www.carpedmfashion.com/pantaloni-donna-wild-jeans</strong>
                                                </td>
                                                <td class="text-center">
                                                  <button type="button"
                                                    data-object-id="8"
                                                    data-object-type-id="11"
                                                    data-lang-id="120"
                                                    data-redirect-id="438" 
                                                    data-route-id="8417" 
                                                    class="btn btn-warning r-r-u-b"
                                                  >
                                                      &nbsp;&nbsp;<i class="fa fa-check"></i>
                                                  </button>
                                                </td>
                                                <td class="text-center">
                                                  <button type="button"
                                                    data-object-id="8"
                                                    data-object-type-id="11"
                                                    data-redirect-id="438"
                                                    class="btn btn-danger r-r-d-b"
                                                  >
                                                    &nbsp;&nbsp;<i class="fa fa-times"></i>
                                                  </button>
                                                </td>
                                              </tr>
                                                                                      </tbody>
                                        </table>
                                      </div><!-- end table-responsive -->             
                                                                      </div><!-- end panel-body -->
                                </div><!-- end panel -->
                              </div><!-- end col -->
                            </div><!-- end row -->
                          </div><!-- end tab-pane -->
                                                  <div class="tab-pane active" id="tab-direction-pane-sk">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <div id="r-k-v-c-7207-189" class="input-group">
                                                                          <span class="input-group-addon">
                                        <i class="fa fa-chrome"></i>
                                      </span>
                                      <input type="text" value="http://www.carpedmfashion.com/damske-oblecenie/damske-teplaky/damske-teplaky-wild-jeans" class="form-control" />
                                      <span class="input-group-btn">
                                        <a href="http://www.carpedmfashion.com/damske-oblecenie/damske-teplaky/damske-teplaky-wild-jeans" target="__blank" class="btn btn-primary">
                                          <i class="fa fa-eye"></i>
                                        </a>
                                      </span>
                                                                      </div><!-- end input-group -->
                                </div><!-- end form-group -->
                                <div id="r-k-c-c-7207-189" class="row" style="display:none;">
                                  <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                    <div class="form-group">
                                      <label for="key">
                                        URL KEY
                                      </label>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <span class="flag-icon flag-icon-sk"></span>
                                        </span>
                                        <input id="r-k-c-i-7207-189"
                                          type="text" 
                                          value="" 
                                          class="form-control"
                                          data-route-id="7207"
                                          data-lang-id="189"
                                          data-object-id="8"
                                          data-object-type-id="11"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-k-c-b-u-7207-189" 
                                            class="btn btn-success r-k-c-b-u"
                                            data-route-id="7207"
                                            data-lang-id="189"
                                            data-object-id="8"
                                            data-object-type-id="11"
                                            disabled
                                          >
                                            <i class="fa fa-floppy-o"></i>
                                          </button>
                                        </span>
                                      </div><!-- end input-group -->
                                    </div><!-- end form-group -->
                                  </div><!-- end col -->
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                    <button type="button" id="r-k-c-b-c-7207-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                      <i class="fa fa-times"></i>&nbsp;
                                      CLOSE                                    </button>
                                  </div><!-- end col -->
                                </div><!-- end row -->
                                                                  <div id="r-p-c-7207-189" class="row" style="display:none;">
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                      <div class="form-group">
                                        <label for="prefix">
                                          URL PREFIX
                                        </label>
                                        <div class="input-group">
                                          <span class="input-group-addon">
                                            <span class="flag-icon flag-icon-sk"></span>
                                          </span>
                                          <input id="r-p-i-7207-189"
                                            type="text" 
                                            value="" 
                                            class="form-control r-p-v"
                                            data-route-id="7207"
                                            data-lang-id="189"
                                            data-object-id="8"
                                            data-object-type-id="11"
                                            style="border-radius: 0px;"
                                          />
                                          <span class="input-group-btn">
                                            <button type="button" 
                                              id="r-p-b-u-7207-189" 
                                              class="btn btn-success r-p-b-u" 
                                              data-route-id="7207"
                                              data-lang-id="189"
                                              data-object-id="8"
                                              data-object-type-id="11"
                                              disabled
                                            >
                                              <i class="fa fa-floppy-o"></i>
                                            </button>
                                          </span>
                                        </div><!-- end input-group -->
                                      </div><!-- end form-group -->
                                    </div><!-- end col -->
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                      <button type="button" id="r-p-b-cl-7207-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                        <i class="fa fa-times"></i>&nbsp;
                                        CLOSE                                      </button>
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
                                        id="r-k-c-7207-189"
                                        class="btn btn-warning btn-block r-k-c"
                                        data-route-id="7207"
                                        data-lang-id="189"
                                        data-object-id="8"
                                        data-object-type-id="11"
                                      >
                                        <i class="fa fa-exchange"></i>&nbsp;
                                        CHANGE URL KEY                                      </button>
                                    </div><!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                      <button 
                                        type="button"
                                        class="btn btn-danger btn-block r-d-d"
                                        data-route-id="7207"
                                        data-lang-id="189"
                                        data-object-id="8"
                                        data-object-type-id="11"
                                      >
                                          <i class="fa fa-times"></i>&nbsp;
                                          DELETE                                      </button>
                                    </div><!-- end col -->
                                  </div><!-- end row -->
                                                                      <button type="button" 
                                      id="r-p-b-c-7207-189" 
                                      data-route-id="7207"
                                      data-lang-id="189"
                                      data-object-id="8"
                                      data-object-type-id="11"
                                      class="btn btn-default btn-block r-p-b-c"
                                    >
                                      <i class="fa fa-location-arrow"></i>&nbsp;
                                      ADD URL PREFIX                                    </button>
                                                                                                                                  </div><!-- end col -->
                              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                                  <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                      <i class="fa fa-map-o"></i>&nbsp;
                                      SUGGESTIONS                                    </h3>
                                  </div><!-- end panel-heading -->
                                  <div class="panel-body panel-body-table">
                                    <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                      <strong>INFO!!</strong>
                                      There are no suggestions.                                    </div><!-- end alert -->
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
                                      SEO REDIRECTION                                    </h3>
                                  </div><!-- end panel-heading -->
                                  <div class="panel-body panel-body-table">
                                                                          <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                        <strong>INFO!!</strong>
                                        There are no redirection.                                      </div><!-- end alert -->
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

        <!-- ARTICLE LIST -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                      <div class="panel panel-default fix-panel">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                ZOZNAM ARTIKLOV                </h3>
                <div class="pull-right">
                  <span class="badge">Zobrazených 1-10 z 342 záznamov</span>
                </div>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                    <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                      <select class="form-control select" onchange="location = 'cpanel/translate-product/8/0/120/'+this.options[this.selectedIndex].value+'/1/10';">
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
                      <select class="form-control select" onchange="location = 'cpanel/translate-product/8/0/120/0/1/'+this.options[this.selectedIndex].value;">
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
                          <button type="button" onclick="location = 'cpanel/translate-product/8/0/120/0/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                            <i class="fa fa-search"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/translate-product/8/0/120/0/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/translate-product/8/0/120/0/1/10">1</a></li><li class=""><a href="cpanel/translate-product/8/0/120/0/2/10">2</a></li><li class=""><a href="cpanel/translate-product/8/0/120/0/3/10">3</a></li><li class=""><a href="cpanel/translate-product/8/0/120/0/4/10">4</a></li><li class=""><a href="cpanel/translate-product/8/0/120/0/5/10">5</a></li><li class=""><a href="cpanel/translate-product/8/0/120/0/6/10">6</a></li><li class="disabled"><span>...</span></li><li><a href="cpanel/translate-product/8/0/120/0/35/10">35</a></li><li class=""><a href="cpanel/translate-product/8/0/120/0/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                  </div><!-- end col -->
                </div><!-- end row -->
                <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                  <table class="table table-bordered table-striped table-actions">
                    <thead>
                      <tr>
                        <th width="30" class="text-center">
                          OBRÁZOK                        </th>
                        <th width="100" class="text-center">
                          SKU                        </th>
                        <th class="text-left">
                          NÁZOV ARTIKLU                        </th>
                        <th width="150" class="text-center">
                          PREKLAD
                        </th>
                      </tr>
                    </thead>
                    <tbody>   
                                              <tr>
                          <td class="text-center">
                                                          <img src="files/3f96609759809db2d8a0dedc99e85c1a.png" height="35" alt="WANT HOODIE_4"/>
                                                      </td>
                          <td class="text-center">
                            100001
                          </td>
                          <td class="text-left">
                            WANT HOODIE
                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/1/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
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
                          <td class="text-center">
                            <a href="cpanel/translate-product/2/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
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
                          <td class="text-center">
                            <a href="cpanel/translate-product/3/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
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
                          <td class="text-center">
                            <a href="cpanel/translate-product/4/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
                          <td class="text-center">
                                                          <img src="/files/e9bab8dc55945df01decdb0e8d16fd5e.jpg" height="35" alt="DSC07123_u2"/>
                                                      </td>
                          <td class="text-center">
                            100005
                          </td>
                          <td class="text-left">
                            ACT
                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/5/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
                          <td class="text-center">
                                                          <img src="/files/593d1300b5770f7259ca087ba248f62e.jpg" height="35" alt="Stand woman pants9"/>
                                                      </td>
                          <td class="text-center">
                            100006
                          </td>
                          <td class="text-left">
                            STAND WOMAN
                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/6/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
                          <td class="text-center">
                                                          <img src="/files/0725b5bba3a7c39503fdb7481f3aa361.jpg" height="35" alt="DSC06521_u"/>
                                                      </td>
                          <td class="text-center">
                            100007
                          </td>
                          <td class="text-left">
                            WILD
                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/7/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
                          <td class="text-center">
                                                          <img src="/files/a7be1f476b7cb281d6c5c3b700d44600.jpg" height="35" alt="DSC06437_u2"/>
                                                      </td>
                          <td class="text-center">
                            100008
                          </td>
                          <td class="text-left">
                            WILD JEANS
                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/8/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
                          <td class="text-center">
                                                          <img src="files/b36252689109297a41b338394c31c270.png" height="35" alt="VAGABOND JACKET WOMAN_0"/>
                                                      </td>
                          <td class="text-center">
                            100009
                          </td>
                          <td class="text-left">
                            VAGABOND HOODIE WOMAN
                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/9/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                              <tr>
                          <td class="text-center">
                                                          <img src="/files/2f8dade3a129c8d771986c4931e2af17.jpg" height="35" alt="DSC06420_u2"/>
                                                      </td>
                          <td class="text-center">
                            100010
                          </td>
                          <td class="text-left">
                            TEMPTER WOMAN
                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/10/0/120/0/1/10" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                                          </tbody>
                  </table>
                </div><!-- end table-responsive -->
              </div><!-- end panel-body -->
            </div><!-- end panel -->
                  </div><!-- end col -->
        <!-- ARTICLE LIST -->

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
<script type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/search.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/router.js"></script>
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
  
  Search.init(false, 0, 120);
  
  Router.init();
  
</script>
<script type="text/javascript">
$(function() {
  if($('#ckeditor_0').length > 0)
  {
    CKEDITOR.replace('ckeditor_0', {
      "readOnly": true
    });
  }
  if($('#ckeditor_120').length > 0)
  {
    CKEDITOR.replace('ckeditor_120', {
      "extraPlugins": "imagebrowser",
      "imageBrowser_listUrl": "http://www.carpedmfashion.com/cpanel/drive-api/build-image-register"
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
