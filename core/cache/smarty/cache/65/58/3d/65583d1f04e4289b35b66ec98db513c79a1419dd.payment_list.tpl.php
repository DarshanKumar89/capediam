<?php /*%%SmartyHeaderCode:1609491226584936efac4046-00565998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '566a2ed6912778da71026066702df53c4d047cc7' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/delivery-payment/payment/payment_list.tpl',
      1 => 1474276416,
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
    '65583d1f04e4289b35b66ec98db513c79a1419dd' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/delivery-payment/payment/payment_list.tpl',
      1 => 1474276416,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1609491226584936efac4046-00565998',
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
  'unifunc' => 'content_584936f02eca98_10313488',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584936f02eca98_10313488')) {function content_584936f02eca98_10313488($_smarty_tpl) {?><!DOCTYPE html>
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
#paymentList tbody > tr > td {
  cursor: row-resize;
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
  <a href="#" onclick="return false;">
    Obchod
  </a>
</li>
<li class="active">
  <a href="cpanel/store/delivery-payment/payment">
    Platobné metódy
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-usd"></i>&nbsp;
    Platobné metódy
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="cpanel/store/delivery-payment/payment/create" method="post" role="form">
      <div class="panel panel-default panel-toggled">
        <div class="panel-heading">                                
          <h3 class="panel-title">
            Vytvoriť platobnú metódu
          </h3>  
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
          </ul>
        </div><!-- end panel-heading -->
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">           
              <div class="form-group">
                <label>
                  Názov
                  <span style="color:red;">*</span>
                </label>
                <input type="text"
                  name="payment-name"
                  value=""
                  class="form-control"
                  required
                />
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                  Náklady
                  <span style="color:red;">*</span>
                </label>
                <input type="text"
                  name="cost"
                  value="0.00"
                  class="form-control"
                  required
                />
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                  Dostupné pre krajinu
                  <span style="color:red;">*</span>
                </label>                                                                              
                <select name="country-id" class="form-control select" data-live-search="true" required>
                  <option value="0">Vyberte...</option>
                                      <option value="190"></option>
                                      <option value="165">Afghanistan</option>
                                      <option value="194">Albania</option>
                                      <option value="6">Algeria</option>
                                      <option value="62">Argentina</option>
                                      <option value="113">Armenia</option>
                                      <option value="47">Australia</option>
                                      <option value="37">Austria</option>
                                      <option value="21">Azerbaijan</option>
                                      <option value="5">Bahrain</option>
                                      <option value="24">Belarus</option>
                                      <option value="93">Belgium</option>
                                      <option value="48">Belize</option>
                                      <option value="152">Bokm</option>
                                      <option value="153">Bokm - Norway</option>
                                      <option value="63">Bolivia</option>
                                      <option value="27">Bosnia and Herzegovina</option>
                                      <option value="167">Brazil</option>
                                      <option value="148">Brunei Darussalam</option>
                                      <option value="26">Bulgaria</option>
                                      <option value="49">Canada</option>
                                      <option value="50">Caribbean</option>
                                      <option value="69">Castilian</option>
                                      <option value="64">Chile</option>
                                      <option value="233">China</option>
                                      <option value="65">Colombia</option>
                                      <option value="66">Costa Rica</option>
                                      <option value="109">Croatia</option>
                                      <option value="30">Czech Republic</option>
                                      <option value="35">Denmark</option>
                                      <option value="67">Dominican Republic</option>
                                      <option value="68">Ecuador</option>
                                      <option value="7">Egypt</option>
                                      <option value="79">El Salvador</option>
                                      <option value="83">Estonia</option>
                                      <option value="91">Faroe Islands</option>
                                      <option value="200">Finland</option>
                                      <option value="142">Former Yugoslav Republic of Macedonia</option>
                                      <option value="96">France</option>
                                      <option value="124">Georgia</option>
                                      <option value="39">Germany</option>
                                      <option value="45">Greece</option>
                                      <option value="71">Guatemala</option>
                                      <option value="72">Honduras</option>
                                      <option value="234">Hong Kong</option>
                                      <option value="111">Hungary</option>
                                      <option value="117">Iceland</option>
                                      <option value="182">Inari - Finland</option>
                                      <option value="102">India</option>
                                      <option value="115">Indonesia</option>
                                      <option value="87">Iran</option>
                                      <option value="8">Iraq</option>
                                      <option value="52">Ireland</option>
                                      <option value="224">Islamic Republic of Pakistan</option>
                                      <option value="104">Israel</option>
                                      <option value="120">Italy</option>
                                      <option value="53">Jamaica</option>
                                      <option value="122">Japan</option>
                                      <option value="9">Jordan</option>
                                      <option value="126">Kazakhstan</option>
                                      <option value="203">Kenya</option>
                                      <option value="130">Korea</option>
                                      <option value="10">Kuwait</option>
                                      <option value="134">Kyrgyzstan</option>
                                      <option value="11">Lebanon</option>
                                      <option value="12">Libya</option>
                                      <option value="40">Liechtenstein</option>
                                      <option value="184">Lule - Norway</option>
                                      <option value="41">Luxembourg</option>
                                      <option value="235">Macau</option>
                                      <option value="149">Malaysia</option>
                                      <option value="43">Maldives</option>
                                      <option value="151">Malta</option>
                                      <option value="73">Mexico</option>
                                      <option value="144">Mongolia</option>
                                      <option value="13">Morocco</option>
                                      <option value="156">Netherlands</option>
                                      <option value="54">New Zealand</option>
                                      <option value="74">Nicaragua</option>
                                      <option value="179">Northern</option>
                                      <option value="180">Northern - Finland</option>
                                      <option value="183">Northern - Norway</option>
                                      <option value="157">Nynorsk - Norway</option>
                                      <option value="14">Oman</option>
                                      <option value="75">Panama</option>
                                      <option value="78">Paraguay</option>
                                      <option value="76">Peru</option>
                                      <option value="213">Philippines</option>
                                      <option value="163">Poland</option>
                                      <option value="98">Principality of Monaco</option>
                                      <option value="77">Puerto Rico</option>
                                      <option value="15">Qatar</option>
                                      <option value="55">Republic of the Philippines</option>
                                      <option value="176">Russia</option>
                                      <option value="16">Saudi Arabia</option>
                                      <option value="197">Serbia and Montenegro</option>
                                      <option value="236">Singapore</option>
                                      <option value="181">Skolt - Finland</option>
                                      <option value="2">South Africa</option>
                                      <option value="185">Southern - Norway</option>
                                      <option value="29">Spain</option>
                                      <option value="201">Sweden</option>
                                      <option value="38">Switzerland</option>
                                      <option value="17">Syria</option>
                                      <option value="211">Thailand</option>
                                      <option value="56">Trinidad and Tobago</option>
                                      <option value="18">Tunisia</option>
                                      <option value="217">Turkey</option>
                                      <option value="4">U.A.E.</option>
                                      <option value="222">Ukraine</option>
                                      <option value="33">United Kingdom</option>
                                      <option value="57">United States</option>
                                      <option value="80">Uruguay</option>
                                      <option value="226">Uzbekistan</option>
                                      <option value="81">Venezuela</option>
                                      <option value="228">Vietnam</option>
                                      <option value="19">Yemen</option>
                                      <option value="59">Zimbabwe</option>
                                      <option value="89"> Finland</option>
                                      <option value="138"> Latvia</option>
                                      <option value="136"> Lithuania</option>
                                      <option value="161"> Panama</option>
                                      <option value="168"> Portugal</option>
                                      <option value="174"> Romania</option>
                                      <option value="192"> Sierra Leone</option>
                                      <option value="189"> Slovakia</option>
                                  </select>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                  Platobná mena
                  <span style="color:red;">*</span>
                </label>                                                                              
                <select name="currency-id" class="form-control select" data-live-search="true" required>
                    <option value="0">Vyberte...</option>
                                            <option value="1">Euro</option>
                                    </select>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                  Poznámka
                </label>
                <textarea name="description" class="form-control" rows="5"></textarea>
              </div><!-- end form-group -->
              <div class="form-group">
                <label>
                  Zapnuté
                </label><br>                                
                <label class="switch">
                  <input type="checkbox" name="enable" value="1">
                  <span></span>
                </label>
              </div><!-- end form-group -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end panel-body -->
        <div class="panel-footer">                                 
          <button type="submit" class="btn btn-success" role="button">
            <i class="fa fa-save"></i>&nbsp;
            ULOŽIŤ ZMENY          </button>
        </div><!-- end panel-footer -->
      </div><!-- end panel -->
    </form>
  </div><!-- end col -->
</div><!-- end row -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form action="cpanel/store/delivery-payment/payment/update-all" method="post" role="form">
        <div class="panel panel-default">
          <div class="panel-heading ui-draggable-handle">
            <span class="badge pull-left">6</span>
          </div>
          <div class="panel-body panel-body-table">
            <div class="table-responsive">
              <table id="paymentList" class="table table-bordered table-striped table-actions">
                <thead>
                  <tr>
                    <th class="text-center" width="30">
                      #
                    </th>
                    <th class="text-left">
                      Názov
                    </th>
                    <th class="text-center">
                      Krajina
                    </th>
                    <th class="text-center">
                      Platobna mena
                    </th>
                    <th class="text-center">
                      Náklady
                    </th>
                    <th class="text-center">
                      Upraviť
                    </th>
                    <th class="text-center" width="150">
                      Stav
                    </th>
                    <th class="text-center" width="150">
                      Vymazať
                    </th>
                  </tr>
                </thead>
                <tbody>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#2a2d34;">
                        <input type="hidden" name="paymentList[0]['payment-id']" value="1"/>
                        1
                      </td>
                      <td class="text-left">
                        <strong>Platba v hotovosti</strong>
                      </td>
                      <td class="text-center">
                        <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                        &nbsp; Slovakia
                      </td>
                      <td class="text-center">
                        Euro&nbsp;(&euro;)
                      </td>
                      <td class="text-right">
                        <strong>0.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <a href="cpanel/store/delivery-payment/payment/edit/1" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Platba v hotovosti">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[0]['enable']" value="1" checked>
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[0]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#2a2d34;">
                        <input type="hidden" name="paymentList[1]['payment-id']" value="2"/>
                        2
                      </td>
                      <td class="text-left">
                        <strong>Bankov&yacute; prevod</strong>
                      </td>
                      <td class="text-center">
                        <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                        &nbsp; Slovakia
                      </td>
                      <td class="text-center">
                        Euro&nbsp;(&euro;)
                      </td>
                      <td class="text-right">
                        <strong>0.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <a href="cpanel/store/delivery-payment/payment/edit/2" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Bankov&yacute; prevod">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[1]['enable']" value="1" >
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[1]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#2a2d34;">
                        <input type="hidden" name="paymentList[2]['payment-id']" value="3"/>
                        3
                      </td>
                      <td class="text-left">
                        <strong>Platba kartou online </strong>
                      </td>
                      <td class="text-center">
                        <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                        &nbsp; Slovakia
                      </td>
                      <td class="text-center">
                        Euro&nbsp;(&euro;)
                      </td>
                      <td class="text-right">
                        <strong>0.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <a href="cpanel/store/delivery-payment/payment/edit/3" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Platba kartou online ">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[2]['enable']" value="1" checked>
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[2]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#2a2d34;">
                        <input type="hidden" name="paymentList[3]['payment-id']" value="4"/>
                        4
                      </td>
                      <td class="text-left">
                        <strong>Pagamento con carta di credito</strong>
                      </td>
                      <td class="text-center">
                        <span class="flag-icon flag-icon-it" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                        &nbsp;Italy
                      </td>
                      <td class="text-center">
                        Euro&nbsp;(&euro;)
                      </td>
                      <td class="text-right">
                        <strong>0.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <a href="cpanel/store/delivery-payment/payment/edit/4" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Pagamento con carta di credito">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[3]['enable']" value="1" checked>
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[3]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#2a2d34;">
                        <input type="hidden" name="paymentList[4]['payment-id']" value="5"/>
                        5
                      </td>
                      <td class="text-left">
                        <strong>Pagamento in contanti</strong>
                      </td>
                      <td class="text-center">
                        <span class="flag-icon flag-icon-it" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                        &nbsp;Italy
                      </td>
                      <td class="text-center">
                        Euro&nbsp;(&euro;)
                      </td>
                      <td class="text-right">
                        <strong>0.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <a href="cpanel/store/delivery-payment/payment/edit/5" class="btn btn-info" style="padding:7px;border-radius:100%;" title="Pagamento in contanti">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[4]['enable']" value="1" checked>
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[4]['remove']" value="1">
                          <span></span>
                        </label>
                      </td>
                    </tr>
                                      <tr>
                      <td class="text-center" style="font-weight:700;color:#2a2d34;">
                        <input type="hidden" name="paymentList[5]['payment-id']" value="6"/>
                        6
                      </td>
                      <td class="text-left">
                        <strong>S&uacute;ťaž</strong>
                      </td>
                      <td class="text-center">
                        <span class="flag-icon flag-icon-sk" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                        &nbsp; Slovakia
                      </td>
                      <td class="text-center">
                        Euro&nbsp;(&euro;)
                      </td>
                      <td class="text-right">
                        <strong>0.00&euro;</strong>
                      </td>
                      <td class="text-center">
                        <a href="cpanel/store/delivery-payment/payment/edit/6" class="btn btn-info" style="padding:7px;border-radius:100%;" title="S&uacute;ťaž">
                          <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[5]['enable']" value="1" checked>
                          <span></span>
                        </label>
                      </td>
                      <td class="text-center">
                        <label class="switch">
                          <input type="checkbox" name="paymentList[5]['remove']" value="1">
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
              <i class="fa fa-save"></i>&nbsp;ULOŽIŤ ZMENY            </button>
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
<script>
$(function() {
  $('#paymentList').find('tbody').sortable();
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
