<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-23 16:24:20
         compiled from "/Users/henrich/Work/SlatyFork/carpedm.mozayc.net/app/themes/default/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95735422957432eb4b41dc1-61877307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '95735422957432eb4b41dc1-61877307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57432eb4b5a6b3_38201260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57432eb4b5a6b3_38201260')) {function content_57432eb4b5a6b3_38201260($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
"/>
        <!-- META SECTION -->
        <title>PAGE NOT FOUND</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" href="extensions/cpanel/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->    
    </head>
    <body>
        <div class="error-container">
            <div class="error-code">404</div>
            <div class="error-text">page not found</div>
            <div class="error-subtext">Unfortunately we're having trouble loading the page you are looking for. Please wait a moment and try again or use action below.</div>
            <div class="error-actions">                                
                <button class="btn btn-primary btn-block btn-lg" onclick="history.back();">Previous page</button>                           
            </div>
        </div><!-- error-container -->
    </body>
</html><?php }} ?>
