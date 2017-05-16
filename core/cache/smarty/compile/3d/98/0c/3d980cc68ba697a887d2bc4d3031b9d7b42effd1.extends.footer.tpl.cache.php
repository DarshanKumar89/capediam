<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:24:06
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10320663957432ea6ee9941-57103325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b4b4856eee3624f0aa5bc9f295487d65dfb5752' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/footer.tpl',
      1 => 1463429275,
      2 => 'file',
    ),
    'e4a5f075cd45176dd6349438b9d6e32614ae7339' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/store/order/address_book.tpl',
      1 => 1464018909,
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
  'nocache_hash' => '10320663957432ea6ee9941-57103325',
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
  'unifunc' => 'content_57432ea70b5442_08270157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432ea70b5442_08270157')) {function content_57432ea70b5442_08270157($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/core/lib/smarty/plugins/modifier.replace.php';
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
    <head>
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
        
<link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/order.css" media="all">

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
    <body class="checkout-cart-index slidebar-left">
      
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

      
<section class="main-container col1-layout">
  <div class="main-breadcrumbs">
    <div class="container">
      <div class="row show-grid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcrumbs">
            <ul>
              <li class="home">
                <a href="/" title="CARPEDM FASHION">
                  Domov
                </a>
                <span>/ </span>
              </li>
              <li>
                <a href="objednavka/adresar" title="Kontaktné údaje">
                  Kontaktné údaje
                </a>
              </li>
            </ul>
          </div><!-- end breadcrumbs -->
        </div><!-- end col -->
      </div><!-- end row -->
    </div><!-- end container -->
  </div><!-- end main-breadcrumbs -->
  <div class="main-wrapper">
    <div class="main order">
      <div class="container">
        <div class="row show-grid top">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="btn-group btn-breadcrumb steps <?php if ($_smarty_tpl->tpl_vars['stepId']->value!==0) {?>step-<?php echo $_smarty_tpl->tpl_vars['stepId']->value;
}?>">
              <a href="nakupna-taska" class="btn btn-cart">
                <span class="number">1.</span>&nbsp;Nákupna taška
              </a>
              <a href="objednavka/dorucenie-a-platba" class="btn btn-delivery-pay">
                <span class="number">2.</span>&nbsp;Doprava a platba
              </a>
              <a href="objednavka/adresar" class="btn btn-address">
                <span class="number">3.</span>&nbsp;Kontaktné údaje
              </a>
              <a href="objednavka/sumarizacia-objednavky-a-posledna-kontrola" class="btn btn-summary">
                <span class="number">4.</span>&nbsp;Sumarizácia objednávky
              </a>
            </div><!-- order steps -->
            <div class="col-main">
              <div class="checkout-cart">
                <div class="page-title title-buttons">
                  <h1>
                    Kontaktné údaje
                  </h1>
                  <span class="help-info">
                    Pomoc s objednávkou? Volajte +421 52 381 11 87
                  </span>
                  <p class="text-info"><!-- --></p>
                </div><!-- end page-title -->
              </div><!-- end checkout-cart -->
            </div><!-- end col-main -->
          </div><!-- end col -->
          <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&(is_array($_smarty_tpl->tpl_vars['errors']->value)&&(count($_smarty_tpl->tpl_vars['errors']->value)>0))) {?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">        
              <div class="alert-box alert" data-alert>
                <p style="margin-bottom:15px;">
                  <i class="fa fa-exclamation-triangle"></i>
                  <strong><?php if (count($_smarty_tpl->tpl_vars['errors']->value)==1) {?>Nastala chyba:<?php } else { ?>Vyskytli sa nasledujuce chyby:<?php }?></strong>
                </p>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <p>
                    <i class="fa fa-circle"></i>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                  </p>
                <?php } ?>
              </div><!-- end alert -->
            </div><!-- end col -->
          <?php }?>
        </div><!-- end row -->
        <div class="row">
          <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
            <form action="objednavka/adresar/ulozit" method="post" role="form">
              <input type="hidden" name="csk" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->secure_key;?>
"/>
          <?php } else { ?>
            <form action="objednavka/adresar/spracovať" method="post" role="form">
              <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_personal_pickup" value="<?php if ($_smarty_tpl->tpl_vars['orderPersonalPickup']->value==true) {?>1<?php } else { ?>0<?php }?>"/>
          <?php }?>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
              <h4 style="border-bottom: 1px solid #343525;">
                Upraviť adresu
              </h4>
              <h5>
                OSOBNÉ ÚDAJE
              </h5>
              <div class="form-group">
                <label for="first name" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Meno
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_first_name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->first_name;
}?>"  placeholder="Meno" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_first_name" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="last name" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Priezvisko
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_last_name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->last_name;
}?>"  placeholder="Priezvisko" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_last_name" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="email" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  E-mail
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="email" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_email" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->email;
}?>"  placeholder="E-mail" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_email" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="zip" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Telefón
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_phone" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->phone;
}?>"  placeholder="Telefón" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_phone" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <h5>
                ADRESA
              </h5>
              <div class="form-group">
                <label for="country" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Krajina
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <select name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_country" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_country" class="form-control">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
if ($_smarty_tpl->tpl_vars['data']->value->id_country==$_smarty_tpl->tpl_vars['item']->value->id_lang) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['item']->value->id_lang==190) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>
</option>
                    <?php } ?>
                  </select>
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="city" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Mesto
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_city" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->city;
}?>"  placeholder="Mesto" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="street" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Ulica, číslo
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_street" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->street;
}?>"  placeholder="Ulica, číslo" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_street" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="zip" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  PSČ
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_zip" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->zip;
}?>"  placeholder="PSČ" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_zip" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="company" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Firma
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_company_name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->company_name;
}?>"  placeholder="Firma" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company_name" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="copmany reg. number" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  IČO
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_comapany_reg_number" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->company_reg_number;
}?>"  placeholder="IČO" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company_reg_number" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="tax id" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  DIČ
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_vat" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->vat;
}?>"  placeholder="DIČ" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_vat" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="tax_code" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  IČ DPH
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_vat_code" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value->vat_code;
}?>"  placeholder="IČ DPH" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_vat_code" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label" style="line-height: 15px;">
                  Predvolená adresa
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_address" value="1" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_primary_address" <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
if ($_smarty_tpl->tpl_vars['data']->value->is_primary) {?>checked<?php }
}?>>
                  &nbsp;Áno
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label" style="line-height: 15px;">
                  Fakturačná adresa
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_address" value="1" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_invoice_address" <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
if ($_smarty_tpl->tpl_vars['data']->value->is_invoice) {?>checked<?php }
}?>>
                  &nbsp;Áno
                </div><!-- end col -->
              </div><!-- end form-group -->
            <?php } else { ?>
              <h4 style="border-bottom: 1px solid #343525;">
                Pridať novú adresu
              </h4>
              <h5>
                OSOBNÉ ÚDAJE
              </h5>
              <div class="form-group">
                <label for="first name" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Meno
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_first_name" value=""  placeholder="Meno" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_first_name" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="last name" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Priezvisko
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_last_name" value=""  placeholder="Priezvisko" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_last_name" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="email" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  E-mail
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="email" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_email" value=""  placeholder="E-mail" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_email" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <div class="form-group">
                <label for="zip" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                  Telefón
                  <span style="color:red;">*</span>
                </label>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                  <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_phone" value=""  placeholder="Telefón" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_phone" class="form-control">
                </div><!-- end col -->
              </div><!-- end form-group -->
              <?php if ($_smarty_tpl->tpl_vars['orderPersonalPickup']->value==false) {?>
                <h5>
                  ADRESA
                </h5>
                <div class="form-group">
                  <label for="country" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    Krajina
                    <span style="color:red;">*</span>
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <select name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_country" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_country" class="form-control">
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
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="city" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    Mesto
                    <span style="color:red;">*</span>
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_city" value=""  placeholder="Mesto" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company" class="form-control">
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="street" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    Ulica, číslo
                    <span style="color:red;">*</span>
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_street" value=""  placeholder="Ulica, číslo" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_street" class="form-control">
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="zip" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    PSČ
                    <span style="color:red;">*</span>
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_zip" value=""  placeholder="PSČ" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_zip" class="form-control">
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="company" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    Firma
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_company_name" value=""  placeholder="Firma" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company_name" class="form-control">
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="copmany reg. number" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    IČO
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_comapany_reg_number" value=""  placeholder="IČO" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company_reg_number" class="form-control">
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="tax id" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    DIČ
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_vat" value=""  placeholder="DIČ" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_vat" class="form-control">
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label for="tax_code" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                    IČ DPH
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_primary_vat_code" value=""  placeholder="IČ DPH" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_vat_code" class="form-control">
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="form-group">
                  <label class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label" style="line-height: 15px;">
                    Predvolená adresa
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_is_primary_address" value="1" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_primary_address" <?php if (is_null($_smarty_tpl->tpl_vars['addressBook']->value)) {?>checked<?php }?>>
                    &nbsp;Áno
                  </div><!-- end col -->
                </div>
                <div class="form-group">
                  <label class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label" style="line-height: 15px;">
                    Odlišná fakturačná adresa
                  </label>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_is_invoice_address" value="1" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_invoice_address">
                    &nbsp;Áno
                  </div><!-- end col -->
                </div><!-- end form-group -->
                <div class="invoice-address">        
                  <h5>
                    FAKTURAČNÁ ADRESA
                  </h5>
                  <div class="form-group">
                    <label for="first name" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      Meno
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_first_name" value=""  placeholder="Meno" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_first_name" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="last name" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      Priezvisko
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_last_name" value=""  placeholder="Priezvisko" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_last_name" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="email" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      E-mail
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="email" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_email" value=""  placeholder="E-mail" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_email" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="zip" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      Telefón
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_phone" value=""  placeholder="Telefón" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_phone" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="country" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      Krajina
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <select name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_country" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_country" class="form-control" required>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_lang;?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
if ($_smarty_tpl->tpl_vars['data']->value->id_country==$_smarty_tpl->tpl_vars['item']->value->id_lang) {?>selected<?php }
} else {
if ($_smarty_tpl->tpl_vars['item']->value->id_lang==190) {?>selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['item']->value->country_name;?>
</option>
                        <?php } ?>
                      </select>
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="city" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      Mesto
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_city" value=""  placeholder="Mesto" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="street" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      Ulica, číslo
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_street" value=""  placeholder="Ulica, číslo" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_street" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="zip" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      PSČ
                      <span style="color:red;">*</span>
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_zip" value=""  placeholder="PSČ" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_zip" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="company" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      Firma
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_company_name" value=""  placeholder="Firma" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company_name" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="copmany reg. number" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      IČO
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_comapany_reg_number" value=""  placeholder="IČO" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_company_reg_number" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="tax id" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      DIČ
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_vat" value=""  placeholder="DIČ" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_vat" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                  <div class="form-group">
                    <label for="tax_code" class="col-lg-3 col-md-3 col-sm-4 col-xs-4 control-label">
                      IČ DPH
                    </label>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8 control-input">
                      <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_invoice_vat_code" value=""  placeholder="IČ DPH" id="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_vat_code" class="form-control">
                    </div><!-- end col -->
                  </div><!-- end form-group -->
                </div><!-- end invoice-address -->
              <?php }?>
            <?php }?>
            <p>
              <span style="color:red;">
                * Povinné údáje
              </span>
            </p>
          </div><!-- end col --> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h4 style="border-bottom: 1px solid #343525;">
              Moje adresy
            </h4>
            <?php if (!isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['orderPersonalPickup']->value!==true&&$_smarty_tpl->tpl_vars['checkAddress']->value!==true) {?>
              <?php if (count($_smarty_tpl->tpl_vars['addressBook']->value)==1&&empty($_smarty_tpl->tpl_vars['addressBook']->value[0]->street)) {?>
                <div class="alert alert-danger" role="alert">
                  <p>
                    Vybrali ste si spôsob doročenia, pre ktorý musíte mať vyplnenú adresu.
                    Prosim upravte už existujúcu adresu kliknutím na odkaz
                    <a href="objednavka/adresar/upravit/<?php echo $_smarty_tpl->tpl_vars['addressBook']->value[0]->secure_key;?>
" style="color: #000;">
                      <strong>upraviť adresu</strong>
                    </a> alebo pomocou formulára pridajte novú
                    doručovaciu adresu.
                  </p>
                </div><!-- end alert -->
              <?php }?>
            <?php }?>
            <?php if (!is_null($_smarty_tpl->tpl_vars['addressBook']->value)) {?>
              <ul id="address" class="list-unstyled">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addressBook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?> 
                    <?php if ($_smarty_tpl->tpl_vars['data']->value->id_contact!==$_smarty_tpl->tpl_vars['item']->value->id_contact) {?>
                      <li class="row" style="position:relative;margin: 0 0 15px 0;padding-bottom:9px;border-bottom: 1px dotted #000;">
                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
                          <div class="radio">
                            <label>
                              <input type="radio" name="null" value="0" disabled>
                            </label>
                          </div><!-- end radio -->
                        </div><!-- end col -->
                        <div class="col-lg-11 col-md-11 col-sm-10 col-xs-9">
                          <p>
                            <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>
</strong><br>
                            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->street)) {?>
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->street;?>
<br>
                              <?php echo $_smarty_tpl->tpl_vars['item']->value->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->city;?>
<br>
                              Slovenská republika
                            <?php } else { ?>
                              OSOBNÝ ODBER
                            <?php }?>
                          </p>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->is_primary==1) {?><span class="label">Predvolená adresa</span><?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['item']->value->is_invoice==1) {?><span class="label">Fakturačná adresa</span><?php }?>
                        </div>
                      </li>
                    <?php }?>
                  <?php } else { ?>
                    <li class="row" style="position:relative;margin: 0 0 15px 0;padding-bottom:9px;border-bottom: 1px dotted #000;">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-radio">
                        <div class="radio">
                          <label>
                            <input type="radio" 
                              name="<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_o_address_<?php if ($_smarty_tpl->tpl_vars['item']->value->is_primary==1&&$_smarty_tpl->tpl_vars['item']->value->is_invoice==1) {?>AB<?php } else {
if ($_smarty_tpl->tpl_vars['item']->value->is_primary==1) {?>A<?php } else { ?>B<?php }
}?>" 
                              value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_contact;?>
" 
                              data-status="0" 
                              data-type="<?php if ($_smarty_tpl->tpl_vars['item']->value->is_primary==1) {?>A<?php } else { ?>B<?php }?>" data-i="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" 
                              <?php if ($_smarty_tpl->tpl_vars['address']->value->id_address_primary==0||$_smarty_tpl->tpl_vars['address']->value->id_address_invoice==0) {?>
                                 <?php if ($_smarty_tpl->tpl_vars['item']->value->is_primary==1||$_smarty_tpl->tpl_vars['item']->value->is_invoice==1) {?>
                                    checked
                                 <?php } else { ?>
                                    <?php if (count($_smarty_tpl->tpl_vars['addressBook']->value)==1) {?>checked<?php }?>
                                 <?php }?>
                              <?php } else { ?>
                                 <?php if ($_smarty_tpl->tpl_vars['address']->value->id_address_primary==$_smarty_tpl->tpl_vars['item']->value->id_contact||$_smarty_tpl->tpl_vars['address']->value->id_address_invoice==$_smarty_tpl->tpl_vars['item']->value->id_contact) {?>
                                    checked
                                 <?php } else { ?>
                                    <?php if (count($_smarty_tpl->tpl_vars['addressBook']->value)==1) {?>checked<?php }?>
                                 <?php }?>
                              <?php }?>
                              >
                          </label>
                        </div><!-- end radio -->
                      </div><!-- end col -->
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 col-data">
                        <p>
                          <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>
</strong><br>
                          <?php if (!empty($_smarty_tpl->tpl_vars['item']->value->street)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->street;?>
<br>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->zip;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value->city;?>
<br>
                            Slovenská republika
                          <?php } else { ?>
                            OSOBNÝ ODBER
                          <?php }?>
                        </p>
                        <ul class="list-inline" style="z-index: 800;">
                          <li>
                            <a href="objednavka/adresar/upravit/<?php echo $_smarty_tpl->tpl_vars['item']->value->secure_key;?>
" class="btn edit">
                              <i class="fa fa-pencil-square-o"></i>
                              &nbsp;Upraviť
                            </a>
                          </li>
                          <li>|</li>
                          <li>
                            <a href="objednavka/adresar/odstranit/<?php echo $_smarty_tpl->tpl_vars['item']->value->secure_key;?>
" class="btn remove">
                              <i class="fa fa-times"></i>
                            </a>
                          </li>
                        </ul>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->is_primary==1) {?><span class="label">Predvolená adresa</span><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->is_invoice==1) {?><span class="label">Fakturačná adresa</span><?php }?>
                      </div>
                    </li>
                  <?php }?>
                <?php } ?>
              </ul>
            <?php } else { ?>
              <div class="alert alert-info" role="alert">
                <p>
                  Vytvorte si novú adresu pomocou formulára na ľavej strane.
                </p>
              </div><!-- end alert -->
            <?php }?>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
          <?php if (!isset($_smarty_tpl->tpl_vars['data']->value)) {?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="order-info pull-left">
                <?php if ($_smarty_tpl->tpl_vars['enabledDeliveryDiscount']->value==true) {?>
                  <div class="delivery-discount">
                    <p id="h-d-f-c" style="<?php if ($_smarty_tpl->tpl_vars['deliveryDiscount']->value->is_discount==true) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                      MÁTE DOPRAVU ZDARMA
                    </p>
                    <p id="discount" style="<?php if ($_smarty_tpl->tpl_vars['deliveryDiscount']->value->is_discount==false) {?>display:block;<?php } else { ?>display:none;<?php }?>">
                      DOPRAVU ZDARMA?
                      <span>Nakúpte ešte za:</span>
                      <span class="diff"><?php echo $_smarty_tpl->tpl_vars['deliveryDiscount']->value->diff_price;
echo $_smarty_tpl->tpl_vars['cart']->value->sign;?>
</span>
                    </p>
                  </div>
                <?php }?>
              </div><!-- order-info -->
            </div><!-- end col -->
          <?php }?>
        </div><!-- end row -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="order-actions btn-group" role="group">
              <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
                <a href="objednavka/adresar" class="btn btn-back text-uppercase">
                  <i class="fa fa-reply"></i>
                  Späť
                </a>
              <?php } else { ?>
                <a href="objednavka/dorucenie-a-platba" class="btn btn-back text-uppercase">
                  <i class="fa fa-reply"></i>
                  Späť
                </a>
              <?php }?>
              <?php if (!is_null($_smarty_tpl->tpl_vars['addressBook']->value)) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
                  <button type="submit" class="btn btn-order text-uppercase">
                    <i class="fa fa-floppy-o"></i>
                    Uložiť zmeny
                  </button>
                <?php } else { ?>
                  <button type="submit" id="bc" class="btn btn-order text-uppercase">
                    Pokračovať na ďalší krok&nbsp;
                    <i class="fa fa-angle-double-right" style="position: relative;top: 0.8px;font-size: 1.35em;line-height: 100%;"></i>
                  </button>
                <?php }?>
              <?php } else { ?>
                <button type="submit" class="btn btn-order text-uppercase">
                  Pokračovať na ďalší krok&nbsp;
                  <i class="fa fa-angle-double-right" style="position: relative;top: 0.8px;font-size: 1.35em;line-height: 100%;"></i>
                </button>
              <?php }?>
            </div><!-- order-actions -->
          </div><!-- end col -->
          </form>
        </div><!-- end row -->
      </div><!-- end container -->
    </div><!-- end main -->
  </div><!-- end main-wrapper -->
</section>

      
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
>
jQuery(document).ready(function($) {
  $('#address').find(':radio').each(function() {
      $(this).on('click', function() {
        if(parseInt($(this).attr('data-status')) === 0) {
          $(this).attr('checked',true);
          $(this).attr('data-status',1);
        } else {
          $(this).attr('checked',false);
          $(this).attr('data-status',0);
        }
        resetCollection($(this).attr('data-type'),parseInt($(this).data('i')));
      });
  });
  $('#<?php echo $_smarty_tpl->tpl_vars['secureKey']->value;?>
_order_invoice_address').on('click', function() {
    if($(this).prop('checked')) {
      $('.invoice-address').show();
    } else {
      $('.invoice-address').hide();
    }
  });

  function resetCollection( type, id ) {
    $('#address').find(':radio').each(function() {
      if($(this).data('type') === type && (parseInt($(this).data('i')) !== id)) {
        $(this).attr('checked',false);
        $(this).attr('data-status',0);
      }
    });
  }
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
