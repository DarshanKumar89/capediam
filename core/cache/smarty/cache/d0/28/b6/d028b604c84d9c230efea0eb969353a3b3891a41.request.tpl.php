<?php /*%%SmartyHeaderCode:1228541302585b73d06c8f89-90017854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd028b604c84d9c230efea0eb969353a3b3891a41' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/app/themes/default/store/vub_pay/request.tpl',
      1 => 1471966900,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1228541302585b73d06c8f89-90017854',
  'variables' => 
  array (
    'baseUrl' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_585b73d0734ab8_15794772',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585b73d0734ab8_15794772')) {function content_585b73d0734ab8_15794772($_smarty_tpl) {?><!DOCTYPE html>
<html lang="sk">
  <head>
    <base href="http://www.carpedmfashion.com" />
    <title>VUB PAY 3D</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="extensions/cryptojs/rollups/sha512.js"></script>
    <script src="extensions/cryptojs/components/enc-base64-min.js"></script>
  </head>
  <body>
    <form id="vubPay" method="post" action="https://vub.eway2pay.com/fim/est3dgate">
      <input type="hidden" name="clientid" value="10747001" id="clientid">
      <input type="hidden" name="storekey" value="CarpeDMFashion111" id="storekey">
      <input type="hidden" name="storetype" value="3d_pay_hosting" id="storetype">
      <input type="hidden" name="rnd" value="oPwIcxj9vl" Id="rnd">
      <input type="hidden" name="oid" value="1CBDFD08CD0B7EBBF4FFE039E3CA9E0D" id="oid">
      <input type="hidden" name="amount" value="38.00" id="amount">
      <input type="hidden" name="okurl" value="http://www.carpedmfashion.com/bank/response" id="okurl">
      <input type="hidden" name="failurl" value="http://www.carpedmfashion.com/bank/response" id="failurl">
      <input type="hidden" name="trantype" value="Auth" id="trantype">
      <input type="hidden" name="currency" value="978" id="currency">
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
    <script type="text/javascript">
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
    </script>
  </body> 
</html><?php }} ?>
