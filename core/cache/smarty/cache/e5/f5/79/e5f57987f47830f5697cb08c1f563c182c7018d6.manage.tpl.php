<?php /*%%SmartyHeaderCode:6140955695798b836c98792-42737504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ba92cebb4c67de9f2c6325d7ae7707a44d704c5' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/thumbnail/manage.tpl',
      1 => 1469538178,
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
    'e5f57987f47830f5697cb08c1f563c182c7018d6' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/thumbnail/manage.tpl',
      1 => 1469538178,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '6140955695798b836c98792-42737504',
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
  'unifunc' => 'content_5798b836dea3a1_68428339',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798b836dea3a1_68428339')) {function content_5798b836dea3a1_68428339($_smarty_tpl) {?><!DOCTYPE html>
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
        
<style>
#loadingOverlay {
  position: relative;
}

#loadingOverlay.active .panel {
  display: none;
}
#loadingOverlay.active .loader {
  display: block;
}
#loadingOverlay .loader {
  display: none;
  position: absolute;
  top: 25%;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 800;
}
#loadingOverlay .loader .loader-svg {
  display: block;
  width: 200px;
  margin: 0 auto;
}
#loadingOverlay .loader p.text {
  font-size: 1.5em;
  font-weight: 600;
}
#messenger {
  display: none;
  font-size: 1.5em;
  font-weight: 700;
}
ol {
  margin: 15px 0 0 -25px;
}
ol li {
   margin-bottom: 5px;
}
.table-responsive.resize-list {
  overflow: initial !important;
}
.td-device {
  position: relative;
}
.td-device .device {
  position: absolute;
  top: 12px;
}
.td-device .device {
  font-size: 1.6em;
}
.td-device .device.all {
  top: 8px;
  left: -30px;
  color: #000;
}
.td-device .device.desktop {
  left: -30px;
  color: #95b75d;
}
.td-device .device.tablet {
  left: -27px;
  color: #fea223;
}
.td-device .device.mobile {
  left: -26px;
  color: #3fbae4;
}
.label {
  margin-right: 5px;
}
p.message.warning {
  background-color: #fea223;
  margin-bottom: 10px;
  padding: 15px;
  font-size: 1.4em;
  line-height: 21px;
  color: #FFF;
  border: 1px solid #fe9e19;
  border-radius: 4px;
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
    Obchod  </a>
</li>
<li class="active">
  <a href="cpanel/thumbnail" title="Thumbnail">
    Thumbnail  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
    Thumbnail    <span style="font-size: .7em;color:red;">&nbsp;<sup>Experimental</sup></span>
  </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<!-- THUMBNAIL AJAX MESSENGER -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="messenger" class="alert alert-info text-center" role="alert">
      Priebieha spracovanie, prosím čakajte...    </div>
  </div><!-- end col -->
</div><!-- end row -->
<!-- THUMBNAIL AJAX MESSENGER -->
<div id="loadingOverlay" class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 loader">
    <p>
      <img src="extensions/cpanel/img/triangle.svg" class="loader-svg">
    </p>
    <p class="text text-center">
      Spracovanie obrázkov, môže trvať dlhšiu dobu, 
      prosím čakajte a ponechajte otvorené okno webového prehliadača.
    </p>
  </div><!-- end loader -->
  <div id="reload">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="cpanel/create-resize-rule" method="post" role="form">
          <div class="panel panel-primary panel-toggled">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Vytvoriť pravidlo úpravy obrázkov
              </h3>
              <ul class="panel-controls">
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    ZARIADENIE
                    <span style="color:red;">*</span>
                  </label>
                  <select name="device" class="form-control select">
                    <option value="0">
                                              Vyberte...
                                          </option>
                    <option value="1">
                      VŠETKY ZARIADENIA
                    </option>
                    <option value="2">
                      PC
                    </option>
                    <option value="3">
                      PC A TABLET
                    </option>
                    <option value="4">
                      TABLET
                    </option>
                    <option value="5">
                      MOBIL
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    VIEWPORT
                  </label>
                  <select name="viewport" class="form-control select">
                    <option value="0">
                                              Vyberte...
                                          </option>
                    <option value="1">
                      min-width
                    </option>
                    <option value="2">
                      max-width
                    </option>
                    <option value="3">
                      min-height
                    </option>
                    <option value="4">
                      max-height
                    </option>
                    <option value="5">
                      min-width / max-width
                    </option>
                    <option value="6">
                      min-height / max-height
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    MIN [ <strong>PX</strong> ]
                  </label>
                  <input type="text"  name="min" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    MAX [ <strong>PX</strong> ]
                  </label>
                  <input type="text"  name="max" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    METÓDA ÚPRAVY OBRÁZKOV
                    <span style="color:red;">*</span>
                  </label>
                  <select name="resize" class="form-control select">
                    <option value="0">
                                              Vyberte...
                                          </option>
                    <option value="1">
                      AUTO
                    </option>
                    <option value="2">
                      CROP
                    </option>
                    <option value="3">
                      EXACT
                    </option>
                    <option value="4">
                      LANDSCAPE
                    </option>
                    <option value="5">
                      PORTRAIT
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    ŠÍRKA [ <strong>PX</strong> ]
                    <span style="color:red;">*</span>
                  </label>
                  <input type="text"  name="width" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    VÝŠKA [ <strong>PX</strong> ]
                    <span style="color:red;">*</span>
                  </label>
                  <input type="text"  name="height" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-info" style="margin: 20px 0 0 0;" role="alert">
                  <ol>
                    <li>
                      <strong>AUTO:</strong> Systém automatický zvolí vhodnú úpravu veľkosti (CROP, EXACT) na vybrané fotky. 
                    </li>
                    <li>
                      <strong>CROP:</strong> Úprava veľkosti s orezom bez deformácie fotiek.
                    </li>
                    <li>
                      <strong>EXACT:</strong> Úprava veľkosti podľa zadaných parametrov šírka/výška. Pri zmene pomeru strán nastane deformácia fotiek.
                    </li>
                    <li>
                      <strong>LANDSCAPE:</strong> Úprava veľkosti podľa zadaného parametru šírka. Výška je prispôsobená automaticky podľa pomeru strán bez deformácie fotiek.
                    </li>
                    <li>
                      <strong>PORTRAIT:</strong> Úprava veľkosti podľa zadaného parametru výška. Šírka je prispôsobená automaticky podľa pomeru strán bez deformácie fotiek. 
                    </li>
                  </ol>
                </div><!-- end alert -->
              </div><!-- end col -->
            </div><!-- end panel-body -->
            <div class="panel-footer">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;
                VYTVORIŤ              </button>
            </div><!-- end panel-footer -->
          </div><!-- end panel -->
        </form>
      </div><!-- end col -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 50px;">
        <form action="cpanel/delete-resize-rules" method="post" role="form">
          <div class="panel panel-info">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Zoznam pravidiel na úpravu obrazkov
              </h3>
              <ul class="panel-controls">
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-table">
                              <div class="table-responsive resize-list" style="border-top:1px solid #E5E5E5;">
                  <table id="resizeRuleList" class="table table-bordered table-striped table-actions">
                    <thead>
                      <tr>
                        <th class="text-center">
                          ID
                        </th>
                        <th class="text-center">
                          ZARIADENIE
                        </th>
                        <th class="text-center">
                          VIEWPORT
                        </th>
                        <th class="text-right">
                          MIN [ <strong>PX</strong> ]
                        </th>
                        <th class="text-right">
                          MAX [ <strong>PX</strong> ]
                        </th>
                        <th class="text-center">
                          METÓDA ÚPRAVY OBRÁZKOV
                        </th>
                        <th class="text-right">
                          ŠÍRKA [ <strong>PX</strong> ]
                        </th>
                        <th class="text-right">
                          VÝŠKA [ <strong>PX</strong> ]
                        </th>
                        <th class="text-center">
                          ODSTRÁNIŤ                        </th>
                      </tr>
                    </thead>
                    <tbody>
                                              <tr>
                          <td class="td-device text-center">
                            <input type="hidden" name="resizeRuleList[0]['id']" value="2" />
                            <strong>2</strong>
                                                          <div class="device all">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                              </div><!-- end divece -->
                                                                                                                                          </td>
                          <td class="text-left">
                                                          VŠETKY ZARIADENIA
                                                                                                                                                                      </td>
                          <td class="text-left">
                                                          -
                                                                                                                                                                                                                              </td>
                          <td class="text-right">
                            0.00
                          </td>
                          <td class="text-right">
                            0.00
                          </td>
                          <td class="text-left">
                                                                                                                                              LANDSCAPE
                                                                                  </td>
                          <td class="text-right">
                            400.00
                          </td>
                          <td class="text-right">
                            0.00
                          </td>
                          <td class="text-center">
                            <label class="switch">
                              <input type="checkbox" name="resizeRuleList[0]['delete']" value="1">
                              <span></span>
                            </label>
                          </td>
                        </tr>
                                          </tbody>
                  </table>
                </div><!-- end table-responsive -->
                          </div><!-- end panel-body -->
                          <div class="panel-footer">
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-save"></i>&nbsp;
                  ULOŽIŤ ZMENY                </button>
              </div><!-- end panel-footer -->
                      </div><!-- end panel -->
        </form>
      </div><!-- end col -->
    </div><!-- end col -->
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form id="pForm" action="cpanel/create-resize-section" method="post" role="form">
          <div class="panel panel-primary panel-toggled">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Uplatniť na sekciu 
              </h3>
              <ul class="panel-controls">
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    SEKCIA
                    <span style="color:red;">*</span>
                  </label>
                  <select name="kind" class="form-control select">
                    <option value="0">
                                              Vyberte...
                                          </option>
                    <option value="1">
                      Všetky sekcie
                    </option>
                    <option value="2">
                      Kategória
                    </option>
                    <option value="3">
                      Atribúty
                    </option>
                    <option value="4">
                      Hodnoty atribútov
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    SPÔSOB UPLATNENIA
                  </label>
                  <select name="type" class="form-control select">
                    <option value="0">
                                              Vyberte...
                                          </option>
                    <option value="1">
                      Zvoliť
                    </option>
                    <option value="2">
                      Všetko
                    </option>
                    <option value="3">
                      Všetko s výnimkou
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    UPRESNENIE
                  </label>
                  <div id="specification">
                    <div class="alert alert-info text-center" role="alert" style="margin: 0;padding: 5px 15px;">
                      <i class="fa fa-ban" aria-hidden="true"></i>
                    </div>
                  </div><!-- end sv -->
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;">
                <div class="form-group">
                  <label>
                    PRAVIDLÁ ÚPRAVY OBRÁZKOV
                    <span style="color:red;">*</span>
                  </label>
                                      <select name="rules[]" class="form-control select" multiple="true">
                                              <option value="2">
                          [ 2 ]
                          |
                                                      VŠETKY ZARIADENIA
                                                                                                                                                            |
                                                      -
                                                                                                                                                                                                                |
                          0.00
                          |
                          0.00
                          |
                                                                                                                                    LANDSCAPE
                                                                              |
                          400.00
                          |
                          0.00
                        </option>
                                          </select>
                                  </div><!-- end form-group -->
              </div><!-- end col -->
            </div><!-- end panel-body -->
            <div class="panel-footer">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;
                VYTVORIŤ              </button>
            </div><!-- end panel-footer -->
          </div><!-- end panel -->
        </form>
      </div><!-- end col -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="cpanel/delete-thumbnails" method="post" role="form">
          <div class="panel panel-info">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Zoznam sekcií
              </h3>
              <ul class="panel-controls">
                <li><a href="api/generate-thumbnail" target="_blank"><i class="fa fa-bolt" aria-hidden="true"></i></a></li>
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-table">
                              <div class="table-responsive thumb-section-list" style="border-top:1px solid #E5E5E5;">
                  <table id="thumbSectionList" class="table table-bordered table-striped table-actions">
                    <thead>
                      <tr>
                        <th class="text-center">
                          ID
                        </th>
                        <th class="text-center">
                          SEKCIA
                        </th>
                        <th class="text-center">
                          SPÔSOB UPLATNENIA
                        </th>
                        <th class="text-center">
                          UPRESNENIE
                        </th>
                        <th class="text-center">
                          PRAVIDLÁ ÚPRAVY OBRÁZKOV [ IDs ]
                        </th>
                        <th class="text-center">
                          STATUS
                        </th>
                        <th class="text-center">
                          ODSTRÁNIŤ                        </th>
                      </tr>
                    </thead>
                    <tbody>
                                              <tr>
                          <td class="text-center">
                            <input type="hidden" name="thumbList[0]['id']" value="5" />
                            <strong>5</strong>
                          </td>
                          <td class="text-left">
                                                          Všetky sekcie
                                                                                                                                          </td>
                          <td class="text-center">
                                                                                      Všetko
                                                                                  </td>
                          <td class="text-center">
                                                          <span style="font-size: 1.3em;color: #3fbae4;">
                                <i class="fa fa-ban" aria-hidden="true"></i>
                              </span>
                                                                                                                                          </td>
                          <td class="text-left">
                                                                                          <span class="label label-info">
                                  2
                                </span>
                                                                                    </td>
                          <td class="text-center">
                                                          <span style="font-size: 1.3em;color: #95b75d;">
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                              </span>
                                                      </td>
                          <td class="text-center">
                            <label class="switch">
                              <input type="checkbox" name="thumbList[0]['delete']" value="1">
                              <span></span>
                            </label>
                          </td>
                        </tr>
                                          </tbody>
                  </table>
                </div><!-- end table-responsive -->
                          </div><!-- end panel-body -->
                          <div class="panel-footer">
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-save"></i>&nbsp;
                  ULOŽIŤ ZMENY                </button>
              </div><!-- end panel-footer -->
                      </div><!-- end panel -->
        </form>
      </div><!-- end col -->
    </div><!-- end col -->
  </div><!-- end reload -->
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
<script type="text/javascript" src="extensions/cpanel/js/ext/Thumbnail.js"></script>
<script type="text/javascript">
  Thumbnail.init();
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
