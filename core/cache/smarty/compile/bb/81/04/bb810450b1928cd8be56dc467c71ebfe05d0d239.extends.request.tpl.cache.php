<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-09-21 15:07:05
         compiled from "/var/www/public/carpedmfashion.com/app/themes/default/store/raiffeisen/request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203359102257e285f9cd5531-76396717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '203359102257e285f9cd5531-76396717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 0,
    'merchantID' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e285f9cf9146_88443557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e285f9cf9146_88443557')) {function content_57e285f9cf9146_88443557($_smarty_tpl) {?><!DOCTYPE html>
<html lang="sk">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
    <title>RAIFFEISEN IGFS</title>
    <meta charset="utf-8">
    <style>
      #raiffeisen {
        display: none;
      }
    </style>
  </head>
  <body>
    <form id="raiffeisen" action="https://rpos-t.raiffeisen.it/RFSN_CG_ADAPTERS/service" method="post">
      <input type="hidden" name="lang" value="EN">
      <input type="hidden" name="currency" value="EUR">
      <input type="hidden" name="mailparams" value="name,clientemail">
      <input type="hidden" name="forwardparams" value="name,amount">
      <input type="hidden" name="merchantid" value="<?php echo $_smarty_tpl->tpl_vars['merchantID']->value;?>
">
      <input type="hidden" name="ordernumber" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->secure_key;?>
">
      <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->last_name;?>
">
      <input type="text" name="clientemail" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->address->invoice->email;?>
">
      <input type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->total_price;?>
">
    </form>
    <?php echo '<script'; ?>
 type="text/javascript">
      function submitForm() {
        // SEND REQUEST
        document.getElementById('raiffeisen').submit();
      }

      window.onload = submitForm;
    <?php echo '</script'; ?>
>
  </body> 
</html><?php }} ?>
