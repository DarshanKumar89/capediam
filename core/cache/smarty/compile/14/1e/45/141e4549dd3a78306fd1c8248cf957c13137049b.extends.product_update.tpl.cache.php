<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-26 10:01:13
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/translate/product_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9961233635889bad96db9c3-15251336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2738d480c471e98382c7760380d4dd93627040' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/translate/product_update.tpl',
      1 => 1470844332,
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
  'nocache_hash' => '9961233635889bad96db9c3-15251336',
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
  'unifunc' => 'content_5889bada8f8ac5_78894069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889bada8f8ac5_78894069')) {function content_5889bada8f8ac5_78894069($_smarty_tpl) {?><!DOCTYPE html>
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
#btn-save {
  position: absolute;
  top: 4px;
  left: 5px;
  width: 25px;
  height: 50px;
  margin: 0;
  padding: 0 0 0 3px;
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
}
.form-control[disabled], 
.form-control[readonly] {
  color: #000;
}
.poster {
  position: relative;
  display: block;
  float: left;
  width: 120px;
  height: 120px;
  overflow: hidden;
}
.poster > img {
  position: relative;
  top: 50%;
  display: block;
  max-width: 100%;
  max-height: 100%;
  margin: 0 auto;
  vertical-align: middle;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.poster > span {
  display: block;
  width: 90px;
  height: 90px;
  margin: 10px auto;
  font-size: 1.4em;
  color: #4285f4;
}
.poster .glyphicon {
  font-size: 3em;
  left: 21px;
}

/******************
*
* AUTOCOMPLETE
*
******************/

.ax-message {
    display: none;
}
.ui-ac-wrapp {
  position: relative;
  min-height: 1px;
  max-height: 400px;
  margin-top: 20px;
  padding: 0 10px;
  overflow-x: hidden;
  overflow-y: auto;
}
.ui-ac-wrapp a.btn-ui-ac  {
  display: block;
  height: 100px;
  border: 1px solid #dfdfdf;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-circle {
  position: relative;
  float: left;
  width: 25%;
  height: 83px;
  margin: 4px -5px 0 -5px;
  padding: 0;
  border: 1px solid #dfdfdf;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-circle > img {
  position: relative;
  top: 50%;
  display: block;
  max-width: 100%;
  max-height: 100%;
  margin: 0 auto;
  vertical-align: middle;
  transform: translateY(-50%);
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text {
  position: relative;
  float: right;
  width: 75%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > h5,
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > p {
  word-break: break-word;
  white-space: normal;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > h5 {
  margin-top: 3px;
  margin-bottom: 3px;
  padding-left: 5px;
  padding-bottom: 2px;
  font-size: 15px;
  font-weight: 700;
  text-align: left;
  color: #333333;
  border-bottom: 1px solid #ddd;
}
.ui-ac-wrapp a.btn-ui-ac > div.ui-ac-text > p {
  width: 100%;
  margin: 0;
  padding-left: 5px;
  font-size: 12px;
  line-height: 13px;
  text-align: left;
  color: #333333;
}
.ui-ac-wrapp a.btn-ui-ac:hover {
  background: #29b2e1;
  border-color: #29b2e1;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-circle {
  background: #fff;
  border-color: #fff;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > h5,
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > p {
  color: #fff;
}
.ui-ac-wrapp a.btn-ui-ac:hover > div.ui-ac-text > h5 {
  border-color: #fff;
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
  <a href="cpanel/translate" title="Preklady">
    Preklady
  </a>
</li>
<li class="active">
  <a href="cpanel/translate-product/1/0/0/0/1/10" title="Preklad produktu">
    Preklad produktu
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-language" aria-hidden="true"></i>&nbsp;
    Preklad produktu
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
  <?php if (isset($_smarty_tpl->tpl_vars['article']->value)&&is_object($_smarty_tpl->tpl_vars['article']->value)) {?>
    <form action="cpanel/update-translate-product" method="post" role="form">
      <input type="hidden" name="articleId" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" />
      <input type="hidden" name="lang0" value="<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
" />
      <input type="hidden" name="lang1" value="<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
" />
      <input type="hidden" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" />
      <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
      <input type="hidden" name="limit" value="<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
" />
      <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">

        <!-- ARTICLE TITLE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-colorful">
            <div class="panel-heading ui-draggable-handle">
              <div class="poster">
                <?php if (isset($_smarty_tpl->tpl_vars['article']->value->image)&&is_object($_smarty_tpl->tpl_vars['article']->value->image)) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value->image->file_url;?>
" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value->image->file_name;?>
"/>
                <?php } else { ?>
                  <span><i class="glyphicon glyphicon-eye-open"></i></span>
                <?php }?>
              </div>
              <h3 class="panel-title" style="overflow: hidden;">
                <?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['article']->value->article_name_internal);?>

              </h3>                  
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                  <div class="form-group pull-left" style="width:660px;min-width: 400px;margin-right:5px;">
                    <div class="input-group">
                      <input type="text" name="q" value="" placeholder="Hľadaný výraz" class="form-control" autocomplete="off">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-info">
                          <i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div><!-- end input-group -->
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                  <div class="btn-group pull-right" role="group">
                    <a href="<?php if ($_smarty_tpl->tpl_vars['prevArticle']->value!=0) {?>cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['prevArticle']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];
} else { ?>#<?php }?>" <?php if ($_smarty_tpl->tpl_vars['prevArticle']->value==0) {?>onclick="return false;"<?php }?> class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['prevArticle']->value==0) {?>disabled<?php }?>>
                      <i class="fa fa-arrow-left"></i>
                    </a>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['nextArticle']->value!=0) {?>cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['nextArticle']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];
} else { ?>#<?php }?>" <?php if ($_smarty_tpl->tpl_vars['nextArticle']->value==0) {?>onclick="return false;"<?php }?> class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['nextArticle']->value==0) {?>disabled<?php }?>>
                      <i class="fa fa-arrow-right"></i>
                    </a>
                  </div>
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                  <p class="ax-message" style="padding: 15px 0;">
                    <i class="fa fa-cog"></i>&nbsp;Please wait...
                  </p>
                </div><!-- end col -->
              </div><!-- end row -->
              <div class="row ui-ac-wrapp"><!-- --></div><!-- end row -->
              <div class="row" style="margin-top: 15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="form-control select" onchange="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/'+this.options[this.selectedIndex].value+'/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
';">
                      <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productlangList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_lang==$_smarty_tpl->tpl_vars['langIds']->value[0]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->lang_name;?>
</option>
                      <?php } ?>
                    </select>
                  </div><!-- end form-group -->
                </div><!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="form-control select" onchange="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/'+this.options[this.selectedIndex].value;" data-live-search="true">
                      <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_lang==$_smarty_tpl->tpl_vars['langIds']->value[1]) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->lang_name;?>
</option>
                      <?php } ?>
                    </select>
                  </div><!-- end form-group -->
                </div><!-- end col -->
              </div><!-- end row -->
            </div><!-- end panel-body -->
          </div><!-- end panel -->
        </div><!-- end col -->
        <!-- // ARTICLE TITLE -->

        <!-- LEFT SIDE -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang)&&isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]])) {?>
            <div class="panel panel-primary">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->language_code;?>
"></span>
                  <?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->lang_name;?>

                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-form">
                <div class="form-group">
                  <label>
                    TITULKA STRÁNKY
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->language_code;?>
"></span>
                    </span>
                    <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->site_title)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->site_title;
}?>" class="form-control" disabled/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    NÁZOV PRODUKTU
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->language_code;?>
"></span>
                    </span>
                    <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->article_name)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->article_name;
}?>" class="form-control" disabled/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    POPIS
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->language_code;?>
"></span>
                    </span>
                    <textarea class="form-control" rows="5" disabled><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->description)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->description;
}?></textarea>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    META - KLÚČOVÉ SLOVÁ
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->language_code;?>
"></span>
                    </span>
                    <input type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->meta_keywords)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->meta_keywords;
}?>" class="form-control" disabled/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    META - POPIS
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->language_code;?>
"></span>
                    </span>
                    <textarea class="form-control" rows="5" disabled><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->meta_description)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->meta_description;
}?></textarea>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    HTML CONTENT
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['productlangList']->value[$_smarty_tpl->tpl_vars['langIds']->value[0]]->language_code;?>
"></span>
                    </span>
                    <textarea id="ckeditor_<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
" class="ckeditor" row="5"><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->html_content)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[0]]->html_content;
}?></textarea>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          <?php } else { ?>
            <div class="alert alert-info" role="alert">
              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?></strong>
              Zvoľte jazyk.
            </div><!-- end alert -->
          <?php }?>
        </div>
        <!-- //-- LEFT SIDE -->

        <!-- RIGHT SIDE -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang)&&($_smarty_tpl->tpl_vars['langIds']->value[1]!=0)) {?>
            <div class="panel panel-success">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                  <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->language_code;?>
"></span>
                  <?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->lang_name;?>

                </h3>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-form">
                <div class="form-group">
                  <label>
                    TITULKA STRÁNKY
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->language_code;?>
"></span>
                    </span>
                    <input type="text" name="site-title" value="<?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->site_title)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->site_title;
}?>" class="form-control"/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    NÁZOV PRODUKTU
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->language_code;?>
"></span>
                    </span>
                    <input type="text" name="article-name" value="<?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->article_name)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->article_name;
}?>" class="form-control" required/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    POPIS
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->language_code;?>
"></span>
                    </span>
                    <textarea name="description" class="form-control" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->description)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->description;
}?></textarea>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    META - KLÚČOVÉ SLOVÁ
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->language_code;?>
"></span>
                    </span>
                    <input type="text" name="meta-keywords" value="<?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->meta_keywords)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->meta_keywords;
}?>" class="form-control tagsinput"/>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    META - POPIS
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->language_code;?>
"></span>
                    </span>
                    <textarea name="meta-description" class="form-control" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->meta_description)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->meta_description;
}?></textarea>
                    <span class="input-group-addon">
                      <i class="fa fa-file-text-o"></i>
                    </span>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label>
                    HTML CONTENT
                  </label>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['langIds']->value[1]]->language_code;?>
"></span>
                    </span>
                    <textarea name="html-content" id="ckeditor_<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
" class="ckeditor" row="5"><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->html_content)) {
echo $_smarty_tpl->tpl_vars['article']->value->lang[$_smarty_tpl->tpl_vars['langIds']->value[1]]->html_content;
}?></textarea>
                  </div><!-- end input-group -->
                </div><!-- end form-group -->
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          <?php } else { ?>
            <div class="alert alert-info" role="alert">
              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?></strong>
              Zvoľte jazyk.
            </div><!-- end alert -->
          <?php }?>
        </div>
        <!-- //-- RIGHT SIDE -->
        
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

        <!-- ARTICLE LIST -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
          <?php if (isset($_smarty_tpl->tpl_vars['articleList']->value)&&(is_array($_smarty_tpl->tpl_vars['articleList']->value)&&(count($_smarty_tpl->tpl_vars['articleList']->value)>0))) {?>
            <div class="panel panel-default fix-panel">
              <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">
                <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value, 'UTF-8');
} else { ?>ARTICLE LIST<?php }?>
                </h3>
                <div class="pull-right">
                  <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
                </div>
              </div><!-- end panel-heading -->
              <div class="panel-body panel-body-table">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                    <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                      <select class="form-control select" onchange="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/'+this.options[this.selectedIndex].value+'/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
'<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {?>+'?q=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'<?php }?>;">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['sort']->value==0) {?>selected<?php }?>>Možnosťi zoradenia...</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['sort']->value==1) {?>selected<?php }?>>Názov produktu: od A po Z</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['sort']->value==2) {?>selected<?php }?>>Názov produktu: od Z po A</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['sort']->value==3) {?>selected<?php }?>>Ceny: od najnižšej</option>
                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['sort']->value==4) {?>selected<?php }?>>Ceny: od najvyššej</option>
                        <option value="5" <?php if ($_smarty_tpl->tpl_vars['sort']->value==5) {?>selected<?php }?>>Pridané produkty: vzostupne</option>
                        <option value="6" <?php if ($_smarty_tpl->tpl_vars['sort']->value==6) {?>selected<?php }?>>Pridané produkty: zostupne</option>
                        <option value="7" <?php if ($_smarty_tpl->tpl_vars['sort']->value==7) {?>selected<?php }?>>Publikované</option>
                        <option value="8" <?php if ($_smarty_tpl->tpl_vars['sort']->value==8) {?>selected<?php }?>>Nepublikované</option>
                      </select>
                    </div>
                    <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                      <select class="form-control select" onchange="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/1/'+this.options[this.selectedIndex].value<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {?>+'?q=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'<?php }?>;">
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
                        <input type="text" id="search" value="<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {
echo $_smarty_tpl->tpl_vars['keywords']->value;
}?>" placeholder="Hladať" class="form-control">
                        <span class="input-group-btn">
                          <button type="button" onclick="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                            <i class="fa fa-search"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                  </div><!-- end col -->
                </div><!-- end row -->
                <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                  <table class="table table-bordered table-striped table-actions">
                    <thead>
                      <tr>
                        <th width="30" class="text-center">
                          <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');
} else { ?>IMAGE<?php }?>
                        </th>
                        <th width="100" class="text-center">
                          <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');
} else { ?>SKU<?php }?>
                        </th>
                        <th class="text-left">
                          <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');
} else { ?>ARTICLE NAME<?php }?>
                        </th>
                        <th width="150" class="text-center">
                          PREKLAD
                        </th>
                      </tr>
                    </thead>
                    <tbody>   
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <tr>
                          <td class="text-center">
                            <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_name;?>
"/>
                            <?php } else { ?>
                              <span style="font-size:1.4em;color:red;">
                                <i class="glyphicon glyphicon-eye-open"></i>
                              </span>
                            <?php }?>
                          </td>
                          <td class="text-center">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>

                          </td>
                          <td class="text-left">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>

                          </td>
                          <td class="text-center">
                            <a href="cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
" class="btn btn-info">
                              <i class="fa fa-language" aria-hidden="true"></i>
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div><!-- end table-responsive -->
              </div><!-- end panel-body -->
            </div><!-- end panel -->
          <?php } else { ?>
            <div class="alert alert-info" role="alert">
              <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?></strong>
              Nie sú žiadne produkty.
            </div><!-- end alert -->
          <?php }?>
        </div><!-- end col -->
        <!-- ARTICLE LIST -->

        <button type="submit" id="btn-save" class="btn btn-success" role="button">
          <i class="fa fa-save"></i>
        </button>

      </div><!-- end row -->
    </form>
  <?php } else { ?>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
        <?php if (isset($_smarty_tpl->tpl_vars['articleList']->value)&&(is_array($_smarty_tpl->tpl_vars['articleList']->value)&&(count($_smarty_tpl->tpl_vars['articleList']->value)>0))) {?>
          <div class="panel panel-default fix-panel">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
              <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value, 'UTF-8');
} else { ?>ARTICLE LIST<?php }?>
              </h3>
              <div class="pull-right">
                <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
              </div>
            </div><!-- end panel-heading -->
            <div class="panel-body panel-body-table">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:15px 10px;">
                  <div class="form-group pull-left" style="width:280px;margin-right:5px;">
                    <select class="form-control select" onchange="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/'+this.options[this.selectedIndex].value+'/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
'<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {?>+'?q=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'<?php }?>;">
                      <option value="0" <?php if ($_smarty_tpl->tpl_vars['sort']->value==0) {?>selected<?php }?>>Možnosťi zoradenia...</option>
                      <option value="1" <?php if ($_smarty_tpl->tpl_vars['sort']->value==1) {?>selected<?php }?>>Názov produktu: od A po Z</option>
                      <option value="2" <?php if ($_smarty_tpl->tpl_vars['sort']->value==2) {?>selected<?php }?>>Názov produktu: od Z po A</option>
                      <option value="3" <?php if ($_smarty_tpl->tpl_vars['sort']->value==3) {?>selected<?php }?>>Ceny: od najnižšej</option>
                      <option value="4" <?php if ($_smarty_tpl->tpl_vars['sort']->value==4) {?>selected<?php }?>>Ceny: od najvyššej</option>
                      <option value="5" <?php if ($_smarty_tpl->tpl_vars['sort']->value==5) {?>selected<?php }?>>Pridané produkty: vzostupne</option>
                      <option value="6" <?php if ($_smarty_tpl->tpl_vars['sort']->value==6) {?>selected<?php }?>>Pridané produkty: zostupne</option>
                      <option value="7" <?php if ($_smarty_tpl->tpl_vars['sort']->value==7) {?>selected<?php }?>>Publikované</option>
                      <option value="8" <?php if ($_smarty_tpl->tpl_vars['sort']->value==8) {?>selected<?php }?>>Nepublikované</option>
                    </select>
                  </div>
                  <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                    <select class="form-control select" onchange="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/1/'+this.options[this.selectedIndex].value<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {?>+'?q=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
'<?php }?>;">
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
                      <input type="text" id="search" value="<?php if (strlen($_smarty_tpl->tpl_vars['keywords']->value)>0) {
echo $_smarty_tpl->tpl_vars['keywords']->value;
}?>" placeholder="Hladať" class="form-control">
                      <span class="input-group-btn">
                        <button type="button" onclick="location = 'cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/1/10?q='+document.getElementById('search').value;" class="btn btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                  <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                </div><!-- end col -->
              </div><!-- end row -->
              <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                <table class="table table-bordered table-striped table-actions">
                  <thead>
                    <tr>
                      <th width="30" class="text-center">
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');
} else { ?>IMAGE<?php }?>
                      </th>
                      <th width="100" class="text-center">
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');
} else { ?>SKU<?php }?>
                      </th>
                      <th class="text-left">
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');
} else { ?>ARTICLE NAME<?php }?>
                      </th>
                      <th width="150" class="text-center">
                        PREKLAD
                      </th>
                    </tr>
                  </thead>
                  <tbody>   
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                      <tr>
                        <td class="text-center">
                          <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_name;?>
"/>
                          <?php } else { ?>
                            <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                          <?php }?>
                        </td>
                        <td class="text-center">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>

                        </td>
                        <td class="text-left">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>

                        </td>
                        <td class="text-center">
                          <a href="cpanel/translate-product/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
" class="btn btn-info">
                            <i class="fa fa-language" aria-hidden="true"></i>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- end table-responsive -->
            </div><!-- end panel-body -->
          </div><!-- end panel -->
        <?php } else { ?>
          <div class="alert alert-info" role="alert">
            <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?></strong>
            Nie sú žiadne produkty.
          </div><!-- end alert -->
        <?php }?>
      </div><!-- end col -->
    </div><!-- end row -->
  <?php }?>

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
 type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/router.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  window.onscroll = function (e) {
    var vertical_position = 0;
    if (pageYOffset)//usual
      vertical_position = pageYOffset;
    else if (document.documentElement.clientHeight)//ie
      vertical_position = document.documentElement.scrollTop;
    else if (document.body)//ie quirks
      vertical_position = document.body.scrollTop;

    var topPosition = vertical_position + ((vertical_position == 0) ? 3 : 200);

    $('#btn-save').css({ top: topPosition + 'px' });
  };
  
  Search.init(false, <?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
);
  
  Router.init();
  
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function() {
  if($('#ckeditor_<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
').length > 0)
  {
    CKEDITOR.replace('ckeditor_<?php echo $_smarty_tpl->tpl_vars['langIds']->value[0];?>
', {
      "readOnly": true
    });
  }
  if($('#ckeditor_<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
').length > 0)
  {
    CKEDITOR.replace('ckeditor_<?php echo $_smarty_tpl->tpl_vars['langIds']->value[1];?>
', {
      "extraPlugins": "imagebrowser",
      "imageBrowser_listUrl": "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/cpanel/drive-api/build-image-register"
    });
  }
});  
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
