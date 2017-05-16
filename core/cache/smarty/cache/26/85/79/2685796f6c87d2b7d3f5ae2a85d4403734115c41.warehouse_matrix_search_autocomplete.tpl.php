<?php /*%%SmartyHeaderCode:10471228195805dc8bab7141-83128795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2685796f6c87d2b7d3f5ae2a85d4403734115c41' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_search_autocomplete.tpl',
      1 => 1469707252,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '10471228195805dc8bab7141-83128795',
  'variables' => 
  array (
    'whAL' => 1,
    'item' => 1,
    'keywords' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5805dc8bb333e8_93627923',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805dc8bb333e8_93627923')) {function content_5805dc8bb333e8_93627923($_smarty_tpl) {?>  <?php if (is_array($_smarty_tpl->tpl_vars['whAL']->value)&&(count($_smarty_tpl->tpl_vars['whAL']->value)>0)) {?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['whAL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <?php if (is_object($_smarty_tpl->tpl_vars['item']->value->matrix)) {?>
        <a href="cpanel/store-warehouse-matrix-qty/<?php echo $_smarty_tpl->tpl_vars['item']->value->matrix->secure_key;?>
" class="btn btn-ui-ac col-lg-1 col-md-1 col-sm-12 col-xs-12" style="min-width:200px;height:189px;" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>
">
          <div class="panel panel-default">
            <div class="panel-body profile bg-info">
              <div class="profile-image">
                <?php if (is_object($_smarty_tpl->tpl_vars['item']->value->image)) {?>
                  <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->image->file_url;?>
" height="100"  alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->article_name;?>
"/>
                <?php }?>
              </div>
              <div class="profile-data">
                <div class="profile-data-name">
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->article_name_internal;?>

                </div>
              </div><!-- end profile-data -->
            </div><!-- end panel-body -->                           
          </div><!-- end panel -->
        </a><!-- end link -->
      <?php }?>
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
