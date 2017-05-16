<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:23:47
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121351507257432e9383c757-11962164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b4b4856eee3624f0aa5bc9f295487d65dfb5752' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl',
      1 => 1463429275,
      2 => 'file',
    ),
    '3aba8828133dd5e52d93c3b650424c9eeee7089d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/article.tpl',
      1 => 1463756850,
      2 => 'file',
    ),
    'a5171368106dfd2f635be73517c657a8deb8b87e' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/nav.tpl',
      1 => 1460547475,
      2 => 'file',
    ),
    '221d60ff71cf2015be97e3bca08dab124589df4d' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/header.tpl',
      1 => 1463767193,
      2 => 'file',
    ),
    'fac440ae5f5af1e3c03340cba0f6c8fc28f74311' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/layout.tpl',
      1 => 1463497236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121351507257432e9383c757-11962164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lc' => 0,
    'baseUrl' => 0,
    'site_title' => 0,
    'meta_keywords' => 0,
    'meta_description' => 0,
    'meta_robot' => 0,
    'is_canonical' => 0,
    'canonical_link' => 0,
    'theme' => 0,
    'isAdmin' => 0,
    'googleAnalytics' => 0,
    'addOnScripts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57432e939248e6_37084368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432e939248e6_37084368')) {function content_57432e939248e6_37084368($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.date_format.php';
?><!-- 
Template Name: CARPE DM FASHION
Version: 1.0
Author:  MOZAYC - Henrich Barkoczy
Website: http://www.mozayc.net
Contact: http://www.mozayc.net
License: http://www.mozayc.net - Software License
-->
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
"><!--<![endif]-->
    
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">

        <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
">
        <meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['meta_robot']->value;?>
">
        <meta name="googlebot" content="<?php echo $_smarty_tpl->tpl_vars['meta_robot']->value;?>
">
        <meta name="generator" content="MOZAYC" />
        <meta property="og:locale" content="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
" />
        <meta property="og:site_name" content="CARPEDM FASHION">
        
<meta property="fb:app_id"                       content="162379804798" /> 
<meta property="og:type"                         content="product" /> 
<meta property="og:url"                          content="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value->path;?>
" /> 
<meta property="og:title"                        content="<?php echo html_entity_decode($_smarty_tpl->tpl_vars['article']->value->article_name,2,"UTF-8");?>
" />
<meta property="og:description"                  content="<?php echo html_entity_decode($_smarty_tpl->tpl_vars['article']->value->description,2,"UTF-8");?>
" />
<meta property="og:image"                        content="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/files/<?php echo $_smarty_tpl->tpl_vars['article']->value->image->file_hash;
echo $_smarty_tpl->tpl_vars['article']->value->image->file_ext;?>
" /> 
<meta property="product:price:amount"            content="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value->retail_tax_price,'.00','');?>
" /> 
<meta property="product:price:currency"          content="<?php echo $_smarty_tpl->tpl_vars['article']->value->currency_name;?>
" /> 

        <?php if (isset($_smarty_tpl->tpl_vars['is_canonical']->value)&&($_smarty_tpl->tpl_vars['is_canonical']->value==true)) {?>
          <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['canonical_link']->value;?>
" />
        <?php }?>
        <!-- Stylesheets -->
        <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/9dc11983-3459-4bc2-aad8-3d71be45826c.css">
        <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap-theme.min.css">
        <link type="text/css" rel="stylesheet" href="extensions/font-awesome/css/font-awesome.min.css" media="screen, projection">
        <link type="text/css" rel="stylesheet" href="extensions/owl-carousel/owl.carousel.css">
        <link type="text/css" rel="stylesheet" href="extensions/owl-carousel/owl.theme.css">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/global.css" media="all">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/menu.css" media="all">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/responsive.css" media="all">
        <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/print.css" media="print">
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value==true) {?>
          <link type="text/css" rel="stylesheet" href="extensions/cpanel/css/admin-console.css">
        <?php }?>
        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="extensions/owl-carousel/owl.carousel.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/init.js"><?php echo '</script'; ?>
>
        
<link type="text/css" rel="stylesheet" href="extensions/f-gallery/css/f-gallery.css">
<link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/modal.css" media="all">
<link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/product.css" media="all">

        <?php if (!empty($_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id)) {?>
            
            <?php echo '<script'; ?>
>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', '<?php echo $_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id;?>
', 'auto');
                ga('require', 'linkid', 'linkid.js');
                ga('require', 'ecommerce');
                ga('send', 'pageview');

            <?php echo '</script'; ?>
>
            
        <?php } else { ?>
            <?php if (!empty($_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id)) {?>
                <?php echo $_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_code;?>

            <?php }?>
        <?php }?>
    </head>
    <body class="catalog-product-view catalog-product-view product-simple-product">
      
<header class="header-wrapper">
  <div class="header-container">
    
    <div id="mobile-sticky" class="main-header mobile-main-header visible-tablet">
      <div class="header-content">
        <?php if (isset($_smarty_tpl->tpl_vars['nav_main_mobile']->value)) {?>
          <!-- navigation BOF -->
          <div class="navbar-wrapper visible-tablet pull-left">
            <div class="navbar pull-left">
                <div class="navbar-header skip-link skip-navbar-link" data-target-element="#navbar-toggle">
                  <button class="navbar-toggle" type="button" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="" class="navbar-brand">Navigation</a>
                </div>
                <nav id="navbar-toggle" class="bs-navbar-collapse skip-content skip-navbar-content" role="navigation">
                  <?php echo $_smarty_tpl->tpl_vars['nav_main_mobile']->value;?>

                </nav><!-- end navbar-toggle -->
            </div><!-- end navbar -->
          </div>
          <!-- navigation EOF -->
        <?php }?>
        <div class="header-logo pull-left">
          <a href="/" class="logo" title="CARPEDM FASHION">
            <img class="x1" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
            <img class="logo-sticky" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
          </a>
        </div><!-- end header-logo -->
        <div class="right-header-menu">
          <div class="header-maincart">
            <div class="cart-container">
              <a <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>href="nakupna-taska"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="icon-cart-header skip-link skip-cart-link" title="Nákupna taška">
                <span class="icon_bag_alt"></span>
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>
                  <span <?php if ($_smarty_tpl->tpl_vars['cart']->value->items>9) {?>class="ci"<?php } else { ?>class="ci centered"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['cart']->value->items;?>

                  </span>
                <?php }?>
              </a>
              <div id="navbar-cart" class="cart-wrapper skip-content skip-cart-content">
                <div class="cart-content">
                  <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                    <ul class="clearfix">
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li class="item">
                          <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                          </a>
                          <div class="product-details row-fluid show-grid">
                            <p class="product-name clearfix">
                              <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                              </a>        
                            </p><!-- end product-name -->
                            <p>
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                            </p>
                            <div class="items clearfix">
                              <span class="price">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                              </span>                                            
                            </div><!-- end items -->
                            <div class="access clearfix">
                              <a href="store/remove-article-from-cart/<?php echo $_smarty_tpl->tpl_vars['cart']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->reference;
if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->id_value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->id_value;
}?>" class="btn-remove" title="Odobrať">
                                <i class="fa fa-trash"></i>
                              </a>
                            </div><!-- end access -->
                          </div><!-- end product-details -->
                        </li>
                      <?php } ?>
                    </ul>
                    <p class="subtotal">
                      <span class="label">
                        Celkom:
                      </span> 
                      <span class="price">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cart']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                      </span>                                                            
                    </p>
                <?php } else { ?>
                  <p class="no-items-in-cart">
                    Nákupna taška je prázdna.
                  </p>
                <?php }?>
                </div><!-- end cart-content -->
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                  <div class="cart-checkout">
                    <a href="nakupna-taska" class="btn btn-block btn-info text-uppercase" style="float: left;height: 35px;line-height: 35px;" title="Košík">
                      <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                      <span>Nákupna taška</span>
                    </a>
                  </div><!-- end cart-checkout -->
                <?php }?>
              </div><!-- end navbar-cart -->
            </div><!-- end cart-container -->                   
          </div><!-- end header-maincart -->
        </div><!-- end right-header-menu -->
      </div><!-- end header-content -->
    </div><!-- end mobile-sticky -->
    
    <div id="main-header" class="main-header hidden-tablet">
      <div class="main-header-top">
        <a href="/" class="logo" title="CARPEDM FASHION">
          <img class="x1" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
          <img class="logo-sticky" src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" height="57" alt="CARPEDM FASHION" />
        </a>
        <div class="right-header-menu">
          <div class="header-maincart">
            <div class="cart-container">
              <a <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>href="nakupna-taska"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="icon-cart-header skip-link" title="Nákupna taška">
                <span class="icon_bag_alt"></span>
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)) {?>
                  <span <?php if ($_smarty_tpl->tpl_vars['cart']->value->items>9) {?>class="ci"<?php } else { ?>class="ci centered"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['cart']->value->items;?>

                  </span>
                <?php }?>
              </a>
              <div id="navbar-cart" class="cart-wrapper skip-content">
                <div class="cart-content">
                  <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                    <ul class="clearfix">
                      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->articleList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li class="item">
                          <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> class="product-image" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                          </a>
                          <div class="product-details row-fluid show-grid">
                            <p class="product-name clearfix">
                              <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

                              </a>        
                            </p><!-- end product-name -->
                            <p>
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                            </p>
                            <div class="items clearfix">
                              <span class="price">
                                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                              </span>                                            
                            </div><!-- end items -->
                            <div class="access clearfix">
                              <a href="store/remove-article-from-cart/<?php echo $_smarty_tpl->tpl_vars['cart']->value->secure_key;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->reference;
if ((isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_a)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_a))&&(isset($_smarty_tpl->tpl_vars['item']->value->matrix->par_b)&&is_object($_smarty_tpl->tpl_vars['item']->value->matrix->par_b))) {?>/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_a->id_value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->par_b->id_value;
}?>" class="btn-remove" title="Odobrať">
                                <i class="fa fa-trash"></i>
                              </a>
                            </div><!-- end access -->
                          </div><!-- end product-details -->
                        </li>
                      <?php } ?>
                    </ul>
                    <p class="subtotal">
                      <span class="label">
                        Celkom:
                      </span> 
                      <span class="price">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['cart']->value->amount,'.00','');
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>

                      </span>                                                            
                    </p>
                <?php } else { ?>
                  <p class="no-items-in-cart">
                    Nákupna taška je prázdna.
                  </p>
                <?php }?>
                </div><!-- end cart-content -->
                <?php if (is_object($_smarty_tpl->tpl_vars['cart']->value)&&(is_array($_smarty_tpl->tpl_vars['cart']->value->articleList)&&(count($_smarty_tpl->tpl_vars['cart']->value->articleList)>0))) {?>
                  <div class="cart-checkout">
                    <a href="nakupna-taska" class="btn btn-block btn-info text-uppercase" style="float: left;height: 35px;line-height: 35px;" title="Nákupna taška">
                      <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                      <span>Nákupna taška</span>
                    </a>
                  </div><!-- end cart-checkout -->
                <?php }?>
              </div><!-- end navbar-cart -->
            </div><!-- end cart-container -->                   
          </div><!-- end header-maincart -->
          <div class="header-setting">
            <div class="setting-switcher switcher-wrap">
              <div class="overwrite-setting">
                <span class="fa fa-bars"></span>
              </div>
              <div class="switcher-content">
                <ul class="links">
                  <li class="first">
                    <a href="#" onclick="return false;" title="Registrovať sa">
                      Registrovať sa
                    </a>
                  </li>
                </ul>
              </div><!-- end switcher-content -->
            </div><!-- end setting-switcher -->
          </div><!-- end header-setting -->
        </div><!-- end right-header-menu -->
      </div><!-- end main-header-top -->             
      <div class="wrapper-top-menu">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <!-- navigation BOF -->
              <div class="navbar-wrapper">
                <div class="navbar">
                  <div id="main-navbar">
                    <nav class="navbar navbar-centered" role="navigation">
                      
  <?php if (isset($_smarty_tpl->tpl_vars['nav_main']->value)) {
echo $_smarty_tpl->tpl_vars['nav_main']->value;
}?>

                    </nav><!-- end navbar -->
                  </div><!-- end main-navbar -->
                </div><!-- end navbar -->
              </div><!-- end navbar-wrapper -->
              <!-- navigation EOF -->                        
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!--- end container -->
      </div><!-- end wrapper-top-menu -->
    </div><!-- end main-header -->


    <div class="top-container">
      
    </div><!-- end top-container -->      
    
  </div><!-- end header-container -->
</header>

      
<!-- // OPEN MAIN CONTAINER // -->
<section class="main-container col2-left-layout">
  <div class="main-breadcrumbs">
    <div class="container">
      <div class="row show-grid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcrumbs">
            <ul>
              <li class="home">
                <a href="/" title="CARPEDM FASHION">
                  Hlavná stránka
                </a>
                <span>/ </span>
              </li>
              <?php if (!is_null($_smarty_tpl->tpl_vars['breadcrumb']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->category_name;?>
">
                      <?php echo $_smarty_tpl->tpl_vars['item']->value->category_name;?>

                    </a>
                    <span>/ </span>
                  </li>
                <?php } ?>
              <?php }?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value->path;?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value->article_name;?>
">
                  <strong><?php echo $_smarty_tpl->tpl_vars['article']->value->article_name;?>
</strong>
                </a>
              </li>
            </ul>
          </div><!-- end breadcrumbs -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end main-breadcrumbs -->
  <div id="product" class="main-wrapper">
    <div class="container-fluid">
      <div class="row show-grid top">
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 product-gallery-layer">
          <div class="swiper-container slider-moreimages-container more-views">
            <ul class="swiper-wrapper list-inline">
              <?php if (!is_null($_smarty_tpl->tpl_vars['article']->value->gallery)&&(count($_smarty_tpl->tpl_vars['article']->value->gallery->imageList)>0)) {?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value->gallery->imageList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <?php if (isset($_smarty_tpl->tpl_vars['item']->value->file->file_url)&&(strlen($_smarty_tpl->tpl_vars['item']->value->file->file_url)>0)) {?>
                    <li class="swiper-slide col-md-4 col-sm-4 col-xs-6">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->file->file_url;?>
" class="fg-img" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value->article_name;?>
"/>
                    </li>
                  <?php }?>
                <?php } ?>
              <?php }?>
            </ul>
          </div><!-- end swiper-container -->
        </div><!-- end product-gallery-layer -->
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
          <div class="product-shop" itemscope itemtype="http://schema.org/Product">
            <span class="hidden" itemprop="brand">CarpeDM Fashion</span>
            <div class="product-name-sku-desc-attr">
              <h1 class="p-name" itemprop="name">
                <?php echo $_smarty_tpl->tpl_vars['article']->value->article_name;?>

              </h1><!-- end p-name -->
              <div class="p-sku">
                <?php echo $_smarty_tpl->tpl_vars['article']->value->sku;?>

              </div><!-- end p-sku -->
              <div class="desc" itemprop="description">
                <?php echo $_smarty_tpl->tpl_vars['article']->value->html_content;?>

              </div><!-- end description -->
              <?php if ((isset($_smarty_tpl->tpl_vars['materialList']->value)&&(is_array($_smarty_tpl->tpl_vars['materialList']->value)&&(count($_smarty_tpl->tpl_vars['materialList']->value)>0)))||(isset($_smarty_tpl->tpl_vars['article']->value->expedition_time)&&is_object($_smarty_tpl->tpl_vars['article']->value->expedition_time))) {?>
                <div class="expedition-time-material">
                  <?php if ((isset($_smarty_tpl->tpl_vars['materialList']->value)&&(is_array($_smarty_tpl->tpl_vars['materialList']->value)&&(count($_smarty_tpl->tpl_vars['materialList']->value)>0)))) {?>
                    <p>
                      <strong>Materiál:</strong>&nbsp;
                      <?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['materialList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['attr']->key;
?>
                        <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>

                        <?php if ($_smarty_tpl->tpl_vars['j']->value!=key(array_slice($_smarty_tpl->tpl_vars['materialList']->value,-1,1,true))) {?>
                          <span>/ </span>
                        <?php }?>
                      <?php } ?>
                    </p>
                  <?php }?>
                  <?php if ((isset($_smarty_tpl->tpl_vars['article']->value->expedition_time)&&is_object($_smarty_tpl->tpl_vars['article']->value->expedition_time))) {?>
                    <p>
                      <strong>Dodacia doba:</strong>&nbsp;
                      <?php echo $_smarty_tpl->tpl_vars['article']->value->expedition_time->num_val;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value->expedition_time->unit_time;?>

                    </p>
                  <?php }?>
                </div><!-- end material -->
              <?php }?>
              <?php if ((isset($_smarty_tpl->tpl_vars['article']->value->matrix->parA)&&isset($_smarty_tpl->tpl_vars['article']->value->matrix->parB))&&(is_array($_smarty_tpl->tpl_vars['article']->value->matrix->parA)&&(count($_smarty_tpl->tpl_vars['article']->value->matrix->parA)>0))&&(is_array($_smarty_tpl->tpl_vars['article']->value->matrix->parB)&&(count($_smarty_tpl->tpl_vars['article']->value->matrix->parB)>0))) {?>
                <div class="attribute-color">      
                  <div class="title">
                    <span class="color-lbl"> Farba:</span>
                  </div>                    
                  <span class="hidden" itemprop="color">-</span>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value->matrix->parA; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['article']->value->on_stock_availability==1) {?>
                      <?php if ($_smarty_tpl->tpl_vars['item']->value->total>0) {?>
                        <a href="#" onclick="return false;" class="link-color" data-am-px-type="1" data-am-px-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" data-available="1" data-selected="0" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
">
                          <span class="color-option" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->color;?>
;"><!-- --></span>
                        </a>
                      <?php }?>
                    <?php } else { ?>
                      <a href="#" onclick="return false;" class="link-color" data-am-px-type="1" data-am-px-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" data-available="1" data-selected="0" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
">
                        <span class="color-option" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value->color;?>
;"><!-- --></span>
                      </a>
                    <?php }?>
                  <?php } ?>
                </div><!-- end attribute-color -->
                <div class="attribute-size">      
                  <div class="title">
                    <span class="color-lbl"> Veľkosť:</span>
                    <?php if (isset($_smarty_tpl->tpl_vars['sizeGuide']->value)&&is_object($_smarty_tpl->tpl_vars['sizeGuide']->value)) {?>
                      <button type="button" onclick="return false;" class="btn size-guide">
                        Prehľad veľkostí
                      </button>
                    <?php }?>
                  </div>                    
                  <span class="hidden" itemprop="size">-</span>
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value->matrix->parB; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <a href="#" 
                      onclick="return false;" 
                      class="link-size 
                      <?php if (($_smarty_tpl->tpl_vars['article']->value->on_stock_availability==1)&&($_smarty_tpl->tpl_vars['item']->value->total==0)) {?>not-available<?php }
if (strlen($_smarty_tpl->tpl_vars['item']->value->value)>3) {?> no-radius<?php }?>" 
                      data-am-px-type="2" 
                      data-am-px-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_value;?>
" 
                      data-available="<?php if (($_smarty_tpl->tpl_vars['article']->value->on_stock_availability==1)&&($_smarty_tpl->tpl_vars['item']->value->total>0)) {?>1<?php } else {
if ($_smarty_tpl->tpl_vars['article']->value->on_stock_availability==false) {?>1<?php } else { ?>0<?php }
}?>" 
                      data-selected="0" 
                      title="<?php echo $_smarty_tpl->tpl_vars['item']->value->value;?>
">
                      <span class="size-option not-available">
                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['item']->value->value, 'UTF-8');?>

                      </span>
                    </a>
                  <?php } ?>
                </div><!-- end attribute-size -->
              <?php }?>
            </div><!-- end product-name-sku-price -->
            <div class="availability-notification">
              <label>
                <?php if (strlen($_smarty_tpl->tpl_vars['product_card_stock_avaibility_notification']->value)>0) {?>
                  <?php echo $_smarty_tpl->tpl_vars['product_card_stock_avaibility_notification']->value;?>

                <?php } else { ?>
                  -
                <?php }?>
              </label>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" value="" class="form-control ipt-an" placeholder="Email" data-ref="<?php echo $_smarty_tpl->tpl_vars['article']->value->reference;?>
" aria-describedby="basic-addon1">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-an" type="button">
                    Odoslať
                  </button>
                </span>
              </div>
            </div><!-- end availability-notification -->
            <div class="product-price-add-wish">
              <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['article']->value->reference;?>
_qty" value="1" placeholder="1" min="1" max="1" class="form-control ipt-qty" />
              <div class="price-box clearfix">
                <div itemprop="offers" itemscope="" itemtype="http://www.schema.org/Offer">
                  <?php if ($_smarty_tpl->tpl_vars['article']->value->is_discount==true) {?>
                    <span class="former-price" itemprop="price">
                      <span class="price">
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value->former_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value->sign;?>

                      </span><!-- end price -->                                                  
                    </span><!-- end former-price -->
                  <?php }?>
                  <span class="regular-price" itemprop="price">
                    <span class="price">
                      <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['article']->value->retail_tax_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value->sign;?>

                    </span><!-- end price -->                                                  
                  </span><!-- end regular-price -->
                </div><!-- end itemprop Offers -->
              </div><!-- end price-box -->
              <button type="button" onclick="return false;" id="buy" class="btn btn-block btn-info text-uppercase" data-status="1" data-ref="<?php echo $_smarty_tpl->tpl_vars['article']->value->reference;?>
">
                <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                Vložiť do tašky
              </button>
              <div class="btn-group" style="display:none;" role="group">
                <button type="button" onclick="return false;" class="btn btn-buy text-uppercase">
                  <div class="fs" style="display: inline-block;" aria-hidden="true" data-icon=""></div>
                  Vložiť do tašky
                </button>
                <button type="button" onclick="return false;" class="btn btn-wishlist text-uppercase" >
                  <i class="fa fa-star"></i>&nbsp;
                  Páči sa mi
                </button>
              </div><!-- end btn-group -->
            </div><!-- end product-price-add-wish -->
            <div id="messenger" class="alert" role="alert"><!-- --></div>
          </div><!-- end product-shop -->
        </div><!-- end col -->
      </div><!-- end row -->
      <?php if (is_array($_smarty_tpl->tpl_vars['article']->value->relatedArticles)&&(count($_smarty_tpl->tpl_vars['article']->value->relatedArticles)>0)) {?>
        <div class="row show-grid top">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="widget-products-new home-new-product" id="related-articles">
              <h3 class="title-widget">
                <span>
                  Súvisiace produkty
                </span>
              </h3><!-- end title-widget -->
              <div class="category-products">
                <ul class="products-grid owl-carousel owl-theme">
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value->relatedArticles; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li class="item effect-pageLeft">
                      <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                        <div class="product-action">
                          <div class="product-image">
                            <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                            <?php }?>
                          </div><!-- end product-image -->
                        </div><!-- end product-action -->
                        <div class="product-content">
                          <h3 class="product-name">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
                  
                          </h3><!-- end product-name -->
                          <div class="price-box">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->is_discount==true) {?>
                              <p class="old-price">
                                <span class="price-label">
                                  Regular Price:
                                </span>
                                <span class="price">
                                  <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->former_price,'.00','');
echo $_smarty_tpl->tpl_vars['item']->value->sign;?>
   
                                </span>
                              </p>
                              <p class="special-price">
                                <span class="price-label">
                                  Special Price
                                </span>
                                <span class="price">
                                  <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->retail_tax_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->sign;?>
        
                                </span>
                              </p>
                            <?php } else { ?>
                              <span class="regular-price">
                                <span class="price">
                                  <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->retail_tax_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->sign;?>

                                </span>                                    
                              </span>
                            <?php }?>
                          </div><!-- end price-box -->
                        </div><!-- end product-content -->
                      </a>
                    </li>
                  <?php } ?>
                </ul><!-- end products-grid -->
              </div><!-- end category-products -->
            </div><!-- end widget-products-new -->
            <?php echo '<script'; ?>
 type="text/javascript">
              jQuery(document).ready(function() {
                widgetConfig.init('related-articles', {
                  carousel: {
                    "enable":true,
                    "pagination":false,
                    "autoPlay":false,
                    "items":8,
                    "itemsDesktop": [2200,6],
                    "itemsDesktopSmall": [1200,4],
                    "singleItem":false,
                    "lazyLoad":true,
                    "lazyEffect":false,
                    "addClassActive":true,
                    "navigation":true,
                    "navigationText":["<i class=\"fs1 fa fa-angle-left\" aria-hidden=\"true\"><\/i>","<i class=\"fs1 fa fa-angle-right\" aria-hidden=\"true\"><\/i>"]
                  }
                });
              });
            <?php echo '</script'; ?>
>
          </div><!-- end col -->
        </div><!-- end row -->
      <?php }?>
      <?php if (is_array($_smarty_tpl->tpl_vars['article']->value->alternativeArticles)&&(count($_smarty_tpl->tpl_vars['article']->value->alternativeArticles)>0)) {?>
        <div class="row show-grid top">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="widget-products-new home-new-product" id="alternative-articles">
              <h3 class="title-widget">
                <span>
                  Alternatívne produkty
                </span>
              </h3><!-- end title-widget -->
              <div class="category-products">
                <ul class="products-grid owl-carousel owl-theme">
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value->alternativeArticles; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li class="item effect-pageLeft">
                      <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->path)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->path;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                        <div class="product-action">
                          <div class="product-image">
                            <?php if (!is_null($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
                            <?php }?>
                          </div><!-- end product-image -->
                        </div><!-- end product-action -->
                        <div class="product-content">
                          <h3 class="product-name">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
                  
                          </h3><!-- end product-name -->
                          <div class="price-box">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->is_discount==true) {?>
                              <p class="old-price">
                                <span class="price-label">
                                  Regular Price:
                                </span>
                                <span class="price">
                                  <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->former_price,'.00','');
echo $_smarty_tpl->tpl_vars['item']->value->sign;?>
   
                                </span>
                              </p>
                              <p class="special-price">
                                <span class="price-label">
                                  Special Price
                                </span>
                                <span class="price">
                                  <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->retail_tax_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->sign;?>
        
                                </span>
                              </p>
                            <?php } else { ?>
                              <span class="regular-price">
                                <span class="price">
                                  <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value->retail_tax_price,'.00','');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->sign;?>

                                </span>                                    
                              </span>
                            <?php }?>
                          </div><!-- end price-box -->
                        </div><!-- end product-content -->
                      </a>
                    </li>
                  <?php } ?>
                </ul><!-- end products-grid -->
              </div><!-- end category-products -->
            </div><!-- end widget-products-new -->
            <?php echo '<script'; ?>
 type="text/javascript">
              jQuery(document).ready(function() {
                widgetConfig.init('alternative-articles', {
                  carousel: {
                    "enable":true,
                    "pagination":false,
                    "autoPlay":false,
                    "items":8,
                    "itemsDesktop": [2200,6],
                    "itemsDesktopSmall": [1200,4],
                    "singleItem":false,
                    "lazyLoad":true,
                    "lazyEffect":false,
                    "addClassActive":true,
                    "navigation":true,
                    "navigationText":["<i class=\"fs1 fa fa-angle-left\" aria-hidden=\"true\"><\/i>","<i class=\"fs1 fa fa-angle-right\" aria-hidden=\"true\"><\/i>"]
                  }
                });
              });
            <?php echo '</script'; ?>
>
          </div><!-- end col -->
        </div><!-- end row -->
      <?php }?>
    </div><!-- end container-fluid -->
  </div><!-- end main-wrapper -->
</section><!-- end main-container -->

      
<!-- // FOOTER // -->
<footer class="footer-wrapper">
  <div class="footer-top">
    <div class="container-fluid">
      <div class="footer-container">
        <div class="row show-grid">
          <div class="block-container footer-top">
            <div class="about-social col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="about">
                <img src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/logo.png" class="logo" alt="CARPEDM FASHION" />
                <div class="about-text">
                  <p>
                    CarpeDM stelesňuje predovšetkým jedinečný komfort,
                    najvyššiu kvalitu prevedenia a použitých materiálov,
                    svojráznosť v čistých líniách dizajnu.
                  </p> 
                  <p>
                    CarpeDM sa výrazne odlišuje od davu a zároveň rešpektuje dynamiku aktívneho životného štýlu.
                    Streetové, tanečné a hiphop módne oblečenie pre každého, 
                    kto sa chce nielen cítiť pohodlne, ale aj vyzerať skvele! 
                    U nás nájdete všetko, čo sa pohodlne nosí: tepláky, mikiny, 
                    trička, tielka, šortky, bundy, vesty a ďalšie artikle.
                  </p>
                </div><!-- end about-text -->
                <div class="social">
                  <div class="title-footer">
                    Sledujte nás
                  </div><!-- end title-footer -->
                  <ul class="social-icons small light">
                    <li class="facebook">
                      <a class="fa fa-facebook" href="https://www.facebook.com/CarpeDMfashion" target="_blank">
                        <span>Facebook</span>
                      </a>
                    </li>
                  </ul>
                </div><!-- end social -->
              </div><!-- end about -->
            </div><!-- end about-social -->
            <div class="list-footer col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newslettter">    
                  <div class="block block-subscribe">
                    <div class="block-title">
                      <span>Chcete odoberať Newsletter?</span>
                    </div><!-- end block-title -->
                    <form class="form-newsletter">
                      <div class="block-content">
                        <div class="form-subscribe-header">
                          <div class="input-box">
                            <input type="text" name="mce" placeholder="Vložte Vašu e-mailovú adresu" class="input-text" required>
                          </div><!-- end input-box -->
                          <div class="actions">
                            <button type="button" class="button">
                              <span>Áno, súhlasím<span>
                            </button>
                          </div><!-- end actions -->
                        </div><!-- end form-subscribe-header -->
                      </div><!-- end block-content -->
                      <span class="message"><!-- --></span>
                    </form>
                  </div><!-- end block-subscribe -->
                </div><!-- end col -->
                <?php if (isset($_smarty_tpl->tpl_vars['nav_footer']->value)&&(is_array($_smarty_tpl->tpl_vars['nav_footer']->value)&&(count($_smarty_tpl->tpl_vars['nav_footer']->value)>0))) {?>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-links">
                    <div class="footer-links">
                      <div class="row">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                          <?php if (is_array($_smarty_tpl->tpl_vars['item']->value->items)&&(count($_smarty_tpl->tpl_vars['item']->value->items)>0)) {?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 info-footer">
                              <div class="footer-block-title">
                                <h3>
                                  <?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>

                                  <span class="mobile-button visible-xs active">
                                    accordion-footer
                                  </span>
                                </h3>
                              </div><!-- end footer-block-title -->
                              <div class="custom-footer-content">
                                <ul class="footer-list">
                                  <?php  $_smarty_tpl->tpl_vars['sub_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_item']->key => $_smarty_tpl->tpl_vars['sub_item']->value) {
$_smarty_tpl->tpl_vars['sub_item']->_loop = true;
?>
                                    <li>
                                      <span class="widget widget-cms-link">
                                        <a <?php if (strlen($_smarty_tpl->tpl_vars['sub_item']->value->url_link)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['sub_item']->value->url_link;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?>>
                                          <span><?php echo $_smarty_tpl->tpl_vars['sub_item']->value->nav_item_value;?>
</span>
                                        </a>
                                      </span>
                                    </li>
                                  <?php } ?>
                                </ul>
                              </div><!-- end custom-footer-content -->
                            </div><!-- end col -->
                          <?php }?>
                        <?php } ?>
                      </div><!-- end row -->
                    </div><!-- end footer-links -->
                  </div><!-- end col -->
                <?php }?>
              </div><!-- end row -->
            </div><!-- list-footer -->           
          </div><!-- end block-container -->
        </div><!-- end row -->
      </div><!-- end footer-container -->
    </div><!-- end container-fluid -->
  </div><!-- end footer-top -->
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-container">
        <div class="row show-grid"><!-- --></div>
        <div id="back-top" class="hidden-phone">
          <a href="#top">
            <div class="sticker-wrapper">
              <div class="sticker" title="Back to Top">
                <i class="fa fa-angle-up"></i>
              </div>
            </div>
          </a>
        </div><!-- end back-top -->
      </div><!-- end footer-container -->
    </div><!-- end container -->
  </div><!-- end footer-bottom -->
  <div class="footer-copyright">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
          <address>
            Copyright &copy; <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y");?>

            CarpeDM fashion all rights reserved.
            <a href="#" onclick="return false;" target="_blank" title="Mozayc eCommerce Cloud Solutions">Powered by Mozayc.</a>
          </address>
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end footer-copyright -->
</footer>

      
  
  <!-- FGALLERY -->
  <div id="fg-wrapper">
    <button type="button" class="btn btn-close">
      <i class="fa fa-times"></i>
    </button>
    <button type="button" class="btn btn-left">
      <i class="fa fa-arrow-circle-o-left"></i>
    </button>
    <button type="button" class="btn btn-right">
      <i class="fa fa-arrow-circle-o-right"></i>
    </button>
    <div class="btn-group group-z">
        <button type="button" class="btn btn-z dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-search"></i>
        </button>
        <ul class="dropdown-menu zoom" role="menu">
          <li data-z="1">
            <span class="z-circle">1x</span>
          </li>
          <li data-z="2">
            <span class="z-circle">2x</span>
          </li>
          <li data-z="3">
            <span class="z-circle">3x</span>
          </li>
          <li data-z="4">
            <span class="z-circle">4x</span>
          </li>
          <li data-z="5">
            <span class="z-circle">5x</span>
          </li>
        </ul>
    </div>
  </div>
  <!-- //-- FGALLERY -->
  
  <!-- ADD TO CART RESULT -->
  <div class="modal fade" id="add_new_item" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">                    
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </button>
          <h4 class="modal-title" style="text-transform: none;">
            Do nákupnej tašky ste vložili:
          </h4>
        </div>
        <div class="modal-body"><!-- --></div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- //-- ADD TO CART RESULT -->
  
  <?php if (isset($_smarty_tpl->tpl_vars['sizeGuide']->value)&&is_object($_smarty_tpl->tpl_vars['sizeGuide']->value)) {?>
    <!-- MODAL SIZE GUIDE -->
    <div class="modal fade" id="sizeGuide" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">                    
          <div class="modal-header">
            <h4 class="modal-title" style="display: inline-block;">
              Prehľad veľkostí
            </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $_smarty_tpl->tpl_vars['sizeGuide']->value->html_content;?>

          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- //-- MODAL SIZE GUIDE -->
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value==true) {?>
    <!-- ADMIN CONSOLE PANEL -->
    <div id="admin-console-panel">
      <h4 class="mac-title">
        Admin Console
      </h4>
      <a href="cpanel/store/catalog/article/edit/<?php echo $_smarty_tpl->tpl_vars['article']->value->id_article;?>
" target="__blank" class="btn btn-info btn-sm" title="Upraviť produkt">
        <i class="fa fa-pencil-square-o"></i>&nbsp;Upraviť produkt
      </a>
    </div><!-- admin-console-panel -->
    <!-- //-- ADMIN CONSOLE PANEL -->
  <?php }?>

      <?php echo '<script'; ?>
>
        //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
        //]]>
        
        var frontendData = {};
            frontendData.confGridEqualHeight = true;
            frontendData.colFull = '3';
            frontendData.col768_640 = '3';
            frontendData.col480_640 = '2';
            frontendData.col480 = '2';
            frontendData.enableSticky = true;
      <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="extensions/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/store/mailchimp.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/core.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/jquery.accordion.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
        MailChimp.init();
        
        jQuery(document).ready(function() {
          widgetConfig.init('slide-home', {
            carousel: {
              "enable":true,
              "pagination":true,
              "transitionStyle":false,
              "autoPlay":false,
              "items":1,
              "singleItem":true,
              "addClassActive":true,
              "navigation":false,
              "navigationText":[null,null]}            
          });
          
          if((jQuery('.skip-link.skip-navbar-link').length > 0) &&
            (jQuery('.skip-content.skip-navbar-content').length > 0)
          ) {
            jQuery('.skip-link.skip-navbar-link').on('click', function() {
              if(jQuery(this).hasClass('skip-active')) {
                jQuery('.skip-link.skip-navbar-link').removeClass('skip-active');
                jQuery('.skip-content.skip-navbar-content').removeClass('skip-active');
              } else {
                jQuery('.skip-link.skip-navbar-link').addClass('skip-active');
                jQuery('.skip-content.skip-navbar-content').addClass('skip-active');
              }
            });
          }
          if((jQuery('.skip-link.skip-cart-link').length > 0) &&
            (jQuery('.skip-content.skip-cart-content').length > 0)
          ) {
            jQuery('.skip-link.skip-cart-link').on('click', function() {
              if(jQuery(this).hasClass('skip-active')) {
                jQuery('.skip-link.skip-cart-link').removeClass('skip-active');
                jQuery('.skip-content.skip-cart-content').removeClass('skip-active');
              } else {
                jQuery('.skip-link.skip-cart-link').addClass('skip-active');
                jQuery('.skip-content.skip-cart-content').addClass('skip-active');
              }
              if(jQuery(window).width() <= 1024) {
                return false;
              }
            });
          }
          jQuery(".nav-mobile-accordion").mobileMenu({
              accordion: true,
              speed: 400,
              mouseType: 0,
              easing: 'easeInOutQuad'
          });
          jQuery(".nav-mobile-accordion").find('.collapse').each(function() {
            if(jQuery(this).text() === "collapse") {
              jQuery(this).remove();
            }
          });
        });
      <?php echo '</script'; ?>
>
      
<?php echo '<script'; ?>
 src="extensions/f-gallery/js/FGallery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/js/store/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  <?php if (isset($_smarty_tpl->tpl_vars['article']->value->matrix)&&is_object($_smarty_tpl->tpl_vars['article']->value->matrix)) {?>
    Cart.init(2,true,<?php echo $_smarty_tpl->tpl_vars['article']->value->matrix->id_wh;?>
,<?php echo $_smarty_tpl->tpl_vars['article']->value->matrix->id_matrix;?>
,<?php if ($_smarty_tpl->tpl_vars['article']->value->on_stock_availability==1) {?>true<?php } else { ?>false<?php }?>);
  <?php } else { ?>
    Cart.init(2,false,0,0);
  <?php }?>

  FGallery.init();
  
  jQuery('.size-guide').on('click', function() {
    jQuery('#sizeGuide').modal('show');
  });
  jQuery(function () {
    jQuery('[data-toggle="tooltip"]').tooltip();
  });
<?php echo '</script'; ?>
>

      <?php if (!empty($_smarty_tpl->tpl_vars['addOnScripts']->value)) {?>
          <?php echo '<script'; ?>
 type="text/javascript">
              <?php echo $_smarty_tpl->tpl_vars['addOnScripts']->value;?>

          <?php echo '</script'; ?>
>
      <?php }?>
    </body>
</html><?php }} ?>
