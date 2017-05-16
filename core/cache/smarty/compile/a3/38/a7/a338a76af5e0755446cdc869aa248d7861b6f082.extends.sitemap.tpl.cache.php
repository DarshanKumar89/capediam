<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-16 19:51:28
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/site/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:635639963573a24c066d3e8-27846606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ad61726a7e52382f10c246cbda4641659d2168a' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/config/../../app/themes/cpanel/site/sitemap.tpl',
      1 => 1460547454,
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
  ),
  'nocache_hash' => '635639963573a24c066d3e8-27846606',
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
  'unifunc' => 'content_573a24c0773e73_96794743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a24c0773e73_96794743')) {function content_573a24c0773e73_96794743($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.date_format.php';
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
        
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/gl-drive-sp-lib.css"/>
<link rel="stylesheet" type="text/css" href="extensions/cpanel/assets/style/drive.css"/>
<style>
#siteControls button {
    font-weight: 600;
}
#navList tbody > tr > td {
    cursor:row-resize;
}

.tree {
    background-color:#fff;
    min-height:200px;
    margin-bottom:10px;
    padding:19px;
    overflow: scroll;
    
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none;
    cursor: pointer;
}
.tree li span.nav {
    background-color: #95b75d;
    font-size: 11.5px;
    font-weight: 600;
    letter-spacing: 1.1px;
    color: #fff;
    border-color: #95b75d;
}
.tree li span.nav > i {
    font-size: 13px;
    font-weight: 800;
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree > ul > li::before, .tree > ul > li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li > span:hover, .tree li.parent_li > span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}
.tree li > a {
    padding-left: 5px;
    color: #000;
}
.tree li > a:hover {
    color: #34302f;
    text-decoration: none;
}

.nav-item-image {
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
.nav-item-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.nav-item-image > a.btn-remove {
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
.nav-item-image > a.btn-remove > i {
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
                    
<li class="active">
    <a href="cpanel/site-structure" title="<?php if (!empty($_smarty_tpl->tpl_vars['global_section_site']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_site']->value;
} else { ?>Site Structure<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_section_site']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_site']->value;
} else { ?>Site Structure<?php }?>
    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-sitemap"></i>
            <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_section_site']->value)) {
echo $_smarty_tpl->tpl_vars['global_section_site']->value;
} else { ?>Site Structure<?php }?></strong>
            <span style="font-size: .7em;color:red;">
                <sup>Beta</sup>
            </span>
            <small><?php if (!empty($_smarty_tpl->tpl_vars['global_site_sitemap']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_sitemap']->value;
} else { ?>sitemap<?php }?></small>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div class="row" style="margin-bottom:20px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="siteControls" class="btn-group" role="group">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_create_nav">
                <span class="fa fa-plus"></span>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_site_controls_button_new_navigation']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_controls_button_new_navigation']->value;
} else { ?>New navigation<?php }?>
            </button>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal_order_nav">
                <span class="fa fa-sort"></span>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_site_controls_button_ordering_navigation']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_controls_button_ordering_navigation']->value;
} else { ?>Ordering navigation<?php }?>
            </button>
        </div><!-- end btn-group -->
    </div><!-- end col -->
</div><!-- end row -->
<div class="row">
    <div class="col-md-12">
        <div class="tree well">
            <?php echo $_smarty_tpl->tpl_vars['navTree']->value;?>

        </div>
    </div>
</div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW NEW NAVIGATION -->
<div class="modal" id="modal_create_nav" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-md-12">
                        <form action="cpanel/create-nav" method="post" role="form">
                            <input type="hidden" name="nav-id" value="<?php echo $_smarty_tpl->tpl_vars['navId']->value;?>
" />
                            <input type="hidden" name="nav-access" value="0" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_title']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_new_navigation_title']->value;
} else { ?>New navigation<?php }?>
                                        </strong>
                                    </h3>
                                </div>
                                <div class="panel-body">                                                                        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_form_new_navigation_header_nav_id']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_form_new_navigation_header_nav_id']->value;
} else { ?>Nav ID<?php }?>
                                                </label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['navId']->value;?>
" disabled>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-barcode"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_form_new_navigation_header_nav_name']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_form_new_navigation_header_nav_name']->value;
} else { ?>Nav mame<?php }?>
                                                </label>
                                                <input class="form-control" type="text" name="nav-name" value="" required>
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_access']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_access']->value;
} else { ?>Access<?php }?>
                                                </label>                                       
                                                <select class="form-control select" name="nav-access" data-style="btn-warning" disabled>
                                                    <option value="0">default</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_css_id']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_css_id']->value;
} else { ?>CSS ID<?php }?>
                                                </label>
                                                <input class="form-control" type="text" name="css-id" value="">
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_css_classes']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_css_classes']->value;
} else { ?>CSS Classes<?php }?>
                                                </label>
                                                <input class="tagsinput form-control" type="text" name="css-classes" value=""/>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <label>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_publish']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_form_header_publish']->value;
} else { ?>Publish<?php }?>
                                                </label><br>
                                                <label class="switch">
                                                    <input type="checkbox" name="publish" value="1">
                                                    <span></span>
                                                </label>
                                            </div><!-- end form-group -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end panel-body -->
                                <div class="panel-footer">  
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
                                    </button>
                                    <button type="button" class="btn btn-warning" onclick="clear_form_elements(this.form);">
                                        <i class="fa fa-scissors"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_clear_form']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_clear_form']->value, 'UTF-8');
} else { ?>CLEAR FORM<?php }?>
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
<!-- //-- MODAL WINDOW NEW NAVIGATION -->

<!-- MODAL WINDOW ORDERING NAVIGATION -->
<div class="modal" id="modal_order_nav" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog" style="width:1200px;">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <?php echo '<script'; ?>
>
                    function delete_row(rowId) {
                        if($('#'+rowId).length > 0)  {
                            $('#'+rowId).hide();
                            $('#ipt_'+rowId).val('1');
                        }
                    }
                <?php echo '</script'; ?>
>
                <div class="row">
                    <div class="col-md-12">
                        <form action="cpanel/update-nav-list" method="post" role="form">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_ordering_navigation_title']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_modal_window_ordering_navigation_title']->value;
} else { ?>Navigation list<?php }?>
                                        </strong>
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-table">
                                    <div class="table-responsive">
                                        <table id="navList" class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="200" class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_form_table_header_unique_navigation_code']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_modal_window_form_table_header_unique_navigation_code']->value, 'UTF-8');
} else { ?>UNIQUE NAVIGATION CODE<?php }?>
                                                    </th>
                                                    <th class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_form_table_header_navigation_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_modal_window_form_table_header_navigation_name']->value, 'UTF-8');
} else { ?>NAVIGATION NAME<?php }?>
                                                    </th>
                                                    <th width="50" class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_site_modal_window_form_table_header_count_items']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_modal_window_form_table_header_count_items']->value, 'UTF-8');
} else { ?>COUNT ITEMS<?php }?>
                                                    </th>
                                                    <th width="150" class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_creator']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_form_header_creator']->value, 'UTF-8');
} else { ?>CREATOR<?php }?>
                                                    </th>
                                                    <th width="100" class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_form_header_create']->value, 'UTF-8');
} else { ?>CREATED<?php }?>
                                                    </th>
                                                    <th width="100" class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_site_form_header_publish']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_site_form_header_publish']->value, 'UTF-8');
} else { ?>PUBLISH<?php }?>
                                                    </th>
                                                    <th width="100" class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>   
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navList2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                    <tr id="trow_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                        <td class="text-center">
                                                            <input type="hidden" name="nav[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['nav-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_nav;?>
" />
                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->nav_hash;?>

                                                        </td>
                                                        <td class="text-left">
                                                            <input type="text" name="nav[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['nav-name']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->nav_name;?>
" style="width: 100%;padding: 0 5px;">
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="label text-center label-success" style="margin-right: 15px;font-size: 1em;"><?php echo $_smarty_tpl->tpl_vars['item']->value->items;?>
</span>
                                                        </td>
                                                        <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>
</td>
                                                        <td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value->created,"%d-%m-%Y");?>
</td>
                                                        <td class="text-center">
                                                            <label class="switch">
                                                                <input class="cb-main" type="checkbox" name="nav[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['publish']" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value->publish==1) {?>checked=""<?php }?> />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="text-center">
                                                            <label class="switch">
                                                                <input type="checkbox" name="nav[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['remove']" value="1" />
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>                                
                                </div>
                                <div class="panel-footer">                                 
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_save_changes']->value, 'UTF-8');
} else { ?>SAVE CHANGES<?php }?>
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
<!-- //-- MODAL WINDOW ORDERING NAVIGATION -->

<!-- MODAL WINDOW CREATE, PAGE LIST, EDIT, ORDER NAVIGATION -->                                       
<div class="modal" id="modal_dynamic_window" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;"><!-- --></div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW CREATE, PAGE LIST, EDIT, ORDER NAVIGATION -->

<!-- MODAL WINDOW REMOVE NAVIGATION -->                       
<div class="modal" id="modal_remove" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="cpanel/delete-nav" method="post" role="form">
                            <input id="removeModel" type="hidden" name="model" value="0" />
                            <input id="removeParentId" type="hidden" name="id" value="0" />
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
<!-- //-- MODAL WINDOW REMOVE NAVIGATION --> 

<!--  MODAL WINDOW MOUSE MENU BAR -->
<div class="d-r-n" aria-haspopup="true" tabindex="-1">
    <ul class="nav nav-pills nav-stacked" role="menu">
        <li role="menuitem" data-menu-item="create" data-pattern-id="1">
            <a href="#" onclick="return false;">
                <span class="fa fa-external-link"></span>
                <span class="d-r-n-m-i-t t-1x-f">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_mouse_menu_bar_header_new_item']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_mouse_menu_bar_header_new_item']->value;
} else { ?>New item<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="order" data-pattern-id="0">
            <a href="#" onclick="return false;">
                <span class="fa fa-sort"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_site_mouse_menu_bar_header_ordering']->value)) {
echo $_smarty_tpl->tpl_vars['global_site_mouse_menu_bar_header_ordering']->value;
} else { ?>Ordering<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="edit" data-pattern-id="0">
            <a href="#" onclick="return false;">
                <span class="fa fa-pencil"></span>
                <span class="d-r-n-m-i-t t-1x">
                    <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_edit']->value)) {
echo $_smarty_tpl->tpl_vars['global_table_header_edit']->value;
} else { ?>Edit<?php }?>
                </span>
            </a>
        </li>
        <li role="menuitem" data-menu-item="remove" data-pattern-id="0">
            <a href="#" onclick="return false;">
                <span class="fa fa-trash-o"></span>
                <span class="d-r-n-m-i-t t-1x">
                   <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo $_smarty_tpl->tpl_vars['global_table_header_remove']->value;
} else { ?>REMOVE<?php }?>
                </span>
            </a>
        </li>
    </ul>
</div>
<!-- //-- MODAL WINDOW MOUSE MENU BAR -->


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
 type="text/javascript" src="extensions/cpanel/js/plugins/nestable/jquery.nestable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '<script'; ?>
>
$(function() {
    
            
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('fa-chevron-circle-down').removeClass('fa-chevron-circle-left');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('fa-chevron-circle-left').removeClass('fa-chevron-circle-down');
        }
        e.stopPropagation();
    });
    $('#navList').find('tbody').sortable();
    
    var Tree = new Object();
        // DOM
        Tree.layout = $('div.tree');
        // geo
        Tree.mouse  = {};
        // modal
        Tree.modals = {
            navigation: {
                elm: $('#modal_order_nav'),
                on: function() {
                    Tree.modals.navigation.elm.modal('show');
                }
            },
            dynamic: {
                elm: $('#modal_dynamic_window'),
                on: function() {
                    Tree.modals.dynamic.elm.modal('show');
                },
                put: function(content) {
                    Tree.modals.dynamic.elm.find('.modal-body').empty();
                    Tree.modals.dynamic.elm.find('.modal-body').html(content);
                }
            },
            remove: {
                elm: $('#modal_remove'),
                on: function() {
                    Tree.modals.remove.elm.modal('show');
                }
            }
        };
        // menu
        Tree.menu   = {
            model: null,
            itemId: null,
            patternId: null,
            elm: $('.d-r-n'),
            init: function() {
                Tree.menu.create();
                Tree.menu.order();
                Tree.menu.edit();
                Tree.menu.remove();
            },
            on: function() {
                Tree.menu.elm.css({ top: Tree.mouse.screenY,left: Tree.mouse.screenX });
                Tree.menu.elm.show();
            },
            off: function() {
                Tree.menu.elm.css({ top: 0,left: 0 });
                Tree.menu.elm.hide();
                Tree.menu.model  = null;  
                Tree.menu.itemId = null;  
                Tree.menu.patternId = null;
            },
            create: function() {
                Tree.menu.elm.find('[data-menu-item="create"]').on('click', function() { 
                    if(Tree.menu.itemId !== null) {
                        $.ajax({
                            url: 'cpanel/nav-form-create-item',
                            type: 'POST',
                            data: {model: Tree.menu.model,id: Tree.menu.itemId, patternId: $(this).data('pattern-id')},
                            success: function(response) {
                               Tree.modals.dynamic.put(response);
                               Tree.modals.dynamic.on();
                            },
                            error: function(data) {
                                console.log(data);
                            },
                            dataType: 'HTML'
                        });
                    }
                    Tree.menu.off();
                });
            },
            order: function() {
                Tree.menu.elm.find('[data-menu-item="order"]').on('click', function() {
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 2) &&
                        (Tree.menu.itemId !== null) &&
                        (Tree.menu.patternId !== null)
                    ) {
                        $.ajax({
                            url: 'cpanel/nav-form-item-order',
                            type: 'POST',
                            data: {model: Tree.menu.model,id: Tree.menu.itemId},
                            success: function(response) {
                               Tree.modals.dynamic.put(response);
                               Tree.modals.dynamic.on();
                            },
                            error: function(data) {
                                console.log(data);
                            },
                            dataType: 'HTML'
                        });
                    }
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 1)
                    ) {
                        Tree.modals.navigation.on();
                    }
                    Tree.menu.off();
                });
            },
            edit: function() {
                Tree.menu.elm.find('[data-menu-item="edit"]').on('click', function() {
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 2) &&
                        (Tree.menu.itemId !== null) &&
                        (Tree.menu.patternId !== null)
                    ) {
                        $.ajax({
                            url: 'cpanel/nav-form-edit-item',
                            type: 'POST',
                            data: {model: Tree.menu.model,id: Tree.menu.itemId, patternId: Tree.menu.patternId},
                            success: function(response) {
                               Tree.modals.dynamic.put(response);
                               Tree.modals.dynamic.on();
                            },
                            error: function(data) {
                                console.log(data);
                            },
                            dataType: 'HTML'
                        });
                    }
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 1)
                    ) {
                        Tree.modals.navigation.on();
                    }
                    Tree.menu.off();
                });
            },
            remove: function() {
                Tree.menu.elm.find('[data-menu-item="remove"]').on('click', function() {
                    if( (Tree.menu.model !== null) &&
                        (Tree.menu.model == 1)
                    ) {
                        Tree.modals.navigation.on();
                    } else {
                        $('#removeModel').val( Tree.menu.model );
                        $('#removeParentId').val( Tree.menu.itemId );
                        Tree.modals.remove.on();
                    }
                    Tree.menu.off();
                });
            }
        };
        Tree.setSize = function() {
            var offset = Tree.layout.offset();
            
            Tree.layout.css({ height: ($('body').innerHeight() - offset.top) - 20 });
        };
        Tree.setSize();
        Tree.menu.init();
    
        Tree.layout.on("contextmenu",function(e) {
            e.preventDefault();
        });
        Tree.layout.mousedown(function(event) {
            Tree.mouse.screenX = event.pageX;
            Tree.mouse.screenY = ( (event.pageY + Tree.menu.elm.innerHeight()) > $('body').innerHeight() ) ? event.pageY - Tree.menu.elm.innerHeight() : event.pageY;

            switch(event.which) {
                case 1:
                    Tree.menu.off();
                    break;
                case 3:
                    //console.log(event);
                    break;
            }
        });
        Tree.layout.find('[data-type="menu"]').each(function() {
            $(this).on('contextmenu',function(event) {
                if(event.which === 3) {
                    Tree.menu.model  = 1;
                    Tree.menu.itemId = $(this).data('id');
                    Tree.menu.on();
                }
            });
        });
        Tree.layout.find('[data-type="item"]').each(function() {
            $(this).on('contextmenu',function(event) {
                if(event.which === 3) {
                    Tree.menu.model  = 2;
                    Tree.menu.itemId = $(this).data('id');
                    Tree.menu.on();
                }
                if($(this).data('pattern-id')) {
                    Tree.menu.patternId = $(this).data('pattern-id');
                }
            });
        });
        
        
                    
        <?php if (is_object($_smarty_tpl->tpl_vars['data']->value)) {?>
            $.ajax({
                url: 'cpanel/nav-form-edit-item',
                type: 'POST',
                data: { model: 2,id: <?php echo $_smarty_tpl->tpl_vars['data']->value->id_nav_item;?>
, patternId: <?php echo $_smarty_tpl->tpl_vars['data']->value->id_pattern;?>
 },
                success: function(response) {
                   Tree.modals.dynamic.put(response);
                   Tree.modals.dynamic.on();
                },
                error: function(data) {
                    console.log(data);
                },
                dataType: 'HTML'
            });
        <?php }?>
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
