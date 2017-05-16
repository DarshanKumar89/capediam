<?php /*%%SmartyHeaderCode:169588246258459a6bd840e0-59294401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf5b745c15b34594dce90bd5ee2bb2b587b2bb89' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/offers/offer_list.tpl',
      1 => 1469707247,
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
    '6e3c8a2147020603c72cfc0f84c2dbbeeda98647' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/offers/offer_list.tpl',
      1 => 1469707247,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '169588246258459a6bd840e0-59294401',
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
  'unifunc' => 'content_58459a6ca3cf96_96874787',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58459a6ca3cf96_96874787')) {function content_58459a6ca3cf96_96874787($_smarty_tpl) {?><!DOCTYPE html>
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
.hold {
  background: #000;
  display: inline-block;
  width: 30px;
  height: 30px;
  padding: 7px;
  font-size: 1.4em;
  font-weight: 700;
  line-height: 100%;
  text-align: center;
  color: #fff;
  vertical-align: middle;
  border-radius: 100%;
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
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Ladislav Voros">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Ladislav Voros">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">Ladislav&nbsp;Voros</div>
      </div>
    </div>                                                                        
  </li>
  <li>
    <a href="cpanel" title="Dashboard">
      <i class="fa fa-dashboard"></i>
      <span class="xn-text">
        Dashboard      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/site-structure" title="Site">
      <i class="fa fa-sitemap"></i>
      <span class="xn-text">
        Site      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/page-list" title="Pages">
      <i class="fa fa-file-text-o"></i>
      <span class="xn-text">
        Pages      </span>
    </a>                        
  </li>
  <li class="xn-openable" style="display:none;visibility: hidden !important;">
    <a href="cpanel/cpanel/catalog" onclick="return false;" title="Catalog">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Catalog      </span>
    </a>
    <ul>
      <li>
        <a href="cpanel/catalog" title="Catalog - Overview">
          <i class="fa fa-eye"></i>
          Overview        </a>
      </li>
      <li>
        <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
          <i class="fa fa-plus"></i>
          New article        </a>
      </li>
      <li>
        <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
          <i class="fa fa-info"></i>
          Manage categories        </a>
      </li>
      <li>
        <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
          <i class="fa fa-tag"></i>
          Manage attributes        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="cpanel/my-drive" title="MMy Drive">
      <i class="fa fa-hdd-o"></i>
      <span class="xn-text">
        My Drive      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/slider-list" title="Slider">
      <i class="fa fa-camera"></i>
      <span class="xn-text">
        Slider      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/gallery-list" title="Gallery">
      <i class="fa fa-picture-o"></i>
      <span class="xn-text">
        Gallery      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/language-list" title="Languages">
      <i class="glyphicon glyphicon-globe"></i>
      <span class="xn-text">
        Languages      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/dictionary-list" title="Dictionary">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        Dictionary      </span>
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
    <a href="cpanel/store/users" title="User">
      <i class="fa fa-users"></i>
      Users    </a>
  </li>
  <li data-menu-item="carts">
    <a href="cpanel/store/carts" title="Carts">
      <i class="fa fa-shopping-cart"></i>
      Carts    </a>
  </li>
  <li class="xn-openable" data-menu-item="orders">
    <a href="cpanel/store/orders" title="Orders">
      <i class="fa fa-clipboard"></i>
      Orders    </a>
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
    <a href="#" onclick="return false;" title="Catalog">
      <span class="fa fa-book"></span>
      Catalog    </a>
    <ul>
      <li data-menu-item="articles">
        <a href="cpanel/store/catalog/articles/short" title="Articles">
          <span class="fa fa-circle"></span>
          Articles        </a>
      </li>
      <li data-menu-item="store-category-list">
        <a href="cpanel/store-category-list" title="Categories">
          <span class="fa fa-circle"></span>
          Categories        </a>
      </li>
      <li data-menu-item="store-attribute-list">
        <a href="cpanel/store-attribute-list" title="Attributes">
          <span class="fa fa-circle"></span>
          Attributes        </a>
      </li>
      <li data-menu-item="ordering">
        <a href="cpanel/store/catalog/ordering" title="Ordering">
          <span class="fa fa-circle"></span>
          Ordering        </a>
      </li>
    </ul>
  </li>
  <li data-menu-item="thumbnail">
    <a href="cpanel/thumbnail" title="Thumbnail">
      <i class="fa fa-picture-o" aria-hidden="true"></i>
      Thumbnail    </a>
  </li>
  <li data-menu-item="warehouse">
    <a href="cpanel/store-warehouse-list" title="Warehouses">
      <i class="fa fa-database"></i>
      Warehouses    </a>
  </li>
  <li data-menu-item="statuses">
    <a href="cpanel/store/statuses" title="Status list">
      <i class="fa fa-heartbeat"></i>
      Status list    </a>
  </li>
  <li class="xn-openable" data-menu-item="delivery-payment">
    <a href="#" onclick="return false;" title="Delivery / Payment">
      <i class="fa fa-pencil-square"></i>
      Delivery / Payment    </a>
    <ul>
      <li data-menu-item="delivery">
        <a href="cpanel/store/delivery-payment/delivery" title="Delivery">
          <i class="fa fa-truck"></i>
          Delivery        </a>
      </li>
      <li data-menu-item="payment">
        <a href="cpanel/store/delivery-payment/payment" title="Payment">
          <i class="fa fa-usd"></i>
          Payment        </a>
      </li>
      <li data-menu-item="ties">
        <a href="cpanel/store/delivery-payment/ties" title="Ties">
          <i class="fa fa-exchange"></i>
          Ties        </a>
      </li>
   </ul>
  </li>
  <li class="xn-openable" data-menu-item="localization">
    <a href="#" onclick="return false;" title="Localization">
      <span class="fa fa-globe"></span>
      Localization    </a>
    <ul>
      <li data-menu-item="currencies">
        <a href="cpanel/store/localization/currencies" title="Currencies">
          <span class="fa fa-circle"></span>
          Currencies        </a>
      </li>
      <li data-menu-item="taxes">
        <a href="cpanel/store/localization/taxes" title="Taxes">
          <span class="fa fa-circle"></span>
          Taxes        </a>
     </li>
   </ul>
  </li>
  <li data-menu-item="offers">
    <a href="cpanel/store/offers" title="Offers">
      <i class="fa fa-sticky-note-o"></i>
      Offers    </a>
  </li>
  <li data-menu-item="discount-circuits">
    <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
      <i class="fa fa-circle-o-notch"></i>
      Discount circuits    </a>
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
    <a href="cpanel/general-settings" title="General Settings">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        General Settings      </span>
    </a>                        
  </li>
      <li class="xn-openable">
      <a href="#" onclick="return false;" title="Adminstrator">
        <i class="fa fa-exclamation-triangle"></i>
        <span class="xn-text">Administrátor</span>
      </a>
      <ul>
        <li>
          <a href="cpanel/form-list" title="Forms">
            <i class="fa fa-pencil"></i>
            <span class="xn-text">
                          </span>
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
                        <a href="cpanel" style="height: 50px;padding: 11px 0;" title="English">
                                                            <span class="flag-icon flag-icon-gb" style="width:18px;height:18px;"></span>
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
                        <a href="cpanel" title="Home">
                            Home                        </a>
                    </li>
                    
<li>
    <a href="#" onclick="return false;" title="Store">
        Store    </a>
</li>
<li class="active">
    <a href="cpanel/store/offers" title="Offers">
        Offers    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-sticky-note-o"></i>&nbsp;
            OFFERS&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <form action="cpanel/store/offers/create" method="post" role="form">
            <div class="panel panel-colorful panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        CREATE OFFER                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>                
                </div><!-- end panel-header -->
                <div class="panel-body panel-body-form">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <h4 style="border-bottom:1px solid blue;">GENERAL INFORMATION</h4>
                        <div class="form-group">
                          <label>
                            EMAIL TEMPLATE                            <span style="color:red;">*</span>
                          </label>
                                                      <select name="email-id" id="email-id" class="form-control select" data-style="btn-info" data-live-search="true" required>
                              <option value="0">Choose...</option>
                                                                <option value="1">Prijat&aacute; objedn&aacute;vka</option>
                                                                <option value="2">Objedn&aacute;vka spracovan&aacute;</option>
                                                          </select> 
                                                  </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            RECIPIENT EMAIL                            <span style="color:red;">*</span>
                          </label>
                          <div class="input-group">
                            <input type="email" name="recipient-email" value="" id="re" class="form-control" required>
                            <span class="input-group-btn">
                              <button type="button" onclick="getEmailFromAddress()" class="btn btn-default">
                                <i class="fa fa-book"></i>&nbsp;Choose from directory                              </button>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label>
                                NOTICE                            </label>
                            <textarea name="notice" rows="8" class="form-control"></textarea>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <h4 style="border-bottom:1px solid #33414e;">SETTINGS</h4>
                        <div class="form-group col-lg-6" style="padding-left:0px;">
                          <label>
                              DATE FROM                          </label>
                          <input type="text" name="from" value="" maxlength="12" class="form-control datepicker">
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6" style="padding-right:0px;">
                          <label>
                            DATE UNTIL                          </label>
                          <input type="text" name="until" value="" maxlength="12" class="form-control datepicker">
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            Currency                            <span style="color:red;">*</span>
                          </label>                                                                              
                          <select name="currency-id" class="form-control select" data-live-search="true" required>
                            <option value="0">Choose...</option>
                                                          <option value="1">Euro</option>
                                                      </select>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            Tax rule                            <span style="color:red;">*</span>
                          </label>                                                                              
                          <select name="tax-id" class="form-control select" data-live-search="true" required>
                            <option value="0">Choose...</option>
                                                          <option value="1">DPH SK 20%</option>
                                                          <option value="2">IVA IT 22%</option>
                                                      </select>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            LANGUAGE                            <span style="color:red;">*</span>
                          </label>
                                                      <select name="lang-id" id="lang-id" class="form-control select" data-show-icon="true" data-live-search="true" required>
                                <option value="0">Choose...</option>
                                                                    <option value="51" data-content="<i class='flag-icon flag-icon-en-GB'></i> English (United Kingdom)">English (United Kingdom)</option>
                                                                    <option value="120" data-content="<i class='flag-icon flag-icon-it-IT'></i> Italian (Italy)">Italian (Italy)</option>
                                                                    <option value="189" data-content="<i class='flag-icon flag-icon-sk'></i> Slovak">Slovak</option>
                                                            </select>
                                                  </div><!-- end form-group -->
                        <div class="form-group pull-left" style="margin-right: 15px;">
                            <label>
                                ACTIVE                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="active" value="1" checked="">
                                <span></span>
                            </label>                                          
                        </div><!-- end form-group -->
                        <div class="form-group pull-left" style="margin-right: 15px;">
                            <label>
                                ALLOW BUY                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="allow-buy" value="1" checked="">
                                <span></span>
                            </label>                                          
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                </div><!-- end panel-body -->
                <div class="panel-footer">
                                            <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i>&nbsp;CREATE                        </button>
                                    </div><!-- end panel-footer -->
            </div><!-- end panel -->
        </form>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <form action="cpanel/store/offers/update-all" method="post" role="form">
            <div class="panel panel-info">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-list-alt"></i>&nbsp;
                        OFFER LIST                    </h3>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                                          <div class="alert alert-info" style="float: none;width: 98%;margin: 15px auto;"role="alert">
                        <strong>INFO!!</strong>
                        THERE ARE NO OFFERS.                      </div>
                                    </div><!-- end panel-body -->
                <div class="panel-footer">                                 
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
        
    
<!-- MODAL WINDOW RECIPIENT EMAIL -->                         
<div class="modal" id="aeList" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1120px;">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW RECIPIENT EMAIL --> 


        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span>Sign out?</div>
                    <div class="mb-footer">
                        <div class="pull-left">
                            <a href="cpanel/sign/out" class="btn btn-success btn-lg">
                                Yes                            </a>
                            <button class="btn btn-default btn-lg mb-control-close">
                                No                            </button>
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
<script type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    function getEmailFromAddress() {
        $.ajax({
            url: 'cpanel/store/api/address-email-list',
            type: 'POST',
            data: { command: 1 },
            success: function(content) {
                $('#aeList').find('.modal-content').html(content);
                $('#aeList').modal('show');
                // event
                evtEmailChoose();
            },
            error: function(e) {
                console.log(e);
            },
            dataType: 'HTML'
        });
    }
    
    function evtEmailChoose() {
        $('#aeList').find('.btn-success').on('click',function() {
            $('#aeList').find('[name="email"]').each(function() {
                if($(this).is(':checked')) {
                    $('#re').val( $(this).val() );
                    $('#aeList').modal('hide');
                }
            });
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
