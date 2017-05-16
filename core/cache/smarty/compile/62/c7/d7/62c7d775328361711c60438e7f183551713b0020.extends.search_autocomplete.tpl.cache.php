<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-11 14:42:03
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/api/search_autocomplete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:590237685876362bb8cd68-49393166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '590237685876362bb8cd68-49393166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleList' => 1,
    'item' => 1,
    'keywords' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5876362bc174e8_96661835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876362bc174e8_96661835')) {function content_5876362bc174e8_96661835($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_modifier_truncate\')) include \'/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.truncate.php\';
?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

  <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'articleList\']->value)&&(count($_smarty_tpl->tpl_vars[\'articleList\']->value)>0)) {?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

    <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'articleList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

      <a href="#" onclick="return false;" class="btn btn-ui-ac col-lg-2 col-md-3 col-sm-12 col-xs-12" data-article-id="<?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_article;?>
/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>
" title="<?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>
">
        <div class="ui-ac-circle">
          <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->image->file_url)>0) {?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

            <img src="<?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->image->file_url;?>
/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>
" height="83"  alt="<?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>
"/>
          <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php }?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

        </div>
        <div class="ui-ac-text">
          <h5>
            <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->article_name;?>
/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

          </h5>
          <p>
            <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars[\'item\']->value->description,220,\'..\',false,false);?>
/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

          </p>
        </div>
      </a><!-- end link -->
    <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php } ?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

  <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php } else { ?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="alert alert-info" style="float:none;width: 99%;margin: 15px 0;" role="alert">
        <strong>Your search - <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>
 - did not match any product.</strong>
      </div>
    </div><!-- end col -->
  <?php echo '/*%%SmartyNocache:590237685876362bb8cd68-49393166%%*/<?php }?>/*/%%SmartyNocache:590237685876362bb8cd68-49393166%%*/';?>

<?php }} ?>
