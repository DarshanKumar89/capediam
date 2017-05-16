<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-28 11:52:52
         compiled from "/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16669560095799f214ef4404-14897611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54202e83c0a38ddd67988f5c637cac4ee05a1047' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/signin.tpl',
      1 => 1469528892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16669560095799f214ef4404-14897611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 0,
    'datetime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5799f214f10449_14143190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5799f214f10449_14143190')) {function content_5799f214f10449_14143190($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/lib/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en" class="body-full-height">
  <head>        
    <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
    <!-- META SECTION -->
    <title>Sign in | MOZAYC</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->
    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="extensions/cpanel/css/theme-default.css"/>
    <!-- EOF CSS INCLUDE --> 
    <style>
      .e {
        font-weight: 700;
        letter-spacing: 1px;
        color: #B70010;
      }
    </style>
  </head>
  <body>
    <div class="login-container">
      <div class="login-box animated fadeInDown">
        <div class="login-logo"><!-- --></div>
        <div class="login-body">
          <div class="login-title">
            Vitajte, prosím prihláste sa
          </div>
          <form action="cpanel/sign/in" method="post" class="form-horizontal">
            <div class="form-group">
              <div class="col-md-12">
                <input type="email" name="xe" value="" placeholder="Email" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="password" name="xps" value="" placeholder="Password" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-primary btn-block">
                  Prihlásiť
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="login-footer">
          <div class="pull-left">
            <a href="http://www.mozayc.net/" target="_blank" title="Mozayc s.r.o."><span class="e">mozayc.net</span></a>
          </div>
          <div class="pull-right">
            Všetky práva vyhradené &copy; <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datetime']->value,"%Y");?>

          </div>
        </div>
      </div>
    </div>
  </body>
</html><?php }} ?>
