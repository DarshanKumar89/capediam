<?php /*%%SmartyHeaderCode:100110895258356f5c670537-29152833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93414dd1475699ad83b1cb58c0d7d4598af8ae78' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/carts/ajax/cart_item_list.tpl',
      1 => 1469707237,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '100110895258356f5c670537-29152833',
  'variables' => 
  array (
    'data' => 0,
    'i' => 0,
    'item' => 0,
    'global_alert_info' => 0,
    'store_carts_alert_no_items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58356f5c6aed38_75839785',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58356f5c6aed38_75839785')) {function content_58356f5c6aed38_75839785($_smarty_tpl) {?>    <table class="table table-bordered table-striped table-actions" style="margin: 0;">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">IMAGE</th>
                <th class="text-left">ARTICLE NAME</th>
                <th class="text-center">QTY</th>
                <th class="text-center">PRICE PER KS</th>
                <th class="text-center">TOTAL AMOUNT</th>
            </tr>
        </thead>
        <tbody>
                            <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">
                        <img src="thumbnail/ae0227fd53c75ac774d9d6821389e2bd/auto/51" height="51" alt="INSTYLE">
                    </td>
                    <td class="text-left">
                        INSTYLE
                    </td>
                    <td class="text-center">
                        <strong>1</strong>
                    </td>
                    <td class="text-center">
                        46.00&euro;
                    </td>
                    <td class="text-center">
                        46.00&euro;
                    </td>
                </tr>
                            <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">
                        <img src="thumbnail/5863e91ad8246fa95e94ff66a40ab7d5/auto/51" height="51" alt="RIDE">
                    </td>
                    <td class="text-left">
                        RIDE
                    </td>
                    <td class="text-center">
                        <strong>1</strong>
                    </td>
                    <td class="text-center">
                        44.00&euro;
                    </td>
                    <td class="text-center">
                        44.00&euro;
                    </td>
                </tr>
                    </tbody>
    </table>
<?php }} ?>
