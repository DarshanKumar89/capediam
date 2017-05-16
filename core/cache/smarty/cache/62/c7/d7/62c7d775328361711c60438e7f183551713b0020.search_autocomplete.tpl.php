<?php /*%%SmartyHeaderCode:590237685876362bb8cd68-49393166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c7d775328361711c60438e7f183551713b0020' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/api/search_autocomplete.tpl',
      1 => 1469707236,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '590237685876362bb8cd68-49393166',
  'variables' => 
  array (
    'articleList' => 1,
    'item' => 1,
    'keywords' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5876362bc252b6_86413024',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876362bc252b6_86413024')) {function content_5876362bc252b6_86413024($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_modifier_truncate')) include '/var/www/public/carpedmfashion.com/core/lib/smarty/plugins/modifier.truncate.php';
?>
  <?php if (is_array($_smarty_tpl->tpl_vars['articleList']->value)&&(count($_smarty_tpl->tpl_vars['articleList']->value)>0)) {?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <a href="#" onclick="return false;" class="btn btn-ui-ac col-lg-2 col-md-3 col-sm-12 col-xs-12" data-article-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_article;?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
">
        <div class="ui-ac-circle">
          <?php if (strlen($_smarty_tpl->tpl_vars['item']->value->image->file_url)>0) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" height="83"  alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
"/>
          <?php }?>
        </div>
        <div class="ui-ac-text">
          <h5>
            <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>

          </h5>
          <p>
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->description,220,'..',false,false);?>

          </p>
        </div>
      </a><!-- end link -->
    <?php } ?>
  <?php } else { ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="alert alert-info" style="float:none;width: 99%;margin: 15px 0;" role="alert">
        <strong>Your search - <?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
 - did not match any product.</strong>
      </div>
    </div><!-- end col -->
  <?php }?>
<?php }} ?>
