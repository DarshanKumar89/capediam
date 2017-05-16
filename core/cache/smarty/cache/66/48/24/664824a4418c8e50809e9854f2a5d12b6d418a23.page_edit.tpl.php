<?php /*%%SmartyHeaderCode:18464876095799e952400745-70520558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a84e59e1a0bcefd194d17838d23eb625a38e3df' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/page/page_edit.tpl',
      1 => 1469704492,
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
    '664824a4418c8e50809e9854f2a5d12b6d418a23' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/page/page_edit.tpl',
      1 => 1469704492,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '18464876095799e952400745-70520558',
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
  'unifunc' => 'content_5799e9526707b0_85083147',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799e9526707b0_85083147')) {function content_5799e9526707b0_85083147($_smarty_tpl) {?><!DOCTYPE html>
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
#btns-action {
    position: absolute;
    top: 4px;
    left: 5px;
    width: 25px;
    min-height: 50px;
    margin: 0;
    padding: 0 0 0 3px;
}
#btns-action > .btn {
    width: 25px;
    height: 50px;
    margin: 0 0 10px 0;
    padding: 0 0 0 3px;
}
.page-image {
    position: relative;
    background: #F8F8F8;
    display: block;
    width: 100px;
    height: 100px;
    margin: 0;
    padding: 0;
    font-size: 5em;
    text-align: center;
    line-height: 110px;
    color: red;
    border: 1px solid #F8F8F8;
    z-index: 400;

    -webkit-box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
    box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
}
.page-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.page-image > a.btn-remove {
    position: absolute;
    top: -2px;
    right: -30px;
    margin: 0;
    padding: 0;
    font-weight: 400;
    color: red;
    text-align: center;
    border: 0;
    z-index: 600;
}
.page-image > a.btn-remove > i {
    font-size:1.7em;
}
.gallery-indicator,
.slider-indicator {
    display: block;
    width: 120px;
    height: 100%;
    line-height: 100%;
    overflow: hidden;
}
.gallery-indicator .title,
.slider-indicator .title {
    display: block;
    float: left;
    width: 50px;
    margin-top: 3px;
    margin-right: 0px;
    font-size: 1.9em;
}
.circle-indicator {
    position:relative;
    display: block;
    float: left;
    width: 23px;
    height: 23px;
    margin-top: 3px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    color: #fff;
    border-radius: 100%;
}
.circle-indicator > i {
    font-size: 1.3em;
    line-height: 24px;
}
.circle-indicator.black {
    background: #000;
}
.circle-indicator.orange {
    background: #fea223;
}
.circle-indicator.green {
    background: #95b75d;
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
  <a href="cpanel/page-list" title="Stránky">
    Stránky  </a>
</li>
<li>
  <a href="#" onclick="return false;" title="Edit">
    Editovať  </a>
</li>
<li class="active">
  <a href="cpanel/page-edit/1" title="Tabuľka veľkost&iacute;">
    Tabuľka veľkost&iacute;
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">
  <h2>
    <span class="fa fa-edit"></span>&nbsp;
    Stránky&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="editPageForm"  action="cpanel/update-page" method="post" role="form">
    <input type="hidden" name="page-id" value="1" />
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
        
      <!-- PAGE FORM HEADER -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-colorful">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title" style="overflow: hidden;">
                      <button type="button"
                              class="btn btn-block btn-info pull-left"
                              style="margin-top:0px;margin-right:25px;padding:0;width:29px;height:29px;border-radius:100%;"
                              data-toggle="modal" data-target="#make-copy">
                          <i class="fa fa-files-o" style="position: relative;top: 1px;left: 2.5px;"></i>
                      </button>
                      <span style="display:block;float:left;">
                          <span style="color:#FFFFFF">
                              <i class="fa fa-file-text-o"></i>
                          </span>&nbsp;
                          Tabuľka veľkost&iacute;
                      </span>
                  </h3>
                  <ul class="panel-controls">
                      <li class="slider-indicator">
                          <span class="title">
                              <i class="fa fa-camera"></i>
                          </span>
                          <span class="circle-indicator orange">
                              <i class="fa fa-bullseye"></i>
                          </span>
                      </li>
                      <li class="gallery-indicator">
                          <span class="title">
                             <i class="fa fa-picture-o"></i>
                          </span>
                          <span class="circle-indicator orange">
                              <i class="fa fa-bullseye"></i>
                          </span>
                      </li>
                  </ul>                      
              </div><!-- end panel-header -->
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- // PAGE FORM HEADER -->
        
      <!-- PAGE LANGUAGE INFORMATION AND SEO -->
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
                      <!-- START TABS -->
            <div class="panel panel-default tabs">                            
              <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                                  <li >
                    <a href="#tab-lang-seo-en-GB" role="tab" data-toggle="tab">
                      <span class="flag-icon flag-icon-en-GB"  style="width:23px;height:23px;"></span>
                      <span style="position: relative;top: 5.5px;left: 1.5px;">English (United Kingdom)</span>
                    </a>
                  </li>
                                  <li >
                    <a href="#tab-lang-seo-it-IT" role="tab" data-toggle="tab">
                      <span class="flag-icon flag-icon-it-IT"  style="width:23px;height:23px;"></span>
                      <span style="position: relative;top: 5.5px;left: 1.5px;">Italian (Italy)</span>
                    </a>
                  </li>
                                  <li class="active">
                    <a href="#tab-lang-seo-sk" role="tab" data-toggle="tab">
                      <span class="flag-icon flag-icon-sk"  style="width:23px;height:23px;"></span>
                      <span style="position: relative;top: 5.5px;left: 1.5px;">Slovak</span>
                    </a>
                  </li>
                              </ul>                            
              <div class="panel-body tab-content">
                                  <div class="tab-pane " id="tab-lang-seo-en-GB">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid blue;">
                                                  VŠEOBECNÉ INFORMÁCIE
                                              </h4>
                      <div class="row form-group">
                        <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                          <span class="page-image ">
                                                          <i class="glyphicon glyphicon-eye-open"></i>
                             
                          </span>
                        </div><!-- end image -->
                        <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                          <span class="input-group-btn">
                            <a href="cpanel/choose-page-image/2/1/51/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                              <i class="glyphicon glyphicon-hdd"></i>
                            </a>
                          </span>
                          <input type="text"
                            placeholder="Načítať obrázok z drive" class="form-control">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-eye-open"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Farba
                                                  </label>
                        <div class="input-group color colorpicker" style="padding: 0px;" data-color="rgb(255, 255, 255)" data-color-format="rgb">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-en-GB"></span>
                          </span>
                          <input type="text" name="lang[51]['color']" value="rgb(255, 255, 255)" class="form-control"/>
                          <span class="input-group-addon">
                            <i style="background-color: rgb(255, 255, 255)"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Titulka stránky
                                                  </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-en-GB"></span>
                          </span>
                          <input type="text"
                            name="lang[51]['site-title']"
                            value=""
                            placeholder="Titulka stránky"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Nadpis
                                                  </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-en-GB"></span>
                          </span>
                          <input type="text"
                            name="lang[51]['heading']"
                            value=""
                            placeholder="Nadpis"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          Podtitulok
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-en-GB"></span>
                          </span>
                          <input type="text"
                            name="lang[51]['subheading']"
                            value=""
                            placeholder="Podtitulok"
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
                          <textarea name="lang[51]['description']" class="form-control" rows="5">
                                                      </textarea>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid green;">
                        SEO
                      </h4>
                      <div class="form-group">
                        <label>
                                                      Meta robot (inštrukcie pre robot vyhľadávačov)
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
                                              </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Meta tagy (klúčové slová)
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
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Meta popis
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
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-12" style="margin-top:30px;">
                      <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                                                  HTML Obsah
                                              </h4>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-en-GB"></span>
                        </span>
                        <textarea name="lang[51]['html-content']" id="ckeditor_51" class="ckeditor" row="5">
                                                  </textarea>
                      </div><!-- end input-group -->
                    </div><!-- end col -->
                  </div><!-- end tab-pane -->
                                  <div class="tab-pane " id="tab-lang-seo-it-IT">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid blue;">
                                                  VŠEOBECNÉ INFORMÁCIE
                                              </h4>
                      <div class="row form-group">
                        <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                          <span class="page-image ">
                                                          <i class="glyphicon glyphicon-eye-open"></i>
                             
                          </span>
                        </div><!-- end image -->
                        <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                          <span class="input-group-btn">
                            <a href="cpanel/choose-page-image/2/1/120/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                              <i class="glyphicon glyphicon-hdd"></i>
                            </a>
                          </span>
                          <input type="text"
                            placeholder="Načítať obrázok z drive" class="form-control">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-eye-open"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Farba
                                                  </label>
                        <div class="input-group color colorpicker" style="padding: 0px;" data-color="rgb(255, 255, 255)" data-color-format="rgb">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-it-IT"></span>
                          </span>
                          <input type="text" name="lang[120]['color']" value="rgb(255, 255, 255)" class="form-control"/>
                          <span class="input-group-addon">
                            <i style="background-color: rgb(255, 255, 255)"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Titulka stránky
                                                  </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-it-IT"></span>
                          </span>
                          <input type="text"
                            name="lang[120]['site-title']"
                            value=""
                            placeholder="Titulka stránky"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Nadpis
                                                  </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-it-IT"></span>
                          </span>
                          <input type="text"
                            name="lang[120]['heading']"
                            value=""
                            placeholder="Nadpis"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          Podtitulok
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-it-IT"></span>
                          </span>
                          <input type="text"
                            name="lang[120]['subheading']"
                            value=""
                            placeholder="Podtitulok"
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
                          <textarea name="lang[120]['description']" class="form-control" rows="5">
                                                      </textarea>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid green;">
                        SEO
                      </h4>
                      <div class="form-group">
                        <label>
                                                      Meta robot (inštrukcie pre robot vyhľadávačov)
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
                                              </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Meta tagy (klúčové slová)
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
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Meta popis
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
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-12" style="margin-top:30px;">
                      <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                                                  HTML Obsah
                                              </h4>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-it-IT"></span>
                        </span>
                        <textarea name="lang[120]['html-content']" id="ckeditor_120" class="ckeditor" row="5">
                                                  </textarea>
                      </div><!-- end input-group -->
                    </div><!-- end col -->
                  </div><!-- end tab-pane -->
                                  <div class="tab-pane active" id="tab-lang-seo-sk">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid blue;">
                                                  VŠEOBECNÉ INFORMÁCIE
                                              </h4>
                      <div class="row form-group">
                        <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                          <span class="page-image ">
                                                          <i class="glyphicon glyphicon-eye-open"></i>
                             
                          </span>
                        </div><!-- end image -->
                        <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                          <span class="input-group-btn">
                            <a href="cpanel/choose-page-image/2/1/189/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                              <i class="glyphicon glyphicon-hdd"></i>
                            </a>
                          </span>
                          <input type="text"
                            placeholder="Načítať obrázok z drive" class="form-control">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-eye-open"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Farba
                                                  </label>
                        <div class="input-group color colorpicker" style="padding: 0px;" data-color="rgb(255, 255, 255)" data-color-format="rgb">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-sk"></span>
                          </span>
                          <input type="text" name="lang[189]['color']" value="rgb(255, 255, 255)" class="form-control"/>
                          <span class="input-group-addon">
                            <i style="background-color: rgb(255, 255, 255)"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Titulka stránky
                                                  </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-sk"></span>
                          </span>
                          <input type="text"
                            name="lang[189]['site-title']"
                            value="Tabulka veľkost&iacute;"
                            placeholder="Titulka stránky"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Nadpis
                                                  </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-sk"></span>
                          </span>
                          <input type="text"
                            name="lang[189]['heading']"
                            value="Tabulka veľkost&iacute;"
                            placeholder="Nadpis"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          Podtitulok
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-sk"></span>
                          </span>
                          <input type="text"
                            name="lang[189]['subheading']"
                            value=""
                            placeholder="Podtitulok"
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
                          <textarea name="lang[189]['description']" class="form-control" rows="5">
                                                      </textarea>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid green;">
                        SEO
                      </h4>
                      <div class="form-group">
                        <label>
                                                      Meta robot (inštrukcie pre robot vyhľadávačov)
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
                                              </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Meta tagy (klúčové slová)
                                                  </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-sk"></span>
                          </span>
                          <input type="text"
                            name="lang[189]['meta-keywords']"
                            value="tabulka,velkosti"
                            class="tagsinput form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                                                      Meta popis
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
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-12" style="margin-top:30px;">
                      <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                                                  HTML Obsah
                                              </h4>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-sk"></span>
                        </span>
                        <textarea name="lang[189]['html-content']" id="ckeditor_189" class="ckeditor" row="5">
                          <section class="row" id="size-chart">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h4 class="text-center">Muži (č&iacute;sla v cm)</h4>

<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="text-center">Veľkosť</th>
			<th class="text-center">V&yacute;&scaron;ka - orientačn&aacute;</th>
			<th class="text-center">Hrudn&iacute;k</th>
			<th class="text-center">P&aacute;s</th>
			<th class="text-center">Boky</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="text-center">S</td>
			<td class="text-center">165 - 175</td>
			<td class="text-center">90 - 93</td>
			<td class="text-center">76 - 81</td>
			<td class="text-center">95 - 98</td>
		</tr>
		<tr>
			<td class="text-center">M</td>
			<td class="text-center">170 - 180</td>
			<td class="text-center">94 - 97</td>
			<td class="text-center">82 - 86</td>
			<td class="text-center">99 - 102</td>
		</tr>
		<tr>
			<td class="text-center">L</td>
			<td class="text-center">175 - 185</td>
			<td class="text-center">98 - 101</td>
			<td class="text-center">87 - 91</td>
			<td class="text-center">103 - 106</td>
		</tr>
		<tr>
			<td class="text-center">XL</td>
			<td class="text-center">180 - 190</td>
			<td class="text-center">102 - 105</td>
			<td class="text-center">92 - 96</td>
			<td class="text-center">107 - 110</td>
		</tr>
	</tbody>
</table>
</div>
<!-- end table-responsive -->

<h4 class="text-center">Ženy (č&iacute;sla v cm)</h4>

<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="text-center">Veľkosť</th>
			<th class="text-center">V&yacute;&scaron;ka - orientačn&aacute;</th>
			<th class="text-center">Hrudn&iacute;k</th>
			<th class="text-center">P&aacute;s</th>
			<th class="text-center">Boky</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="text-center">XS</td>
			<td class="text-center">do 162</td>
			<td class="text-center">do 80</td>
			<td class="text-center">do 64</td>
			<td class="text-center">do 90</td>
		</tr>
		<tr>
			<td class="text-center">S</td>
			<td class="text-center">163 - 169</td>
			<td class="text-center">80 -84</td>
			<td class="text-center">65 - 68</td>
			<td class="text-center">91 - 94</td>
		</tr>
		<tr>
			<td class="text-center">M</td>
			<td class="text-center">170 - 172</td>
			<td class="text-center">85 - 88</td>
			<td class="text-center">69 - 72</td>
			<td class="text-center">95 - 98</td>
		</tr>
		<tr>
			<td class="text-center">L</td>
			<td class="text-center">173 - 174</td>
			<td class="text-center">89 - 92</td>
			<td class="text-center">73 - 76</td>
			<td class="text-center">99 - 101</td>
		</tr>
		<tr>
			<td class="text-center">XL</td>
			<td class="text-center">175 - 176</td>
			<td class="text-center">93 - 96</td>
			<td class="text-center">77 - 81</td>
			<td class="text-center">102 - 105</td>
		</tr>
	</tbody>
</table>
</div>

<h4 class="text-center">Deti (č&iacute;sla v cm)</h4>

<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="text-center">Veľkosť</th>
			<th class="text-center">V&yacute;&scaron;ka - orientačn&aacute;</th>
			<th class="text-center">Hrudn&iacute;k</th>
			<th class="text-center">P&aacute;s</th>
			<th class="text-center">Boky</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="text-center">98-104</td>
			<td class="text-center">98 - 104</td>
			<td class="text-center">56 - 58</td>
			<td class="text-center">54 - 55</td>
			<td class="text-center">60 - 62</td>
		</tr>
		<tr>
			<td class="text-center">110-116</td>
			<td class="text-center">110 - 116</td>
			<td class="text-center">60 - 62</td>
			<td class="text-center">56 - 57</td>
			<td class="text-center">64 - 66</td>
		</tr>
		<tr>
			<td class="text-center">122-128</td>
			<td class="text-center">122 - 128</td>
			<td class="text-center">64 - 66</td>
			<td class="text-center">58 - 59</td>
			<td class="text-center">68 - 70</td>
		</tr>
		<tr>
			<td class="text-center">134-140</td>
			<td class="text-center">134 - 140</td>
			<td class="text-center">68 - 71</td>
			<td class="text-center">61 - 63</td>
			<td class="text-center">72 - 75</td>
		</tr>
		<tr>
			<td class="text-center">146-152</td>
			<td class="text-center">146 - 152</td>
			<td class="text-center">73 - 78</td>
			<td class="text-center">64 - 68</td>
			<td class="text-center">78 - 81</td>
		</tr>
		<tr>
			<td class="text-center">158-164</td>
			<td class="text-center">158 - 164</td>
			<td class="text-center">79 - 84</td>
			<td class="text-center">68 - 72</td>
			<td class="text-center">85 - 88</td>
		</tr>
	</tbody>
</table>
</div>
<!-- end table-responsive --><!-- end table-responsive --></div>
<!-- end col --></section>
                        </textarea>
                      </div><!-- end input-group -->
                    </div><!-- end col -->
                  </div><!-- end tab-pane -->
                              </div><!-- end panel-body -->
            </div><!-- end panel -->
            <!-- END TABS --> 
                    </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- PAGE LANGUAGE INFORMATION AND SEO -->
        
      <!-- DIRECTION -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="routerForm" class="panel panel-warning panel-toggled">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <i class="fa fa-map-signs"></i>&nbsp;
              DIRECTION            </h3>
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
                                      data-object-type-id="1"
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
                                        data-object-type-id="1"
                                        style="border-radius: 0px;"
                                      />
                                      <span class="input-group-btn">
                                        <button type="button" 
                                          id="r-k-c-b-u-0-51" 
                                          class="btn btn-success r-k-c-b-u"
                                          data-route-id="0"
                                          data-lang-id="51"
                                          data-object-id="1"
                                          data-object-type-id="1"
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
                                    CLOSE                                  </button>
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
                                          data-object-type-id="1"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-p-b-u-0-51" 
                                            class="btn btn-success r-p-b-u" 
                                            data-route-id="0"
                                            data-lang-id="51"
                                            data-object-id="1"
                                            data-object-type-id="1"
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
                                      CLOSE                                    </button>
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
                                  data-object-type-id="1"
                                  disabled                                >
                                  <i class="fa fa-floppy-o"></i>&nbsp;
                                  CREATE                                </button>
                                                          </div><!-- end col -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                  <h3 class="panel-title">
                                    <i class="fa fa-map-o"></i>&nbsp;
                                    SUGGESTIONS                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                  <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                    <strong>INFO!!</strong>
                                    There are no suggestions.                                  </div><!-- end alert -->
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
                                    SEO REDIRECTION                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                                                      <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                      <strong>INFO!!</strong>
                                      There are no redirection.                                    </div><!-- end alert -->
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
                                      data-object-type-id="1"
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
                                        data-object-type-id="1"
                                        style="border-radius: 0px;"
                                      />
                                      <span class="input-group-btn">
                                        <button type="button" 
                                          id="r-k-c-b-u-0-120" 
                                          class="btn btn-success r-k-c-b-u"
                                          data-route-id="0"
                                          data-lang-id="120"
                                          data-object-id="1"
                                          data-object-type-id="1"
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
                                    CLOSE                                  </button>
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
                                          data-object-type-id="1"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-p-b-u-0-120" 
                                            class="btn btn-success r-p-b-u" 
                                            data-route-id="0"
                                            data-lang-id="120"
                                            data-object-id="1"
                                            data-object-type-id="1"
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
                                      CLOSE                                    </button>
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
                                  data-object-type-id="1"
                                  disabled                                >
                                  <i class="fa fa-floppy-o"></i>&nbsp;
                                  CREATE                                </button>
                                                          </div><!-- end col -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                  <h3 class="panel-title">
                                    <i class="fa fa-map-o"></i>&nbsp;
                                    SUGGESTIONS                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                  <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                    <strong>INFO!!</strong>
                                    There are no suggestions.                                  </div><!-- end alert -->
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
                                    SEO REDIRECTION                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                                                      <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                      <strong>INFO!!</strong>
                                      There are no redirection.                                    </div><!-- end alert -->
                                                                  </div><!-- end panel-body -->
                              </div><!-- end panel -->
                            </div><!-- end col -->
                          </div><!-- end row -->
                        </div><!-- end tab-pane -->
                                              <div class="tab-pane active" id="tab-direction-pane-sk">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <div id="r-k-v-c-7678-189" class="input-group">
                                                                      <span class="input-group-addon">
                                      <i class="fa fa-chrome"></i>
                                    </span>
                                    <input type="text" value="http://carpedmfashion.local/tabulka-velkosti" class="form-control" />
                                    <span class="input-group-btn">
                                      <a href="http://carpedmfashion.local/tabulka-velkosti" target="__blank" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                      </a>
                                    </span>
                                                                  </div><!-- end input-group -->
                              </div><!-- end form-group -->
                              <div id="r-k-c-c-7678-189" class="row" style="display:none;">
                                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                  <div class="form-group">
                                    <label for="key">
                                      URL KEY
                                    </label>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                        <span class="flag-icon flag-icon-sk"></span>
                                      </span>
                                      <input id="r-k-c-i-7678-189"
                                        type="text" 
                                        value="" 
                                        class="form-control"
                                        data-route-id="7678"
                                        data-lang-id="189"
                                        data-object-id="1"
                                        data-object-type-id="1"
                                        style="border-radius: 0px;"
                                      />
                                      <span class="input-group-btn">
                                        <button type="button" 
                                          id="r-k-c-b-u-7678-189" 
                                          class="btn btn-success r-k-c-b-u"
                                          data-route-id="7678"
                                          data-lang-id="189"
                                          data-object-id="1"
                                          data-object-type-id="1"
                                          disabled
                                        >
                                          <i class="fa fa-floppy-o"></i>
                                        </button>
                                      </span>
                                    </div><!-- end input-group -->
                                  </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                  <button type="button" id="r-k-c-b-c-7678-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                    <i class="fa fa-times"></i>&nbsp;
                                    CLOSE                                  </button>
                                </div><!-- end col -->
                              </div><!-- end row -->
                                                              <div id="r-p-c-7678-189" class="row" style="display:none;">
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                    <div class="form-group">
                                      <label for="prefix">
                                        URL PREFIX
                                      </label>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <span class="flag-icon flag-icon-sk"></span>
                                        </span>
                                        <input id="r-p-i-7678-189"
                                          type="text" 
                                          value="" 
                                          class="form-control r-p-v"
                                          data-route-id="7678"
                                          data-lang-id="189"
                                          data-object-id="1"
                                          data-object-type-id="1"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-p-b-u-7678-189" 
                                            class="btn btn-success r-p-b-u" 
                                            data-route-id="7678"
                                            data-lang-id="189"
                                            data-object-id="1"
                                            data-object-type-id="1"
                                            disabled
                                          >
                                            <i class="fa fa-floppy-o"></i>
                                          </button>
                                        </span>
                                      </div><!-- end input-group -->
                                    </div><!-- end form-group -->
                                  </div><!-- end col -->
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                    <button type="button" id="r-p-b-cl-7678-189" class="btn btn-default btn-block" style="margin-top: 22px;">
                                      <i class="fa fa-times"></i>&nbsp;
                                      CLOSE                                    </button>
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
                                      id="r-k-c-7678-189"
                                      class="btn btn-warning btn-block r-k-c"
                                      data-route-id="7678"
                                      data-lang-id="189"
                                      data-object-id="1"
                                      data-object-type-id="1"
                                    >
                                      <i class="fa fa-exchange"></i>&nbsp;
                                      CHANGE URL KEY                                    </button>
                                  </div><!-- end col -->
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                    <button 
                                      type="button"
                                      class="btn btn-danger btn-block r-d-d"
                                      data-route-id="7678"
                                      data-lang-id="189"
                                      data-object-id="1"
                                      data-object-type-id="1"
                                    >
                                        <i class="fa fa-times"></i>&nbsp;
                                        DELETE                                    </button>
                                  </div><!-- end col -->
                                </div><!-- end row -->
                                                                  <button type="button" 
                                    id="r-p-b-c-7678-189" 
                                    data-route-id="7678"
                                    data-lang-id="189"
                                    data-object-id="1"
                                    data-object-type-id="1"
                                    class="btn btn-default btn-block r-p-b-c"
                                  >
                                    <i class="fa fa-location-arrow"></i>&nbsp;
                                    ADD URL PREFIX                                  </button>
                                                                                                                          </div><!-- end col -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                  <h3 class="panel-title">
                                    <i class="fa fa-map-o"></i>&nbsp;
                                    SUGGESTIONS                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                  <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                    <strong>INFO!!</strong>
                                    There are no suggestions.                                  </div><!-- end alert -->
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
                                    SEO REDIRECTION                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                                                      <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                      <strong>INFO!!</strong>
                                      There are no redirection.                                    </div><!-- end alert -->
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
        
      <!-- PAGE GENERAL INFORMATION -->
      <div class="col-lg-12">
          <div class="panel panel-primary panel-toggled">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title">
                      <i class="fa fa-info-circle"></i>&nbsp;
                      VŠEOBECNÉ INFORMÁCIE                  </h3>
                  <ul class="panel-controls">
                      <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  </ul>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-form">
                  <div class="row">
                      <div class="col-lg-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                              <label>
                                  Vlastník                              </label>                                    
                              <select name="owner" class="form-control select" data-live-search="true" required>
                                                                        <option value="1" selected>Henrich&nbsp;Barkoczy</option>
                                                                        <option value="2" >Alexander&nbsp;Kernasevic</option>
                                                                        <option value="3" >Dobrava&nbsp;Míčka</option>
                                                                        <option value="4" >Kornélia&nbsp;Dzurniková</option>
                                                                        <option value="5" >Stanislava&nbsp;Kleinova</option>
                                                                        <option value="6" >Neva&nbsp;Eva</option>
                                                                        <option value="7" >Ladislav&nbsp;Voros</option>
                                                                </select>
                          </div><!-- end form-group -->
                          <div class="form-group">
                              <label>
                                  Názov stránky (interný)                              </label>
                              <input type="text" name="pagename" value="Tabuľka veľkost&iacute;" class="form-control">
                          </div><!-- end form-group -->
                          <div class="form-group">
                              <label>
                                  CSS ID                              </label>
                              <input type="text" name="css-id" value="" class="form-control">
                          </div><!-- end form-group -->
                          <div class="form-group">
                              <label>
                                  CSS Triedy                              </label>
                              <input type="text" name="css-classes" value="" class="form-control tagsinput"/>
                          </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                              <label>Farba pozadia</label>
                              <div class="input-group color colorpicker" style="padding: 0px;" data-color="#FFFFFF" data-color-format="rgb">
                                  <span class="input-group-addon">
                                      <span class="fa fa-paint-brush"></span>
                                  </span>
                                  <input type="text" name="background-color" value="#FFFFFF" class="form-control"/>
                                  <span class="input-group-addon">
                                      <i style="background-color: #FFFFFF"></i>
                                  </span>
                              </div>
                          </div><!-- end form-group -->
                          <div class="row form-group">
                              <h6 style="font-size: 12px;font-weight: 600;color: #656d78;">Obrázok na pozadí</h6>
                              <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                                  <span class="page-image ">
                                                                                <i class="glyphicon glyphicon-eye-open"></i>
                                       
                                  </span>
                              </div><!-- end image -->
                              <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                                  <span class="input-group-btn">
                                      <a href="cpanel/choose-page-image/1/1/0/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                          <i class="glyphicon glyphicon-hdd"></i>
                                      </a>
                                  </span>
                                  <input type="text" placeholder="Načítať obrázok z drive" class="form-control">
                                  <span class="input-group-addon">
                                      <i class="glyphicon glyphicon-eye-open"></i>
                                  </span>
                              </div>
                          </div><!-- end form-group -->
                      </div><!-- end col -->
                  </div><!-- end row -->
              </div><!-- end panel-body -->                          
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- PAGE GENERAL INFORMATION -->
        
      <!-- PAGE SETTINGS -->
      <div class="col-lg-12">
          <div class="panel panel-success panel-toggled">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title">
                      <i class="fa fa-cog"></i>&nbsp;
                      NASTAVENIA                  </h3>
                  <ul class="panel-controls">
                      <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  </ul>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-form">
                  <div class="row">
                      <div class="col-lg-9 col-sm-12 col-xs-12">
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Publikovať                              </label><br>
                              <label class="switch">
                                  <input type="checkbox" name="publish" checked="" value="1">
                                  <span></span>
                              </label>                                          
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Náštevník                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="visitor" value="1" >
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Registrovaný uživateľ                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="registred-user" value="1" >
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Podpis vlastníka                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="signature" value="1" >
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Zobraziť dátum                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="show-date" value="1" >
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Zobraziť titulku stránku                              </label><br>                                      
                              <label class="switch">
                                  <input type="checkbox" name="show-page-title" checked="" value="1">
                                  <span></span>
                              </label>                                          
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Zobraziť odkazy na podstránky                              </label><br>                                    
                              <label class="switch">
                                  <input type="checkbox" name="show-sitelinks"  value="1">
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Povoliť prílohy                              </label><br>                                     
                              <label class="switch">
                                  <input type="checkbox" name="allow-attachments"  value="1">
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Povoliť komentáre                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="allow-comments"  value="1">
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  Povoliť bočný panel                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="aside"  value="1">
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-3 col-sm-12 col-xs-12">
                          <div class="form-group">
                              <label>
                                  Rozloženie stránky                              </label>                                                                              
                              <select name="page-layout" class="form-control select" data-style="btn-success">
                                  <option value="1" selected>
                                      BEŽNÁ STRÁNKA S NADPISOM                                  </option>
                                  <option value="2" >
                                      OBRÁZOK V HLAVIČKE STRÁNKY                                  </option>
                                  <option value="3" >
                                      OBRÁZOK S POPISOM V HLAVIČKE STRÁNKY                                  </option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>
                                  Počet widgetov                              </label>
                              <input type="number" name="widget" value="1" class="form-control"/>
                          </div><!-- end form-group -->   
                      </div><!-- end col -->
                  </div><!-- end row -->
              </div><!-- end panel-body -->                          
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- PAGE SETTINGS -->

      <div id="btns-action" role="group">
          <button type="submit" id="btn-save" class="btn btn-success" role="button">
              <i class="fa fa-save"></i>
          </button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_remove_page">
              <i class="glyphicon glyphicon-floppy-remove"></i>
          </button>
      </div><!-- end btns-action -->
  </div><!-- end row -->
</form>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW REMOVE PAGE -->                       
<div class="modal" id="modal_remove_page" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" action="cpanel/navigation/remove" method="post" role="form">
                            <input id="removeModel" type="hidden" name="model" value="0" />
                            <input id="removeParentId" type="hidden" name="id" value="0" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            ZMAZAŤ NAVŽDY?                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-table">
                                    <h4 style="margin: 15px 0;">
                                        <strong>
                                            Upozornenie: nie je možné vrátiť späť túto akciu.                                        </strong>
                                    </h4>
                                </div>
                                <div class="panel-footer">                                 
                                    <a href="cpanel/delete-page/1" class="btn btn-danger">
                                        ZMAZAŤ NAVŽDY                                    </a>
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
<!-- //-- MODAL WINDOW REMOVE PAGE -->
<!-- MODAL WINDOW MAKE A COPY -->                       
<div class="modal" id="make-copy" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="cpanel/make-copy-page" method="post" role="form">
                            <input type="hidden" name="page-id" value="1" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            VYTVORIŤ KÓPIU                                            
                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>
                                            NÁZOV NOVEJ STRÁNKY                                        </label>
                                        <input type="text" name="pagename" value="Tabuľka veľkost&iacute; Kópia" class="form-control" required="">
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
<!-- //-- MODAL WINDOW MAKE A COPY -->

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
<script type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/router.js"></script>
<script type="text/javascript">
    
    Router.init();
    
    window.onscroll = function (e) {
      var vertical_position = 0;
      if (pageYOffset)//usual
        vertical_position = pageYOffset;
      else if (document.documentElement.clientHeight)//ie
        vertical_position = document.documentElement.scrollTop;
      else if (document.body)//ie quirks
        vertical_position = document.body.scrollTop;

      var topPosition = vertical_position + ((vertical_position == 0) ? 3 : 200);

      $('#btns-action').css({ top: topPosition + 'px' });
    };
</script>
<script type="text/javascript">
            CKEDITOR.replace('ckeditor_51', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "http://carpedmfashion.local/cpanel/drive-api/build-image-register"
        });
            CKEDITOR.replace('ckeditor_120', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "http://carpedmfashion.local/cpanel/drive-api/build-image-register"
        });
            CKEDITOR.replace('ckeditor_189', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "http://carpedmfashion.local/cpanel/drive-api/build-image-register"
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
