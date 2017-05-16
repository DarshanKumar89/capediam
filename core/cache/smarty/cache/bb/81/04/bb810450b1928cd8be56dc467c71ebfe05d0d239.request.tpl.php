<?php /*%%SmartyHeaderCode:203359102257e285f9cd5531-76396717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb810450b1928cd8be56dc467c71ebfe05d0d239' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/app/themes/default/store/raiffeisen/request.tpl',
      1 => 1473256475,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '203359102257e285f9cd5531-76396717',
  'variables' => 
  array (
    'baseUrl' => 0,
    'merchantID' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57e285f9cfd262_98956904',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e285f9cfd262_98956904')) {function content_57e285f9cfd262_98956904($_smarty_tpl) {?><!DOCTYPE html>
<html lang="sk">
  <head>
    <base href="http://www.carpedmfashion.com" />
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
      <input type="hidden" name="merchantid" value="carpedmfashion">
      <input type="hidden" name="ordernumber" value="8d451a03f90708dfa8395b6c25079c98">
      <input type="text" name="name" value="Michael Gellon">
      <input type="text" name="clientemail" value="michaelgellon@gmail.com">
      <input type="text" name="amount" value="14.00">
    </form>
    <script type="text/javascript">
      function submitForm() {
        // SEND REQUEST
        document.getElementById('raiffeisen').submit();
      }

      window.onload = submitForm;
    </script>
  </body> 
</html><?php }} ?>
