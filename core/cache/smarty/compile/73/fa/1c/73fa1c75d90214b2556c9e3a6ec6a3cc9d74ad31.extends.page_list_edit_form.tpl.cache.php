<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-25 09:15:02
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/page/page_list_edit_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17323203855837f30682e263-48867990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '824eb798ae60fade1e3c5cc2d7a49300113588ab' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/page/page_list_edit_form.tpl',
      1 => 1473167056,
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
  'nocache_hash' => '17323203855837f30682e263-48867990',
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
  'unifunc' => 'content_5837f307526303_44371179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5837f307526303_44371179')) {function content_5837f307526303_44371179($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
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
        
<link rel="stylesheet" href="extensions/bootstrap-tagsinput/bootstrap-tagsinput.css"/>
<style>
#bts-action {
    position: absolute;
    top: 4px;
    left: 5px;
    width: 25px;
    min-height: 50px;
    margin: 0;
    padding: 0 0 0 3px;
}
#bts-action > .btn {
    width: 25px;
    height: 50px;
    margin: 0 0 10px 0;
    padding: 0 0 0 3px;
}
#ig-info > .input-group-addon {
    background-color: #3fbae4;
    border-color: #3fbae4;
}
.page-image {
    position: relative;
    background: #F8F8F8;
    display: block;
    width: 100px;
    height: 100px;
    margin: 0;
    padding: 0;
    font-size: 5em;
    text-align: center;
    line-height: 110px;
    color: red;
    border: 1px solid #F8F8F8;
    z-index: 400;

    -webkit-box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
    -moz-box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
    box-shadow: inset 0px 5px 30px -4px rgba(0,0,0,0.75);
}
.page-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.page-image > a.btn-remove {
    position: absolute;
    top: -2px;
    right: -30px;
    margin: 0;
    padding: 0;
    font-weight: 400;
    color: red;
    text-align: center;
    border: 0;
    z-index: 600;
}
.page-image > a.btn-remove > i {
    font-size:1.7em;
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
  <a href="cpanel/page-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>
  </a>
</li>
<li>
  <a href="cpanel/page-list-table" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages_list']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages_list']->value;
} else { ?>List<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages_list']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages_list']->value;
} else { ?>List<?php }?>
  </a>
</li>
<li class="active">
  <a href="cpanel/page-list-edit/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value->page_list_name;?>
">
    <?php echo $_smarty_tpl->tpl_vars['data']->value->page_list_name;?>

  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-list-ol"></i>&nbsp;
    <?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages_page_list']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages_page_list']->value;
} else { ?>PAGE LIST<?php }?>&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="editPageListForm"  action="cpanel/update-page-list" method="post" role="form">
  <input type="hidden" name="page-list-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
" />
  <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">

      <!-- PAGE LIST FORM HEADER -->
      <div class="col-lg-12 col-sm-12 col-xs-12">
          <div class="panel panel-colorful">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title" style="overflow: hidden;">
                      <span style="display:block;float:left;">
                          <span style="color:<?php if (count($_smarty_tpl->tpl_vars['data']->value->background_color)>0) {
echo $_smarty_tpl->tpl_vars['data']->value->background_color;
} else { ?>#000000<?php }?>">
                              <i class="fa fa-file-text-o"></i>
                          </span>&nbsp;
                          <?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['data']->value->page_list_name);?>

                      </span>
                  </h3>
              </div><!-- end panel-header -->
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- // PAGE LIST FORM HEADER -->

      <!-- PAGE LANGUAGE INFORMATION AND SEO -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info panel-toggled">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <i class="fa fa-globe"></i>&nbsp;
              <?php if (isset($_smarty_tpl->tpl_vars['global_form_header_language_and_seo']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_header_language_and_seo']->value)>0)) {?>
                <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_language_and_seo']->value, 'UTF-8');?>

              <?php } else { ?>
                LANGUAGE INFORMATION AND SEO
              <?php }?>
            </h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            </ul>
          </div><!-- end panel-heading -->
          <div class="panel-body panel-body-form">
          <?php if (isset($_smarty_tpl->tpl_vars['languages']->value)&&(is_array($_smarty_tpl->tpl_vars['languages']->value)&&(count($_smarty_tpl->tpl_vars['languages']->value)>0))) {?>
            <!-- START TABS -->
            <div class="panel panel-default tabs">                            
              <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                  <li <?php if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==1)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['i']->value)) {?>class="active"<?php }
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>class="active"<?php }?>>
                    <a href="#tab-lang-seo-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
" role="tab" data-toggle="tab">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"  style="width:23px;height:23px;"></span>
                      <span style="position: relative;top: 5.5px;left: 1.5px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->lang_name;?>
</span>
                    </a>
                  </li>
                <?php } ?>
              </ul>                            
              <div class="panel-body tab-content">
                <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                  <div class="tab-pane <?php if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==1)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['i']->value)) {?>active<?php }
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>active<?php }?>" id="tab-lang-seo-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid blue;">
                        <?php if (isset($_smarty_tpl->tpl_vars['global_form_header_general']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_header_general']->value)>0)) {?>
                          <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_general']->value, 'UTF-8');?>

                        <?php } else { ?>
                          GENERAL
                        <?php }?>
                      </h4>
                      <div class="row form-group">
                        <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                          <span class="page-image <?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)&&!is_null($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)) {?>on<?php }?>">
                            <?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)&&!is_null($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)) {?>
                              <input type="hidden" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['page-image-id']" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_id;?>
"/>
                              <img src="thumbnail/<?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_hash;?>
/100/100" width="100" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_name;?>
"/>
                              <a href="cpanel/delete-page-image/2/<?php echo $_smarty_tpl->tpl_vars['page']->value->id_page;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="btn btn-remove">
                                <i class="fa fa-times"></i>
                              </a>
                            <?php } else { ?>
                              <i class="glyphicon glyphicon-eye-open"></i>
                            <?php }?> 
                          </span>
                        </div><!-- end image -->
                        <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                          <span class="input-group-btn">
                            <a href="cpanel/choose-page-image/2/<?php echo $_smarty_tpl->tpl_vars['page']->value->id_page;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                              <i class="glyphicon glyphicon-hdd"></i>
                            </a>
                          </span>
                          <input type="text"
                            placeholder="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)&&!is_null($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_name;
} else {
if (!empty($_smarty_tpl->tpl_vars['global_form_label_load_image_from_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_label_load_image_from_drive']->value;
} else { ?>Load image from drive<?php }
}?>" class="form-control">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-eye-open"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          <?php if (isset($_smarty_tpl->tpl_vars['global_form_header_color']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_header_color']->value)>0)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['global_form_header_color']->value;?>

                          <?php } else { ?>
                            Color
                          <?php }?>
                        </label>
                        <div class="input-group color colorpicker" style="padding: 0px;" data-color="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)&&!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color;
} else { ?>rgb(255, 255, 255)<?php }?>" data-color-format="rgb">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                          </span>
                          <input type="text" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['color']" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)&&!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color;
} else { ?>rgb(255, 255, 255)<?php }?>" class="form-control"/>
                          <span class="input-group-addon">
                            <i style="background-color: <?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)&&!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color;
} else { ?>rgb(255, 255, 255)<?php }?>"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          <?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_site_title']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_site_title']->value)>0)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['global_pages_form_label_site_title']->value;?>

                          <?php } else { ?>
                            Site title
                          <?php }?>
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                          </span>
                          <input type="text"
                            name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['site-title']"
                            value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_tmp1]->site_title)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_tmp2]->site_title;
}?>"
                            placeholder="<?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_site_title']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_site_title']->value)>0)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_site_title']->value;
} else { ?>Site title<?php }?>"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          <?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_heading']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_heading']->value)>0)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['global_pages_form_label_heading']->value;?>

                          <?php } else { ?>
                            Heading
                          <?php }?>
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                          </span>
                          <input type="text"
                            name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['heading']"
                            value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->heading)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->heading;
}?>"
                            placeholder="<?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_heading']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_heading']->value)>0)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_heading']->value;
} else { ?>Heading<?php }?>"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          Podtitulok
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                          </span>
                          <input type="text"
                            name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['subheading']"
                            value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->subheading)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->subheading;
}?>"
                            placeholder="Podtitulok"
                            class="form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          <?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_short_description']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_short_description']->value)>0)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['global_pages_form_label_short_description']->value;?>

                          <?php } else { ?>
                            Description
                          <?php }?>
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                          </span>
                          <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['description']" class="form-control" rows="5">
                            <?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->description)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->description;
}?>
                          </textarea>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <h4 style="margin:5px 0;border-bottom:1px solid green;">
                        SEO
                      </h4>
                      <div class="form-group">
                        <label>
                          <?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_meta_robots']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_meta_robots']->value)>0)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['global_pages_form_label_meta_robots']->value;?>

                          <?php } else { ?>
                            ROBOTS
                          <?php }?>
                        </label>
                        <?php if (isset($_smarty_tpl->tpl_vars['metarobots']->value)&&(is_array($_smarty_tpl->tpl_vars['metarobots']->value)&&(count($_smarty_tpl->tpl_vars['metarobots']->value)>0))) {?>
                          <select name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-robot']" class="form-control select">
                            <?php  $_smarty_tpl->tpl_vars['robot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['robot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['metarobots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['robot']->key => $_smarty_tpl->tpl_vars['robot']->value) {
$_smarty_tpl->tpl_vars['robot']->_loop = true;
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['robot']->value->value;?>
"><?php echo $_smarty_tpl->tpl_vars['robot']->value->value;?>
</option>
                            <?php } ?>
                          </select>
                        <?php }?>
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          <?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_meta_keywords']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_meta_keywords']->value)>0)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['global_pages_form_label_meta_keywords']->value;?>

                          <?php } else { ?>
                            Keywords
                          <?php }?>
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                          </span>
                          <input type="text"
                            name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-keywords']"
                            value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_keywords)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_keywords;
}?>"
                            class="tagsinput form-control"/>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                      <div class="form-group">
                        <label>
                          <?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_meta_description']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_meta_description']->value)>0)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['global_pages_form_label_meta_description']->value;?>

                          <?php } else { ?>
                            Description
                          <?php }?>
                        </label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                          </span>
                          <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-description']"class="form-control" rows="5">
                            <?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_description)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_description;
}?>
                          </textarea>
                          <span class="input-group-addon">
                            <i class="fa fa-file-text-o"></i>
                          </span>
                        </div><!-- end input-group -->
                      </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-lg-12" style="margin-top:30px;">
                      <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                        <?php if (isset($_smarty_tpl->tpl_vars['global_pages_form_label_html_content']->value)&&(strlen($_smarty_tpl->tpl_vars['global_pages_form_label_html_content']->value)>0)) {?>
                          <?php echo $_smarty_tpl->tpl_vars['global_pages_form_label_html_content']->value;?>

                        <?php } else { ?>
                          HTML CONTENT
                        <?php }?>
                      </h4>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                        </span>
                        <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['html-content']" id="ckeditor_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="ckeditor" row="5">
                          <?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->html_content)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->html_content;
}?>
                        </textarea>
                      </div><!-- end input-group -->
                    </div><!-- end col -->
                  </div><!-- end tab-pane -->
                <?php } ?>
              </div><!-- end panel-body -->
            </div><!-- end panel -->
            <!-- END TABS --> 
          <?php } else { ?>
            <div class="alert alert-warning" role="alert">
              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_warning']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_warning']->value, 'UTF-8');
} else { ?>WARNING!<?php }?>!</strong>
              <?php if (!empty($_smarty_tpl->tpl_vars['global_alert_no_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_no_languages']->value;
} else { ?>Is not actived any from of the supported languages.<?php }?>
            </div><!-- end alert -->
          <?php }?>
          </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- PAGE LANGUAGE INFORMATION AND SEO -->

      <!-- DIRECTION -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="routerForm" class="panel panel-warning panel-toggled">
          <div class="panel-heading ui-draggable-handle">
            <h3 class="panel-title">
              <i class="fa fa-map-signs"></i>&nbsp;
              <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_direction']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_direction']->value, 'UTF-8');
} else { ?>DIRECTION<?php }?>
            </h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            </ul>
          </div><!-- end panel-heading -->
          <div class="panel-body panel-body-form">
            <?php if (isset($_smarty_tpl->tpl_vars['languages']->value)&&(is_array($_smarty_tpl->tpl_vars['languages']->value)&&(count($_smarty_tpl->tpl_vars['languages']->value)>0))) {?>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div id="ael" class="alert pull-right" style="display: none;" role="alert"><!-- --></div>
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="row">
                <div id="r-r-f-c" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <!-- START TABS -->
                  <div class="panel panel-default tabs" style="margin: 5px 0;">                            
                    <ul class="nav nav-tabs" role="tablist" style="margin-top: -2px;padding:0;">
                      <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                        <li <?php if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==1)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['i']->value)) {?>class="active"<?php }
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>class="active"<?php }?>>
                          <a href="#tab-direction-pane-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
" role="tab" data-toggle="tab">
                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"  style="width:23px;height:23px;"></span>
                            <span style="position: relative;top: 5.5px;left: 1.5px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->lang_name;?>
</span>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>                            
                    <div class="panel-body tab-content">
                      <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                        <div class="tab-pane <?php if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==1)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['i']->value)) {?>active<?php }
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>active<?php }?>" id="tab-direction-pane-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <div id="r-k-v-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="input-group">
                                  <?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)&&($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route!=0)) {?>
                                    <span class="input-group-addon">
                                      <i class="fa fa-chrome"></i>
                                    </span>
                                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->path;?>
" class="form-control" />
                                    <span class="input-group-btn">
                                      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->path;?>
" target="__blank" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                      </a>
                                    </span>
                                  <?php } else { ?>
                                    <span class="input-group-addon">
                                      <?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>

                                    </span>
                                    <input id="r-k-i-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                      type="text" 
                                      value="" 
                                      class="form-control r-k-v"
                                      data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                      data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                      data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                      data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                      style="border-radius: 0px;"
                                    />
                                    <span class="input-group-addon">
                                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                    </span>
                                  <?php }?>
                                </div><!-- end input-group -->
                              </div><!-- end form-group -->
                              <div id="r-k-c-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="row" style="display:none;">
                                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                  <div class="form-group">
                                    <label for="key">
                                      URL KEY
                                    </label>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                        <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                      </span>
                                      <input id="r-k-c-i-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                        type="text" 
                                        value="" 
                                        class="form-control"
                                        data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                        data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                        data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                        data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                        style="border-radius: 0px;"
                                      />
                                      <span class="input-group-btn">
                                        <button type="button" 
                                          id="r-k-c-b-u-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                                          class="btn btn-success r-k-c-b-u"
                                          data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                          data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                          data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                          data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                          disabled
                                        >
                                          <i class="fa fa-floppy-o"></i>
                                        </button>
                                      </span>
                                    </div><!-- end input-group -->
                                  </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                  <button type="button" id="r-k-c-b-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="btn btn-default btn-block" style="margin-top: 22px;">
                                    <i class="fa fa-times"></i>&nbsp;
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                                  </button>
                                </div><!-- end col -->
                              </div><!-- end row -->
                              <?php if ($_smarty_tpl->tpl_vars['router']->value->allow_prefix==true) {?>
                                <div id="r-p-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="row" style="display:none;">
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                    <div class="form-group">
                                      <label for="prefix">
                                        URL PREFIX
                                      </label>
                                      <div class="input-group">
                                        <span class="input-group-addon">
                                          <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                        </span>
                                        <input id="r-p-i-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                          type="text" 
                                          value="" 
                                          class="form-control r-p-v"
                                          data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                          data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                          data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                          data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                          style="border-radius: 0px;"
                                        />
                                        <span class="input-group-btn">
                                          <button type="button" 
                                            id="r-p-b-u-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                                            class="btn btn-success r-p-b-u" 
                                            data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                            data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                            data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                            data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                            disabled
                                          >
                                            <i class="fa fa-floppy-o"></i>
                                          </button>
                                        </span>
                                      </div><!-- end input-group -->
                                    </div><!-- end form-group -->
                                  </div><!-- end col -->
                                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                    <button type="button" id="r-p-b-cl-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="btn btn-default btn-block" style="margin-top: 22px;">
                                      <i class="fa fa-times"></i>&nbsp;
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                                    </button>
                                  </div><!-- end col -->
                                </div><!-- end row -->
                              <?php }?>
                            </div><!-- end col -->
                          </div><!-- end row -->
                          <div class="row" style="margin-top: 15px;">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)&&($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route!=0)) {?>
                                <div class="row" style="margin-bottom: 5px;">
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-left: 0px;">
                                    <button 
                                      type="button"
                                      id="r-k-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                      class="btn btn-warning btn-block r-k-c"
                                      data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                      data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                      data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                      data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                    >
                                      <i class="fa fa-exchange"></i>&nbsp;
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_change']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_change']->value, 'UTF-8');
} else { ?>CHANGE URL KEY<?php }?>
                                    </button>
                                  </div><!-- end col -->
                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                    <button 
                                      type="button"
                                      class="btn btn-danger btn-block r-d-d"
                                      data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                      data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                      data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                      data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                    >
                                        <i class="fa fa-times"></i>&nbsp;
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_delete']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_delete']->value, 'UTF-8');
} else { ?>DELETE<?php }?>
                                    </button>
                                  </div><!-- end col -->
                                </div><!-- end row -->
                                <?php if ($_smarty_tpl->tpl_vars['router']->value->allow_prefix==true) {?>
                                  <button type="button" 
                                    id="r-p-b-c-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                                    data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                    data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                    data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                    data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                    class="btn btn-default btn-block r-p-b-c"
                                  >
                                    <i class="fa fa-location-arrow"></i>&nbsp;
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_create']->value, 'UTF-8');
} else { ?>ADD URL PREFIX<?php }?>
                                  </button>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['router']->value->allow_schema==true) {?>
                                  <button type="button" class="btn btn-default btn-block" disabled>
                                    <i class="fa fa-object-group"></i>&nbsp;
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_create']->value, 'UTF-8');
} else { ?>CREATE SCHEMA<?php }?>
                                  </button>
                                <?php }?>
                              <?php } else { ?>
                                <button 
                                  type="button" 
                                  id="r-c-k-d-b-<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" 
                                  class="btn btn-success btn-block r-c-k-d-b"
                                  data-route-id="<?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;
} else { ?>0<?php }?>"
                                  data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                  data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                  data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                  <?php if (isset($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route)) {
if ($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route==0) {?>disabled<?php }
} else { ?>disabled<?php }?>
                                >
                                  <i class="fa fa-floppy-o"></i>&nbsp;
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
                                </button>
                              <?php }?>
                            </div><!-- end col -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                  <h3 class="panel-title">
                                    <i class="fa fa-map-o"></i>&nbsp;
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_suggestions']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_suggestions']->value, 'UTF-8');
} else { ?>SUGGESTIONS<?php }?>
                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                  <div class="alert alert-info" style="width: 95%;margin: 1.5% 2.5%;" role="alert">
                                    <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?>!</strong>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value)) {
echo $_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value;
} else { ?>There are no suggestions.<?php }?>
                                  </div><!-- end alert -->
                                </div><!-- end panel-body -->
                              </div><!-- end panel -->
                            </div><!-- end col -->
                          </div><!-- end row -->
                          <div class="row" style="margin-top: 5px;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                  <h3 class="panel-title">
                                    <i class="fa fa-exchange"></i>&nbsp;
                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_redirection']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_redirection']->value, 'UTF-8');
} else { ?>SEO REDIRECTION<?php }?>
                                  </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-table">
                                  <?php if (isset($_smarty_tpl->tpl_vars['router']->value->redirectList[$_smarty_tpl->tpl_vars['lang']->value->id_lang])&&(count($_smarty_tpl->tpl_vars['router']->value->redirectList[$_smarty_tpl->tpl_vars['lang']->value->id_lang])>0)) {?>
                                    <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                                      <table id="statusList" class="table table-bordered table-striped table-actions">
                                        <thead>
                                          <tr>
                                            <th width="25" class="text-center">
                                              #
                                            </th>
                                            <th class="text-center">
                                              <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_path']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_path']->value, 'UTF-8');
} else { ?>PATH<?php }?>
                                            </th>
                                            <th width="100" class="text-center">
                                              <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_use']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_use']->value, 'UTF-8');
} else { ?>USE<?php }?>
                                            </th>
                                            <th width="100" class="text-center">
                                              <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_remove']->value, 'UTF-8');
} else { ?>DELETE<?php }?>
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['router']->value->redirectList[$_smarty_tpl->tpl_vars['lang']->value->id_lang]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                            <tr>
                                              <td class="text-center" style="font-weight:700;color:#660000;">
                                                <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

                                              </td>
                                              <td class="text-left">
                                                <strong><?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
</strong>
                                              </td>
                                              <td class="text-center">
                                                <button type="button"
                                                  data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                                  data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                                  data-lang-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
"
                                                  data-redirect-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rw;?>
" 
                                                  data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
" 
                                                  class="btn btn-warning r-r-u-b"
                                                >
                                                    &nbsp;&nbsp;<i class="fa fa-check"></i>
                                                </button>
                                              </td>
                                              <td class="text-center">
                                                <button type="button"
                                                  data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                                  data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                                  data-redirect-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rw;?>
"
                                                  class="btn btn-danger r-r-d-b"
                                                >
                                                  &nbsp;&nbsp;<i class="fa fa-times"></i>
                                                </button>
                                              </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                      </table>
                                    </div><!-- end table-responsive -->             
                                  <?php } else { ?>
                                    <div class="alert alert-info" style="width: 98%;margin: 0.5% 1%;" role="alert">
                                      <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?>!</strong>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value)) {
echo $_smarty_tpl->tpl_vars['global_router_alert_no_suggestions']->value;
} else { ?>There are no redirection.<?php }?>
                                    </div><!-- end alert -->
                                  <?php }?>
                                </div><!-- end panel-body -->
                              </div><!-- end panel -->
                            </div><!-- end col -->
                          </div><!-- end row -->
                        </div><!-- end tab-pane -->
                      <?php } ?>
                    </div><!-- end panel-body -->
                  </div><!-- end panel -->
                  <!-- END TABS -->
                </div><!-- end col -->
              </div><!--- end row -->
            <?php } else { ?>
              <div class="alert alert-warning" role="alert">
                <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_warning']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_warning']->value, 'UTF-8');
} else { ?>WARNING!<?php }?>!</strong>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_alert_no_languages']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_no_languages']->value;
} else { ?>Is not actived any from of the supported languages.<?php }?>
              </div><!-- end alert -->
            <?php }?>
          </div><!-- end panel-body -->
        </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //-- DIRECTION -->

      <!-- PAGE LIST GENERAL INFORMATION -->
      <div class="col-lg-12">
          <div class="panel panel-primary panel-toggled">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title">
                      <i class="fa fa-info-circle"></i>&nbsp;
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_general']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_general']->value, 'UTF-8');
} else { ?>GENERAL INFORMATION<?php }?>
                  </h3>
                  <ul class="panel-controls">
                      <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  </ul>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-form">
                  <div class="row">
                      <div class="col-lg-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_owner']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_table_header_owner']->value;
} else { ?>Owner<?php }?>
                              </label>                                    
                              <select name="owner" class="form-control select" data-live-search="true" required>
                                  <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                                      <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value->owner==$_smarty_tpl->tpl_vars['user']->value->id_user) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</option>
                                  <?php } ?>
                              </select>
                          </div><!-- end form-group -->
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_label_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_label_name']->value, 'UTF-8');
} else { ?>LIST NAME<?php }?>                                 
                              </label>
                              <input type="text" name="page-list-name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->page_list_name;?>
" class="form-control">
                          </div><!-- end form -->
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_css_id']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_css_id']->value;
} else { ?>CSS ID<?php }?>
                              </label>
                              <input type="text" name="css-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->css_id;?>
" class="form-control">
                          </div><!-- end form-group -->
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_css_classes']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_css_classes']->value;
} else { ?>CSS Classes<?php }?>
                              </label>
                              <input type="text" name="css-classes" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->css_classes;?>
" class="form-control tagsinput"/>
                          </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-6 col-sm-12 col-xs-12">
                          <div class="form-group">
                              <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_background_color']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_background_color']->value;
} else { ?>Background color<?php }?></label>
                              <div class="input-group color colorpicker" style="padding: 0px;" data-color="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value->background_color)) {
echo $_smarty_tpl->tpl_vars['data']->value->background_color;
} else { ?>#FFFFFF<?php }?>" data-color-format="rgb">
                                  <span class="input-group-addon">
                                      <span class="fa fa-paint-brush"></span>
                                  </span>
                                  <input type="text" name="background-color" value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value->background_color)) {
echo $_smarty_tpl->tpl_vars['data']->value->background_color;
} else { ?>#FFFFFF<?php }?>" class="form-control"/>
                                  <span class="input-group-addon">
                                      <i style="background-color: <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->background_color)) {
echo $_smarty_tpl->tpl_vars['data']->value->background_color;
} else { ?>#FFFFFF<?php }?>"></i>
                                  </span>
                              </div>
                          </div><!-- end form-group -->
                          <div class="row form-group">
                              <h6 style="font-size: 12px;font-weight: 600;color: #656d78;"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_background_image']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_background_image']->value;
} else { ?>Background image<?php }?></h6>
                              <div class="input-group col-lg-2 col-sm-2 col-xs-2 pull-left">
                                  <span class="page-image <?php if (!is_null($_smarty_tpl->tpl_vars['data']->value->background_image)) {?>on<?php }?>">
                                      <?php if (!is_null($_smarty_tpl->tpl_vars['data']->value->background_image)) {?>
                                          <input type="hidden" name="background-image-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->background_image->file_id;?>
"/>
                                          <img src="thumbnail/<?php echo $_smarty_tpl->tpl_vars['data']->value->background_image->file_hash;?>
/100/100" width="100" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value->background_image->file_name;?>
"/>
                                          <a href="cpanel/delete-page-list-image/1/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
/0" class="btn btn-remove">
                                              <i class="fa fa-times"></i>
                                          </a>
                                      <?php } else { ?>
                                          <i class="glyphicon glyphicon-eye-open"></i>
                                      <?php }?> 
                                  </span>
                              </div><!-- end image -->
                              <div class="input-group col-lg-10 col-sm-10 col-xs-10 pull-right">
                                  <span class="input-group-btn">
                                      <a href="cpanel/choose-page-list-image/1/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
/0/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                          <i class="glyphicon glyphicon-hdd"></i>
                                      </a>
                                  </span>
                                  <input type="text" placeholder="<?php if (!is_null($_smarty_tpl->tpl_vars['data']->value->background_image)) {
echo $_smarty_tpl->tpl_vars['data']->value->background_image->file_name;
} else {
if (!empty($_smarty_tpl->tpl_vars['global_form_label_load_image_from_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_label_load_image_from_drive']->value;
} else { ?>Load image from drive<?php }
}?>" class="form-control">
                                  <span class="input-group-addon">
                                      <i class="glyphicon glyphicon-eye-open"></i>
                                  </span>
                              </div>
                          </div><!-- end form-group -->
                      </div><!-- end col -->
                  </div><!-- end row -->
              </div><!-- end panel-body -->                          
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- PAGE LIST GENERAL INFORMATION -->

      <!-- PAGE LIST SETTINGS -->
      <div class="col-lg-12">
          <div class="panel panel-success panel-toggled">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title">
                      <i class="fa fa-cog"></i>&nbsp;
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_settings']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_settings']->value, 'UTF-8');
} else { ?>SETTINGS<?php }?>
                  </h3>
                  <ul class="panel-controls">
                      <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                  </ul>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-form">
                  <div class="row">
                      <div class="col-lg-6 col-sm-12 col-xs-12">
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_publish']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_publish']->value;
} else { ?>Publish<?php }?>
                              </label><br>
                              <label class="switch">
                                  <input type="checkbox" name="publish" <?php if ($_smarty_tpl->tpl_vars['data']->value->publish==1) {?>checked=""<?php }?> value="1">
                                  <span></span>
                              </label>                                          
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_form_label_visitor']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_visitor']->value;
} else { ?>Visitor<?php }?>
                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="visitor" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->visitor==1) {?>checked=""<?php }?>>
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_form_label_registred_user']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_registred_user']->value;
} else { ?>Registred user<?php }?>
                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="registred-user" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->registred_user==1) {?>checked=""<?php }?>>
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_form_label_show_page_list_title']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_show_page_list_title']->value;
} else { ?>Show page list title<?php }?>
                              </label><br>                                      
                              <label class="switch">
                                  <input type="checkbox" name="show-page-list-title" <?php if ($_smarty_tpl->tpl_vars['data']->value->show_page_list_title==1) {?>checked=""<?php }?> value="1">
                                  <span></span>
                              </label>                                          
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_form_label_use_pagination']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_use_pagination']->value;
} else { ?>Use pagination<?php }?>
                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="use-pagination" <?php if ($_smarty_tpl->tpl_vars['data']->value->use_pagination==1) {?>checked=""<?php }?> value="1">
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                          <div class="form-group pull-left" style="min-width: 220px;">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_form_label_enable_aside']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_enable_aside']->value;
} else { ?>Enable aside<?php }?>
                              </label><br>                                       
                              <label class="switch">
                                  <input type="checkbox" name="aside" <?php if ($_smarty_tpl->tpl_vars['data']->value->enabled_aside==1) {?>checked=""<?php }?> value="1">
                                  <span></span>
                              </label>
                          </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-3 col-sm-12 col-xs-12">
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_label_page_list_layout']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_label_page_list_layout']->value;
} else { ?>List layout<?php }?>
                              </label>                                                                              
                              <select name="id-list-layout" class="form-control select" data-style="btn-info">
                                  <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_list_layout==1) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_list_layout_option_1']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_list_layout_option_1']->value, 'UTF-8');
} else { ?>Box list with pictures<?php }?>
                                  </option>
                                  <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_list_layout==2) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_list_layout_option_2']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_list_layout_option_2']->value, 'UTF-8');
} else { ?>Box list without pictures<?php }?>
                                  </option>
                                  <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_list_layout==3) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_list_layout_option_3']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_list_layout_option_3']->value, 'UTF-8');
} else { ?>Ordered list of names<?php }?>
                                  </option>
                                  <option value="4" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_list_layout==4) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_list_layout_option_4']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_list_layout_option_4']->value, 'UTF-8');
} else { ?>Unordered list with names<?php }?>
                                  </option>
                                  <option value="5" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_list_layout==5) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_list_layout_option_5']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_list_layout_option_5']->value, 'UTF-8');
} else { ?>Ordered list with dates and names<?php }?>
                                  </option>
                              </select>
                          </div><!-- end form-group -->
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_label_per_page']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_label_per_page']->value;
} else { ?>Count page per page<?php }?>
                              </label>
                              <input type="number" name="per-page" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->per_page;?>
" class="form-control"/>
                          </div><!-- end form-group -->
                      </div><!-- end col -->
                      <div class="col-lg-3 col-sm-12 col-xs-12">
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_form_label_page_layout']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_page_layout']->value;
} else { ?>Page layout<?php }?>
                              </label>                                                                              
                              <select name="page-layout" class="form-control select" data-style="btn-success">
                                  <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_page_list_layout==1) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_form_option_base']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_form_option_base']->value, 'UTF-8');
} else { ?>BASE PAGE WITH HEADING<?php }?>
                                  </option>
                                  <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_page_list_layout==2) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_form_option_image_heading']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_form_option_image_heading']->value, 'UTF-8');
} else { ?>IMAGE HEADING<?php }?>
                                  </option>
                                  <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value->id_page_list_layout==3) {?>selected<?php }?>>
                                      <?php if (!empty($_smarty_tpl->tpl_vars['global_page_form_option_image_heading_with_description']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_page_form_option_image_heading_with_description']->value, 'UTF-8');
} else { ?>IMAGE HEADING WITH DESCRIPTION<?php }?>
                                  </option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_form_label_number_of_widget']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_form_label_number_of_widget']->value;
} else { ?>Number of widget<?php }?>
                              </label>
                              <input type="number" name="widget" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->widget;?>
" class="form-control"/>
                          </div><!-- end form-group -->   
                      </div><!-- end col -->
                  </div><!-- end row -->
              </div><!-- end panel-body -->                          
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //- PAGE LIST SETTINGS -->

      <!-- PAGE LIST PAGES TABLE -->
      <div id="plpt" class="col-lg-12 col-sm-12 col-xs-12">
          <div class="panel panel-info">
              <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title">
                      <i class="fa fa-list"></i>&nbsp;
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_section_pages']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_pages']->value;
} else { ?>Pages<?php }?>&nbsp;
                      <?php if (count($_smarty_tpl->tpl_vars['pageList']->value)>0) {?>
                          <span class="btn btn-info" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
                          <span class="btn btn-warning" style="margin: 0 15px;"><?php echo $_smarty_tpl->tpl_vars['countLastOrder']->value;?>
</span>
                          <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
                          <span class="badge"><?php echo $_smarty_tpl->tpl_vars['countOrder']->value;?>
&nbsp;Zotriedených záznamov</span>
                          <span class="badge"><?php echo $_smarty_tpl->tpl_vars['countNotOrder']->value;?>
&nbsp;Nezotriedených záznamov</span>
                      <?php }?>
                  </h3>
                  <ul class="panel-controls">
                      <li>
                          <a href="#" id="showPageListModal" onclick="return false;" title="Page List">
                              <span class="fa fa-plus"></span>
                          </a>
                      </li>
                      <li>
                          <a href="#" onclick="return false;" class="panel-collapse">
                              <span class="fa fa-angle-up"></span>
                          </a>
                      </li>
                  </ul>    
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                  <?php if (count($_smarty_tpl->tpl_vars['pageList']->value)>0) {?>
                      <div class="row">
                          <div class="col-lg-12" style="padding:15px 10px;">
                              <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                                  <select class="form-control select" onchange="location = 'cpanel/page-list-edit/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
/'+this.options[this.selectedIndex].value;">
                                      <option value="0">Triedenie</option>
                                      <option value="99" <?php if ($_smarty_tpl->tpl_vars['sort']->value==99) {?>selected<?php }?>>
                                          Vzostupne
                                      </option>
                                      <option value="88" <?php if ($_smarty_tpl->tpl_vars['sort']->value==88) {?>selected<?php }?>>
                                          Zostupne
                                      </option>
                                      <option value="77" <?php if ($_smarty_tpl->tpl_vars['sort']->value==77) {?>selected<?php }?>>
                                          Zoradiť od A po Z.
                                      </option>
                                      <option value="66" <?php if ($_smarty_tpl->tpl_vars['sort']->value==66) {?>selected<?php }?>>
                                          Zoradiť od Z po A
                                      </option>
                                      <option value="55" <?php if ($_smarty_tpl->tpl_vars['sort']->value==55) {?>selected<?php }?>>
                                          Zoradiť od najstaršieho po najnovšie.
                                      </option>
                                      <option value="44" <?php if ($_smarty_tpl->tpl_vars['sort']->value==44) {?>selected<?php }?>>
                                          Zoradiť od najnovšieho po najstaršie
                                      </option>
                                  </select>
                              </div>
                              <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                  <select class="form-control select" onchange="location = 'cpanel/page-list-edit/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
/1/'+this.options[this.selectedIndex].value+'/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
';">
                                      <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value==10) {?>selected<?php }?>>10</option>
                                      <option value="20" <?php if ($_smarty_tpl->tpl_vars['limit']->value==20) {?>selected<?php }?>>20</option>
                                      <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit']->value==50) {?>selected<?php }?>>50</option>
                                      <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit']->value==100) {?>selected<?php }?>>100</option>
                                      <option value="200" <?php if ($_smarty_tpl->tpl_vars['limit']->value==200) {?>selected<?php }?>>200</option>
                                      <option value="500" <?php if ($_smarty_tpl->tpl_vars['limit']->value==500) {?>selected<?php }?>>500</option>
                                  </select>
                              </div>
                              <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                                  <div class="input-group">
                                      <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                                      <span class="input-group-btn">
                                          <button type="button" onclick="location = 'cpanel/page-list-edit/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                                              <i class="fa fa-search"></i>
                                          </button>
                                      </span>
                                  </div>
                              </div>
                              <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                          </div>
                      </div><!-- end row -->
                      <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                          <table id="pageList" class="table table-bordered table-striped table-actions">
                              <thead>
                                  <tr>
                                      <th width="40" class="text-center">
                                        #
                                      </th>
                                      <th class="text-left">
                                         <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_label_page_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_label_page_name']->value, 'UTF-8');
} else { ?>PAGE NAME<?php }?>
                                      </th>
                                      <th width="200" class="text-center">
                                          <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_owner']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_owner']->value, 'UTF-8');
} else { ?>OWNER<?php }?>
                                      </th>
                                      <th width="100" class="text-center">
                                          <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_last_modified']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_last_modified']->value, 'UTF-8');
} else { ?>LAST MODIFIED<?php }?>
                                      </th>
                                      <th width="100" class="text-center">
                                          <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_edit']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_edit']->value, 'UTF-8');
} else { ?>EDIT<?php }?>
                                      </th>
                                      <th class="text-center" width="40">
                                          <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_order']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_order']->value, 'UTF-8');
} else { ?>Order<?php }?>
                                      </th>
                                      <th width="100" class="text-center">
                                          <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_publish']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_publish']->value, 'UTF-8');
} else { ?>PUBLISH<?php }?>
                                      </th>
                                      <th width="100" class="text-center">
                                          <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_pages_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                      <tr>
                                          <td class="text-center">
                                            <input type="hidden" name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['page-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_page;?>
" />
                                            <input type="checkbox" name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_page;?>
">
                                          </td>
                                          <td class="text-left">
                                              <?php echo $_smarty_tpl->tpl_vars['item']->value->pagename;?>

                                          </td>
                                          <td class="text-left">
                                              <?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>

                                          </td>
                                          <td class="text-center">
                                              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->upd_date,"%d-%m-%Y");?>

                                          </td>
                                          <td class="text-center">
                                            <a href="cpanel/page-edit/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_page;?>
" target="__blank" class="btn btn-info" style="padding:7px;border-radius:100%;" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->pagename;?>
">
                                              <i class="fa fa-pencil-square-o" style="position:relative;top:2px;left:4px;"></i>
                                            </a>
                                          </td>
                                          <td class="text-center">
                                              <div class="form-group pull-right" style="width:80px;">
                                                  <div id="ig-info" class="input-group">                                            
                                                      <span class="input-group-addon">
                                                          <i class="fa fa-sort-numeric-desc"></i>
                                                      </span>
                                                      <input type="text"  name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['position']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->position;?>
" min="1" class="form-control text-right">
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="text-center">
                                              <label class="switch">
                                                  <input type="checkbox" name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['publish']" <?php if ($_smarty_tpl->tpl_vars['item']->value->publish==1) {?>checked=""<?php }?> value="1">
                                                  <span></span>
                                              </label>
                                          </td>
                                          <td class="text-center">
                                              <label class="switch">
                                                  <input type="checkbox" name="pageList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['remove']" value="1">
                                                  <span></span>
                                              </label>
                                          </td>
                                      </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- end table-responsive -->
                  <?php } else { ?>
                    <div class="alert alert-info" role="alert" style="margin: 15px auto;">
                      <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo $_smarty_tpl->tpl_vars['global_alert_info']->value;
} else { ?>INFO!<?php }?></strong>
                      <?php if (!empty($_smarty_tpl->tpl_vars['global_pages_empty_list']->value)) {
echo $_smarty_tpl->tpl_vars['global_pages_empty_list']->value;
} else { ?>There are no pages.<?php }?>
                    </div>
                  <?php }?>
              </div><!-- end panel-body -->
          </div><!-- end panel -->
      </div><!-- end col -->
      <!-- //-- PAGE LIST PAGES TABLE -->

      <div id="bts-action" role="group">
          <button type="submit" id="btn-save" class="btn btn-success" role="button">
              <i class="fa fa-save"></i>
          </button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_remove_page_list">
              <i class="glyphicon glyphicon-floppy-remove"></i>
          </button>
      </div>
  </div><!-- end row -->
</form>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW REMOVE PAGE LIST -->                       
<div class="modal" id="modal_remove_page_list" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" action="cpanel/delete-page-list" method="post" role="form">
                            <input type="hidden" name="page-list-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_title']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_title']->value, 'UTF-8');
} else { ?>Delete forever?<?php }?>
                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-table">
                                    <h4 style="margin: 15px 0;">
                                        <strong>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_message']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_delete_forever_message']->value;
} else { ?>Warning: You can’t undo this action.<?php }?>
                                        </strong>
                                    </h4>
                                </div>
                                <div class="panel-footer">                                 
                                    <button type="submit" class="btn btn-danger">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_delete_forever']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_delete_forever']->value, 'UTF-8');
} else { ?>DELETE FOREVER<?php }?>
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW REMOVE PAGE LIST -->

<!-- MODAL WINDOW ADD ON PAGE LIST -->                         
<div class="modal" id="pageListModal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1200px;">                   
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW ADD ON PAGE LIST -->

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
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/pageList.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/router.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    
    Router.init(<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
);
    
    PageList.init(<?php echo $_smarty_tpl->tpl_vars['data']->value->id_page_list;?>
,<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
);
    
    window.onscroll = function (e) {
      var vertical_position = 0;
      if (pageYOffset)//usual
        vertical_position = pageYOffset;
      else if (document.documentElement.clientHeight)//ie
        vertical_position = document.documentElement.scrollTop;
      else if (document.body)//ie quirks
        vertical_position = document.body.scrollTop;

      var topPosition = vertical_position + ((vertical_position == 0) ? 3 : 200);

      $('#bts-action').css({ top: topPosition + 'px' });
    };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
        CKEDITOR.replace('ckeditor_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/cpanel/drive-api/build-image-register"
        });
    <?php } ?>  
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
