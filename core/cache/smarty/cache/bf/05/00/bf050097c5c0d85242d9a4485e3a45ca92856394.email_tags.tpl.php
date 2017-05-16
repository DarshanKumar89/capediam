<?php /*%%SmartyHeaderCode:176684757557dfd25af3c838-19961784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf050097c5c0d85242d9a4485e3a45ca92856394' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/email/ajax/email_tags.tpl',
      1 => 1469707244,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '176684757557dfd25af3c838-19961784',
  'variables' => 
  array (
    'emailTags' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57dfd25b036119_18057867',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd25b036119_18057867')) {function content_57dfd25b036119_18057867($_smarty_tpl) {?>            <span class="tag">{{store_name}}</span>
            <span class="tag">{{store_phone}}</span>
            <span class="tag">{{store_email}}</span>
            <span class="tag">{{store_pickup_address}}</span>
            <span class="tag">{{store_address}}</span>
            <span class="tag">{{store_opening_hours}}</span>
            <span class="tag">{{client_full_name}}</span>
            <span class="tag">{{invoice}}</span>
            <span class="tag">{{primary_email}}</span>
            <span class="tag">{{secondary_email}}</span>
    <?php }} ?>
