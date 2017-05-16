<?php /*%%SmartyHeaderCode:1771164003579750c04ce999-28170898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892d7dfa18f17a3485a1a169506bb562e75ef74b' => 
    array (
      0 => '/Users/henrich/Work/SlatyFork/carpedmfashion.com/core/config/../../app/themes/cpanel/router/ajax/route_class_method_list.tpl',
      1 => 1469528893,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '1771164003579750c04ce999-28170898',
  'variables' => 
  array (
    'methodList' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_579750c04ef3d9_11519985',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579750c04ef3d9_11519985')) {function content_579750c04ef3d9_11519985($_smarty_tpl) {?><select name="mth" class="form-control select" data-live-search="true" required>
            <option value="__construct">__construct</option>
            <option value="run">run</option>
            <option value="generate_sitemap">generate_sitemap</option>
            <option value="generate_thumbnail">generate_thumbnail</option>
            <option value="download_files_from_folder_form">download_files_from_folder_form</option>
            <option value="download_files_from_folder">download_files_from_folder</option>
            <option value="createAttributeValue">createAttributeValue</option>
            <option value="strip_symbols">strip_symbols</option>
            <option value="import">import</option>
            <option value="path">path</option>
            <option value="router">router</option>
            <option value="price">price</option>
            <option value="facebook">facebook</option>
    </select><?php }} ?>
