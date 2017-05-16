<?php /*%%SmartyHeaderCode:15680429895798b62621b278-77878244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a5d171165be08786c398aa6ffe2db759523956' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/drive/drive_boxes.tpl',
      1 => 1469528890,
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
    '8f9dc58cf16dc9d94df05f5743bbe897ddf4d86a' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/drive/drive_boxes.tpl',
      1 => 1469528890,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '15680429895798b62621b278-77878244',
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
  'unifunc' => 'content_5798b62632c8e0_28077028',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798b62632c8e0_28077028')) {function content_5798b62632c8e0_28077028($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" href="extensions/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/gl-drive-sp-lib.css"/>
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/drive.css"/>
<link rel="stylesheet" type="text/css" href="extensions/mtree/mtree.css"/>
<style>
.page-container .page-content .page-content-wrap {
    position: relative;
    min-width: 1140px;
}
ul.breadcrumb.xh1 > li,
ul.breadcrumb.xh1 > li > a {
    display: inline-block;
    color: #fff;
    font-size: 15px;
    line-height: 100%;
    height: 100%;
    padding: 5px 0;
}
ul.breadcrumb.xh1 > li.n-s {
    color:red;
    cursor: pointer;
}
.breadcrumb.xh1 > li + li:before {
    color: red;
}
.breadcrumb.xh1 > li:nth-child(1) + li:before {
    color: #000;
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
.badge {
    background-color: #000000;
    position: relative;
    top: 2px;
    left: 15px;
    padding: 2.5px 10px;
    font-size: 13px;
    color: #fff;
}
.x1 {
    width: 188.281px;
    min-width: 188.281px;
    max-width: 188.281px;
    padding: 0 15px;
    overflow: hidden;
}
.leftNav {
    background: #17191e;
    display: none;
    position: absolute;
    top: 88px;
    left: 10px;
    bottom: 0;
    width: 20%;
    max-width: 20%;
    min-height: 100%;
    padding-top: 25px;
    z-index: 999;
    overflow-x: hidden;
    overflow-y: auto;
}
.t-f-w {
    display: inline-block;
    position: absolute;
    top: -19px;
    right: 11px;
    width: 100%;
}
.t-f-i-f {
    position: relative;
    display: inline-block;
    width: 70px;
    float: right;
    padding: 0 5px;
    text-align: right;
}
.t-f-i-f > span {
    font-size: 13px;
    color: #fff;
}
.t-f-i-f > i {
    position: absolute;
    top: 2px;
    left: 4px;
}
.k-v-wa-xa-m {
    min-height: 130px;
}
.f-i-w {
    display: inline-block;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    width: auto;
    height: auto;
    max-width: 190px;
    max-height: 130px;
    margin: 0 auto;
}
.l-n-lo {
    line-height: 28px;
    text-align: center;
    color: #fff;
}

@media (min-width:1700px) and (max-width: 1800px) {
    #drive-area .col-lg-2 {
        float: left;
        width: 27%;
    }
}
@media (max-width: 1700px) {
    #drive-area .col-lg-2 {
        float: left;
        width: 29.5%;
    }
    #controls .col-lg-5 {
        float:left;
        width: 40%;
    }
    #controls .col-lg-2 {
        float:left;
        width: 20%;
    }
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
    <a href="cpanel/my-drive" title="Môj Disk">
        Môj Disk    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
    <h2>
        <i class="fa fa-hdd-o"></i>&nbsp;
        Môj Disk&nbsp;
        <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="leftNav">
    <div class="l-n-lo">
        <span class="fa fa-cog"></span>&nbsp;Loading please wait...
    </div>
    <div class="l-n-c">
        
    </div>
</div>
<div id="controls" class="row">
    <div class="col-lg-5 t-p-h">
        <div class="btn-group" role="group">
            <a href="#" onclick="return false;" class="btn btn-info mb-control" role="menuitem" data-box="#message-box-create-folder" title="Nová zložka">
                <i class="fa fa-plus"></i>
                <span>
                    Nová zložka                </span>
            </a>
            <a href="cpanel/my-drive-upload-file/1/1" class="btn btn-warning" role="menuitem"
               title="Nahrávanie súborov"
               >
                <i class="fa fa-cloud-upload"></i>
                <span>
                    Nahrávanie súborov                </span>
            </a>
            <a href="cpanel/my-drive-trash" class="btn btn-danger" role="menuitem" title="Kôš">
                <i class="fa fa-trash-o"></i>
                <span>
                    Kôš                </span>
            </a>
        </div>
    </div>
    <div class="col-lg-5">
        <form role="form" id="drive-search" class="form-horizontal">
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" name="search" value="" placeholder="Hľadat na disku" class="form-control" required>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-2">
        <div class="btn-group pull-right" role="group">
            <a href="cpanel/my-drive" class="btn btn-default" title="boxes">
               <i class="fa fa-th"></i> 
            </a>
            <a href="cpanel/my-drive-list" class="btn btn-default" title="list">
                <i class="fa fa-list"></i>
            </a>
          </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right:5px;">
        <ul class="breadcrumb xh1" style="background:#17191e;margin:15px 0;border-radius:5px;">
            <li class="n-s">
                <span class="fa fa-bars"></span>
            </li>
            <li>
                <a href="cpanel/my-drive" title="Môj Disk">
                    Môj Disk                </a>
            </li>
                    </ul>
    </div><!-- end col -->
</div><!-- end row -->
<div id="drive-area" data-target="layout">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <span class="btn btn-info pull-left xt">
                            5
                        </span>
                        <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                            <span style="display:block;font-size:1.4em;float:left;">
                                <i class="fa fa-folder"></i>&nbsp;
                                <span style="font-weight:100;color:#000;">Priečinky</span>
                            </span>
                        </h3>
                        <span class="badge">Zobrazených 1-30 z 5 záznamov</span>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group pull-left" style="width:80px;margin-right:25px;">
                    <select class="form-control select" onchange="location = 'cpanel/my-drive-folder//1/'+this.options[this.selectedIndex].value+'/1/30';">
                        <option value="all" >všetko</option>
                        <option value="10" >10</option>
                        <option value="30" selected>30</option>
                        <option value="50" >50</option>
                        <option value="100" >100</option>
                        <option value="200" >200</option>
                        <option value="500" >500</option>
                        <option value="1000" >1000</option>
                    </select>
                </div>
                <ul class="pagination pagination-sm pull-left"><li class="disabled"><a href="cpanel/my-drive/0/30/1/30"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/my-drive/1/30/1/30">1</a></li><li class="disabled"><a href="cpanel/my-drive/2/30/1/30"onclick="return false;"><i class="fa fa-angle-right"></i></a></li></ul>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="min-height:275px;" role="presentation">
                            <div    class="col-lg-2 a-v-yc-m"
                        style="min-width:186px;margin-top:30px;"
                        role="option" 
                        tabindex="-1" 
                        title="PROD. FOTKY STARE" 
                        draggable="true"
                        data-target="doc"
                        data-is-doc-name="true"
                        data-id="eaa56b5332ea151557c3a364e2e6cb16"
                        data-type="1"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="PROD. FOTKY STARE"
                        aria-selected="false"
                >
                    <div class="t-f-w">
                        <div class="t-f-i-f btn-info">
                            <i class="fa fa-file"></i>
                            <span>0</span>
                        </div>
                        <div class="t-f-i-f btn-success">
                            <i class="fa fa-folder"></i>
                            <span>263</span>
                        </div>
                    </div>
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-n" aria-label="PROD. FOTKY STARE MyDrive Folder Not selected">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-n-d-m">
                            <div class="k-v-n-d">
                                <div class="k-n-d-we" aria-label="KCMS  MyDrive Folder">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#8f8f8f" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="k-v-n-d-pn">
                                <div class="k-n-d-we" aria-label="">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#ffffff" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="k-v-n-L-m">
                            <div class="k-v-L" aria-label="PROD. FOTKY STARE">
                                <span class="k-wa-P-x">PROD. FOTKY STARE</span>
                            </div>
                        </div>
                        <div class="k-v-n-Na-Lb"></div>
                    </div>
                </div>
                            <div    class="col-lg-2 a-v-yc-m"
                        style="min-width:186px;margin-top:30px;"
                        role="option" 
                        tabindex="-1" 
                        title="BANNERY" 
                        draggable="true"
                        data-target="doc"
                        data-is-doc-name="true"
                        data-id="50831bde7537eac6a0c3ab5045d5b549"
                        data-type="1"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="BANNERY"
                        aria-selected="false"
                >
                    <div class="t-f-w">
                        <div class="t-f-i-f btn-info">
                            <i class="fa fa-file"></i>
                            <span>0</span>
                        </div>
                        <div class="t-f-i-f btn-success">
                            <i class="fa fa-folder"></i>
                            <span>4</span>
                        </div>
                    </div>
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-n" aria-label="BANNERY MyDrive Folder Not selected">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-n-d-m">
                            <div class="k-v-n-d">
                                <div class="k-n-d-we" aria-label="KCMS  MyDrive Folder">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#8f8f8f" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="k-v-n-d-pn">
                                <div class="k-n-d-we" aria-label="">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#ffffff" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="k-v-n-L-m">
                            <div class="k-v-L" aria-label="BANNERY">
                                <span class="k-wa-P-x">BANNERY</span>
                            </div>
                        </div>
                        <div class="k-v-n-Na-Lb"></div>
                    </div>
                </div>
                            <div    class="col-lg-2 a-v-yc-m"
                        style="min-width:186px;margin-top:30px;"
                        role="option" 
                        tabindex="-1" 
                        title="PROD. FOTKY NOVE" 
                        draggable="true"
                        data-target="doc"
                        data-is-doc-name="true"
                        data-id="b27955b144dc2f67be013c3d180264f3"
                        data-type="1"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="PROD. FOTKY NOVE"
                        aria-selected="false"
                >
                    <div class="t-f-w">
                        <div class="t-f-i-f btn-info">
                            <i class="fa fa-file"></i>
                            <span>0</span>
                        </div>
                        <div class="t-f-i-f btn-success">
                            <i class="fa fa-folder"></i>
                            <span>4</span>
                        </div>
                    </div>
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-n" aria-label="PROD. FOTKY NOVE MyDrive Folder Not selected">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-n-d-m">
                            <div class="k-v-n-d">
                                <div class="k-n-d-we" aria-label="KCMS  MyDrive Folder">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#8f8f8f" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="k-v-n-d-pn">
                                <div class="k-n-d-we" aria-label="">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#ffffff" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="k-v-n-L-m">
                            <div class="k-v-L" aria-label="PROD. FOTKY NOVE">
                                <span class="k-wa-P-x">PROD. FOTKY NOVE</span>
                            </div>
                        </div>
                        <div class="k-v-n-Na-Lb"></div>
                    </div>
                </div>
                            <div    class="col-lg-2 a-v-yc-m"
                        style="min-width:186px;margin-top:30px;"
                        role="option" 
                        tabindex="-1" 
                        title="FOTKY MAGAZIN - BLOG" 
                        draggable="true"
                        data-target="doc"
                        data-is-doc-name="true"
                        data-id="95d061c7a546fe4cb733d8c817612773"
                        data-type="1"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="FOTKY MAGAZIN - BLOG"
                        aria-selected="false"
                >
                    <div class="t-f-w">
                        <div class="t-f-i-f btn-info">
                            <i class="fa fa-file"></i>
                            <span>8</span>
                        </div>
                        <div class="t-f-i-f btn-success">
                            <i class="fa fa-folder"></i>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-n" aria-label="FOTKY MAGAZIN - BLOG MyDrive Folder Not selected">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-n-d-m">
                            <div class="k-v-n-d">
                                <div class="k-n-d-we" aria-label="KCMS  MyDrive Folder">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#8f8f8f" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="k-v-n-d-pn">
                                <div class="k-n-d-we" aria-label="">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#ffffff" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="k-v-n-L-m">
                            <div class="k-v-L" aria-label="FOTKY MAGAZIN - BLOG">
                                <span class="k-wa-P-x">FOTKY MAGAZIN - BLOG</span>
                            </div>
                        </div>
                        <div class="k-v-n-Na-Lb"></div>
                    </div>
                </div>
                            <div    class="col-lg-2 a-v-yc-m"
                        style="min-width:186px;margin-top:30px;"
                        role="option" 
                        tabindex="-1" 
                        title="FAKTÚRY" 
                        draggable="true"
                        data-target="doc"
                        data-is-doc-name="true"
                        data-id="babd57c42fbf34d77d1fe9300c8fc19c"
                        data-type="1"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="FAKTÚRY"
                        aria-selected="false"
                >
                    <div class="t-f-w">
                        <div class="t-f-i-f btn-info">
                            <i class="fa fa-file"></i>
                            <span>3</span>
                        </div>
                        <div class="t-f-i-f btn-success">
                            <i class="fa fa-folder"></i>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-n" aria-label="FAKTÚRY MyDrive Folder Not selected">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-n-d-m">
                            <div class="k-v-n-d">
                                <div class="k-n-d-we" aria-label="KCMS  MyDrive Folder">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#8f8f8f" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="k-v-n-d-pn">
                                <div class="k-n-d-we" aria-label="">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#ffffff" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="k-v-n-L-m">
                            <div class="k-v-L" aria-label="FAKTÚRY">
                                <span class="k-wa-P-x">FAKTÚRY</span>
                            </div>
                        </div>
                        <div class="k-v-n-Na-Lb"></div>
                    </div>
                </div>
                    </div><!-- end row (folder section) -->
        </div><!-- end drive-area -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        

<div class="d-n-m">
    <span class="d-n-m-t-l">
        <span></span>
    </span>
</div>

<!-- RIGHT MOUSE NAV -->
<div class="d-r-n" aria-haspopup="true" tabindex="-1">
    <ul class="nav nav-pills nav-stacked" role="menu">
        <li role="menuitem" data-menu-item="open">
            <a href="#" onclick="return false;">
                <span class="fa fa-desktop"></span>
                <span class="d-r-n-m-i-t t-1x-f">
                    Otvoriť v novom okne                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="newFolder">
            <a href="#" onclick="return false;">
                <span class="fa fa-plus"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Nová zložka                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="share">
            <a href="#" onclick="return false;">
                <span class="fa fa-user"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Zdielať                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="link">
            <a href="#" onclick="return false;">
                <span class="fa fa-external-link"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Získať odkaz                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="move">
            <a href="#" onclick="return false;">
                <span class="fa fa-folder"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Presnunúť do                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="star">
            <a href="#" onclick="return false;">
                <span class="fa fa-star"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Pridať hviezdičku                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="color">
            <a href="#" onclick="return false;">
                <span class="d-r-n-m-i-t t-2x">
                    Zmeniť farbu                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="rename">
            <a href="#" onclick="return false;">
                <span class="d-r-n-m-i-t t-2x">
                    Premenovať                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="dowloand">
            <a href="#" onclick="return false;">
                <span class="fa fa-download"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Stiahnúť                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="remove">
            <a href="#" onclick="return false;">
                <span class="fa fa-trash-o"></span>
                <span class="d-r-n-m-i-t t-1x">
                    Odstrániť                </span>
            </a>
        </li>
    </ul>
</div>
<!-- END RIGHT MOUSE NAV -->

<!-- MODAL WINDOW CREATE FOLDER -->
<div class="message-box message-box-info animated fadeIn" id="message-box-create-folder">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title">
                Nová zložka            </div>
            <div class="mb-content">
                <div class="row">
                    <div class="col-lg-12">    
                        <form role="form" action="cpanel/create-folder" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="hidden" name="is_root" value="1"/>
                                        <input type="hidden" name="folder-id" value="1"/>
                                        <input type="text" name="folder-name" value="" placeholder="Folder name" autocomplete="off" class="form-control" required>
                                    </div>                                            
                                    <span class="help-block" style="color:#000;">
                                        Zadajte názov priečinka.                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;VYTVORIŤ                                    </button>
                                    <button type="button" class="btn btn-default mb-control-close" data-dismiss="modal">
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
<!-- //-- MODAL WINDOW CREATE FOLDER -->

<!-- MODAL WINDOW RENAME FOLDER -->
<div class="message-box message-box-info animated fadeIn" id="message-box-rename">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title">
                Premenovať            </div>
            <div class="mb-content">
                <div class="row">
                    <div class="col-lg-12">    
                        <form role="form" id="drive-rename" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="hidden" name="item-id" value=""/>
                                        <input type="text" name="item-new-name" value="" autocomplete="off" class="form-control" required>
                                    </div>                                            
                                    <span class="help-block" style="color:#000;">
                                        Prosím, zadajte nový názov položky.                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                                    </button>
                                    <button type="button" class="btn btn-default mb-control-close" data-dismiss="modal">
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
<!-- //-- MODAL WINDOW RENAME FOLDER -->

<!-- MODAL WINDOW MOVE TO -->
<div class="d-m-t" aria-haspopup="true" tabindex="-1">
    
</div>                                    
<!-- //-- MODAL WINDOW MOVE TO -->

<!-- MODAL WINDOW MOVE ITEMS -->                                       
<div class="modal" id="modal_dynamic_window" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">                    
            <div class="modal-body" style="background: #000;"><!-- --></div>
            <div class="modal-footer">
                <button type="button" id="moveToBtn" class="btn btn-success pull-left">
                    <i class="fa fa-save"></i>&nbsp;PRESUNÚŤ                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                    ZAVRIEŤ                </button>
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW MOVE ITEMS -->


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
<script type="text/javascript" src="extensions/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/ext/drive.js"></script>
<script>
    Drive.init(1,1,30,1,30);
</script>
<script type="text/javascript">
$(function() {
    $("a.img-item").fancybox({
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        'speedIn'	: 600, 
        'speedOut'	: 200, 
        'overlayShow'	: false
    });
    $("li.n-s").on('click',function() {
        $('.leftNav').toggle();
    });
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
