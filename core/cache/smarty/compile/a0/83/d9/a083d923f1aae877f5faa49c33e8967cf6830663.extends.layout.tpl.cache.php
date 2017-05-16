<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-19 16:21:28
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/index_2/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164541304157165b0815bd19-13544975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '164541304157165b0815bd19-13544975',
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
    'slider' => 0,
    'item' => 0,
    'addOnScripts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57165b081b4dd5_43077645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57165b081b4dd5_43077645')) {function content_57165b081b4dd5_43077645($_smarty_tpl) {?><!-- 
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
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
">
    <meta property="og:locale" content="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
" />
    <meta property="og:locale:alternate" content="<?php echo $_smarty_tpl->tpl_vars['lc']->value;?>
" />
    
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
">
    <meta property="og:type" content="article">
    
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
">
    <meta property="article:author" content="http://www.lahofer.sk">
    <meta property="article:publisher" content="https://www.facebook.com/">
    <meta name="robots" content="<?php echo $_smarty_tpl->tpl_vars['meta_robot']->value;?>
">
    <meta name="googlebot" content="<?php echo $_smarty_tpl->tpl_vars['meta_robot']->value;?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['is_canonical']->value)&&($_smarty_tpl->tpl_vars['is_canonical']->value==true)) {?>
      <link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['canonical_link']->value;?>
" />
    <?php }?>
    <meta name="generator" content="MOZAYC" />        
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-Frame-Options" content="deny">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/9dc11983-3459-4bc2-aad8-3d71be45826c.css">
    <link type="text/css" rel="stylesheet" href="extensions/font-awesome/css/font-awesome.min.css" media="screen, projection">
    <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="extensions/bootstrap/css/bootstrap-theme.min.css">
    <link type="text/css" rel="stylesheet" href="extensions/owl-carousel-2/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="static/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/moje.css" media="all">
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
    

    
    <?php if (!empty($_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id)) {?>
      
      <?php echo '<script'; ?>
>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo $_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id;?>
', 'auto');
        ga('send', 'pageview');
      <?php echo '</script'; ?>
>
      
    <?php } else { ?>
      <?php if (!empty($_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_id)) {?>
        <?php echo $_smarty_tpl->tpl_vars['googleAnalytics']->value->tracking_code;?>

      <?php }?>
    <?php }?>
  </head>
  <body>
    <header class="header-wrapper">
      <div class="header-container">
        
        <?php if (is_object($_smarty_tpl->tpl_vars['slider']->value)&&(is_array($_smarty_tpl->tpl_vars['slider']->value->imageList)&&(count($_smarty_tpl->tpl_vars['slider']->value->imageList)>0))) {?>
          <div class="top-container">
            <div class="slide-home" id="slide-home">
              <div class="slide-home owl-carousel">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value->imageList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <div class="slide-content">
                    <a <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->link)>0) {?>href="<?php echo $_smarty_tpl->tpl_vars['item']->value->link;?>
"<?php } else { ?>href="#" onclick="return false;"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
">
                      <div class="slide-inner-content">
                        <div class="slider-image">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_url;?>
" class="images-resposive" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->file_name;?>
"  />
                        </div><!-- end slider-image -->
                        <?php if (((int) $_smarty_tpl->tpl_vars['slider']->value->use_captions==1)&&((strlen($_smarty_tpl->tpl_vars['item']->value->title)>0)||(strlen($_smarty_tpl->tpl_vars['item']->value->description)>0))) {?>
                          <div class="slider-text">
                            <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->title)>0) {?>
                              <h2 class="slider-title">
                                <span><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</span>
                              </h2><!-- end slider-title -->
                            <?php }?>
                            <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->description)>0) {?>
                              <p class="slider-desc">
                                <span><?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
</span>
                              </p><!-- end slider-desc -->
                            <?php }?>
                          </div><!-- end slider-text -->
                        <?php }?>
                      </div><!-- end slide-inner-content -->
                    </a>
                  </div><!-- end slide-content -->   
                <?php } ?>
              </div><!-- end owl-carousel -->
            </div><!-- end slide-home -->
          </div><!-- end top-container -->
        <?php }?>
      </div><!-- end header-container -->
    </header>

    <?php echo '<script'; ?>
 src="extensions/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="extensions/owl-carousel-2/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(document).ready(function() {
 
        $("#slide-home").owlCarousel({
          margin:0,
          center: true,
          loop:true,
          items:1,
          pagination:true
        });

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
</html>
<?php }} ?>
