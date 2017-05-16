<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-19 17:53:23
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/attribute/attribute_update_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62525901057167093423455-36186270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc37c4994e71dad99073b6f7c437c2184f0c8de5' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/store/catalog/attribute/attribute_update_form.tpl',
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
  ),
  'nocache_hash' => '62525901057167093423455-36186270',
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
  'unifunc' => 'content_571670935f40a5_73752404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571670935f40a5_73752404')) {function content_571670935f40a5_73752404($_smarty_tpl) {?><!DOCTYPE html>
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
    .tree {
      list-style: none;
      padding: 0 0 0 20px;
    }
    .tree .tree-selected {
      color: #fff;
      background-color: #00aff0;
    }
    .tree input {
      vertical-align: baseline;
      margin-right: 4px;
      line-height: normal;
    }
    .tree i {
      font-size: 14px;
    }
    .tree .tree-item-name label,
    .tree .tree-folder-name label {
      font-weight: 400;
    }
    .attribute-image {
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
    .attribute-image.on {
        line-height: 0px;
        -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
        -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
        box-shadow: 0 1px 3px rgba(0,0,0,.2);
    }
    .attribute-image > a.btn-remove {
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
    .attribute-image > a.btn-remove > i {
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
                
<ul class="x-navigation">
    <li class="xn-logo">
        <a href="cpanel">MOZAYC</a>
        <a href="cpanel" class="x-navigation-control"></a>
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
    <li class="xn-title">
        <strong>
            <?php if (!empty($_smarty_tpl->tpl_vars['global_nav']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_nav']->value, 'UTF-8');
} else { ?>MENU BAR<?php }?>
        </strong>
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
    <?php if ($_smarty_tpl->tpl_vars['user']->value->id_user==1) {?>
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
    <li class="xn-title">
      <strong>
        <?php if (!empty($_smarty_tpl->tpl_vars['global_nav_extensions']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_nav_extensions']->value, 'UTF-8');
} else { ?>EXTENSIONS<?php }?>
      </strong>
    </li>
    <li class="xn-openable active" style="margin-bottom:98px;">
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
<li>
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_catalog']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_section_catalog']->value, 'UTF-8');
} else { ?>Catalog<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_catalog']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_catalog']->value;
} else { ?>Catalog<?php }?>
    </a>
</li>
<li>
    <a href="cpanel/store-attribute-list" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_attributes']->value;
} else { ?>Attributes<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_attributes']->value;
} else { ?>Attributes<?php }?>
    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_attribute_edit']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_attribute_edit']->value;
} else { ?>Edit attribute<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_attribute_edit']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_attribute_edit']->value;
} else { ?>Edit attribute<?php }?>
    </a>
</li>
<li>
    <a href="cpanel/store-update-attribute-form/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_attribute;?>
"
       title="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_internal)) {?>
                <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_internal;?>

            <?php } elseif (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_public)) {?>
                <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_public;?>

            <?php } else { ?>
                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_internal)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_internal;?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_public;?>

                <?php }?>
            <?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_internal)) {?>
            <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_internal;?>

        <?php } elseif (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_public)) {?>
            <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_public;?>

        <?php } else { ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_internal)) {?>
                <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_internal;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_public;?>

            <?php }?>
        <?php }?>
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <?php if (!empty($_smarty_tpl->tpl_vars['store_section_attributes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_section_attributes']->value, 'UTF-8');
} else { ?>Attributes<?php }?>
            &nbsp;<span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="createAttributeForm" action="cpanel/store-update-attribute" method="post" role="form">
    <input type="hidden" name="attribute-id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_attribute;?>
" />
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">

        <!-- ATTRIBUTE TITLE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                  <h3 class="panel-title">
                      <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_internal)) {?>
                          <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_internal;?>

                      <?php } elseif (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_public)) {?>
                          <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['defaultLanguage']->value]->attribute_name_public;?>

                      <?php } else { ?>
                          <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_internal)) {?>
                              <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_internal;?>

                          <?php } else { ?>
                              <?php echo $_smarty_tpl->tpl_vars['data']->value->lang[key($_smarty_tpl->tpl_vars['data']->value->lang)]->attribute_name_public;?>

                          <?php }?>
                      <?php }?>
                  </h3>
                </div><!-- end panel-header -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- ATTRIBUTE TITLE -->

        <!-- ATTRIBUTE LANGUAGE INFORMATION AND SEO -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-globe"></i>&nbsp;
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_language_and_seo']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_language_and_seo']->value, 'UTF-8');
} else { ?>LANGUAGE INFORMATION AND SEO<?php }?>
                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <?php if (!empty($_smarty_tpl->tpl_vars['languages']->value)) {?>
                        <!-- START TABS -->
                        <div class="panel panel-default tabs" style="margin-top: 0px;">
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
                                        <a href="#tab-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
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
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 style="border-bottom:1px solid blue;"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_general']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_general']->value, 'UTF-8');
} else { ?>GENERAL<?php }?></h4>
                                                <div class="row form-group">
                                                    <div class="input-group col-lg-3 col-md-3 col-sm-4 col-xs-4 pull-left">
                                                        <span class="attribute-image <?php if (!is_null($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)) {?>on<?php }?>">
                                                            <?php if (!is_null($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)) {?>
                                                                <input type="hidden" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['attribute-image-id']" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_id;?>
"/>
                                                                <img src="thumbnail/<?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_hash;?>
/auto/100" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_name;?>
"/>
                                                                <a href="cpanel/store-delete-attribute-image/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_attribute;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="btn btn-remove">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <i class="glyphicon glyphicon-eye-open"></i>
                                                            <?php }?>
                                                        </span>
                                                    </div><!-- end image -->
                                                    <div class="input-group col-lg-9 col-md-9 col-sm-6 col-xs-6 pull-right">
                                                        <span class="input-group-btn">
                                                            <a href="cpanel/store-choose-attribute-image/<?php echo $_smarty_tpl->tpl_vars['data']->value->id_attribute;?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                                                <i class="glyphicon glyphicon-hdd"></i>
                                                            </a>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="<?php if (!is_null($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->image->file_name;
} else {
if (!empty($_smarty_tpl->tpl_vars['store_categories_form_category_image']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_category_image']->value;
} else { ?>Load image from drive<?php }
}?>">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-eye-open"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_color']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_color']->value;
} else { ?>Color<?php }?></label>
                                                    <div class="input-group color colorpicker" data-color="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color;
} else { ?>rgb(255, 255, 255)<?php }?>" data-color-format="rgb">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <input type="text" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['color']" value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color;
} else { ?>rgb(255, 255, 255)<?php }?>" class="form-control"/>
                                                        <span class="input-group-addon">
                                                            <i style="background-color: <?php if (!empty($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->color;
} else { ?>rgb(255, 255, 255)<?php }?>"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_form_header_attribute_name_internal']->value)) {
echo $_smarty_tpl->tpl_vars['store_attributes_form_header_attribute_name_internal']->value;
} else { ?>Attribute name (internal)<?php }?></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <input type="text" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['attribute-name-internal']" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->attribute_name_internal)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->attribute_name_internal;
}?>" class="form-control">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                    <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value;
} else { ?>Invalid characters <>;=#{ }<?php }?></span>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_form_header_attribute_name']->value)) {
echo $_smarty_tpl->tpl_vars['store_attributes_form_header_attribute_name']->value;
} else { ?>Attribute name (public)<?php }?><span style="color:red;">*</span></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <input type="text" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['attribute-name-public']" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->attribute_name_public)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->attribute_name_public;
}?>" class="form-control" required>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                    <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value;
} else { ?>Invalid characters <>;=#{ }<?php }?></span>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_title']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_title']->value;
} else { ?>Title<?php }?></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <input type="text" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['title']" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->site_title)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->site_title;
}?>" class="form-control">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                    <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value;
} else { ?>Invalid characters <>;=#{ }<?php }?></span>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_description']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_description']->value;
} else { ?>Description<?php }?></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['description']" class="form-control" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->description)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->description;
}?></textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                    <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_invalid_characters']->value;
} else { ?>Invalid characters <>;=#{ }<?php }?></span>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <h4 style="border-bottom:1px solid green;">SEO</h4>
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_metarobots']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_metarobots']->value;
} else { ?>Metarobots<?php }?></label>
                                                    <select name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-robots']" class="form-control select">
                                                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['metaRobots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_robots))&&($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_robots==$_smarty_tpl->tpl_vars['item']->value->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                    <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_choose']->value;
} else { ?>Choose one of these options<?php }?></span>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_metakeywords']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_metakeywords']->value;
} else { ?>Metakeywords<?php }?></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <input type="text" name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-keywords']" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_keywords)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_keywords;
}?>" class="tagsinput form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                    <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_metakeywords']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_metakeywords']->value;
} else { ?>To add &quot;tags,&quot; click in the field, write something, and then press &quot;Enter.&quot;&nbsp;Forbidden characters <>;=#{ }<?php }?></span>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_metadescription']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_header_metadescription']->value;
} else { ?>Metadescription<?php }?></label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-description']" class="form-control" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_description)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->meta_description;
}?></textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                    <span class="help-block"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_helper_forbinden_characters']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_helper_forbinden_characters']->value;
} else { ?>Forbidden characters <>;=#{ }<?php }?></span>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-12">
                                                <h4 style="margin-top: 20px;border-bottom:1px solid #3fbae4;"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_header_html_content']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_header_html_content']->value, 'UTF-8');
} else { ?>HTML CONTENT<?php }?></h4>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                    </span>
                                                    <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['html-content']" id="ckeditor_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="ckeditor" row="5"><?php if (isset($_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->html_content)) {
echo $_smarty_tpl->tpl_vars['data']->value->lang[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->html_content;
}?></textarea>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end pane -->
                                <?php } ?>
                            </div><!-- end panel-body -->
                        </div><!-- end panel -->
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
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- ATTRIBUTE LANGUAGE INFORMATION AND SEO -->

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
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value)>0) {?>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="ael" class="alert pull-right" style="display: none;" role="alert"><!-- --></div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div id="r-r-f-c" class="col-lg-12 col-sm-12 col-xs-12">
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
                                                <a href="#tab-direction-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
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
if (($_smarty_tpl->tpl_vars['tabLang']->value->mode==2)&&($_smarty_tpl->tpl_vars['tabLang']->value->code==$_smarty_tpl->tpl_vars['lang']->value->id_lang)) {?>active<?php }?>" id="tab-direction-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <div id="r-k-v-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="input-group">
                                                                <?php if ($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route!=0) {?>
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
                                                                    <input id="r-k-i-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                           type="text"
                                                                           value=""
                                                                           class="form-control r-k-v"
                                                                           data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                            </div>
                                                        </div><!-- end form-group -->
                                                        <div id="r-k-c-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
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
                                                                        <input id="r-k-c-i-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                               type="text"
                                                                               value=""
                                                                               class="form-control"
                                                                               data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                                                    id="r-k-c-b-u-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                                    class="btn btn-success r-k-c-b-u"
                                                                                    data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                                    </div>
                                                                </div><!-- end form-group -->
                                                            </div><!-- end col -->
                                                            <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                                                <button type="button" id="r-k-c-b-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="btn btn-default btn-block" style="margin-top: 22px;">
                                                                    <i class="fa fa-times"></i>&nbsp;
                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                                                                </button>
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                        <?php if ($_smarty_tpl->tpl_vars['router']->value->allow_prefix==true) {?>
                                                            <div id="r-p-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="row" style="display:none;">
                                                                <div class="col-lg-10 col-sm-10 col-xs-10" style="padding-left: 0px;">
                                                                    <div class="form-group">
                                                                        <label for="prefix">
                                                                            URL PREFIX
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                                            </span>
                                                                            <input id="r-p-i-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                                   type="text"
                                                                                   value=""
                                                                                   class="form-control r-p-v"
                                                                                   data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                                                        id="r-p-b-u-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                                        class="btn btn-success r-p-b-u"
                                                                                        data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                                        </div>
                                                                    </div><!-- end form-group -->
                                                                </div><!-- end col -->
                                                                <div class="col-lg-2 col-sm-2 col-xs-2" style="padding-right: 0px;">
                                                                    <button type="button" id="r-p-b-cl-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
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
                                                    <div class="col-lg-4 col-sm-12 col-xs-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route!=0) {?>
                                                            <div class="row" style="margin-bottom: 5px;">
                                                                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-left: 0px;">
                                                                    <button
                                                                            type="button"
                                                                            id="r-k-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                            class="btn btn-warning btn-block r-k-c"
                                                                            data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                                <div class="col-lg-6 col-sm-6 col-xs-6" style="padding-right: 0px;">
                                                                    <button
                                                                            type="button"
                                                                            class="btn btn-danger btn-block r-d-d"
                                                                            data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                                        id="r-p-b-c-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                        data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
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
                                                                    id="r-c-k-d-b-<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                    class="btn btn-success btn-block r-c-k-d-b"
                                                                    data-route-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route;?>
"
                                                                    data-lang-id="<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
"
                                                                    data-object-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object;?>
"
                                                                    data-object-type-id="<?php echo $_smarty_tpl->tpl_vars['router']->value->id_object_type;?>
"
                                                                    <?php if ($_smarty_tpl->tpl_vars['router']->value->list[$_smarty_tpl->tpl_vars['lang']->value->id_lang]->id_route==0) {?>disabled<?php }?>
                                                                    >
                                                                <i class="fa fa-floppy-o"></i>&nbsp;
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['global_router_label_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_router_label_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
                                                            </button>
                                                        <?php }?>
                                                    </div><!-- end col -->
                                                    <div class="col-lg-8 col-sm-12 col-xs-12">
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
                                                                </div>
                                                            </div><!-- end panel-body -->
                                                        </div><!-- end panel -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                                <div class="row" style="margin-top: 5px;">
                                                    <div class="col-lg-12 col-sm-12 col-xs-12">
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
                                                                    </div>
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
                        </div>
                    <?php }?>
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- DIRECTION -->

        <!-- ATTRIBUTE TREE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-warning panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-tree"></i>&nbsp;
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_form_header_parent_attribute']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_attributes_form_header_parent_attribute']->value, 'UTF-8');
} else { ?>PARENT ATTRIBUTE<?php }?>
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#"
                               onclick="$('#categories-tree').tree('collapseAll');$('#collapse-all-categories-tree').hide();$('#expand-all-categories-tree').show(); return false;"
                               id="collapse-all-categories-tree"
                               style="display:none;"
                                    >
                                <i class="fa fa-angle-double-up"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               onclick="$('#categories-tree').tree('expandAll');$('#collapse-all-categories-tree').show();$('#expand-all-categories-tree').hide(); return false;"
                               id="expand-all-categories-tree"
                                    >
                                <i class="fa fa-angle-double-down"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="panel-collapse">
                                <span class="fa fa-angle-down"></span>
                            </a>
                        </li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form" style="max-height: 350px;overflow: auto;">
                    <?php if (isset($_smarty_tpl->tpl_vars['attributeTree']->value)&&(strlen($_smarty_tpl->tpl_vars['attributeTree']->value)>0)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['attributeTree']->value;?>

                    <?php } else { ?>
                        <div class="alert alert-info" role="alert">
                            <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO!<?php }?></strong>
                            <?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_alert_no_attributes']->value)) {
echo $_smarty_tpl->tpl_vars['store_attributes_alert_no_attributes']->value;
} else { ?>You have no attributes.<?php }?>
                        </div>
                    <?php }?>
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- ATTRIBUTE TREE -->

        <!-- ATTRIBUTE SETTINGS -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="form-group pull-left" style="width: 100%;">
                      <label>
                        Zaradiť ako výrobcu
                      </label><br>
                      <label class="switch">
                        <input type="checkbox" name="manufacturer" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->is_manufacturer==1) {?>checked<?php }?>>
                        <span></span>
                      </label>
                    </div><!-- end form-group -->
                    <div class="form-group pull-left" style="margin-right:20px;">
                      <label><?php if (!empty($_smarty_tpl->tpl_vars['gloabal_form_header_root']->value)) {
echo $_smarty_tpl->tpl_vars['gloabal_form_header_root']->value;
} else { ?>Root<?php }?></label><br>
                      <label class="switch">
                        <input type="checkbox" name="root" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->is_root_attribute==1) {?>checked<?php }?>>
                        <span></span>
                      </label>
                    </div><!-- end form-group -->
                    <div class="form-group pull-left" style="margin-right:20px;">
                      <label><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_guest']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_guest']->value;
} else { ?>Guest<?php }?></label><br>
                      <label class="switch">
                        <input type="checkbox" name="guest" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->guest==1) {?>checked<?php }?>>
                        <span></span>
                      </label>
                    </div><!-- end form-group -->
                    <div class="form-group pull-left" style="margin-right:20px;">
                      <label><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_visitor']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_visitor']->value;
} else { ?>Visitor<?php }?></label><br>
                      <label class="switch">
                        <input type="checkbox" name="visitor" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->visitor==1) {?>checked<?php }?>>
                        <span></span>
                      </label>
                    </div><!-- end form-group -->
                    <div class="form-group pull-left" style="margin-right:20px;">
                      <label><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_customer']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_customer']->value;
} else { ?>Customer<?php }?></label><br>
                      <label class="switch">
                        <input type="checkbox" name="customer" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->customer==1) {?>checked<?php }?>>
                        <span></span>
                      </label>
                    </div><!-- end form-group -->
                    <div class="form-group pull-left" style="margin-right:20px;">
                      <label><?php if (!empty($_smarty_tpl->tpl_vars['gloabal_form_header_enable']->value)) {
echo $_smarty_tpl->tpl_vars['gloabal_form_header_enable']->value;
} else { ?>Enable<?php }?></label><br>
                      <label class="switch">
                        <input type="checkbox" name="enable" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value->active==1) {?>checked<?php }?>>
                        <span></span>
                      </label>
                  </div><!-- end form-group -->
                  </div><!-- end col -->
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="alert alert-info" role="alert">
                            <h4>
                                <strong>
                                    <span class="fa fa-question-circle"></span>
                                    &nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['store_categories_from_settings_info']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_from_settings_info']->value;
} else { ?>You now have three default customer groups.<?php }?>
                                </strong>
                            </h4>
                            <p>
                                <b><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_visitor']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_visitor']->value;
} else { ?>Visitor<?php }?></b> - <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_settings_info_visitor']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_settings_info_visitor']->value;
} else { ?>All people without a valid customer account.<?php }?><br>
                                <b><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_guest']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_guest']->value;
} else { ?>Guest<?php }?></b> - <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_settings_info_guest']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_settings_info_guest']->value;
} else { ?>Customer who placed an order with the guest checkout.<?php }?><br>
                                <b><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_customer']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_customer']->value;
} else { ?>Customer<?php }?></b> - <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_settings_info_customer']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_settings_info_customer']->value;
} else { ?>All people who have created an account on this site.<?php }?>
                            </p>
                        </div><!-- end alert -->
                    </div><!-- end col -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //-- ATTRIBUTE SETTINGS -->

        <button type="submit" id="btn-save" class="btn btn-success" role="button">
            <i class="fa fa-save"></i>
        </button>

    </div><!-- end row -->
</form>

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
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-colorpicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="extensions/bootstrap-tagsinput/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/tagsinput/jquery.tagsinput.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/jquery-validation/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/router.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/tree.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">

        Router.init();

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
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $("#attributes-tree").tree("collapseAll");
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
        CKEDITOR.replace('ckeditor_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
', {
            "extraPlugins": "imagebrowser",
            "imageBrowser_listUrl": "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/cpanel/drive-api/build-image-register"
        });
    <?php } ?>  
    
    function clear_form_elements(elm) {
        $(elm).find(':input').each(function() {
            switch(this.type) {
                case 'password':
                case 'select-multiple':
                case 'select-one':
                case 'text':
                case 'textarea':
                    $(this).val('');
                    break;
                case 'checkbox':
                case 'radio':
                    this.checked = false;
            }
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
