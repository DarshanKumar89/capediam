<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-05 17:48:43
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/offers/offer_list.tpl" */ ?>
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
  ),
  'nocache_hash' => '169588246258459a6bd840e0-59294401',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_58459a6c9f4155_70509507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58459a6c9f4155_70509507')) {function content_58459a6c9f4155_70509507($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
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
      <img src="extensions/cpanel/assets/images/users/schuler.png" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
">
    </a>
    <div class="profile">
      <div class="profile-image">
        <img src="extensions/cpanel/assets/images/users/schuler.png" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
">
      </div>
      <div class="profile-data">
        <div class="profile-data-name"><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</div>
      </div>
    </div>                                                                        
  </li>
  <li>
    <a href="cpanel" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_dashboard']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dashboard']->value;
} else { ?>Dashboard<?php }?>">
      <i class="fa fa-dashboard"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_dashboard']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dashboard']->value;
} else { ?>Dashboard<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/site-structure" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_site']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_site']->value;
} else { ?>Site Structure<?php }?>">
      <i class="fa fa-sitemap"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_site']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_site']->value;
} else { ?>Site Structure<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/page-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>">
      <i class="fa fa-file-text-o"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>
      </span>
    </a>                        
  </li>
  <li class="xn-openable" style="display:none;visibility: hidden !important;">
    <a href="cpanel/cpanel/catalog" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog']->value;
} else { ?>Catalog<?php }?>">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog']->value;
} else { ?>Catalog<?php }?>
      </span>
    </a>
    <ul>
      <li>
        <a href="cpanel/catalog" title="Catalog - Overview">
          <i class="fa fa-eye"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_overview']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_overview']->value;
} else { ?>Overview<?php }?>
        </a>
      </li>
      <li>
        <a href="cpanel/catalog/create-article-form" title="Catalog - New article">
          <i class="fa fa-plus"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_new_article']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_new_article']->value;
} else { ?>New article<?php }?>
        </a>
      </li>
      <li>
        <a href="cpanel/catalog/categories" title="Catalog - Manage categories">
          <i class="fa fa-info"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_categories']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_categories']->value;
} else { ?>Manage categories<?php }?>
        </a>
      </li>
      <li>
        <a href="cpanel/catalog/attributes" title="Catalog - Manage attributes">
          <i class="fa fa-tag"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_catalog_sub_manage_attributes']->value;
} else { ?>Manage attributes<?php }?>
        </a>
      </li>
    </ul>
  </li>
  <li>
    <a href="cpanel/my-drive" title="M<?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>">
      <i class="fa fa-hdd-o"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/slider-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_slider']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_slider']->value;
} else { ?>Slider<?php }?>">
      <i class="fa fa-camera"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_slider']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_slider']->value;
} else { ?>Slider<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/gallery-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_gallery']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_gallery']->value;
} else { ?>Gallery<?php }?>">
      <i class="fa fa-picture-o"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_gallery']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_gallery']->value;
} else { ?>Gallery<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/language-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_languages']->value;
} else { ?>Languages<?php }?>">
      <i class="glyphicon glyphicon-globe"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_languages']->value;
} else { ?>Languages<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/dictionary-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_dictionary']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dictionary']->value;
} else { ?>Dictionary<?php }?>">
      <i class="fa fa-book"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_dictionary']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_dictionary']->value;
} else { ?>Dictionary<?php }?>
      </span>
    </a>                        
  </li>
  <li>
    <a href="cpanel/seo-redirect-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_']->value;
} else { ?>SEO REDIRECT<?php }?>">
      <i class="fa fa-link"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_']->value;
} else { ?>SEO Redirect<?php }?>
      </span>
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
    <a href="cpanel/store/users" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_users']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_users']->value;
} else { ?>User<?php }?>">
      <i class="fa fa-users"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_users']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_users']->value;
} else { ?>Users<?php }?>
    </a>
  </li>
  <li data-menu-item="carts">
    <a href="cpanel/store/carts" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_carts']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_carts']->value;
} else { ?>Carts<?php }?>">
      <i class="fa fa-shopping-cart"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_carts']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_carts']->value;
} else { ?>Carts<?php }?>
    </a>
  </li>
  <li class="xn-openable" data-menu-item="orders">
    <a href="cpanel/store/orders" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_orders']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_orders']->value;
} else { ?>Orders<?php }?>">
      <i class="fa fa-clipboard"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_orders']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_orders']->value;
} else { ?>Orders<?php }?>
    </a>
    <ul>
      <li data-menu-item="list">
        <a href="cpanel/store/orders" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_']->value;
} else { ?>List<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_section_']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_']->value;
} else { ?>Prehľad<?php }?>
        </a>
      </li>
      <li data-menu-item="management">
        <a href="cpanel/store/orders/management/short" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_']->value;
} else { ?>Management<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_']->value;
} else { ?>Správa<?php }?>
        </a>
      </li>
    </ul>
  </li>
  <li class="xn-openable" data-menu-item="catalog">
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_catalog']->value;
} else { ?>Catalog<?php }?>">
      <span class="fa fa-book"></span>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_catalog']->value;
} else { ?>Catalog<?php }?>
    </a>
    <ul>
      <li data-menu-item="articles">
        <a href="cpanel/store/catalog/articles/short" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_articles']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_articles']->value;
} else { ?>Articles<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_articles']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_articles']->value;
} else { ?>Articles<?php }?>
        </a>
      </li>
      <li data-menu-item="store-category-list">
        <a href="cpanel/store-category-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_categories']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_categories']->value;
} else { ?>Categories<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_categories']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_categories']->value;
} else { ?>Categories<?php }?>
        </a>
      </li>
      <li data-menu-item="store-attribute-list">
        <a href="cpanel/store-attribute-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_attributes']->value;
} else { ?>Attributes<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_attributes']->value;
} else { ?>Attributes<?php }?>
        </a>
      </li>
      <li data-menu-item="ordering">
        <a href="cpanel/store/catalog/ordering" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ordering']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ordering']->value;
} else { ?>Ordering<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ordering']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ordering']->value;
} else { ?>Ordering<?php }?>
        </a>
      </li>
    </ul>
  </li>
  <li data-menu-item="thumbnail">
    <a href="cpanel/thumbnail" title="<?php if (isset($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)&&(strlen($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)>0)) {
echo $_smarty_tpl->tpl_vars['store_section_thumbnail']->value;
} else { ?>Thumbnail<?php }?>">
      <i class="fa fa-picture-o" aria-hidden="true"></i>
      <?php if (isset($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)&&(strlen($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)>0)) {
echo $_smarty_tpl->tpl_vars['store_section_thumbnail']->value;
} else { ?>Thumbnail<?php }?>
    </a>
  </li>
  <li data-menu-item="warehouse">
    <a href="cpanel/store-warehouse-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_warehouses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_warehouses']->value;
} else { ?>Warehouses<?php }?>">
      <i class="fa fa-database"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_warehouses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_warehouses']->value;
} else { ?>Warehouses<?php }?>
    </a>
  </li>
  <li data-menu-item="statuses">
    <a href="cpanel/store/statuses" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_statuses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_statuses']->value;
} else { ?>Statuses<?php }?>">
      <i class="fa fa-heartbeat"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_statuses']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_statuses']->value;
} else { ?>Statuses<?php }?>
    </a>
  </li>
  <li class="xn-openable" data-menu-item="delivery-payment">
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value;
} else { ?>Delivery / Payment<?php }?>">
      <i class="fa fa-pencil-square"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery_payment']->value;
} else { ?>Delivery / Payment<?php }?>
    </a>
    <ul>
      <li data-menu-item="delivery">
        <a href="cpanel/store/delivery-payment/delivery" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery']->value;
} else { ?>Delivery<?php }?>">
          <i class="fa fa-truck"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_delivery']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_delivery']->value;
} else { ?>Delivery<?php }?>
        </a>
      </li>
      <li data-menu-item="payment">
        <a href="cpanel/store/delivery-payment/payment" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_payment']->value;
} else { ?>Payment<?php }?>">
          <i class="fa fa-usd"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_payment']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_payment']->value;
} else { ?>Payment<?php }?>
        </a>
      </li>
      <li data-menu-item="ties">
        <a href="cpanel/store/delivery-payment/ties" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ties']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ties']->value;
} else { ?>Ties<?php }?>">
          <i class="fa fa-exchange"></i>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_ties']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_ties']->value;
} else { ?>Ties<?php }?>
        </a>
      </li>
   </ul>
  </li>
  <li class="xn-openable" data-menu-item="localization">
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_localization']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_localization']->value;
} else { ?>Localization<?php }?>">
      <span class="fa fa-globe"></span>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_localization']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_localization']->value;
} else { ?>Localization<?php }?>
    </a>
    <ul>
      <li data-menu-item="currencies">
        <a href="cpanel/store/localization/currencies" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_currencies']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_currencies']->value;
} else { ?>Currencies<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_currencies']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_currencies']->value;
} else { ?>Currencies<?php }?>
        </a>
      </li>
      <li data-menu-item="taxes">
        <a href="cpanel/store/localization/taxes" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_taxes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_taxes']->value;
} else { ?>Taxes<?php }?>">
          <span class="fa fa-circle"></span>
          <?php if (!empty($_smarty_tpl->tpl_vars['store_nav_taxes']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_taxes']->value;
} else { ?>Taxes<?php }?>
        </a>
     </li>
   </ul>
  </li>
  <li data-menu-item="offers">
    <a href="cpanel/store/offers" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_offers']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_offers']->value;
} else { ?>Offers<?php }?>">
      <i class="fa fa-sticky-note-o"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_offers']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_offers']->value;
} else { ?>Offers<?php }?>
    </a>
  </li>
  <li data-menu-item="discount-circuits">
    <a href="cpanel/store-discount-circuit-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_discount_circuits']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_discount_circuits']->value;
} else { ?>Discount circuits<?php }?>">
      <i class="fa fa-circle-o-notch"></i>
      <?php if (!empty($_smarty_tpl->tpl_vars['store_section_discount_circuits']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_discount_circuits']->value;
} else { ?>Discount circuits<?php }?>
    </a>
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
    <a href="cpanel/general-settings" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_settings']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_settings']->value;
} else { ?>General Settings<?php }?>">
      <i class="fa fa-gear"></i>
      <span class="xn-text">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_settings']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_settings']->value;
} else { ?>General Settings<?php }?>
      </span>
    </a>                        
  </li>
  <?php if ($_smarty_tpl->tpl_vars['user']->value->rule==1) {?>
    <li class="xn-openable">
      <a href="#" onclick="return false;" title="Adminstrator">
        <i class="fa fa-exclamation-triangle"></i>
        <span class="xn-text">Administrátor</span>
      </a>
      <ul>
        <li>
          <a href="cpanel/form-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_form']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_form']->value;
} else { ?>Forms<?php }?>">
            <i class="fa fa-pencil"></i>
            <span class="xn-text">
              <?php if (!empty('global_section_form')) {
echo $_smarty_tpl->tpl_vars['global_section_form']->value;
} else { ?>Forms<?php }?>
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
          <a href="cpanel/router" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_router']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_router']->value;
} else { ?>Router<?php }?>">
            <i class="fa fa-map-signs"></i>
            <span class="xn-text">
              <?php if (!empty($_smarty_tpl->tpl_vars['global_section_general_router']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_general_router']->value;
} else { ?>Router<?php }?>
            </span>
          </a>                        
        </li>
      </ul>
    </li>
  <?php }?>
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
                        <a href="cpanel" style="height: 50px;padding: 11px 0;" title="<?php if ($_smarty_tpl->tpl_vars['defaultLanguage']->value==51) {?>English<?php } else { ?>Slovak<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['defaultLanguage']->value==51) {?>
                                <span class="flag-icon flag-icon-gb" style="width:18px;height:18px;"></span>
                            <?php } else { ?>
                                <span class="flag-icon flag-icon-sk" style="width:18px;height:18px;"></span>
                            <?php }?>
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
                        <a href="cpanel" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_home']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_home']->value;
} else { ?>Home<?php }?>">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_section_home']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_home']->value;
} else { ?>Home<?php }?>
                        </a>
                    </li>
                    
<li>
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_store']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_store']->value;
} else { ?>Store<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_store']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_store']->value;
} else { ?>Store<?php }?>
    </a>
</li>
<li class="active">
    <a href="cpanel/store/offers" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_offers']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_offers']->value;
} else { ?>Offers<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_offers']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_offers']->value;
} else { ?>Offers<?php }?>
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-sticky-note-o"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['store_section_offers']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_section_offers']->value, 'UTF-8');
} else { ?>Offers<?php }?>&nbsp;
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
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_create']->value, 'UTF-8');
} else { ?>CREATE OFFER<?php }?>
                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>                
                </div><!-- end panel-header -->
                <div class="panel-body panel-body-form">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <h4 style="border-bottom:1px solid blue;"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_general']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_general']->value, 'UTF-8');
} else { ?>GENERAL<?php }?></h4>
                        <div class="form-group">
                          <label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_email_template']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_email_template']->value, 'UTF-8');
} else { ?>EMAIL TEMPLATE<?php }?>
                            <span style="color:red;">*</span>
                          </label>
                          <?php if (!empty($_smarty_tpl->tpl_vars['emailList']->value)) {?>
                            <select name="email-id" id="email-id" class="form-control select" data-style="btn-info" data-live-search="true" required>
                              <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emailList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_email;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->email_name;?>
</option>
                              <?php } ?>
                            </select> 
                          <?php } else { ?>
                            <div class="alert alert-warning" role="alert">
                              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                              <?php if (!empty($_smarty_tpl->tpl_vars['store_email_empty_list']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_email_empty_list']->value, 'UTF-8');
} else { ?>There are no emails.<?php }?>
                              <a href="cpanel/store/email" class="btn btn-default btn-sm pull-right" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_email_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_email_create']->value, 'UTF-8');
} else { ?>CREATE EMAIL<?php }?>">
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_email_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_email_create']->value, 'UTF-8');
} else { ?>CREATE EMAIL<?php }?>
                              </a>
                            </div>
                          <?php }?>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_recipient_email']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_recipient_email']->value, 'UTF-8');
} else { ?>RECIPIENT EMAIL<?php }?>
                            <span style="color:red;">*</span>
                          </label>
                          <div class="input-group">
                            <input type="email" name="recipient-email" value="" id="re" class="form-control" required>
                            <span class="input-group-btn">
                              <button type="button" onclick="getEmailFromAddress()" class="btn btn-default">
                                <i class="fa fa-book"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['store_offer_choose_from_directory']->value)) {
echo $_smarty_tpl->tpl_vars['store_offer_choose_from_directory']->value;
} else { ?>Choose from directory<?php }?>
                              </button>
                            </span>
                          </div>
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_label_notice']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_notice']->value, 'UTF-8');
} else { ?>NOTICE<?php }?>
                            </label>
                            <textarea name="notice" rows="8" class="form-control"></textarea>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <h4 style="border-bottom:1px solid #33414e;"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_settings']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_settings']->value, 'UTF-8');
} else { ?>SETTINGS<?php }?></h4>
                        <div class="form-group col-lg-6" style="padding-left:0px;">
                          <label>
                              <?php if (!empty($_smarty_tpl->tpl_vars['global_label_date_from']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_date_from']->value, 'UTF-8');
} else { ?>FROM<?php }?>
                          </label>
                          <input type="text" name="from" value="" maxlength="12" class="form-control datepicker">
                        </div><!-- end form-group -->
                        <div class="form-group col-lg-6" style="padding-right:0px;">
                          <label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_label_date_until']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_date_until']->value, 'UTF-8');
} else { ?>UNTIL<?php }?>
                          </label>
                          <input type="text" name="until" value="" maxlength="12" class="form-control datepicker">
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Currency<?php }?>
                            <span style="color:red;">*</span>
                          </label>                                                                              
                          <select name="currency-id" class="form-control select" data-live-search="true" required>
                            <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencyList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_currency;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->currency_name;?>
</option>
                            <?php } ?>
                          </select>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Tax rule<?php }?>
                            <span style="color:red;">*</span>
                          </label>                                                                              
                          <select name="tax-id" class="form-control select" data-live-search="true" required>
                            <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_tax;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->tax_name;?>
</option>
                            <?php } ?>
                          </select>
                        </div><!-- end form-group -->
                        <div class="form-group">
                          <label>
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_label_language']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_language']->value, 'UTF-8');
} else { ?>LANGUAGE<?php }?>
                            <span style="color:red;">*</span>
                          </label>
                          <?php if (!empty($_smarty_tpl->tpl_vars['languages']->value)) {?>
                            <select name="lang-id" id="lang-id" class="form-control select" data-show-icon="true" data-live-search="true" required>
                                <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" data-content="<i class='flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
'></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value->lang_name;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->lang_name;?>
</option>
                                <?php } ?>
                            </select>
                          <?php } else { ?>
                            <div class="alert alert-warning" role="alert">
                              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_warning']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_warning']->value, 'UTF-8');
} else { ?>WARNING!<?php }?>!</strong>
                              <?php if (!empty($_smarty_tpl->tpl_vars['global_alert_no_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_no_languages']->value;
} else { ?>Is not actived any from of the supported languages.<?php }?>
                            </div>
                          <?php }?>
                        </div><!-- end form-group -->
                        <div class="form-group pull-left" style="margin-right: 15px;">
                            <label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_active']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_active']->value, 'UTF-8');
} else { ?>ACTIVE<?php }?>
                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="active" value="1" checked="">
                                <span></span>
                            </label>                                          
                        </div><!-- end form-group -->
                        <div class="form-group pull-left" style="margin-right: 15px;">
                            <label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_allow_buy']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_allow_buy']->value, 'UTF-8');
} else { ?>ALLOW BUY<?php }?>
                            </label><br>
                            <label class="switch">
                                <input type="checkbox" name="allow-buy" value="1" checked="">
                                <span></span>
                            </label>                                          
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                </div><!-- end panel-body -->
                <div class="panel-footer">
                    <?php if (!empty($_smarty_tpl->tpl_vars['emailList']->value)&&!empty($_smarty_tpl->tpl_vars['languages']->value)) {?>
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
                        </button>
                    <?php }?>
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
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_list']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_list']->value, 'UTF-8');
} else { ?>OFFER LIST<?php }?>
                    </h3>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                    <?php if (!is_null($_smarty_tpl->tpl_vars['offerList']->value)) {?>
                        <div class="row">
                            <div class="col-lg-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                    <select class="form-control select" onchange="location = 'cpanel/store/offers/1/'+this.options[this.selectedIndex].value;">
                                        <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value==10) {?>selected<?php }?>>10</option>
                                        <option value="20" <?php if ($_smarty_tpl->tpl_vars['limit']->value==20) {?>selected<?php }?>>20</option>
                                        <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit']->value==50) {?>selected<?php }?>>50</option>
                                        <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit']->value==100) {?>selected<?php }?>>100</option>
                                        <option value="200" <?php if ($_smarty_tpl->tpl_vars['limit']->value==200) {?>selected<?php }?>>200</option>
                                        <option value="500" <?php if ($_smarty_tpl->tpl_vars['limit']->value==500) {?>selected<?php }?>>500</option>
                                    </select>
                                </div>
                                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                          <table id="offerList" class="table table-bordered table-striped table-actions">
                            <thead>
                              <tr>
                                <th class="text-center" width="30">
                                  STAV
                                </th>
                                <th class="text-center">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_recipient_email']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_recipient_email']->value, 'UTF-8');
} else { ?>RECIPIENT EMAIL<?php }?>
                                </th>
                                <th class="text-center">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_label_date_from']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_date_from']->value, 'UTF-8');
} else { ?>FROM<?php }?>
                                </th>
                                <th class="text-center">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_label_date_until']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_date_until']->value, 'UTF-8');
} else { ?>UNTIL<?php }?>
                                </th>
                                <th class="text-right">
                                    Celkom <br>
                                    produktov
                                </th>
                                <th class="text-right">
                                    Celkom suma<br>
                                    pred zľavou
                                </th>
                                <th class="text-right">
                                    Celkom <br>
                                    zľava
                                </th>
                                <th class="text-right">
                                    Celkom suma<br>
                                    po zľave:
                                </th>
                                <th class="text-center" width="200">
                                  DÁTUM NÁKUPU
                                </th>
                                <th class="text-center" width="100">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_gallery_table_header_edit']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_gallery_table_header_edit']->value, 'UTF-8');
} else { ?>EDIT<?php }?>
                                </th>
                                <th class="text-center" width="100">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_allow_buy']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_allow_buy']->value, 'UTF-8');
} else { ?>ALLOW BUY<?php }?>
                                </th>
                                <th class="text-center" width="100">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_active']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_active']->value, 'UTF-8');
} else { ?>ACTIVE<?php }?>
                                </th>
                                <th class="text-center" width="100">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['offerList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td class="text-center" style="font-weight:700;color:#660000;">
                                          <input type="hidden" name="offerList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['offer-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_offer;?>
"/>
                                            <span class="circle-indicator center <?php if ($_smarty_tpl->tpl_vars['item']->value->is_buy_enabled==1) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->is_buy_closed==1) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->allow_buy==1) {?>blue<?php } else { ?>black<?php }?>">
                                              <i class="fa fa-bullseye"></i>
                                            </span>
                                        </td>
                                        <td class="text-left">
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->recipient_email;?>

                                        </td>
                                        <td class="text-center">
                                            <?php if (is_null($_smarty_tpl->tpl_vars['item']->value->date_from)) {?>
                                              <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                <i class="fa fa-times-circle-o"></i>
                                              </span>
                                            <?php } else { ?>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->date_from,"%A, %B %e, %Y");?>

                                            <?php }?>
                                        </td>
                                        <td class="text-center">
                                            <?php if (is_null($_smarty_tpl->tpl_vars['item']->value->date_until)) {?>
                                              <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                <i class="fa fa-times-circle-o"></i>
                                              </span>
                                            <?php } else { ?>
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->date_until,"%A, %B %e, %Y");?>

                                            <?php }?>
                                        </td>
                                        <td class="text-right">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->cost->total_items;?>
ks</strong>
                                        </td>
                                        <td class="text-right">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->cost->total_former;?>
&euro;</strong>
                                        </td>
                                        <td class="text-right">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->cost->total_discount;?>
&euro; / <?php echo $_smarty_tpl->tpl_vars['item']->value->cost->percent_discount;?>
%</strong>
                                        </td>
                                        <td class="text-right">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->cost->total_amount;?>
&euro;</strong>
                                        </td>
                                        <td class="text-center">
                                          <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->buy_date)) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->buy_date;?>

                                          <?php } else { ?>
                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                              <i class="fa fa-times-circle-o"></i>
                                            </span>
                                          <?php }?>
                                        </td>
                                        <td class="text-center">
                                          <?php if ($_smarty_tpl->tpl_vars['item']->value->is_buy_enabled==1||$_smarty_tpl->tpl_vars['item']->value->is_buy_closed==1) {?>
                                            <span class="hold">
                                              <i class="fa fa-lock"></i>
                                            </span>
                                          <?php } else { ?>
                                            <a href="cpanel/store/offers/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->o_hash;?>
" class="btn btn-info" style="padding:7px;border-radius:100%;">
                                              <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                            </a>
                                          <?php }?>
                                        </td>
                                        <td class="text-center">
                                          <?php if ($_smarty_tpl->tpl_vars['item']->value->is_buy_enabled==1||$_smarty_tpl->tpl_vars['item']->value->is_buy_closed==1) {?>
                                            <span class="hold">
                                              <i class="fa fa-lock"></i>
                                            </span>
                                          <?php } else { ?>
                                            <label class="switch">
                                              <input type="checkbox" name="offerList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['allow-buy']" <?php if ($_smarty_tpl->tpl_vars['item']->value->allow_buy==1) {?>checked=""<?php }?> value="1">
                                              <span></span>
                                            </label>
                                          <?php }?>
                                        </td>
                                        <td class="text-center">
                                          <?php if ($_smarty_tpl->tpl_vars['item']->value->is_buy_enabled==1||$_smarty_tpl->tpl_vars['item']->value->is_buy_closed==1) {?>
                                            <span class="hold">
                                              <i class="fa fa-lock"></i>
                                            </span>
                                          <?php } else { ?>
                                            <label class="switch">
                                              <input type="checkbox" name="offerList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['active']" <?php if ($_smarty_tpl->tpl_vars['item']->value->enabled==1) {?>checked=""<?php }?> value="1">
                                              <span></span>
                                            </label>
                                          <?php }?>
                                        </td>
                                        <td class="text-center">
                                          <?php if ($_smarty_tpl->tpl_vars['item']->value->is_buy_enabled==1||$_smarty_tpl->tpl_vars['item']->value->is_buy_closed==1) {?>
                                            <span class="hold">
                                              <i class="fa fa-lock"></i>
                                            </span>
                                          <?php } else { ?>
                                            <label class="switch">
                                              <input type="checkbox" name="offerList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['remove']" value="1">
                                              <span></span>
                                            </label>
                                          <?php }?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                          </table>
                      </div><!-- end table-responsive -->
                    <?php } else { ?>
                      <div class="alert alert-info" style="float: none;width: 98%;margin: 15px auto;"role="alert">
                        <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_offer_empty_list']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_offer_empty_list']->value, 'UTF-8');
} else { ?>There are no offers.<?php }?>
                      </div>
                    <?php }?>
                </div><!-- end panel-body -->
                <div class="panel-footer">                                 
                  <?php if (!is_null($_smarty_tpl->tpl_vars['offerList']->value)) {?>
                    <button type="submit" class="btn btn-success" role="button">
                      <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
                    </button>
                  <?php }?>
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
                    <div class="mb-title"><span class="fa fa-sign-out"></span><?php if (!empty($_smarty_tpl->tpl_vars['global_button_sign_out']->value)) {
echo $_smarty_tpl->tpl_vars['global_button_sign_out']->value;
} else { ?>Sign out<?php }?>?</div>
                    <div class="mb-footer">
                        <div class="pull-left">
                            <a href="cpanel/sign/out" class="btn btn-success btn-lg">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_button_yes']->value)) {
echo $_smarty_tpl->tpl_vars['global_button_yes']->value;
} else { ?>Yes<?php }?>
                            </a>
                            <button class="btn btn-default btn-lg mb-control-close">
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_button_no']->value)) {
echo $_smarty_tpl->tpl_vars['global_button_no']->value;
} else { ?>No<?php }?>
                            </button>
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
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/jquery-ui/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/bootstrap/js/bootstrap-ckeditor-modal-fix.js"><?php echo '</script'; ?>
>       
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/scrolltotop/scrolltopcontrol.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/owl/owl.carousel.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/knob/jquery.knob.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>

        <!-- END THIS PAGE PLUGINS-->       
        <!-- START TEMPLATE -->
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins.js"><?php echo '</script'; ?>
>        
        <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/actions.js"><?php echo '</script'; ?>
>
        <!-- END TEMPLATE -->
        <?php echo '<script'; ?>
 type="text/javascript">
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
        <?php echo '</script'; ?>
>
    <!-- END SCRIPTS -->         
    </body>
</html><?php }} ?>
