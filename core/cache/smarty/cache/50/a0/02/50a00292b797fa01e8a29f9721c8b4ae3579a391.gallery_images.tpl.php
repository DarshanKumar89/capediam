<?php /*%%SmartyHeaderCode:173294395558450b308e7b99-02941665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a364395bc09cd93b4b83f6f1eee91caed6c81b2d' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/gallery/gallery_images.tpl',
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
    '50a00292b797fa01e8a29f9721c8b4ae3579a391' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/gallery/gallery_images.tpl',
      1 => 1469707228,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '173294395558450b308e7b99-02941665',
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
  'unifunc' => 'content_58450b31087748_19425425',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58450b31087748_19425425')) {function content_58450b31087748_19425425($_smarty_tpl) {?><!DOCTYPE html>
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
    <a href="cpanel/gallery-list" title="Galéria">
        Galéria    </a>
</li>
<li class="active" title="FAY IN WOMAN COLOUR">
    <a href="cpanel/gallery-edit/272">
        FAY IN WOMAN COLOUR
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <h6 style="margin-left:15px;">
        Adresárová štruktúra    </h6>
    <ul class="breadcrumb">
        <li>
            <a href="cpanel/gallery-images/272/7259b712f116a7fe6310cdc765c836af">
                ROOT
            </a>
        </li>
                    <li>
                <a href="cpanel/gallery-images/272/b27955b144dc2f67be013c3d180264f3">
                    PROD. FOTKY NOVE
                </a>
            </li>
                    <li>
                <a href="cpanel/gallery-images/272/7328bf22228b87482b1c6442c1df909d">
                    NOVÉ DÁMSKE
                </a>
            </li>
                    <li>
                <a href="cpanel/gallery-images/272/07faad1e337ce36e3163690970013b5d">
                    Fay in woman colour
                </a>
            </li>
            </ul>
    <div class="page-title">                    
        <h2>
            <i class="fa fa-picture-o"></i>
            Galéria&nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12" style="padding-bottom: 100px;">
        <form action="cpanel/insert-gallery-images" method="post" role="form">
            <input type="hidden" name="gallery-id" value="272" />
            <div class="btn-group push-up-10" role="group">
                <button type="button" class="btn btn-warning" id="gallery-toggle-items">
                    <i class="fa fa-check-square-o"></i>
                    Označiť všetko                </button>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Uložiť                </button>              
            </div>
            <div id="glr-folders">
                            </div>
                            <div id="glr-wrap" class="gallery" id="links">
                                            <a class="gallery-item" href="http://www.carpedmfashion.com/files/0a483d43b13b9aad225733223b092d0f.jpg" title="Fay in colour" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                            <div class="image">                              
                                <img src="/files/0a483d43b13b9aad225733223b092d0f.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="Fay in colour"/>                                        
                                <ul class="gallery-item-controls">
                                    <li>
                                        <label class="check">
                                            <input type="hidden" name="images[0]['imgId']" value="0a483d43b13b9aad225733223b092d0f" />
                                            <input type="checkbox" name="images[0]['use']" class="icheckbox"/>
                                        </label>
                                    </li>
                                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                </ul>                                                                    
                            </div>
                            <div class="meta">
                                <strong>Fay in colour</strong>
                            </div>                                
                        </a>
                                            <a class="gallery-item" href="http://www.carpedmfashion.com/files/9898c36d72b5214a15443d95faccdb0f.jpg" title="Fay in colour1" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                            <div class="image">                              
                                <img src="/files/9898c36d72b5214a15443d95faccdb0f.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="Fay in colour1"/>                                        
                                <ul class="gallery-item-controls">
                                    <li>
                                        <label class="check">
                                            <input type="hidden" name="images[1]['imgId']" value="9898c36d72b5214a15443d95faccdb0f" />
                                            <input type="checkbox" name="images[1]['use']" class="icheckbox"/>
                                        </label>
                                    </li>
                                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                </ul>                                                                    
                            </div>
                            <div class="meta">
                                <strong>Fay in colour1</strong>
                            </div>                                
                        </a>
                                            <a class="gallery-item" href="http://www.carpedmfashion.com/files/89946c17544a6c6af767044ad461a5bd.jpg" title="Fay in colour2" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                            <div class="image">                              
                                <img src="/files/89946c17544a6c6af767044ad461a5bd.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="Fay in colour2"/>                                        
                                <ul class="gallery-item-controls">
                                    <li>
                                        <label class="check">
                                            <input type="hidden" name="images[2]['imgId']" value="89946c17544a6c6af767044ad461a5bd" />
                                            <input type="checkbox" name="images[2]['use']" class="icheckbox"/>
                                        </label>
                                    </li>
                                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                </ul>                                                                    
                            </div>
                            <div class="meta">
                                <strong>Fay in colour2</strong>
                            </div>                                
                        </a>
                                            <a class="gallery-item" href="http://www.carpedmfashion.com/files/97d41f785cb3b5c06237354d4d72bbd7.jpg" title="Fay in colour3" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                            <div class="image">                              
                                <img src="/files/97d41f785cb3b5c06237354d4d72bbd7.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="Fay in colour3"/>                                        
                                <ul class="gallery-item-controls">
                                    <li>
                                        <label class="check">
                                            <input type="hidden" name="images[3]['imgId']" value="97d41f785cb3b5c06237354d4d72bbd7" />
                                            <input type="checkbox" name="images[3]['use']" class="icheckbox"/>
                                        </label>
                                    </li>
                                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                </ul>                                                                    
                            </div>
                            <div class="meta">
                                <strong>Fay in colour3</strong>
                            </div>                                
                        </a>
                                            <a class="gallery-item" href="http://www.carpedmfashion.com/files/318a1f97218974dabbf9b2c05243bed5.jpg" title="Fay in colour4" style="background:#fff;width:240px;height:160px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                            <div class="image">                              
                                <img src="/files/318a1f97218974dabbf9b2c05243bed5.jpg" style="display:block;width:auto;max-width:240px;height:160px;margin: 0 auto;" alt="Fay in colour4"/>                                        
                                <ul class="gallery-item-controls">
                                    <li>
                                        <label class="check">
                                            <input type="hidden" name="images[4]['imgId']" value="318a1f97218974dabbf9b2c05243bed5" />
                                            <input type="checkbox" name="images[4]['use']" class="icheckbox"/>
                                        </label>
                                    </li>
                                    <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                                </ul>                                                                    
                            </div>
                            <div class="meta">
                                <strong>Fay in colour4</strong>
                            </div>                                
                        </a>
                                    </div><!-- end glr-wrap -->
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
