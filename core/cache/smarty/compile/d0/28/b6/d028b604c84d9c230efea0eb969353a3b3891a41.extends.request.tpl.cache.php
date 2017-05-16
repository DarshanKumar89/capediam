<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-22 07:33:52
         compiled from "/var/www/public/carpedmfashion.com/app/themes/default/store/vub_pay/request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1228541302585b73d06c8f89-90017854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '1228541302585b73d06c8f89-90017854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_585b73d072b5f7_85432926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585b73d072b5f7_85432926')) {function content_585b73d072b5f7_85432926($_smarty_tpl) {?><!DOCTYPE html>
<html lang="sk">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
    <title>VUB PAY 3D</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php echo '<script'; ?>
 src="extensions/cryptojs/rollups/sha512.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="extensions/cryptojs/components/enc-base64-min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <form id="vubPay" method="post" action="<?php echo $_smarty_tpl->tpl_vars['data']->value->bank_url;?>
">
      <input type="hidden" name="clientid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_client;?>
" id="clientid">
      <input type="hidden" name="storekey" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->storekey;?>
" id="storekey">
      <input type="hidden" name="storetype" value="3d_pay_hosting" id="storetype">
      <input type="hidden" name="rnd" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->rnd;?>
" Id="rnd">
      <input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->id_order;?>
" id="oid">
      <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->amount;?>
" id="amount">
      <input type="hidden" name="okurl" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->okurl;?>
" id="okurl">
      <input type="hidden" name="failurl" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->failurl;?>
" id="failurl">
      <input type="hidden" name="trantype" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->trantype;?>
" id="trantype">
      <input type="hidden" name="currency" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->currency;?>
" id="currency">
      <input type="hidden" name="lang" value="sk" id="lang">
      <input type="hidden" name="pan" value="" id="pan">
      <input type="hidden" name="Ecom_Payment_Card_ExpDate_Year" value="" id="Ecom_Payment_Card_ExpDate_Year">
      <input type="hidden" name="Ecom_Payment_Card_ExpDate_Month" value="" id="Ecom_Payment_Card_ExpDate_Month">
      <input type="hidden" name="cv2" value="" placeholder="cv2" id="cv2">
      <input type="hidden" name="encoding" value="utf-8" placeholder="encoding" id="encoding">
      <input type="hidden" name="hashAlgorithm" value="ver2" id="hashAlgorithm">  
      <input type="hidden" name="hash" value="" id="hash">  
      <input type="submit" name="commit" value="Pay" style="visibility: hidden;">
    </form>
    <?php echo '<script'; ?>
 type="text/javascript">
      function izracun_hash() {
        var hash = CryptoJS.SHA512(document.getElementById("clientid").value + "|" + document.getElementById("oid").value + "|" + document.getElementById("amount").value + "|" + document.getElementById("okurl").value + "|" + document.getElementById("failurl").value + "|" + document.getElementById("trantype").value + "||" + document.getElementById("rnd").value + "||||" + document.getElementById("currency").value + "|" + document.getElementById("storekey").value);
  
        document.getElementById("hash").value=(hash.toString(CryptoJS.enc.Base64));
      }
      
      function submitForm() {
        // INIT HASH
        izracun_hash();
        // SEND REQUEST
        document.getElementById('vubPay').submit();
      }

      window.onload = submitForm;
    <?php echo '</script'; ?>
>
  </body> 
</html><?php }} ?>
