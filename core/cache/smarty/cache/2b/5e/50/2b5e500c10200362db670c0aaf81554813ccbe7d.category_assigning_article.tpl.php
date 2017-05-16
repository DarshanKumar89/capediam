<?php /*%%SmartyHeaderCode:10296403885730a23897ce61-33699418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4642760c4ee080bf5f8bd24b8063767a9f9b9b4' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/category/category_assigning_article.tpl',
      1 => 1460547460,
      2 => 'file',
    ),
    '92afef7393d0902bf4b435c3456ae469d5f977a7' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1460547449,
      2 => 'file',
    ),
    '16c330466fb4b26e2d4c99f1bba3c82f16476646' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1460547447,
      2 => 'file',
    ),
    '2b5e500c10200362db670c0aaf81554813ccbe7d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/category/category_assigning_article.tpl',
      1 => 1460547460,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '10296403885730a23897ce61-33699418',
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
  'unifunc' => 'content_5730a238a6f333_89670421',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5730a238a6f333_89670421')) {function content_5730a238a6f333_89670421($_smarty_tpl) {?><!DOCTYPE html>
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
.badge {
    position: relative;
    top: 0px;
    left: 5px;
}
#ig-info > .input-group-addon {
    background-color: #3fbae4;
    border-color: #3fbae4;
}
#orderUpdateMessenger .modal-content strong {
  font-size: 1.3em;
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
                
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="cpanel">MOZAYC</a>
        <a href="cpanel" class="x-navigation-control"></a>
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
    <li class="xn-title">
        <strong>
            NAVIGAČNÁ LIŠTA        </strong>
    </li>
    <li>
        <a href="cpanel" title="Panel">
            <i class="fa fa-dashboard"></i>
            <span class="xn-text">
                Panel            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/site-structure" title="Štruktúra webu">
            <i class="fa fa-sitemap"></i>
            <span class="xn-text">
                Štruktúra webu            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/page-list" title="Stránky">
            <i class="fa fa-file-text-o"></i>
            <span class="xn-text">
                Stránky            </span>
        </a>                        
    </li>
    <li class="xn-openable" style="display:none;visibility: hidden !important;">
        <a href="cpanel/cpanel/catalog" onclick="return false;" title="Katalóg">
            <i class="fa fa-book"></i>
            <span class="xn-text">
                Katalóg            </span>
        </a>
        <ul>
            <li>
                <a href="cpanel/catalog" title="Catalog - Overview">
                    <i class="fa fa-eye"></i>
                    Prehľad                </a>
            </li>
            <li>
                <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
                    <i class="fa fa-plus"></i>
                    Nový artikel                </a>
            </li>
            <li>
                <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
                    <i class="fa fa-info"></i>
                    Spravovať kategórie                </a>
            </li>
            <li>
                <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
                    <i class="fa fa-tag"></i>
                    Spravovať atribúty                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="cpanel/my-drive" title="MMôj Disk">
            <i class="fa fa-hdd-o"></i>
            <span class="xn-text">
                Môj Disk            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/slider-list" title="Reklamné bannery">
            <i class="fa fa-camera"></i>
            <span class="xn-text">
                Reklamné bannery            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/gallery-list" title="Galéria">
            <i class="fa fa-picture-o"></i>
            <span class="xn-text">
                Galéria            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/language-list" title="Jazyky">
            <i class="glyphicon glyphicon-globe"></i>
            <span class="xn-text">
                Jazyky            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/dictionary-list" title="Slovník">
            <i class="fa fa-book"></i>
            <span class="xn-text">
                Slovník            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/seo-redirect-list" title="SEO REDIRECT">
            <i class="fa fa-link"></i>
            <span class="xn-text">
                SEO Redirect            </span>
        </a>                        
    </li>
    <li>
        <a href="cpanel/general-settings" title="Hlavné nastavenia">
            <i class="fa fa-gear"></i>
            <span class="xn-text">
                Hlavné nastavenia            </span>
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
                            Formuláre                        </span>
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
                            Router                        </span>
                    </a>                        
                </li>
            </ul>
        </li>
        <li class="xn-title">
      <strong>
        ROZŠÍRENIA      </strong>
    </li>
    <li class="xn-openable active" style="margin-bottom:98px;">
        <a href="#" onclick="return false;" title="Obchod">
            <i class="fa fa-building-o"></i>
            <span class="xn-text">Obchod</span>
        </a>
        <ul>
            <li data-menu-item="users">
                <a href="cpanel/store/users" title="Uživatelia">
                    <i class="fa fa-users"></i>
                    Uživatelia                </a>
            </li>
            <li data-menu-item="carts">
                <a href="cpanel/store/carts" title="Košíky">
                    <i class="fa fa-shopping-cart"></i>
                    Košíky                </a>
            </li>
            <li class="xn-openable" data-menu-item="orders">
                <a href="cpanel/store/orders" title="Objednávky">
                    <i class="fa fa-clipboard"></i>
                    Objednávky                </a>
                <ul>
                    <li data-menu-item="list">
                        <a href="cpanel/store/orders" title="List">
                            <span class="fa fa-circle"></span>
                            Prehľad                        </a>
                    </li>
                    <li data-menu-item="management">
                        <a href="cpanel/store/orders/management/short" title="Management">
                            <span class="fa fa-circle"></span>
                            Správa                        </a>
                    </li>
                </ul>
            </li>
            <li class="xn-openable" data-menu-item="catalog">
                <a href="#" onclick="return false;" title="Katalóg">
                    <span class="fa fa-book"></span>
                    Katalóg                </a>
                <ul>
                    <li data-menu-item="articles">
                        <a href="cpanel/store/catalog/articles/short" title="Artikle">
                            <span class="fa fa-circle"></span>
                            Artikle                        </a>
                    </li>
                    <li data-menu-item="store-category-list">
                        <a href="cpanel/store-category-list" title="Kategórie">
                            <span class="fa fa-circle"></span>
                            Kategórie                        </a>
                    </li>
                    <li data-menu-item="store-attribute-list">
                        <a href="cpanel/store-attribute-list" title="Atribúty">
                            <span class="fa fa-circle"></span>
                            Atribúty                        </a>
                    </li>
                    <li data-menu-item="ordering">
                        <a href="cpanel/store/catalog/ordering" title="Usporiadanie">
                            <span class="fa fa-circle"></span>
                            Usporiadanie                        </a>
                    </li>
                </ul>
            </li>
            <li data-menu-item="warehouse">
              <a href="cpanel/store-warehouse-list" title="Sklady">
                <i class="fa fa-database"></i>
                Sklady              </a>
            </li>
            <li data-menu-item="statuses">
                <a href="cpanel/store/statuses" title="Stavy">
                    <i class="fa fa-heartbeat"></i>
                    Stavy                </a>
            </li>
            <li class="xn-openable" data-menu-item="delivery-payment">
                <a href="#" onclick="return false;" title="Doručovanie / Platby">
                    <i class="fa fa-pencil-square"></i>
                    Doručovanie / Platby                </a>
                <ul>
                    <li data-menu-item="delivery">
                        <a href="cpanel/store/delivery-payment/delivery" title="Doručovanie">
                            <i class="fa fa-truck"></i>
                            Doručovanie                        </a>
                    </li>
                    <li data-menu-item="payment">
                        <a href="cpanel/store/delivery-payment/payment" title="Platby">
                            <i class="fa fa-usd"></i>
                            Platby                        </a>
                    </li>
                    <li data-menu-item="ties">
                        <a href="cpanel/store/delivery-payment/ties" title="Väzby">
                            <i class="fa fa-exchange"></i>
                            Väzby                        </a>
                    </li>
               </ul>
            </li>
            <li class="xn-openable" data-menu-item="localization">
                <a href="#" onclick="return false;" title="Lokalizácia">
                    <span class="fa fa-globe"></span>
                    Lokalizácia                </a>
                <ul>
                    <li data-menu-item="currencies">
                        <a href="cpanel/store/localization/currencies" title="Meny">
                            <span class="fa fa-circle"></span>
                            Meny                        </a>
                    </li>
                    <li data-menu-item="taxes">
                        <a href="cpanel/store/localization/taxes" title="Dane">
                            <span class="fa fa-circle"></span>
                            Dane                        </a>
                   </li>
               </ul>
            </li>
            <li data-menu-item="offers">
                <a href="cpanel/store/offers" title="Ponuky">
                    <i class="fa fa-sticky-note-o"></i>
                    Ponuky                </a>
            </li>
            <li data-menu-item="discount-circuits">
                <a href="cpanel/store-discount-circuit-list" title="Discount circuits">
                    <i class="fa fa-circle-o-notch"></i>
                    Discount circuits                </a>
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
    <a href="cpanel/store-category-assigning-article-form" title="Priraďovanie artiklov">
        Priraďovanie artiklov    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>PRIRAĎOVANIE ARTIKLOV&nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span></h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-colorful">
                <div class="panel-body panel-body-form">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs12">
                        <div class="form-group">
                            <label>KATEGÓRIE</label>                                        
                            <select id="categories" name="category-id" class="form-control select" data-live-search="true" onchange="location = 'cpanel/store-category-assigning-article-form/'+this.options[this.selectedIndex].value;" required="">
                                <option value="0">choose...</option>
                                                                    <option value="1" >Ženy</option>
                                                                    <option value="2" selected>Basics d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="3" >D&aacute;mska kolekcia BLACKGREY</option>
                                                                    <option value="4" >Blackgrey d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="5" >D&aacute;mska kolekcia FITNESS</option>
                                                                    <option value="55" >Nov&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="7" >Muži</option>
                                                                    <option value="8" >Basics p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="54" >Nov&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="10" >Deti</option>
                                                                    <option value="12" >D&aacute;mske novinky</option>
                                                                    <option value="13" >Basics detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="73" >Basics d&aacute;mske oblečenie</option>
                                                                    <option value="72" >Novinky</option>
                                                                    <option value="71" >EGO p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="70" >FITNESS d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="69" >Detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="68" >P&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="67" >D&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="66" >Basics detsk&eacute; čiapky</option>
                                                                    <option value="65" >Basics detsk&eacute; bundy</option>
                                                                    <option value="64" >Basics detsk&eacute; svetre a pul&oacute;vre</option>
                                                                    <option value="25" >D&aacute;mske kolekcie</option>
                                                                    <option value="53" >Detsk&eacute; novinky</option>
                                                                    <option value="27" >Outlet</option>
                                                                    <option value="63" >Basics detsk&eacute; kraťasy</option>
                                                                    <option value="62" >Basics detsk&eacute; tričk&aacute;</option>
                                                                    <option value="30" >Basics p&aacute;nske tielka</option>
                                                                    <option value="61" >Basics detsk&eacute; tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                    <option value="60" >Basics detsk&eacute; mikiny</option>
                                                                    <option value="59" >Zlacnen&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="58" >Zlacnen&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="57" >Zlacnen&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="36" >D&aacute;mske limitovan&eacute; oblečenie</option>
                                                                    <option value="37" >Limitovan&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="52" >P&aacute;nske novinky</option>
                                                                    <option value="56" >Nov&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="51" >D&aacute;mske ta&scaron;ky a kabelky</option>
                                                                    <option value="50" >Outlet deti</option>
                                                                    <option value="42" >P&aacute;nske kolekcie</option>
                                                                    <option value="43" >Detsk&eacute; kolekcie</option>
                                                                    <option value="44" >P&aacute;nske limitovan&eacute; oblečenie</option>
                                                                    <option value="45" >Detsk&eacute; limitovan&eacute; oblečenie</option>
                                                                    <option value="46" >D&aacute;mske doplnky</option>
                                                                    <option value="47" >P&aacute;nske doplnky</option>
                                                                    <option value="48" >Outlet ženy</option>
                                                                    <option value="49" >Outlet muži</option>
                                                                    <option value="41" >BLACKGREY d&aacute;mske leg&iacute;ny</option>
                                                                    <option value="40" >Basics detsk&eacute; tielka</option>
                                                                    <option value="38" >Limitovan&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="26" >P&aacute;nska kolekcia EGO</option>
                                                                    <option value="9" >Basics p&aacute;nske mikiny</option>
                                                                    <option value="6" >Basics d&aacute;mske mikiny</option>
                                                                    <option value="39" >Limitovan&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="28" >Basics p&aacute;nske tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                    <option value="15" >Basics d&aacute;mske tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                    <option value="74" >Basics detsk&eacute; oblečenie</option>
                                                                    <option value="29" >Basics p&aacute;nske tričk&aacute;</option>
                                                                    <option value="16" >Basics d&aacute;mske tričk&aacute; a tielka</option>
                                                                    <option value="31" >Basics p&aacute;nske kraťasy</option>
                                                                    <option value="17" >Basics d&aacute;mske tielka</option>
                                                                    <option value="32" >Basics p&aacute;nske svetre a pul&oacute;vre</option>
                                                                    <option value="18" >Basics d&aacute;mske &scaron;ortky, kraťasy a sukne</option>
                                                                    <option value="33" >Basics p&aacute;nske overaly</option>
                                                                    <option value="19" >Basics d&aacute;mske svetre a pul&oacute;vre</option>
                                                                    <option value="34" >Basics p&aacute;nske bundy</option>
                                                                    <option value="20" >Basics d&aacute;mske &scaron;aty</option>
                                                                    <option value="35" >Basics p&aacute;nske čiapky</option>
                                                                    <option value="21" >Basics d&aacute;mske overaly a kombin&eacute;zy</option>
                                                                    <option value="22" >Basics d&aacute;mske bundy a sak&aacute;</option>
                                                                    <option value="75" >Basics p&aacute;nske oblečenie</option>
                                                                    <option value="23" >Basics d&aacute;mske spodn&eacute; pr&aacute;dlo</option>
                                                                    <option value="24" >Basics d&aacute;mske čiapky</option>
                                                            </select>
                        </div>
                    </div><!-- end col -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div id="plpt" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form id="caal-form" action="cpanel/store-delete-article-list-from-category" method="post" role="form">
                    <input type="hidden" name="category-id" value="2"/>
                    <div class="panel panel-default">
                        <div class="panel-heading ui-draggable-handle">
                            <h3 class="panel-title">
                              KATEGÓRIA - ZOZNAM ARTIKLOV                                                              <span class="btn btn-info" style="margin: 0 15px;">26</span>
                                <span class="btn btn-warning" style="margin: 0 15px;">0</span>
                                <span class="badge">Zobrazených 1-10 z 26 záznamov</span>
                                <span class="badge">0&nbsp;Zotriedených záznamov</span>
                                <span class="badge">26&nbsp;Nezotriedených záznamov</span>
                                                          </h3>
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
                                    <div class="col-lg-12" style="padding:15px 10px;">
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
                                            <select class="form-control select" onchange="location = 'cpanel/store-category-assigning-article-form/2/1/'+this.options[this.selectedIndex].value+'?q=';">
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
                                                    <button type="button" onclick="location = 'cpanel/store-category-assigning-article-form/2/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <ul class="pagination pagination-sm pull-right"><li class="disabled"><a href="cpanel/store-category-assigning-article-form/2/0/10"onclick="return false;"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="cpanel/store-category-assigning-article-form/2/1/10">1</a></li><li class=""><a href="cpanel/store-category-assigning-article-form/2/2/10">2</a></li><li class=""><a href="cpanel/store-category-assigning-article-form/2/3/10">3</a></li><li class=""><a href="cpanel/store-category-assigning-article-form/2/2/10"><i class="fa fa-angle-right"></i></a></li></ul>
                                    </div>
                                </div><!-- end row -->
                                <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                                    <table id="assigningArticleList" class="table table-bordered table-striped table-actions">
                                        <thead>
                                            <tr>
                                                <th width="70" class="text-center">
                                                    #
                                                </th>
                                                <th width="30" class="text-center">
                                                    OBRÁZOK                                                </th>
                                                <th width="200" class="text-center">
                                                    SKU                                                </th>
                                                <th class="text-left">
                                                    NÁZOV ARTIKLU                                                </th>
                                                <th class="text-center" width="150">
                                                  PORADIE                                                </th>
                                                <th width="100" class="text-center">
                                                    ODSTRÁNIŤ                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[0]['article-id']" value="6"/>
                                                        <input type="checkbox" name="articleList[0]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <img src="files/d18bb601584fd3625c3b0e603ed90bb9.png" height="35" alt="STAND PANTS WOMAN_0"/>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100006
                                                    </td>
                                                    <td class="text-left">
                                                        STAND WOMAN
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[0]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="6" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[1]['article-id']" value="7"/>
                                                        <input type="checkbox" name="articleList[1]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <img src="files/8b2de99d192dcd4c353501e69789d4cf.png" height="35" alt="WILD PANTS_5"/>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100007
                                                    </td>
                                                    <td class="text-left">
                                                        WILD
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[1]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="7" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[2]['article-id']" value="2"/>
                                                        <input type="checkbox" name="articleList[2]['on']" value="1">
                                                    </td>
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
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[2]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="2" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[3]['article-id']" value="4"/>
                                                        <input type="checkbox" name="articleList[3]['on']" value="1">
                                                    </td>
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
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[3]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="4" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[4]['article-id']" value="66"/>
                                                        <input type="checkbox" name="articleList[4]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <img src="/files/22461fca0c957fe6b9075de27d880245.jpg" height="35" alt="DSC06379_u"/>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100066
                                                    </td>
                                                    <td class="text-left">
                                                        COOL WOMAN
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[4]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="66" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[5]['article-id']" value="117"/>
                                                        <input type="checkbox" name="articleList[5]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <span style="font-size:1.4em;color:red;">
                                                                <i class="glyphicon glyphicon-eye-open"></i>
                                                            </span>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100117
                                                    </td>
                                                    <td class="text-left">
                                                        WILD JEANS
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[5]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="117" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[6]['article-id']" value="134"/>
                                                        <input type="checkbox" name="articleList[6]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <img src="files/0309b1a030513d486241247e38232a4b.png" height="35" alt="WILD SWEAT_4"/>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100134
                                                    </td>
                                                    <td class="text-left">
                                                        WILD SWEAT
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[6]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="134" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[7]['article-id']" value="20"/>
                                                        <input type="checkbox" name="articleList[7]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <img src="/files/a7c0273b1f5d00d3495fc26f32ebd210.jpg" height="35" alt="DSC06340_u"/>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100020
                                                    </td>
                                                    <td class="text-left">
                                                        GROUND
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[7]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="20" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[8]['article-id']" value="82"/>
                                                        <input type="checkbox" name="articleList[8]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <img src="/files/39067914effc8d5e0ff8a80f2a2d43ac.jpg" height="35" alt="DSC06403_u"/>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100082
                                                    </td>
                                                    <td class="text-left">
                                                        RUSTLE WOMAN
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[8]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="82" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                            <tr>
                                                    <td class="text-center">
                                                        <input type="hidden" name="articleList[9]['article-id']" value="10"/>
                                                        <input type="checkbox" name="articleList[9]['on']" value="1">
                                                    </td>
                                                    <td class="text-center">
                                                                                                                    <img src="/files/fb43db29edf99abc0392de2426be7088.jpg" height="35" alt="DSC06420_u"/>
                                                                                                            </td>
                                                    <td class="text-center">
                                                        100010
                                                    </td>
                                                    <td class="text-left">
                                                        TEMPTER WOMAN
                                                    </td>
                                                    <td class="text-center">
                                                      <div class="form-group pull-right" style="width:150px;">
                                                          <div id="ig-info" class="input-group">                                            
                                                              <span class="input-group-addon">
                                                                  <i class="fa fa-sort-numeric-desc"></i>
                                                              </span>
                                                              <input type="text"  name="articleList[9]['position']" value="0" min="1" class="form-control text-right">
                                                          </div>
                                                      </div>
                                                  </td>
                                                    <td class="text-center">
                                                        <button type="button" data-article-id="10" class="btn btn-danger push-x">
                                                            &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                                                    </tbody>
                                    </table>
                                </div><!-- end table-responsive -->
                                                    </div><!-- end panel-body -->
                                                  <div class="panel-footer">
                            <button type="submit" class="btn btn-danger pull-left">
                              <i class="fa fa-times"></i>&nbsp;
                              VYMAZAŤ VÝBER
                            </button>
                            <button type="button" id="btn-order-update" class="btn btn-info pull-right">
                              <i class="fa fa-sort-numeric-asc"></i>
                              &nbsp;ULOŽIŤ ZORADENIE
                            </button>
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
        
<!-- MODAL WINDOW ARTICLE LIST -->                         
<div class="modal" id="addOnArticles" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1200px;">                   
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW ARTICLE LIST -->
<!-- MODAL WINDOW ARTICLE LIST -->                         
<div class="modal" id="orderUpdateMessenger" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1200px;">                   
      <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">
        <div class="alert alert-info" role="alert">
          <strong>Priebieha spracovanie, prosím čakajte...</strong>
        </div>
        <div class="ajax-msg"><!-- --></div>
      </div><!-- end modal-content -->
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
<script type="text/javascript" src="extensions/cpanel/js/ext/assigningCategoryArticleList.js"></script>
<script type="text/javascript">
    AssigningCategoryArticleList.init(2,1,10,0);
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
