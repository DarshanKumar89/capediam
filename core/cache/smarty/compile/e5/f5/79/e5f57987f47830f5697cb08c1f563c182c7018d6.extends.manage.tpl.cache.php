<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 13:33:42
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/thumbnail/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6140955695798b836c98792-42737504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ba92cebb4c67de9f2c6325d7ae7707a44d704c5' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/thumbnail/manage.tpl',
      1 => 1469538178,
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
  'nocache_hash' => '6140955695798b836c98792-42737504',
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
  'unifunc' => 'content_5798b836dd74c7_68647166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798b836dd74c7_68647166')) {function content_5798b836dd74c7_68647166($_smarty_tpl) {?><!DOCTYPE html>
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
#loadingOverlay {
  position: relative;
}

#loadingOverlay.active .panel {
  display: none;
}
#loadingOverlay.active .loader {
  display: block;
}
#loadingOverlay .loader {
  display: none;
  position: absolute;
  top: 25%;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 800;
}
#loadingOverlay .loader .loader-svg {
  display: block;
  width: 200px;
  margin: 0 auto;
}
#loadingOverlay .loader p.text {
  font-size: 1.5em;
  font-weight: 600;
}
#messenger {
  display: none;
  font-size: 1.5em;
  font-weight: 700;
}
ol {
  margin: 15px 0 0 -25px;
}
ol li {
   margin-bottom: 5px;
}
.table-responsive.resize-list {
  overflow: initial !important;
}
.td-device {
  position: relative;
}
.td-device .device {
  position: absolute;
  top: 12px;
}
.td-device .device {
  font-size: 1.6em;
}
.td-device .device.all {
  top: 8px;
  left: -30px;
  color: #000;
}
.td-device .device.desktop {
  left: -30px;
  color: #95b75d;
}
.td-device .device.tablet {
  left: -27px;
  color: #fea223;
}
.td-device .device.mobile {
  left: -26px;
  color: #3fbae4;
}
.label {
  margin-right: 5px;
}
p.message.warning {
  background-color: #fea223;
  margin-bottom: 10px;
  padding: 15px;
  font-size: 1.4em;
  line-height: 21px;
  color: #FFF;
  border: 1px solid #fe9e19;
  border-radius: 4px;
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
  <a href="cpanel/thumbnail" title="<?php if (isset($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)&&(strlen($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)>0)) {
echo $_smarty_tpl->tpl_vars['store_section_thumbnail']->value;
} else { ?>Thumbnail<?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)&&(strlen($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)>0)) {
echo $_smarty_tpl->tpl_vars['store_section_thumbnail']->value;
} else { ?>Thumbnail<?php }?>
  </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
    <?php if (isset($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)&&(strlen($_smarty_tpl->tpl_vars['store_section_thumbnail']->value)>0)) {
echo $_smarty_tpl->tpl_vars['store_section_thumbnail']->value;
} else { ?>Thumbnail<?php }?>
    <span style="font-size: .7em;color:red;">&nbsp;<sup>Experimental</sup></span>
  </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<!-- THUMBNAIL AJAX MESSENGER -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div id="messenger" class="alert alert-info text-center" role="alert">
      <?php if (!empty($_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value)) {
echo $_smarty_tpl->tpl_vars['global_info_processing_please_wait']->value;
} else { ?>Processing, please wait ...<?php }?>
    </div>
  </div><!-- end col -->
</div><!-- end row -->
<!-- THUMBNAIL AJAX MESSENGER -->
<div id="loadingOverlay" class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 loader">
    <p>
      <img src="extensions/cpanel/img/triangle.svg" class="loader-svg">
    </p>
    <p class="text text-center">
      Spracovanie obrázkov, môže trvať dlhšiu dobu, 
      prosím čakajte a ponechajte otvorené okno webového prehliadača.
    </p>
  </div><!-- end loader -->
  <div id="reload">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="cpanel/create-resize-rule" method="post" role="form">
          <div class="panel panel-primary panel-toggled">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Vytvoriť pravidlo úpravy obrázkov
              </h3>
              <ul class="panel-controls">
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    ZARIADENIE
                    <span style="color:red;">*</span>
                  </label>
                  <select name="device" class="form-control select">
                    <option value="0">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                      <?php } else { ?>
                        Choose...
                      <?php }?>
                    </option>
                    <option value="1">
                      VŠETKY ZARIADENIA
                    </option>
                    <option value="2">
                      PC
                    </option>
                    <option value="3">
                      PC A TABLET
                    </option>
                    <option value="4">
                      TABLET
                    </option>
                    <option value="5">
                      MOBIL
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    VIEWPORT
                  </label>
                  <select name="viewport" class="form-control select">
                    <option value="0">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                      <?php } else { ?>
                        Choose...
                      <?php }?>
                    </option>
                    <option value="1">
                      min-width
                    </option>
                    <option value="2">
                      max-width
                    </option>
                    <option value="3">
                      min-height
                    </option>
                    <option value="4">
                      max-height
                    </option>
                    <option value="5">
                      min-width / max-width
                    </option>
                    <option value="6">
                      min-height / max-height
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    MIN [ <strong>PX</strong> ]
                  </label>
                  <input type="text"  name="min" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    MAX [ <strong>PX</strong> ]
                  </label>
                  <input type="text"  name="max" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    METÓDA ÚPRAVY OBRÁZKOV
                    <span style="color:red;">*</span>
                  </label>
                  <select name="resize" class="form-control select">
                    <option value="0">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                      <?php } else { ?>
                        Choose...
                      <?php }?>
                    </option>
                    <option value="1">
                      AUTO
                    </option>
                    <option value="2">
                      CROP
                    </option>
                    <option value="3">
                      EXACT
                    </option>
                    <option value="4">
                      LANDSCAPE
                    </option>
                    <option value="5">
                      PORTRAIT
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    ŠÍRKA [ <strong>PX</strong> ]
                    <span style="color:red;">*</span>
                  </label>
                  <input type="text"  name="width" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    VÝŠKA [ <strong>PX</strong> ]
                    <span style="color:red;">*</span>
                  </label>
                  <input type="text"  name="height" value="0" class="form-control text-right" style="width:100%;margin:0 auto;">
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-info" style="margin: 20px 0 0 0;" role="alert">
                  <ol>
                    <li>
                      <strong>AUTO:</strong> Systém automatický zvolí vhodnú úpravu veľkosti (CROP, EXACT) na vybrané fotky. 
                    </li>
                    <li>
                      <strong>CROP:</strong> Úprava veľkosti s orezom bez deformácie fotiek.
                    </li>
                    <li>
                      <strong>EXACT:</strong> Úprava veľkosti podľa zadaných parametrov šírka/výška. Pri zmene pomeru strán nastane deformácia fotiek.
                    </li>
                    <li>
                      <strong>LANDSCAPE:</strong> Úprava veľkosti podľa zadaného parametru šírka. Výška je prispôsobená automaticky podľa pomeru strán bez deformácie fotiek.
                    </li>
                    <li>
                      <strong>PORTRAIT:</strong> Úprava veľkosti podľa zadaného parametru výška. Šírka je prispôsobená automaticky podľa pomeru strán bez deformácie fotiek. 
                    </li>
                  </ol>
                </div><!-- end alert -->
              </div><!-- end col -->
            </div><!-- end panel-body -->
            <div class="panel-footer">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;
                <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
              </button>
            </div><!-- end panel-footer -->
          </div><!-- end panel -->
        </form>
      </div><!-- end col -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 50px;">
        <form action="cpanel/delete-resize-rules" method="post" role="form">
          <div class="panel panel-info">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Zoznam pravidiel na úpravu obrazkov
              </h3>
              <ul class="panel-controls">
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-table">
              <?php if (isset($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(is_array($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(count($_smarty_tpl->tpl_vars['resizeRuleList']->value)>0))) {?>
                <div class="table-responsive resize-list" style="border-top:1px solid #E5E5E5;">
                  <table id="resizeRuleList" class="table table-bordered table-striped table-actions">
                    <thead>
                      <tr>
                        <th class="text-center">
                          ID
                        </th>
                        <th class="text-center">
                          ZARIADENIE
                        </th>
                        <th class="text-center">
                          VIEWPORT
                        </th>
                        <th class="text-right">
                          MIN [ <strong>PX</strong> ]
                        </th>
                        <th class="text-right">
                          MAX [ <strong>PX</strong> ]
                        </th>
                        <th class="text-center">
                          METÓDA ÚPRAVY OBRÁZKOV
                        </th>
                        <th class="text-right">
                          ŠÍRKA [ <strong>PX</strong> ]
                        </th>
                        <th class="text-right">
                          VÝŠKA [ <strong>PX</strong> ]
                        </th>
                        <th class="text-center">
                          <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resizeRuleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <tr>
                          <td class="td-device text-center">
                            <input type="hidden" name="resizeRuleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
" />
                            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
</strong>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==1) {?>
                              <div class="device all">
                                <i class="fa fa-circle" aria-hidden="true"></i>
                              </div><!-- end divece -->
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==2) {?>
                              <div class="device desktop">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                              </div><!-- end divece -->
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==4) {?>
                              <div class="device tablet">
                                <i class="fa fa-tablet" aria-hidden="true"></i>
                              </div><!-- end divece -->
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==5) {?>
                              <div class="device mobile">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                              </div><!-- end divece -->
                            <?php }?>
                          </td>
                          <td class="text-left">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==1) {?>
                              VŠETKY ZARIADENIA
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==2) {?>
                              PC
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==3) {?>
                              PC A TABLET
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==4) {?>
                              TABLET
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->device==5) {?>
                              MOBIL
                            <?php }?>
                          </td>
                          <td class="text-left">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==0) {?>
                              -
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==1) {?>
                              min-width
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==2) {?>
                              max-width
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==3) {?>
                              min-height
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==4) {?>
                              max-height
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==5) {?>
                              min-width / max-width
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==6) {?>
                              min-height / max-height
                            <?php }?>
                          </td>
                          <td class="text-right">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->min_size;?>

                          </td>
                          <td class="text-right">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->max_size;?>

                          </td>
                          <td class="text-left">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==1) {?>
                              AUTO
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==2) {?>
                              CROP
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==3) {?>
                              EXACT
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==4) {?>
                              LANDSCAPE
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==5) {?>
                              PORTRAIT
                            <?php }?>
                          </td>
                          <td class="text-right">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->width;?>

                          </td>
                          <td class="text-right">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->height;?>

                          </td>
                          <td class="text-center">
                            <label class="switch">
                              <input type="checkbox" name="resizeRuleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['delete']" value="1">
                              <span></span>
                            </label>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div><!-- end table-responsive -->
              <?php } else { ?>
                <div class="alert alert-info" style="float: none;width: 99%;margin: 5px auto;" role="alert">
                  <strong>INFO!</strong>
                  Vytvorte pravidlo na úpravu obázkov.
                </div>
              <?php }?>
            </div><!-- end panel-body -->
            <?php if (isset($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(is_array($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(count($_smarty_tpl->tpl_vars['resizeRuleList']->value)>0))) {?>
              <div class="panel-footer">
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-save"></i>&nbsp;
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
                </button>
              </div><!-- end panel-footer -->
            <?php }?>
          </div><!-- end panel -->
        </form>
      </div><!-- end col -->
    </div><!-- end col -->
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0;">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form id="pForm" action="cpanel/create-resize-section" method="post" role="form">
          <div class="panel panel-primary panel-toggled">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Uplatniť na sekciu 
              </h3>
              <ul class="panel-controls">
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-form">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    SEKCIA
                    <span style="color:red;">*</span>
                  </label>
                  <select name="kind" class="form-control select">
                    <option value="0">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                      <?php } else { ?>
                        Choose...
                      <?php }?>
                    </option>
                    <option value="1">
                      Všetky sekcie
                    </option>
                    <option value="2">
                      Kategória
                    </option>
                    <option value="3">
                      Atribúty
                    </option>
                    <option value="4">
                      Hodnoty atribútov
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    SPÔSOB UPLATNENIA
                  </label>
                  <select name="type" class="form-control select">
                    <option value="0">
                      <?php if (isset($_smarty_tpl->tpl_vars['global_form_select_choose']->value)&&(strlen($_smarty_tpl->tpl_vars['global_form_select_choose']->value)>0)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>

                      <?php } else { ?>
                        Choose...
                      <?php }?>
                    </option>
                    <option value="1">
                      Zvoliť
                    </option>
                    <option value="2">
                      Všetko
                    </option>
                    <option value="3">
                      Všetko s výnimkou
                    </option>
                  </select>
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>
                    UPRESNENIE
                  </label>
                  <div id="specification">
                    <div class="alert alert-info text-center" role="alert" style="margin: 0;padding: 5px 15px;">
                      <i class="fa fa-ban" aria-hidden="true"></i>
                    </div>
                  </div><!-- end sv -->
                </div><!-- end form-group -->
              </div><!-- end col -->
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 15px;">
                <div class="form-group">
                  <label>
                    PRAVIDLÁ ÚPRAVY OBRÁZKOV
                    <span style="color:red;">*</span>
                  </label>
                  <?php if (isset($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(is_array($_smarty_tpl->tpl_vars['resizeRuleList']->value)&&(count($_smarty_tpl->tpl_vars['resizeRuleList']->value)>0))) {?>
                    <select name="rules[]" class="form-control select" multiple="true">
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resizeRuleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
">
                          [ <?php echo $_smarty_tpl->tpl_vars['item']->value->id_rule;?>
 ]
                          |
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->device==1) {?>
                            VŠETKY ZARIADENIA
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->device==2) {?>
                            PC
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->device==3) {?>
                            PC A TABLET
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->device==4) {?>
                            TABLET
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->device==5) {?>
                            MOBIL
                          <?php }?>
                          |
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==0) {?>
                            -
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==1) {?>
                            min-width
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==2) {?>
                            max-width
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==3) {?>
                            min-height
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==4) {?>
                            max-height
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==5) {?>
                            min-width / max-width
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->viewport==6) {?>
                            min-height / max-height
                          <?php }?>
                          |
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->min_size;?>

                          |
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->max_size;?>

                          |
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==1) {?>
                            AUTO
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==2) {?>
                            CROP
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==3) {?>
                            EXACT
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==4) {?>
                            LANDSCAPE
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->resize==5) {?>
                            PORTRAIT
                          <?php }?>
                          |
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->width;?>

                          |
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->height;?>

                        </option>
                      <?php } ?>
                    </select>
                  <?php } else { ?>
                    <div class="alert alert-danger text-center" role="alert" style="margin: 0;padding: 5px 15px;">
                      <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                    </div>
                  <?php }?>
                </div><!-- end form-group -->
              </div><!-- end col -->
            </div><!-- end panel-body -->
            <div class="panel-footer">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;
                <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
              </button>
            </div><!-- end panel-footer -->
          </div><!-- end panel -->
        </form>
      </div><!-- end col -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form action="cpanel/delete-thumbnails" method="post" role="form">
          <div class="panel panel-info">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                Zoznam sekcií
              </h3>
              <ul class="panel-controls">
                <li><a href="api/generate-thumbnail" target="_blank"><i class="fa fa-bolt" aria-hidden="true"></i></a></li>
                <li><a href="#" onclick="return false;" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>                
            </div><!-- end panel-header -->
            <div class="panel-body panel-body-table">
              <?php if (isset($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(is_array($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(count($_smarty_tpl->tpl_vars['thumbSectionList']->value)>0))) {?>
                <div class="table-responsive thumb-section-list" style="border-top:1px solid #E5E5E5;">
                  <table id="thumbSectionList" class="table table-bordered table-striped table-actions">
                    <thead>
                      <tr>
                        <th class="text-center">
                          ID
                        </th>
                        <th class="text-center">
                          SEKCIA
                        </th>
                        <th class="text-center">
                          SPÔSOB UPLATNENIA
                        </th>
                        <th class="text-center">
                          UPRESNENIE
                        </th>
                        <th class="text-center">
                          PRAVIDLÁ ÚPRAVY OBRÁZKOV [ IDs ]
                        </th>
                        <th class="text-center">
                          STATUS
                        </th>
                        <th class="text-center">
                          <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['thumbSectionList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <tr>
                          <td class="text-center">
                            <input type="hidden" name="thumbList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_thumb_section;?>
" />
                            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->id_thumb_section;?>
</strong>
                          </td>
                          <td class="text-left">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==1) {?>
                              Všetky sekcie
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==2) {?>
                              Kategória
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==3) {?>
                              Atribúty
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==4) {?>
                              Hodnoty atribútov
                            <?php }?>
                          </td>
                          <td class="text-center">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->type==1) {?>
                              Zvoliť
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['item']->value->type==0)||($_smarty_tpl->tpl_vars['item']->value->type==2)) {?>
                              Všetko
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->type==3) {?>
                              Všetko s výnimkou
                            <?php }?>
                          </td>
                          <td class="<?php if ($_smarty_tpl->tpl_vars['item']->value->kind==1) {?>text-center<?php } else { ?>text-left<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==1) {?>
                              <span style="font-size: 1.3em;color: #3fbae4;">
                                <i class="fa fa-ban" aria-hidden="true"></i>
                              </span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==2) {?>
                              <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->entity_list)&&(count($_smarty_tpl->tpl_vars['item']->value->entity_list)>0)) {?>
                                <?php  $_smarty_tpl->tpl_vars['entity_a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entity_a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entity_a']->key => $_smarty_tpl->tpl_vars['entity_a']->value) {
$_smarty_tpl->tpl_vars['entity_a']->_loop = true;
?>
                                  <span class="label label-info">
                                    <?php echo $_smarty_tpl->tpl_vars['entity_a']->value->category_name;?>

                                  </span>
                                <?php } ?>
                              <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==3) {?>
                              <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->entity_list)&&(count($_smarty_tpl->tpl_vars['item']->value->entity_list)>0)) {?>
                                <?php  $_smarty_tpl->tpl_vars['entity_b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entity_b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entity_b']->key => $_smarty_tpl->tpl_vars['entity_b']->value) {
$_smarty_tpl->tpl_vars['entity_b']->_loop = true;
?>
                                  <span class="label label-info">
                                    <?php echo $_smarty_tpl->tpl_vars['entity_b']->value->attribute_name_public;?>

                                  </span>
                                <?php } ?>
                              <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->kind==4) {?>
                              <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->entity_list)&&(count($_smarty_tpl->tpl_vars['item']->value->entity_list)>0)) {?>
                                <?php  $_smarty_tpl->tpl_vars['entity_c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entity_c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->entity_list; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entity_c']->key => $_smarty_tpl->tpl_vars['entity_c']->value) {
$_smarty_tpl->tpl_vars['entity_c']->_loop = true;
?>
                                  <span class="label label-info">
                                    <?php echo $_smarty_tpl->tpl_vars['entity_c']->value->value;?>

                                  </span>
                                <?php } ?>
                              <?php } else { ?>
                                -
                              <?php }?>
                            <?php }?>
                          </td>
                          <td class="text-left">
                            <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->resize_rules)&&(count($_smarty_tpl->tpl_vars['item']->value->resize_rules)>0)) {?>
                              <?php  $_smarty_tpl->tpl_vars['resize_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resize_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->resize_rules; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resize_rule']->key => $_smarty_tpl->tpl_vars['resize_rule']->value) {
$_smarty_tpl->tpl_vars['resize_rule']->_loop = true;
?>
                                <span class="label label-info">
                                  <?php echo $_smarty_tpl->tpl_vars['resize_rule']->value->id_rule;?>

                                </span>
                              <?php } ?>
                            <?php }?>
                          </td>
                          <td class="text-center">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->cron==0) {?>
                              <span style="font-size: 1.3em;color: #95b75d;">
                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                              </span>
                            <?php } else { ?>
                              <span style="font-size: 1.3em;color: #fea223;">
                                <i class="fa fa-history" aria-hidden="true"></i>
                              </span>
                            <?php }?>
                          </td>
                          <td class="text-center">
                            <label class="switch">
                              <input type="checkbox" name="thumbList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['delete']" value="1">
                              <span></span>
                            </label>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div><!-- end table-responsive -->
              <?php } else { ?>
                <div class="alert alert-info" style="float: none;width: 99%;margin: 5px auto;" role="alert">
                  <strong>INFO!</strong>
                  Definujte sekciu pre ktorú sa má uplatniť pravidlo na úpravu obrázkov.
                </div>
              <?php }?>
            </div><!-- end panel-body -->
            <?php if (isset($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(is_array($_smarty_tpl->tpl_vars['thumbSectionList']->value)&&(count($_smarty_tpl->tpl_vars['thumbSectionList']->value)>0))) {?>
              <div class="panel-footer">
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-save"></i>&nbsp;
                  <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
                </button>
              </div><!-- end panel-footer -->
            <?php }?>
          </div><!-- end panel -->
        </form>
      </div><!-- end col -->
    </div><!-- end col -->
  </div><!-- end reload -->
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
 type="text/javascript" src="extensions/cpanel/js/ext/Thumbnail.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  Thumbnail.init();
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
