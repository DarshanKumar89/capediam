<?php /*%%SmartyHeaderCode:60171070957f4fb1357b436-11958017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a1c4595ee4fe8c977afba92684fc1bcd6bedbae' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/category_assigning_article.tpl',
      1 => 1469707240,
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
    'b5131fce550e58197a576723c950e63d9dc566d4' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/category/category_assigning_article.tpl',
      1 => 1469707240,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '60171070957f4fb1357b436-11958017',
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
  'unifunc' => 'content_57f4fb13e324d2_04487686',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4fb13e324d2_04487686')) {function content_57f4fb13e324d2_04487686($_smarty_tpl) {?><!DOCTYPE html>
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
                
<ul class="x-navigation" style="margin-bottom:98px;">
  <li class="xn-logo">
    <a href="cpanel">
      <img src="extensions/cpanel/img/mozayc.png" style="display: block;width: auto;height: 48px;margin: 0 auto;"/>
    </a>
    <a href="#" onclick="return false;" class="x-navigation-control"><!-- --></a>
  </li>
  <li class="xn-profile">
    <a href="cpanel" class="profile-mini">
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Alexander Kernasevic">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="Alexander Kernasevic">
      </div>
      <div class="profile-data">
        <div class="profile-data-name">Alexander&nbsp;Kernasevic</div>
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
                                                                    <option value="80" >AMERICAN APACHE d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="58" >Zlacnen&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="57" >Zlacnen&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="56" >Nov&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="55" >Nov&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="54" >Nov&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="52" >P&aacute;nske novinky</option>
                                                                    <option value="51" >D&aacute;mske ta&scaron;ky a kabelky</option>
                                                                    <option value="50" >Outlet deti</option>
                                                                    <option value="49" >Outlet muži</option>
                                                                    <option value="48" >Outlet ženy</option>
                                                                    <option value="47" >P&aacute;nske doplnky</option>
                                                                    <option value="46" >D&aacute;mske doplnky</option>
                                                                    <option value="45" >Detsk&eacute; limitovan&eacute; oblečenie</option>
                                                                    <option value="44" >P&aacute;nske limitovan&eacute; oblečenie</option>
                                                                    <option value="43" >Detsk&eacute; kolekcie</option>
                                                                    <option value="59" >Zlacnen&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="60" >Basics detsk&eacute; mikiny</option>
                                                                    <option value="79" >Detsk&aacute; kolekcia AMERICAN APACHE</option>
                                                                    <option value="76" >D&aacute;mska kolekcia INITIALS</option>
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
                                                                    <option value="63" >Basics detsk&eacute; kraťasy</option>
                                                                    <option value="62" >Basics detsk&eacute; tričk&aacute;</option>
                                                                    <option value="61" >Basics detsk&eacute; tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                    <option value="42" >P&aacute;nske kolekcie</option>
                                                                    <option value="37" >Limitovan&eacute; p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="30" >Basics p&aacute;nske tielka</option>
                                                                    <option value="27" >Outlet</option>
                                                                    <option value="12" >D&aacute;mske novinky</option>
                                                                    <option value="8" >Basics p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="7" >P&aacute;nske oblečenie</option>
                                                                    <option value="25" >D&aacute;mske kolekcie</option>
                                                                    <option value="5" >D&aacute;mska kolekcia FITNESS</option>
                                                                    <option value="53" >Detsk&eacute; novinky</option>
                                                                    <option value="4" >BLACKGREY d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="3" >D&aacute;mska kolekcia BLACKGREY</option>
                                                                    <option value="36" >D&aacute;mske limitovan&eacute; oblečenie</option>
                                                                    <option value="2" >Basics d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="1" >D&aacute;mske oblečenie</option>
                                                                    <option value="13" >Basics detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="10" >Detsk&eacute; oblečenie</option>
                                                                    <option value="9" >Basics p&aacute;nske mikiny</option>
                                                                    <option value="6" >Mikiny: Basics d&aacute;mske mikiny a svetre</option>
                                                                    <option value="82" >AMERICAN APACHE detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="77" >D&aacute;mska kolekcia AMERICAN APACHE</option>
                                                                    <option value="38" >Limitovan&eacute; d&aacute;mske tepl&aacute;ky</option>
                                                                    <option value="26" >P&aacute;nska kolekcia EGO</option>
                                                                    <option value="41" >BLACKGREY d&aacute;mske leg&iacute;ny</option>
                                                                    <option value="40" >Basics detsk&eacute; tielka</option>
                                                                    <option value="39" >Limitovan&eacute; detsk&eacute; tepl&aacute;ky</option>
                                                                    <option value="74" >Basics detsk&eacute; oblečenie</option>
                                                                    <option value="78" >P&aacute;nska kolekcia AMERICAN APACHE</option>
                                                                    <option value="15" >Basics d&aacute;mske tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                    <option value="28" >Basics p&aacute;nske tepl&aacute;kov&eacute; s&uacute;pravy</option>
                                                                    <option value="29" >Basics p&aacute;nske tričk&aacute;</option>
                                                                    <option value="81" >AMERICAN APACHE p&aacute;nske tepl&aacute;ky</option>
                                                                    <option value="16" >Basics d&aacute;mske tričk&aacute; a tielka</option>
                                                                    <option value="31" >Basics p&aacute;nske kraťasy</option>
                                                                    <option value="17" >Basics d&aacute;mske tielka</option>
                                                                    <option value="32" >Basics p&aacute;nske svetre a pul&oacute;vre</option>
                                                                    <option value="18" >Basics d&aacute;mske &scaron;ortky, kraťasy a sukne</option>
                                                                    <option value="33" >Basics p&aacute;nske overaly</option>
                                                                    <option value="19" >Basics d&aacute;mske svetre a pul&oacute;vre</option>
                                                                    <option value="20" >Basics d&aacute;mske &scaron;aty</option>
                                                                    <option value="34" >Basics p&aacute;nske bundy</option>
                                                                    <option value="35" >Basics p&aacute;nske čiapky</option>
                                                                    <option value="21" >Basics d&aacute;mske overaly a kombin&eacute;zy</option>
                                                                    <option value="75" >Basics p&aacute;nske oblečenie</option>
                                                                    <option value="22" >Basics d&aacute;mske bundy a sak&aacute;</option>
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
                            <div class="alert alert-info" role="alert">
                    <strong>Info!!</strong> 
                    Vyberte požadovanú kategóriu zo zoznamu kategórií, ku ktorej chcete priraďovať artikle z katalógu.                </div>
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
    AssigningCategoryArticleList.init(0,1,10,0);
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
