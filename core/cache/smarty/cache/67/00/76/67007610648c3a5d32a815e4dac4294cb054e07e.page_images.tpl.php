<?php /*%%SmartyHeaderCode:1940564148580fd342c52426-63136283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8861b81cadce14849c51976eab1edeed48c8f008' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/page/page_images.tpl',
      1 => 1469707232,
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
    '67007610648c3a5d32a815e4dac4294cb054e07e' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/page/page_images.tpl',
      1 => 1469707232,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1940564148580fd342c52426-63136283',
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
  'unifunc' => 'content_580fd34323e751_62634532',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580fd34323e751_62634532')) {function content_580fd34323e751_62634532($_smarty_tpl) {?><!DOCTYPE html>
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
        
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/gl-drive-sp-lib.css"/>
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/drive.css"/>
<style>
#glr-folders a:hover {
  text-decoration: none;
  color: #000;
}
#glr-wrap .gallery-item {
  position: relative;
  margin-bottom: 29px;
}
#glr-wrap .gallery-item .meta {
  position: absolute;
  left: 0;
  right: 0;
  bottom: -21px;
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
        Stránky    </a>
</li>
<li class="active">
    <a href="#" onclick="return false;" title="Obrázok na pozadí">
        Obrázok na pozadí    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <h6 style="margin-left:15px;">Adresárová štruktúra</h6>
    <ul class="breadcrumb">
        <li>
            <a href="cpanel/choose-page-image/2/19/189/7259b712f116a7fe6310cdc765c836af">
                Hlavný adresár            </a>
        </li>
                    <li>
                <a href="cpanel/choose-page-image/2/19/189/95d061c7a546fe4cb733d8c817612773">
                    FOTKY MAGAZIN - BLOG
                </a>
            </li>
            </ul>
    <div class="page-title">                    
        <h2>
            <i class="fa fa-picture-o"></i>&nbsp;
            Obrázok na pozadí        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12">
        <form role="form" action="cpanel/insert-page-image" method="post">
            <input type="hidden" name="action-id" value="2" />
            <input type="hidden" name="page-id" value="19" />
            <input type="hidden" name="lang-id" value="189" />
            <div class="btn-group push-up-10" role="group">
                <button type="button" class="btn btn-warning" id="gallery-toggle-items" disabled>
                    <i class="fa fa-check-square-o"></i>
                    Označiť všetko                </button>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Uložiť                </button>               
            </div>
                          <div id="glr-folders">
                                    <a  href="cpanel/choose-page-image/2/19/189/21830101a65ff368f4ac5a452271757c"
                        class="a-v-yc-m"
                        style="width:240px;margin-top:16px;margin-right:16px;"
                        role="option" 
                        tabindex="-1" 
                        title="NEVA EVA" 
                        aria-selected="false"
                    >
                        <div class="a-v-yc-Jj-od-Fd"></div>
                        <div class="k-v-yc k-v-n" aria-label="NEVA EVA MyDrive Folder Not selected">
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
                                <div class="k-v-L" aria-label="NEVA EVA">
                                    <span class="k-wa-P-x">NEVA EVA</span>
                                </div>
                            </div>
                            <div class="k-v-n-Na-Lb"></div>
                        </div>
                    </a>
                                    <a  href="cpanel/choose-page-image/2/19/189/bdd05fe9b116b70a10da7943115b9a3e"
                        class="a-v-yc-m"
                        style="width:240px;margin-top:16px;margin-right:16px;"
                        role="option" 
                        tabindex="-1" 
                        title="BEACH VOLLEY" 
                        aria-selected="false"
                    >
                        <div class="a-v-yc-Jj-od-Fd"></div>
                        <div class="k-v-yc k-v-n" aria-label="BEACH VOLLEY MyDrive Folder Not selected">
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
                                <div class="k-v-L" aria-label="BEACH VOLLEY">
                                    <span class="k-wa-P-x">BEACH VOLLEY</span>
                                </div>
                            </div>
                            <div class="k-v-n-Na-Lb"></div>
                        </div>
                    </a>
                              </div><!-- end glr-folders -->
                                      <div id="glr-wrap" class="gallery" id="links">
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/7aeed3c80935265e7b666e9c274ace02.jpg" title="1a541a03e5a61af3c5881d4cf25d7922" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/7aeed3c80935265e7b666e9c274ace02.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="1a541a03e5a61af3c5881d4cf25d7922"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[0]['imgId']" value="7aeed3c80935265e7b666e9c274ace02" />
                                          <input type="checkbox" name="images[0]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>1a541a03e5a61af3c5881d4c...</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/de3c57d012dc4e5e6d777ab2cb6de780.jpg" title="5ee1cbed41e8e64b1336c24ef5a68f07" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/de3c57d012dc4e5e6d777ab2cb6de780.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="5ee1cbed41e8e64b1336c24ef5a68f07"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[1]['imgId']" value="de3c57d012dc4e5e6d777ab2cb6de780" />
                                          <input type="checkbox" name="images[1]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>5ee1cbed41e8e64b1336c24e...</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/0d80b57256a18b092a1135aab6b0bbea.jpg" title="6b322e3b7e53e39c8f2b60efdfe90cab" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/0d80b57256a18b092a1135aab6b0bbea.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="6b322e3b7e53e39c8f2b60efdfe90cab"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[2]['imgId']" value="0d80b57256a18b092a1135aab6b0bbea" />
                                          <input type="checkbox" name="images[2]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>6b322e3b7e53e39c8f2b60ef...</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/3a4233694ad1c320f32f7e89efa78387.jpg" title="7bde734571cd7735308375a76eb318e0" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/3a4233694ad1c320f32f7e89efa78387.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="7bde734571cd7735308375a76eb318e0"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[3]['imgId']" value="3a4233694ad1c320f32f7e89efa78387" />
                                          <input type="checkbox" name="images[3]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>7bde734571cd7735308375a7...</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/82f3c35dda500d3f577be3fddd79ea42.jpg" title="41c33cdd79283fd146fcf015bcb5747f" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/82f3c35dda500d3f577be3fddd79ea42.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="41c33cdd79283fd146fcf015bcb5747f"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[4]['imgId']" value="82f3c35dda500d3f577be3fddd79ea42" />
                                          <input type="checkbox" name="images[4]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>41c33cdd79283fd146fcf015...</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/85422e3893b858c225c41369f079391d.jpg" title="4259d93bb4a89871129ccae5cb1d7ca9" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/85422e3893b858c225c41369f079391d.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="4259d93bb4a89871129ccae5cb1d7ca9"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[5]['imgId']" value="85422e3893b858c225c41369f079391d" />
                                          <input type="checkbox" name="images[5]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>4259d93bb4a89871129ccae5...</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/d06b985a51fd7e6b8564e90773be6ad0.jpg" title="F94B2607_cb_bez loga" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/d06b985a51fd7e6b8564e90773be6ad0.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="F94B2607_cb_bez loga"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[6]['imgId']" value="d06b985a51fd7e6b8564e90773be6ad0" />
                                          <input type="checkbox" name="images[6]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>F94B2607_cb_bez loga</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/c1fd4bcdd6d91f88e2c0e744939240cc.jpg" title="F94B2684_cb_bez loga" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/c1fd4bcdd6d91f88e2c0e744939240cc.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="F94B2684_cb_bez loga"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[7]['imgId']" value="c1fd4bcdd6d91f88e2c0e744939240cc" />
                                          <input type="checkbox" name="images[7]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>F94B2684_cb_bez loga</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/6c6d38b4db4dc812d8810b7ff541ed47.png" title="Snímka obrazovky 2016-09-13 o 12.13.42" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/6c6d38b4db4dc812d8810b7ff541ed47.png" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="Snímka obrazovky 2016-09-13 o 12.13.42"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[8]['imgId']" value="6c6d38b4db4dc812d8810b7ff541ed47" />
                                          <input type="checkbox" name="images[8]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>Snímka obrazovky 2016-0...</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/406d7f16aef0bf7d2655df4c865eaacc.jpg" title="carpedm-dava-sancu-mladym1" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/406d7f16aef0bf7d2655df4c865eaacc.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="carpedm-dava-sancu-mladym1"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[9]['imgId']" value="406d7f16aef0bf7d2655df4c865eaacc" />
                                          <input type="checkbox" name="images[9]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>carpedm-dava-sancu-mladym1</strong>
                          </div>                                
                      </a>
                                        <a class="gallery-item" href="http://www.carpedmfashion.com/files/628ba9ea6ba202799d779c853257b028.jpg" title="carpedm-dava-sancu-mladym" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                          <div class="image">                              
                              <img src="/files/628ba9ea6ba202799d779c853257b028.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="carpedm-dava-sancu-mladym"/>                                        
                              <ul class="gallery-item-controls">
                                  <li>
                                      <label class="check">
                                          <input type="hidden" name="images[10]['imgId']" value="628ba9ea6ba202799d779c853257b028" />
                                          <input type="checkbox" name="images[10]['use']" class="icheckbox"/>
                                      </label>
                                  </li>
                                  <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                              </ul>                                                                    
                          </div>
                          <div class="meta">
                              <strong>carpedm-dava-sancu-mladym</strong>
                          </div>                                
                      </a>
                                </div>
                    </form>
    </div>
</div>
<!-- BLUEIMP GALLERY -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
  <div class="slides"></div>
  <h3 class="title"></h3>
  <a class="prev">‹</a>
  <a class="next">›</a>
  <a class="close">×</a>
  <a class="play-pause"></a>
  <ol class="indicator"></ol>
</div>      
<!-- END BLUEIMP GALLERY -->

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
        
<script type="text/javascript" src="extensions/cpanel/js/plugins/icheck/icheck.min.js"></script>
<script type="text/javascript" src="extensions/cpanel/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

<script type="text/javascript">            
document.getElementById('links').onclick = function (event) {
  event = event || window.event;
  var target = event.target || event.srcElement;
  var link = target.src ? target.parentNode : target;
  var options = {index: link, event: event,onclosed: function(){
          setTimeout(function(){
              $("body").css("overflow","");
          },200);                        
      }};
  var links = this.getElementsByTagName('a');
  blueimp.Gallery(links, options);
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
