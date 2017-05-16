<?php /*%%SmartyHeaderCode:1933822531573a22195c6e94-01813770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4cb75338d5904d32d1abf6a859c9a94fcdd256' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/email/email_edit.tpl',
      1 => 1460547465,
      2 => 'file',
    ),
    '92afef7393d0902bf4b435c3456ae469d5f977a7' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1463131549,
      2 => 'file',
    ),
    '16c330466fb4b26e2d4c99f1bba3c82f16476646' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1460547447,
      2 => 'file',
    ),
    '4c650f95c4f9bb5f2ba4904fc2b9c09132309918' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/email/email_edit.tpl',
      1 => 1460547465,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1933822531573a22195c6e94-01813770',
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
  'unifunc' => 'content_573a2219703046_98716469',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a2219703046_98716469')) {function content_573a2219703046_98716469($_smarty_tpl) {?><!DOCTYPE html>
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
#tags-place {
    display: block;
    height: 161px;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-word;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;
}
#tags-place .tag {
    background-color: #fff;
    display: inline-block;
    margin: 0 0 5px 0;
    padding: 3px 10px;
    color: #000;
    border: 1px solid #ddd;
}
.alert-success,
.alert-danger {
    display: none;
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
    <a href="cpanel/store/email" title="Email">
        Email
    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="EDITOVAŤ">
        Editovať    </a>
</li>
<li class="active">
    <a href="cpanel/store/email/edit/1" title="Prijat&aacute; objedn&aacute;vka">
        Prijat&aacute; objedn&aacute;vka
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-envelope"></i>&nbsp;Email&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
    <div class="col-lg-12">
        <form action="cpanel/store/email/update" method="post" role="form">
            <input type="hidden" name="email-id" value="1"/>
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title">
                        Prijat&aacute; objedn&aacute;vka
                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 style="border-bottom:1px solid blue;">VŠEOBECNÉ INFORMÁCIE</h4>
                            <div class="form-group">
                                <label>
                                    Email name<span style="color:red;">*</span>
                                </label>
                                <input type="text" name="email-name" value="Prijat&aacute; objedn&aacute;vka" class="form-control" minlength="3" maxlength="150" required="">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Email subject                                </label>
                                <input type="text" name="subject" value="Prijat&aacute; objedn&aacute;vka" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Sender name                                </label>
                                <input type="text" name="sender-name" value="Carpe DM Fashion (www.carpedmfashion.com)" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Sender email                                </label>
                                <input type="text" name="sender-email" value="estore@carpedmfashion.com" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Hide copy email                                </label>
                                <input type="text" name="hide-copy-email" value="estore@carpedmfashion.com" class="form-control" minlength="3" maxlength="150">
                                <span class="help-block">Neplatné znaky ;=#{ }</span>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    Signature                                </label>
                                <textarea name="signature" class="form-control" rows="5">CARPE DM s.r.o. 
zap&iacute;san&aacute; v obchodnom registri Okresn&eacute;ho s&uacute;du Pre&scaron;ov, oddiel: Sro, vložka č&iacute;slo: 24408/P 
IČO: 46 171 096

Tatransk&aacute; 243
059 86 Nov&aacute; Lesn&aacute;
Slovensk&aacute; republika
Z&aacute;kazn&iacute;cka podpora:

Tel.:+421 52 381 11 87 
Email:estore@carpedmfashion.com

Operačn&eacute; hodiny call centra a reklamačn&eacute;ho strediska pred&aacute;vaj&uacute;ceho:
Pracovn&eacute; dni pondelok až piatok od 09.00 -12.00 hod.
Mimo dni pracovn&eacute;ho pokoja a sviatkov.
Tieto &uacute;daje m&ocirc;žu byť kedykoľvek pozmenen&eacute; alebo aktualizovan&eacute; na www.carpedmfashion.com.</textarea>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <h4 style="border-bottom:1px solid #33414e;">NASTAVENIA</h4>
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Pozor!</strong> 
                                An error occurred while sending mail.
                            </div>
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <strong>Úspech!</strong> 
                                Email has been sent successfully.
                            </div>
                            <div class="form-group">
                                <label>
                                    SEND TEST EMAIL                                </label>
                                <div class="input-group">
                                    <input type="text" name="t-recipient" value="" placeholder="Test recipient" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-send">
                                            <i class="fa fa-paper-plane"></i>&nbsp;SEND
                                        </button>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    WIDGETS                                </label>
                                <select name="widget-id" class="form-control select">
                                    <option value="0">Vyberte...</option>
                                    <option value="1" selected>
                                                                                    ORDER
                                                                            </option>
                                    <option value="2" >
                                                                                    INVOICE
                                                                            </option>
                                    <option value="3" >
                                                                                    <br />
<b>Notice</b>:  Undefined index: store_ in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>865</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>865</b><br />

                                            ARTICLE LIST
                                                                            </option>
                                    <option value="4" >
                                                                                    <br />
<b>Notice</b>:  Undefined index: store_ in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>874</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>874</b><br />

                                            DISCOUNT CIRCUIT
                                                                            </option>
                                    <option value="5" >
                                                                                    <br />
<b>Notice</b>:  Undefined index: store_ in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>883</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/sysplugins/smarty_internal_templatebase.php(157) : eval()'d code</b> on line <b>883</b><br />

                                            OFFER
                                                                            </option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <div id="tags-place">
                                                                                                                        <span class="tag">{{store_name}}</span>
                                                                                    <span class="tag">{{store_phone}}</span>
                                                                                    <span class="tag">{{store_email}}</span>
                                                                                    <span class="tag">{{store_pickup_address}}</span>
                                                                                    <span class="tag">{{store_address}}</span>
                                                                                    <span class="tag">{{store_opening_hours}}</span>
                                                                                    <span class="tag">{{client_full_name}}</span>
                                                                                    <span class="tag">{{order}}</span>
                                                                                    <span class="tag">{{notice}}</span>
                                                                                    <span class="tag">{{primary_email}}</span>
                                                                                    <span class="tag">{{secondary_email}}</span>
                                                                                                            </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    SEND HIDE COPY                                </label><br>
                                <label class="switch">
                                    <input type="checkbox" name="is-hide-copy" value="1" checked>
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>Zapnúť</label><br>
                                <label class="switch">
                                    <input type="checkbox" name="enable" value="1" checked>
                                    <span></span>
                                </label>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="margin-top: 20px;border-bottom:1px solid #3fbae4;">HTML OBSAH</h4>
                            <textarea name="html-content" id="ckeditor" class="ckeditor" row="5"><p style="line-height: 20.8px;">V&aacute;žen&yacute; z&aacute;kazn&iacute;k,</p>

<p style="line-height: 20.8px;"><br />
ďakujeme za V&aacute;&scaron; n&aacute;kup, objedn&aacute;vku sme v poriadku prijali. O jej spracovan&iacute; V&aacute;s budeme priebežne informovať e-mailom.</p>

<p style="line-height: 20.8px;">&nbsp;</p>

<p>{{order}}</p>
</textarea>
                            </div>  
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
                <div class="panel-footer">
                    <button type="submit" class="btn btn-success" role="button">
                        <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY                    </button>
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
<script type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor', {
        "extraPlugins": "imagebrowser",
        "imageBrowser_listUrl": "http://carpedmfashion.local/cpanel/drive-api/build-image-register"
    });
</script>
<script type="text/javascript">
$(function() {
    $('[name="widget-id"]').on('change',function() {
        $('#tags-place').empty();
        $.ajax({
            url: 'cpanel/store/email/api',
            data: { widgetId: parseInt($(this).val()) },
            type: 'POST',
            success: function(content) {
                if(content.length > 0) {
                    $('#tags-place').html( content );
                }
            },
            error: function(data) {
               console.log(data)
            },
            dataType: 'HTML'
        });
    });
    $('.alert-danger').find('.close').on('click', function() {
        $('.alert-danger').hide();
    });
    $('.alert-success').find('.close').on('click', function() {
        $('.alert-success').hide();
    });
    $('.btn-send').on('click', function() {
        var recipient = $('[name="t-recipient"]').val();
        
        if(recipient.length > 0) {
            $.ajax({
                url: 'cpanel/store/email/send-email',
                data: { emailId: 1, recipient: recipient },
                type: 'POST',
                success: function(responseJSON) {
                    if(responseJSON.status === 200) {
                        $('.alert-success').fadeIn( 300 ).delay( 1200 ).fadeOut( 400 );
                    } else {
                        $('.alert-danger').fadeIn( 300 ).delay( 1200 ).fadeOut( 400 );
                    }
                },
                error: function(data) {
                   console.log(data);
                },
                dataType: 'JSON'
            });
        } else {
            alert('Test recipient email is required.');
        }
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
