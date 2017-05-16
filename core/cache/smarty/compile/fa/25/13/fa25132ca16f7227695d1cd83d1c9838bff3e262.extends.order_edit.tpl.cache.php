<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-27 10:13:44
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/order_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1831019730588b0f48206e14-19647820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1eeb245d0fe6e4b8068e4a794e33c0237fae9c2' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/orders/order_edit.tpl',
      1 => 1469707248,
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
  'nocache_hash' => '1831019730588b0f48206e14-19647820',
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
  'unifunc' => 'content_588b0f489290c0_83705070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b0f489290c0_83705070')) {function content_588b0f489290c0_83705070($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
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
.id-order {
    background: #3fbae4;
    background: -moz-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3fbae4), color-stop(100%, #29b2e1));
    background: -webkit-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: -o-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: -ms-linear-gradient(top, #3fbae4 0%, #29b2e1 100%);
    background: linear-gradient(to bottom, #3fbae4 0%, #29b2e1 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3fbae4, endColorstr=#29b2e1, GradientType=0);
    display: inline-block;
    padding: 3px 15px;
    color: #fff;
    line-height: 100%;
}
.form-control[disabled], 
.form-control[readonly] {
    color: #330000;
}
#map-delivery-canvas,
#map-invoice-canvas {
    background: url(extensions/cpanel/img/map.png);
    background-position: inherit;
    background-repeat: no-repeat;
    height: 298px;
}
#ig-info > .input-group-addon {
    background-color: #3fbae4;
    border-color: #3fbae4;
}
#ig-default > .input-group-addon {
    background-color: brown;
    border-color: brown;
}
.widget .widget-title {
    font-size: 15px;
}
.widget .widget-big-int {
    font-size: 29px;
}
.panel-heading > ul.list-inline {
    min-width: 860px;
    margin: 2px 0 0 20px;
}
.panel-heading > ul.list-inline > li.widget {
    width: auto;
    min-width: 240px;
    min-height: 1px;
    margin-left: 15px;
    margin-bottom: 0px;
    padding: 3px 5px;
}
.panel-heading > ul.list-inline > li.widget:first-child {
    margin-left: 0px
}
#articleList > tbody > tr > td {
    font-size: 11.5px;
    line-height: 15px;
}
.attr-v-circle {
  display: block;
  position: absolute;
  top: 7px;
  left: auto;
  right: auto;
  width: 15px;
  height: 15px;
  margin: 0 auto;
  padding: 0;
  line-height: 100%;
  border-radius: 100%;
}
.attr-name {
  width: 33% !important;
  padding: 0 5px;
  font-size: .8em !important;
  line-height: 1.3em;
  text-align: left !important;
  vertical-align: middle;
  word-break: break-word;
  white-space: normal;
}

@media only screen and (min-width: 1666px) {
    #order .x2 {
        width: 16.66666667%;
    }
    #order .x3 {
        width: 25%;
    }
    #order .x4 {
        width: 33.33333333%;
    }
    #order .x5 {
        width: 41.66666667%;
    }
    #order .x6 {
        width: 50%;
    }
    #order .x12 {
        width: 100%;
    }
}

@media only screen and (max-width: 1666px) {
    #order .xmt-15 {
        margin-top: 15px;
    }
    #order .xpl-0 {
        padding-left: 0px;
    }
    #order .xpr-0 {
        padding-right: 0px;
    }
    #order .panel-heading > ul.list-inline {
        margin-left: 8px;
    }
    #flip-scroll table > thead > tr > th:nth-child(1),
    #flip-scroll table > thead > tr > th:nth-child(3),
    #flip-scroll table > thead > tr > th:nth-child(4),
    #flip-scroll table > thead > tr > th:nth-child(6),
    #flip-scroll table > thead > tr > th:nth-child(7),
    #flip-scroll table > thead > tr > th:nth-child(9) {
        height: 45px;
        line-height: 30px;
    }
    #flip-scroll table > thead > tr > th:nth-child(5),
    #flip-scroll table > thead > tr > th:nth-child(8),
    #flip-scroll table > thead > tr > th:nth-child(10),
    #flip-scroll table > thead > tr > th:nth-child(11),
    #flip-scroll table > thead > tr > th:nth-child(12),
    #flip-scroll table > thead > tr > th:nth-child(13),
    #flip-scroll table > thead > tr > th:nth-child(14) {
        height: 45px;
        line-height: 17px;
    }
    #flip-scroll table > thead > tr > th:nth-child(2) {
        height: 52px;
        line-height: 37px;
    }
    #flip-scroll table > thead > tr > th:nth-child(15) {
        height: 58px;
        line-height: 43px;
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
<li>
    <a href="cpanel/store/orders" title="<?php if (!empty($_smarty_tpl->tpl_vars['store_section_orders']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_orders']->value;
} else { ?>Orders<?php }?>">
        <?php if (!empty($_smarty_tpl->tpl_vars['store_section_orders']->value)) {
echo $_smarty_tpl->tpl_vars['store_section_orders']->value;
} else { ?>Orders<?php }?>
    </a>
</li>
<li class="active">
    <a href="cpanel/store/orders/management" title="Management">
        Management
    </a>
</li>
<li>
    <a href="#" onclick="return false;" title="Edit">
        <?php if (!empty($_smarty_tpl->tpl_vars['global_table_header_edit']->value)) {
echo $_smarty_tpl->tpl_vars['global_table_header_edit']->value;
} else { ?>Edit<?php }?>
    </a>
</li>
<li class="active">
    <a href="cpanel/store/orders/edit/<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
" title="<?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
">
        <?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>

    </a>
</li>

                </ul>
                <!-- END BREADCRUMB -->                       
                
    <div class="page-title">                    
        <h2>
            <i class="fa fa-clipboard"></i>&nbsp;
            <?php if (!empty($_smarty_tpl->tpl_vars['store_section_orders']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_section_orders']->value, 'UTF-8');
} else { ?>Orders<?php }?>&nbsp;
            <span style="font-size: .7em;color:red;"><sup>Beta</sup></span>
        </h2>
    </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
<div id="order" class="row" style="margin-bottom:350px;">
    <div class="col-lg-12">
        <form action="cpanel/store/orders/update" method="post" role="form">
            <input type="hidden" name="order-id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id_order;?>
" />
            <input type="hidden" name="secure-key" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
" />
            <div class="panel panel-colorful">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title" style="overflow: hidden;">
                        <span style="display:block;font-size:1.4em;float:left;">
                            <i class="fa fa-pencil-square-o"></i>&nbsp;
                            <span style="font-weight:100;color:#000;">
                                ORDER ID:&nbsp;
                                <strong class="id-order"><?php echo $_smarty_tpl->tpl_vars['order']->value->id_order;?>
</strong>
                                &nbsp;|&nbsp;
                                <i class="fa fa-barcode"></i>
                                &nbsp;
                                <strong><?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
</strong>
                            </span>
                        </span>
                    </h3>                      
                </div><!-- end panel-header -->
                <div class="panel-body panel-body-form">
                    <div class="row">
                        <div class="col-sm-6 x3">
                            <div class="widget widget-primary widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-calendar-o"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">ORDER CREATED</div>
                                    <div class="widget-big-int num-count"><?php echo $_smarty_tpl->tpl_vars['order']->value->created;?>
</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                        <div class="col-sm-6 x3">
                            <div class="widget widget-info widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">PRODUCTS</div>
                                    <div class="widget-big-int num-count"><?php echo $_smarty_tpl->tpl_vars['order']->value->cart->items;?>
KS</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                        <div class="col-sm-6 x3">
                            <div class="widget widget-warning widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">DISCOUNT</div>
                                    <div class="widget-big-int num-count"><?php echo $_smarty_tpl->tpl_vars['order']->value->total_discounts;
echo $_smarty_tpl->tpl_vars['order']->value->currency->sign;?>
</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                        <div class="col-sm-6 x3">
                            <div class="widget widget-success widget-item-icon widget-padding-sm">                            
                                <div class="widget-item-left">
                                    <i class="fa fa-usd"></i>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">AMOUNT</div>
                                    <div class="widget-big-int num-count"><?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;
echo $_smarty_tpl->tpl_vars['order']->value->currency->sign;?>
</div>
                                </div>                                                        
                            </div> 
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-clipboard"></i>&nbsp;
                                        OBJEDNÁVKA
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="col-sm-4 x2">
                                        <div class="form-group">
                                            <label>Stav</label>
                                            <select name="status-id" class="form-control select" data-style="btn-success" data-live-search="true">
                                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statusList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_status;?>
" <?php if ($_smarty_tpl->tpl_vars['order']->value->id_status==$_smarty_tpl->tpl_vars['item']->value->id_status) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->status_name;?>
</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vytlačiť objednávku</label>
                                            <a href="cpanel/store/orders/print-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
" target="__blank" class="btn btn-block btn-info" title="Vytlačiť objednávku">
                                                <i class="fa fa-print"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label>Faktúra</label>
                                            <?php if (!is_null($_smarty_tpl->tpl_vars['order']->value->invoice)) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['order']->value->invoice->file_url;?>
" class="btn btn-primary btn-sm btn-block text-uppercase" target="_blank" title="INVOICE PDF">
                                                    <i class="fa fa-file-pdf-o"></i>
                                                </a>
                                            <?php } else { ?>
                                                <button type="button" class="btn btn-block btn-primary" disabled>
                                                    <i class="fa fa-file-pdf-o"></i>
                                                </button>
                                            <?php }?>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-4 x2">
                                        <div class="form-group">
                                            <label>Klientská poznámka</label>
                                            <textarea name="notice" rows="8" class="form-control" disabled><?php echo $_smarty_tpl->tpl_vars['order']->value->notice;?>
</textarea>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-4 x3">
                                        <div class="form-group">
                                            <label>Súkromná správa</label>
                                            <textarea name="private-message" rows="8" class="form-control"><?php echo $_smarty_tpl->tpl_vars['order']->value->private_message;?>
</textarea>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-sm-12 x5 xmt-15">
                                        <div class="col-sm-6 xpl-0">
                                            <div class="form-group">
                                                <label>Informovať zákazníka</label>
                                                <textarea rows="8" class="form-control" disabled></textarea>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-sm-6 xpr-0">
                                            <div class="form-group">
                                                <label>
                                                    EMAIL
                                                </label>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['emailList']->value)) {?>
                                                    <select id="send-email-id" class="form-control select" data-style="btn-info" data-live-search="true" disabled>
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
                                                    <div class="alert alert-info" role="alert" style="padding: 5px 15px;">
                                                        <span style="font-size:11px;">
                                                            <i class="fa fa-info-circle"></i>
                                                            <strong>There are no emails.</strong>
                                                        </span>
                                                    </div>
                                                <?php }?>
                                            </div><!-- end form-group -->
                                            <div class="form-group">
                                                <button type="button" class="btn btn-block btn-default" style="margin-top:25px;" disabled>
                                                    <i class="fa fa-paper-plane"></i>&nbsp;
                                                    Odoslať
                                                </button>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end col -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- CUSTOMER INFORMATION -->
                    <div class="row">
                        <div class="col-sm-12 x4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-info-circle"></i>&nbsp;
                                        ZÁKAZNÍK
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" value="<?php if (!is_null($_smarty_tpl->tpl_vars['customer']->value)) {
echo $_smarty_tpl->tpl_vars['customer']->value->auth_email;
} else {
echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->email;
}?>" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Účet bol registrovaný</label>
                                        <input type="text" value="<?php if (!is_null($_smarty_tpl->tpl_vars['customer']->value)) {
echo $_smarty_tpl->tpl_vars['customer']->value->created;
} else { ?>NEREGISTROVANÝ<?php }?>" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Celkom objednávok</label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['statistics']->value->orderTotal;?>
" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Celkom zakúpených produkotv</label>
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['statistics']->value->productTotal;?>
" class="form-control">
                                            <span class="input-group-addon">KS</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tovar v celkovej hodnote</label>
                                        <div class="input-group">                                            
                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['order']->value->currency->sign;?>
</span>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['statistics']->value->amount;
echo $_smarty_tpl->tpl_vars['order']->value->currency->currency_name;?>
" class="form-control" disabled>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                        <div class="col-sm-6 x4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-truck"></i>&nbsp;
                                        DORUČENIE
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="form-group col-lg-12">
                                        <label>Názov</label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_name;?>
" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6 pull-left">
                                        <label>Čas</label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time;?>
" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6 pull-right">
                                        <label>Jednotka času</label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->delivery_time_unit;?>
" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Náklady</label>
                                        <div class="input-group">                                            
                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->sign;?>
</span>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->cost;
echo $_smarty_tpl->tpl_vars['order']->value->delivery->currency_name;?>
" class="form-control" disabled>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Popis</label>
                                        <textarea class="form-control" rows="4" disabled><?php echo $_smarty_tpl->tpl_vars['order']->value->delivery->description;?>
</textarea>
                                    </div>
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                        <div class="col-sm-6 x4">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-money"></i>&nbsp;
                                        PLATBA
                                    </h3>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="form-group">
                                        <label>Názov</label>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->payment->payment_name;?>
" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Náklady</label>
                                        <div class="input-group">                                            
                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['order']->value->payment->sign;?>
</span>
                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->payment->cost;
echo $_smarty_tpl->tpl_vars['order']->value->payment->currency_name;?>
" class="form-control" disabled>
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Popis</label>
                                        <textarea class="form-control" rows="7" disabled><?php echo $_smarty_tpl->tpl_vars['order']->value->payment->description;?>
</textarea>
                                    </div>
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                         <div class="col-sm-12 x6">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-truck"></i>&nbsp;
                                        DORUČOVACIA ADRESA
                                    </h3>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="setAddressType(1);" data-toggle="modal" data-target="#address">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Meno</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->first_name;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Priezvisko</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->last_name;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Ulica, číslo</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->street;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Mesto</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->city;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>PSČ</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->zip;?>
" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Krajina</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['primaryCountry']->value;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Spoločnosť</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->company_name;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČO</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->company_reg_number;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>DIČ</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->vat;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČ-DPH</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->vat_code;?>
" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Mapa</label>
                                                <div id="map-delivery-canvas"><!-- --></div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                        <div class="col-sm-12 x6">
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-file-text"></i>&nbsp;
                                        FAKTURAČNÁ ADRESA
                                    </h3>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="setAddressType(2);" data-toggle="modal" data-target="#address">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Meno</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->first_name;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Priezvisko</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->last_name;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Ulica, číslo</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->street;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Mesto</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->city;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>PSČ</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->zip;?>
" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Krajina</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['invoiceCountry']->value;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Spoločnosť</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_name;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČO</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->company_reg_number;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>DIČ</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->vat;?>
" class="form-control" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>IČ-DPH</label>
                                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->vat_code;?>
" class="form-control" disabled>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Mapa</label>
                                                <div id="map-invoice-canvas"><!-- --></div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-sm-12 x12">
                            <div id="flip-scroll">
                                <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <i class="fa fa-list-alt"></i>&nbsp;
                                        PRODUKTY
                                    </h3>
                                    <ul class="list-inline pull-left">
                                        <li class="widget widget-info">
                                            <span>Položiek celkom</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                <?php echo $_smarty_tpl->tpl_vars['order']->value->cart->items;?>
ks
                                            </span>
                                        </li>
                                        <li class="widget widget-warning">
                                            <span>Celkom (Medzisúčet)</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                <?php echo $_smarty_tpl->tpl_vars['order']->value->cart->subtotal;
echo $_smarty_tpl->tpl_vars['order']->value->cart->currency_name;?>

                                            </span>
                                        </li>
                                        <li class="widget widget-danger">
                                            <span><?php echo $_smarty_tpl->tpl_vars['order']->value->tax->tax_name;?>
</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                <?php echo $_smarty_tpl->tpl_vars['order']->value->cart->tax;
echo $_smarty_tpl->tpl_vars['order']->value->cart->currency_name;?>

                                            </span>
                                        </li>
                                        <li class="widget widget-success">
                                            <span>Celkom na úhradu</span>
                                            <span style="display:inline-block;float:right;margin-right:5px;">
                                                <?php echo $_smarty_tpl->tpl_vars['order']->value->cart->amount;
echo $_smarty_tpl->tpl_vars['order']->value->cart->currency_name;?>

                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="return false;" data-toggle="modal" data-target="#addOnArticleList">
                                                <span class="fa fa-plus"></span>
                                            </a>
                                        </li>
                                    </ul>     
                                </div><!-- end panel-heading -->
                                <div class="panel-body panel-body-form panel-body-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="25" class="text-center">
                                                        #
                                                    </th>
                                                    <th width="35" class="text-center">
                                                        NÁHĽAD
                                                    </th>
                                                    <th width="35" class="text-center">
                                                        SKU
                                                    </th>
                                                    <th width="400" class="text-left">
                                                        NÁZOV POLOŽKY
                                                    </th>
                                                    <th class="text-right">
                                                        PÔVODNÁ CENA / ks<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-right">
                                                        CENA / Ks<br>
                                                        bez DPH
                                                    </th>
                                                    <th class="text-center">
                                                        DPH (%)
                                                    </th>
                                                    <th class="text-center" style="width: 260px !important;">
                                                        MATRICA
                                                    </th>
                                                    <th class="text-right" style="min-width: 120px !important;">
                                                        CENA / Ks<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-center" style="min-width: 120px !important;">
                                                        MNOŽSTVO
                                                    </th>
                                                    <th class="text-right">
                                                        ZĽAVA<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom<br>
                                                        bez DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom<br>
                                                        DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom<br>
                                                        s DPH
                                                    </th>
                                                    <th class="text-right">
                                                        Celkom zľava<br>
                                                        s DPH
                                                    </th>
                                                    <th width="100" class="text-center">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_remove']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_remove']->value, 'UTF-8');
} else { ?>REMOVE<?php }?>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order']->value->cart->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                <tr>
                                                  <td class="text-center" style="font-weight:700;color:#660000;">
                                                    <input type="hidden" name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['item-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_cart_item;?>
" />
                                                    <input type="hidden" name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['article-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" />
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>

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
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
</strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->former_price;
echo $_smarty_tpl->tpl_vars['order']->value->currency->sign;?>

                                                  </td>
                                                  <td class="text-right">
                                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->retail_price;
echo $_smarty_tpl->tpl_vars['order']->value->currency->sign;?>

                                                  </td>
                                                  <td class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['order']->value->tax->rate;?>

                                                  </td>
                                                  <td class="text-center" style="width: 260px !important;">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>
                                                      <div class="form-group" style="width: 260px !important;margin-bottom: 3px;">
                                                        <div id="ig-info" class="input-group">                                            
                                                          <span class="input-group-addon attr-name">
                                                            <?php echo mb_strtoupper(html_entity_decode($_smarty_tpl->tpl_vars['item']->value->matrix->par_a->attr_name,2,"UTF-8"), 'UTF-8');?>

                                                          </span><!-- end input-group-addon -->
                                                          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->value;?>
" class="form-control text-left" style="font-size: .8em !important;padding: 6px 4px;" disabled>
                                                          <span class="input-group-addon" style="position: relative;">
                                                            <span class="attr-v-circle" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->color;?>
;"><!-- --></span><!-- end attr-v-circle -->
                                                          </span>
                                                        </div>
                                                      </div><!-- end form-group -->
                                                      <div class="form-group" style="width: 260px !important;">
                                                        <div id="ig-info" class="input-group" style="width: 260px !important;margin-bottom: 3px;">                                            
                                                          <span class="input-group-addon attr-name">
                                                            <?php echo mb_strtoupper(html_entity_decode($_smarty_tpl->tpl_vars['item']->value->matrix->par_b->attr_name,2,"UTF-8"), 'UTF-8');?>

                                                          </span><!-- end input-group-addon -->
                                                          <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->value;?>
" class="form-control text-left" style="font-size: .8em !important;padding: 6px 4px;" disabled>
                                                          <span class="input-group-addon" style="position: relative;">
                                                            <span class="attr-v-circle" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->color;?>
;"><!-- --></span><!-- end attr-v-circle -->
                                                          </span><!-- end input-group-addon -->
                                                        </div><!-- end input-group -->
                                                      </div><!-- end form-group -->
                                                    <?php } else { ?>
                                                      <span style="font-size: 1.4em;color: #fea223;">
                                                        <i class="fa fa-ban"></i>
                                                      </span>
                                                    <?php }?>
                                                  </td>
                                                  <td class="text-center">
                                                    <div class="form-group pull-right" style="width: 100%;">
                                                      <input type="text"  name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['amount']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;?>
" class="form-control text-right">
                                                    </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-group pull-right" style="width: 100%;">
                                                        <input type="number"  name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['qty']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>
" min="1" class="form-control text-right">
                                                      </div>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      <?php echo $_smarty_tpl->tpl_vars['item']->value->discount;
echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      <?php echo $_smarty_tpl->tpl_vars['item']->value->amount_without_tax;
echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      <?php echo $_smarty_tpl->tpl_vars['item']->value->tax;
echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      <?php echo $_smarty_tpl->tpl_vars['item']->value->amount;
echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

                                                    </strong>
                                                  </td>
                                                  <td class="text-right">
                                                    <strong>
                                                      <?php echo $_smarty_tpl->tpl_vars['item']->value->total_discount;
echo $_smarty_tpl->tpl_vars['order']->value->currency->iso_code;?>

                                                    </strong>
                                                  </td>
                                                  <td class="text-center">
                                                    <label class="switch">
                                                      <input type="checkbox" name="articleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['remove']" value="1">
                                                      <span></span>
                                                    </label>
                                                  </td>
                                                </tr>
                                              <?php } ?>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end panel-body -->
                            </div><!-- end panel -->
                            </div><!-- end flip-scroll -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                     <?php if (is_null($_smarty_tpl->tpl_vars['order']->value->invoice)) {?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading ui-draggable-handle">
                                        <h3 class="panel-title">
                                            <i class="fa fa-file-pdf-o"></i>&nbsp;
                                            FAKTÚRA
                                        </h3>
                                    </div><!-- end panel-heading -->
                                    <div class="panel-body panel-body-form">
                                        <div class="row" style="margin-bottom:15px;">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>
                                                        Číslo faktúry
                                                    </label>
                                                    <input type="text" name="invcc" value="<?php if (strlen($_smarty_tpl->tpl_vars['INVCC']->value)==0) {?>0001<?php } else {
echo $_smarty_tpl->tpl_vars['INVCC']->value;
}?>" maxlength="100" class="form-control">
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>
                                                        Dátum dodania tovaru/služby
                                                    </label>
                                                    <div class="input-group date">
                                                        <input type="text" name="date-0" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y-%m-%d");?>
" maxlength="12" class="form-control datepicker">
                                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>
                                                        Dátum vystavenia dokladu
                                                    </label>
                                                    <div class="input-group date">
                                                        <input type="text" name="date-1" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y-%m-%d");?>
" maxlength="12" class="form-control datepicker">
                                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>
                                                        Dátum splatnosti
                                                    </label>
                                                    <div class="input-group date">
                                                        <input type="text" name="date-2" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y-%m-%d");?>
" maxlength="12" class="form-control datepicker">
                                                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    </div>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div><!-- end panel-body -->
                                </div><!-- end panel -->         
                            </div><!-- end col -->
                        </div><!-- end row -->
                    <?php }?>
                </div><!-- end panel-body -->
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group pull-left" style="width:400px;margin-right:15px;">
                                <select name="action-id" class="form-control select" data-style="btn-warning">
                                    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {
echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;
} else { ?>Choose...<?php }?></option>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['emailList']->value)) {?>
                                        <option value="1">Spracovať a zaslať objednávku emailom</option>
                                        <?php if (!is_null($_smarty_tpl->tpl_vars['order']->value->invoice)) {?>
                                        <option value="6">Spracovať a zaslať faktúru emailom</option>
                                        <?php }?>
                                    <?php }?>
                                    <?php if (is_null($_smarty_tpl->tpl_vars['order']->value->invoice)) {?>
                                        <option value="2">Spracovať a vygenerovať faktúru</option>
                                    <?php } else { ?>
                                        <option value="3">Spracovať a vygenerovať novú faktúru</option>
                                    <?php }?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['emailList']->value)) {?>
                                        <?php if (is_null($_smarty_tpl->tpl_vars['order']->value->invoice)) {?>
                                            <option value="4">Spracovať, vygenerovať faktúru a zaslať email</option>
                                        <?php } else { ?>
                                            <option value="5">Spracovať, vygenerovať novú faktúru a zaslať email</option>
                                        <?php }?>
                                    <?php }?>
                                </select>
                            </div><!-- end form-group -->
                            <div class="form-group pull-left" style="width:400px;margin-right:15px;">
                                <?php if (!empty($_smarty_tpl->tpl_vars['emailList']->value)) {?>
                                    <select name="email-id" class="form-control select" data-style="btn-info" data-live-search="true">
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
                                <?php }?>
                            </div><!-- end form-group -->
                            <button type="submit" class="btn btn-danger" role="button">
                                <i class="fa fa-exclamation-triangle"></i>&nbsp;
                                VYKONAŤ AKCIU
                            </button>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end panel-footer -->                         
            </div><!-- end main panel -->
        </form>
    </div><!-- end col -->
</div><!-- end row -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
<!-- MODAL WINDOW ARTICLE LIST -->                         
<div class="modal" id="addOnArticleList" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1120px;">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <form action="cpanel/store/orders/add-article-list-to-order" method="post" role="form">
                    <input type="hidden" name="order-id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id_order;?>
" />
                    <input type="hidden" name="secure-key" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
" />
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if (!empty($_smarty_tpl->tpl_vars['articleList']->value)) {?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading ui-draggable-handle">
                                            <h3 class="panel-title">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_articles_table_header_articles']->value, 'UTF-8');
} else { ?>ARTICLE LIST<?php }?>&nbsp;&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['pagination_info']->value;?>
</span>
                                            </h3>
                                            <ul class="panel-controls">
                                                <li>
                                                    <a href="#" onclick="return false;" class="panel-collapse">
                                                        <span class="fa fa-angle-down"></span>
                                                    </a>
                                                </li>
                                            </ul>                                
                                        </div>
                                        <div class="panel-body panel-body-table panel-body-form">
                                            <div class="row">
                                                <div class="col-lg-12" style="padding:15px 10px;">
                                                    <div class="form-group pull-left" style="width:80px;margin-right:5px;">
                                                        <select class="form-control select" onchange="location = 'cpanel/store/orders/edit/<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
/modal/1/'+this.options[this.selectedIndex].value;" required="">
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

                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="alert alert-info" role="alert">
                                                        <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                                                        Pridávať produkty možete len zo zobrazeného výberu.
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <div class="table-responsive" style="border-top:1px solid #E5E5E5;">
                                                <table id="articleList" class="table table-bordered table-striped table-actions">
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
                                                            <th class="text-center">
                                                                MNOŽSTVO
                                                            </th>
                                                            <th class="text-right">
                                                                MALOOBCHODNÁ CENA / ks<br>
                                                                s DPH
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
                                                                    <input type="hidden" name="addOnArticleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['article-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
">
                                                                    <input type="checkbox" name="addOnArticleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['on']" value="1">
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
                                                                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>
</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-info" class="input-group">                                            
                                                                            <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                                                            <input type="number"  name="addOnArticleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['qty']" value="1" min="1" class="form-control text-right">
                                                                            <span class="input-group-addon">Ks</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="form-group pull-right" style="width:200px;">
                                                                        <div id="ig-default" class="input-group">                                            
                                                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['order']->value->currency->sign;?>
</span>
                                                                            <input type="text"  name="addOnArticleList[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['amount']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->retail_tax_price;?>
" class="form-control text-right">
                                                                            <span class="input-group-addon">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <button type="submit" class="btn btn-success">
                                                PRIDAŤ
                                            </button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                                            </button>
                                        </div><!-- end panel-footer -->
                                    </div><!-- end panel -->
                            <?php } else { ?>
                                <div class="alert alert-info" role="alert">
                                    <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                                    There are no articles.
                                </div>
                            <?php }?>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW ARTICLE LIST -->

<!-- MODAL WINDOW DELIVERY ADDRESS -->
<div class="modal" id="address" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width:1120px;">
        <div class="modal-content" style="background-color:transparent;padding: 45px 0;border: 0;">                    
            <div class="modal-body" style="background-color:transparent;">
                <form action="cpanel/store/orders/change-order-address" method="post" role="form">
                    <input type="hidden" name="order-id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id_order;?>
" />
                    <input type="hidden" name="secure-key" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
" />
                    <input type="hidden" name="address-type" value="0" />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['store_']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['store_']->value, 'UTF-8');
} else { ?>ZMENA ADRESY<?php }?>
                                    </h3>
                                    <ul class="panel-controls">
                                        <li>
                                            <a href="#" onclick="return false;" id="unchecked">
                                                <i class="fa fa-minus-square"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table panel-body-form">
                                    <?php if (!is_null($_smarty_tpl->tpl_vars['addressList']->value)) {?>
                                        <div class="row">
                                            <div class="col-lg-12" style="padding:0px;">
                                                <div class="table-responsive">
                                                    <table id="addressList" class="table table-bordered table-striped table-actions" style="margin: 0;width:1400px;min-width:1400px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">
                                                                    #
                                                                </th>
                                                                <th class="text-center">
                                                                    PRIMARY
                                                                </th>
                                                                <th class="text-center">
                                                                    INVOICE
                                                                </th>
                                                                <th class="text-left">
                                                                    FIRST NAME
                                                                </th>
                                                                <th class="text-left">
                                                                    LAST NAME
                                                                </th>
                                                                <th class="text-left">
                                                                    EMAIL
                                                                </th>
                                                                <th class="text-left">
                                                                    PHONE
                                                                </th>
                                                                <th class="text-left">
                                                                    COUNTRY
                                                                </th>
                                                                <th class="text-left">
                                                                    CITY
                                                                </th>
                                                                <th class="text-left">
                                                                    STREET
                                                                </th>
                                                                <th class="text-left">
                                                                    ZIP
                                                                </th>
                                                                <th class="text-left">
                                                                    COMPANY NAME
                                                                </th>
                                                                <th class="text-left">
                                                                    REG. NUMBER
                                                                </th>
                                                                <th class="text-left">
                                                                    VAT
                                                                </th>
                                                                <th class="text-left">
                                                                    VAT CODE
                                                                </th>
                                                                <th class="text-left">
                                                                    CREATED
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addressList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                                <tr>
                                                                    <td class="text-center" style="font-weight:700;color:#2a2d34;">
                                                                        <input type="checkbox" name="address[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
]['address-id']" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_contact;?>
"/>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->is_primary==1) {?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:green;">
                                                                                <i class="fa fa-check-circle"></i>
                                                                            </span>
                                                                        <?php } else { ?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->is_invoice==1) {?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:green;">
                                                                                <i class="fa fa-check-circle"></i>
                                                                            </span>
                                                                        <?php } else { ?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->email;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->phone;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->city;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->street;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->zip;?>

                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->company_name)) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->company_name;?>

                                                                        <?php } else { ?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->company_reg_number)) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->company_reg_number;?>

                                                                        <?php } else { ?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->vat)) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->vat;?>

                                                                        <?php } else { ?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->vat_code)) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->vat_code;?>

                                                                        <?php } else { ?>
                                                                            <span style="font-size:1.4em;font-weight:700;color:orange;">
                                                                                <i class="fa fa-ban"></i>
                                                                            </span>
                                                                        <?php }?>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->created;?>

                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div><!-- end table-responsive -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                        <div id="addr" class="row" style="margin-bottom: 15px;">
                                            <h4 style="background:#F5F5F5;margin:0 auto 15px auto;padding:15px 10px;border-color:#E5E5E5;color:#434a54;">NOVÁ ADRESA</h4>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Meno</label>
                                                    <input type="text" name="first-name" value="" class="form-control" required>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Priezvisko</label>
                                                    <input type="text" name="last-name" value="" class="form-control" required>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Ulica, číslo</label>
                                                    <input type="text" name="street" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Mesto</label>
                                                    <input type="text" name="city" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>PSČ</label>
                                                    <input type="text" name="zip" value="" class="form-control">
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Krajina</label>
                                                    <select name="country" class="form-control select" required>
                                                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->id_lang==190) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>
</option>
                                                        <?php } ?>
                                                    </select>
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>Spoločnosť</label>
                                                    <input type="text" name="company-name" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>IČO</label>
                                                    <input type="text" name="company-reg-number" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>DIČ</label>
                                                    <input type="text" name="vat" value="" class="form-control">
                                                </div><!-- end form-group -->
                                                <div class="form-group">
                                                    <label>IČ-DPH</label>
                                                    <input type="text" name="vat-code" value="" class="form-control">
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                            <div class="col-lg-4">
                                                <div class="form-group col-lg-12" style="margin-top:22px;">
                                                    <div class="col-lg-3">
                                                        <label class="switch">
                                                            <input type="checkbox" name="personal_pickup" value="1">
                                                            <span></span>
                                                        </label>
                                                    </div><!-- end col -->
                                                    <label class="col-lg-9" style="padding-top:5px;">Osobný odber</label>
                                                </div><!-- end form-group -->
                                                <div class="form-group col-lg-12">
                                                    <div class="col-lg-3">
                                                        <label class="switch">
                                                            <input type="checkbox" name="edit" value="1">
                                                            <span></span>
                                                        </label>
                                                    </div><!-- end col -->
                                                    <label class="col-lg-9" style="padding-top:5px;">Upraviť</label>
                                                </div><!-- end form-group -->
                                                <div class="form-group col-lg-12">
                                                    <div class="col-lg-3">
                                                        <label class="switch">
                                                            <input type="checkbox" name="edit" value="1">
                                                            <span></span>
                                                        </label>
                                                    </div><!-- end col -->
                                                    <label class="col-lg-9" style="padding-top:5px;">Pridať</label>
                                                </div><!-- end form-group -->
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    <?php } else { ?>
                                        <div class="alert alert-info" role="alert" style="margin:5px;">
                                            <strong><?php if (!empty($_smarty_tpl->tpl_vars['global_alert_info']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_alert_info']->value, 'UTF-8');
} else { ?>INFO<?php }?>!</strong>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['store_']->value)) {
echo $_smarty_tpl->tpl_vars['store_']->value;
} else { ?>There are no address.<?php }?>
                                        </div>
                                    <?php }?>
                                </div><!-- end panel-body -->
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-success">
                                        ZMENIŤ
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['global_form_button_close']->value)) {
echo mb_strtoupper($_smarty_tpl->tpl_vars['global_form_button_close']->value, 'UTF-8');
} else { ?>CLOSE<?php }?>
                                    </button>
                                </div><!-- end panel-footer -->
                            </div><!-- end panel -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //-- MODAL WINDOW DELIVERY ADDRESS -->

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
    function setAddressType( typeId ) {
        $('[name="address-type"]').val(typeId);
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function() { 
    $('#addressList').find('[type="checkbox"]').each(function() {
        $(this).click(function() {
            $(this).prop("checked", true);
            unchecked($('#addressList'),$(this));
            // load address
            getAddress(parseInt($(this).val()));
        }); 
    });
    $('#unchecked').on('click', function() {
        $('#addressList').find('[type="checkbox"]').each(function() {
            $(this).prop("checked", false);
        });
        $('#addr').find('[type="text"]').each(function() {
            $(this).val('');
        });
        $('#addr').find('[type="checkbox"]').each(function() {
            $(this).prop("checked", false);
        });
    });
    
    function unchecked(oTable,current) {
        oTable.find('[type="checkbox"]').each(function() {
            $(this).not(current).prop("checked", false);
        }); 
    }
    
    function getAddress( cId ) {
        $.ajax({
            url: 'cpanel/store/api/address',
            type: 'POST',
            data: { contactId: cId },                
            success: function(responseJSON) {
                $('[name="personal_pickup"]').prop("checked", false);
                $('[name="first-name"]').val(responseJSON.first_name);
                $('[name="last-name"]').val(responseJSON.last_name);
                $('[name="street"]').val(responseJSON.street);
                $('[name="city"]').val(responseJSON.city);
                $('[name="zip"]').val(responseJSON.zip);
                $('[name="company-name"]').val(responseJSON.company_name);
                $('[name="company-reg-number"]').val(responseJSON.company_reg_number);
                $('[name="vat"]').val(responseJSON.vat);
                $('[name="vat-code"]').val(responseJSON.vat_code);
                $('[name="country"]').each(function() { 
                    this.selected = (this.text == responseJSON.id_country); 
                });
                if(responseJSON.is_personal_pickup == 1) {
                    $('[name="personal_pickup"]').prop("checked", true);
                }
            },
            error: function(e) {
                console.log(e);
            },
            dataType: 'JSON'
        });
    }
});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['isModalOn']->value==true) {?>
<?php echo '<script'; ?>
 type="text/javascript">
$(function() { 
    $('#addOnArticleList').modal('show');
});
<?php echo '</script'; ?>
>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order']->value->address->primary->is_personal_pickup==0&&$_smarty_tpl->tpl_vars['order']->value->address->invoice->is_personal_pickup==0) {?>
<?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
    var geocoder = new google.maps.Geocoder();
    var delivery_map, invoice_map;

    geocoder.geocode({
        address: '<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->street;?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->city;?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value->address->primary->zip;?>
,<?php echo $_smarty_tpl->tpl_vars['primaryCountry']->value;?>
'
        }, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            delivery_map = new google.maps.Map(document.getElementById('map-delivery-canvas'), {
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: results[0].geometry.location
            });
            var delivery_marker = new google.maps.Marker({
                map: delivery_map,
                position: results[0].geometry.location,
                url: 'http://maps.google.com?q=<?php echo $_smarty_tpl->tpl_vars['geoDeliveryUrl']->value;?>
'
            });
            google.maps.event.addListener(delivery_marker, 'click', function() {
                window.open(delivery_marker.url);
            });
        }
    });

    geocoder.geocode({
        address: '<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->street;?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->city;?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->zip;?>
,<?php echo $_smarty_tpl->tpl_vars['invoiceCountry']->value;?>
'
        }, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            invoice_map = new google.maps.Map(document.getElementById('map-invoice-canvas'), {
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: results[0].geometry.location
            });
            invoice_marker = new google.maps.Marker({
                map: invoice_map,
                position: results[0].geometry.location,
                url: 'http://maps.google.com?q=<?php echo $_smarty_tpl->tpl_vars['geoInvoiceUrl']->value;?>
'
            });
            google.maps.event.addListener(invoice_marker, 'click', function() {
                window.open(invoice_marker.url);
            });
        }
    });
});
<?php echo '</script'; ?>
>
<?php }?>

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
