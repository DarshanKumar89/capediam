<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-01-30 09:33:32
         compiled from "/var/www/public/carpedmfashion.com/core/config/../../app/themes/cpanel/store/warehouses/ajax/warehouse_matrix_attr_v_list_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962086503588efa5c320302-82754000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
  ),
  'nocache_hash' => '962086503588efa5c320302-82754000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attrVList' => 1,
    'global_catalog_table_header_add' => 1,
    'i' => 1,
    'item' => 1,
    'global_form_select_choose' => 1,
    'global_alert_info' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_588efa5c3afa98_00082401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588efa5c3afa98_00082401')) {function content_588efa5c3afa98_00082401($_smarty_tpl) {?>
  <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php if (is_array($_smarty_tpl->tpl_vars[\'attrVList\']->value)&&(count($_smarty_tpl->tpl_vars[\'attrVList\']->value)>0)) {?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>

    <div class="table-responsive" style="margin: 0 -10px;border-top:1px solid #E5E5E5;">
      <table id="addOnAttrV" class="table table-bordered table-striped table-actions">
        <thead>
          <tr>
            <th width="30" class="text-center">#</th>
            <th class="text-center">
              NÁZOV HODNOTY
            </th>
            <th width="30" class="text-center">
              FARBA
            </th>
            <th width="100" class="text-center">
              NAVÝŠENIE
            </th>
            <th width="130" class="text-center">
              HODNOTA
            </th>
            <th width="50" class="text-center">
              <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_catalog_table_header_add\']->value)) {?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_catalog_table_header_add\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php } else { ?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
ADD<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php }?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>

            </th>
          </tr>
        </thead>
        <tbody>
          <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'i\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'attrVList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'i\']->value = $_smarty_tpl->tpl_vars[\'item\']->key;
?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>

            <tr>
              <td class="text-center">
                <input type="checkbox" name="whMAVL[<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
]['on']" value="<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_value;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
" class="ipt">
              </td>
              <td class="text-left">
                <strong>
                  <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->value;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>

                </strong>
              </td>
              <td class="text-center">
                <span class="circle" style="background: <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php if (strlen($_smarty_tpl->tpl_vars[\'item\']->value->color)>0) {?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->color;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php } else { ?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
#FFFF<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php }?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
;"><!-- --></span>
              </td>
              <td class="text-center">
                <select class="cdt-<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_value;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
" style="display: inline-block;width: 100%;">
                  <option value="0"><?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value)) {?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'global_form_select_choose\']->value;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php } else { ?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
Choose...<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php }?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
</option>
                  <option value="1">%</option>
                  <option value="2">+</option>
                </select>
              </td>
              <td class="text-right">
                <div class="form-group" style="width:100%;">
                  <input type="text" value="0" class="cdv-<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_value;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
 form-control text-right" style="min-width: 70px;font-weight: 700;" autocomplete="off">
                </div><!-- end form-group -->
              </td>
              <td>
                <button type="button" class="btn btn-success push-a" data-attr-id="<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_attribute;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
" data-attr-v-id="<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value->id_value;?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
">
                  &nbsp;&nbsp;<span class="fa fa-plus-square"></span>
                </button>
              </td>
            </tr>
          <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php } ?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>

        </tbody>
      </table>
    </div><!-- end table-responsive -->
  <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php } else { ?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>

    <div class="alert alert-warning" role="alert">
      <strong><?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'global_alert_info\']->value)) {?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php echo mb_strtoupper($_smarty_tpl->tpl_vars[\'global_alert_info\']->value, \'UTF-8\');?>
/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';
echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php } else { ?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
INFO!<?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php }?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>
</strong>
      Zvoľte si atribút, ktorého hodnoty chcete pridať.
    </div><!-- end alert -->
  <?php echo '/*%%SmartyNocache:962086503588efa5c320302-82754000%%*/<?php }?>/*/%%SmartyNocache:962086503588efa5c320302-82754000%%*/';?>

<?php }} ?>
