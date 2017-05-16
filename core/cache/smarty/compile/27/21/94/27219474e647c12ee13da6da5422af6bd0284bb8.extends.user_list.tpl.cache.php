<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 11:48:47
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/users/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32584249957989f9f94aa62-55169724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ecd3f77d59d87f7fb575eba31dcfd17d467c4f9' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/users/user_list.tpl',
      1 => 1469528918,
      2 => 'file',
    ),
    '0b9f53588ea7ef2e382fb110a795947dfd61c5dd' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/navigation.tpl',
      1 => 1469528892,
      2 => 'file',
    ),
    '146e27fb27217e76249fb69f93d1c5b4436eb18d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/layout.tpl',
      1 => 1469528891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32584249957989f9f94aa62-55169724',
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
  'unifunc' => 'content_57989f9fa87cb3_99070062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57989f9fa87cb3_99070062')) {function content_57989f9fa87cb3_99070062($_smarty_tpl) {?><!DOCTYPE html>
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
ul.list-inline.additional-text {
    display: inline-block;
    float: right;
    width: 536px;
    margin: 2.5px 0 0 30px;
}
ul.panel-controls i {
    position: relative;
    top: 1.45px;
    left: .5px;
    font-size: 1.3em;
}
.colorpicker, .colorpicker * {
    z-index: 999999;
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
.circle-indicator.red {
    background: #b64645;
}
#delete {
    cursor: pointer;
}
table > thead > tr > th.enabled {
    background: green;
}
table > thead > tr > th.disabled {
    background: red;
}
table > thead > tr > th.enabled,
table > thead > tr > th.disabled {
    color: #fff;
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
  <li class="xn-openable active">
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_nav_store']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_store']->value;
} else { ?>Store<?php }?>">
      <i class="fa fa-building-o"></i>
      <span class="xn-text"><?php if (!empty($_smarty_tpl->tpl_vars['store_nav_store']->value)) {
echo $_smarty_tpl->tpl_vars['store_nav_store']->value;
} else { ?>Store<?php }?></span>
    </a>
    <ul>
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
    <a href="cpanel/store/users" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_users']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_users']->value;
} else { ?>Users<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_users']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_users']->value;
} else { ?>Users<?php }?>
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-users"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['store_section_users']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_section_users']->value, 'UTF-8');
} else { ?>Users<?php }?>&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom: 25px;">
    <div class="col-lg-12">
        <div class="btn-group" role="group">
            <a href="#" onclick="return false;" class="btn btn-primary"role="menuitem">
                <span><?php if (!empty($_smarty_tpl->tpl_vars['store_users_controls_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_controls_']->value;
} else { ?>Life Timeline<?php }?></span>
            </a>
            <a href="#" onclick="return false;" class="btn btn-info"role="menuitem">
                <span><?php if (!empty($_smarty_tpl->tpl_vars['store_users_controls_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_controls_']->value;
} else { ?>Address Book<?php }?></span>
            </a>
            <a href="#" onclick="return false;" class="btn btn-warning"role="menuitem">
                <span><?php if (!empty($_smarty_tpl->tpl_vars['store_users_controls_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_controls_']->value;
} else { ?>Groups<?php }?></span>
            </a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ignoreList" role="menuitem">
                <span><?php if (!empty($_smarty_tpl->tpl_vars['store_users_controls_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_controls_']->value;
} else { ?>Ignore List<?php }?></span>
            </button>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-info widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="<?php echo $_smarty_tpl->tpl_vars['widgets']->value->guest;?>
%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count"><?php echo $_smarty_tpl->tpl_vars['widgets']->value->guest;?>
</span>%</div>
                <div class="widget-title"><?php if (!empty($_smarty_tpl->tpl_vars['store_users_widget_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_widget_']->value;
} else { ?>Guest<?php }?></div>                             
            </div>                                                        
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-warning widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="<?php echo $_smarty_tpl->tpl_vars['widgets']->value->visitor;?>
%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count"><?php echo $_smarty_tpl->tpl_vars['widgets']->value->visitor;?>
</span>%</div>
                <div class="widget-title"><?php if (!empty($_smarty_tpl->tpl_vars['store_users_widget_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_widget_']->value;
} else { ?>Visitor<?php }?></div>                          
            </div>                                                       
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-success widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="<?php echo $_smarty_tpl->tpl_vars['widgets']->value->customer;?>
%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count"><?php echo $_smarty_tpl->tpl_vars['widgets']->value->customer;?>
</span>%</div>
                <div class="widget-title"><?php if (!empty($_smarty_tpl->tpl_vars['store_users_widget_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_widget_']->value;
} else { ?>Customer<?php }?></div>                               
            </div>                                                        
        </div> 
    </div><!-- end col -->
    <div class="col-lg-3 col-sm-6">
        <div class="widget widget-primary widget-padding-sm">                            
            <div class="widget-item-left">
                <input class="knob" data-width="100" data-height="100" data-min="0" data-max="100" data-displayInput=false data-bgColor="#C0C0C0" data-fgColor="#FFF" value="<?php echo $_smarty_tpl->tpl_vars['widgets']->value->banned;?>
%" data-readOnly="true" data-thickness=".2"/>
            </div>
            <div class="widget-data">
                <div class="widget-big-int"><span class="num-count"><?php echo $_smarty_tpl->tpl_vars['widgets']->value->banned;?>
</span>%</div>
                <div class="widget-title"><?php if (!empty($_smarty_tpl->tpl_vars['store_users_widget_']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_widget_']->value;
} else { ?>Banned<?php }?></div>                              
            </div>                                                      
        </div> 
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <?php if (!empty($_smarty_tpl->tpl_vars['userList']->value)) {?>
            <form action="cpanel/store/users/update-all" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_section_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_section_']->value, 'UTF-8');
} else { ?>USER LIST<?php }?>&nbsp;
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="cpanel/store/users/0/0" style="background-color:#000;color:#fff;" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_label_all']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_all']->value, 'UTF-8');
} else { ?>ALL<?php }?>">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/users/0/1" style="background-color:#3fbae4;color:#fff;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>GUEST<?php }?>">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/users/0/2" style="background-color:#fea223;color:#fff;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>VISITOR<?php }?>">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="cpanel/store/users/0/3" style="background-color:#95b75d;color:#fff;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>CUSTOMER<?php }?>">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>                          
                            <li>
                                <a href="cpanel/store/users/0/4" style="background-color:#b64645;color:#fff;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>BANNED<?php }?>">
                                    <i class="fa fa-bullseye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="return false;" class="panel-collapse">
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="row">
                            <div class="col-lg-12" style="padding:15px 10px;">
                                <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                    <select class="form-control select" onchange="location = 'cpanel/store/users/<?php echo $_smarty_tpl->tpl_vars['filterA']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['filterB']->value;?>
/1/'+this.options[this.selectedIndex].value;" required="">
                                        <option value="all" <?php if ($_smarty_tpl->tpl_vars['limit']->value=='all') {?>selected<?php }?>>všetko</option>
                                        <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value==10) {?>selected<?php }?>>10</option>
                                        <option value="20" <?php if ($_smarty_tpl->tpl_vars['limit']->value==20) {?>selected<?php }?>>20</option>
                                        <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit']->value==50) {?>selected<?php }?>>50</option>
                                        <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit']->value==100) {?>selected<?php }?>>100</option>
                                        <option value="200" <?php if ($_smarty_tpl->tpl_vars['limit']->value==200) {?>selected<?php }?>>200</option>
                                        <option value="500" <?php if ($_smarty_tpl->tpl_vars['limit']->value==500) {?>selected<?php }?>>500</option>
                                        <option value="1000" <?php if ($_smarty_tpl->tpl_vars['limit']->value==1000) {?>selected<?php }?>>1000</option>
                                    </select>
                                </div>
                                <div class="form-group pull-left" style="width:400px;margin-right:5px;">
                                    <div class="input-group">
                                        <input type="text" id="search" value="" placeholder="Hladať" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

                            </div>
                        </div><!-- end row -->
                        <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                            <table id="userList" class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>GROUP<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>DEVICE<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>OS SYSTEM<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>BROWSER<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>LANGUAGE<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>CONTINENT<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>COUNTRY CODE<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>COUNTRY NAME<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>CITY<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>VIEW ON MAP<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>TIMEZONE<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>TIMEZONE DETAIL<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>SCREEN RESOLUTION<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>ADDRESS<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_users_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_table_header_']->value, 'UTF-8');
} else { ?>BANNED<?php }?>
                                        </th>
                                        <th id="delete" class="text-center enabled">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                        <tr>
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="users[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['user-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_user;?>
"/>
                                                <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

                                            </td>
                                            <td class="text-center">
                                                <span class="circle-indicator <?php if ($_smarty_tpl->tpl_vars['item']->value->is_guest==1) {?>blue<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->is_visitor==1) {?>orange<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->is_customer==1) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->is_banned==1) {?>red<?php } else { ?>black<?php }?>">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value->is_computer==1) {?>
                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-desktop"></i>
                                                    </span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value->is_tablet==1) {?>
                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-tablet"></i>
                                                    </span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value->is_mobile==1) {?>
                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-mobile"></i>
                                                    </span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value->is_mobile_device==1) {?>
                                                    <span style="font-size:1.4em;font-weight:700;color:#95b75d;">
                                                        <i class="fa fa-mobile"></i>
                                                    </span>
                                                <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value->operating_system;?>

                                            </td>
                                            <td class="text-center">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value->web_browser;?>

                                            </td>
                                            <td class="text-center">
                                                <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['item']->value->language_code;?>
" style="position: relative;top: -7px;width:23px;height:23px;"></span>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value->continent;?>

                                            </td>
                                            <td class="text-center">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value->country_code;?>

                                            </td>
                                            <td class="text-center">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>

                                            </td>
                                            <td class="text-center">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->city)) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->city;?>

                                                <?php } else { ?>
                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showMap(<?php echo $_smarty_tpl->tpl_vars['item']->value->latitude;?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value->longitude;?>
);" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-globe"></i>
                                                    <span>Google Map</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->timezone)) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->timezone;?>

                                                <?php } else { ?>
                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                <?php }?>
                                                
                                            </td>
                                            <td class="text-center">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->timezone_name)) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->timezone_name;?>

                                                <?php } else { ?>
                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-ban"></i>
                                                    </span>
                                                <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->screen_resolution_x;?>
x<?php echo $_smarty_tpl->tpl_vars['item']->value->screen_resolution_y;?>
</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="showAddress(<?php echo $_smarty_tpl->tpl_vars['item']->value->id_user;?>
)" class="btn btn-warning btn-sm btn-block">
                                                    <i class="fa fa-tty"></i>
                                                    <span>Address</span>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['banned']" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value->is_banned==1) {?>checked=""<?php }?>>
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="text-center">
                                                <label class="switch">
                                                    <input type="checkbox" name="users[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['remove']" value="1" class="sw-delete">
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div><!-- end table-responsive -->
                    </div><!-- end panel-body -->
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
                        </button>
                        <ul class="list-inline additional-text">
                            <li>
                                <span class="circle-indicator black">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_label_all']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_label_all']->value, 'UTF-8');
} else { ?>ALL<?php }?>                                  
                            </li>
                            <li>
                                <span class="circle-indicator blue">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>GUEST<?php }?>                          
                            </li>
                            <li>
                                <span class="circle-indicator orange">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>VISITOR<?php }?>                                    
                            </li>
                            <li>
                                <span class="circle-indicator green">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>CUSTOMER<?php }?>                    
                            </li>
                            <li>
                                <span class="circle-indicator red">
                                    <i class="fa fa-bullseye"></i>
                                </span>
                            </li>
                            <li>
                                <?php if (!empty($_smarty_tpl->tpl_vars['store_users_label_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_users_label_']->value, 'UTF-8');
} else { ?>BANNED<?php }?>                    
                            </li>
                        </ul>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
            </form>
        <?php } else { ?>
            <div class="alert alert-info" role="alert">
                <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                <?php if (!empty($_smarty_tpl->tpl_vars['store_users_alert_no_users']->value)) {
echo $_smarty_tpl->tpl_vars['store_users_alert_no_users']->value;
} else { ?>There are no users.<?php }?>
            </div>
        <?php }?>
    </div><!-- end col -->
</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW GOOGLE MAP -->
<div class="modal" id="modal_google_map" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;padding:0;"><!-- --></div>
            <div class="panel-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                </button>
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL WINDOW GOOGLE MAP -->
<!-- MODAL WINDOW ADDRESS -->
<div class="modal" id="modal_address" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:#FFFFFF;padding:0px;"><!-- --></div>
            <div class="panel-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                </button>
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL WINDOW ADDRESS -->
<!-- MODAL WINDOW IGNORE LIST -->                          
<div class="modal" id="ignoreList" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;"> 
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_']->value, 'UTF-8');
} else { ?>IGNORE LIST<?php }?>&nbsp;<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['ignoreList']->value);?>

                        </h3>                               
                    </div>
                    <div class="panel-body panel-body-form panel-body-table">
                        <div class="row">
                            <div class="col-lg-12" style="margin:15px 0;">
                                <form id="il-add">
                                    <div class="form-group">
                                        <label>
                                            IP ADDRESS
                                        </label>
                                        <div class="input-group">
                                            <input type="text" name="ip-address" value="" placeholder="0.0.0.0" class="form-control">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-warning" type="button">ADD</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <?php if (!empty($_smarty_tpl->tpl_vars['ignoreList']->value)) {?>

                        <?php } else { ?>
                            <div class="alert alert-info" style="margin:15px 0;" role="alert">
                                <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                                Ignore list is empty.
                            </div>
                        <?php }?>
                     </div>
                    <div class="panel-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
            </div>
        </div>
    </div>
</div>  
<!-- //-- MODAL IGNORE LIST -->

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
 type="text/javascript">
    
    function showMap(latitude,longitude) {
        $('#modal_google_map').find('.modal-body').empty().html(getMap(latitude,longitude));
        $('#modal_google_map').modal('show');
    }

    function showAddress( userId ) {
        $.ajax({
            url: 'cpanel/store/users/address',
            type: 'POST',
            data: { userId: userId },                
            success: function(html) {
                $('#modal_address').find('.modal-body').empty().html(html);
                $('#modal_address').modal('show');
            },
            error: function(e) {
                console.log(e);
                alert('ERROR LOAD DATA');
            },
            dataType: 'HTML'
        });
    }

    function getMap(latitude,longitude) {
        var src    = "http://maps.googleapis.com/maps/api/staticmap?",
          params = {
            center: latitude+','+longitude,
            zoom: 10,
            size: '600x630',
            maptype: 'roadmap',
            sensor: false
          },
          query = [];
        $.each(params, function(k, v) {
        query.push(k + '=' + encodeURIComponent(v));
        });

        src += query.join('&');
        return '<img src="' + src + '" width="600" height="630" />';
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function() { 
    $('#ignoreList').on('submit', function() {
        var form = $(this);
        
        return false;
    });

    $('#search').keyup(function() {
        searchTable($(this).val());
    });

    $('#delete').on('click', function() {
        if($(this).hasClass('enabled')) {
            $(this).removeClass('enabled').addClass('disabled');
        } else {
            $(this).removeClass('disabled').addClass('enabled');
        }
        $('#userList tbody').find('tr').each(function() {
            if($(this).is(':visible')) {
                var switcher = $(this).find('.sw-delete');

                if(switcher.is(':checked')) {
                    switcher.prop("checked", false);
                } else {
                    switcher.prop("checked", true);
                }
            }
        });
    });

    function searchTable(inputVal)
    {
        var table = $('#userList');
            table.find('tr').each(function(index, row) {
                var allCells = $(row).find('td');
                if(allCells.length > 0)
                {
                    var found = false;
                    allCells.each(function(index, td)
                    {
                        var regExp = new RegExp(inputVal, 'i');
                        if(regExp.test($(td).text()))
                        {
                            found = true;
                            return false;
                        }
                    });
                    if(found == true)$(row).show();else $(row).hide();
                }
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
