<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-27 11:51:00
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/article_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6561763575798a024c8f433-65074847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e722627a84cee4925d1fbe3b0cc4b869d7ccc88' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/store/catalog/article/article_edit.tpl',
      1 => 1469528904,
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
  'nocache_hash' => '6561763575798a024c8f433-65074847',
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
  'unifunc' => 'content_5798a025040d45_86976452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5798a025040d45_86976452')) {function content_5798a025040d45_86976452($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
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
.article-image {
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
.article-image.on {
    line-height: 0px;
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,.2);
    box-shadow: 0 1px 3px rgba(0,0,0,.2);
}
.article-image > a.btn-remove {
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
.article-image > a.btn-remove > i {
    font-size:1.7em;
}
.gallery-indicator,
.slider-indicator {
    display: block;
    width: 120px;
    height: 100%;
    line-height: 100%;
    overflow: hidden;
}
.gallery-indicator .title,
.slider-indicator .title {
    display: block;
    float: left;
    width: 50px;
    margin-top: 3px;
    margin-right: 0px;
    font-size: 1.9em;
}
.circle-indicator {
    position:relative;
    display: block;
    float: left;
    width: 23px;
    height: 23px;
    margin-top: 3px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    color: #fff;
    border-radius: 100%;
}
.circle-indicator > i {
    font-size: 1.3em;
    line-height: 24px;
}
.circle-indicator.black {
    background: #000;
}
.circle-indicator.orange {
    background: #fea223;
}
.circle-indicator.green {
    background: #95b75d;
}

#article-categories tbody > tr > td {
    cursor: row-resize;
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
    <a href="cpanel/store/catalog/articles" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_articles']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_articles']->value;
} else { ?>Articles<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_articles']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_articles']->value;
} else { ?>Articles<?php }?>
    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_article_edit']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_article_edit']->value;
} else { ?>Edit<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_article_edit']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_article_edit']->value;
} else { ?>Edit<?php }?>
    </a>
</li>
<li class="active">
    <a href="cpanel/store/catalog/article/edit/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" title="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['article']->value->article_name_internal);?>
">
        <?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['article']->value->article_name_internal);?>

    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
<div class="page-title">                    
  <h2>
    <i class="fa fa-pencil-square"></i>&nbsp;
    <?php if (!empty($_smarty_tpl->tpl_vars['store_section_articles']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_articles']->value;
} else { ?>Articles<?php }?>&nbsp;
    <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
  </h2>
</div><!-- end page-title -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<form id="updateArticleForm" action="cpanel/store/catalog/article/update" method="post" role="form">
    <input type="hidden" name="article-id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" />
    <div class="row" style="position:relative;margin-bottom:50px;padding-left:35px;">
        
        <!-- ARTICLE TITLE -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title" style="overflow: hidden;">
                        <button type="button"
                                class="btn btn-block btn-info pull-left"
                                style="margin-top:0px;margin-right:25px;padding:0;width:29px;height:29px;border-radius:100%;"
                                data-toggle="modal" data-target="#make-a-copy">
                            <i class="fa fa-files-o" style="position: relative;top: 1px;left: 2.5px;"></i>
                        </button>
                        <span style="display:block;font-size:1.4em;float:left;">
                            <i class="fa fa-cube"></i>&nbsp;
                            <span style="font-weight:100;color:#000;"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['article']->value->article_name_internal);?>
</span>
                        </span>
                    </h3>
                    <ul class="panel-controls">
                        <li class="slider-indicator">
                            <span class="title">
                                <i class="fa fa-camera"></i>
                            </span>
                            <span class="circle-indicator <?php if (isset($_smarty_tpl->tpl_vars['slider']->value)) {?>green<?php } else { ?>black<?php }?>">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                        <li class="gallery-indicator">
                            <span class="title">
                               <i class="fa fa-picture-o"></i>
                            </span>
                            <span class="circle-indicator <?php if ($_smarty_tpl->tpl_vars['article']->value->id_gallery>0) {?>green<?php } else { ?>black<?php }?>">
                                <i class="fa fa-bullseye"></i>
                            </span>
                        </li>
                    </ul>                      
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
                                </div>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                            <div class="btn-group pull-right" role="group">
                                <a href="<?php if ($_smarty_tpl->tpl_vars['prevArticle']->value!=0) {?>cpanel/store/catalog/article/edit/<?php echo $_smarty_tpl->tpl_vars['prevArticle']->value;
} else { ?>#<?php }?>" <?php if ($_smarty_tpl->tpl_vars['prevArticle']->value==0) {?>onclick="return false;"<?php }?> class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['prevArticle']->value==0) {?>disabled<?php }?>>
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <a href="<?php if ($_smarty_tpl->tpl_vars['nextArticle']->value!=0) {?>cpanel/store/catalog/article/edit/<?php echo $_smarty_tpl->tpl_vars['nextArticle']->value;
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
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- // ARTICLE TITLE -->
        
        <!-- ARTICLE LANGUAGE INFORMATION AND SEO -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
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
                        <div class="panel panel-default tabs" style="margin: 7px 0;">                            
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
                                                <div class="form-group">
                                                    <label>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_site_title']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_site_title']->value;
} else { ?>Site title<?php }?>
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
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['article']->value->lang[$_tmp1]->site_title;?>
"
                                                               placeholder="<?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_site_title']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_site_title']->value;
} else { ?>Site title<?php }?>"
                                                               class="form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_heading']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_heading']->value;
} else { ?>Article name (public)<?php }?>
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['article-name']"
                                                               value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['article']->value->lang[$_tmp2]->article_name;?>
"
                                                               placeholder="<?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_article_name_public']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_article_name_public']->value;
} else { ?>Article name<?php }?>"
                                                               class="form-control"
                                                               required/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_short_description']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_short_description']->value;
} else { ?>Short description<?php }?>
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['description']" class="form-control" rows="5"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['article']->value->lang[$_tmp3]->description;?>
</textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <h4 style="border-bottom:1px solid green;">SEO</h4>
                                                <div class="form-group">
                                                    <label>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_meta_robots']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_meta_robots']->value;
} else { ?>Metarobots<?php }?>
                                                    </label>
                                                        <select name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-robot']" class="form-control select">
                                                            <?php  $_smarty_tpl->tpl_vars['robot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['robot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['meta_robots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['robot']->key => $_smarty_tpl->tpl_vars['robot']->value) {
$_smarty_tpl->tpl_vars['robot']->_loop = true;
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['robot']->value->value;?>
"><?php echo $_smarty_tpl->tpl_vars['robot']->value->value;?>
</option>
                                                            <?php } ?>
                                                        </select>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_meta_keywords']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_meta_keywords']->value;
} else { ?>Meta keywords<?php }?>
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <input type="text"
                                                               name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-keywords']"
                                                               value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp4=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_tmp4]->meta_keywords)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['article']->value->lang[$_tmp5]->meta_keywords;
}?>"
                                                               class="tagsinput form-control"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_meta_description']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_meta_description']->value;
} else { ?>Meta description<?php }?>
                                                    </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['meta-description']"class="form-control" rows="5"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp6=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['article']->value->lang[$_tmp6]->meta_description)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['article']->value->lang[$_tmp7]->meta_description;
}?></textarea>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file-text-o"></i>
                                                        </span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-12" style="margin-top:30px;">
                                                    <h4 style="padding-bottom: 7px;border-bottom:1px solid yellow;overflow:auto;">
                                                        <span class="pull-left" style="padding-top: 12px;">
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_html_content']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_html_content']->value;
} else { ?>HTML Content<?php }?>
                                                        </span>
                                                    </h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['lang']->value->language_code;?>
"></span>
                                                        </span>
                                                        <textarea name="lang[<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
]['html-content']" id="ckeditor_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
" class="ckeditor" row="5"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value->id_lang;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['article']->value->lang[$_tmp8]->html_content;?>
</textarea>
                                                    </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end tab -->
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
        <!-- //- ARTICLE LANGUAGE INFORMATION AND SEO -->
        
        <!-- DIRECTION -->
        <div class="col-lg-12 col-sm-12 col-xs-12">
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
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div id="ael" class="alert pull-right" style="display: none;" role="alert"><!-- --></div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <div class="row">
                            <div id="r-r-f-c" class="col-lg-12 col-sm-12 col-xs-12">
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
        
        <!-- ARTICLE GENERAL INFORMATION -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Reference<?php }?>
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->reference;?>
" minlength="10" maxlength="60" class="form-control" required="true" disabled="true">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>SKU<?php }?>
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="sku" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->sku;?>
" minlength="3" maxlength="60" class="form-control" required>
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Article name (internal)<?php }?>
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="article-name-internal" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->article_name_internal;?>
" minlength="3" maxlength="150" class="form-control" required>
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>EAN-13 or JAN barcode<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="ean13-jan-barcode" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->ean13_jan_barcode;?>
" maxlength="13" class="form-control">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>UPC barcode<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="upc-barcode" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->upc_barcode;?>
" maxlength="12" class="form-control">
                                    <span class="input-group-addon">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                </div><!-- end input-group -->
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Country of Manufacture<?php }?>
                                </label>
                                <select name="country-of-manufacture-id" class="form-control select" data-live-search="true">
                                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_country_of_manufacturer==$_smarty_tpl->tpl_vars['item']->value->id_lang) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>
</option>
                                    <?php } ?>
                                </select>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="row form-group">
                                <label class="col-lg-12" style="padding-left: 0px;">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Article image<?php }?>
                                </label>
                                <div class="input-group col-lg-2 pull-left">
                                    <span class="article-image <?php if (!is_null($_smarty_tpl->tpl_vars['article']->value->image)) {?>on<?php }?>">
                                        <?php if (!is_null($_smarty_tpl->tpl_vars['article']->value->image)) {?>
                                            <input type="hidden" name="image-id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->image->file_id;?>
"/>
                                            <img src="thumbnail/<?php echo $_smarty_tpl->tpl_vars['article']->value->image->file_hash;?>
/auto/100" height="100" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value->image->file_name;?>
"/>
                                            <a href="cpanel/store/catalog/article/remove-article-image/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" class="btn btn-remove">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        <?php } else { ?>
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        <?php }?> 
                                    </span>
                                </div><!-- end image -->
                                <div class="input-group col-lg-9 pull-right">
                                    <span class="input-group-btn">
                                        <a href="cpanel/store/catalog/article/choose-image/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
/7259b712f116a7fe6310cdc765c836af" class="btn btn-default">
                                            <i class="glyphicon glyphicon-hdd"></i>
                                        </a>
                                    </span>
                                    <input type="text" 
                                           placeholder="<?php if (!is_null($_smarty_tpl->tpl_vars['article']->value->image)) {
echo $_smarty_tpl->tpl_vars['article']->value->image->file_name;
} else {
if (!empty($_smarty_tpl->tpl_vars['global_form_label_load_image_from_drive']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_label_load_image_from_drive']->value;
} else { ?>Load image from drive<?php }
}?>" 
                                           class="form-control">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Gallery<?php }?>
                                </label>                                                                              
                                <?php if ($_smarty_tpl->tpl_vars['article']->value->id_gallery>0) {?>
                                  <input type="hidden" name="gallery-id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->id_gallery;?>
"/>
                                  <div style="overflow:hidden;">
                                      <a href="cpanel/gallery-edit/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_gallery;?>
" class="btn btn-success pull-left" style="display:inline-block;width: 49%;margin-right: 1%;">
                                        <i class="fa fa-picture-o"></i>&nbsp;ZOBRAZIŤ GALÉRIU
                                      </a>
                                      <a href="cpanel/store/catalog/article/delete-gallery/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" class="btn btn-danger pull-right" style="display:inline-block;width: 49%;margin-left: 1%;">
                                        <i class="fa fa-picture-o"></i>&nbsp;ODSTRÁNIŤ GALÉRIU
                                      </a>
                                  </div>
                                <?php } else { ?>
                                  <a href="cpanel/store/catalog/article/create-gallery/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" class="btn btn-primary btn-block">
                                    <i class="fa fa-picture-o"></i>&nbsp;VYTVORIŤ GALÉRIU
                                  </a>
                                <?php }?>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Article type<?php }?>
                                </label>                                                                              
                                <select name="article-type-id" class="form-control select">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_article_type==1) {?>selected<?php }?>>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_option_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_option_']->value;
} else { ?>Standard product<?php }?>
                                    </option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_article_type==2) {?>selected<?php }?>>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_option_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_option_']->value;
} else { ?>Pack of existing products<?php }?>
                                    </option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_article_type==3) {?>selected<?php }?>>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_option_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_option_']->value;
} else { ?>Virtual product (services, booking, downloadable products, etc.)<?php }?>
                                    </option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Visibility<?php }?>
                                </label>                                                                              
                                <select name="visibility-id" class="form-control select">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_visibility==1) {?>selected<?php }?>>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_option_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_option_']->value;
} else { ?>Everywhere<?php }?>
                                    </option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_visibility==2) {?>selected<?php }?>>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_option_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_option_']->value;
} else { ?>Catalog only<?php }?>
                                    </option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_visibility==3) {?>selected<?php }?>>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_option_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_option_']->value;
} else { ?>Search only<?php }?>
                                    </option>
                                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_visibility==4) {?>selected<?php }?>>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_option_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_option_']->value;
} else { ?>Nowhere<?php }?>
                                    </option>
                                </select>
                            </div><!-- end form-group -->
                            <div class="row form-group" style="margin:0 -10px;">
                                <div class="col-lg-6">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>New from Date<?php }?>
                                    </label>
                                    <input type="text" name="new-from-date" value="<?php if (!empty($_smarty_tpl->tpl_vars['article']->value->new_from_date)) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->new_from_date,"%Y-%m-%d");
} else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y-%m-%d");
}?>" maxlength="12" class="form-control datepicker">
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>New to Date<?php }?>
                                    </label>
                                    <input type="text" name="new-to-date" value="<?php if (!empty($_smarty_tpl->tpl_vars['article']->value->new_to_date)) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->new_to_date,"%Y-%m-%d");
} else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y-%m-%d");
}?>" maxlength="12" class="form-control datepicker">
                                </div><!-- end col -->
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE GENERAL INFORMATION -->
        
        <!-- ARTICLE SETTINGS -->
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Enabled<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="enable" <?php if ($_smarty_tpl->tpl_vars['article']->value->enabled==1) {?>checked=""<?php }?> value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Avaible for order<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="available-for-order" <?php if ($_smarty_tpl->tpl_vars['article']->value->is_avaiable_for_order==1) {?>checked=""<?php }?> value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Show price<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="show-price" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_show_price==1) {?>checked=""<?php }?> value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;?>

                                        <?php } else { ?>
                                            Online only (not sold in your retail store)
                                        <?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="online-only" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_online_only==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Notify for Quantity Below<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="notify-qty" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_notify_qty==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Intelligent monitoring<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="monitoring" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_monitoring==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Stock Availability<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="stock-availability" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_stock_availability==1) {?>checked=""<?php }?> value="1">
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Campaign Article<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="campaign" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->is_campaign==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>                                          
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_guest']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_guest']->value;
} else { ?>Guest<?php }?></label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="guest" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->guest==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_visitor']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_visitor']->value;
} else { ?>Visitor<?php }?></label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="visitor" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->visitor==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label><?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_customer']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_customer']->value;
} else { ?>Customer<?php }?></label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="customer" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->customer==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Statuses<?php }?>
                                </label>
                                <select name="statuses[]" class="form-control select" data-live-search="true" multiple>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statusList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_status;?>
" <?php if (is_array($_smarty_tpl->tpl_vars['article']->value->statusList)) {
if (in_array($_smarty_tpl->tpl_vars['item']->value->id_status,$_smarty_tpl->tpl_vars['article']->value->statusList)) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['item']->value->status_name;?>
</option>
                                    <?php } ?>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Qty<?php }?>
                                    <span style="color:red;">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="qty" value="<?php if (!empty($_smarty_tpl->tpl_vars['article']->value->qty)) {
echo $_smarty_tpl->tpl_vars['article']->value->qty;
} else { ?>0<?php }?>" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                              <label>
                                Predvolené nákupne množstvo
                              </label>
                              <div class="input-group">
                                <input type="number" name="default-purchase-amount" value="<?php if (!empty($_smarty_tpl->tpl_vars['article']->value->default_purchase_amount)) {
echo $_smarty_tpl->tpl_vars['article']->value->default_purchase_amount;
} else { ?>0<?php }?>" class="form-control"/>
                                <span class="input-group-addon">
                                  <i class="fa fa-cog"></i>
                                </span>
                              </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Minimum Qty Allowed in Shopping Cart<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="min_qty_in_cart" value="<?php if (!empty($_smarty_tpl->tpl_vars['article']->value->min_qty_in_cart)) {
echo $_smarty_tpl->tpl_vars['article']->value->min_qty_in_cart;
} else { ?>1<?php }?>" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Maximum Qty Allowed in Shopping Cart<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="max_qty_in_cart" value="<?php if (!empty($_smarty_tpl->tpl_vars['article']->value->max_qty_in_cart)) {
echo $_smarty_tpl->tpl_vars['article']->value->max_qty_in_cart;
} else { ?>1000<?php }?>" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Qty for Item's Status to Become Out of Stock<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="qty_out_of_stock" value="<?php if (!empty($_smarty_tpl->tpl_vars['article']->value->qty_out_of_stock)) {
echo $_smarty_tpl->tpl_vars['article']->value->qty_out_of_stock;
} else { ?>10<?php }?>" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->                          
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE SETTINGS -->
        
        <!-- ARTICLE PRICES -->
        <div class="col-lg-12">
            <div class="panel panel-danger panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-money"></i>&nbsp;
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_panel_prices']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_panel_prices']->value, 'UTF-8');
} else { ?>PRICES<?php }?>
                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-up"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Currency<?php }?>
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
" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_currency==$_smarty_tpl->tpl_vars['item']->value->id_currency) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->currency_name;?>
</option>
                                    <?php } ?>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Tax rule<?php }?>
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
" <?php if ($_smarty_tpl->tpl_vars['article']->value->id_tax==$_smarty_tpl->tpl_vars['item']->value->id_tax) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->tax_name;?>
</option>
                                    <?php } ?>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Pre-tax wholesale price<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="wholesale_price" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->wholesale_price,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Recommended retail price (RRP)<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="recommended-retail-price" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->recommended_retail_price,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Pre-tax retail price<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="retail_price" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->retail_price,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Retail price with tax<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="retail_tax_price" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->retail_tax_price,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="row form-group" style="margin:0 -10px;">
                              <div class="col-lg-6">
                                <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Unit price (tax excl.)<?php }?>
                                </label>
                                <input type="text" name="unit_price" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->unit_price,2);?>
" class="form-control">
                              </div><!-- end col -->
                              <div class="col-lg-6">
                                <label>
                                  <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Per<?php }?>
                                </label>
                                <input type="text" name="unity" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->unity;?>
" class="form-control">
                              </div><!-- end col -->
                            </div><!-- end form-group -->
                            <div class="row" style="margin: 0 -10px 15px -10px;">
                              <h4 style="display: block;margin: 0 10px 15px 10px;padding: 15px 0 7.5px 0;border-bottom: 1px solid #222;">
                                Prenájom
                              </h4>
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label>
                                    Suma (DPH)
                                  </label>
                                  <div class="input-group">
                                    <input type="number" name="rent-tax-price" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->rent_tax_price,2);?>
" placeholder="0.00" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </span>
                                  </div>
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label>
                                    Doba (číselná hodnota)
                                  </label>
                                  <div class="input-group">
                                    <input type="number" name="rent-number" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->rent_number;?>
" placeholder="1" class="form-control"/>
                                    <span class="input-group-addon">
                                      <i class="fa fa-clock-o"></i>
                                    </span>
                                  </div>
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <label>
                                    Jednotka času
                                  </label>
                                  <div class="input-group">
                                    <input type="text" name="rent-unit" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->rent_unit;?>
" placeholder="deň" class="form-control"/>
                                    <span class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </span>
                                  </div>
                                </div><!-- end form-group -->
                              </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-paypal"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Paypal<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-paypal" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_paypal==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-paypal"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>CC Paypal<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-cc-paypal" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_cc_paypal==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-visa"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>VISA<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-visa" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_visa==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-mastercard"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Master Card<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-master-card" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_master_card==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-discover"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Discover<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-discover" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_discover==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-credit-card"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Credit Card<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-credit-card" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_credit_card==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-google-wallet"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Google Wallet<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-g-wallet" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_g_wallet==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class="fa fa-cc-amex"></i>&nbsp;
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>AMEX<?php }?>
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="pay-amex" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_pay_amex==1) {?>checked=""<?php }?>>
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                            <div class="row" style="margin-bottom:15px;">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Show tax<?php }?><br>
                                            19.81 € (tax incl.) / 16.51 € (tax excl.)
                                        </label><br>
                                        <label class="switch">
                                            <input type="checkbox" name="show-tax" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_show_tax==1) {?>checked=""<?php }?> value="1">
                                            <span></span>
                                        </label>
                                    </div><!-- end form-group -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE PRICES -->
        
        <!-- ARTICLE SHIPPING -->
        <div class="col-lg-12">
            <div class="panel panel-warning panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-truck"></i>&nbsp;
                        <i class="fa fa-train"></i>&nbsp;
                        <i class="fa fa-ship"></i>&nbsp;
                        <i class="fa fa-plane"></i>&nbsp;
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_panel_shipping']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_panel_shipping']->value, 'UTF-8');
} else { ?>SHIPPING<?php }?>
                    </h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Package width<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-width" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->ap_width,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        cm
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Package height<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-height" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->ap_height,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        cm
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Package depth<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-depth" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->ap_depth,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        cm
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Package weight<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-weight" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->ap_weight,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        kg
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="form-group">
                                <label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_form_label_']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_form_label_']->value;
} else { ?>Additional shipping fees (for a single item)<?php }?>
                                </label>
                                <div class="input-group">
                                    <input type="number" name="ap-shipping-fee" value="<?php echo round($_smarty_tpl->tpl_vars['article']->value->ap_shipping_fee,2);?>
" class="form-control"/>
                                    <span class="input-group-addon">
                                        <i class="fa fa-money"></i>&nbsp;
                                        (tax excl.)
                                    </span>
                                </div>
                            </div><!-- end form-group -->
                            <div class="row form-group" style="margin:0 -10px;">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>
                                  Expedičná lehota (číselná hodnota)
                                </label>
                                <div class="input-group">
                                  <input type="text" name="expedition-number-value" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->expedition_number_value;?>
" placeholder="1" class="form-control">
                                  <span class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                  </span>
                                </div><!-- end input-group -->
                              </div><!-- end col -->
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label>
                                   Expedičná lehota (jednotka času)
                                </label>
                                <div class="input-group">
                                  <input type="text" name="expedition-unit-time" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->expedition_unit_time;?>
" placeholder="deň" class="form-control">
                                  <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </div><!-- end input-group -->
                              </div><!-- end col -->
                            </div><!-- end form-group -->
                        </div><!-- end col -->
                        <div class="col-lg-6">
                            <div class="col-lg-6">
                                <h4>Freight transportation</h4>
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-truck"></i>&nbsp;
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Truck transport<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-truck" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_tp_truck==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-train"></i>&nbsp;
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Rail transport<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-rail" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_tp_rail==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-ship"></i>&nbsp;
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Marine transport<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-marine" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_tp_marine==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <i class="fa fa-plane"></i>&nbsp;
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>Air transport<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="tp-air" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_tp_air==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                            <div class="col-lg-6">
                                <h4>Integrated Shipping Solutions</h4>
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/dhl_logo.gif" width="40" height="15" alt="DHL Express (DHL XML Solutions)"/>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>DHL Express (DHL XML Solutions)<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-dhl" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_iss_dhl==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/ups_brandmark.jpg" width="20" height="20" alt="UPS Shipping API"/>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>UPS Shipping API<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-ups" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_iss_ups==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/tnt_v2.png" width="40" height="15" alt="TNT ExpressConnect"/>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>TNT ExpressConnect (XML)<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-tnt" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_iss_tnt==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                                <div class="form-group">
                                    <label>
                                        <img src="extensions/store/images/brands/fedex.png" width="55" height="15" alt="FedEx Compatible Solutions"/>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_form_header_']->value)) {
echo $_smarty_tpl->tpl_vars['store_categories_form_header_']->value;
} else { ?>FedEx Compatible Solutions<?php }?>
                                    </label><br>
                                    <label class="switch">
                                        <input type="checkbox" name="iss-fedex" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value->on_iss_fedex==1) {?>checked=""<?php }?>>
                                        <span></span>
                                    </label>
                                </div><!-- end form-group -->
                            </div><!-- end col -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE SHIPPING -->
        
        <!-- ARTICLE CATEGORIES -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-primary panel-toggled">
            <div class="panel-heading ui-draggable-handle">
              <h3 class="panel-title">
                <i class="fa fa-exchange"></i>&nbsp;
                <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_panel_categories']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_panel_categories']->value, 'UTF-8');
} else { ?>CATEGORIES<?php }?>
              </h3>
              <ul class="panel-controls">
                <li>
                  <a href="#" onclick="return false;" data-toggle="modal" data-target="#modal_categories">
                    <span class="fa fa-plus"></span>
                  </a>
                </li>
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              </ul>
            </div><!-- end panel-heading -->
            <div class="panel-body panel-body-table">
              <div class="table-responsive">
                <table id="article-categories" class="table table-bordered table-striped table-actions">
                  <thead>
                    <tr>
                      <th width="50" class="text-center">
                        ID
                      </th>
                      <th width="50" class="text-center">
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_picture']->value, 'UTF-8');
} else { ?>PICTURE<?php }?>
                      </th>
                      <th width="200" class="text-left">
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_tables_category_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_categories_tables_category_name']->value, 'UTF-8');
} else { ?>CATEGORY NAME<?php }?>
                      </th>
                      <th class="text-center">
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_description']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_description']->value, 'UTF-8');
} else { ?>DESCRIPTION<?php }?>
                      </th>
                      <th width="50" class="text-center">
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php if (!empty($_smarty_tpl->tpl_vars['article']->value->categoryList)) {?>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article']->value->categoryList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                          <tr data-crn="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>
">
                            <td class="text-center" style="font-weight:700;color:#660000;">
                              <input type="hidden" name="categories[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['category-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>
">
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>

                            </td>
                            <td class="text-center">
                              <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                                <img src="thumbnail/crop/<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_hash;?>
/35/35" width="35" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_name;?>
"/>
                              <?php } else { ?>
                                <span style="font-size:1.4em;color:red;">
                                  <i class="glyphicon glyphicon-eye-open"></i>
                                </span>
                              <?php }?>
                            </td>
                            <td class="text-left" style="font-weight:700;">
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->category_name;?>

                            </td>
                            <td class="text-left">
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                            </td>
                            <td class="text-center">
                              <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                &nbsp;&nbsp;<span class="fa fa-minus"></span>
                              </button>
                            </td>
                          </tr>
                        <?php } ?>
                      <?php }?>
                  </tbody>
                </table>
              </div><!-- end table-responsive -->
            </div><!-- end panel-body -->
          </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE CATEGORIES -->
        
        <!-- ARTICLE ATTRIBUTES -->
        <div class="col-lg-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i>&nbsp;
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_panel_attributes']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_panel_attributes']->value, 'UTF-8');
} else { ?>ATTRIBUTES<?php }?>
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#" onclick="return false;" data-toggle="modal" data-target="#modal_atrributes">
                                <span class="fa fa-plus"></span>
                            </a>
                        </li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table id="article-attribute-values" class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="20" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_id']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_id']->value, 'UTF-8');
} else { ?>ID<?php }?>
                                    </th>
                                    <th class="text-left">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_tables_header_parent_attribute']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_attributes_tables_header_parent_attribute']->value, 'UTF-8');
} else { ?>PARENT ATTRIBUTE<?php }?>
                                    </th>
                                    <th width="400" class="text-left">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_tables_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_attributes_tables_header_']->value, 'UTF-8');
} else { ?>VETVA<?php }?>
                                    </th>
                                    <th class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_']->value, 'UTF-8');
} else { ?>HODNOTA<?php }?>
                                    </th>
                                    <th width="100" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($_smarty_tpl->tpl_vars['article']->value->attributeValueList)) {?>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article']->value->attributeValueList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                        <tr data-arn="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="attrValueList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['attr-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_attribute;?>
">
                                                <input type="hidden" name="attrValueList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['value-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

                                            </td>
                                            <td class="text-left">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value->attribute_name;?>

                                            </td>
                                            <td <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->tree)) {?>class="text-left"<?php } else { ?>class="text-center"<?php }?>>
                                                <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->tree)) {?>
                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                        <?php  $_smarty_tpl->tpl_vars['sItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->tree; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sItem']->key => $_smarty_tpl->tpl_vars['sItem']->value) {
$_smarty_tpl->tpl_vars['sItem']->_loop = true;
?>
                                                            <li><?php echo $_smarty_tpl->tpl_vars['sItem']->value['attribute_name'];?>
</li>
                                                        <?php } ?>
                                                     </ol>
                                                <?php } else { ?>
                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php }?>
                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ARTICLE ATTRIBUTES -->
        
        <!-- RELATED ARTICLE LIST -->
        <div class="col-lg-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i>&nbsp;
                        RELATED ARTICLES
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#" onclick="return false;" id="a-o-a-l" title="Article List">
                                <span class="fa fa-plus"></span>
                            </a>
                        </li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table id="related-articles" class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">#</th>
                                    <th width="30" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');
} else { ?>IMAGE<?php }?>
                                    </th>
                                    <th width="200" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');
} else { ?>SKU<?php }?>
                                    </th>
                                    <th width="400" class="text-left">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');
} else { ?>ARTICLE NAME<?php }?>
                                    </th>
                                    <th width="200" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (is_array($_smarty_tpl->tpl_vars['article']->value->relatedArticleList)&&(count($_smarty_tpl->tpl_vars['article']->value->relatedArticleList)>0)) {?>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article']->value->relatedArticleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                        <tr data-an="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="relatedArticleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['article-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
"/>
                                                <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

                                            </td>
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
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php }?>
                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- RELATED ARTICLE LIST -->
        
        <!-- ALTERNATIVE ARTICLE LIST -->
        <div class="col-lg-12">
            <div class="panel panel-success panel-toggled">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">
                        <i class="fa fa-exchange"></i>&nbsp;
                        ALTERNATIVE ARTICLES
                    </h3>
                    <ul class="panel-controls">
                        <li>
                            <a href="#" onclick="return false;" id="a-r-a" title="Article List">
                                <span class="fa fa-plus"></span>
                            </a>
                        </li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    </ul>
                </div><!-- end panel-heading -->
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table id="alternative-articles" class="table table-bordered table-striped table-actions">
                            <thead>
                                <tr>
                                    <th width="25" class="text-center">#</th>
                                    <th width="30" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_picture']->value, 'UTF-8');
} else { ?>IMAGE<?php }?>
                                    </th>
                                    <th width="200" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_sku']->value, 'UTF-8');
} else { ?>SKU<?php }?>
                                    </th>
                                    <th width="400" class="text-left">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_article_name']->value, 'UTF-8');
} else { ?>ARTICLE NAME<?php }?>
                                    </th>
                                    <th width="200" class="text-center">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_gallery_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (is_array($_smarty_tpl->tpl_vars['article']->value->alternativeArticleList)&&(count($_smarty_tpl->tpl_vars['article']->value->alternativeArticleList)>0)) {?>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article']->value->alternativeArticleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                        <tr data-an="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
">
                                            <td class="text-center" style="font-weight:700;color:#660000;">
                                                <input type="hidden" name="alternativeArticleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['article-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
"/>
                                                <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>

                                            </td>
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
                                                <button type="button" onclick="$(this).closest('tr').remove();" class="btn btn-warning">
                                                    &nbsp;&nbsp;<span class="fa fa-minus"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php }?>
                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
                </div><!-- end panel-body -->
            </div><!-- end panel -->
        </div><!-- end col -->
        <!-- //- ALTERNATIVE ARTICLE LIST -->

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
        

<!-- MODAL WINDOW MAKE A COPY -->                       
<div class="modal" id="make-a-copy" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="cpanel/store/catalog/article/make-a-copy" method="post" role="form">
                            <input type="hidden" name="article-id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" />
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <strong>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_make_copy']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_make_copy']->value, 'UTF-8');
} else { ?>MAKE A COPY<?php }?>
                                        </strong> 
                                    </h3>
                                </div>
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_modal_window_make_a_copy_article']->value)) {
echo $_smarty_tpl->tpl_vars['store_articles_modal_window_make_a_copy_article']->value;
} else { ?>New article name<?php }?>
                                        </label>
                                        <input type="text" name="article-name" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->article_name_internal;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['global_helper_copy']->value)) {
echo $_smarty_tpl->tpl_vars['global_helper_copy']->value;
} else { ?>Copy<?php }?>" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="panel-footer">                                 
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-save"></i>&nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_create']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_create']->value, 'UTF-8');
} else { ?>CREATE<?php }?>
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
<!-- //-- MODAL WINDOW MAKE A COPY -->

<!-- MODAL WINDOW CATEGORIES -->                       
<div class="modal" id="modal_categories" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
      <div class="modal-body" style="background-color:transparent;">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              <strong>
                <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_category_list']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_category_list']->value, 'UTF-8');
} else { ?>CATEGORY LIST<?php }?>
              </strong> 
            </h3>
          </div>
          <div class="panel-body panel-body-table">
            <?php if (isset($_smarty_tpl->tpl_vars['categoryList']->value)&&(is_array($_smarty_tpl->tpl_vars['categoryList']->value)&&(count($_smarty_tpl->tpl_vars['categoryList']->value)>0))) {?>
              <div class="table-responsive" style="padding: 5px;">
                <table id="categorylist" class="table table-bordered table-striped table-actions datatable">
                  <thead>
                    <tr>
                      <th width="25" class="text-center">
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_id']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_id']->value, 'UTF-8');
} else { ?>ID<?php }?>
                      </th>
                      <th width="30" class="text-center">
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_picture']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_picture']->value, 'UTF-8');
} else { ?>PICTURE<?php }?>
                      </th>
                      <th width="400" class="text-left">
                        <?php if (!empty($_smarty_tpl->tpl_vars['store_categories_tables_category_name']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_categories_tables_category_name']->value, 'UTF-8');
} else { ?>CATEGORY NAME<?php }?>
                      </th>
                      <th width="600" class="text-left">
                        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_description']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_description']->value, 'UTF-8');
} else { ?>DESCRIPTION<?php }?>
                      </th>
                      <th width="100" class="text-center"></th>
                    </tr>
                  </thead>
                  <tbody>                                            
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <tr data-crn="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>
">
                        <td class="text-center" style="font-weight: 700;color: #2a2d34;">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>

                        </td>
                        <td class="text-center">
                          <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                            <img src="thumbnail/crop/<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_hash;?>
/35/35" width="35" height="35" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_name;?>
"/>
                          <?php } else { ?>
                            <span style="font-size:1.4em;color:red;">
                              <i class="glyphicon glyphicon-eye-open"></i>
                            </span>
                          <?php }?>
                        </td>
                        <td class="text-left">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->category_name;?>

                        </td>
                        <td class="text-left" style="line-height: 15px;">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                        </td>
                        <td class="text-center">
                          <button type="button" data-cat-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_category;?>
" class="btn btn-success push-x">
                            &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                          </button>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- end table-responsive -->
            <?php } else { ?>
              <div class="alert alert-info" style="margin: 15px 0;" role="alert">
                <strong>INFO!</strong> You have no categories.
              </div><!-- end alert -->
            <?php }?>
          </div><!-- end panel-body -->
          <div class="panel-footer">                                 
            <button type="button" class="btn btn-default" data-dismiss="modal">
              <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
            </button>
          </div><!-- end panel-footer -->
        </div><!-- end panel -->
      </div><!-- end modal-body -->
    </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW CATEGORIES -->

<!-- MODAL WINDOW ATRRIBUTES -->                       
<div class="modal" id="modal_atrributes" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <div class="panel panel-default">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">
                            <strong>
                                <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_attribute_list']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_attribute_list']->value, 'UTF-8');
} else { ?>ATTRIBUTE LIST<?php }?>
                            </strong> 
                        </h3>
                        <ul class="panel-controls">
                            <li>
                                <a href="#" onclick="return false;" class="panel-collapse">
                                    <span class="fa fa-angle-down"></span>
                                </a>
                            </li>
                        </ul>                                
                    </div>
                    <div class="panel-body panel-body-table">
                        <div class="table-responsive" style="padding: 0px;">
                            <table id="attrValueList" class="table table-bordered table-striped table-actions datatable">
                                <thead>
                                    <tr>
                                        <th width="20" class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_id']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_id']->value, 'UTF-8');
} else { ?>ID<?php }?>
                                        </th>
                                        <th class="text-left">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_tables_header_parent_attribute']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_attributes_tables_header_parent_attribute']->value, 'UTF-8');
} else { ?>PARENT ATTRIBUTE<?php }?>
                                        </th>
                                        <th width="400" class="text-left">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_attributes_tables_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_attributes_tables_header_']->value, 'UTF-8');
} else { ?>VETVA<?php }?>
                                        </th>
                                        <th class="text-center">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_table_header_']->value, 'UTF-8');
} else { ?>HODNOTA<?php }?>
                                        </th>
                                        <th width="100" class="text-center">
                                            
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>                                            
                                   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attrValueList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                        <tr data-arn="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
">
                                            <td class="text-center" style="font-weight:700;color:#2a2d34;"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</td>
                                            <td class="text-left">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value->attribute_name;?>

                                            </td>
                                            <td <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->tree)) {?>class="text-left"<?php } else { ?>class="text-center"<?php }?>>
                                                <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->tree)) {?>
                                                    <ol class="breadcrumb" style="background: transparent;margin: 0;padding: 2px;">
                                                        <?php  $_smarty_tpl->tpl_vars['sItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->tree; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sItem']->key => $_smarty_tpl->tpl_vars['sItem']->value) {
$_smarty_tpl->tpl_vars['sItem']->_loop = true;
?>
                                                            <li><?php echo $_smarty_tpl->tpl_vars['sItem']->value['attribute_name'];?>
</li>
                                                        <?php } ?>
                                                     </ol>
                                                <?php } else { ?>
                                                    <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                        <i class="fa fa-times-circle-o"></i>
                                                    </span>
                                                <?php }?>
                                           </td>
                                            <td class="text-center">
                                                <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
</strong>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-atv="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" data-atr="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_attribute;?>
" class="btn btn-success push-y">
                                                    &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                                                </button>
                                            </td>
                                        </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end panel-body -->
                    <div class="panel-footer">                                 
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                        </button>
                    </div><!-- end panel-footer -->
                </div><!-- end panel -->
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW ATRRIBUTES -->

<!-- MODAL WINDOW ARTICLE LIST -->                         
<div class="modal" id="addOnArticles" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1200px;">                   
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;"><!-- --></div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
<!-- //-- MODAL WINDOW ARTICLE LIST -->


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
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/plugins/bootstrap/bootstrap-timepicker.min.js"><?php echo '</script'; ?>
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
 type="text/javascript" src="extensions/cpanel/js/ext/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/relatedArticleList.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="extensions/cpanel/js/ext/alternativeArticleList.js"><?php echo '</script'; ?>
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
  
  Search.init();

  Router.init();

  RelatedArticleList.init(<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
);

  AlternativeArticleList.init(<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
);
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function() {
    var jvalidate = $("#updateArticleForm").validate({
        ignore: [],
        rules: {                                            
            'sku': {
                required: true,
                minlength: 3,
                maxlength: 150
            }
        }                                        
    });
    
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
    
    $('#categorylist').find('button.push-x').each(function() {
        $(this).on('click',function() {
            var tr = $('#categorylist').find('[data-crn="'+$(this).data('cat-id')+'"]'),
               obj = {
                rNum: tr.find('td').get(0).textContent,
                img: tr.find('td').get(1).innerHTML,
                name: tr.find('td').get(2).textContent,
                desc: tr.find('td').get(3).textContent
               };
               
            pushCatToTable( $(this).data('cat-id'), obj );
        });
    });
    
    $('#attrValueList').find('button.push-y').each(function() {
        $(this).on('click',function() {
            var tr = $('#attrValueList').find('[data-arn="'+$(this).data('atv')+'"]'),
               obj = {
                rNum: tr.find('td').get(0).textContent,
                prAt:  tr.find('td').get(1).textContent,
                branch: tr.find('td').get(2).innerHTML,
                value: tr.find('td').get(3).textContent
               };
            pushAttrVToTable( $(this).data('atv'), $(this).data('atr'), obj );
        });
    });
    
    $('#article-categories').find('tbody').sortable();
    
    function pushCatToTable( id, obj ) {
        var oTable = $('#article-categories');
        var isElm  = (oTable.find('[data-crn="'+id+'"]').length > 0) ? true : false;
        
        if(!isElm) {
            var appendRow = '<tr data-crn="'+id+'">' +
                            '<td class="text-center" style="font-weight:700;color:#660000;"><input type="hidden" name="categories['+obj.rNum+'][\'category-id\']" value="'+id+'">'+obj.rNum+'</td>' +
                            '<td class="text-center">'+obj.img+'</td>' +
                            '<td class="text-left" style="font-weight:700;">'+obj.name+'</td>' +
                            '<td class="text-left">'+obj.desc+'</td>' +
                            '<td class="text-center"><button type="button" onClick="$(this).closest(\'tr\').remove();" class="btn btn-warning">&nbsp;&nbsp;<span class="fa fa-minus"></span></button></td></tr>';
                   
            oTable.append(appendRow);
       }
    }
    
    function pushAttrVToTable( atv, atr, obj ) {
        var oTable = $('#article-attribute-values');
        var isElm  = (oTable.find('[data-arn="'+atv+'"]').length > 0) ? true : false;
        
        if(!isElm) {
            var appendRow = '<tr data-arn="'+atv+'">' +
                            '<td class="text-center" style="font-weight:700;color:#660000;">' + 
                            '<input type="hidden" name="attrValueList['+obj.rNum+'][\'attr-id\']" value="'+atr+'">'+
                            '<input type="hidden" name="attrValueList['+obj.rNum+'][\'value-id\']" value="'+atv+'">'+obj.rNum+'</td>' +
                            '<td class="text-left">'+obj.prAt+'</td>' +
                            '<td class="text-left">'+obj.branch+'</td>' +
                            '<td class="text-center"><strong>'+obj.value+'</strong></td>' +
                            '<td class="text-center"><button type="button" onClick="$(this).closest(\'tr\').remove();" class="btn btn-warning">&nbsp;&nbsp;<span class="fa fa-minus"></span></button></td></tr>';
                   
            oTable.append(appendRow);
       }
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
