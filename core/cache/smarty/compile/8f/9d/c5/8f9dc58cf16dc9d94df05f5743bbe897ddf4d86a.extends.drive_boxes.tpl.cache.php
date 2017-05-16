<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 13:24:54
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/drive/drive_boxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15680429895798b62621b278-77878244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a5d171165be08786c398aa6ffe2db759523956' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/drive/drive_boxes.tpl',
      1 => 1469528890,
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
  'nocache_hash' => '15680429895798b62621b278-77878244',
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
  'unifunc' => 'content_5798b62631b960_34510794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798b62631b960_34510794')) {function content_5798b62631b960_34510794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.truncate.php';
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
        
<link rel="stylesheet" href="extensions/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/gl-drive-sp-lib.css"/>
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/drive.css"/>
<link rel="stylesheet" type="text/css" href="extensions/mtree/mtree.css"/>
<style>
.page-container .page-content .page-content-wrap {
    position: relative;
    min-width: 1140px;
}
ul.breadcrumb.xh1 > li,
ul.breadcrumb.xh1 > li > a {
    display: inline-block;
    color: #fff;
    font-size: 15px;
    line-height: 100%;
    height: 100%;
    padding: 5px 0;
}
ul.breadcrumb.xh1 > li.n-s {
    color:red;
    cursor: pointer;
}
.breadcrumb.xh1 > li + li:before {
    color: red;
}
.breadcrumb.xh1 > li:nth-child(1) + li:before {
    color: #000;
}
.xt {
    position: relative;
    top: -1px;
    margin-top: 0px;
    padding: 4px 10px;
    min-width: 29px;
    height: 29px;
    max-height: 29px;
    font-size: 17px;
    font-weight: 400;
    line-height: 19px;
    overflow: hidden;
}
.badge {
    background-color: #000000;
    position: relative;
    top: 2px;
    left: 15px;
    padding: 2.5px 10px;
    font-size: 13px;
    color: #fff;
}
.x1 {
    width: 188.281px;
    min-width: 188.281px;
    max-width: 188.281px;
    padding: 0 15px;
    overflow: hidden;
}
.leftNav {
    background: #17191e;
    display: none;
    position: absolute;
    top: 88px;
    left: 10px;
    bottom: 0;
    width: 20%;
    max-width: 20%;
    min-height: 100%;
    padding-top: 25px;
    z-index: 999;
    overflow-x: hidden;
    overflow-y: auto;
}
.t-f-w {
    display: inline-block;
    position: absolute;
    top: -19px;
    right: 11px;
    width: 100%;
}
.t-f-i-f {
    position: relative;
    display: inline-block;
    width: 70px;
    float: right;
    padding: 0 5px;
    text-align: right;
}
.t-f-i-f > span {
    font-size: 13px;
    color: #fff;
}
.t-f-i-f > i {
    position: absolute;
    top: 2px;
    left: 4px;
}
.k-v-wa-xa-m {
    min-height: 130px;
}
.f-i-w {
    display: inline-block;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    width: auto;
    height: auto;
    max-width: 190px;
    max-height: 130px;
    margin: 0 auto;
}
.l-n-lo {
    line-height: 28px;
    text-align: center;
    color: #fff;
}

@media (min-width:1700px) and (max-width: 1800px) {
    #drive-area .col-lg-2 {
        float: left;
        width: 27%;
    }
}
@media (max-width: 1700px) {
    #drive-area .col-lg-2 {
        float: left;
        width: 29.5%;
    }
    #controls .col-lg-5 {
        float:left;
        width: 40%;
    }
    #controls .col-lg-2 {
        float:left;
        width: 20%;
    }
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
    <a href="cpanel/my-drive" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>
    </a>
</li>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foldersStructure']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li class="active">
    <a href="cpanel/my-drive-folder/<?php echo $_smarty_tpl->tpl_vars['item']->value['folder_hash'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['item']->value['folder_name'];?>

    </a>
</li>
<?php } ?>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
    <h2>
        <i class="fa fa-hdd-o"></i>&nbsp;
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>&nbsp;
        <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
    </h2>
</div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="leftNav">
    <div class="l-n-lo">
        <span class="fa fa-cog"></span>&nbsp;Loading please wait...
    </div>
    <div class="l-n-c">
        
    </div>
</div>
<div id="controls" class="row">
    <div class="col-lg-5 t-p-h">
        <div class="btn-group" role="group">
            <a href="#" onclick="return false;" class="btn btn-info mb-control" role="menuitem" data-box="#message-box-create-folder" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_drive_controls_button_new_folder']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_controls_button_new_folder']->value;
} else { ?>New Folder<?php }?>">
                <i class="fa fa-plus"></i>
                <span>
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_controls_button_new_folder']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_controls_button_new_folder']->value;
} else { ?>New Folder<?php }?>
                </span>
            </a>
            <a href="cpanel/my-drive-upload-file/<?php if ($_smarty_tpl->tpl_vars['folderId']->value==1) {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['folderId']->value;?>
" class="btn btn-warning" role="menuitem"
               title="<?php if (!empty($_smarty_tpl->tpl_vars['global_drive_controls_button_files_upload']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_controls_button_files_upload']->value;
} else { ?>Files upload<?php }?>"
               >
                <i class="fa fa-cloud-upload"></i>
                <span>
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_controls_button_files_upload']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_controls_button_files_upload']->value;
} else { ?>Files upload<?php }?>
                </span>
            </a>
            <a href="cpanel/my-drive-trash" class="btn btn-danger" role="menuitem" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_drive_controls_button_trash']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_controls_button_trash']->value;
} else { ?>Trash<?php }?>">
                <i class="fa fa-trash-o"></i>
                <span>
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_controls_button_trash']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_controls_button_trash']->value;
} else { ?>Trash<?php }?>
                </span>
            </a>
        </div>
    </div>
    <div class="col-lg-5">
        <form role="form" id="drive-search" class="form-horizontal">
            <div class="form-group">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" name="search" value="" placeholder="<?php if (!empty($_smarty_tpl->tpl_vars['global_drive_form_label_search_on_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_form_label_search_on_drive']->value;
} else { ?>Search on drive<?php }?>" class="form-control" required>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-2">
        <div class="btn-group pull-right" role="group">
            <a href="cpanel/my-drive" class="btn btn-default" title="boxes">
               <i class="fa fa-th"></i> 
            </a>
            <a href="cpanel/my-drive-list" class="btn btn-default" title="list">
                <i class="fa fa-list"></i>
            </a>
          </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-right:5px;">
        <ul class="breadcrumb xh1" style="background:#17191e;margin:15px 0;border-radius:5px;">
            <li class="n-s">
                <span class="fa fa-bars"></span>
            </li>
            <li>
                <a href="cpanel/my-drive" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_section_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_drive']->value;
} else { ?>My Drive<?php }?>
                </a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foldersStructure']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li class="active">
                    <a href="cpanel/my-drive-folder/<?php echo $_smarty_tpl->tpl_vars['item']->value['folder_hash'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['folder_name'];?>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </div><!-- end col -->
</div><!-- end row -->
<div id="drive-area" data-target="layout">
    <?php if (count($_smarty_tpl->tpl_vars['folderList']->value)>0) {?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <span class="btn btn-info pull-left xt">
                            <?php echo $_smarty_tpl->tpl_vars['total1']->value;?>

                        </span>
                        <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                            <span style="display:block;font-size:1.4em;float:left;">
                                <i class="fa fa-folder"></i>&nbsp;
                                <span style="font-weight:100;color:#000;">Priečinky</span>
                            </span>
                        </h3>
                        <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info1']->value;?>
</span>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group pull-left" style="width:80px;margin-right:25px;">
                    <select class="form-control select" onchange="location = 'cpanel/my-drive-folder/<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
/1/'+this.options[this.selectedIndex].value+'/<?php echo $_smarty_tpl->tpl_vars['page2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit2']->value;?>
';">
                        <option value="all" <?php if ($_smarty_tpl->tpl_vars['limit1']->value=='all') {?>selected<?php }?>>všetko</option>
                        <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit1']->value==10) {?>selected<?php }?>>10</option>
                        <option value="30" <?php if ($_smarty_tpl->tpl_vars['limit1']->value==30) {?>selected<?php }?>>30</option>
                        <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit1']->value==50) {?>selected<?php }?>>50</option>
                        <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit1']->value==100) {?>selected<?php }?>>100</option>
                        <option value="200" <?php if ($_smarty_tpl->tpl_vars['limit1']->value==200) {?>selected<?php }?>>200</option>
                        <option value="500" <?php if ($_smarty_tpl->tpl_vars['limit1']->value==500) {?>selected<?php }?>>500</option>
                        <option value="1000" <?php if ($_smarty_tpl->tpl_vars['limit1']->value==1000) {?>selected<?php }?>>1000</option>
                    </select>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['pagination1']->value;?>

            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row" style="min-height:275px;" role="presentation">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['folderList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div    class="col-lg-2 a-v-yc-m"
                        style="min-width:186px;margin-top:30px;"
                        role="option" 
                        tabindex="-1" 
                        title="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
" 
                        draggable="true"
                        data-target="doc"
                        data-is-doc-name="true"
                        data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_hash;?>
"
                        data-type="1"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
"
                        aria-selected="false"
                >
                    <div class="t-f-w">
                        <div class="t-f-i-f btn-info">
                            <i class="fa fa-file"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value->totalFiles;?>
</span>
                        </div>
                        <div class="t-f-i-f btn-success">
                            <i class="fa fa-folder"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value->totalFolders;?>
</span>
                        </div>
                    </div>
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-n" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
 MyDrive Folder Not selected">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-n-d-m">
                            <div class="k-v-n-d">
                                <div class="k-n-d-we" aria-label="KCMS  MyDrive Folder">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#8f8f8f" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="k-v-n-d-pn">
                                <div class="k-n-d-we" aria-label="">
                                    <svg height="16px" width="16px" viewBox="0 -1 16 16" focusable="false">
                                        <g>
                                            <path fill="#ffffff" d="M6.4,0H1.6C0.716,0,0,0.596,0,1.562V12.25C0,13.216,0.716,14,1.6,14h12.8 c0.884,0,1.6-0.784,1.6-1.75V3.5 c0-0.966-0.721-1.499-1.604-1.499L8,2L6.4,0z"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="k-v-n-L-m">
                            <div class="k-v-L" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->folder_name;?>
">
                                <span class="k-wa-P-x"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->folder_name,50,"...",true);?>
</span>
                            </div>
                        </div>
                        <div class="k-v-n-Na-Lb"></div>
                    </div>
                </div>
            <?php } ?>
        </div><!-- end row (folder section) -->
    <?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['fileList']->value)>0) {?>
        <div class="row" style="margin-top:25px;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <span class="btn btn-info pull-left xt">
                            <?php echo $_smarty_tpl->tpl_vars['total2']->value;?>

                        </span>
                        <h3 class="panel-title text-uppercase" style="overflow: hidden;">
                            <span style="display:block;font-size:1.4em;float:left;">
                                <i class="fa fa-file"></i>&nbsp;
                                <span style="font-weight:100;color:#000;">Súbory</span>
                            </span>
                        </h3>
                        <span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info2']->value;?>
</span>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group pull-left" style="width:80px;margin-right:25px;">
                    <select class="form-control select" onchange="location = 'cpanel/my-drive-folder/<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page1']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['limit1']->value;?>
/1/'+this.options[this.selectedIndex].value;">
                        <option value="all" <?php if ($_smarty_tpl->tpl_vars['limit2']->value=='all') {?>selected<?php }?>>všetko</option>
                        <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit2']->value==10) {?>selected<?php }?>>10</option>
                        <option value="30" <?php if ($_smarty_tpl->tpl_vars['limit2']->value==30) {?>selected<?php }?>>30</option>
                        <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit2']->value==50) {?>selected<?php }?>>50</option>
                        <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit2']->value==100) {?>selected<?php }?>>100</option>
                        <option value="200" <?php if ($_smarty_tpl->tpl_vars['limit2']->value==200) {?>selected<?php }?>>200</option>
                        <option value="500" <?php if ($_smarty_tpl->tpl_vars['limit2']->value==500) {?>selected<?php }?>>500</option>
                        <option value="1000" <?php if ($_smarty_tpl->tpl_vars['limit2']->value==1000) {?>selected<?php }?>>1000</option>
                    </select>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['pagination2']->value;?>

            </div><!-- end col -->
        </div><!-- end row -->
        <div id="l-i-f-f-b-i-m-p" class="row" style="min-height:275px;" role="presentation">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div    class="x1 a-v-yc-m d-f-g-b-i-m"
                        style="margin-top:16px;"
                        role="option" 
                        tabindex="-1"
                        title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
"
                        data-target="doc" 
                        data-is-doc-name="true" 
                        draggable="true" 
                        data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_hash;?>
"
                        data-type="2"
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        data-original-title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
"
                        aria-selected="false"
                >
                    <div class="a-v-yc-Jj-od-Fd"></div>
                    <div class="k-v-yc k-v-wa k-Yh-Zd">
                        <div class="k-G-ia-yi"></div>
                        <div class="k-v-wa-xa-m">
                            <div class="k-v-wa-xa rb-ub-zn-jd">
                                <div class="k-v-wa-xa-Vo-Fd"></div>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==1) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_url;?>
" onclick="return false;" class="img-item" rel="group" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
">
                                        <img class="k-v-wa-xa-za f-i-w" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_url;?>
" height="130" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
">
                                    </a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==2) {?>
                                    <img class="k-v-wa-xa-za" src="extensions/cpanel/img/drive/icons/pdficon.png" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
">
                                <?php }?>
                            </div>
                        </div>
                        <div class="k-v-wa-P-m">
                            <div class="k-v-wa-P" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;
echo $_smarty_tpl->tpl_vars['item']->value->file_ext;?>
 Image Not selected">
                                <div class="k-v-wa-d">
                                    <div class="a-d">
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==1) {?>
                                            <img src="extensions/cpanel/img/drive/icons/icon_1_image_x16.png" alt="Image">
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->file_type_id==2) {?>
                                            <img src="extensions/cpanel/img/drive/icons/icon_2_pdf_x16" alt="Pdf">
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="k-v-L" aria-label="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;
echo $_smarty_tpl->tpl_vars['item']->value->file_ext;?>
">
                                    <span class="k-wa-P-x">
                                        <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->file_name)>25) {?>
                                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->file_name,25,"...",true);?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;
echo $_smarty_tpl->tpl_vars['item']->value->file_ext;?>

                                        <?php }?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div><!-- end row (files section) -->
    <?php }?>
</div><!-- end drive-area -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        

<div class="d-n-m">
    <span class="d-n-m-t-l">
        <span></span>
    </span>
</div>

<!-- RIGHT MOUSE NAV -->
<div class="d-r-n" aria-haspopup="true" tabindex="-1">
    <ul class="nav nav-pills nav-stacked" role="menu">
        <li role="menuitem" data-menu-item="open">
            <a href="#" onclick="return false;">
                <span class="fa fa-desktop"></span>
                <span class="d-r-n-m-i-t t-1x-f">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_open_in_new_window']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_open_in_new_window']->value;
} else { ?>Open in new window<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="newFolder">
            <a href="#" onclick="return false;">
                <span class="fa fa-plus"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_new_folder']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_new_folder']->value;
} else { ?>New Folder...<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="share">
            <a href="#" onclick="return false;">
                <span class="fa fa-user"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_share']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_share']->value;
} else { ?>Share...<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="link">
            <a href="#" onclick="return false;">
                <span class="fa fa-external-link"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_get_link']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_get_link']->value;
} else { ?>Get link<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="move">
            <a href="#" onclick="return false;">
                <span class="fa fa-folder"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_move_to']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_move_to']->value;
} else { ?>Move to...<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="star">
            <a href="#" onclick="return false;">
                <span class="fa fa-star"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_add_star']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_add_star']->value;
} else { ?>Add star<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="color">
            <a href="#" onclick="return false;">
                <span class="d-r-n-m-i-t t-2x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_change_color']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_change_color']->value;
} else { ?>Change color...<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="rename">
            <a href="#" onclick="return false;">
                <span class="d-r-n-m-i-t t-2x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_rename']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_rename']->value;
} else { ?>Rename...<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="dowloand">
            <a href="#" onclick="return false;">
                <span class="fa fa-download"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_download']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_download']->value;
} else { ?>Download<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="remove">
            <a href="#" onclick="return false;">
                <span class="fa fa-trash-o"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_remove']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_remove']->value;
} else { ?>Remove<?php }?>
                </span>
            </a>
        </li>
    </ul>
</div>
<!-- END RIGHT MOUSE NAV -->

<!-- MODAL WINDOW CREATE FOLDER -->
<div class="message-box message-box-info animated fadeIn" id="message-box-create-folder">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title">
                <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_controls_button_new_folder']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_controls_button_new_folder']->value;
} else { ?>New Folder<?php }?>
            </div>
            <div class="mb-content">
                <div class="row">
                    <div class="col-lg-12">    
                        <form role="form" action="cpanel/create-folder" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="hidden" name="is_root" value="<?php if ($_smarty_tpl->tpl_vars['folderId']->value==1) {?>1<?php } else { ?>0<?php }?>"/>
                                        <input type="hidden" name="folder-id" value="<?php echo $_smarty_tpl->tpl_vars['folderId']->value;?>
"/>
                                        <input type="text" name="folder-name" value="" placeholder="Folder name" autocomplete="off" class="form-control" required>
                                    </div>                                            
                                    <span class="help-block" style="color:#000;">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_modal_window_form_help_enter_folder_name']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_modal_window_form_help_enter_folder_name']->value;
} else { ?>Enter a folder name.<?php }?>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
                                    </button>
                                    <button type="button" class="btn btn-default mb-control-close" data-dismiss="modal">
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
<!-- //-- MODAL WINDOW CREATE FOLDER -->

<!-- MODAL WINDOW RENAME FOLDER -->
<div class="message-box message-box-info animated fadeIn" id="message-box-rename">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title">
                <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_rename']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_mouse_menu_bar_label_rename']->value;
} else { ?>Rename<?php }?>
            </div>
            <div class="mb-content">
                <div class="row">
                    <div class="col-lg-12">    
                        <form role="form" id="drive-rename" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">                                            
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="hidden" name="item-id" value=""/>
                                        <input type="text" name="item-new-name" value="" autocomplete="off" class="form-control" required>
                                    </div>                                            
                                    <span class="help-block" style="color:#000;">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_drive_modal_window_form_help_rename']->value)) {
echo $_smarty_tpl->tpl_vars['global_drive_modal_window_form_help_rename']->value;
} else { ?>Please enter a new name for the item.<?php }?>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 col-xs-12">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
                                    </button>
                                    <button type="button" class="btn btn-default mb-control-close" data-dismiss="modal">
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
<!-- //-- MODAL WINDOW RENAME FOLDER -->

<!-- MODAL WINDOW MOVE TO -->
<div class="d-m-t" aria-haspopup="true" tabindex="-1">
    
</div>                                    
<!-- //-- MODAL WINDOW MOVE TO -->

<!-- MODAL WINDOW MOVE ITEMS -->                                       
<div class="modal" id="modal_dynamic_window" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">                    
            <div class="modal-body" style="background: #000;"><!-- --></div>
            <div class="modal-footer">
                <button type="button" id="moveToBtn" class="btn btn-success pull-left">
                    <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_drive_modal_window_button_move']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_drive_modal_window_button_move']->value, 'UTF-8');
} else { ?>MOVE<?php }?>
                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW MOVE ITEMS -->


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
 type="text/javascript" src="extensions/fancybox/source/jquery.fancybox.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/drive.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    Drive.init(<?php echo $_smarty_tpl->tpl_vars['folderId']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['page1']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['limit1']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['page2']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['limit2']->value;?>
);
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function() {
    $("a.img-item").fancybox({
        'transitionIn'	: 'elastic',
        'transitionOut'	: 'elastic',
        'speedIn'	: 600, 
        'speedOut'	: 200, 
        'overlayShow'	: false
    });
    $("li.n-s").on('click',function() {
        $('.leftNav').toggle();
    });
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
