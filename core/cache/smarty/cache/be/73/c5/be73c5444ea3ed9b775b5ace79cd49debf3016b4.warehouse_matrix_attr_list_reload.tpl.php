<?php /*%%SmartyHeaderCode:451212072588efa5d293b31-49632749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be73c5444ea3ed9b775b5ace79cd49debf3016b4' => 
    array (
      0 => '/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_attr_list_reload.tpl',
      1 => 1469707251,
      2 => 'extends',
    ),
  ),
  'nocache_hash' => '451212072588efa5d293b31-49632749',
  'variables' => 
  array (
    'global_form_select_choose' => 1,
    'attrList' => 1,
    'item' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588efa5d2f6287_05366989',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa5d2f6287_05366989')) {function content_588efa5d2f6287_05366989($_smarty_tpl) {?>  <select id="alc" name="alc" class="form-control select" data-style="btn-info" data-live-search="true">
    <option value="0"><?php if (!empty($_smarty_tpl->tpl_vars['global_form_select_choose']->value)) {?><?php echo $_smarty_tpl->tpl_vars['global_form_select_choose']->value;?>
<?php } else { ?>Choose...<?php }?></option>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attrList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id_attribute;?>
" data-subtext="<?php echo $_smarty_tpl->tpl_vars['item']->value->total;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->attr_name;?>
</option>
    <?php } ?>
  </select>
  <script>
    $(function() {
      if($(".select").length > 0) {
        $(".select").selectpicker();

        $(".select").on("change", function () {
          if ($(this).val() == "" || null === $(this).val()) {
            if(!$(this).attr("multiple")) {
              $(this).val("").find("option").removeAttr("selected").prop("selected", false);
            }
          } else {
            $(this).find("option[value=" + $(this).val() + "]").attr("selected", true);
          }
        });
      }
    });
  </script>
<?php }} ?>
