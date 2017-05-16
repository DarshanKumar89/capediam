<?php /*%%SmartyHeaderCode:12866168645799f27041e3a4-84347959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d65507369ddbc00df426335f1af50d92542d342' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/category_update_form.tpl',
      1 => 1469625460,
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
    '8e1a6e2d067cd3f8f57f435e8178cb98c7485bc9' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/category_update_form.tpl',
      1 => 1469625460,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '12866168645799f27041e3a4-84347959',
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
  'unifunc' => 'content_5799f2705f8399_84425772',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799f2705f8399_84425772')) {function content_5799f2705f8399_84425772($_smarty_tpl) {?><!DOCTYPE html>
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
.tree {
  list-style: none;
  padding: 0 0 0 20px;
}
.tree .tree-selected {
  color: #000;
  background-color: #00aff0;
}
.tree input {
  vertical-align: baseline;
  margin-right: 4px;
  line-height: normal;
}
.tree i {
  font-size: 14px;
}
.tree .tree-item-name label,
.tree .tree-folder-name label {
  font-weight: 400;
}
.category-image {
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
.category-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.category-image > a.btn-remove {
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
.category-image > a.btn-remove > i {
    font-size:1.7em;
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
<li>
    <a href="#" onclick="return false;" title="KATALÓG">
        Katalóg    </a>
</li>
<li>
    <a href="cpanel/store-category-list" title="Kategórie">
        Kategórie    </a>
</li>
<li class="active">
    <a href="cpanel/store-update-category-form/1" title="Ženy">
        Ženy
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="updateCategoryForm" action="cpanel/store-update-category" method="post" role="form">
    <input type="hidden" name="category-id" value="1" />
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
        
        <!-- CATEGORY TITLE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        Ženy
                    </h3>                     
                </div><!-- end panel-header -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- // CATEGORY TITLE -->
        
        <!-- CATEGORY LANGUAGE INFORMATION AND SEO -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-globe"></i>&nbsp;
                        LANGUAGE INFORMATION AND SEO                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                                                    <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
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
                                                <div class="col-md-6">
                                                    <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                                                    <div class="row form-group">
                                                        <div class="input-group col-lg-3 col-md-3 col-sm-4 col-xs-4 pull-left">
                                                          <span class="category-image ">
                                                                                                                          <i class="glyphicon glyphicon-eye-open"></i>
                                                             
                                                          </span>
                                                        </div><!-- end image -->
                                                        <div class="input-group col-lg-9 col-md-9 col-sm-6 col-xs-6 pull-right">
                                                          <span class="input-group-btn">
                                                            <a href="cpanel/store-choose-category-image/1/51/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                                              <i class="glyphicon glyphicon-hdd"></i>
                                                            </a>
                                                          </span>
                                                          <input type="text" class="form-control" placeholder="Načítať obrázok z drive">
                                                          <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                          </span>
                                                        </div>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Farba</label>
                                                        <div class="input-group color colorpicker" data-color="rgb(255, 255, 255)" data-color-format="rgb">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-en-GB"></span>
                                                            </span>
                                                            <input type="text" name="lang[51]['color']" value="rgb(255, 255, 255)" class="form-control"/>
                                                            <span class="input-group-addon">
                                                                <i style="background-color: rgb(255, 255, 255);"></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Názov kategórie<span style="color:red;">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-en-GB"></span>
                                                            </span>
                                                            <input type="text" name="lang[51]['category-name']" value="" class="form-control" required>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Titulka</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-en-GB"></span>
                                                            </span>
                                                            <input type="text" name="lang[51]['site-title']" value="" class="form-control">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Popis</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-en-GB"></span>
                                                            </span>
                                                            <textarea name="lang[51]['description']" class="form-control" rows="5"></textarea>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 style="border-bottom:1px solid green;">SEO</h4>
                                                    <div class="form-group">
                                                        <label>Meta robots – inštrukcie pre robot vyhľadávačov</label>
                                                        <select name="lang[51]['meta-robots']" class="form-control select">
                                                                                                                      <option value="all ">all</option>
                                                                                                                      <option value="noindex ">noindex</option>
                                                                                                                      <option value="nofollow ">nofollow</option>
                                                                                                                      <option value="none ">none</option>
                                                                                                                      <option value="noarchive ">noarchive</option>
                                                                                                                      <option value="nosnippet ">nosnippet</option>
                                                                                                                      <option value="noodp ">noodp</option>
                                                                                                                      <option value="notranslate ">notranslate</option>
                                                                                                                      <option value="noimagindex ">noimagindex</option>
                                                                                                                  </select>
                                                        <span class="help-block">Vyberte jednu z nasledujúcich možností</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Meta keywords - kľúčové slová</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-en-GB"></span>
                                                            </span>
                                                            <input type="text" name="lang[51]['meta-keywords']" value="" class="tagsinput form-control"/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Ak chcete pridať & quot; značky, & quot; kliknite na tlačidlo v poli, niečo, čo písať, a potom stlačte kláves Enter & quot;. & nbsp; Zakázané znaky  = # {}</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Metadescription - krátky text, ktorý popisuje stránku.</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-en-GB"></span>
                                                            </span>
                                                            <textarea name="lang[51]['meta-description']" class="form-control" rows="5"></textarea>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Zakázané znaky  = # {}</span>
                                                    </div><!-- end form-group -->
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 style="margin-top: 20px;border-bottom:1px solid #3fbae4;">HTML OBSAH</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-en-GB"></span>
                                                        </span>
                                                        <textarea name="lang[51]['html-content']" id="ckeditor_51" class="ckeditor" row="5"></textarea>
                                                    </div>  
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end tab-pane -->
                                                                            <div class="tab-pane " id="tab-it-IT">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                                                    <div class="row form-group">
                                                        <div class="input-group col-lg-3 col-md-3 col-sm-4 col-xs-4 pull-left">
                                                          <span class="category-image ">
                                                                                                                          <i class="glyphicon glyphicon-eye-open"></i>
                                                             
                                                          </span>
                                                        </div><!-- end image -->
                                                        <div class="input-group col-lg-9 col-md-9 col-sm-6 col-xs-6 pull-right">
                                                          <span class="input-group-btn">
                                                            <a href="cpanel/store-choose-category-image/1/120/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                                              <i class="glyphicon glyphicon-hdd"></i>
                                                            </a>
                                                          </span>
                                                          <input type="text" class="form-control" placeholder="Načítať obrázok z drive">
                                                          <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                          </span>
                                                        </div>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Farba</label>
                                                        <div class="input-group color colorpicker" data-color="rgb(255, 255, 255)" data-color-format="rgb">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-it-IT"></span>
                                                            </span>
                                                            <input type="text" name="lang[120]['color']" value="rgb(255, 255, 255)" class="form-control"/>
                                                            <span class="input-group-addon">
                                                                <i style="background-color: rgb(255, 255, 255);"></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Názov kategórie<span style="color:red;">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-it-IT"></span>
                                                            </span>
                                                            <input type="text" name="lang[120]['category-name']" value="" class="form-control" required>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Titulka</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-it-IT"></span>
                                                            </span>
                                                            <input type="text" name="lang[120]['site-title']" value="" class="form-control">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Popis</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-it-IT"></span>
                                                            </span>
                                                            <textarea name="lang[120]['description']" class="form-control" rows="5"></textarea>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 style="border-bottom:1px solid green;">SEO</h4>
                                                    <div class="form-group">
                                                        <label>Meta robots – inštrukcie pre robot vyhľadávačov</label>
                                                        <select name="lang[120]['meta-robots']" class="form-control select">
                                                                                                                      <option value="all ">all</option>
                                                                                                                      <option value="noindex ">noindex</option>
                                                                                                                      <option value="nofollow ">nofollow</option>
                                                                                                                      <option value="none ">none</option>
                                                                                                                      <option value="noarchive ">noarchive</option>
                                                                                                                      <option value="nosnippet ">nosnippet</option>
                                                                                                                      <option value="noodp ">noodp</option>
                                                                                                                      <option value="notranslate ">notranslate</option>
                                                                                                                      <option value="noimagindex ">noimagindex</option>
                                                                                                                  </select>
                                                        <span class="help-block">Vyberte jednu z nasledujúcich možností</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Meta keywords - kľúčové slová</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-it-IT"></span>
                                                            </span>
                                                            <input type="text" name="lang[120]['meta-keywords']" value="" class="tagsinput form-control"/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Ak chcete pridať & quot; značky, & quot; kliknite na tlačidlo v poli, niečo, čo písať, a potom stlačte kláves Enter & quot;. & nbsp; Zakázané znaky  = # {}</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Metadescription - krátky text, ktorý popisuje stránku.</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-it-IT"></span>
                                                            </span>
                                                            <textarea name="lang[120]['meta-description']" class="form-control" rows="5"></textarea>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Zakázané znaky  = # {}</span>
                                                    </div><!-- end form-group -->
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 style="margin-top: 20px;border-bottom:1px solid #3fbae4;">HTML OBSAH</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-it-IT"></span>
                                                        </span>
                                                        <textarea name="lang[120]['html-content']" id="ckeditor_120" class="ckeditor" row="5"></textarea>
                                                    </div>  
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end tab-pane -->
                                                                            <div class="tab-pane active" id="tab-sk">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                                                    <div class="row form-group">
                                                        <div class="input-group col-lg-3 col-md-3 col-sm-4 col-xs-4 pull-left">
                                                          <span class="category-image ">
                                                                                                                          <i class="glyphicon glyphicon-eye-open"></i>
                                                             
                                                          </span>
                                                        </div><!-- end image -->
                                                        <div class="input-group col-lg-9 col-md-9 col-sm-6 col-xs-6 pull-right">
                                                          <span class="input-group-btn">
                                                            <a href="cpanel/store-choose-category-image/1/189/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                                              <i class="glyphicon glyphicon-hdd"></i>
                                                            </a>
                                                          </span>
                                                          <input type="text" class="form-control" placeholder="Načítať obrázok z drive">
                                                          <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                          </span>
                                                        </div>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Farba</label>
                                                        <div class="input-group color colorpicker" data-color="rgb(255, 255, 255)" data-color-format="rgb">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <input type="text" name="lang[189]['color']" value="rgb(255, 255, 255)" class="form-control"/>
                                                            <span class="input-group-addon">
                                                                <i style="background-color: rgb(255, 255, 255);"></i>
                                                            </span>
                                                        </div>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Názov kategórie<span style="color:red;">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <input type="text" name="lang[189]['category-name']" value="Ženy" class="form-control" required>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Titulka</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <input type="text" name="lang[189]['site-title']" value="D&aacute;mske oblečenie" class="form-control">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Popis</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <textarea name="lang[189]['description']" class="form-control" rows="5"></textarea>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Neplatné znaky ;=#{ }</span>
                                                    </div><!-- end form-group -->
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 style="border-bottom:1px solid green;">SEO</h4>
                                                    <div class="form-group">
                                                        <label>Meta robots – inštrukcie pre robot vyhľadávačov</label>
                                                        <select name="lang[189]['meta-robots']" class="form-control select">
                                                                                                                      <option value="all ">all</option>
                                                                                                                      <option value="noindex ">noindex</option>
                                                                                                                      <option value="nofollow ">nofollow</option>
                                                                                                                      <option value="none ">none</option>
                                                                                                                      <option value="noarchive ">noarchive</option>
                                                                                                                      <option value="nosnippet ">nosnippet</option>
                                                                                                                      <option value="noodp ">noodp</option>
                                                                                                                      <option value="notranslate ">notranslate</option>
                                                                                                                      <option value="noimagindex ">noimagindex</option>
                                                                                                                  </select>
                                                        <span class="help-block">Vyberte jednu z nasledujúcich možností</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Meta keywords - kľúčové slová</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <input type="text" name="lang[189]['meta-keywords']" value="d&aacute;mske oblečenie" class="tagsinput form-control"/>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Ak chcete pridať & quot; značky, & quot; kliknite na tlačidlo v poli, niečo, čo písať, a potom stlačte kláves Enter & quot;. & nbsp; Zakázané znaky  = # {}</span>
                                                    </div><!-- end form-group -->
                                                    <div class="form-group">
                                                        <label>Metadescription - krátky text, ktorý popisuje stránku.</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <span class="flag-icon flag-icon-sk"></span>
                                                            </span>
                                                            <textarea name="lang[189]['meta-description']" class="form-control" rows="5"></textarea>
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </span>
                                                        </div>
                                                        <span class="help-block">Zakázané znaky  = # {}</span>
                                                    </div><!-- end form-group -->
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 style="margin-top: 20px;border-bottom:1px solid #3fbae4;">HTML OBSAH</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-sk"></span>
                                                        </span>
                                                        <textarea name="lang[189]['html-content']" id="ckeditor_189" class="ckeditor" row="5"></textarea>
                                                    </div>  
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end tab-pane -->
                                                                    </div><!-- end panel-body -->
                            </div><!-- end panel -->                                               
                            <!-- END TABS --> 
                                            </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- CATEGORY LANGUAGE INFORMATION AND SEO -->
        
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
                                        data-object-type-id="8"
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
                                          data-object-type-id="8"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-k-c-b-u-0-51" 
                                            class="btn btn-success r-k-c-b-u"
                                            data-route-id="0"
                                            data-lang-id="51"
                                            data-object-id="1"
                                            data-object-type-id="8"
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
                                    data-object-type-id="8"
                                    disabled                                  >
                                    <i class="fa fa-floppy-o"></i>&nbsp;
                                    CREATE                                  </button>
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
                                        data-object-type-id="8"
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
                                          data-object-type-id="8"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-k-c-b-u-0-120" 
                                            class="btn btn-success r-k-c-b-u"
                                            data-route-id="0"
                                            data-lang-id="120"
                                            data-object-id="1"
                                            data-object-type-id="8"
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
                                    data-object-type-id="8"
                                    disabled                                  >
                                    <i class="fa fa-floppy-o"></i>&nbsp;
                                    CREATE                                  </button>
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
                                                  <div class="tab-pane active" id="tab-direction-pane-sk">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <div id="r-k-v-c-6740-189" class="input-group">
                                                                          <span class="input-group-addon">
                                        <i class="fa fa-chrome"></i>
                                      </span>
                                      <input type="text" value="http://carpedmfashion.local/damske-oblecenie" class="form-control" />
                                      <span class="input-group-btn">
                                        <a href="http://carpedmfashion.local/damske-oblecenie" target="__blank" class="btn btn-primary">
                                          <i class="fa fa-eye"></i>
                                        </a>
                                      </span>
                                                                      </div><!-- end input-group -->
                                </div><!-- end form-group -->
                                <div id="r-k-c-c-6740-189" class="row" style="display:none;">
                                  <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                    <div class="form-group">
                                      <label for="key">
                                        URL KEY
                                      </label>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <span class="flag-icon flag-icon-sk"></span>
                                        </span>
                                        <input id="r-k-c-i-6740-189"
                                          type="text" 
                                          value="" 
                                          class="form-control"
                                          data-route-id="6740"
                                          data-lang-id="189"
                                          data-object-id="1"
                                          data-object-type-id="8"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-k-c-b-u-6740-189" 
                                            class="btn btn-success r-k-c-b-u"
                                            data-route-id="6740"
                                            data-lang-id="189"
                                            data-object-id="1"
                                            data-object-type-id="8"
                                            disabled
                                          >
                                            <i class="fa fa-floppy-o"></i>
                                          </button>
                                        </span>
                                      </div><!-- end input-group -->
                                    </div><!-- end form-group -->
                                  </div><!-- end col -->
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                    <button type="button" id="r-k-c-b-c-6740-189" class="btn btn-default btn-block" style="margin-top: 22px;">
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
                                        id="r-k-c-6740-189"
                                        class="btn btn-warning btn-block r-k-c"
                                        data-route-id="6740"
                                        data-lang-id="189"
                                        data-object-id="1"
                                        data-object-type-id="8"
                                      >
                                        <i class="fa fa-exchange"></i>&nbsp;
                                        CHANGE URL KEY                                      </button>
                                    </div><!-- end col -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                      <button 
                                        type="button"
                                        class="btn btn-danger btn-block r-d-d"
                                        data-route-id="6740"
                                        data-lang-id="189"
                                        data-object-id="1"
                                        data-object-type-id="8"
                                      >
                                          <i class="fa fa-times"></i>&nbsp;
                                          DELETE                                      </button>
                                    </div><!-- end col -->
                                  </div><!-- end row -->
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
        
        <!-- CATEGORY TREE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-warning panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-tree"></i>&nbsp;
                        NADRADENÁ KATEGÓRIA                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#" 
                               onclick="$('#categories-tree').tree('collapseAll');$('#collapse-all-categories-tree').hide();$('#expand-all-categories-tree').show(); return false;" 
                               id="collapse-all-categories-tree" 
                               style="display:none;"
                            >
                                <i class="fa fa-angle-double-up"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" 
                               onclick="$('#categories-tree').tree('expandAll');$('#collapse-all-categories-tree').show();$('#expand-all-categories-tree').hide(); return false;" 
                               id="expand-all-categories-tree" 
                            >
                                <i class="fa fa-angle-double-down"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="panel-collapse">
                                <span class="fa fa-angle-down"></span>
                            </a>
                        </li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form" style="max-height: 350px;overflow: auto;">
                    <ul id="categories-tree" class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="1" checked><i class="fa fa-folder-o"></i><label class="tree-toggler">Ženy</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="73" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske oblečenie</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="2" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske tepl&aacute;ky</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="6" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske mikiny</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="15" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske tepl&aacute;kov&eacute; s&uacute;pravy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="16" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske tričk&aacute; a tielka</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="17" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske tielka</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="18" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske &scaron;ortky, kraťasy a sukne</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="19" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske svetre a pul&oacute;vre</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="20" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske &scaron;aty</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="21" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske overaly a kombin&eacute;zy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="22" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske bundy a sak&aacute;</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="23" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske spodn&eacute; pr&aacute;dlo</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="24" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics d&aacute;mske čiapky</label></li></ul></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="7"><i class="fa fa-folder-o"></i><label class="tree-toggler">Muži</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="75" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske oblečenie</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="8" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske tepl&aacute;ky</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="30" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske tielka</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="9" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske mikiny</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="28" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske tepl&aacute;kov&eacute; s&uacute;pravy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="29" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske tričk&aacute;</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="31" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske kraťasy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="32" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske svetre a pul&oacute;vre</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="33" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske overaly</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="34" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske bundy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="35" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics p&aacute;nske čiapky</label></li></ul></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="10"><i class="fa fa-folder-o"></i><label class="tree-toggler">Deti</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="74" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; oblečenie</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="13" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; tepl&aacute;ky</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="60" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; mikiny</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="61" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; tepl&aacute;kov&eacute; s&uacute;pravy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="62" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; tričk&aacute;</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="63" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; kraťasy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="64" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; svetre a pul&oacute;vre</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="65" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; bundy</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="66" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; čiapky</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="40" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Basics detsk&eacute; tielka</label></li></ul></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="25"><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mske kolekcie</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="3" ><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mska kolekcia BLACKGREY</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="4" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Blackgrey d&aacute;mske tepl&aacute;ky</label></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="41" ><i class="fa fa-folder-o"></i><label class="tree-toggler">BLACKGREY d&aacute;mske leg&iacute;ny</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="5" ><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mska kolekcia FITNESS</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="70" ><i class="fa fa-folder-o"></i><label class="tree-toggler">FITNESS d&aacute;mske tepl&aacute;ky</label></li></ul></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="27"><i class="fa fa-folder-o"></i><label class="tree-toggler">Outlet</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="48" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Outlet ženy</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="57" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Zlacnen&eacute; d&aacute;mske tepl&aacute;ky</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="49" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Outlet muži</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="58" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Zlacnen&eacute; p&aacute;nske tepl&aacute;ky</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="50" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Outlet deti</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="59" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Zlacnen&eacute; detsk&eacute; tepl&aacute;ky</label></li></ul></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="36"><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mske limitovan&eacute; oblečenie</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="38" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Limitovan&eacute; d&aacute;mske tepl&aacute;ky</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="42"><i class="fa fa-folder-o"></i><label class="tree-toggler">P&aacute;nske kolekcie</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="26" ><i class="fa fa-folder-o"></i><label class="tree-toggler">P&aacute;nska kolekcia EGO</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="71" ><i class="fa fa-folder-o"></i><label class="tree-toggler">EGO p&aacute;nske tepl&aacute;ky</label></li></ul></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="43"><i class="fa fa-folder-o"></i><label class="tree-toggler">Detsk&eacute; kolekcie</label></span></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="44"><i class="fa fa-folder-o"></i><label class="tree-toggler">P&aacute;nske limitovan&eacute; oblečenie</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="37" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Limitovan&eacute; p&aacute;nske tepl&aacute;ky</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="45"><i class="fa fa-folder-o"></i><label class="tree-toggler">Detsk&eacute; limitovan&eacute; oblečenie</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="39" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Limitovan&eacute; detsk&eacute; tepl&aacute;ky</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="46"><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mske doplnky</label></span></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="47"><i class="fa fa-folder-o"></i><label class="tree-toggler">P&aacute;nske doplnky</label></span></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="51"><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mske ta&scaron;ky a kabelky</label></span></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="67"><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mske tepl&aacute;ky</label></span></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="68"><i class="fa fa-folder-o"></i><label class="tree-toggler">P&aacute;nske tepl&aacute;ky</label></span></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="69"><i class="fa fa-folder-o"></i><label class="tree-toggler">Detsk&eacute; tepl&aacute;ky</label></span></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="72"><i class="fa fa-folder-o"></i><label class="tree-toggler">Novinky</label></span><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="12" ><i class="fa fa-folder-o"></i><label class="tree-toggler">D&aacute;mske novinky</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="54" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Nov&eacute; d&aacute;mske tepl&aacute;ky</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="52" ><i class="fa fa-folder-o"></i><label class="tree-toggler">P&aacute;nske novinky</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="55" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Nov&eacute; p&aacute;nske tepl&aacute;ky</label></li></ul></li><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="53" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Detsk&eacute; novinky</label><ul class="tree"><li class="tree-folder"><span class="tree-folder-name"><input type="radio" name="id_parent" value="56" ><i class="fa fa-folder-o"></i><label class="tree-toggler">Nov&eacute; detsk&eacute; tepl&aacute;ky</label></li></ul></li></ul></li></ul>                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- CATEGORY TREE -->
        
        <!-- CATEGORY SETTINGS -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-cog"></i>&nbsp;
                        NASTAVENIA                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group pull-left" style="margin-right:20px;">
                                <label>Root</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="root" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                            <div class="form-group pull-left" style="margin-right:20px;">
                                <label>Hosť</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="guest" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                            <div class="form-group pull-left" style="margin-right:20px;">
                                <label>Náštevník</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="visitor" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                            <div class="form-group pull-left" style="margin-right:20px;">
                                <label>Zákazník</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="customer" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                            <div class="form-group pull-left" style="margin-right:20px;">
                                <label>Zapnúť</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="enable" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-7">
                            <div class="alert alert-info" role="alert">
                                <h4>
                                    <strong>
                                        <span class="fa fa-question-circle"></span>
                                        &nbsp;Teraz máte tri predvolené  skupiny zákazníkov.                                    </strong>
                                </h4>
                                <p>
                                    <b>Náštevník</b> - Všetci ľudia bez platného zákazníckeho účtu.<br>
                                    <b>Hosť</b> - Zákazník, ktorý objednal tovar bez registrácie.<br>
                                    <b>Zákazník</b> - Všetci ľudia, ktorí vytvorili účet na tejto stránke.                                </p>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- CATEGORY SETTINGS -->
        
        <div id="btns-action" role="group">
            <button type="submit" id="btn-save" class="btn btn-success" role="button">
                <i class="fa fa-save"></i>
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
<script type="text/javascript" src="extensions/cpanel/js/tree.js"></script>
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
$(document).ready(function () {
    $("#categories-tree").tree("collapseAll");
});
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
