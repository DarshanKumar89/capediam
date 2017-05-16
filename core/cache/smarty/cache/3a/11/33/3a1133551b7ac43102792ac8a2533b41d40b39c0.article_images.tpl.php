<?php /*%%SmartyHeaderCode:188393406257d11a765ffc02-78865042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b94866bbc83f07cb5be9794d4e8554a5bfe619' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/article_images.tpl',
      1 => 1469707238,
      2 => 'file',
    ),
    '2348aeb5e8989dd42b1116d7d8b299e32f80f818' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1470836096,
      2 => 'file',
    ),
    'bc141a49c252a4eeea1dde78a0f97783d71068f6' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469707230,
      2 => 'file',
    ),
    '3a1133551b7ac43102792ac8a2533b41d40b39c0' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/article_images.tpl',
      1 => 1469707238,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '188393406257d11a765ffc02-78865042',
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
  'unifunc' => 'content_57d11a76c33312_26482488',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d11a76c33312_26482488')) {function content_57d11a76c33312_26482488($_smarty_tpl) {?><!DOCTYPE html>
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
    <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
      <i class="fa fa-circle-o-notch"></i>
      Discount circuits    </a>
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
<li>
    <a href="#" onclick="return false;" title="KATALÓG">
        Katalóg    </a>
</li>
<li>
    <a href="cpanel/store/catalog/articles" title="Artikle">
        Artikle    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="Obrázok artiklu">
        Obrázok artiklu    </a>
</li>
<li class="active">
    <a href="cpanel/store/catalog/article/edit/274" title="SQUARED SHORT MAN">
        SQUARED SHORT MAN
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <h6 style="margin-left:15px;">Adresárová štruktúra</h6>
    <ul class="breadcrumb">
        <li>
            <a href="cpanel/store/catalog/article/choose-image/274/7259b712f116a7fe6310cdc765c836af">
                Hlavný adresár            </a>
        </li>
                    <li>
                <a href="cpanel/store/catalog/article/choose-image/274/b27955b144dc2f67be013c3d180264f3">
                    PROD. FOTKY NOVE
                </a>
            </li>
                    <li>
                <a href="cpanel/store/catalog/article/choose-image/274/a1a3046a09f0ddda1ad1885d6e3b0019">
                    BASICS
                </a>
            </li>
                    <li>
                <a href="cpanel/store/catalog/article/choose-image/274/91b763a46aab08a852431dbbb3ae90dd">
                    MUZI
                </a>
            </li>
                    <li>
                <a href="cpanel/store/catalog/article/choose-image/274/b183b2bbb8907fb7c1dcee5d9f4cd49d">
                    Pánske kraťasy 1,85x2,5 - nie sú presne pixely, ale je zachovaný pomer strán
                </a>
            </li>
                    <li>
                <a href="cpanel/store/catalog/article/choose-image/274/ce21ccd26f5b9a0880d2e9cfdd6fbc7c">
                    Squered short
                </a>
            </li>
            </ul>
    <div class="page-title">                    
        <h2>
            <i class="fa fa-picture-o"></i>&nbsp;
            Obrázok artiklu        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12">
        <form role="form" action="cpanel/store/catalog/article/image-save" method="post">
            <input type="hidden" name="article-id" value="274" />
            <div class="btn-group push-up-10" role="group">
                <button type="button" class="btn btn-warning" id="gallery-toggle-items" disabled>
                    <i class="fa fa-check-square-o"></i>
                    Označiť všetko                </button>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Uložiť                </button>               
            </div>
            <div id="glr-folders">
                            </div>
            <div class="gallery" id="links">
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/0c840c167e628ea856ba0dc5bdc675ba.jpg" title="Squared short man 6" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/0c840c167e628ea856ba0dc5bdc675ba.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man 6"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[0]['imgId']" value="0c840c167e628ea856ba0dc5bdc675ba" />
                                        <input type="checkbox" name="images[0]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man 6</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/57da4b45067a20513c51476f2f0bd381.jpg" title="Squared short man 7" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/57da4b45067a20513c51476f2f0bd381.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man 7"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[1]['imgId']" value="57da4b45067a20513c51476f2f0bd381" />
                                        <input type="checkbox" name="images[1]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man 7</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/d89e3d9c6db3ec363c892deeff6dff2c.jpg" title="Squared short man 8" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/d89e3d9c6db3ec363c892deeff6dff2c.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man 8"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[2]['imgId']" value="d89e3d9c6db3ec363c892deeff6dff2c" />
                                        <input type="checkbox" name="images[2]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man 8</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/9e5979b7e2f55b91b25b4502bede1bc2.jpg" title="Squared short man" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/9e5979b7e2f55b91b25b4502bede1bc2.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[3]['imgId']" value="9e5979b7e2f55b91b25b4502bede1bc2" />
                                        <input type="checkbox" name="images[3]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/432a159de58d3414019dfe8a75d8a6bf.jpg" title="Squared short man1" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/432a159de58d3414019dfe8a75d8a6bf.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man1"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[4]['imgId']" value="432a159de58d3414019dfe8a75d8a6bf" />
                                        <input type="checkbox" name="images[4]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man1</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/9a2cf255616bf4471cf4e3def4bd1a22.jpg" title="Squared short man2" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/9a2cf255616bf4471cf4e3def4bd1a22.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man2"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[5]['imgId']" value="9a2cf255616bf4471cf4e3def4bd1a22" />
                                        <input type="checkbox" name="images[5]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man2</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/c3b9ff2ddadd05b8e38e37a325f1b069.jpg" title="Squared short man3" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/c3b9ff2ddadd05b8e38e37a325f1b069.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man3"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[6]['imgId']" value="c3b9ff2ddadd05b8e38e37a325f1b069" />
                                        <input type="checkbox" name="images[6]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man3</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/ca51ed60cb7abd0c1b24a64a18cae358.jpg" title="Squared short man4" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/ca51ed60cb7abd0c1b24a64a18cae358.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man4"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[7]['imgId']" value="ca51ed60cb7abd0c1b24a64a18cae358" />
                                        <input type="checkbox" name="images[7]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man4</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/b445943754b9a0156ca3955890f27dfd.jpg" title="Squared short man5" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/b445943754b9a0156ca3955890f27dfd.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man5"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[8]['imgId']" value="b445943754b9a0156ca3955890f27dfd" />
                                        <input type="checkbox" name="images[8]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man5</strong>
                        </div>                                
                    </a>
                                    <a class="gallery-item" href="http://www.carpedmfashion.com/files/42330d19082a32ae68fc9051f4d7ee1e.jpg" title="Squared short man7" style="width:auto;height:auto;max-width: 240px;margin-top:16px;margin-right:16px;padding:0;" data-gallery>
                        <div class="image">                              
                            <img src="/files/42330d19082a32ae68fc9051f4d7ee1e.jpg" style="display:inline-block;max-width: 240px;max-height: 160px;margin: 0 auto;" alt="Squared short man7"/>                                        
                            <ul class="gallery-item-controls">
                                <li>
                                    <label class="check">
                                        <input type="hidden" name="images[9]['imgId']" value="42330d19082a32ae68fc9051f4d7ee1e" />
                                        <input type="checkbox" name="images[9]['use']" class="icheckbox"/>
                                    </label>
                                </li>
                                <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                            </ul>                                                                    
                        </div>
                        <div class="meta">
                            <strong>Squared short man7</strong>
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
